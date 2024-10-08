<?php
require 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Admin Login
    $stmt = $conn->prepare("SELECT * FROM admins WHERE email = :email");
    $stmt->bindParam(':email', $email);
    $stmt->execute();
    $admin = $stmt->fetch();

    if ($admin && password_verify($password, $admin['password'])) {
        session_start();
        $_SESSION['admin'] = $admin['id'];
        header("Location: admin_dashboard.php");
        exit();
    }

    // User Login
    $stmt = $conn->prepare("SELECT * FROM users WHERE email = :email");
    $stmt->bindParam(':email', $email);
    $stmt->execute();
    $user = $stmt->fetch();

    if ($user && password_verify($password, $user['password'])) {
        session_start();
        $_SESSION['user'] = $user['id'];
        header("Location: index.php");
    } else {
        echo "Invalid login credentials.";
    }
}
?>
