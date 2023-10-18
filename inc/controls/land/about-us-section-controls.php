<?php



  

// yourseobook_landing_homepage_content_sections_display_control
// Panel Name
// yourseobook_single_page_section


$wp_customize->add_setting( 'yourseobook_landing_homepage_about_us_settings_demo_radio_control', array(
   'default'        => 'AboutUsSectionGeneral',
) );

$wp_customize->add_control( 'yourseobook_landing_homepage_about_us_settings_demo_radio_control', array(
   'label'      => 'About us Page Styles/Settings',
   'section'    => 'yourseobook_land_about_us_sections',
   'settings'   => 'yourseobook_landing_homepage_about_us_settings_demo_radio_control',
   'type'       => 'radio',
   'choices'    => array(
   'AboutUsSectionGeneral' => 'General',
   'AboutUsSectionDisplay' => 'Display',
   'AboutUsSectionHeading' => 'Heading',
   'AboutUsSectionGrid' => 'Layout',
   'AboutUsSectionMedia' => 'Media',
   'AboutUsSectionContent' => 'Content',
   'AboutUsSectionCTA' => 'Buttons',
   ),
) );
$wp_customize->selective_refresh->add_partial( 'yourseobook_landing_homepage_about_us_settings_demo_radio_control', array(
    'selector' => '#aboutus', // You can also select a css class
) );
