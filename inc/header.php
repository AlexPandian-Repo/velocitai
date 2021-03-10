<!DOCTYPE html>
<!--[if IE 8]>			<html class="ie ie8"> <![endif]-->
<!--[if IE 9]>			<html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->
<html>
<!--<![endif]-->

<head>

	<!-- Meta -->
	<meta charset="utf-8">
	<meta name="keywords" content="HTML5 Template" />
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Shop Home Page - PHP Ecommerce</title>

	<!-- Mobile Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Favicon -->
	<link rel="shortcut icon" href="images/favicon.png">

	<!-- CSS -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="js/isotope/isotope.css">
	<link rel="stylesheet" href="js/flexslider/flexslider.css">
	<link rel="stylesheet" href="js/owl-carousel/owl.carousel.css">
	<link rel="stylesheet" href="js/owl-carousel/owl.theme.css">
	<link rel="stylesheet" href="js/owl-carousel/owl.transitions.css">
	<link rel="stylesheet" href="js/superfish/css/megafish.css" media="screen">
	<link rel="stylesheet" href="js/superfish/css/superfish.css" media="screen">
	<link rel="stylesheet" href="js/pikaday/pikaday.css">
	<link rel="stylesheet" href="css/settings-panel.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/light.css">
	<link rel="stylesheet" href="css/responsive.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,500,600,700,700i|Montserrat:300,400,500,600,700" rel="stylesheet">
	<!--<link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<link href="lib/animate/animate.min.css" rel="stylesheet">
	<link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
	<link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
	<link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
	 <link href="css/style1.css" rel="stylesheet"> -->



	<!-- JS Font Script -->
	<script src="http://use.edgefonts.net/bebas-neue.js"></script>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

	<!-- Modernizer -->
	<script src="js/modernizr.custom.js"></script>
	<style>
		:root {
			--primary-color: #000;
			--overlay-color: rgba(24, 39, 51, 0.95);
			--menu-speed: 0.75s;
		}

		#naviga {
			position: fixed;
			top: 0;
		}

		.marginbox {
			margin-top: 2rem;
		}

		.addmargi {
			margin-top: 5rem;
		}

		.menu-wrap {
			position: fixed;
			top: 0;
			right: 0;
			z-index: 1;
		}

		.menu-wrap .toggler {
			position: absolute;
			top: 0%;
			right: 0%;
			z-index: 2;
			cursor: pointer;
			width: 50px;
			height: 50px;
			opacity: 0;
		}

		.menu-wrap .hamburger {
			position: absolute;
			top: 0;
			right: 0;
			z-index: 1;
			width: 60px;
			height: 60px;
			padding: 1rem;
			background: var(--primary-color);
			display: flex;
			align-items: center;
			justify-content: center;
		}

		/* Hamburger Line */
		.menu-wrap .hamburger>div {
			position: relative;
			flex: none;
			width: 100%;
			height: 2px;
			background: #fff;
			display: flex;
			align-items: center;
			justify-content: center;
			transition: all 0.4s ease;
		}

		/* Hamburger Lines - Top & Bottom */
		.menu-wrap .hamburger>div::before,
		.menu-wrap .hamburger>div::after {
			content: '';
			position: absolute;
			z-index: 1;
			top: -10px;
			width: 100%;
			height: 2px;
			background: inherit;
		}

		/* Moves Line Down */
		.menu-wrap .hamburger>div::after {
			top: 10px;
		}

		/* Toggler Animation */
		.menu-wrap .toggler:checked+.hamburger>div {
			transform: rotate(135deg);
		}

		/* Turns Lines Into X */
		.menu-wrap .toggler:checked+.hamburger>div:before,
		.menu-wrap .toggler:checked+.hamburger>div:after {
			top: 0;
			transform: rotate(90deg);
		}

		/* Rotate On Hover When Checked */
		.menu-wrap .toggler:checked:hover+.hamburger>div {
			transform: rotate(225deg);
		}

		/* Show Menu */
		.menu-wrap .toggler:checked~.menu {
			visibility: visible;
		}

		.menu-wrap .toggler:checked~.menu>div {
			transform: scale(1);
			transition-duration: var(--menu-speed);
		}

		.menu-wrap .toggler:checked~.menu>div>div {
			opacity: 1;
			transition: opacity 0.4s ease 0.4s;
		}

		.menu-wrap .menu {
			position: fixed;
			top: 0;
			right: 0;
			width: 100%;
			height: 100%;
			visibility: hidden;
			overflow: hidden;
			display: flex;
			align-items: center;
			justify-content: center;
		}

		.menu-wrap .menu>div {
			background: var(--overlay-color);
			border-radius: 50%;
			width: 200vw;
			height: 200vw;
			display: flex;
			flex: none;
			align-items: center;
			justify-content: center;
			transform: scale(0);
			transition: all 0.4s ease;
		}

		.menu-wrap .menu>div>div {
			text-align: center;
			max-width: 90vw;
			max-height: 100vh;
			opacity: 0;
			transition: opacity 0.4s ease;
		}

		.menu-wrap .menu>div>div>ul>li {
			list-style: none;
			color: #fff;
			font-size: 1.5rem;
			padding: 1rem;
		}

		.menu-wrap .menu>div>div>ul>li>a {
			color: inherit;
			text-decoration: none;
			transition: color 0.4s ease;
		}

		#psingle {
			background-color: #f4f4f4;
			padding: 4rem;
		}

		@media(max-width:768px) {
			#psingle {
				padding: 1rem;
			}
		}
	</style>
</head>

<body>
	<!-- 
	<div id="wrapper" class="wrapper">
		 HEADER 
		<header id="header2">
			<div class="container">
				<div class="row">
					<div class="col-md-3 col-xs-5 logo">
						<a href="http://localhost/ecomphp/index.php"><img src="http://[::1]/cishop/assets/images/logo.png" class="img-responsive" alt="" /></a>
					</div>
					<div class="col-md-9 col-xs-7">
						<div class="top-bar">

						</div>
					</div>
				</div> -->