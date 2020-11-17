<?php
  include("../config/connection.php");
  session_start();

  $email = $_POST["email"];
  $password = $_POST["password"];

  function getUser($email, $password, $connect){
    $sql = "SELECT * FROM users WHERE email = '" . $email .  "' AND password = '" . $password . "'";
    
    $result = mysqli_query($connect, $sql);

    if(mysqli_num_rows($result) == 1){
      $row = mysqli_fetch_assoc($result);
?>
<script>
  var saveLoginData = () =>{
    localStorage.isLogedIn = true;
    localStorage.userImage = "<?php echo $row["image"] ?>";
    localStorage.userId = "<?php echo $row["id"] ?>";
    localStorage.userName = "<?php echo $row["name"] ?>";
    localStorage.userGender = "<?php echo $row["gender"] ?>";
    localStorage.userBirth = "<?php echo $row["birth"] ?>";
    localStorage.userEmail = "<?php echo $row["email"] ?>";
    window.location.href = "../";
  }
  setTimeout(saveLoginData(),500);
</script>
<?php
    }
    else{
      echo "<script type='text/javascript'>alert('Pengguna Tidak Ditemukan');</script>";
    }
  }

  getUser($email, $password, $connect);
?>


