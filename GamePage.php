<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "instinct_games";
   
    $conn = mysqli_connect($servername,$username,$password,$dbname);

    if(isset($_GET['id'])) {
        $page_id = $_GET['id'];
        $sql = "SELECT * FROM pages WHERE id = '$page_id'";
        $rows = mysqli_query($conn,$sql);
        $page = mysqli_fetch_assoc($rows);

        $page_images = "SELECT * FROM page_images WHERE page_id = '$page_id'";
        $rowss = mysqli_query($conn,$page_images);
        $images = mysqli_fetch_assoc($rowss);

    }
      
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="layouts/css/style.css">
    <script src="https://kit.fontawesome.com/b1361fb5d5.js" crossorigin="anonymous"></script>
    <title>GamePage | Instinct Games</title>
    <link rel="icon" href="images/Bakaar.png" type="image/x-icon">
</head>
<body>
<?php
include("database.php");
include("includes/nav.php");
    ?>
    <div class="game-container">
    <div class="game-content">

    
    <h1 style="margin:2px;">WELCOME PLAY FOR EVERYONE <span style="color:#30593D"><?php echo $page['page_name']; ?>!</span></h1>
    <p class="txtt-rotate" style="color:#999; "></p>
<br>

<h1>GOOD TO KNOW</h1>
<br>
<div class="gameinfo">
<ul>
    <li>
        <span>Category:</span>
        "<?php echo $page['category']; ?>"
    </li>
    <li>
        <span>Requirments:</span>
        "<?php echo $page['requirments']; ?>"
    </li>
    <li>
        <span>Multiplayer:</span>
        "<?php echo $page['multiplayer']; ?>"
    </li>
    <li>
        <span>Visual Effect:</span>
        "<?php echo $page['visual_effects']; ?>"
    </li>

</ul>
</div>
<h4 style="font-size: 24px; color: white; text-transform: uppercase; ">GAMEPLAY<h4>
    <br>
<p class="txt-rotate" style="color:#999; "></p>
    
<div class="overview-history">
<ul>
<li style="margin: 0 auto;
  margin-top: 50px;">
<div class="overview-history-videoo">
    <a href="<?php echo $page['video_link']; ?>"><img src="layouts/img/ArkLogo.png" style="vertical-align: middle;
  border-style: none; width:105px; height:6%;" ><i class="far fa-play-circle"></i></a>
  <!-- <iframe width="1904" height="800" src="https://www.youtube.com/embed/5fIAPcVdZO8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
</div>
<div class="overview-history-content">
   
    <h4>
        <a style="color:#999;" href="#">Release Date</a>
    </h4>
    <span style="color:#999;"><?php echo $page['release_date']; ?></span>
</div>
<span style="color:#999;"><?php echo $page['page_name']; ?> Official Launch Trailer!</span>
</li>
</ul>
</div>
<br>
<h4 style="font-size: 24px; color: white; text-transform: uppercase; margin-bottom: 0;">PlatForms<h4> 

<div class="Platforms" style="margin-top:20px;">
    <ul>
        <li style="list-style:none;">
            <a href="https://store.steampowered.com/app/346110/ARK_Survival_Evolved/">
            <button class="platforms-button">Steam </button>
            </a>
            <a href="https://www.microsoft.com/en-us/p/ark-survival-evolved/bnblc4zgfnkb#activetab=pivot:overviewtab">
            <button class="platforms-button">Xbox One </button>
            </a>
            <a href="https://store.playstation.com/ar-lb/product/EP0688-CUSA06782_00-ARKSEGAME0000000">
            <button class="platforms-button">PS5 </button>
            </a>
        </li>
    </ul>
</div>
<h4 style="font-size: 24px; color: white; text-transform: uppercase; margin-top: 20px;">ScreenShots<h4> 
<div class="grid">
<table >
<tr>
    <td><a href="layouts/img/<?php echo $images['image'][0] ?>" target="_blank"><img src="layouts/img/ARK3.png" height="300px" width="100%"/></a></td>
    <td><a href="layouts/img/<?php echo $images['image'][1] ?>" target="_blank"><img src="layouts/img/ARK2.jpg" height="300px" width="100%"/></a></td>
    <td><a href="layouts/img/<?php echo $images['image'][2] ?>" target="_blank"><img src="layouts/img/ARK4.png" height="300px" width="100%"/></a></td>
</tr>
<tr>
    <td><a href="layouts/img/<?php echo $images['image'][3] ?>" target="_blank"><img src="layouts/img/ARK5.jpg" height="300px" width="100%"/></a></td>
    <td><a href="layouts/img/<?php echo $images['image'][4] ?>" target="_blank"><img src="layouts/img/ARK1.jpg" height="300px" width="100%"/></a></td>
    <td><a href="layouts/img/<?php echo $images['image'][5] ?>" target="_blank"><img src="layouts/img/ARK6.jpg" height="300px" width="100%"/></a></td>
</tr>
</table>
</div>
</div>
</div>
    <?php include("includes/footer.php");
    ?>
</body>
<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/typed.min.js"></script>
<script src="js/script.js"></script>
</html>