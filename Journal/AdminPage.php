<!DOCTYPE html>
<html>
<?php
  require_once 'generalAdmin.php';
?>

<br><br><br>
<div class="container">
  <form method="post">
    <a href="addPage.php" type="submit" class="btn btn-primary" style="background-color: #353A40 ; border-color: black ">Add new adviser</a>
  </form>

  <br>
  <br>


<div class="row">
  <div class ="col-sm">
    <form action="del.php" method="post">
      <div class="form-group row">
        <label for="adviser_name" class="col-xs-3 col-form-label mr-4">Adviser id</label>
          <div class="col-xs-9">
            <input type="text" class="form-control" id="id" name="id" required>
          </div>
      </div>

      <div class="form-group row">
        <div class="offset-xs-3 col-xs-9">
          <button type="submit" class="btn btn-primary" name = "addBtn"style="background-color: #353A40; border-color: black ">Delete</button>
        </div>
      </div>
    </form>
  </div>

<form action = "editTemp.php" method="post">
  <div class ="col-sm">
    <div class="form-group row">
      <div class="offset-xs-3 col-xs-9">
        <button type="submit" class="btn btn-primary" name = "editBtn"style="background-color: #353A40; border-color: black ">edit adviser</button>
      </div>
    </div>
  </div>
</form>
  



<br><br><br>






  <table class = "table">
    <tr><th>Adviser_id</th><th>Name</th><th>Group_id</th></tr>
    <?php

      $con=mysqli_connect("localhost","root","","journaldb");
      // Check connection
      if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }

      $result = mysqli_query($con,"SELECT * FROM advisers");


      while($row = mysqli_fetch_array($result))
        {

          echo "<tr><td>{$row['id']}</td>
                  <td>{$row['name']}</td>
                  <td>{$row['group_id']}</td>
                  </tr>";
        }

      mysqli_close($con);

    ?>
  </table> 









</div>

   <!--  ЗДЕСЬ НАЧИНАЮТСЯ ГРУППЫ -->


<br><br>


    <form method="post">
<a href="GroupAddPage.php" type="submit" class="btn btn-primary" style="background-color: #353A40 ; border-color: black ">Add new group</a>
</form>

<br>
<br>


<div class="row">
  <div class ="col-sm">
        <form action="GroupDel.php" method="post">
                <div class="form-group row">
            <label for="id" class="col-xs-3 col-form-label mr-4">Group id</label>
            <div class="col-xs-9">
                <input type="text" class="form-control" id="id" name="id" required>
            </div>
        </div>

                <div class="form-group row">
            <div class="offset-xs-3 col-xs-9">
                <button type="submit" class="btn btn-primary" name = "addBtn"style="background-color: #353A40; border-color: black ">Delete</button>
            </div>
              </div>
  </div>
</form>
<form action = "GroupEditPage.php" method="post">
  <div class ="col-sm">
    
    <div class="form-group row">
            <div class="offset-xs-3 col-xs-9">
                <button type="submit" class="btn btn-primary" name = "editBtn"style="background-color: #353A40; border-color: black ">edit group</button>
            </div>
  </div>
  </div>
</form>
  



<br>
<br>
<br>






      <table class = "table">
        <tr><th>Group_id</th><th>Group Name</th><th>Number of students</th></tr>
    <?php

    $con=mysqli_connect("localhost","root","","journaldb");
    // Check connection
    if (mysqli_connect_errno())
      {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }

    $result = mysqli_query($con,"SELECT * FROM groups");



    while($row = mysqli_fetch_array($result))
      {

      echo "<tr><td>{$row['id']}</td>
              <td>{$row['name']}</td>
              <td>{$row['n_of_students']}</td>
              </tr>";
      }

    mysqli_close($con);



    ?>
    </table> 








    
    </div>


<br><br><br>

<!-- ЗДЕСЬ НАЧИНАЮТСЯ СТУДЕНТЫ -->

<form method="post">
<a href="StudentAddPage.php" type="submit" class="btn btn-primary" style="background-color: #353A40 ; border-color: black ">Add new student</a>
</form>

<br>
<br>


<div class="row">
  <div class ="col-sm">
        <form action="StudentDel.php" method="post">
                <div class="form-group row">
            <label for="adviser_name" class="col-xs-3 col-form-label mr-4">Student id</label>
            <div class="col-xs-9">
                <input type="text" class="form-control" id="id" name="id" required>
            </div>
        </div>

                <div class="form-group row">
            <div class="offset-xs-3 col-xs-9">
                <button type="submit" class="btn btn-primary" name = "addBtn"style="background-color: #353A40; border-color: black ">Delete</button>
            </div>
              </div>
  </div>
</form>
<form action = "StudentEditPage.php" method="post">
  <div class ="col-sm">
    
    <div class="form-group row">
            <div class="offset-xs-3 col-xs-9">
                <button type="submit" class="btn btn-primary" name = "editBtn"style="background-color: #353A40; border-color: black ">Edit student</button>
            </div>
  </div>
  </div>
</form>
  



<br>
<br>
<br>






      <table class = "table">

        <tr><th>Student_id</th><th>Student name</th><th>Group_id</th><th>PictureURL</th><th>Mail</th><th>PMail</th><th>Age</th></tr>
    <?php

    $con=mysqli_connect("localhost","root","","journaldb");
    // Check connection
    if (mysqli_connect_errno())
      {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }

    $result = mysqli_query($con,"SELECT * FROM students");



    while($row = mysqli_fetch_array($result))
      {

      echo "<tr><td>{$row['id']}</td>
              <td>{$row['name']}</td>
              <td>{$row['group_id']}</td>
              <td>{$row['picture']}</td>
              <td>{$row['mail']}</td>
              <td>{$row['pmail']}</td>
              <td>{$row['age']}</td>
              </tr>";
      }

    mysqli_close($con);


    ?>
    </table> 








    </div>


</body>
</html>