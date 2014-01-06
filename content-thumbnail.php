
<H6>content-thumbnail.php</H6>

<!-- Thumbnail/preview image -->
<?php if ( has_post_thumbnail()) : ?>
   <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" ><?php the_post_thumbnail('large', array('class' => 'img-responsive')); ?></a>
<?php endif; ?>

<!-- title -->
<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title( '<h4>', '</h4>' ); ?></a>
