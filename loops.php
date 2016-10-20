<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <header>
        <nav>
                <ul>

            <?php
            function getMenu()
            {
                return require 'menu.php';
            }
            $menu = getMenu();
            foreaach ($menu as &$item):
                $title = !empty($item['title'])
                    ? "title=\"{item['title']}\""
                    : '';
            ?>

                <li>
                    <a href="<?= $item['url'] ?>"> <?= $title ?>>
                        <?= $item['name'] ?>
                    </a>
                </li>


            <?php endforeach; ?>
                </ul>
        </nav>
    </header>
</body>
</html>