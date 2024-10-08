<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $reset_token = $_POST['reset_token'];
    $new_password = password_hash($_POST['new_password'], PASSWORD_DEFAULT);

    // Verify the token and check if it's not expired
    $stmt = $pdo->prepare("SELECT * FROM users WHERE reset_token = ? AND reset_expires > NOW()");
    $stmt->execute([$reset_token]);
    $user = $stmt->fetch();

    if ($user) {
        // Update the user's password
        $stmt = $pdo->prepare("UPDATE users SET password = ?, reset_token = NULL, reset_expires = NULL WHERE reset_token = ?");
        $stmt->execute([$new_password, $reset_token]);

        echo "Your password has been successfully reset. You can now <a href='login.php'>login</a>.";
    } else {
        echo "The reset link is invalid or has expired.";
    }
} elseif (isset($_GET['token'])) {
    // Display the reset form if the token is valid
    $reset_token = $_GET['token'];
    $stmt = $pdo->prepare("SELECT * FROM users WHERE reset_token = ? AND reset_expires > NOW()");
    $stmt->execute([$reset_token]);
    $user = $stmt->fetch();

    if ($user) {
        // Display the reset password form
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
        <head>
            <meta charset="UTF-8">
            <title>Reset Password</title>
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
            <h2>Reset Password</h2>

           <div class="sign-in-container">
            <h3>Sign In</h3>
            <form action="forgot_password.php" method="POST">
            <form action="reset_password.php" method="POST">
                <input type="hidden" name="reset_token" value="<?= htmlspecialchars($reset_token) ?>">
                <label for="new_password">New Password:</label>
                <input type="password" id="new_password" name="new_password" required>
                <button type="submit">Reset Password</button>
        <a target="_blank" class="fcc-btn" href="user_login.php">Back to Login</a>
  
            </form>
        </di>
    </section>
            
            </form>
        </body>
        </html>
        <?php
    } else {
        echo "The reset link is invalid or has expired.";
    }
} else {
    echo "Invalid request.";
}
?>
