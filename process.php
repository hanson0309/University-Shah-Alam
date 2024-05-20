<?php
include("mail.php");

extract($_POST);
$query = "INSERT INTO `mail` (`name`,`phone`, `email`, `subject`, `messages`) VALUES ('".$name."', '".$phone."', '".$email."', '".$subject."','".$messages."')";
$result = $mysqli->query($query);
if(!$result){
    echo "Something went Wrong".$mysqli->error;
}

echo"


<script>
alert('Sent Successfully');
document.location.href = 'index.php'
</script>
";
$mysqli->close();



?>
<!DOCTYPE html>
<html>
<head>
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,300;0,600;0,700;1,100;1,200;1,400&display=swap" rel="stylesheet">
<script src="https://kit.fontawesome.com/eeafe5f46c.js" crossorigin="anonymous"></script>
    <title>Login</title>
    <link rel="stylesheet" type = "text/css" href = "login_style.css">
</head>
     <body>
        <section class="header">
            <nav>
                <a href="index.php"><img src="logo.png"class = "logo"></a>
                <div class="nav-links" id="nav-links">
                    <ul>
                        <li><a href="About.html">ABOUT</a></li>
                        <li><a href="course.html">COURSE</a></li>
                        <li><a href="contact.html">CONTACT</a></li>
                        <li><a href="login.php">LOGIN</a></li>
                        <li><a href="signup.php">SIGNUP</a></li>
                    </ul>
                </div>
            </nav>
    <div class="loginbox">
    <img src="user.png" class = "user">
        <form method="post">
            <p>Username</p>
            <input type="text" name ="user_name" placeholder="Enter Username">
            <p>Password</p>
            <input type="password" name ="password" placeholder="Enter Password">
            <input type="submit" value="Login">
            <a href="signup.php">Don't have an account?</a><br>

         </form>
    </div>
</body>
</html>