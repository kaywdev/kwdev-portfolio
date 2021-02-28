<?php
/**
 * The template for About page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Kwdev
 */

get_header();
?>
		<div id="primary" class="content-area">
			<main id="main" class="site-main">

			<?php
			while ( have_posts() ) :
				the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<header class="entry-header">
					<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
				</header><!-- .entry-header -->

				<div class="entry-content ">
					<?php
					the_content(); 

					wp_link_pages( array(
						'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'twd' ),
						'after'  => '</div>',
					) );
					?>
					
					<?php if(function_exists('get_field')):?>
						<div class="about-wrapper">
							 		<div class="about-img">
									<?php $about_image_id = get_field('content_image');
									if($about_image_id):
										//need to echo because using wp_get statement
										//we need to id of image -- get the entire thing use get_field
										echo wp_get_attachment_image($about_image_id, 'medium', '', array('class'=>'about-img'));
									endif;?>
									</div> <!--end of about-img-->
									<div class="about-text">
										<?php if(get_field('text_content')):
											the_field('text_content');
										endif;
										?>
									</div> <!--end of about-text-->
									<div class="skills">
										<div class="tech-tools">
											<h3>
											<img class="t-icon" id = "t-icon" src="<?php echo get_template_directory_uri(); ?>/images/icons/tech.svg" alt="tech-icon">
											Tech Tools</h3>
											<?php if(get_field('tech_tools')):
												the_field('tech_tools');
											endif;?>
										</div><!--end of tech-tools-->
										<div class="design-tools">
											<h3>
											<img class="design-icon" id = "d-icon" src="<?php echo get_template_directory_uri(); ?>/images/icons/design.svg" alt="design-icon">
											Design Tools</h3>
											<?php if(get_field('design_tools')):
												the_field('design_tools');
											endif;?>	
										</div><!--end of design-tools-->
									</div><!--end of skills-->
						</div>
					<?php endif; ?>

					
		

			</div><!-- .entry-content -->
		</article><!-- #post-<?php the_ID(); ?> -->
		
		<?php endwhile; // End of the loop.
		?>
		
		</main><!-- #main -->
	</div><!-- #primary -->
<?php
get_footer();
