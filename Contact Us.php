<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="layouts/css/style.css">
    <script src="https://kit.fontawesome.com/b1361fb5d5.js" crossorigin="anonymous"></script>

    <title>Contact Us | Instinct Games</title>
</head>
<body style="background-image: url('layouts/img/map.png');">
    <?php include("includes/nav.php");
    ?>
    <div class="wrapper"style="background-image: url('layouts/img/map.png');" >
       <div class="mailicon">
       <i class="far fa-envelope-open"></i>
        </div>
        <h1 style="text-align: center; color:black;">Drop Us A Message</h1>
        <div class="myprofile">
            <div class="profiledata"  style="background-color:#1b1b1b;">
            <input type="text" class="cus-input"  placeholder="Email"><br>
            <input type="text" class="cus-input"  placeholder="Subject"><br>
            <input type="text" style="height: 200px;"class="cus-input"  placeholder="Write Us A Message"><br>
            <div class="update-btn">
                <input type="button" class="button1 editedd" value="SEND" style="box-shadow: 0 0 15px #30593D;">
            </div>
            </div>
            
        </div>
    </div>
        <?php include("includes/footer.php");
    ?>
</body>
</html>