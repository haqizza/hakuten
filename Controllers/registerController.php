<?php
  include("../config/connection.php");
  session_start();

  $name = $_POST["name"];
  $email = $_POST["email"];
  $password = $_POST["password"];

  $sql = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')";
  mysqli_query($connect, $sql);

  $sql = "SELECT * FROM users WHERE email = '" . $email .  "' AND password = '" . $password . "'";
  $result = mysqli_query($connect, $sql);

  $row = mysqli_fetch_assoc($result);
  $_SESSION["name"] = $row["name"];
  $_SESSION["gender"] = $row["gender"];
  $_SESSION["birth"] = $row["birth"];
  $_SESSION["email"] = $row["email"];
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