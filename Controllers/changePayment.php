<?php
  include("../config/connection.php");

  $paymentId = $_POST["payment"];
  
  $sql = "UPDATE payment SET main = 0";
  mysqli_query($connect, $sql);
  
  $sql = "UPDATE payment SET main = 1 WHERE id = " . $paymentId;
  mysqli_query($connect, $sql);
?>