<?php
  include("../config/connection.php");
  
  isset($_POST["user"]);
  $userId = $_POST["user"];

  function getCart($connect, $userId){
    $sql = "SELECT products.image, products.name, products.price, products.details, buy.status  from products INNER JOIN buy ON products.id = buy.product WHERE buy.user = " . $userId;
    
    $result = mysqli_query($connect, $sql);

    if(mysqli_num_rows($result) > 0){
      while($row = mysqli_fetch_assoc($result)){
?>
<div class="cart-item-component shadow-sm m-2 p-2">
  <div class="cart-item-container">
    <div class="cart-item-photo-container">
      <img src="<?php echo $row["image"] ?>" class="cart-item-photo" alt="<?php echo $row["name"] ?>">
    </div>
    <div class="products-details-container p-2">
      <div  class="productName" value="<?php echo $row["name"] ?>" class="featured-products-name">
        <?php echo $row["name"] ?>
      </div>
      <div class="featured-products-price color-blue">
        Rp.<span class="itemPrice"><?php echo $row["price"] ?></span>
      </div>
    </div>
  </div>
  <div class="chart-item-options">
      <div class="order-status mx-1 px-1" style="border-bottom: 2px solid #1cacfd55"><?php echo $row["status"] ?></div>
  </div>
</div>
<?php
      }
    }
    else{
    }
  }

getCart($connect, $userId);
?>


