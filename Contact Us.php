<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="layouts/css/style.css">
    <script src="https://kit.fontawesome.com/b1361fb5d5.js" crossorigin="anonymous"></script>

    <title>ContactUs | Instinct Games</title>
    <link rel="icon" href="images/Bakaar.png" type="image/x-icon">
</head>
<body  id="contact" style="background-image: url('layouts/img/BG.png');">
    <?php include("includes/nav.php");
    ?>
    <div class="contact-section"style = "margin-top:36px;">
      <div class="contact-info"style = "margin-top:40px; margin-right:56px;">
        
        <div><i class="fas fa-map-marker-alt"></i>110 El Merghany St.Heliopolis,
         Cairo,Egypt</div>
        <div><i class="fas fa-envelope"></i>Info@Instinctgames.Com</div>
        <div><i class="fas fa-phone-alt"></i>11341</div>
        <div><i class="fas fa-clock"></i>Sun - Thurs 9:00 AM to 5:00 PM</div>
      </div>
    
      <div class="contact-form"style = "margin-top:10px;">
      <i class="far fa-envelope-open" style = "font-size: 40px; margin-left:323px; color:white;"></i>
          <h2 style="margin-top:20px; color: white;">Drop Us A Message </h2>
        <form class="contact" action="" method="post">
          <input type="text" name="name" class="text-box123" style ="border-radius: 10px;  ;" placeholder="Email" required>
          <input type="email" name="email" class="text-box123"style ="border-radius: 10px" placeholder="Subject" required>
          <textarea name="message" rows="5"style ="border-radius: 10px" placeholder="Your Brief Message" required></textarea>
          <input type="submit" name="submit" class="send-btn"  value="Send A Ticket">
        </form>
      </div>
    </div>
        <?php include("includes/footer.php");
    ?>
</body>
</html>