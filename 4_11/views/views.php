<?php

function showLoginView()
{
    $html = '
    <h2>Login</h2>
    <form action="http://localhost/homeworks/4_11/index.php?action=login" method="POST">
    <input type="text" name="login" placeholder="Login">
    <input type="password" name="pass" placeholder="Password">
    <input type="Submit" value="Login">
    ';
    die($html);
}

function showRegisterView()
{
    $html = '
    <h2>Register</h2>
    <form action="http://localhost/homeworks/4_11/index.php?action=register" method="POST">
    <input type="text" name="login" placeholder="Login">
    <input type="password" name="pass" placeholder="Password">
    <input type="Submit" value="Register">
    ';
    die($html);
}

function showMainView(){
    $html = '<h1>I am MAIN</h1>';
    $outHTML = sprintf(getMainLayout(), $html);
    die($outHTML);
}

function showAboutView(){
    $html = '<h1>I am ABOUT</h1>';
    $outHTML = sprintf(getMainLayout(), $html);
    die($outHTML);
}

function getMainLayout(){
    $html = '
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Title</title>
    </head>
    <body>
    %s
    </body>
    </html>
    ';
    return $html;
}
