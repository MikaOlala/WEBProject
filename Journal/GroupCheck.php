<?php 
	
	$GroupName = filter_var(trim($_POST['group_name']),
	FILTER_SANITIZE_STRING);

	$NumberOfStudents = filter_var(trim($_POST['Number_of_students']),
	FILTER_SANITIZE_STRING);




	// $NumberOfStudents = (int)$NumberOfStudents;

	$mysql = new mysqli(
		'localhost',
		'root',
		'',
		'journaldb');

	$mysql->query("INSERT INTO `groups` (`name`, `n_of_students`) VALUES('$GroupName', '$NumberOfStudents')");

	$mysql->close();

	header('Location: GroupAddPage.php')
 ?>