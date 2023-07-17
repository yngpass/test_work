<?php
    require 'vendor/db.php';
    // выборка комментариев
    $sql = 'SELECT * FROM `comments`';
    $stmt = $pdo->query($sql);
    $comments = [];
    $i = 0;
    // внесение данных в массив
    foreach($stmt as $val) {
        $comments[$i]['id'] = $val['id'];
        $comments[$i]['name'] = $val['name'];
        $comments[$i]['comment'] = $val['comment'];
        $i++;
    }
?>