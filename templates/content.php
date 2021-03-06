<article <?php post_class('clearfix'); ?>>
  <header>
    <figure>
    <a href="<?php the_permalink(); ?>">
    <?php 
      if ( has_post_thumbnail() ) {
        the_post_thumbnail('thumbnail');
      } 
      ?>
    </a>  
    </figure>
    
    <?php get_template_part('templates/entry-meta-front'); ?>
    
    <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    
  </header>
  <div class="entry-summary">
    <?php // the_content(); ?>
    <?php the_excerpt(); ?>
  </div>
</article>
