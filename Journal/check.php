<?php 
	
	$adviserName = filter_var(trim($_POST['adviser_name']),
	FILTER_SANITIZE_STRING);

	$adviserLogin = filter_var(trim($_POST['adviser_login']),
	FILTER_SANITIZE_STRING);

	$adviserPass = filter_var(trim($_POST['adviser_pas']),
	FILTER_SANITIZE_STRING);
	
	$groupID = filter_var(trim($_POST['group_id']),
	FILTER_SANITIZE_STRING);


	// $NumberOfStudents = (int)$NumberOfStudents;

	$mysql = new mysqli(
		'localhost',
		'root',
		'',
		'journaldb');

	$mysql->query("INSERT INTO `advisers` (`name`, `login`, `password`,`group_id`) VALUES('$adviserName', '$adviserLogin', '$adviserPass', '$groupID')");

	$mysql->close();

	header('Location: addPage.php')
 ?>