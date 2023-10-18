<?php
/**
 *  Yourseobook Header Navigation Menu Search Bar Custom Class Control
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



class Yourseobook_Header_Navigation_Menu_Search_Bar_Control extends WP_Customize_Control {
public $type = 'tabbed_menu';

public function render_content()
{

/*

    $header_navigation_menu_search_bar_background_color = get_theme_mod( 'yourseobook_header_navigation_menu_search_bar_background_color' );
    $header_navigation_menu_search_bar_font_size = get_theme_mod( 'yourseobook_header_navigation_menu_search_bar_font_size' );
    $header_navigation_menu_search_bar_width = get_theme_mod( 'yourseobook_header_navigation_menu_search_bar_width' );
    $header_navigation_menu_search_bar_width = get_theme_mod( 'yourseobook_header_navigation_menu_search_bar_height; );
    $header_navigation_menu_search_bar_padding = get_theme_mod( 'yourseobook_header_navigation_menu_search_bar_padding' );
    $header_navigation_menu_search_bar_margin = get_theme_mod( 'yourseobook_header_navigation_menu_search_bar_margin' );
    $header_navigation_menu_search_bar_border_radius = get_theme_mod( 'yourseobook_header_navigation_menu_search_bar_border_radius' );
    $header_navigation_menu_search_bar_border_size = get_theme_mod( 'yourseobook_header_navigation_menu_search_bar_border_size' );
    $header_navigation_menu_search_bar_border_type = get_theme_mod( 'yourseobook_header_navigation_menu_search_bar_border_type' );
    $header_navigation_menu_search_bar_border_color = get_theme_mod( 'yourseobook_header_navigation_menu_search_bar_border_color' );
    $header_navigation_menu_search_bar_box_shadow = get_theme_mod( 'yourseobook_header_navigation_menu_search_bar_box_shadow' );
    $header_navigation_menu_search_bar_text_color = get_theme_mod( 'yourseobook_header_navigation_menu_search_bar_text_color' );
   $wp_customize->add_control( 'yourseobook_header_main_navigation_master_menu_width',
     array(

*/
?>


<hr>



<div id="dc" class="details-content" style="animation: fadeIn 1s ease-in-out 0.8s;animation-fill-mode:both;">

<details>
<summary style="font-size:16px;">Main Search Section Settings</summary>
<p>Setup the main search bar section in to the Main Navigation Menu. Disable or Enable the whole section. For more fine tunes use one of the settings below to work with the default WordPress Search or Install the Advanced Custom Google Programmable Search Engine</p>

</details>
<hr>
<details>
<summary style="font-size:16px;">Why Programmable Search Engine?</summary>
<hr>
<h2 style="font-size:20px;"> Ready to create your Programmable Search Engine? </h2>

<p>Help people find what they need on your website. Add a customizable search box to your web pages and show fast, relevant results powered by Google Search.</p>

<h3 style="font-size:16px;">High-quality search results</h3>
<p> Because it’s powered by Google’s core search technology that’s constantly improving, you always get fast, relevant results.</p>

<hr>
<h3 style="font-size:16px;">Customizable functionality</h3>
<p> You program your search engine, so you decide what content it searches and how it looks.</p>

<hr>
<h3 style="font-size:16px;">Easy to use</h3>
<p> Integrate your search engine on your website quickly.</p>
<hr>
<a href="#" title="Show relevant results on your website powered by Google Search with Programmable Search Engine" role="button" type="link">See our Demo</a> or <a href="https://programmablesearchengine.google.com/controlpanel/all" title="Show relevant results powered by Google Search with Programmable Search Engine" role="button" type="link" target="_blank">Get Started</a>
</details>
<hr>
<details>
<summary>How to Make it yours?</summary>

<hr>
<h3 style="font-size:16px;">Choose sites to include</h3>
<p>Decide if you want users to search only your website, or include other sites on the web.</p>

<hr>
<h3 style="font-size:16px;">Match the design to your site</h3>
<p>Choose from several pre-built themes, or design your own search results page from scratch.</p>

<hr>
<h3 style="font-size:16px;">Get it for free or a low price</h3>
<p>Pay nothing and even earn revenue by showing relevant ads with <a href="https://support.google.com/adsense/topic/1705820?hl=en&ref_topic=1250102" title="AdSense for Search (AFS) is a Google product that lets you enhance your site with Google Search and Shopping ads and earn additional revenue." target="_blank" role="contentinfo">AdSense</a>, or pay a low price for an ad-free experience. </p>

</details>
<hr>
<a style="font-size:16px; background:#f00; color:#fff; padding:10px 20px; display: block; margin: 0px 0px 20px 0px; border: 3px solid #fff; border-radius: 8px; text-align: center; text-decoration: none; font-weight: 500;" href="https://www.youtube.com/playlist?list=PLK60c1stGKOP5teh7kj9p054SyOBrhp0t"
target="_blank" role="button">
Subcribe to our YouTube Channel
</a>
<hr>
<div class="head-hnm-search-box-tabs">


