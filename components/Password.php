<div id="modalOuter" class="modal-outer password-outer" hidden>
  <div id="passwordModal" class="password-component">
    <div class="container modal-top">
      <div class="row align-items-center py-2 text-secondary">
        <div class="col-1" onclick="closePassword()">
          <i class="fa fa-angle-left"></i>
        </div>
        <div id="passwordTitle" class="col modalTitle">
          Ganti Kata Sandi
        </div>
      </div>
    </div>
    <div class="password-container">
      <div class="login-logo">
        <img src="./assets/img/logo.png" alt="Logo">
      </div>
      <div class="form text-center">
        <div id="spinner" class="center">

        </div>
        <form id="passwordForm" action="./Controllers/passwordChange.php" method="POST">
          <div class="form-group">
            <input type="password" name="oldPassword" class="form-control" placeholder="Kata Sandi Lama" required>
          </div>
          <div class="form-group">
            <input type="password" name="newPassword" class="password-reg form-control" placeholder="Kata Sandi Baru" required>
          </div>
          <div class="form-group">
            <input type="password" class="re-password-reg form-control" onkeyup="checkSimiliarity()" placeholder="Konfirmasi Kata Sandi Baru" required>
            <small id="confirmPass" class="form-text text-danger" hidden>Kata sandi tidak sama</small>
          </div>
          <button type="submit" class="btn bg-blue" onclick="loadClosePassword()">Ganti Kata Sandi</button>
        </form>
      </div>
    </div>
  </div>
</div>