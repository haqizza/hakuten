<?php
  include("../config/connection.php");

  $shippingId = $_POST["shipping"];
  
  $sql = "UPDATE shipping SET main = 0";
  mysqli_query($connect, $sql);
  
  $sql = "UPDATE shipping SET main = 1 WHERE id = " . $shippingId;
  mysqli_query($connect, $sql);
?>