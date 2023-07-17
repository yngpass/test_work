<?php
    include 'vendor/select.php';
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <!-- форма создания коментария -->
    <form action="vendor/insert.php" method="post">
        <div class="pad">
            <label for="name">Ваше имя:</label>
            <br>
            <input type="text" name="name">
        </div>

        <div class="pad">
            <label for="comment">Ваш комментарий:</label>
            <br>
            <textarea name="comment" cols="42" rows="4"></textarea>
        </div>

        <button type="submit">Отправить</button>
    </form>
    <!--список комментариев  -->
    <div class="container">
        <?php
            foreach($comments as $val) {
                echo '
                <div class="comment">
                    <h4>
                        '.$val['id'].'. '.$val['name'].':
                    </h4>
                    <p>
                        '.$val['comment'].'
                    </p>
                </div>
                ';
            }
        ?>
    </div>
</body>
</html>