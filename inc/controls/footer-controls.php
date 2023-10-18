<?php

$wp_customize->add_setting( 'yourseobook_footer_navigation_menus_display_control',
  array(
    //'default' => $this->defaults['search_menu_icon'],
    'transport' => 'refresh',
    'sanitize_callback' => 'yourseobook_switch_sanitization'
  )
);

$wp_customize->add_control( new Yourseobook_Toggle_Switch_Custom_control( $wp_customize, 'yourseobook_footer_navigation_menus_display_control',
  array(
    'label' => __( 'Footer Navigation Menu', 'yourseobook' ),
    'section' => 'yourseobook_main_footer_navigation_menus_sections'
  )
) );

$wp_customize->selective_refresh->add_partial( 'yourseobook_footer_navigation_menus_display_control', array(
    'selector' => '.footer-copy', // You can also select a css class
) );






$wp_customize->add_setting( 'yourseobook_footer_navigation_fws1_display_control',
  array(
    //'default' => $this->defaults['search_menu_icon'],
    'transport' => 'refresh',
    'sanitize_callback' => 'yourseobook_switch_sanitization'
  )
);
$wp_customize->add_control( new Yourseobook_Toggle_Switch_Custom_control( $wp_customize, 'yourseobook_footer_navigation_fws1_display_control',
  array(
    'label' => __( 'Footer Widget One', 'yourseobook' ),
    'section' => 'yourseobook_main_footer_widgets_sections'
  )
) );
$wp_customize->selective_refresh->add_partial( 'yourseobook_footer_navigation_fws1_display_control', array(
    'selector' => '.fws1', // You can also select a css class
) );



$wp_customize->add_setting( 'yourseobook_footer_navigation_fws2_display_control',
  array(
    //'default' => $this->defaults['search_menu_icon'],
    'transport' => 'refresh',
    'sanitize_callback' => 'yourseobook_switch_sanitization'
  )
);
$wp_customize->add_control( new Yourseobook_Toggle_Switch_Custom_control( $wp_customize, 'yourseobook_footer_navigation_fws2_display_control',
  array(
    'label' => __( 'Footer Widget Two', 'yourseobook' ),
    'section' => 'yourseobook_main_footer_widgets_sections'
  )
) );
$wp_customize->selective_refresh->add_partial( 'yourseobook_footer_navigation_fws2_display_control', array(
    'selector' => '.fws2', // You can also select a css class
) );




$wp_customize->add_setting( 'yourseobook_footer_navigation_fws3_display_control',
  array(
    //'default' => $this->defaults['search_menu_icon'],
    'transport' => 'refresh',
    'sanitize_callback' => 'yourseobook_switch_sanitization'
  )
);
$wp_customize->add_control( new Yourseobook_Toggle_Switch_Custom_control( $wp_customize, 'yourseobook_footer_navigation_fws3_display_control',
  array(
    'label' => __( 'Footer Widget Three', 'yourseobook' ),
    'section' => 'yourseobook_main_footer_widgets_sections'
  )
) );
$wp_customize->selective_refresh->add_partial( 'yourseobook_footer_navigation_fws3_display_control', array(
    'selector' => '.fws3', // You can also select a css class
) );



$wp_customize->add_setting( 'yourseobook_footer_navigation_fws4_display_control',
  array(
    //'default' => $this->defaults['search_menu_icon'],
    'transport' => 'refresh',
    'sanitize_callback' => 'yourseobook_switch_sanitization'
  )
);
$wp_customize->add_control( new Yourseobook_Toggle_Switch_Custom_control( $wp_customize, 'yourseobook_footer_navigation_fws4_display_control',
  array(
    'label' => __( 'Footer Widget Four', 'yourseobook' ),
    'section' => 'yourseobook_main_footer_widgets_sections'
  )
) );
$wp_customize->selective_refresh->add_partial( 'yourseobook_footer_navigation_fws4_display_control', array(
    'selector' => '.fws4', // You can also select a css class
) );


