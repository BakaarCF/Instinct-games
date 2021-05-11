<head>
<style>
    
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
</head>
    <header>
        <div class="logo">
            <img class="" src="images/Bakaar.png" alt="logo">
        </div>
        <nav>
            <ul class="nav_links">
                <li><a href="index.php">HOME</a></li>
                <li><a href="#">NEWS</a></li>
                <li><a href="profile.php">PROFILE</a></li>
                <li><a href="#">ABOUT</a></li>
                <div class="dropdown-menu">
<button class="menu-btn">GAMES <i class="fas fa-angle-down"></i></button>
<div class="menu-content">
<a class="links-hidden" href="GamePage2.php">ATLAS</a>
<a class="links-hidden" href="GamePage.php">ARK:Survival Evolved</a>

</div>
</div>
                
                <li><a href="#">JOBS</a></li>
                <li><a href="Contact Us.php">CONTACT US</a></li>
            </ul>
        </nav>
         <input type="submit" class="button" value="Log in" name="submit">
         <input type="submit" class="button1" value="Regstier" name="submit">
    </header>