<button class="tablink" onclick="opendefaultSearchBoxTab(event, 'Design', this, '#070c4f')" id="defaultSearchBoxTabsOpen" style="animation: fadeIn 1s ease-in-out 0.33s;animation-fill-mode:both;">Design</button>
<button class="tablink" onclick="opendefaultSearchBoxTab(event, 'CSS', this, '#070920')" style="animation: fadeIn 1s ease-in-out 0.35s;animation-fill-mode:both;">CSS</button>
<button class="tablink" onclick="opendefaultSearchBoxTab(event, 'Adv', this, '#0e8500')" style="animation: fadeIn 1s ease-in-out 0.37s;animation-fill-mode:both;">Advanced</button>



<div id="Design" class="tabcontent" style="animation: fadeIn 1s ease-in-out 0.33s;animation-fill-mode:both;">
  <h3 class="tab-title">Design</h3>
<hr>
<?php $this->header_navigation_menu_search_bar_background_color_control  ( 'yourseobook_header_navigation_menu_search_bar_background_color', __( '', 'yourseobook' ), __( '', 'yourseobook' ) ); ?>
  <span class="reset-hnmsbbc-background-color-button dashicons dashicons-update" role="button"></span>
 <span id="hnmsbbc" class="hnmsbbc-background-color-value"></span>
<hr>
<hr>
<?php $this->hnm_box_search_bar_width_control  ( 'yourseobook_header_navigation_menu_search_bar_width', __( '', 'yourseobook' ), __( '', 'yourseobook' ) ); ?>
  <span class="reset-hnmsb-width-size-button dashicons dashicons-update" role="button"></span>
 <span id="hnmsbw" class="hnmsb-width-size-value"></span>
<hr>
<?php $this->hnm_box_search_bar_border_size_control  ( 'yourseobook_header_navigation_menu_search_bar_border_size', __( '', 'yourseobook' ), __( '', 'yourseobook' ) ); ?>
  <span class="reset-hnmsbbs-border-size-button dashicons dashicons-update" role="button"></span>
 <span id="hnmsbbs" class="hnmsbbs-border-size-value"></span>
<hr>
<?php $this->hnm_box_search_bar_border_type_control  ( 'yourseobook_header_navigation_menu_search_bar_border_type', __( '', 'yourseobook' ), __( '', 'yourseobook' ) ); ?>
  <span class="reset-hnmsbbs-border-type-button dashicons dashicons-update" role="button"></span>
 <span id="hnmsbbt" class="hnmsbbt-border-type-value"></span>
<hr>
<?php $this->hnm_box_search_bar_border_border_color_control  ( 'yourseobook_header_navigation_menu_search_bar_border_color', __( '', 'yourseobook' ), __( '', 'yourseobook' ) ); ?>
  <span class="reset-hnmsbbc-border-color-button dashicons dashicons-update" role="button"></span>
 <span id="hnmsbbc" class="hnmsbbbc-border-color-value"></span>
<hr>
<?php $this->hnm_box_search_bar_border_radius_control  ( 'yourseobook_header_navigation_menu_search_bar_border_radius', __( '', 'yourseobook' ), __( '', 'yourseobook' ) ); ?>
  <span class="reset-hnmsbbs-border-radius-button dashicons dashicons-update" role="button"></span>
 <span id="hnmsbbr" class="hnmsbbr-border-radius-value"></span>

</div>



<div id="CSS" class="tabcontent"  style="animation: fadeIn 1s ease-in-out 0.35s;animation-fill-mode:both;">
  <h3>Style CSS</h3>

<hr>
<?php $this->hnm_box_search_bar_font_size_control  ( 'yourseobook_header_navigation_menu_search_bar_font_size', __( '', 'yourseobook' ), __( '', 'yourseobook' ) ); ?>
  <span class="reset-hnmsbfs-font-size-button dashicons dashicons-update" role="button"></span>
 <span id="hnmsbfs" class="hnmsbfs-font-size-value"></span>

<div class="row-search-box" style="border:1px solid #fff;padding:5px;margin:10px 0px 10px 0px;">
<h3 style="font-size:14px;">Search Box Margin Settins CSS</h3>

<div class="search-box-margin-box">
<label for="hnmsbmt">Top</label>
<?php $this->hnm_box_search_bar_margin_top_control  ( 'yourseobook_header_navigation_menu_search_bar_margin_top', __( '', 'yourseobook' ), __( '', 'yourseobook' ) ); ?>
  <span class="reset-hnm-search-box-margin-top dashicons dashicons-update" role="button"></span>
 <span id="hnmsbmt" class="hnm-search-box-margin-top-value"></span>

</div>

<div class="search-box-margin-box">
<label for="hnmsbmr">Right</label>

<?php $this->hnm_box_search_bar_margin_right_control  ( 'yourseobook_header_navigation_menu_search_bar_margin_right', __( '', 'yourseobook' ), __( '', 'yourseobook' ) ); ?>
  <span class="reset-hnm-search-box-margin-right dashicons dashicons-update" role="button"></span>
 <span id="hnmsbmr" class="hnm-search-box-margin-right-value"></span>

