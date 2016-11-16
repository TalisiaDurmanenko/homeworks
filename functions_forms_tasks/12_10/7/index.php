

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Задачи по функциям и формам</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
</head>
<body>
<section>
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
</section>
<section></section>
<?php
require 'common.php';

$comments = getComments();
if(!empty($comments)) {
    echo '<ol>';
    foreach ($comments as $key => &$entry):
?>
    <li>
        Date: <?= $entry['date'] ?><br>
        User: <?= prepareOutput($entry['username']) ?><br>
        E-mail: <?= prepareOutput($entry['email']) ?><br>
        Comment: <?= prepareOutput($entry['body']) ?><br>
    </li>

<?php
    endforeach;
    unset($entry); // якщо змінна була передана за посиланням, після foreach її треба знищити
    echo '</ol>';

} else {
    echo "<h3>No comments have been added yet.</h3>";
}


?>
</section>
</body>
</html>