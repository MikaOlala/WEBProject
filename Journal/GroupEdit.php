<?php 

	$groupID = filter_var(trim($_POST['group_id']),
	FILTER_SANITIZE_STRING);

	$GroupName = filter_var(trim($_POST['group_name']),
	FILTER_SANITIZE_STRING);

	$NumberOfStudents = filter_var(trim($_POST['Number_of_students']),
	FILTER_SANITIZE_STRING);

	// $numberOfStudents = (int)$numberOfStudents;

	$mysql = mysqli_connect(
		'localhost',
		'root',
		'',
		'journaldb');



	$query = "UPDATE groups SET name='$GroupName', n_of_students='$NumberOfStudents' WHERE id='$groupID' ";

	mysqli_query($mysql, $query);

	$mysql->close();


	header('Location: AdminPage.php')
	
 ?>