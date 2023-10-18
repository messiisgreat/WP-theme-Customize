<?php



/*


    $header_navigation_menu_search_bar_background_color = get_theme_mod( 'yourseobook_header_navigation_menu_search_bar_background_color' );
    $header_navigation_menu_search_bar_font_size = get_theme_mod( 'yourseobook_header_navigation_menu_search_bar_font_size' );
    $header_navigation_menu_search_bar_width = get_theme_mod( 'yourseobook_header_navigation_menu_search_bar_width' );
    $header_navigation_menu_search_bar_width = get_theme_mod( 'yourseobook_header_navigation_menu_search_bar_height; );
    $header_navigation_menu_search_bar_padding = get_theme_mod( 'yourseobook_header_navigation_menu_search_bar_padding' );
    $header_navigation_menu_search_bar_margin = get_theme_mod( 'yourseobook_header_navigation_menu_search_bar_margin' );
    $header_navigation_menu_search_bar_border_radius = get_theme_mod( 'yourseobook_header_navigation_menu_search_bar_border_radius' );
    $header_navigation_menu_search_bar_border_size = get_theme_mod( 'yourseobook_header_navigation_menu_search_bar_border_size' );
    $header_navigation_menu_search_bar_border_type = get_theme_mod( 'yourseobook_header_navigation_menu_search_bar_border_type' );
    $header_navigation_menu_search_bar_border_color = get_theme_mod( 'yourseobook_header_navigation_menu_search_bar_border_color' );
    $header_navigation_menu_search_bar_box_shadow = get_theme_mod( 'yourseobook_header_navigation_menu_search_bar_box_shadow' );
    $header_navigation_menu_search_bar_text_color = get_theme_mod( 'yourseobook_header_navigation_menu_search_bar_text_color' );
   $wp_customize->add_control( 'yourseobook_header_main_navigation_master_menu_width',

*/

// Start Master Header Navigation Menu Search Bar
// yourseobook_header_main_navigation_master_menu_search_bar_display_control
$wp_customize->add_setting( 'yourseobook_header_main_navigation_master_menu_search_bar_master_display_control',
  array(
    //'default' => $this->defaults['search_menu_icon'],
    'transport' => 'refresh',
    'sanitize_callback' => 'yourseobook_switch_sanitization'
  )
);


$wp_customize->add_control( new Yourseobook_Toggle_Switch_Custom_control( $wp_customize, 'yourseobook_header_main_navigation_master_menu_search_bar_master_display_control',
  array(
    'label' => __( 'Main Search Section Settings', 'yourseobook' ),
    'section' => 'yourseobook_header_navigation_menu_search_bar_sections'
  )
) );
$wp_customize->selective_refresh->add_partial( 'yourseobook_header_main_navigation_master_menu_search_bar_master_display_control', array(
    'selector' => '#search-bar-master', // You can also select a css class
) );
// Start Master Header Navigation Menu Search Bar
// yourseobook_header_main_navigation_master_menu_search_bar_display_control
$wp_customize->add_setting( 'yourseobook_header_main_navigation_master_menu_search_bar_display_control',
  array(
    //'default' => $this->defaults['search_menu_icon'],
    'transport' => 'refresh',
    'sanitize_callback' => 'yourseobook_switch_sanitization'
  )
);


$wp_customize->add_control( new Yourseobook_Toggle_Switch_Custom_control( $wp_customize, 'yourseobook_header_main_navigation_master_menu_search_bar_display_control',
  array(
    'label' => __( 'Header Nav Search Bar Settings', 'yourseobook' ),
    'section' => 'yourseobook_header_navigation_menu_search_bar_sections'
  )
) );
// End Master Header Navigation Menu Search Bar

// Change the Default WordPress Search Functionality with the Advanced Google Programmable Search Engine
// yourseobook_header_main_navigation_master_menu_search_bar_google_search_engine_display_control

 $wp_customize->add_setting( 'yourseobook_header_main_navigation_master_menu_search_bar_google_search_engine_display_control',
   array(
     //'default' => $this->defaults['search_menu_icon'],
     'transport' => 'refresh',
     'sanitize_callback' => 'yourseobook_switch_sanitization'
   )
 );


 $wp_customize->add_control( new Yourseobook_Toggle_Switch_Custom_control( $wp_customize, 'yourseobook_header_main_navigation_master_menu_search_bar_google_search_engine_display_control',
   array(
     'label' => __( '🔎 Programmable Search Engine', 'yourseobook' ),
     'section' => 'yourseobook_header_navigation_menu_search_bar_sections'
   )
 ) );


