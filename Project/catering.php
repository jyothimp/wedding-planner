<?php
include_once 'db_connect.php';
//include_once 'check_logout.php';
?>
<?php

if(isset($_POST['submit_food'])) {
	$image = $_POST['food_image'];
	//Stores the filename as it was on the client computer.
	$imagename = $_FILES['food_image']['name'];
	//Stores the filetype e.g image/jpeg
	$imagetype = $_FILES['food_image']['type'];
	//Stores any error codes from the upload.
	$imageerror = $_FILES['food_image']['error'];
	//Stores the tempname as it is given by the host when uploaded.
	$imagetemp = $_FILES['food_image']['tmp_name'];

	//The path you wish to upload the image to
	$imagePath = "./images/food/";

	if(is_uploaded_file($imagetemp)) {
			if(move_uploaded_file($imagetemp, $imagePath . $imagename)) {
					echo "Sussecfully uploaded your image.";
			}
			else {
					echo "Failed to move your image.";
			}
	}
	else {
			echo "Failed to upload your image.";
	}
	$food_name= $_POST['food_name'];
	$food_description = $_POST['food_description'];
	$food_price = $_POST['food_price'];
	$result = mysqli_query($con, "INSERT INTO wp_food(food_name,food_image,food_description,food_price) VALUES('$food_name','$imagename','$food_description','$food_price')") or die(mysqli_error($con));
}
?>
<!doctype html>
<html>


<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0">
	<meta name="keywords" content="Event Management Kochi, Event Management Ernakulam, Event Management Kerala, Wedding Planners Kochi, Wedding Planners Ernakulam, Wedding Planners Kerala">
	<meta name="description" content="Scenario Wedding Planner stands out from rest of the Event Management Kochi, Ernakulam & Kerala in terms of its quality of work and is the top rated Wedding Planners Kochi, Ernakulam & Kerala. Contact us : scenariowedding@gmail.com, +91 99464 90001">
	<meta name="author" content="Innovosome">

	<title>Event Management Kochi | Event Management Ernakulam | Event Management Kerala</title>

	<!-- FAVICON AND APPLE TOUCH -->
	<link rel="shortcut icon" href="images/icons/favicon.png">
	<link rel="apple-touch-icon-precomposed" sizes="57x57" href="images/icons/apple-touch-57x57.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/icons/apple-touch-72x72.png">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/icons/apple-touch-114x114.png">
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/icons/apple-touch-144x144.png">

	<!-- FONTS -->
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic">

	<!-- BOOTSTRAP CSS -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/popup.css">
	<!-- FONT AWESOME -->
	<link rel="stylesheet" href="assets/fontawesome/css/font-awesome.min.css">

	<!-- MIU ICON FONT -->
	<link rel="stylesheet" href="assets/miuiconfont/miuiconfont.css">

	<!-- FANCYBOX -->
	<link rel="stylesheet" href="assets/js/fancybox/jquery.fancybox.css">

	<!-- REVOLUTION SLIDER -->
	<link rel="stylesheet" href="assets/js/revolutionslider/css/settings.css">

	<!-- BxSLIDER -->
	<link rel="stylesheet" href="assets/js/bxslider/jquery.bxslider.css">

	<!-- YOUTUBE PLAYER -->
	<link rel="stylesheet" href="assets/js/ytplayer/css/YTPlayer.css">


	<!-- ANIMATIONS -->
	<link rel="stylesheet" href="assets/js/animations/animate.min.css">

	<!-- CUSTOM & PAGES STYLE -->
	<link rel="stylesheet" href="assets/css/custom.css">
	<link rel="stylesheet" href="css/custom.css">
	<link rel="stylesheet" href="assets/css/pages-style.css">

	<!-- STYLE SWITCHER -->
	<link rel="stylesheet" href="assets/js/style-switcher/style-switcher.css">
	<link rel="stylesheet" href="js/tab.css">

	<!-- ALTERNATIVE STYLES -->
	<link rel="stylesheet" href="#" data-style="styles">


</head>

