<!-- [content-image.php] -->
<?php if ( has_post_thumbnail()) : ?>
   <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
   <?php the_post_thumbnail('large', array('class' => 'img-responsive')); ?>
   </a>
 <?php endif; ?>
 <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
 	<?php the_title( '<h4>', '</h4>' ); ?>
 </a>
<!-- [end - content-image.php] -->
