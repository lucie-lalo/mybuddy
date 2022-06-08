<?php 
if($_COOKIE['role']=="eleve"){
	header("Location:../v_accueilE/index.php");
	exit();
}
session_start();
$id = $_SESSION['id'];
$pdo = new PDO('mysql:host=localhost;dbname=bd_mybuddy;charset=utf8', 'root', '');
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" >
		<title>Project</title>
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
	<nav class="pt-30 pb-30 bg-light text-center navigation_1">
		<div class="container px-xl-0">
			<div class="row justify-content-center align-items-center f-16">
				<div class="mb-20 mb-lg-0 col-lg-3 text-lg-left">
					<a href="../../index.php?uc=gestion&action=voirAccueilP" class="link img_link mr-2">
						<img src="uploads/sanstitre1.png" alt="Logo" class="img-fluid" data-aos="fade-down" data-aos-delay="250">
					</a>
				</div>
				<div class="col-lg-6 mt-20 action-2 px-0 text-center" data-aos="fade-down" data-aos-delay="0">
					<a href="../../index.php?uc=gestion&action=voirElevesP" class="link bold f-18 mr-40 action-2 text-uppercase">
						élèves
					</a>
					<a href="../../index.php?uc=gestion&action=voirCoursTransmettreP" class="link mx-15 bold f-18 text-center ml-0 mr-40 action-2 text-uppercase">
						cours à transmettre
					</a>
					<a href="../../index.php?uc=gestion&action=voirPlanningP" class="link bold f-18 action-2 text-uppercase">
						planning de présence
					</a>
					<a href="../../index.php?uc=gestion&action=voirDemandeRecuesP" class="link mx-15 bold f-18 mr-75 ml-75 text-uppercase action-1">
						demandes reçues
					</a>
					<a href="../../index.php?uc=gestion&action=voirSuiviP" class="link bold f-18 text-uppercase action-2">
						suivi pédagogique
					</a>
				</div>
				<div class="mt-20 mt-lg-0 col-lg-3 d-flex flex-wrap justify-content-center justify-content-lg-end align-items-center" data-aos="fade-down" data-aos-delay="250">
					<a href="../../index.php?uc=gestion&action=voirAccueilP"><i class="fas fa-home f-36 pr-15 action-2">
					</i></a>
					<a href="../../index.php?uc=login&action=deconnexion" class="btn mr-20 sm f-20 action-1">
						DECONNEXION
					</a>
				</div>
			</div>
		</div>
	</nav>
	<!-- Pricing table 1 -->
		<section class="pb-100 bg-light text-center pricing_table_1 pt-40">
			<div class="text-adaptive text-uppercase bold f-36 action-1 mb-45">
				demandes reçues
			</div>
			<div class="container px-xl-0">
				<div class="row align-items-start no-gutters">
					<div class="col-lg-3">
						<div class="pt-45 noborder_right block">
							<div class="f-22 title text-uppercase bold" data-aos="fade-down" data-aos-delay="250">
								élève
							</div>
							<div data-aos="fade-down" data-aos-delay="250">
								<div class="d-inline-block f-58 relative price">
								</div>
							</div>
							<div data-aos="fade-down" data-aos-delay="250">
							</div>
							<?php 
								$recupIdEleve = $pdo->query("SELECT id_eleve FROM rdv WHERE id_peda = '$id'");
								while($idEleve = $recupIdEleve->fetch()){
									$recupNomPrenom = $pdo->query("SELECT identite FROM user WHERE identifiant = '$idEleve[0]'");
									while($displayName = $recupNomPrenom->fetch()){
										?>
										<div class="item" data-aos="fade-down" data-aos-delay="250">
											<?= $displayName[0];?>
										</div>
									<?php
									}
								}
							?>
						</div>
					</div>
					<div class="col-lg-2">
						<div class="pt-45 noborder_right block">
							<div class="f-22 title bold" data-aos="fade-down" data-aos-delay="500">
								OBJET
							</div>
							<div data-aos="fade-down" data-aos-delay="500">
								<div class="d-inline-block f-58 relative price">
								</div>
							</div>
							<div data-aos="fade-down" data-aos-delay="500">
							</div>
							<?php 
								$recupSujet = $pdo->query("SELECT sujet FROM rdv WHERE id_peda = '$id'");
								while($subject = $recupSujet->fetch()){
									?>
									<div class="item" data-aos="fade-down" data-aos-delay="250">
										<?= $subject[0];?>
									</div>
								<?php
							}
							?>
						</div>
					</div>
					<div class="col-lg-5">
						<div class="pt-45 radius10 noradius_left block mr-0">
							<div class="f-22 title bold" data-aos="fade-down" data-aos-delay="750">
								MESSAGE
							</div>
							<div data-aos="fade-down" data-aos-delay="750">
								<div class="d-inline-block f-58 relative price">
								</div>
							</div>
							<div data-aos="fade-down" data-aos-delay="750">
							</div>
							<?php 
								$recupDetails = $pdo->query("SELECT details FROM rdv WHERE id_peda = '$id'");
								while($message = $recupDetails->fetch()){
									?>
									<div class="item" data-aos="fade-down" data-aos-delay="250">
										<?= $message[0];?>
									</div>
								<?php
							}
							?>
						</div>
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

		<!-- gReCaptcha popup (uncomment if you need a recaptcha integration) -->
		<!--
		<div class="bg-dark op-8 grecaptcha-overlay"></div>
		<div class="bg-light radius10 w-350 h-120 px-20 pt-20 pb-20 grecaptcha-popup">
			<div class="w-full h-full d-flex justify-content-center align-items-center">
				<div id="g-recaptcha" data-sitekey="PUT_YOUR_SITE_KEY_HERE"></div>
			</div>
		</div>
		<script src="https://www.google.com/recaptcha/api.js?render=explicit" async defer></script>
		-->
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