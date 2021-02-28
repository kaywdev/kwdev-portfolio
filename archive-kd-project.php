<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Kwdev
 */

get_header();
?>

	<main id="primary" class="site-main">

		<?php if ( have_posts() ) : ?>


			<section class="projects">
				<?php
					$args = array(
						'post_type' => 'kd-project',
						'post_per_page' => -1,
						'orderby'=> 'id',
						'order'	=> 'ASC'
					);
					$query = new WP_Query( $args );

					if ( $query->have_posts() ):
						while( $query->have_posts() ):
							$query->the_post();
						
				?>
					<div class = "project" data-aos="fade-up">
						<?php if(function_exists('get_field')):?>
							<div class="project-wrapper">
								<div class="project-container">
								<!-- <div class="project-inner-wrapper"> -->
									<div class="project-img">
										<?php	echo the_post_thumbnail('large'); ?>
									</div><!--.project-img-->

									<div class="project-text-wrapper">
										<h2><?php the_title();?></h2>
										<h3><?php if(get_field('project_name')):
														the_field('project_name');
											endif;
										?>
										</h3>
										<div class="project-summary"> 
											<?php if( have_rows('project_summary') ):
													while ( have_rows('project_summary') ) : the_row();
														the_sub_field('summary_content_1');
													endwhile;
									
											endif;
											?>
										</div> <!--.project-summary-->
										<div class="techtool-wrapper">
											<?php if(get_field('tech_tools')):
												the_field('tech_tools');
											endif;
											?>
										</div> <!--end of techtool-wrapper-->
										<div class="cta-wrapper">
											<a class = "cta-btn project-detail" href="<?php the_permalink();?>">Details</a>
										
											<?php if(get_field('project_url')):?>
											<a class = "cta-btn project-url" href="<?php the_field('project_url');?>">View Live</a>					
											<?php endif; ?>
										</div><!--.cta-wrapper-->
									</div><!--.project-text-wrapper-->
								<!-- </div>.project-inner-wrapper -->
								</div><!--.project-container-->
								<div class="p-deco"></div><!--.p-deco-->
							</div><!--.project-wrapper-->
				
							<?php the_excerpt();?>
						<?php endif;?>
					</div><!--.project-->
					<?php	endwhile;
						wp_reset_postdata();
					endif;
				?>
			
			<section>
		<?php endif;?>


	</main><!-- #main -->

<?php
get_footer();
