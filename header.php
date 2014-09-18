<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Tim Spear"><!-- BS author -->
    
    <!-- Latest compiled and minified CSS -->
    <!-- <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css"> -->

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

    <div class="wrapper"> <!-- STICKY FOOTER -->

    <header class="navbar navbar-static-top navbar-inverse" role="navigation">

      <div class="container">

          <div class="brandlogo">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logocircles.png">
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