<?php
// Yourseobook_SEO_Single_Page_General_Control
$wp_customize->add_setting( 'yourseobook_general_seo_single_pages_breadcrumbs_settings_demo_radio_control', array(
    'default'        => 'Breadcrumbs',
) );
$wp_customize->add_control( 'yourseobook_general_seo_single_pages_breadcrumbs_settings_demo_radio_control', array(
    'label'      => 'Breadcrumbs Styles/Settings',
    'section'    => 'yourseobook_single_page_breadcumbs_section',
    'settings'   => 'yourseobook_general_seo_single_pages_breadcrumbs_settings_demo_radio_control',
    'type'       => 'radio',
    'choices'    => array(
        'Breadcrumbs'          => 'Settings',
        'BreadcrumbsDisplay'           => 'Display',
        'BreadcrumbsText'           => 'Text',
        'BreadcrumbsSchema'        => 'Schema',
        'BreadcrumbsStyles'     => 'Styles',

    ),
    'render_callback' => function() {
        // Add the necessary HTML structure and styles for the tabbed menu
        ?>
        <div class="yourseobook-tabbed-menu">
            <ul class="yourseobook-tabbed-menu-nav">
                <?php
                $choices = $this->get_control()->choices;
                foreach ( $choices as $label => $section ) :
                    ?>
                    <li class="yourseobook-tabbed-menu-item" data-section="<?php echo esc_attr( $section ); ?>">
                        <?php echo esc_html( $label ); ?>
                    </li>
                    <?php
                endforeach;
                ?>
            </ul>
            <div class="yourseobook-tabbed-menu-panels">
                <?php
                foreach ( $choices as $section ) :
                    ?>
                    <div class="yourseobook-tabbed-menu-panel" data-section="<?php echo esc_attr( $section ); ?>">
                        <?php
                        // Add the content for each panel based on the selected section
                        switch ( $section ) {
                            case 'Breadcrumbs':
                                ?>
                                <h3>Meta Title Tag Settings</h3>
                                <p>Here you can customize the Meta Title Tag for single pages.</p>
                                <?php
                                break;
                            case 'BreadcrumbsDisplay':
                                ?>
                                <h3>Meta Description Settings</h3>
                                <p>Here you can customize the Meta Description for single pages.</p>
                                <?php
                                break;
                            case 'BreadcrumbsText':
                                ?>
                                <h3>Head Meta Tags Settings</h3>
                                <p>Here you can customize the Head Meta Tags for single pages.</p>
                                <?php
                                break;
                            case 'BreadcrumbsSchema':
                                ?>
                                <h3>Page Title Heading Typography Settings</h3>
                                <p>Here you can customize the typography for the page title heading.</p>
                                <?php
                                break;
                            case 'BreadcrumbsStyles':
                                ?>
                                <h3>Page CTAs in Content Settings</h3>
                                <p>Here you can customize the CTAs (Call to Action) in the page content.</p>
                                <?php
                                break;
                        }
                        ?>
                    </div>
                    <?php
                endforeach;
                ?>
            </div>
        </div>



        <script>
            jQuery(document).ready(function($) {
                // Handle tabbed menu click events
                $('.yourseobook-tabbed-menu-item').on('click', function() {
                    var selectedSection = $(this).data('section');

                    // Remove active class from all menu items and panels
                    $('.yourseobook-tabbed-menu-item').removeClass('active');
                    $('.yourseobook-tabbed-menu-panel').removeClass('active');

                    // Add active class to the clicked menu item and corresponding panel
                    $(this).addClass('active');
                    $('.yourseobook-tabbed-menu-panel[data-section="' + selectedSection + '"]').addClass('active');
                });
            });
        </script>
        <?php
    },
) );

/*
$wp_customize->add_setting( 'yourseobook_single_page_breadcrumbs_settings_controller',
  array(
    //'default' => $this->defaults['search_menu_icon'],
    'transport' => 'refresh',
    'sanitize_callback' => 'yourseobook_switch_sanitization'
  )
);

$wp_customize->add_control( new Yourseobook_SEO_Single_Page_Breadcrumbs_General_Control( $wp_customize, 'yourseobook_single_page_breadcrumbs_settings_controller',
  array(
    'label' => __( 'Main Breadcrumbs Settings', 'yourseobook' ),
    'section' => 'yourseobook_single_page_breadcumbs_section',
     'active_callback' => function() {
            return ( get_theme_mod( 'yourseobook_general_seo_single_pages_breadcrumbs_settings_demo_radio_control' ) === 'BreadcrumbsDisplay' );
        },
  )
) );
*/

// Yourseobook_SEO_Single_Page_Breadcrumbs_General_Control
// Add MetaTT Control Panel Section
$wp_customize->add_setting( 'yourseobook_single_page_breadcrumbs_display_control',
    array(
        //'default' => $this->defaults['search_menu_icon'],
        'transport' => 'refresh',
        'sanitize_callback' => 'yourseobook_switch_sanitization'
    )
);

$wp_customize->add_control( new Yourseobook_Toggle_Switch_Custom_control( $wp_customize, 'yourseobook_single_page_breadcrumbs_display_control',
    array(
    'label' => __( 'General Breadcrumbs Settings', 'yourseobook' ),
    'section' => 'yourseobook_single_page_breadcumbs_section',
     'active_callback' => function() {
            return ( get_theme_mod( 'yourseobook_general_seo_single_pages_breadcrumbs_settings_demo_radio_control' ) === 'Breadcrumbs' );
        },
                  'input_attrs' => array(
                  'class' => 'general-breadcrumbs-settings',
 ),
    )
) );


$wp_customize->add_setting( 'yourseobook_single_page_breadcrumbs_help_video_display_control',
    array(
        //'default' => $this->defaults['search_menu_icon'],
        'transport' => 'refresh',
        'sanitize_callback' => 'yourseobook_switch_sanitization'
    )
);

