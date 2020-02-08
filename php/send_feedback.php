<?php
    require_once __DIR__ . './connection.php';

    $fioFeedback = htmlentities($connection->escapeString($_REQUEST['fio_feedback']));
    // $phoneFeedback = htmlentities($connection->escapeString($_REQUEST['phone_feedback']));
    $descriptionFeedback = htmlentities($connection->escapeString($_REQUEST['description_feedback']));
    $emailFeedback = htmlentities($connection->escapeString($_REQUEST['email_feedback']));
    $dateFeedback = date('Y-m-d H:i');
    
    $response = $connection->queryExecute("INSERT INTO `feedbacks` VALUES (NULL, '$dateFeedback', '$fioFeedback', NULL, '$emailFeedback', '$descriptionFeedback', 'active')");

    if ($response)
    {
        echo 'Ваш запрос принят';
    }
    else
    {
        echo 'Что-то пошло не так, попробуйте ещё раз';
    }
?>