<?php
include 'db.php';
include 'auth.php';
$id=$_GET['id'];
mysqli_query(
$conn,
"DELETE FROM posts
WHERE id=$id"
);
header("Location:index.php");
?>
<link rel="stylesheet"
href="style.css">