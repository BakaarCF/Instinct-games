<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "instinct_games";

$conn = mysqli_connect($servername,$username,$password,$dbname);
$user_id = $_SESSION['user_id'];
$count = "SELECT count(id) AS cnt FROM saved_jobs WHERE user_id='$user_id'";
$rowCount = mysqli_query($conn,$count);
$Countt = mysqli_fetch_assoc($rowCount);

$sqll = "SELECT * FROM saved_jobs WHERE user_id='$user_id'";
$resultt = mysqli_query($conn,$sqll);

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="layouts/css/style.css">
    <script src="https://kit.fontawesome.com/b1361fb5d5.js" crossorigin="anonymous"></script>
    <title>Jobs | Instinct Games</title>
    <link rel="icon" href="images/Bakaar.png" type="image/x-icon">
</head>
<body style="background-image: url('layouts/img/BG.png');">
<?php 

include("includes/nav.php");
    ?>
<h3 style="font-weight: bold; color: #F9F9F9; font-size:38.25px;text-align: center; margin:35px; ">
    <span><?php echo $Countt['cnt']; ?> Saved Jobs</span>
</h3>
<div class="jcontainer">
    <div class="jrow">
        <?php
        while($row = mysqli_fetch_assoc($resultt)) {
            $role_id = $row['role_id'];
            $sqlll = "SELECT * FROM roles WHERE id='$role_id' LIMIT 1";
            $resulttt = mysqli_query($conn,$sqlll);
            $job = $resulttt->fetch_assoc();
            // $job = mysql_fetch_row($resulttt);
        ?>

        <div class="jcards">
            <h3><a href="jobDescr.php"><?php echo $job['job']; ?></a></h3>
            <p> <i class="fas fa-map-marker-alt"></i> <?php echo $job['location']; ?></p>
            <a href="jobApply.php?id=<?php echo $row['id']; ?>&user=<?php echo $user_id; ?>"><button class="jbutton">APPLY</button></a>
            
        </div>
        <?php
        }
        ?>
        <!-- <div class="jcards">
            <h3><a href="#">Game designer</a></h3>
            <p><i class="fas fa-map-marker-alt"></i>     Cairo, Egypt</p>
            <button class="jbutton">APPLY</button>
        </div> -->
    </div>

</div>
<!-- <div class="view-more-container">
    <button class="view-more-button">VIEW MORE</button>
</div> -->
<!-- <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script>
        $(".jcards").slice(0, 2).show()
        $(".view-more-button").on("click", function(){
            $(".jcards:hidden").slice(0, 2).slideDown()
            if ($(".jcards:hidden").length == 0) {
                $(".view-more-button").fadeOut('slow')
            }
        })
    </script> -->

<div style="height: 300px;"></div>

<?php include("includes/footer.php");
    ?>  
</body>
</html>