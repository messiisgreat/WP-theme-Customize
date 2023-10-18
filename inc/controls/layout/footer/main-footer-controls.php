<?php

$wp_customize->add_setting( 'yourseobook_footer_sections_settings_controller',
  array(
    //'default' => $this->defaults['search_menu_icon'],
    'transport' => 'refresh',
    'sanitize_callback' => 'yourseobook_switch_sanitization'
  )
);

$wp_customize->add_control( new Yourseobook_Main_Footer_Sections_Control( $wp_customize, 'yourseobook_footer_sections_settings_controller',
  array(
    'label' => __( 'Main Footer Settings', 'yourseobook' ),
    'section' => 'yourseobook_main_footer_section_settings_sections'
  )
) );

$wp_customize->selective_refresh->add_partial( 'yourseobook_footer_sections_settings_controller', array(
    'selector' => '#main-footer', // You can also select a css class
) );






//  WPColorPicker Alpha Color Picker Control
$wp_customize->add_setting( 'yourseobook_footer_background_color',
  array(
   'default' => $this->defaults['sample_wpcolorpicker_alpha_color'],
    'transport' => 'refresh',
    'sanitize_callback' => 'yourseobook_hex_rgba_sanitization',
   // 'priority' => '2'
  )
);
$wp_customize->add_control( new Yourseobook_Alpha_Color_Control( $wp_customize, 'yourseobook_footer_background_color',
  array(
//    'label' => __( 'Footer Background Color', 'yourseobook' ),
   // 'description' => esc_html__( 'Master Header Navigation Menu Background Settings with Color Picker. The Default Background Color is Black #000000', 'yourseobook' ),
   'type' => 'color',
   // 'section' => 'yourseobook_main_footer_section_settings_sections',
'show_opacity' => true,
'input_attrs' => array(
                    'resetalpha' => false,
                    'palette' => array(
                                        'rgba(99,78,150,1)',
                                        'rgba(67,78,150,1)',
                                        'rgba(34,78,150,.7)',
                                        'rgba(3,78,150,1)',
                                        'rgba(7,110,230,.9)',
                                        'rgba(234,78,150,1)',
                                        'rgba(99,78,150,.5)',
                                        'rgba(190,120,120,.5)',
                    ),
),
  )
) );

//  WPColorPicker Alpha Color Picker Control
$wp_customize->add_setting( 'yourseobook_main_footer_text_color',
  array(
   'default' => $this->defaults['sample_wpcolorpicker_alpha_color'],
    'transport' => 'refresh',
    'sanitize_callback' => 'yourseobook_hex_rgba_sanitization',
   // 'priority' => '2'
  )
);
$wp_customize->add_control( new Yourseobook_Alpha_Color_Control( $wp_customize, 'yourseobook_main_footer_text_color',
  array(
 //   'label' => __( 'Footer Text Color', 'yourseobook' ),
   // 'description' => esc_html__( 'Master Header Navigation Menu Background Settings with Color Picker. The Default Background Color is Black #000000', 'yourseobook' ),
   'type' => 'color',
   // 'section' => 'yourseobook_main_footer_section_settings_sections',
'show_opacity' => true,
'input_attrs' => array(
                    'resetalpha' => true,
                    'palette' => array(
                                        'rgba(99,78,150,1)',
                                        'rgba(67,78,150,1)',
                                        'rgba(34,78,150,.7)',
                                        'rgba(3,78,150,1)',
                                        'rgba(7,110,230,.9)',
                                        'rgba(234,78,150,1)',
                                        'rgba(99,78,150,.5)',
                                        'rgba(190,120,120,.5)',
                    ),
),
  )
) );

