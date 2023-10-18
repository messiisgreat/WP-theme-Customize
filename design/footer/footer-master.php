<div class="container-fluid footer-copy">
<div class="container">
  <footer class="py-5">
    <div class="row">

<?php if ( get_theme_mod( 'yourseobook_footer_navigation_fws1_display_control' ) ) : ?>
      <div class="col col-md-3 col-sm-6">
        <div class="footer-widget-title">Widget Section One</div>
        <ul class="nav flex-column fws1">
          <li class="nav-item mb-2"><a href="#" class="footer-wiget-links">Home</a></li>
          <li class="nav-item mb-2"><a href="#" class="footer-wiget-links">Features</a></li>
          <li class="nav-item mb-2"><a href="#" class="footer-wiget-links">Pricing</a></li>
          <li class="nav-item mb-2"><a href="#" class="footer-wiget-links">FAQs</a></li>
          <li class="nav-item mb-2"><a href="#" class="footer-wiget-links">About</a></li>
        </ul>
      </div>
<?php endif; ?>


<?php if ( get_theme_mod( 'yourseobook_footer_navigation_fws2_display_control' ) ) : ?>
      <div class="col col-md-3 col-sm-6 fws2">
        <div class="footer-widget-title">Widget Section Two</div>
        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a href="#" class="footer-wiget-links">Home</a></li>
          <li class="nav-item mb-2"><a href="#" class="footer-wiget-links">Features</a></li>
          <li class="nav-item mb-2"><a href="#" class="footer-wiget-links">Pricing</a></li>
          <li class="nav-item mb-2"><a href="#" class="footer-wiget-links">FAQs</a></li>
          <li class="nav-item mb-2"><a href="#" class="footer-wiget-links">About</a></li>
        </ul>
      </div>
<?php endif; ?>


<?php if ( get_theme_mod( 'yourseobook_footer_navigation_fws3_display_control' ) ) : ?>
      <div class="col col-md-3 col-sm-6 fws3">
        <div class="footer-widget-title">Widget Section Three</div>
        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a href="#" class="footer-wiget-links">Home</a></li>
          <li class="nav-item mb-2"><a href="#" class="footer-wiget-links">Features</a></li>
          <li class="nav-item mb-2"><a href="#" class="footer-wiget-links">Pricing</a></li>
          <li class="nav-item mb-2"><a href="#" class="footer-wiget-links">FAQs</a></li>
          <li class="nav-item mb-2"><a href="#" class="footer-wiget-links">About</a></li>
        </ul>
      </div>
<?php endif; ?>


<?php if ( get_theme_mod( 'yourseobook_footer_navigation_fws4_display_control' ) ) : ?>
      <div class="col col-md-3 col-sm-6 fws4">
        <div class="footer-widget-title">Widget Section Four</div>
        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a href="#" class="footer-wiget-links">Home</a></li>
          <li class="nav-item mb-2"><a href="#" class="footer-wiget-links">Features</a></li>
          <li class="nav-item mb-2"><a href="#" class="footer-wiget-links">Pricing</a></li>
          <li class="nav-item mb-2"><a href="#" class="footer-wiget-links">FAQs</a></li>
          <li class="nav-item mb-2"><a href="#" class="footer-wiget-links">About</a></li>
        </ul>
      </div>
<?php endif; ?>

<?php if ( get_theme_mod( 'yourseobook_footer_navigation_fws5_display_control' ) ) : ?>
      <div class="col col-md-3 col-sm-6 fws5">
        <form>
          <div class="footer-widget-title">Subscribe to our newsletter</div>
          <p>Monthly digest of what's new and exciting from us.</p>
          <div class="d-flex flex-column flex-sm-row w-100 gap-2">
            <label for="newsletter1" class="visually-hidden">Email address</label>
            <input id="newsletter1" type="text" class="form-control" placeholder="Email address">
            <button class="btn btn-primary" type="button">Subscribe</button>
          </div>
        </form>
      </div>
<?php endif; ?>

    </div>

<?php if ( get_theme_mod( 'yourseobook_footer_copy_info_navigation_menus_display_control' ) ) : ?>

    <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top fcms">
<!-- yourseobook_brand_display_control -->

<?php if ( get_theme_mod( 'yourseobook_brand_display_control' ) ) : ?>
<div class="main-brand">©
<?php echo esc_html_e( date('Y') ); ?>
<a href="<?php echo home_url(); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" role="link" type="link" rel="bookmark" class="footer-<?php echo esc_html_e( get_theme_mod( 'yourseobook_main_brand_name_text_control' ) ); ?>" id="fm-<?php echo esc_html_e( get_theme_mod( 'yourseobook_main_brand_name_text_control' ) ); ?>">
<span class="footer-brand-text"><?php echo esc_html_e( get_theme_mod( 'yourseobook_main_brand_name_text_control' ) ); ?></span>
</a>. All rights reserved.</div>
   <style>
      .libutton {
        display: flex;
        flex-direction: column;
        justify-content: center;
        padding: 7px;
        text-align: center;
        outline: none;
        text-decoration: none !important;
        color: #ffffff !important;
        width: 200px;
        height: 32px;
        border-radius: 16px;
        background-color: #0A66C2;
        font-family: "SF Pro Text", Helvetica, sans-serif;
      }
    </style>
<a class="libutton" href="https://www.linkedin.com/build-relation/newsletter-follow?entityUrn=6937108809131687936" target="_blank">Subscribe on LinkedIn</a>
<a class="libutton" href="https://www.linkedin.com/pulse/seo-book-pro-advanced-custom-wordpress-theme-from-scratch-krumov" target="_blank">Latest 3d Edition</a>

<?php endif; ?>
    <!--   <div class="footer-social-media-links">
     

<div class="social">
<?php // echo yourseobook_get_social_media(); ?>
</div>
 <?php // wp_nav_menu( array( 'theme_location'    => 'footer_social_media_links_menu') ); ?>

      </div> -->

    </div>
<?php endif; ?>

<!-- Start Footer Boottom Brand Navigation Custom Menu -->

<?php if ( get_theme_mod( 'yourseobook_footer_bottom_brand_navigation_menus_display_control' ) ) : ?>



<div id="fbtms">
<?php
wp_nav_menu(array(
  'theme_location' => 'footer_copy_info_menu', // Use the location of the menu you want to display
  'menu_id' => 'ffmyNavbar', // Replace with the custom ID assigned to the menu
  'menu_class' => 'ffnavbar', // Add your custom class
));
?>
  <a href="javascript:void(0);" style="font-size:15px;" class="fficon" onclick="ffmyFunction()">&#9776;</a>
</div>

<script>
function ffmyFunction() {
  var x = document.getElementById("ffmyNavbar");
  if (x.className === "ffnavbar") {
    x.className += "ffresponsive";
  } else {
    x.className = "ffnavbar";
  }
}
</script>


<?php endif; ?>
<!-- End Footer Boottom Brand Navigation Custom Menu -->
      <div class="footer-social-media-links">



<div class="social">
<?php echo yourseobook_get_social_media(); ?>
</div>
 <?php // wp_nav_menu( array( 'theme_location'    => 'footer_social_media_links_menu') ); ?>

      </div>
</footer>
</div>
</div>