<?php


add_filter('the_content', function ($content){
    if (!is_page()) return $content;
    $div = '<blockquote style="background:#000;color:#fff;padding:20px;">
Beta v1.0.48 Your SEO Book by SEO Book Pro 🎁Creating WordPress Theme Options With the Theme Customization API</blockquote>
';
    return preg_replace('/<\/h3>/i', "</h3>".$div, $content, 2);
});






// Pop up Div element to catch the user attention if they stay > 1min on a page and see this pop up once per session ]
// wp-content/themes/yourseobook/api/func/alerts/pop-lead.php
// api/layouts/content/single/cta/single-page-cta-above-last-paragraph.php
/*
function ads_added_above_last_p($text) {
    if( is_single() ) :
        $ads_text = '
<div style="width:100%;height:90px;text-align:center;line-height:90px;border:1px solid #000;">CTA - Call Now Here</div>';
        if($pos1 = strrpos($text, '<p>')){
            $text1 = substr($text, 0, $pos1);
            $text2 = substr($text, $pos1);
            $text = $text1 . $ads_text . $text2;
        }
    endif;
    return $text;
    }
add_filter('the_content', 'ads_added_above_last_p');
*/
// Add CTA above Last Paragraph

// function register_yourseobook_single_page_cta_above_last_paragraph_functions(){
//	require_once get_template_directory() .'/api/layouts/content/single/cta/single-page-cta-above-last-paragraph.php';
 //}
// add_action( 'after_setup_theme', 'register_yourseobook_single_page_cta_above_last_paragraph_functions' );
function yourseobook_ads_added_above_last_p($text1) {
    if( !is_singular() ) :
        $ads_text = '
<div style="width:100%;height:90px;text-align:center;line-height:90px;border:1px solid #000;">CTA - Call Now Here</div>';
        if($pos2 = strrpos($text1, '<p>')){
            $text2 = substr($text1, 1, $pos2);
            $text3 = substr($text1, $pos2);
            $text1 = $text2 . $ads_text . $text3;
        }
    endif;
    return $text;
    }
add_filter('the_content', 'yourseobook_ads_added_above_last_p');
/**
 * Disable email verification for new registered websites in WordPress Multisite.
 */
function yourseobook_disable_email_verification() {
    remove_filter( 'wpmu_signup_user_notification', 'wp_send_new_user_notifications' );
}
add_action( 'wpmu_signup_blog', 'yourseobook_disable_email_verification' );

/**
 * Add password field to website registration form in WordPress Multisite.
 */
function custom_add_password_field_to_registration_form() {
    if ( isset( $_POST['signup_for'] ) && 'blog' === $_POST['signup_for'] ) {
        ?>
        <p>
            <label for="site_password"><?php esc_html_e( 'Password', 'text-domain' ); ?><br />
                <input type="password" name="site_password" id="site_password" class="input" value="" required="required" autocomplete="off" />
            </label>
        </p>
        <?php
    }
}
add_action( 'signup_extra_fields', 'custom_add_password_field_to_registration_form' );

/**
 * Save the password during website registration in WordPress Multisite.
 */
function custom_save_password_on_registration( $blog_id, $user_id, $password, $signup_title, $meta ) {
    if ( ! empty( $_POST['site_password'] ) ) {
        $new_password = $_POST['site_password'];
        update_blog_option( $blog_id, 'site_password', $new_password );
    }
}
add_action( 'wpmu_new_blog', 'custom_save_password_on_registration', 10, 5 );

// Include The Admin Menu Fix Bug for Bootstrap overlaping class navigation .fixed-top
// /public_html/wp-content/themes/yourseobook/api/customizer/func/header/search-bar-functions.php
// include_once trailingslashit( dirname(__FILE__) ) . 'api/admin/admin-functions.php';

function register_yourseobook_admin_functions(){
	require_once get_template_directory() .'/api/admin/admin-functions.php';
 }
 add_action( 'after_setup_theme', 'register_yourseobook_admin_functions' );

