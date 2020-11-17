<?php
 function getProduct($connect){
  $sql = "SELECT * FROM products";
  
  $result = mysqli_query($connect, $sql);

  if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
?>
<div id="ProductsModal" class="products-component m-2" onclick="goToItem($(this).find('#productName').attr('value'));">
<a href="javascript:void(0)">
  <div class="featured-products-container shadow-sm border">
    <div class="products-photo-container">
      <img src="<?php echo $row["image"] ?>" class="products-photo" alt="<?php echo $row["name"] ?>">
    </div>
    <div class="featured-products-details-container p-2">
      <div  id="productName" value="<?php echo $row["name"] ?>" class="featured-products-name">
        <?php echo $row["name"] ?>
      </div>
      <div class="featured-products-price color-blue">
        Rp.<?php echo $row["price"] ?>
      </div>
    </div>
  </div>
</a>
</div>
<?php
  }
    }
  else{
    echo "Products Tidak Ditemukan";
  }
}

getProduct($connect);
?>


