<?php
// yourseobook_main_land_above_the_fold_panel
// yourseobook_landing_homepage_content_sections_display_control
$wp_customize->add_section( ' yourseobook_landing_sections',
 array(
   // 'priority' => 1,
   'title' => __( 'Landing Page Settings', 'yourseobook' ),
   'panel' => 'yourseobook_landing_panel'
 )
);
