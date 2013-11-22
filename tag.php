<?php
/**
 * The template for displaying Archive pages.
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each specific one. For example, Twenty Thirteen
 * already has tag.php for Tag archives, category.php for Category archives,
 * and author.php for Author archives.
 */

get_header(); ?>

	<?php if ( have_posts() ) : ?>
		<header class="archive-header">
			<h1><?php echo single_tag_title( '', false ); ?></h1>
		</header><!-- .archive-header -->
	
		<div class="row">
			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<div class="col-sm-6 col-md-4">
					<?php get_template_part( 'content', 'thumbnail' ); ?>
				</div>
			<?php endwhile; ?>
		</div>

	<?php else : ?>
			<h1>No posts</h1>
	<?php endif; ?>

<?php get_footer(); ?>