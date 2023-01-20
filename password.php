<?php 
include_once "config1.php";
include_once 'function.php';
?>
<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<title>Forgot Password | Be Honest</title>
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
<body onload="openNav(); changeTitle()" id="body">
	<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="sign.html">Sign up</a>
  <a href="log.html">Sign In</a>
  <a href="about.php">About</a>
  <a href="https://wissem-hammami.ovh">Contact me</a><br>
  <ul class="social">
  <center><li><img src="images/facebook.png"></li></center>
   <center><li><img src="images/instagram.png"></li></center>
   <center><li><img src="images/twitter.png"></li></center>
  </ul>
  <div class="ab"><center><p>&copy;2020-<script>document.write(new Date().getFullYear())</script><br> All Rights Reserved&trade; </p></center></div>
</div>
<?php   
  if (is_numeric($_GET['id'])!=1) {
    ?>
    <div class="bg-contact2" style="background-image: url('images/bg-01.jpg');">
    <div class="container-contact2">
    <div class="wrap-contact2">
        <span class="contact2-form-title">Something is wrong. Retry again</span>
      </div>
    </div>
  </div>
    <?php
    die();
  }
  $token = RandomString();
  $sql1 = $conn->prepare("SELECT alias FROM user WHERE cle = :id");
  $sql1->bindValue('id',$_GET['id']);
  $res_sql= $sql1->execute();
  $res = $sql1->fetchAll();
?>
<button onclick="openNav()" class="buttonopen" id="open"><img src="images/menu.png"></button>
<div class="bg-contact2" style="background-image: url('images/bg-01.jpg');">
<div class="container-contact2">
<div class="wrap-contact2">
  <?php
  foreach ($res as $key ) {
    if (empty($_GET['code'])||($_GET['code'])!=$key['alias']){

    ?>
    <form class="contact2-form validate-form">
      <span class="contact2-form-title">
      Error
      </span>
      <div align="center">Invalid URL. Retry Again Later </div>
    </form>
    <?php
  }
  else  {
    $id= $_GET['id'];
    $code =$_GET['code'];
    $sql2= $conn->prepare("UPDATE user SET alias= :token WHERE cle = :id");
    $sql2->bindValue('token',$token);
    $sql2->bindValue('id',$id);
    $res1 = $sql2->execute();
  ?>
<form class="contact2-form validate-form" action="new_password.php?email=<?php echo $id?>&code=<?php echo $code?>" method="POST" name="pass_form">
<span class="contact2-form-title">
New Password
</span>
<div class="wrap-input2 validate-input" data-validate="Password is required">
<input class="input2" type="password" name="password" minlength="8" required>
<span class="focus-input2" data-placeholder="PASSWORD"></span>
</div>
<div class="wrap-input2 validate-input" data-validate="Password is required">
<input class="input2" type="password" name="passwordretyp" minlength="8" required>
<span class="focus-input2" data-placeholder="PASSWORD AGAIN"></span>
</div>
<div id="outputDiv"></div><br>
<div class="container-contact2-form-btn">
<div class="wrap-contact2-form-btn">
<div class="contact2-form-bgbtn"></div>
<button class="contact2-form-btn" onclick="return pass()">
Reset Password</button>
</div>
</div>
</form>
<?php }}?>
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
