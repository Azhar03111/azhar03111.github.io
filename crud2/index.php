<?php
  require_once 'config/connect.php';
  $goods=mysqli_query($connect,"SELECT * FROM `azharka`");
  $goods=mysqli_fetch_all($goods);
?>

<html>
<head><link rel="stylesheet" href="ca.css">
  <title>1 keste</title></head>
<body BACKGROUND="42.jpg">


<div class="center" align="center">
  <h1>Тіркелу бөлімі</h1>
  <form action="vendor/create.php" method="post">
    <div class="inputbox">
      <input type="text" name="description">
      <span>Логиніңізді жазыңыз...</span>
    </div>
    <div class="inputbox">
      <input type="text" name="title">
      <span>Құпиясөзді жазыңыз...</span>
    </div>
    <div class="inputbox">
      <input type="text" name="description">
      <span>Есімі</span>
    </div>
    <div class="inputbox">
      <input type="text" name="title">
      <span>Аты-жөні</span>
    </div>
    <div class="inputbox">
      <button type="submit">Қосу</button>
    </div>
  </form>
</div>
<form action="vendor/create.php" method="post">
  <div class="center" align="center">
     <h1>Авторизация</h1>
     <form action="vendor/create.php" method="post">
    <div class="inputbox">
      <input type="text" name="description">
      <span>Логиніңізді жазыңыз...</span>
    </div>
    <div class="inputbox">
      <input type="text" name="title">
      <span>Құпиясөзді жазыңыз...</span>
    </div>
  </form>
    

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
    ?>
    <div class="inputbox">
      <button type="submit"><a href="http://localhost/?elementor_library=azhar">Кіру</a></button>
    </div>
    <div class="inputbox">
      <button type="submit"><a href="crc.html">Кіру</a></button>
    </div>
  </form>
</div>

<TABLE border="1" width="60%" height="400" bgcolor="#FF99CC">
<TR bgcolor="violet">
 <TD><H2>Сіздің ID</H2></TD> <TD><H2>Логин</H2></TD><TD><H2>Құпиясөз</H2></TD><TD><H2>Есімі</H2></TD><TD><H2>Аты-жөні</H2></TD><TD><H2>Жою</H2></TD>
</TR>
<?php
  foreach ($goods as $key => $item) {
    echo '
      <tr>
        <TD>'.$item[0].'</TD> <TD>'.$item[1].'</TD><TD>'.$item[2].'</TD><TD>'.$item[3].'</TD><TD>'.$item[4].'</TD><TD><a href="../vendor/delete.php?id=<?= item[0] ?>">Жою</a></TD>
      </tr>
    ';
  }
?>
</TABLE>

</body>
</html>