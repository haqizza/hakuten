
<?php
  include("./config/states.php");
  include("./config/connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hakuten</title>

  <link rel="shortcut icon" href="./assets/img/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="./assets/css/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body onload="getSummary();">
  <div class="bg" >
    <?php
      include("./components/TopBar.php");
      include("./components/SavedAddress.php");
      include("./components/Login.php");
    ?>
    <div id="mainContainer" class="border">
      <div id="cartModal" class="cart-component">
        <div class="container modal-top">
          <div class="row align-items-center py-2">
            <div id="modalTitle" class="col cart-title">
              Ringkasan Belanja
            </div>
          </div>
        </div>
        
        <div id="cartMainContainer" class="outer">
          <div id="chartItemContainer">
            
          </div>
          <div class="cart-option-container">
            <div id="cartOption" class="border rounded-lg m-2 p-2 shadow-sm">
              <div class="cart-address-container border-top border-bottom p-2 my-2" onclick="showAddress();">
                <div class="text-secondary m-1 font-weight-bold" >Alamat</div>
                <div class="cart-address">
                  <div id="buyerName" class="font-weight-bold"></div>
                  <div id="buyerAddress"></div>
                </div>
              </div>
              <div class="cart-ship-container border-top border-bottom p-2 my-2" onclick="getShippingList();">
                <div class="summary-shipping-list">
                  <div class="text-secondary m-1 font-weight-bold">Pengiriman</div>
                  <div class="cart-shipping">
                  </div>
                  <div class="summary-shipping-list-container">
                  </div>
                </div>
              </div>
              <div class="cart-payment-container border-top border-bottom p-2 my-2" onclick="getPaymentList();">
                <div class="summary-payment-list">
                  <div class="text-secondary m-1 font-weight-bold">Pembayaran</div>
                  <div class="cart-payment">
                  </div>
                  <div class="summary-payment-list-container">
                  </div>
                </div>
              </div>
              <div class="cancel-container border border-danger btn-outline-danger text-center p-2 my-2" onclick="removeCheckedItem();">
                <span class="m-1 font-weight-bold">Batal</span>
              </div>
            </div>
            <div>
              <?php include("./components/CartBar.php"); ?>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div>
      <?php
        include("./components/Footer.php");
      ?>
    </div>
</div>
</body>
</html>
<script src="https://kit.fontawesome.com/c89fc36b61.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script src="./assets/js/index.js"></script>
<script src="./config/states.js"></script>
<script src="./Controllers/controller.js"></script>