// function register_yourseobook_header_nav_search_box_functions(){
//	require_once get_template_directory() .'/api/customizer/func/header/search-bar-functions.php';
 // }
 // add_action( 'after_setup_theme', 'register_yourseobook_header_nav_search_box_functions' );


// function register_yourseobook_chat_gpt_functions(){
//	require_once get_template_directory() .'/api/admin/bot/chatgpt-controls.php';
 //  }
 // add_action( 'after_setup_theme', 'register_yourseobook_chat_gpt_functions' );
// add_action( 'wp_head', 'yourseobook_header_main_navigation_master_menu_styles' );

// /public_html/wp-content/themes/yourseobook/inc/app/bot/chat-gpt-controls.php
/*
function register_my_menu() {
  register_nav_menu('top_header_menu',__( 'Top Header Navigation Menu' ));
  register_nav_menu('main_header_menu',__( 'Main Header Navigation Menu' ));
  register_nav_menu('bottom_header_menu',__( 'Bottom Header Navigation Menu' ));
  register_nav_menu('footer_main_menu',__( 'Footer Navigation Menu' ));
  register_nav_menu('footer_copy_info_menu',__( 'Copyright Footer Menu' ));
  register_nav_menu('footer_social_media_links_menu',__( 'Social Media Links Footer Menu' ));

  // Add the custom ID and class to the menu
  $locations = array(
    'top_header_menu' => 'top-header-menu',
    'main_header_menu' => 'main-header-menu',
    'bottom_header_menu' => 'bottom-header-menu',
    'footer_main_menu' => 'ffmyNavbar',
    'footer_copy_info_menu' => 'footer-copy-info-menu',
    'footer_social_media_links_menu' => 'footer-social-media-links-menu',
  //  'footer_bottom_menu' => 'footer-bottom-menu' // Assign the custom ID here
  );

  // Set the custom ID and class for each menu location
  foreach ($locations as $location => $id) {
    $theme_locations = get_nav_menu_locations();
    $theme_locations[$location] = $id;
    set_theme_mod('nav_menu_locations', $theme_locations);
  }
}

add_action('init', 'register_my_menu');
*/


function register_my_menu() {
  register_nav_menu('top_header_menu',__( 'Top Header Navigation Menu' ));
  register_nav_menu('main_header_menu',__( 'Main Header Navigation Menu' ));
  register_nav_menu('bottom_header_menu',__( 'Bottom Header Navigation Menu' ));
  register_nav_menu('footer_main_menu',__( 'Footer Navigation Menu' ));
  register_nav_menu('footer_copy_info_menu',__( 'Copyright Footer Menu' ));
}
add_action( 'init', 'register_my_menu' );

add_filter('use_block_editor_for_post', '__return_false');



// Enable Crop Images on Upload 200 pixels wide by 630 pixels tall, soft proportional crop mode
add_image_size( 'custom-size', 1280, 720 );

// Enable WordPress Deafult Lazy Load Functions for Images, Videos, Iframes
add_theme_support( 'wp_lazy_loading_enabled' );

// Enable Website Featured images
add_theme_support( 'post-thumbnails' );

// Remove Image Height Width Attributes on Upload and Display
function yourseobook_remove_img_attr ($html) { return preg_replace('/(width|height)="\d+"\s/', "", $html);}
add_filter( 'post_thumbnail_html', 'yourseobook_remove_img_attr' );

// Function to set the JPEG compression quality
// Increase Image compression in WordPress
add_filter('jpeg_quality', function($arg){return 35;});


// Remove “scaled” in File URL/Name Path when adding new image to library
add_filter( 'big_image_size_threshold', '__return_false' );

remove_filter( 'the_content', 'wpautop' );
// remove_filter( 'the_excerpt', 'wpautop' );


