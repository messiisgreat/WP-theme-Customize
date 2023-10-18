<?php
/**
 * Yourseobook Customizer Custom Controls _  Master Styles Control
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



class Yourseobook_Master_Styles_Custom_Control extends WP_Customize_Control {
    public $type = 'tabbed_menu';

    public function render_content() {
        ?>
        <div class="yourseobook-tabbed-menu">
<h2 style="font-size: 13px;text-align: center;border-bottom: 2px solid #0c0fc4;padding: 0px 0px 10px 0px;margin: 0px 0px 20px 0px;box-shadow: 0px 10px 10px -10px #000;color: #0a0fb6;">Land Above The Fold Styles Settings</h2>
<div style="margin:15px 0px 15px 0px;padding:15px 10px 15px 10px;border:1px solid #000;">
<hr>
<details>
<summary>
Above The Fold Section Styles
</summary>

</details>
<hr>
<details>
<summary>
Above The Fold Heading H1 Style
</summary>
<hr>

</details>
<hr>
<details>
<summary>
Above The Fold Subheading H2 Style
</summary>

</details>
<hr>

<details>
<summary>
Above The Fold Content Area Style
</summary>

</details>
<hr>


<details>
<summary>
Landing Above The Fold Style Settings
</summary>
<p>The Above The Fold Navigation Style Settings provide options to customize the appearance and layout of the Visible Land Screen Section on your website.</p>
<h3>Here's a brief glossary of the style CSS attributes related to these settings:</h3>
<ul>
<li>Above The Fold Width: Specifies the width of the above the fold element. It determines how much horizontal space the menu occupies.</li>
<li>Above The Fold Height: Defines the height of the above the fold element. It determines its vertical size.</li>

</ul>
</details>
<hr>
<details>
<summary>
Setup the Above The Fold Styles
</summary>
<p style="font-size: 14px;">By adjusting these style settings, you can customize the dimensions, spacing, positioning, display, shadows, and background of the above the fold section to match your website's design and branding requirements.</p>




</details>
<hr>
</div>


<script>
function filterAboveStyles() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myAtfInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myAtfTable");
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


/*
jQuery(document).ready(function($) {
    // Reset margin control
    $(document).on('click', '.atfres-mar-btn', function(e) {
        e.preventDefault();
        // Reset the margin control to its default value
        wp.customize('yourseobook_main_land_above_the_fold_margin').set('');
    });
// yourseobook_main_land_above_the_fold_margin
    // Reset padding control
    $(document).on('click', '.atfres-pad-btn', function(e) {
        e.preventDefault();
        // Reset the padding control to its default value
        wp.customize('yourseobook_main_land_above_the_fold_padding').set('');
    });
    // Reset Width control
    $(document).on('click', '.atfres-width-btn', function(e) {
        e.preventDefault();
        // Reset the width control to its default value
        wp.customize('yourseobook_main_land_above_the_fold_width').set('');
    });
    // Reset Height control
    // Reset height control and update the height-value span
    $(document).on('click', '.atfres-height-btn', function(e) {
        e.preventDefault();
        // Reset the height control to its default value
        wp.customize('yourseobook_main_land_above_the_fold_height').set('');
    });
    $(document).on('click', '.atfres-fs-btn', function(e) {
        e.preventDefault();
        // Reset the height control to its default value
        wp.customize('yourseobook_main_land_above_the_fold_font_size').set('');
    });

// Display Values on Range Slide
 wp.customize('yourseobook_main_land_above_the_fold_font_size', function(value) {
     value.bind(function(newVal) {
         $('.fs-value').text(newVal);
     });
 });
 // Update margin value
 wp.customize('yourseobook_main_land_above_the_fold_margin', function(value) {
     value.bind(function(newVal) {
         $('.margin-value').text(newVal);
     });
 });
 // Update padding value
 wp.customize('yourseobook_main_land_above_the_fold_margin', function(value) {
     value.bind(function(newVal) {
         $('.padding-value').text(newVal);
     });
 });
 // Update width value
 wp.customize('yourseobook_main_land_above_the_fold_margin', function(value) {
     value.bind(function(newVal) {
         $('.width-value').text(newVal);
     });
 });
 // Update height value
    // Bind height control value and update the height-value span

    wp.customize('yourseobook_main_land_above_the_fold_margin', function(value) {
        value.bind(function(newVal) {
            $('.height-value').text(newVal);
        });
    });


});
*/

