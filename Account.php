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
<body onload="loadUserData();">
  <?php
    include("./components/TopBar.php");
    include("./components/Password.php");
    include("./components/SavedAddress.php");
    include("./components/Login.php");
  ?>
  <div id="mainContainer">
    <div class="profile">
      <div class="profile-1 mt-3 px-lg-2">
        <div class="border data-change mx-auto p-4">   
          <div class="profile-photo-container mx-auto">
            <img id="profilePhoto" class="profile-photo" src="./assets/img/default.png" alt="Foto Profil" />
          </div>
          <button id="changePhotoButton" class="btn btn-success mt-3" onclick="changeProfilePhoto()">Ubah Foto</button>
          <button class="btn btn-outline-secondary my-1" onclick="showPassword()">Ubah Password</button>
          <button class="btn btn-outline-secondary my-1" onclick="showAddress();">Alamat tersimpan</button>
          <button class="btn btn-outline-danger my-1" onclick="logout()">Keluar</button>
        </div>
      </div>

      <div class="profile-2 px-lg-2">
        <div class="biodata border mt-3 mx-auto p-4">
          <div class="edit-flex">
            <div class="sub-title">
              Data Diri
            </div>
            <div>
              <a href="javascript:void(0)" onclick="editBiodata(this);">
                <i class="fa fa-edit"></i>
              </a>
            </div>
          </div>
          <div class="biodata-section">
            <?php include("./components/Biodata.php"); ?>
          </div>
        </div>

        <div class="purchase-container border mt-3 p-4">
          <div class="sub-title">
            Pesanan Anda
          </div">
          <div id="purchaseHistory" class="purchase-history" >
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
</body>
</html>
<script src="https://kit.fontawesome.com/c89fc36b61.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script src="./assets/js/index.js"></script>
<script src="./config/states.js"></script>
<script src="./Controllers/controller.js"></script>