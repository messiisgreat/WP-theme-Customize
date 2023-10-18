 <?php if ( get_theme_mod( 'yourseobook_landing_seo_display_control' ) ) : ?>
<?php if ( get_theme_mod( 'yourseobook_landing_seo_display_control' ) ) {
// yourseobook_landing_seo_meta_title_add_brand_name_display_control
                    $meta_title = get_theme_mod( 'yourseobook_landing_seo_meta_title', 'Default Meta Title' );
                    $brand_name = get_theme_mod('yourseobook_main_brand_name_text_control', 'Default Brand Name' );
                    // $meta_description = get_theme_mod( 'yourseobook_landing_seo_meta_description', 'Default Meta Description' );
                    $meta_description = apply_filters( 'the_content', get_theme_mod('yourseobook_landing_seo_meta_description', 'Default Meta Description' ));
};
?>
<title>
<?php echo esc_html( $meta_title ); ?>
<?php if ( get_theme_mod( 'yourseobook_landing_seo_meta_title_add_brand_name_display_control' ) ) : ?> | <?php echo esc_html( $brand_name ); ?><?php endif; ?>
</title>
<meta name="description" content="<?php echo esc_attr( $meta_description ); ?><?php echo esc_html( $brand_name ); ?>">
<?php endif; ?>


