<div id="modalOuter" class="modal-outer address-outer" hidden>
  <div id="addressModal" class="address-component">
    <div class="container modal-top">
      <div class="row align-items-center py-2 text-secondary">
        <div class="col-1" onclick="closeAddress()">
          <i class="fa fa-angle-left"></i>
        </div>
        <div id="addressTitle" class="col modalTitle">
          Alamat Tersimpan
        </div>
      </div>
    </div>
    <div class="address-container">
      <div class="">
        <div id="spinner" class="center"></div>
        <div id="addressList"></div>
        <div id="addAddressContainer" class="text-center border rounded-lg">
          <button class="btn bg-blue btn-primary" onclick="addAddress(this);">Tambah Alamat</button>
        </div>
      </div>
    </div>
  </div>
</div>