<?php


// Start Header CTA Button Display Controller

$wp_customize->add_setting( 'yourseobook_header_cta_button_display_control',
  array(
// header_cta_button_tabs
    'default' => $this->defaults['header_cta_button_tabs'],
    'transport' => 'refresh',
    'sanitize_callback' => 'yourseobook_switch_sanitization'
  )
);

$wp_customize->add_control( new Yourseobook_Toggle_Switch_Custom_control( $wp_customize, 'yourseobook_header_cta_button_display_control',
  array(
    'label' => __( 'Header CTA Button Display Settings', 'yourseobook' ),
    'section' => 'yourseobook_main_header_navigation_cta_button_sections',
  )
) );

$wp_customize->selective_refresh->add_partial( 'yourseobook_header_cta_button_display_control', array(
    'selector' => '.header-cta-button', // You can also select a css class
) );
// End Header CTA Button Display Controller


// Yourseobook Header CTA Button Custom Class Control
// Start Main CTA Buttons PHP Class

$wp_customize->add_setting( 'yourseobook_header_cta_button_display_settings', array(
    // Add your setting arguments here
    'transport' => 'refresh',
    'sanitize_callback' => 'yourseobook_switch_sanitization'
) );

$wp_customize->add_control( new Yourseobook_Header_CTA_Button_Control( $wp_customize, 'yourseobook_header_cta_button_display_settings', array(
    'label' => __( 'Header CTA Buttons Section Settings', 'yourseobook' ),
    'section' => 'yourseobook_main_header_navigation_cta_button_sections',
) ) );

// header-cta-button
// End Main CTA Buttons PHP Class

