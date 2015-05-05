<!-- FOOTER.PHP -->
      <div class="push"></div>
    </div><!-- STICKY FOOTER WRAPPER -->


    <footer class="sitefooter" role="navigation">
        <div class="container">
            
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logocirclesBW.png">
            
            <div class="row">
                    <?php dynamic_sidebar( 'footer left' ); ?>
                    <?php dynamic_sidebar( 'footer centre' ); ?>
                    <?php dynamic_sidebar( 'footer right' ); ?>
            </div>

            <?php
              $defaults = array(
            'theme_location'  => 'footernav',
            'menu'            => '',
            'container'       => '',
            'container_class' => '',
            'container_id'    => '',
            'menu_class'      => '',
            'menu_id'         => '',
            'echo'            => true,
            'fallback_cb'     => 'wp_page_menu',
            'before'          => '<small>',
            'after'           => '</small>',
            'link_before'     => '',
            'link_after'      => '',
            'items_wrap'      => '<ul class="list-inline">%3$s</ul>',
            'depth'           => 0,
            'walker'          => ''
              );
              wp_nav_menu( $defaults ); 
            ?>
        </div>
    </footer>
    <!-- WP FOOTER -->
    <?php wp_footer(); ?>
    <!-- /WP FOOTER -->
    <!-- HACK: Fix spacing on Portfolio shortcode -->
    <style type="text/css"> 
      .portfolio-entry {
        margin-bottom: 1em;
      }
    </style>
  </body>
</html>