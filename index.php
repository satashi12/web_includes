<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="css/home.css">
</head>
<body>
   
        <div class="discover">
            <p>Discover Exciting offers and <br> Unforgettable Experiences with us</p>
            <button class="view-more-btn">View More</button>
        </div>
    
        <!-- Sign-In Container<!-- Header Section -->
    <header>
        <div class="logo">
            <h1>PlanAhead</h1>
        </div>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="login.php">Sign in</a></li>
                <li><a href="services.php">Services</a></li>
                <li><a href="booking.php">Book</a></li>
                <li><a href="#">About Us</a></li>
            </ul>
        </nav>
        <div class="search-user">
            <input type="text" placeholder="Search">
            <i class="fas fa-search"></i>
            <i class="fas fa-user"></i>
        </div>
    </header>

    <br><br><br><br>
    <!-- Main Content Section -->
    <section class="main-content">
        <div class="image-grid">
            <img src="images/catering.PNG" width="100%" alt="Event Setup">
            <img src="images/kasal.PNG" alt="Wedding Event">
            <img src="images/wine.PNG" alt="Catering Service" class="wine-image">
        </div>

        <div class="content">
            <h2>Turn Your Event <br> Dreams into Reality</h2>
            <button class="book-btn">Book Now!</button>
        </div>
    </section>

    <section class="align-section">
        <!-- Discover Section -->
        <div class="sign-in-container">
            <h3>Sign In</h3>
            <form action="login.php" method="POST">
                <div class="input-group">
                    <label for="email">EMAIL :</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="input-group">
                    <label for="password">PASSWORD :</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <button type="submit" class="sign-in-btn">Sign In</button>
                <div class="signup-link">
                    <a href="register.php">Sign Up</a><br>
                    <a href="forgot_password.php">Forgot Password?</a>
                </div>
            </form>
        </div>
    </section>

    <!-- Footer Section with Social Media Icon Images -->
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