// Enable all HTML Tags in Profile Bios
remove_filter('pre_user_description', 'wp_filter_kses');
//add sanitization for WordPress posts
add_filter( 'pre_user_description', 'wp_filter_post_kses');
// Disable all HTML in Profile Bios// Disallowing all HTML (including the a, blockquote, em, and strong tags, to name a few), you can use the following snippet:
//  add_filter( 'pre_user_description', 'wp_filter_nohtml_kses');

function remove_global_styles_and_svg_filters() {
remove_action( 'wp_enqueue_scripts', 'wp_enqueue_global_styles' );
remove_action( 'wp_body_open', 'wp_global_styles_render_svg_filters' );
}
add_action('init', 'remove_global_styles_and_svg_filters');


// Selective refresh for widgets.
add_theme_support( 'customize-selective-refresh-widgets' );

        add_theme_support(
            'html5',
            array(
                'search-form',
                'comment-form',
                'comment-list',
                'gallery',
                'caption',
                'style',
                'script',
            )
        );

// Start The Cut for Custom Exerpt Lenght in the source code and in to Loops
/*
function yourseobook_custom_excerpt_length( $length ) {
  return 45;
}
add_filter( 'excerpt_length', 'yourseobook_custom_excerpt_length' );
*/
// End The Cut for Custom Exerpt Lenght in the source code and in to Loops


// Start Limit Post Tags in the Source Code to 5

add_filter('term_links-post_tag','yourseobook_limit_to_five_tags');
function yourseobook_limit_to_five_tags($terms) {
return array_slice($terms,0,7,true);
}

// End Limit Post Tags in the Source Code to 5


// Remove WordPress Emoji icons and js to speed up the site and low the loaded scrips in the headers
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );


function load_dashicons_on_customizer() {
    wp_enqueue_style( 'dashicons' );
}
add_action( 'customize_controls_print_styles', 'load_dashicons_on_customizer' );

add_action( 'wp_enqueue_scripts', 'load_dashicons_front_end' );
function load_dashicons_front_end() {
  wp_enqueue_style( 'dashicons' );
}


add_filter( 'use_widgets_block_editor', '__return_false' );
add_filter( 'use_block_editor_for_post', '__return_false' );
add_filter( 'use_block_editor_for_page', '__return_false' );
add_filter('use_block_editor_for_post_type', '__return_false');


function yourseobook_remove_wp_block_library_css(){
    wp_dequeue_style( 'wp-block-library' );
    wp_dequeue_style( 'wp-block-library-theme' );
    wp_dequeue_style( 'wc-block-style' ); // Remove WooCommerce block CSS
   }
add_action( 'wp_enqueue_scripts', 'yourseobook_remove_wp_block_library_css', 100 );

// Remove query string from static CSS files
function yourseobook_remove_query_string_from_static_files( $src ) {
    if( strpos( $src, '?ver=' ) )
        $src = remove_query_arg( 'ver', $src );
    return $src;
}
add_filter( 'style_loader_src', 'yourseobook_remove_query_string_from_static_files', 10, 2 );




function yourseobook_list_child_pages() {

    global $post;

if ( is_page() && $post->ID )
    $childpages = wp_list_pages( 'sort_column=menu_order&title_li=&child_of=' . $post->ID . '&echo=1&depth=4' );

    if ( $childpages ) {
         $string = '<ul>' . $childpages . '</ul>';
    }

    return $string;
}
add_action('yourseobook_list_child_pages', 'yourseobook_list_child_pages');



// Load Current and New Styles and JavaScripts from a Folder

foreach( glob( get_template_directory(). '/api/assets/js/*.js' ) as $file ) {
    $filename = substr($file, strrpos($file, '/') + 1);
   wp_enqueue_script( $filename, get_template_directory_uri().'/api/assets/js/'.$filename);
}

foreach( glob( get_template_directory(). '/api/assets/css/*.css' ) as $file ) {
    $filename = substr($file, strrpos($file, '/') + 1);
  wp_enqueue_style( $filename, get_template_directory_uri().'/api/assets/css/'.$filename);
}

