<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>Omar</title>
	<link rel="stylesheet" href="css/normalize.css">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet'>
	<link href='css/all.css' rel='stylesheet'>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/res.css">
</head>

<body>
	<!-- Sidebar begining -->
	<section class="navbar bgcol whitecol" id="navbar">
		<!-- Photo & Job title -->
		<aside id="iden">
			<div class="opaback">
				<div class="intro">
					<h2>Omar Morsy</h2>
					<p>Web developer</p>
				</div>
			</div>
		</aside>
		<!-- The navbar -->
		<nav id="open">
			<ul id="navlist">
				<a href="#" class="link" id="but" onclick="showLinks()">
					<li><i class="fa fa-bars"></i></li>
				</a>
				<a href="#home" class="link active">
					<li>Home</li>
				</a>
				<a href="#aboutme" class="link">
					<li>About Me</li>
				</a>
				<a href="#education" class="link">
					<li>Education</li>
				</a>
				<a href="#skill" class="link">
					<li>Skills</li>
				</a>
				<a href="#portofolio" class="link">
					<li>Portofolio</li>
				</a>
				<a href="#contact" class="link">
					<li>Contacts</li>
				</a>
			</ul>
		</nav>
	</section>
	<!-- End Sidebar -->

	<!-- The content -->
	<main>
		<!-- Start cover -->
		<header id="home" class="whitecol">
			<div class="opaback">
				<div class="container">
					<h1>Let's Make Something Great</h1>
					<p class="silvercol">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Totam et voluptatum.
						Quis nulla molestias beatae aliquid tempore </p>
					<button class="whitecol">Hire Me!</button>
				</div>
			</div>
		</header>
		<!-- End cover -->

		<!-- Start About me -->
		<section class="about" id="aboutme">
			<div class="container">
				<?php echo "This is from php" ?>
				<!-- Informations about me -->
				<div class="text">
					<div class="title">
						<h2><span>About</span> Me</h2>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti magni itaque quam a
							accusamus consectetur necessitatibus 
						</p>
					</div>
					<div class="details">
						<p><span>Name : </span> Omar</p>
						<p><span>Age : </span> 23</p>
						<p><span>E-mail : </span> omermorsi96@gmail.com</p>
						<p><span>Adress : </span> Sakarya, Turkey</p>
					</div>
				</div>
				<!-- My Photo -->
				<div class="pic">
					<img src="pics/lap.png">
				</div>
			</div>
		</section>
		<!-- End about me -->
		<hr>
		<!-- Start Education -->
		<section class="education" id="education">
			<div class="container">
				<h2><span>Work</span> Experience</h2>
				<div class="eduflow">
					<div class="course left">
						<div class="infos">
							<h3>Web design <span>@Coursera</span></h3>
							<p class="pinkcol">Mar 2019 - Feb 2020</p>
							<p>Lorem ipsum dolor sit amet, quo ei simul congue exerci, ad nec admodum perfecto
								mnesarchum</p>
						</div>
					</div>
					<div class="course right">
						<div class="infos">
							<h3>Web design <span>@Coursera</span></h3>
							<p class="pinkcol">Mar 2019 - Feb 2020</p>
							<p>Lorem ipsum dolor sit amet, quo ei simul congue exerci, ad nec admodum perfecto
								mnesarchum</p>
						</div>
					</div>
					<div class="course left">
						<div class="infos">
							<h3>Web design <span>@Coursera</span></h3>
							<p class="pinkcol">Mar 2019 - Feb 2020</p>
							<p>Lorem ipsum dolor sit amet, quo ei simul congue exerci, ad nec admodum perfecto
								mnesarchum</p>
						</div>
					</div>
					<div class="course right">
						<div class="infos">
							<h3>Web design <span>@Coursera</span></h3>
							<p class="pinkcol">Mar 2019 - Feb 2020</p>
							<p>Lorem ipsum dolor sit amet, quo ei simul congue exerci, ad nec admodum perfecto
								mnesarchum</p>
						</div>
					</div>
					<div class="course left">
						<div class="infos">
							<h3>Web design <span>@Coursera</span></h3>
							<p class="pinkcol">Mar 2019 - Feb 2020</p>
							<p>Lorem ipsum dolor sit amet, quo ei simul congue exerci, ad nec admodum perfecto
								mnesarchum</p>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End education -->
		<!-- Start skills -->
		<section class="skills whitecol" id="skill">
			<div class="container">
				<h2><span>My </span>skills</h2>
				<div class="skill">
					<p>HTML</p>
					<div class="prog">
						<span style="width: 25%"></span>
					</div>
				</div>
				<div class="skill">
					<p>HTML</p>
					<div class="prog">
						<span style="width: 25%"></span>
					</div>
				</div>
				<div class="skill">
					<p>HTML</p>
					<div class="prog">
						<span style="width: 25%"></span>
					</div>
				</div>
				<div class="skill">
					<p>HTML</p>
					<div class="prog">
						<span style="width: 25%"></span>
					</div>
				</div>
				<div class="clear"></div>
			</div>
		</section>
		<!-- End skills -->

		<!-- Start contact -->
		<section class="contact" id="contact">
			<div class="container">
				<div class="row">
					<div class="msg">
						<h3>Leave a Message</h3>
						<form>
							<input type="text" name="Name" placeholder="Name">
							<input type="text" name="email" placeholder="E-mail">
							<textarea placeholder="White your Message"></textarea>
							<input type="submit" name="send" id="" value="send" class="whitecol">
						</form>
					</div>
					<div class="inf">
						<ul class="fa-ul">
							<li>
								<span class="fa-li"><i class="fas fa-home"></i></span>
								<h3>Location</h3>
								<p>Sakarya, Turkey</p>
							</li>
							<li>
								<span class="fa-li"><i class="far fa-envelope"></i></span>
								<h3>E-mail</h3>
								<p>example@gmail.com</p>
							</li>
							<li>
								<span class="fa-li"><i class="fas fa-phone"></i></span>
								<h3>Phone</h3>
								<p>551******</p>
							</li>
						</ul>
					</div>
				</div>
				<hr>
			</div>
		</section>
		<!-- End contact -->
		
		<!-- Start footer -->
		<footer>
			<i class="fab fa-linkedin-in"></i> |
			<i class="fab fa-github"></i> |
			<i class="fab fa-facebook-f"></i>
			<p>Copyrights: Omar, all rights reseaved</p>
		</footer>
		<!-- End footer -->
	</main>
	<script src="js/plog.js"></script>
</body>

</html>
