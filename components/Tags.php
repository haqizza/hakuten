<?php
 function getTags($connect){
  $sql = "SELECT * FROM tags";
  
  $result = mysqli_query($connect, $sql);

  if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
?>
<div class="tag p-1 m-1 btn btn-success" onclick="searchTag(this);"><?php echo $row["name"] ?></div>
<?php
  }
    }
  else{
    echo "Tags Tidak Ditemukan";
  }
}

gettags($connect);
?>

