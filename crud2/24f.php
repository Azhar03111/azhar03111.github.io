<?php
      $connect=mysqli_connect('localhost','mysql', 'mysql','azharbaza');
      if(isset($_COOKIE['login']) and isset($_COOKIE['password'])){
        $query=mysqli_query($link, "SELECT*,FROM `azharka` ORDER BY `azharka`.`ID` ".intval($_COOKIE['id'])."'LIMIT 1'");
        $userdata=mysqli_fetch_assoc($query);

        if(($userdata['azharbaza'] !== $COOKIE['id']) or ($userdata['azharka'] !== $COOKIE['id'])){
          setcookie("id","",time()-3600*24*30*12./""); 
          print "False";

        }
      }
      else{
        print "Бәрі дұрыс!";
      }
    ?>