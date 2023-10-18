<?php

$wp_customize->add_setting( 'yourseobook_header_main_navigation_display_control',
  array(
    //'default' => $this->defaults['search_menu_icon'],
    'transport' => 'refresh',
    'sanitize_callback' => 'yourseobook_switch_sanitization'
  )
);


$wp_customize->add_control( new Yourseobook_Toggle_Switch_Custom_control( $wp_customize, 'yourseobook_header_main_navigation_display_control',
  array(
    'label' => __( 'Header Navigation Menu', 'yourseobook' ),
    'section' => 'yourseobook_main_header_navigation_sections'
  )
) );

$wp_customize->selective_refresh->add_partial( 'yourseobook_header_main_navigation_display_control', array(
    'selector' => '#thm', // You can also select a css class
) );

// Start Settings to Show Hide Brand Image Text
$wp_customize->add_setting( 'yourseobook_header_main_navigation_brand_logo_text_display_control',
  array(
    //'default' => $this->defaults['search_menu_icon'],
    'transport' => 'refresh',
    'sanitize_callback' => 'yourseobook_switch_sanitization'
  )
);
$wp_customize->add_control( new Yourseobook_Toggle_Switch_Custom_control( $wp_customize, 'yourseobook_header_main_navigation_brand_logo_text_display_control',
  array(
    'label' => __( 'Display Brand Logo Text', 'yourseobook' ),
    'section' => 'yourseobook_main_header_navigation_brand_logo_sections',
    'description' => esc_html__( 'Show or Hide The Main Brand Logo Text on the Main Header Navigation Menu', 'yourseobook' )
  )
) );
$wp_customize->selective_refresh->add_partial( 'yourseobook_header_main_navigation_brand_logo_text_display_control', array(
    'selector' => '.brandlogotext', // You can also select a css class
) );



$wp_customize->add_setting( 'yourseobook_header_main_navigation_brand_logo_text_control',
  array(

    'transport' => 'refresh', //'postMessage',
    'sanitize_callback' => 'wp_filter_nohtml_kses'
  )
);
$wp_customize->add_control( 'yourseobook_header_main_navigation_brand_logo_text_control',
  array(
    'label' => __( 'Header Brand Logo Text Settings', 'yourseobooks' ),
    'type' => 'text',
    'section' => 'yourseobook_main_header_navigation_brand_logo_sections'
  )
);
$wp_customize->selective_refresh->add_partial( 'yourseobook_header_main_navigation_brand_logo_text_display_control', array(
    'selector' => '.brandlogotextfield', // You can also select a css class
) );
// End Settings to Show Hide Brand Image Text



// Logo Image Control
$wp_customize->add_setting( 'yourseobook_header_logo_default_image',
  array(
    //'default' => $this->defaults['sample_default_image'],
    'transport' => 'refresh',
    'sanitize_callback' => 'esc_url_raw'
  )
);
$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'yourseobook_header_logo_default_image',
  array(
    'label' => __( 'Brand Logo Image Control', 'yourseobook' ),
    'description' => esc_html__( 'Brand Logo Image Control', 'yourseobook' ),
    'section' => 'yourseobook_main_header_navigation_brand_logo_sections',
    'button_labels' => array(
      'select' => __( 'Select Image', 'yourseobook' ),
      'change' => __( 'Change Image', 'yourseobook' ),
      'remove' => __( 'Remove', 'yourseobook' ),
      'default' => __( 'Default', 'yourseobook' ),
      'placeholder' => __( 'No image selected', 'yourseobook' ),
      'frame_title' => __( 'Select Image', 'yourseobook' ),
      'frame_button' => __( 'Choose Image', 'yourseobook' ),
    )
  )
) );

// Brand Logo Image Header Menu Navigation Settings

$wp_customize->add_setting( 'yourseobook_header_main_navigation_brand_logo_display_control',
  array(
    //'default' => $this->defaults['search_menu_icon'],
    'transport' => 'refresh',
    'sanitize_callback' => 'yourseobook_switch_sanitization'
  )
);

