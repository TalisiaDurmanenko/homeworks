<!DOCTYPE html>
<html lang = "en">
<head>
    <meta charset="UTF-8">
    <title>Задачи по функциям и формам</title>
</head>
<body>
Оберіть фотографію
<form action="test.php" method = "post" enctype="multipart/form-data">
    <input type="file" name="pictires[]" />
    <input type="submit" value="Завантажити">
</form>
<?php

//$uploaddir = 'C:/xampp/tmp/';
//$uploadfile = $uploaddir . basename($_FILES['file']['name']);

echo '<pre>';
// Проверяем загружен ли файл
/*if(is_uploaded_file($_FILES["filename"]["tmp_name"]))
{
    // Если файл загружен успешно, перемещаем его
    // из временной директории в конечную
    move_uploaded_file($_FILES["filename"]["tmp_name"], "/path/to/file/".$_FILES["filename"]["name"]);
} else {
    echo("Ошибка загрузки файла");
}*/
print_r($_FILES);

print "</pre>";
?>

</body>
</html>