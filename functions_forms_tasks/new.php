

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Задачи по функциям и формам</title>
</head>
<body>
<form action="" method="post">
    <input type="text" name="name"/><br/>
    <input type="submit" value="Отправить"/>
</form>
<?php
print_r($_POST);
print_r($_REQUEST);


?>
<form action="" method = "post" enctype="multipart/form-data">
    <input type="file" name="upload" multiple>
    <br>
    <input type="submit" value="Завантажити">
</form>

<?php
print_r($_FILES);
print_r($_REQUEST);


?>
</body>
</html>