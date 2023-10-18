<?php



$wp_customize->add_section( 'yourseobook_main_header_navigation_sections',
 array(
   'priority' => 3,
   'title' => __( 'Header Navigation Menu Settings', 'yourseobook' ),
   'panel' => 'yourseobook_main_header_navigations_panel'
 )
);

$wp_customize->add_section( 'yourseobook_main_header_navigation_brand_logo_sections',
 array(
   'priority' => 2,
   'title' => __( 'Header Navigation Brand Logo/Text', 'yourseobook' ),
   'panel' => 'yourseobook_main_header_navigations_panel'
 )
);


$wp_customize->add_section( 'yourseobook_main_header_navigation_master_menu_sections',
 array(
   'priority' => 1,
   'title' => __( 'Master Header Navigation Menu', 'yourseobook' ),
   'panel' => 'yourseobook_main_header_navigations_panel'
 )
);




$wp_customize->add_section( 'yourseobook_main_header_navigation_master_menu_search_sections',
 array(
   'priority' => 4,
   'title' => __( 'Header Main Navigation Search', 'yourseobook' ),
   'panel' => 'yourseobook_main_header_navigations_panel'
 )
);