$wp_customize->add_setting( 'yourseobook_footer_navigation_fws5_display_control',
  array(
    //'default' => $this->defaults['search_menu_icon'],
    'transport' => 'refresh',
    'sanitize_callback' => 'yourseobook_switch_sanitization'
  )
);
$wp_customize->add_control( new Yourseobook_Toggle_Switch_Custom_control( $wp_customize, 'yourseobook_footer_navigation_fws5_display_control',
  array(
    'label' => __( 'Footer Widget Five', 'yourseobook' ),
    'section' => 'yourseobook_main_footer_widgets_sections'
  )
) );
$wp_customize->selective_refresh->add_partial( 'yourseobook_footer_navigation_fws5_display_control', array(
    'selector' => '.fws5', // You can also select a css class
) );




// Footer Copy Info and Additional Navigation Menus Include Socials, Terms, Privacy


$wp_customize->add_setting( 'yourseobook_footer_copy_info_navigation_menus_display_control',
  array(
    //'default' => $this->defaults['search_menu_icon'],
    'transport' => 'refresh',
    'sanitize_callback' => 'yourseobook_switch_sanitization'
  )
);

$wp_customize->add_control( new Yourseobook_Toggle_Switch_Custom_control( $wp_customize, 'yourseobook_footer_copy_info_navigation_menus_display_control',
  array(
    'label' => __( 'Copy Info Menu Navigation', 'yourseobook' ),
    'section' => 'yourseobook_main_footer_navigation_menus_sections'
  )
) );

$wp_customize->selective_refresh->add_partial( 'yourseobook_footer_copy_info_navigation_menus_display_control', array(
    'selector' => '.fcms', // You can also select a css class
) );

// Footer Copy Info and Additional Navigation Menus Include Socials, Terms, Privacy


$wp_customize->add_setting( 'yourseobook_footer_scroll_to_top_display_control',
  array(
    //'default' => $this->defaults['search_menu_icon'],
    'transport' => 'refresh',
    'sanitize_callback' => 'yourseobook_switch_sanitization'
  )
);

$wp_customize->add_control( new Yourseobook_Toggle_Switch_Custom_control( $wp_customize, 'yourseobook_footer_scroll_to_top_display_control',
  array(
    'label' => __( 'Scroll To Top Button', 'yourseobook' ),
    'section' => 'yourseobook_main_footer_navigation_menus_sections'
  )
) );

$wp_customize->selective_refresh->add_partial( 'yourseobook_footer_scroll_to_top_display_control', array(
    'selector' => '#myBtn', // You can also select a css class
) );

