<?php
/**
 * The template for displaying all pages
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

	<main id="primary" class="site-main">
		<section class="topfront">
			<div class="front-page-wrapper">
			<div class="front-left">
					<h1 class="slide-left"><span>Hi!</span> My name is <br>Kay Watanabe.</h1>
					<p class="slide-right">&lt;&excl;&ndash; &ndash; Please check this code. &ndash; &ndash;&gt;</p>           
					<div id="arrowAnim">
						<div class="arrowSliding">
						<div class="arrow"></div>
						</div>
						<div class="arrowSliding delay1">
						<div class="arrow"></div>
						</div>
						<div class="arrowSliding delay2">
						<div class="arrow"></div>
						</div>
						<div class="arrowSliding delay3">
						<div class="arrow"></div>
						</div>
					</div><!--.arrowAnim-->
			</div> <!--.front-left-->
			<div class="front-right">
				<div class="pc-image">
					<div class="text-wrapper">
						<div class="typing">
<!--Keep the first position to set up left position-->
<pre id="typewriter">
<span class="code-or">#Kay</span>&lbrace;
position&colon; <span class="code-red">Web designer </span>&plus; <span class="code-blue">development</span>&semi;
speciality&colon; <span class="code-or">Front-end </span><span class="code-green">Development</span>&semi; 
located&colon; <span class="code-purple">@Vancouver BC CANADA</span>&semi;
&rbrace;
</pre> 
						</div><!--.typing-->
					</div><!--.text-wrapper-->
				</div><!--.pc-image-->
			</div><!--.front-right-->
			<a id = "view-link" href ="<?php echo get_post_type_archive_link('kd-project'); ?>">
				<div class="view-project">
				<img class="view-icon" id = "view-icon" src="<?php echo get_template_directory_uri(); ?>/images/icons/view.svg" alt="go-to-project">	
				<p>View Projects</p>
				</div><!-- view-project -->
			</a>

			</div><!--.front-page-wrapper -->
		</section>
	</main><!-- #main -->

<?php
get_footer();
