<?php session_start(); 
include_once("config.php");?>
<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<title>Sign In | Be Honest</title>
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

</head>
<body>
<div class="bg-contact2" style="background-image: url('images/bg-01.jpg');">
<div class="container-contact2">
<div class="wrap-contact2">

<br>
<?php 
if (isset($_POST)) {
$mail = $_POST['email'];
$pass = $_POST['pass'];
}
$sql = mysqli_query($conn, "SELECT * FROM user WHERE email = '".$mail."' AND password = '".$pass."'");
$sql1 = mysqli_query($conn, "SELECT * FROM user WHERE email = '".$mail."'");
$data= mysqli_fetch_array($sql);
$datae = mysqli_fetch_array($sql1);
?>
<br>
<?php 
if (empty($data) && (!empty($datae))) {
	echo "<center> Password is wrong &#127760;</center>";
	echo "<br>";
	?>
		<ul class="buttoncopyandshare">
	<li class="listcopyandshare"><a href="forgot.php?id=<?php echo $mail; ?>"><button class="copybutton">Reset Password</button></a></li>
	<li class="listcopyandshare"><a href="log.html"><button class="copybutton" >Return To Login</button></a></li></ul>
	<?php
}
else if(empty($data) && (empty($datae))){
	echo "<center> Account Not exist </center>";
	echo "<br>";
	?>
	<ul class="buttoncopyandshare">
		<li class="listcopyandshare"><a href="sign.html"><button class="copybutton">Create Account</button></a></li>
		<li class="listcopyandshare"><a href="log.html"><button class="copybutton" >Return To Login</button></a></li></ul>
	<?php
}
else {
	echo "<center>Account Verified successfully &#9989;</center>";
	
	$sql2 = mysqli_query($conn, "SELECT cle FROM user WHERE email = '".$mail."'");
	$iden = mysqli_fetch_array($sql2);
	$_SESSION['login'] = $iden['cle'];
	$link = "posts.php?id=".$_SESSION['login'];
	?>
	<br> 
	<ul class="buttoncopyandshare1">
		<li class="listcopyandshare1"><a href="posts.php?id=<?php echo $_SESSION['login']; ?>"><button class="copybutton" >Continue</button></a></li>
	<?php
}
mysqli_close($conn);
?>
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
