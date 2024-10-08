<?php
include('db.php');

if (isset($_GET['token'])) {
    $token = $_GET['token'];

    // Check if the token exists in the database
    $query = "SELECT email FROM email_verifications WHERE token = '$token'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $email = $row['email'];

        // Mark the email as verified (you may want to create a column 'is_verified' in the users table)
        $update_query = "UPDATE users SET is_verified = 1 WHERE email = '$email'";
        mysqli_query($conn, $update_query);

        // Delete the verification token
        mysqli_query($conn, "DELETE FROM email_verifications WHERE token = '$token'");

        echo "Email verified successfully! You can now log in.";
    } else {
        echo "Invalid token!";
    }
} else {
    echo "No token provided!";
}
?>
