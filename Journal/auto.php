<!DOCTYPE html>
<html>
<?php
  require_once 'general.php';
?>

<div class="container shift">
  <div class="col-6 offset-3">
    <form method="POST">
      <h2 class="text-center mb-4 shift">Authorization</h2>
          <div class="form-group">
              <p>Login</p> 
              <input required type="text" class="form-control" name="login">
          </div>
          <div class="form-group">
            <p>Password</p> 
            <input required type="password" class="form-control" name="password">
          </div>
          <div class="row">
            <a href="reg.php">Have no account?</a>
            <a class="ml-auto" href="changePassword.php">Forgot your password?</a>
          </div>

          <div class="text-center">
            <button class="btn btn-dark mt-3 px-5 text-center" name="btn">Log in</button>
          </div>


          <?php
            $advisers = mysqli_query($connect, "SELECT * FROM advisers");
            $advisers = mysqli_fetch_all($advisers);
            if (isset($_POST['btn'])) {
              if($_POST['login']=='admin') {
                if($_POST['password']=='q1w2e3') {
                  setcookie("user", 'admin', time()+3600);
                  header("Location: AdminPage.php");
                }
              }
              else { 
                $login = "";
                $password = "";
                $name = "";

                foreach($advisers as $a) {
                  if($_POST['login']==$a[2]) {
                    $login = $a[2];
                    $password = $a[3];
                  }
                }

                if($_POST['password'] == $password) {
                    setcookie("user", $login, time()+3600);
                    header("Location: main.php");
                }
                else
                  echo 
                    '<div class="alert alert-danger text-center mt-4" role="alert">
                        Wrong password
                    </div>';
              }
            }
          ?>
        </form>
  </div>
</div>


</body>
</html>