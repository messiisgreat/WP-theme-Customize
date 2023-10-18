<?php


  


// Panel Name
// yourseobook_single_page_section


$wp_customize->add_setting( 'yourseobook_general_single_pages_settings_demo_radio_control', array(
   'default'        => 'Page Title Heading H1',
) );

$wp_customize->add_control( 'yourseobook_general_single_pages_settings_demo_radio_control', array(
   'label'      => 'Page Styles/Settings',
   'section'    => 'yourseobook_single_page_section',
   'settings'   => 'yourseobook_general_single_pages_settings_demo_radio_control',
   'type'       => 'radio',
   'choices'    => array(
   'Page Heading Settings' => 'Header',
   'Page Title Text Settings' => 'Text Settings',
   'Page Content' => 'Content',
   'Page Title Heading Typography' => 'Typography',
   'Page CTAs in Content' => 'CTAs',
   ),
) );
$wp_customize->selective_refresh->add_partial( 'yourseobook_general_single_pages_settings_demo_radio_control', array(
    'selector' => '#header-h1', // You can also select a css class
) );

/*
$wp_customize->add_setting( 'single_page_heading_title_custom_text', array(
   'default' => '',
) );

$wp_customize->add_control( 'single_page_heading_title_custom_text', array(
   'label'      => 'H1 Page Title',
   'section'    => 'yourseobook_single_page_section',
   'type'       => 'text',
   'active_callback' => 'choice_a_callback',
) );
*/
/*

$wp_customize->add_setting( 'yourseobook_single_page_heading_page_title_custom_text', array(
   'default' => '',
) );

$wp_customize->add_control( 'yourseobook_single_page_heading_page_title_custom_text', array(
   'label'      => 'Title Heading H1',
   'section'    => 'yourseobook_single_page_section',
   'type'       => 'text',
   'active_callback' => 'single_page_title_choice_a_callback',
) );
$wp_customize->selective_refresh->add_partial( 'yourseobook_single_page_heading_page_title_custom_text', array(
    'selector' => '#header-h1', // You can also select a css class
) );
*/
      $wp_customize->add_setting( 'yourseobook_single_page_heading_title_setting', array(
         // 'default'           => '',
         'transport' => 'refresh',
          'sanitize_callback' => 'sanitize_text_field',
      ) );
// Yourseobook_Customize_Page_Template_Controller
      // Add Control

      $wp_customize->add_control( 'yourseobook_single_page_heading_title_setting', array(
          'label'    => __( 'Single Page Layout Settings', 'yourseobook' ),
          'active_callback' => 'yourseobook_single_page_heading_title_setting_choice_a_callback',
          'section'  => 'yourseobook_single_page_section',
          'type'     => 'text'
         // 'active_callback' => 'is_page',
      ) );
$wp_customize->selective_refresh->add_partial( 'yourseobook_single_page_setting', array(
  'selector' => '#single-page-section', // You can also select a css class
) );
// header-h1
// Test of Text Radio Button Custom Control
$wp_customize->add_setting( 'yourseobook_single_page_heading_page_title_custom_text_position',
  array(
    'default' => 'left',
    'transport' => 'refresh',
    'sanitize_callback' => 'yourseobook_radio_sanitization'
  )
);
$wp_customize->add_control( new Yourseobook_Text_Radio_Button_Custom_Control( $wp_customize, 'yourseobook_single_page_heading_page_title_custom_text_position',
  array(
    'label' => __( 'Title Heading H1 Position', 'yourseobook' ),
    'description' => esc_html__( 'Sample custom control description', 'yourseobook' ),
    'active_callback' => 'single_page_title_position_choice_a_callback',
    'section' => 'yourseobook_single_page_section',
    'choices' => array(
      'left' => __( 'Left', 'yourseobook' ),
      'center' => __( 'Center', 'yourseobook' ),
      'right' => __( 'Right', 'yourseobook'  )
    )
  )
) );