$wp_customize->add_control( new Yourseobook_Toggle_Switch_Custom_control( $wp_customize, 'yourseobook_header_main_navigation_brand_logo_display_control',
  array(
    'label' => __( 'Logo Section Settings', 'yourseobook' ),
    'section' => 'yourseobook_main_header_navigation_brand_logo_sections',
    'description' => esc_html__( 'Show or Hide The Main Brand Logo Section on the Main Header Navigation Menu', 'yourseobook' )
  )
) );

$wp_customize->selective_refresh->add_partial( 'yourseobook_header_main_navigation_brand_logo_display_control', array(
    'selector' => '.brandlogosection', // You can also select a css class
) );

// Start Settings to Show Hide Brand Image Logo
$wp_customize->add_setting( 'yourseobook_header_main_navigation_brand_logo_image_display_control',
  array(
    //'default' => $this->defaults['search_menu_icon'],
    'transport' => 'refresh',
    'sanitize_callback' => 'yourseobook_switch_sanitization'
  )
);


$wp_customize->add_control( new Yourseobook_Toggle_Switch_Custom_control( $wp_customize, 'yourseobook_header_main_navigation_brand_logo_image_display_control',
  array(
    'label' => __( 'Display Brand Logo Image', 'yourseobook' ),
    'section' => 'yourseobook_main_header_navigation_brand_logo_sections',
    'description' => esc_html__( 'Show or Hide The Main Brand Logo Image on the Main Header Navigation Menu', 'yourseobook' )
  )
) );


// End Settings to Show Hide Brand Image Logo

$wp_customize->add_setting( 'yourseobook_header_logo_default_image_width',
  array(
    'default' => '40px',
    'transport' => 'refresh',
    'sanitize_callback' => 'wp_filter_nohtml_kses'
  )
);
$wp_customize->add_control( 'yourseobook_header_logo_default_image_width',
  array(
     'label' => __( 'Logo Image Width (px)', 'yourseobook' ),
     'section' => 'yourseobook_main_header_navigation_brand_logo_sections',
    'type' => 'number',
    'input_attrs' => array(
      'min' => '30px',
      'max' => '60px',
      'step' => '1px',
    ),
  )
 );
$wp_customize->selective_refresh->add_partial( 'yourseobook_header_logo_default_image_width', array(
    'selector' => '#brandlogo', // You can also select a css class
) );
$wp_customize->add_setting( 'yourseobook_header_logo_default_image_height',
  array(
    'default' => '40px',
    'transport' => 'refresh',
    'sanitize_callback' => 'wp_filter_nohtml_kses'
  )
);
$wp_customize->add_control( 'yourseobook_header_logo_default_image_height',
  array(
     'label' => __( 'Logo Image Height (px)', 'yourseobook' ),
     'section' => 'yourseobook_main_header_navigation_brand_logo_sections',
'type' => 'number',
    'input_attrs' => array(
      'min' => '30px',
      'max' => '60px',
      'step' => '1px',
    ),
  )
 );
// Start Main Header Navigation Menu Background Color Settings

$wp_customize->add_setting( 'yourseobook_header_main_navigation_master_menu_style_settings_color', array(
    // Add your setting arguments here
    'transport' => 'refresh',
    'sanitize_callback' => 'yourseobook_switch_sanitization'
) );

$wp_customize->add_control( new Yourseobook_Tabbed_Custom_Control( $wp_customize, 'yourseobook_header_main_navigation_master_menu_style_settings_color', array(
    'label' => __( 'Header Menu Style Settings', 'yourseobook' ),
    'section' => 'yourseobook_main_header_navigation_sections',
) ) );


