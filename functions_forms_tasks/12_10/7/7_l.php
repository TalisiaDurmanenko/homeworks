

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Задачи по функциям и формам</title>
</head>
<body>
<form action="comment.php" method="post">
    <label for="comment.php">Comment body</label><br>
    <textarea name="comment" rows="8" cols="40" required="true"></textarea>
    <br><br>
    <label for="username">Username</label>
    <input type="text" name="username" id="username" required="true">
    <br><br>
    <label for="email">E-mail</label>
    <input type="email" name="email" required="true">
    <br><br>
    <input type="submit" value="Send">
</form>
<?php

?>
</body>
</html>