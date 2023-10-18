<?php


// Fix the Bootstrap Overlap wp admin bar navigation when logged in
function yourseobook_wp_head() {
    if (is_user_logged_in()) {
        echo '<style>'.PHP_EOL;
        echo 'body{ padding-top: 0px !important; }'.PHP_EOL;
        echo 'body.body-logged-in nav.master-header-nav-menu{ top: 32px !important; }'.PHP_EOL;
// logged-in customize-partial-edit-shortcuts-shown
        echo 'body.logged-in.customize-partial-edit-shortcuts-shown nav.master-header-nav-menu{ top: 0px !important; }'.PHP_EOL;
        echo 'body.logged-in.customize-partial-edit-shortcuts-hidden nav.master-header-nav-menu{ top: 0px !important; }'.PHP_EOL;
        echo 'body.home.page-template.page-template-page-templates.page-template-landing.page-template-page-templateslanding-php.page.page-id-1.logged-in.customize-partial-edit-shortcuts-shown main{ top: auto !important;position:relative; }'.PHP_EOL;
        echo 'body.home.page-template.page-template-page-templates.page-template-landing.page-template-page-templateslanding-php.page.page-id-1.logged-in.customize-partial-edit-shortcuts-shown nav.master-header-nav-menu{ top: 0px !important; }'.PHP_EOL;
        echo 'body.body-logged-in.customize-partial-edit-shortcuts-hidden nav.master-header-nav-menu{ top: 0px !important; }'.PHP_EOL;

        echo 'body.logged-in nav.master-header-nav-menu{ top: 32px !important; }'.PHP_EOL;
        echo 'body.logged-in form#customize-controls.wp-full-overlay-sidebar { background: red !important; width: 500px !important; }'.PHP_EOL;
        echo '</style>'.PHP_EOL;
    }
}

add_action('wp_head', 'yourseobook_wp_head');


