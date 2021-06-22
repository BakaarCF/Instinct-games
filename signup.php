<?php
    session_start(); 
    include("classes/User.php");

    if(isset($_POST['signup']))
    {
        $usernamee = $_POST['username'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $passwordd = $_POST['password'];
        User::addUser($_POST);
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
<style>

@import "https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css";

body{
    margin: 0;
    padding: 0;
    font-family: sans-serif;
    
    }

@keyframes animate
{
    
    0%,100%{
        background-image: url('layouts/img/HomeArk.jpg');
    }

    75%{
        background-image: url('layouts/img/Atlas7.jpg');

    }
    
    50%{
        background-image: url('layouts/img/ARK5.jpg');

    }
    
    25%{
        background-image: url('layouts/img/Atlas8.jpg');

    }

}


</style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="layouts/css/style.css">
    <title>SignUp | Instinct Games</title>
    <link rel="icon" href="images/Bakaar.png" type="image/x-icon">
</head>
<body>
<div class= "Signin-container">
    </div>
        <form action="signup.php" method="POST">
        <div class="login-box">
            <h1>Sign Up</h1>
        <div class="textbox">
        <i class="fa fa-user" aria-hidden="true"></i>
            <input type="text" placeholder="Fullname" name="name" value="" required>
        </div>
        <div class="textbox">
        <i class="fa fa-user" aria-hidden="true"></i>
            <input type="text" placeholder="Username" name="username" value="" required>
        </div>
        <div class="textbox">
        <i class="fa fa-envelope" aria-hidden="true"></i>
            <input type="email" placeholder="Email" name="email" value="" required>
        </div>
        <div class="textbox">
        <i class="fa fa-phone" aria-hidden="true"></i>
            <input type="tel" placeholder="Mobile" pattern="[0-9]{3}[0-9]{4}[0-9]{4}" name="phone" value="" required>
        </div>
        <div class="textbox">
        <i class="fa fa-lock" aria-hidden="true"></i>
            <input type="password" placeholder="Password" name="password" value="" required>
        </div>
        <input class="signin" type="submit" name="signup" value="Sign Up">
    </form>
    
</body>
</html>