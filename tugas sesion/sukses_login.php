<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: index.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Welcome</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h1>Welcome, <?php echo $_SESSION['username']; ?>!</h1>
    <a href="logout.php" class="btn">Logout</a>
</div>
</body>
</html>