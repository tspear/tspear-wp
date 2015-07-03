<!-- content-thumbnail.php -->
<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
	<!-- Thumbnail/preview image -->
	<?php if ( has_post_thumbnail()) : ?>
		<?php the_post_thumbnail( array(736, 414) , array('class' => 'img-responsive')); ?>
	<?php else: ?>
		<img src="<?php echo ts_placeholder() ?>" class="img-responsive" alt="No Feature Image"/>
	<?php endif; ?>
	<!-- title -->
	<div class="thumbnail-caption">
			<?php the_title('<strong>', '</strong>'); ?>		
	</div>
</a>
<!-- /content-thumbnail.php -->