<?php
include 'db.php';
if(isset($_POST['save'])){
$title=$_POST['title'];
$content=$_POST['content'];
$sql="INSERT INTO posts
(title,content)
VALUES
('$title','$content')";
mysqli_query($conn,$sql);
header("Location:index.php");
}
?>
<form method="POST">
<input type="text"
name="title"
placeholder="Title">
<br><br>
<textarea name="content">
</textarea>
<br><br>
<button name="save">
Save
</button>
</form>
<link rel="stylesheet"
href="style.css">