// yourseobook - theme name
include_once trailingslashit( dirname(__FILE__) ) . 'inc/yourseobook-customizer.php';
include_once trailingslashit( dirname(__FILE__) ) . 'inc/functions-customizer.php';
require_once trailingslashit( dirname(__FILE__) ) . 'inc/custom-controls.php';
require_once trailingslashit( dirname(__FILE__) ) . 'inc/advanced-controls.php';
require_once trailingslashit( dirname(__FILE__) ) . 'inc/master-controls.php';
require_once trailingslashit( dirname(__FILE__) ) . 'inc/seo-controller.php';
require_once trailingslashit( dirname(__FILE__) ) . 'inc/class-buttons.php';
require_once trailingslashit( dirname(__FILE__) ) . 'inc/layout/head/search-bar-controller.php';
//require_once trailingslashit( dirname(__FILE__) ) . 'inc/layout/landing/services-controller.php';
// require_once trailingslashit( dirname(__FILE__) ) . 'inc/meta/head/opengraph.php';
require_once trailingslashit( dirname(__FILE__) ) . 'inc/layout/head/header-menu-controlller.php';
require_once trailingslashit( dirname(__FILE__) ) . 'inc/layout/footer/footer-main-controller.php';
require_once trailingslashit( dirname(__FILE__) ) . 'inc/meta/seo/general/general-seo-controller.php';
require_once trailingslashit( dirname(__FILE__) ) . 'inc/meta/single/seo-single-page-controller.php';
// /public_html/wp-content/themes/yourseobook/inc/meta/seo/general/general-seo-controller.php
// /public_html/wp-content/themes/yourseobook/inc/layout/head/header-menu-controlller.php

function enqueue_custom_scripts() {
    wp_enqueue_script( 'custom-scripts', get_template_directory_uri() . '/js/custom-scripts.js', array( 'jquery' ), '1.0', true );

    // Define the template directory path
    wp_localize_script( 'custom-scripts', 'themeData', array(
        'templateDir' => get_template_directory_uri()
    ) );
}
add_action( 'wp_enqueue_scripts', 'enqueue_custom_scripts' );


// Include Sitweide Widgets and Sidebars
require_once get_template_directory() . '/design/content/widgets/aside/custom-site-widgets.php';

// Limit the profiles with Subscriber Role to only Customizer without Save and Publish Caps
//require_once get_template_directory() . '/api/admin/demo/role-subscriber.php';
/*
function remove_theme_caps() {
    $role = get_role('author');

    $role->remove_cap('update_themes');
    $role->remove_cap('customize');
    $role->remove_cap('update_core');
    $role->remove_cap('delete_themes');
    $role->remove_cap('customize_publish');
    $role->remove_cap('publish_theme');
    $role->remove_cap('edit_theme_options');
}
add_action('user_has_role', 'remove_theme_caps');
*/
/*
add_action('init', 'yourseobook_add_roles');
function yourseobook_add_roles() {
    add_role(
        'demo_user',
        __('Demo User'),
        array(
            'read' => true,
            'edit_posts' => false,
            'edit_other_posts' => false,
            'edit_published_posts' => false,
            'moderate_comments' => false,
            'edit_theme_options' => true,
            'publish_posts' => false,
        )
    );
}


function allow_users_who_can_edit_posts_to_customize( $caps, $cap, $user_id ) {
	$required_cap = 'edit_posts';
	if ( 'customize' === $cap && user_can( $user_id, $required_cap ) ) {
		$caps = array( $required_cap );
	}
	return $caps;
}
add_filter( 'map_meta_cap', 'allow_users_who_can_edit_posts_to_customize', 10, 4 );
*/
/*
add_action( 'init', 'wps_david_cant_edit' );
function wps_david_cant_edit() {
    $user_id = 2; // The ID of the user
    $user = new WP_User( $user_id );
   // $user->remove_cap( 'edit_theme_options' );
}*/
function yourseobook_add_id_class_to_iframe($html) {
    // Check if the content contains an iframe
    if (strpos($html, '<iframe') !== false) {
        // Add the desired ID and class to the iframe
        $html = str_replace('<iframe', '<iframe id="iframe-in-c" class="iframe-in-the-content iframe-container" width="860" height="483.75" autoplay="1" modestbranding="1" playsinline="1" loading="lazy"', $html);
    }
    return $html;
}
add_filter('embed_oembed_html', 'yourseobook_add_id_class_to_iframe');





