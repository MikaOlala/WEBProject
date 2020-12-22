<head>
  <meta charset="UTF-8">
  <title>Journal</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <style>
    <?php include 'style.css'; ?>
  </style>
</head>
<body>
<?php
	$connect = mysqli_connect('localhost', 'root', '', 'journaldb');

  if (!(isset($_COOKIE['user']))) 
    header("Location: auto.php");
  else
    $login = $_COOKIE['user'];

  $adviser = mysqli_query($connect, "SELECT a.id, a.name, a.login, a.password, g.name, a.group_id FROM advisers a, groups g WHERE a.login LIKE '$login' AND g.id = a.group_id ");
  $adviser = mysqli_fetch_all($adviser);
  $adviserGroup = $adviser[0][5];

  if($adviser[0][5]==null)
    header("Location: noGroup.php");
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
  <div class="container">
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
      <a class="navbar-brand" href="#">Adviser Journal</a>
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item active">
          <a class="nav-link" href="main.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="post.php">Send Email</a>
        </li>
      </ul>
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