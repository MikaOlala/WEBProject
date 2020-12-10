<?php 
	
	$Id = filter_var(trim($_POST['id']),
	FILTER_SANITIZE_STRING);
	
	

	$mysql = new mysqli(
		'localhost',
		'root',
		'',
		'journaldb');

	$mysql->query("DELETE FROM groups WHERE id = '$Id'");

	$mysql->close();

	header('Location: AdminPage.php')
 ?>