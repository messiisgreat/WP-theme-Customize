<?php if ( get_theme_mod( 'yourseobook_main_land_about_us_display_control' ) ) : ?>


<div class="container-fluid" id="aboutus" style="background-color: #cedc39;background-image: linear-gradient(to bottom right, #ffeb3b, #b32e05);color: #000;margin: auto 0px 120px 0px;box-shadow: 0px 50px 40px -20px #1b422e;padding:160px 20px 160px 20px;">
<div class="container col-xxl-8 px-4 py-5">
  <div class="row flex-lg-row-reverse align-items-center g-5 py-5 land-about">

 

      <div class="col-10 col-sm-8 col-lg-6">
        <img src="https://seobookpro.com/img/2023/03/Screenshot-2023-03-23-at-12.19.12-e1679778361359.png" class="d-block mx-lg-auto img-fluid" alt="SEO Book Pro" width="700" height="500" loading="lazy">
      </div>
<?php echo apply_filters( 'the_content', get_theme_mod('yourseobook_main_land_below_the_fold_content_tinymce_editor')); ?>


      <div class="col-lg-6">

        <h2 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">SEO Book Pro, a Powerful WordPress Custom Framework</h2>
        <p class="lead">With automatic internal linking and integrated Google Analytics and Search Console, you can easily track your website's performance and make data-driven decisions to improve your SEO strategy.</p>
       
 <div class="d-grid gap-2 d-md-flex justify-content-md-start">
          <button type="button" class="btn btn-primary btn-lg px-4 me-md-2">Learn More</button>
          <button type="button" class="btn btn-outline-secondary btn-lg px-4">Contact us</button>
<hr>
<small style="color: #c63306; font-size: 14px; border-bottom: 1px solid #c63306; margin: 0px 0px 10px 0px; text-decoration: none!important;">★ ★ ★ ★ ★ <strong>Rating: 5.0 · ‎45 votes</strong></small>
<hr>
       <?php if ( get_theme_mod( 'social_newtab' ) ) : ?>
       Follow us on: <?php echo yourseobook_get_social_media(); ?>
       <?php endif; ?>
 </div>

      </div>
  









    </div>
    </div>
    </div>

<?php endif; ?>