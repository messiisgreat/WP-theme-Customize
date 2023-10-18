<?php

// yourseobook_main_land_above_the_fold_styles_panel
$wp_customize->add_setting( 'yourseobook_landing_seo_display_control_settings', array(
    // Add your setting arguments here
    'transport' => 'refresh',
    'sanitize_callback' => 'yourseobook_switch_sanitization'
) );

$wp_customize->add_control( new Yourseobook_SEO_Custom_Control( $wp_customize, 'yourseobook_landing_seo_display_control_settings', array(
    'label' => __( 'SERP SEO Header MetaTT/MetaD', 'yourseobook' ),
    'section' => 'yourseobook_landing_seo_serp_header_meta_sections',
) ) );


$wp_customize->add_setting( 'yourseobook_landing_seo_display_control',
  array(
   // 'default' => $this->defaults['landing_meta_title_tag'],
    'transport' => 'refresh',
    'sanitize_callback' => 'yourseobook_switch_sanitization'
  )
);

$wp_customize->add_control( new Yourseobook_Toggle_Switch_Custom_control( $wp_customize, 'yourseobook_landing_seo_display_control',
  array(
    'label' => __( 'Header SEO Meta Settings', 'yourseobook' ),
    'section' => 'yourseobook_landing_seo_sections',
    'description' => 'The Your SEO Book SEO Function for Header Metas provides a comprehensive solution for optimizing your website meta tags, specifically the Meta TT (meta title tag) and MetaD (meta description). With this powerful function, you can effortlessly customize and fine-tune these crucial elements to improve your site search engine visibility and user experience. By dynamically generating meta titles and descriptions, you can enhance your website click-through rates and ensure that your pages accurately reflect their content.With the Your SEO Book SEO Function for Header Metas, you can easily optimize these critical elements, ensuring that your website stands out in search results and attracts the right audience.'
  )
) );


    // Add controls for meta title and meta description
    $wp_customize->add_setting( 'yourseobook_landing_seo_meta_title', array(

       // 'default' => 'Header Meta SEO MetaTT',
    'transport' => 'refresh',
    'sanitize_callback' => 'wp_filter_nohtml_kses'
    ) );
    $wp_customize->add_control( 'yourseobook_landing_seo_meta_title', array(
        'label' => 'Landing Header Meta Title Tag',
        'section' => 'yourseobook_landing_seo_sections',
        'type' => 'text',
        'description' => 'With the Meta TT feature, you have full control over crafting compelling and keyword-rich titles for each page. You can easily incorporate relevant keywords, catchy phrases, and branding elements to capture the attention of search engine users. This functionality empowers you to create unique and informative titles that accurately represent the pages content, encouraging search engines to display your website prominently in search results.'
    ) );
    // Enable Disable The Brand Name in the MetaTT

$wp_customize->add_setting( 'yourseobook_landing_seo_meta_title_add_brand_name_display_control',
  array(
    //'default' => $this->defaults['search_menu_icon'],
    'transport' => 'refresh',
    'sanitize_callback' => 'yourseobook_switch_sanitization'
  )
);

$wp_customize->add_control( new Yourseobook_Toggle_Switch_Custom_control( $wp_customize, 'yourseobook_landing_seo_meta_title_add_brand_name_display_control',
  array(
    'label' => __( 'Enable Brand Name in the MetaTT', 'yourseobook' ),
    'section' => 'yourseobook_landing_seo_sections'
  )
) );




    $wp_customize->add_setting( 'yourseobook_landing_seo_meta_description', array(
      // 'default' => 'Landing Header Meta Description',
    'transport' => 'refresh',
    'sanitize_callback' => 'wp_filter_nohtml_kses'
    ) );
    $wp_customize->add_control( 'yourseobook_landing_seo_meta_description', array(
        'label' => 'Landing Header Meta Description',
        'section' => 'yourseobook_landing_seo_sections',
        'type' => 'textarea',
         'description' => 'The MetaD capability enables you to provide concise yet impactful descriptions for your web pages. By utilizing carefully chosen keywords and concise language, you can create compelling snippets that entice users to click through to your website. Crafting engaging meta descriptions not only improves your search engine visibility but also enhances the user experience by providing clear and concise information about the pages content.'
    ) );

