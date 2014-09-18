<?php
/*
 * Template Name: 1 Col fullscreen, no container
 * Description: 1 column layout without container.
 */
get_header();
?>

			<?php
				// Start the Loop.
				while ( have_posts() ) : the_post();
					// Include the page content template.
					get_template_part( 'content', 'page' );
				endwhile;
			?>

<?php get_footer(); ?>