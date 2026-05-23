<?php
session_start();
include 'db.php';
if(!isset($_SESSION['user'])){
    header("Location: login.php");
}
$username = $_SESSION['user'];
$sql = "SELECT * FROM users WHERE username='$username'";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);
if(isset($_POST['update'])){
    $new_username = $_POST['username'];
    $new_email = $_POST['email'];
    $update = "UPDATE users
    SET username='$new_username',
    email='$new_email'
    WHERE id='".$row['id']."'";
    mysqli_query($conn,$update);
    $_SESSION['user'] = $new_username;
    header("Location: profile.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Profile</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="sidebar">
    <div class="logo">
        Blog
    </div>
</div>
<div class="main-content">
    <div class="container">
        <h1>Edit Profile</h1>
        <form method="POST">
            <input type="text"
            name="username"
            value="<?php echo $row['username']; ?>"
            required>
            <input type="email"
            name="email"
            value="<?php echo $row['email']; ?>"
            required>
            <button type="submit"
            name="update">
                Update Profile
            </button>
        </form>
    </div>
</div>
</body>
</html>
