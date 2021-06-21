<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "instinct_games";

if(isset($_POST['signin']))
{
    $conn = mysqli_connect($servername,$username,$password,$dbname);

    $uname = $_POST['user_name'];
    $pass = $_POST['password'];
    $sql = "SELECT * FROM users WHERE user_name = '$uname' AND password = '$pass'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) == 1) 
    {
      
        $row = mysqli_fetch_assoc($result);

        if ($row['user_name'] == $uname && $row['password'] == $pass)
        {
            $_SESSION['user_id'] = $row['id'];
            echo "<script>alert('Logged In');</script>";
            header("Location:index.php");
        }
        else
        {
            echo "<script>alert('error');</script>";
        }
    }
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
    <title>SignIn | Instinct Games</title>
    <link rel="icon" href="images/Bakaar.png" type="image/x-icon">
</head>
<body>
    <div class= "Signin-container">
    </div>
    <form action="signin.php" method="POST">
        <div class="login-box">
            <h1>Login</h1>
        <div class="textbox">
        <i class="fa fa-user" aria-hidden="true"></i>
            <input type="text" placeholder="Username" name="user_name" value="" required>
        </div>
        <div class="textbox">
        <i class="fa fa-lock" aria-hidden="true"></i>
            <input type="password" placeholder="Password" name="password" value=""required>
        </div>
        <input class="signin" type="submit" name="signin" value="Sign In">
    </form>
</body>
</html>