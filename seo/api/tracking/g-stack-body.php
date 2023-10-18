 <?php if ( get_theme_mod( 'yourseobook_google_tag_manager_api_script_in_body' ) ) : ?>

<?php

 $google_tag_manager_tag = apply_filters( 'the_content', get_theme_mod('yourseobook_google_tag_manager_script_code_text', ' Install your Google tag Manager' ));
if ( $google_tag_manager_tag) {
    $clean_google_tag_manager_code_id = wp_strip_all_tags( $google_tag_manager_tag );
    ?>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=<?php echo esc_attr( $clean_google_tag_manager_code_id ); ?>"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
  <?php
}
?>
<?php endif; ?>