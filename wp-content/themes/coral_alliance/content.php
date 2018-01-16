<div class="header">
	<a href="<?php echo get_home_url(); ?>">
		<img src="<?php echo get_bloginfo( 'template_directory' );?>/images/logo.png" alt="Coral Alliance" class="header__logo" />
	</a>
</div>
<div class="main">
	<h2 class="main__title"><?php the_title(); ?></h2>
	<p class="main__meta"><?php the_date(); ?></a></p>
  <?php the_content(); ?>
</div>