</div>

<div class="search-box-margin-box">
<label for="hnmsbmb">Bottom</label>

<?php $this->hnm_box_search_bar_margin_bottom_control  ( 'yourseobook_header_navigation_menu_search_bar_margin_bottom', __( '', 'yourseobook' ), __( '', 'yourseobook' ) ); ?>
  <span class="reset-hnm-search-box-margin-bottom dashicons dashicons-update" role="button"></span>
 <span id="hnmsbmb" class="hnm-search-box-margin-bottom-value"></span>

</div>


<div class="search-box-margin-box">
<label for="hnmsbml">Left</label>
<?php $this->hnm_box_search_bar_margin_left_control  ( 'yourseobook_header_navigation_menu_search_bar_margin_left', __( '', 'yourseobook' ), __( '', 'yourseobook' ) ); ?>
  <span class="reset-hnm-search-box-margin-left dashicons dashicons-update" role="button"></span>
 <span id="hnmsbml" class="hnm-search-box-margin-left-value"></span>

</div>

</div>

<div class="row-search-box" style="border:1px solid #fff;padding:5px;margin:10px 0px 10px 0px;">
<h3 style="font-size:14px;">Search Box Padding Settins CSS</h3>

<div class="search-box-padding-box">
<label for="hnmsbpt">Top</label>
<?php $this->hnm_box_search_bar_padding_top_control  ( 'yourseobook_header_navigation_menu_search_bar_padding_top', __( '', 'yourseobook' ), __( '', 'yourseobook' ) ); ?>
  <span class="reset-hnm-search-box-padding-top dashicons dashicons-update" role="button"></span>
 <span id="hnmsbpt" class="hnm-search-box-padding-top-value"></span>

</div>

<div class="search-box-padding-box">
<label for="hnmsbpr">Right</label>

<?php $this->hnm_box_search_bar_padding_right_control  ( 'yourseobook_header_navigation_menu_search_bar_padding_right', __( '', 'yourseobook' ), __( '', 'yourseobook' ) ); ?>
  <span class="reset-hnm-search-box-padding-right dashicons dashicons-update" role="button"></span>
 <span id="hnmsbpr" class="hnm-search-box-padding-right-value"></span>

</div>

<div class="search-box-padding-box">
<label for="hnmsbpb">Bottom</label>

<?php $this->hnm_box_search_bar_padding_bottom_control  ( 'yourseobook_header_navigation_menu_search_bar_padding_bottom', __( '', 'yourseobook' ), __( '', 'yourseobook' ) ); ?>
  <span class="reset-hnm-search-box-padding-bottom dashicons dashicons-update" role="button"></span>
 <span id="hnmsbpb" class="hnm-search-box-padding-bottom-value"></span>

</div>


<div class="search-box-padding-box">
<label for="hnmsbpl">Left</label>
<?php $this->hnm_box_search_bar_padding_left_control  ( 'yourseobook_header_navigation_menu_search_bar_padding_left', __( '', 'yourseobook' ), __( '', 'yourseobook' ) ); ?>
  <span class="reset-hnm-search-box-padding-left dashicons dashicons-update" role="button"></span>
 <span id="hnmsbml" class="hnm-search-box-padding-left-value"></span>

</div>

</div>


<style>

.search-box-margin-box {
  float: left;
  width: 20%;
margin: 0px 5px 0px 5px;
}
.search-box-padding-box {
  float: left;
  width: 20%;
margin: 0px 5px 0px 5px;
}

/* Clear floats after the columns */
.row-search-box:after {
  content: "";
  display: table;
  clear: both;
}

</style>
</div>



<div id="Adv" class="tabcontent" style="animation: fadeIn 1s ease-in-out 0.37s;animation-fill-mode:both;">
  <h3>Advanced</h3>




</div>
</div>


<script>
function opendefaultSearchBoxTab(event, defaultSearchBoxTabName,elmnt,color) {
  event.preventDefault(); // Prevent default behavior

  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].style.backgroundColor = "";
  }
  document.getElementById(defaultSearchBoxTabName).style.display = "block";
  elmnt.style.backgroundColor = color;
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultSearchBoxTabsOpen").click();
</script>

<style>
              @keyframes fadeIn {
                0% {
                  opacity: 0;
                  transform: translateX(-100px);
                }
                100% {
                  opacity: 1;
                  transform: translateX(0);
                }
              }
summary#st {
	font-size: 12px;
	font-weight: 00;
	color: #01ff00;
}
details#db {
	border: 1px solid #ffc009;
	border-radius: 4px;
	padding: 10px;
	background: #000;
	box-shadow: 0px 10px 10px -10px #ffc009;
                    margin: 20px 0px 20px 0px;
}
h3.tab-title{
font-size: 16px;
font-weight: 500;
}
.head-hnm-search-box-tabs {

	width: 100%;
	display: inline-block;
	padding: 0px;
	margin: 0px;
	border: 1px solid #fff;
	border-radius: 4px;
}
/* Style tab links */
.tablink {
  background-color: #555;
  color: white;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  font-size: 16px;
  width: 33.33%;
}