<body>


	<div id="page-wrapper">

		<!-- HEADER -->
		<header>
			<div class="container">
				<div class="row">

					<div class="col-lg-6"></div>
					<div class="col-lg-3" style="color:#ffaa00; text-align:right; font-size:14px;"><i class="fa fa-phone-square ph-icon" aria-hidden="true"></i> <a style="text-decoration:none;" href="mailto:angelwedding@gmail.com">angelwedding@gmail.com</a></div>
					<div class="col-lg-2" style="color:#ffaa00; text-align:right; font-size:14px;"><i class="fa fa-envelope-o ph-icon" aria-hidden="true"></i> <a style="text-decoration:none;" href="tel:+919946490001">+91 99464 90001</a></div>
				</div>
			</div>
			<div class="container" style="border-bottom: 3px #110000">
				<div class="row">
					<div class="col-sm-2">

						<!-- LOGO -->
						<a id="logo" href="index.php">
							<img src="images/icons/logo1.png" alt="Destination wedding in Kerala" width="165">
						</a>

					</div><!-- col -->
					<div class="col-sm-10">

						<!-- SEARCH -->
						<!-- search-container -->

						<!-- MENU -->
						<nav>

							<a id="mobile-menu-button" href="#"><i class="fa fa-bars"></i></a>

							<ul class="menu clearfix" id="menu">
								<li>
									<a href="index.php">Home</a>


								</li>
								<li><a href="about-us.php">About</a></li>

								<li class="megamenu ">

									<a href="#">Add-ons</a>

									<div class="megamenu-container col-4">

										<div class="section">
											<img class="hidden-xs hidden-sm" src="images/backgrounds/image-megamenu.png" alt="Destination Weddings in Kochi">
										</div><!-- section -->

										<div class="section">

											<h5>Designing</h5>

											<ul>

												<li><a href="design-stage.php">Stage Decoration</a></li>
												<li><a href="design-decor.php">Hall Decoration</a></li>
											</ul>

										</div><!-- section -->

										<div class="section">

											<h5>Catering Services</h5>

											<ul>
												<li><a href="nonvegetarian.php">Nonvegetarian</a></li>
												<li><a href="vegetarian.php">Vegetarian</a></li>
												<li><a href="snacks.php">Snacks</a></li>

											</ul>
										</div>
										<div class="section">

											<h5>Media&Entertainment</h5>

											<ul>
												<li><a href="entertainment.php">Entertainment</a></li>
												<li><a href="videography.php">Videography</a></li>
												<li><a href="photography.php">Photography</a></li>

											</ul>

										</div><!-- section -->

									</div><!-- megamenu-container -->

								</li>

								<li>
									<a href="contact.php">Contact</a>
								</li>
								<li>
									<a href="logout.php">Logout</a>
								</nav>

							</div><!-- col -->
						</div><!-- row -->
					</div><!-- container -->

				</header><!-- HEADER -->

				<!-- CONTENT -->
				<div class="content">

					<div id="page-header" class="dark-2">
						<div class="container">
							<div class="row">
								<div class="col-sm-6">

									<h4>Add Food Items</h4>

								</div><!-- col -->
								<div class="col-sm-6">

									<ol class="breadcrumb">
										<li><a href="#">Home</a></li>
										<li class="active">Services</li>
									</ol>

								</div><!-- col -->
							</div><!-- row -->
						</div><!-- ontainer -->
					</div><!-- page-header -->

					<div class="container">
						<div class="row">
							<div class="col-sm-12">

								<!-- headline -->

							</div><!-- col -->
						</div><!-- row -->
					</div><!-- container -->

					<div class="container">
						<input type="submit"  class="food_button" name="button" id="food_add_button" style="color:black;float:right" value="Add New Food Items">
						<div class="row">
							<div class="col-sm-12">

								<h2> Wedding Catering</h2>

								<p> wedding catering is one of the importent thing. Images below show a few of the food items done by us for our customers.</p>

								<div class="tab">
									<button class="tablinks" onclick="openFood(event, 'Vegetarian')">Vegetarian</button>
									<button class="tablinks" onclick="openFood(event, 'Non-Vegetarian')">Non-Vegetarian</button>
									<button class="tablinks" onclick="openFood(event, 'Snacks')">Snacks</button>
								</div>

								<div id="Vegetarian" class="tabcontent">
									<h3>Vegetarian</h3>
									<p>London is the capital city of England.</p>
								</div>

								<div id="Non-Vegetarian" class="tabcontent">
									<h3>Non-Vegetarian</h3>
									<p>Paris is the capital of France.</p>
								</div>

								<div id="Snacks" class="tabcontent">
									<h3>Snacks</h3>
									<p>Tokyo is the capital of Japan.</p>
								</div>

							</div><!-- col -->
						</div><!-- row -->
					</div><!-- container -->

					<div class="container">
						<div class="row">

							<?php
							$query=mysqli_query($con,"SELECT * FROM `wp_food` WHERE `food_status`=1");
							while ($row=mysqli_fetch_array($query)) {
								?>
								<div class="col-sm-4">

									<div class="about-me wow fadeInLeft animated animated" style="visibility: visible;">
										<form action="editcatering.php" method="post">
											<div class="about-me-thumbnail">

												<img style="height:215px !important"src="images/food/<?php echo $row['food_image'] ?>" alt="best wedding planner in cochin">

												<div class="social-media">

													<a ><?php echo $row['food_name'] ?><br> </a>
													<input type="hidden" name="item_id" value="<?php echo $row['food_id'] ?>"
													<left><input type="submit"  class="food_button" name="button_edit" id="button" value="Edit"></left>
													<right><input type="submit" class="food_button"  name="button_edit" id="button" value="Delete"></right>
												</div>
											</div>
										</form>
									</div>
								</div>

								<?php
							}
							?>
							<!-- col -->
						</div><!-- row -->
					</div>
					<!-- FOOTER -->
					<footer>

						<div id="footer-top">

							<!-- container -->

						</div><!-- footer-top -->

						<div id="footer">

							<div class="container">
								<div class="row">
									<div class="col-sm-3">

										<div class="widget widget-text">

											<h3 class="widget-title">About Us</h3>

											<p>As a trend setter We at , Angel have constantly shared the responsibility of our clients spreading the fragrance  and warmth  of hospitality all around.That brought us from a humble beginning of a wedding organising company to the present level of an  event management company of repute , over a period of seven years operating from the heart of Kerala, Kochi.</p>

										</div><!-- widget-text -->

										<div class="widget widget-newsletter">

											<form name="newsletter" method="post" action="#">
												<fieldset>
													<input type="text" name="email" placeholder="Email address">
													<input class="btn btn-default" type="submit" name="submit" value="">
												</fieldset>
											</form>

											<p>Subscribe Now</p>

										</div><!-- widget-newsletter -->

									</div><!-- col -->
									<div class="col-sm-3">

										<div class="widget widget-latest-news">

											<h3 class="widget-title">Reach Us</h3>


											<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31417.266141615346!2d76.39011650000002!3d10.167787800000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b080625cfebb7d1%3A0x89bcd5a211b5e7e6!2sNedumbassery%2C+Kerala!5e0!3m2!1sen!2sin!4v1428733319906" width="250" height="350" frameborder="0" style="border:0"></iframe>

										</div><!-- widget-recent-posts -->

									</div><!-- col -->
									<div class="col-sm-3">
										<div class="widget widget-latest-news">

											<h3 class="widget-title">Join With Us</h3>

											<div id="fb-root"></div>




											<script>(function(d, s, id) {
												var js, fjs = d.getElementsByTagName(s)[0];
												if (d.getElementById(id)) return;
												js = d.createElement(s); js.id = id;
												js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.0";
												fjs.parentNode.insertBefore(js, fjs);
											}(document, 'script', 'facebook-jssdk'));</script>

											<div class="fb-like-box" data-href="https://www.facebook.com/pages/Scenario-Wedding-Company/558467804256076" data-width="250" data-height="360" data-colorscheme="dark" data-show-faces="true" data-header="false" data-stream="false" data-show-border="false"></div>


										</div>

										<div class="social-media abc">


											<a class="twitter" href="https://twitter.com/scenariowc"><i class="fa fa-twitter"></i></a>
											<a class="google" href="https://plus.google.com/109256524763879194099?hl=en"><i class="fa fa-google-plus"></i></a>
											<a class="linkedin" href="https://www.linkedin.com/company/scenarioweddings?trk=biz-companies-cym"><i class="fa fa-linkedin"></i></a>

										</div>
									</div><!-- col -->
									<div class="col-sm-3">

										<div class="widget widget-contact">

											<h3 class="widget-title">Contact Us</h3>

											<ul>
												<li>



													<span>Address</span>
													Priyadarshini Complex,<br>
													Behind Hotel Airlink Castle.<br>
													Athani, Nedumbassery P.O- 683 585.<br>

												</li>
												<li>
													<span>Phone</span>
													Ph: +91 8547855652<br>
													+91  9946490001 <br>
													+91  9946490003

												</li>
												<li>
													<span>E-mail</span>
													<a href="mailto:angelwedding@gmail.com">angelwedding@gmail.com</a>
												</li>
												<li>
													<a href="faq.php"> <span>FAQ</span></a>

												</li>
											</ul>

										</div><!-- widget-contact -->

									</div><!-- col -->
								</div><!-- row -->
							</div><!-- container -->

						</div><!-- footer -->


						<div id="footer-bottom">

							<div class="container">
								<div class="row">
									<div class="col-sm-12">

										<div class="widget widget-text">

											<p class="last text-center text-uppercase">Angel Wedding Company &copy; All Rights Reserved
												|
												Designed By .:<a href="http://www.atees.in/" target="_blank">ATEES</a>:.

											</div><!-- widget-text -->

										</div><!-- col -->
									</div><!-- row -->
								</div><!-- container -->

							</div><!-- footer-bottom -->

						</footer><!-- FOOTER -->

						<div class="flyout" style="position: fixed; left: -5000px; top: - 5000px; color:#f5f5f5;"><h1><b>Wedding Planner in Cochin</b></h1><h1><b>Wedding planner in Kochi</b></h1><h1><b>Cochin weddings planners</b></h1><h1><b>cochin wedding planners</b></h1><h1><b>kochi weddings planner</b></h1><h1><b>kochi wedding planners</b></h1><h1><b>Wedding Planner in Ernakulam</b></h1><h1><b>wedding planner in angamaly</b></h1><h1><b>wedding planner in CIAL</b></h1><h1><b>Wedding planner in Bolgatty palace</b></h1><h1><b>Adlux wedding planner</b></h1><h1><b>Wedding planner in Kerala</b></h1><h1><b>best wedding planner in cochin</b></h1><h1><b>Best wedding planner in kochi</b></h1><h1><b>best wedding planner in kerala</b></h1><h1><b>Best wedding planners in cochin</b></h1><h1><b>Best wedding planners in kochi</b></h1><h1><b>best wedding planners in kerala</b></h1><h1><b>wedding company in kochi</b></h1><h1><b>wedding company in kerala</b></h1><h1><b>which is the number one wedding company in kerala</b></h1><h1><b>Beach wedding in Kochi</b></h1><h1><b>Beach weddings in Kochi</b></h1><h1><b>Wedding entertainment in Kochi</b></h1><h1><b>wedding planners in kochi</b></h1><h1><b>Wedding planners in Kerala</b></h1><h1><b>Wedding planners in ernakulam</b></h1><h1><b>destination wedding in kochi</b></h1><h1><b>Destination Weddings in Kochi</b></h1><h1><b>Destination wedding in Kerala</b></h1><h1><b>Destination weddings in Kerala</b></h1><h1><b>Best wedding event management companies in Cochin</b></h1><h1><b>Event Management Kochi</b></h1><h1><b>Event management ernakulam</b></h1><h1><b>Event Management Kerala</b></h1><h1><b>Wedding planners kochi</b></h1><h1><b>Wedding planners ernakulam</b></h1><h1><b>Wedding planners kerala</b></h1><h1><b>kerala wedding planners</b></h1><h1><b>Wedding venues in Kerala</b></h1><h1><b>Stage decoration in Kochi</b></h1><h1><b>Wedding stage decoration in kochi</b></h1><h1><b>wedding decorators in kochi</b></h1><h1><b>wedding decoration in kochi</b></h1><h1><b>Wedding Design and Decor in Kochi</b></h1><h1><b>Stage Design and Decor in Kochi</b></h1><h1><b>Invitation designing in Kochi</b></h1><h1><b>Invitation designing in Kerala</b></h1><h1><b>Catering services in Kochi</b></h1><h1><b>Catering service in Kochi</b></h1><h1><b>Wedding Photography in Kochi</b></h1><h1><b>Wedding videography in Kochi</b></h1><h1><b>wedding shopping assistance</b></h1><h1><b>wedding shopping assistance in kochi</b></h1>
						</div>
						<div class="cd-popup" id="food_add_popup" role="alert">
							<div class="cd-popup-container">
								<h3>New Food Items</h3>

								<hr>
								<form action="editcatering.php" method="post" id="pass_change_form" enctype="multipart/form-data" onsubmit="return true">
									<input type="text" name="food_name" id="food_name"  placeholder="Name">
									<input type="file" name="food_image" id="food_image" placeholder="Imagefile">
									<input type="number" name="food_price" id="food_price" placeholder="Price">
									<textarea name="food_description" rows="3" id="food_description" placeholder="Description"></textarea>
									<input type="submit" name="submit_food" id="submit_food" Value="Submit">

								</form>
								<a href="#0" class="cd-popup-close img-replace">Close</a>
							</div> <!-- cd-popup -->
						</div>

					</div><!-- PAGE-WRAPPER -->
					<style>
					.abc
					{
						padding-left:70px;
						}</style><!-- FOOTER -->
						<!-- footer -->


						<!-- footer-bottom -->



					</div><!-- PAGE-WRAPPER -->


					<!-- GO TOP -->
					<a id="go-top"><i class="miu-icon-circle_arrow-up_glyph"></i></a>


					<!-- STYLE SWITCHER -->
					<div id="style-switcher"></div>


					<!-- jQUERY -->
					<script src="assets/js/jquery-2.1.3.min.js"></script>

					<!-- BOOTSTRAP JS -->
					<script src="assets/js/bootstrap.min.js"></script>
					<script src="js/popup.js"></script>

					<!-- VIEWPORT -->
					<script src="assets/js/viewport/jquery.viewport.js"></script>

					<!-- MENU -->
					<script src="assets/js/menu/hoverIntent.js"></script>
					<script src="assets/js/menu/superfish.js"></script>

					<!-- FANCYBOX -->
					<script src="assets/js/fancybox/jquery.fancybox.pack.js"></script>

					<!-- REVOLUTION SLIDER -->
					<script src="assets/js/revolutionslider/js/jquery.themepunch.tools.min.js"></script>
					<script src="assets/js/revolutionslider/js/jquery.themepunch.revolution.min.js"></script>

					<!-- BxSLIDER -->
					<script src="assets/js/bxslider/jquery.bxslider.min.js"></script>

					<!-- PARALLAX -->
					<script src="assets/js/parallax/jquery.parallax-scroll.min.js"></script>

					<!-- ISOTOPE -->
					<script src="assets/js/isotope/imagesloaded.pkgd.min.js"></script>
					<script src="assets/js/isotope/isotope.pkgd.min.js"></script>

					<!-- PLACEHOLDER -->
					<script src="assets/js/placeholders/jquery.placeholder.min.js"></script>

					<!-- CONTACT FORM VALIDATE & SUBMIT -->
					<script src="assets/js/validate/jquery.validate.min.js"></script>
					<script src="assets/js/submit/jquery.form.min.js"></script>

					<!-- GOOGLE MAPS -->
					<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
					<script src="assets/js/googlemaps/jquery.gmap.min.js"></script>

					<!-- CHARTS -->
					<script src="assets/js/charts/chart.min.js"></script>
					<script src="assets/js/charts/jquery.easypiechart.min.js"></script>

					<!-- COUNTER -->
					<script src="assets/js/counter/jQuerySimpleCounter.js"></script>

					<!-- YOUTUBE PLAYER -->
					<script src="assets/js/ytplayer/jquery.mb.YTPlayer.js"></script>

					<!-- TWITTER -->
					<script src="assets/js/twitter/twitterfetcher.js"></script>

					<!-- ANIMATIONS -->
					<script src="assets/js/animations/wow.min.js"></script>

					<!-- CUSTOM JS -->
					<script src="assets/js/custom.js"></script>

					<!-- STYLE SWITCHER -->
				</body>
				</html>
