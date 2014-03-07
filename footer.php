<!-- FOOTER.PHP -->
    </div> <!-- /container -->

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

    <!-- JS  -->
    <script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
    <!-- BS3 -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

    <!-- WP FOOTER -->
    <?php wp_footer(); ?>
    <!-- /WP FOOTER -->
  </body>
</html>
