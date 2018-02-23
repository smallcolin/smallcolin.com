<?php
	include "includes/include.php";

	$emailError = "";

	if (count($_POST) > 0 ) {
		if ($_POST['email'] != "") {
			// Save all form data to session variable
			$_SESSION['formPostData'] = $_POST;
			header("Location: contact-form.php");
		} else {
			$emailError = "validation";
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>Small Colin</title>
	<link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
	<!-- <link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet" /> -->
	<link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css" />
	<link href="assets/css/font-awesome.css" rel="stylesheet" type="text/css" />
	<link href="assets/css/style.css" rel="stylesheet" type="text/css" />
	<script src="assets/js/jquery-3.1.0.js"></script>
</head>
<body>
	<!-- <div id="full-fade"></div> -->
	<div id="wrap">
		<header id="header">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<a href="#" id="scroll-logo">
							<h1 class="animated bounceIn">Small Colin</h1>
						</a>
					</div>
				</div>
				<div class="row">
					<!-- screen menu -->
					<div class="col-xs-12 hidden-xs">
						<nav>
							<ul class="fullmenu">
								<a href="#"><li id="toProjects">websites</li></a>
								<a href="#"><li id="toAboutMe">about Me</li></a>
								<!-- <a href="#"><li id="toMusic" style="text-decoration: line-through;">music</li></a> -->
								<a href="#"><li id="toPhotos">photos</li></a>
								<a href="#"><li id="toContact">contact</li></a>
							</ul>
						</nav>
					</div>
					<!-- Mobile Menu Button-->
					<div class="col-xs-12 visible-xs aligncenter">
						<div class="menu-icon">
							<i class="fa fa-chevron-down" aria-hidden="true"></i>
						</div>
					</div>
				</div>
			</div>
			<nav>
				<ul class="mobilemenu">
					<li id="toProjectsMobile"><a href="#">websites</a></li>
					<li id="toAboutMeMobile"><a href="#">about Me</a></li>
					<!-- <li id="toMusicMobile"><a href="#">music</a></li> -->
					<li id="toPhotosMobile"><a href="#">photos</a></li>
					<li id="toContactMobile"><a href="#">contact</a></li>
				</ul>
			</nav>
		</header>

		<div id="fade"></div>

		<div>
			<button class="top-button btn">
				<a href="#scroll-logo"><i class="fa fa-chevron-up fa-2x" aria-hidden="true"></i></a>
			</button>
		</div>

		<main>