// End Main Header Navigation Menu Margin Settings
function yourseobook_header_main_navigation_master_menu_styles() {
    $header_main_navigation_master_menu_background_color = get_theme_mod( 'yourseobook_header_main_navigation_master_menu_background_color' );
    $header_main_navigation_master_menu_width = get_theme_mod( 'yourseobook_header_main_navigation_master_menu_width' );
    $header_main_navigation_master_menu_height = get_theme_mod( 'yourseobook_header_main_navigation_master_menu_height' );
    $header_main_navigation_master_menu_margin = get_theme_mod( 'yourseobook_header_main_navigation_master_menu_margin' );
    $header_main_navigation_master_menu_padding = get_theme_mod( 'yourseobook_header_main_navigation_master_menu_padding' );
    
// Above The Fold Styles and Customisation

    $main_land_above_the_fold_background = get_theme_mod( 'yourseobook_main_land_above_the_fold_background_color' );
    $main_land_above_the_fold_text_color = get_theme_mod( 'yourseobook_main_land_above_the_fold_text_color' );
    $main_land_above_the_fold_text_fs = get_theme_mod( 'yourseobook_main_land_above_the_fold_font_size' );
    $main_land_above_the_fold_text_lh = get_theme_mod( 'yourseobook_main_land_above_the_fold_txt_lh' );
    $main_land_above_the_fold_text_fw = get_theme_mod( 'yourseobook_main_land_above_the_fold_txt_fw' );
    $main_land_above_the_fold_text_font_fam = get_theme_mod( 'yourseobook_main_land_above_the_fold_txt_font_family' );
    $main_land_above_the_fold_text_trans = get_theme_mod( 'yourseobook_main_land_above_the_fold_txt_trans' );
    $main_land_above_the_fold_text_align = get_theme_mod( 'yourseobook_main_land_above_the_fold_txt_align' );
    
// Start Below The Fold Styles and Customisation

    $main_land_below_the_fold_background = get_theme_mod( 'yourseobook_main_land_below_the_fold_background_color' );
    $main_land_below_the_fold_heading_title_color = get_theme_mod( 'yourseobook_main_land_below_the_fold_heading_title_color' );
    $main_land_below_the_fold_content_box_color = get_theme_mod( 'yourseobook_main_land_below_the_fold_content_box_color' );
    

if ( $main_land_below_the_fold_background != 'rgba(0,0,0,1)' || $main_land_below_the_fold_heading_title_color != 'rgba(0,0,0,1)' || $main_land_below_the_fold_content_box_color != 'rgba(255,255,255,1)' )
// Below The Fold Styles and Customisation


// General Buttons Settings
// yourseobook_website_general_buttons_font_size
    $website_general_buttons_font_size = get_theme_mod( 'yourseobook_website_general_buttons_font_size' );
    $website_general_buttons_background_color = get_theme_mod( 'yourseobook_website_general_buttons_background_color' );
    $website_general_buttons_width = get_theme_mod( 'yourseobook_website_general_buttons_width' );
    $website_general_buttons_margin = get_theme_mod( 'yourseobook_website_general_buttons_margin' );
    $website_general_buttons_padding = get_theme_mod( 'yourseobook_website_general_buttons_padding' );
    $website_general_buttons_border_radius = get_theme_mod( 'yourseobook_website_general_buttons_border_radius' );
    $website_general_buttons_text_color = get_theme_mod( 'yourseobook_website_general_buttons_text_color' );


    
// yourseobook_website_header_cta_button_background_color
// Footer Styles
    $footer_scroll_to_top_background = get_theme_mod( 'yourseobook_footer_scroll_to_top_background_color' );



//

    $header_cta_button_background_color = get_theme_mod( 'yourseobook_header_cta_button_background_color' );
    // $header_cta_button_opacity = get_theme_mod( 'yourseobook_header_cta_button_opacity' );
    $header_cta_button_font_size = get_theme_mod( 'yourseobook_header_cta_button_font_size' );
    // $header_cta_button_text_transform = get_theme_mod( 'yourseobook_header_cta_button_text_transform' );
    $header_cta_button_text_decoration = get_theme_mod( 'yourseobook_header_cta_button_text_decoration' );
    $header_cta_button_width = get_theme_mod( 'yourseobook_header_cta_button_width' );
    $header_cta_button_height = get_theme_mod( 'yourseobook_header_cta_button_height');
    $header_cta_button_padding_top = get_theme_mod( 'yourseobook_header_cta_button_padding_top' );
    $header_cta_button_padding_right = get_theme_mod( 'yourseobook_header_cta_button_padding_right' );
    $header_cta_button_padding_bottom = get_theme_mod( 'yourseobook_header_cta_button_padding_bottom' );
    $header_cta_button_padding_left = get_theme_mod( 'yourseobook_header_cta_button_padding_left' );
    $header_cta_button_margin_top = get_theme_mod( 'yourseobook_header_cta_button_margin_top' );
    $header_cta_button_margin_right = get_theme_mod( 'yourseobook_header_cta_button_margin_right' );
    $header_cta_button_margin_bottom = get_theme_mod( 'yourseobook_header_cta_button_margin_bottom' );
    $header_cta_button_margin_left = get_theme_mod( 'yourseobook_header_cta_button_margin_left' );
    $header_cta_button_border_radius = get_theme_mod( 'yourseobook_header_cta_button_border_radius' );
    $header_cta_button_border_size = get_theme_mod( 'yourseobook_header_cta_button_border_size' );
    $header_cta_button_border_type = get_theme_mod( 'yourseobook_header_cta_button_border_type' );
    $header_cta_button_border_color = get_theme_mod( 'yourseobook_header_cta_button_border_color' );
    $header_cta_button_text_color = get_theme_mod( 'yourseobook_header_cta_button_text_color' );
    // $header_cta_button_float = get_theme_mod( 'yourseobook_header_cta_button_float' );
    $header_cta_button_font_weight = get_theme_mod( 'yourseobook_header_cta_button_font_weight' );
    $header_cta_button_text_align = get_theme_mod( 'yourseobook_header_cta_button_text_align' );
    // $header_cta_button_display = get_theme_mod( 'yourseobook_header_cta_button_display' );
    // $header_cta_button_position = get_theme_mod( 'yourseobook_header_cta_button_position' );
    // $header_cta_button_text_shadow_offset_x = get_theme_mod( 'yourseobook_header_cta_button_box_shadow_top' );
    // $header_cta_button_text_shadow_offset_y = get_theme_mod( 'yourseobook_header_cta_button_box_shadow_top' );
    // $header_cta_button_text_shadow_offset_blur_radius = get_theme_mod( 'yourseobook_header_cta_button_box_shadow_top' );
    // $header_cta_button_text_shadow_color = get_theme_mod( 'yourseobook_header_cta_button_box_shadow_top' );
    // $header_cta_button_box_shadow = get_theme_mod( 'yourseobook_header_cta_button_box_shadow' );
    // $header_cta_button_box_shadow_top = get_theme_mod( 'yourseobook_header_cta_button_box_shadow_top' );
    // $header_cta_button_box_shadow_right = get_theme_mod( 'yourseobook_header_cta_button_box_shadow_right' );
    // $header_cta_button_box_shadow_bottom = get_theme_mod( 'yourseobook_header_cta_button_box_shadow_bottom' );
    // $header_cta_button_box_shadow_left = get_theme_mod( 'yourseobook_header_cta_button_box_shadow_left' );
    // $header_cta_button_box_shadow_color = get_theme_mod( 'yourseobook_header_cta_button_box_shadow_color' );

// Header Logo Image Settings
// yourseobook_header_logo_default_image_width
//yourseobook_header_logo_default_image_height

    $header_navigation_menu_logo_width = get_theme_mod( 'yourseobook_header_logo_default_image_width' );
    $header_navigation_menu_logo_height = get_theme_mod( 'yourseobook_header_logo_default_image_height' );

if ( $header_navigation_menu_logo_width != '60px'  || $header_navigation_menu_logo_height != '60px')

// End Header Logo Settings

  
    $header_navigation_menu_search_bar_background_color = get_theme_mod( 'yourseobook_header_navigation_menu_search_bar_background_color' );
    // $header_navigation_menu_search_bar_opacity = get_theme_mod( 'yourseobook_header_navigation_menu_search_bar_opacity' );
    $header_navigation_menu_search_bar_font_size = get_theme_mod( 'yourseobook_header_navigation_menu_search_bar_font_size' );
    // $header_navigation_menu_search_bar_text_transform = get_theme_mod( 'yourseobook_header_navigation_menu_search_bar_text_transform' );
    // $header_navigation_menu_search_bar_text_decoration = get_theme_mod( 'yourseobook_header_navigation_menu_search_bar_text_decoration' );
    $header_navigation_menu_search_bar_width = get_theme_mod( 'yourseobook_header_navigation_menu_search_bar_width' );
    // $header_navigation_menu_search_bar_height = get_theme_mod( 'yourseobook_header_navigation_menu_search_bar_height');
    $header_navigation_menu_search_bar_padding_top = get_theme_mod( 'yourseobook_header_navigation_menu_search_bar_padding_top' );
    $header_navigation_menu_search_bar_padding_right = get_theme_mod( 'yourseobook_header_navigation_menu_search_bar_padding_right' );
    $header_navigation_menu_search_bar_padding_bottom = get_theme_mod( 'yourseobook_header_navigation_menu_search_bar_padding_bottom' );
    $header_navigation_menu_search_bar_padding_left = get_theme_mod( 'yourseobook_header_navigation_menu_search_bar_padding_left' );
    $header_navigation_menu_search_bar_margin_top = get_theme_mod( 'yourseobook_header_navigation_menu_search_bar_margin_top' );
    $header_navigation_menu_search_bar_margin_right = get_theme_mod( 'yourseobook_header_navigation_menu_search_bar_margin_right' );
    $header_navigation_menu_search_bar_margin_bottom = get_theme_mod( 'yourseobook_header_navigation_menu_search_bar_margin_bottom' );
    $header_navigation_menu_search_bar_margin_left = get_theme_mod( 'yourseobook_header_navigation_menu_search_bar_margin_left' );
     $header_navigation_menu_search_bar_border_radius = get_theme_mod( 'yourseobook_header_navigation_menu_search_bar_border_radius' );
     $header_navigation_menu_search_bar_border_size = get_theme_mod( 'yourseobook_header_navigation_menu_search_bar_border_size' );
     $header_navigation_menu_search_bar_border_type = get_theme_mod( 'yourseobook_header_navigation_menu_search_bar_border_type' );
     $header_navigation_menu_search_bar_border_color = get_theme_mod( 'yourseobook_header_navigation_menu_search_bar_border_color' );
    // $header_navigation_menu_search_bar_text_color = get_theme_mod( 'yourseobook_header_navigation_menu_search_bar_text_color' );
    // $header_navigation_menu_search_bar_float = get_theme_mod( 'yourseobook_header_navigation_menu_search_bar_float' );
    // $header_navigation_menu_search_bar_font_weight = get_theme_mod( 'yourseobook_header_navigation_menu_search_bar_font_weight' );
    // $header_navigation_menu_search_bar_text_align = get_theme_mod( 'yourseobook_header_navigation_menu_search_bar_text_align' );
    // $header_navigation_menu_search_bar_display = get_theme_mod( 'yourseobook_header_navigation_menu_search_bar_display' );
    // $header_navigation_menu_search_bar_position = get_theme_mod( 'yourseobook_header_navigation_menu_search_bar_position' );
    // $header_navigation_menu_search_bar_text_shadow_offset_x = get_theme_mod( 'yourseobook_header_navigation_menu_search_bar_box_shadow_top' );
    // $header_navigation_menu_search_bar_text_shadow_offset_y = get_theme_mod( 'yourseobook_header_navigation_menu_search_bar_box_shadow_top' );
    // $header_navigation_menu_search_bar_text_shadow_offset_blur_radius = get_theme_mod( 'yourseobook_header_navigation_menu_search_bar_box_shadow_top' );
    // $header_navigation_menu_search_bar_text_shadow_color = get_theme_mod( 'yourseobook_header_navigation_menu_search_bar_box_shadow_top' );
    // $header_navigation_menu_search_bar_box_shadow = get_theme_mod( 'yourseobook_header_navigation_menu_search_bar_box_shadow' );
    // $header_navigation_menu_search_bar_box_shadow_top = get_theme_mod( 'yourseobook_header_navigation_menu_search_bar_box_shadow_top' );
    // $header_navigation_menu_search_bar_box_shadow_right = get_theme_mod( 'yourseobook_header_navigation_menu_search_bar_box_shadow_right' );
    // $header_navigation_menu_search_bar_box_shadow_bottom = get_theme_mod( 'yourseobook_header_navigation_menu_search_bar_box_shadow_bottom' );
    // $header_navigation_menu_search_bar_box_shadow_left = get_theme_mod( 'yourseobook_header_navigation_menu_search_bar_box_shadow_left' );
    // $header_navigation_menu_search_bar_box_shadow_color = get_theme_mod( 'yourseobook_header_navigation_menu_search_bar_box_shadow_color' );



    $header_nav_menu_background_color = get_theme_mod( 'yourseobook_header_nav_menu_background_color' );
    $header_nav_menu_links_color = get_theme_mod( 'yourseobook_header_nav_menu_links_color' );
    // $header_nav_menu_opacity = get_theme_mod( 'header_nav_menu_opacity' );
    // $header_nav_menu_font_size = get_theme_mod( 'yourseobook_header_nav_menu_font_size' );
    // $header_nav_menu_text_transform = get_theme_mod( 'yourseobook_header_nav_menu_text_transform' );
    // $header_nav_menu_text_decoration = get_theme_mod( 'yourseobook_header_nav_menu_text_decoration' );
    $header_nav_menu_width = get_theme_mod( 'yourseobook_header_nav_menu_width' );
    // $header_nav_menu_height = get_theme_mod( 'yourseobook_header_nav_menu_height');
    // $header_nav_menu_padding_top = get_theme_mod( 'yourseobook_header_nav_menu_padding_top' );
    // $header_nav_menu_padding_right = get_theme_mod( 'yourseobook_header_nav_menu_padding_right' );
    // $header_nav_menu_padding_bottom = get_theme_mod( 'yourseobook_header_nav_menu_padding_bottom' );
    // $header_nav_menu_padding_left = get_theme_mod( 'yourseobook_header_nav_menu_padding_left' );
    // $header_nav_menu_margin_top = get_theme_mod( 'yourseobook_header_nav_menu_margin_top' );
    // $header_nav_menu_margin_right = get_theme_mod( 'yourseobook_header_nav_menu_margin_right' );
    // $header_nav_menu_margin_bottom = get_theme_mod( 'yourseobook_header_nav_menu_margin_bottom' );
    // $header_nav_menu_margin_left = get_theme_mod( 'yourseobook_header_nav_menu_margin_left' );
     $header_nav_menu_border_radius = get_theme_mod( 'yourseobook_header_nav_menu_border_radius' );
     $header_nav_menu_border_size = get_theme_mod( 'yourseobook_header_nav_menu_border_size' );
     $header_nav_menu_border_type = get_theme_mod( 'yourseobook_header_nav_menu_border_type' );
     $header_nav_menu_border_color = get_theme_mod( 'yourseobook_header_nav_menu_border_color' );
    // $header_nav_menu_text_color = get_theme_mod( 'yourseobook_header_nav_menu_text_color' );
    // $header_nav_menu_float = get_theme_mod( 'yourseobook_header_nav_menu_float' );
    // $header_nav_menu_font_weight = get_theme_mod( 'yourseobook_header_nav_menu_font_weight' );
    // $header_nav_menu_text_align = get_theme_mod( 'yourseobook_header_nav_menu_text_align' );
    // $header_nav_menu_display = get_theme_mod( 'yourseobook_header_nav_menu_display' );
    // $header_nav_menu_position = get_theme_mod( 'yourseobook_header_nav_menu_position' );
    // $header_nav_menu_text_shadow_offset_x = get_theme_mod( 'yourseobook_header_nav_menu_box_shadow_top' );
    // $header_nav_menu_text_shadow_offset_y = get_theme_mod( 'yourseobook_header_nav_menu_box_shadow_top' );
    // $header_nav_menu_text_shadow_offset_blur_radius = get_theme_mod( 'yourseobook_header_nav_menu_box_shadow_top' );
    // $header_nav_menu_text_shadow_color = get_theme_mod( 'yourseobook_header_nav_menu_box_shadow_top' );
    // $header_nav_menu_box_shadow = get_theme_mod( 'yourseobook_header_nav_menu_box_shadow' );
    // $header_nav_menu_box_shadow_top = get_theme_mod( 'yourseobook_header_nav_menu_box_shadow_top' );
    // $header_nav_menu_box_shadow_right = get_theme_mod( 'yourseobook_header_nav_menu_box_shadow_right' );
    // $header_nav_menu_box_shadow_bottom = get_theme_mod( 'yourseobook_header_nav_menu_box_shadow_bottom' );
    // $header_nav_menu_box_shadow_left = get_theme_mod( 'yourseobook_header_nav_menu_box_shadow_left' );
    // $header_nav_menu_box_shadow_color = get_theme_mod( 'yourseobook_header_nav_menu_box_shadow_color' );



$yourseobook_footer_background = get_theme_mod( 'yourseobook_footer_background_color' );
$yourseobook_footer_text_color = get_theme_mod( 'yourseobook_main_footer_text_color' );
$yourseobook_main_footer_links_color = get_theme_mod( 'yourseobook_main_footer_links_text_color' );
$yourseobook_main_footer_links_txt_decoration = get_theme_mod( 'yourseobook_main_footer_links_text_decoration' );
$yourseobook_main_footer_links_font_weight = get_theme_mod( 'yourseobook_main_footer_links_font_weight_settings' );
$yourseobook_main_footer_links_font_size = get_theme_mod( 'yourseobook_main_footer_links_font_size_settings' );
$yourseobook_main_footer_widgets_title_font_size = get_theme_mod( 'yourseobook_main_footer_widgets_title_font_size_settings' );
$yourseobook_main_footer_widgets_title_text_color = get_theme_mod( 'yourseobook_main_footer_widgets_title_font_text_color' );
$yourseobook_main_footer_widgets_title_font_weight = get_theme_mod( 'yourseobook_main_footer_widgets_title_font_weight_settings' );

$yourseobook_footer_margin_top = get_theme_mod( 'yourseobook_main_footer_margin_top' );
$yourseobook_footer_margin_right = get_theme_mod( 'yourseobook_main_footer_margin_right' );
$yourseobook_footer_margin_bottom = get_theme_mod( 'yourseobook_main_footer_margin_bottom' );
$yourseobook_footer_margin_left = get_theme_mod( 'yourseobook_main_footer_margin_left' );


$yourseobook_footer_padding_top = get_theme_mod( 'yourseobook_main_footer_padding_top' );
$yourseobook_footer_padding_right = get_theme_mod( 'yourseobook_main_footer_padding_right' );
$yourseobook_footer_padding_bottom = get_theme_mod( 'yourseobook_main_footer_padding_bottom' );
$yourseobook_footer_padding_left = get_theme_mod( 'yourseobook_main_footer_padding_left' );


if (
$yourseobook_footer_background != 'rgba(0,0,0,1)' ||
$yourseobook_footer_text_color != 'rgba(255,255,255,1)' ||
$yourseobook_main_footer_links_color != 'rgba(255,255,255,1)' ||
$yourseobook_main_footer_links_txt_decoration != 'none' ||
$yourseobook_main_footer_links_font_weight != '300' ||
$yourseobook_main_footer_links_font_size != '16px' ||
$yourseobook_main_footer_widgets_title_font_size != '20px' ||
$yourseobook_main_footer_widgets_title_text_color != 'rgba(255,2255,255,1)' ||
$yourseobook_main_footer_widgets_title_font_weight != '500' ||
$yourseobook_footer_margin_top != '0px' ||
$yourseobook_footer_margin_right != '0px' ||
$yourseobook_footer_margin_bottom != '0px' ||
$yourseobook_footer_margin_left != '0px' ||
$yourseobook_footer_padding_top != '0px' ||
$yourseobook_footer_padding_right != '0px' ||
$yourseobook_footer_padding_bottom != '0px' ||
$yourseobook_footer_padding_left != '0px'
)



if ( $header_main_navigation_master_menu_background_color != 'rgb(0 0 0)'  || $header_main_navigation_master_menu_width != '100%' || $header_main_navigation_master_menu_height != '40px' || $header_main_navigation_master_menu_margin != '0px' || $header_main_navigation_master_menu_padding != '0px' )

if ( $main_land_above_the_fold_background != 'rgb(0 0 0)' || $main_land_above_the_fold_text_color != 'rgb(0 0 0)'  || $main_land_above_the_fold_text_fs != '12px' || $main_land_above_the_fold_text_lh != '0' || $main_land_above_the_fold_text_font_fam != '' || $main_land_above_the_fold_text_fw != '300'  || $main_land_above_the_fold_text_trans != 'none' || $main_land_above_the_fold_text_align != 'start'  )


// General Scroll To Top Buttons Settings

if ( $footer_scroll_to_top_background != '' )

// Header CTA Button Settings
if (
$header_nav_menu_background_color != 'rgba(255,255,255,1)' ||
$header_nav_menu_font_size != '16px' ||
$header_nav_menu_links_color != 'rgba(255,255,255,1)' ||
// $header_nav_menu_font_weight != '300' ||
$header_nav_menu_width != '' ||
// $header_nav_menu_padding_top != '0px' ||
// $header_nav_menu_padding_right != '0px' ||
// $header_nav_menu_padding_bottom != '0px' ||
// $header_nav_menu_padding_left != '0px' ||
// $header_nav_menu_margin_top != '0px' ||
// $header_nav_menu_margin_right != '0px' ||
// $header_nav_menu_margin_bottom != '0px' ||
// $header_nav_menu_margin_left != '0px' ||
// $header_nav_menu_border_radius != '0px' ||
$header_nav_menu_border_size != '0px' ||
$header_nav_menu_border_type != '' ||
$header_nav_menu_border_color != 'rgba(255,255,255)'
// || $header_nav_menu_text_color != 'rgba(255,255,255)' ||
// $header_nav_menu_box_shadow != '' ||
// $header_nav_menu_height != '40px' ||
// $header_nav_menu_float != 'unset' ||
// $header_nav_menu_text_decoration != 'none' ||
// $header_nav_menu_text_align != 'none' ||
// $header_nav_menu_text_shadow != 'inherit'
)

// General Buttons Settings

if ( $website_general_buttons_font_size != '20px' || $website_general_buttons_background_color != 'rgb(0 0 0)'  || $website_general_buttons_width != '200px' || $website_general_buttons_margin != '10px' || $website_general_buttons_padding != '10px'  || $website_general_buttons_border_radius != '0px'  || $website_general_buttons_text_color != 'rgba(255,255,255' )
// Header Navigation Menu Search Bar Settings

if (
$header_navigation_menu_search_bar_background_color != 'rgba(255,255,255)' ||
$header_navigation_menu_search_bar_width != '130px' ||
$header_navigation_menu_search_bar_font_size != '14px' ||
$header_navigation_menu_search_bar_border_size != '0' ||
$header_navigation_menu_search_bar_border_type != '' ||
$header_navigation_menu_search_bar_border_color != 'rgba(255,255,255)' ||
$header_navigation_menu_search_bar_border_radius != '0' ||
 $header_navigation_menu_search_bar_padding_top != '0px' ||
 $header_navigation_menu_search_bar_padding_right != '0px' ||
 $header_navigation_menu_search_bar_padding_bottom != '0px' ||
 $header_navigation_menu_search_bar_padding_left != '0px' ||
 $header_navigation_menu_search_bar_margin_top != '0px' ||
 $header_navigation_menu_search_bar_margin_right != '0px' ||
 $header_navigation_menu_search_bar_margin_bottom != '0px' ||
 $header_navigation_menu_search_bar_margin_left != '0px'
// $header_navigation_menu_search_bar_border_radius != '0px' ||
// $header_navigation_menu_search_bar_border_size != '0px' ||
// $header_navigation_menu_search_bar_border_type != '' ||
// $header_navigation_menu_search_bar_border_color != 'rgba(255,255,255)' ||
// $header_navigation_menu_search_bar_text_color != 'rgba(255,255,255)' ||
// $header_navigation_menu_search_bar_box_shadow != '' ||
// $header_navigation_menu_search_bar_height != '40px' ||
// $header_navigation_menu_search_bar_float != 'unset' ||
// $header_navigation_menu_search_bar_text_decoration != 'none' ||
// $header_navigation_menu_search_bar_text_align != 'none' ||
//$header_navigation_menu_search_bar_text_shadow != 'inherit'
)


if (
$header_cta_button_background_color != 'rgba(255,255,255)' ||
$header_cta_button_font_size != '12px' ||
$header_cta_button_font_weight != '300' ||
$header_cta_button_width != '130px' ||
$header_cta_button_padding_top != '0px' ||
$header_cta_button_padding_right != '0px' ||
$header_cta_button_padding_bottom != '0px' ||
$header_cta_button_padding_left != '0px' ||
$header_cta_button_margin_top != '0px' ||
$header_cta_button_margin_right != '0px' ||
$header_cta_button_margin_bottom != '0px' ||
$header_cta_button_margin_left != '0px' ||
$header_cta_button_border_radius != '0px' ||
$header_cta_button_border_size != '0px' ||
$header_cta_button_border_type != '' ||
$header_cta_button_border_color != 'rgba(255,255,255)' ||
$header_cta_button_text_color != 'rgba(255,255,255)' ||
$header_cta_button_box_shadow != '' ||
$header_cta_button_height != '40px' ||
$header_cta_button_float != 'unset' ||
$header_cta_button_text_decoration != 'none' ||
$header_cta_button_text_align != 'none' ||
$header_cta_button_text_shadow != 'inherit'
)

 :?>

<style type="text/css">

/* Header Navigation Logo Image Style Settings */


img.brandlogoimage {
  /*width: <?php // echo $header_navigation_menu_logo_width; ?>px;*/
width: auto;
  height: <?php echo $header_navigation_menu_logo_height; ?>px;
  max-height: 100%;

  display: flex;
  padding: 0px;
  margin: 0px;
  border: none;
}

a.header-cta-button {

background:  <?php echo $header_cta_button_background_color; ?>;

font-size: <?php echo $header_cta_button_font_size; ?>px !important;

font-weight: <?php echo $header_cta_button_font_weight; ?>;

text-decoration: <?php echo $header_cta_button_text_decoration; ?>;

/*text-align: <?php // echo $header_cta_button_text_align; ?>;*/

display: flex;

width: <?php echo $header_cta_button_width; ?>px !important;
min-width: 100px;
height: <?php echo $header_cta_button_height; ?>px !important;

padding: <?php echo $header_cta_button_padding_top; ?>px <?php echo $header_cta_button_padding_right; ?>px <?php echo $header_cta_button_padding_bottom; ?>px <?php echo $header_cta_button_padding_left; ?>px;

float: <?php echo $header_cta_button_float; ?>;

margin: <?php echo $header_cta_button_margin_top; ?>px <?php echo $header_cta_button_margin_right; ?>px <?php echo $header_cta_button_margin_bottom; ?>px <?php echo $header_cta_button_margin_left; ?>px !important;

border-radius: <?php echo $header_cta_button_border_radius; ?>px;

border: <?php echo $header_cta_button_border_size; ?>px <?php echo $header_cta_button_border_type; ?> <?php echo $header_cta_button_border_color; ?>;

color: <?php echo $header_cta_button_text_color; ?> !important;

box-shadow: <?php echo $header_cta_button_box_shadow; ?>;

flex-direction: row;

flex-wrap: nowrap;

align-items: center;

justify-content: center;

text-shadow: <?php echo $header_cta_button_text_shadow; ?>;
}
/* https://developer.mozilla.org/en-US/docs/Web/CSS/text-decoration */
.general-button a{
color: <?php echo $website_general_buttons_text_color; ?>;
}

.general-button{
                    font-size: <?php echo $website_general_buttons_font_size; ?>px;
                    background:  <?php echo $website_general_buttons_background_color; ?>;
                    display: inline-block;
                    width: <?php echo $website_general_buttons_width; ?>px;
                    padding: <?php echo $website_general_buttons_padding; ?>px;
                    float: left;
                    margin: <?php echo $website_general_buttons_margin; ?>px;
                    border-radius: <?php echo $website_general_buttons_border_radius; ?>px;
                    border: <?php echo $website_general_buttons_border_size; ?>px <?php echo $website_general_buttons_border_type; ?> <?php echo $website_general_buttons_border_color; ?>;
                    color: <?php echo $website_general_buttons_text_color; ?>;
                    box-shadow: <?php echo $website_general_buttons_box_shadow_; ?>;
}


button#myBtn.scroll-top {
                     display: none;
                     position: fixed;
                     bottom: 20px;
                     right: 30px;
                     z-index: 99;
                     border: none;
                     outline: none;
                     background: <?php echo $footer_scroll_to_top_background; ?>;
                     color: #fff;
                     cursor: pointer;
                     border-radius: 4px;
                     animation: 1s ease-in-out 2s 1 normal both running fadeIn;
                     border-radius: 50px;
                     border: 1px solid #000;
                     font-weight: 300;
                     color: #fff;
                     display: block;
                     width: 43px;
                     height: 43px;
                     line-height: 0;
                     text-align: center;
                     padding: 0px;
                     margin: 0px;
                     box-shadow: 0px 10px 10px -10px #000;
}