// Count Pages/Posts/Archives/Categories/Tags/Author/Home/Other Pages View

// Custom Function 9
// Track Posts yourseobook_post_views_count

function yourseobook_set_post_views($postID) {
    $count_key = 'yourseobook_post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    }else{
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}
//To keep the count accurate, lets get rid of prefetching
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);


// Custom Function 9
// Count Page Views and Imperssions After Activation
function yourseobook_track_post_views ($post_id) {
    if ( !is_singular() ) return;
    if ( empty ( $post_id) ) {
        global $post;
        $post_id = $post->ID;
    }
    yourseobook_set_post_views($post_id);
}
add_action( 'wp_head', 'yourseobook_track_post_views');

function yourseobook_get_post_views($postID){
    $count_key = 'yourseobook_post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return '0 <span class="dashicons dashicons-chart-line"></span> ';
    }
    return $count.' <span class="dashicons dashicons-chart-line"></span> ';
}


// to display in content echo calculate_reading_time();

function calculate_reading_time() {
    $content = get_post_field('post_content', get_the_ID());
    $word_count = str_word_count(strip_tags($content));
    $reading_time = ceil($word_count / 300); // Assuming an average reading speed of 200 words per minute

    return $reading_time . ' min read';
}



//
function yourseobook_generate_table_of_contents() {
    $content = get_post_field('post_content', get_the_ID());
    // Find all h2, h3, and h4 headings
    $pattern = '/<h([2-6])>(.*?)<\/h\1>/';
    preg_match_all($pattern, $content, $headings);

    if (!empty($headings[0])) {
        $toc = '<div id="mySidenav" class="sidenav" style="margin-top:0px !important;">';
        $toc .= '<div id="page-toc" class="sp-table-of-contents" style="margin:0px auto;padding: 0px 15px 0px 15px;font-size:20px;color:red;">Table of Contents</div>';
        $toc .= '<ul style="list-style:none;padding:0px;">';

        foreach ($headings[0] as $index => $heading) {
            $level = $headings[1][$index];
            $title = $headings[2][$index];
            $id = sanitize_title($title);
            $brand = get_theme_mod( 'yourseobook_main_brand_name_text_control' );
// echo esc_html_e( get_theme_mod( 'yourseobook_main_brand_name_text_control' ) )
            // Generate a unique ID for each heading
            $updated_heading = str_replace('<h' . $level . '>', '<h' . $level . ' id="' . $id . '">', $heading);

            // Update the content with the modified heading
            $content = str_replace($heading, $updated_heading, $content);
//  . $title . ', ' . $brand . '
            // Generate the table of contents with jump links
            $toc .= '<li><a href="#' . $id . '" onclick="scrollToHeading(\'' . $id . '\'); return false;" title="'. $title . ' | ' . $brand  .'">';

            // Add indentation based on heading level
            $toc .= str_repeat('&nbsp;', ($level - 2) * 6);

            $toc .= $title . '</a></li>';
        }

        $toc .= '</ul>';
        $toc .= '</div>';

        // Prepend the table of contents to the content
        $content = $toc . $content;
    }

    return $content;
}


/* ================================================
 * Customizer Custom Controls
 * ================================================ */
