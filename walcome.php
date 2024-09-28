<?php
session_start();
if (!isset($_SESSION['login_user'])) {
    header("location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
</head>
<body>
    <h2>Welcome, <?php echo $_SESSION['login_user']; ?>!</h2>
    <a href="logout.php">Logout</a>
</body>
</html>
