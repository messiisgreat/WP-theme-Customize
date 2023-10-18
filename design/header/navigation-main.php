
  <?php if ( get_theme_mod( 'yourseobook_header_main_navigation_display_control' ) ) : ?>
    <div class="container-fluid">
<nav id="main-nav" class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark master-header-nav-menu" aria-label="Offcanvas navbar large">
    <div class="container" id="thm">


<?php if ( get_theme_mod( 'yourseobook_header_main_navigation_brand_logo_display_control' ) ) : ?>

<a id="brandlogo" class="navbar-brand" href="<?php echo home_url(); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="bookmark" role="link" type="link" aria-label="logo">

<?php if ( get_theme_mod( 'yourseobook_header_main_navigation_brand_logo_image_display_control' ) ) : ?>
<img src="<?php echo esc_html_e( get_theme_mod( 'yourseobook_header_logo_default_image' ) ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"
title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" role="img" aria-label="Logo" class="brandlogoimage">
<?php endif; ?>
<?php // if ( get_theme_mod( 'yourseobook_header_main_navigation_brand_logo_text_display_control' ) ) : ?>
<!-- <span class="brandlogotextfield"><?php // echo esc_html_e( get_theme_mod( 'yourseobook_header_main_navigation_brand_logo_text_control' ) ); ?></span> -->
<?php // endif; ?>

</a>


