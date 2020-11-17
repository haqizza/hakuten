<?php
  include("../config/connection.php");

  $oldPassword = $_POST["oldPassword"];
  $newPassword = $_POST["newPassword"];

  function changePassword($newPassword, $oldPassword, $connect){
    $sql = "UPDATE users SET password = '". $newPassword ."' WHERE password = '" . $oldPassword . "'";
    
    $result = mysqli_query($connect, $sql);

    if($result){
      echo "<script type='text/javascript'>alert('Update Berhasil');</script>";
      header("Location: ../Account.php");
    }
    else{
      echo "<script type='text/javascript'>alert('Kata Sandi Salah. ". mysqli_error($connect) ."');</script>";
    }
  }

  changePassword($newPassword, $oldPassword, $connect)
?>


