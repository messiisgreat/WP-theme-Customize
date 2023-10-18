 <?php if ( get_theme_mod( 'yourseobook_google_tag_manager_script_display_control' ) ) : ?>
<?php if ( get_theme_mod( 'yourseobook_google_tag_manager_api_script' ) ) {
// yourseobook_landing_seo_meta_title_add_brand_name_display_control
                    //$meta_title = get_theme_mod( 'yourseobook_landing_seo_meta_title', 'Default Meta Title' );
                    //$brand_name = get_theme_mod('yourseobook_main_brand_name_text_control', 'Default Brand Name' );
                    // $meta_description = get_theme_mod( 'yourseobook_landing_seo_meta_description', 'Default Meta Description' );
 $google_tag_manager_tag = apply_filters( 'the_content', get_theme_mod('yourseobook_google_tag_manager_script_code_text', ' Install your Google tag Manager' ));
};
if ( $google_tag_manager_tag) {
    $clean_google_tag_manager_code_id = wp_strip_all_tags( $google_tag_manager_tag );
    ?>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','<?php echo esc_attr( $clean_google_tag_manager_code_id ); ?>');</script>
<!-- End Google Tag Manager -->
  <?php
}
?>
<?php endif; ?>


 <?php if ( get_theme_mod( 'yourseobook_google_stack_scripts_display_control' ) ) : ?>
<?php if ( get_theme_mod( 'yourseobook_google_stack_scripts_enable_ga_api' ) ) {
// yourseobook_landing_seo_meta_title_add_brand_name_display_control
                    //$meta_title = get_theme_mod( 'yourseobook_landing_seo_meta_title', 'Default Meta Title' );
                    //$brand_name = get_theme_mod('yourseobook_main_brand_name_text_control', 'Default Brand Name' );
                    // $meta_description = get_theme_mod( 'yourseobook_landing_seo_meta_description', 'Default Meta Description' );
 $google_ga_4_tag = apply_filters( 'the_content', get_theme_mod('yourseobook_google_stack_scripts_code_text', ' Install your Google tag' ));
};
if ( $google_ga_4_tag) {
    $clean_ga4_id = wp_strip_all_tags( $google_ga_4_tag );
    ?>
<script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo esc_attr( $clean_ga4_id ); ?>"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', '<?php echo esc_attr( $clean_ga4_id ); ?>');
</script>
  <?php
}
?>
<?php endif; ?>

<!-- <meta name="google-site-verification" content="eHfXY6npFvbDzd9G8-LwrYpKHftXK20ExqaCsF5dMEk" /> -->
