<?php



   $wp_customize->add_panel( 'yourseobook_landing_seo_panel',
    array(
     'priority' => 6,
      'title' => __( 'Landing SEO Settings', 'yourseobook' ),
    )
  );

   $wp_customize->add_panel( 'yourseobook_landing_header_meta_seo_panel',
    array(
     'priority' => 7,
      'title' => __( 'Landing Header Meta SEO Settings', 'yourseobook' ),
    )
  );