<?php


// yourseobook_landing_seo_panel

// yourseobook_website_typography_panel
$wp_customize->add_section( 'yourseobook_landing_seo_sections',
 array(
  'priority' => 6,
   'title' => __( 'Landing SERP Settings', 'yourseobook' ),
   'panel' => 'yourseobook_landing_seo_panel'
 )
);

// yourseobook_website_typography_panel
$wp_customize->add_section( 'yourseobook_landing_seo_header_meta_sections',
 array(
  'priority' => 1,
   'title' => __( 'General SERP Settings', 'yourseobook' ),
   'panel' => 'yourseobook_landing_seo_panel'
 )
);

// yourseobook_website_typography_panel
$wp_customize->add_section( 'yourseobook_landing_seo_serp_header_meta_sections',
 array(
  'priority' => 2,
   'title' => __( 'Header SEO Meta Settings', 'yourseobook' ),
   'panel' => 'yourseobook_landing_seo_panel'
 )
);


$wp_customize->add_section( 'yourseobook_general_image_meta_section', array(
    'title' => __( 'General Image Meta Options', 'yourseobook' ),
    'priority' => 30,
) );