const aboveTheFoldWidthInput = document.getElementById('aboveTheFoldWidth');
const aboveTheFoldWidthValue = document.getElementById('atfhve');

// Update the target element with the initial value
aboveTheFoldWidthValue.textContent = aboveTheFoldWidthInput.value + 'px';

// Listen for the input event on the range input
aboveTheFoldWidthInput.addEventListener('input', function() {
  // Update the target element with the current value
  aboveTheFoldWidthValue.textContent = aboveTheFoldWidthInput.value + 'px';
});



function clearAtfInput(event) {
    event.preventDefault();
    document.getElementById('myAtfInput').value = ''; // Clear the input field
    filterAboveStyles(); // Call the filterStyles function to update the filtered results
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

 

<div id="settings-filter">
<button id="clearButton" onclick="clearAtfInput(event)">Clear</button>

<input type="text" id="myAtfInput" onkeyup="filterAboveStyles()" placeholder="Search for Above The Fold Style Settings.." title="Search for Above The Fold Style Settings" class=""  list="styleAtfOptions"/>
<datalist id="styleAtfOptions">
    <option value="Above The Fold Background"></option>
    <option value="Above The Fold Font Size"></option>
    <option value="Above The Fold Line Height"></option>
    <option value="Above The Fold Text Transform"></option>
    <option value="Above The Fold Text Color"></option>
    <option value="Above The Fold Width"></option>
    <option value="Above The Fold Height"></option>
    <option value="Above The Fold Margin"></option>
    <option value="Above The Fold Padding"></option>
    <option value="Above The Fold Position"></option>
    <option value="Above The Fold Display"></option>
    <option value="Above The Fold Layout"></option>
    <option value="Above The Fold Opacity"></option>
    <option value="Above The Fold Animations"></option>
    <option value="Above The Fold Boxes"></option>
    <option value="Above The Fold Buttons"></option>
    <option value="Above The Fold Headings H1/H2"></option>
    <option value="Above The Fold Text Editor"></option>
    <option value="Above The Fold Border Settings"></option>
    <option value="Above The Fold Shadow Settings"></option>
</datalist>
</div>



<?php }

