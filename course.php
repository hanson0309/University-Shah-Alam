<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="with=device-width, initial-scale=1.0">
        <title>University Shah Alam-Course</title>
        <link rel="stylesheet" href="style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/fontawesome.min.css"
        integrity="sha384-BY+fdrpOd3gfeRvTSMT+VUZmA728cfF9Z2G42xpaRkUGu2 i3DyzpTURDo5A6CaLK" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/eeafe5f46c.js" crossorigin="anonymous"></script>
    </head>
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,300;0,600;0,700;1,100;1,200;1,400&display=swap" rel="stylesheet">
    <body>
        <section class="sub-header">
            <nav>
                <a href="index.php"><img src="logo.png"></a>
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
            <h1>Our Courses</h1>
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

          <!--facilities-->
          <section class="facilities">
            <h1>Our Facilities</h1>
            <p>Learn How To Make A Complete Website Using HTML and CSS, Complete HTML and CSS Multiple Pages Website Design Tutorial Step by Step</p>
    
            <div class="row">
                <div class="facilities-col">
                    <img src="library.jpg">
                    <h3>World Class Library</h3>
                    <p>Learn How To Make A Complete Website Using HTML and CSS, Complete HTML and CSS Multiple Pages Website Design Tutorial Step by Step</p>
                </div>
                <div class="facilities-col">
                    <img src="basketball.jpg">
                    <h3>Largest Play Ground</h3>
                    <p>Learn How To Make A Complete Website Using HTML and CSS, Complete HTML and CSS Multiple Pages Website Design Tutorial Step by Step</p>
                </div>
                <div class="facilities-col">
                    <img src="canteen.jpg">
                    <h3>Canteen</h3>
                    <p>Learn How To Make A Complete Website Using HTML and CSS, Complete HTML and CSS Multiple Pages Website Design Tutorial Step by Step</p>
                </div>
            </div>
        </section>
    
        
<section class="footer">
    <h4>About Us</h4>
    <p>Learn How To Make A Complete Website Using HTML and CSS, Complete HTML and CSS Multiple Pages Website Design Tutorial Step by Step</p>
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
    function showMenu(){
        navLinks.style.right = "0";
    }
    function hideMenu(){
        navLinks.style.right = "-200px";
    }


</script>


    </body>
</html>