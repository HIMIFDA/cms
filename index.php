<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">

	<title>HIMIFDA</title>
	
	<!-- Main CSS file -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
	<link rel="stylesheet" href="assets/css/owl.carousel.css" />
	<link rel="stylesheet" href="assets/css/font-awesome.css" />
	<link rel="stylesheet" href="assets/css/style.css" />
	<link rel="stylesheet" href="assets/css/responsive.css" />

	
	<!-- Favicon -->
	<link rel="shortcut icon" href="assets/images/icon/favicon.png">
	
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
	
</head>
<body>


	<?php
	/**
	 * Check url, if there is get params, let's go to blog page. otherwise let's go to home page
	 */
	if (empty($_GET['component'])) {
			include './components/home.php';
	} else {
		if ($_GET['component'] === 'blog') {
			include './components/blog.php';
		} else if ($_GET['component'] === 'about') {
			echo 'halaman about';
			die();
		} else {
			include './components/home.php';
		}
	}
	?>


	

	
	<!-- JS -->
	<script type="text/javascript" src="assets/js/jquery.min.js"></script><!-- jQuery -->
	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script><!-- Bootstrap -->
	<script type="text/javascript" src="assets/js/jquery.parallax.js"></script><!-- Parallax -->
	<script type="text/javascript" src="assets/js/smoothscroll.js"></script><!-- Smooth Scroll -->
	<script type="text/javascript" src="assets/js/masonry.pkgd.min.js"></script><!-- masonry -->
	<script type="text/javascript" src="assets/js/jquery.fitvids.js"></script><!-- fitvids -->
	<script type="text/javascript" src="assets/js/owl.carousel.min.js"></script><!-- Owl-Carousel -->
	<script type="text/javascript" src="assets/js/jquery.counterup.min.js"></script><!-- CounterUp -->
	<script type="text/javascript" src="assets/js/waypoints.min.js"></script><!-- CounterUp -->
	<script type="text/javascript" src="assets/js/jquery.isotope.min.js"></script><!-- isotope -->
	<script type="text/javascript" src="assets/js/jquery.magnific-popup.min.js"></script><!-- magnific-popup -->
	<script type="text/javascript" src="assets/js/scripts.js"></script><!-- Scripts -->


</body>
</html>