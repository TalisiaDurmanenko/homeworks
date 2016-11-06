<!DOCTYPE html>
<html lang = "en">
<head>
    <meta charset="UTF-8">
    <title>Задачи по функциям и формам</title>
</head>
<body>
Оберіть фотографію
<form action="6.php" method = "post" enctype="multipart/form-data">
    <input type="file" name="pictires[]" />
    <input type="submit" value="Завантажити">
</form>
<?php
/*Создать страницу, на которой можно загрузить несколько фотографий в галерею.
Все загруженные фото должны помещаться в папку gallery и выводиться на странице в виде таблицы.*/

$pictures = $_FILES;
foreach ($pictures as $picture) {
    $search = file_get_contents($picture);
    echo $search;
}

?>
</body>
</html>