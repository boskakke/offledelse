<header class="banner navbar navbar-default navbar-static-top navbar-fixed-top" role="banner">
  <div class="container">
    <div class="navbar-header">

      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand visible-xs" href="<?php echo home_url(); ?>/"><?php bloginfo('name'); ?></a>
      <div class="logo top-logo">

      <?php 
      if (!is_home() ) : ?>
        <a href="<?php echo home_url(); ?>/"></a>
      
      <?php  endif; ?>
        <a href="<?php echo home_url(); ?>/" class="top-logo-link"><span class="glyphicon glyphicon-home home-icon"></span><?php bloginfo('name'); ?></a>
      </div>
    </div>

    <nav class="collapse navbar-collapse navbar-right" role="navigation">
      <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav'));
        endif;
      ?>
    </nav>
  </div>
</header>
