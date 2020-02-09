<?php
	require_once __DIR__ . './connection.php';

	$allFeedbacks = $connection->queryAll("SELECT * FROM `feedbacks`");

	foreach ($allFeedbacks as $feedback){
		echo '
			<div class="inner-news-archive">
				<p class="name-request">' . $feedback['fio_feedback'] . '</p>
				<p class="pre-request">' . $feedback['description_feedback'] . '</p>
				<p class="date-request">' . $feedback['date_feedback'] . '</p>
				<p class="phone-number-request">' . $feedback['phone_feedback'] . '</p>
				<p class="email-request">' . $feedback['email_feedback'] . '</p>
				<p class="status-request">' . $feedback['status_feedback'] . '</p>	
				<a href="./php/delete_feedback.php?id_feedback=' . $feedback['id_feedback'] . '">
					<img src="../img/icons/admin/trash.png" class="delete-news">
				</a>
			</div>
		';
	}
    
?>