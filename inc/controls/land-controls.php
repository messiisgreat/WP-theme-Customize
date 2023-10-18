<?php


// yourseobook_main_land_panel
// yourseobook_land_sections


$wp_customize->add_setting( 'yourseobook_main_land_display_control',
  array(
    //'default' => $this->defaults['search_menu_icon'],
    'transport' => 'refresh',
    'sanitize_callback' => 'yourseobook_switch_sanitization'
  )
);

$wp_customize->add_control( new Yourseobook_Toggle_Switch_Custom_control( $wp_customize, 'yourseobook_main_land_display_control',
  array(
    'label' => __( 'Landing Page Settings', 'yourseobook' ),
    'section' => 'yourseobook_land_sections'
  )
) );

$wp_customize->selective_refresh->add_partial( 'yourseobook_main_land_display_control', array(
    'selector' => '.main-land', // You can also select a css class
) );

// Landing Breaking News Header Display Control

$wp_customize->add_setting( 'yourseobook_header_main_navigation_breaking_news_display_control',
  array(
    //'default' => $this->defaults['search_menu_icon'],
    'transport' => 'refresh',
    'sanitize_callback' => 'yourseobook_switch_sanitization'
  )
);

$wp_customize->add_control( new Yourseobook_Toggle_Switch_Custom_control( $wp_customize, 'yourseobook_header_main_navigation_breaking_news_display_control',
  array(
    'label' => __( 'Breaking News Top Navigation', 'yourseobook' ),
    'section' => 'yourseobook_land_breaking_news_sections'
  )
) );

$wp_customize->selective_refresh->add_partial( 'yourseobook_header_main_navigation_breaking_news_display_control', array(
    'selector' => '#breaking-news', // You can also select a css class
) );



		// Test of Dropdown Pages Control
		$wp_customize->add_setting( 'yourseobook_header_main_navigation_breaking_news_posts_control',
			array(
				'default' => $this->defaults['sample_default_dropdownpages'],
				'transport' => 'refresh',
				'sanitize_callback' => 'absint'
			)
		);
		$wp_customize->add_control( 'yourseobook_header_main_navigation_breaking_news_posts_control',
			array(
				'label' => __( 'Default Dropdown Pages Control', 'yourseobook' ),
				'section' => 'yourseobook_land_breaking_news_sections',
				'type' => 'dropdown-pages'
			)
		);

// Landing Below the Fold
// Landing Above the Fold

$wp_customize->add_setting( 'yourseobook_main_land_above_the_fold_display_control',
  array(
    //'default' => $this->defaults['search_menu_icon'],
    'transport' => 'refresh',
    'sanitize_callback' => 'yourseobook_switch_sanitization'
  )
);

$wp_customize->add_control( new Yourseobook_Toggle_Switch_Custom_control( $wp_customize, 'yourseobook_main_land_above_the_fold_display_control',
  array(
    'label' => __( 'Above The Fold Settings', 'yourseobook' ),
    'section' => 'yourseobook_land_above_the_fold_sections'
  )
) );

$wp_customize->selective_refresh->add_partial( 'yourseobook_main_land_above_the_fold_display_control', array(
    'selector' => '.atf', // You can also select a css class
) );

// Landing Below the Fold

// yourseobook_main_land_below_the_fold_display_control
$wp_customize->add_setting( 'yourseobook_main_land_below_the_fold_display_control',
  array(
    //'default' => $this->defaults['search_menu_icon'],
    'transport' => 'refresh',
    'sanitize_callback' => 'yourseobook_switch_sanitization'
  )
);

$wp_customize->add_control( new Yourseobook_Toggle_Switch_Custom_control( $wp_customize, 'yourseobook_main_land_below_the_fold_display_control',
  array(
    'label' => __( 'Below The Fold Settings', 'yourseobook' ),
    'section' => 'yourseobook_land_below_the_fold_sections'
  )
) );

