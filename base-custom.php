<?php get_template_part('templates/head'); ?>
<body <?php body_class(); ?>>

  <!--[if lt IE 8]><div class="alert alert-warning"><?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'roots'); ?></div><![endif]-->

  <?php
    do_action('get_header');
    // Use Bootstrap's navbar if enabled in config.php
    if (current_theme_supports('bootstrap-top-navbar')) {
      get_template_part('templates/header-top-navbar');
    } else {
      get_template_part('templates/header');
    }
  ?>

  <div class="wrap container" role="document">
    <div class="content row">



    <?php 
      
      if (!is_home() ) :
		
      
      ?>
  
      <div class="image col-md-12">
        <?php 
          // check if the post has a Post Thumbnail assigned to it.
          if ( has_post_thumbnail()  ) {
          	the_post_thumbnail('article-image', array('class' => 'img-responsive'));
          } 
          ?>
      </div>
    <?php   endif; ?>
      
      <div class="main col-md-8 col-md-push-4" role="main">
        <?php include roots_template_path(); ?>


      </div><!-- /.main -->

        <aside class="sidebar  col-md-4 col-md-pull-8" role="complementary">
          <?php include roots_sidebar_path(); ?>
        </aside><!-- /.sidebar -->

    </div><!-- /.content -->
  </div><!-- /.wrap -->

  <?php get_template_part('templates/footer'); ?>

</body>
</html>