.tablink:hover {
  background-color: #777;
}

/* Style the tab content (and add height:100% for full page content) */
.tabcontent {
	color: white;
	display: none;
	padding: 50px 20px;
	height: 100%;
	margin: 50px 0px 20px 0px;
	transition: fadeIn 1.3s ease-in-out;
}

#Design {background-color: #070c4f;}
#CSS {background-color: #070920;}
#Adv {background-color: #0e8500;}
</style>



<style>
.customize-partial-edit-shortcut.customize-partial-edit-shortcut-yourseobook_header_main_navigation_master_menu_search_bar_display_control button svg {
        width: 15px !important;
        height: 15px !important;
        padding: 3px;
        text-align: center;
        line-height: 0 !important;
        margin: 0px auto;
        border: 1px solid #000 !important;
        border-radius: 17px;
        display: block;
}
.customize-partial-edit-shortcut.customize-partial-edit-shortcut-yourseobook_header_main_navigation_master_menu_search_bar_display_control button {
  position: absolute;
  top: 45px;
  margin: 0px;
  width: 22px !important;
  height: 20px !important;
  background: #008000 !important;
  font-size: 12px !important;
}

.customize-partial-edit-shortcut.customize-partial-edit-shortcut-yourseobook_header_main_navigation_master_menu_search_bar_display_control button:after {
  content: 'Search Box Settings';
  min-width: 200px;
  padding: block;
  position: absolute;
  top: 10px;
  background: #000 !important;
  height: 30px !important;
  line-height: 0 !important;
  padding: 0px !important;
}
</style>