function yourseobook_enqueue_font_awesome() {
	wp_enqueue_style( 'font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css', array(), '5.15.3', 'all' );
	// wp_enqueue_style( 'bootstrap-icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css', array(), '1.10.5', 'all' );
}
add_action( 'customize_controls_enqueue_scripts', 'yourseobook_enqueue_font_awesome' );
function yourseobook_enqueue_bootstrap_icons() {
	wp_enqueue_style( 'bootstrap-icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css', array(), '1.10.5', 'all' );
}
add_action( 'customize_controls_enqueue_scripts', 'yourseobook_enqueue_bootstrap_icons' );
// add_action( 'customize_controls_print_styles', 'yourseobook_enqueue_font_awesome' );
// <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
/**
 * Enqueue scripts and styles.
 * Our sample Social Icons are using Font Awesome icons so we need to include the FA CSS when viewing our site
 * The Single Accordion Control is also displaying some FA icons in the Customizer itself, so we need to enqueue FA CSS in the Customizer too
 *
 * @return void
 */
//if ( ! function_exists( 'yourseobook_scripts_styles' ) ) {
	//function yourseobook_scripts_styles() {
		// Register and enqueue our icon font
		// We're using the awesome Font Awesome icon font. http://fortawesome.github.io/Font-Awesome
		//wp_register_style( 'fontawesome', trailingslashit( get_template_directory_uri() ) . 'css/fontawesome-all.min.css' , array(), '5.8.2', 'all' );
		//wp_enqueue_style( 'fontawesome' );
		//wp_enqueue_style( 'dashicons' );
	//}
//}
//add_action( 'wp_enqueue_scripts', 'yourseobook_scripts_styles' );
//add_action( 'customize_controls_print_styles', 'yourseobook_scripts_styles' );


/**
 * Set our Social Icons URLs.
 * Only needed for our sample customizer preview refresh
 *
 * @return array Multidimensional array containing social media data
 */
