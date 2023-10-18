<?php if ( get_theme_mod( 'yourseobook_single_page_bottom_meta_author_bio_display_control' ) ) : ?>
<div  id="author-name" class="sp-author-bio-row">



  <h4>Article by: <?php echo get_the_author_meta( 'display_name' ); ?></h4>
<small class="article-stats"><?php echo get_the_author_meta( 'display_name' );?> has Published <?php echo number_format_i18n( get_the_author_posts() ); ?> Articles</small>
<div class="mb-0">


    <img src="https://yourseobook.com/wp-content/uploads/2023/07/mandalorian-e1688424450569.jpg" alt="Member  <?php echo get_the_author_meta( 'display_name' );?>" title="<?php echo get_the_author_meta( 'display_name' );?> - <?php // echo esc_html_e( get_theme_mod( 'blankseo_general_brand_name_text_control' ) ); ?>" width="45" height="45" class="bd-placeholder-img rounded-circle" loading="lazy"/>


<?php echo wpautop( get_the_author_meta( 'description' ) );?>


</div>
<a href="#" title="Author Title" role="contentinfo" class="btn btn-danger">
      Member Profile
    </a>
<a href="#" title="Author Title" role="contentinfo" class="btn btn-danger">
      More Published Articles by <?php echo get_the_author_meta( 'display_name' );?>
    </a>
</div>
<?php endif; ?>