// Yourseobook Header CTA Button Custom Class Control
// Start Main CTA Buttons PHP Class

$wp_customize->add_setting( 'yourseobook_header_navigation_menu_search_bar_display_settings', array(
    // Add your setting arguments here
    'transport' => 'refresh',
    'sanitize_callback' => 'yourseobook_switch_sanitization'
) );

$wp_customize->add_control( new Yourseobook_Header_Navigation_Menu_Search_Bar_Control( $wp_customize, 'yourseobook_header_navigation_menu_search_bar_display_settings', array(
    'label' => __( 'Header CTA Buttons Section Settings', 'yourseobook' ),
    'section' => 'yourseobook_header_navigation_menu_search_bar_sections',
) ) );

// header-cta-button


// width

		$wp_customize->add_setting( 'yourseobook_header_navigation_menu_search_bar_width',
			array(
				'default' => 200,
				'transport' => 'refresh',
				'sanitize_callback' => 'wp_filter_nohtml_kses'
			)
		);
/*		$wp_customize->add_control( new Yourseobook_Slider_Custom_Control( $wp_customize, 'yourseobook_header_navigation_menu_search_bar_width',
			array(
			 'label' => __( 'Header Search Bar Width(px)', 'yourseobook' ),
			 'section' => 'yourseobook_header_navigation_menu_search_bar_sections',
				 'input_attrs' => array(
					'min' => 200,
					'max' => 300,
					'step' => 1,
				),
			)
		) );

*/
// Background


// Start Header CTA Button Background Color

$wp_customize->add_setting( 'yourseobook_header_navigation_menu_search_bar_background_color',
array(
'default' => 'rgba(255,255,255,1)',
'transport' => 'refresh',
'sanitize_callback' => 'yourseobook_hex_rgba_sanitization'
));
/*
$wp_customize->add_control( new Yourseobook_Alpha_Color_Control( $wp_customize, 'yourseobook_header_navigation_menu_search_bar_background_color',
	array(
		'label' => __( 'Header CTA Button Background Color', 'yourseobook' ),
		//'description' => esc_html__( 'Sample color control with Alpha channel', 'yourseobook' ),
		'section' => 'yourseobook_main_header_navigation_cta_button_sections',
		'type' => 'color',
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
*/
// End Header CTA Button Background Color




                    


		$wp_customize->add_setting( 'yourseobook_header_navigation_menu_search_bar_font_size',
			array(
				'default' => 14,
				'transport' => 'refresh',
				'sanitize_callback' => 'wp_filter_nohtml_kses'
			)
		);
		$wp_customize->add_control( new Yourseobook_Slider_Custom_Control( $wp_customize, 'yourseobook_header_navigation_menu_search_bar_font_size',
			array(
			//	'label' => __( 'Header CTA Button Font Size(px)', 'yourseobook' ),
			//	'section' => 'yourseobook_main_header_navigation_cta_button_sections',
				// 'input_attrs' => array(
				//	'min' => 0,
				//	'max' => 20,
				//	'step' => 1,
				//),
			)
		) );



                    


		$wp_customize->add_setting( 'yourseobook_header_navigation_menu_search_bar_border_size',
			array(
				'default' => 0,
				'transport' => 'refresh',
				'sanitize_callback' => 'wp_filter_nohtml_kses'
			)
		);
		$wp_customize->add_control( new Yourseobook_Slider_Custom_Control( $wp_customize, 'yourseobook_header_navigation_menu_search_bar_border_size',
			array(
			//	'label' => __( 'Header CTA Button Font Size(px)', 'yourseobook' ),
			//	'section' => 'yourseobook_main_header_navigation_cta_button_sections',
				// 'input_attrs' => array(
				//	'min' => 0,
				//	'max' => 20,
				//	'step' => 1,
				//),
			)
		) );

                    


		$wp_customize->add_setting( 'yourseobook_header_navigation_menu_search_bar_border_radius',
			array(
				'default' => 0,
				'transport' => 'refresh',
				'sanitize_callback' => 'wp_filter_nohtml_kses'
			)
		);
		$wp_customize->add_control( new Yourseobook_Slider_Custom_Control( $wp_customize, 'yourseobook_header_navigation_menu_search_bar_border_radius',
			array(
			//	'label' => __( 'Header CTA Button Font Size(px)', 'yourseobook' ),
			//	'section' => 'yourseobook_main_header_navigation_cta_button_sections',
				// 'input_attrs' => array(
				//	'min' => 0,
				//	'max' => 20,
				//	'step' => 1,
				//),
			)
		) );



