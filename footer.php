<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package rtCamp_Assignment
 */

?>
	</div><!-- #content -->

<!-- Starting Point of Custom Footer Widget Area -->
	
	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<div class="footer-widget-area">
				<div class="container">
					<div class="row" >
						<div class="col-3 footer-area-1">
							<?php
							if(is_active_sidebar('footer-widget-area-1')){
							dynamic_sidebar('footer-widget-area-1');
							}
							?>
						</div><!-- .footer-widget-area-1 -->
						<div class="col-3 footer-area-2">
							<?php
							if(is_active_sidebar('footer-widget-area-2')){
							dynamic_sidebar('footer-widget-area-2');
							}
							?>
						</div><!-- .footer-widget-area-2 -->
						<div class="col-3 footer-area-3">
							<?php
							if(is_active_sidebar('footer-widget-area-3')){
							dynamic_sidebar('footer-widget-area-3');
							}
							?>
						</div><!-- .footer-widget-area-3 -->
						<div class="col-3 footer-area-4">
							<?php
							if(is_active_sidebar('footer-widget-area-4')){
							dynamic_sidebar('footer-widget-area-4');
							}
							?>
						</div><!-- .footer-widget-area-4 -->  
					</div><!-- .row -->
				</div><!-- .container-->
			</div><!-- .footer-widget-area -->
		</div><!-- .site-info -->
	</footer><!-- #colophon -->

<!-- Ending Point of Custom Footer Widget Area -->

<!-- Starting Point of Custom Bottom Footer Area -->

			<div class="container">
				<div class="footer-area">
					<div class="row">
						<div class="col-8">
							<nav class="footer-nav">
								<?php	
									wp_nav_menu( array(
									'theme_location' => 'menu-2',
									'menu_id'        => 'footer-menu',
									) );
								?>
							</nav><!-- #site-navigation -->
							<div class="bottom-text">
								<?php
								echo get_theme_mod('bottom_footer_setting');
								?>
							</div><!-- .site-info -->
						</div><!-- .col-8 -->
						<div class="col-4">
							<div class="footer-logo">
								<a href="#">
									<img src="<?php echo wp_get_attachment_url(get_theme_mod('Footer_logo_setting'));?>"/>
								</a>
							</div><!-- .footer-logo -->
						</div><!-- .col-4 -->
					</div><!-- .row -->
				</div><!-- .footer-area -->
			</div><!-- .container -->

<!-- Ending Point of Custom Bottom Footer Area -->
	
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>
