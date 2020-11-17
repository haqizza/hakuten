<?php
  include("../config/connection.php");

  $userId = $_POST["user"];
  $addressId = $_POST["address"];
  
  $sql = "UPDATE addresses SET main = 0 WHERE user = ". $userId;
  mysqli_query($connect, $sql);
  
  $sql = "UPDATE addresses SET main = 1 WHERE user = " . $userId . " AND id = " . $addressId;
  mysqli_query($connect, $sql);
?>