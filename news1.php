<?php
  session_start();
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "instinct_games";
  
  $conn = mysqli_connect($servername,$username,$password,$dbname);

  $sql = "SELECT * FROM news";
  $rowss = mysqli_query($conn,$sql);

  
?>
<!DOCTYPE html>

<html lang="en">

<head>
   
    <?php include("includes/nav.php")?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="layouts/css/style.css">
    <title>News | Instinct Games</title>
    <link rel="icon" href="images/Bakaar.png" type="image/x-icon">
    <style>
    .Styler1{
    background-color: black;
    position: relative;
    color: white;
    height: 250px;
    text-align: center;
    font-size: 45px;
    margin-bottom: 80px;
    margin-right:80px;
    }
        @import url(https://fonts.googleapis.com/css?family=Raleway);

*, *:before, *:after{
  margin: 0;
  padding: 0;
  -webkit-box-sizing: border-box;
  -moz-box-sizing:border-box;
  box-sizing: border-box;
}

body{
  background: #f9f9f9;
  font-size: 16px;
  font-family: 'Raleway', sans-serif;
}

.main-title{
  color: #2d2d2d;
  text-align: center;
  text-transform: capitalize;
  padding: 0.7em 0;
}
</style>
    <div class="Styler1">
    <h1 style="font-size:75px;margin-top:130px;">Upcoming <span style="color:#30593D;">Games</span></h1>
</div>

</head>

<body style="background-color:black;margin-top:10px;">

<?php 
    foreach($rowss as $game){
    
    ?>
<div class="news-containerr">

  <div class="news-content">
    <a href="<?php echo $game['link'];?>" target="_blank">
      <div class="content-overlay"></div>
      <img class="content-image" src="<?php echo $game['img'];  ?>">
      <div class="content-details fadeIn-right">
        <h3><?php echo $game['name']; ?></h3>
        <p><?php echo $game['descripton'];?></p>
      </div>
    </a>
  </div>
</div>
    
    <?php }?>
    

</body>
    <div style="margin-top:500px;">
    
   <?php include("includes/footer.php");?>
    </div>
</html>
