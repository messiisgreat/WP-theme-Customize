<?php
/**
 *  Yourseobook Header Nav Menu  Custom Class Control
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



class Yourseobook_Header_Nav_Menu_Control extends WP_Customize_Control {
public $type = 'tabbed_menu';

public function render_content()
{

/*


    $header_nav_menu_background_color = get_theme_mod( 'yourseobook_header_nav_menu_background_color' );
    // $header_nav_menu_opacity = get_theme_mod( 'header_nav_menu_opacity' );
    // $header_nav_menu_font_size = get_theme_mod( 'yourseobook_header_nav_menu_font_size' );
    // $header_nav_menu_text_transform = get_theme_mod( 'yourseobook_header_nav_menu_text_transform' );
    // $header_nav_menu_text_decoration = get_theme_mod( 'yourseobook_header_nav_menu_text_decoration' );
    $header_nav_menu_width = get_theme_mod( 'yourseobook_header_nav_menu_width' );
    // $header_nav_menu_height = get_theme_mod( 'yourseobook_header_nav_menu_height');
    // $header_nav_menu_padding_top = get_theme_mod( 'yourseobook_header_nav_menu_padding_top' );
    // $header_nav_menu_padding_right = get_theme_mod( 'yourseobook_header_nav_menu_padding_right' );
    // $header_nav_menu_padding_bottom = get_theme_mod( 'yourseobook_header_nav_menu_padding_bottom' );
    // $header_nav_menu_padding_left = get_theme_mod( 'yourseobook_header_nav_menu_padding_left' );
    // $header_nav_menu_margin_top = get_theme_mod( 'yourseobook_header_nav_menu_margin_top' );
    // $header_nav_menu_margin_right = get_theme_mod( 'yourseobook_header_nav_menu_margin_right' );
    // $header_nav_menu_margin_bottom = get_theme_mod( 'yourseobook_header_nav_menu_margin_bottom' );
    // $header_nav_menu_margin_left = get_theme_mod( 'yourseobook_header_nav_menu_margin_left' );
     $header_nav_menu_border_radius = get_theme_mod( 'yourseobook_header_nav_menu_border_radius' );
     $header_nav_menu_border_size = get_theme_mod( 'yourseobook_header_nav_menu_border_size' );
     $header_nav_menu_border_type = get_theme_mod( 'yourseobook_header_nav_menu_border_type' );
     $header_nav_menu_border_color = get_theme_mod( 'yourseobook_header_nav_menu_border_color' );
    // $header_nav_menu_text_color = get_theme_mod( 'yourseobook_header_nav_menu_text_color' );
    // $header_nav_menu_float = get_theme_mod( 'yourseobook_header_nav_menu_float' );
    // $header_nav_menu_font_weight = get_theme_mod( 'yourseobook_header_nav_menu_font_weight' );
    // $header_nav_menu_text_align = get_theme_mod( 'yourseobook_header_nav_menu_text_align' );
    // $header_nav_menu_display = get_theme_mod( 'yourseobook_header_nav_menu_display' );
    // $header_nav_menu_position = get_theme_mod( 'yourseobook_header_nav_menu_position' );
    // $header_nav_menu_text_shadow_offset_x = get_theme_mod( 'yourseobook_header_nav_menu_box_shadow_top' );
    // $header_nav_menu_text_shadow_offset_y = get_theme_mod( 'yourseobook_header_nav_menu_box_shadow_top' );
    // $header_nav_menu_text_shadow_offset_blur_radius = get_theme_mod( 'yourseobook_header_nav_menu_box_shadow_top' );
    // $header_nav_menu_text_shadow_color = get_theme_mod( 'yourseobook_header_nav_menu_box_shadow_top' );
    // $header_nav_menu_box_shadow = get_theme_mod( 'yourseobook_header_nav_menu_box_shadow' );
    // $header_nav_menu_box_shadow_top = get_theme_mod( 'yourseobook_header_nav_menu_box_shadow_top' );
    // $header_nav_menu_box_shadow_right = get_theme_mod( 'yourseobook_header_nav_menu_box_shadow_right' );
    // $header_nav_menu_box_shadow_bottom = get_theme_mod( 'yourseobook_header_nav_menu_box_shadow_bottom' );
    // $header_nav_menu_box_shadow_left = get_theme_mod( 'yourseobook_header_nav_menu_box_shadow_left' );
    // $header_nav_menu_box_shadow_color = get_theme_mod( 'yourseobook_header_nav_menu_box_shadow_color' );

*/
?>
  <style>
    /* Add your styling here */
    .accordion {
      background-color: #f9f9f9;
      color: #333;
      cursor: pointer;
      padding: 10px;
      width: 100%;
      text-align: left;
      border: none;
      outline: none;
      transition: 0.4s;
    }

    .active, .accordion:hover {
      background-color: #ddd;
    }

    .panel {
      padding: 0 10px;
      display: none;
      background-color: white;
      overflow: hidden;
    }
  </style>
  <script>
    function toggleAccordion(panelId) {
      var panel = document.getElementById(panelId);
      panel.style.display = panel.style.display === "none" ? "block" : "none";
    }

    function resetPadding() {
      // Reset the padding values
      document.getElementById("paddingTop").value = "";
      document.getElementById("paddingRight").value = "";
      document.getElementById("paddingBottom").value = "";
      document.getElementById("paddingLeft").value = "";
    }

    function linkPaddings() {
      // Link all paddings to use the same value
      var sharedPadding = document.getElementById("sharedPadding").value;
      document.getElementById("paddingTop").value = sharedPadding;
      document.getElementById("paddingRight").value = sharedPadding;
      document.getElementById("paddingBottom").value = sharedPadding;
      document.getElementById("paddingLeft").value = sharedPadding;
    }

    function saveChanges() {
      // Get the padding values and perform necessary actions with PHP
      var paddingTop = document.getElementById("paddingTop").value;
      var paddingRight = document.getElementById("paddingRight").value;
      var paddingBottom = document.getElementById("paddingBottom").value;
      var paddingLeft = document.getElementById("paddingLeft").value;

      // Perform necessary actions with PHP using the obtained values
      
      // Example: Ajax request to update the values using PHP
      // ...
    }

    function toggleSectionVisibility() {
      var section = document.getElementById("additionalSection");
      section.style.display = section.style.display === "none" ? "block" : "none";
    }
  </script>

  <h1>Header Nav Menu Controller</h1>
  <button class="accordion" onclick="toggleAccordion('paddingAccordion')">Edit Padding</button>
  <div class="panel" id="paddingAccordion">
    <label for="sharedPadding">Shared Padding:</label>
    <input type="text" id="sharedPadding"><br><br>

    <label for="paddingTop">Padding Top:</label>
    <input type="text" id="paddingTop"><br><br>

    <label for="paddingRight">Padding Right:</label>
    <input type="text" id="paddingRight"><br><br>

    <label for="paddingBottom">Padding Bottom:</label>
    <input type="text" id="paddingBottom"><br><br>

    <label for="paddingLeft">Padding Left:</label>
    <input type="text" id="paddingLeft"><br><br>

    <button type="button" onclick="resetPadding()">Reset</button>
    <button type="button" onclick="linkPaddings()">Link Together</button>
    <button type="button" onclick="saveChanges()">Save Changes</button>

    <hr>

    <label for="toggleSwitch">Toggle Switch:</label>
    <input type="radio" name="toggleSwitch" value="yes" onclick="toggleSectionVisibility()"> Yes
    <input type="radio" name="toggleSwitch" value="no" onclick="toggleSectionVisibility()"> No

    <div id="additionalSection" style="display: none;">
      <!-- Additional section content goes here -->
      <h3>Additional Section</h3>
      <p>This section is displayed when the "Yes" option is selected.</p>
    </div>
  </div>

  <!-- Add more accordions and options here for other header nav menu settings -->

  <script>
    var accordions = document.getElementsByClassName("accordion");
    for (var i = 0; i < accordions.length; i++) {
      accordions[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var panel = this.nextElementSibling;
        if (panel.style.display === "block") {
          panel.style.display = "none";
        } else {
          panel.style.display = "block";
        }
      });
    }
  </script>
