<div class="biodata-container m-auto">
  <form action="./Controllers/addAddressController.php" method="POST">
    <b>Tambah Alamat</b>
    <input id="addressUserId" class="form-control" name="userId" type="text" value="" hidden>
    <table style="width:100%">
      <tr>
        <td class="p-2 text-muted font-weight-bold">Nama</td>
        <td class="address-name p-2 font-weight-bold">
          <input id="addressName" class="form-control" name="name" type="text" value="">  
        </td>
      </tr>
      <tr valign="top">
        <td class="p-2 text-muted font-weight-bold">Alamat</td>
        <td class="address-value p-2">
          <input id="addressValue" class="form-control" name="address" type="text" value="">   
        </td>
      </tr>
    </table>
    <div class="text-center">
      <button type="submit" class="btn bg-blue btn-primary">Tambah</button>
    </div>
  </form>
</div>