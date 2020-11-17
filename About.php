<?php
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
  <div id="mainContainer">
    <div id="about" class="">
      <div class="about-us outer p-3">
        <div class="title">
          Tentang Kami
        </div>
        <div class="wrapped-flex">
          <div class="p-2 m-3">
            <img class="about-logo" src="./assets/img/logo.png" alt="Logo Hakuten">
          </div>
          <div class="p-2 m-2" style="width:80%">
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum at blanditiis voluptates pariatur, illum, saepe vero nostrum iusto quisquam repellendus obcaecati aperiam quas ex voluptatem in rem doloribus! Hic, tempora. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sint, nobis aliquam reprehenderit dolore nam mollitia laborum nihil quisquam, soluta quas molestias aspernatur explicabo vero officiis iure id, deserunt expedita earum! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est labore non maiores nihil eum veritatis quidem, illo cumque perferendis similique cupiditate consectetur earum provident, expedita velit obcaecati nemo vero quo!
            </p>
          </div>
        </div>
      </div>
      <div class="send-mail outer p-3">
        <div class="title">
          Butuh Bantuan? 
        </div>
        <form id="mailForm" action="./Controllers/mailerController.php" method="POST">
          <div class="form-group">
            <input type="email" name="email" class="form-control" aria-describedby="emailHelp" placeholder="Alamat Email Anda" required>
          </div>
          <div class="form-group">
            <input type="text" name="nama" class="form-control" aria-describedby="emailHelp" placeholder="Nama Anda" required>
          </div>
          <div class="form-group">
            <textarea name="message" class="form-control" rows="5" placeholder="Tuliskan pesan Anda disini..."></textarea>
          </div>
          <button type="submit" class="btn bg-blue">Kirim</button>
          </form>
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