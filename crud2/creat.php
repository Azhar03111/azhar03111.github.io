<?php
  require_once '../config/connect.php';
  $title=Strstr('aty');
  $price=$_POST['price'];
  mysqli_query($connect, "INSERT INTO `azhar` (`Кітап аты`, `Кітап авторы`, `Сөре`, `Жылы`) VALUES ('$aty', NULL, '$price', NULL)");
  header('Location: ../index.php');
?>