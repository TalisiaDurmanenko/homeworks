<!DOCTYPE html>
<html lang ="en">
<head>
    <meta charset="UTF-8">
    <title>Task 6</title>
</head>
<body>
    <h1>Gallery</h1>
    Оберіть фотографію
    <form action="" method = "post" enctype="multipart/form-data">
        <input type="file" name="upload[]" multiple>
        <br>
        <input type="submit" value="Завантажити">
    </form>
    <table>
        <tbody>
            <?php renderGallery('gallery'); ?>
        </tbody>
    </table>
    <pre>
<?php
/*Создать страницу, на которой можно загрузить несколько фотографий в галерею.
Все загруженные фото должны помещаться в папку gallery и выводиться на странице в виде таблицы.*/
    $galleryDir = 'gallery';

    $allowedMimes = [
        'image/png',
        'image/jpg',
        'image/gif',
    ];

    if(!empty($_FILES)){
        $files = [];
        $uploadData = $_FILES['upload'];
        foreach($uploadData['name'] as $key => $name) {
            $tmpName = $uploadData['tmp_name'][$key];
            $info = new finfo(FILEINFO_MIME_TYPE);
            $mime = $info->file($tmpName);
            $extension = pathinfo($name, PATHINFO_EXTENSION);


            if(!in_array($mime, $allowedMimes)){
                continue;
            }

            $files[] = [
                'tmpName' => $tmpName,
                'destination' => md5_file($tmpName) . ".{$extension}
            ];
        }

        saveImageIntoGallery($files);
    }


    function renderGallery($galleryDir){

        if(!is_dir($galleryDir)) {
            echo '<tr><td> No imagers to render </td></tr>';
            return;
        }
        chdir($galleryDir);
        $images = glob('*.jpg');
        var_dump($images);
    }

    function saveImageIntoGallery(array $images){
        global $galleryDir;
        if(!is_dir($galleryDir)){
            mkdir($galleryDir);
        }

        chdir($galleryDir);
        foreach ($images as &$data){
            move_uploaded_file($data['tmpName'], $data['destination']);
            }
    }