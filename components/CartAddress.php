<?php
  include("../config/connection.php");
  
  isset($_POST["user"]);
  $userId = (int) $_POST["user"];

  function getCart($connect, $userId){
  $sql = "SELECT * FROM addresses WHERE main = 1 AND user = " . $userId;
  
  $result = mysqli_query($connect, $sql);

  if(mysqli_num_rows($result) > 0){
    $row = mysqli_fetch_assoc($result);
    $data = $row["name"] . ";" . $row["address"];
    echo $data;
  }
  else{
    echo "Alamat Belum ditentukan";
  }
}

getCart($connect, $userId);
?>


