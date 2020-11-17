<div class="biodata-container m-auto">
  <form action="./Controllers/EditBiodataController.php" method="POST">
    <table>
      <input id="userId" class="form-control" name="userId" type="number" value="" hidden>
      <tr>
        <th>Nama</th>
        <td>:</td>
        <td>
        <input id="userName" class="form-control" name="userName" type="text" value="">
        </td>
      </tr>
      <tr>
        <th>Jenis Kelamin</th>
        <td>:</td>
        <td>
          <select name="userGender" class="form-control" id="userGender" value="">
            <option value="Pria">Pria</option>
            <option value="Wanita">Wanita</option>
          </select>
        </td>
      </tr>
      <tr>
        <th>Tanggal Lahir</th>
        <td>:</td>
        <td>
          <input id="userBirth" class="form-control" name="userBirth" type="date" value="">
        </td>
      </tr>
      <tr>
        <th>Email</th>
        <td>:</td>
        <td>
          <input id="userEmail" class="form-control" name="userEmail" type="email" value="">
        </td>
      </tr>
    </table>
    <div class="text-center">
      <button type="submit" class="btn bg-blue btn-primary">Simpan</button>
    </div>
  </form>
</div>