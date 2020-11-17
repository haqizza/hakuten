<?php
  include("../config/connection.php");


  $sql = "SELECT * FROM payment WHERE main = 0";
  
  $result = mysqli_query($connect, $sql);

  if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
?>
<a href="javascript:void(0)">
  <div class="cart-payment border m-1 p-1" onclick="changePayment(this);">
    <span class="payment-id" value="<?php echo $row["id"] ?>" hidden></span>
    <div class="payment-name" class="font-weight-bold">
      <b><?php echo $row["name"] ?></b>
    </div>
    <div class="payment-number"><?php echo $row["number"] ?></div>
  </div>
</a>
  <?php
    }
  }
  else{
    echo "Alamat Kosong";
  }

?>