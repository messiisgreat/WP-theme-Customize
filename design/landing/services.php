<?php if ( get_theme_mod( 'yourseobook_main_land_services_display_control' ) ) : ?>


<div id="landlayout" class="container-fluid" style="background:#FFF;">









<style>
                    .service-content-text{
                    font-size: <?php echo get_theme_mod( 'yourseobook_landing_services_repeater_services_content_text_font_size' ); ?>px;
	white-space: normal;
	font-weight: 300;
	margin: 15px 0px 15px 0px;
	padding: 15px 0px 15px 0px;

                    height: 170px;
                    max-height: 100%;
                    min-height: auto;

                    }
.main-service-heading-title{
animation: fadeUp 1s ease-in-out 3.1s;
  animation-fill-mode: none;
margin:40px 0px 60px 0px;padding:30px 0px 30px 0px;font-size:58px;font-weight:300;border-bottom:1px dotted #ccc;
}
.service-heading-title {
  font-size: <?php echo get_theme_mod( 'yourseobook_landing_services_repeater_services_heading_title_font_size' ); ?>px;
  margin: 0px 0px 20px 0px;
  padding: 10px 0px 10px 0px;
  border-bottom: 4px solid #000;
  box-shadow: 0px 30px 15px -25px #000;
  font-weight: 500;
  line-height: 1.75rem;
  white-space: normal;
  word-wrap: break-word;
  word-break: break-word;
  letter-spacing: 0px;
  min-height: 60px;
min-width: 100%;


}
.service-box {
        display: flex;
        flex-direction: column;
        flex-wrap: wrap;
        align-content: center;
        justify-content: center;
        align-items: center;

        min-width: auto;
        max-width: 31%;        margin: 0px 11px 20px 10px;
        padding: 15px;
        border: 1px solid #ccc;
}

                  .services-lm-button:hover {
                    	background: #560c82;
                    	color: #ffffff;
                    	border: 4px ridge #23161b;
                  }
                  .services-lm-button {
                    	display: flex;
                    	padding: 5px 15px;
                    	background: #000;
                    	color: #fff;
                    	 font-size: <?php echo get_theme_mod( 'yourseobook_landing_services_repeater_services_content_read_more_title_font_size' ); ?>px;
                    	font-weight: 500;
                    	text-decoration: none;
                    	text-transform: uppercase;
                    	width: max-content;
                    	flex-direction: row;
                    	flex-wrap: wrap;
                    	justify-content: center;
                    	align-items: center;
                    	align-content: center;
                    	margin: 5px auto;
                    	border-radius: 50px;
                    	border: 4px ridge #ff0070;
                    }

.social-icons .youtube a {
	color: #ff0000; /* YouTube brand color */
}

.social-icons .behance a {
	color: #053eff; /* Behance brand color */
}

.social-icons .twitter a {
	color: #1da1f2; /* Twitter brand color */
}

.social-icons .linkedin a {
	color: #0077b5; /* LinkedIn brand color */
}

.social-icons .flickr a {
	color: #ff0084; /* Flickr brand color */
}

.social-icons .soundcloud a {
	color: #ff7700; /* SoundCloud brand color */
}

.social-icons .instagram a {
	color: #e4405f; /* Instagram brand color */
}

.social-icons .pinterest a {
	color: #bd081c; /* Pinterest brand color */
}

.social-icons .github a {
	color: #333333; /* GitHub brand color */
}

.social-icons .spotify a {
	color: #1ed760; /* Spotify brand color */
}

.social-icons .twitch a {
	color: #9146ff; /* Twitch brand color */
}

.social-icons .whatsapp a {
	color: #25d366; /* WhatsApp brand color */
}
.social-icons {
	display: flex;
	align-items: center;
}
.social-icons ul{
list-style: none;
padding: 0px;
margin: 0px;
min-width: 100%;
}

.social-icons li {
	margin: 0px;
}
ul.social-icons li a{
color: #fff !important;
}
.social-icons a {
	display: flex;
	align-items: center;
	justify-content: center;
	width: 40px;
	height: 40px;
                    text-decoration: none;
padding: 8px;
}

.social-icons i {
	font-size: 20px;
}

</style>




<!-- yourseobook_landing_services_titles_settings -->
<!-- yourseobook_landing_services_text_settings -->
<div class="container col-xxl-12">
<div class="album py-5" style="margin:90px 0px 90px 0px;padding:40px 0px 40px 0px;">

<h2 class="main-service-heading-title">Our Services/Areas of Practice</h2>

<!-- <div class="social">
<?php // echo yourseobook_get_social_media(); ?>
</div> -->
<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">




