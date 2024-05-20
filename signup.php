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
            //save to database
            $user_id = random_num(20);
            $query = "insert into users (user_id,user_name,password) values ('$user_id','$user_name','$password')";

            mysqli_query($con,$query);

            echo"
            <script>
                    alert('Sent Successfully');
                    document.location.href = 'index.php'
            </script>
                        ";
            die;
        }else{
            echo"
            <script>
                    alert('Pleace enter some valid information!');
            </script>
            ";
        }
    }

?>
<!DOCTYPE html>
<html>
<head>
    <title>Signup</title>
    <link rel="stylesheet" type = "text/css" href = "login_style.css">
</head>
<body>
    <section class="header">
            <nav>
                <a href="index.php"><img src="logo.png"class = "logo"></a>
                <div class="nav-links" id="nav-links">
                    <ul>
                        <li><a href="About.php">ABOUT</a></li>
                        <li><a href="course.php">COURSE</a></li>
                        <li><a href="contact.php">CONTACT</a></li>
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
            <input type="submit" value="Signup">
            <a href="login.php">Click to Login</a><br>
         </form>
    </div>
</body>
</html>