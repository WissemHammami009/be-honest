<?php 
/*$username = 'id16543245_wissem_hammami';
$password = '-byX}%aPeb8Y_1q_';*/
$username = "root";
$password="";
try {
  $status = 'mysql:host=localhost;dbname=private';
  $conn = new PDO($status, $username, $password);
  }
catch (PDOExeption $e){
  echo "Erreur: ".$e->getMessage();
}
?>