<?php
$column_ids = array(
    'yourseobook_landing_services_repeater_1',
    'yourseobook_landing_services_repeater_2',
    'yourseobook_landing_services_repeater_3',
    'yourseobook_landing_services_repeater_4',
    'yourseobook_landing_services_repeater_5',
    'yourseobook_landing_services_repeater_6',
    'yourseobook_landing_services_repeater_7',
    'yourseobook_landing_services_repeater_8',
    'yourseobook_landing_services_repeater_9',
);



foreach ($column_ids as $column_id) {
    $column_page_id = get_theme_mod($column_id);

    if (!empty($column_page_id)) {
                  $column_page = get_post($column_page_id);
                  $column_title = get_the_title($column_page_id);
                  $column_excerpt = $column_page->post_excerpt;
                  $column_content = $column_page->post_content;
                  $column_permalink = get_permalink($column_page_id);
                  $ht = get_theme_mod('yourseobook_landing_services_repeater_services_heading_title');
                  $rmtlal = get_theme_mod('yourseobook_landing_services_repeater_services_content_read_more_title');
// services exerpt lenght number
                  $seln = get_theme_mod('yourseobook_landing_services_repeater_exerpt_lenght_number');
        // If excerpt is empty, use content as the excerpt
        if (empty($column_excerpt)) {
            $column_excerpt = $column_content;
        }

        // Trim the excerpt to a desired length
        $column_excerpt = wp_trim_words($column_excerpt, $seln, '...');

        ?>
                    <div id="box-<?php echo $column_page_id; ?>" class="col-md-6 col-sm-4 col-lg-4 service-box">
                    <<?php echo $ht; ?> id="allservicesheadingtype" class="service-heading-title">
                    <span id="allservicesheadingtitle"><?php echo $column_title; ?></span>
                    </<?php echo $ht; ?>>
                
                    <p id="allservicescontent" class="service-content-text">
                    <?php echo $column_excerpt; ?>
                    </p>

                    <a id="allservicesmorebutton" href="<?php echo $column_permalink; ?>" title="<?php echo $column_title; ?>" rel="bookmark" role="button" type="button" aria-label="<?php echo $column_title; ?>" class="services-lm-button">
                    <?php echo $rmtlal; ?>
                    </a>
                    
</div>
        <?php
    }
}
?>






    </div>
<div id="allservices" class="d-grid gap-1 col-3 mx-auto mt-5 mb-5">

<a class="w-30 btn btn-lg btn-primary me-md-5 left" href="<?php echo get_permalink( get_theme_mod( 'yourseobook_landing_services_repeater_all_service' ) ); ?>" title="View All Services | <?php echo esc_html_e( get_theme_mod( 'yourseobook_main_brand_name_text_control' ) ); ?>" role="button" type="link" rel="bookmark" aria-label="View All Services"><span id="allservicestext">
<?php echo esc_html_e( get_theme_mod( 'yourseobook_landing_services_repeater_all_service_title_text_settings' ) ); ?></span>
</a>

</div>

    </div>


    </div>

<!-- yourseobook_landing_services_repeater_all_service
yourseobook_landing_services_repeater_all_service
-->


</div>


<!--
Use the glob() function in PHP to retrieve all the PHP files from a specific folder. glob() returns an array of file names or paths that match a specified pattern.

Here's an example of how you can use glob() to include all PHP files from a folder without manually specifying each file in the services.php file:

In the code above, $folder_path represents the path to the folder containing the PHP files. glob($folder_path . '*.php') retrieves all the PHP files from that folder, and then the foreach loop includes each file in the services.php file.

By using this code, whenever you add a new PHP file to the specified folder, it will automatically be included without modifying the services.php file.


-->
<?php
$selected_lssr_layout = get_theme_mod('yourseobook_landing_services_prebuild_layouts_settings_controller', 'landing-services-columns-with-icons');

if ($selected_lssr_layout) {
    $layout_lssr_template = 'api/layouts/landing/services/' . $selected_lssr_layout;
    get_template_part($layout_lssr_template);
}
// /wp-content/themes/yourseobook/api/layouts/landing/above-the-fold/landing-centered-hero.php
?>

<?php

// $folder_path = TEMPLATEPATH . '/api/layouts/landing/services/';
// $php_files = glob($folder_path . '*.php');

// foreach ($php_files as $php_file) {
   // include $php_file;
// }
// ?>
 <?php include (TEMPLATEPATH . '/design/engage/forms/stepped-form.php');?>


<!--
Prebuild Layout Services
api/layouts/landing/services/landing-services-columns-with-icons.php
api/layouts/landing/services/landing-services-hanging-icons.php
api/layouts/landing/services/landing-services-custom-cards.php
api/layouts/landing/services/landing-services-icons-grid.php
api/layouts/landing/services/landing-services-features-with-title.php

-->

<?php endif; ?>