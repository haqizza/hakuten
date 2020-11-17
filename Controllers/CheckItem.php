<?php
  include("../config/connection.php");

  isset($_POST["name"]);
  isset($_POST["method"]);
  $name = $_POST["name"];
  $method = $_POST["method"];

  function CheckItem($connect, $name, $method){
    $sql = "SELECT id FROM products WHERE name = '" . $name . "';";
    $result = mysqli_query($connect, $sql);
    $row = mysqli_fetch_row($result);
    $itemId = $row[0];
    echo "id: " . $itemId;
    if($method == "add"){
      $sql = "UPDATE cart SET status = 'checked' WHERE product = " . $itemId;
      mysqli_query($connect, $sql);
      echo " added";
    }
    elseif($method == "remove"){
      $sql = "UPDATE cart SET status = 'unchecked'";
      mysqli_query($connect, $sql);
      echo " removed";
    }
    $result = mysqli_query($connect, $sql);
  }
  CheckItem($connect, $name, $method);
?>