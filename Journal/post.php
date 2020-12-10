<!DOCTYPE html>
<html>
<?php
  require_once 'generalMain.php';

  $students = mysqli_query($connect, "SELECT * FROM students WHERE group_id = '$adviserGroup' ");
  $students = mysqli_fetch_all($students);
?>

<div class="container shift">
  <div class="col-6 offset-3">
    <form action="" method="POST">
      <h2 class="text-center mb-4 shift">Send an Email</h2>
          <div class="form-group">
            <p for="to">Receiver: </p>
              <select class="form-control" id="to" name="to">
                  <?php for ($i = 0; $i < count($students); $i++) { ?>
                    <option value="<?=$students[$i][4]?>">
                      <?php echo $students[$i][0] . ' - ' . $students[$i][1]; } ?>
                    </option>
                    <option disabled class="font-weight-bold">
                      Родители:
                    </option>
                    <?php for ($i = 0; $i < count($students); $i++) { ?>
                    <option value="<?=$students[$i][5]?>">
                      <?php echo $students[$i][0] . ' - ' . $students[$i][1] . ' - Parents'; } ?>
                    </option>
              </select>
          </div>

          <div class="form-group">
            <p>Message</p> 
            <textarea class="form-control" rows="5" name="msg"></textarea>
          </div>

          <div class="text-center">
            <button class="btn btn-dark mt-3 px-5 text-center" name="send"> Send</button>
          </div>


          <p class="text-center mt-3">
          <?php
            if (isset($_POST['send'])) {
                $to = $_POST['to'];
                $from = "belf.hunter.bm@gmail.com";
                $subject = "Письмо от Эдвайзера";
                $message = "Уведомление:" . "\n\n" . $_POST['msg'];
                $headers = 'From: belf.hunter.bm@gmail.com"' . "\r\n" .
                  'Reply-To: belf.hunter.bm@gmail.com"' . "\r\n" .
                  'X-Mailer: PHP/' . phpversion();

                mail($to, $subject, $message, $headers);

                echo "Сообщение отправлено";
                ?>

                <script language="JavaScript" type="text/javascript">
                  function changeurl(){eval(self.location="http://localhost/Journal/main.php");}
                  window.setTimeout("changeurl();",3000);
                </script>
                <?php
            }
          ?>
          </p>
          
        </form>
  </div>
</div>


</body>
</html>