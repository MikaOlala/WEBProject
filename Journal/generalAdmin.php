<head>
  <title>Admin page</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>

<?php
  if (!(isset($_COOKIE['user']))) 
    header("Location: auto.php");
  else {
    if ($_COOKIE['user']!='admin') 
      header("Location: main.php");
  }
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
  <div class="container">
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
      <a class="navbar-brand" href="AdminPage.php">Admin Panel</a>
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item active">
          <a class="nav-link" href="AdminPage.php">Home</a>
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