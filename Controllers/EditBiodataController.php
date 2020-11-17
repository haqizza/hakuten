<?php
  include("../config/connection.php");

  $id = $_POST["userId"];
  $name = $_POST["userName"];
  $gender = $_POST["userGender"];
  $birth = $_POST["userBirth"];
  $email = $_POST["userEmail"];

  $sql = "UPDATE users SET name = '$name', gender = '$gender', birth = '$birth', email = '$email' WHERE id = $id ";
  mysqli_query($connect, $sql);

  $sql = "SELECT * FROM users WHERE id = $id";
  $result = mysqli_query($connect, $sql);
  $row = mysqli_fetch_assoc($result);
?>
<script>
  localStorage.userId = "<?php echo $row["id"] ?>";
  localStorage.userName = "<?php echo $row["name"] ?>";
  localStorage.userGender = "<?php echo $row["gender"] ?>";
  localStorage.userBirth = "<?php echo $row["birth"] ?>";
  localStorage.userEmail = "<?php echo $row["email"] ?>";
  window.location.href = "../Account.php";
 </script>