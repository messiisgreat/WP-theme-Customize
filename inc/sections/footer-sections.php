<?php



$wp_customize->add_section( 'yourseobook_main_footer_navigation_menus_sections',
 array(
   // 'priority' => 2,
   'title' => __( 'Footer Navigation Menu', 'yourseobook' ),
   'panel' => 'yourseobook_main_footer_navigation_menus_panel'
 )
);


$wp_customize->add_section( 'yourseobook_main_footer_widgets_sections',
 array(
   // 'priority' => 2,
   'title' => __( 'Footer Widget Section', 'yourseobook' ),
   'panel' => 'yourseobook_main_footer_navigation_menus_panel'
 )
);





$wp_customize->add_section( 'yourseobook_main_footer_navigation_fws1_sections',
 array(
   // 'priority' => 2,
   'title' => __( 'Footer Widget One', 'yourseobook' ),
   'panel' => 'yourseobook_main_footer_widgets_panel'
 )
);

$wp_customize->add_section( 'yourseobook_main_footer_navigation_fws2_sections',
 array(
   // 'priority' => 2,
   'title' => __( 'Footer Widget Two', 'yourseobook' ),
   'panel' => 'yourseobook_main_footer_widgets_panel'
 )
);

$wp_customize->add_section( 'yourseobook_main_footer_navigation_fws3_sections',
 array(
   // 'priority' => 2,
   'title' => __( 'Footer Widget Three', 'yourseobook' ),
   'panel' => 'yourseobook_main_footer_widgets_panel'
 )
);

$wp_customize->add_section( 'yourseobook_main_footer_navigation_fws4_sections',
 array(
   // 'priority' => 2,
   'title' => __( 'Footer Widget Four', 'yourseobook' ),
   'panel' => 'yourseobook_main_footer_widgets_panel'
 )
);

$wp_customize->add_section( 'yourseobook_main_footer_navigation_fws5_sections',
 array(
   // 'priority' => 2,
   'title' => __( 'Footer Widget Five', 'yourseobook' ),
   'panel' => 'yourseobook_main_footer_widgets_panel'
 )
);



// Copy Info Footer Navigation Menu and Social Menu Sections include Terms/Privacy

$wp_customize->add_section( 'yourseobook_copy_info_footer_navigation_menus_sections',
 array(
   // 'priority' => 2,
   'title' => __( 'Copy Info Menu Navigation', 'yourseobook' ),
   'panel' => 'yourseobook_main_footer_navigation_menus_panel'
 )
);