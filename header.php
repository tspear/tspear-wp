<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Tim Spear"><!-- BS author -->

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-KH5788');</script>
    <!-- End Google Tag Manager -->


    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/lib/html5shiv.js"></script>
      <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/lib/respond.min.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
   <link rel="shortcut icon" href="../assets/ico/favicon.png">

    <!-- WP HEAD  -->
    <?php wp_head(); ?>
    <!-- / WP HEAD -->

  </head>

  <body class="Site custom-background">
    
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KH5788"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <div class="wrapper"> <!-- STICKY FOOTER -->

    <header class="navbar navbar-static-top navbar-inverse" role="navigation">

      <div class="container">

          <div class="brandlogo">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/tspearlogo-centered.svg" width="32px" height="32px" alt="tspear design logo">
          </div>

          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>

            <a href="<?php bloginfo('url');?>" class="navbar-brand"><?php bloginfo('name'); ?></a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <nav class="collapse navbar-collapse navbar-ex1-collapse">
              <?php
              $defaults = array(
                'theme_location'  => 'primary',
                'menu'            => '',
                'container'       => false,
                'container_class' => '',
                'container_id'    => '',
                'menu_class'      => '',
                'menu_id'         => '',
                'echo'            => true,
                'fallback_cb'     => 'wp_page_menu',
                'before'          => '',
                'after'           => '',
                'link_before'     => '',
                'link_after'      => '',
                'items_wrap'      => '<ul class="nav navbar-nav navbar-right">%3$s</ul>',
                'depth'           => 0,
                'walker'          => ''
              );
              wp_nav_menu( $defaults );
              ?>
          </nav> <!-- /links -->

      </div><!-- /container -->

    </header>
