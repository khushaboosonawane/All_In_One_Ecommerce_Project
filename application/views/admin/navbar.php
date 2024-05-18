<?php
defined("BASEPATH") or exit("no direct script is allowed");
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
	<link href="<?= base_url() ?>public/admin_assets/css/modern.css" rel="stylesheet">
	<style>
		body {
			opacity: 0;
		}
	</style>
	<script src="<?= base_url() ?>public/admin_assets/js/settings.js"></script>
	
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-120946860-7"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-120946860-7');
</script>
</head>

<body>
	<div class="splash active">
		<div class="splash-icon"></div>
	</div>

	<div class="wrapper">
		<nav id="sidebar" class="sidebar">
			<a class='sidebar-brand' href='<?= base_url() ?>/admincontroller/index'>
				<svg>
					<use xlink:href="#ion-ios-pulse-strong"></use>
				</svg>
				Spark
			</a>
			<div class="sidebar-content">
				<div class="sidebar-user">
					<img src="<?= base_url() ?>public/admin_assets/img/avatars/avatar.jpg" class="img-fluid rounded-circle mb-2" alt="Linda Miller" />
					<div class="fw-bold">Linda Miller</div>
					<small>Front-end Developer</small>
				</div>

				<ul class="sidebar-nav">
					<li class="sidebar-header">
						Main
					</li>
					<li class="sidebar-item">
						<a data-bs-target="#dashboards" data-bs-toggle="collapse" class="sidebar-link collapsed">
							<i class="align-middle me-2 fas fa-fw fa-home"></i> <span class="align-middle">Dashboards</span>
						</a>
						<ul id="dashboards" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
							<li class="sidebar-item"><a class='sidebar-link' href='dashboard-default.html'>Default</a></li>
							<li class="sidebar-item"><a class='sidebar-link' href='dashboard-analytics.html'>Analytics</a></li>
							<li class="sidebar-item"><a class='sidebar-link' href='dashboard-e-commerce.html'>E-commerce</a></li>
						</ul>
					</li>
					

					<li class="sidebar-header">
						Elements
					</li>
					<li class="sidebar-item">
						<a class='sidebar-link' href='calendar.html'>
							<i class="align-middle me-2 far fa-fw fa-calendar-alt"></i> <span class="align-middle">Calendar</span>
						</a>
					</li>
				</ul>
			</div>
		</nav>
		<div class="main">
			<nav class="navbar navbar-expand navbar-theme">
				<a class="sidebar-toggle d-flex me-2">
					<i class="hamburger align-self-center"></i>
				</a>
				<div class="navbar-collapse collapse">
					<ul class="navbar-nav ms-auto">
						<li class="nav-item dropdown ms-lg-2">
							<a class="nav-link dropdown-toggle position-relative" href="#" id="userDropdown" data-bs-toggle="dropdown">
								<i class="align-middle fas fa-cog"></i>
							</a>
							<div class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
								<a class="dropdown-item" href="#"><i class="align-middle me-1 fas fa-fw fa-user"></i> View Profile</a>
								<a class="dropdown-item" href="#"><i class="align-middle me-1 fas fa-fw fa-comments"></i> Contacts</a>
								<a class="dropdown-item" href="#"><i class="align-middle me-1 fas fa-fw fa-chart-pie"></i> Analytics</a>
								<a class="dropdown-item" href="#"><i class="align-middle me-1 fas fa-fw fa-cogs"></i> Settings</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="#"><i class="align-middle me-1 fas fa-fw fa-arrow-alt-circle-right"></i> Sign out</a>
							</div>
						</li>
					</ul>
				</div>
			</nav>
