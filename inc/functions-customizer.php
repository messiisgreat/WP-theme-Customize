<?php

if ( ! function_exists( 'yourseobook_scripts_styles' ) ) {
	function yourseobook_scripts_styles() {
		// Register and enqueue our icon font
		// We're using the awesome Font Awesome icon font. http://fortawesome.github.io/Font-Awesome
		wp_register_style( 'fontawesome', trailingslashit( get_template_directory_uri() ) . 'css/fontawesome-all.min.css');
		wp_enqueue_style( 'fontawesome' );
	}
}
add_action( 'wp_enqueue_scripts', 'yourseobook_scripts_styles' );
add_action( 'customize_controls_print_styles', 'yourseobook_scripts_styles' );



if ( ! function_exists( 'yourseobook_get_credits' ) ) {
	function yourseobook_get_credits() {
		$defaults = yourseobook_generate_defaults();

		// wpautop this so that it acts like the new visual text widget, since we're using the same TinyMCE control
		return wpautop( get_theme_mod( 'sample_tinymce_editor', $defaults['sample_tinymce_editor'] ) );
	}
}


if ( ! function_exists( 'yourseobook_generate_defaults' ) ) {
	function yourseobook_generate_defaults() {
		$customizer_defaults = array(
			'header_cta_button_tabs' => 0,
			'social_newtab' => 0,
			'social_urls' => '',
			'social_alignment' => 'alignright',
			'social_rss' => 0,
			'social_url_icons' => '',
			'contact_phone' => 0,
			'search_menu_icon' => 0,
			'woocommerce_shop_sidebar' => 1,
			'woocommerce_product_sidebar' => 0,
			'sample_toggle_switch' => 0,
			'header_logo_display_slider' => 35,
			'alert_text_font_size_slider' => '',
			'sample_slider_control_small_step' => 2,
			'sample_sortable_repeater_control' => '',
			'sample_image_radio_button' => 'sidebarright',
			'sample_text_radio_button' => 'right',
			'sample_image_checkbox' => 'stylebold,styleallcaps',
			'sample_single_accordion' => '',
			'sample_alpha_color' => 'rgb(255 130 41)',
			'yourseobook_header_alert_color' => 'rgb(255 130 41)',
			'yourseobook_header_alert_text_color' => 'rgb(0 0 0)',
			'sample_wpcolorpicker_alpha_color2' => 'rgb(255 130 41)',
			'sample_pill_checkbox' => 'tiger,elephant,hippo',
			'sample_pill_checkbox2' => 'captainmarvel,msmarvel,squirrelgirl',
			'sample_pill_checkbox3' => 'author,categories,comments',
			'sample_simple_notice' => '',
			'sample_dropdown_select2_control_single' => 'vic',
			'sample_dropdown_select2_control_multi' => 'Antarctica/McMurdo,Australia/Melbourne,Australia/Broken_Hill',
			'yourseobook_header_alert_dropdown_select2_control_multi2' => 'Atlantic/Stanley,Australia/Darwin',
			'sample_dropdown_posts_control' => '',
			'sample_tinymce_editor' => '',
			'sample_google_font_select' => json_encode(
				array(
					'font' => 'Open Sans',
					'regularweight' => 'regular',
					'italicweight' => 'italic',
					'boldweight' => '700',
					'category' => 'sans-serif'
				)
			),
			'sample_default_text' => '',
			'sample_email_text' => '',
			'alert_button_url_title_link' => '',
			'sample_number_text' => '',
			'sample_hidden_text' => '',
			'sample_date_text' => '',
			'sample_default_checkbox' => 0,
			'sample_default_select' => 'jet-fuel',
			'sample_default_radio' => 'spider-man',
			'sample_default_dropdownpages' => '',
			'sample_default_textarea' => '',
			'sample_default_color' => '#333',
			'sample_default_media' => '',
			'sample_default_image' => '',
			'sample_default_cropped_image' => '',
			'sample_date_only' => '2017-08-28',
			'sample_date_time' => '2017-08-28 16:30:00',
			'sample_date_time_no_past_date' => date( 'Y-m-d' ),
// Default Control Settings for Below the Fold Controls
                                                             'ml_btf_background' => '#000000',
                                                             'ml_btf_heading_title_color' => '#ffffff',
		);

		return apply_filters( 'yourseobook_customizer_defaults', $customizer_defaults );
	}

}