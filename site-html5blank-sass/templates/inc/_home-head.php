<!DOCTYPE html>
<html lang="de"> <!-- Set this to the main language of your site -->
<head>
    <meta charset="utf-8">

    <title><?php echo $page->title; ?></title>

    <!-- Enter a brief description of your page -->
    <meta name="description" content="">

    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <!-- Include the site stylesheet -->
    <link rel="stylesheet" type="text/css" href="<?php echo Sassify::css('styles/sass/style.scss'); ?>">

    <!-- Include the HTML5 shiv print polyfill for Internet Explorer browsers 8 and below -->
    <!--[if lt IE 9]><script src="js/html5shiv-printshiv.js" media="all"></script><![endif]-->
</head>
<body>
	
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#content">skip to content</a>
	
	<header role="banner">
		<div class="wrapper">
			<h1><?php echo $page->title; ?></h1>

			<nav role="navigation" id="site-navigation" class="main-navigation">
				<button class="menu-toggle hamburger hamburger--spin" aria-controls="primary-menu" aria-expanded="false">
					<span class="hamburger-box">
						<span class="hamburger-inner"></span>
					</span>
				</button>
				<div class="wrapper">
					<?php
					$treeMenu = $modules->get("MarkupSimpleNavigation"); // load the module
					echo $treeMenu->render(); // render default menu
					?>
				</div>
			</nav><!-- #site-navigation -->
			
		</div>

    </header>
	
	<div id="content" class="with-sidebar">