<?php endif; ?>


      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#headerMenuMaster" aria-controls="headerMenuMaster" aria-label="Toggle navigation">
       <span class="dashicons dashicons-menu"></span>
      </button>

  <?php if ( get_theme_mod( 'yourseobook_header_nav_menu_display_control' ) ) : ?>

      <div class="offcanvas offcanvas-end text-bg-dark"  tabindex="-1" id="headerMenuMaster" aria-labelledby="headerMenuMasterLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="headerMenuMasterLabel">Offcanvas</h5>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body masterheadernavmenu">
          <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#" title="Home | <?php echo esc_html( $brand_name ); ?>">SEO</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://yourseobook.com/about/" title="About | <?php echo esc_html( $brand_name ); ?>">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://yourseobook.com/services/" title="Services | <?php echo esc_html( $brand_name ); ?>">Services</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="dropdown"  data-bs-toggle="dropdown" aria-expanded="false" title="Resourses | <?php echo esc_html( $brand_name ); ?>">
               Resourses
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="https://yourseobook.com/themes/" title="Themes | <?php echo esc_html( $brand_name ); ?>">Themes</a></li>
                <li><a class="dropdown-item" href="https://yourseobook.com/plugins/" title="Plugins | <?php echo esc_html( $brand_name ); ?>">Plugins</a></li>
                <li><a class="dropdown-item" href="https://yourseobook.com/tools/" title="Tools | <?php echo esc_html( $brand_name ); ?>">Tools</a></li>
                <li><a class="dropdown-item" href="https://yourseobook.com/seo-tools/" title="SEO Tools | <?php echo esc_html( $brand_name ); ?>">SEO Tools</a></li>
                <li><a class="dropdown-item" href="https://yourseobook.com/audit-tools/" title="Audit Tools | <?php echo esc_html( $brand_name ); ?>">Audit Tools</a></li>
                <li><a class="dropdown-item" href="https://yourseobook.com/custom-software/" title="Custom Software | <?php echo esc_html( $brand_name ); ?>">Custom Software</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="dropdown" data-bs-toggle="dropdown" aria-expanded="false" title="Custom Software | <?php echo esc_html( $brand_name ); ?>">
                Docs
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="https://yourseobook.com/support/" title="Questions & Answers 24/7 Customer Support | <?php echo esc_html( $brand_name ); ?>">Support</a></li>
                <li><a class="dropdown-item" href="https://yourseobook.com/intro/" title="Introductions | <?php echo esc_html( $brand_name ); ?>">Introductions</a></li>
                <li><a class="dropdown-item" href="https://yourseobook.com/docs/" title="Documentation | <?php echo esc_html( $brand_name ); ?>">Documentation</a></li>
                <li><a class="dropdown-item" href="https://yourseobook.com/docs/breadcrumbs-single-page/" title="Breadcrumbs on Single Page | <?php echo esc_html( $brand_name ); ?>">Breadcrumbs</a></li>


                <li><a class="dropdown-item" href="https://yourseobook.com/version-history/" title="Version History| <?php echo esc_html( $brand_name ); ?>">Version History</a></li>
                <li><a class="dropdown-item" href="https://yourseobook.com/beta-releases/" title="Beta Releases | <?php echo esc_html( $brand_name ); ?>">Beta Releases</a></li>
                <li><a class="dropdown-item" href="https://yourseobook.com/features-included/" title="List of Features Included | <?php echo esc_html( $brand_name ); ?>">List of Features Included</a></li>
                <li><a class="dropdown-item" href="https://yourseobook.com/features-included/custom-page-speed-features/" title="Google Basic Page Speed Featured Functions | <?php echo esc_html( $brand_name ); ?>">Basic Page Speed Settings</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="dropdown" data-bs-toggle="dropdown" aria-expanded="false">
                Theme Layouts
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="https://yourseobook.com/demos/">Demos and Templates</a></li>
                <li><a class="dropdown-item" href="https://yourseobook.com/landing-page-template/">Landing Page Template</a></li>
                <li><a class="dropdown-item" href="https://yourseobook.com/single-page-template/">Single Page Template</a></li>
                <li><a class="dropdown-item" href="https://yourseobook.com/single-post-template/">Single Post Template</a></li>
                <li><a class="dropdown-item" href="https://yourseobook.com/archives-template/">Archives Template</a></li>
                <li><a class="dropdown-item" href="https://yourseobook.com/category-archives-template/">Category Archives Template</a></li>
                <li><a class="dropdown-item" href="https://yourseobook.com/single-category-template/">Single Category Template</a></li>
                                    <li><a class="dropdown-item" href="https://yourseobook.com/tags-archives-template/">Tags Archives Template</a></li>
                <li><a class="dropdown-item" href="https://yourseobook.com/single-tag-template/">Single Tag Template</a></li>
                <li><a class="dropdown-item" href="https://yourseobook.com/custom-pages-templates/">Custom Page Templates</a></li>
                <li><a class="dropdown-item" href="https://yourseobook.com/author/demo/">Author Page Template</a></li>
                <li><a class="dropdown-item" href="https://yourseobook.com/page-not-found-template/">404 Page Not Found</a></li>
                <li><a class="dropdown-item" href="https://yourseobook.com/search-results-page-template/">Search Results Page Template</a></li>
                <li><a class="dropdown-item" href="https://yourseobook.com/features-included/your-seo-book-custom-post-types/">Custom Post Types(10)</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="dropdown" data-bs-toggle="dropdown" aria-expanded="false">
                Follow us
              </a>
              <ul class="dropdown-menu">
                <li><a class="follow-us-on-linkedin" class="dropdown-item" href="https://www.linkedin.com/showcase/seobookpro/" target="_blank" rel="author" role="link" title="Follow our LinkedIn Offical Showcase Page"><span style="font-size:18px;" class="dashicons dashicons-linkedin" name="Follow our LinkedIn Offical Showcase Page"></span></a></li>
                <li><a class="follow-us-on-twitter" class="dropdown-item" href="https://www.twitter.com/@seobookpro" target="_blank" rel="author" role="link" title="Follow us on our Twitter Offical Page"><span style="font-size:18px;" class="dashicons dashicons-twitter" name="Follow us on our Twitter Offical Page"></span></a></li>
          
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://yourseobook.com/download/">Download</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="https://yourseobook.com/docs/codex/" role="dropdown" data-bs-toggle="dropdown" aria-expanded="false" aria-haspopup="true">
                <span class="dashicons dashicons-admin-customizer" style="font-size:19px;"></span> Codex
              </a>
              <ul class="dropdown-menu">
