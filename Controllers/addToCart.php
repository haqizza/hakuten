<?php
  include("../config/connection.php");

  $item = $_POST["item"];
  $user = (int) $_POST["user"];
  
  $sql = "SELECT id from products where name ='" . $item . "'";
  
  $result = mysqli_query($connect,$sql);
  $row = mysqli_fetch_assoc($result);
  $item = (int) $row["id"];
  
  $sql = "SELECT * FROM cart WHERE product = " . $item . " AND user = " . $user;
  $result = mysqli_query($connect,$sql);

  if(mysqli_num_rows($result) == 0){
    //Jika belum ada di cart
    $sql = "INSERT INTO cart (product, user) VALUES (" . $item . ", " . $user . ")";
    mysqli_query($connect,$sql);
  }
?>