<!DOCTYPE html>
<html>
<?php
  require_once 'generalAdmin.php';
?>


<br><br><br>
<div class="container">
	<h3>Creating new student</h3>
	<br>
    <form action="StudentCheck.php" method="post">
                        <div class="form-group row">
            <label for="student_id" class="col-xs-3 col-form-label mr-4">Student id</label>
            <div class="col-xs-9">
                <input type="text" class="form-control" id="student_id" name="student_id" required>
            </div>
        </div>
                <div class="form-group row">
            <label for="student_name" class="col-xs-3 col-form-label mr-4">Student name</label>
            <div class="col-xs-9">
                <input type="text" class="form-control" id="student_name" name="student_name" required>
            </div>
        </div>
                <div class="form-group row">
            <label for="group_idd" class="col-xs-3 col-form-label mr-4">group_id</label>
            <div class="col-xs-9">
                <input type="text" class="form-control" id="group_idd" name="group_idd" required>
            </div>
        </div>
                <div class="form-group row">
            <label for="pictureURl" class="col-xs-3 col-form-label mr-4">picture</label>
            <div class="col-xs-9">
                <input type="text" class="form-control" id="pictureURl" name="pictureURl" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="mail_input" class="col-xs-3 col-form-label mr-4">mail</label>
            <div class="col-xs-9">
                <input type="text" class="form-control" id="mail_input" name="mail_input" required>
            </div>
        </div>
                <div class="form-group row">
            <label for="pmail_input" class="col-xs-3 col-form-label mr-4">pmail</label>
            <div class="col-xs-9">
                <input type="text" class="form-control" id="pmail_input" name="pmail_input" required>
            </div>
        </div>
                <div class="form-group row">
            <label for="age_input" class="col-xs-3 col-form-label mr-4">age</label>
            <div class="col-xs-9">
                <input type="text" class="form-control" id="age_input" name="age_input" required>
            </div>
        </div>


                <div class="form-group row">
            <div class="offset-xs-3 col-xs-9">
                <button type="submit" class="btn btn-primary" name = "addBtn"style="background-color: #353A40; border-color: black ">Add</button>
            </div>
        </div>
        <?php  

        ?>
        
    </form>


</div>

</body>
</html>