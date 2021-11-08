<?php
$conn = mysqli_connect("localhost","Sumang","mugiwara.1825","db_php");
 
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>