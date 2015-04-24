<!-- content-thumbnail.php -->
<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
	<!-- Thumbnail/preview image -->
	<?php if ( has_post_thumbnail()) : ?>
		<?php the_post_thumbnail('large', array('class' => 'img-responsive')); ?>
	<?php else: ?>
		<img src="<?php echo ts_placeholder() ?>" class="img-responsive" alt="No Feaured Image"/>
	<?php endif; ?>
	<!-- title -->
	<?php the_title('<h4>','</h4>'); ?>
</a>
<!-- /content-thumbnail.php -->