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
    <a href="#" data-title="Manage Users"><i>👥</i><span>Manage Users</span></a>
    <a href="logout.php" data-title="Logout"><i>🚪</i><span>Logout</span></a>
</div>

<div class="topbar">
    <h2>Admin Dashboard</h2>
</div>

<div class="content">
    <h3>Welcome Admin, <?php echo $_SESSION["username"]; ?> 👋</h3>
    <p>Here you can manage users and auctions.</p>
</div>
</body>
</html>
