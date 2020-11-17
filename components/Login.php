<div id="modalOuter" class="modal-outer login-outer" hidden>
  <div id="loginModal" class="login-component">
    <div class="container modal-top">
      <div class="row align-items-center py-2">
        <div class="col-1" onclick="closeLogin()">
          <i class="fa fa-angle-left"></i>
        </div>
        <div id="loginTitle" class="col modalTitle">
          Masuk
        </div>
      </div>
    </div>
    <div class="login-container">
      <div class="login-logo">
        <img src="./assets/img/logo.png" alt="Logo">
        </div>
        <div class="form text-center">
          <form id="loginForm" action="./Controllers/authenticationController.php" method="POST">
            <div class="form-group">
              <input type="email" name="email" class="form-control" aria-describedby="emailHelp" placeholder="Alamat Email" required>
            </div>
            <div class="form-group">
              <input type="password" name="password" class="form-control" placeholder="Kata Sandi" required>
              <small class="form-text text-secondary">Belum punya akun?
                <a href="javascript:void(0)">
                  <span class="registerButton" onclick="register()">Daftar!</span>
                </a>
              </small>
            </div>
            <button type="submit" class="btn bg-blue">Masuk</button>
          </form>
          <div id="spinner" class="center">
        
          </div>
          <form id="registerForm" action="./Controllers/registerController.php" method="POST" hidden>
          <div class="form-group">
            <input type="text" name="name" class="form-control" placeholder="Nama Anda" required>
          </div>
          <div class="form-group">
            <input type="email" name="email" class="form-control" placeholder="Alamat Email" required>
          </div>
          <div class="form-group">
            <input type="password" name="password" class="password-reg form-control" placeholder="Kata Sandi" required>
          </div>
          <div class="form-group">
            <input type="password" class="re-password-reg form-control" onkeyup="checkSimiliarity()" placeholder="Konfirmasi Kata Sandi" required>
            <small id="confirmPass" class="form-text text-danger" hidden>Kata sandi tidak sama</small>
          </div>
          <button type="submit" class="btn bg-blue">Daftar</button>
        </form>
      </div>
    </div>
  </div>
</div>