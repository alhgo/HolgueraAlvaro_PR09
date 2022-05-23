<?php


define('CURRENT_PAGE', 'inicio');


?>


<!doctype html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<!-- Stylesheets
	============================================= -->
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Raleway:300,400,500,600,700|Crete+Round:400i" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="style.css" type="text/css" />
	<link rel="stylesheet" href="css/swiper.css" type="text/css" />
	<link rel="stylesheet" href="css/dark.css" type="text/css" />
	<link rel="stylesheet" href="css/font-icons.css" type="text/css" />
	<link rel="stylesheet" href="css/animate.css" type="text/css" />
	<link rel="stylesheet" href="css/magnific-popup.css" type="text/css" />

	<link rel="stylesheet" href="css/responsive.css" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<!-- Document Title
	============================================= -->
    <title>Página personal de Álvaro Holguera</title>
    

</head>
<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">
        
        <!-- Header
		============================================= -->
		
        <?php  include('includes/header.php');    ?>
        
        
        <!-- #header end -->
        
        
        
        
        <!--SLIDER-->
        
        <section id="slider" class="slider-element slider-parallax swiper_wrapper full-screen clearfix slider-parallax-visible" style="height: 758px;">

			<div class="slider-parallax-inner" style="height: 758px; transform: translateY(0px);">

				<div class="swiper-container swiper-parent swiper-container-horizontal" style="cursor: grab;">
					<div class="swiper-wrapper" style="transform: translate3d(0px, 0px, 0px);">
						<div class="swiper-slide dark swiper-slide-active" style="background-image: url(&quot;images/slider/swiper/1.jpg&quot;); height: 758px; width: 946px;">
							<div class="container clearfix">
								<div class="slider-caption slider-caption-center" style="transform: translateY(0px); opacity: 1; top: 264px;">
									<h2 data-animate="fadeInUp" class="fadeInUp animated">Bienvenido a mi página</h2>
									<p class="d-none d-sm-block fadeInUp animated" data-animate="fadeInUp" data-delay="200">En esta página Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt, ducimus..</p>
								</div>
							</div>
						</div>
						<div class="swiper-slide dark swiper-slide-next" style="height: 758px; width: 946px;">
							<div class="container clearfix">
								<div class="slider-caption slider-caption-center" style="transform: translateY(0px); opacity: 1; top: 246px;">
									<h2 data-animate="fadeInUp" class="not-animated">Beautifully Flexible</h2>
									<p class="d-none d-sm-block not-animated" data-animate="fadeInUp" data-delay="200">Looks beautiful &amp; ultra-sharp on Retina Screen Displays. Powerful Layout with Responsive functionality that can be adapted to any screen size.</p>
								</div>
							</div>
							<div class="video-wrap">
								<video poster="images/videos/explore.jpg" preload="auto" loop="" autoplay="" muted="" style="width: 1347.56px; height: 758px; left: -200.778px;">
									<source src="images/videos/explore.mp4" type="video/mp4">
									<source src="images/videos/explore.webm" type="video/webm">
								</video>
								<div class="video-overlay" style="background-color: rgba(0,0,0,0.55);"></div>
							</div>
						</div>
						<div class="swiper-slide" style="background-image: url(&quot;images/slider/swiper/3.jpg&quot;); background-position: center top; height: 758px; width: 946px;">
							<div class="container clearfix">
								<div class="slider-caption" style="transform: translateY(0px); opacity: 1; top: 259px;">
									<h2 data-animate="fadeInUp" class="not-animated">Great Performance</h2>
									<p class="d-none d-sm-block not-animated" data-animate="fadeInUp" data-delay="200">You'll be surprised to see the Final Results of your Creation &amp; would crave for more.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="slider-arrow-left swiper-button-disabled" tabindex="0" role="button" aria-label="Previous slide" aria-disabled="true" style="opacity: 1;"><i class="icon-angle-left"></i></div>
					<div class="slider-arrow-right" tabindex="0" role="button" aria-label="Next slide" aria-disabled="false" style="opacity: 1;"><i class="icon-angle-right"></i></div>
					<div class="slide-number"><div class="slide-number-current">1</div><span>/</span><div class="slide-number-total">3</div></div>
				<span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>

			</div>

		</section>
        
        
        
        

        <!--COMIENZA FOOTER-->        
        <?php include('includes/footer.php') ?>
        
        
        
        
        
        
        
        
        
        
    
    </div><!-- Termina el wrapper-->
    
    
    <!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

    <script>
    
        let menuItem = document.getElementById("menu_index");
        
        menuItem.classList.add("current");
    
    
    </script>
	<!-- External JavaScripts
	============================================= -->
	<script src="js/jquery.js"></script>
	<script src="js/plugins.js"></script>

	<!-- Footer Scripts
	============================================= -->
	<script src="js/functions.js"></script>
</body>
</html>
