<?php
  require_once '../config/connect.php';
  $title=$_POST['title'];
  $description=$_POST['description'];
  $price=$_POST['price'];
  $opp=$_POST['opp'];
  mysqli_query($connect, "INSERT INTO `azharka` (`ID`, `login`, `password`, `Name`, `Surname`) VALUES (NULL, ' $title', '$description', '$price', '$opp')");

  header('Location: ../index.php');
?>