//  WPColorPicker Alpha Color Picker Control
$wp_customize->add_setting( 'yourseobook_footer_scroll_to_top_background_color',
  array(
   'default' => $this->defaults['sample_wpcolorpicker_alpha_color'],
    'transport' => 'refresh',
    'sanitize_callback' => 'yourseobook_hex_rgba_sanitization',
   // 'priority' => '2'
  )
);
$wp_customize->add_control( new Yourseobook_Alpha_Color_Control( $wp_customize, 'yourseobook_footer_scroll_to_top_background_color',
  array(
    'label' => __( 'Footer Scroll To Top Background', 'yourseobook' ),
   // 'description' => esc_html__( 'Master Header Navigation Menu Background Settings with Color Picker. The Default Background Color is Black #000000', 'yourseobook' ),
   'type' => 'color',
    'section' => 'yourseobook_main_footer_navigation_menus_sections',
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






/// yourseobook_main_footer_links_text_decoration




		$wp_customize->add_setting( 'yourseobook_main_footer_links_text_decoration',
			array(
				// 'default' => $this->defaults['sample_dropdown_select2_control_single'],
				'transport' => 'refresh',
				'sanitize_callback' => 'yourseobook_text_sanitization'
			)
		);
		$wp_customize->add_control( new yourseobook_Dropdown_Select2_Custom_Control( $wp_customize, 'yourseobook_main_footer_links_text_decoration',
			array(
				
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
		) );


		$wp_customize->add_setting( 'yourseobook_main_footer_links_font_weight_settings',
			array(
				// 'default' => $this->defaults['sample_dropdown_select2_control_single'],
				'transport' => 'refresh',
				'sanitize_callback' => 'yourseobook_text_sanitization'
			)
		);
		$wp_customize->add_control( new yourseobook_Dropdown_Select2_Custom_Control( $wp_customize, 'yourseobook_main_footer_links_font_weight_settings',
			array(
				
                                                                                 'label' => __( 'Footer Links Font Weight', 'yourseobook' ),
				'section' => 'yourseobook_main_footer_navigation_menus_sections',
				'input_attrs' => array(
					'placeholder' => __( 'Select Font Weight...', 'yourseobook' ),
					'multiselect' => false,
				),
				'choices' => array(
					'100' => __( '100', 'yourseobook' ),
					'200' => __( '200', 'yourseobook' ),
					'300' => __( '300', 'yourseobook' ),
					'400' => __( '400', 'yourseobook' ),
					'500' => __( '500', 'yourseobook' ),
					'600' => __( '600', 'yourseobook' ),
					'700' => __( '700', 'yourseobook' ),
					'800' => __( '800', 'yourseobook' ),
					'900' => __( '900', 'yourseobook' ),
				
				)
			)
		) );

// yourseobook_main_footer_links_font_size_settings


		$wp_customize->add_setting( 'yourseobook_main_footer_links_font_size_settings',
			array(
				'default' => 16,
				'transport' => 'refresh',
				'sanitize_callback' => 'wp_filter_nohtml_kses'
			)
		);
		$wp_customize->add_control( new Yourseobook_Slider_Custom_Control( $wp_customize, 'yourseobook_main_footer_links_font_size_settings',
			array(
				'label' => __( 'Footer Links Font Size(px)', 'yourseobook' ),
				'section' => 'yourseobook_main_footer_navigation_menus_sections',
				 'input_attrs' => array(
					'min' => 14,
					'max' => 22,
					'step' => 1,
				),
			)
		) );

// yourseobook_main_footer_links_font_size_settings


		$wp_customize->add_setting( 'yourseobook_main_footer_widgets_title_font_size_settings',
			array(
				'default' => 20,
				'transport' => 'refresh',
				'sanitize_callback' => 'wp_filter_nohtml_kses'
			)
		);
		$wp_customize->add_control( new Yourseobook_Slider_Custom_Control( $wp_customize, 'yourseobook_main_footer_widgets_title_font_size_settings',
			array(
				'label' => __( 'Footer Widgets Title Font Size(px)', 'yourseobook' ),
				'section' => 'yourseobook_main_footer_navigation_menus_sections',
				 'input_attrs' => array(
					'min' => 18,
					'max' => 28,
					'step' => 1,
				),
			)
		) );




// yourseobook_main_footer_widgets_title_font_weight_settings


		$wp_customize->add_setting( 'yourseobook_main_footer_widgets_title_font_weight_settings',
			array(
				// 'default' => $this->defaults['sample_dropdown_select2_control_single'],
				'transport' => 'refresh',
				'sanitize_callback' => 'yourseobook_text_sanitization'
			)
		);
		$wp_customize->add_control( new yourseobook_Dropdown_Select2_Custom_Control( $wp_customize, 'yourseobook_main_footer_widgets_title_font_weight_settings',
			array(
				
                                                                                 'label' => __( 'Footer Widgets Title Font Weight', 'yourseobook' ),
				'section' => 'yourseobook_main_footer_navigation_menus_sections',
				'input_attrs' => array(
					'placeholder' => __( 'Select Font Weight...', 'yourseobook' ),
					'multiselect' => false,
				),
				'choices' => array(
					'100' => __( '100', 'yourseobook' ),
					'200' => __( '200', 'yourseobook' ),
					'300' => __( '300', 'yourseobook' ),
					'400' => __( '400', 'yourseobook' ),
					'500' => __( '500', 'yourseobook' ),
					'600' => __( '600', 'yourseobook' ),
					'700' => __( '700', 'yourseobook' ),
					'800' => __( '800', 'yourseobook' ),
					'900' => __( '900', 'yourseobook' ),
				
				)
			)
		) );