public function render_style_content() {
?>


<table id="myAtfTable" class="header-nav-tab">

<tbody class="row">
  <tr class="header-nav-tab">
    <th class="column-title">HTML</th>
    <th class="column-settings">CSS Settings</th>
    <th class="column-help">FAQ</th>
  </tr>

  <tr class="header-nav-content">
    <td class="column-title">Background</td>
    <td class="column-settings">
    <?php $this->bckgr_color_control( 'yourseobook_main_land_above_the_fold_background_color', __( '', 'yourseobook' ), __( '', 'yourseobook' ) ); ?>
   </td>
    <td class="column-help">
        <button class="atfres-bckgr-btn"><span class="dashicons dashicons-image-rotate"></span></button>
      <span id="atf-bckgr" class="bckgr-value"></span>
</td>

  </tr>


   <tr class="header-nav-content">
  <td class="column-title">Text Color</td>
    <td class="column-settings">
<?php $this->txt_color_control  ( 'yourseobook_main_land_above_the_fold_text_color', __( '', 'yourseobook' ), __( '', 'yourseobook' ) ); ?>
   </td>
   <td class="column-help">
        <button class="atfres-txtcol-btn"><span class="dashicons dashicons-image-rotate"></span></button>
      <span id="txtcv" class="txt-color-value"></span>

</td>

  </tr>

   <tr class="header-nav-content">
  <td style="width:100%;">Heading H1</td>
    <td style="width:100%;">
<?php $this->heading_h1_title_control  ( 'yourseobook_main_land_above_the_fold_heading_h1_title_text_area', __( '', 'yourseobook' ), __( '', 'yourseobook' ) ); ?>

   </td>
   <td style="width:100%;">
        <button class="atfres-h1-title-btn"><span class="dashicons dashicons-image-rotate"></span></button>
      <span id="txtheading-title" class="txt-h1-title-value"></span>

</td>

  </tr>



   <tr class="header-nav-content">
  <td class="column-title">Font Family</td>
    <td class="column-settings">
<?php $this->atf_font_family_control  ( 'yourseobook_main_land_above_the_fold_txt_font_family', __( '', 'yourseobook' ), __( '', 'yourseobook' ) ); ?>
   </td>
   <td class="column-help">
        <button class="atfres-fontfam-btn"><span class="dashicons dashicons-image-rotate"></span></button>
      <span id="txtfontfam" class="txt-font-fam-value"></span>

</td>

  </tr>


<tr class="header-nav-content">

<td class="column-title">Font Size</td>
<td class="column-settings">
<?php $this->font_size_control  ( 'yourseobook_main_land_above_the_fold_font_size', __( '', 'yourseobook' ), __( '', 'yourseobook' ) ); ?>
</td>
    <td class="column-help">
        <button class="atfres-fs-btn"><span class="dashicons dashicons-image-rotate"></span></button>
        <span id="atf-fs" class="fs-value"></span>
    </td>

</tr>

 <tr class="header-nav-content">
<td class="column-title">Line Height</td>
<td class="column-settings">
<?php $this->atf_lh_control  ( 'yourseobook_main_land_above_the_fold_txt_lh', __( '', 'yourseobook' ), __( '', 'yourseobook' ) ); ?>
</td>
<td class="column-help">
        <button class="atfres-lh-btn"><span class="dashicons dashicons-image-rotate"></span></button>
 <span id="atf-lh" class="lh-value"></span>
</td>
</tr>

<tr class="header-nav-content">
<td class="column-title">Font Weight</td>
<td class="column-settings">
<?php $this->atf_fw_control  ( 'yourseobook_main_land_above_the_fold_txt_fw', __( '', 'yourseobook' ), __( '', 'yourseobook' ) ); ?>
</td>
<td class="column-help">
        <button class="atfres-fw-btn"><span class="dashicons dashicons-image-rotate"></span></button>
 <span id="atf-fw" class="fw-value"></span></td>
</tr>


<tr class="header-nav-content">
<td class="column-title">Text Transform</td>
<td class="column-settings">
<?php $this->atf_txt_trans_control  ( 'yourseobook_main_land_above_the_fold_txt_trans', __( '', 'yourseobook' ), __( '', 'yourseobook' ) ); ?>
</td>
<td class="column-help">
        <button class="atfres-trans-btn"><span class="dashicons dashicons-image-rotate"></span></button>
 <span id="atf-trans" class="trans-value"></span></td>
</tr>

<tr class="header-nav-content">
<td class="column-title">Text Alignment</td>
<td class="column-settings">
<?php $this->atf_txt_align_control  ( 'yourseobook_main_land_above_the_fold_txt_align', __( '', 'yourseobook' ), __( '', 'yourseobook' ) ); ?>
</td>
<td class="column-help">
        <button class="atfres-align-btn"><span class="dashicons dashicons-image-rotate"></span></button>
 <span id="atf-align" class="align-value"></span></td>
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





    public function bckgr_color_control( $setting, $label, $description ) {
        $value = get_theme_mod( $setting );
        ?>

        <label>
            <span class="customize-control-title"><?php echo esc_html( $label ); ?></span>
            <input type="color" data-customize-setting-link="<?php echo esc_attr( $setting ); ?>" value="<?php echo esc_attr( $value ); ?>">
            <span class="description"><?php echo esc_html( $description ); ?></span>
        </label>
        <?php
    }


    public function txt_color_control( $setting, $label, $description ) {
        $value = get_theme_mod( $setting );
        ?>

        <label>
            <span class="customize-control-title"><?php echo esc_html( $label ); ?></span>
            <input type="color" data-customize-setting-link="<?php echo esc_attr( $setting ); ?>" value="<?php echo esc_attr( $value ); ?>">
            <span class="description"><?php echo esc_html( $description ); ?></span>
        </label>
        <?php
    }

    public function heading_h1_title_control( $setting, $label, $description ) {
        $value = get_theme_mod( $setting );
        ?>

        <label>
            <span class="customize-control-title"><?php echo esc_html( $label ); ?></span>
            <input type="text" data-customize-setting-link="<?php echo esc_attr( $setting ); ?>" value="<?php echo esc_attr( $value ); ?>">
            <span class="description"><?php echo esc_html( $description ); ?></span>
        </label>
        <?php
    }


    public function font_size_control( $setting, $label, $description ) {
        $value = get_theme_mod( $setting );
        ?>

<input  class="range-slider" type="range" id="textfontsize" min="12" max="90" step="1" value="14" data-customize-setting-link="<?php echo esc_attr( $setting ); ?>" />


                   <?php
    }
    public function atf_lh_control( $setting, $label, $description ) {
        $value = get_theme_mod( $setting );
        ?>


<input  class="range-slider" type="range" id="lineheight" min="0" max="40" step="0.5" value="0" data-customize-setting-link="<?php echo esc_attr( $setting ); ?>" />

        <?php
    }
    public function atf_fw_control( $setting, $label, $description ) {
        $value = get_theme_mod( $setting );
        ?>

        <label>
            <span class="customize-control-title"><?php echo esc_html( $label ); ?></span>
            
<select name="choice" type="choice"  id="atf-font-weight" data-customize-setting-link="<?php echo esc_attr( $setting ); ?>" value="<?php echo esc_attr( $value ); ?>">>
    <option value="100">100</option>
    <option value="200">200</option>
    <option value="200">300</option>
    <option value="200">400</option>
    <option value="200">500</option>
    <option value="200">600</option>
    <option value="200">700</option>
    <option value="200">800</option>
    <option value="200">900</option>
</datalist>

            <span class="description"><?php echo esc_html( $description ); ?></span>
        </label>
        <?php
    }
    public function atf_font_family_control( $setting, $label, $description ) {
        $value = get_theme_mod( $setting );
        ?>

        <label>
            <span class="customize-control-title"><?php echo esc_html( $label ); ?></span>
            <label for="font-family-select-choice">Select</label>
<select name="font-family-select-choice" type="choice"  id="atf-font-family" data-customize-setting-link="<?php echo esc_attr( $setting ); ?>" value="<?php echo esc_attr( $value ); ?>">>
    <optgroup label="Serif">
        <option>Lato</option>
        <option>Roboto</option>
        <option>Raleway</option>
        <option>Poppins</option>
        <option>Oswald</option>
        <option>Open Sans</option>
        <option>Noto Sans</option>
    </optgroup>

</select>


            <span class="description"><?php echo esc_html( $description ); ?></span>
        </label>
<!--

font-family: 'Lato', sans-serif;
font-family: 'Noto Sans', sans-serif;
font-family: 'Open Sans', sans-serif;
font-family: 'Oswald', sans-serif;
font-family: 'Poppins', sans-serif;
font-family: 'Raleway', sans-serif;
font-family: 'Roboto', sans-serif;

-->
        <?php
    }


    public function atf_txt_trans_control( $setting, $label, $description ) {
        $value = get_theme_mod( $setting );
        ?>

        <label>
            <span class="customize-control-title"><?php echo esc_html( $label ); ?></span>
            
<select name="choice" type="choice" id="atf-txt-transform" data-customize-setting-link="<?php echo esc_attr( $setting ); ?>" value="<?php echo esc_attr( $value ); ?>">>
    <option value="lowercase">lowercase</option>
    <option value="capitalise">Capitalise</option>
    <option value="uppercase">Uppercase</option>
    <option value="initial">initial</option>
    <option value="Unset">Unset</option>

</datalist>

            <span class="description"><?php echo esc_html( $description ); ?></span>
        </label>
        <?php
    }


    public function atf_txt_align_control( $setting, $label, $description ) {
        $value = get_theme_mod( $setting );
        ?>

        <label>
            <span class="customize-control-title"><?php echo esc_html( $label ); ?></span>
            
<select name="choice" type="choice" id="atf-txt-align" data-customize-setting-link="<?php echo esc_attr( $setting ); ?>" value="<?php echo esc_attr( $value ); ?>">>
    <option value="start">start</option>
    <option value="end">end</option>
    <option value="left">left</option>
    <option value="right">right</option>
    <option value="center">center</option>
    <option value="justify">justify</option>
    <option value="justify-all">justify-all</option>
    <option value="match-parent">match-parent</option>
    <option value=""."">"."</option>
    <option value=""." center">"." center</option>
    <option value="-moz-center">-moz-center</option>
    <option value="-webkit-center">-webkit-center</option>
    <option value="inherit">inherit</option>
    <option value="initial">initial</option>
    <option value="revert">revert</option>
    <option value="initial">initial</option>
    <option value="revert-layer">revert-layer</option>
    <option value="unset">unset</option>
</datalist>

            <span class="description"><?php echo esc_html( $description ); ?></span>
        </label>
        <?php
    }


}



}
