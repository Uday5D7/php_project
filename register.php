<?php
include 'db.php';
if(isset($_POST['register'])){
$username = $_POST['username'];
$email = $_POST['email'];
if(
!filter_var(
$email,
FILTER_VALIDATE_EMAIL
)
){
echo "Invalid Email";
exit();
}
$password = password_hash(
$_POST['password'],
PASSWORD_DEFAULT
);
if(strlen($password) < 6){
echo "Password Too Short";
exit();
}
$role = "user";
$sql = "INSERT INTO users
(username,email,password,role)
VALUES
('$username',
'$email',
'$password',
'$role')";
mysqli_query($conn,$sql);
echo "Registration Successful";
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Register</title>
<link rel="stylesheet"
href="style.css">
</head>
<body>
<div class="container">
<h1>User Registration</h1>
<form method="POST">
<input type="text"
name="username"
placeholder="Enter Username"
required>
<input type="email"
name="email"
placeholder="Enter Email"
required>
<input type="password"
name="password"
placeholder="Enter Password"
required>
<button type="submit"
name="register">
Register
</button>
</form>
</div>
</body>
</html>