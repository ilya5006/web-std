<?php
    require_once __DIR__ . './connection.php';
    
    $idNews = htmlentities($connection->escapeString($_GET['id_news']));

    $connection->queryExecute("UPDATE `news` SET `status_news` = 'archive' WHERE `news`.`id_news` = '$idNews'");
?>
