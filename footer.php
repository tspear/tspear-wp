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

    <?php 
      // only include if site is live
      if(strpos($_SERVER["HTTP_HOST"], 'tspear.com') !== false):
    ?>
      <!-- ANALYTICS -->
      <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
        ga('create', 'UA-135674-13', 'tspear.com');
        ga('send', 'pageview');
      </script>

      <? else: ?>
      <!-- ANALYTICS: NOT LOADED -->

    <? endif ?>

    <!-- WP FOOTER -->
    <?php wp_footer(); ?>
    <!-- /WP FOOTER -->
  </body>
</html>
