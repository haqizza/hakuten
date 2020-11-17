<?php
  
  $servername = "localhost";
  $username = "root";
  $password = "";
  $database = "ilkomcmy_haqizza";

  $connect = new mysqli($servername, $username, $password, $database);
  
  if(!$connect){
    die("Database Connection Failed" . mysqli_connect_error());
  }
?>