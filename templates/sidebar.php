
<?php	if (  is_home() ) : ?>
<div class="sidebar-container">
  <div class="logo logo-front">
    <a href="/" title="Til forsiden">Offentlig Ledelse</a>
  </div>

  <?php dynamic_sidebar('sidebar-frontpage'); ?>
</div>
<? else : ?>

 <?php
    $category = get_the_category(); //get first current category ID
    $this_post = $post->ID; // get ID of current post
    $posts = get_posts('numberposts=10&orderby=date&order=ASC&category=' . $category[0]->cat_ID . '&exclude=' . $this_post);
 ?>
 <?php if ($posts) : ?>
 <section class="widget recent-posts-3 widget_recent_entries">
 	<div class="widget-inner">		
 	<h3>Fra samme blad samme blad</h3>
 <ul class="related-posts">
 <?php
    foreach($posts as $post) {
 ?>
 <li class="clearfix">
    <?php if ( has_post_thumbnail() ) { ?>
     	<figure>
      		<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_post_thumbnail('thumbnail', array('class' => 'img-responsive')); ?></a>
  		</figure>
    <?php } ?>
       <h4><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title('')?></h4></a>
    <?php // the_excerpt() ?>
</li>
<?php } wp_reset_postdata(); ?>
</ul>
</div></section>
<?php endif; ?>



<?php dynamic_sidebar('sidebar-subpage'); ?>





<?php endif; ?>

<div class="logos">
  <p>Offentlig Ledelse udgives i fællesskab af:</p>
	<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/logos.png" class="img-responsive">
</div>