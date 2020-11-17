<?php
  include("../config/connection.php");
  
  $sql = "SELECT * FROM payment WHERE main = 1";
  
  $result = mysqli_query($connect, $sql);

  if(mysqli_num_rows($result) == 1){
    $row = mysqli_fetch_assoc($result);
?>
<div id="paymentName" class="font-weight-bold"><?php echo $row["name"] ?></div>
<div id="PaymentNumber"><?php echo $row["number"] ?></div>
<?php
  }
  else{
    echo "Pembayaran belum ditentukan";
  }
?>


