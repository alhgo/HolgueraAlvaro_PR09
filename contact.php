<?php


define('CURRENT_PAGE', 'contact');


?>
<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<!-- Stylesheets
	============================================= -->
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Raleway:300,400,500,600,700|Crete+Round:400i" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="style.css" type="text/css" />
	<link rel="stylesheet" href="css/dark.css" type="text/css" />
	<link rel="stylesheet" href="css/font-icons.css" type="text/css" />
	<link rel="stylesheet" href="css/animate.css" type="text/css" />
	<link rel="stylesheet" href="css/magnific-popup.css" type="text/css" />

	<link rel="stylesheet" href="css/responsive.css" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<!-- Document Title
	============================================= -->
	<title>Contacta conmigo</title>

</head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">
        
        
        <!-- Header
		============================================= -->
		
        <?php  include('includes/header.php');    ?>
        
        
        <!-- #header end -->
        
        
        
        
        
        <section id="content" style="margin-bottom: 0px;">

			<div class="content-wrap">

				<div class="container clearfix">

					<!-- Contact Form
					============================================= -->
					<div class="col_half">

						<div class="fancy-title title-dotted-border">
							<h3>Send us an Email</h3>
						</div>

						<div class="contact-widget">

							<div class="contact-form-result"></div>

							<form class="nobottommargin" id="myForm" name="template-contactform" action="form-data.php" method="post" novalidate="novalidate">

								<div class="form-process"></div>

								<div class="col_one_third">
									<label for="template-contactform-name">Name <small>*</small></label>
									<input type="text" id="template-contactform-name" name="template-contactform-name" value="" class="sm-form-control ">
                                    <div class="alert alert-danger d-none" role="alert" >
  Escribe tu nombre
</div>
								</div>

								<div class="col_one_third">
									<label for="template-contactform-email">Email <small>*</small></label>
									<input type="email" id="template-contactform-email" name="template-contactform-email" value="" class="required email sm-form-control">
								</div>



								<div class="clear"></div>

								<div class="col_two_third">
									<label for="template-contactform-subject">Subject <small>*</small></label>
									<input type="text" id="template-contactform-subject" name="template-contactform-subject" value="" class=" sm-form-control">
								</div>

								<div class="col_one_third col_last">
									<label for="template-contactform-service">País</label>
									<select id="template-contactform-service" name="pais" class="sm-form-control">
										<option value="">-- Selecciona uno --</option>
										<option value="es">España</option>
										<option value="PHP / MySQL">PHP / MySQL</option>
										<option value="HTML5 / CSS3">HTML5 / CSS3</option>
										<option value="Graphic Design">Graphic Design</option>
									</select>
								</div>

								<div class="clear"></div>

								<div class="col_full">
									<label for="template-contactform-message">Message <small>*</small></label>
									<textarea class="required sm-form-control" id="template-contactform-message" name="template-contactform-message" rows="6" cols="30"></textarea>
								</div>

								<div class="col_full hidden">
									<input type="text" id="template-contactform-botcheck" name="template-contactform-botcheck" value="" class="sm-form-control">
								</div>

								<div class="col_full">
									<span class="btn btn-success" onClick="validateForm()">Enviar</span>
								</div>

							</form>
						</div>

					</div><!-- Contact Form End -->

					<!-- Google Map
					============================================= -->
					<div class="col_half col_last">

						<h1>Holaaaa</h1>

					</div><!-- Google Map End -->

					<div class="clear"></div>

					<!-- Contact Info
					============================================= -->
					<div class="row clear-bottommargin">

						<div class="col-lg-4 col-md-4 bottommargin clearfix">
							<div class="feature-box fbox-center fbox-bg fbox-plain">
								<div class="fbox-icon">
									<a href="#"><i class="icon-map-marker2"></i></a>
								</div>
								<h3>Our Headquarters<span class="subtitle">Melbourne, Australia</span></h3>
							</div>
						</div>

						<div class="col-lg-4 col-md-4 bottommargin clearfix">
							<div class="feature-box fbox-center fbox-bg fbox-plain">
								<div class="fbox-icon">
									<a href="#"><i class="icon-phone3"></i></a>
								</div>
								<h3>Speak to Us<span class="subtitle">(123) 456 7890</span></h3>
							</div>
						</div>


						<div class="col-lg-4 col-md-4 bottommargin clearfix">
							<div class="feature-box fbox-center fbox-bg fbox-plain">
								<div class="fbox-icon">
									<a href="#"><i class="icon-twitter2"></i></a>
								</div>
								<h3>Follow on Twitter<span class="subtitle">2.3M Followers</span></h3>
							</div>
						</div>

					</div><!-- Contact Info End -->

				</div>

			</div>

		</section>
        
        
        
        <!--COMIENZA FOOTER-->        
        <?php include('includes/footer.php') ?>
        
        
        
        </div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- External JavaScripts
	============================================= -->
	<script src="js/jquery.js"></script>
	<script src="js/plugins.js"></script>

	<!-- Footer Scripts
	============================================= -->
	<script src="js/functions.js"></script>



    
    <script>
    
    function validateForm()
    {
        
        let todoBien = true;
        
        var inputName = document.getElementById("template-contactform-name");
        
        if(inputName.value.trim() === "")
            {
                inputName.classList.add("error");
                todoBien = false;
            }
        else{
            inputName.classList.remove("error");
        }
        
        
        
        console.log("Validando");
        
        
        if(todoBien)
            {
                document.getElementById("myForm").submit();
            }
    }
    
    
    </script>
	

</body>
</html>