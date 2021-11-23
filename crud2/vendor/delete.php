<?php
  require_once '../config/connect.php';
  $id=$_GET['ID'];

  mysqli_query($connect, "DELETE FROM `azharka` WHERE `azharka`.`ID` = '$id'");
  header('Location:/');
?>