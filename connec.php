<?php
session_start();
include_once("config1.php");
include_once 'function.php';
?>
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
//Requete number 1
$sql = $conn->prepare("SELECT * FROM user WHERE email = :mail AND password = :pass");
$sql->bindValue(":mail",$mail);
$sql->bindParam(':pass',$pass);
$res = $sql->execute();
$data = $sql->fetchAll();

//requete number  2
$sql1 = $conn->prepare("SELECT * FROM user WHERE email = :mail");
$sql1->bindValue(":mail",$mail);
$res1 = $sql1->execute();
$datae = $sql1->fetchAll();
?>
<br>
<?php
if (empty($data) && (!empty($datae))) {
	?>
	<center><div class="alert alert-danger">
  <strong>Warning!</strong>  Password is wrong .
</div></center>
	<?php
	?>
		<ul class="buttoncopyandshare">
	<li class="listcopyandshare"><a href="forgot.php?id=<?php echo $mail; ?>"><button class="copybutton">Reset Password</button></a></li>
	<li class="listcopyandshare"><a href="log.html"><button class="copybutton" >Return To Login</button></a></li></ul>
	<?php
}
else if(empty($data) && (empty($datae))){
	?>
	<center><div class="alert alert-warning">
  <strong>Sorry!</strong> Account not exist.
</div></center>
	<?php
	?>
	<ul class="buttoncopyandshare">
		<li class="listcopyandshare"><a href="sign.html"><button class="copybutton">Create Account</button></a></li>
		<li class="listcopyandshare"><a href="log.html"><button class="copybutton" >Return To Login</button></a></li></ul>
	<?php
}
else {
	?>
	<div class="alert alert-success">
 	 <strong>Success!</strong> Indicates a successful or positive action.
	</div>
	<?php
	$sql2 = $conn->prepare("SELECT cle FROM user WHERE email = :mail");
	$sql2->bindValue('mail',$mail);
	$res3 = $sql2->execute();
	$iden = $sql2->fetchAll();
	$_SESSION['token'] = token_number();
	foreach ($iden as $cle){
		$_SESSION['id'] = $cle['cle'];
	}

	$_SESSION['login']= $_SESSION['token'];
	$link = "posts.php?id=".$_SESSION['id']."&session_id=".$_SESSION['token'];
	echo '<script type="text/javascript">';
	echo 'window.location.href="'.$link.'";';
	echo '</script>';
	?>
	<br>
	<ul class="buttoncopyandshare1">
		<li class="listcopyandshare1"><a href="<?php echo $link ?>"><button class="copybutton" autofocus>Continue</button></a></li>
	<?php
}
$conn = null;
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
