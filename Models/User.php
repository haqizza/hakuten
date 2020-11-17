<?php
  include('../config/connection.php');

  class User {
    public $name = "";
    public $birth = "";
    public $email = "";
    public $password = "";

    public function getUser($email, $password, $connect){
      $sql = "SELECT * FROM users WHERE email = '" . $email .  "' AND password = '" . $password . "'";
      
      $result = mysqli_query($connect, $sql);

      if(mysqli_num_rows($result) == 1){
        $row = mysqli_fetch_assoc($result);
        $this->name = $row["name"];
        $this->birth = $row["birth"];
        $this->email = $row["email"];
        echo $this->name . " " . $this->birth . " " . $this->email;
      }else{
        echo "user not found";
      }
    }
  };
?>