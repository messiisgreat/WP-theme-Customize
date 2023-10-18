<?php


// Start General SEO Book Pro Controls

// Start General SEO Book Pro Controls

$wp_customize->add_setting( 'yourseobook_general_seo_book_pro_settings_controller',
    array(
        //'default' => $this->defaults['search_menu_icon'],
        'transport' => 'refresh',
        'sanitize_callback' => 'yourseobook_switch_sanitization'
    )
);

$wp_customize->add_control( new Yourseobook_SEO_General_Control( $wp_customize, 'yourseobook_general_seo_book_pro_settings_controller',
    array(
        'label' => __( 'SEO BOOK PRO™', 'yourseobook' ),
        'section' => 'yourseobook_general_seo_book_pro_sections'
    )
) );

// End General SEO Book Pro Controls

// Start General SEO Settings

$wp_customize->add_setting( 'yourseobook_general_seo_settings_controller',
    array(
        //'default' => $this->defaults['search_menu_icon'],
        'transport' => 'refresh',
        'sanitize_callback' => 'yourseobook_switch_sanitization'
    )
);

$wp_customize->add_control( new Yourseobook_SEO_General_Control( $wp_customize, 'yourseobook_general_seo_settings_controller',
    array(
        'label' => __( 'General Settings', 'yourseobook' ),
        'section' => 'yourseobook_general_seo_sections'
    )
) );

// End General SEO Settings

$wp_customize->add_setting( 'yourseobook_general_seo_metadata_settings_controller',
    array(
        //'default' => $this->defaults['search_menu_icon'],
        'transport' => 'refresh',
        'sanitize_callback' => 'yourseobook_switch_sanitization'
    )
);

$wp_customize->add_control( new Yourseobook_SEO_General_Control( $wp_customize, 'yourseobook_general_seo_metadata_settings_controller',
    array(
        'label' => __( 'Metadata Settings', 'yourseobook' ),
        'section' => 'yourseobook_general_seo_clean_metadata_sections'
    )
) );



$wp_customize->add_setting( 'yourseobook_general_seo_single_pages_settings_demo_radio_control', array(
    'default'        => 'MetaTT',
) );
$wp_customize->add_control( 'yourseobook_general_seo_single_pages_settings_demo_radio_control', array(
    'label'      => 'Page Styles/Settings',
    'section'    => 'yourseobook_general_seo_sections',
    'settings'   => 'yourseobook_general_seo_single_pages_settings_demo_radio_control',
    'type'       => 'radio',
    'choices'    => array(
        'MetaTT'          => 'Meta Title Tag',
        'MetaD'           => 'Meta Description',
        'HeadMeta'        => 'Head Meta Tags',
        'Typography'     => 'Page Title Heading Typography',
        'CTAs'           => 'Page CTAs in Content',
    ),
    'input_attrs' => array(
        'class' => 'yourseobook-tabbed-menu-control',
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
                            case 'MetaTT':
                                ?>
                                <h3>Meta Title Tag Settings</h3>
                                <p>Here you can customize the Meta Title Tag for single pages.</p>
                                <?php
                                break;
                            case 'MetaD':
                                ?>
                                <h3>Meta Description Settings</h3>
                                <p>Here you can customize the Meta Description for single pages.</p>
                                <?php
                                break;
                            case 'HeadMeta':
                                ?>
                                <h3>Head Meta Tags Settings</h3>
                                <p>Here you can customize the Head Meta Tags for single pages.</p>
                                <?php
                                break;
                            case 'Typography':
                                ?>
                                <h3>Page Title Heading Typography Settings</h3>
                                <p>Here you can customize the typography for the page title heading.</p>
                                <?php
                                break;
                            case 'CTAs':
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

        <style>
            /* Add the necessary styles for the tabbed menu */
            .yourseobook-tabbed-menu {
                /* Add your styles here */
            }

            .yourseobook-tabbed-menu-nav {
                /* Add your styles here */
            }

            .yourseobook-tabbed-menu-item {
                /* Add your styles here */
            }

            .yourseobook-tabbed-menu-panels {
                /* Add your styles here */
            }

            .yourseobook-tabbed-menu-panel {
                /* Add your styles here */
            }
        </style>

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


// Add MetaTT Control Panel Section
$wp_customize->add_setting( 'yourseobook_general_seo_meta_tt_settings_controller',
    array(
        //'default' => $this->defaults['search_menu_icon'],
        'transport' => 'refresh',
        'sanitize_callback' => 'yourseobook_switch_sanitization'
    )
);

$wp_customize->add_control( new Yourseobook_SEO_General_Control( $wp_customize, 'yourseobook_general_seo_meta_tt_settings_controller',
    array(
        'label' => __( 'Meta Title Tag Settings', 'yourseobook' ),
        'section' => 'yourseobook_general_seo_sections',
        'active_callback' => function() {
            return ( get_theme_mod( 'yourseobook_general_seo_single_pages_settings_demo_radio_control' ) === 'MetaTT' );
        },
      'type' => 'textarea',
    )
) );