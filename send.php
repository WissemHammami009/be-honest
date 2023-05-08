<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<title>Sent Message | Be Honest
</title>
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
<?php 

if (isset($_GET['id'])) { 
include_once("config.php");
		$sql = mysqli_query($conn, "SELECT nom FROM user WHERE cle = '".$_GET['id']."'");
		$data= mysqli_fetch_array($sql);
		
		?>
	
	<div class="container-contact2">
	<div class="wrap-contact2">
	<form class="contact2-form validate-form" action="send1.php?id=" method="POST">
	<span class="contact2-form-title">
	Be Honest
	</span>
	<label for="send">
		<?php
		if (empty($data)) {
			?><div class="invalid_id">
			Sorry .! Try a valid Link</center>
			<?php
			die();
		}?>
	<p >Send Message To: <b><u><?php echo $data['nom']; ?></u></b></p><br></label>
	<div class="wrap-input2 validate-input" data-validate="Message is required">
	<textarea class="input2" name="message" id="send"></textarea>
	<span class="focus-input2" data-placeholder="MESSAGE"></span>
	</div>

<?php 

	$_SESSION['id'] = $_GET['id']; ?>
	<div class="container-contact2-form-btn">
	<div class="wrap-contact2-form-btn">
	<div class="contact2-form-bgbtn"></div>
	<button class="contact2-form-btn">
	Send</button>
	</div>
	</div>
	</form>
	</div>
	</div>
	</div>
<?php }
else {  ?>
		<div class="container-contact2">
	<div class="wrap-contact2">
	<form class="contact2-form validate-form" action="send1.php?id=" method="POST">
	<span class="contact2-form-title">
	Be Honest
	</span>
	<p><center>Retry again with a valid <b>ID</b>.</center></p>
	
	</form>
	</div>
	</div>
	</div>
<?php } ?>
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="vendor/select2/select2.min.js"></script>
	<script src="js/main.js"></script>


</body>
</html>
