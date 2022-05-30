<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" >
		<title>Project</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" href="i/favicon.png" type="image/x-icon">
		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@100;200;300;400;500;600;700;800;900&family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
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
<!-- Form 1 -->
<section class="bg-dark form_1 pt-50 pb-50" data-bg-src="uploads/willianjustendevasconcellosmmp5jfcqwunsplash.jpg" data-bg-src-2x="false">
        <div class="container px-xl-0">

            <form action="../../index.php?uc=loginRecup&action=getLogin" method="post" class="bg-light mx-auto mw-430 radius10 pt-40 px-50 pb-30" data-aos="fade-down" data-aos-delay="500">
                <img src="uploads/sanstitre1.png" alt="Some text about this image" class="img-fluid ml-65">
                <div class="mt-10 f-18 medium color-heading text-center" data-aos="fade-down" data-aos-delay="500">
                
                    Ma plateforme d'accompagnement pédagogique personnalisée
                
                </div>

                
                <!-- Début du formulaire -->
                <h2 class="mb-40 small text-center" data-aos="fade-down" data-aos-delay="500">
                </h2>
                <div class="mb-20 input_holder" data-aos="fade-down" data-aos-delay="500">
                    <input type="text" name="Identifiant" placeholder="Identifiant" class="input focus-action-1 color-heading placeholder-heading w-full border-dark f-22">
                </div>
                <div class="mb-20 input_holder" data-aos="fade-down" data-aos-delay="250">
                    <input type="password" id="mdp" name="password" placeholder="Mot de passe"  maxlength="6" class="input focus-action-1 color-heading placeholder-heading w-full border-dark f-22" readonly>
                </div>

                <script>
                function controle(value){
                    document.getElementById("mdp").value+=value;
                        }
                </script>
                <!--Boutons-->
                <div class="mt-20" data-aos="fade-down" data-aos-delay="500">
                    <input type="button" id="input" value="0" name="input" class="btn action-1 heavy text-center sm w-50 f-26 mr-5 ml-10" onclick="controle(value)">
                    <input type="button" id="input" value="1" name="input" class="btn action-1 heavy text-center sm w-50 f-26 mr-5 " onclick="controle(value)">
                    <input type="button" id="input" value="2" name="input" class="btn action-1 heavy text-center sm w-50 f-26 mr-5" onclick="controle(value)">
                    <input type="button" id="input" value="3" name="input" class="btn action-1 heavy text-center sm w-50 f-26 mr-5" onclick="controle(value)">
                    <input type="button" id="input" value="4" name="input" class="btn action-1 heavy text-center sm w-50 f-26 mr-5 " onclick="controle(value)">
                        
                    
                </div>
                <div class="mt-10" data-aos="fade-down" data-aos-delay="500">
                <input type="button" id="input" value="5" name="input" class="btn action-1 heavy text-center sm w-50 f-26 mr-5 ml-10" onclick="controle(value)">
                    <input type="button" id="input" value="6" name="input" class="btn action-1 heavy text-center sm w-50 f-26 mr-5 " onclick="controle(value)">
                    <input type="button" id="input" value="7" name="input" class="btn action-1 heavy text-center sm w-50 f-26 mr-5" onclick="controle(value)">
                    <input type="button" id="input" value="8" name="input" class="btn action-1 heavy text-center sm w-50 f-26 mr-5" onclick="controle(value)">
                    <input type="button" id="input" value="9" name="input" class="btn action-1 heavy text-center sm w-50 f-26 mr-5 " onclick="controle(value)">
                        
                    
                </div>
                <div data-aos="fade-down" data-aos-delay="500">
                    <label class="mt-25 input-control input-check checked-action-1 border-dark">
                        <input type="checkbox" name="rules" cheecked="checked" class="border-action-1 focus-action-1">
                        <div class="mr-10 input-control-box radius6">
                            <i class="fas fa-check input-control-icon f-12 color-white">
                            </i>
                        </div>
                        <span class="input-control-label">
                            Se souvenir de moi
                        </span>
                    </label>
				</div>
				<div data-aos="fade-down" data-aos-delay="500">
					<input type="submit" value="CONNEXION" class="btn mt-25 w-full action-1 bold text-uppercase f-main f-28">
				</div>
				<div class="mt-50 hr bg-gray h-1" data-aos="fade-down" data-aos-delay="500">
				</div>
				<div class="mt-25 f-18 medium color-heading text-center" data-aos="fade-down" data-aos-delay="750">
					<a href="#" class="link color-heading">
						Mot de passe oublié ? 
					</a>
				</div>
				
			</form>
		</div>
	</section>
	<!-- Bootstrap 4.5.2 JS -->
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
		<!-- Fancybox 3 jQuery plugin JS (Open images and video in popup) -->
		<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
		<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3&key=AIzaSyDP6Ex5S03nvKZJZSvGXsEAi3X_tFkua4U"></script>
		<!-- Slick 1.8.1 jQuery plugin JS (Sliders) -->
		<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
		<!-- AOS 2.3.4 jQuery plugin JS (Animations) -->
		<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
		<!-- Maskedinput jQuery plugin JS (Masks for input fields) -->
		<script src="js/jquery.maskedinput.min.js"></script>
		<script src="js/script.js"></script>
	</body>
</html>