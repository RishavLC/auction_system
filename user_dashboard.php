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
    <link rel="stylesheet" href="assets/style.css">
    <script>
        function toggleSidebar() {
            document.querySelector(".sidebar").classList.toggle("collapsed");
        }
    </script>
</head>
<body>
<div class="sidebar">
    <span class="collapse-btn" onclick="toggleSidebar()">☰</span>
    <a href="#" data-title="Dashboard"><i>🏠</i><span>Dashboard</span></a>
    <a href="#" data-title="My Auctions"><i>📦</i><span>My Auctions</span></a>
    <a href="logout.php" data-title="Logout"><i>🚪</i><span>Logout</span></a>
</div>

<div class="topbar">
    <h2>User Dashboard</h2>
</div>

<div class="content">
    <h3>Welcome User, <?php echo $_SESSION["username"]; ?> 👋</h3>
    <p>You can browse auctions and place bids.</p>
</div>
</body>
</html>
