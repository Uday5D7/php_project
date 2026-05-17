<?php
$conn = mysqli_connect(
    "localhost",
    "root",
    "",
    "blog"
);
if(!$conn){
    die("Connection Failed");
}
?>
<link rel="stylesheet"
href="style.css">