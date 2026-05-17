<?php
session_start();
if(!isset($_SESSION['user'])){
header("Location:login.php");
}
?>
<link rel="stylesheet"
href="style.css">