$wp_customize->add_setting( 'yourseobook_header_cta_button_border_type',
                    array(
                                      //   'default' => $this->defaults['sample_dropdown_select2_control_single'],
                                        'transport' => 'refresh',
                                        'sanitize_callback' => 'yourseobook_text_sanitization'
                    )
);





		$wp_customize->add_setting( 'yourseobook_header_cta_button_width',
			array(
				'default' => 130,
				'transport' => 'refresh',
				'sanitize_callback' => 'wp_filter_nohtml_kses'
			)
		);
		$wp_customize->add_control( new Yourseobook_Slider_Custom_Control( $wp_customize, 'yourseobook_header_cta_button_width',
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




		$wp_customize->add_setting( 'yourseobook_header_cta_button_width',
			array(
				'default' => 130,
				'transport' => 'refresh',
				'sanitize_callback' => 'wp_filter_nohtml_kses'
			)
		);
		$wp_customize->add_control( new Yourseobook_Slider_Custom_Control( $wp_customize, 'yourseobook_header_cta_button_width',
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




		$wp_customize->add_setting( 'yourseobook_header_cta_button_width',
			array(
				'default' => 130,
				'transport' => 'refresh',
				'sanitize_callback' => 'wp_filter_nohtml_kses'
			)
		);
		$wp_customize->add_control( new Yourseobook_Slider_Custom_Control( $wp_customize, 'yourseobook_header_cta_button_width',
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




		$wp_customize->add_setting( 'yourseobook_header_cta_button_width',
			array(
				'default' => 130,
				'transport' => 'refresh',
				'sanitize_callback' => 'wp_filter_nohtml_kses'
			)
		);
		$wp_customize->add_control( new Yourseobook_Slider_Custom_Control( $wp_customize, 'yourseobook_header_cta_button_width',
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

/*
$wp_customize->add_control( new Yourseobook_Dropdown_Select2_Custom_Control( $wp_customize, 'yourseobook_header_cta_button_border_type',
                    array(
                                        'label' => __( 'Dropdown Select2 Control', 'yourseobook' ),
                                        'section' => 'yourseobook_main_header_navigation_cta_button_sections',
                                        'input_attrs' => array(
                                                            'placeholder' => __( 'Please select Border Type...', 'yourseobook' ),
                                                            'multiselect' => false,
                                        ),
                                        'choices' => array(
                                                            'none' => __( 'New South Wales', 'yourseobook' ),
                                                            'hidden' => __( 'Victoria', 'yourseobook' ),
                                                            'dotted' => __( 'Queensland', 'yourseobook' ),
                                                            'dashed' => __( 'Western Australia', 'yourseobook' ),
                                                            'solid' => __( 'South Australia', 'yourseobook' ),
                                                            'double' => __( 'Tasmania', 'yourseobook' ),
                                                            'double' => __( 'Australian Capital Territory', 'yourseobook' ),
                                                            'ridge' => __( 'Northern Territory', 'yourseobook' ),
                                                            'inset' => __( 'Northern Territory', 'yourseobook' ),
                                                            'outset' => __( 'Northern Territory', 'yourseobook' ),
                                                            'dotted solid' => __( 'Northern Territory', 'yourseobook' ),
                                                            'hidden double dashed' => __( 'Northern Territory', 'yourseobook' ),
                                                            'none solid dotted dashed' => __( 'Northern Territory', 'yourseobook' ),
                                                            'inherit' => __( 'Northern Territory', 'yourseobook' ),
                                                            'initial' => __( 'Northern Territory', 'yourseobook' ),
                                                            'revert' => __( 'Northern Territory', 'yourseobook' ),
                                                            'revert-layer' => __( 'Northern Territory', 'yourseobook' ),
                                                            'unset' => __( 'Northern Territory', 'yourseobook' ),
                                        )
                    )
) );
*/


/*

    $header_cta_button_background_color = get_theme_mod( 'yourseobook_header_cta_button_background_color' );
    $header_cta_button_font_size = get_theme_mod( 'yourseobook_header_cta_button_font_size' );
    $header_cta_button_width = get_theme_mod( 'yourseobook_header_cta_button_width' );
    $header_cta_button_width = get_theme_mod( 'yourseobook_header_cta_button_height; );
    $header_cta_button_padding = get_theme_mod( 'yourseobook_header_cta_button_padding' );
    $header_cta_button_margin = get_theme_mod( 'yourseobook_header_cta_button_margin' );
    $header_cta_button_border_radius = get_theme_mod( 'yourseobook_header_cta_button_border_radius' );
    $header_cta_button_border_size = get_theme_mod( 'yourseobook_header_cta_button_border_size' );
    $header_cta_button_border_type = get_theme_mod( 'yourseobook_header_cta_button_border_type' );
    $header_cta_button_border_color = get_theme_mod( 'yourseobook_header_cta_button_border_color' );
    $header_cta_button_box_shadow = get_theme_mod( 'yourseobook_header_cta_button_box_shadow' );
    $header_cta_button_text_color = get_theme_mod( 'yourseobook_header_cta_button_text_color' );
   $wp_customize->add_control( 'yourseobook_header_main_navigation_master_menu_width',
     array(

*/


// Start Header CTA Button Background Color

$wp_customize->add_setting( 'yourseobook_header_cta_button_background_color',
array(
'default' => 'rgba(255,255,255,1)',
'transport' => 'refresh',
'sanitize_callback' => 'yourseobook_hex_rgba_sanitization'
));
/*
$wp_customize->add_control( new Yourseobook_Alpha_Color_Control( $wp_customize, 'yourseobook_header_cta_button_background_color',
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

		$wp_customize->add_setting( 'yourseobook_header_cta_button_font_size',
			array(
				'default' => 18,
				'transport' => 'refresh',
				'sanitize_callback' => 'wp_filter_nohtml_kses'
			)
		);
		$wp_customize->add_control( new Yourseobook_Slider_Custom_Control( $wp_customize, 'yourseobook_header_cta_button_font_size',
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



		$wp_customize->add_setting( 'yourseobook_header_cta_button_border_size',
			array(
				'default' => 0,
				'transport' => 'refresh',
				'sanitize_callback' => 'wp_filter_nohtml_kses'
			)
		);
		$wp_customize->add_control( new Yourseobook_Slider_Custom_Control( $wp_customize, 'yourseobook_header_cta_button_border_size',
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



		$wp_customize->add_setting( 'yourseobook_header_cta_button_width',
			array(
				'default' => 130,
				'transport' => 'refresh',
				'sanitize_callback' => 'wp_filter_nohtml_kses'
			)
		);
		$wp_customize->add_control( new Yourseobook_Slider_Custom_Control( $wp_customize, 'yourseobook_header_cta_button_width',
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





		$wp_customize->add_setting( 'yourseobook_header_cta_button_height',
			array(
				'default' => 40,
				'transport' => 'refresh',
				'sanitize_callback' => 'wp_filter_nohtml_kses'
			)
		);
		$wp_customize->add_control( new Yourseobook_Slider_Custom_Control( $wp_customize, 'yourseobook_header_cta_button_height',
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



		$wp_customize->add_setting( 'yourseobook_header_cta_button_margin_top',
			array(
				'default' => 0,
				'transport' => 'refresh',
				'sanitize_callback' => 'wp_filter_nohtml_kses'
			)
		);
		$wp_customize->add_control( new Yourseobook_Slider_Custom_Control( $wp_customize, 'yourseobook_header_cta_button_margin_top',
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


		$wp_customize->add_setting( 'yourseobook_header_cta_button_margin_right',
			array(
				'default' => 0,
				'transport' => 'refresh',
				'sanitize_callback' => 'wp_filter_nohtml_kses'
			)
		);
		$wp_customize->add_control( new Yourseobook_Slider_Custom_Control( $wp_customize, 'yourseobook_header_cta_button_margin_right',
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


		$wp_customize->add_setting( 'yourseobook_header_cta_button_margin_bottom',
			array(
				'default' => 0,
				'transport' => 'refresh',
				'sanitize_callback' => 'wp_filter_nohtml_kses'
			)
		);
		$wp_customize->add_control( new Yourseobook_Slider_Custom_Control( $wp_customize, 'yourseobook_header_cta_button_margin_bottom',
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


		$wp_customize->add_setting( 'yourseobook_header_cta_button_margin_left',
			array(
				'default' => 0,
				'transport' => 'refresh',
				'sanitize_callback' => 'wp_filter_nohtml_kses'
			)
		);
		$wp_customize->add_control( new Yourseobook_Slider_Custom_Control( $wp_customize, 'yourseobook_header_cta_button_margin_left',
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


		$wp_customize->add_setting( 'yourseobook_header_cta_button_padding_top',
			array(
				'default' => 0,
				'transport' => 'refresh',
				'sanitize_callback' => 'wp_filter_nohtml_kses'
			)
		);
		$wp_customize->add_control( new Yourseobook_Slider_Custom_Control( $wp_customize, 'yourseobook_header_cta_button_padding_top',
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




		$wp_customize->add_setting( 'yourseobook_header_cta_button_padding_right',
			array(
				'default' => 0,
				'transport' => 'refresh',
				'sanitize_callback' => 'wp_filter_nohtml_kses'
			)
		);
		$wp_customize->add_control( new Yourseobook_Slider_Custom_Control( $wp_customize, 'yourseobook_header_cta_button_padding_right',
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




		$wp_customize->add_setting( 'yourseobook_header_cta_button_padding_bottom',
			array(
				'default' => 0,
				'transport' => 'refresh',
				'sanitize_callback' => 'wp_filter_nohtml_kses'
			)
		);
		$wp_customize->add_control( new Yourseobook_Slider_Custom_Control( $wp_customize, 'yourseobook_header_cta_button_padding_bottom',
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




		$wp_customize->add_setting( 'yourseobook_header_cta_button_padding_left',
			array(
				'default' => 0,
				'transport' => 'refresh',
				'sanitize_callback' => 'wp_filter_nohtml_kses'
			)
		);
		$wp_customize->add_control( new Yourseobook_Slider_Custom_Control( $wp_customize, 'yourseobook_header_cta_button_padding_left',
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



// Start Header CTA Button Text Color


$wp_customize->add_setting( 'yourseobook_header_cta_button_text_color',
array(
'transport' => 'refresh',
'sanitize_callback' => 'yourseobook_hex_rgba_sanitization'
));
$wp_customize->add_control( new Yourseobook_Alpha_Color_Control( $wp_customize, 'yourseobook_header_cta_button_text_color',
	array(
		/*'label' => __( 'Header CTA Button Text Color', 'yourseobook' ),
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
		),*/
	)
) );


// End Header CTA Button Text Color


// Start Header CTA Button Border Color

$wp_customize->add_setting( 'yourseobook_header_cta_button_border_color',
array(
//'default' => $this->defaults['sample_wpcolorpicker_alpha_color2'],
'transport' => 'refresh',
'sanitize_callback' => 'yourseobook_hex_rgba_sanitization'
));

$wp_customize->add_control( new Yourseobook_Alpha_Color_Control( $wp_customize, 'yourseobook_header_cta_button_border_color',
	array(
		/*
                                        'label' => __( 'Header CTA Button Border Color', 'yourseobook' ),
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
		),*/
	)
) );

// End Header CTA Button Border Color



// yourseobook_header_cta_button_float

		$wp_customize->add_setting( 'yourseobook_header_cta_button_float',
			array(
				'transport' => 'refresh',
				'sanitize_callback' => 'yourseobook_radio_sanitization'
			)
		);
		$wp_customize->add_control( new Yourseobook_Text_Radio_Button_Custom_Control( $wp_customize, 'yourseobook_header_cta_button_float',
			array(
				/*
                                                                                'label' => __( 'Header CTA Button Float', 'yourseobook' ),
				'section' => 'yourseobook_main_header_navigation_cta_button_sections',
				'choices' => array(
					'alignleft' => __( 'Left', 'yourseobook' ),
					'alignright' => __( 'Right', 'yourseobook'  ),
					'aligncenter' => __( 'Center', 'yourseobook'  )
				)
                                                                                */
			)
		) );



$wp_customize->add_setting( 'yourseobook_header_cta_button_border_radius',
                    array(
                                       'default' => 0,
                                        'transport' => 'refresh',
                                        'sanitize_callback' => 'wp_filter_nohtml_kses'
                    )
);
$wp_customize->add_control( new Yourseobook_Slider_Custom_Control( $wp_customize, 'yourseobook_header_cta_button_border_radius',
                    array(
                                      /*  'label' => __( 'Dropdown Select2 Control', 'yourseobook' ),
                                        'section' => 'yourseobook_main_header_navigation_cta_button_sections',
                                        'input_attrs' => array(
                                                            'multiselect' => true,
                                        ),
                                        'choices' => array(
                                                            __( 'Antarctica', 'yourseobook' ) => array(
                                                                                'Antarctica/Casey' => __( 'Casey', 'yourseobook' ),
                                                                                'Antarctica/Davis' => __( 'Davis', 'yourseobook' ),
                                                                                'Antarctica/DumontDurville' => __( 'DumontDUrville', 'yourseobook' ),
                                                                                'Antarctica/Macquarie' => __( 'Macquarie', 'yourseobook' ),
                                                                                'Antarctica/Mawson' => __( 'Mawson', 'yourseobook' ),
                                                                                'Antarctica/McMurdo' => __( 'McMurdo', 'yourseobook' ),
                                                                                'Antarctica/Palmer' => __( 'Palmer', 'yourseobook' ),
                                                                                'Antarctica/Rothera' => __( 'Rothera', 'yourseobook' ),
                                                                                'Antarctica/Syowa' => __( 'Syowa', 'yourseobook' ),
                                                                                'Antarctica/Troll' => __( 'Troll', 'yourseobook' ),
                                                                                'Antarctica/Vostok' => __( 'Vostok', 'yourseobook' ),
                                                            ),
                                                            __( 'Atlantic', 'yourseobook' ) => array(
                                                                                'Atlantic/Azores' => __( 'Azores', 'yourseobook' ),
                                                                                'Atlantic/Bermuda' => __( 'Bermuda', 'yourseobook' ),
                                                                                'Atlantic/Canary' => __( 'Canary', 'yourseobook' ),
                                                                                'Atlantic/Cape_Verde' => __( 'Cape Verde', 'yourseobook' ),
                                                                                'Atlantic/Faroe' => __( 'Faroe', 'yourseobook' ),
                                                                                'Atlantic/Madeira' => __( 'Madeira', 'yourseobook' ),
                                                                                'Atlantic/Reykjavik' => __( 'Reykjavik', 'yourseobook' ),
                                                                                'Atlantic/South_Georgia' => __( 'South Georgia', 'yourseobook' ),
                                                                                'Atlantic/Stanley' => __( 'Stanley', 'yourseobook' ),
                                                                                'Atlantic/St_Helena' => __( 'St Helena', 'yourseobook' ),
                                                            ),
                                                            __( 'Australia', 'yourseobook' ) => array(
                                                                                'Australia/Adelaide' => __( 'Adelaide', 'yourseobook' ),
                                                                                'Australia/Brisbane' => __( 'Brisbane', 'yourseobook' ),
                                                                                'Australia/Broken_Hill' => __( 'Broken Hill', 'yourseobook' ),
                                                                                'Australia/Currie' => __( 'Currie', 'yourseobook' ),
                                                                                'Australia/Darwin' => __( 'Darwin', 'yourseobook' ),
                                                                                'Australia/Eucla' => __( 'Eucla', 'yourseobook' ),
                                                                                'Australia/Hobart' => __( 'Hobart', 'yourseobook' ),
                                                                                'Australia/Lindeman' => __( 'Lindeman', 'yourseobook' ),
                                                                                'Australia/Lord_Howe' => __( 'Lord Howe', 'yourseobook' ),
                                                                                'Australia/Melbourne' => __( 'Melbourne', 'yourseobook' ),
                                                                                'Australia/Perth' => __( 'Perth', 'yourseobook' ),
                                                                                'Australia/Sydney' => __( 'Sydney', 'yourseobook' ),
                                                            )
                                        )
*/
                    )
) );


// yourseobook_header_cta_button_font_weight
$wp_customize->add_setting( 'yourseobook_header_cta_button_font_weight',
                    array(
                                       'default' => 300,
                                        'transport' => 'refresh',
                                        'sanitize_callback' => 'wp_filter_nohtml_kses'
                    )
);
$wp_customize->add_control( new Yourseobook_Slider_Custom_Control( $wp_customize, 'yourseobook_header_cta_button_font_weight',
                    array(
                                      /*  'label' => __( 'Dropdown Select2 Control', 'yourseobook' ),
                                        'section' => 'yourseobook_main_header_navigation_cta_button_sections',
                                    
*/
                    )
) );


// Header CTA Button Text Decoration


		// Test of Dropdown Select2 Control (single select)
		$wp_customize->add_setting( 'yourseobook_header_cta_button_text_decoration',
			array(
				// 'default' => $this->defaults['sample_dropdown_select2_control_single'],
				'transport' => 'refresh',
				'sanitize_callback' => 'yourseobook_text_sanitization'
			)
		);
		$wp_customize->add_control( new yourseobook_Dropdown_Select2_Custom_Control( $wp_customize, 'yourseobook_header_cta_button_text_decoration',
			array(
				/*
                                                                                 'label' => __( 'Header CTA Button Text Decoration', 'yourseobook' ),
				'section' => 'sample_custom_controls_section',
				'input_attrs' => array(
					'placeholder' => __( 'Please select a state...', 'yourseobook' ),
					'multiselect' => false,
				),
				'choices' => array(
					'none' => __( 'none', 'yourseobook' ),
					'underline' => __( 'underline', 'yourseobook' ),
				
				)*/
			)
		) );




		$wp_customize->add_setting( 'yourseobook_header_cta_button_text_align',
			array(
				// 'default' => $this->defaults['sample_dropdown_select2_control_single'],
				'transport' => 'refresh',
				'sanitize_callback' => 'yourseobook_text_sanitization'
			)
		);
		$wp_customize->add_control( new yourseobook_Dropdown_Select2_Custom_Control( $wp_customize, 'yourseobook_header_cta_button_text_align',
			array(
				/*
                                                                                 'label' => __( 'Header CTA Button Text Decoration', 'yourseobook' ),
				'section' => 'sample_custom_controls_section',
				'input_attrs' => array(
					'placeholder' => __( 'Please select a state...', 'yourseobook' ),
					'multiselect' => false,
				),
				'choices' => array(
					'none' => __( 'none', 'yourseobook' ),
					'underline' => __( 'underline', 'yourseobook' ),
				
				)*/
			)
		) );



// Box Shadow Header CTA Button
