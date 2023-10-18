<?php



// yourseobook_brand_sections
// yourseobook_brand_panel


$wp_customize->add_setting( 'yourseobook_brand_display_control', array(
    //'default' => $this->defaults['search_menu_icon'],
    'transport' => 'refresh',
    'sanitize_callback' => 'yourseobook_switch_sanitization'
) );

$description = 'Enable/Disable your Brand Settings
<div class="customizer-details-content">
    <p>Add your Brand/Company Main Phone Number. This is Sitewide Phone Number and will be Displayed on Fixed positions at the Header Menu, Sidebar Contact Widget, Footer Contact Widget.</p>
    <p>The Brand Settings section allows you to customize and define your brand identity. Within this section, you will find options like Site-wide Brand Name, which lets you set the primary name for your brand that will be displayed consistently across your site.</p>
</div>';

$wp_customize->add_control( new Yourseobook_Toggle_Switch_Custom_control( $wp_customize, 'yourseobook_brand_display_control', array(
    'label' => __( 'Brand Settings', 'yourseobook' ),
    'section' => 'yourseobook_brand_sections',
    'description' => $description
) ) );

$wp_customize->selective_refresh->add_partial( 'yourseobook_brand_display_control', array(
    'selector' => '.main-brand', // You can also select a CSS class
) );




/*
$wp_customize->add_setting( 'yourseobook_brand_display_control',
  array(
    //'default' => $this->defaults['search_menu_icon'],
    'transport' => 'refresh',
    'sanitize_callback' => 'yourseobook_switch_sanitization'
  )
);

$wp_customize->add_control( new Yourseobook_Toggle_Switch_Custom_control( $wp_customize, 'yourseobook_brand_display_control',
  array(
    'label' => __( 'Brand Settings', 'yourseobook' ),
    'section' => 'yourseobook_brand_sections',
    'description' => '<details><summary>Enable/Disable your Brand Settings</summary><p>Add your Brand/Company Main Phone Number. This is Sitewide Phone Number and will be Displayed on Fixed positions at the Header Menu, Sidebar Contact Widget, Footer Contact Widget. The Brand Settings section allows you to customize and define your brand identity. Within this section, you will find options like Site-wide Brand Name, which lets you set the primary name for your brand that will be displayed consistently across your site. </p></details>'
  )
) );

$wp_customize->selective_refresh->add_partial( 'yourseobook_brand_display_control', array(
    'selector' => '.main-brand', // You can also select a css class
) );
*/



$wp_customize->add_setting( 'yourseobook_main_brand_name_text_control',
  array(

    'transport' => 'refresh', //'postMessage',
    'sanitize_callback' => 'wp_filter_nohtml_kses'
  )
);
$wp_customize->add_control( 'yourseobook_main_brand_name_text_control',
  array(
    'label' => __( 'Sitewide Brand Name', 'yourseobook' ),
    'type' => 'text',
    'section' => 'yourseobook_brand_sections'
  )
);
$wp_customize->selective_refresh->add_partial( 'yourseobook_brand_display_control', array(
    'selector' => '.footer-brand-text', // You can also select a css class
) );


// Main Brand Moto
$wp_customize->add_setting( 'yourseobook_main_brand_short_description_text_control',
  array(

    'transport' => 'refresh', //'postMessage',
    'sanitize_callback' => 'wp_filter_nohtml_kses'
  )
);
$wp_customize->add_control( 'yourseobook_main_brand_short_description_text_control',
  array(
    'label' => __( 'Brand Short Description Text', 'yourseobook' ),
    'type' => 'textrea',
    'section' => 'yourseobook_brand_sections'
  )
);
$wp_customize->selective_refresh->add_partial( 'yourseobook_main_brand_short_description_text_control', array(
    'selector' => '.sw-brand-short-desc', // You can also select a css class
) );



// Your Company Brand Main Phone Number
// Sitewide Phone Number

$wp_customize->add_setting( 'yourseobook_general_sitewide_brand_phone_number_control',
  array(

    'transport' => 'refresh', //'postMessage',
    'sanitize_callback' => 'wp_filter_nohtml_kses'
  )
);

$wp_customize->add_control( new Yourseobook_Toggle_Switch_Custom_control( $wp_customize, 'yourseobook_general_sitewide_brand_phone_number_control',
  array(
    'label' => __( 'Brand Telephone Number', 'yourseobook' ),
    'section' => 'yourseobook_brand_sections',
    'description' => 'Add your Brand/Company Main Phone Number. This is Sitewide Phone Number and will be Displayed on Fixed positions at the Header Menu, Sidebar Contact Widget, Footer Contact Widget.'
  )
) );

$wp_customize->selective_refresh->add_partial( 'yourseobook_general_sitewide_brand_phone_number_control', array(
    'selector' => '.brandphonenumber', // You can also select a css class
) );



// yourseobook_general_sitewide_brand_phone_number_text_control
$wp_customize->add_setting( 'yourseobook_general_sitewide_brand_phone_number_text_control',
  array(

    'transport' => 'refresh', //'postMessage',
    'sanitize_callback' => 'wp_filter_nohtml_kses'
  )
);
$wp_customize->add_control( 'yourseobook_general_sitewide_brand_phone_number_text_control',
  array(
    'label' => __( 'Edit Brand Telephone Number', 'yourseobook' ),
    'type' => 'textrea',
    'section' => 'yourseobook_brand_sections',
    'description' => 'Add your Brand/Company Main Phone Number in the Input Field. This is Sitewide Phone Number and will be Displayed on Fixed positions at the Header Menu, Sidebar Contact Widget, Footer Contact Widget.'
  )
);
$wp_customize->selective_refresh->add_partial( 'yourseobook_general_sitewide_brand_phone_number_text_control', array(
    'selector' => '.header-phone', // You can also select a css class
) );




