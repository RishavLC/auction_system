<?php
session_start();
if (!isset($_SESSION["role_id"]) || $_SESSION["role_id"] != 1) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
</head>
<body>
    <h2>Welcome Admin, <?php echo $_SESSION["username"]; ?>!</h2>
    <p>Here you can manage users, auctions, and system settings.</p>
    <a href="logout.php">Logout</a>
</body>
</html>
