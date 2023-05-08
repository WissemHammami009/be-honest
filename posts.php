<?php session_start();
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
<?php 
include_once("config.php");
?>
<br>
<span class="contact2-form-title">
		Be Honest
	</span>
<?php
if (isset($_SESSION['login']) or isset($_SESSION['refresh'])) {

	$sql2 = mysqli_query($conn, "SELECT nom FROM user WHERE cle = '".$_SESSION['login']."'");
	$row1= mysqli_fetch_array($sql2);
	if (!isset($_SESSION['refresh'])) {
		$_SESSION['refresh'] = $_SESSION['login'];
	}
	?>

	<p>Logged as <u><b><?php echo $row1['nom']; ?></b></u></p>
	<?php
	$sql = "SELECT * FROM comment WHERE ref_user = '".$_SESSION['login']."' ORDER BY date1 DESC";
	$sql1 = mysqli_query($conn,"SELECT COUNT(*) AS nbr_mess FROM comment WHERE ref_user = '".$_SESSION['login']."'");
	$result = $conn->query($sql);
	$link = "https://be-honest-msg.000webhostapp.com/send.php?id=".$_SESSION['login'];
	$linkfb = "https://www.facebook.com/sharer/sharer.php?u=".$link;
	?>
		<form action="log.html">
		<button  name="bt_logout" onclick="<?php session_destroy(); ?>">Logout</button></a></form>
		<br>
	<div class="wrap-input2 validate-input" >
	<input class="input2" type="text" name="email" value="<?php echo $link; ?>" id="url" readonly >
	<span class="focus-input2" data-placeholder=""></span>
	</div>
	<center>
		<ul class="buttoncopyandshare">
	<li class="listcopyandshare"><button class="copybutton" onclick="copy()">Copy</button></li>
	<li class="listcopyandshare"><a href="<?php echo  $linkfb ?>" target="_blank"><button class="copybutton" >Share on Facebook</button></a></li></ul></center><br><br><br><br>
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
			<?php
		while($row = $result->fetch_assoc())  
		{
			?>
			<div class="allmessage">
			<div class="mess" style="border:solid; border-radius: 60px; border-color: #DB1563;">
		 	<center><br>&emsp;<?php echo $row['message'];?></center><br><br>
		 	<center><hr style="border:solid; border-top: 1px; border-radius: 60px; border-color: #DB1563;"></center>
			<center> <p>Anonymous - <?php echo $row['date1']; ?></p></center><br>
			</div>
		</div>
			<br>
		<?php }
	}
	else {
		?>
		<center><br>No Message Here<p>For New message Try to share</p></center><br><br><?php
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
function logout()
{
	if (isset($_POST['bt_logout'])) {
		session_destroy();

		}
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
