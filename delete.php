<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header('Location: admin_dashboard.php');
    exit;
}

include 'db.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $stmt = $pdo->prepare("DELETE FROM users WHERE id = ?");
    $stmt->execute([$id]);

    header('Location: admin_dashboard.php');
    exit;
}
?>