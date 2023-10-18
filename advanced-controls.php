<?php
/**
 * Yourseobook Customizer Custom Controls
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



class Yourseobook_Tabbed_Custom_Control extends WP_Customize_Control {
    public $type = 'tabbed_menu';

    public function render_content() {
        ?>
        <div class="yourseobook-tabbed-menu">
<h2 style="font-size: 16px;text-align: center;border-bottom: 2px solid #0c0fc4;padding: 0px 0px 10px 0px;margin: 0px 0px 20px 0px;box-shadow: 0px 10px 10px -10px #000;color: #0a0fb6;">Main Header Navigation Styles Settings</h2>
<div style="margin:15px 0px 15px 0px;padding:15px 10px 15px 10px;border:1px solid #000;">
<details>
<summary>
Header Menu Navigation Style Settings
</summary>
<p>The Header Menu Navigation Style Settings provide options to customize the appearance and layout of the header menu on your website.</p>
<h3>Here's a brief glossary of the style CSS attributes related to these settings:</h3>
<ul>
<li>Header Menu Width: Specifies the width of the header menu element. It determines how much horizontal space the menu occupies.</li>
<li>Header Menu Height: Defines the height of the header menu element. It determines its vertical size.</li>

</ul>
</details>

<details>
<summary>
Setup the Header Navigation Styles
</summary>
<p style="font-size: 14px;">By adjusting these style settings, you can customize the dimensions, spacing, positioning, display, shadows, and background of the header menu to match your website's design and branding requirements.</p>

</details>
</div>


<script>
function filterStyles() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}


jQuery(document).ready(function($) {
    // Reset margin control
    $(document).on('click', '.reset-margin-button', function(e) {
        e.preventDefault();
        // Reset the margin control to its default value
        wp.customize('yourseobook_header_main_navigation_master_menu_margin').set('');
    });
    // Reset padding control
    $(document).on('click', '.reset-padding-button', function(e) {
        e.preventDefault();
        // Reset the padding control to its default value
        wp.customize('yourseobook_header_main_navigation_master_menu_padding').set('');
    });
    // Reset Width control
    $(document).on('click', '.reset-width-button', function(e) {
        e.preventDefault();
        // Reset the width control to its default value
        wp.customize('yourseobook_header_main_navigation_master_menu_width').set('');
    });
    // Reset Height control
    // Reset height control and update the height-value span
    $(document).on('click', '.reset-height-button', function(e) {
        e.preventDefault();
        // Reset the height control to its default value
        wp.customize('yourseobook_header_main_navigation_master_menu_height').set('');
    });

// Display Values on Range Slide

 // Update margin value
 wp.customize('yourseobook_header_main_navigation_master_menu_margin', function(value) {
     value.bind(function(newVal) {
         $('.margin-value').text(newVal);
     });
 });
 // Update padding value
 wp.customize('yourseobook_header_main_navigation_master_menu_padding', function(value) {
     value.bind(function(newVal) {
         $('.padding-value').text(newVal);
     });
 });
 // Update width value
 wp.customize('yourseobook_header_main_navigation_master_menu_width', function(value) {
     value.bind(function(newVal) {
         $('.width-value').text(newVal);
     });
 });
 // Update height value
    // Bind height control value and update the height-value span

    wp.customize('yourseobook_header_main_navigation_master_menu_height', function(value) {
        value.bind(function(newVal) {
            $('.height-value').text(newVal);
        });
    });


});


const headerWidthInput = document.getElementById('headerheight');
const headerWidthValue = document.getElementById('hhve');

// Update the target element with the initial value
headerWidthValue.textContent = headerWidthInput.value + 'px';

// Listen for the input event on the range input
headerWidthInput.addEventListener('input', function() {
  // Update the target element with the current value
  headerWidthValue.textContent = headerWidthInput.value + 'px';
});
const headerMarginInput = document.getElementById('headermargin');
const headerMarginValue = document.getElementById('hmve');

// Update the target element with the initial value
headerMarginValue.textContent = headerMarginInput.value + 'px';

// Listen for the input event on the range input
headerMarginInput.addEventListener('input', function() {
  // Update the target element with the current value
  headerMarginValue.textContent = headerMarginInput.value + 'px';
});


function clearInput(event) {
    event.preventDefault();
    document.getElementById('myInput').value = ''; // Clear the input field
    filterStyles(); // Call the filterStyles function to update the filtered results
}



</script>
<style>
div#settings-filter {
    display: flex;
    flex-direction: row;
    flex-wrap: nowrap;
    column-gap: 5px;
}
button#clearButton {
    background: #0c0fc4;
    border: none;
    border-radius: 8px;
    text-transform: uppercase;
    font-weight: 500;
    color: #fff;
    font-size: 12px;
    padding: 0px 20px;
    margin: 5px;
    line-height: 0;
    max-height: 30px;
}
div#settings-filter input#myInput {
    max-height: 30px;
    border: 1px solid #0c0fc4;
    background: #ffe102;
    color: #000 !important;
    font-size: 10px;
    margin: 6px auto;
    border-radius: 8px;
    padding: 5px;
    max-width: 85%;
}
div#settings-filter input#myInput {
    height: 40px;
    border: 1px solid #0c0fc4;
    background: #ffe102;
    color: #000 !important;
    font-size: 12px;
}
.header-nav-content {
    max-width: 100%;
    padding: 5px 0px 5px 0px;
    background: #00000008;
    color: #0c0fc4;
    font-size: 14px;
    margin: 5px 0px 5px 0px;
    display: flex;
    flex-wrap: nowrap;
    justify-content: space-around;
    align-items: center;
    column-gap: 10px;
    text-align: center;
    flex-direction: row;
    border: 1px solid #4002ff47;
}
.header-nav-tab {
    width: 100%;
    padding: 5px 0px 5px 0px;
    color: #3f01fb;
    font-size: 14px;
    display: flex;
    flex-direction: row;
    flex-wrap: nowrap;
    justify-content: center;
    align-items: center;
}
.column-title {
    float: left;
    width: 20%;
    font-size: 12px;
    text-align: left;
    padding: 5px 15px 5px 15px;
}
.column-settings {
    float: left;
    width: 75%;
    font-size: 12px;
    padding: 0px;
    text-align: left;
    margin: 0px auto !IMPORTANT;
    display: block;
}
.column-settings label {
    float: left;
    width: 90%;
    display: flex;
    column-gap: 10px;
    flex-direction: row;
    flex-wrap: nowrap;
    align-items: center;
    justify-content: flex-start;
}
.column-help {
    float: left;
    min-width: 25%;
    font-size: 12px;
    padding: 5px 5px 0px 5px;
    text-align: left;
    display: flex;
    justify-content: space-evenly;
    flex-direction: row;
    align-items: center;
    column-gap: 10px;
}
/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

 /* Responsive layout - when the screen is less than 600px wide, make the three columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
  }
}
span.dashicons.dashicons-image-rotate {
    background: none !important;
    border: none !important;
    font-size: 14px;
}
button.reset-height-button {
    background: none;
    border: none;
    font-size: 12px !IMPORTANT;
    height: 20px;
    width: 20px;
    color: #000;
    margin: 0px 0px;
}
.column-settings input[type="range"] {
    height: 3px;
    width: 100%;
    padding: 2px;
    line-height: 9px;
    opacity: .8;
}
span.height-value, span.margin-value {
    background: #000;
    font-size: 12px;
    margin: 0px 3px;
    padding: 0px 6px;
    color: #fff;
    min-width: 40%;
    text-align: center;
}
</style>


            <div class="yourseobook-tabbed-menu-content">
                <div class="yourseobook-tabbed-menu-pane active" data-tab="header">
                    <?php $this->render_header_content(); ?>
                </div>
                <div class="yourseobook-tabbed-menu-pane" data-tab="style">
                    <?php $this->render_style_content(); ?>
                </div>
            </div>
        </div>


        <?php
    }

    public function render_header_content() {

?>

 





<?php }

public function render_style_content() {
?>

<div id="settings-filter">
<button id="clearButton" onclick="clearInput(event)">Clear</button>

<input type="text" id="myInput" onkeyup="filterStyles()" placeholder="Search for Header Menu Style Settings.." title="Search for Header Menu Style Settings" class="maybe-sticky is-in-view is-sticky"  list="styleOptions"/>
<datalist id="styleOptions">
    <option value="Nav Menu Background"></option>
    <option value="Nav Menu Width"></option>
    <option value="Nav Menu Height"></option>
    <option value="Nav Menu Margin"></option>
    <option value="Nav Menu Padding"></option>
</datalist>
</div>

<table id="myTable" class="header-nav-tab">

<tbody class="row">
  <tr class="header-nav-tab">
    <th class="column-title">HTML</th>
    <th class="column-settings">CSS Settings</th>
    <th class="column-help">FAQ</th>
  </tr>

  <tr class="header-nav-content">
    <td class="column-title">Nav Menu Background</td>
    <td class="column-settings">
    <?php $this->color_control( 'yourseobook_header_main_navigation_master_menu_background_color', __( '', 'yourseobook' ), __( '', 'yourseobook' ) ); ?>
   </td>
    <td class="column-help">
        <button class="reset-background-button"><span class="dashicons dashicons-image-rotate"></span></button>

</span></td>

  </tr>
   <tr class="header-nav-content">
  <td class="column-title">Nav Menu Width</td>
    <td class="column-settings">
<?php $this->width_control  ( 'yourseobook_header_main_navigation_master_menu_width', __( '', 'yourseobook' ), __( '', 'yourseobook' ) ); ?>
   </td>
   <td class="column-help">
        <button class="reset-width-button"><span class="dashicons dashicons-image-rotate"></span></button>
<span class="width-value"></span>
</td>

  </tr>


<tr class="header-nav-content">

<td class="column-title">Nav Menu Height</td>
<td class="column-settings">
<?php $this->height_control  ( 'yourseobook_header_main_navigation_master_menu_height', __( '', 'yourseobook' ), __( '', 'yourseobook' ) ); ?>
</td>
    <td class="column-help">
        <button class="reset-height-button"><span class="dashicons dashicons-image-rotate"></span></button>
        <span id="hhve" class="height-value"></span>
    </td>

</tr>

 <tr class="header-nav-content">
<td class="column-title">Nav Menu Margin</td>
<td class="column-settings">
<?php $this->margin_control  ( 'yourseobook_header_main_navigation_master_menu_margin', __( '', 'yourseobook' ), __( '', 'yourseobook' ) ); ?>
</td>
<td class="column-help">
        <button class="reset-margin-button"><span class="dashicons dashicons-image-rotate"></span></button>
 <span id="hmve" class="margin-value"></span>
</td>
</tr>

<tr class="header-nav-content">
<td class="column-title">Nav Menu Padding</td>
<td class="column-settings">
<?php $this->padding_control  ( 'yourseobook_header_main_navigation_master_menu_padding', __( '', 'yourseobook' ), __( '', 'yourseobook' ) ); ?>
</td>
<td class="column-help">
        <button class="reset-padding-button"><span class="dashicons dashicons-image-rotate"></span></button>
 <span id="hhve" class="padding-value"></span></td>
</tr>

   <tr class="header-nav-content">
   <td class="column-title">Margin</td>
     <td class="column-settings">Sweden</td>
    <td class="column-help"><span class="dashicons dashicons-editor-help"></span></td>
  </tr>

   <tr class="header-nav-content">
   <td class="column-title">Padding</td>
     <td class="column-settings">Sweden</td>
    <td class="column-help"><span class="dashicons dashicons-editor-help"></span></td>
  </tr>

   <tr class="header-nav-content">
   <td class="column-title">Border</td>
     <td class="column-settings">Sweden</td>
    <td class="column-help"><span class="dashicons dashicons-editor-help"></span></td>
  </tr>

   <tr class="header-nav-content">
   <td class="column-title">Shadow</td>
     <td class="column-settings">Sweden</td>
    <td class="column-help"><span class="dashicons dashicons-editor-help"></span></td>
  </tr>

   <tr class="header-nav-content">
   <td class="column-title">Position</td>
     <td class="column-settings">Sweden</td>
    <td class="column-help"><span class="dashicons dashicons-editor-help"></span></td>
  </tr>

   <tr class="header-nav-content">
   <td class="column-title">Display</td>
     <td class="column-settings">Sweden</td>
    <td class="column-help"><span class="dashicons dashicons-editor-help"></span></td>
  </tr>

 
</tbody>
</table>



<? }


    public function color_control( $setting, $label, $description ) {
        $value = get_theme_mod( $setting );
        ?>

        <label>
            <span class="customize-control-title"><?php echo esc_html( $label ); ?></span>
            <input type="color" data-customize-setting-link="<?php echo esc_attr( $setting ); ?>" value="<?php echo esc_attr( $value ); ?>">
            <span class="description"><?php echo esc_html( $description ); ?></span>
        </label>
        <?php
    }
    public function width_control( $setting, $label, $description ) {
        $value = get_theme_mod( $setting );
        ?>

        <label>
            <span class="customize-control-title"><?php echo esc_html( $label ); ?></span>
            <input type="range" data-customize-setting-link="<?php echo esc_attr( $setting ); ?>" value="<?php echo esc_attr( $value ); ?>">
            <span class="description"><?php echo esc_html( $description ); ?></span>
        </label>
        <?php
    }
    public function height_control( $setting, $label, $description ) {
        $value = get_theme_mod( $setting );
        ?>

<input  class="range-slider" type="range" id="headerheight" min="40" max="120" step="1" value="60" data-customize-setting-link="<?php echo esc_attr( $setting ); ?>" />


                   <?php
    }
    public function margin_control( $setting, $label, $description ) {
        $value = get_theme_mod( $setting );
        ?>


<input  class="range-slider" type="range" id="headermargin" min="0" max="120" step="1" value="0" data-customize-setting-link="<?php echo esc_attr( $setting ); ?>" />

        <?php
    }
    public function padding_control( $setting, $label, $description ) {
        $value = get_theme_mod( $setting );
        ?>

        <label>
            <span class="customize-control-title"><?php echo esc_html( $label ); ?></span>
            <input type="range" data-customize-setting-link="<?php echo esc_attr( $setting ); ?>" value="<?php echo esc_attr( $value ); ?>">
            <span class="description"><?php echo esc_html( $description ); ?></span>
        </label>
        <?php
    }


}



}