<li><a class="dropdown-item" href="https://yourseobook.com/docs/codex/" title="Pro Version Settings Panel" rel="bookmark" role="link" type="link"><span class="dashicons dashicons-admin-customizer" style="font-size:19px;"></span> Pro Version Settings Panel</a></li>
<li><a class="dropdown-item" href="https://yourseobook.com/docs/codex/general-buttons-settings/" title="General Buttons Settings Panel" rel="bookmark" role="link" type="link"><span class="dashicons dashicons-admin-customizer" style="font-size:19px;"></span> General Buttons Settings</a></li>
<li><a class="dropdown-item" href="https://yourseobook.com/docs/codex/header-navigation-menu/" title="Header Navigation Menu Settings Panel" rel="bookmark" role="link" type="link"> <span class="dashicons dashicons-admin-customizer" style="font-size:19px;"></span> Header Navigation Menu</a></li>
<li><a class="dropdown-item" href="https://yourseobook.com/docs/codex/landing-page-settings/" title="Landing Page Settings Panel" rel="bookmark" role="link" type="link"> <span class="dashicons dashicons-admin-customizer" style="font-size:19px;"></span> Landing Page Settings</a></li>
<li><a class="dropdown-item" href="https://yourseobook.com/docs/codex/single-page-panel/" title="Single Page Settings Panel" rel="bookmark" role="link" type="link"><span class="dashicons dashicons-admin-customizer" style="font-size:19px;"></span> Single Page Panel</a></li>
<li><a class="dropdown-item" href="https://yourseobook.com/docs/codex/below-the-fold-styles-settings/" title="Below the Fold Styles Settings Panel" rel="bookmark" role="link" type="link"><span class="dashicons dashicons-admin-customizer" style="font-size:19px;"></span> Below the Fold Styles Settings</a></li>
<li><a class="dropdown-item" href="https://yourseobook.com/docs/codex/footer-navigation-menu/" title="Footer Navigation Menu Settings Panel" rel="bookmark" role="link" type="link"><span class="dashicons dashicons-admin-customizer" style="font-size:19px;"></span> Footer Navigation Menu</a></li>
<li><a class="dropdown-item" href="https://yourseobook.com/docs/codex/brand-website-settings/" title="Brand Website Settings Panel" rel="bookmark" role="link" type="link"><span class="dashicons dashicons-admin-customizer" style="font-size:19px;"></span> Brand Website Settings</a></li>
<li><a class="dropdown-item" href="https://yourseobook.com/docs/codex/landing-seo-settings/" title="Landing SEO Settings Panel" rel="bookmark" role="link" type="link"><span class="dashicons dashicons-admin-customizer" style="font-size:19px;"></span> Landing SEO Settings</a></li>
<li><a class="dropdown-item" href="https://yourseobook.com/docs/codex/google-stack-scripts-panel/" title="Google Stack Scripts Settings Panel" rel="bookmark" role="link" type="link"><span class="dashicons dashicons-admin-customizer" style="font-size:19px;"></span> Google Stack Scripts Panel</a></li>
<li><a class="dropdown-item" href="https://yourseobook.com/docs/codex/header-navigation-menu/" title="Header Nav Menu Settings Panel" rel="bookmark" role="link" type="link"><span class="dashicons dashicons-admin-customizer" style="font-size:19px;"></span> Header Nav Menu Section</a></li>
<li><a class="dropdown-item" href="https://yourseobook.com/docs/codex/main-footer-sections-settings/" title="Main Footer Sections Settings Panel" rel="bookmark" role="link" type="link"><span class="dashicons dashicons-admin-customizer" style="font-size:19px;"></span> Main Footer Sections Settings</a></li>
<li><a class="dropdown-item" href="https://yourseobook.com/docs/codex/general-seo-panel/" title="General SEO Settings Panel" rel="bookmark" role="link" type="link"><span class="dashicons dashicons-admin-customizer" style="font-size:19px;"></span> General SEO Panel</a></li>
<li><a class="dropdown-item" href="https://yourseobook.com/docs/codex/advanced-custom-post-types/" title="Advanced Custom Post Types Settings Panel" rel="bookmark" role="link" type="link"><span class="dashicons dashicons-admin-customizer" style="font-size:19px;"></span> Advanced Custom Post Types</a></li>
<li><a class="dropdown-item" href="https://yourseobook.com/docs/codex/json-ld-schemas-rich-snippets/" title="JSON-LD Schemas | Rich Snippets Settings Panel" rel="bookmark" role="link" type="link"><span class="dashicons dashicons-admin-customizer" style="font-size:19px;"></span> JSON-LD Schemas | Rich Snippets</a></li>
<li><a class="dropdown-item" href="https://yourseobook.com/docs/codex/site-identity/" title="Site Identity Settings Panel" rel="bookmark" role="link" type="link"><span class="dashicons dashicons-admin-customizer" style="font-size:19px;"></span> Site Identity</a></li>
<li><a class="dropdown-item" href="https://yourseobook.com/docs/codex/menus/" title="Menus Settings Panel" rel="bookmark" role="link" type="link"><span class="dashicons dashicons-admin-customizer" style="font-size:19px;"></span> Menus</a></li>
<li><a class="dropdown-item" href="https://yourseobook.com/docs/codex/widgets/" title="Widgets Settings" rel="bookmark" role="link" type="link"><span class="dashicons dashicons-admin-customizer" style="font-size:19px;"></span> Widgets</a></li>
<li><a class="dropdown-item" href="https://yourseobook.com/docs/codex/homepage-settings/" title="Pro Version Settings Panel" rel="bookmark" role="link" type="link"><span class="dashicons dashicons-admin-customizer" style="font-size:19px;"></span> Homepage Settings</a></li>
<li><a class="dropdown-item" href="https://yourseobook.com/docs/codex/additional-css/" title="Additional CSS" rel="bookmark" role="link" type="link"><span class="dashicons dashicons-admin-customizer" style="font-size:19px;"></span> Additional CSS</a></li>
              </ul>
            </li>
          </ul>
 <?php endif; ?>