$wp_customize->selective_refresh->add_partial( 'yourseobook_main_land_below_the_fold_display_control', array(
    'selector' => '#btf-main', // You can also select a css class
) );


// Landing Below the Fold Main Settings
		// Test of Dropdown Pages Control
		$wp_customize->add_setting( 'yourseobook_main_land_below_the_fold_content_settings',
			array(
				//'default' => $this->defaults['sample_default_dropdownpages'],
				'transport' => 'refresh',
				'sanitize_callback' => 'absint'
			)
		);
		$wp_customize->add_control( 'yourseobook_main_land_below_the_fold_content_settings',
			array(
				'label' => __( 'Below The Fold Content Settings', 'yourseobook' ),
				'section' => 'yourseobook_land_below_the_fold_sections',
				'type' => 'dropdown-pages'
			)
		);
$wp_customize->selective_refresh->add_partial( 'yourseobook_main_land_below_the_fold_content_settings', array(
    'selector' => '#btf-content', // You can also select a css class
) );


//  WPColorPicker Alpha Color Picker Control
$wp_customize->add_setting( 'yourseobook_main_land_below_the_fold_background_color',
  array(
// ml_btf_background
   'default' => '#000000',
    'transport' => 'refresh',
    'sanitize_callback' => 'yourseobook_hex_rgba_sanitization',
   // 'priority' => '2'
  )
);
$wp_customize->add_control( new Yourseobook_Alpha_Color_Control( $wp_customize, 'yourseobook_main_land_below_the_fold_background_color',
  array(
    'label' => __( 'Below The Fold Background', 'yourseobook' ),
    'description' => esc_html__( 'Below The Fold Background Color Setting.The Default Background Color is Black #000000', 'yourseobook' ),
    'type' => 'color',
    'section' => 'yourseobook_land_below_the_fold_sections',
'show_opacity' => true,
'input_attrs' => array(
                    'resetalpha' => true,
                   
),
  )
) );

