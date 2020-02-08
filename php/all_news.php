<?php

    require_once __DIR__ . './connection.php';

    $allNews = $connection->queryAll("SELECT * FROM `news` WHERE `status_news` = 'active'");

    foreach($allNews as $rowNews )
    {
        $idNews = $rowNews['id_news'];
        $photoNews = $rowNews['photo_news'];
        $dateNews = $rowNews['date_news'];
        $titleNews = $rowNews['title_news'];
        echo '
        <a href="" style="background-image: url(./news_images/'.$idNews.'/'.$photoNews.')"> 
            <p> '.$titleNews.' </p>
            <p class=nososv_date">'.$dateNews.'</p>
        </a>
        ';
    }

?>