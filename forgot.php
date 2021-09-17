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
<form class="contact2-form validate-form" action="resend.php" method="POST" name="login">
<span class="contact2-form-title">
Forgot Password<sub id="sub"> <a href="log.html"><h6>Return to Sign In</h6></a></sub>
</span>
<div id="outputDiv"></div><br>
<div class="wrap-input2 validate-input" data-validate="Valid email is required: ex@abc.xyz">
<input class="input2" type="text" name="email" value="<?php if (isset($_GET['id'])) {echo $_GET['id']; };?>" placeholder="EMAIL" required>
<span class="focus-input2" data-placeholder=""></span>
</div>
<div class="container-contact2-form-btn">
<div class="wrap-contact2-form-btn">
<div class="contact2-form-bgbtn"></div>
<button class="contact2-form-btn" onclick="return verif()">
Reset Password</button>
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
