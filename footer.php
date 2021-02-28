<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Kwdev
 */

?>
<?php if(is_archive()|| is_singular('kd-project')):?>
	<div class="go-top">
		<div class="go-top-wrapper">
			<a href="#" class="scrollToTop">
			<?php echo "Back To Top"?>
			</a>
		</div><!-- .go-top-wrapper-->
	</div> <!-- .go-top-->
<?php endif; ?>

	<footer id="colophon" class="site-footer">
	<!-- if about and single-project-page shows sns wrapper -->
		<div class="sns-wrapper">
		<?php 
			if (is_front_page() || is_archive()) :?>	
			<div class="menu-social-menu-container">
			<ul id="menu-social-menu-1">
				<li>
					<a href="https://www.linkedin.com/in/kaywatanabe">
						<img class="sns" id = "linkedin" src="<?php echo get_template_directory_uri(); ?>/images/icons/linkedin2.svg" alt="linkedin">
					</a>
				</li>
				<li>
					<a href="https://twitter.com/kaywdev">
						<img class="sns" id = "twitter" src="<?php echo get_template_directory_uri(); ?>/images/icons/twitter2.svg" alt="twitter">
					</a>
				</li>
				<li>
					<a href="https://github.com/kaywdev">
						<img class="sns" id = "github" src="<?php echo get_template_directory_uri(); ?>/images/icons/github2.svg" alt="github">
					</a>
				</li>
				<li>
					<a href="mailto:kaywdev@gmail.com">
						<img class="sns" id = "email" src="<?php echo get_template_directory_uri(); ?>/images/icons/email2.svg" alt="email">
					</a>
				</li>
			</div>
			</ul>
		<?php 
		else:
			wp_nav_menu(
					array(
						'theme_location' => 'menu-sns',
						'memu_id' =>'menu-sns',
												
					)
			);
		endif;
		?>

		</div>
		<div class="site-info">
			<!-- <span class="sep"> | </span> -->
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( '%1$s by %2$s', 'kwdev' ), '@2020 - Designed and Developed', '<a href="https://www.kaywdev.com/">Kay</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
