<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet"/>
	<link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Droid+Serif" />
	<link href="<?php bloginfo('template_directory'); ?>/css/pe-icon-7-stroke.css" rel="stylesheet">
	<link href="<?php bloginfo('template_directory'); ?>/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/reset.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/owl.carousel.min.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/owl.theme.default.min.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/animate.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/jquery-ui.css">
	<link href="<?php bloginfo('template_directory'); ?>/css/style.css" rel="stylesheet" type="text/css">
	<?php wp_head(); ?>
</head>
<body id="body" class="slideout-style-sidebar">
	<div id="page" class="site" onclick="remove()">
		<div class="header-wrapper">
			<header class="header">
				<div class="header-top">
					<div class="container">
						<div class="header-top-left">
							<div class="header-info">
								<i aria-hidden="true" class="fa fa-map-marker"></i>
								<p>24, Lane street<br />New York, USA</p>
							</div>
						</div>
						<div class="logo">
							<h1>p<span>o</span>b</h1>
						</div>
						<div class="header-top-right">
							<div class="header-info">
								<i aria-hidden="true" class="fa fa-clock-o"></i>
								<p>24, Lane street<br /> New York, USA</p>
							</div>
							<div class="header-info">
								<i aria-hidden="true" class="fa fa-files-o"></i>
								<p>info@company.com<br />+021-483-893</p>
							</div>/
						</div>
					</div>
				</div><!-- .header-top -->
				<nav class="navigation">
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-1',
							'container' => 'false',
							'menu_id' => 'header-menu',
							'menu_class' => 'nav navbar-nav menu',
						)
					);
					?>
					<div class="nav-icon">
						<a href=""><span class="pe-7s-cart"></span></a>
						<a href="#site-search" data-toggle="collapse"><span class="pe-7s-search"></span></a>
						<button class="menu-toggle" aria-controls="sidebar-menu" aria-expanded="false" onclick="toggle(event)">
							<i class="pe-7s-menu" aria-hidden="true"></i>
						</button>
						<div id="site-search" class="collapse site-search">
							<form class="form-search" action="" method="GET">
								<input class="form-control" type="text" name="s" value="" placeholder="Enter your Keyword">
							</form>
						</div>
					</div>
				</nav>
</header><!-- .header -->