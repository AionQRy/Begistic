<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package seed
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
	<link href="https://fonts.googleapis.com/css?family=Prompt:100,200,300,400,600,700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800&display=swap" rel="stylesheet">
	<!-- <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
	<link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/> 
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">-->
</head>

<?php $bodyClass = ''; if (is_active_sidebar( 'headbar' )) { $bodyClass = 'has-headbar'; } ?>

<body <?php body_class($bodyClass); ?>>
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'seed' ); ?></a>
	<div id="page" class="site -layout-<?php echo SEED_LAYOUT; ?> -header-mobile-<?php echo SEED_HEADER_MOBILE; ?> -header-desktop-<?php echo SEED_HEADER_DESKTOP; ?> -menu-<?php echo SEED_MENU; ?> -menu-icon-<?php echo SEED_MENU_ICON; ?> -shop-layout-<?php echo SEED_SHOP_LAYOUT; ?>">

		<nav id="site-mobile-navigation" class="site-mobile-navigation <?php if(SEED_MENU == 'off-canvas') { echo 'sb-slidebar sb-right'; } else { echo '-dropdown'; } ?> _mobile _heading" role="navigation">
			<?php wp_nav_menu( array( 'theme_location' => 'mobile', 'menu_id' => 'mobile-menu' ) ); ?>
			<?php if(is_active_sidebar('top-right')) { ?><div class="mobile-widget"><?php dynamic_sidebar( 'top-right' ); ?></div><?php } ?>
		</nav>

		<header id="masthead" class="site-header sb-slide _heading " role="banner">
			<div class="navigation">
				<div class="topbar">
					<div class="container">
						<div class="left-bar">
							<div class="site-branding">
								<div class="site-logo"><?php if(function_exists('the_custom_logo')) {the_custom_logo();} ?></div>
							</div><!--site-branding-->
						</div>
						<!-- <div class="search-topbar">
							<a href="#">
								<i class="si-search-o" aria-hidden="true"></i>
						</a>
						</div> -->
						<div class="over-box">
							<div class="box-search">
								<ul class="list-language"><?php pll_the_languages();?></ul>
								<div class="form-search-top">
									<?php get_search_form(); ?>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="main-thenav">
				<div class="container">
					<div class="site-branding _mobile">
						<div class="site-logo"><?php if(function_exists('the_custom_logo')) {the_custom_logo();} ?></div>
					</div><!--site-branding-->
					<!-- <div class="contact-header _desktop">
						<ul id="left-bar" class="bar">
							<li class="list-bar"><i class="si-phone" aria-hidden="true"></i> (66) 2367 3570-6</li>
							<li class="list-bar"><i class="si-mail" aria-hidden="true"></i> contact@begistics.co.th</li>
						</ul>
					</div> -->
					<a class="site-toggle <?php if(SEED_MENU == 'off-canvas') { echo 'sb-toggle-right'; } ?> _mobile">
						<i><span></span><span></span><span></span><span></span></i>
					</a>

					<?php if ($bodyClass == 'has-headbar'): ?>
						<div id="headbar" class="_desktop"><?php dynamic_sidebar( 'headbar' ); ?></div>
					<?php else: ?>
						<div class="site-top-right _desktop"><?php dynamic_sidebar( 'top-right' ); ?></div>
						<nav id="site-desktop-navigation" class="site-desktop-navigation _desktop" role="navigation">
							<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
						</nav>
					<?php endif; ?>

				</div><!--container-->
			</div><!--main-->
			</div>
		</header><!--site-header-->

		<div id="sb-site" class="site-canvas">
			<div class="site-header-space"></div>
			<div id="content" class="site-content">