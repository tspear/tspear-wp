<?php
/**
 * The template for displaying Category pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 */

get_header(); ?>

		<?php if ( have_posts() ) : ?>
		<div class="row">
			<div class="col-lg-12">
				<header class="archive-header">
					<h1 class="archive-title"><?php echo single_cat_title( '', false ); ?></h1>
				</header><!-- .archive-header -->
			</div>
		</div>
		<div class="row">
			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<div class="col-sm-4">
					<?php get_template_part( 'content', 'thumbnail' ); ?>
				</div>
			<?php endwhile; ?>
		</div>

		<?php else : ?>
			<h1>No posts</h1>
		<?php endif; ?>


<?php get_footer(); ?>