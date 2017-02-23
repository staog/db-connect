<?php
include "connection.php";
$name = $_POST['name'];
$last_name = $_POST['last_name'];
$course = $_POST['course'];
$sql = "INSERT INTO students VALUES (null,'$name','$last_name','$course')";
$query = mysqli_query($db, $sql);
 ?>
  <script>
    alert("Thank you for your registration!")
    location.href = "allStudents.php";
  </script>
