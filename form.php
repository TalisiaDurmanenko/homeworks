
<!-- Создать форму с полями username, email, message.
Сериализовать данные, полученные при отправке формы и вывести полученную строку на экран. -->

<form action="index.php" method="post">
    Enter username <input type="text" name="username"/><br>
    Enter email <input type="text" name="email"/><br>
    Enter message <input type="text" name="message"/><br>
    <input type="submit"/><br>
</form>
<?php
// print_r($_POST);
$ser = serialize($_POST);
print_r($ser);
echo '<br>';
$unser = unserialize($ser);
print_r($unser);
