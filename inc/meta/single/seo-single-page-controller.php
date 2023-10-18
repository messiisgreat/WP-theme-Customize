<?php
/**
 *  Yourseobook General SEO Single Page Class General Control
 *
 */


	/**
	 * Custom Your SEO Book Control Base Class
	 *
	 * @author Dimitar Krumov Prime <https://seobookpro.com>
	 * @license http://www.gnu.org/licenses/gpl-2.0.html
	 * @link https://github.com/seobookpro
	 */
if ( class_exists( 'WP_Customize_Control' ) ) {


// Start The Single Page SEO General Settings Custom Class extend Controllers
/*
// Custom General SEO Single Page Class General Control
// @author Dimitar Krumov Prime <https://seobookpro.com>
// @license http://www.gnu.org/licenses/gpl-2.0.html
// @link https://github.com/seobookpro
*/

class Yourseobook_SEO_Single_Page_General_Control extends WP_Customize_Control {

public $type = 'tabbed_menu';

public function render_content()
{
?>

<h2 style="font-size: 16px;text-align: center;border-bottom: 2px solid #0c0fc4;padding: 0px 0px 10px 0px;margin: 0px 0px 20px 0px;box-shadow: 0px 10px 10px -10px #000;color: #0a0fb6;">Single Page General Settings</h2>

<?
}
}

// End  The Single Page SEO General Settings Custom Class extend Controllers


// Start The Single Page Breadcrumbs SEO General Settings Custom Class extend Controllers
/*
// Custom General SEO Single Page Breadcrumbs Class General Control
// @author Dimitar Krumov Prime <https://seobookpro.com>
// @license http://www.gnu.org/licenses/gpl-2.0.html
// @link https://github.com/seobookpro
*/

class Yourseobook_SEO_Single_Page_Breadcrumbs_General_Control extends WP_Customize_Control {

public $type = 'tabbed_menu';

public function render_content()
{
?>

<button class="accordion">Breadcrumbs Display Settings</button>
<div class="panel">
<p style="margin:10px 0px 20px 0px;">
General Settings for the Single Page Breadcrumbs. This is the general Breadcrumbs setting controls to display the breadcrumbs on single pages. It allows you to enable or disable the breadcrumbs functionality for your website. Usage: You can choose whether to show or hide breadcrumbs on your single pages based on your preference or design requirements.

</p>
<?php get_theme_mod ( 'yourseobook_single_page_breadcrumbs_help_video_display_control', __( '', 'yourseobook' ), __( '', 'yourseobook' ) ); ?>
<iframe style="margin:20px 0px 20px 0px;max-width:100%;height:auto;" width="320" height="180" src="https://www.youtube.com/embed/l4gHuEHAAjQ?controls=0" title="Breadcrumbs Display Settings" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
<a style="background:red;color:#fff;font-size:14px;padding:10px 20px 10px 20px;margin:10px 0px 10px 0px;" href="https://www.youtube.com/channel/UCfmRfp3nNfQIlQkjPlPDGBg?sub_confirmation=1" role="button" target="_blank" title="Breadcrumbs Display Settings | SEO Book Pro - Technical SEO and Custom Software">Watch More and Subscribe</a>
</div>

<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function(event) {
    event.preventDefault(); // Prevent default behavior
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.display === "flex" ) {
      panel.style.display = "none";
    } else {
      panel.style.display = "flex";
    }
  });
}

</script>
<style>
<style>

              @keyframes fadeIn {
                0% {
                  opacity: 0;
                  transform: translateX(-300px);
                }
                100% {
                  opacity: 1;
                  transform: translateX(0);
                }
              }

.accordion {
	background-color: #3c018a;
	color: #ffe102;
	cursor: pointer;
	padding: 5px;
	width: 100%;
	border: none;
	text-align: left;
	outline: none;
	font-size: 14px;
}


.active, .accordion:hover {
	background-color: #FF9800;
	color: #000;
}

.active, .accordion-sub:hover {
	background-color: #FF9800;
	color: #000;
}
.panel {
	padding: 0px;
	display: none;
	overflow: hidden;
	min-height: 50px;
	max-height: 100%;
	animation: fadeIn .5s cubic-bezier(0.4, 0, 1, 1) .3s;
	animation-fill-mode: both;
	font-size: 12px;
	font-weight: 500;
	color: #000;
	grid-gap: 5%;
	justify-content: space-between;
	flex-direction: row;
	flex-wrap: wrap;
	align-content: center;
	align-items: center;
}
</style>
<?
}
}

// End  The Single Page Breadcrumbs SEO General Settings Custom Class extend Controllers



}