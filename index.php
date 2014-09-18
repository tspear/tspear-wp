<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 */
echo '<!-- current template: ' . basename( get_page_template() ) . ' -->';
get_header();
?>



		<?php if ( have_posts() ) : ?>
				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>
						<?php get_template_part( 'content', get_post_format() ); ?>
				<?php endwhile; ?>
			</div>

		<?php else : ?>
				<h1>No Posts</h1>
		<?php endif; // end have_posts() check ?>



<?php get_footer(); ?>