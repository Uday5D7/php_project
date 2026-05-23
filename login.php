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
$stmt = $conn->prepare(
"SELECT * FROM users
WHERE username=?"
);
$stmt->bind_param(
"s",
$username
);
$stmt->execute();
$result = $stmt->get_result();
$user = mysqli_fetch_assoc($result);
if($user &&
password_verify(
$password,
$user['password']
)){
$_SESSION['user']
= $user['username'];
$_SESSION['role']
= $user['role'];
header("Location: dashboard.php");
}else{
echo "Invalid Username or Password";
}
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<link rel="stylesheet"
href="style.css">
</head>
<body>
<div class="container">
<h1>User Login</h1>
<form method="POST">
<input type="text"
name="username"
placeholder="Enter Username"
required>
<input type="password"
name="password"
placeholder="Enter Password"
required>
<button type="submit"
name="login">
Login
</button>
</form>
</div>
</body>
</html>
