<!DOCTYPE html>
<html>
  <?php include "partials/head.php" ?>
  <body>
    <div class="jumbotron text-center">
    <h2>Students Database</h2>
    <a href="index.php" type="button" class="btn btn-info">Home</a>
    <a href="allStudents.php" type="button" class="btn btn-primary">All Students</a>
    <a href="register.php" type="button" class="btn btn-success">Register</a>
    </div>
    <div class="row">
      <div class="col-lg-10 col-lg-offset-1">
       <h3 class="page-header">Please register!</h3>
        <div class="row">
          <div class="col-lg-8 col-lg-offset-2">
            <form class="" action="insert.php" method="post">
              <input type="text" name="name" placeholder="Name" class="form-control"><br>
              <input type="text" name="last_name" placeholder="Last name" class="form-control"><br>
              <input type="text" name="course" placeholder="Course" class="form-control"><br>
              <input type="submit" name="sub" value="Register" class="form-control btn btn-primary">
            </form>
          </div>
        </div>
       </div>
      </div>
    </div>
  </body>
</html>
