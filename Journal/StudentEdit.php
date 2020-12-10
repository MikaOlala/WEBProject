<?php 

	$StudID2 = filter_var(trim($_POST['student_id']),
	FILTER_SANITIZE_STRING);

	$StudentName2 = filter_var(trim($_POST['student_name']),
	FILTER_SANITIZE_STRING);

	$GroupID2 = filter_var(trim($_POST['group_idd']),
	FILTER_SANITIZE_STRING);

	$picture_URL2 = filter_var(trim($_POST['pictureURl']),
	FILTER_SANITIZE_STRING);
	
	$OmegaMail2 = filter_var(trim($_POST['mail_input']),
	FILTER_SANITIZE_STRING);

	$OmegaPmail2 = filter_var(trim($_POST['pmail_input']),
	FILTER_SANITIZE_STRING);

	$OmegaAge2 = filter_var(trim($_POST['age_input']),
	FILTER_SANITIZE_STRING);
	

	// $numberOfStudents = (int)$numberOfStudents;

	$mysql = mysqli_connect(
		'localhost',
		'root',
		'',
		'journaldb');



	$query = "UPDATE groups SET name='$StudentName2', group_id='$GroupID2' , picture='$picture_URL2' , mail='$OmegaMail2' , pmail='$OmegaPmail2' , age='$OmegaAge2' WHERE id='$StudID2' ";

	mysqli_query($mysql, $query);

	$mysql->close();


	header('Location: AdminPage.php')
	
 ?>