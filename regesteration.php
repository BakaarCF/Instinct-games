<?php
 session_start(); 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "instinct_games";

if(isset($_POST['signup']))
{
  $conn = mysqli_connect($servername,$username,$password,$dbname);
  $sql = "INSERT INTO users (user_name, name, e_mail,address,PASSWORD	) VALUES
  ('$_POST[username]', '$_POST[name]', '$_POST[email]','$_POST[address]','$_POST[password]') ";
 
  if (mysqli_query($conn, $sql)) {
    header("Location:signin.php");
 } 
 else {
   echo "<P color:RED>Error</p> deleting record: " . $conn->error;
 }
}

?>
<html>
<head>
</head>
<style>
@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800&display=swap");

*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body, input {
  font-family: "Poppins", sans-serif;
}
.split {
  height: 100%;
  width: 50%;
  position: fixed;
  z-index: 1;
  top: 0;
  overflow-x: hidden;
  padding-top: 20px;
}

.left {
  left: 0;
  background-color: #30593D;;

}


.container {
  position: relative;
  width: 100%;
  background-color: #001a33;
  min-height: 100vh;
  overflow: hidden;
}

.forms-container {
  position: absolute;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
}

.signin-signup {
  position: absolute;
  top: 50%;
  transform: translate(-50%, -50%);
  left: 75%;
  width: 50%;
  transition: 1s 0.7s ease-in-out;
  display: grid;
  grid-template-columns: 1fr;
  z-index: 5;
}
.title {
  font-size: 2.2rem;
  color: #e6e6e6;
  margin-bottom: 10px;
  transform: translate(34%, 50%);
}

.input-field {
  max-width: 380px;
  width: 100%;
  background-color: #f0f0f0;
  margin: 10px 0;
  height: 55px;
  border-radius: 55px;
  display: grid;
  grid-template-columns: 15% 85%;
  padding: 0 0.4rem;
  position: relative;
  transform: translate(41%, 50%);
}

.input-field i {
  text-align: center;
  line-height: 55px;
  color: #8c8c8c;
  transition: 0.5s;
  font-size: 1.1rem;
}

.input-field input {
  background: none;
  outline: none;
  border: none;
  line-height: 1;
  font-weight: 600;
  font-size: 1.1rem;
  color: #000000;
}

.input-field input::placeholder {
  color: #8c8c8c;
  font-weight: 500;
}

.btn {
  width: 150px;
  background-color: #006666;
  border: none;
  outline: none;
  height: 49px;
  border-radius: 49px;
  color: #ffffff;
  text-transform: uppercase;
  font-weight: 600;
  margin: 10px 0;
  cursor: pointer;
  transition: 0.5s;
}

.btn:hover {
  background-color: #4d84e2;
}

.container:before {
  content: "";
  position: absolute;
  height: 2000px;
  width: 2000px;
  top: -10%;
  right: 48%;
  transform: translateY(-80%);
  background-image: linear-gradient(-45deg, #000 0%, #660000 100%);
  transition: 5.8s ease-in-out;
  border-radius: 50%;
  z-index: 6;
}

.panels-container {
  position: absolute;
  height: 100%;
  width: 100%;
  top: 0;
  left: 0;
  display: grid;
  grid-template-columns: repeat(2, 1fr);
}

.panel {
  display: flex;
  flex-direction: column;
  align-items: flex-end;
  justify-content: space-around;
  text-align: center;
  z-index: 6;
}

.left-panel {
  pointer-events: all;
  padding: 3rem 17% 2rem 12%;
}

.right-panel {
  pointer-events: none;
  padding: 3rem 12% 2rem 17%;
}

.panel .content {
  color: #fff;
  transition: transform 0.9s ease-in-out;
  transition-delay: 0.6s;
}

.panel h3 {
  font-weight: 600;
  line-height: 1;
  font-size: 1.5rem;
}

.panel p {
  font-size: 0.95rem;
  padding: 0.7rem 0;
}

.image {
  width: 100%;
  transition: transform 1.1s ease-in-out;
  transition-delay: 0.4s;
}

.btn.transparent {
  margin: 0;
  background: none;
  border: 2px solid #fff;
  width: 130px;
  height: 41px;
  font-weight: 600;
  font-size: 0.8rem;
}

.right-panel .image,
.right-panel .content {
  transform: translateX(800px);
}
.button1 {
  display: inline-block;
  padding: 15px 25px;
  font-size: 20px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: rgb(0, 0, 0);
  background-color: #30593D;
  border: none;
  border-radius: 15px;
  transform: translate(900%, 600%);
}
.button1:hover {background-color: #006666}

.button1:active {
  background-color: #006666;
 
}

.button {
  display: inline-block;
  padding: 15px 25px;
  font-size: 20px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: rgb(0, 0, 0);
  background-color: white;
  border: none;
  border-radius: 15px;
  transform: translate(230%, 50%);
}
.button:hover {background-color: #006666}

.button:active {
  background-color: #006666;
 
}





</style>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      
    ></script>
    <link rel="stylesheet" href="style.css" />
    <title>Sign in & Sign up Form</title>
</head>
<body>

  
  <div class="split left">
      <form class="split left" action ='regesteration.php' method = 'post'>
    <h2 class="title">Sign up</h2>
    
    <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Fullname" name="name" required/>
            </div>
      <div class="input-field">
        <i class="far fa-user-circle"></i>
        <input type="text" placeholder="Username" name="username" required/>
      </div>

      <div class="input-field">
        <i class="fas fa-envelope"></i>
        <input type="email" placeholder="Email"  name="email"required/>
      </div>

      <div class="input-field">
        <i class="fas fa-house-user"></i>
        <input type="text" placeholder="Address"  name="address"required/>
      </div>
     
      <div class="input-field">
        <i class="fas fa-lock"></i>
        <input type="password" placeholder="Password"  name="password"required/>
        </div>
        <button  class="button" value ="signup" name="signup">Sign Up</button>
</div>

</div>

</form>

<button onclick="document.location='signin.php'" class="button1 ">Sign in</button>
</div>

</body>

</html>

 

