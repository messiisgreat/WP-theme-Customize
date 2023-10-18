<?php


/// yourseobook_single_page_page_top_meta_display_control

// Yourseobook_SEO_Single_Page_Meta_General_Control
$wp_customize->add_setting( 'yourseobook_single_page_metas_settings_radio_control', array(
    'default'        => 'SinglePageMetaSettings',
) );
$wp_customize->add_control( 'yourseobook_single_page_metas_settings_radio_control', array(
    'label'      => 'Single Page Top Metas Styles/Settings',
    'section'    => 'yourseobook_single_page_metas_section',
    'settings'   => 'yourseobook_single_page_metas_settings_radio_control',
    'type'       => 'radio',
    'choices'    => array(
        'SinglePageMetaSettings'          => 'Settings',
        'SinglePageMetaDisplaySettings'           => 'Display',
        'SinglePageMetaTextSettings'           => 'Text',
        'SinglePageMetaSchemaSettings'        => 'Schema',
        'SinglePageMetaStylesSettings'     => 'Styles',

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
                            case 'SinglePageMetaSettings':
                                ?>
                                <h3>Meta Title Tag Settings</h3>
                                <p>Here you can customize the Meta Title Tag for single pages.</p>
                                <?php
                                break;
                            case 'SinglePageMetaDisplaySettings':
                                ?>
                                <h3>Meta Description Settings</h3>
                                <p>Here you can customize the Meta Description for single pages.</p>
                                <?php
                                break;
                            case 'SinglePageMetaTextSettings':
                                ?>
                                <h3>Head Meta Tags Settings</h3>
                                <p>Here you can customize the Head Meta Tags for single pages.</p>
                                <?php
                                break;
                            case 'SinglePageMetaSchemaSettings':
                                ?>
                                <h3>Page Title Heading Typography Settings</h3>
                                <p>Here you can customize the typography for the page title heading.</p>
                                <?php
                                break;
                            case 'SinglePageMetaStylesSettings':
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




// Single Page Top Meta Display Control Section Panel Settings


$wp_customize->add_setting( 'yourseobook_single_page_top_meta_display_control',
    array(
        //'default' => $this->defaults['search_menu_icon'],
        'transport' => 'refresh',
        'sanitize_callback' => 'yourseobook_switch_sanitization'
    )
);

$wp_customize->add_control( new Yourseobook_Toggle_Switch_Custom_control( $wp_customize, 'yourseobook_single_page_top_meta_display_control',
    array(
    'label' => __( 'Single Page Top Meta Display', 'yourseobook' ),
    'section' => 'yourseobook_single_page_metas_section',
     'active_callback' => function() {
            return ( get_theme_mod( 'yourseobook_single_page_metas_settings_radio_control' ) === 'SinglePageMetaSettings' );
        },
    )
) );

$wp_customize->selective_refresh->add_partial( 'yourseobook_single_page_top_meta_display_control', array(
    'selector' => '#sp-top-metas', // You can also select a css class
) );


// Single Page Top Meta Display Control Section Panel Settings


$wp_customize->add_setting( 'yourseobook_single_page_bottom_meta_display_control',
    array(
        //'default' => $this->defaults['search_menu_icon'],
        'transport' => 'refresh',
        'sanitize_callback' => 'yourseobook_switch_sanitization'
    )
);

$wp_customize->add_control( new Yourseobook_Toggle_Switch_Custom_control( $wp_customize, 'yourseobook_single_page_bottom_meta_display_control',
    array(
    'label' => __( 'Single Page Bottom Meta Display', 'yourseobook' ),
    'section' => 'yourseobook_single_page_metas_section',
     'active_callback' => function() {
            return ( get_theme_mod( 'yourseobook_single_page_metas_settings_radio_control' ) === 'SinglePageMetaSettings' );
        },
    )
) );

$wp_customize->selective_refresh->add_partial( 'yourseobook_single_page_bottom_meta_display_control', array(
    'selector' => '#sp-bottom-metas', // You can also select a css class
) );