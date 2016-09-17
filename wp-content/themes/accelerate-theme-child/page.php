<?php
/**
 * The template for displaying the Contact Page
 *
 * Template Name: Page
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">
		    <div class="contact">
		        <h2><?php the_title(); ?></h2>
			    <?php while ( have_posts() ) : the_post(); ?>
				    <?php the_content(); ?>
			    <?php endwhile; // end of the loop. ?>
			</div><!-- #contact -->

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>