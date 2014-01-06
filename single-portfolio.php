<?php
/**
 * The Template for displaying all single posts.
 *
 */
get_header(); ?>

<H4>single-portfolio.php</H4>


<?php /* The loop */ ?>
<?php while ( have_posts() ) : the_post(); ?>
	<?php get_template_part( 'content', get_post_format() ); ?>
<?php endwhile; ?>

<?php
	// Translators: used between list items, there is a space after the comma.
	$tag_list = get_the_tag_list( '<span class="label label-default">', '</span><span class="label label-default">','</span>' );
	if ( $tag_list ) {
		echo '<h4>' . $tag_list . '</h4>';
	}
?>

<?php get_footer(); ?>