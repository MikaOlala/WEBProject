<!DOCTYPE html>
<html>
<?php
	require_once 'generalMain.php';
?>
	<div class="container">
  		<div class="col-12">
  			<h2 class="mb-4">
  				<?php
  					echo $adviser[0][1] .' - your group - ' .$adviser[0][4];
  				?>
  			</h2>

  			<table class="table table-bordered">
			  <thead class="text-center">
			    <tr>
			      <th scope="col">Student</th>
			      <th scope="col">Java</th>
			      <th scope="col">Python</th>
			      <th scope="col">C++</th>
			      <th scope="col">WEB</th>
			      <th scope="col">Kazakh</th>
			    </tr>
			  </thead>
			  <tbody>
			  	<?php
			  		$students = mysqli_query($connect, "SELECT * FROM students WHERE group_id = '$adviserGroup' ");
  					$students = mysqli_fetch_all($students);

			  		foreach ($students as $s) {
			  			$id = $s[0];
		  		?>
		  				<tr>
					    <th class="bg-th"><a href="student.php?id=<?=$s[0]?> " id="id">
						    <div class="row"> 
						      <img class="mx-4 s-img rounded" src=<?= $s[3] ?>>
						      <div class="my-auto">
						      	<p class="p-s">Name: <?= $s[1] ?> </p>
						      	<p class="lead">ID: <?= $s[0] ?> </p>
						      	<p class="lead">Age: <?= $s[6] ?> </p>
						      </div>
					  		</div>
					  		</a>
					  	</th>
				<?php
						$marks = array();
				  		$java = mysqli_query($connect, "SELECT student_id, subject_id, round(avg(mark), 1) FROM marks WHERE student_id = '$id' AND subject_id = 1 ");
						$java = mysqli_fetch_all($java);

						$python = mysqli_query($connect, "SELECT student_id, subject_id, round(avg(mark), 1) FROM marks WHERE student_id = '$id' AND subject_id = 2 ");
						$python = mysqli_fetch_all($python);

						$c = mysqli_query($connect, "SELECT student_id, subject_id, round(avg(mark), 1) FROM marks WHERE student_id = '$id' AND subject_id = 3 ");
						$c = mysqli_fetch_all($c);

						$web = mysqli_query($connect, "SELECT student_id, subject_id, round(avg(mark), 1) FROM marks WHERE student_id = '$id' AND subject_id = 4 ");
						$web = mysqli_fetch_all($web);

						$kazakh = mysqli_query($connect, "SELECT student_id, subject_id, round(avg(mark), 1) FROM marks WHERE student_id = '$id' AND subject_id = 5 ");
						$kazakh = mysqli_fetch_all($kazakh);

						$marks = array_merge($java, $python, $c, $web, $kazakh);

				  		foreach ($marks as $m) {
				?>
			  				<td <?php if($m[2] <= 50) { ?> class="red" <?php } ?>>
			  					<?php 
			  						if($m[1] == 1)
			  							echo $m[2];
			  						if($m[1] == 2)
			  							echo $m[2];
			  						if($m[1] == 3)
			  							echo $m[2];
			  						if($m[1] == 4)
			  							echo $m[2];
			  						if($m[1] == 5)
			  							echo $m[2];
			  					?>
			  						
			  				</td>
				<?php
				  		}
				  	}
				?>
						</tr>
			  </tbody>
			</table>
		</div>
	</div>
</body>
</html>