<?php
 function getBestSeller($connect){
  $sql = "SELECT * FROM products ORDER BY sold DESC LIMIT 5";
  
  $result = mysqli_query($connect, $sql);

  if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
?>
<div id="featuredProductsModal" class="featured-products-component m-1" onclick="goToItem($(this).find('#productName').attr('value'));">
<a href="javascript:void(0)">
  <div class="featured-products-container shadow-sm border">
    <div class="featured-products-photo-container">
      <img src="<?php echo $row["image"] ?>" class="featured-products-photo" alt="<?php echo $row["name"] ?>">
    </div>
    <div class="featured-products-details-container p-2">
      <div id="productName" value="<?php echo $row["name"] ?>" class="featured-products-name">
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

getBestSeller($connect);
?>


