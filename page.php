<?php
/**
 * The Home Page template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package rtCamp_Assignment
 */

get_header();
?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			
<!-- Starting point of Custom Post Based Slider -->

			<div class="slider-bg">
				<div class="container">
					<div class="slider-inner">
						<ul id="slider">
							<?php

								$slider_args = array(
									'post_type' => 'slider',
								);
								$slider = new WP_Query( $slider_args );

								if( $slider->have_posts() ):

									while( $slider->have_posts() ) : $slider->the_post();

									$thumb_id = get_post_thumbnail_id();
									$thumb_url = wp_get_attachment_image_src( $thumb_id, '' ,true);
									?>
									  <li>
									    <a class="border" href="#">
									    	<?php
									    		if( has_post_thumbnail() ) { 
									    			echo '<img src="';
									    	  		echo $thumb_url[0]; 
									    	  		echo '">';
											 	}
												else {
												   	 echo '<img src="';
													 echo catch_that_image();
													 echo '" alt="" />';
													 echo '</a>';
												}
											?>	
									    </a>
									     <div class="slider-caption">
											<div class="cover">
												<h3 class="post-title"><?php echo get_the_title() ?></h3>
												<p class="custom-post-excerpt">
												<?php 
													if(! has_excerpt()) {
														echo the_content();
													}
													else {
														echo the_excerpt();
													} 
												?></p>
											</div><!--.cover-->
										 </div><!--.carousel-caption-->
									  </li>
							 <?php endwhile;
				    		 wp_reset_postdata();
							 endif;
							 ?>
						</ul>
					</div><!--.slider-innerr -->
				</div><!--.container-->
			</div><!--.slider-bg -->

<!-- Ending point of Custom Post Based Slider -->	

<!-- Starting point of Child Pages of Home Page -->	

			<div class="container child-pages-container">
				<div class="row">
					<div class="col-child-name">
						<div class="child-pages">
						  <a class="child-button tablinks" onmouseover="openChildPage(event, 'child-page-1')" onClick="openChildPage(event, 'child-page-1')" id="defaultOpen">FINDING</a>
						  <a class="child-button tablinks" onmouseover="openChildPage(event, 'child-page-2')">PROMOTIONAL ACTIVITIES</a>	
						  <a class="child-button tablinks" onmouseover="openChildPage(event, 'child-page-3')">ENVIRONMENT</a>
						</div><!--.tab-->
					</div><!--.col-3-->

					<div id="child-page-1" class="col-child-content tabcontent">
						<?php
							$my_wp_query = new WP_Query();
							$all_wp_pages = $my_wp_query->query(array(
								'post_type' => 'page',
								'posts_per_page' => '-1'
								));
							$Home_child =  get_page_by_title('FINDING');
							$promotional_activities_children = get_page_children( $Home_child->ID, $all_wp_pages );

							foreach ($promotional_activities_children as $key) {

								$page_id    = $key->ID;
				                $page_link  = get_permalink( $page_id );
				                $page_img   = get_the_post_thumbnail( $page_id, 'medium' ); 
				                $page_title = $key->post_title;
				                $page_excerpt = $key->post_excerpt; ?>
						
								<div class="col-4 child-pages-content">
	           				   		<a class="featured-post-title simple-link" href="<?php echo $page_link; ?>">
									<?php echo $page_img; ?>
	                 	      			<p class="featured-post-title simple-link"><?php echo $page_title; ?></p>
	                 	      			<p class="post-excerpt"><?php echo $page_excerpt; ?></p>
	                       		 	 </a>
	                   			</div>
								
						<?php } ?>
					</div><!-- #child-page-1 -->

					<div id="child-page-2" class="col-child-content tabcontent">
					 	<?php
							$my_wp_query = new WP_Query();
							$all_wp_pages = $my_wp_query->query(array(
								'post_type' => 'page',
								'posts_per_page' => '-1'
								));
							$Home_child =  get_page_by_title('PROMOTIONAL ACTIVITIES');
							$promotional_activities_children = get_page_children( $Home_child->ID, $all_wp_pages );

							foreach ($promotional_activities_children as $key) {

								$page_id    = $key->ID;
				                $page_link  = get_permalink( $page_id );
				                $page_img   = get_the_post_thumbnail( $page_id, 'medium' ); 
				                $page_title = $key->post_title;
				                $page_excerpt = $key->post_excerpt; ?>
						
								<div class="col-4 child-pages-content">
	           				   		<a class="featured-post-title simple-link" href="<?php echo $page_link; ?>">
									<?php echo $page_img; ?>
	                 	      			<p class="featured-post-title simple-link"><?php echo $page_title; ?></p>
	                 	      			<p class="post-excerpt"><?php echo $page_excerpt; ?></p>
	                       		 	 </a>
	                   			</div>
								
						<?php } ?>
				    </div><!-- #child-page-2 -->

					<div id="child-page-3" class="col-child-content tabcontent">
						<?php
							$my_wp_query = new WP_Query();
							$all_wp_pages = $my_wp_query->query(array(
								'post_type' => 'page',
								'posts_per_page' => '-1'
								));
							$Home_child =  get_page_by_title('ENVIRONMENT');
							$promotional_activities_children = get_page_children( $Home_child->ID, $all_wp_pages );

							foreach ($promotional_activities_children as $key) {

								$page_id    = $key->ID;
				                $page_link  = get_permalink( $page_id );
				                $page_img   = get_the_post_thumbnail( $page_id, 'medium' ); 
				                $page_title = $key->post_title;
				                $page_excerpt = $key->post_excerpt; ?>
						
								<div class="col-4 child-pages-content">
	           				   		<a class="featured-post-title simple-link" href="<?php echo $page_link; ?>">
									<?php echo $page_img; ?>
	                 	      			<p class="featured-post-title simple-link"><?php echo $page_title; ?></p>
	                 	      			<p class="post-excerpt"><?php echo $page_excerpt; ?></p>
	                       		 	 </a>
	                   			</div>
								
						<?php } ?>
					</div><!-- #child-page-3 -->

				</div><!--.row-->
			</div><!--.child pages box-->

<!-- Ending point of Child Pages of Home Page -->

</main><!--.site-main-->
</div><!--.content-area-->

<?php
get_sidebar();
get_footer();
