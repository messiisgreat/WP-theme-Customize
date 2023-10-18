<?php

// yourseobook_website_typography_panel
$wp_customize->add_section( 'yourseobook_website_typography_sections',
 array(
  'priority' => 1,
   'title' => __( 'Typography Settings', 'yourseobook' ),
   'panel' => 'yourseobook_website_typography_panel'
 )
);

// yourseobook_website_typography_panel
$wp_customize->add_section( 'yourseobook_website_typography_buttons_font_size_sections',
 array(
  'priority' => 2,
   'title' => __( 'General Buttons Settings', 'yourseobook' ),
   'panel' => 'yourseobook_website_general_buttons_typography_panel'
 )
);