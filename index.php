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
<body onload="init();">
   <?php
    include("./components/TopBar.php");
    include("./components/Login.php");
  ?> 
  <div id="mainContainer">
    <div id="home">
      <div id="banner">
        <div id="carousel" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carousel" data-slide-to="0" class="active"></li>
            <li data-target="#carousel" data-slide-to="1"></li>
            <li data-target="#carousel" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="./assets/img/banner/1.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="./assets/img/banner/2.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="./assets/img/banner/3.jpg" class="d-block w-100" alt="...">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>

      <div class="featured-tag outer">
        <div class="outer-p">
          <div class="sub-title">
            Kategori Pilihan
          </div>
        </div>
        <div class="tags-container">
          <?php include("./components/Tags.php"); ?>
        </div>
      </div>
    
      <div class="outer">
        <div class="outer-p">
          <div class="sub-title">
            Barang Terlaris
          </div>
        </div>
        <div class="scroll-flex">
          <?php include("./components/BestSeller.php") ?>
        </div>
      </div>
      
      <div class="outer">
        <div class="outer-p">
          <div class="sub-title">
            Trending Bulan Ini
          </div>
        </div>
        <div class="scroll-flex">
          <?php include("./components/Trends.php") ?>
        </div>
      </div>
      

      <div class="product-list-home outer">
        <div class="outer-p">
          <div class="sub-title">
          </div>
        </div>
        <div class="wrapped-flex">
          <?php include("./components/Product.php") ?>
        </div>
        <div class="text-center">
          <a href="./Products.php">
            <button class="btn bg-blue btn-primary">Tampilkan Produk Lainnya</button>
          </a>
        </div>
      </div>
    </div>
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