#myBtn:hover {
  background-color: #555;
}

    nav.master-header-nav-menu {
        background: <?php echo $header_main_navigation_master_menu_background_color; ?> !important;
        color: #000;
        font-size: 16px;
        border-bottom: 1px solid #000;
        box-shadow: 0px 20px 10px -10px #000;
        min-height: 40px;
        max-height: 100%;
        /* height: <?php // echo $header_main_navigation_master_menu_height; ?>px; */
       height: auto;
        padding: <?php echo $header_main_navigation_master_menu_padding; ?>px;
        margin: <?php echo $header_main_navigation_master_menu_margin; ?>px auto;
        width: <?php echo $header_main_navigation_master_menu_width; ?>%;
    }
    nav.master-header-nav-menu ul li a {
        color: #000;
        text-decoration: none;
        font-weight: 500;
    }

button.navbar-toggler {
	z-index: 99999999;
	color: #000;
	position: fixed;
	right: 15px;
	top: 15px;
}
.dashicons, .dashicons-before:before {
	font-family: dashicons;
	display: inline-block;
	line-height: 1;
	font-weight: 400;
	font-style: normal;
	speak: never;
	text-decoration: inherit;
	text-transform: none;
	text-rendering: auto;
	-webkit-font-smoothing: antialiased;
	-moz-osx-font-smoothing: grayscale;
	width: 20px;
	height: 20px;
	font-size: 43px;
	vertical-align: top;
	text-align: center;
	transition: color .1s ease-in;
}

