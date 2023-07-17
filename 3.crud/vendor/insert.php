<?php
    require 'db.php';
    // добавление комментариев в БД
    $sql = 'INSERT INTO `comments` VALUES (NULL, ?, ?)';
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        $_POST['name'],
        $_POST['comment']
    ]);
    header('Location: ../index.php'); 
?>