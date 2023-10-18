<?php




// End Main Header Navigation Menu Margin Settings
function yourseobook_header_main_navigation_menu_search_bar_styles() {
  
    $header_navigation_menu_search_bar_background_color = get_theme_mod( 'yourseobook_header_navigation_menu_search_bar_background_color' );
    // $header_navigation_menu_search_bar_opacity = get_theme_mod( 'yourseobook_header_navigation_menu_search_bar_opacity' );
    // $header_navigation_menu_search_bar_font_size = get_theme_mod( 'yourseobook_header_navigation_menu_search_bar_font_size' );
    // $header_navigation_menu_search_bar_text_transform = get_theme_mod( 'yourseobook_header_navigation_menu_search_bar_text_transform' );
    // $header_navigation_menu_search_bar_text_decoration = get_theme_mod( 'yourseobook_header_navigation_menu_search_bar_text_decoration' );
    $header_navigation_menu_search_bar_width = get_theme_mod( 'yourseobook_header_navigation_menu_search_bar_width' );
    // $header_navigation_menu_search_bar_height = get_theme_mod( 'yourseobook_header_navigation_menu_search_bar_height');
    // $header_navigation_menu_search_bar_padding_top = get_theme_mod( 'yourseobook_header_navigation_menu_search_bar_padding_top' );
    // $header_navigation_menu_search_bar_padding_right = get_theme_mod( 'yourseobook_header_navigation_menu_search_bar_padding_right' );
    // $header_navigation_menu_search_bar_padding_bottom = get_theme_mod( 'yourseobook_header_navigation_menu_search_bar_padding_bottom' );
    // $header_navigation_menu_search_bar_padding_left = get_theme_mod( 'yourseobook_header_navigation_menu_search_bar_padding_left' );
    // $header_navigation_menu_search_bar_margin_top = get_theme_mod( 'yourseobook_header_navigation_menu_search_bar_margin_top' );
    // $header_navigation_menu_search_bar_margin_right = get_theme_mod( 'yourseobook_header_navigation_menu_search_bar_margin_right' );
    // $header_navigation_menu_search_bar_margin_bottom = get_theme_mod( 'yourseobook_header_navigation_menu_search_bar_margin_bottom' );
    // $header_navigation_menu_search_bar_margin_left = get_theme_mod( 'yourseobook_header_navigation_menu_search_bar_margin_left' );
    // $header_navigation_menu_search_bar_border_radius = get_theme_mod( 'yourseobook_header_navigation_menu_search_bar_border_radius' );
     $header_navigation_menu_search_bar_border_size = get_theme_mod( 'yourseobook_header_navigation_menu_search_bar_border_size' );
    // $header_navigation_menu_search_bar_border_type = get_theme_mod( 'yourseobook_header_navigation_menu_search_bar_border_type' );
    // $header_navigation_menu_search_bar_border_color = get_theme_mod( 'yourseobook_header_navigation_menu_search_bar_border_color' );
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



// Header Navigation Menu Search Bar Settings
if (
$header_navigation_menu_search_bar_background_color != 'rgba(255,255,255)' || $header_navigation_menu_search_bar_width != '130px' || $header_navigation_menu_search_bar_border_size != '0px'
// $header_navigation_menu_search_bar_font_size != '16px' ||
// $header_navigation_menu_search_bar_font_weight != '300' ||
 
// $header_navigation_menu_search_bar_padding_top != '0px' ||
// $header_navigation_menu_search_bar_padding_right != '0px' ||
// $header_navigation_menu_search_bar_padding_bottom != '0px' ||
// $header_navigation_menu_search_bar_padding_left != '0px' ||
// $header_navigation_menu_search_bar_margin_top != '0px' ||
// $header_navigation_menu_search_bar_margin_right != '0px' ||
// $header_navigation_menu_search_bar_margin_bottom != '0px' ||
// $header_navigation_menu_search_bar_margin_left != '0px' ||
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

 :?>

<style type="text/css">



input#hnm-sb.header-nav-menu-search-box.search-form {
background:  <?php echo $header_navigation_menu_search_bar_background_color; ?>;
font-size: <?php echo $header_navigation_menu_search_bar_font_size; ?>px !important;
font-weight: <?php // echo $header_navigation_menu_search_bar_font_weight; ?>;
text-decoration: <?php // echo $header_navigation_menu_search_bar_text_decoration; ?>;
/*text-align: <?php // echo $header_navigation_menu_search_bar_text_align; ?>;*/
display: flex;
width: <?php echo $header_navigation_menu_search_bar_width; ?>px !important;
height: <?php // echo $header_navigation_menu_search_bar_height; ?>px !important;
padding: <?php // echo $header_navigation_menu_search_bar_padding_top; ?>px <?php // echo $header_navigation_menu_search_bar_padding_right; ?>px <?php // echo $header_navigation_menu_search_bar_padding_bottom; ?>px <?php // echo $header_navigation_menu_search_bar_padding_left; ?>px;
float: <?php // echo $header_navigation_menu_search_bar_float; ?>;
margin: <?php // echo $header_navigation_menu_search_bar_margin_top; ?>px <?php // echo $header_navigation_menu_search_bar_margin_right; ?>px <?php // echo $header_navigation_menu_search_bar_margin_bottom; ?>px <?php // echo $header_navigation_menu_search_bar_margin_left; ?>px !important;
border-radius: <?php // echo $header_navigation_menu_search_bar_border_radius; ?>px;
border: <?php // echo $header_navigation_menu_search_bar_border_size; ?>px <?php // echo $header_navigation_menu_search_bar_border_type; ?> <?php // echo $header_navigation_menu_search_bar_border_color; ?>;
color: <?php // echo $header_navigation_menu_search_bar_text_color; ?> !important;
box-shadow: <?php // echo $header_navigation_menu_search_bar_box_shadow; ?>;
flex-direction: row;
flex-wrap: nowrap;
align-items: center;
justify-content: center;
text-shadow: <?php // echo $header_navigation_menu_search_bar_text_shadow; ?>;
}

    </style>



    <?php
    endif;
}
add_action( 'wp_head', 'yourseobook_header_main_navigation_menu_search_bar_styles' );