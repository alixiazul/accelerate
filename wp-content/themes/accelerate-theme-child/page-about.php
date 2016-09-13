<?php
/**
 * The template for displaying the About page
 * 
 * Template Name: About Page
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */

get_header(); ?>
<section class="about-page">
	<div class="site-content">
		
			<?php while ( have_posts() ) : the_post();  ?>
				<div class='aboutpage-hero'>
					<div class="aboutpage-title">
						<h2><?php the_content(); ?></h2>
					</div>
				</div>
			
				<?php
					$title = get_field('title');
					$description= get_field('description');
				?>
				<h2><?php echo $title; ?></h2>
				<p><?php echo $description; ?></p>
			<?php endwhile; // end of the loop. ?>
			
			<?php 
				// Pull in the Services
				$args = array (
					'post_type' => 'services',
					'order' => 'ASC'
					);
				$services_query = new WP_Query($args); 
				while ($services_query-> have_posts() ) : $services_query->the_post();
					$name = get_field('name'); // in SERVICES field group
					$description = get_field('description');
					$image = get_field('image');
					$size = "full";
			?>
		
			<article class="services">
				<div class="services-images">
					<?php if ($image) { ?>
						<?php echo wp_get_attachment_image( $image, $size ); ?>
					<?php } ?> 
				</div>				
				<aside class="services-sidebar">
					<h3><?php echo $name; ?></h3>
					<p><?php echo $description; ?></p>
				</aside>
			</article>
			
			<?php endwhile; // end of the loop. 
			wp_reset_postdata(); ?>

		
	</div><!-- #primary -->
</section>
<?php get_footer(); ?>