<?php
  include("../config/connection.php");

  $userId = (int) $_POST["userId"];
  echo $userId;
  $name = $_POST["name"];
  $address = $_POST["address"];

  $sql = "INSERT INTO addresses (name, address, user) VALUES ('$name', '$address', $userId)";
  $result = mysqli_query($connect, $sql);
  echo $result, mysqli_error($connect);

  header("Location: ../Account.php");
?>