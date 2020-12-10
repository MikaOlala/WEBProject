<!DOCTYPE html>
<html>
<?php
  require_once 'general.php';
  session_start();
?>

<div class="container shift">
  <div class="col-6 offset-3">
    <form action="" method="POST">
      <h2 class="text-center mb-4 shift">Password Recovering</h2>
          <div class="form-group">
            <p>Input your new Password: </p>
            <input required type="password" class="form-control" name="password">
          </div>
          <div class="form-group">
            <p>Repeat your Password: </p>
            <input required type="password" class="form-control" name="repassword">
          </div>
          <div class="text-center">
            <button class="btn btn-dark mt-3 px-5 text-center" name="btn">Change</button>
          </div>

          <?php
            if (isset($_POST['btn'])) {  
              if($_POST['password']==$_POST['repassword']) {
                $msg = $_SESSION['code'];
                $login = $msg[0];
                $password = $_POST['password'];
                echo $msg;

                $connect = mysqli_connect('localhost', 'root', '', 'journaldb');
                mysqli_query($connect, "UPDATE advisers SET password = '$password' WHERE login = '$login' ");

                $connect->close();
                header("Location: auto.php");
              }
              else
                echo 
                  '<div class="alert alert-danger text-center mt-4" role="alert">
                      Password are different
                  </div>';
            }
          ?>
          
        </form>

  </div>
</div>


</body>
</html>