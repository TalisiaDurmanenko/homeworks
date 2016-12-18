<?php

require_once('session/sessions.php');
require_once('views/views.php');
require_once('core/core.php');

$action = isset($_REQUEST['action']) ? ($_REQUEST['action']) : 'main';
if(!isset($_SESSION['user']['login']) && $action != 'login' && $action != 'register') {
    header('Location: index.php?action=login');
}

switch($action) {
    case 'login':

        if(empty($_POST)) {
            showLoginView();

        } else {
           loginUser();
        }
        break;
    case 'register';
        if(empty($_POST)) {
            showRegisterView();
        } else {
            registerUser();
        }
        break;
    case 'logout':
        logout();
        break;
    case 'main':
        showMainView();
        break;
    case 'about':
        showAboutView();
        break;
    default:
        die('Unknown operation');
}
