<?php
  include("../config/connection.php");


  $sql = "SELECT * FROM shipping WHERE main = 0";
  
  $result = mysqli_query($connect, $sql);

  if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
?>
<a href="javascript:void(0)">
  <div class="cart-address border m-1 p-1" onclick="changeShipping(this);">
    <span class="shipping-id" value="<?php echo $row["id"] ?>" hidden></span>
    <div class="shipping-name" class="font-weight-bold">
      <b><?php echo $row["name"] ?> <?php echo $row["type"] ?></b>
    </div>
    <div class="shipping-value">Rp.<?php echo $row["price"] ?></div>
  </div>
</a>
  <?php
    }
  }
  else{
    echo "Alamat Kosong";
  }

?>