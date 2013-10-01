<footer class="content-info" role="contentinfo">
	
	<div class="container">

	  <div class="row">
	  	<div class="col-lg-3">

	  		<div class="logo footer-logo"><a href="<?php echo home_url(); ?>/"><?php bloginfo('name'); ?></a></div>
	  		<?php dynamic_sidebar('sidebar-footer-1'); ?>
	  	</div>
	    <div class="col-lg-3">
	      <?php dynamic_sidebar('sidebar-footer-2'); ?>
	    </div>
	    <div class="col-lg-3">
	      <?php dynamic_sidebar('sidebar-footer-3'); ?>
	    </div>
	    <div class="col-lg-3">
	      <?php dynamic_sidebar('sidebar-footer-4'); ?>
	    </div>
	  </div>
	  <div class="row">
		<div class="col-lg-12 last-footer">
	      <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?></p>
	    </div>
	  </div>
	</div> 
</footer>

<script type="text/javascript">
$(document).ready(function(){
	
	// add manchet class to first paragraph
	$('.entry-content > p:first').addClass('manchet');	

	// Fix inline wp styling on images
	$('.size-large').closest('figure').css('width','100%');

    // grab the initial top offset of the navigation 
    var sticky_navigation_offset_top = $('.home .logo-front').offset().top;
    
    // our function that decides weather the navigation bar should have "fixed" css position or not.
    var sticky_navigation = function(){
        var scroll_top = $(window).scrollTop(); // our current vertical position from the top
        // if we've scrolled more than the navigation, change its position to fixed to stick to top, otherwise change it back to relative
        if (scroll_top > sticky_navigation_offset_top) {     
        	$('.top-logo').addClass('show-logo')
        } else {
        	$('.top-logo').removeClass('show-logo');
        }

    };
    
    if($(window).width()>979) {
        // run our function on load
       sticky_navigation();
        
        // and run it again every time you scroll
        $(window).on('resize scroll', function() {
             sticky_navigation();
        }).resize();
    }


    
});

</script>

<?php wp_footer(); ?>