<script>
jQuery(document).ready(function($) {

    $(document).on('click', '.reset-hnmsb-width-size-button', function(e) {
        e.preventDefault();
        // Reset the height control to its default value
        wp.customize('yourseobook_header_navigation_menu_search_bar_width').set('200');
    });

    wp.customize('yourseobook_header_navigation_menu_search_bar_width', function(value) {
        value.bind(function(newVal) {
            $('.hnmsbw-width-size-value').text(newVal);
        });
    });

    $(document).on('click', '.reset-hnmsbbs-border-size-button', function(e) {
        e.preventDefault();
        // Reset the height control to its default value
        wp.customize('yourseobook_header_navigation_menu_search_bar_border_size').set('200');
    });

    wp.customize('yourseobook_header_navigation_menu_search_bar_border_size', function(value) {
        value.bind(function(newVal) {
            $('.hnmsbbs-border-size-value').text(newVal);
        });
    });


    $(document).on('click', '.reset-hnmsbfs-font-size-button', function(e) {
        e.preventDefault();
        // Reset the height control to its default value
        wp.customize('yourseobook_header_navigation_menu_search_bar_font_size').set('14px');
    });

    wp.customize('yourseobook_header_navigation_menu_search_bar_font_size', function(value) {
        value.bind(function(newVal) {
            $('.hnmsbfs-font-size-value').text(newVal);
        });
    });


    $(document).on('click', '.reset-hnmsbbr-border-radius-button', function(e) {
        e.preventDefault();
        // Reset the height control to its default value
        wp.customize('yourseobook_header_navigation_menu_search_bar_border_radius').set('0');
    });

    wp.customize('yourseobook_header_navigation_menu_search_bar_border_radius', function(value) {
        value.bind(function(newVal) {
            $('.hnmsbbr-border-radius-value').text(newVal);
        });
    });


    $(document).on('click', '.reset-hnmsbbt-border-type-button', function(e) {
        e.preventDefault();
        // Reset the height control to its default value
        wp.customize('yourseobook_header_navigation_menu_search_bar_border_type').set('none');
    });

    wp.customize('yourseobook_header_navigation_menu_search_bar_border_type', function(value) {
        value.bind(function(newVal) {
            $('.hnmsbbt-border-type-value').text(newVal);
        });
    });


    $(document).on('click', '.reset-hnmsbbc-background-color-button', function(e) {
        e.preventDefault();
        // Reset the height control to its default value
        wp.customize('yourseobook_header_navigation_menu_search_bar_background_color').set('rgba(255,255,255,1)');
    });

    wp.customize('yourseobook_header_navigation_menu_search_bar_background_color', function(value) {
        value.bind(function(newVal) {
            $('.hnmsbbc-background-color-value').text(newVal);
        });
    });



    $(document).on('click', '.reset-hnmsbbbc-border-color-button', function(e) {
        e.preventDefault();
        // Reset the height control to its default value
        wp.customize('yourseobook_header_navigation_menu_search_bar_background_color').set('rgba(255,255,255,1)');
    });

    wp.customize('yourseobook_header_navigation_menu_search_bar_background_color', function(value) {
        value.bind(function(newVal) {
            $('.hnmsbbbc-border-color-value').text(newVal);
        });
    });

// Margin reset Buttons


    $(document).on('click', '.reset-hnm-search-box-margin-top', function(e) {
        e.preventDefault();
        // Reset the height control to its default value
        wp.customize('yourseobook_header_navigation_menu_search_bar_margin_top').set('0');
    });

    wp.customize('yourseobook_header_navigation_menu_search_bar_margin_top', function(value) {
        value.bind(function(newVal) {
            $('.hnm-search-box-margin-top-value').text(newVal);
        });
    });


    $(document).on('click', '.reset-hnm-search-box-margin-right', function(e) {
        e.preventDefault();
        // Reset the height control to its default value
        wp.customize('yourseobook_header_navigation_menu_search_bar_margin_right').set('0px');
    });

    wp.customize('yourseobook_header_navigation_menu_search_bar_margin_right', function(value) {
        value.bind(function(newVal) {
            $('.hnm-search-box-margin-right-value').text(newVal);
        });
    });


    $(document).on('click', '.reset-hnm-search-box-margin-bottom', function(e) {
        e.preventDefault();
        // Reset the height control to its default value
        wp.customize('yourseobook_header_navigation_menu_search_bar_margin_bottom').set('0px');
    });

    wp.customize('yourseobook_header_navigation_menu_search_bar_margin_bottom', function(value) {
        value.bind(function(newVal) {
            $('.hnm-search-box-margin-bottom-value').text(newVal);
        });
    });


    $(document).on('click', '.reset-hnm-search-box-margin-left', function(e) {
        e.preventDefault();
        // Reset the height control to its default value
        wp.customize('yourseobook_header_navigation_menu_search_bar_margin_left').set('0px');
    });

    wp.customize('yourseobook_header_navigation_menu_search_bar_margin_left', function(value) {
        value.bind(function(newVal) {
            $('.hnm-search-box-margin-left-value').text(newVal);
        });
    });

// Padding reset Buttons


    $(document).on('click', '.reset-hnm-search-box-padding-top', function(e) {
        e.preventDefault();
        // Reset the height control to its default value
        wp.customize('yourseobook_header_navigation_menu_search_bar_padding_top').set('0px');
    });

    wp.customize('yourseobook_header_navigation_menu_search_bar_padding_top', function(value) {
        value.bind(function(newVal) {
            $('.hnm-search-box-padding-top-value').text(newVal);
        });
    });


    $(document).on('click', '.reset-hnm-search-box-padding-right', function(e) {
        e.preventDefault();
        // Reset the height control to its default value
        wp.customize('yourseobook_header_navigation_menu_search_bar_padding_right').set('0px');
    });

    wp.customize('yourseobook_header_navigation_menu_search_bar_padding_right', function(value) {
        value.bind(function(newVal) {
            $('.hnm-search-box-padding-right-value').text(newVal);
        });
    });


    $(document).on('click', '.reset-hnm-search-box-padding-bottom', function(e) {
        e.preventDefault();
        // Reset the height control to its default value
        wp.customize('yourseobook_header_navigation_menu_search_bar_padding_bottom').set('0px');
    });

    wp.customize('yourseobook_header_navigation_menu_search_bar_padding_bottom', function(value) {
        value.bind(function(newVal) {
            $('.hnm-search-box-padding-bottom-value').text(newVal);
        });
    });


    $(document).on('click', '.reset-hnm-search-box-padding-left', function(e) {
        e.preventDefault();
        // Reset the height control to its default value
        wp.customize('yourseobook_header_navigation_menu_search_bar_padding_left').set('0px');
    });

    wp.customize('yourseobook_header_navigation_menu_search_bar_padding_left', function(value) {
        value.bind(function(newVal) {
            $('.hnm-search-box-padding-left-value').text(newVal);
        });
    });


const headerMenuSearchBoxWidthInput = document.getElementById('hnmsb-width-size');
const headerMenuSearchBoxWidthValue = document.getElementById('hnmsbw');

// Update the target element with the initial value
headerMenuSearchBoxWidthValue.textContent = headerMenuSearchBoxWidthInput.value + 'px';

// Listen for the input event on the range input
headerMenuSearchBoxWidthInput.addEventListener('input', function() {
  // Update the target element with the current value
  headerMenuSearchBoxWidthValue.textContent = headerMenuSearchBoxWidthInput.value + 'px';
});

const headerMenuSearchBoxBorderRadiusInput = document.getElementById('hnmsbbr-border-radius-size');
const headerMenuSearchBoxBorderRadiusValue = document.getElementById('hnmsbbr');

// Update the target element with the initial value
headerMenuSearchBoxBorderRadiusValue.textContent = headerMenuSearchBoxBorderRadiusInput.value + 'px';

// Listen for the input event on the range input
headerMenuSearchBoxBorderRadiusInput.addEventListener('input', function() {
  // Update the target element with the current value
  headerMenuSearchBoxBorderRadiusValue.textContent = headerMenuSearchBoxBorderRadiusInput.value + 'px';
});

const headerMenuSearchBoxBackgroundColorInput = document.getElementById('hnmsbbc-background-color-setings');
const headerMenuSearchBoxBackgroundColorValue = document.getElementById('hnmsbbc');

// Update the target element with the initial value
headerMenuSearchBoxBackgroundColorValue.textContent = headerMenuSearchBoxBackgroundColorInput.value + 'px';

// Listen for the input event on the range input
headerMenuSearchBoxBackgroundColorInput.addEventListener('input', function() {
  // Update the target element with the current value
  headerMenuSearchBoxBackgroundColorValue.textContent = headerMenuSearchBoxBackgroundColorInput.value + 'px';
});


const headerMenuSearchBoxBorderColorInput = document.getElementById('hnmsbbbc-border-color-setings');
const headerMenuSearchBoxBorderColorValue = document.getElementById('hnmsbbbc');

// Update the target element with the initial value
headerMenuSearchBoxBorderColorValue.textContent = headerMenuSearchBoxBorderColorInput.value + 'px';

// Listen for the input event on the range input
headerMenuSearchBoxBorderColorInput.addEventListener('input', function() {
  // Update the target element with the current value
  headerMenuSearchBoxBorderColorValue.textContent = headerMenuSearchBoxBorderColorInput.value + 'px';
});


const headerMenuSearchBoxBorderSizeInput = document.getElementById('hnmsbbs-border-size');
const headerMenuSearchBoxBorderSizeValue = document.getElementById('hnmsbbs');

// Update the target element with the initial value
headerMenuSearchBoxBorderSizeValue.textContent = headerMenuSearchBoxBorderSizeInput.value + 'px';

// Listen for the input event on the range input
headerMenuSearchBoxBorderSizeInput.addEventListener('input', function() {
  // Update the target element with the current value
  headerMenuSearchBoxBorderSizeValue.textContent = headerMenuSearchBoxBorderSizeInput.value + 'px';
});


const headerMenuSearchBoxFontSizeInput = document.getElementById('hnmsbfs-font-size');
const headerMenuSearchBoxFontSizeValue = document.getElementById('hnmsbfs');

// Update the target element with the initial value
headerMenuSearchBoxFontSizeValue.textContent = headerMenuSearchBoxFontSizeInput.value + 'px';

// Listen for the input event on the range input
headerMenuSearchBoxFontSizeInput.addEventListener('input', function() {
  // Update the target element with the current value
  headerMenuSearchBoxFontSizeValue.textContent = headerMenuSearchBoxFontSizeInput.value + 'px';
});


const headerMenuSearchBoxBorderTypeInput = document.getElementById('hnmsbbt-border-type-name');
const headerMenuSearchBoxBorderTypeValue = document.getElementById('hnmsbbt');

// Update the target element with the initial value
headerMenuSearchBoxBorderTypeValue.textContent = headerMenuSearchBoxBorderTypeInput.value + 'px';

// Listen for the input event on the range input
headerMenuSearchBoxBorderTypeInput.addEventListener('input', function() {
  // Update the target element with the current value
  headerMenuSearchBoxBorderTypeValue.textContent = headerMenuSearchBoxBorderTypeInput.value + 'px';
});

// Margin Show Values


const headerMenuSearchBoxMarginTopInput = document.getElementById('hnmsbmt-margin-top-size');
const headerMenuSearchBoxMarginTopValue = document.getElementById('hnmsbmt');

// Update the target element with the initial value
headerMenuSearchBoxMarginTopValue.textContent = headerMenuSearchBoxMarginTopInput.value + 'px';

// Listen for the input event on the range input
headerMenuSearchBoxMarginTopInput.addEventListener('input', function() {
  // Update the target element with the current value
  headerMenuSearchBoxMarginTopValue.textContent = headerMenuSearchBoxMarginTopInput.value + 'px';
});

const headerMenuSearchBoxMarginRightInput = document.getElementById('hnmsbmr-margin-right-size');
const headerMenuSearchBoxMarginRightValue = document.getElementById('hnmsbmr');

// Update the target element with the initial value
headerMenuSearchBoxMarginRightValue.textContent = headerMenuSearchBoxMarginRightInput.value + 'px';

// Listen for the input event on the range input
headerMenuSearchBoxMarginRightInput.addEventListener('input', function() {
  // Update the target element with the current value
  headerMenuSearchBoxMarginRightValue.textContent = headerMenuSearchBoxMarginRightInput.value + 'px';
});

const headerMenuSearchBoxMarginBottomInput = document.getElementById('hnmsbmb-margin-bottom-size');
const headerMenuSearchBoxMarginBottomValue = document.getElementById('hnmsbmb');

// Update the target element with the initial value
headerMenuSearchBoxMarginBottomValue.textContent = headerMenuSearchBoxMarginBottomInput.value + 'px';

// Listen for the input event on the range input
headerMenuSearchBoxMarginBottomInput.addEventListener('input', function() {
  // Update the target element with the current value
  headerMenuSearchBoxMarginBottomValue.textContent = headerMenuSearchBoxMarginBottomInput.value + 'px';
});

const headerMenuSearchBoxMarginLeftInput = document.getElementById('hnmsbml-margin-left-size');
const headerMenuSearchBoxMarginLeftValue = document.getElementById('hnmsbml');

// Update the target element with the initial value
headerMenuSearchBoxMarginLeftValue.textContent = headerMenuSearchBoxMarginLeftInput.value + 'px';

// Listen for the input event on the range input
headerMenuSearchBoxMarginLeftInput.addEventListener('input', function() {
  // Update the target element with the current value
  headerMenuSearchBoxMarginLeftValue.textContent = headerMenuSearchBoxMarginLeftInput.value + 'px';
});



// Padding Listener

// Padding Show Values


const headerMenuSearchBoxPaddingTopInput = document.getElementById('hnmsbpt-padding-top-size');
const headerMenuSearchBoxPaddingTopValue = document.getElementById('hnmsbpt');

// Update the target element with the initial value
headerMenuSearchBoxPaddingTopValue.textContent = headerMenuSearchBoxPaddingTopInput.value + 'px';

// Listen for the input event on the range input
headerMenuSearchBoxPaddingTopInput.addEventListener('input', function() {
  // Update the target element with the current value
  headerMenuSearchBoxPaddingTopValue.textContent = headerMenuSearchBoxPaddingTopInput.value + 'px';
});

const headerMenuSearchBoxPaddingRightInput = document.getElementById('hnmsbpr-padding-right-size');
const headerMenuSearchBoxPaddingRightValue = document.getElementById('hnmsbpr');

// Update the target element with the initial value
headerMenuSearchBoxPaddingRightValue.textContent = headerMenuSearchBoxPaddingRightInput.value + 'px';

// Listen for the input event on the range input
headerMenuSearchBoxPaddingRightInput.addEventListener('input', function() {
  // Update the target element with the current value
  headerMenuSearchBoxPaddingRightValue.textContent = headerMenuSearchBoxPaddingRightInput.value + 'px';
});

const headerMenuSearchBoxPaddingBottomInput = document.getElementById('hnmsbpb-padding-bottom-size');
const headerMenuSearchBoxPaddingBottomValue = document.getElementById('hnmsbpb');

// Update the target element with the initial value
headerMenuSearchBoxPaddingBottomValue.textContent = headerMenuSearchBoxPaddingBottomInput.value + 'px';

// Listen for the input event on the range input
headerMenuSearchBoxPaddingBottomInput.addEventListener('input', function() {
  // Update the target element with the current value
  headerMenuSearchBoxPaddingBottomValue.textContent = headerMenuSearchBoxPaddingBottomInput.value + 'px';
});

const headerMenuSearchBoxPaddingLeftInput = document.getElementById('hnmsbpl-padding-left-size');
const headerMenuSearchBoxPaddingLeftValue = document.getElementById('hnmsbpl');

// Update the target element with the initial value
headerMenuSearchBoxPaddingLeftValue.textContent = headerMenuSearchBoxPaddingLeftInput.value + 'px';

// Listen for the input event on the range input
headerMenuSearchBoxPaddingLeftInput.addEventListener('input', function() {
  // Update the target element with the current value
  headerMenuSearchBoxPaddingLeftValue.textContent = headerMenuSearchBoxPaddingLeftInput.value + 'px';
});


});
</script>
<?php
}

    public function hnm_box_search_bar_font_size_control( $setting, $label, $description ) {
        $value = get_theme_mod( $setting );
        ?>

<input type="range" id="hnmsbfs-font-size" min="12" max="20" step="1" value="14" data-customize-setting-link="<?php echo esc_attr( $setting ); ?>" />

        <?php
    }

    public function hnm_box_search_bar_width_control( $setting, $label, $description ) {
        $value = get_theme_mod( $setting );
        ?>

<input type="range" id="hnmsb-width-size" min="200" max="250" step="0.5" value="200" data-customize-setting-link="<?php echo esc_attr( $setting ); ?>" />

        <?php
    }

    public function header_navigation_menu_search_bar_background_color_control( $setting, $label, $description ) {
        $value = get_theme_mod( $setting );
        ?>

<input type="color" id="hnmsbbc-background-color-setings"  data-customize-setting-link="<?php echo esc_attr( $setting ); ?>" />

        <?php
    }

    public function hnm_box_search_bar_border_border_color_control( $setting, $label, $description ) {
        $value = get_theme_mod( $setting );
        ?>

<input type="color" id="hnmsbbbc-border-color-setings"  data-customize-setting-link="<?php echo esc_attr( $setting ); ?>" />

        <?php
    }

    public function hnm_box_search_bar_border_size_control( $setting, $label, $description ) {
        $value = get_theme_mod( $setting );
        ?>

<input type="range" id="hnmsbbs-border-size" min="0" max="5" step="0.1" value="0" data-customize-setting-link="<?php echo esc_attr( $setting ); ?>" />

        <?php
    }


    public function hnm_box_search_bar_border_radius_control( $setting, $label, $description ) {
        $value = get_theme_mod( $setting );
        ?>

<input type="range" id="hnmsbbr-border-radius-size" min="0" max="50" step="0.1" value="0" data-customize-setting-link="<?php echo esc_attr( $setting ); ?>" />

        <?php
    }




    public function hnm_box_search_bar_border_type_control( $setting, $label, $description ) {
        $value = get_theme_mod( $setting );
        ?>

  <!-- <label for="bordertypes">Choose your browser from the list:</label>
  <input list="bordertypes" name="bordertype" id="bordertype" data-customize-setting-link="<?php // echo esc_attr( $setting ); ?>" value="<?php // echo esc_attr( $value ); ?>">
  <datalist id="bordertypes">
    <option value="none">
    <option value="hidden">
    <option value="dotted">
    <option value="dashed">
    <option value="solid">
  </datalist> -->


<select name="hnmsbbt-border-type-name" type="choice"  id="hnmsbbt-border-type-name" data-customize-setting-link="<?php echo esc_attr( $setting ); ?>" value="<?php echo esc_attr( $value ); ?>">>
<option value="none">none</option>
<option value="hidden">hidden</option>
<option value="dotted">dotted</option>
<option value="dashed">dashed</option>
<option value="solid">solid</option>
<option value="double">double</option>
<option value="double">double</option>
<option value="ridge">ridge</option>
<option value="inset">inset</option>
<option value="outset">outset</option>
<option value="dotted solid">dotted solid</option>
<option value="hidden double dashed">hidden double dashed</option>
<option value="none solid dotted dashed">none solid dotted dashed</option>
<option value="inherit">inherit</option>
<option value="initial">initial</option>
<option value="revert">revert</option>
<option value="revert-layer">revert-layer</option>
<option value="unset">unset</option>

</select>

        <?php
    }


