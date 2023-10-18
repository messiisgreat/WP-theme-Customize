<?php

/////////////////////////////////////////////////////// Your SEO Book PRO Setup Customizer ///////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
////////// Customizer Setup and Custom Controls  Adds the individual sections, settings, and controls /////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////// domain theme name - yourseobook /////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

class yourseobook_initialise_customizer_settings {

// Get our default values
private $defaults;

public function __construct() {
add_action( 'customize_register', array( $this, 'yourseobook_add_customizer_panels' ) );
add_action( 'customize_register', array( $this, 'yourseobook_add_customizer_sections' ) );
//add_action( 'customize_register', array( $this, 'yourseobook_add_single_page_custom_customizer_settings' ) );
add_action( 'customize_register', array( $this, 'yourseobook_add_customizer_controls' ) );
add_action( 'customize_register', array( $this, 'yourseobook_register_social_controls' ) );

}


public function yourseobook_add_customizer_panels( $wp_customize ) {
require_once trailingslashit( dirname(__FILE__) ) . 'panels/typography-panel.php';
require_once trailingslashit( dirname(__FILE__) ) . 'panels/header-panel.php';
require_once trailingslashit( dirname(__FILE__) ) . 'panels/land-panel.php';
require_once trailingslashit( dirname(__FILE__) ) . 'panels/footer-panel.php';
require_once trailingslashit( dirname(__FILE__) ) . 'panels/brand-panel.php';
require_once trailingslashit( dirname(__FILE__) ) . 'panels/seo-panel.php';
require_once trailingslashit( dirname(__FILE__) ) . 'panels/api/json-ld/json-ld-panel.php';
require_once trailingslashit( dirname(__FILE__) ) . 'panels/seo/general/general-seo-panel.php';
require_once trailingslashit( dirname(__FILE__) ) . 'panels/header-button-cta-panel.php';
require_once trailingslashit( dirname(__FILE__) ) . 'panels/layout/head/search-panel.php';
require_once trailingslashit( dirname(__FILE__) ) . 'panels/api/tracking/google-scripts-panel.php';
require_once trailingslashit( dirname(__FILE__) ) . 'panels/layout/head/header-nav-panel.php';
require_once trailingslashit( dirname(__FILE__) ) . 'panels/layout/footer/main-footer-panel.php';
require_once trailingslashit( dirname(__FILE__) ) . 'panels/layout/single/page/single-page-panel.php';
require_once trailingslashit( dirname(__FILE__) ) . 'panels/seo/general/general-social-icons-panel.php';
require_once trailingslashit( dirname(__FILE__) ) . 'panels/pro-panel.php';
require_once trailingslashit( dirname(__FILE__) ) . 'panels/advanced-cpt-panel.php';
}

public function yourseobook_add_customizer_sections( $wp_customize ) {
require_once trailingslashit( dirname(__FILE__) ) . 'sections/typography-sections.php';
require_once trailingslashit( dirname(__FILE__) ) . 'sections/header-sections.php';
require_once trailingslashit( dirname(__FILE__) ) . 'sections/land-sections.php';
require_once trailingslashit( dirname(__FILE__) ) . 'sections/footer-sections.php';
require_once trailingslashit( dirname(__FILE__) ) . 'sections/brand-sections.php';
require_once trailingslashit( dirname(__FILE__) ) . 'sections/seo-sections.php';
require_once trailingslashit( dirname(__FILE__) ) . 'sections/api/json-ld/json-ld-sections.php';
require_once trailingslashit( dirname(__FILE__) ) . 'sections/seo/general/general-seo-sections.php';
require_once trailingslashit( dirname(__FILE__) ) . 'sections/header-button-cta-sections.php';
require_once trailingslashit( dirname(__FILE__) ) . 'sections/layout/head/search-sections.php';
require_once trailingslashit( dirname(__FILE__) ) . 'sections/api/tracking/google-scripts-sections.php';
require_once trailingslashit( dirname(__FILE__) ) . 'sections/layout/head/header-nav-sections.php';
require_once trailingslashit( dirname(__FILE__) ) . 'sections/layout/footer/main-footer-sections.php';
require_once trailingslashit( dirname(__FILE__) ) . 'sections/layout/single/page/single-page-sections.php';
require_once trailingslashit( dirname(__FILE__) ) . 'sections/pro-sections.php';
require_once trailingslashit( dirname(__FILE__) ) . 'sections/advanced-cpt-sections.php';
}


public function yourseobook_add_customizer_controls( $wp_customize ) {
require_once trailingslashit( dirname(__FILE__) ) . 'controls/typography-controls.php';
require_once trailingslashit( dirname(__FILE__) ) . 'controls/header-controls.php';
require_once trailingslashit( dirname(__FILE__) ) . 'controls/land-controls.php';
require_once trailingslashit( dirname(__FILE__) ) . 'controls/land-services-controls.php';
require_once trailingslashit( dirname(__FILE__) ) . 'controls/footer-controls.php';
require_once trailingslashit( dirname(__FILE__) ) . 'controls/brand-controls.php';
require_once trailingslashit( dirname(__FILE__) ) . 'controls/land/above-the-fold-controls.php';
require_once trailingslashit( dirname(__FILE__) ) . 'controls/land/below-the-fold-controls.php';
require_once trailingslashit( dirname(__FILE__) ) . 'controls/land/landing-services-prebuilds-controls.php';
require_once trailingslashit( dirname(__FILE__) ) . 'controls/seo-controls.php';
require_once trailingslashit( dirname(__FILE__) ) . 'controls/api/json-ld/router/main-json-ld-controls.php';
require_once trailingslashit( dirname(__FILE__) ) . 'controls/json-ld/organization.php';
require_once trailingslashit( dirname(__FILE__) ) . 'controls/json-ld/articles.php';
require_once trailingslashit( dirname(__FILE__) ) . 'controls/json-ld/faq-page.php';
require_once trailingslashit( dirname(__FILE__) ) . 'controls/json-ld/how-to.php';
require_once trailingslashit( dirname(__FILE__) ) . 'controls/json-ld/local-business.php';
require_once trailingslashit( dirname(__FILE__) ) . 'controls/json-ld/person.php';
require_once trailingslashit( dirname(__FILE__) ) . 'controls/json-ld/products.php';
require_once trailingslashit( dirname(__FILE__) ) . 'controls/json-ld/reviews.php';
require_once trailingslashit( dirname(__FILE__) ) . 'controls/json-ld/sitenavelements.php';
require_once trailingslashit( dirname(__FILE__) ) . 'controls/json-ld/video-object.php';
require_once trailingslashit( dirname(__FILE__) ) . 'controls/json-ld/website.php';
require_once trailingslashit( dirname(__FILE__) ) . 'controls/seo/general/general-seo-controls.php';
require_once trailingslashit( dirname(__FILE__) ) . 'controls/api/tracking/google-scripts-controls.php';
require_once trailingslashit( dirname(__FILE__) ) . 'controls/layout/head/search-controls.php';
require_once trailingslashit( dirname(__FILE__) ) . 'controls/layout/head/header-nav-controls.php';
require_once trailingslashit( dirname(__FILE__) ) . 'controls/land/about-us-section-controls.php';
require_once trailingslashit( dirname(__FILE__) ) . 'controls/layout/footer/main-footer-controls.php';
require_once trailingslashit( dirname(__FILE__) ) . 'controls/header-cta-button-controls.php';
require_once trailingslashit( dirname( __FILE__ ) ) . 'controls/layout/single/page/single-page-controls.php';
require_once trailingslashit( dirname( __FILE__ ) ) . 'controls/layout/single/page/single-page-breadcrumbs.php';
require_once trailingslashit( dirname( __FILE__ ) ) . 'controls/layout/single/page/single-page-metas-control.php';
require_once trailingslashit( dirname( __FILE__ ) ) . 'controls/pro-controls.php';
require_once trailingslashit( dirname( __FILE__ ) ) . 'controls/advanced-cpt-controls.php';
}