// Header Navigation Menu Search Box Seettings

$wp_customize->add_setting( 'yourseobook_header_navigation_menu_search_bar_border_color',
                    array(
                                      //   'default' => $this->defaults['sample_dropdown_select2_control_single'],
                                        'transport' => 'refresh',
                                        'sanitize_callback' => 'yourseobook_text_sanitization'
                    )
);

// Start Header CTA Button Background Color

$wp_customize->add_setting( 'yourseobook_header_navigation_menu_search_bar_border_color',
array(
'default' => 'rgba(255,255,255,1)',
'transport' => 'refresh',
'sanitize_callback' => 'yourseobook_hex_rgba_sanitization'
));
/*
$wp_customize->add_control( new Yourseobook_Alpha_Color_Control( $wp_customize, 'yourseobook_header_navigation_menu_search_bar_background_color',
	array(
		'label' => __( 'Header CTA Button Background Color', 'yourseobook' ),
		//'description' => esc_html__( 'Sample color control with Alpha channel', 'yourseobook' ),
		'section' => 'yourseobook_main_header_navigation_cta_button_sections',
		'type' => 'color',
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
*/
// End Header CTA Button Background Color






$wp_customize->add_setting( 'yourseobook_header_navigation_menu_search_bar_margin_top',
                    array(
                                        'default' => 0,
                                        'transport' => 'refresh',
                                        'sanitize_callback' => 'wp_filter_nohtml_kses'
                    )
);
$wp_customize->add_control( new Yourseobook_Slider_Custom_Control( $wp_customize, 'yourseobook_header_navigation_menu_search_bar_margin_top',
                    array(
                    //	'label' => __( 'Header CTA Button Font Size(px)', 'yourseobook' ),
                    //	'section' => 'yourseobook_main_header_navigation_cta_button_sections',
                                        // 'input_attrs' => array(
                                        //	'min' => 0,
                                        //	'max' => 20,
                                        //	'step' => 1,
                                        //),
                    )
) );


$wp_customize->add_setting( 'yourseobook_header_navigation_menu_search_bar_margin_right',
                    array(
                                        'default' => 0,
                                        'transport' => 'refresh',
                                        'sanitize_callback' => 'wp_filter_nohtml_kses'
                    )
);
$wp_customize->add_control( new Yourseobook_Slider_Custom_Control( $wp_customize, 'yourseobook_header_navigation_menu_search_bar_margin_right',
                    array(
                    //	'label' => __( 'Header CTA Button Font Size(px)', 'yourseobook' ),
                    //	'section' => 'yourseobook_main_header_navigation_cta_button_sections',
                                        // 'input_attrs' => array(
                                        //	'min' => 0,
                                        //	'max' => 20,
                                        //	'step' => 1,
                                        //),
                    )
) );


$wp_customize->add_setting( 'yourseobook_header_navigation_menu_search_bar_margin_bottom',
                    array(
                                        'default' => 0,
                                        'transport' => 'refresh',
                                        'sanitize_callback' => 'wp_filter_nohtml_kses'
                    )
);
$wp_customize->add_control( new Yourseobook_Slider_Custom_Control( $wp_customize, 'yourseobook_header_navigation_menu_search_bar_margin_bottom',
                    array(
                    //	'label' => __( 'Header CTA Button Font Size(px)', 'yourseobook' ),
                    //	'section' => 'yourseobook_main_header_navigation_cta_button_sections',
                                        // 'input_attrs' => array(
                                        //	'min' => 0,
                                        //	'max' => 20,
                                        //	'step' => 1,
                                        //),
                    )
) );


$wp_customize->add_setting( 'yourseobook_header_navigation_menu_search_bar_margin_left',
                    array(
                                        'default' => 0,
                                        'transport' => 'refresh',
                                        'sanitize_callback' => 'wp_filter_nohtml_kses'
                    )
);
$wp_customize->add_control( new Yourseobook_Slider_Custom_Control( $wp_customize, 'yourseobook_header_navigation_menu_search_bar_margin_left',
                    array(
                    //	'label' => __( 'Header CTA Button Font Size(px)', 'yourseobook' ),
                    //	'section' => 'yourseobook_main_header_navigation_cta_button_sections',
                                        // 'input_attrs' => array(
                                        //	'min' => 0,
                                        //	'max' => 20,
                                        //	'step' => 1,
                                        //),
                    )
) );


