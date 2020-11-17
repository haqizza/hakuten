<?php
  include("../config/connection.php");

  function getCart($connect){
    $sql = "INSERT INTO buy SELECT * FROM cart WHERE status = 'checked'";
    mysqli_query($connect, $sql);
    
    $sql = "UPDATE buy SET status = 'Menunggu Konfirmasi'";
    mysqli_query($connect, $sql);

    $sql = "DELETE FROM cart WHERE status = 'checked'";
    mysqli_query($connect, $sql);
    echo "moved";
  }

getCart($connect);
?>


