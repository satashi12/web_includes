<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $stmt = $pdo->prepare("SELECT * FROM users WHERE username = ?");
    $stmt->execute([$username]);
    $user = $stmt->fetch();

    if ($user && password_verify($password, $user['password'])) {
        session_start();
        $_SESSION['user'] = $user['username'];
        header('Location: user_dashboard.php');
    } else {
        echo "Invalid username or password.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Login</title>
    <link rel="stylesheet" href="css/home.css">
</head>

<style>
    /* General Styles */
body{
    margin: 0;
    padding: 0;
    font-family: 'Roboto', sans-serif;
    background-color: white;
}

header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background-color: white;
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
    color: rebeccapurple;
    font-weight: 700;
    font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}



/* Main Content Styles */
.main-content {
    display: flex;
    align-items: center;
    justify-content: space-around;
    padding: 50px;
    background-color: rebeccapurple;
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
    color: rebeccapurple;
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
    background-color: rebeccapurple;
    color: white;
    border: none;
    cursor: pointer;
}

.sign-in-container a {
    color: rebeccapurple;
    text-decoration: none;
}

/* Discover Section */
.discover {
    text-align: center;
    padding: 50px;
    background-color:white;
}

.discover p {
    color: rebeccapurple;
    font-size: 24px;
    margin: 0;
}
.logo h1 {
    margin: 0;
    background-color: rebeccapurple;
}

.view-more-btn {
    background-color: rebeccapurple;
    color: white;
    padding: 10px 20px;
    border: none;
    font-size: 16px;
    cursor: pointer;
    margin-top: 20px;
}

/* Footer Section */
footer {
    background-color: rebeccapurple;
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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PlanAhead - Event Management</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
    <!-- Header Section -->
    <header>
        <div class="logo">
            <h1>PlanAhead</h1>
        </div>
        <nav>
            <ul>
            <li><a href="home.php">Home</a></li>
                <li><a href="user_login.php">User Login</a></li>
                <li><a href="admin_login.php">Admin Login</a></li>
                <li><a href="services.php">Services</a></li>
                <li><a href="booking.php">Book</a></li>
                <li><a href="aboutus.php">About Us</a></li>
            </ul>
        </nav>
        
    </header>

    <!-- Main Section with Images and Sign-In Form -->
    <section class="main-content">
        <div class="image-grid">
            <img src="images/catering.PNG" alt="Event Setup">
            <img src="images/kasal.PNG" alt="Wedding Event">
            <img src="images/wine.PNG" alt="Catering Service">
        </div>

        <div class="content">
            <h2>Turn Your Event<br>Dreams into Reality</h2>
            <button class="book-btn">Book Now!</button>
        </div>

        <!-- Sign-In Form -->
        <div class="sign-in-container">
            <h3>Sign In</h3>
            <form action="login.php" method="POST">
                <label for="username">User Name:</label>
                <input type="text" id="username" name="username" required>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
                <button type="submit">Login</button>
                <a href="user_register.php">Sign Up</a> |
                <a href="forgot_password.php">Forgot Password?</a>
            </form>
        </div>
    </section>

    <!-- Discover Section -->
    <section class="discover">
        <p>Discover Exciting offers and <br> Unforgettable Experiences with us</p>
        <button class="view-more-btn">View More</button>
    </section>

    <!-- Footer Section with Social Media Links -->
    <footer>
        <div class="social-icons">
            <a href="https://www.facebook.com" target="_blank">
                <img src="images/Blue-facebook-icon-on-transparent-background-PNG.png" alt="Facebook">
            </a>
            <a href="https://www.twitter.com" target="_blank">
                <img src="images/free-twitter-logo-icon-2429-thumb.png" alt="Twitter">
            </a>
            <a href="https://www.instagram.com" target="_blank">
                <img src="images/15707869.png" alt="Instagram">
            </a>
        </div>
    </footer>
</body>
</html>
