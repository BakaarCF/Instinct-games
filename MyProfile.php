<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "instinct_games";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if(isset($_GET['id'])) {
	$user_id = $_GET['id'];
	$sql = "SELECT * FROM users WHERE id = '$user_id'";
    $result = mysqli_query($conn, $sql);
	$user = mysqli_fetch_assoc($result);
} else {
	die("Not Logged In");
}

if(isset($_POST['update'])) {
	$user_id = $_GET['id'];
	$username = $_POST['username'];
	$name = $_POST['name'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$phone = $_POST['phoneno'];

	$filename = $_FILES["image"]["name"];
    $tempname = $_FILES["image"]["tmp_name"]; 
	$folder = "layouts/img/Users/".$filename;

	if (move_uploaded_file($tempname, $folder))  {
		$sql = "UPDATE users SET user_name='$username', name='$name', email='$email' , password='$password' , phone='$phone' , image='$filename' WHERE id='$user_id'";
    	mysqli_query($conn, $sql);
	} else {
		$sql = "UPDATE users SET user_name='$username', name='$name', email='$email' , password='$password' , phone='$phone' , image='$filename' WHERE id='$user_id'";
    	mysqli_query($conn, $sql);
	}

	
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
	<style>
	* {
		margin: 0;
		padding: 0;
		box-sizing: border-box;
		outline: none;
		font-family: 'Poppins', sans-serif;
	}
	
	body {
		height: 100%;
		background-image: url('layouts/img/BG.png');
	}
	
	.pwrapper {
		position: absolute;
		top: 48.9%;
		left: 50.5%;
		transform: translate(-50%, -50%);
		width: 100%;
		max-width: 800px;
		background: rgba(0, 0, 0, 0.8);
		padding: 30px;
		border-radius: 5px;
		box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
	}
	
	.pwrapper .title h1 {
		color: #fff;
		text-align: center;
		margin-bottom: 25px;
	}
	
	.contact-form {
		display: flex;
	}
	
	.input-fields {
		display: flex;
		flex-direction: column;
		margin-right: 4%;
	}
	
	.input-fields,
	.msg {
		width: 48%;
	}
	
	.input-fields .input,
	.msg textarea {
		margin: 10px 0;
		background: transparent;
		border: 0px;
		border-bottom: 2px solid #c5ecfd;
		padding: 10px;
		color: #fff;
		width: 100%;
	}
	
	.msg textarea {
		height: 240px;
	}
	
	::-webkit-input-placeholder {
		/* Chrome/Opera/Safari */
		color: #ffff;
	}
	
	::-moz-placeholder {
		/* Firefox 19+ */
		color: #ffff;
	}
	
	:-ms-input-placeholder {
		/* IE 10+ */
		color: #fff;
	}
	
	.btnxx {
		background: #30593D;
		text-align: center;
		padding: 15px;
		border-radius: 8px;
		color: #fff;
		cursor: pointer;
		text-transform: uppercase;
		width: 355px;
		margin-top: 10px;
		border:none;
	}
	
	input[type="file"] {
		display: none;
	}
	
	label {
		background: #30593D;
		text-align: center;
		 
		padding: 15px 50px;
		border-radius: 8px;
		color: #fff;
		cursor: pointer;
		text-transform: uppercase;
		 
		position:absolute;
		right: 100px;
		bottom: 25px;
	}
	
	@media screen and (max-width: 600px) {
		.contact-form {
			flex-direction: column;
		}
		.msg textarea {
			height: 80px;
		}
		.input-fields,
		.msg {
			width: 100%;
		}
	}
	
	.btn {
		background: #30593D;
		text-align: center;
		padding: 15px;
		border-radius: 5px;
		color: #fff;
		cursor: pointer;
		text-transform: uppercase;
	}
	</style>
</head>

<body>
	<?php include("includes/nav.php");
    ?>
		<h1 class="ta-c heded" style="margin-top:20px; text-shadow:0 0 25px #30593D;">PROFILE</h1>
		<div class="pwrapper">
			<form action="MyProfile.php?id=<?php echo $user_id; ?>" method="POST" enctype="multipart/form-data">
				<div class="title">
					<h1>Amr khaled</h1> 
				</div>
				<div class="contact-form">
					<div class="input-fields">
						<input type="text" class="input" name="name" value="<?php echo $user['name']; ?> " autocomplete="off" placeholder="Name">
						<input type="text" class="input" name="username" value="<?php echo $user['user_name']; ?>" autocomplete="off" placeholder="Address">
						<input type="text" class="input" name="email" value="<?php echo $user['email']; ?>" autocomplete="off" placeholder="Email Address">
						<input type="password" class="input" name="password" value="<?php echo $user['password']; ?>" autocomplete="off" placeholder="Password">
						<input type="text" class="input" name="phoneno" value="<?php echo $user['phone']; ?>" autocomplete="off" placeholder="Phoneno">
						
						<input type="file" id="file" name="image" accept="">
						<label for="file" id="mfile"> Choose a photo </label>
						<div>
						<button type="submit" class="btnxx" name="update">Update</button>
						</div>
						</div> 
							<img style="width:300px;height:300px; margin-left:20px;  border-radius:50%;" src="layouts/img/Users/<?php echo $user['image']; ?>">
							<br> 
						</div>
					</div>
				</div>
				
			</form>
		</div>
		
		</div>
		<div class="footerrrr" style="margin-top:700px;">
			<?php include("includes/footer.php");
    ?>
		</div>
</body>

</html>
