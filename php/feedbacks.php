<?php

	require_once __DIR__ . './connection.php';

	$query = $connection->queryAll("SELECT * FROM `feedbacks`");

	foreach ($query as $row){
		echo '
			<div class="inner-news-archive">
				<p class="name-request">' . $row['fio_feedback'] . '</p>
				<p class="pre-request">' . $row['description_feedback'] . '</p>
				<p class="date-request">' . $row['date_feedback'] . '</p>
				<p class="phone-number-request">' . $row['phone_feedback'] . '</p>
				<p class="email-request">' . $row['email_feedback'] . '</p>
				<p class="status-request">' . $row['status_feedback'] . '</p>	
				<a href="./php/delete_feedback.php?id_feedback=' . $row['id_feedback'] . '">
					<img src="../img/icons/admin/trash.png" class="delete-news">
				</a>
			</div>
		';
	}
    
?>