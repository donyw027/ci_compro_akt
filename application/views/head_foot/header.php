<!doctype html>
<html class="no-js" lang="zxx">

<head>
	<!-- Meta Tags -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="Site keywords here">
	<meta name="description" content="">
	<meta name='copyright' content=''>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Title -->
	<title><?= $title; ?></title>

	

	<!-- Favicon -->
	<link rel="icon" href="<?= base_url('assets/img/favicon.png') ?>">

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
	<!-- Nice Select CSS -->
	<link rel="stylesheet" href="<?= base_url('assets/css/nice-select.css') ?>">
	<!-- Font Awesome CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
	<!-- icofont CSS -->
	<link rel="stylesheet" href="<?= base_url('assets/css/icofont.css') ?>">
	<!-- Slicknav -->
	<link rel="stylesheet" href="<?= base_url('assets/css/slicknav.min.css') ?>">
	<!-- Owl Carousel CSS -->
	<link rel="stylesheet" href="<?= base_url('assets/css/owl-carousel.css') ?>">
	<!-- Datepicker CSS -->
	<link rel="stylesheet" href="<?= base_url('assets/css/datepicker.css') ?>">
	<!-- Animate CSS -->
	<link rel="stylesheet" href="<?= base_url('assets/css/animate.min.css') ?>">
	<!-- Magnific Popup CSS -->
	<link rel="stylesheet" href="<?= base_url('assets/css/magnific-popup.css') ?>">

	<!-- Medipro CSS -->
	<link rel="stylesheet" href="<?= base_url('assets/css/normalize.css') ?>">
	<link rel="stylesheet" href="<?= base_url('assets/style.css') ?>">
	<link rel="stylesheet" href="<?= base_url('assets/css/responsive.css') ?>">


	<style>
  .capacity-section {
    padding: 5px 5px;
    /* background-color: #f9f9f9; */
  }

  .section-title {
    font-size: 2em;
    margin-bottom: 20px;
    color: #fff;
    font-weight: bold;
  }

  .capacity-box {
    background: white;
    padding: 15px 15px;
    border-radius: 12px;
    box-shadow: 0 6px 18px rgba(0,0,0,0.1);
    transition: transform 0.3s ease;
  }

  .capacity-box:hover {
    transform: translateY(-8px);
  }

  .capacity-title {
    font-size: 1.5em;
    margin-bottom: 10px;
    color: #0ec9d2;
    font-weight: 600;
  }

  .capacity-number {
    font-size: 1.8em;
    font-weight: bold;
    color: #222;
  }

  @media (max-width: 767px) {
    .capacity-box {
      padding: 20px 10px;
    }
    .capacity-number {
      font-size: 1.5em;
    }
  }
</style>

</head>

<body>

	<!-- Preloader -->
	<div class="preloader">
		<div class="loader">
			<div class="loader-outter"></div>
			<div class="loader-inner"></div>

			<div class="indicator1">
				<svg width="16px" height="12px">
					<polyline id="back" points="1 6 4 6 6 11 10 1 12 6 15 6"></polyline>
					<polyline id="front" points="1 6 4 6 6 11 10 1 12 6 15 6"></polyline>
				</svg>
			</div>
		</div>
	</div>
	<!-- End Preloader -->

	<!-- <ul class="pro-features">
			<a class="get-pro" href="#">Career</a>
			<li class="big-title">Lorem</li>
			<li class="title">Lorem Ipsum</li>
			<li>2+ premade home pages</li>
			<div class="button">
				<a href="" target="_blank" class="btn">-</a>
			</div>
		</ul> -->

	<!-- Header Area -->
	<header class="header">
		<!-- Topbar -->
		<div class="topbar">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-md-5 col-12">
						<!-- Contact -->
						<ul class="top-link">
							<!-- <li><a href="#">About</a></li>
								<li><a href="#">Doctors</a></li>
								<li><a href="#">Contact</a></li>
								<li><a href="#">FAQ</a></li> -->
						</ul>
						<!-- End Contact -->
					</div>
					<div class="col-lg-6 col-md-7 col-12">
						<!-- Top Contact -->
						<ul class="top-contact">
							<li><i class="fa fa-phone"></i>+(0343) 4505082</li>
							<li><i class="fa fa-envelope"></i><a href="mailto:info@akt-id.com">info@akt-id.com</a></li>
							<li>
								<div class="dropdown">
									<button class="btn  btn-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">
									<i style="color: white;" class="fa fa-language"></i>ID
									</button>
									<div class="dropdown-menu">
									<a class="dropdown-item" href="<?= base_url('welcome/change_language/id'); ?>">ID</a>
									<a class="dropdown-item" href="<?= base_url('welcome/change_language/en'); ?>">EN</a>
									</div>
								</div>
							</li>

						</ul>
						<!-- End Top Contact -->
					</div>
				</div>
			</div>
		</div>
		<!-- End Topbar -->
		<!-- Header Inner -->
		<div class="header-inner">
			<div class="container">
				<div class="inner">
					<div class="row">
						<div class="col-lg-3 col-md-3 col-12">
							<!-- Start Logo -->
							<div class="logo">
								<a href="<?= site_url('home') ?>"><img src="<?= base_url('assets/img/akt.png"') ?>" alt="#"></a>
							</div>
							<!-- End Logo -->
							<!-- Mobile Nav -->
							<div class="mobile-nav"></div>
							<!-- End Mobile Nav -->
						</div>
						<div class="col-lg-7 col-md-9 col-12">
							<!-- Main Menu -->
							<div class="main-menu">
								<nav class="navigation">
									<ul class="nav menu">
										<!-- <li class="active"><a href="#">Home <i class="icofont-rounded-down"></i></a>
												<ul class="dropdown">
													<li><a href="index.html">Home Page 1</a></li>
												</ul>
											</li> -->
										<li><a href="<?= site_url('home') ?>"><?= $this->lang->line('home') ?> </a></li>
										<li><a href="<?= site_url('about') ?>"><?= $this->lang->line('about') ?> </a></li>
										<li><a href="<?= site_url('career') ?>"><?= $this->lang->line('career') ?> </a></li>
										<li><a href="<?= site_url('contact') ?>"><?= $this->lang->line('contact') ?> </a></li>
									</ul>
								</nav>
							</div>
							<!--/ End Main Menu -->
						</div>
						<!-- <div class="col-lg-2 col-12">
								<div class="get-quote">
									<a href="appointment.html" class="btn">Book Appointment</a>
								</div>
							</div> -->
					</div>
				</div>
			</div>
		</div>
		<!--/ End Header Inner -->
	</header>