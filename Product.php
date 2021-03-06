<?php
  include("./config/connection.php");
  include("./config/states.php");
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
<body>
  <?php
    include("./components/TopBar.php");
    include("./components/Login.php");
  ?>
  <div id="mainContainer" class="item-detail-container">
    <?php
      include("./components/ProductDetail.php");
    ?>
  </div>

  <div>
    <?php
      include("./components/Footer.php");
    ?>
  </div>
</body>
</html>
<script src="https://kit.fontawesome.com/c89fc36b61.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script src="./assets/js/index.js"></script>
<script src="./config/states.js"></script>
<script src="./Controllers/controller.js"></script>