.above-the-fold{
background: <?php echo $main_land_above_the_fold_background; ?>;

}

#btf-main {
background: <?php echo $main_land_below_the_fold_background; ?>;
padding: 60px;
margin: 0px 0px 0px 0px;
min-height: 500px;
width: 100%;
display: flex;
box-shadow: 0px 30px 20px -20px #000;
color: #fff;
font-size: 18px;
font-weight: 500;
text-decoration: none;
}
#btf-main h2.btf-heading-title{
color: <?php echo $main_land_below_the_fold_heading_title_color; ?>;
}

div#btf-content {
color: <?php echo $main_land_below_the_fold_content_box_color; ?>;
}


.atf-paragraph p, .tinymce p {
line-height: <?php echo $main_land_above_the_fold_text_lh; ?>;
font-size: <?php echo $main_land_above_the_fold_text_fs; ?>px;
font-weight: <?php echo $main_land_above_the_fold_text_fw; ?>;
text-transform: <?php echo $main_land_above_the_fold_text_trans; ?>;
color: <?php echo $main_land_above_the_fold_text_color; ?>;
text-align: : <?php echo $main_land_above_the_fold_text_align; ?>;
}

html{
scroll-behavior: smooth;
}
body{
font-family: <?php echo $main_land_above_the_fold_text_font_fam; ?>, sans-serif;
font-weight: <?php echo $main_land_above_the_fold_text_fw; ?>;
font-size: <?php echo $main_land_above_the_fold_text_fs; ?>px;
}

