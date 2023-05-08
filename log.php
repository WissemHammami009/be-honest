
<!DOCTYPE html>
<?php 

function RandomString()
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $randstring = '';
        for ($i = 0; $i < 50; $i++) {
            $randstring .= $characters[rand(0, strlen($characters)-1)];
        }
        return $randstring;
    }
?>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<title>Sign Up | Be Honest</title>
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
<?php 
include_once("config.php");
?>
<br>
<?php
$alias = RandomString();
$file= "id.php" or die("Unable to open file");
$lines=  file($file);
$num= (int)$lines[1];
$num = $num +1 ;
$filetow = fopen("id.php", "w") or die("unable to open file");
$txt = "<?php \n".$num."\n//All is good wissem !  \n?>";
fwrite($filetow, $txt);
$mail = $_POST['email'];
$pass = $_POST['password'];
$name = $_POST['name'];
$dt = $_POST['dt'];
$sql1 = "SELECT email FROM user";
$result = $conn->query($sql1);
$test = TRUE;
while($row = $result->fetch_assoc())  
{
	if ($row['email'] == $mail) {
		$test = FALSE;
	}
}
if ($test==FALSE) {
		echo "<center>Email Already Exist</center>";
		echo "<center><a href=\"log.html\">Go to login</a></center>";
	}
	else 
	{
			$sql = "INSERT INTO user (cle, nom, dt, email, password, alias) VALUES ('".$num."','".$name."','".$dt."','".$mail."','".$pass."','".$alias."')";
			if ($conn->query($sql) === TRUE) {
  			echo "<center> Account created successfully</center>";
  			$link = "https://bz-honest-msg.000webhostapp.com/send.php?id=".$num;
        	$linkfb = "https://www.facebook.com/sharer/sharer.php?u=".$link;
          ?>
          <br><br>
          <?php
        	echo $link;
          ?><br>
          <center><a href="<?php echo $linkfb; ?>">Share on Facebook</a></center>
          <br><br>
          <a href="log.html">Click Here to Login</a>
  			<br>
      <?php }
      else { ?>
  			<br><a href="sign.html">Unknown Erreur. Try to create an account again</a>
  			<?php
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
