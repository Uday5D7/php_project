<?php
session_start();

include 'db.php';

if(isset($_POST['login'])){

$username = $_POST['username'];

$password = $_POST['password'];

$sql = "SELECT * FROM users
WHERE username='$username'";

$result = mysqli_query($conn,$sql);

$user = mysqli_fetch_assoc($result);

if(password_verify(
$password,
$user['password']
)){

$_SESSION['user']=$username;

header("Location:dashboard.php");

}else{

echo "Invalid Password";

}
}
?>

<form method="POST">

<input type="text"
name="username"
placeholder="Username">

<br><br>

<input type="password"
name="password"
placeholder="Password">

<br><br>

<button name="login">
Login
</button>

</form>