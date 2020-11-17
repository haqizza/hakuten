<?php
  include ("./config/connection.php");

  $itemName = $_GET['item-name'];
  
  function getProductDetail($connect, $itemName){
    $sql = "SELECT * FROM products WHERE name ='". $itemName . "'";

    $result = mysqli_query($connect,$sql);
    
    if(mysqli_num_rows($result) == 1){
      $row = mysqli_fetch_assoc($result);
?>
<div class="product-detail wrapped-flex">
  <div class="product-detail-photo-container">
      <img src="<?php echo $row["image"] ?>" class="product-detail-photo" alt="<?php echo $row["name"] ?>">
  </div>
  <div class="product-detail-detail-container">
    <div class="m-2">
      <div id="productName" class="sub-title m-0"><?php echo "". $row["name"] ."" ?></div>
      <table class="product-information m-2">
      <tr class="border-bottom border-top">
        <th class="text-grey p-3">Stok</th>
        <td class="p-3"><?php echo $row["stock"] ?></td>
      </tr>
      <tr class="border-bottom">
        <th class="text-grey p-3">Terjual</th>
        <td class="p-3"><?php echo $row["sold"] ?></td>
      </tr>
      <tr class="border-bottom" >
        <th class="text-grey p-3" valign="middle">Harga</th>
        <td class="item-price color-blue p-3">Rp. <?php echo $row["price"] ?></td>
      </tr>
      </table>
    </div>
    <div class="wrapped-flex">
      <button class="btn btn-outline-success mx-2 my-1" onclick="buyNow();">Beli Langsung</button>
      <button class="btn btn-success mx-2 my-1" onclick="addToCart();">Masukkan Keranjang</button>
    </div>
  </div>
</div>
<div class="item-detail outer">
  <div class="outer-p">
    <div class="text-secondary font-weight-bold" style="font-size: 1rem;">Detail</div>
    <p><?php echo $row["details"] ?></p>
  </div>
</div>  
<?php
    }
    else{
      echo "Produk Tidak Ditemukan";
    }

  }
  getProductDetail($connect, $itemName);
?>