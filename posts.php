<?php 
session_start();
include_once "config.php";
include_once "function.php";
?>
<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<title>All Message | Be Honest</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="icon" type="image/png" href="images/mail.png" />

<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">

<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">

<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">

<script src="https://kit.fontawesome.com/72755ccb49.js" crossorigin="anonymous"></script>

<link rel="stylesheet" type="text/css" href="css/util.css">
<link rel="stylesheet" type="text/css" href="css/main.css">
<script type="text/javascript" src="script.js"></script>
<style type="text/css">
img {
  	padding: 5px;
  	width: 150px;
	}
</style>
</head>
<body>
<div class="bg-contact2" style="background-image: url('images/bg-01.jpg');">
<div class="container-contact2">
<div class="wrap-contact2">
<br>
<span class="contact2-form-title">
		Be Honest
	</span>
<?php
if (isset($_SESSION['login']) AND $_SESSION['login'] == $_GET['session_id']) {
	$_SESSION['session'] = $_GET['session_id'];
	$_SESSION['login'] = $_GET['session_id'];
	$_SESSION['user_id'] = $_GET['id'];
	$sql2 = mysqli_query($conn, "SELECT nom FROM user WHERE cle = '".$_GET['id']."'");
	$row1= mysqli_fetch_array($sql2);
	?>

	<p>Logged as <i class="far fa-user"></i> <u><b><?php echo $row1['nom']; ?></b></u></p>
	<?php
	$sql = "SELECT * FROM comment WHERE ref_user = '".$_GET['id']."' ORDER BY date1 DESC";
	$sql1 = mysqli_query($conn,"SELECT COUNT(*) AS nbr_mess FROM comment WHERE ref_user = '".$_GET['id']."'");
	$result = $conn->query($sql);
	$link = "127.0.0.1/public/send.php?id=".$_GET['id'];
	$linkfb = "https://www.facebook.com/sharer/sharer.php?u=".$link;
	?>
		<form action="logout.php">
		<button  name="bt_logout" class="logoutbutton"  onclick="">Logout <i class="fas fa-sign-out-alt"></i></button></a></form>
		<br>
	<div class="wrap-input2 validate-input" >
	<input class="input2" type="text" name="email" value="<?php echo $link; ?>" id="url" readonly >
	</div>
	<center>
		<ul class="buttoncopyandshare">
	<li class="listcopyandshare"><button class="copybutton" onclick="copy()">Copy <i class="fas fa-link"></i></button></li>
	<li class="listcopyandshare"><a href="<?php echo  $linkfb ?>" target="_blank"><button class="copybutton" >Share on Facebook <i class="fas fa-share"></i></button></a></li></ul></center><br><br><br><br>
	<div id="outtextcopied"></div><br><br>
	
		<br><br><?php
		$data= mysqli_fetch_array($sql1);?>
	
	<?php
	if ($data['nbr_mess']!=0) {
		?>
		<script type="text/javascript">
				function changeTitle() {
					var title = document.title;
					var newTitle = '(' +<?php echo $data['nbr_mess']; ?>  + ') ' + title;
 				  	document.title = newTitle;
					}
				changeTitle();
			</script>
			<button id="clickbtn" onclick="playSound()" style="visibility: hidden;"></button>
			<?php
		while($row = $result->fetch_assoc())  
		{
			?>
			<div class="allmessage">
			<div class="mess">
		 	<center><br>&emsp;<?php echo $row['message'];?></center><br><br>
		 	<center><hr style="border:solid; border-top: 1px; border-radius: 60px; border-color: #DB1563;"></center>
			<center> <p>  <i class="fas fa-user-ninja"></i> Anonymous - <?php echo $row['date1']; ?></p><a href="delete.php?id=<?php echo $row['id_mess'].'&id_user='.$row['ref_user'] ?>"><i class="fas fa-trash" title="Delete this message" style="font-size: 25px;"></i></a></center><br>
			</div>
		</div>
			<br>
		<?php }
		$_POST['sessioncode'] = $_SESSION['login'];
		?> <p><!-- To delete all messages of your account, you can contact <u>The developer</u>. </p><br> -->
		<form action="logout.php">
			<p align="center">Logged as <i class="far fa-user"></i> <u><b><?php echo $row1['nom']; ?></b></u></p>
		<center><button  name="bt_logout" class="logoutbutton logoutfinal" onclick="">Logout <i class="fas fa-sign-out-alt"></i></button></center></form>
		<br>
		<?php

	}
	else {
		?>
		<center><div class="alert alert-info">
  <strong>No new messages !</strong> Please try to share your link to get a message from your friends.
</div></center><?php
	}


	}
else {
	echo "<center>You should connect first</center";
	echo "<br>";
	echo "<br>";
	?>
	<center><a href="log.html">Click Here to return to login page</a></center>
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
