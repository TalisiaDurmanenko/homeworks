<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 2016-11-23
 * Time: 13:46
 */
session_start();
$sessionID = session_id();

if(!empty($_POST)){
    $users = require 'users.php';

    $username = !empty($_POST['username'])
        ? $_POST['username'] : null;
    $password = !empty($_POST['password'])
        ? $_POST['password'] : null;
}

$pageTitle = 'Sign in';

$contents = <<<HTML
<p>Please, enter your username and password</p>

<form action="" method="post">
    <input type="hidden" value="[$sessionID}">
    <label>Username<span class="required">*</span></label>
    <input type="text" name="username">
    <br>
    <label>Password<span class="required">*</span></label>
    <input type="text" name="password">
    <br>
    <input type="submit" value="Sign in">
</form>
HTML;
?>