//  WPColorPicker Alpha Color Picker Control
$wp_customize->add_setting( 'yourseobook_main_footer_links_text_color',
  array(
   // 'default' => $this->defaults['sample_wpcolorpicker_alpha_color'],
    'transport' => 'refresh',
    'sanitize_callback' => 'yourseobook_hex_rgba_sanitization',
   // 'priority' => '2'
  )
);
$wp_customize->add_control( new Yourseobook_Alpha_Color_Control( $wp_customize, 'yourseobook_main_footer_links_text_color',
  array(
//    'label' => __( 'Footer Links Text Color', 'yourseobook' ),
   // 'description' => esc_html__( 'Master Header Navigation Menu Background Settings with Color Picker. The Default Background Color is Black #000000', 'yourseobook' ),
   'type' => 'color',
 //   'section' => 'yourseobook_main_footer_section_settings_sections',
'show_opacity' => true,
'input_attrs' => array(
                    'resetalpha' => true,
                    'palette' => array(
                                        'rgba(99,78,150,1)',
                                        'rgba(67,78,150,1)',
                                        'rgba(34,78,150,.7)',
                                        'rgba(3,78,150,1)',
                                        'rgba(7,110,230,.9)',
                                        'rgba(234,78,150,1)',
                                        'rgba(99,78,150,.5)',
                                        'rgba(190,120,120,.5)',
                    ),
),
  )
) );




//  WPColorPicker Alpha Color Picker Control
$wp_customize->add_setting( 'yourseobook_main_footer_widgets_title_font_text_color',
  array(
   'default' => $this->defaults['sample_wpcolorpicker_alpha_color'],
    'transport' => 'refresh',
    'sanitize_callback' => 'yourseobook_hex_rgba_sanitization',
   // 'priority' => '2'
  )
);
$wp_customize->add_control( new Yourseobook_Alpha_Color_Control( $wp_customize, 'yourseobook_main_footer_widgets_title_font_text_color',
  array(
   // 'label' => __( 'Footer Widgets Title Text Color', 'yourseobook' ),
   // 'description' => esc_html__( 'Master Header Navigation Menu Background Settings with Color Picker. The Default Background Color is Black #000000', 'yourseobook' ),
   'type' => 'color',
  //  'section' => 'yourseobook_main_footer_section_settings_sections',
'show_opacity' => true,
'input_attrs' => array(
                    'resetalpha' => true,
                    'palette' => array(
                                        'rgba(99,78,150,1)',
                                        'rgba(67,78,150,1)',
                                        'rgba(34,78,150,.7)',
                                        'rgba(3,78,150,1)',
                                        'rgba(7,110,230,.9)',
                                        'rgba(234,78,150,1)',
                                        'rgba(99,78,150,.5)',
                                        'rgba(190,120,120,.5)',
                    ),
),
  )
) );



// Main Footer Margin and Padding Settings


$wp_customize->add_setting( 'yourseobook_main_footer_margin_top',
                    array(
                                        'default' => '0px',
                                        'transport' => 'refresh',
                                        'sanitize_callback' => 'wp_filter_nohtml_kses'
                    )
);
$wp_customize->add_control( new Yourseobook_Slider_Custom_Control( $wp_customize, 'yourseobook_main_footer_margin_top',
                    array(
                  // 'label' => __( 'Main Footer Margin Top (px)', 'yourseobook' ),
                  // 'section' => 'yourseobook_main_footer_navigation_menus_sections',
                                        'input_attrs' => array(
                                        'min' => 0,
                                        'max' => 120,
                                        'step' => 1,
                                        ),
                    )
) );


$wp_customize->add_setting( 'yourseobook_main_footer_margin_right',
                    array(
                                        'default' => '0px',
                                        'transport' => 'refresh',
                                        'sanitize_callback' => 'wp_filter_nohtml_kses'
                    )
);
$wp_customize->add_control( new Yourseobook_Slider_Custom_Control( $wp_customize, 'yourseobook_main_footer_margin_right',
                    array(
                    	//'label' => __( 'Main Footer Margin Right (px)', 'yourseobook' ),
                    	//'section' => 'yourseobook_main_footer_navigation_menus_sections',
                                        'input_attrs' => array(
                                        'min' => 0,
                                        'max' => 120,
                                        'step' => 1,
                                        ),
                    )
) );