//  WPColorPicker Alpha Color Picker Control
$wp_customize->add_setting( 'yourseobook_header_main_navigation_master_menu_background_color',
  array(
   // 'default' => 'rgb(0 0 0)',
    'transport' => 'refresh',
    'sanitize_callback' => 'yourseobook_hex_rgba_sanitization',
   // 'priority' => '2'
  )
);
$wp_customize->add_control( new Yourseobook_Alpha_Color_Control( $wp_customize, 'yourseobook_header_main_navigation_master_menu_background_color',
  array(
    // 'label' => __( 'Master Header Navigation Menu Background', 'yourseobook' ),
   // 'description' => esc_html__( 'Master Header Navigation Menu Background Settings with Color Picker. The Default Background Color is Black #000000', 'yourseobook' ),
   // 'type' => 'color',
    // 'section' => 'yourseobook_main_header_navigation_sections',
    /*'input_attrs' => array(
      'palette' => array(
        '#000000',
        '#abb8c3',
        '#ffffff',
        '#f78da7',
        '#cf2e2e',
        '#ff6900',
        '#fcb900',
        '#7bdcb5',
        '#00d084',
        '#8ed1fc',
        '#0693e3',
        '#9b51e0',
      )
    ),*/
  )
) );

// End Main Header Navigation Menu Background Color Settings

// Start Main Header Navigation Menu Margin and Padding Settings
$wp_customize->add_setting( 'yourseobook_header_main_navigation_master_menu_width',
  array(
  // 'default' => '100%',
    'transport' => 'refresh',
    'sanitize_callback' => 'wp_filter_nohtml_kses'
  )
);
// $wp_customize->add_control( 'yourseobook_header_main_navigation_brand_logo_text_control',
$wp_customize->add_control( 'yourseobook_header_main_navigation_master_menu_width',
  array(
    // 'label' => __( 'Header Navigation Menu Width', 'yourseobook' ),
   //  'section' => 'yourseobook_main_header_navigation_sections',
    /*'input_attrs' => array(
      'min' => '100%',
      'max' => '100%',
      'step' => 1,
    ),*/
  )
 );
// End Main Header Navigation Menu Margin and Padding Settings

// Start Main Header Navigation Menu Height Settings
$wp_customize->add_setting( 'yourseobook_header_main_navigation_master_menu_height',
array(
'default' => '40px',
'transport' => 'refresh',
'sanitize_callback' => 'wp_filter_nohtml_kses'
)
);
$wp_customize->add_control( 'yourseobook_header_main_navigation_master_menu_height',
array(
// 'label' => __( 'Header Navigation Menu Height', 'yourseobook' ),
/* 'section' => 'yourseobook_main_header_navigation_sections',
'input_attrs' => array(
'min' => '100%',
'max' => '100%',
'step' => 1,
),*/
)
);
// End Main Header Navigation Menu Height Settings


// Start Main Header Navigation Menu Margin Settings
$wp_customize->add_setting( 'yourseobook_header_main_navigation_master_menu_margin',
array(
'default' => '0px',
'transport' => 'refresh',
'sanitize_callback' => 'wp_filter_nohtml_kses'
)
);
$wp_customize->add_control( 'yourseobook_header_main_navigation_master_menu_margin',
array(
'label' => __( 'Header Navigation Menu Width', 'yourseobook' ),
'section' => 'yourseobook_main_header_navigation_sections',
'input_attrs' => array(
'min' => 0,
'max' => 120,
'step' => 1,
),
)
);



//

// Start Main Header Navigation Menu Padding Settings
$wp_customize->add_setting( 'yourseobook_header_main_navigation_master_menu_padding',
array(
'default' => '0px',
'transport' => 'refresh',
'sanitize_callback' => 'wp_filter_nohtml_kses'
)
);
$wp_customize->add_control( 'yourseobook_header_main_navigation_master_menu_padding',
array(
'label' => __( 'Header Navigation Menu Padding', 'yourseobook' ),
'section' => 'yourseobook_main_header_navigation_sections',
'input_attrs' => array(
'min' => 0,
'max' => 120,
'step' => 1,
),
)
);
// End Main Header Navigation Menu Padding Settings