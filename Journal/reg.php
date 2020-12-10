<!DOCTYPE html>
<html>
<?php
  require_once 'general.php';
?>
<?php
  $advisers = mysqli_query($connect, "SELECT * FROM advisers");
  $advisers = mysqli_fetch_all($advisers);
?>

<div class="container shift">
  <div class="col-6 offset-3">
    <form method="POST">
        <?php
          if (isset($_POST['btn'])) {
            if($_POST['password'] == $_POST['repassword']) {
              $count = 0;
              foreach ($advisers as $ad) {
                if($ad[2]==$_POST["login"])
                  $count++;
              }
              if($count == 0) {
                header("Location: auto.php");
              }
              else {
                echo 
                '<div class="alert alert-danger text-center" role="alert">
                  This login is already using by someone
                </div>';
              }
            }
            else
              echo 
              '<div class="alert alert-danger text-center" role="alert">
                  Passwords are different!
              </div>';
          }
        ?>
      

      <h2 class="text-center my-4">Registration</h2>
          <div class="form-group">
              <p>Login</p> 
              <input required type="text" class="form-control" name="login">
          </div>
          <div class="form-group">
              <p>Name</p> 
              <input required type="text" class="form-control" name="name">
          </div>
          <div class="form-group">
            <p>Password</p> 
            <input required type="password" class="form-control" name="password">
          </div>
          <div class="form-group">
            <p>Repeat Password</p> 
            <input required type="password" class="form-control" name="repassword">
          </div>

          <div class="text-center">
            <button class="btn btn-dark mt-3 px-5 text-center" name="btn">Sign up</button>
          </div>

        </form>
  </div>
</div>


</body>
</html>