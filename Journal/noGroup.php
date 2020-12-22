<!DOCTYPE html>
<html>
<head>
  <title>Admin page</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>

<?php
  if (!(isset($_COOKIE['user']))) 
    header("Location: auto.php");
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
  <div class="container">
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
      <form method="POST" class="form-inline my-2 my-lg-0">
        <button class="btn btn-outline-danger my-2 my-sm-0" name="btn">Exit</button>
        <?php
          if (isset($_POST['btn'])) {
            setcookie('user', '', time()-3600);
            header("Location: auto.php");
          }
        ?>
      </form>
    </div>
  </div>
</nav>

	<div class="container">
  		<div class="col-12">
  			<h2 class="mb-4">
  				You don't have a group yet. Ehh..
  			</h2>

		</div>
	</div>
</body>
</html>