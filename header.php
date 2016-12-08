<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<?php wp_head(); ?>
	</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<div class="main-container">
		<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e('Skip to content', 'pleiades17'); ?></a>
		
		<header id="masthead" class="site-header" role="banner">

			<div class="header-container">
				<div class="brand-nav">

					<!-- Branding -->
					<div class="site-branding">
						<?php
						if (is_front_page() && is_home()) : ?>
							<h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
						<?php else : ?>
							<p class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></p>
						<?php
						endif;

						$description = get_bloginfo('description', 'display');
						if ($description || is_customize_preview()) : ?>
							<p class="site-description"><?php echo $description; ?></p>
						<?php
						endif; ?>
					</div><!-- .site-branding -->
					
					<!-- Navigation -->
					<nav id="site-navigation" class="main-navigation" role="navigation">
						<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e('Primary Menu', 'pleiades17'); ?></button>
						<?php 
							wp_nav_menu(array(
								'theme_location' => 'primary', 
								'menu_id' => 'primary-menu'
							)); ?>
					</nav><!-- #site-navigation -->
				
				</div><!-- class="brand-nav" -->

			</div><!-- class="header-container" -->

			
		</header><!-- #masthead class="site-header" -->
		

		<!-- SITE CONTENT START -->
		<div id="content" class="site-content">
