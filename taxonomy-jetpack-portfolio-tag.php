<?php
/**
 *
 * @package WordPress
 * @subpackage tspear
 * @since tspear 1.0
 */
get_header(); ?>

	<div class="container">

		<h1><a href="<?php echo home_url( 'portfolio/' );?>">Portfolio</a> - <?php single_tag_title('Projects tagged '); ?></h1>

		<?php if ( have_posts() ) : ?>

			<div class="row">
			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<div class="col-sm-6 col-md-4 portfolio-entry">
					<?php get_template_part( 'content', 'thumbnail' ); ?>
				</div>
			<?php endwhile; ?>
			</div>

		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		<?php endif; ?>

	</div><!-- #container -->

<?php get_footer(); ?>