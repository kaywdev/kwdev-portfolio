<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Kwdev
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php if(function_exists('get_field')):
				$project_bgimg_id = get_field('background_image');
				$imgSize = "full";
				if($project_bgimg_id):
					$backgroundImgArr = wp_get_attachment_image_src($project_bgimg_id, $imgSize);
				endif;?>
	
	<header class="entry-header" >
		<div class="header-wrap">			
			<div class="header-top-image" style="background-image: url(<?php echo $backgroundImgArr[0];?>);">
			<div class="header-title">
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
			</div><!-- .header-title -->
			</div><!-- .header-top-image -->	
			<div class="summary-text-wrapper">
				<div class="summary-text-inner-wrapper" data-aos="zoom-in" data-aos-duration="400">	
				<h3>Summary</h3>
				<?php if( have_rows('project_summary') ):
					while ( have_rows('project_summary') ) : the_row();?>
						<div class="project-summary">
							<p><?php the_sub_field('summary_content_1');?></p>
							<p><?php the_sub_field('summary_content_2');?></p>
						</div><!-- .project-summary -->
					<?php	endwhile;?>		
				<?php	endif;?>
				<div class="tool-wrapper">
					<div class="techtool-wrapper">
						<h3>Tech Tools</h3>
						<?php if(get_field('tech_tools')):
							the_field('tech_tools');
						endif;
						?>
					</div> <!--end of techtool-wrapper-->

					<div class="task-wrapper">
						<h3>My Tasks</h3>
						<?php if(get_field('my_tasks')):
							the_field('my_tasks');
						endif;
						?>
					</div> <!--end of .task-wrapper-->
				</div><!--end of .tool-wrapper-->
				<div class="team-wrapper">
					<h3>Development Team</h3>
					<?php if(get_field('team')):
						the_field('team');
					endif;
					?>
				</div> <!--end of team-wrapper-->
					
					<?php if(get_field('project_url')):?>
					<a href="<?php the_field('project_url');?>"><div class="cta-btn live">View Live</div></a>					
					<?php endif; ?>
					</div><!-- .summary-text-inner-wrapper -->
			</div><!-- .summary-text-wrapper -->
		</div><!-- .header-wrap -->
	</header><!-- .entry-header -->


	<div class="entry-content">
		<div class="content-title">
			<h2 class="design-title">Design</h2>
		</div><!-- .content-title -->
		<div class="design-wrapper">
			<div class="project-first-img" data-aos="fade-up">
				<?php 
					$project_image_id = get_field('project_image');
					if($project_image_id):
						echo wp_get_attachment_image($project_image_id, 'large', '', array('class'=>'project-img'));
					endif;
				?>
			</div><!-- .project-first-img -->
				<?php if( have_rows('design_image') ):
						while ( have_rows('design_image')) : the_row();
							$design_image_id_1 = get_sub_field('content_image_1');
							$design_image_id_2 = get_sub_field('content_image_2');
							$design_image_id_3 = get_sub_field('content_image_3');
							$design_image_id_4 = get_sub_field('content_image_4');
							$design_image_id_5 = get_sub_field('content_image_5');
							$design_image_id_6 = get_sub_field('content_image_6');
						endwhile;		
				endif;

				if( have_rows('design_text') ):
					while ( have_rows('design_text')) : the_row();
						$design_text_1 = get_sub_field('content_text_1');
						$design_text_2 = get_sub_field('content_text_2');
						$design_text_3 = get_sub_field('content_text_3');
						$design_text_4 = get_sub_field('content_text_4');
					endwhile;
				endif;

				if( have_rows('color_theme') ):
					while ( have_rows('color_theme')) : the_row();
						$color_theme_1 = get_sub_field('picked_color_1');
						$color_theme_2 = get_sub_field('picked_color_2');
						$color_theme_3 = get_sub_field('picked_color_3');
						$color_theme_4 = get_sub_field('picked_color_4');
						$color_theme_5 = get_sub_field('picked_color_5');
					endwhile;
				endif;
				?>
			<div class="design-text-wrapper" data-aos="fade-up"><?php if($design_text_1): echo $design_text_1; endif; ?></div>	
			<div class="design-text-wrapper" data-aos="fade-up"><?php if($design_text_2): echo $design_text_2; endif; ?></div>
			<div class="design-img-wrapper md-second-img" data-aos="fade-up">
				<?php if($design_image_id_1): echo wp_get_attachment_image($design_image_id_1, 'large', '', array('class'=>'project-img')); endif; ?>	
			</div><!-- .tg-second-img -->
			
			<div class="design-img-wrapper col-2-fr md-col-2" data-aos="fade-up">
				<div class="design-text-wrapper"><?php if($design_text_3): echo $design_text_3; endif; ?></div>
				<div class="d-img3"><?php if($design_image_id_2): echo wp_get_attachment_image($design_image_id_2, 'large', '', array('class'=>'project-img'));endif; ?></div>
			</div><!-- .tg-third-img -->
			<div class="design-img-wrapper md-design-section4 col-2-fr md-col-2" data-aos="fade-up">
				<div class="design-text-wrapper"><?php if($design_text_4): echo $design_text_4; endif; ?></div>
				<div class="d-img3"><?php if($design_image_id_3): echo wp_get_attachment_image($design_image_id_3, 'large', '', array('class'=>'project-img'));endif; ?></div>
			</div><!-- .tg-third-img -->
			
			<div class="color-theme">
				<h3>Color Theme</h3>
				<div class="color-wrapper">
				<div class="color" style="background-color:<?php if($color_theme_1): echo $color_theme_1; endif; ?>; width:45px; height:45px;"></div>
				<div class="color" style="background-color:<?php if($color_theme_2): echo $color_theme_2; endif; ?>; width:45px; height:45px;"></div>
				<div class="color" style="background-color:<?php if($color_theme_3): echo $color_theme_3; endif; ?>; width:45px; height:45px;"></div>
				<div class="color" style="background-color:<?php if($color_theme_4): echo $color_theme_4; endif; ?>; width:45px; height:45px;"></div>

				</div><!-- .color-wrapper -->
			</div><!-- .color-theme -->
		</div> <!-- .design-wrapper -->
		
		<div class="content-title">
			<h2 class="dev-title">Development</h2>
		</div> <!-- .content-title -->
		<?php if( have_rows('dev_image') ):
						while ( have_rows('dev_image')) : the_row();
							$dev_image_id_1 = get_sub_field('content_image_1');
							$dev_image_id_2 = get_sub_field('content_image_2');
							$dev_image_id_3 = get_sub_field('content_image_3');
							$dev_image_id_4 = get_sub_field('content_image_4');
							$dev_image_id_5 = get_sub_field('content_image_5');
							$dev_image_id_6 = get_sub_field('content_image_6');
							$dev_image_id_7 = get_sub_field('content_image_7');
						endwhile;		
				endif;

				if( have_rows('dev_text') ):
					while ( have_rows('dev_text')) : the_row();
						$dev_text_1 = get_sub_field('content_text_1');
						$dev_text_2 = get_sub_field('content_text_2');
					endwhile;
				endif;
		?>
		<div class="dev-wrapper">
			<div class="dev-section dev1">	
				<div class="dev-inner-wrapper dev-col2 md-dev1" data-aos="fade-up">
					<div class="dev-text-wrapper"><?php if($dev_text_1): echo $dev_text_1; endif; ?></div>
					<div class="dev-movie">
						<video width="100%" height="100%" controls preload="metadata">
						<source src="<?php echo get_template_directory_uri(); ?>/media/mvdb/mvdb-movie1.mov#t=0.1" type="video/mp4" alt="lunette code demo movie">
						</video>
					</div><!-- .dev-movie -->
				</div><!-- .dev-inner-wrapper -->
			</div><!-- .dev-section -->
			<div class="dev-section dev2">
				<div class="dev-inner-wrapper dev-col2 md-dev2" data-aos="fade-up">
					<div class="dev-text-wrapper"><?php if($dev_text_2): echo $dev_text_2; endif; ?></div>
					<div class="dev-movie">
						<video width="100%" height="100%" controls preload="metadata">
						<source src="<?php echo get_template_directory_uri(); ?>/media/mvdb/mvdb-movie2.mov#t=0.1" type="video/mp4" alt="lunette code demo movie">
						</video>	
					</div><!-- .dev-movie -->
				</div><!-- .dev-inner-wrapper -->
			</div><!-- .dev-section -->
		</div><!-- .dev-wrapper -->
		
		<?php

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'kwdev' ),
				'after'  => '</div>',
			)
		);
		?>
	
	</div><!-- .entry-content -->
	<?php  endif;?> <!-- endif(function_exists('get_field')  -->

	<div class="page-nav">
		<div class="page-nav-link next-nav"><?php next_post_link('%link', 'Next project'); ?></div><!-- .next-nav -->
		<div class="page-nav-link prev-nav"><?php previous_post_link('%link', 'Prev Project'); ?></div><!-- .prev-nav -->
	</div><!-- .page-nav -->

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
			edit_post_link(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Edit <span class="screen-reader-text">%s</span>', 'kwdev' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					wp_kses_post( get_the_title() )
				),
				'<span class="edit-link">',
				'</span>'
			);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->
