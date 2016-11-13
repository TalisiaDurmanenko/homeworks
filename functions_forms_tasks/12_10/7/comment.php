<?php
/*
 This a handler fot comments form.
 */

require 'common.php';

if(empty($_POST)){
    return('7_l.php');
}

$body = !empty($_POST['comment']) ? $_POST['comment'] : null;
$username = !empty($_POST['username']) ? $_POST['username'] : null;
$email = !empty($_POST['email']) ? $_POST['email'] : null;
$date = date('Y-m-d H:i');

if(!$body || !$username || !$email) {
    redirect('7_l.php');
}

