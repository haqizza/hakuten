<?php
  include("../config/connection.php");
  $name = $_POST["name"];

  $sql = "SELECT id FROM products WHERE name = '" . $name ."'";
  $result = mysqli_query($connect,$sql);
  $row = mysqli_fetch_row($result);
  
  $sql = "DELETE FROM cart WHERE product = " . $row[0];
  mysqli_query($connect,$sql);
?>