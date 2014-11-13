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
				<?php echo the_terms($post->ID,'jetpack-portfolio-tag','<button type="button" class="btn btn-default">','</button><button type="button" class="btn btn-default">','</button>'); ?>
			</div>
		</div>
		
	<?php /* End The loop */ ?>
	<?php endwhile; ?>

	<h3>More work</h3>
	<? echo do_shortcode('[portfolio display_types=false display_tags=false display_content=false columns=6 showposts=10]'); ?>
	<h4><?php next_posts_link('%link <span class="glyphicon glyphicon-arrow-right"></span>'); ?></h4>

</div>
<?php get_footer(); ?>