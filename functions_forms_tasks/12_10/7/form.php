

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Glossary edition form</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
</head>
<body>

<form action = "" method="POST">
    <textarea rows = "20" cols = "100" name="text"><?php
        if ($_POST) {
            file_put_contents("badwords.txt",$_POST['text']);
            header ("Location: form.php");
            exit;
        }
        $text = htmlspecialchars(file_get_contents("badwords.txt"));

        echo $text
        ?></textarea>
    <input type="submit">
</form>

</body>
</html>