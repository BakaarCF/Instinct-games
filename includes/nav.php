<head>
<style>
    
.menu-btn {
   background-color: #000;
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
   background-color: #30593D;
   color: white;
}
.links,.links-hidden{
   display: inline-block;
   color: white;
   padding: 12px 16px;
   text-decoration: none;
   font-size: 14px;
   font-weight: bold;
}
.links-hidden{
   display: block;
   transition: .3s all;
}
.links{
   display: inline-block;
}
.links-hidden:hover,.links:hover {
   background-color: black;

}
.dropdown-menu:hover .menu-content {
   display: block;
}
.dropdown-menu:hover .menu-btn {
   background-color: #30593D;
}
</style>
</head>
    <header>
        <div class="logo">
        <a href="index.php">
            <img class="" src="images/Bakaar.png" alt="logo">
            </a>
        </div>
        <nav>
            <ul class="nav_links">
                <li><a href="index.php">HOME</a></li>
                <li><a href="news.php">NEWS</a></li>
                <li><a href="MyProfile.php">PROFILE</a></li>
                <li><a href="Aboutus.php">ABOUT</a></li>
                <div class="dropdown-menu">
<button class="menu-btn">GAMES <i class="fas fa-angle-down"></i></button>
<div class="menu-content">
<a class="links-hidden" href="GamePage2.php" >ATLAS</a>
<a class="links-hidden" href="GamePage.php">ARK:Survival Evolved</a>

</div>
</div>
                
                <li><a href="Jobs.php">JOBS</a></li>
                <li><a href="Contact Us.php">CONTACT US</a></li>
            </ul>
        </nav>
         <input type="submit" class="button"onclick="document.location='signin.php'" value="Log in" name="submit">
         <input type="submit" class="Register-button" onclick="document.location='regesteration.php'" value="Regstier" name="submit">
    </header>
    </html>