<!DOCTYPE html>
<html>
<head>
    <style>
body{
	margin:0 auto;
	
	padding: 0;
	font-family: 'Montserrat', sans-serif;
}
.container{
	width: 100%;
	height: 100%;
	display: flex;
	justify-content: center;
	align-items: center;
	flex-direction: column;
	background-color: black;    
	/* background-size: cover; */
	/* background-position: center center; */
	color: #fff;
	padding: 0;
	margin: 0 auto;
	

}
.about-us{
	display: flex;
	justify-content: center;
	align-items: center;
	width: 100%;
	flex-direction: column;
}
.who-we-are{
	display: flex;
	justify-content: center;
	align-items: center;
	flex-direction: column;
}
.who-we-are span{
	width: 60%;
	align-items: center;
text-align: center;
}
.cards{
	width: 60pc;
	display:flex;
	justify-content: center;
	align-items: center;
    margin:20px;
	flex-wrap:wrap;

}
.card-img{
	border-radius: 70%;
	margin-left: 25%;
}
.cards .card{
	width: 19rem;
	margin: 80px;
	border-color: limegreen;
	border-width: 1
	px;
	border-style: solid;
	margin-bottom: 3px;
	padding-top: 10px;
	
}
.card p{
	font-size: 18px;
}
.card-img1{
	width: 50%;
	height: 9rem;
	background-image: url('layouts/img/Managers/011.jpg');
	background-size:cover;
	background-position:absolute;
	border: 2px solid rgb(0, 173, 72);
}
.card-img2{
	width: 50%;;
	height: 9rem;
	background-image: url('layouts/img/Managers/022.jpg');
	background-size: cover;
	background-position:absolute;
	border: 2px solid rgb(0, 173, 72);
	right: 3px;
}
.card-img3{
	width: 50%;
	height: 8rem;
	background-image: url('layouts/img/Managers/033.jpg');
	background-size: cover;
	background-position:absolute;
	border: 2px solid rgb(0, 173, 72);
}
.card-img4{
	width: 50%;
	height: 8rem;
	background-image: url('layouts/img/Managers/044.jpg');
	background-size: cover;
	background-position:center;
	border: 2px solid rgb(0, 173, 72);
}
    </style>
	<title>about US</title>
	<link rel="stylesheet" type="text/css" href="layouts/css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Dancing+Script|Indie+Flower|Montserrat|Quicksand&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<?php include("includes/nav.php");
    ?>
	<div class="container">
	<div class="ABOTUS">
	<h1>ABOUT INSTINCT GAMES</h1>
	</div>
		<div class="nav">
		<div class="about-us">
			<div class="who-we-are">
				<p style="text-align: center;">Founded in 2011, Instinct Games is Egypt’s leading game development studio. Here at Instinct.<br> Games we aim to develop and produce high quality games on all major platforms utilizing our<br>competent team.</p>
			
                     <br>
				<p style="text-align: center;">Our dream is to build the video game development ecosystem in Egypt to set precedence by </br>creating unique high quality games with worldwide appeal.</p>	
					 <br>
					 <br>
					 <br>
					 <h1>           Core team  </h1>
			</div>
			<div class="cards">
				<div class="card">
					<div class="card-img card-img1"></div>
					<div class="card-body">
						<h2 style="text-align: center;">MOSTAFA HAFEZ</h2>
						<span style = 'margin-left: 28%;'>FOUNDER & CEO</span>
						<p style="text-align: center;">Mostafa  got his career started in 2002  when he co-developed the Reality Engine   (which was eventually sold to Epic Games) and has since worked and directed multiple video game studios such as Artificial Studios & Timeline Interactive.</p>
					</div>
					</div>
			
			
			<div class="card">
					<div class="card-img card-img2"></div>
					<card class="card-body">
						<h2 style="text-align: center;">MOHAMED SEIF</h2>
						<span style = 'margin-left: 15%;'>DEVELOPMENT MANAGER</span>
						<p style="text-align: center;">Mohamed Seif graduated in 2005. Since then he has held many positions teaching, developing and leading and managing different development teams. Seif has managed several game development teams including the teams at Timeline interactive and Instinct Games..</p>
					</card>
				</div>
			<br>
			<div class="card">
					<div class="card-img card-img3"></div>
					<card class="card-body"></card>
						<h2 style="text-align: center;">MUHAMMED YUSUF</h2>
						<span style = 'margin-left: 15%;'>PRINCIPAL PROGRAMMER</span>
						<p style="text-align: center;">Yusuf has been writing games since he was ten (in BASIC). Later he moved on to C++ writing a few open source Linux games and contributing to other open source projects. He then created his 3D game engine as a graduation project and started his professional career.</p>
					</card>
				</div>
			
			<div class="card">
					<div class="card-img card-img4"></div>
					<card class="card-body"></card>
						<h2 style="text-align: center;" >OSSAMA MOUSSA</h2>
						    <span style = 'margin-left: 15%;'>SENIOR PROGRAMMER</span>
							<p style="text-align: center;"> Over the past decade Ossama has been involved in nearly every facet of our company, from development to managing the company’s milestones to prototyping new Games to the final game releases. With deep technical expertise in using commercial game engines.</p>
					</card>
				</div>
		
			
		</div>
	</div>
	</div>
	<?php include("includes/footer.php");
    ?>

</body>
</html>