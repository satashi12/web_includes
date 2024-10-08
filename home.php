<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PlanAhead</title>
    <link rel="stylesheet" href="">
</head>

<style>

    /* General body and layout styles */
body {
    font-family: Arial, sans-serif;
    background-color: white;
    color: white;
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
}

.logo h1 {
    margin: 0;
}

nav ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    display: flex;
    flex-wrap: wrap; /* Allow nav items to wrap on smaller screens */
}

nav ul li {
    margin: 0 15px;
}

nav ul li a {
    color: white;
    text-decoration: none;
    font-size: 18px;
    transition: color 0.3s ease;
}

nav ul li:hover a {
    color: #ff6600;
}

.search-user {
    display: flex;
    align-items: center;
    flex-shrink: 1;
}

.search-user input {
    padding: 5px;
    border-radius: 5px;
    border: none;
    margin-right: 10px;
}

/* Buttons */
.view-more-btn {
    background-color: rebeccapurple;
    color: white;
    border: none;
    padding: 10px 20px;
    font-size: 18px;
    cursor: pointer;
    border-radius: 5px;
    transition: background-color 0.3s ease, transform 0.3s ease;
}
.book-btn {
    background-color: rebeccapurple;
    color: white;
    border: none;
    padding: 10px 20px;
    font-size: 18px;
    cursor: pointer;
    border-radius: 5px;
    transition: background-color 0.3s ease, transform 0.3s ease;
}

.view-more-btn:hover {
    background-color: #ff4500;
    transform: scale(1.05);
}

.book-btn:hover {
    background-color: #ff4500;
    transform: scale(1.05);
}

.book-btn:active, .view-more-btn:active {
    background-color: purple;
    transform: scale(0.98);
}

/* Main Content */
.main-content {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 20px;
    max-width: 1200px;
    margin: 0 auto;
    gap: 20px; /* Add spacing between image grid and content */
}

.image-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 20px;
    width: 50%;
    max-width: 100%;
}

.image-grid img {
    width: 100%;
    height: auto;
    border-radius: 10px;
}

.wine-image {
    grid-column: span 2;
}

.content {
    width: 40%;
    text-align: center;
    font-size: 30px;
    color: rebeccapurple;
}


.align-section {
    display: flex;
    justify-content: space-between; 
    align-items: center;
    max-width: 1200px;
    margin: 40px auto; 
    gap: 50px; 
}


.discover {
    text-align: justify;
    font-size: 30px;
    width: 55%; 
    color: rebeccapurple;
}




/* Footer */
footer {
    text-align: center;
    padding: 20px;
    background-color: rebeccapurple;
}

.social-icons img {
    width: 40px;
    margin: 0 10px;
    transition: transform 0.3s ease;
    border-radius: 50%;
}

.social-icons img:hover {
    transform: scale(1.2);
}

/* Media Queries for Responsiveness */
@media (max-width: 1200px) {
    .main-content {
        flex-direction: row;
        padding: 10px;
    }
}

@media (max-width: 992px) {
    .content {
        font-size: 24px;
    }

    .book-btn, .view-more-btn {
        font-size: 16px;
        padding: 8px 16px;
    }
}

@media (max-width: 768px) {
    .main-content {
        flex-direction: column;
        text-align: center;
    }

    .image-grid {
        grid-template-columns: 1fr; /* Maintain single column grid on smaller screens */
    }

    .content {
        width: 100%;
        margin-top: 20px;
    }

    nav ul {
        flex-direction: column;
        align-items: center;
    }

    nav ul li {
        margin: 10px 0;
    }

    .search-user input {
        width: 80%; /* Adjust search bar size */
    }

    .search-user i {
        font-size: 1.2em; /* Adjust icon sizes */
    }

    
}

@media (max-width: 576px) {
    header {
        flex-direction: column;
        align-items: flex-start;
    }

    .logo h1 {
        font-size: 1.5em;
    }

    .content h2 {
        font-size: 1.8em;
    }
}



.mySlides {
    
    display: none}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: whitesmoke;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
  font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #c2824e;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 1.5s;
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}
</style>
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
                <li><a href="#">About Us</a></li>
            </ul>
        </nav>
    </header>

    <br><br><br><br>

    <!-- Main Content Section with Carousel and Text -->
    <section class="main-content">
        <!-- Carousel Section -->
        <div class="slideshow-container">
            <div class="mySlides fade">
                <div class="numbertext">1 / 3</div>
                <img src="images/ovation+1.jpg" style="width:100%">
                <div class="text">TOP ONE VENUE</div>
            </div>
            <div class="mySlides fade">
                <div class="numbertext">2 / 3</div>
                <img src="images/oha.jpg" style="width:100%">
                <div class="text">TOP TWO VENUE</div>
            </div>
            <div class="mySlides fade">
                <div class="numbertext">3 / 3</div>
                <img src="images/tata.jfif" style="width:100%">
                <div class="text">TOP THREE VENUE</div>
            </div>
            <a class="prev" onclick="plusSlides(-1)">❮</a>
            <a class="next" onclick="plusSlides(1)">❯</a>
        </div>

        <!-- Text Section -->
        <div class="content">
       
    <h2>Turn Your Event <br> Dreams into Reality</h2>
    <a href="booking.php" class="book-btn">Book Now!</a>
</div>
    </section>

    <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
    </div>

    <section class="align-section">
        <!-- Discover Section -->
        <div class="discover">
            <p>Discover Exciting offers and <br> Unforgettable Experiences with us</p>
            <button class="view-more-btn">View More</button>
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

    <script>
        let slideIndex = 0;
        showSlides(slideIndex);

        // Auto play slides every 5 seconds
        setInterval(function() {
            plusSlides(1);
        }, 5000);

        function plusSlides(n) {
            showSlides(slideIndex += n);
        }

        function currentSlide(n) {
            showSlides(slideIndex = n);
        }

        function showSlides(n) {
            let i;
            let slides = document.getElementsByClassName("mySlides");
            let dots = document.getElementsByClassName("dot");
            if (n >= slides.length) { slideIndex = 0 }
            if (n < 0) { slideIndex = slides.length - 1 }
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slides[slideIndex].style.display = "block";
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            dots[slideIndex].className += " active";
        }
    </script>
</body>
</html>
