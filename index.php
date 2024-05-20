<?php
session_start();

include ("connection.php");
include ("functions.php");

$user_data = check_login($con);

?>



<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="with=device-width, initial-scale=1.0">
    <title>University Shah Alam</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/fontawesome.min.css"
        integrity="sha384-BY+fdrpOd3gfeRvTSMT+VUZmA728cfF9Z2G42xpaRkUGu2 i3DyzpTURDo5A6CaLK" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/eeafe5f46c.js" crossorigin="anonymous"></script>
</head>
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,300;0,600;0,700;1,100;1,200;1,400&display=swap"
    rel="stylesheet">

<body>
    <section class="header">
        <nav>
            <a href="index.php"><img src="logo.png"></a>
            <p>Hello,
                <?php echo $user_data['user_name']; ?>
            <div class="nav-links" id="navLinks">
                <i class="fa fa-times" onclick="hideMenu()"></i>
                <ul>
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="About.php">ABOUT</a></li>
                    <li><a href="course.php">COURSE</a></li>
                    <li><a href="contact.php">CONTACT</a></li>
                    <li><a href="blog.html">BLOG</a></li>
                    <li><a href="logout.php">LOGOUT</a></li>
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>

        <div class="text-box">
            <h1>Shah Alam University</h1>
            <p>
            Learn How To Make A Complete Website Using HTML, PHP and CSS.<br> Complete HTML, PHP and CSS Multiple Pages
            Website Design.
            </p>
            <a href="About.php" class="hero-btn">Visit Us To Know More</a>
        </div>
    </section>

    <!--course-->

    <section class="course">
        <h1>Courses We Offer</h1>
        <p>for learn HTML code.</p>

        <div class="row">
            <div class="course-col">
                <a href="diploma.html">Diploma</a>
                <p>Diploma in Computer Engineering</p>
            </div>

            <div class="course-col">
                <a href="degree.html">Degree</a>
                <p>Bachelor in Computer Science (Hons)</p>
            </div>
            <div class="course-col">
                <a href="master.html">Master</a>
                <p>Master in Computer Science</p>
            </div>
        </div>
    </section>

    <!--campus-->

    <section class="campus">
        <h1>Our Global campus</h1>
        <p>Learn How To Make A Complete Website Using HTML, PHP and CSS.Complete HTML, PHP and CSS Multiple Pages
            Website Design.</p>

        <div class="row">
            <div class="campus-col">
                <img src="malaysia.jpg">
                <div class="layer">
                    <h3>MALAYSIA</h3>
                </div>
            </div>
            <div class="campus-col">
                <img src="china.jpg">
                <div class="layer">
                    <h3>CHINA</h3>
                </div>
            </div>
            <div class="campus-col">
                <img src="japan.jpg">
                <div class="layer">
                    <h3>JAPAN</h3>
                </div>
            </div>
        </div>
    </section>
    <!--facilities-->
    <section class="facilities">
        <h1>Our Facilities</h1>
        <p>Learn How To Make A Complete Website Using HTML, PHP and CSS.Complete HTML, PHP and CSS Multiple Pages
            Website Design.</p>

        <div class="row">
            <div class="facilities-col">
                <img src="library.jpg">
                <h3>World Class Library</h3>
                <p>Learn How To Make A Complete Website Using HTML, PHP and CSS.Complete HTML, PHP and CSS Multiple Pages
            Website Design.</p>
            </div>
            <div class="facilities-col">
                <img src="basketball.jpg">
                <h3>Largest Play Ground</h3>
                <p>Learn How To Make A Complete Website Using HTML, PHP and CSS.Complete HTML, PHP and CSS Multiple Pages
            Website Design.</p>
            </div>
            <div class="facilities-col">
                <img src="canteen.jpg">
                <h3>Canteen</h3>
                <p>Learn How To Make A Complete Website Using HTML, PHP and CSS.Complete HTML, PHP and CSS Multiple Pages
            Website Design.</p>
            </div>
        </div>
    </section>
    <!--call to action-->
    <section class="ctar">
        <h1>Enroll For Our Various Online Courses<br>Anywhere From The World</h1>
        <a href="contact.php" class="hero-btn">CONTACT US</a>
    </section>
    <!--footer-->
    <section class="footer">
        <h4>About Us</h4>
        <p>Learn How To Make A Complete Website Using HTML, PHP and CSS.Complete HTML, PHP and CSS Multiple Pages
            Website Design.</p>
        <div class="icons">
            <a href="https://www.facebook.com/profile.php?id=100081198273591" class="icons" title="facebook">
                <i class="fab fa-facebook"></i>
            </a>
                <a href="https://www.instagram.com/hansonng04/" class="icons" title="instargram">
                    <i class="fab fa-instagram"></i>
                </a>
                    <a href="https://mail.google.com/mail/u/0/#inbox" class="icons"
                        title="inbox me: hansonng00@gmail.com.">
                        <i class="fas fa-inbox"></i>
                    </a>
                        <a href="google.com" class="icons" title="twitter">
                            <i class="fab fa-twitter"></i>
                        </a>
        </div>
    </section>
    <section class="down">
        <p>Make by hanson</p>
    </section>

    <script>

        var navLinks = document.getElementById("navLinks");
        function showMenu() {
            navLinks.style.right = "0";
        }
        function hideMenu() {
            navLinks.style.right = "-200px";
        }


    </script>



</body>

</html>