$wp_customize->add_setting( 'yourseobook_single_page_heading_title_font_size_setting',
  array(
  //  'priority' => 14,
    'default' => 32,
    'transport' => 'refresh',
    'sanitize_callback' => 'yourseobook_range_sanitization'
  )
);
$wp_customize->add_control( new Yourseobook_Slider_Custom_Control( $wp_customize, 'yourseobook_single_page_heading_title_font_size_setting',
  array(
    'label' => __( 'Title Heading Title Font Size', 'yourseobook' ),
    'active_callback' => 'page_heading_title_font_size_choice_a_callback',
    'section' => 'yourseobook_single_page_section',
    'input_attrs' => array(
      'min' => 20,
      'max' => 52,
      'step' => 1,
    ),
  )
) );
$wp_customize->selective_refresh->add_partial( 'yourseobook_single_page_heading_title_font_size_setting', array(
    'selector' => '#headertitle', // You can also select a css class
) );
// headertitle
// Above the Fold Heading H1 Font Weight
$wp_customize->add_setting( 'yourseobook_single_page_heading_title_font_weight',
  array(
    'default' => '300',
    'transport' => 'refresh',
    'sanitize_callback' => 'wp_filter_nohtml_kses'
  )
);
$wp_customize->add_control( new Yourseobook_Slider_Custom_Control( $wp_customize, 'yourseobook_single_page_heading_title_font_weight',
  array(
    'label' => __( 'Heading Text Font Weight', 'yourseobook' ),
    'active_callback' => 'single_page_heading_title_font_weight_choice_a_callback',
    'section' => 'yourseobook_single_page_section',
    'input_attrs' => array(
      'min' => 100,
      'max' => 900,
      'step' => 100,
    ),
  )
) );



// Test of WPColorPicker Alpha Color Picker Control
$wp_customize->add_setting( 'yourseobook_header_single_page_text_color_settings',
  array(
    'default' => '#000000',
    'type' => 'theme_mod',
    'capability' => 'edit_theme_options',
    'transport' => 'refresh',
    'sanitize_callback' => 'yourseobook_hex_rgba_sanitization',
  )
);
$wp_customize->add_control( new Yourseobook_Alpha_Color_Control( $wp_customize, 'yourseobook_header_single_page_text_color_settings',
  array(
    'label' => __( 'Heading Title Color', 'yourseobook' ),
    'active_callback' => 'header_single_page_text_color_choice_a_callback',
  //  'description' => esc_html__( 'Alert Background control with Alpha channel', 'yourseobook' ),
    'section' => 'yourseobook_single_page_section',
  )
) );

function yourseobook_single_page_heading_title_setting_choice_a_callback( $control ) {
   if ( $control->manager->get_setting('yourseobook_general_single_pages_settings_demo_radio_control')->value() == 'Page Heading Settings' ) {
      return true;
   } else {
      return false;
   }
}
function choice_a_callback( $control ) {
   if ( $control->manager->get_setting('yourseobook_general_single_pages_settings_demo_radio_control')->value() == 'Page Title Text Settings' ) {
      return true;
   } else {
      return false;
   }
}
function single_page_title_choice_a_callback( $control ) {
   if ( $control->manager->get_setting('yourseobook_general_single_pages_settings_demo_radio_control')->value() == 'Page Title Heading H1' ) {
      return true;
   } else {
      return false;
   }
}
function single_page_title_position_choice_a_callback( $control ) {
   if ( $control->manager->get_setting('yourseobook_general_single_pages_settings_demo_radio_control')->value() == 'Page Title Text Settings' ) {
      return true;
   } else {
      return false;
   }
}

function page_heading_title_font_size_choice_a_callback( $control ) {
   if ( $control->manager->get_setting('yourseobook_general_single_pages_settings_demo_radio_control')->value() == 'Page Title Text Settings' ) {
      return true;
   } else {
      return false;
   }
}

function single_page_heading_title_font_weight_choice_a_callback( $control ) {
   if ( $control->manager->get_setting('yourseobook_general_single_pages_settings_demo_radio_control')->value() == 'Page Title Text Settings' ) {
      return true;
   } else {
      return false;
   }
}

function header_single_page_text_color_choice_a_callback( $control ) {
   if ( $control->manager->get_setting('yourseobook_general_single_pages_settings_demo_radio_control')->value() == 'Page Title Text Settings' ) {
      return true;
   } else {
      return false;
   }
}


// page_heading_title_font_size_weight_choice_a_callback

/*
$wp_customize->add_setting( 'yourseobook_general_single_personal_injury_page_sections_control',
  array(

    'transport' => 'refresh', //'postMessage',
    'sanitize_callback' => 'wp_filter_nohtml_kses'
  )
);
$wp_customize->add_control( 'yourseobook_general_single_personal_injury_page_sections_control',
  array(
    'label' => __( 'Personal Injury Location Page', 'yourseobook' ),
    'type' => 'text',
    'section' => 'yourseobook_single_page_section'
  )
);

*/








// article-contributor





