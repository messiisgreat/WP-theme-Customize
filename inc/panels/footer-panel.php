<?php



  /**
   * Add our Footer & Menus Panel
   */


   $wp_customize->add_panel( 'yourseobook_main_footer_navigation_menus_panel',
    array(
      'priority' => 4,
      'title' => __( 'Footer Navigation Menu', 'yourseobook' ),
    )
  );


   $wp_customize->add_panel( 'yourseobook_main_footer_widgets_panel',
    array(
     // 'priority' => 4,
      'title' => __( 'Footer Widgets Section', 'yourseobook' ),
    )
  );

   $wp_customize->add_panel( 'yourseobook_copy_info_footer_widgets_panel',
    array(
     // 'priority' => 5,
      'title' => __( 'Copy Info Menu Navigation', 'yourseobook' ),
    )
  );

   