div#search-bar-master {
	margin: 0px 15px 0px 15px;
                    max-width: 220px;   
}

.header-nav-menu-search-box.search-form, .gsc-control-cse.gsc-control-cse-bg {
background:  <?php echo $header_navigation_menu_search_bar_background_color; ?> !important;
font-size: <?php echo $header_navigation_menu_search_bar_font_size; ?>px !important;
font-weight: <?php // echo $header_navigation_menu_search_bar_font_weight; ?>;
text-decoration: <?php // echo $header_navigation_menu_search_bar_text_decoration; ?>;
/*text-align: <?php // echo $header_navigation_menu_search_bar_text_align; ?>;*/
display: flex;
width: <?php echo $header_navigation_menu_search_bar_width; ?>px !important;
height: <?php // echo $header_navigation_menu_search_bar_height; ?>px !important;
padding: <?php echo $header_navigation_menu_search_bar_padding_top; ?>px <?php echo $header_navigation_menu_search_bar_padding_right; ?>px <?php echo $header_navigation_menu_search_bar_padding_bottom; ?>px <?php echo $header_navigation_menu_search_bar_padding_left; ?>px;
float: <?php // echo $header_navigation_menu_search_bar_float; ?>;
margin: <?php echo $header_navigation_menu_search_bar_margin_top; ?>px <?php echo $header_navigation_menu_search_bar_margin_right; ?>px <?php echo $header_navigation_menu_search_bar_margin_bottom; ?>px <?php echo $header_navigation_menu_search_bar_margin_left; ?>px !important;
border-radius: <?php echo $header_navigation_menu_search_bar_border_radius; ?>px;
border: <?php echo $header_navigation_menu_search_bar_border_size; ?>px <?php echo $header_navigation_menu_search_bar_border_type; ?> <?php echo $header_navigation_menu_search_bar_border_color; ?>;
color: <?php // echo $header_navigation_menu_search_bar_text_color; ?> !important;
box-shadow: <?php // echo $header_navigation_menu_search_bar_box_shadow; ?>;
flex-direction: row;
flex-wrap: nowrap;
align-items: center;
justify-content: center;
text-shadow: <?php // echo $header_navigation_menu_search_bar_text_shadow; ?>;
line-height: 0;
}