/*
$wp_customize->add_setting( 'yourseobook_practice_areas_page_cta13_settings_display_control',
array(
//'default' => $this->defaults['search_menu_icon'],
'transport' => 'refresh',
'sanitize_callback' => 'yourseobook_switch_sanitization'
)
);
$wp_customize->add_control( new Yourseobook_Toggle_Switch_Custom_control( $wp_customize, 'yourseobook_practice_areas_page_cta13_settings_display_control',
array(
'label' => __( 'CTA13', 'yourseobook' ),
'section' => 'yourseobook_single_page_section'
)
) );


$wp_customize->add_setting( 'yourseobook_practice_areas_page_cta15_settings_display_control',
array(
//'default' => $this->defaults['search_menu_icon'],
'transport' => 'refresh',
'sanitize_callback' => 'yourseobook_switch_sanitization'
)
);
$wp_customize->add_control( new Yourseobook_Toggle_Switch_Custom_control( $wp_customize, 'yourseobook_practice_areas_page_cta15_settings_display_control',
array(
'label' => __( 'CTA15', 'yourseobook' ),
'section' => 'yourseobook_single_page_section'
)
) );


$wp_customize->add_setting( 'yourseobook_practice_areas_page_cta17_settings_display_control',
array(
//'default' => $this->defaults['search_menu_icon'],
'transport' => 'refresh',
'sanitize_callback' => 'yourseobook_switch_sanitization'
)
);
$wp_customize->add_control( new Yourseobook_Toggle_Switch_Custom_control( $wp_customize, 'yourseobook_practice_areas_page_cta17_settings_display_control',
array(
'label' => __( 'CTA17', 'yourseobook' ),
'section' => 'yourseobook_single_page_section'
)
) );
*/
$wp_customize->add_setting( 'yourseobook_single_page_featured_image_display_control',
  array(
    //'default' => $this->defaults['search_menu_icon'],
    'transport' => 'refresh',
    'sanitize_callback' => 'yourseobook_switch_sanitization'
  )
);

$wp_customize->add_control( new Yourseobook_Toggle_Switch_Custom_control( $wp_customize, 'yourseobook_single_page_featured_image_display_control',
  array(
    'label' => __( 'Single Page Featured Image Settings', 'yourseobook' ),
    'section' => 'yourseobook_single_page_section',
    'description' => esc_html__( 'Show or Hide the Featured Image in Content on Single Page', 'yourseobook' )
  )
) );

$wp_customize->selective_refresh->add_partial( 'yourseobook_single_page_featured_image_display_control', array(
    'selector' => '#featimg', // You can also select a css class
) );

$wp_customize->add_setting( 'yourseobook_single_page_featured_image_fallback_default_image_control_settings',
  array(
    //'default' => $this->defaults['search_menu_icon'],
    'transport' => 'refresh',
    'sanitize_callback' => 'yourseobook_switch_sanitization'
  )
);

$wp_customize->add_control( new Yourseobook_Toggle_Switch_Custom_control( $wp_customize, 'yourseobook_single_page_featured_image_fallback_default_image_control_settings',
  array(
    'label' => __( 'Featured Image Fallback Settings', 'yourseobook' ),
    'section' => 'yourseobook_single_page_section',
    'description' => esc_html__( 'Show or Hide the Featured Image Fallback in Content on Single Page', 'yourseobook' )
  )
) );






		$wp_customize->add_setting( 'yourseobook_single_page_featured_image_fallback_default_image_control',
			array(
				//'default' => $this->defaults['sample_default_image'],
				'transport' => 'refresh',
				'sanitize_callback' => 'esc_url_raw'
			)
		);
		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'yourseobook_single_page_featured_image_fallback_default_image_control',
			array(
				'label' => __( 'Default Image Control', 'yourseobook' ),
				'description' => esc_html__( 'This is the description for the Image Control', 'yourseobook' ),
				'section' => 'yourseobook_single_page_section',
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
// yourseobook_single_page_sidebar_display_control

$wp_customize->add_setting( 'yourseobook_single_page_sidebar_display_control',
  array(
    //'default' => $this->defaults['search_menu_icon'],
    'transport' => 'refresh',
    'sanitize_callback' => 'yourseobook_switch_sanitization'
  )
);

$wp_customize->add_control( new Yourseobook_Toggle_Switch_Custom_control( $wp_customize, 'yourseobook_single_page_sidebar_display_control',
  array(
    'label' => __( 'Sigle Page Right Sidebar Settings', 'yourseobook' ),
    'section' => 'yourseobook_single_page_sidebar_section',
    'description' => esc_html__( 'Show or Hide the Aside Single Custom Sidebar in Right', 'yourseobook' )
  )
) );

$wp_customize->selective_refresh->add_partial( 'yourseobook_single_page_sidebar_display_control', array(
    'selector' => '#spaside', // You can also select a css class
) );
