<div class="feature">
  <img src="<?php echo get_bloginfo( 'template_directory' );?>/images/logo.png" alt="Coral Alliance" class="feature__logo" />
  <img src="<?php echo get_bloginfo( 'template_directory' );?>/images/title.png" alt="Our Precious Reef Needs a Hero" class="feature__title" />
  <p class="feature__blurb">
  <?php the_field('subtitle'); ?>
  </p>
  <div class="feature__buttonContainer">
    <a class="button button--cta" href="<?php the_field('petition_link'); ?>" target="_blank">Sign the Petition</a>
  </div>
</div>
<div class="turtle">
  <img src="<?php echo get_bloginfo( 'template_directory' );?>/images/turtle.png" alt="Turtle" class="turtle__image" />
</div>
<div class="feature2">
  <h2 class="feature2__title">
    <?php the_field('feature2_title'); ?>
  </h2>
  <div class="feature2__copy">
    <?php the_field('feature2_content'); ?>
  </div>
  <a href="#main" class="feature2__mainLink">
    <img src="<?php echo get_bloginfo( 'template_directory' );?>/images/down-arrow.png" alt="Down" class="feature2__downArrow" />
  </a>
</div>
<div class="main main--cardContainer" id="main">
  <?php get_template_part( 'latest-posts' ); ?>
</div>