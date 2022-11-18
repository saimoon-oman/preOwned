<?php
if (isset($_POST["add"])) {
  $dbServername = "localhost";
  $dbUsername = "root";
  $dbPassword = "";
  $dbnName = "lab";
  
  $con = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbnName);
  
  if ($con) {
    $tel = $_POST["telephone"];
    $grade = $_POST["grade"];
    $stu = $_POST["stud"];
    $query = "Insert into student(telephone, grade, students) values ('$tel', '$grade', '$stu')";
    $res = mysqli_query($con, $query);
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="test.php" method="POST">
    <input type="text" name="telephone" placeholder="telephone"><br>
    <input type="text" name="grade" placeholder="grade"><br>
    <input type="text" name="stud" placeholder="stud name"><br>
    <input type="submit" name="add" value="Submit">
  </form>
</body>
</html>