<?php
  include("../config/connection.php");
  $userId = $_POST["userId"];

  $target_dir = "../assets/img/profile/";
  $target_file = $target_dir . basename($_FILES["file"]["name"]);
  $uploadOk = 1;
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
  move_uploaded_file($_FILES["file"]["tmp_name"], $target_file);
  
  $imageName = "./assets/img/profile/" . $_FILES["file"]["name"];
  $sql = "UPDATE users SET image = '$imageName' WHERE id = $userId";
  mysqli_query($connect, $sql);
?>
<script>
  function save(){
    localStorage.userImage = "<?php echo $imageName ?>";
    window.location.href = "../Account.php";
  }
  save();
</script>