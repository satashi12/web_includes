<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PlanAhead</title>
    <link rel="stylesheet" href="">
    <style>
        
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: white;
            color:white;
        }

        header {
            background-color: rebeccapurple;
            padding: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        header h1 {
            margin: 0;
            color: white;
        }

     
        nav ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    display: flex;
    flex-wrap: wrap; /* Allow nav items to wrap on smaller screens */
  }

  nav ul li:hover a {
    color: orangered;
}

        nav ul li {
            margin: 0 15px;
        }

        nav ul li a {
            color: white;
            text-decoration: none;
            font-size: 18px;
        }

        .main-content {
            text-align: center;
            padding: 40px;
        }

        /* Service Offerings Section */
        .service-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 15px;
            max-width: 1200px;
            margin: auto;
        }

        .service-grid div {
            position: relative;
        }

        .service-grid img {
            width: 100%;
            height: auto;
            border-radius: 5px;
        }

        .service-grid div::before {
            content: attr(data-title);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 24px;
            font-weight: bold;
            color: white;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.8);
            pointer-events: none;
        }

        h2 {
            font-size: 36px;
            color: rebeccapurple;
        }

        /* Footer */
        footer {
            text-align: center;
            padding: 20px;
            background-color: rebeccapurple;
            position: absolute;
            width: 100%;
        }

        .social-icons {
            margin-top: 20px;
        }

        .social-icons img {
            width: 40px;
            margin: 0 10px;
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

    <!-- Main Content Section -->
    <section class="main-content">
        <h2>WHAT WE OFFER</h2>
        <div class="service-grid">
            <div data-title="CATERING">
                <img src="images/catering.PNG" alt="Catering">
            </div>
            <div data-title="PHOTOGRAPHER VIDEOGRAPHER">
                <img src="images/photo.jpg" alt="Photographer">
            </div>
            <div data-title="RENTALS">
                <img src="images/chair.jpg" alt="Rentals">
            </div>
            <div data-title="WHOLE EVENT PACKAGE">
                <img src="images/bar.jpg" alt="Whole Event Package">
            </div>
            <div data-title="ENTERTAINMENT">
                <img src="images/enter.jpg" alt="Entertainment">
            </div>
            <div data-title="EVENT PLANNER">
                <img src="images/planner.jpg" alt="Event Planner">
            </div>
           
            </div>
        </div>
    </section>

    <!-- Footer Section with Social Media Icons -->
    <footer>
        <p>FOLLOW US ON OUR SOCIAL MEDIA ACCOUNTS</p>
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