	public function yourseobook_register_social_controls( $wp_customize ) {

		// Add our Checkbox switch setting and control for opening URLs in a new tab
		$wp_customize->add_setting( 'social_newtab',
			array(
				// 'default' => $this->defaults['social_newtab'],
				'transport' => 'postMessage',
				'sanitize_callback' => 'yourseobook_switch_sanitization'
			)
		);
		$wp_customize->add_control( new Yourseobook_Toggle_Switch_Custom_control( $wp_customize, 'social_newtab',
			array(
				'label' => __( 'Open in new browser tab', 'yourseobook' ),
				'section' => 'yourseobook_pro_version_sections'
			)
		) );
		$wp_customize->selective_refresh->add_partial( 'social_newtab',
			array(
				'selector' => '.social',
				'container_inclusive' => false,
				'render_callback' => function() {
					echo yourseobook_get_social_media();
				},
				'fallback_refresh' => true
			)
		);

		// Add our Text Radio Button setting and Custom Control for controlling alignment of icons
		$wp_customize->add_setting( 'social_alignment',
			array(
				// 'default' => $this->defaults['social_alignment'],
				'transport' => 'postMessage',
				'sanitize_callback' => 'yourseobook_radio_sanitization'
			)
		);
		$wp_customize->add_control( new Yourseobook_Text_Radio_Button_Custom_Control( $wp_customize, 'social_alignment',
			array(
				'label' => __( 'Alignment', 'yourseobook' ),
				'description' => esc_html__( 'Choose the alignment for your social icons', 'yourseobook' ),
				'section' => 'yourseobook_pro_version_sections',
				'choices' => array(
					'alignleft' => __( 'Left', 'yourseobook' ),
					'alignright' => __( 'Right', 'yourseobook'  )
				)
			)
		) );
		$wp_customize->selective_refresh->add_partial( 'social_alignment',
			array(
				'selector' => '.social',
				'container_inclusive' => false,
				'render_callback' => function() {
					echo yourseobook_get_social_media();
				},
				'fallback_refresh' => true
			)
		);

		// Add our Sortable Repeater setting and Custom Control for Social media URLs
		$wp_customize->add_setting( 'social_urls',
			array(
				// 'default' => $this->defaults['social_urls'],
				'transport' => 'postMessage',
				'sanitize_callback' => 'yourseobook_url_sanitization'
			)
		);
		$wp_customize->add_control( new Yourseobook_Sortable_Repeater_Custom_Control( $wp_customize, 'social_urls',
			array(
				'label' => __( 'Social URLs', 'yourseobook' ),
				'description' => esc_html__( 'Add your social media links.', 'yourseobook' ),
				'section' => 'yourseobook_pro_version_sections',
				'button_labels' => array(
					'add' => __( 'Add Icon', 'yourseobook' ),
				)
			)
		) );
		$wp_customize->selective_refresh->add_partial( 'social_urls',
			array(
				'selector' => '.social',
				'container_inclusive' => false,
				'render_callback' => function() {
					echo yourseobook_get_social_media();
				},
				'fallback_refresh' => true
			)
		);
// editor-bold
		// Add our Single Accordion setting and Custom Control to list the available Social Media icons
$socialIconsList = array(

	'Behance' => __( '<span class="dashicons dashicons-editor-bold"></span>', 'yourseobook' ),
	'Whatsapp' => __( '<span class="dashicons dashicons-whatsapp"></span>', 'yourseobook' ),
	'Bitbucket' => __( '<i class="bi-bucket"></i>', 'yourseobook' ),
	'CodePen' => __( '<span class="dashicons dashicons-editor-code"></span>', 'yourseobook' ),
	'DeviantArt' => __( '<span class="dashicons dashicons-art"></span>', 'yourseobook' ),
	'Discord' => __( '<span class="dashicons dashicons-megaphone"></span>', 'yourseobook' ),
	'Dribbble' => __( '<span class="dashicons dashicons-dribbble"></span>', 'yourseobook' ),
	'Etsy' => __( '<span class="dashicons dashicons-cart"></span>', 'yourseobook' ),
	'Facebook' => __( '<span class="dashicons dashicons-facebook"></span>', 'yourseobook' ),
	'Flickr' => __( '<span class="dashicons dashicons-camera"></span>', 'yourseobook' ),
	'Foursquare' => __( '<span class="dashicons dashicons-location-alt"></span>', 'yourseobook' ),
	'GitHub' => __( '<span class="dashicons dashicons-external"></span>', 'yourseobook' ),
	'Google+' => __( '<span class="dashicons dashicons-googleplus"></span>', 'yourseobook' ),
	'Instagram' => __( '<span class="dashicons dashicons-instagram"></span>', 'yourseobook' ),
	'Kickstarter' => __( '<span class="dashicons dashicons-lightbulb"></span>', 'yourseobook' ),
	'Last.fm' => __( '<span class="dashicons dashicons-controls-play"></span>', 'yourseobook' ),
	'LinkedIn' => __( '<span class="dashicons dashicons-linkedin"></span>', 'yourseobook' ),
	'Medium' => __( '<span class="dashicons dashicons-admin-post"></span>', 'yourseobook' ),
	'Patreon' => __( '<span class="dashicons dashicons-heart"></span>', 'yourseobook' ),
	'Pinterest' => __( '<span class="dashicons dashicons-pinterest"></span>', 'yourseobook' ),
	'Reddit' => __( '<span class="dashicons dashicons-reddit"></span>', 'yourseobook' ),
	'Slack' => __( '<span class="dashicons dashicons-slides"></span>', 'yourseobook' ),
	'SlideShare' => __( '<span class="dashicons dashicons-slideshare"></span>', 'yourseobook' ),
	'Snapchat' => __( '<span class="dashicons dashicons-video-alt3"></span>', 'yourseobook' ),
	'SoundCloud' => __( '<span class="dashicons dashicons-format-audio"></span>', 'yourseobook' ),
	'Spotify' => __( '<span class="dashicons dashicons-playlist-audio"></span>', 'yourseobook' ),
	'Stack Overflow' => __( '<span class="dashicons dashicons-format-status"></span>', 'yourseobook' ),
	'Tumblr' => __( '<span class="dashicons dashicons-tumblr"></span>', 'yourseobook' ),
	'Twitch' => __( '<span class="dashicons dashicons-video-alt2"></span>', 'yourseobook' ),
	'Twitter' => __( '<span class="dashicons dashicons-twitter"></span>', 'yourseobook' ),
	'Vimeo' => __( '<span class="dashicons dashicons-vimeo"></span>', 'yourseobook' ),
	'Weibo' => __( '<span class="dashicons dashicons-share-alt2"></span>', 'yourseobook' ),
	'YouTube' => __( '<span class="dashicons dashicons-youtube"></span>', 'yourseobook' ),
);

		$wp_customize->add_setting( 'social_url_icons',
			array(
				//'default' => $this->defaults['social_url_icons'],
				'transport' => 'refresh',
				'sanitize_callback' => 'yourseobook_text_sanitization'
			)
		);
		$wp_customize->add_control( new Yourseobook_Single_Accordion_Custom_Control( $wp_customize, 'social_url_icons',
			array(
				'label' => __( 'View list of available icons', 'yourseobook' ),
				'description' => $socialIconsList,
				'section' => 'yourseobook_pro_version_sections'
			)
		) );

		// Add our Checkbox switch setting and Custom Control for displaying an RSS icon
		$wp_customize->add_setting( 'social_rss',
			array(
				//'default' => $this->defaults['social_rss'],
				'transport' => 'postMessage',
				'sanitize_callback' => 'yourseobook_switch_sanitization'
			)
		);
		$wp_customize->add_control( new Yourseobook_Toggle_Switch_Custom_control( $wp_customize, 'social_rss',
			array(
				'label' => __( 'Display RSS icon', 'yourseobook' ),
				'section' => 'yourseobook_pro_version_sections'
			)
		) );
		$wp_customize->selective_refresh->add_partial( 'social_rss',
			array(
				'selector' => '.social',
				'container_inclusive' => false,
				'render_callback' => function() {
					echo yourseobook_get_social_media();
				},
				'fallback_refresh' => true
			)
		);

	}

}



function enqueue_customizer_style() {
    wp_enqueue_style( 'customizer-style', get_stylesheet_directory_uri() . '/inc/assets/css/customize-preview.css' );
}

add_action( 'wp_enqueue_scripts', 'enqueue_customizer_style' );

function yourseobook_customizer_style() {
wp_add_inline_style( 'customize-controls', '');
}
add_action( 'customize_controls_enqueue_scripts', 'yourseobook_customizer_style');








$yourseobook_settings = new yourseobook_initialise_customizer_settings();