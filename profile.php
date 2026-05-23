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
?>
<!DOCTYPE html>
<html>
<head>
    <title>Profile Page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="sidebar">
    <div class="logo">
        My Blog
    </div>
    <div class="sidebar-menu">
        <a href="dashboard.php">
            Dashboard
        </a>
        <a href="index.php">
            Home
        </a>
        <a href="add_post.php">
            Add Post
        </a>
        <a href="profile.php">
            Profile
        </a>
        <a href="logout.php">
            Logout
        </a>
    </div>
</div>
<div class="main-content">
    <div class="topbar">
        <div>
            <h1>User Profile</h1>
            <p>Manage your account details</p>
        </div>
    </div>
    <div class="profile-container">
        <div class="profile-card">
            <img src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png">
            <h2>
                <?php echo $row['username']; ?>
            </h2>
            <p>
                Blog User Account
            </p>
            <div class="profile-details">
                <div class="detail-box">
                    <h3>User ID</h3>
                    <p>
                        <?php echo $row['id']; ?>
                    </p>
                </div>
                <div class="detail-box">
                    <h3>Username</h3>
                    <p>
                        <?php echo $row['username']; ?>
                    </p>
                </div>
                <div class="detail-box">
                    <h3>Email</h3>
                    <p>
                        <?php echo $row['email']; ?>
                    </p>
                </div>
                <div class="detail-box">
                    <h3>Role</h3>
                    <p>
                        <?php echo $row['role']; ?>
                    </p>
                </div>
            </div>
            <a href="edit_profile.php">
                <button>
                    Edit Profile
                </button>
            </a>
        </div>
    </div>
</div>
</body>
</html> 