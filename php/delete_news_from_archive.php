<?php
    require_once __DIR__ . './connection.php';

    $idNews = htmlentities($connection->escapeString($_GET['id_news']));
    $imagePathDatabase = $connection->query("SELECT `photo_news` FROM `news` WHERE `id_news` = '$idNews'")['photo_news'];

    $dirPath = __DIR__ . '/../news_images/' . $idNews;
    $imagePath = $dirPath . '/' . $imagePathDatabase;

    unlink($imagePath);
    rmdir($dirPath);

    $connection->queryExecute("DELETE FROM `news` WHERE `id_news` = '$idNews'");

    header('Location: ../admin.php');
?>