// Margin and Padding Settings Controls

    public function hnm_box_search_bar_margin_top_control( $setting, $label, $description ) {
        $value = get_theme_mod( $setting );
        ?>
<input type="number" id="hnmsbmt-margin-top-size" min="0" max="60" step="1" value="<?php echo esc_attr($header_navigation_menu_search_bar_margin_top); ?>" data-customize-setting-link="<?php echo esc_attr( $setting ); ?>" />


        <?php
    }

    public function hnm_box_search_bar_margin_right_control( $setting, $label, $description ) {
        $value = get_theme_mod( $setting );
        ?>
<input type="number" id="hnmsbmr-margin-right-size" min="0" max="60" step="1" value="0" data-customize-setting-link="<?php echo esc_attr( $setting ); ?>" />


        <?php
    }

    public function hnm_box_search_bar_margin_bottom_control( $setting, $label, $description ) {
        $value = get_theme_mod( $setting );
        ?>
<input type="number" id="hnmsbmb-margin-bottom-size" min="0" max="60" step="1" value="0" data-customize-setting-link="<?php echo esc_attr( $setting ); ?>" />

        <?php
    }
    public function hnm_box_search_bar_margin_left_control( $setting, $label, $description ) {
        $value = get_theme_mod( $setting );
        ?>

<input type="number" id="hnmsbml-margin-left-size" min="0" max="60" step="1" value="0" data-customize-setting-link="<?php echo esc_attr( $setting ); ?>" />

        <?php
    }


