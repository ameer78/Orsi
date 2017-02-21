<!DOCTYPE html>
<html <?php language_attributes(); ?>>


<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="viewport" content="width=device-width">
		<title><?php bloginfo('name'); ?></title>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		<?php wp_head(); ?>
	</head>
	
<body <?php body_class(); ?>>

<!--
<div id="tabs">
	<ul>

		<li><a href="#"><span>Sign in</span></a></li>
		<li><a href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>" ><span>My Account</span></a></li>
		<li><a href="#"><span>Log out</span></a></li>
	</ul>
</div>
-->
<header class="site-header"    >


     <div class="container">
	<!-- hd-search -->
	<div class="hd-search">
		<?php get_search_form(); ?>
	</div><!-- /hd-search -->

	<h1 ><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
	<h5 ><?php bloginfo('description'); ?> <?php if (is_page('portfolio')) { ?>
			- Thank you for viewing our work
		<?php }?></h5>


	<nav class="site-nav" >

		<?php

		$args = array(
			'theme_location' => 'primary'
		);

		?>

		<?php
		wp_nav_menu(  $args );

		?>

	</nav>
</div>
</header><!-- /site-header -->

	<div class="container">
	
		<!-- site-header -->
