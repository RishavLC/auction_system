<?php
include "config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $role_id = 2; // Default role = user

    $sql = "INSERT INTO users (username, password, role_id) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssi", $username, $password, $role_id);

    if ($stmt->execute()) {
        echo "<script>alert('Registration Successful! Please login.'); window.location='login.php';</script>";
    } else {
        echo "<script>alert('Error: Username already exists!');</script>";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
<div class="form-container">
    <h2>Register</h2>
    <form method="POST">
        <input type="text" name="username" placeholder="Choose Username" required>
        <input type="password" name="password" placeholder="Choose Password" required>
        <button type="submit">Register</button>
        <p>Already have an account? <a href="index.php">Login</a></p>
    </form>
</div>
</body>
</html>
