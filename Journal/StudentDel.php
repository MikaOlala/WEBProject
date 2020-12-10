<?php 
	
	$Id = filter_var(trim($_POST['id']),
	FILTER_SANITIZE_STRING);
	
	

	$mysql = new mysqli(
		'localhost',
		'root',
		'',
		'journaldb');

	$mysql->query("DELETE FROM students WHERE id = '$Id'");

	$mysql->close();

	header('Location: AdminPage.php')
 ?>