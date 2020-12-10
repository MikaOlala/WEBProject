<!DOCTYPE html>
<html>

<?php
	require_once '../general.php';

	$id = $_GET['id'];
	$student = mysqli_query($connect, "SELECT * FROM student WHERE id = '$id'");
	$student = mysqli_fetch_assoc($student);
?>

<div class="container">
	<div class="col-6 offset-3">
		<h2 class="text-center my-4">Update Student</h2>
		<form action="../post/update.php" method="post">
		    <input hidden type="text" class="form-control" name="id" value="<?= $student['id'] ?>">
	        <div class="form-group">
		        <p>Name: </p> 
		        <input required type="text" class="form-control" name="name" value="<?= $student['name'] ?>">
	      	</div>
	      	<div class="form-group">
		        <p>Surname: </p> 
		        <input required type="text" class="form-control" name="surname" value="<?= $student['surname'] ?>">
	      	</div>
	      	<div class="form-group">
		        <p>Age: </p> 
		        <input required type="text" class="form-control" name="age" value="<?= $student['age'] ?>">
	      	</div>
	      	<div class="form-group">
	      		<p>Gender: </p> 
		        <select class="form-control" name="gender">
		        	<option value="female" selected="<?= ($student['gender']=='female') == true ?>">female</option>
		        	<option value="male" selected="<?= ($student['gender']=='male') == true ?>">male</option>
		        </select>
	      	</div>
	      	<div class="form-group">
		        <p>Telephone: </p> 
		        <input required type="text" class="form-control" name="telephone" value="<?= $student['telephone'] ?>">
	      	</div>
	      	<div class="form-group">
		        <p>Group: </p> 
		        <input required type="text" class="form-control" name="group" value="<?= $student['group_id'] ?>">
	      	</div>
	        <button class="btn btn-danger" name="act" value="delete">Delete</button>
	        <button class="btn btn-primary float-right" name="act" value="update">Update</button>
	  	</form>
	</div>
</div>

</body>
</html>