$wp_customize->add_setting( 'yourseobook_header_navigation_menu_search_bar_padding_top',
                    array(
                                        'default' => 0,
                                        'transport' => 'refresh',
                                        'sanitize_callback' => 'wp_filter_nohtml_kses'
                    )
);
$wp_customize->add_control( new Yourseobook_Slider_Custom_Control( $wp_customize, 'yourseobook_header_navigation_menu_search_bar_padding_top',
                    array(
                    //	'label' => __( 'Header CTA Button Font Size(px)', 'yourseobook' ),
                    //	'section' => 'yourseobook_main_header_navigation_cta_button_sections',
                                        // 'input_attrs' => array(
                                        //	'min' => 0,
                                        //	'max' => 20,
                                        //	'step' => 1,
                                        //),
                    )
) );




$wp_customize->add_setting( 'yourseobook_header_navigation_menu_search_bar_padding_right',
                    array(
                                        'default' => 0,
                                        'transport' => 'refresh',
                                        'sanitize_callback' => 'wp_filter_nohtml_kses'
                    )
);
$wp_customize->add_control( new Yourseobook_Slider_Custom_Control( $wp_customize, 'yourseobook_header_navigation_menu_search_bar_padding_right',
                    array(
                    //	'label' => __( 'Header CTA Button Font Size(px)', 'yourseobook' ),
                    //	'section' => 'yourseobook_main_header_navigation_cta_button_sections',
                                        // 'input_attrs' => array(
                                        //	'min' => 0,
                                        //	'max' => 20,
                                        //	'step' => 1,
                                        //),
                    )
) );




$wp_customize->add_setting( 'yourseobook_header_navigation_menu_search_bar_padding_bottom',
                    array(
                                        'default' => 0,
                                        'transport' => 'refresh',
                                        'sanitize_callback' => 'wp_filter_nohtml_kses'
                    )
);
$wp_customize->add_control( new Yourseobook_Slider_Custom_Control( $wp_customize, 'yourseobook_header_navigation_menu_search_bar_padding_bottom',
                    array(
                    //	'label' => __( 'Header CTA Button Font Size(px)', 'yourseobook' ),
                    //	'section' => 'yourseobook_main_header_navigation_cta_button_sections',
                                        // 'input_attrs' => array(
                                        //	'min' => 0,
                                        //	'max' => 20,
                                        //	'step' => 1,
                                        //),
                    )
) );




$wp_customize->add_setting( 'yourseobook_header_navigation_menu_search_bar_padding_left',
                    array(
                                        'default' => 0,
                                        'transport' => 'refresh',
                                        'sanitize_callback' => 'wp_filter_nohtml_kses'
                    )
);
$wp_customize->add_control( new Yourseobook_Slider_Custom_Control( $wp_customize, 'yourseobook_header_navigation_menu_search_bar_padding_left',
                    array(
                    //	'label' => __( 'Header CTA Button Font Size(px)', 'yourseobook' ),
                    //	'section' => 'yourseobook_main_header_navigation_cta_button_sections',
                                        // 'input_attrs' => array(
                                        //	'min' => 0,
                                        //	'max' => 20,
                                        //	'step' => 1,
                                        //),
                    )
) );


// yourseobook_header_navigation_menu_search_bar_border_type


		$wp_customize->add_setting( 'yourseobook_header_navigation_menu_search_bar_border_type',
			array(
				// 'default' => $this->defaults['sample_dropdown_select2_control_single'],
				'transport' => 'refresh',
				'sanitize_callback' => 'yourseobook_text_sanitization'
			)
		);
		$wp_customize->add_control( new yourseobook_Dropdown_Select2_Custom_Control( $wp_customize, 'yourseobook_header_navigation_menu_search_bar_border_type',
/*			array(
				
                                                                                 'label' => __( 'Footer Links Text Decoration', 'yourseobook' ),
				'section' => 'yourseobook_main_footer_navigation_menus_sections',
				'input_attrs' => array(
					'placeholder' => __( 'Please select option...', 'yourseobook' ),
					'multiselect' => false,
				),
				'choices' => array(
					'none' => __( 'none', 'yourseobook' ),
					'underline' => __( 'underline', 'yourseobook' ),
					'overline red' => __( 'overline red', 'yourseobook' ),
					'inherit' => __( 'inherit', 'yourseobook' ),
					'initial' => __( 'initial', 'yourseobook' ),
					'revert' => __( 'revert', 'yourseobook' ),
					'revert-layer' => __( 'revert-layer', 'yourseobook' ),
					'unset' => __( 'unset', 'yourseobook' ),
				
				)
			)
*/
		) );