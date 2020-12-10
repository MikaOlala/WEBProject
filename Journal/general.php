<head>
  <meta charset="UTF-8">
  <title>Journal</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<?php
	$connect = mysqli_connect('localhost', 'root', '', 'journaldb');

  if (isset($_COOKIE['user'])) 
    header("Location: main.php");
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
  <div class="container">
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
      <a class="navbar-brand" href="#">Adviser Journal</a>
      <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
        <li class="nav-item active mr-2">
          <a class="nav-link li-hov" href="auto.php">Log in<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link li-hov" href="reg.php">Registration<span class="sr-only"></span></a>
        </li>
      </ul>
    </div>
  </div>
</nav>