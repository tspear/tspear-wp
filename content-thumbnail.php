<!-- content-thumbnail.php -->
<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
<!-- Thumbnail/preview image -->
<?php if ( has_post_thumbnail()) : ?>
   <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" ><?php the_post_thumbnail('large', array('class' => 'img-responsive')); ?></a>
<?php else: ?>
	<img src="http://placehold.it/360x140" class="img-responsive" />
<?php endif; ?>
<!-- title -->
<?php the_title( '<h4>', '</h4>' ); ?>
</a>
<!-- /content-thumbnail.php -->