<?php
	require_once __DIR__ . './connection.php';

	$allNews = $connection->queryAll("SELECT * FROM `news`");

	foreach ($allNews as $news)
	{
		echo '
			<div class="inner-news-archive">
				<p class="news-title">' . $news['title_news'] . '</p>
				<p class="pre-text">' . $news['text_news'] . '</p>
				<p class="publish-date">' . $news['date_news'] . '</p>
				<a href="php/delete_news_from_archive.php?id_news=' . $news['id_news'] . '">
					<img src="../img/icons/admin/trash.png" class="delete-news">
				</a>
			</div>
		';
	}
    
?>