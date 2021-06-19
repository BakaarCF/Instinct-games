
    <script src="https://kit.fontawesome.com/332a215f17.js" crossorigin="anonymous"></script>
		<style>
			@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
			*
			{
				margin: 0;
				padding: 0;
				box-sizing: border-box;
			}
			body
			{
				line-height: 1.5;
				font-family: 'Poppins', sans-serif;
			}
			footer
			{
				left:0px;
				bottom:0px;
				flex-shrink: 0;
				width: 100%;
				background-color: black;
				padding: 70px 0;
				margin-top: 50px;
			}
			.foter
			{
				/* max-width: 1170px; */
				width: 90%;
				margin: auto;
			}

			.footer_row
			{
				display: flex;
				flex-wrap: wrap;
			}

			.footer_col
			{
				width: 25%;
				padding: 0 15px;
			}

			.footer_col ul
			{
				list-style: none;
			}

			.footer_col h4
			{
				font-size: 18px;
				color: #ffffff;
				text-transform: capitalize;
				margin-bottom: 35px;
				font-weight: 500;
				position: relative;
			}
      		.footer_col h5
			{
				font-size: 18px;
				color: #ffffff;
				text-transform: capitalize;
				margin-bottom: 35px;
				font-weight: 500;
				position: relative;
			}
			.footer_col h4::before
			{
				content: '';
				position: absolute;
				left: 0;
				bottom: -10px;
				background-color: #30593D;
				height: 2px;
				box-sizing: border-box;
				width: 50px;
			}

			.footer_col ul li :not(:last-child)
			{
				margin-bottom: 10px;
			}

			.footer_col ul li a
			{
				font-size: 16px;
				text-transform: capitalize;
				color: #ffffff;
				text-decoration: none;
				font-weight: 300;
				color: #bbbbbb;
				display: block;
				transition: all 0.3s ease;
			}

			.footer_col ul li a:hover
			{
				color: #ffffff;
				padding-left: 8px;

			}

			.footer_col .social_links a
			{
				display: inline-block;
				height: 40px;
				width: 40px;
				background-color: rgba(255,255,255,0.2);
				margin: 0 10px 10px 0;
				text-align: center;
				line-height: 40px;
				border-radius: 50%;
				color: #ffffff;
				transition: all 0.5s ease;
			}

			.footer_col .social_links a:hover
			{
				color: #24262b;
				background-color: #ffffff;
			}
			@media screen and (max-width:574px)
			{
				.footer_col
				{
					width: 100%;
				}
			}
			@media screen and (max-width:767px)
			{	
				.footer_col
				{
					width: 50%;
					margin-bottom: 30px;
				}
			}
		</style>

		<footer>
			<div class="foter">
				<div class="footer_row">
					<div class="footer_col">
						<h4>Company</h4>
						<ul>
							<li><a href="Aboutus.php">about us</a></li>
							<li><a href="#">our services</a></li>
							<li><a href="#">privacy policy</a></li>
						</ul>
					</div>	
					<div class="footer_col">
						<h4>Get help</h4>
						<ul>
							<li><a href="#">FAQ</a></li>
							
							<li><a href="index.php">returns</a></li>
							
						</ul>
					</div>
					<div class="footer_col">
						 
					</div>
					<div class="footer_col">
						<h4>follow us</h4>
            <h5>
              110 El Merghany St.
              Heliopolis, Cairo
              Egypt, 11341
              Email: info@instinctgames.com
            </h5>
            
						<div class="social_links">
							<a href="https://www.facebook.com/InstinctGames/"><i class="fab fa-facebook-f"></i></a>
							<a href="https://www.linkedin.com/company/instinct-games"><i class="fab fa-linkedin"></i></a>
							<a href="https://twitter.com/instinctgames"><i class="fab fa-twitter"></i></a>
						</div>
					</div>
				</div>
			</div>
		</footer>