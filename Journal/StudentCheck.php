<?php 
	
	$StudID = filter_var(trim($_POST['student_id']),
	FILTER_SANITIZE_STRING);

	$StudentName = filter_var(trim($_POST['student_name']),
	FILTER_SANITIZE_STRING);

	$GroupID = filter_var(trim($_POST['group_idd']),
	FILTER_SANITIZE_STRING);

	$picture_URL = filter_var(trim($_POST['pictureURl']),
	FILTER_SANITIZE_STRING);
	
	$OmegaMail = filter_var(trim($_POST['mail_input']),
	FILTER_SANITIZE_STRING);

	$OmegaPmail = filter_var(trim($_POST['pmail_input']),
	FILTER_SANITIZE_STRING);

	$OmegaAge = filter_var(trim($_POST['age_input']),
	FILTER_SANITIZE_STRING);
	
	


	// $NumberOfStudents = (int)$NumberOfStudents;

	$mysql = new mysqli(
		'localhost',
		'root',
		'',
		'journaldb');

	$mysql->query("INSERT INTO `students` (`id`,`name`, `group_id`, 
											`picture`, `mail`, 
											`pmail`, `age`) 
						VALUES('$StudID', '$StudentName', '$GroupID', '$picture_URL','$OmegaMail', '$OmegaPmail', '$OmegaAge')");

	$mysql->close();

	header('Location: StudentAddPage.php')
 ?>