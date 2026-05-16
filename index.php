<?php
include 'db.php';

$result=mysqli_query(
$conn,
"SELECT * FROM posts"
);
?>

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