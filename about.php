<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<title>Terms Of Services | Be Honest</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="icon" type="image/png" href="images/about.png" />

<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">

<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">

<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<script src="https://kit.fontawesome.com/72755ccb49.js" crossorigin="anonymous"></script>

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
  <a href="https://wissem-hammami.ovh">Contact me</a><br>
  <ul class="social">
  <center><li><img src="images/facebook.png"></li></center>
   <center><li><img src="images/instagram.png"></li></center>
   <center><li><img src="images/twitter.png"></li></center>
  </ul>
  <div class="ab"><center><p>&copy;2020-<script>document.write(new Date().getFullYear())</script><br> All Rights Reserved&trade; </p></center></div>
</div>
</div>
<button onclick="openNav()" class="buttonopen" id="open"><i class="fas fa-bars"></i></button>
<div class="bg-contact2" style="background-image: url('images/bg-01.jpg');">
<div class="container-contact2">
<div class="wrap-contact2">
<div class="contact2-form validate-form" >
<?php
include_once("config.php");
		$sql = mysqli_query($conn, "SELECT COUNT(*) AS nbuser FROM user");
?>
<span class="contact2-form-title">
Terms Of Service
</span>
<div>Terms:</div><br>

<p>These Terms of Use constitute a legally binding agreement made between you, whether personally or on behalf of an entity (“you”) and Be Honest ("Company", “we”, “us”, or “our”), concerning your access to and use of the https://be-honest-msg.000webhostapp.com website as well as any other media form, media channel, mobile website or mobile application related, linked, or otherwise connected thereto (collectively, the “Site”). We are registered in Tunisia. <br><br>You agree that by accessing the Site, you have read, understood, and agreed to be bound by all of these Terms of Use. IF YOU DO NOT AGREE WITH ALL OF THESE TERMS OF USE, THEN YOU ARE EXPRESSLY PROHIBITED FROM USING THE SITE AND YOU MUST DISCONTINUE USE IMMEDIATELY.</p><p>

Supplemental terms and conditions or documents that may be posted on the Site from time to time are hereby expressly incorporated herein by reference. We reserve the right, in our sole discretion, to make changes or modifications to these Terms of Use from time to time . We will alert you about any changes by updating the “Last updated” date of these Terms of Use, and you waive any right to receive specific notice of each such change. Please ensure that you check the applicable Terms every time you use our Site so that you understand which Terms apply. You will be subject to, and will be deemed to have been made aware of and to have accepted, the changes in any revised Terms of Use by your continued use of the Site after the date such revised Terms of Use are posted.</p><br><p>

The information provided on the Site is not intended for distribution to or use by any person or entity in any jurisdiction or country where such distribution or use would be contrary to law or regulation or which would subject us to any registration requirement within such jurisdiction or country. Accordingly, those persons who choose to access the Site from other locations do so on their own initiative and are solely responsible for compliance with local laws, if and to the extent local laws are applicable.</p><br>

<b>The Site is intended for users who are at least 18 years old. Persons under the age of 18 are not permitted to use or register for the Site. </b>
<br><br>
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
