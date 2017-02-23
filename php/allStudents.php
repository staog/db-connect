<!DOCTYPE html>
<html>
  <?php include "partials/head.php" ?>
  <?php include "connection.php" ?>
  <?php
$sql = "SELECT * FROM students";
$query = mysqli_query($db,$sql);


   ?>
  <body>
    <div class="jumbotron text-center">
    <h2>Students Database</h2>
    <a href="index.php" type="button" class="btn btn-info">Home</a>
    <a href="allStudents.php" type="button" class="btn btn-primary">All Students</a>
    <a href="register.php" type="button" class="btn btn-success">Register</a>
    </div>
    <div class="row">
      <div class="col-lg-10 col-lg-offset-1">
        <h3 class="page-header">Students Table</h3>
        <div class="row">
          <div class="col-lg-8 col-lg-offset-2">
            <table class="table">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Last Name</th>
                  <th>Course</th>
                </tr>
              </thead>
              <tbody>
                <?php
                while ($row = mysqli_fetch_assoc($query)) {
                  $id = $row['id'];
                  $name = $row['name'];
                  $last_name = $row['last_name'];
                  $course = $row['course'];
                  echo "<tr><td>$id</td><td>$name</td><td>$last_name</td><td>$course</td></tr>";
                }
                mysqli_close($db);
                 ?>
              </tbody>
            </table>
          </div>
        </div>
       </div>
      </div>
    </div>
  </body>
</html>
