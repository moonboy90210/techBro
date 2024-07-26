<?php

session_start();

include("data.php");

if (isset($_POST["submit"])) {
	$name = htmlspecialchars($_POST['name']);
	// $organization = htmlspecialchars($_POST['organization']);
	$email = htmlspecialchars($_POST['email']);
	$subject = htmlspecialchars($_POST['subject']);
	$message = htmlspecialchars($_POST['message']);
	$newSub = htmlspecialchars($_POST['newSub']);

	$query = "INSERT INTO newjobz VALUES ('','$name','$email','$subject','$message', '$newSub')";
	mysqli_query($con, $query);

	if (empty("submit")) {

		echo "<Script> alert('Kindly input your Email') </script>";
	} else {
		echo "<script> alert('Thank you for reaching out! I will be in touch as soon as possible.')</script>";
	}

	header("Location: tech.php");
	exit;
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
	<script src="https://kit.fontawesome.com/0f977cd8f2.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="tech.css">
	<title>TAZ - The TechBro</title>
</head>

<body>
	<main>
		<header>

			<nav class="navbar navbar-expand-lg bg-body-tertiary">
				<div class="container-fluid container">
					<a class="navbar-brand ms-3" href="index.php"><strong>TAZ - Portfolio</strong></a>
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse justify-content-end me-3" id="navbarNavAltMarkup">
						<div class="navbar-nav">
							<a class="nav-link" aria-current="page" href="#about">ABOUT</a>
							<a class="nav-link" aria-current="page" href="#work">WORKS</a>
							<a class="nav-link" aria-current="page" href="#contact">CONTACT</a>
							<!-- <a class="nav-link disabled" aria-disabled="true">Disabled</a> -->
						</div>
					</div>
				</div>
			</nav>
		</header>

		<section id="about">
			<div class="container">
				<div class="row ">
					<div class="col-md-12">
						<h4 class="ps-5 ">Timothy Adedotun (TAZ)</h4>
						<p class="ps-5"> Front-End Web Developer </p>
						<h3 class="px-5 text-center display-4">Hi there! I'm a budding Graphic and Web Designer based in Lagos, Nigeria. I design graphic
							posters/flyer, develop Responsive Websites and handle backend tasks. Feel free to take a tour of
							some of my works.</h3>
					</div>
					<!-- <div class="col-6 border">
                    <img class="image" src="/img/76EBBFBE-5BE0-43FC-AB52-B33C28C36CA0-removebg-preview (1).png"
                        alt="IMage of TAZII">
						<picture>
						<source media="(min-width: 650px)" srcset="img_food.jpg">
						<source media="(min-width: 465px)" srcset="img_car.jpg">
						<img src="img_girl.jpg">
						</picture>
                </div> -->
				</div>
			</div>
			<!-- 
        <span class="butt">
            <a href="#work" class="btn btn-dark mx-5 my-4 rounded-3">View Catalogue</a>
        </span> -->


		</section>

		<section id="work">
			<div class="container">
				<!-- <h2 class="py-3 text-center">MY WORKS</h2> -->
				<div id="home" class="row">
					<div class="col-md-6 g-3">
						<div class="p-3"><a href="https://zilliontravels.netlify.app/" target="_blank"><img src="../Portfolio/img/tour.png"  style="width:100%" alt="img5"></a>
						<small>Zillion Travels Limited</small></div>
						
						<div class="p-3"><a href="https://3iii-designs.netlify.app/" target="_blank"><img src="../portfolio/img/3iii.png" style="width:100%" alt="img6"></a>
						<small>3rd Eye Designs</small></div>
						<div class="p-3"><a href="https://spectrasurvey.netlify.app/" target="_blank"><img src="../portfolio/img/spectra.png " style="width:100%" alt="img2"></a>
						<small>Spectra Survey</small></div>
					</div>

					<div class="col-md-6 g-3">
					<div class="p-3"><a href="https://swiftlgstcs.netlify.app/" target="_blank"><img src="../portfolio/img/swift.png" style="width:100%" alt="img6"></a>
				<small>Swift Logistics Company</small></div>
					<div class="p-3">	<a href="https://zillionline.netlify.app/" target="_blank"><img src="../Portfolio/img/zz.png" style="width:100%" alt="img1"></a>
					<small>Zilli Online Store</small></div>
						
						
					</div>
				
				</div>
				<hr class="my-4">
				<div class="pt-3">
					<h2 class=" text-center">WORK EXPERIENCE</h2>
					<p class="text-center">
						I am a budding self-taught Web Developer with over a year of experience in Full Stack Web Development, looking to build a stable career in Tech. I have designed and developed responsive websites as a freelance
						developer and utilized my skills in general IT duties. Determined to gain more knowledge in the field, I demonstrate great critical thinking and analytical skills towards any given task. I am currently open to internships and junior developer roles. </p>
					<div class="row p-4  d-flex justify-content-center">
						<div class="col-md-6 text-center ">
							<h4>Freelance Web Designer </h4><span>April 2022 - Date</span>
							<p>I have designed and developed responsive websites as a freelance developer with proficiency in creating user friendly interfaces, developing databases, writing and testing code, troubleshooting simple/complex issues and 
implementing new features based on user feedback. </p>
							
						</div>
						<!-- <div class="col-md-3 text-center g-4">
							<h4>Web Designer</h4>
							<p>For Freelance</p>
							<span>April 2020 - Date</span>
						</div>
						<div class="col-md-3 text-center g-4">
							<h4>Web Designer</h4>
							<p>For Freelance</p>
							<span>April 2020 - Date</span>
						</div>
						<div class="col-md-3 text-center g-4">
							<h4>Web Designer</h4>
							<p>For Freelance</p>
							<span>April 2020 - Date</span>
						</div> -->
					</div>
				</div>
			</div>

		</section>
<hr style="margin: 20px;">
		<section id="inquire">
			<div class="container">
				<form method="post">
					<h4>Like what you see? Let's get in touch.</h4>
					<div class="row">
						<div class="col-md-6">
							<label for="exampleFormControlInput1" class="form-label"></label>
							<input type="text" class="form-control" name="name" id="exampleFormControlInput1" placeholder="Your Full Name" required>
						</div>
						<div class="col-md-6">
							<label for="exampleFormControlInput1" class="form-label"></label>
							<input type="email" class="form-control" name="email" id="exampleFormControlInput1" placeholder="Your Email" required>
						</div>
						<div class="col-12">
							<label for="exampleFormControlInput1" class="form-label"></label>
							<input type="subjectl" class="form-control" name="subject" id="exampleFormControlInput1" placeholder="Subject" required>
						</div>
						<div class="col-12">
							<label for="exampleFormControlTextarea1" class="form-label"></label>
							<textarea class="form-control" name="message" id="exampleFormControlTextarea1" placeholder="Leave a Message" rows="3" required></textarea>
						</div>
						<div class=" text-center pt-3"> <button type="submit" name="submit" class="btn btn-outline-dark">SEND MESSAGE</button></div>

				</form>
			</div>
		</section>
		<hr style="margin: 20px;">
		<section id="contact">

			<div class="container">
				<h2 class="pb-5 text-center">CONTACT ME</h2>
				<div class="row ">
					<div class="col-md-6 ps-5">
						<p><i class="fa-solid fa-location-dot fa-lg"></i> Lagos, Nigeria</p>
						<p><i class="fa-solid fa-phone fa-lg"></i> +(234) 8100606717</p>
						<p><i class="fa-solid fa-phone fa-lg"></i> +(234) 8100606717</p>
						<p><i class="fa-solid fa-envelope fa-lg"></i> Alagbeadedotun19@gmail.com</p>

						<div class="ficon">
						
						<a href="www.linkedin.com/in/adedotun-alagbe" target="_blank" rel="noopener noreferrer" class="p-2"><i class="fa-brands fa-linkedin fa-xl"></i></a>
							<a href="http://github.com/moonboy90210" target="_blank" rel="noopener noreferrer" class="p-2"><i class="fa-brands fa-github fa-xl"></i></a>
							<a href="http://www.instagram.com/tazii2x" rel="noopener noreferrer" target="_blank" class="p-2"><i class="fa-brands fa-instagram fa-xl"></i></a>
							<a href="http://www.twitter.com/tazii2x" rel="noopener noreferrer" target="_blank" class="p-2"><i class="fa-brands fa-x-twitter fa-xl"></i></a>
							<a href="http://wa.me/8100606717" target="_blank" rel="noopener noreferrer" class="p-2"><i class="fa-brands fa-whatsapp fa-xl"></i></a>
						</div>
					</div>

					<div class="col-md-6 pt-5">
						<form method="post">
							<p>Subscribe to stay informed on the latest News and Updates on our brand.</p>
							<div class="input-group">
								<input type="email" class="form-control" name="newSub" placeholder="Enter Email" aria-label="Email" aria-describedby="button-addon2">
								<button class="btn btn-outline-dark" type="submit" name="submit" id="button-addon2">Subscribe</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</section>


	</main>
	<hr>
	<footer>
		<div class="footer">
			<div class="text-center">
				<p>Copyright © 2024 TazTech. All Rights Reserved. </p>
			</div>
		</div>
	</footer>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>