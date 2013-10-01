
<?php	if (  is_home() ) : ?>
<div class="sidebar-container">
  <div class="logo logo-front">
    <a href="/" title="Til forsiden">Offentlig Ledelse</a>
  </div>

  <?php dynamic_sidebar('sidebar-frontpage'); ?>
</div>
<? else : ?>

<?php dynamic_sidebar('sidebar-subpage'); ?>

<?php endif; ?>

<div class="logos">
	<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/logos.png" class="img-responsive">
</div>