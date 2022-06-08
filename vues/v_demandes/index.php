<?php 
if($_COOKIE['role']=="pedagogue"){
	header("Location:../v_accueilP/index.php");
	exit();
}
session_start();
require("../../util/fonctions.php");
require("../../util/class.pdo.php");
$pdo = PdoMyBuddy::getPdoMyBuddy();
$id = $_SESSION['id'];
$valeur=$pdo->coursE($id);	
$pdoBase = new PDO('mysql:host=localhost;dbname=bd_mybuddy;charset=utf8', 'root', '');
		
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
<!-- Blog 1 -->
	<section class="bg-light blog_1">
		<div class="container px-xl-0">
			 
		</div>
	</section>
	<!-- Navigation 1 -->
		<nav class="pt-30 pb-30 bg-light text-center navigation_1">
			<div class="container px-xl-0">
				<div class="row justify-content-center align-items-center f-16">
					<div class="mb-20 mb-lg-0 col-lg-3 text-lg-left">
						<a href="../../index.php?uc=gestion&action=voirAccueil" class="link img_link">
							<img src="uploads/sanstitre1.png" alt="Logo" class="img-fluid" data-aos="fade-down" data-aos-delay="250">
						</a>
					</div>
					<div class="col-lg-6" data-aos="fade-down" data-aos-delay="0">
						<a href="../../index.php?uc=gestion&action=voirEspacePerso" class="link mx-15 bold f-18 action-2">
							MON ESPACE PERSONNEL
						</a>
						<a href="../../index.php?uc=gestion&action=voirPlanning" class="link bold f-18 mx-15 pt-25 action-2">
							MON PLANNING  D'ABSENCES
						</a>
						<a href="../../index.php?uc=gestion&action=voirCours" class="link mx-15 bold f-18 action-2">
							MES COURS
						</a>
						<a href="voirDemandes" class="link mx-15 bold f-18 action-1">
							MES DEMANDES
						</a>
					</div>
					<div class="mt-20 mt-lg-0 col-lg-3 d-flex flex-wrap justify-content-center justify-content-lg-end align-items-center" data-aos="fade-down" data-aos-delay="250">
						<a href="../../index.php?uc=gestion&action=voirAccueil"><i class="fas fa-home action-2 f-40 mr-15">
						</i></a>
						<a href="../../index.php?uc=login&action=deconnexion" class="btn sm f-16 action-1">
							DECONNEXION
						</a>
					</div>
				</div>
			</div>
		</nav>
		<!-- Blog 1 -->
			<section class="bg-light blog_1">
				<div class="container px-xl-0">
					 
					<div class="row justify-content-between">
					</div>
				</div>
			</section>
			<!-- Contact 1 -->
				<section class="pb-150 color-white text-center contact_1 bg-white color-filter-light-1 pt-50" data-bg-src="false" data-bg-src-2x="false">
					<div class="container px-xl-0">
						<div class="row justify-content-center">
							<div class="col-xl-8 col-lg-10">
								<h2 class="f-40 mb-50 action-1">
									MES DEMANDES
								</h2>
								<form action="transfert.php" method="post" class="mt-50">
									<div class="row">
										<div class="text-adaptive action-2 mt-8 f-30">
											<b>
												Sujet
											</b>
										</div>
										<div class="col-sm-6" for="demandes" data-aos="fade-down" data-aos-delay="250">
											
										<select name="demandes" id="demandes"  required="required" class="input mb-50 w-full color-black placeholder-transparent-white text-center text-sm-left border-action-2 focus-action-2">
											
											<option value="AMMENAGEMENT">- AMMENAGEMENT -</option>
											<option value="PROBLEMES COURS">- PROBLEMES COURS -</option>											
											<option value="PERSONNEL">- PERSONNEL -</option>
											<option value="RENDEZ-VOUS">- RDV -</option>
											<option value="AUTRE">- autre -</option>
											
										</select>
									
										</div>
									</div>
									<div class="row">
										<div class="text-adaptive action-2 mt-8 f-30">
											<b>
												Pédaogogue concerné
											</b>
										</div>
										<div class="col-sm-6" for="pedagogues" data-aos="fade-down" data-aos-delay="250">
											
										<select name="pedagogues" id="pedagogues"  required="required" class="input mb-50 w-full color-black placeholder-transparent-white text-center text-sm-left border-action-2 focus-action-2">
											<?php 
												$recupUsers = $pdoBase->query("SELECT * FROM user WHERE role = 'pedagogue'");
												while($user = $recupUsers->fetch()){
													?>
													<option value="<?= $user["identifiant"];?>"> <?= $user["identite"];?> </option>
													<?php
												}
											?>
										</select>
									
										</div>
									</div>
									<div data-aos="fade-down" data-aos-delay="250">
										<textarea name="message" id="message" class="input mb-10 w-full radius10 text-left action-0 placeholder-action-2 focus-action-2 border-action-2"></textarea>
										
									</div>
									<div class="row justify-content-between">
										<div class="col-sm-8 text-sm-right" data-aos="fade-down" data-aos-delay="250">
											<input type="submit" class="btn action-1">
											</input>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</section>
				
		
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