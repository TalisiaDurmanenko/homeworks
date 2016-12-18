<?php

const USERS_FILE = 'storage/users.txt';

function registerUser() {
    $login = $_REQUEST['login'] ? $_REQUEST['login'] : null;
    $pass = $_REQUEST['pass'] ? $_REQUEST['pass'] : null;

    if (empty($login) || empty($pass)){
        die('No data provided');
    }

    $arr = [
        'login' => $login,
        'pass' => $pass
    ];

    if(file_exists(USERS_FILE)) {
        $json = file_get_contents(USERS_FILE);
        $data = json_decode($json, true);
    }

    $data[] = $arr;
    $json = json_encode($data);
    file_put_contents(USERS_FILE, $json);
    header('Location: index.php?action=login');
    return true;
}

function loginUser(){
    $login = isset($_REQUEST{'login'}) ? ($_REQUEST['login']) : null;
    $pass = isset($_REQUEST['pass']) ? ($_REQUEST['pass']) : null;

    $json = file_get_contents(USERS_FILE);
    $data = json_decode($json, true);
    foreach($data as $index => $item){
        if($item['login'] == $login && $item['pass'] == $pass){
            $_SESSION['user']['login'] = $item['login'];
            $_SESSION['user']['id'] = $index;
            die('Everything is ok');
        }
    }
    die('I did not find');
}

function logout(){
    unset($_SESSION['user']);
}

