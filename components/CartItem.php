<?php
  include("../config/connection.php");
  
  isset($_POST["user"]);
  $userId = $_POST["user"];

  function getCart($connect, $userId){
    $sql = "SELECT image, name, price, details, number  from products INNER JOIN cart ON products.id = cart.product WHERE cart.user = " . $userId;
    
    $result = mysqli_query($connect, $sql);

    if(mysqli_num_rows($result) > 0){
      while($row = mysqli_fetch_assoc($result)){
?>
<div class="cart-item-component shadow-sm m-2 p-4">
  <div class="cart-item-container">
    <input type="checkbox" class="item-check m-2" value="<?php echo $row["name"] ?>" onclick="checkItem(this);">
    <div class="cart-item-photo-container">
      <img src="<?php echo $row["image"] ?>" class="cart-item-photo" alt="<?php echo $row["name"] ?>">
    </div>
    <div class="products-details-container p-2">
      <div  class="product-name" value="<?php echo $row["name"] ?>" class="featured-products-name"><?php echo $row["name"] ?></div>
      <div class="featured-products-price color-blue">
        Rp.<span class="itemPrice"><?php echo $row["price"] ?></span>
      </div>
    </div>
  </div>
  <div class="chart-item-options">
      <div class="mx-3r" onclick="removeItem(this);"><i class="fa fa-trash text-success hover"></i></div>
      <div class="mx-1" onclick="itemNumber(this, 'min');"><i class="fa fa-minus-circle text-success hover"></i></div>
      <div id="itemNumber" class="mx-1 px-3" style="border-bottom: 2px solid #1cacfd55"><?php echo $row["number"] ?></div>
      <div class="mx-1" onclick="itemNumber(this, 'plus');"><i class="fa fa-plus-circle text-success  hover"></i></div>
  </div>
</div>
<?php
      }
    }
    else{
      echo "<span class='d-block m-auto' style='width:fit-content'>Keranjang Anda Kosong</span>";
    }
  }

getCart($connect, $userId);
?>


