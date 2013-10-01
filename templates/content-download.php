<?php while (have_posts()) : the_post(); ?>
  

  <?php 
		 
if(get_field('download'))
{
	
	echo '<div class="row">';
	
	while(has_sub_field('download'))
	{
		$attachment_id = get_sub_field('pdf_fil');
		$url = wp_get_attachment_url( $attachment_id );
		$title = get_the_title( $attachment_id );



 		$thumbnail = get_sub_field('thumbnail');
        $size = "thumbnail"; // (thumbnail, medium, large, full or custom size)
           
        $image = wp_get_attachment_image_src( $thumbnail, $size );
          // url = $image[0];
          // width = $image[1];
          // height = $image[2];
         
		echo '<article class="col-md-4 col-xs-6 col-download">';
		// Titel
		echo '<h2>' . get_sub_field('titel') . '</h2>';
		// PDF fil + thumbnail
		echo '<a href="' . $url . '" target="_blank"><img src="' . $image[0] . '" ></a>';
		echo '<a href="' . $url . '" class="btn btn-primary btn-xs" target="_blank">Download PDF <span class="glyphicon glyphicon-paperclip"></span></a>';
		echo '</article>';
	}
 
	echo '</div>';
}
 
?>



  <?php the_content(); ?>










  <?php wp_link_pages(array('before' => '<nav class="pagination">', 'after' => '</nav>')); ?>
<?php endwhile; ?>
</article>