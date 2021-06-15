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
.menu-btn {
   background-color: #040008;
   color: white;
   padding: 16px;
   font-family:  "Montserrat",sans-serif;;
   border: none;
}
.dropdown-menu {
   position: relative;
   display: inline-block;
}
.menu-content {
   display: none;
   position: absolute;
   min-width: 160px;
   z-index: 1;
}
.links,.links-hidden{
   display: inline-block;
   color: black;
   padding: 12px 16px;
   text-decoration: none;
   font-size: 18px;
   font-weight: bold;
}
.links-hidden{
   display: block;
}
.links{
   display: inline-block;
}
.links-hidden:hover,.links:hover {
   background-color: #30593D;
}
.dropdown-menu:hover .menu-content {
   display: block;
}
.dropdown-menu:hover .menu-btn {
   background-color: #30593D;
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
                <li><a href="news.php">NEWS</a></li>
                <li><a href="profile.php">PROFILE</a></li>
                <li><a href="Aboutus.php">ABOUT</a></li>
                <div class="dropdown-menu">
<button class="menu-btn">GAMES <i class="fas fa-angle-down"></i></button>
<div class="menu-content">
<a class="links-hidden" href="GamePage2.php" >ATLAS</a>
<a class="links-hidden" href="GamePage.php">ARK:Survival Evolved</a>

</div>
</div>
                <li><a href="#">JOBS</a></li>
                <li><a href="Contact Us.php">CONTACT US</a></li>
                <li><a href="signin.php">Logout</a></li>
            </ul>
        </nav>
        <ul class="nav_links">
        <li> <a  href="profile.php">Welcome  <?php echo  $_SESSION['user_name']; ?></a> </li>
        </ul>
    </header>
    </html>