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
						<div class="col-5">
							<div class="site-branding">
								<?php	
									$custom_logo_id = get_theme_mod( 'custom_logo' );
									$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
									if ( has_custom_logo() ) {
									        echo '<img src="'. esc_url( $logo[0] ) .'">';
									}
									else {
								        echo '<img class="defaultlogo" src=" '. get_template_directory_uri() .'/lib/images/default-logo.png" height="100" width="200">';
									}
								?>
							</div><!-- .site-branding -->
						</div><!-- .col-5 -->
						<div class="col-7">
							<nav id="site-navigation" class="main-navigation">
								<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="true"><?php esc_html_e( 'Menu', 'rtcamp-assignment' ); ?></button>
								<?php	
									wp_nav_menu( array(
									'theme_location' => 'menu-1',
									'menu_id'        => 'primary-menu',
									) );
								?>
							</nav><!-- #site-navigation -->
						</div><!-- .col-7 -->
					</div><!-- .row -->
				</header><!-- #masthead -->
			</div><!-- .container -->
		</div><!-- .box -->

<!-- Ending Point of Header -->

	<div id="content" class="site-content">
