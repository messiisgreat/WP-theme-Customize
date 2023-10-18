<?php
/**
 * Yourseobook Customizer Custom Controls
 *
 */


	/**
	 * Custom Your SEO Book Control Base Class
	 *
	 * @author Dimitar Krumov Prime <https://seobookpro.com>
	 * @license http://www.gnu.org/licenses/gpl-2.0.html
	 * @link https://github.com/seobookpro
	 */
if ( class_exists( 'WP_Customize_Control' ) ) {


class Yourseobook_Table_Search_Custom_Control extends WP_Customize_Control {
    public $type = 'table_filter_search';

public function render_header_content() {
        $css_properties = array(
            'width' => __( 'Width', 'yourseobook' ),
            'height' => __( 'Height', 'yourseobook' ),
            'padding' => __( 'Padding', 'yourseobook' ),
            'margin' => __( 'Margin', 'yourseobook' ),
            // Add more CSS properties as needed
        );

        ?>
        <div class="row">
            <div class="header-nav-tab">
                <div class="column-title"><?php _e( 'HTML', 'yourseobook' ); ?></div>
                <div class="column-settings"><?php _e( 'CSS Settings', 'yourseobook' ); ?></div>
                <div class="column-help"><?php _e( 'FAQ', 'yourseobook' ); ?></div>
            </div>
            <?php foreach ( $css_properties as $property => $label ) : ?>
                <div class="header-nav-content">
                    <div class="column-title"><span class="dashicons dashicons-menu-alt3"></span></div>
                    <div class="column-settings">
                        <?php $this->render_css_control( $property, $label ); ?>
                    </div>
                    <div class="column-help"><span class="dashicons dashicons-editor-help"></span></div>
                </div>
            <?php endforeach; ?>
        </div>
        <?php
    }

    public function render_css_control( $property, $label ) {
        $setting = 'yourseobook_header_main_navigation_' . $property;
        $value = get_theme_mod( $setting );
        ?>
        <label>
            <span class="customize-control-title"><?php echo esc_html( $label ); ?></span>
            <input type="text" data-customize-setting-link="<?php echo esc_attr( $setting ); ?>" value="<?php echo esc_attr( $value ); ?>">
        </label>
        <?php
    }


}

}
