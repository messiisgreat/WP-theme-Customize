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
}


public function yourseobook_add_customizer_panels( $wp_customize ) {
require_once trailingslashit( dirname(__FILE__) ) . 'panels/typography-panel.php';
require_once trailingslashit( dirname(__FILE__) ) . 'panels/header-panel.php';
require_once trailingslashit( dirname(__FILE__) ) . 'panels/land-panel.php';
require_once trailingslashit( dirname(__FILE__) ) . 'panels/footer-panel.php';
require_once trailingslashit( dirname(__FILE__) ) . 'panels/brand-panel.php';
require_once trailingslashit( dirname(__FILE__) ) . 'panels/seo-panel.php';
require_once trailingslashit( dirname(__FILE__) ) . 'panels/seo/general/general-seo-panel.php';
require_once trailingslashit( dirname(__FILE__) ) . 'panels/header-button-cta-panel.php';
require_once trailingslashit( dirname(__FILE__) ) . 'panels/layout/head/search-panel.php';
require_once trailingslashit( dirname(__FILE__) ) . 'panels/api/tracking/google-scripts-panel.php';
require_once trailingslashit( dirname(__FILE__) ) . 'panels/layout/head/header-nav-panel.php';
require_once trailingslashit( dirname(__FILE__) ) . 'panels/layout/footer/main-footer-panel.php';
require_once trailingslashit( dirname(__FILE__) ) . 'panels/layout/single/page/single-page-panel.php';
}

public function yourseobook_add_customizer_sections( $wp_customize ) {
require_once trailingslashit( dirname(__FILE__) ) . 'sections/typography-sections.php';
require_once trailingslashit( dirname(__FILE__) ) . 'sections/header-sections.php';
require_once trailingslashit( dirname(__FILE__) ) . 'sections/land-sections.php';
require_once trailingslashit( dirname(__FILE__) ) . 'sections/footer-sections.php';
require_once trailingslashit( dirname(__FILE__) ) . 'sections/brand-sections.php';
require_once trailingslashit( dirname(__FILE__) ) . 'sections/seo-sections.php';
require_once trailingslashit( dirname(__FILE__) ) . 'sections/seo/general/general-seo-sections.php';
require_once trailingslashit( dirname(__FILE__) ) . 'sections/header-button-cta-sections.php';
require_once trailingslashit( dirname(__FILE__) ) . 'sections/layout/head/search-sections.php';
require_once trailingslashit( dirname(__FILE__) ) . 'sections/api/tracking/google-scripts-sections.php';
require_once trailingslashit( dirname(__FILE__) ) . 'sections/layout/head/header-nav-sections.php';
require_once trailingslashit( dirname(__FILE__) ) . 'sections/layout/footer/main-footer-sections.php';
require_once trailingslashit( dirname(__FILE__) ) . 'sections/layout/single/page/single-page-sections.php';
}

public function yourseobook_add_customizer_controls( $wp_customize ) {
require_once trailingslashit( dirname(__FILE__) ) . 'controls/typography-controls.php';
require_once trailingslashit( dirname(__FILE__) ) . 'controls/header-controls.php';
require_once trailingslashit( dirname(__FILE__) ) . 'controls/land-controls.php';
require_once trailingslashit( dirname(__FILE__) ) . 'controls/footer-controls.php';
require_once trailingslashit( dirname(__FILE__) ) . 'controls/brand-controls.php';
require_once trailingslashit( dirname(__FILE__) ) . 'controls/land/above-the-fold-controls.php';
require_once trailingslashit( dirname(__FILE__) ) . 'controls/seo-controls.php';
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
}


///wp-content/themes/yourseobook/inc/controls/layout/single/page/single-page-metas-control.php
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