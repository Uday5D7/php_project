<?php
include 'db.php';
include 'auth.php';
$search = "";
$limit = 5;
$page = isset($_GET['page'])
? $_GET['page']
: 1;
$start = ($page - 1) * $limit;
$sql = "SELECT * FROM posts
LIMIT $start, $limit";
if(isset($_GET['search'])){
$search = $_GET['search'];
}
$sql = "SELECT * FROM posts
WHERE title LIKE '%$search%'
OR content LIKE '%$search%'";
$result = mysqli_query($conn,$sql);
?>
<link rel="stylesheet" href="style.css">
<div class="container">
<h1>Blog Posts</h1>
<a href="create.php" class="add-btn">
Add New Post
</a>
<form method="GET" class="search-box">
<input type="text"
name="search"
placeholder="Search posts">
<button type="submit">
Search
</button>
</form>
<h1>All Posts</h1>
<a href="create.php">
Add Post
</a>
<hr>
<?php while(
$row=mysqli_fetch_assoc($result)
){ ?>
<h2>
<?php echo $row['title']; ?>
</h2>
<p>
<?php echo $row['content']; ?>
</p>
<a href="edit.php?id=<?php
echo $row['id']; ?>">
Edit
</a>
<a href="delete.php?id=<?php
echo $row['id']; ?>">
Delete
</a>
<hr>
<?php } ?>
<?php
$total_query = mysqli_query(
$conn,
"SELECT COUNT(*) as total FROM posts"
);
$total_row = mysqli_fetch_assoc($total_query);
$total_posts = $total_row['total'];
$total_pages = ceil(
$total_posts / $limit
);
for($i=1; $i<=$total_pages; $i++){
echo "<a href='index.php?page=$i'>
$i
</a> ";
}
?>
<link rel="stylesheet"
href="style.css">