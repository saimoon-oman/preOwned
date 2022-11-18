<?php

$dbServername = "localhost";
  $dbUsername = "root";
  $dbPassword = "";
  $dbnName = "lab";
  
  $con = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbnName);
  if ($con) {

  $query = "Select avg(amount) from salaries";

  $result = mysqli_query($con, $query);

  $rowcheck = mysqli_num_rows($result);

  if ($rowcheck > 0) {

    $res = mysqli_fetch_assoc($result);

    echo "THe average salaries from Table 'Salaries' is:" . $res["avg(amount)"];
  }

  }
?>