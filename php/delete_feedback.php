<?php
    require_once __DIR__ . './connection.php';
    $idFeedback = htmlentities($connection->escapeString($_GET['id_feedback']));

    $connection->queryExecute("DELETE FROM `feedbacks` WHERE `id_feedback` = '$idFeedback'");

    header('Location: ../admin.php');
?>
