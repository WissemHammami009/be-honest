<?php
session_start();
session_destroy();
// header('Location: log.html');
// exit();
$page = "log.html";
echo '<script type="text/javascript">';
echo 'window.location.href="'.$page.'";';
echo '</script>';
?>