<?php
include 'auth.php';
if(!isset($_SESSION['user'])){
    header("Location: login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<!-- SIDEBAR -->
<div class="sidebar">
    <div class="logo">
        Blog
    </div>
    <div class="sidebar-menu">
        <a href="login.php">
            Login
        </a>
        <a href="register.php">
            Register
        </a>
        <a href="create.php">
            Create New Post
        </a>
        <a href="profile.php">
            Profile
        </a>
        <a href="logout.php">
            Logout
        </a>
    </div>
</div>
<!-- MAIN CONTENT -->
<div class="main-content">
    <div class="topbar">
        <div>
            <h1>Dashboard</h1>
            <p>Welcome to Blog Professional Dashboard</p>
        </div>
    </div>
    <!-- DASHBOARD CONTENT -->
    <div class="dashboard">
        <div class="card">
            <h2>Total Posts</h2>
            <p>Manage all blog posts efficiently.</p>
        </div>
        <div class="card">
            <h2>User Management</h2>
            <p>Control user access and authentication.</p>
        </div>
        <div class="card">
            <h2>Analytics</h2>
            <p>Monitor project performance and activity.</p>
        </div>
        <div class="card">
            <h2>Security</h2>
            <p>Advanced authentication and protection system.</p>
        </div>
    </div>
</div>
</body>
</html>