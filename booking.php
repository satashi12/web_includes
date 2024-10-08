<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PlanAhead Booking</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <style>
        /* General body and layout styles */
        body {
            font-family: Arial, sans-serif;
            background-color: white; /* Change the body background color to white */
            color: rebeccapurple;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Header */
        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
            background-color: rebeccapurple;
            color: white;
        }

        .logo h1 {
            margin: 0;
        }

        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            display: flex;
        }

        nav ul li {
            margin: 0 15px;
        }

        nav ul li a {
            color: white;
            text-decoration: none;
            font-size: 18px;
        }

        nav ul li a:hover {
            color: #3e28bd;
        }

        /* Booking Form Section */
        .booking-section {
            display: flex;
            justify-content: space-around;
            align-items: flex-start;
            padding: 50px;
            background-color: white;
            color: rebeccapurple;
        }

        .booking-form-container {
            background-color: white;
            color: #0d3777;
            padding: 30px;
            border-radius: 10px;
            width: 400px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .booking-form-container h2 {
            color: rebeccapurple;
            margin-bottom: 20px;
        }

        .input-group {
            margin-bottom: 15px;
        }

        .input-group label {
            display: block;
            font-size: 14px;
            margin-bottom: 5px;
        }

        .input-group input {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        .submit-btn {
            width: 100%;
            padding: 10px;
            background-color: rebeccapurple;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }

        .submit-btn:hover {
            background-color: #ff4500;
        }

        /* Thank You Message Section */
        .thank-you-message {
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: rebeccapurple;
            margin-top: 100px;
            color: white;
            padding: 30px;
            border-radius: 10px;
            width: 400px;
            height: 100%;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .thank-you-message h1 {
            font-size: 32px;
            font-weight: bold;
        }

        /* Footer */
        footer {
            text-align: center;
            padding: 20px;
            background-color: #ffffff; /* Change the footer background color to white */
            color: rebeccapurple;
        }

        .social-icons {
            display: flex;
            justify-content: center;
            margin-top: 10px;
        }

        .social-icons a {
            margin: 0 10px;
            transition: transform 0.3s ease;
        }

        .social-icons img {
            width: 40px;
            height: 40px;
            border-radius: 50%;
        }

        .social-icons a:hover img {
            transform: scale(1.2);
        }

        /* Responsive Styles */
        @media (max-width: 768px) {
            .booking-section {
                flex-direction: column;
                text-align: center;
            }

            .booking-form-container,
            .thank-you-message {
                width: 100%;
                margin-bottom: 30px;
            }

            .thank-you-message h1 {
                font-size: 22px;
            }
        }
    </style>
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

    <!-- Booking Form Section -->
    <section class="booking-section">
        <div class="booking-form-container">
            <form action="#">
                <h2>Schedule Your Booking</h2>
                <div class="input-group">
                    <label for="full-name">FULL NAME:</label>
                    <input type="text" id="full-name" required>
                </div>
                <div class="input-group">
                    <label for="contact-number">CONTACT NUMBER:</label>
                    <input type="tel" id="contact-number" required>
                </div>
                <div class="input-group">
                    <label for="email">EMAIL ADDRESS:</label>
                    <input type="email" id="email" required>
                </div>
                <div class="input-group">
                    <label>SCHEDULE YOUR BOOKING:</label>
                    <input type="date" id="booking-date" required>
                    <i class="fas fa-calendar-alt"></i>
                </div>
                <button type="submit" class="submit-btn">SUBMIT</button>
            </form>
        </div>

        <div class="thank-you-message">
            <h1>THANK YOU FOR BOOKING!</h1>
        </div>
    </section>

    <!-- Footer Section with Social Media Icon Images -->
    <footer>
        <p>Connect with us:</p>
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
