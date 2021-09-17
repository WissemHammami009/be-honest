<?php 
include_once 'function.php';
include_once 'config.php';
 ?>
<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<title>New Password | Be Honest</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="icon" type="image/png" href="images/message.png" />

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
  $mail= $_GET['email'];
  $code =$_GET['code'];
  $pass =$_POST['password'];
  $sql_select_alias = mysqli_query($conn,"SELECT alias_sent,email FROM user WHERE cle = '".$mail."'");
  $row1= mysqli_fetch_array($sql_select_alias);
  if (($code == $row1['alias_sent'])) {
  	$sql_update_pass=mysqli_query($conn,"UPDATE user SET alias_sent= \"\",password='".$pass."' WHERE cle = '".$mail."'");
  	?>
  	<form class="contact2-form validate-form">
  		<span class="contact2-form-title">Password Updated</span>
      <div><a href="log.html">Go to login</a></div>
  	<?php
  }
  else {
  		?>
  	<form class="contact2-form validate-form">
  		<span class="contact2-form-title">Link Exipred Please Try again<a href="forgot.php?id=<?php echo $row1['email']; ?>">Here</a></span>
      <p></p>
  	<?php
  }
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
