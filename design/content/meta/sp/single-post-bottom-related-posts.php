<div class="container">
<div class="row">
<h3>Related Articles</h3>
  <?php
    $orig_post = $post;
    global $post;
    $tags = wp_get_post_tags($post->ID);
     
    if ($tags) {
    $tag_ids = array();
    foreach($tags as $individual_tag) $tag_ids[] = $individual_tag->term_id;
    $args=array(
    'tag__in' => $tag_ids,
    'post__not_in' => array($post->ID),
    'posts_per_page'=>3, // Number of related posts to display.
    'caller_get_posts'=>1
    );
     
    $my_query = new wp_query( $args );
 
    while( $my_query->have_posts() ) {
    $my_query->the_post();
    ?>
  <div class="col-sm-4 col-md-4">
    <div class="thumbnail">
   <?php include (TEMPLATEPATH . '/api/func/content/single/featured-image-fallback.php');?>
      <div class="caption">
        <h3><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" rel="bookmark" role="article" aria-label="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
      </div>
    </div>
  </div>
  	    <? }
    }
    $post = $orig_post;
    wp_reset_query();
    ?>
</div>
</div>