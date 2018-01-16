<?php
	$recent_posts = wp_get_recent_posts(array('numberposts' => 3));
	foreach($recent_posts as $recent) {
    // Generate the excerpt using the built in wordpress function wp_trim_words
    // We can't use the_excerpt like normal because we're outside of the loop
    // Allow the user to override the excerpt if it is set within wordpress
    $excerpt = strlen($recent["post_excerpt"])
      ? $recent["post_excerpt"]
      : wp_trim_words($recent["post_content"], 15);
    
    $permalink = get_permalink($recent["ID"]);

    $image = get_field('image', $recent["ID"]);

    print_r($imageUrl);
?>
  <div class="articleCard">
    <div class="articleCard__image" style="background-image: url('<?php echo($image["sizes"]["medium"]); ?>')">
      <div class="articleCard__title"><?php echo($recent["post_title"]); ?></div>
    </div>
    <p class="articleCard__blurb"><?php echo($excerpt); ?></p>
    <a href="<?php echo($permalink); ?>" class="button button--border">Read</a>
  </div>
<?php
  }
	wp_reset_query();
?>