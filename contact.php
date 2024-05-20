<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Contact us</title>
    <link rel="stylesheet" href="contact.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/fontawesome.min.css"
        integrity="sha384-BY+fdrpOd3gfeRvTSMT+VUZmA728cfF9Z2G42xpaRkUGu2 i3DyzpTURDo5A6CaLK" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/eeafe5f46c.js" crossorigin="anonymous"></script>
</head>
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
</head>

<body>
    <section class="header">
        <nav>
            <a href="index.php"><img src="logo.png" class="logo"></a>
            <div class="nav-links" id="navLinks">
                <ul>
                    <li><a href="About.php">ABOUT</a></li>
                    <li><a href="course.php">COURSE</a></li>
                    <li><a href="contact.php">CONTACT</a></li>
                    <li><a href="login.php">LOGIN</a></li>
                    <li><a href="signup.php">SIGNUP</a></li>
                </ul>
            </div>
        </nav>
        <div class="container">
            <h1>Connect With Us</h1>
            <p>We would love to respond to your queries and help you succeed.<br> Feel free to get in touch with us.</p>
            <div class="contact-box">
                <div class="contact-left">
                    <h3>Sent your request</h3>
                    <form action="process.php" method="post">
                        <div class="input-row">
                            <div class="input-group">
                                <label for="name">Name</label>
                                <input type="text" name="name" id="name" placeholder="John">
                            </div>
                            <div class="input-group">
                                <label>Phone</label>
                                <input type="text" name="phone" id="phone" placeholder="+60123456789">
                            </div>
                        </div>

                        <div class="input-row">
                            <div class="input-group">
                                <label>Email</label>
                                <input type="email" name="email" id="email" placeholder="example@gmail.com">
                            </div>
                            <div class="input-group">
                                <label>Subject</label>
                                <input type="text" name="subject" id="subject" placeholder="">
                            </div>
                        </div>

                        <label>Message</label>
                        <textarea name="messages" rows="5" placeholder="Your Message"></textarea>

                        <button type="submit">SEND</button>
                    </form>
                </div>
                <div class="contact-right">
                    <h3>Reach us</h3>

                    <div class="row">
                        <div class="contact-col">
                            <div>
                                <i class="fa fa-home"></i>
                                <span>
                                    <h4>University Drive, Off Persiaran Olahraga 40100</h4>
                                    <p>Shah Alam, Selangor</p>
                                </span>
                            </div>
                            <div>
                                <i class="fa fa-phone"></i>
                                <span>
                                    <h4>(+60) 0355216868</h4>
                                    <p>Monday to Friday, 9AM t0 6PM</p>
                                </span>
                            </div>
                            <div>
                                <i class="fa fa-envelope-o"></i>
                                <span>
                                    <h4>shahalamuniversity@gmail.com</h4>
                                    <p>Email us your query</p>
                                </span>
                            </div>
                    </div>

                </div>
            </div>
        </div>

        <section class="location">
            <h3>Address</h3>
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3984.062742118276!2d101.55033531058969!3d3.0779231535733422!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cc4da1316eb81b%3A0x23c6e1ed816957f4!2z6ams5p2l6KW_5Lqa566h55CG5Y-K56eR5a2m5aSn5a2m!5e0!3m2!1szh-CN!2smy!4v1715618783145!5m2!1szh-CN!2smy"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </section>

</body>

</html>