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
	<nav class="pb-30 bg-light text-center navigation_1 pt-30">
		<div class="container px-xl-0">
			<div class="row justify-content-center align-items-center f-16">
				<div class="mb-20 mb-lg-0 col-lg-3 text-lg-left">
					<a href="../../index.php?uc=gestion&action=voirAccueil" class="link img_link">
						<img src="uploads/sanstitre1.png" alt="Logo" class="img-fluid" data-aos="fade-down" data-aos-delay="250">
					</a>
				</div>
				<div class="col-lg-6" data-aos="fade-down" data-aos-delay="0">
					<a href="../../index.php?uc=gestion&action=voirEspacePerso" class="link mx-15 bold action-2 f-18">
						MON ESPACE PERSONNEL
					</a>
					<a href="../../index.php?uc=gestion&action=voirPlanning" class="link mx-15 bold action-1 f-18">
						MON PLANNING D'ABSENCES
					</a>
					<a href="../../index.php?uc=gestion&action=voirCours" class="link mx-15 bold action-2 f-18">
						MES COURS
					</a>
					<a href="../../index.php?uc=gestion&action=voirDemandes" class="link mx-15 action-2 bold f-18">
						MES DEMANDES
					</a>
				</div>
				<div class="mt-20 mt-lg-0 col-lg-3 d-flex flex-wrap justify-content-center justify-content-lg-end align-items-center" data-aos="fade-down" data-aos-delay="250">
					<a href="../../index.php?uc=gestion&action=voirAccueil"><i class="fas fa-home f-36 action-2 mr-15">
					</i></a>
					<a href="../../index.php?uc=login&action=deconnexion" class="btn sm action-1 f-20">
						DECONNEXION
					</a>
				</div>
			</div>
		</div>
	</nav>
	<!-- Pricing table 1 -->
		<section class="bg-light text-center pricing_table_1 pt-20 pb-20">
			<div class="text-adaptive f-36 bold action-1 mb-55">
				MON PLANNING D'ABSENCES
			</div>
			<div class="text-adaptive d-inline-block action-2 bold mr-30 mt-10">
				DATE
			</div>
			<input type="date" name="unnamed-input" placeholder="Placeholder text" class="input focus-action-1 color-heading placeholder-heading border-action-2 w-230">
			<label class="input-control input-check border-action-2 checked-action-1 bold ml-30">
							
				<input type="checkbox" name="unnamed-checkbox">			
				<div class="mr-10 input-control-box radius6">
									
					<i class="fas fa-check input-control-icon f-12 color-white">
					</i>
								
				</div>
							
				<span class="input-control-label">
					MATIN
				</span>
						
			</label>
			<label class="input-control input-check checked-action-1 ml-20 border-action-2">
							
				<input type="checkbox" name="unnamed-checkbox">			
				<div class="mr-10 input-control-box radius6">
									
					<i class="fas fa-check input-control-icon f-12 color-white">
					</i>
								
				</div>
							
				<span class="input-control-label text-uppercase bold">
					apr??s-midi
				</span>
						
			</label>
			<label class="input-control input-check checked-action-1 border-action-2 ml-20">
							
				<input type="checkbox" name="unnamed-checkbox">			
				<div class="mr-10 input-control-box radius6">
									
					<i class="fas fa-check input-control-icon f-12 color-white">
					</i>
								
				</div>
				<span class="input-control-label bold text-uppercase">
					toute la journ??e
				</span>
									
			</label>
			<a href="../v_justif/index.php" class="btn action-1 sm ml-20">
				Ajouter un justificatif
			</a>
			<br><br>
			<a href="#" class="btn action-1 sm ml-20">
				VALIDER
			</a>
			<div class="text-adaptive bold action-1 f-20 mb-10 mt-40 mr-0 ml-60">
				MON HISTORIQUE
			</div>
			<div class="container px-xl-0">
				<div class="row align-items-start no-gutters mt-30">
					<div class="col-lg-3">
						<div class="pt-45 radius10 noradius_right noborder_right block">
							<div class="f-22 title bold action-2" data-aos="fade-down" data-aos-delay="0">
								DATE
							</div>
							<div data-aos="fade-down" data-aos-delay="0">
								<div class="d-inline-block f-58 relative price">
								</div>
							</div>
							<div data-aos="fade-down" data-aos-delay="0">
							</div>
							<div class="item" data-aos="fade-down" data-aos-delay="0">
							</div>
							<div class="item" data-aos="fade-down" data-aos-delay="0">
							</div>
							<div class="item" data-aos="fade-down" data-aos-delay="0">
							</div>
							<div class="item" data-aos="fade-down" data-aos-delay="0">
							</div>
							<div class="item" data-aos="fade-down" data-aos-delay="0">
							</div>
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