<?php
    SESSION_START();

    require_once './connection.php';

    $login = htmlentities($connection->escapeString($_POST['login']));
    $password = htmlentities($connection->escapeString($_POST['password']));

    $query = $connection->query("SELECT `login`, `password` FROM `authorization` WHERE `login` = '$login' AND `password` = '$password'");

    if ($query)
    {
        $_SESSION['is_admin'] = 1;
        ?>
        <meta http-equiv="refresh" content="0;../admin.php">
        <?php 
    }
    else
    {
        echo "Такого пользователя не найдено";
    }
?>