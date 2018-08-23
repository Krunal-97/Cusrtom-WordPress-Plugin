<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package rtCamp_Assignment
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
	<script type="text/javascript">
		jQuery(document).ready(function(){
 		 jQuery('#slider').slippry()
	});
	</script>

</head>

<body <?php body_class(); ?>>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'rtcamp-assignment' ); ?></a>
<!--Starting Point of Header -->

		<div class="box">
			<div class="container">
				<header id="masthead" class="site-header">
					<div class="row">
						<div class="col-6">
							<div class="site-branding">
								<?php	
									the_custom_logo();
								?>
							</div><!-- .site-branding -->
						</div><!-- .col-6 -->
						<div class="col-6">
							<nav id="site-navigation" class="main-navigation">
								<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Menu', 'rtcamp-assignment' ); ?></button>
								<?php	
									wp_nav_menu( array(
									'theme_location' => 'menu-1',
									'menu_id'        => 'primary-menu',
									) );
								?>
							</nav><!-- #site-navigation -->
						</div><!-- .col-6 -->
					</div><!-- .row -->
				</header><!-- #masthead -->
			</div><!-- .container -->
		</div><!-- .box -->

<!-- Ending Point of Header -->

	<div id="content" class="site-content">
