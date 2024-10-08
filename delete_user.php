<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header('Location: admin_login.php');
    exit;
}

include 'db.php';

if (isset($_GET['id'])) {
    // Sanitize the ID parameter to prevent SQL injection.
    $userId = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);

    // Prepare the delete statement
    $stmt = $pdo->prepare("DELETE FROM users WHERE id = :id");
    $stmt->bindParam(':id', $userId, PDO::PARAM_INT);

    // Execute the deletion and check if successful
    if ($stmt->execute()) {
        // Redirect to the admin dashboard or user management page
        header('Location: admin_dashboard.php?message=User deleted successfully');
    } else {
        // Handle error if the deletion failed
        echo 'Error: Failed to delete the user.';
    }
} else {
    // If no user ID is provided in the URL, redirect back to the dashboard
    header('Location: admin_dashboard.php?error=No user ID specified');
    exit;
}
?>