$wp_customize->add_control( new Yourseobook_SEO_Single_Page_Breadcrumbs_General_Control( $wp_customize, 'yourseobook_single_page_breadcrumbs_help_video_display_control',
    array(
    'label' => __( 'Breadcrumbs Help Video and FAQ`s', 'yourseobook' ),
    'section' => 'yourseobook_single_page_breadcumbs_section',
     'active_callback' => function() {
            return ( get_theme_mod( 'yourseobook_general_seo_single_pages_breadcrumbs_settings_demo_radio_control' ) === 'Breadcrumbs' );
        },

    )
) );





$wp_customize->add_setting( 'yourseobook_single_page_breadcrumbs_font_size_setting',
  array(
  //  'priority' => 14,
    'default' => 10,
    'transport' => 'refresh',
    'sanitize_callback' => 'yourseobook_range_sanitization'
  )
);
$wp_customize->add_control( new Yourseobook_Slider_Custom_Control( $wp_customize, 'yourseobook_single_page_breadcrumbs_font_size_setting',
  array(
    'label' => __( 'Breadcrumbs Text Font Size', 'yourseobook' ),
    'description' => 'This setting enables you to adjust the font size of the text used in breadcrumbs. You can increase or decrease the font size to achieve the desired visual impact and readability of breadcrumbs.',
          'active_callback' => function() {
              return ( get_theme_mod( 'yourseobook_general_seo_single_pages_breadcrumbs_settings_demo_radio_control' ) === 'BreadcrumbsText' );
          },
    'section' => 'yourseobook_single_page_breadcumbs_section',
    'input_attrs' => array(
      'min' => 10,
      'max' => 16,
      'step' => 1,
    ),
  )
) );

		$wp_customize->add_setting( 'yourseobook_single_page_breadcrumbs_font_weight_setting',
			array(
				// 'default' => $this->defaults['sample_dropdown_select2_control_single'],
				'transport' => 'refresh',
				'sanitize_callback' => 'yourseobook_text_sanitization'
			)
		);
		$wp_customize->add_control( new yourseobook_Dropdown_Select2_Custom_Control( $wp_customize, 'yourseobook_single_page_breadcrumbs_font_weight_setting',
			array(
				
                                                                                 'label' => __( 'Breadcrumbs Font Weight', 'yourseobook' ),
				'section' => 'yourseobook_single_page_breadcumbs_section',
          'active_callback' => function() {
              return ( get_theme_mod( 'yourseobook_general_seo_single_pages_breadcrumbs_settings_demo_radio_control' ) === 'BreadcrumbsText' );
          },
				'input_attrs' => array(
					'placeholder' => __( 'Select Font Weight...', 'yourseobook' ),
					'multiselect' => false,
				),
				'choices' => array(
					'100' => __( '100', 'yourseobook' ),
					'200' => __( '200', 'yourseobook' ),
					'300' => __( '300', 'yourseobook' ),
					'400' => __( '400', 'yourseobook' ),
					'500' => __( '500', 'yourseobook' ),
					'600' => __( '600', 'yourseobook' ),
					'700' => __( '700', 'yourseobook' ),
					'800' => __( '800', 'yourseobook' ),
					'900' => __( '900', 'yourseobook' ),
				
				)
			)
		) );

// Test of WPColorPicker Alpha Color Picker Control
$wp_customize->add_setting( 'yourseobook_single_page_breadcrumbs_text_color_settings',
  array(
    'default' => '#000000',
    'type' => 'theme_mod',
    'capability' => 'edit_theme_options',
    'transport' => 'refresh',
    'sanitize_callback' => 'yourseobook_hex_rgba_sanitization',
  )
);
$wp_customize->add_control( new Yourseobook_Alpha_Color_Control( $wp_customize, 'yourseobook_single_page_breadcrumbs_text_color_settings',
  array(
    'label' => __( 'Breadcrumbs Text Color', 'yourseobook' ),
    'description' => 'This setting allows you to customize the color of the text used in breadcrumbs.You can choose a suitable text color that complements your website`s design and ensures good visibility for breadcrumbs.',
          'active_callback' => function() {
              return ( get_theme_mod( 'yourseobook_general_seo_single_pages_breadcrumbs_settings_demo_radio_control' ) === 'BreadcrumbsText' );
          },
  //  'description' => esc_html__( 'Alert Background control with Alpha channel', 'yourseobook' ),
    'section' => 'yourseobook_single_page_breadcumbs_section',
  )
) );


// Test of WPColorPicker Alpha Color Picker Control
$wp_customize->add_setting( 'yourseobook_single_page_breadcrumbs_links_text_color_settings',
  array(
    'default' => '#000000',
    'type' => 'theme_mod',
    'capability' => 'edit_theme_options',
    'transport' => 'refresh',
    'sanitize_callback' => 'yourseobook_hex_rgba_sanitization',
  )
);
$wp_customize->add_control( new Yourseobook_Alpha_Color_Control( $wp_customize, 'yourseobook_single_page_breadcrumbs_links_text_color_settings',
  array(
    'label' => __( 'Breadcrumbs Links Text Color', 'yourseobook' ),
    'description' => 'This setting lets you customize the color of the links within breadcrumbs.You can choose a specific color for the links to make them stand out and enhance the overall navigation experience.',
          'active_callback' => function() {
              return ( get_theme_mod( 'yourseobook_general_seo_single_pages_breadcrumbs_settings_demo_radio_control' ) === 'BreadcrumbsText' );
          },
  //  'description' => esc_html__( 'Alert Background control with Alpha channel', 'yourseobook' ),
    'section' => 'yourseobook_single_page_breadcumbs_section',
  )
) );