#headerMenuMaster ul li a{
color: <?php echo $header_nav_menu_links_color; ?>;
}
#headerMenuMaster {
background:  <?php echo $header_nav_menu_background_color; ?> !important;
font-size: <?php // echo $header_nav_menu_font_size; ?>px !important;
font-weight: <?php // echo $header_nav_menu_font_weight; ?>;
text-decoration: <?php // echo $header_nav_menu_text_decoration; ?>;
/*text-align: <?php // echo $header_nav_menu_text_align; ?>;*/
display: flex;
flex-basis: auto;
width: <?php echo $header_nav_menu_width; ?>px !important;
height: <?php // echo $header_nav_menu_height; ?>px !important;
padding: <?php // echo $header_nav_menu_padding_top; ?>px <?php // echo $header_nav_menu_padding_right; ?>px <?php // echo $header_nav_menu_padding_bottom; ?>px <?php // echo $header_nav_menu_padding_left; ?>px;
float: <?php // echo $header_nav_menu_float; ?>;
margin: <?php // echo $header_nav_menu_margin_top; ?>px <?php // echo $header_nav_menu_margin_right; ?>px <?php // echo $header_nav_menu_margin_bottom; ?>px <?php // echo $header_nav_menu_margin_left; ?>px !important;
border-radius: <?php echo $header_nav_menu_border_radius; ?>px;
border: <?php echo $header_nav_menu_border_size; ?>px <?php echo $header_nav_menu_border_type; ?> <?php echo $header_nav_menu_border_color; ?>;
color: <?php // echo $header_nav_menu_text_color; ?> !important;
box-shadow: <?php // echo $header_nav_menu_box_shadow; ?>;
flex-direction: row;
flex-wrap: nowrap;
align-items: center;
justify-content: center;
text-shadow: <?php // echo $header_nav_menu_text_shadow; ?>;
}
body.logged-in form#customize-controls.wp-full-overlay-sidebar { background: red !important; width: 500px !important; }






