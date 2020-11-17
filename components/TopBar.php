<header class=" shadow-sm">
  <div class="container align-items-center py-2 py-lg-3 text-secondary">
    <div id="topBar">

      <div class="">
        <a href="./"><img class="topbar-logo" src="./assets/img/logo.png" alt="Logo"></a>
      </div>
      <div class="search-container input-group-sm input-group">
          <input id="search" class="search-bar form-control" name="search" type="text" placeholder=" Cari" onclick="goToProducts($(this).parent().find('#searchParam').val());" onkeyup="search($(this).parent().find('#searchParam').val());">
          <div class="input-group-append">
            <select id="searchParam" class="input-group-text" id="basic-addon2" value="products">
              <option value="products">Produk</option>
              <option value="tags">Tag</option>
            </select>
          </div>
      </div>
      <div id="topBarIcons">
        <div class=" align-middle rounded-circle">
          <a href="./Cart.php">
            <i class="fa fa-shopping-cart my-2 hover"></i>
          </a>
        </div>
        <div class="align-middle rounded-circle" onclick="userIcon();">
          <a href="javascript:void(0)">
            <i class="fa fa-user-circle my-2 hover"></i>
          </a>
        </div>
      </div>
    </div>
  </div>
</header>