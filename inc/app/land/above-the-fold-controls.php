<?php


// Yourseobook_Master_Styles_Custom_Control


// yourseobook_main_land_above_the_fold_styles_panel
$wp_customize->add_setting( 'yourseobook_main_land_above_the_fold_styles_settings', array(
    // Add your setting arguments here
    'transport' => 'refresh',
    'sanitize_callback' => 'yourseobook_switch_sanitization'
) );

$wp_customize->add_control( new Yourseobook_Master_Styles_Custom_Control( $wp_customize, 'yourseobook_main_land_above_the_fold_styles_settings', array(
    'label' => __( 'Above The Fold Styles and Settings', 'yourseobook' ),
    'section' => 'yourseobook_land_sections',
) ) );