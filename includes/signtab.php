<?php session_start();
?>
<html>
<head>
<meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
</head>
<style>
.a
{

}
.a:hover
{
color: #4d84e2;
}
</style>

    <header>
        <div class="logo">
        <a href="home2.php">
            <img class="" src="images/Bakaar.png" alt="logo">
            </a>
        </div>
        <nav>
            <ul class="nav_links">
                <li><a href="home2.php">HOME</a></li>
                <li><a href="#">NEWS</a></li>
                <li><a href="profile.php">PROFILE</a></li>
                <li><a href="Aboutus.php">ABOUT</a></li>
                <li><a href="#">GAMES</a></li>
                <li><a href="#">JOBS</a></li>
                <li><a href="#">CONTACT US</a></li>
                <li><a href="signin.php">Logout</a></li>
            </ul>
        </nav>
        <ul class="nav_links">
        <li> <a  href="profile.php">Welcome  <?php echo  $_SESSION['user_name']; ?></a> </li>
        </ul>
    </header>
    </html>