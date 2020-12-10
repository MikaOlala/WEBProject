<!DOCTYPE html>
<html>
<?php
  require_once 'generalAdmin.php';
?>

<br><br><br>
<div class="container">
	<h3>Creating new group</h3>
	<br>
    <form action="GroupCheck.php" method="post">
                <div class="form-group row">
            <label for="group_name" class="col-xs-3 col-form-label mr-4">Group name</label>
            <div class="col-xs-9">
                <input type="text" class="form-control" id="group_name" name="group_name" required>
            </div>
        </div>
                <div class="form-group row">
            <label for="Number_of_students" class="col-xs-3 col-form-label mr-4">Number of students</label>
            <div class="col-xs-9">
                <input type="text" class="form-control" id="Number_of_students" name="Number_of_students" required>
            </div>
        </div>



                <div class="form-group row">
            <div class="offset-xs-3 col-xs-9">
                <button type="submit" class="btn btn-primary" name = "addBtn"style="background-color: #353A40; border-color: black ">Add</button>
            </div>
        </div>

        
    </form>


</div>
</body>
</html>