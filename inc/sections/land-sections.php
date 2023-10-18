<?php



$wp_customize->add_section( 'yourseobook_land_sections',
 array(
   'priority' => 2,
   'title' => __( 'Landing Page Settings', 'yourseobook' ),
   'panel' => 'yourseobook_main_land_panel'
 )
);

$wp_customize->add_section(
    'yourseobook_land_breaking_news_sections',
    array(
        'priority'    => 3,
        'panel'       => 'yourseobook_main_land_panel',
        'title'       => esc_html__('Breaking News Settings', 'yourseobook'),
        'menu_icon'   => 'dashicons dashicons-location-alt'
    )
);

$wp_customize->add_section( 'yourseobook_land_above_the_fold_style_sections',
 array(
    'priority' => 4,
   'title' => __( 'Above The Fold Styles', 'yourseobook' ),
   'panel' => 'yourseobook_main_land_above_the_fold_styles_panel'
 )
);

$wp_customize->add_section( 'yourseobook_land_above_the_fold_sections',
 array(
   'priority' => 3,
   'title' => __( 'Above The Fold Settings', 'yourseobook' ),
   'panel' => 'yourseobook_main_land_panel'
 )
);

$wp_customize->add_section( 'yourseobook_land_below_the_fold_sections',
 array(
  //  'priority' => 2,
   'title' => __( 'Below The Fold Settings', 'yourseobook' ),
   'panel' => 'yourseobook_main_land_below_the_fold_styles_panel'
 )
);

$wp_customize->add_section( 'yourseobook_land_about_us_sections',
 array(
  //  'priority' => 2,
   'title' => __( 'About us Settings', 'yourseobook' ),
   'panel' => 'yourseobook_main_land_panel'
 )
);




$wp_customize->add_section( 'yourseobook_land_services_sections',
 array(
  // 'priority' => 1,
   'title' => __( 'Landing Page Services', 'yourseobook' ),
   'panel' => 'yourseobook_main_land_panel'
 )
);

$wp_customize->add_section( 'yourseobook_land_faqs_sections',
 array(
  // 'priority' => 1,
   'title' => __( 'Landing FAQs Settings', 'yourseobook' ),
   'panel' => 'yourseobook_main_land_panel'
 )
);



$wp_customize->add_section( 'yourseobook_land_our_team_sections',
 array(
  // 'priority' => 1,
   'title' => __( 'Landing Our Team Settings', 'yourseobook' ),
   'panel' => 'yourseobook_main_land_panel'
 )
);


$wp_customize->add_section( 'yourseobook_land_our_case_studies_sections',
 array(
  // 'priority' => 1,
   'title' => __( 'Landing Our Case Studies Settings', 'yourseobook' ),
   'panel' => 'yourseobook_main_land_panel'
 )
);


$wp_customize->add_section( 'yourseobook_land_latest_news_sections',
 array(
  // 'priority' => 1,
   'title' => __( 'Landing Latest News Settings', 'yourseobook' ),
   'panel' => 'yourseobook_main_land_panel'
 )
);

$wp_customize->add_section( 'yourseobook_land_images_gallery_sections',
 array(
  // 'priority' => 1,
   'title' => __( 'Land Images Gallery Settings', 'yourseobook' ),
   'panel' => 'yourseobook_main_land_panel'
 )
);

$wp_customize->add_section( 'yourseobook_land_video_gallery_sections',
 array(
  // 'priority' => 1,
   'title' => __( 'Land Videos Settings', 'yourseobook' ),
   'panel' => 'yourseobook_main_land_panel'
 )
);


$wp_customize->add_section( 'yourseobook_land_users_reviews_sections',
 array(
  // 'priority' => 1,
   'title' => __( 'Land User Testimonials Settings', 'yourseobook' ),
   'panel' => 'yourseobook_main_land_panel'
 )
);

