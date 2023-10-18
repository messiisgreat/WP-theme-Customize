<?php if ( get_theme_mod( 'yourseobook_main_land_faqs_display_control' ) ) : ?>

<div class="container-fluid" style="background-color: #02b159;background-image: linear-gradient(to bottom right, #2f6f4e, #02b159);color: #000;margin: 120px 0px 120px 0px;box-shadow: 0px 50px 40px -20px #1b422e;padding:160px 20px 160px 20px;">
<div class="container">
  <div class="row align-items-center ms-auto landfaqs" style="margin:40px 0px 40px 0px;padding:40px 20px 40px 20px;">

<h2 class="faqs-title">Frequently Asked Questions</h2>


<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4 py-5">
      <div class="col d-flex align-items-start">
        <svg class="bi text-body-secondary flex-shrink-0 me-3" width="1.75em" height="1.75em"><use xlink:href="#bootstrap"></use></svg>
        <div>
          <h3 class="fw-bold mb-0 fs-4 text-body-emphasis">Asked Question Heading Title</h3>
          <p>Short Answer and Exerpt or Description of the askled Question</p>
        </div>
      </div>
      <div class="col d-flex align-items-start">
        <svg class="bi text-body-secondary flex-shrink-0 me-3" width="1.75em" height="1.75em"><use xlink:href="#cpu-fill"></use></svg>
        <div>
          <h3 class="fw-bold mb-0 fs-4 text-body-emphasis">Asked Question Heading Title</h3>
          <p>Short Answer and Exerpt or Description of the askled Question</p>
        </div>
      </div>
      <div class="col d-flex align-items-start">
        <svg class="bi text-body-secondary flex-shrink-0 me-3" width="1.75em" height="1.75em"><use xlink:href="#calendar3"></use></svg>
        <div>
          <h3 class="fw-bold mb-0 fs-4 text-body-emphasis">Asked Question Heading Title</h3>
          <p>Short Answer and Exerpt or Description of the askled Question</p>
        </div>
      </div>
      <div class="col d-flex align-items-start">
        <svg class="bi text-body-secondary flex-shrink-0 me-3" width="1.75em" height="1.75em"><use xlink:href="#home"></use></svg>
        <div>
          <h3 class="fw-bold mb-0 fs-4 text-body-emphasis">Asked Question Heading Title</h3>
          <p>Short Answer and Exerpt or Description of the askled Question</p>
        </div>
      </div>
      <div class="col d-flex align-items-start">
        <svg class="bi text-body-secondary flex-shrink-0 me-3" width="1.75em" height="1.75em"><use xlink:href="#speedometer2"></use></svg>
        <div>
          <h3 class="fw-bold mb-0 fs-4 text-body-emphasis">Asked Question Heading Title</h3>
          <p>Short Answer and Exerpt or Description of the askled Question</p>
        </div>
      </div>
      <div class="col d-flex align-items-start">
        <svg class="bi text-body-secondary flex-shrink-0 me-3" width="1.75em" height="1.75em"><use xlink:href="#toggles2"></use></svg>
        <div>
          <h3 class="fw-bold mb-0 fs-4 text-body-emphasis">Asked Question Heading Title</h3>
          <p>Short Answer and Exerpt or Description of the askled Question</p>
        </div>
      </div>
      <div class="col d-flex align-items-start">
        <svg class="bi text-body-secondary flex-shrink-0 me-3" width="1.75em" height="1.75em"><use xlink:href="#geo-fill"></use></svg>
        <div>
          <h3 class="fw-bold mb-0 fs-4 text-body-emphasis">Asked Question Heading Title</h3>
          <p>Short Answer and Exerpt or Description of the askled Question</p>
        </div>
      </div>
      <div class="col d-flex align-items-start">
        <svg class="bi text-body-secondary flex-shrink-0 me-3" width="1.75em" height="1.75em"><use xlink:href="#tools"></use></svg>
        <div>
          <h3 class="fw-bold mb-0 fs-4 text-body-emphasis">Asked Question Heading Title</h3>
          <p>Short Answer and Exerpt or Description of the askled Question</p>
        </div>
      </div>
<hr>

<h2 class="faqs-title">Latest Frequently Asked Questions</h2>

<?php $the_query = new WP_Query( 'showposts=12&cat=47' ); ?>
<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>

<div class="col-sm-3">
<details id="lfaqs" class="latest-faqs" role="dialog" type="widget">
<summary id="lfaq-title" class="latest-faqs-title" role="listitem" type="heading" style="color:#fff;font-size:14px;text-decoration:none;font-weight:500;"><?php the_title();?></summary>
<?php the_excerpt(); ?>
</details>
</div>

<?php endwhile;?>



    </div>

</div>
</div>
</div>





<?php endif; ?>

<?php

// $category_id = 47; // Replace 47 with the actual category ID

// $args = array(
   // 'category__in' => array($category_id),
   // 'posts_per_page' => 6 // Displays all posts from the category
// );
// $posts_query = new WP_Query($args);

// if ($posts_query->have_posts()) {
   //  while ($posts_query->have_posts()) {
      //   $posts_query->the_post();
       // ?>
       <!-- <h2><?php // the_title(); ?></h2> -->
        <?php // get_the_content(); ?>
        <?php
    // }
    // wp_reset_postdata();
// } else {
   //  echo 'No posts found.';
// }
// ?>

