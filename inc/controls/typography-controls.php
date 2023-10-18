<?php

// Enable Google Icons Material and Symbols
// Google Symbols Material Names
// https://github.com/google/material-design-icons/blob/master/variablefont/MaterialSymbolsOutlined%5BFILL%2CGRAD%2Copsz%2Cwght%5D.codepoints
$wp_customize->add_setting( 'yourseobook_website_general_buttons_font_size',
array(
// 'default' => '40px',
'transport' => 'refresh',
'sanitize_callback' => 'yourseobook_range_sanitization'
)
);

// Yourseobook_Slider_Custom_Control

$wp_customize->add_control( new Yourseobook_Slider_Custom_Control( $wp_customize, 'yourseobook_website_general_buttons_font_size',
array(
'label' => __( 'General Buttons Font Size', 'yourseobook' ),
// 'type' => 'range',
'section' => 'yourseobook_website_typography_buttons_font_size_sections',
				'input_attrs' => array(
					'min' => 20,
					'max' => 60,
					'step' => 1,
				),
)
));




$wp_customize->add_setting( 'yourseobook_website_general_buttons_width',
array(
// 'default' => '40px',
'transport' => 'refresh',
'sanitize_callback' => 'yourseobook_range_sanitization'
)
);

// Yourseobook_Slider_Custom_Control

$wp_customize->add_control( new Yourseobook_Slider_Custom_Control( $wp_customize, 'yourseobook_website_general_buttons_width',
array(
'label' => __( 'General Buttons Width', 'yourseobook' ),
// 'type' => 'range',
'section' => 'yourseobook_website_typography_buttons_font_size_sections',
				'input_attrs' => array(
					'min' => 200,
					'max' => 350,
					'step' => 1,
				),
)
));



$wp_customize->add_setting( 'yourseobook_website_general_buttons_margin',
array(

'transport' => 'refresh',
'sanitize_callback' => 'yourseobook_range_sanitization'
)
);

// Yourseobook_Slider_Custom_Control

$wp_customize->add_control( new Yourseobook_Slider_Custom_Control( $wp_customize, 'yourseobook_website_general_buttons_margin',
array(
'label' => __( 'General Buttons Margin', 'yourseobook' ),
// 'type' => 'range',
'section' => 'yourseobook_website_typography_buttons_font_size_sections',
				'input_attrs' => array(
					'min' => 0,
					'max' => 90,
					'step' => 1,
				),
)
));



$wp_customize->add_setting( 'yourseobook_website_general_buttons_padding',
array(

'transport' => 'refresh',
'sanitize_callback' => 'yourseobook_range_sanitization'
)
);

// Yourseobook_Slider_Custom_Control

$wp_customize->add_control( new Yourseobook_Slider_Custom_Control( $wp_customize, 'yourseobook_website_general_buttons_padding',
array(
'label' => __( 'General Buttons Padding', 'yourseobook' ),
// 'type' => 'range',
'section' => 'yourseobook_website_typography_buttons_font_size_sections',
				'input_attrs' => array(
					'min' => 0,
					'max' => 90,
					'step' => 1,
				),
)
));

$wp_customize->add_setting( 'yourseobook_website_general_buttons_border_radius',
array(

'transport' => 'refresh',
'sanitize_callback' => 'yourseobook_range_sanitization'
)
);

// Yourseobook_Slider_Custom_Control

$wp_customize->add_control( new Yourseobook_Slider_Custom_Control( $wp_customize, 'yourseobook_website_general_buttons_border_radius',
array(
'label' => __( 'General Buttons Border Radius', 'yourseobook' ),
// 'type' => 'range',
'section' => 'yourseobook_website_typography_buttons_font_size_sections',
				'input_attrs' => array(
					'min' => 0,
					'max' => 50,
					'step' => 1,
				),
)
));



//     $website_general_buttons_margin = get_theme_mod( 'yourseobook_website_general_buttons_margin' );
    // $website_general_buttons_padding = get_theme_mod( 'yourseobook_website_general_buttons_padding' );
// Buttons Enable Disable Settings


$wp_customize->add_setting( 'yourseobook_above_the_fold_general_buttons_display_control',
  array(
    //'default' => $this->defaults['search_menu_icon'],
    'transport' => 'refresh',
    'sanitize_callback' => 'yourseobook_switch_sanitization'
  )
);

