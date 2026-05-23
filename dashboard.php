<?php
include 'db.php';
include 'auth.php';
$post_query = mysqli_query(
$conn,
"SELECT COUNT(*) AS total_posts FROM posts"
);
$post_data = mysqli_fetch_assoc($post_query);
$total_posts = $post_data['total_posts'];
$user_query = mysqli_query(
$conn,
"SELECT COUNT(*) AS total_users FROM users"
);
$user_data = mysqli_fetch_assoc($user_query);
$total_users = $user_data['total_users'];
$today_query = mysqli_query(
$conn,
"SELECT COUNT(*) AS today_posts
FROM posts
WHERE DATE(created_at)=CURDATE()"
);
$today_data = mysqli_fetch_assoc($today_query);
$today_posts = $today_data['today_posts'];
$recent_query = mysqli_query(
$conn,
"SELECT username FROM users
ORDER BY id DESC LIMIT 1"
);
$recent_data = mysqli_fetch_assoc($recent_query);
$recent_user = $recent_data['username'];
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
<div class="main-content">
    <div class="topbar">
        <div>
            <h1>Dashboard</h1>
             <div class="profile-box">
                Welcome,
                <strong>
                    <?php echo $_SESSION['user']; ?>
                </strong>
            </div>
        </div>
    </div>
    <div class="dashboard">
    <div class="card">
        <h2>
            📚 Total Posts
        </h2>
        <h1>
            <?php echo $total_posts; ?>
        </h1>
        <p>
            Total blog posts available in system.
        </p>
    </div>
    <div class="card">
        <h2>
            👥 Registered Users
        </h2>
        <h1>
            <?php echo $total_users; ?>
        </h1>
        <p>
            Users currently registered in application.
        </p>
    </div>
    <div class="card">
        <h2>
            🚀 Today's Posts
        </h2>
        <h1>
            <?php echo $today_posts; ?>
        </h1>
        <p>
            Posts published today by users.
        </p>
    </div>
    <div class="card">
        <h2>
            🔐 Latest User
        </h2>
        <h1>
            <?php echo $recent_user; ?>
        </h1>
        <p>
            Most recently registered user account.
        </p>
    </div>
</div>
</div>
</body>
</html>