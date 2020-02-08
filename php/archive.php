<?php

	require_once __DIR__ . './connection.php';

	$query = $connection->queryAll("SELECT * FROM `news`");

	foreach ($query as $row)
	{
		echo '
			<div class="inner-news-archive">
				<p class="news-title">' . $row['title_news'] . '</p>
				<p class="pre-text">' . $row['text_news'] . '</p>
				<p class="publish-date">' . $row['date_news'] . '</p>
				<a href="php/delete_news_from_archive.php?id_news='.$row['id_news'].'">
					<img src="../img/icons/admin/trash.png" class="delete-news">
				</a>
			</div>
		';
	}
    
?>