<?php
    include 'data.php';
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Массивы</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <table>
        <tr>
            <td></td>
            <td>
                Математика
            </td>
            <td>
                ОБЖ
            </td>
            <td>
                Физика
            </td>
        </tr>
        <?php
            get_data();
        ?>
    </table>
</body>
</html>