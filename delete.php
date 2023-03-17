<?php
  include_once "connection.php";
  $id= $_GET['id'];
  $req = mysqli_query($con , "DELETE FROM employe WHERE id = $id");
  header("Location:index.php")
?>