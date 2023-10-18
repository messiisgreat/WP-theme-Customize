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
    'section' => 'yourseobook_land_above_the_fold_sections',
) ) );

//  Above The Fold Text Color
$wp_customize->add_setting( 'yourseobook_main_land_above_the_fold_text_color',
  array(
   // 'default' => 'rgb(0 0 0)',
    'transport' => 'refresh',
    'sanitize_callback' => 'yourseobook_hex_rgba_sanitization',
   // 'priority' => '2'
  )
);
$wp_customize->add_control( new Yourseobook_Alpha_Color_Control( $wp_customize, 'yourseobook_main_land_above_the_fold_text_color',
  array(
    'label' => __( 'Above the Fold Text Color', 'yourseobook' ),
  // 'description' => esc_html__( 'Above the Fold Text Color Settings with Color Picker. The Default Text Color is Black #000000', 'yourseobook' ),
   'type' => 'color',
    'section' => 'yourseobook_land_above_the_fold_sections',
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




// Above the Fold Background
// yourseobook_main_land_above_the_fold_display_control
//  WPColorPicker Alpha Color Picker Control
$wp_customize->add_setting( 'yourseobook_main_land_above_the_fold_background_color',
  array(
   // 'default' => 'rgb(0 0 0)',
    'transport' => 'refresh',
    'sanitize_callback' => 'yourseobook_hex_rgba_sanitization',
   // 'priority' => '2'
  )
);
$wp_customize->add_control( new Yourseobook_Alpha_Color_Control( $wp_customize, 'yourseobook_main_land_above_the_fold_background_color',
  array(
    'label' => __( 'Above the Fold Background Settings', 'yourseobook' ),
   // 'description' => esc_html__( 'Master Header Navigation Menu Background Settings with Color Picker. The Default Background Color is Black #000000', 'yourseobook' ),
   'type' => 'color',
    'section' => 'yourseobook_land_above_the_fold_sections',
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



$wp_customize->add_control( new Yourseobook_Alpha_Color_Control( $wp_customize, 'yourseobook_main_land_above_the_fold_text_color',
  array(
    'label' => __( 'Above the Fold Text Color', 'yourseobook' ),
  // 'description' => esc_html__( 'Above the Fold Text Color Settings with Color Picker. The Default Text Color is Black #000000', 'yourseobook' ),
   'type' => 'color',
    'section' => 'yourseobook_land_above_the_fold_sections',
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






$wp_customize->add_setting( 'yourseobook_main_land_above_the_fold_font_size',
  array(
    'default' => '12px',
    'transport' => 'refresh',
    'sanitize_callback' => 'wp_filter_nohtml_kses',
  )
);
$wp_customize->add_control( new Yourseobook_Slider_Custom_Control( $wp_customize, 'yourseobook_main_land_above_the_fold_font_size',
  array(
    'label' => __( 'Above The Fold Text Font Size', 'yourseobook' ),
    'section' => 'yourseobook_land_above_the_fold_sections',
    'input_attrs' => array(
      'min' => 12,
      'max' => 90,
      'step' => 1,
    ),
  )
) );



$wp_customize->add_setting( 'yourseobook_main_land_above_the_fold_txt_lh',
  array(
   // 'default' => 0,
    'transport' => 'refresh',
    'sanitize_callback' => 'wp_filter_nohtml_kses',
  )
);
$wp_customize->add_control( new Yourseobook_Slider_Custom_Control( $wp_customize, 'yourseobook_main_land_above_the_fold_txt_lh',
  array(
    'label' => __( 'Above The Fold Text Line Height Size', 'yourseobook' ),
    'section' => 'yourseobook_land_above_the_fold_sections',
    'input_attrs' => array(
      'min' => 0,
      'max' => 90,
      'step' => 0.1,
    ),
  )
) );




$wp_customize->add_setting( 'yourseobook_main_land_above_the_fold_txt_fw',
  array(
    'default' => 300,
    'transport' => 'refresh',
    'sanitize_callback' => 'wp_filter_nohtml_kses',
  )
);
$wp_customize->add_control( new Yourseobook_Pill_Checkbox_Custom_Control( $wp_customize, 'yourseobook_main_land_above_the_fold_txt_fw',
  array(
    'label' => __( 'Font Weight Transform', 'yourseobook' ),
    'description' => esc_html__( 'The font weight takes into account language-specific case mapping rules such as the following:', 'yourseobook' ),
    'section' => 'yourseobook_land_above_the_fold_sections',
    'input_attrs' => array(
      'sortable' => true,
      'fullwidth' => false,
    ),
    'choices' => array(
      '100' => __('100','yourseobook' ),
      '200' => __('200','yourseobook' ),
      '300' => __('300','yourseobook' ),
      '400' => __('400','yourseobook' ),
      '500' => __('500','yourseobook' ),
      '600' => __('600','yourseobook' ),
      '700' => __('700','yourseobook' ),
      '800' => __('800','yourseobook' ),
      '900' => __('900','yourseobook' ),

)
  )
) );




$wp_customize->add_setting( 'yourseobook_main_land_above_the_fold_txt_trans',
  array(
    //'default' => $this->defaults['sample_dropdown_select2_control_single'],
    'transport' => 'refresh',
    'sanitize_callback' => 'wp_filter_nohtml_kses'
  )
);

$wp_customize->add_control( new Yourseobook_Pill_Checkbox_Custom_Control( $wp_customize, 'yourseobook_main_land_above_the_fold_txt_trans',
  array(
    'label' => __( 'Text Transform', 'yourseobook' ),
    'description' => esc_html__( 'The text-transform property takes into account language-specific case mapping rules such as the following:', 'yourseobook' ),
    'section' => 'yourseobook_land_above_the_fold_sections',
    'input_attrs' => array(
      'sortable' => true,
      'fullwidth' => false,
    ),
    'choices' => array(
      'capitalize' => __('capitalize','yourseobook' ),
      'uppercase' => __('uppercase','yourseobook' ),
      'lowercase' => __('lowercase','yourseobook' ),
      'none' => __('none','yourseobook' ),
      'full-width' => __('full-width','yourseobook' ),
      'full-size-kana' => __('full-size-kana','yourseobook' ),
      'inherit' => __('inherit','yourseobook' ),
      'initial' => __('initial','yourseobook' ),
      'revert' => __('revert','yourseobook' ),
      'revert-layer' => __('revert-layer','yourseobook' ),
      'unset' => __('unset','yourseobook' ),


)
  )
) );




$wp_customize->add_setting( 'yourseobook_main_land_above_the_fold_txt_font_family',
  array(
    'default' => 'Arial, sans, sans-seriff',
    'transport' => 'refresh',
    'sanitize_callback' => 'yourseobook_text_sanitization',
  )
);
$wp_customize->add_control( new Yourseobook_Pill_Checkbox_Custom_Control( $wp_customize, 'yourseobook_main_land_above_the_fold_txt_font_family',
  array(
   // 'label' => __( 'Above The Fold Font Family', 'yourseobook' ),
  //  'section' => 'yourseobook_land_above_the_fold_sections',
   /* 'input_attrs' => array(
      'sortable' => true,
      'fullwidth' => false,
    ),
    'choices' => array(
      '100' => __('100','yourseobook' ),
      '200' => __('200','yourseobook' ),
      '300' => __('300','yourseobook' ),
      '400' => __('400','yourseobook' ),
      '500' => __('500','yourseobook' ),
      '600' => __('600','yourseobook' ),
      '700' => __('700','yourseobook' ),
      '800' => __('800','yourseobook' ),
      '900' => __('900','yourseobook' ),

)*/
  )
) );




$wp_customize->add_setting( 'yourseobook_main_land_above_the_fold_txt_align',
  array(
    //'default' => $this->defaults['sample_dropdown_select2_control_single'],
    'transport' => 'refresh',
    'sanitize_callback' => 'wp_filter_nohtml_kses'
  )
);

$wp_customize->add_control( new Yourseobook_Pill_Checkbox_Custom_Control( $wp_customize, 'yourseobook_main_land_above_the_fold_txt_align',
  array(
    'label' => __( 'Text Alignment', 'yourseobook' ),
    'description' => esc_html__( 'Text Alignment property takes into account language-specific case mapping rules such as the following:', 'yourseobook' ),
    'section' => 'yourseobook_land_above_the_fold_sections',
    'input_attrs' => array(
      'sortable' => false,
      'fullwidth' => false,
    ),
    'choices' => array(
      'start' => __('start','yourseobook' ),
      'end' => __('end','yourseobook' ),
      'left' => __('left','yourseobook' ),
      'right' => __('right','yourseobook' ),
      'center' => __('center','yourseobook' ),
      'justify' => __('justify','yourseobook' ),
      'justify-all' => __('justify-all','yourseobook' ),
      'match-parent' => __('match-parent','yourseobook' ),
       '-moz-center' => __('-moz-center','yourseobook' ),
      '-webkit-center' => __('-webkit-center','yourseobook' ),
      'inherit' => __('inherit','yourseobook' ),
      'initial' => __('initial','yourseobook' ),
      'revert' => __('revert','yourseobook' ),
      'revert-layer' => __('revert-layer','yourseobook' ),
      'unset' => __('unset','yourseobook' ),
)
  )
) );




/// Above The Fold Heading H1

$wp_customize->add_setting( 'yourseobook_main_land_above_the_fold_heading_h1_title_display_control',
  array(
    //'default' => $this->defaults['search_menu_icon'],
    'transport' => 'refresh',
    'sanitize_callback' => 'yourseobook_switch_sanitization'
  )
);

$wp_customize->add_control( new Yourseobook_Toggle_Switch_Custom_control( $wp_customize, 'yourseobook_main_land_above_the_fold_heading_h1_title_display_control',
  array(
    'label' => __( 'Above The Fold Heading H1', 'yourseobook' ),
    'section' => 'yourseobook_land_above_the_fold_sections'
  )
) );

$wp_customize->selective_refresh->add_partial( 'yourseobook_main_land_above_the_fold_heading_h1_title_display_control', array(
    'selector' => '.above-heading-h1', // You can also select a css class
) );


// yourseobook_main_land_above_the_fold_heading_h1_title_text_area


$wp_customize->add_setting( 'yourseobook_main_land_above_the_fold_heading_h1_title_text_area',
  array(

    'transport' => 'refresh', //'postMessage',
    'sanitize_callback' => 'wp_filter_nohtml_kses'
  )
);
$wp_customize->add_control( 'yourseobook_main_land_above_the_fold_heading_h1_title_text_area',
  array(
    //'label' => __( 'Above The Fold H1 Title Text', 'yourseobook' ),
    //'type' => 'text',
  //  'section' => 'yourseobook_land_above_the_fold_sections'
  )
);



// Above the Fold Content Text Editor


// Test of TinyMCE control
$wp_customize->add_setting( 'yourseobook_main_land_above_the_fold_text_content_section_tinymce_editor',
array(
                    //'default' => $this->defaults['sample_tinymce_editor'],
                    'transport' => 'refresh',
                    'sanitize_callback' => 'wp_kses_post'
)
);
$wp_customize->add_control( new Yourseobook_TinyMCE_Custom_control( $wp_customize, 'yourseobook_main_land_above_the_fold_text_content_section_tinymce_editor',
array(
                    'label' => __( 'Text Editor ', 'yourseobook' ),
                    // 'active_callback' => 'yourseobook_main_land_above_the_fold_text_content_section_tinymce_editor_callback',
                    'description' => __( 'This is a TinyMCE Editor Custom Control', 'yourseobook' ),
                    'section' => 'yourseobook_land_above_the_fold_sections',
                    'input_attrs' => array(
                                        'menubar' => true,
                                        'toolbar1' => 'formatselect bold numlist bullist link wp_adv',
                                        'toolbar2' => 'redo undo italic underline alignleft aligncenter alignright forecolor blockquote outdent indent',
                                        'mediaButtons' => false,
                                        'teeny' => true,
                    )
)
) );
$wp_customize->selective_refresh->add_partial( 'yourseobook_main_land_above_the_fold_text_content_section_tinymce_editor',
array(
                    'selector' => '.tinymce',
                    // 'container_inclusive' => true,
                    // 'render_callback' => 'yourseobook_main_land_above_the_fold_text_content_section_tinymce_editor_callback',
                    // 	'fallback_refresh' => true,
)
);

