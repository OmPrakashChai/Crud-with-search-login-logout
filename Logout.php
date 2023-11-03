<?php 
session_start();
unset($_SESSION['gmail']);
unset($_SESSION['[pwd']);
header("location:index.php");
die();
?>