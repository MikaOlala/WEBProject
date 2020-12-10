<!DOCTYPE html>
<html>
<?php
  require_once 'generalAdmin.php';
?>


<br><br><br>
<div class="container">
	<h3>Creating new adviser</h3>
	<br>
    <form action="check.php" method="post">
                <div class="form-group row">
            <label for="adviser_name" class="col-xs-3 col-form-label mr-4">Adviser name</label>
            <div class="col-xs-9">
                <input type="text" class="form-control" id="adviser_name" name="adviser_name" required>
            </div>
        </div>
                <div class="form-group row">
            <label for="adviser_login" class="col-xs-3 col-form-label mr-4">Login</label>
            <div class="col-xs-9">
                <input type="text" class="form-control" id="adviser_login" name="adviser_login" required>
            </div>
        </div>
                <div class="form-group row">
            <label for="adviser_pas" class="col-xs-3 col-form-label mr-4">Password</label>
            <div class="col-xs-9">
                <input type="text" class="form-control" id="adviser_pas" name="adviser_pas" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="group_id" class="col-xs-3 col-form-label mr-4">Group id</label>
            <div class="col-xs-9">
                <input type="text" class="form-control" id="group_id" name="group_id" required>
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