$wp_customize->add_setting( 'yourseobook_main_footer_margin_bottom',
                    array(
                                        'default' => '0px',
                                        'transport' => 'refresh',
                                        'sanitize_callback' => 'wp_filter_nohtml_kses'
                    )
);
$wp_customize->add_control( new Yourseobook_Slider_Custom_Control( $wp_customize, 'yourseobook_main_footer_margin_bottom',
                    array(
                    	//'label' => __( 'Main Footer Margin Bottom (px)', 'yourseobook' ),
                    	//'section' => 'yourseobook_main_footer_navigation_menus_sections',
                                        'input_attrs' => array(
                                        	'min' => 0,
                                        	'max' => 120,
                                        	'step' => 1,
                                        ),
                    )
) );


$wp_customize->add_setting( 'yourseobook_main_footer_margin_left',
                    array(
                                        'default' => '0px',
                                        'transport' => 'refresh',
                                        'sanitize_callback' => 'wp_filter_nohtml_kses'
                    )
);
$wp_customize->add_control( new Yourseobook_Slider_Custom_Control( $wp_customize, 'yourseobook_main_footer_margin_left',
                    array(
                    	//'label' => __( 'Main Footer Margin Left (px)', 'yourseobook' ),
                    	//'section' => 'yourseobook_main_footer_navigation_menus_sections',
                                        'input_attrs' => array(
                                        	'min' => 0,
                                        	'max' => 120,
                                        	'step' => 1,
                                        ),
                    )
) );


$wp_customize->add_setting( 'yourseobook_main_footer_padding_top',
                    array(
                                        'default' => '0px',
                                        'transport' => 'refresh',
                                        'sanitize_callback' => 'wp_filter_nohtml_kses'
                    )
);
$wp_customize->add_control( new Yourseobook_Slider_Custom_Control( $wp_customize, 'yourseobook_main_footer_padding_top',
                    array(
                    	//'label' => __( 'Main Footer Padding Top (px)', 'yourseobook' ),
                    	//'section' => 'yourseobook_main_footer_navigation_menus_sections',
                                        'input_attrs' => array(
                                        	'min' => 0,
                                        	'max' => 120,
                                        	'step' => 1,
                                        ),
                    )
) );




$wp_customize->add_setting( 'yourseobook_main_footer_padding_right',
                    array(
                                        'default' => '0px',
                                        'transport' => 'refresh',
                                        'sanitize_callback' => 'wp_filter_nohtml_kses'
                    )
);
$wp_customize->add_control( new Yourseobook_Slider_Custom_Control( $wp_customize, 'yourseobook_main_footer_padding_right',
                    array(
                    	//'label' => __( 'Main Footer Padding Right (px)', 'yourseobook' ),
                    	//'section' => 'yourseobook_main_footer_navigation_menus_sections',
                                        'input_attrs' => array(
                                        	'min' => 0,
                                        	'max' => 120,
                                        	'step' => 1,
                                        ),
                    )
) );




$wp_customize->add_setting( 'yourseobook_main_footer_padding_bottom',
                    array(
                                        'default' => '0px',
                                        'transport' => 'refresh',
                                        'sanitize_callback' => 'wp_filter_nohtml_kses'
                    )
);
$wp_customize->add_control( new Yourseobook_Slider_Custom_Control( $wp_customize, 'yourseobook_main_footer_padding_bottom',
                    array(
                    	//'label' => __( 'Main Footer Padding Bottom (px)', 'yourseobook' ),
                    	//'section' => 'yourseobook_main_footer_navigation_menus_sections',
                                        'input_attrs' => array(
                                        	'min' => 0,
                                        	'max' => 120,
                                        	'step' => 1,
                                        ),
                    )
) );




$wp_customize->add_setting( 'yourseobook_main_footer_padding_left',
                    array(
                                        'default' => '0px',
                                        'transport' => 'refresh',
                                        'sanitize_callback' => 'wp_filter_nohtml_kses'
                    )
);
$wp_customize->add_control( new Yourseobook_Slider_Custom_Control( $wp_customize, 'yourseobook_main_footer_padding_left',
                    array(
                    	//'label' => __( 'Main Footer Padding Left (px)', 'yourseobook' ),
                    	//'section' => 'yourseobook_main_footer_navigation_menus_sections',
                                        'input_attrs' => array(
                                        	'min' => 0,
                                        	'max' => 120,
                                        	'step' => 1,
                                        ),
                    )
) );