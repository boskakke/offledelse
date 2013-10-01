<?php while (have_posts()) : the_post(); ?>



  <article <?php post_class(); ?>>
    <header>
      <h1 class="entry-title"><?php the_title(); ?></h1>
      <?php get_template_part('templates/entry-meta'); ?>
    </header>
    <div class="entry-content clearfix">
      <?php the_content(); ?>
    </div>



    <?php if( get_field('forfatter_overskrift') ): ?><aside class="author-info clearfix">
      
      <h2><?php the_field('forfatter_overskrift'); ?></h2>
    

      
        <div class="author-content">
        <figure>
          <?php 
          $attachment_id = get_field('forfatter_billede');
          $size = "thumbnail"; // (thumbnail, medium, large, full or custom size)
           
          $image = wp_get_attachment_image_src( $attachment_id, $size );
          // url = $image[0];
          // width = $image[1];
          // height = $image[2];
          ?>
          <img src="<?php echo $image[0]; ?>" width="" height="" />
        </figure>
           <?php the_field('forfatter_brodtekst'); ?>
        </div>
    </aside>
  <?php endif; ?>




    <div class="social-buttons">
        <a href="#" class="button-facebook"
  onclick="
    window.open(
      'https://www.facebook.com/sharer/sharer.php?u='+encodeURIComponent(location.href), 
      'facebook-share-dialog', 
      'width=626,height=436'); 
    return false;">
  Del på Facebook
</a>

<a href="https://twitter.com/share" class="button-twitter" data-lang="da" data-count="none">Del på Twitter</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>


    </div>
    <footer>
      <?php wp_link_pages(array('before' => '<nav class="page-nav"><p>' . __('Pages:', 'roots'), 'after' => '</p></nav>')); ?>
    </footer>
    <?php comments_template('/templates/comments.php'); ?>
  </article>





<?php endwhile; ?>