if ( ! function_exists( 'yourseobook_generate_social_urls' ) ) {
function yourseobook_generate_social_urls() {
$social_icons = array(
array( 'url' => 'behance.net', 'icon' => 'dashicons dashicons-editor-bold', 'title' => esc_html__( 'Follow me on Behance', 'yourseobook' ), 'class' => 'behance' ),
array( 'url' => 'whatsapp.com', 'icon' => 'dashicons dashicons-whatsapp', 'title' => esc_html__( 'Contact us on Whats App', 'yourseobook' ), 'class' => 'whatsapp' ),
array( 'url' => 'bitbucket.org', 'icon' => 'bi-bucket', 'title' => esc_html__( 'Fork me on Bitbucket', 'yourseobook' ), 'class' => 'bitbucket' ),
array( 'url' => 'codepen.io', 'icon' => 'dashicons dashicons-editor-code', 'title' => esc_html__( 'Follow me on CodePen', 'yourseobook' ), 'class' => 'codepen' ),
array( 'url' => 'deviantart.com', 'icon' => 'dashicons dashicons-art', 'title' => esc_html__( 'Watch me on DeviantArt', 'yourseobook' ), 'class' => 'deviantart' ),
array( 'url' => 'discord.gg', 'icon' => 'dashicons dashicons-megaphone', 'title' => esc_html__( 'Join me on Discord', 'yourseobook' ), 'class' => 'discord' ),
array( 'url' => 'dribbble.com', 'icon' => 'dashicons dashicons-dribbble', 'title' => esc_html__( 'Follow me on Dribbble', 'yourseobook' ), 'class' => 'dribbble' ),
array( 'url' => 'etsy.com', 'icon' => 'dashicons dashicons-cart', 'title' => esc_html__( 'Favorite me on Etsy', 'yourseobook' ), 'class' => 'etsy' ),
array( 'url' => 'facebook.com', 'icon' => 'dashicons dashicons-facebook', 'title' => esc_html__( 'Like me on Facebook', 'yourseobook' ), 'class' => 'facebook' ),
array( 'url' => 'flickr.com', 'icon' => 'dashicons dashicons-camera', 'title' => esc_html__( 'Connect with me on Flickr', 'yourseobook' ), 'class' => 'flickr' ),
array( 'url' => 'foursquare.com', 'icon' => 'dashicons dashicons-location-alt', 'title' => esc_html__( 'Follow me on Foursquare', 'yourseobook' ), 'class' => 'foursquare' ),
array( 'url' => 'github.com', 'icon' => 'dashicons dashicons-external', 'title' => esc_html__( 'Fork me on GitHub', 'yourseobook' ), 'class' => 'github' ),
array( 'url' => 'instagram.com', 'icon' => 'dashicons dashicons-instagram', 'title' => esc_html__( 'Follow me on Instagram', 'yourseobook' ), 'class' => 'instagram' ),
array( 'url' => 'kickstarter.com', 'icon' => 'dashicons dashicons-lightbulb', 'title' => esc_html__( 'Back me on Kickstarter', 'yourseobook' ), 'class' => 'kickstarter' ),
array( 'url' => 'last.fm', 'icon' => 'dashicons dashicons-controls-play', 'title' => esc_html__( 'Follow me on Last.fm', 'yourseobook' ), 'class' => 'lastfm' ),
array( 'url' => 'linkedin.com', 'icon' => 'dashicons dashicons-linkedin', 'title' => esc_html__( 'Connect with me on LinkedIn', 'yourseobook' ), 'class' => 'linkedin' ),
array( 'url' => 'medium.com', 'icon' => 'dashicons dashicons-admin-post', 'title' => esc_html__( 'Follow me on Medium', 'yourseobook' ), 'class' => 'medium' ),
array( 'url' => 'patreon.com', 'icon' => 'dashicons dashicons-heart', 'title' => esc_html__( 'Support me on Patreon', 'yourseobook' ), 'class' => 'patreon' ),
array( 'url' => 'pinterest.com', 'icon' => 'dashicons dashicons-pinterest', 'title' => esc_html__( 'Follow me on Pinterest', 'yourseobook' ), 'class' => 'pinterest' ),
array( 'url' => 'reddit.com', 'icon' => 'dashicons dashicons-reddit', 'title' => esc_html__( 'Join me on Reddit', 'yourseobook' ), 'class' => 'reddit' ),
array( 'url' => 'slack.com', 'icon' => 'dashicons dashicons-slides', 'title' => esc_html__( 'Join me on Slack', 'yourseobook' ), 'class' => 'slack' ),
array( 'url' => 'slideshare.net', 'icon' => 'dashicons dashicons-slideshare', 'title' => esc_html__( 'Follow me on SlideShare', 'yourseobook' ), 'class' => 'slideshare' ),
array( 'url' => 'snapchat.com', 'icon' => 'dashicons dashicons-video-alt3', 'title' => esc_html__( 'Add me on Snapchat', 'yourseobook' ), 'class' => 'snapchat' ),
array( 'url' => 'soundcloud.com', 'icon' => 'dashicons dashicons-format-audio', 'title' => esc_html__( 'Follow me on SoundCloud', 'yourseobook' ), 'class' => 'soundcloud' ),
array( 'url' => 'spotify.com', 'icon' => 'dashicons dashicons-playlist-audio', 'title' => esc_html__( 'Follow me on Spotify', 'yourseobook' ), 'class' => 'spotify' ),
array( 'url' => 'stackoverflow.com', 'icon' => 'dashicons dashicons-format-status', 'title' => esc_html__( 'Join me on Stack Overflow', 'yourseobook' ), 'class' => 'stackoverflow' ),
array( 'url' => 'tumblr.com', 'icon' => 'dashicons dashicons-tumblr', 'title' => esc_html__( 'Follow me on Tumblr', 'yourseobook' ), 'class' => 'tumblr' ),
array( 'url' => 'twitch.tv', 'icon' => 'dashicons dashicons-video-alt2', 'title' => esc_html__( 'Follow me on Twitch', 'yourseobook' ), 'class' => 'twitch' ),
array( 'url' => 'twitter.com', 'icon' => 'dashicons dashicons-twitter', 'title' => esc_html__( 'Follow me on Twitter', 'yourseobook' ), 'class' => 'twitter' ),
array( 'url' => 'vimeo.com', 'icon' => 'dashicons dashicons-vimeo', 'title' => esc_html__( 'Follow me on Vimeo', 'yourseobook' ), 'class' => 'vimeo' ),
array( 'url' => 'weibo.com', 'icon' => 'dashicons dashicons-share-alt2', 'title' => esc_html__( 'Follow me on Weibo', 'yourseobook' ), 'class' => 'weibo' ),
array( 'url' => 'youtube.com', 'icon' => 'dashicons dashicons-youtube', 'title' => esc_html__( 'Subscribe to me on YouTube', 'yourseobook' ), 'class' => 'youtube' ),
);

return apply_filters( 'yourseobook_social_icons', $social_icons );
}
}


