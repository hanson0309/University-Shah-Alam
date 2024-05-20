<?php

session_start();

    include("connection.php");
    include("functions.php");

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        //something was posted
        $user_name = $_POST['user_name'];
        $password = $_POST['password'];

        if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
        {
            //read from database
            $query = "select * from users where user_name = '$user_name' limit 1";

            $result = mysqli_query($con,$query);

            if($result && mysqli_num_rows($result) > 0)
            {
                $user_data = mysqli_fetch_assoc($result);
                
                if($user_data["password"] === $password)
                {
                    $_SESSION['user_id'] = $user_data['user_id'];
                    header("Location: index.php");
                    die;
                }
            }
        }        
             echo "wrong username or password!";
        }else{
        
        }
?>
<!DOCTYPE html>
<html>
<head>
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,300;0,600;0,700;1,100;1,200;1,400&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/fontawesome.min.css"
        integrity="sha384-BY+fdrpOd3gfeRvTSMT+VUZmA728cfF9Z2G42xpaRkUGu2i3DyzpTURDo5A6CaLK" crossorigin="anonymous">
<script src="https://kit.fontawesome.com/eeafe5f46c.js" crossorigin="anonymous"></script>
    <title>Login</title>
    <link rel="stylesheet" type = "text/css" href = "login_style.css">
</head>
     <body>
        <section class="header">
            <nav>
                <a href="index.php"><img src="logo.png"class = "logo"></a>
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
    <div class="row">
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
    </div>

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