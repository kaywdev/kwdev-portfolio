<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Kwdev
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-160632448-1"></script>
	<script>
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());

	gtag('config', 'UA-160632448-1');
	</script>
	
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="image" property="og:image" content="https://live.staticflickr.com/65535/50815102778_5cb72c7743_k.jpg">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'kwdev' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="header-wrapper">
			<div class="site-branding">
				
				<h1 class="site-title">
				<?php
				if ( is_front_page()) :
					?>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
					<img class="logo" id = "logo-b" src="<?php echo get_template_directory_uri(); ?>/images/logo/logo-black.svg" alt="logo">
					</a>
				<?php elseif(is_archive()): ?>	
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
					<img class="logo" id = "logo-b" src="<?php echo get_template_directory_uri(); ?>/images/logo/logo-black.svg" alt="logo">	
					</a>
				<?php	
				else :
					?>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
					<img class="logo" id = "logo-w" src="<?php echo get_template_directory_uri(); ?>/images/logo/logo-white.svg" alt="logo">	
					</a>
					<?php
				endif;
				?>
				</h1>
			</div><!-- .site-branding -->

			<nav id="site-navigation" class="main-navigation">
				<div class="menu-wrapper" id="menu-wrapper">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
				<div class="hm-menu">
				<div class="hm-wrapper">
				<div class="line"></div>
				<div class="line delay1"></div>
				<div class="line delay2"></div>
				</div>
				<?php esc_html_e( 'Menu', 'kwdev' ); ?>
				</div>
				</button>
				
				
				</div><!--.menu-wrapper-->
				<div class="toggled-nav-wrapper">

					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
						)
					);
					?>
					<div class="sns-wrapper">
						<?php 
						wp_nav_menu(
								array(
									'theme_location' => 'menu-sns',
									'memu_id' =>'menu-sns',
															
								)
						);
						?>
					</div><!-- .sns-wrapper -->
				</div><!-- .toggled-nav-wrapper -->
			</nav><!-- #site-navigation -->
			<a class = "project-link" href ="<?php echo get_post_type_archive_link('kd-project'); ?>">		
			<div class="project-icon">
			<img class="p-icon" id = "p-icon" src="<?php echo get_template_directory_uri(); ?>/images/icons/project.svg" alt="go-to-project">	
			<p>Projects</p>
			</div><!--.project-icon -->
			</a>
		</div><!-- .header-wrapper -->
	</header><!-- #masthead -->
