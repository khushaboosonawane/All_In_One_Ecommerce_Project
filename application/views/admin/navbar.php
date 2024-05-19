<?php
defined("BASEPATH") or exit("no direct script is allowed");
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All In One Ecommerce</title>
	<link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet"/>
	<link href="<?= base_url() ?>public/admin_assets/css/modern.css" rel="stylesheet">
	<link rel="icon" href="<?= base_url() ?>public/logo.jpg">
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
			<a class='sidebar-brand text-center' href='<?= base_url() ?>admincontroller/index'>
				<img src="<?= base_url() ?>public/logo.jpg" alt="" style="height:75px;width:90px;border-radius:50%;">
			</a>
			<div class="sidebar-content">
				<div class="sidebar-user">
					<img src="<?= base_url() ?>public/admin_assets/img/avatars/avatar.jpg" class="img-fluid rounded-circle mb-2" alt="Linda Miller" />
					<div class="fw-bold">Linda Miller</div>
					<small>Front-end Developer</small>
				</div>

				<ul class="sidebar-nav">
					<li class="sidebar-item">
						<a class='sidebar-link' href='<?= base_url() ?>admincontroller/index'>
							<i class="align-middle me-2 far fa-fw fa-calendar-alt"></i> <span class="align-middle">Dashboard</span>
						</a>
					</li>
					<li class="sidebar-header">
						Master
					</li>
					<li class="sidebar-item">
						<a data-bs-target="#category" data-bs-toggle="collapse" class="sidebar-link collapsed">
							<i class=" align-middle me-2 far lead ri-product-hunt-fill"></i>
							<span class="align-middle">Product Category</span>
						</a>
						<ul id="category" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
							<li class="sidebar-item"><a class='sidebar-link' href='<?= base_url() ?>admincontroller/category'>1. Category</a></li>
							<li class="sidebar-item"><a class='sidebar-link' href='<?= base_url() ?>admincontroller/subcategory'>2.  Subcategory</a></li>
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
				<a class="sidebar-toggle d-flex me-2" style="text-decoration:none">
					<!-- <i class="hamburger align-self-center"></i> -->
					<i class="ri-arrow-left-line text-white lead p-3"></i>
				</a>
				<div class="navbar-collapse collapse">
					<ul class="navbar-nav ms-auto">
						<li class="nav-item dropdown ms-lg-2">
							<a class="nav-link dropdown-toggle position-relative" href="#" id="userDropdown" data-bs-toggle="dropdown">
								<i class="ri-user-line lead" style="font-weight:bold"></i>
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
