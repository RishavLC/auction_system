<?php
session_start();
if (!isset($_SESSION["role_id"]) || $_SESSION["role_id"] != 2) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>User Dashboard</title>
</head>
<body>
    <h2>Welcome User, <?php echo $_SESSION["username"]; ?>!</h2>
    <p>Here you can browse auctions, place bids, and view your profile.</p>
    <a href="logout.php">Logout</a>
</body>
</html>
