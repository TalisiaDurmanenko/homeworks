

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
    <div class="row">
        <div class = "col-md-8">
            <?php
            require 'common.php';

            $comments = getComments();
            if(!empty($comments)) {
                echo '<ol>';
                foreach ($comments as $key => &$entry):
                    ?>
                    <li>
                    <div class="panel panel-info">
                            <div class="panel-heading">
                                <h3 class="panel-title">

                                    Date: <?= $entry['date'] ?>
                                    User: <?= prepareOutput($entry['username']) ?>
                                    E-mail: <?= prepareOutput($entry['email']) ?><br>
                                </h3>
                            </div>
                            <div class="panel-body">
                                Comment: <?= prepareOutput($entry['body']) ?><br>

                            </div>
                    </li>

                    <?php
                endforeach;
                unset($entry); // якщо змінна була передана за посиланням, після foreach її треба знищити
                echo '</ol>';

            } else {
                echo "<h3>No comments have been added yet.</h3>";
            }


            ?>
        </div>
    </div>
</section>
<section>
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-10">
            <form class="form-inline" action="comment.php" method="post">
                    <label for="comment.php">Comment body</label><br>
                    <textarea name="comment" rows="8" cols="80" required="true"></textarea>
                    <br><br>
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" required="true">
                </div>
                <div class="form-group">
                    <label for="email">E-mail</label>
                    <input type="email" name="email" required="true">
                </div>
                    <input type="submit" value="Send" class="btn btn-default">

            </form>
        </div>

    </div>


</section>

</body>
</html>