//  WPColorPicker Alpha Color Picker Control
$wp_customize->add_setting( 'yourseobook_main_land_below_the_fold_heading_title_color',
  array(
   'default' => '#ffffff',
    'transport' => 'refresh',
    'sanitize_callback' => 'yourseobook_hex_rgba_sanitization',
   // 'priority' => '2'
  )
);
$wp_customize->add_control( new Yourseobook_Alpha_Color_Control( $wp_customize, 'yourseobook_main_land_below_the_fold_heading_title_color',
  array(
    'label' => __( 'Below The Fold Heading Title Color', 'yourseobook' ),
   'description' => esc_html__( 'Below The Fold Heading Title Color Setting.The Default Heading Title Color is White #FFFFFF', 'yourseobook' ),
'type' => 'color',
 'section' => 'yourseobook_land_below_the_fold_sections',
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
$wp_customize->selective_refresh->add_partial( 'yourseobook_main_land_below_the_fold_heading_title_color', array(
    'selector' => '#btf-ht', // You can also select a css class
) );

//  WPColorPicker Alpha Color Picker Control
$wp_customize->add_setting( 'yourseobook_main_land_below_the_fold_content_box_color',
  array(
   'default' => '#ffffff',
    'transport' => 'refresh',
    'sanitize_callback' => 'yourseobook_hex_rgba_sanitization',
   // 'priority' => '2'
  )
);
$wp_customize->add_control( new Yourseobook_Alpha_Color_Control( $wp_customize, 'yourseobook_main_land_below_the_fold_content_box_color',
  array(
    'label' => __( 'Below The Fold Content Box Color', 'yourseobook' ),
   'description' => esc_html__( 'Below The Fold  Content Box Color Setting.The Default  Content Box Color is White #FFFFFF', 'yourseobook' ),
'type' => 'color',
 'section' => 'yourseobook_land_below_the_fold_sections',
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
$wp_customize->selective_refresh->add_partial( 'yourseobook_main_land_below_the_fold_content_box_color', array(
    'selector' => '#btf-content', // You can also select a css class
) );

// id="btf-ht"
// yourseobook_land_below_the_fold_sections


// Below The Fold Content Box TinyMCE Settings


	// Test of TinyMCE control



$wp_customize->add_setting( 'yourseobook_main_land_below_the_fold_content_box_wp_content_editor',
  array(

    'transport' => 'refresh', //'postMessage',
    'sanitize_callback' => 'wp_kses_post'
  )
);
$wp_customize->add_control( new Yourseobook_TinyMCE_Custom_control( $wp_customize, 'yourseobook_main_land_below_the_fold_content_box_wp_content_editor',
array(
   
'label' => __( 'Below The Fold TinyMCE Content Editor', 'yourseobook' ),
'section' => 'yourseobook_land_below_the_fold_sections',
'input_attrs' => array(
                    'menubar' => true,
                    'toolbar1' => 'formatselect bold numlist bullist link',
                    'toolbar2' => 'redo undo italic underline alignleft aligncenter alignright forecolor blockquote outdent indent',
                    'mediaButtons' => true,
                    'teeny' => true,
)
  )
));


$wp_customize->add_setting( 'yourseobook_main_land_below_the_fold_content_box_heading_title',
  array(

    'transport' => 'refresh', //'postMessage',
    'sanitize_callback' => 'wp_kses_post'
  )
);
$wp_customize->add_control( 'yourseobook_main_land_below_the_fold_content_box_heading_title',
  array(
    'label' => __( 'Below The Fold Heading H2 Title Text', 'yourseobook' ),
    'type' => 'text',
  'section' => 'yourseobook_land_below_the_fold_sections'
  )
);





		// Test of TinyMCE control
		$wp_customize->add_setting( 'yourseobook_main_land_below_the_fold_content_tinymce_editor',
			array(
				'default' => $this->defaults['sample_tinymce_editor'],
				'transport' => 'refresh',
				'sanitize_callback' => 'wp_kses_post'
			)
		);
		$wp_customize->add_control( new Yourseobook_TinyMCE_Custom_control( $wp_customize, 'yourseobook_main_land_below_the_fold_content_tinymce_editor',
			array(
				'label' => __( 'Section Content Settings', 'yourseobook' ),
				'description' => __( 'This is a Section Content Settings Custom Control', 'yourseobook' ),
				'section' => 'yourseobook_land_below_the_fold_sections',
				'input_attrs' => array(
          'menubar' => false,
					'toolbar1' => 'formatselect bold numlist bullist link wp_adv',
					'toolbar2' => 'redo undo italic underline alignleft aligncenter alignright forecolor blockquote outdent indent',
					'mediaButtons' => true,
          'teeny' => true,
				)
			)
		) );
		$wp_customize->selective_refresh->add_partial( 'yourseobook_main_land_below_the_fold_content_tinymce_editor',
			array(
			//	'selector' => '.footer-credits',
				'container_inclusive' => true,
				'render_callback' => 'yourseobook_get_credits_render_callback',
				'fallback_refresh' => true,
			)
		);




		// Add our Sortable Repeater setting and Custom Control for Social media URLs
		$wp_customize->add_setting( 'yourseobook_main_land_below_the_fold_content_box_buttons_control',
			array(
				//'default' => $this->defaults['sample_sortable_repeater_control'],
				'transport' => 'refresh',
				'sanitize_callback' => 'yourseobook_url_sanitization'
			)
		);
		$wp_customize->add_control( new Yourseobook_Sortable_Repeater_Custom_Control( $wp_customize, 'yourseobook_main_land_below_the_fold_content_box_buttons_control',
			array(
				'label' => __( 'Sortable Repeater', 'yourseobook' ),
				'description' => esc_html__( 'This is the control description.', 'yourseobook' ),
				'section' => 'yourseobook_land_below_the_fold_sections',
				'button_labels' => array(
					'add' => __( 'Add Button', 'yourseobook' ),
				)
			)
		) );
// End Landing Below the Fold


// Landing About us Section


$wp_customize->add_setting( 'yourseobook_main_land_about_us_display_control',
  array(
    //'default' => $this->defaults['search_menu_icon'],
    'transport' => 'refresh',
    'sanitize_callback' => 'yourseobook_switch_sanitization'
  )
);

$wp_customize->add_control( new Yourseobook_Toggle_Switch_Custom_control( $wp_customize, 'yourseobook_main_land_about_us_display_control',
  array(
    'label' => __( 'About us Settings', 'yourseobook' ),
    'section' => 'yourseobook_land_about_us_sections'
  )
) );

$wp_customize->selective_refresh->add_partial( 'yourseobook_main_land_about_us_display_control', array(
    'selector' => '.land-about', // You can also select a css class
) );




// Landing Services Section

$wp_customize->add_setting( 'yourseobook_main_land_services_display_control',
  array(
    //'default' => $this->defaults['search_menu_icon'],
    'transport' => 'refresh',
    'sanitize_callback' => 'yourseobook_switch_sanitization'
  )
);

$wp_customize->add_control( new Yourseobook_Toggle_Switch_Custom_control( $wp_customize, 'yourseobook_main_land_services_display_control',
  array(
    'label' => __( 'Services Settings', 'yourseobook' ),
    'section' => 'yourseobook_land_services_sections',
  )
) );

$wp_customize->selective_refresh->add_partial( 'yourseobook_main_land_services_display_control', array(
    'selector' => '.landservices', // You can also select a css class
) );





// Landing FAQ's Section

$wp_customize->add_setting( 'yourseobook_main_land_faqs_display_control',
  array(
    //'default' => $this->defaults['search_menu_icon'],
    'transport' => 'refresh',
    'sanitize_callback' => 'yourseobook_switch_sanitization'
  )
);

$wp_customize->add_control( new Yourseobook_Toggle_Switch_Custom_control( $wp_customize, 'yourseobook_main_land_faqs_display_control',
  array(
    'label' => __( 'Land FAQs Settings', 'yourseobook' ),
    'section' => 'yourseobook_land_faqs_sections',
  )
) );

$wp_customize->selective_refresh->add_partial( 'yourseobook_main_land_faqs_display_control', array(
    'selector' => '.landfaqs', // You can also select a css class
) );


// Landing Our Team Section

$wp_customize->add_setting( 'yourseobook_main_land_our_team_display_control',
  array(
    //'default' => $this->defaults['search_menu_icon'],
    'transport' => 'refresh',
    'sanitize_callback' => 'yourseobook_switch_sanitization'
  )
);

$wp_customize->add_control( new Yourseobook_Toggle_Switch_Custom_control( $wp_customize, 'yourseobook_main_land_our_team_display_control',
  array(
    'label' => __( 'Land Our Team Settings', 'yourseobook' ),
    'section' => 'yourseobook_land_our_team_sections',
  )
) );

$wp_customize->selective_refresh->add_partial( 'yourseobook_main_land_our_team_display_control', array(
    'selector' => '.ourteam', // You can also select a css class
) );



// Landing Our Case Studies Section

$wp_customize->add_setting( 'yourseobook_main_land_our_case_studies_display_control',
  array(
    //'default' => $this->defaults['search_menu_icon'],
    'transport' => 'refresh',
    'sanitize_callback' => 'yourseobook_switch_sanitization'
  )
);

$wp_customize->add_control( new Yourseobook_Toggle_Switch_Custom_control( $wp_customize, 'yourseobook_main_land_our_case_studies_display_control',
  array(
    'label' => __( 'Land Cases Settings', 'yourseobook' ),
    'section' => 'yourseobook_land_our_case_studies_sections',
  )
) );

$wp_customize->selective_refresh->add_partial( 'yourseobook_main_land_our_case_studies_display_control', array(
    'selector' => '.ourcases', // You can also select a css class
) );



// Landing Our Portfolio Section

$wp_customize->add_setting( 'yourseobook_main_land_company_portfolio_display_control',
  array(
    //'default' => $this->defaults['search_menu_icon'],
    'transport' => 'refresh',
    'sanitize_callback' => 'yourseobook_switch_sanitization'
  )
);

$wp_customize->add_control( new Yourseobook_Toggle_Switch_Custom_control( $wp_customize, 'yourseobook_main_land_company_portfolio_display_control',
  array(
    'label' => __( 'Land Portfolio Settings', 'yourseobook' ),
    'section' => 'yourseobook_land_our_portfolio_studies_sections',
  )
) );

$wp_customize->selective_refresh->add_partial( 'yourseobook_main_land_company_portfolio_display_control', array(
    'selector' => '.ourportfolio', // You can also select a css class
) );



// Landing Latest News Section

$wp_customize->add_setting( 'yourseobook_main_land_latest_news_display_control',
  array(
    //'default' => $this->defaults['search_menu_icon'],
    'transport' => 'refresh',
    'sanitize_callback' => 'yourseobook_switch_sanitization'
  )
);

$wp_customize->add_control( new Yourseobook_Toggle_Switch_Custom_control( $wp_customize, 'yourseobook_main_land_latest_news_display_control',
  array(
    'label' => __( 'Land Latest News Settings', 'yourseobook' ),
    'section' => 'yourseobook_land_latest_news_sections',
  )
) );

$wp_customize->selective_refresh->add_partial( 'yourseobook_main_land_latest_news_display_control', array(
    'selector' => '.latestnews', // You can also select a css class
) );


// Landing Our Portfolio Section

$wp_customize->add_setting( 'yourseobook_main_land_images_gallery_display_control',
  array(
    //'default' => $this->defaults['search_menu_icon'],
    'transport' => 'refresh',
    'sanitize_callback' => 'yourseobook_switch_sanitization'
  )
);

$wp_customize->add_control( new Yourseobook_Toggle_Switch_Custom_control( $wp_customize, 'yourseobook_main_land_images_gallery_display_control',
  array(
    'label' => __( 'Land Images Gallery Settings', 'yourseobook' ),
    'section' => 'yourseobook_land_images_gallery_sections',
  )
) );

$wp_customize->selective_refresh->add_partial( 'yourseobook_main_land_images_gallery_display_control', array(
    'selector' => '.imagesgallery', // You can also select a css class
) );


// Landing Videos Section

$wp_customize->add_setting( 'yourseobook_main_land_video_gallery_display_control',
  array(
    //'default' => $this->defaults['search_menu_icon'],
    'transport' => 'refresh',
    'sanitize_callback' => 'yourseobook_switch_sanitization'
  )
);

$wp_customize->add_control( new Yourseobook_Toggle_Switch_Custom_control( $wp_customize, 'yourseobook_main_land_video_gallery_display_control',
  array(
    'label' => __( 'Land Videos Settings', 'yourseobook' ),
    'section' => 'yourseobook_land_video_gallery_sections',
  )
) );

$wp_customize->selective_refresh->add_partial( 'yourseobook_main_land_video_gallery_display_control', array(
    'selector' => '.latestvideos', // You can also select a css class
) );


// Landing User Testimonials Section

$wp_customize->add_setting( 'yourseobook_main_land_users_reviews_display_control',
  array(
    //'default' => $this->defaults['search_menu_icon'],
    'transport' => 'refresh',
    'sanitize_callback' => 'yourseobook_switch_sanitization'
  )
);

$wp_customize->add_control( new Yourseobook_Toggle_Switch_Custom_control( $wp_customize, 'yourseobook_main_land_users_reviews_display_control',
  array(
    'label' => __( 'Land User Testimonials Settings', 'yourseobook' ),
    'section' => 'yourseobook_land_users_reviews_sections',
  )
) );

$wp_customize->selective_refresh->add_partial( 'yourseobook_main_land_users_reviews_display_control', array(
    'selector' => '.userreviews', // You can also select a css class
) );





