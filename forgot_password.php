<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    
    // Check if the user with this email exists
    $stmt = $pdo->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->execute([$email]);
    $user = $stmt->fetch();

    if ($user) {
        // Generate a unique reset token and expiration time
        $reset_token = bin2hex(random_bytes(32));
        $reset_expires = date('Y-m-d H:i:s', strtotime('+1 hour')); // 1 hour from now

        // Store the token in the database
        $stmt = $pdo->prepare("UPDATE users SET reset_token = ?, reset_expires = ? WHERE email = ?");
        $stmt->execute([$reset_token, $reset_expires, $email]);

        // Send the reset link to the user's email
        $reset_link = "http://yourdomain.com/reset_password.php?token=" . $reset_token;
        $subject = "Password Reset Request";
        $message = "Hello, click on the link below to reset your password: " . $reset_link;
        $headers = 'From: no-reply@planahead.com' . "\r\n" .
                   'Reply-To: no-reply@planahead.com' . "\r\n" .
                   'X-Mailer: PHP/' . phpversion();
        
        mail($email, $subject, $message, $headers);
        echo "A password reset link has been sent to your email address.";
    } else {
        echo "No user found with this email address.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <title>Forgot Password</title>
</head>

<style>
    /* General Styles */
body, html {
    margin: 0;
    padding: 0;
    font-family: 'Roboto', sans-serif;
}

header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background-color: #FF6F00;
    padding: 20px;
}

header .logo h1 {
    color: white;
    margin: 0;
}

nav ul {
    list-style-type: none;
    display: flex;
    gap: 20px;
}

nav ul li a {
    text-decoration: none;
    color: white;
    font-weight: 700;
}

.search-profile {
    display: flex;
    align-items: center;
    gap: 10px;
}

.search-profile input {
    padding: 5px;
}

.search-profile img {
    width: 25px;
}

/* Main Content Styles */
.main-content {
    display: flex;
    align-items: center;
    justify-content: space-around;
    padding: 50px;
    background-color: #FF9800;
}

.image-grid {
    display: flex;
    flex-direction: column;
    gap: 10px;
}

.image-grid img {
    width: 250px;
    height: 150px;
    object-fit: cover;
    border-radius: 10px;
}

.content h2 {
    color: white;
    font-size: 36px;
}

.book-btn {
    background-color: white;
    color: #FF6F00;
    padding: 10px 20px;
    border: none;
    font-size: 16px;
    cursor: pointer;
    margin-top: 20px;
}

/* Sign-In Section */
.sign-in-container {
    background-color: white;
    padding: 30px;
    border-radius: 10px;
    text-align: center;
}

.sign-in-container h3 {
    margin-bottom: 20px;
}

.sign-in-container form {
    display: flex;
    flex-direction: column;
}

.sign-in-container form label,
.sign-in-container form input,
.sign-in-container form button {
    margin-bottom: 15px;
    padding: 10px;
}

.sign-in-container form button {
    background-color: #FF6F00;
    color: white;
    border: none;
    cursor: pointer;
}

.sign-in-container a {
    color: #FF6F00;
    text-decoration: none;
}

/* Discover Section */
.discover {
    text-align: center;
    padding: 50px;
    background-color: #F57C00;
}

.discover p {
    color: white;
    font-size: 24px;
    margin: 0;
}

.view-more-btn {
    background-color: white;
    color: #FF6F00;
    padding: 10px 20px;
    border: none;
    font-size: 16px;
    cursor: pointer;
    margin-top: 20px;
}

/* Footer Section */
footer {
    background-color: #FF6F00;
    padding: 20px;
    text-align: center;
}

footer .social-icons {
    display: flex;
    justify-content: center;
    gap: 20px;
}

footer .social-icons img {
    width: 30px;
}

</style>
<body>
    <h2>Forgot Password</h2>

    <div class="sign-in-container">
            <h3>Sign In</h3>
            <form action="forgot_password.php" method="POST">
        <label for="email">Enter your email address:</label>
        <input type="email" id="email" name="email" required>
        <button type="submit">Send Reset Link</button>
        <a target="_blank" class="fcc-btn" href="user_login.php">Back to Login</a>
  
            </form>
        </div>
    </section>
    
</body>
</html>
