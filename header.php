<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package sfm
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> class="boxed">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
	
	<!-- Web Fonts  -->
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="http://sfmguru.in/wp-content/themes/sfm/css/vendor/bootstrap/bootstrap.css">
		<link rel="stylesheet" href="http://sfmguru.in/wp-content/themes/sfm/css/vendor/fontawesome/css/font-awesome.css">
		<link rel="stylesheet" href="http://sfmguru.in/wp-content/themes/sfm/css/vendor/owlcarousel/owl.carousel.min.css" media="screen">
		<link rel="stylesheet" href="http://sfmguru.in/wp-content/themes/sfm/css/vendor/owlcarousel/owl.theme.default.min.css" media="screen">
		<link rel="stylesheet" href="http://sfmguru.in/wp-content/themes/sfm/css/vendor/magnific-popup/magnific-popup.css" media="screen">

		<!-- Theme CSS -->
		<link rel="stylesheet" href="http://sfmguru.in/wp-content/themes/sfm/css/theme.css">
		<link rel="stylesheet" href="http://sfmguru.in/wp-content/themes/sfm/css/theme-elements.css">
		<link rel="stylesheet" href="http://sfmguru.in/wp-content/themes/sfm/css/theme-blog.css">
		<link rel="stylesheet" href="http://sfmguru.in/wp-content/themes/sfm/css/theme-shop.css">
		<link rel="stylesheet" href="http://sfmguru.in/wp-content/themes/sfm/css/theme-animate.css">

		<!-- Current Page CSS -->
		<link rel="stylesheet" href="http://sfmguru.in/wp-content/themes/sfm/css/vendor/rs-plugin/css/settings.css" media="screen">
		<link rel="stylesheet" href="http://sfmguru.in/wp-content/themes/sfm/css/vendor/circle-flip-slideshow/css/component.css" media="screen">
		<link rel="stylesheet" href="http://sfmguru.in/wp-content/themes/sfm/css/vendor/nivo-slider/nivo-slider.css" media="screen">
		<link rel="stylesheet" href="http://sfmguru.in/wp-content/themes/sfm/css/vendor/nivo-slider/default/default.css" media="screen">

		<!-- Skin CSS -->
		<link rel="stylesheet" href="http://sfmguru.in/wp-content/themes/sfm/css/skins/default.css">

		<!-- Head Libs -->
		<script src="http://sfmguru.in/wp-content/themes/sfm/css/vendor/modernizr/modernizr.js"></script>
	
	<!--[if IE]>
		<script src="http://sfmguru.in/wp-content/themes/sfm/css/ie.css"></script>
	<![endif]-->

	<script src="http://sfmguru.in/wp-content/themes/sfm/css/vendor/modernizr/modernizr.js"></script>

	<!--[if lte IE 8]>
		<script src="http://sfmguru.in/wp-content/themes/sfm/css/vendor/respond/respond.js"></script>
		<script src="http://sfmguru.in/wp-content/themes/sfm/css/vendor/excanvas/excanvas.js"></script>
	<![endif]-->
	
</head>

<body>
<div class="body">
			<header id="header">
				<div class="container">
					<div class="logo">
						<a href="index.php">
							<img src="http://sfmguru.in/wp-content/uploads/2017/12/sfm-guru.png" data-sticky-width="172" data-sticky-height="40" width="262" height="61"/>
						</a>
					</div>
					<nav>
						<ul class="nav nav-pills nav-top">
							<li class="phone">
								<span><i class="fa fa-phone"></i>+91-8080-381-381</span>
							</li>
							<li class="phone">
								<span><i class="fa fa-envelope"></i>sfmguru.in@gmail.com</span>
							</li>
						</ul>
					</nav>
					<button class="btn btn-responsive-nav btn-inverse" data-toggle="collapse" data-target=".nav-main-collapse">
						<i class="fa fa-bars"></i>
					</button>
				</div>
				<div class="navbar-collapse nav-main-collapse collapse">
					<div class="container">
						<nav class="nav-main" id="site-navigation">
							
								
							<?php
								wp_nav_menu( array(
								'theme_location' => 'menu-1',
								'menu_id'        => 'primary-menu',
								'menu_class' => 'nav nav-pills nav-main',
								'container' 	=> 'li',
								'depth'			=> 3,

							) );
							?>
						
						</nav><!-- #site-navigation -->
					</div>
				</div>
			</header>