function enqueue_dashicons() {
    wp_enqueue_style( 'dashicons' );
}
add_action( 'wp_enqueue_scripts', 'enqueue_dashicons' );

if ( ! function_exists( 'yourseobook_get_social_media' ) ) {
	function yourseobook_get_social_media() {
		$defaults = yourseobook_generate_defaults();
		$output = array();
		$social_icons = yourseobook_generate_social_urls();
		$social_urls = explode( ',', get_theme_mod( 'social_urls', $defaults['social_urls'] ) );
		$social_newtab = get_theme_mod( 'social_newtab', $defaults['social_newtab'] );
		$social_alignment = get_theme_mod( 'social_alignment', $defaults['social_alignment'] );
		$contact_phone = get_theme_mod( 'contact_phone', $defaults['contact_phone'] );

		if( !empty( $contact_phone ) ) {
			$output[] = sprintf( '<li class="%1$s"><i class="%2$s"></i>%3$s</li>',
				'phone',
				'fas fa-phone fa-flip-horizontal',
				$contact_phone
			);
		}

		foreach( $social_urls as $key => $value ) {
			if ( !empty( $value ) ) {
				$domain = str_ireplace( 'www.', '', parse_url( $value, PHP_URL_HOST ) );
				$index = array_search( strtolower( $domain ), array_column( $social_icons, 'url' ) );
				if( false !== $index ) {
					$output[] = sprintf( '<li class="brand %1$s "><a href="%2$s" title="%3$s"%4$s><i class="%5$s"></i></a></li>',
						$social_icons[$index]['class'],
						esc_url( $value ),
						$social_icons[$index]['title'],
						( !$social_newtab ? '' : ' target="_blank"' ),
						$social_icons[$index]['icon']
					);
				}
				else {
					$output[] = sprintf( '<li class="nosocial"><a href="%2$s"%3$s><i class="%4$s"></i></a></li>',
						$social_icons[$index]['class'],
						esc_url( $value ),
						( !$social_newtab ? '' : ' target="_blank"' ),
						'fas fa-globe'
					);
				}
			}
		}

		if( get_theme_mod( 'social_rss', $defaults['social_rss'] ) ) {
			$output[] = sprintf( '<li class="%1$s"><a href="%2$s" title="%3$s"%4$s><i class="%5$s"></i></a></li>',
				'rss',
				home_url( '/feed' ),
				'Subscribe to my RSS feed',
				( !$social_newtab ? '' : ' target="_blank"' ),
				'fas fa-rss'
			);
		}

		if ( !empty( $output ) ) {
			$output = apply_filters( 'yourseobook_social_icons_list', $output );
			array_unshift( $output, '<ul class="social-icons ' . $social_alignment . '" style="list-style:none;">' );
			$output[] = '</ul>';
		}

		return implode( '', $output );
	}
}