// paading control


    public function hnm_box_search_bar_padding_top_control( $setting, $label, $description ) {
        $value = get_theme_mod( $setting );
        ?>
<input type="number" id="hnmsbpt-padding-top-size" min="0" max="60" step="1" value="0" data-customize-setting-link="<?php echo esc_attr( $setting ); ?>" />


        <?php
    }

    public function hnm_box_search_bar_padding_right_control( $setting, $label, $description ) {
        $value = get_theme_mod( $setting );
        ?>
<input type="number" id="hnmsbpr-padding-right-size" min="0" max="60" step="1" value="0" data-customize-setting-link="<?php echo esc_attr( $setting ); ?>" />


        <?php
    }

    public function hnm_box_search_bar_padding_bottom_control( $setting, $label, $description ) {
        $value = get_theme_mod( $setting );
        ?>
<input type="number" id="hnmsbpb-padding-bottom-size" min="0" max="60" step="1" value="0" data-customize-setting-link="<?php echo esc_attr( $setting ); ?>" />

        <?php
    }
    public function hnm_box_search_bar_padding_left_control( $setting, $label, $description ) {
        $value = get_theme_mod( $setting );
        ?>

<input type="number" id="hnmsbpl-padding-left-size" min="0" max="60" step="1" value="0" data-customize-setting-link="<?php echo esc_attr( $setting ); ?>" />

        <?php
    }
}
}