<style>

/* Create four equal columns that floats next to each other */
.hnm-column {
  float: left;
  width: 25%;
  padding: 10px;
  height: 300px; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row-hnm:after {
  content: "";
  display: table;
  clear: both;
}
</style>
<div class="row-hnm">
  <div class="hnm-column" style="background-color:#aaa;">
    <h2>Column 1</h2>
    <p>Some text..</p>
  </div>
  <div class="hnm-column" style="background-color:#bbb;">
    <h2>Column 2</h2>
    <p>Some text..</p>
  </div>
  <div class="hnm-column" style="background-color:#ccc;">
    <h2>Column 3</h2>
    <p>Some text..</p>
  </div>
  <div class="hnm-column" style="background-color:#ddd;">
    <h2>Column 4</h2>
    <p>Some text..</p>
  </div>
</div>



<div class="head-hnm-search-box-tabs">


<button class="tablink" onclick="opendefaultHeaderNavMenuTabs(event, 'NavLayout', this, '#070c4f')" id="headerNavMenuTabsOpen" style="animation: fadeIn 1s ease-in-out 0.33s;animation-fill-mode:both;"><h3 class="tab-title">Design</h3></button>
<button class="tablink" onclick="opendefaultHeaderNavMenuTabs(event, 'NavCSS', this, '#070920')" style="animation: fadeIn 1s ease-in-out 0.35s;animation-fill-mode:both;"><h3 class="tab-title">CSS<div></button>
<button class="tablink" onclick="opendefaultHeaderNavMenuTabs(event, 'NavAdv', this, '#0e8500')" style="animation: fadeIn 1s ease-in-out 0.37s;animation-fill-mode:both;"><h3 class="tab-title">Advanced</div></button>



<div id="NavLayout" class="tabcontent" style="animation: fadeIn 0.1s ease-in-out 0.2s;animation-fill-mode:both;">

<label for="hnmnavmenubc">Nav Menu Background</label>
<?php $this->header_nav_menu_background_color_control  ( 'yourseobook_header_nav_menu_background_color', __( '', 'yourseobook' ), __( '', 'yourseobook' ) ); ?>
  <span class="reset-hnmnavmenu-background-color-button dashicons dashicons-update" role="button"></span>
 <span id="hnmnavmenubc" class="hnmnavmenu-background-color-value"></span>
<hr>
<label for="hnmnavmenuw">Nav Menu Width(px)</label>
<?php $this->hnm_nav_menu_width_control  ( 'yourseobook_header_nav_menu_width', __( '', 'yourseobook' ), __( '', 'yourseobook' ) ); ?>
  <span class="reset-hnmnavmenu-width-size-button dashicons dashicons-update" role="button"></span>
 <span id="hnmnavmenuw" class="hnmnavmenu-width-size-value"></span>

<div class="row">
  <div class="column">
    <hr>
    <label for="hnmnavmenubs">Nav Menu Border Size(px)</label>
    <?php $this->hnm_nav_menu_border_size_control('yourseobook_header_nav_menu_border_size', __( '', 'yourseobook' ), __( '', 'yourseobook' )); ?>
    <span class="reset-hnmnavmenubs-border-size-button dashicons dashicons-update" role="button"></span>
    <span id="hnmnavmenubs" class="hnmnavmenubs-border-size-value"></span>
  </div>

  <div class="column">
    <hr>
    <label for="hnmnavmenubt">Nav Menu Border Type</label>
    <?php $this->hnm_nav_menu_border_type_control('yourseobook_header_nav_menu_border_type', __( '', 'yourseobook' ), __( '', 'yourseobook' )); ?>
    <span class="reset-hnmnavmenubs-border-type-button dashicons dashicons-update" role="button"></span>
    <span id="hnmnavmenubt" class="hnmnavmenubt-border-type-value"></span>
  </div>

  <div class="column">
    <hr>
    <label for="hnmnavmenubc">Nav Menu Border Color</label>
    <?php $this->hnm_nav_menu_border_border_color_control('yourseobook_header_nav_menu_border_color', __( '', 'yourseobook' ), __( '', 'yourseobook' )); ?>
    <span class="reset-hnmnavmenubc-border-color-button dashicons dashicons-update" role="button"></span>
    <span id="hnmnavmenubc" class="hnmnavmenubbc-border-color-value"></span>
  </div>
</div>

<label for="hnmnavmenubr">Nav Menu Border Radius(px)</label>
<?php $this->hnm_nav_menu_border_radius_control  ( 'yourseobook_header_nav_menu_border_radius', __( '', 'yourseobook' ), __( '', 'yourseobook' ) ); ?>
  <span class="reset-hnmnavmenubs-border-radius-button dashicons dashicons-update" role="button"></span>
 <span id="hnmnavmenubr" class="hnmnavmenubr-border-radius-value"></span>

</div>



<div id="NavCSS" class="tabcontent"  style="animation: fadeIn 0.1s ease-in-out 0.22s;animation-fill-mode:both;">
  <h3>Style CSS</h3>

<?php $this->header_nav_menu_background_color_control  ( 'yourseobook_header_nav_menu_background_color', __( '', 'yourseobook' ), __( '', 'yourseobook' ) ); ?>
  <span class="reset-hnmnavmenu-background-color-button dashicons dashicons-update" role="button"></span>
 <span id="hnmnavmenubc" class="hnmnavmenu-background-color-value"></span>

<?php $this->header_nav_menu_links_color_control  ( 'yourseobook_header_nav_menu_links_color', __( '', 'yourseobook' ), __( '', 'yourseobook' ) ); ?>
  <span class="reset-hnmnavmenulc-links-color-button dashicons dashicons-update" role="button"></span>
 <span id="hnmnavmenulc" class="hnmnavmenulc-links-color-value"></span>


</div>



<div id="NavAdv" class="tabcontent" style="animation: fadeIn 0.1s ease-in-out 0.24s;animation-fill-mode:both;">
  <h3>Advanced</h3>




</div>
</div>


<script>
function opendefaultHeaderNavMenuTabs(event, defaultHeaderNavMenuTabNames,elmnt,color) {
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
  document.getElementById(defaultHeaderNavMenuTabNames).style.display = "block";
  elmnt.style.backgroundColor = color;
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("headerNavMenuTabsOpen").click();
</script>

<style>
              @keyframes fadeIn {
                0% {
                  opacity: 0;
                  transform: translateX(100px);
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

#NavLayout {background-color: #070c4f;}
#NavCSS {background-color: #070920;}
#NavAdv {background-color: #0e8500;}
</style>



<script>
jQuery(document).ready(function($) {

    $(document).on('click', '.reset-hnmnavmenu-width-size-button', function(e) {
        e.preventDefault();
        // Reset the height control to its default value
        wp.customize('yourseobook_header_nav_menu_width').set('200');
    });

    wp.customize('yourseobook_header_nav_menu_width', function(value) {
        value.bind(function(newVal) {
            $('.hnmnavmenuw-width-size-value').text(newVal);
        });
    });

    $(document).on('click', '.reset-hnmnavmenubs-border-size-button', function(e) {
        e.preventDefault();
        // Reset the height control to its default value
        wp.customize('yourseobook_header_nav_menu_border_size').set('200');
    });

    wp.customize('yourseobook_header_nav_menu_border_size', function(value) {
        value.bind(function(newVal) {
            $('.hnmnavmenubs-border-size-value').text(newVal);
        });
    });


    $(document).on('click', '.reset-hnmnavmenubr-border-radius-button', function(e) {
        e.preventDefault();
        // Reset the height control to its default value
        wp.customize('yourseobook_header_nav_menu_border_radius').set('0');
    });

    wp.customize('yourseobook_header_nav_menu_border_radius', function(value) {
        value.bind(function(newVal) {
            $('.hnmnavmenubr-border-radius-value').text(newVal);
        });
    });


    $(document).on('click', '.reset-hnmnavmenubt-border-type-button', function(e) {
        e.preventDefault();
        // Reset the height control to its default value
        wp.customize('yourseobook_header_nav_menu_border_type').set('none');
    });

    wp.customize('yourseobook_header_nav_menu_border_type', function(value) {
        value.bind(function(newVal) {
            $('.hnmnavmenubt-border-type-value').text(newVal);
        });
    });


    $(document).on('click', '.reset-hnmnavmenu-background-color-button', function(e) {
        e.preventDefault();
        // Reset the height control to its default value
        wp.customize('yourseobook_header_nav_menu_background_color').set('rgba(255,255,255,1)');
    });

    wp.customize('yourseobook_header_nav_menu_background_color', function(value) {
        value.bind(function(newVal) {
            $('.hnmnavmenubc-background-color-value').text(newVal);
        });
    });



    $(document).on('click', '.reset-hnmnavmenubbc-border-color-button', function(e) {
        e.preventDefault();
        // Reset the height control to its default value
        wp.customize('yourseobook_header_nav_menu_border_color').set('rgba(255,255,255,1)');
    });

    wp.customize('yourseobook_header_nav_menu_border_color', function(value) {
        value.bind(function(newVal) {
            $('.hnmnavmenubbc-border-color-value').text(newVal);
        });
    });


    $(document).on('click', '.reset-hnmnavmenulc-links-color-button', function(e) {
        e.preventDefault();
        // Reset the height control to its default value
        wp.customize('yourseobook_header_nav_menu_links_color').set('rgba(255,255,255,1)');
    });

    wp.customize('yourseobook_header_nav_menu_links_color', function(value) {
        value.bind(function(newVal) {
            $('.hnmnavmenulc-links-color-value').text(newVal);
        });
    });

const headerMenuNavMenuWidthInput = document.getElementById('hnmnavmenu-width-size');
const headerMenuNavMenuWidthValue = document.getElementById('hnmnavmenuw');

// Update the target element with the initial value
headerMenuNavMenuWidthValue.textContent = headerMenuNavMenuWidthInput.value + 'px';

// Listen for the input event on the range input
headerMenuNavMenuWidthInput.addEventListener('input', function() {
  // Update the target element with the current value
  headerMenuNavMenuWidthValue.textContent = headerMenuNavMenuWidthInput.value + 'px';
});

const headerMenuNavMenuBorderRadiusInput = document.getElementById('hnmnavmenubr-border-radius-size');
const headerMenuNavMenuBorderRadiusValue = document.getElementById('hnmnavmenubr');

// Update the target element with the initial value
headerMenuNavMenuBorderRadiusValue.textContent = headerMenuNavMenuBorderRadiusInput.value + 'px';

// Listen for the input event on the range input
headerMenuNavMenuBorderRadiusInput.addEventListener('input', function() {
  // Update the target element with the current value
  headerMenuNavMenuBorderRadiusValue.textContent = headerMenuNavMenuBorderRadiusInput.value + 'px';
});

const headerMenuNavMenuBackgroundColorInput = document.getElementById('hnmnavmenubc-background-color-setings');
const headerMenuNavMenuBackgroundColorValue = document.getElementById('hnmnavmenubc');

// Update the target element with the initial value
headerMenuNavMenuBackgroundColorValue.textContent = headerMenuNavMenuBackgroundColorInput.value;

// Listen for the input event on the range input
headerMenuNavMenuBackgroundColorInput.addEventListener('input', function() {
  // Update the target element with the current value
  headerMenuNavMenuBackgroundColorValue.textContent = headerMenuNavMenuBackgroundColorInput.value;
});


const headerMenuNavMenuLinksColorInput = document.getElementById('hnmnavmenulc-links-color-setings');
const headerMenuNavMenuLinksColorValue = document.getElementById('hnmnavmenulc');

// Update the target element with the initial value
headerMenuNavMenuLinksColorValue.textContent = headerMenuNavMenuLinksColorInput.value;

// Listen for the input event on the range input
headerMenuNavMenuLinksColorInput.addEventListener('input', function() {
  // Update the target element with the current value
  headerMenuNavMenuLinksColorValue      .textContent = headerMenuNavMenuLinksColorInput.value;
});


const headerMenuNavMenuBorderColorInput = document.getElementById('hnmnavmenubbc-border-color-setings');
const headerMenuNavMenuBorderColorValue = document.getElementById('hnmnavmenubbc');

// Update the target element with the initial value
headerMenuNavMenuBorderColorValue.textContent = headerMenuNavMenuBorderColorInput.value;

// Listen for the input event on the range input
headerMenuNavMenuBorderColorInput.addEventListener('input', function() {
  // Update the target element with the current value
  headerMenuNavMenuBorderColorValue.textContent = headerMenuNavMenuBorderColorInput.value;
});


const headerMenuNavMenuBorderSizeInput = document.getElementById('hnmnavmenubs-border-size');
const headerMenuNavMenuBorderSizeValue = document.getElementById('hnmnavmenubs');

// Update the target element with the initial value
headerMenuNavMenuBorderSizeValue.textContent = headerMenuNavMenuBorderSizeInput.value + 'px';

// Listen for the input event on the range input
headerMenuNavMenuBorderSizeInput.addEventListener('input', function() {
  // Update the target element with the current value
  headerMenuNavMenuBorderSizeValue.textContent = headerMenuNavMenuBorderSizeInput.value + 'px';
});


const headerMenuNavMenuBorderTypeInput = document.getElementById('hnmnavmenubt-border-type-name');
const headerMenuNavMenuBorderTypeValue = document.getElementById('hnmnavmenubt');

// Update the target element with the initial value
headerMenuNavMenuBorderTypeValue.textContent = headerMenuNavMenuBorderTypeInput.value;

// Listen for the input event on the range input
headerMenuNavMenuBorderTypeInput.addEventListener('input', function() {
  // Update the target element with the current value
  headerMenuNavMenuBorderTypeValue.textContent = headerMenuNavMenuBorderTypeInput.value;
});


});
</script>
<?php
}

    public function hnm_nav_menu_width_control( $setting, $label, $description ) {
        $value = get_theme_mod( $setting );
        ?>

<input type="range" id="hnmnavmenu-width-size" min="370" max="1200" step="1" value="600" data-customize-setting-link="<?php echo esc_attr( $setting ); ?>" />

        <?php
    }

    public function header_nav_menu_background_color_control( $setting, $label, $description ) {
        $value = get_theme_mod( $setting );
        ?>

<input type="color" id="hnmnavmenubc-background-color-setings"  data-customize-setting-link="<?php echo esc_attr( $setting ); ?>" />

        <?php
    }

    public function header_nav_menu_links_color_control( $setting, $label, $description ) {
        $value = get_theme_mod( $setting );
        ?>

<input type="color" id="hnmnavmenulc-links-color-setings"  data-customize-setting-link="<?php echo esc_attr( $setting ); ?>" />

        <?php
    }

    public function hnm_nav_menu_border_border_color_control( $setting, $label, $description ) {
        $value = get_theme_mod( $setting );
        ?>

<input type="color" id="hnmnavmenubbc-border-color-setings"  data-customize-setting-link="<?php echo esc_attr( $setting ); ?>" />

        <?php
    }

    public function hnm_nav_menu_border_size_control( $setting, $label, $description ) {
        $value = get_theme_mod( $setting );
        ?>

<input type="range" id="hnmnavmenubs-border-size" min="0" max="5" step="0.1" value="0" data-customize-setting-link="<?php echo esc_attr( $setting ); ?>" />

        <?php
    }


    public function hnm_nav_menu_border_radius_control( $setting, $label, $description ) {
        $value = get_theme_mod( $setting );
        ?>

<input type="range" id="hnmnavmenubr-border-radius-size" min="0" max="50" step="0.1" value="0" data-customize-setting-link="<?php echo esc_attr( $setting ); ?>" />

        <?php
    }




    public function hnm_nav_menu_border_type_control( $setting, $label, $description ) {
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


<select name="hnmnavmenubt-border-type-name" type="choice"  id="hnmnavmenubt-border-type-name" data-customize-setting-link="<?php echo esc_attr( $setting ); ?>" value="<?php echo esc_attr( $value ); ?>">>
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

}
}