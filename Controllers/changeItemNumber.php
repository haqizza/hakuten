<?php
  include("../config/connection.php");
  $number = (int) $_POST["number"];
  $name = $_POST["name"];

  $sql = "SELECT id, stock FROM products WHERE name = '" . $name ."'";
  $result = mysqli_query($connect,$sql);
  $row = mysqli_fetch_row($result);
  
  if($number <= $row[1]){
    $sql = "UPDATE cart SET number = " . $number . " WHERE product = " . $row[0];
    mysqli_query($connect,$sql);
    
    echo $number;
  }else{
    echo -1;
  }

?>