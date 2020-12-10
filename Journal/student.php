<!DOCTYPE html>
<html>
<?php
	require_once 'generalMain.php';
?>
	<div class="container">
  		<div class="col-12">
  			<h2 class="mb-4">Student's academic performance</h2>
  			<h2 class="mb-4">
			<?php
				$id = $_GET['id'];

				$students = mysqli_query($connect, "SELECT * FROM students WHERE group_id = '$adviserGroup' ");
  				$students = mysqli_fetch_all($students);

  				# checking if is it adviser's student
  				$count = 0;
  				foreach($students as $s) {
  					if($s[0]==$id) {
  						$count++;
  						break;
  					}
  				}
  				if($count==0)
  					header("Location: main.php");


				$student = mysqli_query($connect, "SELECT s.id, s.name, g.name, s.picture, s.mail, s.pmail, s.age FROM students s, groups g WHERE s.group_id = g.id AND s.id = '$id' ");
				$student = mysqli_fetch_all($student);
			?>
			<div class="jumbotron jumbotron-fluid">
			  <div class="container">
			    <div class="row"> 
			      <img class="mx-4 rounded float-left" src=<?= $student[0][3] ?>>
			      <div class="my-auto">
			      	<p class="p-s">Name: <?= $student[0][1] ?> - <?= $student[0][0] ?> </p>
			      	<p class="lead">Group: <?= $student[0][2] ?> </p>
			      	<p class="lead">Age: <?= $student[0][6] ?> </p>
			      	<p class="lead">Email: <?= $student[0][4] ?> </p>
			      	<p class="lead">Parent's Email: <?= $student[0][5] ?> </p>
			      </div>
		  		</div>
			  </div>
			</div>

			<?php
				$subject = mysqli_query($connect, "SELECT id, subject_id, mark, lab_name, deadline FROM marks WHERE student_id = '$id' AND subject_id = 1 ");
				$subject = mysqli_fetch_all($subject);
			?>

  			<h2>Java</h2>
  			<table class="table table-bordered">
			    <tr class="text-center bg-tr">
			      <th scope="col">Task</th>
			      <th scope="col">Mark</th>
			      <th scope="col">Deadline</th>
			    </tr>
			    <?php
			        foreach ($subject as $s){
			        echo "<tr><td>{$s[3]}</td>
			              <td>{$s[2]}</td>
			              <td>{$s[4]}</td></tr>";
			    	}
			    ?>
			</table>

			<?php
				$subject = mysqli_query($connect, "SELECT id, subject_id, mark, lab_name, deadline FROM marks WHERE student_id = '$id' AND subject_id = 2 ");
				$subject = mysqli_fetch_all($subject);
			?>

			<h2 class="mt-4">Python</h2>
  			<table class="table table-bordered">
			    <tr class="text-center bg-tr">
			      <th scope="col">Task</th>
			      <th scope="col">Mark</th>
			      <th scope="col">Deadline</th>
			    </tr>
			    <?php
					foreach ($subject as $s){
			        echo "<tr><td>{$s[3]}</td>
			              <td>{$s[2]}</td>
			              <td>{$s[4]}</td></tr>";
			    	}
			    ?>
			</table>

			<?php
				$subject = mysqli_query($connect, "SELECT id, subject_id, mark, lab_name, deadline FROM marks WHERE student_id = '$id' AND subject_id = 3 ");
				$subject = mysqli_fetch_all($subject);
			?>

			<h2 class="mt-4">C++</h2>
  			<table class="table table-bordered">
			    <tr class="text-center bg-tr">
			      <th scope="col">Task</th>
			      <th scope="col">Mark</th>
			      <th scope="col">Deadline</th>
			    </tr>
			    <?php
			        foreach ($subject as $s){
			        echo "<tr><td>{$s[3]}</td>
			              <td>{$s[2]}</td>
			              <td>{$s[4]}</td></tr>";
			    	}
			    ?>
			</table>

			<?php
				$subject = mysqli_query($connect, "SELECT id, subject_id, mark, lab_name, deadline FROM marks WHERE student_id = '$id' AND subject_id = 4 ");
				$subject = mysqli_fetch_all($subject);
			?>

			<h2 class="mt-4">WEB</h2>
  			<table class="table table-bordered">
			    <tr class="text-center bg-tr">
			      <th scope="col">Task</th>
			      <th scope="col">Mark</th>
			      <th scope="col">Deadline</th>
			    </tr>
			    <?php
			        foreach ($subject as $s){
			        echo "<tr><td>{$s[3]}</td>
			              <td>{$s[2]}</td>
			              <td>{$s[4]}</td></tr>";
			    	}
			    ?>
			</table>

			<?php
				$subject = mysqli_query($connect, "SELECT id, subject_id, mark, lab_name, deadline FROM marks WHERE student_id = '$id' AND subject_id = 5 ");
				$subject = mysqli_fetch_all($subject);
			?>

			<h2 class="mt-4">Kazakh</h2>
  			<table class="table table-bordered">
			    <tr class="text-center bg-tr">
			      <th scope="col">Task</th>
			      <th scope="col">Mark</th>
			      <th scope="col">Deadline</th>
			    </tr>
			    <?php
			        foreach ($subject as $s){
			        echo "<tr><td>{$s[3]}</td>
			              <td>{$s[2]}</td>
			              <td>{$s[4]}</td></tr>";
			    	}
			    ?>
			</table>



		</div>
	</div>
</body>
</html>