<?php



  /**
   * Add our Header & CTA Panel
   */


   $wp_customize->add_panel( 'yourseobook_main_header_navigation_cta_button_panel',
    array(
      'priority' => 1,
      'title' => __( 'Header CTA Button Settings', 'yourseobook' ),
    )
  );
