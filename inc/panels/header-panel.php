<?php



  /**
   * Add our Header & Navigation Panel
   */


   $wp_customize->add_panel( 'yourseobook_main_header_navigations_panel',
    array(
      'priority' => 2,
      'title' => __( 'Header Navigation Menu', 'yourseobook' ),
    )
  );



   $wp_customize->add_panel( 'yourseobook_main_header_brand_logo_image_text_panel',
    array(
      'priority' => 3,
      'title' => __( 'Header Navigation Brand Logo/Text', 'yourseobook' ),
    )
  );

// yourseobook_main_header_navigation_master_menu_sections
   $wp_customize->add_panel( 'yourseobook_main_header_navigation_master_menu_panel',
    array(
      'priority' => 4,
      'title' => __( 'Master Header Navigation Menu', 'yourseobook' ),
    )
  );

// yourseobook_main_header_navigation_master_menu_search_sections
   $wp_customize->add_panel( 'yourseobook_main_header_navigation_master_menu_search_panel',
    array(
      'priority' => 5,
      'title' => __( 'Header Main Navigation Search', 'yourseobook' ),
    )
  );