</div>

<?php endif; ?>




        </div>

<?php if ( get_theme_mod( 'yourseobook_header_main_navigation_master_menu_search_bar_master_display_control' ) ) : ?>

<div id="search-bar-master" class="d-flex">

<?php if ( get_theme_mod( 'yourseobook_header_main_navigation_master_menu_search_bar_google_search_engine_display_control' ) ) : ?>
<div id="hnm-sb" class="header-nav-menu-search-box search-form">
<script async src="https://cse.google.com/cse.js?cx=b4308747ac2994fa5"></script>

<div class="gcse-search"></div>
</div>
<?php endif; ?>

<?php if ( get_theme_mod( 'yourseobook_header_main_navigation_master_menu_search_bar_display_control' ) ) : ?>
<div id="hnm-sb" class="header-menu-custom-search-box">
<form role="search" id="header-nav-search-box" class="search-box-element">
 <input id="header-nav-search-box" type="text" name="search" class="header-nav-menu-search-box search-form"  role="search" placeholder=" 🔎 Search here.." aria-label="Search">
</form>
</div>
</div>
<a class="dropdown-item" href="https://www.paypal.com/donate/?hosted_button_id=RPNZP62XF6NTN" title="Empower support for ongoing theme updates / features. Contribute to the continuous improvement and maintenance of SEO Book Pro" rel="paypal" role="button" type="link">Donate</a>

<?php endif; ?>


<?php if ( get_theme_mod( 'yourseobook_header_cta_button_display_control' ) ) : ?>
<?php if ( get_theme_mod( 'yourseobook_general_sitewide_brand_phone_number_control' ) ) : ?>


<a href="tel:<?php echo esc_html_e( get_theme_mod( 'yourseobook_general_sitewide_brand_phone_number_text_control' ) ); ?>"
class="header-cta-button" id="header-menu-phone" role="button" type="link" title="Call <?php echo esc_html_e( get_theme_mod( 'yourseobook_general_sitewide_brand_phone_number_text_control' ) ); ?> <?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" target="_blank" rel="bookmark" aria-label="Call Now">
Call Now
 </a>



 <?php endif; ?>
 <?php endif; ?>
<?php if ( get_theme_mod( 'yourseobook_header_cta_button_cart_display_control' ) ) : ?>
<div id="header-cart">
<span class="badge bg-primary rounded-pill">3</span>
<span class="dashicons dashicons-cart"></span> <span>$6.34</span>
</div>
 <?php endif; ?>
      </div>


  </nav>
<?php if ( get_theme_mod( 'yourseobook_header_landing_jump_links_display_control' ) ) : ?>

  <?php include (TEMPLATEPATH . '/design/landing/jump-links.php');?>

 <?php endif; ?>
</div>

    <?php endif; ?>


<!-- Pro Version Settings Panel
General Buttons Settings
Header Navigation Menu
Landing Page Settings
Single Page Panel
Below the Fold Styles Settings
Footer Navigation Menu
Brand Website Settings
Landing SEO Settings
Google Stack Scripts Panel
Header Nav Menu Section
Main Footer Sections Settings
General SEO Panel
Advanced Custom Post Types
JSON-LD Schemas | Rich Snippets
Site Identity
Menus
Widgets
Homepage Settings
Additional CSS

-->