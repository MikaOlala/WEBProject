<?php 

	$advvv_id = filter_var(trim($_POST['advv_id']),
	FILTER_SANITIZE_STRING);
	
	$adviserName = filter_var(trim($_POST['adviser_name']),
	FILTER_SANITIZE_STRING);

	$advLogin = filter_var(trim($_POST['adv_login']),
	FILTER_SANITIZE_STRING);

	$advPas = filter_var(trim($_POST['adv_pas']),
	FILTER_SANITIZE_STRING);

	$groupID = filter_var(trim($_POST['group_id']),
	FILTER_SANITIZE_STRING);

	// $numberOfStudents = (int)$numberOfStudents;

	$mysql = mysqli_connect(
		'localhost',
		'root',
		'',
		'journaldb');



	$query = "UPDATE advisers SET name='$adviserName', login='$advLogin', password='$advPas', group_id='$groupID' WHERE id='$advvv_id' ";

	mysqli_query($mysql, $query);

	$mysql->close();

	header('Location: AdminPage.php')
	
 ?>