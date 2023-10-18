<?php



$wp_customize->add_section( 'yourseobook_single_page_section',
 array(
    'priority'       => 2,
    'capability'     => 'edit_theme_options',
   'title' => __( 'Single Page Section', 'yourseobook' ),
   'panel' => 'yourseobook_single_page_panel'
 )
);

$wp_customize->add_section( 'yourseobook_single_page_breadcumbs_section',
 array(
    'priority'       => 2,
    'capability'     => 'edit_theme_options',
   'title' => __( 'Single Page Breadcrumbs ', 'yourseobook' ),
   'panel' => 'yourseobook_single_page_panel'
 )
);

$wp_customize->add_section( 'yourseobook_single_page_metas_section',
 array(
    'priority'       => 3,
    'capability'     => 'edit_theme_options',
   'title' => __( 'Single Page Metas', 'yourseobook' ),
   'panel' => 'yourseobook_single_page_panel'
 )
);


$wp_customize->add_section( 'yourseobook_single_page_sidebar_section',
 array(
    'priority'       => 4,
    'capability'     => 'edit_theme_options',
   'title' => __( 'Single Page Sidebar ', 'yourseobook' ),
   'panel' => 'yourseobook_single_page_panel'
 )
);




