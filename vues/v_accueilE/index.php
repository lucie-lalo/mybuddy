<?php 
if($_COOKIE['role']=="pedagogue"){
	header("Location:../v_accueilP/index.php");
	exit();
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" >
		<title>My Buddy</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" href="i/favicon.png" type="image/x-icon">
		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@100;200;300;400;500;600;700;800;900&family=DM+Sans:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
		<!-- Bootstrap 4.5.2 CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
		<!-- Slick 1.8.1 jQuery plugin CSS (Sliders) -->
		<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
		<!-- Fancybox 3 jQuery plugin CSS (Open images and video in popup) -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
		<!-- AOS 2.3.4 jQuery plugin CSS (Animations) -->
		<link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
		<!-- FontAwesome CSS -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
		<!-- Startup CSS (Styles for all blocks) - Remove ".min" if you would edit a css code -->
		<link href="css/style.min.css" rel="stylesheet" />
		<!-- jQuery 3.5.1 -->
		<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	</head> 
	<body>
<!-- Navigation 1 -->
	<nav class="pt-10 pb-30 bg-light text-center navigation_1">
		<div class="container px-xl-0">
			<div class="row justify-content-center align-items-center f-16 mt-40">
				<div class="mb-20 mb-lg-0 col-lg-3 text-lg-left">
					<a href="#" class="link img_link">
						<img src="uploads/sanstitre1.png" alt="Logo" class="img-fluid" data-aos="fade-down" data-aos-delay="250">
					</a>
				</div>
				<div class="col-lg-6" data-aos="fade-down" data-aos-delay="0">
					<a href="#" class="link mx-15 color-main">
					</a>
					<a href="#" class="link mx-15 color-main">
					</a>
					<a href="#" class="link mx-15 color-main">
					</a>
					<a href="#" class="link mx-15 color-main">
					</a>
					<a href="#" class="mx-15 link color-main">
						<i>
						</i>
					</a>
				</div>
				<div class="mt-20 mt-lg-0 col-lg-3 d-flex flex-wrap justify-content-center justify-content-lg-end align-items-center" data-aos="fade-down" data-aos-delay="250">
					<a href="#" class="link mr-20 color-main">
					</a>
					<a href="../../index.php?uc=login&action=deconnexion" class="btn mr-20 sm action-2 f-20">
						D??CONNEXION
					</a>
				</div>
			</div>
		</div>
	</nav>
	<!-- Showcase 2 -->
		<section class="pb-90 bg-light text-center showcase_2 pt-20 pr-80 mr-85">
			<div class="container px-xl-0">
				<div class="row justify-content-center">
					<div class="col-xl-8 col-lg-10">
						<h2 class="small text-center text-uppercase f-48 ml-160" data-aos="fade-down" data-aos-delay="0">
							MES SERVICES
						</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 col-sm-6" data-aos="fade-down" data-aos-delay="0">
						<a href="../../index.php?uc=gestion&action=voirEspacePerso" class="mt-50 link img_link color-main w-460 ml-95">
							<img src="uploads/sanstitre8.png" srcset="uploads/sanstitre8.png 2x" alt="" class="img-fluid radius10">
						</a>
						<a href="../../index.php?uc=gestion&action=voirEspacePerso" class="btn action-1 mt-20 text-uppercase w-460 f-30 text-center h-40 ml-95">
							MON ESPACE PERSONNEL
						</a>
					</div>
					<div class="col-md-4 col-sm-6" data-aos="fade-down" data-aos-delay="250">
					</div>
					<div class="col-md-4 col-sm-6" data-aos="fade-down" data-aos-delay="500">
						<a href="../../index.php?uc=gestion&action=voirPlanning" class="mt-50 link img_link color-main w-460 mr-185">
							<img src="uploads/sanstitre4.png" srcset="uploads/sanstitre4.png 2x" alt="" class="img-fluid radius10">
						</a>
						<a href="../../index.php?uc=gestion&action=voirPlanning" class="btn action-1 mt-20 text-center f-30 w-460 h-40">
							MON PLANNING
						</a>
					</div>
					<div class="col-md-4 col-sm-6" data-aos="fade-down" data-aos-delay="0">
						<a href="../../index.php?uc=gestion&action=voirCours" class="link img_link color-main mt-50 w-460 ml-95">
							<img src="uploads/sanstitre5.png" srcset="uploads/sanstitre5.png 2x" alt="" class="img-fluid radius10">
						</a>
						<a href="../../index.php?uc=gestion&action=voirCours" class="btn action-1 mt-20 w-460 h-40 f-30 text-center ml-95">
							MES COURS
						</a>
					</div>
					<div class="col-md-4 col-sm-6" data-aos="fade-down" data-aos-delay="250">
					</div>
					<div class="col-md-4 col-sm-6" data-aos="fade-down" data-aos-delay="500">
						<a href="../../index.php?uc=gestion&action=voirDemandes" class="mt-50 link img_link color-main w-460">
							<img src="uploads/sanstitre9.png" srcset="uploads/sanstitre9.png 2x" alt="" class="img-fluid radius10">
						</a>
						<a href="../../index.php?uc=gestion&action=voirDemandes" class="btn action-1 mt-20 w-460 h-40 f-30">
							MES DEMANDES
						</a>
					</div>
				</div>
			</div>
		</section>
		<!-- forms alerts -->
		<div class="alert alert-success alert-dismissible fixed-top alert-form-success" role="alert">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			Thanks for your message!
		</div>
		<div class="alert alert-warning alert-dismissible fixed-top alert-form-check-fields" role="alert">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			Please, fill in required fields.
		</div>
		<div class="alert alert-danger alert-dismissible fixed-top alert-form-error" role="alert">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<div class="message">An error occurred while sending data :( Please, check if your hosting supports PHP and check how to set form data sending <a href="https://designmodo.com/startup/documentation/#form-handler" target="_blank" class="link color-transparent-white">here</a>.</div>
		</div>

		<!-- Bootstrap 4.5.2 JS -->
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
		<!-- Fancybox 3 jQuery plugin JS (Open images and video in popup) -->
		<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
		<!-- 
			Google maps JS API 
			Don't forget to replace the key "AIzaSyDP6Ex5S03nvKZJZSvGXsEAi3X_tFkua4U" to your own! 
			Learn how to get a key: https://help.designmodo.com/article/startup-google-maps-api/ 
		-->
		<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3&key=AIzaSyDP6Ex5S03nvKZJZSvGXsEAi3X_tFkua4U"></script>
		<!-- Slick 1.8.1 jQuery plugin JS (Sliders) -->
		<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
		<!-- AOS 2.3.4 jQuery plugin JS (Animations) -->
		<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
		<!-- Maskedinput jQuery plugin JS (Masks for input fields) -->
		<script src="js/jquery.maskedinput.min.js"></script>
		<!-- Startup JS (Custom js for all blocks) -->
		<script src="js/script.js"></script>
	</body>
</html>