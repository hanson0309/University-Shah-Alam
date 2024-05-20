<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="with=device-width, initial-scale=1.0">
        <title>University Shah Alam-About</title>
        <link rel="stylesheet" href="style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/fontawesome.min.css"
        integrity="sha384-BY+fdrpOd3gfeRvTSMT+VUZmA728cfF9Z2G42xpaRkUGu2i3DyzpTURDo5A6CaLK" crossorigin="anonymous">
    </head>
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,300;0,600;0,700;1,100;1,200;1,400&display=swap" rel="stylesheet">
<script src="https://kit.fontawesome.com/eeafe5f46c.js" crossorigin="anonymous"></script>
    <body>
        <section class="sub-header">
            <nav>
                <a href="index.PHP"><img src="logo.png"></a>
                <div class="nav-links" id="navLinks">
                    <i class="fa fa-times" onclick="hideMenu()"></i>
                    <ul>
                        <li><a href="About.php">ABOUT</a></li>
                        <li><a href="course.php">COURSE</a></li>
                        <li><a href="contact.php">CONTACT</a></li>
                        <li><a href="login.php">LOGIN</a></li>
                        <li><a href="signup.php">SIGNUP</a></li>
                    </ul>
                </div>
                <i class="fa fa-bars" onclick="showMenu()"></i>
            </nav>
            <h1>About Us</h1>
        </section>
        <!--about us content-->
        <section class="about-us">
            <div class="row">
                <div class="about-col">
                    <h1>We are the World's largest University</h1>
                    <p>Learn How To Make A Complete Website Using HTML and CSS, Complete HTML and CSS Multiple Pages Website Design Tutorial Step by Step</p>
                    <a href=""class="hero-btn red-btn">EXPLORE NOW</a>
                </div>
                <div class="about-col">
                    <img src="discuss.jpg">
                </div>
            </div>
        </section>
<section class="footer">
    <h4>About Us</h4>
    <p>Learn How To Make A Complete Website Using HTML and CSS, Complete HTML and CSS Multiple Pages Website Design Tutorial Step by Step</p>
    <div class="icons">
        <i class="fab fa-facebook"></i>
        <i class="fab fa-instagram"></i>
        <i class="fas fa-inbox"></i>
        <i class="fab fa-twitter"></i>
    </div>
    <p>Make by hanson </p>
</section>

<script>
var navLinks = document.getElementById("navLinks");
function showMenu(){
    navLinks.style.right = "0";
}
function hideMenu(){
    navLinks.style.left = "-200px";
}
</script>
    </body>
</html>