$wp_customize->add_control( new Yourseobook_Toggle_Switch_Custom_control( $wp_customize, 'yourseobook_above_the_fold_general_buttons_display_control',
  array(
    'label' => __( 'Buttons Show/Hide Settings', 'yourseobook' ),
    'section' => 'yourseobook_website_typography_buttons_font_size_sections'
  )
) );
$wp_customize->selective_refresh->add_partial( 'yourseobook_above_the_fold_general_buttons_display_control', array(
    'selector' => '.buttons-display-controls', // You can also select a css class
) );



// yourseobook_above_the_fold_general_left_buttons_display_control
// yourseobook_above_the_fold_general_right_buttons_display_control
$wp_customize->add_setting( 'yourseobook_above_the_fold_general_left_buttons_display_control',
  array(
    //'default' => $this->defaults['search_menu_icon'],
    'transport' => 'refresh',
    'sanitize_callback' => 'yourseobook_switch_sanitization'
  )
);

$wp_customize->add_control( new Yourseobook_Toggle_Switch_Custom_control( $wp_customize, 'yourseobook_above_the_fold_general_left_buttons_display_control',
  array(
    'label' => __( 'Left Button Show/Hide Settings', 'yourseobook' ),
    'section' => 'yourseobook_website_typography_buttons_font_size_sections'
  )
) );

$wp_customize->add_setting( 'yourseobook_above_the_fold_general_right_buttons_display_control',
  array(
    //'default' => $this->defaults['search_menu_icon'],
    'transport' => 'refresh',
    'sanitize_callback' => 'yourseobook_switch_sanitization'
  )
);

$wp_customize->add_control( new Yourseobook_Toggle_Switch_Custom_control( $wp_customize, 'yourseobook_above_the_fold_general_right_buttons_display_control',
  array(
    'label' => __( 'Right Button Show/Hide Settings', 'yourseobook' ),
    'section' => 'yourseobook_website_typography_buttons_font_size_sections'
  )
) );

/// yourseobook_website_general_buttons_background_color
$wp_customize->add_setting( 'yourseobook_website_general_buttons_text_color',
	array(
		//'default' => $this->defaults['sample_wpcolorpicker_alpha_color2'],
		'transport' => 'refresh',
		'sanitize_callback' => 'yourseobook_hex_rgba_sanitization'
	)
);
$wp_customize->add_control( new Yourseobook_Alpha_Color_Control( $wp_customize, 'yourseobook_website_general_buttons_text_color',
	array(
		'label' => __( 'General Buttons Text Color', 'yourseobook' ),
		//'description' => esc_html__( 'Sample color control with Alpha channel', 'yourseobook' ),
		'section' => 'yourseobook_website_typography_buttons_font_size_sections',
		'type' => 'color',
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
		$wp_customize->add_setting( 'yourseobook_website_general_buttons_background_color',
			array(
				//'default' => $this->defaults['sample_wpcolorpicker_alpha_color2'],
				'transport' => 'refresh',
				'sanitize_callback' => 'yourseobook_hex_rgba_sanitization'
			)
		);
		$wp_customize->add_control( new Yourseobook_Alpha_Color_Control( $wp_customize, 'yourseobook_website_general_buttons_background_color',
			array(
				'label' => __( 'General Buttons Background Color', 'yourseobook' ),
				//'description' => esc_html__( 'Sample color control with Alpha channel', 'yourseobook' ),
				'section' => 'yourseobook_website_typography_buttons_font_size_sections',
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



		// Test of Google Font Select Control
		$wp_customize->add_setting( 'yourseobook_website_typography_body_text_google_font_select',
			array(
				'default' => $this->defaults['sample_google_font_select'],
				'sanitize_callback' => 'yourseobook_google_font_sanitization'
			)
		);
		$wp_customize->add_control( new Yourseobook_Google_Font_Select_Custom_Control( $wp_customize, 'yourseobook_website_typography_body_text_google_font_select',
			array(
				'label' => __( 'Google Font Control', 'yourseobook' ),
				'description' => esc_html__( 'All Google Fonts sorted alphabetically', 'yourseobook' ),
				'section' => 'yourseobook_website_typography_buttons_font_size_sections',
				'input_attrs' => array(
					'font_count' => 'all',
					'orderby' => 'alpha',
				),
			)
		) );



