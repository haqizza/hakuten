<?php
  include("../config/connection.php");

  $userId = $_POST["user"];

  $sql = "SELECT * FROM addresses WHERE user =" . $userId;
  
  $result = mysqli_query($connect, $sql);

  if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
      $main = "";
      if($row["main"] == 1){
        $main = "Utama";
      }
?>
<div class="border rounded-lg m-2" onclick="changeMainAddress(this);">
  <div class="text-right">
      <div class="color-blue m-1 p-1 font-weight-bold"><?php echo $main ?></div>
  </div>
  <div>
  <span class="address-id" value="<?php echo $row["id"]?>" hidden></span>
    <table>
      <tr>
        <td class="p-2 text-muted font-weight-bold">Nama</td>
        <td class="address-name p-2 font-weight-bold"><?php echo $row["name"]?></td>
      </tr>
      <tr valign="top">
        <td class="p-2 text-muted font-weight-bold">Alamat</td>
        <td class="address-value p-2"> <?php echo $row["address"]?></td>
      </tr>
    </table>
    <div ></div>
    <div ></div>
  </div>
</div>
<?php
    }
  }
  else{
    echo "Alamat Kosong";
  }

?>