 <?php if ( get_theme_mod( 'yourseobook_single_page_featured_image_display_control' ) ) : ?>



<div id="featimg" class="sp-featured-image" role="img" type="image" aria-label="Featured Image">


<?php if ( has_post_thumbnail() ) {?>


<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID)); ?>

<figure class="figure">
<img src="<?php echo $url ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?> | <?php echo esc_html( $brand_name ); ?>" class="sp-feat-img" id="feat-img" loading="lazy"/>
<button class="featimgopen" data-bs-toggle="collapse" data-bs-target="#feat-img-collapse" aria-expanded="false">
 <span class="dashicons dashicons-media-interactive"></span>
<span class="dashicons dashicons-arrow-down-alt2"></span>
        </button>

<div class="container text-center collapse" id="feat-img-collapse">
  <div class="row">
    <div class="col">
  <figcaption class="image-description"><span class="dashicons dashicons-text" type="button" role="banner"></span> <?php the_title(); ?>.</figcaption>

    </div>
    <div class="col">
<div class="image-description"><span class="dashicons dashicons-media-document"></span> <?php the_title(); ?></div>
    </div>
    <div class="col">
     <div class="image-description"> <span class="dashicons dashicons-camera" type="button" role="banner"></span>SEO Book Pro</div>
    </div>
  </div>
</div>


</figure>

<?php ?>

<?php } else { ?>

<?php if ( get_theme_mod( 'yourseobook_single_page_featured_image_fallback_default_image_control_settings' ) ) : ?>

<img src="<?php echo esc_url( get_theme_mod( 'yourseobook_single_page_featured_image_fallback_default_image_control' ) ); ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?> | <?php echo esc_html( $brand_name ); ?>" class="figure-img img-fluid rounded" loading="lazy"/>

<?php endif; ?>

<?php } ?>

</div>
<style>
/* Start single_page_featured_image_fallback_default_image

*/
.featimgopen.collapsed {
  position: relative;
  bottom: 0px;
  left: 31px;
  right: 0;
  width: 20px;
  display: block;
  top: -30px;
  background: #903e8e;
  border: none;
  z-index: 1;
  color: #fff;
  float: left;
}
.sp-featured-image img {
  padding: 0px;
  margin: 20px 0px 20px 0px;
  width: 100%;
  height: 480px;
  max-height: 480px;
  object-fit: cover;
  box-shadow: 0px 20px 20px -20px #000;
  border-radius: 18px;
  z-index: 2;
  overflow: hidden;
  position: relative;
}
.sp-featured-image img:hover{
                    box-shadow: 0px 20px 20px -20px blue;
}
figcaption.figure-caption {
	position: relative;
	bottom: 10px;
	margin: 0px auto;
	width: max-content;
	font-size: 12px;
	color: #000;
}

.image-description,  {
  position: relative;
  bottom: 10px;
  margin: 0px auto;
  width: max-content;
  font-size: 16px;
  color: #3c3300;
  font-weight: 300;
}
.dashicons.dashicons-camera, .dashicons.dashicons-media-document, .dashicons.dashicons-text {
  font-size: 22px;
  display: flex;
  float: left;
  margin: 0px 10px;
}

.image-description {
        font-size: 12px;
        text-align: left;
        line-height: 1.55rem;
 font-weight: 400;
}
figure.figure {
  margin: 0px 0px 0px 0px;
  padding: 0px 0px 15px 0px;
}
div#featimg {
	width: 100%;
	display: flex;
	flex-direction: column;
	flex-wrap: wrap;
	border-bottom: 1px dotted #000;
	margin: 0px 0px 40px 0px;
	align-items: stretch;
	align-content: stretch;
	box-shadow: 0px 43px 33px -43px #000;
}

.iframe-container {
  position: relative;
  overflow: hidden;
  padding-top: 56.25%;
  margin: 40px 10px 40px 10px;
  max-width: 100%;
  width: auto;
}
iframe#iframe-in-c.iframe-in-the-content {
  position: absolute;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  width: 100%;
  height: 100%;
  border: none;
}
</style>
<?php endif; ?>