<?php 
if($_COOKIE['role']=="pedagogue"){
	header("Location:../v_accueilP/index.php");
	exit();
}
session_start();
$pdo = new PDO('mysql:host=localhost;dbname=bd_mybuddy', 'root', '');

if(isset($_POST['envoi'])){
	if(!empty($_POST['identifiant']) AND !empty($_POST['nom']) AND !empty($_POST['prenom'])){
		$idEleve = htmlspecialchars($_POST['identifiant']);
		$nomEleve = htmlspecialchars($_POST['nom']);
		$prenomEleve = htmlspecialchars($_POST['prenom']);
		$handicap = htmlspecialchars($_POST['handicap']);
		$classe = htmlspecialchars($_POST['classe']);
		$amenagement = htmlspecialchars($_POST['amenagement']);
		$suivi = htmlspecialchars($_POST['suivis_peda']);

		$insererEleve = $pdo->prepare('INSERT INTO eleve(identifiant,nom,prenom,handicap,classe,amenagement,suivis_peda) VALUES (?,?,?,?,?,?,?)');
		$insererEleve->execute(array($idEleve, $nomEleve, $prenomEleve, $handicap, $classe, $amenagement, $suivi));

		$identite = $prenomEleve . " " . $nomEleve;
		$insererUser = $pdo->prepare('INSERT INTO user(identifiant,mdp,role,identite) VALUES (?,?,?,?)');
		$insererUser->execute(array($idEleve, 123456, 'eleve',$identite));

	}
	else{
		echo "Les champs identifiant, nom et prénom sont obligatoires !";
	}
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

		<nav class="pt-10 pb-10 bg-light text-center navigation_1">
			<div class="container px-xl-0">
				<div class="row justify-content-center align-items-center f-16 mt-10">
					<div class="mb-50 mb-lg-0 col-lg-3 text-lg-left">
						<a href="../v_accueilA/index.php" class="link img_link">
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
							DÉCONNEXION
						</a>
					</div>
				</div>
			</div>
		</nav>
	<!-- Pricing table 1 -->
		<section class="pb-90 bg-light text-center showcase_2 pt-15">
		<style>
			input[type=text], select {
			padding: 12px 20px;
			margin: 8px 0;
			display: inline-block;
			border: 1px solid #ccc;
			border-radius: 4px;
			box-sizing: border-box;
			}

			input[type=submit] {
			background-color: #4CAF50;
			color: white;
			padding: 14px 20px;
			margin: 8px 0;
			border: none;
			border-radius: 4px;
			cursor: pointer;
			}

			input[type=submit]:hover {
			background-color: #45a049;
			}

		</style>
			<div class="container px-xl-0">
				<div class="row justify-content-center">
					<div class="col-xl-15 col-lg-10">
						<h2 class="small" data-aos="fade-down" data-aos-delay="0">
							Ajouter un nouvel élève
						</h2>
						<br>
						<br>
						<form method="POST" action="">
							<label>Identifiant : </label>
							<input type="text" name="identifiant">
							<br>
							<label>Nom : </label>
							<input type="text" name="nom">
							<br>
							<label>Prénom : </label>
							<input type="text" name="prenom">
							<br>
							<label>Handicap : </label>
							<input type="text" name="handicap">
							<br>
							<label>Classe : </label>
							<input type="text" name="classe">
							<br>
							<label>Aménagement : </label>
							<input type="text" name="amenagement">
							<br>
							<label>Suivi péda : </label>
							<input type="text" name="suivis_peda">
							<br>
							<input type="submit" name="envoi">
						</form>
					</div>
				</div>
				<br>
				
			</div>
		</section>
		<!-- forms alerts 
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
		</div>-->

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