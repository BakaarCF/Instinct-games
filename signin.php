<?php  session_start();?> 
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "instinct_games";

if(isset($_POST['signin']))
{
  $conn = mysqli_connect($servername,$username,$password,$dbname);

  $uname=$_POST['user_name'];
  $pass=$_POST['password'];
  $sql = "SELECT * FROM users WHERE user_name = '$uname' AND PASSWORD = '$pass'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) == 1) 
    {
      
      $row = mysqli_fetch_assoc($result);

      if ($row['user_name'] == $uname && $row['PASSWORD'] == $pass)
      {
        $_SESSION['user_name'] = $row['user_name'];
        header("Location:home2.php");
      }
      else
      {
           echo "error";
      }
    }
  }
?>
<html>
  <head>
    
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    
    <title>Sign in & Sign up Form</title>
  </head>
<style>
  body{
    
  }
  
  .leftdiv{
    background-color :white;
    width: 50%;
    height: 100%;
    float: left;
    border: 3px solid black;
    left: 0%;
    
  }
  .rightdiv{
    background-color: #30593D;
    width: 50%;
    height:100%;
    float: right;
   border: 3px solid black;
   right: 0%;
   
  }
 
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body, input {
  font-family: "Poppins", sans-serif;
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
  margin-left: 35%;
  
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


.button {
  background-color:white; 
  border: solid;
  color: black;
  padding: 10px 70px;
  text-align:center;
  display: inline-block;
  font-size: 16px;
  margin: 10px 450px;
  margin-left: 45%;
  cursor: pointer;
  border-radius: 27px;
}
.button:hover {background-color: #006666}

.button:active {
  background-color: #006666;
 
}
.button1{
  background-color:#30593D; /* Green */
  border: solid;
  border-color: black;
  color: white;
  padding: 10px 70px;
  text-align: center;
  display: inline-block;
  font-size: 16px;
  margin-top: 43%;
  margin-left: 35%;
  cursor: pointer;
  border-radius: 27px;

}



</style>
<body>
<form  action ='signin.php' method = 'post'>
 <div class="rightdiv" >
 
   <h2 style="padding-left:460px;  color: white; padding-top: 300px; "  class="title"  >Sign in</h2>
   <div class="input-field">
    <i class="fas fa-user"></i>
    <input type="text" placeholder="Username" name="user_name"required/>
  </div>
  <div class="input-field">
    <i class="fas fa-lock"></i>
    <input type="password" placeholder="Password"name="password"required/> 
  </div>       
  <input type="button"  class="button" value="Sign in" name="submit">
 </div>
 </form>
 <div class="leftdiv">
  <input type="button" onclick="document.location='regesteration.php'" class="button1" value="Sign up" name="submit"> 
 </div>

</body>

</html>