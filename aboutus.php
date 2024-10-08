<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PlanAhead - About Us</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<style>
body{
    margin: 0;
    padding: 0;
    font-family: 'Roboto', sans-serif;
}

header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background-color: white;
    padding: 20px;
    color: rebeccapurple;
}

header .logo h1 {
    color:rebeccapurple;
    margin: 0;
}

nav ul {
    list-style-type: none;
    display: flex;
    gap: 20px;
    color: rebeccapurple !important; /* Add !important */
}

nav ul li a {
    text-decoration: none;
    color: rebeccapurple !important; /* Add !important */
   
}

nav ul li a:hover {
            color: orange !important;
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





/* Footer Section */
footer {
    background-color: white;
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
.hero {
    height: 100vh;
    background-image: url('images/hey.gif'); /* Make sure to use the correct background image */
    background-size: cover;
    background-position: center;
    position: relative;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    background-color: rebeccapurple;
}

.overlay {
    background-color: rgba(0, 0, 0, 0.5);
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    display: flex;
    justify-content: center;
    align-items: center;
}

.hero .content {
    text-align: center;
    max-width: 800px;
}

.hero .content h1 {
    font-size: 4rem;
    margin-bottom: 20px;
}

.hero .content p {
    font-size: 1.2rem;
    line-height: 1.8;
    padding: 0 20px;
}


</style>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PlanAhead - Event Management</title>
    <link rel="stylesheet" href="css/home.css">
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
    <body>

    <section class="hero">
        <div class="overlay">
            <div class="content">
                <h1>ABOUT US</h1>
                <p>At PlanAhead, we specialize in creating unforgettable events tailored to your vision. Our experienced team handles everything from venue selection to logistics, ensuring a seamless experience for you and your guests. Whether it's a wedding, corporate event, or private party, we're here to make your event a success. Let’s create lasting memories together!</p>
            </div>
        </div>
    </section>
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
