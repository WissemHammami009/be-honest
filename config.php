<?php 
$conn = new mysqli("localhost","root","",'private');

// Check connection
if (!$conn) {
  die("<center>Connection failed retry again: " . mysqli_connect_error()."</center>");
}
?>