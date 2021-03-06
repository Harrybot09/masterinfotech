<?php 
include('inc/connection.php');
$conn = DB(); 
 $page_name = basename($_SERVER['REQUEST_URI'], '?' . $_SERVER['QUERY_STRING']);
 ?>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://localhost/infotech/assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">
	<script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script> 
    <link rel="stylesheet" type="text/css" href="http://localhost/infotech/assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="http://localhost/infotech/assets/css/fixes.css">
    <link rel="stylesheet" type="text/css" href="http://localhost/infotech/assets/css/responsive_col.css">
    <link rel="stylesheet" type="text/css" href="http://localhost/infotech/assets/css/responsive_col_sm.css">
    <link rel="stylesheet" type="text/css" href="http://localhost/infotech/assets/css/responsive_col_md.css">
	<link rel="stylesheet" type="text/css" href="http://localhost/infotech/assets/css/responsive_col_lg.css">
	<link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
	<link rel="stylesheet" href="http://localhost/infotech/assets/css/carrousel.css"/>
	<link rel="icon" href="http://localhost/infotech/assets/images/favicon.png" type="image/gif">


   <header>
        <!-- Creating Nav Bar  -->
        <nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light">
            <div class="container">
                <a href="/" class="navbar-brand">
                    <img class="logo" src="http://localhost/infotech/assets/images/logo.svg">
                </a>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link " href="http://localhost/infotech/">Home </a></li>
                        <li class="nav-item"><a class="nav-link " href="http://localhost/infotech/who-we-are.php">who we are  </a></li>
                        <li class="abc nav-item"><a class="nav-link " href="http://localhost/infotech/portfolio.php"> Portfolio</a></li>
						<li class=" nav-item">
								<a class="nav-link hovermenu"  href="http://localhost/infotech/services.php" >Our Services</a>
								<div class="dropdown-menu bgmenuhover">
								<a class="dropdown-item innermenu" href="http://localhost/infotech/website-development-services">Website development</a>
								<a class="dropdown-item innermenu" href="http://localhost/infotech/mobile-app-development-services">Mobile app development</a>
								<a class="dropdown-item innermenu" href="http://localhost/infotech/ui-and-ux-services">UI/UX design</a>
								<a class="dropdown-item innermenu" href="http://localhost/infotech/e-commerce-services">E-commerce</a>
								<a class="dropdown-item innermenu" href="http://localhost/infotech/digital-marketing-services">Digital Marketing</a>
								<a class="dropdown-item innermenu" href="http://localhost/infotech/bussiness-consultation-services">Business consultation</a>
								<a class="dropdown-item innermenu" href="http://localhost/infotech/training-and-internship">Training and internship</a>
								</div>
						</li>
						<li class="abc nav-item"><a class="nav-link " href="http://localhost/infotech/blog.php"> Blogs</a></li>
                        <li class="nav-item"><a class="nav-link " href="http://localhost/infotech/contact-us.php"> Contact </a></li>
                    </ul>
                </div>
                <div class="top_button">
                    <div class="button_container" id="toggle">
                        <span class="top"></span>
                        <span class="middle"></span>
                        <span class="bottom"></span>
                    </div>
                    <div class="overlay" id="overlay">
                        <nav class="overlay-menu">
                            <ul>
                                <li class="display-1 fw-bold"><a href="/">Home</a></li>
                                <li class="display-1 fw-bold"><a href="/who-we-are">About</a></li>
                                <li class="display-1 fw-bold " id="smenu"><a href="/our-services">Services</a></li>
								<li class="display-1 fw-bold " id="smenu"><a href="/our-portfolio">Portfolio</a></li>
								<li class="display-1 fw-bold " id="smenu"><a href="/career">Careers</a></li>
                                <li class="display-1 fw-bold"><a href="/contact-us">Get a quote</a></li>
                                <li class="display-1 fw-bold"><a href="/blog.php">Blog</a></li>
								
                            </ul>
							<div class="sm-menu" style="display:none;">
								<a class="dropdown-item" href="/website-development-services">Website development</a>
								<a class="dropdown-item" href="/mobile-app-development-services">Mobile app development</a>
								<a class="dropdown-item" href="/ui-and-ux-services">UI/UX design</a>
								<a class="dropdown-item" href="/e-commerce-services">E-commerce</a>
								<a class="dropdown-item" href="/digital-marketing-services">Digital Marketing</a>
								<a class="dropdown-item" href="/bussiness-consultation-services">Business consultation</a>
								<a class="dropdown-item" href="/training-and-internship">Training and internship</a>
							</div>
                        </nav>
                    </div>
                </div>
            </div>
        </nav>
    </header>
  