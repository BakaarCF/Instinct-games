<head>
   <?php
   session_start();
   $servername = "localhost";
   $username = "root";
   $password = "";
   $dbname = "instinct_games";
   
   $conn = mysqli_connect($servername,$username,$password,$dbname);

      $sql = "SELECT * FROM pages";
      $rows = mysqli_query($conn,$sql);

      if(!empty($_SESSION['user_id'])) {
         $user_id = $_SESSION['user_id'];
         $sql = "SELECT * FROM users WHERE id = '$user_id'";
         $result = mysqli_query($conn, $sql);
         $user = mysqli_fetch_assoc($result);
      }
    ?>
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
                <li><a href="MyProfile.php?id=<?php echo $_SESSION['user_id']; ?>">PROFILE</a></li>
                <li><a href="Aboutus.php">ABOUT</a></li>
                <div class="dropdown-menu">
               <button class="menu-btn">GAMES <i class="fas fa-angle-down"></i></button>
               <div class="menu-content">
               <!-- <a class="links-hidden" href="GamePage2.php" >ATLAS</a>
               <a class="links-hidden" href="GamePage.php">ARK:Survival Evolved</a> -->
               <?php
                  foreach($rows as $row){
                  
               ?>
               <a class="links-hidden" href="GamePage.php?id=<?php echo $row['id']; ?>"><?php echo $row['page_name']; ?></a>
               <?php } ?>

</div>
</div>
                
                <li><a href="Jobs.php">JOBS</a></li>
                <li><a href="Contact Us.php">CONTACT US</a></li>
            </ul>
        </nav>
        <?php
         if(empty($_SESSION['user_id'])) {
            print '
            <a href="signin.php"><input type="submit" class="button" value="Log in" name="submit"></a>
            <a href="signup.php"><input type="submit" class="Register-button" value="Regstier" name="submit"></a>
            ';
         } else {
            echo "<b style='color: white;'>Welcome, ".$user['name']."</b>";
         }
        
        ?>
         
    </header>
    </html>
     
