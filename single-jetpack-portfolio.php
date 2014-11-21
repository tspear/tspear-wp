<?php
/*
 * The Template for displaying all single posts.
 */
get_header(); ?>
	
<script>console.log('** template: jetpacksingle.php')</script>

<div class='container'>
	<?php /* The loop */ ?>
	<?php while ( have_posts() ) : the_post(); ?>

		<?php get_template_part( 'content', get_post_format() ); ?>
	 
	 	<div class="taglist">
			<div class="btn-group btn-group-sm">
				<?php echo the_terms($post->ID, 'jetpack-portfolio-tag', '<strong> Tagged: ',', ','</strong>'); ?>
			</div>
		</div>
		
	<?php /* End The loop */ ?>
	<?php endwhile; ?>

	<h3>More work...</h3>
	<?php echo do_shortcode('[portfolio display_types=false display_tags=false display_content=false columns=6 showposts=20]'); ?>

	<?php //previous_post_link('<h4>%link</h4>'); ?>
	<?php //next_post_link('<h4>%link</h4>'); ?>

</div>
<?php get_footer(); ?>