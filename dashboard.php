<?php
session_start();

if(!isset($_SESSION['user'])){
    header("Location: login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Dashboard</title>
<link rel="stylesheet" href="style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="dashboard-container">
    <!-- Sidebar -->
    <div class="sidebar">
        <h2 class="logo">MyBlog</h2>
        <ul>
            <li><a href="dashboard.php">Dashboard</a></li>
            <li><a href="index.php">All Posts</a></li>
            <li><a href="create.php">Create Post</a></li>
            <li><a href="register.php">Register User</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </div>
    <!-- Main Content -->
    <div class="main-content">
        <!-- Top Bar -->
        <div class="topbar">
            <h1>Dashboard</h1>
            <div class="profile-box">
                Welcome,
                <strong>
                    <?php echo $_SESSION['user']; ?>
                </strong>
            </div>
        </div>
        <!-- Cards -->
        <div class="cards">
            <div class="card-box">
                <h3>Total Posts</h3>
                <p>0</p>
            </div>
            <div class="card-box">
                <h3>Total Users</h3>
                <p>0</p>
            </div>
            <div class="card-box">
                <h3>Admin Role</h3>
                <p>Enabled</p>
            </div>
            <div class="card-box">
                <h3>Security</h3>
                <p>Protected</p>
            </div>
        </div>
        <!-- Welcome Section -->
        <div class="welcome-section">
            <h2>Welcome to Blog Management System</h2>
            <p>
                This dashboard allows you to manage blog posts,
                users, authentication, search, pagination,
                and security settings.
            </p>
            <a href="create.php" class="dashboard-btn">
                Create New Post
            </a>
        </div>
    
    </div>
</div>
</body>
</html>
