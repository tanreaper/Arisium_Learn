<?php
/**
 * The template for displaying all single posts
 *
 * @package Real Estate Hub
 * @subpackage real_estate_hub
 */

get_header(); ?>

<?php $real_estate_hub_static_image = get_stylesheet_directory_uri() . '/assets/images/sliderimage.png'; ?>
	<main id="tp_content" role="main">
		<?php while ( have_posts() ) : the_post(); ?>
			<div id="post-<?php the_ID(); ?>" class="external-div">
		        <div class="box-image">
		          	<?php if(has_post_thumbnail()){ 
		            	the_post_thumbnail();
			        }else { ?>
			            <img src="<?php echo esc_url($real_estate_hub_static_image); ?>">
			        <?php } ?>
		        </div>  
		        <div class="box-text">
		        	<h2><?php the_title();?></h2>  
		        </div> 
			</div>
		<?php endwhile; ?>
		<div class="container">
			<div id="primary" class="content-area">
				<?php
		        $real_estate_hub_sidebar_single_post_layout = get_theme_mod( 'real_estate_hub_sidebar_single_post_layout','right');
		        if($real_estate_hub_sidebar_single_post_layout == 'left'){ ?>
			        <div class="row">
			          	<div class="col-lg-4 col-md-4" id="theme-sidebar"><?php get_sidebar(); ?></div>
			          	<div class="col-lg-8 col-md-8">
			           		<?php
								/* Start the Loop */
								while ( have_posts() ) : the_post();

									get_template_part( 'template-parts/post/single-post');	?>

									<div class="navigation">
							          	<?php
							              	// Previous/next page navigation.
							              	the_posts_pagination( array(
							                  	'prev_text'          => __( 'Previous page', 'real-estate-hub' ),
							                  	'next_text'          => __( 'Next page', 'real-estate-hub' ),
							                  	'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'real-estate-hub' ) . ' </span>',
							              	) );
							          	?>
							        </div>

								<?php endwhile; // End of the loop.
							?>
			          	</div>
			        </div>
			        <div class="clearfix"></div>
			    <?php }else if($real_estate_hub_sidebar_single_post_layout == 'right'){ ?>
			        <div class="row">
			          	<div class="col-lg-8 col-md-8">	           
				            <?php
								/* Start the Loop */
								while ( have_posts() ) : the_post();

									get_template_part( 'template-parts/post/single-post'); ?>

									<div class="navigation">
							          	<?php
							              	// Previous/next page navigation.
							              	the_posts_pagination( array(
							                  	'prev_text'          => __( 'Previous page', 'real-estate-hub' ),
							                  	'next_text'          => __( 'Next page', 'real-estate-hub' ),
							                  	'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'real-estate-hub' ) . ' </span>',
							              	) );
							          	?>
							        </div>

								<?php endwhile; // End of the loop.
							?>
			          	</div>
			          	<div class="col-lg-4 col-md-4" id="theme-sidebar"><?php get_sidebar(); ?></div>
			        </div>
			    <?php }else if($real_estate_hub_sidebar_single_post_layout == 'full'){ ?>
			        <div class="full">
			           <?php
							/* Start the Loop */
							while ( have_posts() ) : the_post();

								get_template_part( 'template-parts/post/single-post'); ?>

								<div class="navigation">
						          	<?php
						              	// Previous/next page navigation.
						              	the_posts_pagination( array(
						                  	'prev_text'          => __( 'Previous page', 'real-estate-hub' ),
						                  	'next_text'          => __( 'Next page', 'real-estate-hub' ),
						                  	'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'real-estate-hub' ) . ' </span>',
						              	) );
						          	?>
						        </div>

							<?php endwhile; // End of the loop.
						?>
		          	</div>
			    <?php }else {?>
			    	<div class="row">
			          	<div class="col-lg-8 col-md-8">	           
				            <?php
								/* Start the Loop */
								while ( have_posts() ) : the_post();

									get_template_part( 'template-parts/post/single-post'); ?>

									<div class="navigation">
							          	<?php
							              	// Previous/next page navigation.
							              	the_posts_pagination( array(
							                  	'prev_text'          => __( 'Previous page', 'real-estate-hub' ),
							                  	'next_text'          => __( 'Next page', 'real-estate-hub' ),
							                  	'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'real-estate-hub' ) . ' </span>',
							              	) );
							          	?>
							        </div>

								<?php endwhile; // End of the loop.
							?>
			          	</div>
			          	<div class="col-lg-4 col-md-4" id="theme-sidebar"><?php get_sidebar(); ?></div>
			        </div>
			    <?php } ?>
			</div>
	   </div>
	</main>


<?php get_footer();
