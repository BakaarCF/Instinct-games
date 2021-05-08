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
  body {background-color:black;}
  
  .leftdiv{
    background-color :white;
    width: 40%;
    height: 50%;
    float: right;
    margin-left: 133px;
    border: 3px solid black;
    left: 0%;
    margin-top: 100px;
  }
  .rightdiv{
    background-color: #30593D;
    width: 40%;
    height: 50%;
    float: right;
   border: 3px solid black;
   margin: auto;
   margin-right: 170px;
   right: 0%;
   margin-top: 100px;
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

form {
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
  padding: 0rem 5rem;
  transition: all 0.2s 0.7s;
  overflow: hidden;
  grid-column: 1 / 2;
  grid-row: 1 / 2;
}

form.sign-up-form {
  opacity: 0;
  z-index: 1;
}

form.sign-in-form {
  z-index: 2;
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
  margin-left: 20%;
  
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
  background-color:white; /* Green */
  border: solid;
  color: black;
  padding: 10px 70px;
  text-align: center;
   
  display: inline-block;
  font-size: 16px;
  margin: 10px 450px;
  margin-left: 35%;
  cursor: pointer;
  border-radius: 17px;
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
  margin-top: 25%;
  margin-left: 35%;
  cursor: pointer;
  border-radius: 17px;

}



</style>
<body>

 <div class="rightdiv" >
 
   <h2 style="padding-left:250px;  color: white; padding-top: 50px; "  class="title"  >Sign in</h2>
   <div class="input-field">
    <i class="fas fa-user"></i>
    <input type="text" placeholder="Username" name="username_login"required/>
  </div>
  <div class="input-field">
    <i class="fas fa-lock"></i>
    <input type="password" placeholder="Password"name="password_login"required/> 
  </div>       
         <input type="submit" class="button" value="Sign in" name="submit">
 </div>
 
 <div class="leftdiv">
  <input type="button" onclick="document.location='regesteration.php'" class="button1" value="Sign up" name="submit"> 
  
 </div>
 
</body>

</html>