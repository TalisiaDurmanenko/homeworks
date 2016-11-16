<?php
/*
 This a handler fot comments form.
 */

require 'common.php';

if(empty($_POST)){
    header('Location: index.php');
}

$body = !empty($_POST['comment']) ? $_POST['comment'] : null;
$username = !empty($_POST['username']) ? $_POST['username'] : null;
$email = !empty($_POST['email']) ? $_POST['email'] : null;
$date = date('Y-m-d H:i');

if(!$body || !$username || !$email) {
    header('Location: index.php');
}

$body = processCommentBody($body);

$data = compact(['username','email','date','body']);
$storageData = prepareDataForStorage($data);
saveToFile($storageData);
header('Location: index.php');



