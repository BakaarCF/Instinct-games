<?php
    session_start(); 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "instinct_games";

    if(isset($_POST['signup']))
    {
        $usernamee = $_POST['username'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $passwordd = $_POST['password'];

        $conn = mysqli_connect($servername,$username,$password,$dbname);
        $sql = "INSERT INTO users (id,user_name,name,email,phone,password) VALUES (NULL,'$usernamee', '$name', '$email','$phone','$passwordd')";
        if (mysqli_query($conn, $sql)) {
            header("Location:signin.php");
        } else {
            echo "<P color:RED>Error</p> deleting record: " . $conn->error;
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="signin.css">
    <title>Document</title>
</head>
<body>
<div class= "container">
    </div>
        <form action="signup.php" method="POST">
        <div class="login-box">
            <h1>Sign Up</h1>
        <div class="textbox">
        <i class="fa fa-user" aria-hidden="true"></i>
            <input type="text" placeholder="Fullname" name="name" value="" >
        </div>
        <div class="textbox">
        <i class="fa fa-user" aria-hidden="true"></i>
            <input type="text" placeholder="Username" name="username" value="" >
        </div>
        <div class="textbox">
        <i class="fa fa-envelope" aria-hidden="true"></i>
            <input type="text" placeholder="Email" name="email" value="" >
        </div>
        <div class="textbox">
        <i class="fa fa-phone" aria-hidden="true"></i>
            <input type="text" placeholder="Mobile" name="phone" value="" >
        </div>
        <div class="textbox">
        <i class="fa fa-lock" aria-hidden="true"></i>
            <input type="password" placeholder="Password" name="password" value="" >
        </div>
        <input class="signin" type="submit" name="signup" value="Sign Up">
    </form>
    
</body>
</html>