.footer-copy {
background: <?php echo $yourseobook_footer_background; ?>;
color: <?php echo $yourseobook_footer_text_color; ?>;
margin: <?php echo $yourseobook_footer_margin_top; ?>px <?php echo $yourseobook_footer_margin_right; ?>px <?php echo $yourseobook_footer_margin_bottom; ?>px <?php echo $yourseobook_footer_margin_left; ?>px;
padding: <?php echo $yourseobook_footer_padding_top; ?>px <?php echo $yourseobook_footer_padding_right; ?>px <?php echo $yourseobook_footer_padding_bottom; ?>px <?php echo $yourseobook_footer_padding_left; ?>px;

}
.footer-copy a, .footer-copy ul li a {
color: <?php echo $yourseobook_main_footer_links_color; ?>;
text-decoration: <?php echo $yourseobook_main_footer_links_txt_decoration; ?>;
font-weight: <?php echo $yourseobook_main_footer_links_font_weight; ?>;
font-size: <?php echo $yourseobook_main_footer_links_font_size; ?>px;
}
.footer-copy ul{
list-style: none;
}
.footer-widget-title{
font-size: <?php echo $yourseobook_main_footer_widgets_title_font_size; ?>px;
color: <?php echo $yourseobook_main_footer_widgets_title_text_color; ?>;
font-weight: <?php echo $yourseobook_main_footer_widgets_title_font_weight; ?>;
}

/* Single Page BAsic Styles */

.container-fluid.single-page-template{
background: #ccc;
padding: 0px;
margin: 0px;
width: 100%;
color: 18px;
font-weight: 300;
text-decoration: none;
line-height: 1.75rem;
}


    </style>

<?php if ( ! empty( $header_cta_button_text_align ) ) : ?>
    <style>
        a.header-cta-button {
           text-align: <?php echo $header_cta_button_text_align; ?>;
        }
    </style>
<?php endif; ?>

    <?php
    endif;
}
add_action( 'wp_head', 'yourseobook_header_main_navigation_master_menu_styles' );