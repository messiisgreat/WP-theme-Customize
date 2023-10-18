<!-- Breadcrumbs Settings Theme Mod -->
  <?php if ( get_theme_mod( 'yourseobook_single_page_breadcrumbs_display_control' ) ) : ?>

<!--
<div class="container my-5">
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb breadcrumb-custom overflow-hidden text-center bg-body-tertiary border rounded-3">
      <li class="breadcrumb-item">
        <a class="link-body-emphasis fw-semibold text-decoration-none" href="#">
          <svg class="bi" width="16" height="16"><use xlink:href="#house-door-fill"></use></svg>
          Home
        </a>
      </li>
      <li class="breadcrumb-item">
        <a class="link-body-emphasis fw-semibold text-decoration-none" href="#">Library</a>
      </li>
      <li class="breadcrumb-item active" aria-current="page">
        Data
      </li>
    </ol>
  </nav>
</div>
-->

<!--
<nav aria-label="breadcrumb" id="breadcrumbs-display" class="breadcrumb">
    <ol class="breadcrumb breadcrumb-chevron p-3 bg-body-tertiary rounded-3">

      <li class="breadcrumb-item">
        <a class="link-body-emphasis" href="#">
          <svg class="bi" width="16" height="16"><use xlink:href="#house-door-fill"></use></svg>
          <span class="visually-hidden">Home</span>
        </a>
      </li>
      <li class="breadcrumb-item">
        <a class="link-body-emphasis fw-semibold text-decoration-none" href="#">Parent Page</a>
      </li>
      <li class="breadcrumb-item">
        <a class="link-body-emphasis fw-semibold text-decoration-none" href="#">Children Page</a>
      </li>
      <li class="breadcrumb-item">
        <a class="link-body-emphasis fw-semibold text-decoration-none" href="#">Sub Children Page</a>
      </li>
      <li class="breadcrumb-item active" aria-current="page">
     Breadcrumb Page Title
      </li>
    </ol>
  </nav>
-->

<nav id="breadcrumbs-display" aria-label="Breadcrumb" class="breadcrumb">
    <ul>
        <li><a href="#" title="Home | <?php echo esc_html( $brand_name ); ?>" type="link" rel="bookmark">Home</a></li>
        <li><a href="#" title="Parent Page | <?php echo esc_html( $brand_name ); ?>" type="link" rel="bookmark">Parent Page</a></li>
        <li><a href="#" title="Children Page | <?php echo esc_html( $brand_name ); ?>" type="link" rel="bookmark">Children Page</a></li>
        <li><a href="#" title="Sub Children Page | <?php echo esc_html( $brand_name ); ?>" type="link" rel="bookmark">Sub Children Page</a></li>
        <li><span aria-current="page">Breadcrumb Page Title</span></li>
    </ul>
</nav>
    

<!-- Breadcrumbs Settings Theme Mod -->
<style>
/* Start Breadcrumbs Navigation Styles
yourseobook_single_page_breadcrumbs_links_text_color_settings
yourseobook_single_page_breadcrumbs_links_text_color_settings
*/
.breadcrumb {
    padding: 5px 0px 20px 0px;
    border-bottom: 1px solid #000;
    margin: 0px 0px 20px 0px;
    font-size: <?php echo get_theme_mod( 'yourseobook_single_page_breadcrumbs_font_size_setting' ); ?>px !important;
    color: <?php echo get_theme_mod( 'yourseobook_single_page_breadcrumbs_text_color_settings' ); ?>;
    font-weight: <?php echo get_theme_mod( 'yourseobook_single_page_breadcrumbs_font_weight_setting' ); ?>;

}
.breadcrumb ul li a {
    font-size: <?php echo get_theme_mod( 'yourseobook_single_page_breadcrumbs_font_size_setting' ); ?>px !important;
    text-decoration: none;
    color: <?php echo get_theme_mod( 'yourseobook_single_page_breadcrumbs_links_text_color_settings' ); ?>;
    font-weight: <?php echo get_theme_mod( 'yourseobook_single_page_breadcrumbs_font_weight_setting' ); ?>;
}
.breadcrumb ul {
    display: flex;
    flex-wrap: wrap;
    list-style: none;
    margin: 0;
    padding: 0;
}
.breadcrumb li:not(:last-child)::after {
    display: inline-block;
    margin: 0 .25rem;
    content: ">";
}
/* End Breadcrumbs Navigation Styles */
h1.single-page-header-title {
text-align: <?php echo get_theme_mod( 'yourseobook_single_page_heading_page_title_custom_text_position' ); ?>;
font-size: <?php echo get_theme_mod( 'yourseobook_single_page_heading_title_font_size_setting' ); ?>px;
font-weight: <?php echo get_theme_mod( 'yourseobook_single_page_heading_title_font_weight' ); ?>;
color: <?php echo get_theme_mod( 'yourseobook_header_single_page_text_color_settings' ); ?>;
}

</style>
<?php endif; ?>