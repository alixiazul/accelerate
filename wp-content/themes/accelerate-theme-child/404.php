<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>
<section class="page-404">
	<div class="site-content">
	    <div class="page-404-left">
	        <img src="https://accelerate-alixiazul.c9users.io/wp-content/themes/accelerate-theme-child/img/404.png" alt="404$$"/>
	    </div>
	    <div class="page-404-right">
		<h2>Whoops, Took a Wrong Turn...</h2>
        <p>Sorry, this page no longer exists, never existed or has been moved. We feel like complete jerks for totally misleading you.</p>
        <p>Feel free to look around our <span><a href="<?php echo home_url(); ?>/blog">blog</a></span> or some of our <span><a href="<?php echo home_url(); ?>/case-studies">featured work.</a></span></p>
        </div>
        <?php while ( have_posts() ) : the_post(); ?>
            <?php get_search_form(); ?>
		<?php endwhile; ?>
	</div><!-- .site-content -->
</section><!-- .page-404 -->

<?php get_footer(); ?>