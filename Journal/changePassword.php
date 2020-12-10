<!DOCTYPE html>
<html>
<?php
  require_once 'general.php';
  $advisers = mysqli_query($connect, "SELECT * FROM advisers");
  $advisers = mysqli_fetch_all($advisers);
  session_start();
?>

<div class="container shift">
  <div class="col-6 offset-3">
    <form action="" method="POST">
      <h2 class="text-center mb-4 shift">Password Recovering</h2>
          <div class="form-group">
            <p>Input your Email: </p>
            <input type="text" class="form-control" id="to" name="to">
          </div>

          <div class="text-center">
            <button class="btn btn-dark mt-3 px-5 text-center" name="send">Send me a code</button>
          </div>


          <p class="text-center mt-3">
          <?php
            if (isset($_POST['send'])) {  
              $found = 0; 
              foreach($advisers as $a) {    //searching for adviser
                if ($a[2] == $_POST['to']) {
                  $found = 1;
                }
              }

              if($found==1) {
                $chars = 'abcdefghjkmnopqrstuvwyzABCDEFGHJKLMNOPQRSTUVWYZ';
                $numChars = strlen($chars);
                $string = '';
                for ($i = 0; $i < 6; $i++) {
                  $string .= substr($chars, rand(1, $numChars) - 1, 1);
                }

                if(isset($_SESSION['code'])){
                  unset($_SESSION['code']);
                }

                $msg = array();
                $msg[0] = $_POST['to'];
                $msg[1] = $string;

                $_SESSION['code'] = $msg;

                $to = $_POST['to'];
                $from = "belf.hunter.bm@gmail.com";
                $subject = "Mail for recover your password";
                $message = "Code:" . "\n\n" . $msg[1];
                $headers = 'From: belf.hunter.bm@gmail.com"' . "\r\n" .
                  'Reply-To: belf.hunter.bm@gmail.com"' . "\r\n" .
                  'X-Mailer: PHP/' . phpversion();

                mail($to, $subject, $message, $headers);

                echo "Check your mailbox";
              }
              else
                '<div class="alert alert-danger text-center mt-4" role="alert">
                  Email is not found
                </div>';
            }
          ?>
          </p>
          
        </form>

        <form action="" method="POST" class="shift">
          <div class="form-group text-center">
            <p>Input a Code: </p>
            <div class="row">
              <input type="text" class="form-control ml-auto w-50" name="code">
              <button class="btn btn-dark btn-sm mr-auto" name="check">-></button>
            </div>
          </div>
        
        <?php
          if(isset($_POST['check'])) {
            $check = array();

            $check = $_SESSION['code'];
          
            if($_POST['code']==$check[1])
              header("Location: changePasswordSuccess.php");
          }
        ?>
        </form>
  </div>
</div>


</body>
</html>