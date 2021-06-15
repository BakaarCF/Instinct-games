<!DOCTYPE html>
<html lang="en">
<head>
  <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "instinct_games";
    
    $conn = mysqli_connect($servername,$username,$password,$dbname);

    $sql = "SELECT * FROM pages";
    $rows = mysqli_query($conn,$sql);
  ?>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="layouts/css/style.css">
    <script src="https://kit.fontawesome.com/b1361fb5d5.js" crossorigin="anonymous"></script>

    <title>Home | Instinct Games</title>
    <link rel="icon" href="images/Bakaar.png" type="image/x-icon">
   <style>
* {box-sizing: border-box}
body {font-family: Verdana, sans-serif; margin:0}
.mySlides {display: none}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  width:100%;
  position: relative;
  margin: auto;
}

.mySlides img {
  height: 600px;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: #1b1b1b;
}

/* Caption text */
.text {
  color: #30593D;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
  background: linear-gradient(to right, rgba(30,87,153,0) 0%,#1b1b1b 50%,#1b1b1b 51%,rgba(225,228,226,0) 99%,rgba(229,229,229,0) 100%);
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}
</style>
</head>
<body>
    
    <?php include("includes/nav.php");
    ?>
    <div class="slideshow-container">

<div class="mySlides fade" >
  
  <img src="layouts/img/Atlas7.jpg" style="width:100%;">
  <div class="text"><b>ATLAS</b></div>
</div>

<div class="mySlides fade">
  
  <img src="layouts/img/ARK2.jpg" style="width:100%;">
  <div class="text"><b>Ark:Survival Evolved</b></div>
</div>

<div class="mySlides fade">
  
  <img src="layouts/img/Atlas8.jpg" style="width:100%;">
  <div class="text"><b>ATLAS</b></div>
</div>
<div class="mySlides fade">
  
  <img src="layouts/img/ARK5.jpg" style="width:100%;">
  <div class="text"><b>Ark:Survival Evolved</b></div>
</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span>
  <span class="dot" onclick="currentSlide(4)"></span>  
</div>
    <!-- <div class="wrapper" style="background-color:#1b1b1b;"> -->
        <!-- <div class="slider">
            <div class="slide-img" >
                <img src="layouts/img/ARK2.jpg" alt=""  >
                <div class="buttonn left">
                <i class="fas fa-long-arrow-alt-left"></i>
                </div>
                <div class="buttonn right">
                <i class="fas fa-long-arrow-alt-right"></i>
                </div>
            </div>
        </div> -->
        <div class="heading mt-30">
            <h1 class="ta-c " style="color:#30593D;">Online Games</h1>
            <p class="ta-c">An online game is a video game that is either partially or primarily played through the Internet or any other computer network available.Online games are ubiquitous on modern gaming platforms, including PCs, consoles and mobile devices, and span many genres, including first-person shooters, strategy games, and massively multiplayer online role-playing games (MMORPG).In 2019, revenue in the online games segment reached $16.9 billion, with $4.2 billion generated by China and $3.5 billion in the United States.Since 2010s, a common trend among online games has been operating them as games as a service, using monetization schemes such as loot boxes and battle passes as purchasable items atop freely-offered games.Unlike purchased retail games, online games have the problem of not being permanently playable, as they require special servers in order to function.</p>
        </div>
         <div class="games">
           <?php
            foreach($rows as $row) {
              $page_id = $row['id'];
              $page_images = "SELECT * FROM page_images WHERE page_id = '$page_id'";
              $rowss = mysqli_query($conn,$page_images);
              $images = mysqli_fetch_assoc($rowss);
            
           ?>
            <div class="game"> 
             <div class="game-heading mt-30">
                    <h3 class="ta-c"><?php echo $row['page_name']; ?></h3>
                </div>
                <div class="game-img">
                <a href="layouts/img/<?php echo $images['image']; ?>" target="_blank">  <img src="layouts/img/<?php echo $images['image']; ?>" alt=""></a>
                </div>
                <div class="game-btn">
                    <input type="button" onclick="document.location='GamePage.php?id=<?php echo $row['id']; ?>'"class="button1 edited" value="VIEW" style="box-shadow: 0 0 15px #30593D;">
                </div>
            </div>
            <?php
            }
            ?>
            <!-- <div class="game">
                <div class="game-heading mt-30">
                    <h3 class="ta-c">ATLAS</h3>
                </div>
                <div class="game-img">
                <a href="layouts/img/AtlasLogoo.jpg" target="_blank">  <img src="layouts/img/AtlasLogoo.jpg" alt="">
                </div>
                <div class="game-btn">
                    <input type="button" onclick="document.location='GamePage2.php'"class="button1 edited" value="VIEW" style="box-shadow: 0 0 15px #30593D;">
                </div>
            </div> -->
        </div>
        
    </div>

    <?php include("includes/footer.php");
    ?>
    <script>
    var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}    
    </script>
</body>
</html>