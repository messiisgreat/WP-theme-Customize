<?php


$wp_customize->add_setting( 'yourseobook_google_stack_scripts_display_control',
  array(
    //'default' => $this->defaults['search_menu_icon'],
    'transport' => 'refresh',
    'sanitize_callback' => 'yourseobook_switch_sanitization'
  )
);


$wp_customize->add_control( new Yourseobook_Toggle_Switch_Custom_control( $wp_customize, 'yourseobook_google_stack_scripts_display_control',
  array(
    'type' => 'checkbox', // Use checkbox type for the toggle switch
    'label' => __( 'Google Stack Scripts', 'yourseobook' ),
    'section' => 'yourseobook_google_stack_scripts_sections'
  ),
));

$wp_customize->add_setting( 'yourseobook_google_tag_manager_script_display_control',
  array(
    //'default' => $this->defaults['search_menu_icon'],
    'transport' => 'refresh',
    'sanitize_callback' => 'yourseobook_switch_sanitization'
  )
);


$wp_customize->add_control( new Yourseobook_Toggle_Switch_Custom_control( $wp_customize, 'yourseobook_google_tag_manager_script_display_control',
  array(
    'type' => 'checkbox', // Use checkbox type for the toggle switch
    'label' => __( 'Google Tag Manager Scripts', 'yourseobook' ),
    'section' => 'yourseobook_google_stack_scripts_sections'
  ),
));

$wp_customize->add_setting( 'yourseobook_google_tag_manager_api_script_in_body',
  array(
    //'default' => $this->defaults['search_menu_icon'],
    'transport' => 'refresh',
    'sanitize_callback' => 'yourseobook_switch_sanitization'
  )
);


$wp_customize->add_control( new Yourseobook_Toggle_Switch_Custom_control( $wp_customize, 'yourseobook_google_tag_manager_api_script_in_body',
  array(
    'type' => 'checkbox', // Use checkbox type for the toggle switch
    'label' => __( 'Google Tag Manager In Body', 'yourseobook' ),
    'section' => 'yourseobook_google_stack_scripts_sections'
  ),
));

$wp_customize->add_setting( 'yourseobook_google_stack_scripts_enable_ga_api',
  array(
    //'default' => $this->defaults['search_menu_icon'],
    'transport' => 'refresh',
    'sanitize_callback' => 'yourseobook_switch_sanitization'
  )
);


$wp_customize->add_control( new Yourseobook_Toggle_Switch_Custom_control( $wp_customize, 'yourseobook_google_stack_scripts_enable_ga_api',
  array(
   // 'type' => 'checkbox', // Use checkbox type for the toggle switch
    'label' => __( 'Enable GA API', 'yourseobook' ),
    'section' => 'yourseobook_google_stack_scripts_sections',
    //'description' => 'Install your Google tag. You can use a website builder or content management system (CMS) to finish setup automatically, or install your tag manually. To ensure you get accurate measurement, make sure your tag is installed on every page of your site.'
  ),
));
$wp_customize->add_setting( 'yourseobook_google_tag_manager_api_script',
  array(
    //'default' => $this->defaults['search_menu_icon'],
    'transport' => 'refresh',
    'sanitize_callback' => 'yourseobook_switch_sanitization'
  )
);


$wp_customize->add_control( new Yourseobook_Toggle_Switch_Custom_control( $wp_customize, 'yourseobook_google_tag_manager_api_script',
  array(
   // 'type' => 'checkbox', // Use checkbox type for the toggle switch
    'label' => __( 'Enable Google Tag Manager', 'yourseobook' ),
    'section' => 'yourseobook_google_stack_scripts_sections',
    //'description' => 'Install your Google tag. You can use a website builder or content management system (CMS) to finish setup automatically, or install your tag manually. To ensure you get accurate measurement, make sure your tag is installed on every page of your site.'
  ),
));


$wp_customize->add_setting( 'yourseobook_google_stack_scripts_code_text',
  array(

    'transport' => 'refresh', //'postMessage',
    'sanitize_callback' => 'wp_filter_nohtml_kses'
  )
);
$wp_customize->add_control( 'yourseobook_google_stack_scripts_code_text',
  array(
    'label' => __( 'Install your Google tag', 'yourseobook' ),
    'type' => 'textrea',
    'section' => 'yourseobook_google_stack_scripts_sections'
  )
);


$wp_customize->add_setting( 'yourseobook_google_tag_manager_script_code_text',
  array(

    'transport' => 'refresh', //'postMessage',
    'sanitize_callback' => 'wp_filter_nohtml_kses'
  )
);
$wp_customize->add_control( 'yourseobook_google_tag_manager_script_code_text',
  array(
    'label' => __( 'Install Google Tag Manager', 'yourseobook' ),
    'type' => 'textrea',
    'section' => 'yourseobook_google_stack_scripts_sections'
  )
);

