<?php 
session_start();
if ($_SESSION['login']==false) {
   $page = "log.html";
      echo '<script type="text/javascript">';
      echo 'window.location.href="'.$page.'";';
      echo '</script>';
      die();
}
include_once 'config1.php'; ?>
<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<title>Delete Message | Be Honest</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="icon" type="image/png" href="images/icons/favicon.ico" />

<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">

<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">

<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">

<link rel="stylesheet" type="text/css" href="css/util.css">
<link rel="stylesheet" type="text/css" href="css/main.css">
<script type="text/javascript" src="script.js"></script>

</head>
<body onload="openNav();" id="body">
	<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="sign.html">Sign up</a>
  <a href="log.html">Sign In</a>
  <a href="about.php">About</a>
  <a href="https://bit.ly/Wissemofficiel">Contact me</a><br>
  <ul class="social">
  <center><li><img src="images/facebook.png"></li></center>
   <center><li><img src="images/instagram.png"></li></center>
   <center><li><img src="images/twitter.png"></li></center>
  </ul>
  <div class="ab"><center><p>&copy;2020-<script>document.write(new Date().getFullYear())</script><br> All Rights Reserved&trade; </p></center></div>
</div>
<button onclick="openNav()" class="buttonopen" id="open"><img src="images/menu.png"></button>
<div class="bg-contact2" style="background-image: url('images/bg-01.jpg');">
<div class="container-contact2">
<div class="wrap-contact2">
<form class="contact2-form validate-form" action="" method="POST" name="login">
<span class="contact2-form-title">
<?php 
$sql = $conn->prepare('DELETE FROM comment WHERE id_mess = :id AND ref_user = :ref');
$sql->bindValue('id',$_GET['id']);
$sql->bindValue('ref',$_GET['id_user']);
$sql->execute();
$test = $sql->rowCount();
 $page = "posts.php?id=".$_SESSION['user_id']."&session_id=".$_SESSION['session'];
if ($test ==0) {
   echo "<center> Something wrong !</center>";
   ?>
   <center><a href="<?php echo $page ?>"></a></center>
   <?php
}
else {
      echo '<script type="text/javascript">';
      echo 'window.location.href="'.$page.'";';
      echo '</script>';
}
?>
</div>
</div>
</form>
</div>
</div>
</div>

<script src="vendor/jquery/jquery-3.2.1.min.js"></script>

<script src="vendor/bootstrap/js/popper.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>

<script src="vendor/select2/select2.min.js"></script>

<script src="js/main.js"></script>


</body>
</html>
