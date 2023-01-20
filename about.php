<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<title>About | Be Honest</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="icon" type="image/png" href="images/about.png" />

<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">

<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">

<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">

<link rel="stylesheet" type="text/css" href="css/util.css">
<link rel="stylesheet" type="text/css" href="css/main.css">
<script type="text/javascript" src="script.js"></script>

</head>
<body onload="openNav()">
	 <div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <center><img src="images/logo.png" class="logonav"></center>
  <a href="sign.html">Sign Up</a>
  <a href="log.html">Sign In</a>
  <a href="https://bit.ly/Wissemofficiel">Contact me</a><br>
  <ul class="social">
  <center><li><img src="images/facebook.png"></li></center>
   <center><li><img src="images/instagram.png"></li></center>
   <center><li><img src="images/twitter.png"></li></center>
  </ul>
  <div class="ab"><center><p>&copy;2020-<script>document.write(new Date().getFullYear())</script><br> All Rights Reserved&trade; </p></center></div>
</div>
</div>
<button onclick="openNav()" class="buttonopen" id="open"><img src="images/menu.png"></button>
<div class="bg-contact2" style="background-image: url('images/bg-01.jpg');">
<div class="container-contact2">
<div class="wrap-contact2">
<div class="contact2-form validate-form" >
<?php
include_once("config.php");
		$sql = mysqli_query($conn, "SELECT COUNT(*) AS nbuser FROM user");
?>
<span class="contact2-form-title">
About
</span>
<div>Be Honest designed for you. For honestly send and receive message anonymously. <br>
You can easily create an <u>account</u> here and share <u>it</u> in your social media account.<br>
Any message received here is anonymously from the sender.<br><br>
<b>Terms: </b><ol><li>Make sure that your E-mail is correct. </li>
<li>The developer will verify all emails later and the invalid one will be deleted.</li></ol>  </div><br>
<p>Number of user until now: <?php $data= mysqli_fetch_array($sql); echo $data['nbuser']; ?></p>
<div class="thanks">Thanks for using <b class="site">Be Honest</b>.</div>
</div>
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
