<!DOCTYPE html>
<html>
<?php
  require_once 'generalAdmin.php';
?>


<br><br><br>
<div class="container">
	<h3>Editing existed adviser</h3>
	<br>
    <form action="newEdit.php" method="post">
        <div class="form-group row">
            <label for="advv_id" class="col-xs-3 col-form-label mr-4">id</label>
            <div class="col-xs-9">
                <input type="text" class="form-control" id="advv_id" name="advv_id" required>
            </div>
        </div>
                <div class="form-group row">
            <label for="adviser_name" class="col-xs-3 col-form-label mr-4">Adviser name</label>
            <div class="col-xs-9">
                <input type="text" class="form-control" id="adviser_name" name="adviser_name" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="adv_login" class="col-xs-3 col-form-label mr-4">login</label>
            <div class="col-xs-9">
                <input type="text" class="form-control" id="adv_login" name="adv_login" required>
            </div>
        </div>
                <div class="form-group row">
            <label for="adv_pas" class="col-xs-3 col-form-label mr-4">passowrd</label>
            <div class="col-xs-9">
                <input type="text" class="form-control" id="adv_pas" name="adv_pas" required>
            </div>
        </div>
                        <div class="form-group row">
            <label for="group_id" class="col-xs-3 col-form-label mr-4">group_id</label>
            <div class="col-xs-9">
                <input type="text" class="form-control" id="group_id" name="group_id" required>
            </div>
        </div>

                <div class="form-group row">
            <div class="offset-xs-3 col-xs-9">
                <button type="submit" class="btn btn-primary" name = "addBtn"style="background-color: #353A40; border-color: black ">save</button>
            </div>
        </div>

        
    </form>
    <br><br>

</div>

</body>
</html>
