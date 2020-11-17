<?php
  include("../config/connection.php");
  
  $sql = "SELECT * FROM shipping WHERE main = 1";
  
  $result = mysqli_query($connect, $sql);

  if(mysqli_num_rows($result) == 1){
    $row = mysqli_fetch_assoc($result);
?>
<div id="shippingName" class="font-weight-bold"><?php echo $row["name"] ?> <?php echo $row["type"] ?></div>
<div>
  Rp. <span id="shippingPrice"><?php echo $row["price"] ?></span>
</div>
<?php
  }
  else{
    echo "Shipping Belum ditentukan";
  }
?>


