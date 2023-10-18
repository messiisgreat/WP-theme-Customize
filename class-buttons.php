<?php
/**
 *  Yourseobook Header CTA Button Custom Class Control
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



class Yourseobook_Header_CTA_Button_Control extends WP_Customize_Control {
public $type = 'tabbed_menu';

public function render_content()
{

/*

    $header_cta_button_background_color = get_theme_mod( 'yourseobook_header_cta_button_background_color' );
    $header_cta_button_font_size = get_theme_mod( 'yourseobook_header_cta_button_font_size' );
    $header_cta_button_width = get_theme_mod( 'yourseobook_header_cta_button_width' );
    $header_cta_button_width = get_theme_mod( 'yourseobook_header_cta_button_height; );
    $header_cta_button_padding = get_theme_mod( 'yourseobook_header_cta_button_padding' );
    $header_cta_button_margin = get_theme_mod( 'yourseobook_header_cta_button_margin' );
    $header_cta_button_border_radius = get_theme_mod( 'yourseobook_header_cta_button_border_radius' );
    $header_cta_button_border_size = get_theme_mod( 'yourseobook_header_cta_button_border_size' );
    $header_cta_button_border_type = get_theme_mod( 'yourseobook_header_cta_button_border_type' );
    $header_cta_button_border_color = get_theme_mod( 'yourseobook_header_cta_button_border_color' );
    $header_cta_button_box_shadow = get_theme_mod( 'yourseobook_header_cta_button_box_shadow' );
    $header_cta_button_text_color = get_theme_mod( 'yourseobook_header_cta_button_text_color' );
   $wp_customize->add_control( 'yourseobook_header_main_navigation_master_menu_width',
     array(

*/
?>


<div class="head-cta-btn-tabs">
<button class="tablink" onclick="openPage(event, 'Layout', this, '#070c4f')" id="defaultOpen" style="animation: fadeIn 1s ease-in-out 0.8s;animation-fill-mode:both;">Content</button>
<button class="tablink" onclick="openPage(event, 'Style', this, '#070920')" style="animation: fadeIn 1s ease-in-out 1.8s;animation-fill-mode:both;">Style</button>
<button class="tablink" onclick="openPage(event, 'Advanced', this, '#0e8500')" style="animation: fadeIn 1s ease-in-out 2.8s;animation-fill-mode:both;">Advanced</button>



<div id="Layout" class="tabcontent" style="animation: fadeIn 1s ease-in-out 0.4s;animation-fill-mode:both;">
  <h3 class="tab-title">Layout</h3>




</div>



<div id="Style" class="tabcontent">
  <h3>Style</h3>



<details id="db" class="details-box" role="dialog" type="modal">
<summary id="st" class="summary-title" role="heading">
Header CTA Button Text Shadow
</summary>
<div id="dc" class="details-content" style="animation: fadeIn 1s ease-in-out 0.8s;animation-fill-mode:both;">
<div class="row">
  <div class="col">
<label style="font-size:12px;">Text Shadow</label>
<?php $this->header_cta_button_text_shadow_control  ( 'yourseobook_header_cta_button_text_shadow_control', __( '', 'yourseobook' ), __( '', 'yourseobook' ) ); ?>
<span class="reset-cta-btn-font-size-button dashicons dashicons-update" role="button"></span>
        <span id="hctabfs" class="cta-btn-font-size-value"></span>
</div>
</div>
</div>
</details>



<details id="db" class="details-box" role="dialog" type="modal">
<summary id="st" class="summary-title" role="heading">
Header CTA Button Font Size Settings
</summary>
<div id="dc" class="details-content" style="animation: fadeIn 1s ease-in-out 0.8s;animation-fill-mode:both;">
<div class="row">
  <div class="col">
<label style="font-size:12px;">Font Size(px)</label>
<?php $this->header_cta_button_font_size_control  ( 'yourseobook_header_cta_button_font_size', __( '', 'yourseobook' ), __( '', 'yourseobook' ) ); ?>
<span class="reset-cta-btn-font-size-button dashicons dashicons-update" role="button"></span>
        <span id="hctabfs" class="cta-btn-font-size-value"></span>
</div>
</div>
</div>
</details>



<details id="db" class="details-box" role="dialog" type="modal">
<summary id="st" class="summary-title" role="heading">
Header CTA Button Width Settings
</summary>
<div id="dc" class="details-content" style="animation: fadeIn 1s ease-in-out 0.8s;animation-fill-mode:both;">
<div class="row">
  <div class="col">
<label style="font-size:12px;">Width(px)</label>
<?php $this->header_cta_button_width_control  ( 'yourseobook_header_cta_button_width', __( '', 'yourseobook' ), __( '', 'yourseobook' ) ); ?>
<span class="reset-cta-btn-width-button dashicons dashicons-update" role="button"></span>
        <span id="hctabw" class="cta-btn-width-value"></span>
</div>
</div>
</div>
</details>


<details id="db" class="details-box" role="dialog" type="modal">
<summary id="st" class="summary-title" role="heading">
Header CTA Button Height Settings
</summary>
<div id="dc" class="details-content" style="animation: fadeIn 1s ease-in-out 0.8s;animation-fill-mode:both;">
<div class="row">
  <div class="col">
<label style="font-size:12px;">Height(px)</label>
<?php $this->header_cta_button_height_control  ( 'yourseobook_header_cta_button_height', __( '', 'yourseobook' ), __( '', 'yourseobook' ) ); ?>
     <span class="reset-cta-btn-height-button dashicons dashicons-update" role="button"></span>
        <span id="hctabh" class="cta-btn-height-value"></span>
</div>
</div>
</div>
</details>


<details id="db" class="details-box" role="dialog" type="modal">
<summary id="st" class="summary-title" role="heading">
Header CTA Button Margin Settings
</summary>
<div id="dc" class="details-content" style="animation: fadeIn 1s ease-in-out 0.8s;animation-fill-mode:both;">
<div class="row">
  <div class="col">
<label style="font-size:12px;">Margin(px)</label>
<?php $this->header_cta_button_margin_top_control  ( 'yourseobook_header_cta_button_margin_top', __( '', 'yourseobook' ), __( '', 'yourseobook' ) ); ?>
<?php $this->header_cta_button_margin_right_control  ( 'yourseobook_header_cta_button_margin_right', __( '', 'yourseobook' ), __( '', 'yourseobook' ) ); ?>
<?php $this->header_cta_button_margin_bottom_control  ( 'yourseobook_header_cta_button_margin_bottom', __( '', 'yourseobook' ), __( '', 'yourseobook' ) ); ?>
<?php $this->header_cta_button_margin_left_control  ( 'yourseobook_header_cta_button_margin_left', __( '', 'yourseobook' ), __( '', 'yourseobook' ) ); ?>
     <span class="reset-cta-btn-margin-top-button dashicons dashicons-update" role="button"></span>
     <span class="reset-cta-btn-margin-right-button dashicons dashicons-update" role="button"></span>
     <span class="reset-cta-btn-margin-bottom-button dashicons dashicons-update" role="button"></span>
     <span class="reset-cta-btn-margin-left-button dashicons dashicons-update" role="button"></span>

        <span id="hctabmt" class="cta-btn-margin-top-value"></span>
        <span id="hctabmr" class="cta-btn-margin-right-value"></span>
        <span id="hctabmb" class="cta-btn-margin-bottom-value"></span>
        <span id="hctabml" class="cta-btn-margin-left-value"></span>
</div>
</div>
</div>
</details>


<details id="db" class="details-box" role="dialog" type="modal">
<summary id="st" class="summary-title" role="heading">
Header CTA Button Padding Settings
</summary>
<div id="dc" class="details-content" style="animation: fadeIn 1s ease-in-out 0.8s;animation-fill-mode:both;">
<div class="row">
  <div class="col">
<label style="font-size:12px;">Padding(px)</label>
<?php $this->header_cta_button_padding_top_control  ( 'yourseobook_header_cta_button_padding_top', __( '', 'yourseobook' ), __( '', 'yourseobook' ) ); ?>
<?php $this->header_cta_button_padding_right_control  ( 'yourseobook_header_cta_button_padding_right', __( '', 'yourseobook' ), __( '', 'yourseobook' ) ); ?>
<?php $this->header_cta_button_padding_bottom_control  ( 'yourseobook_header_cta_button_padding_bottom', __( '', 'yourseobook' ), __( '', 'yourseobook' ) ); ?>
<?php $this->header_cta_button_padding_left_control  ( 'yourseobook_header_cta_button_padding_left', __( '', 'yourseobook' ), __( '', 'yourseobook' ) ); ?>
     <span class="reset-cta-btn-padding-top-button dashicons dashicons-update" role="button"></span>
     <span class="reset-cta-btn-padding-right-button dashicons dashicons-update" role="button"></span>
     <span class="reset-cta-btn-padding-bottom-button dashicons dashicons-update" role="button"></span>
     <span class="reset-cta-btn-padding-left-button dashicons dashicons-update" role="button"></span>
        <span id="hctabpt" class="cta-btn-padding-top-value"></span>
        <span id="hctabpr" class="cta-btn-padding-right-value"></span>
        <span id="hctabpb" class="cta-btn-padding-bottom-value"></span>
        <span id="hctabpl" class="cta-btn-padding-leftvalue"></span>
</div>
</div>
</div>
</details>



<details id="db" class="details-box" role="dialog" type="modal">
<summary id="st" class="summary-title" role="heading">
Header CTA Button Border Radius Settings
</summary>
<div id="dc" class="details-content" style="animation: fadeIn 1s ease-in-out 0.8s;animation-fill-mode:both;">
<div class="row">
  <div class="col">
<label style="font-size:12px;">Padding(px)</label>
<?php $this->header_cta_button_border_radius_control  ( 'yourseobook_header_cta_button_border_radius', __( '', 'yourseobook' ), __( '', 'yourseobook' ) ); ?>
            <span class="reset-cta-btn-border-radius-button dashicons dashicons-update" role="button"></span>
        <span id="hctabbr" class="cta-btn-border-radius-value"></span>
</div>
</div>
</div>
</details>



<details id="db" class="details-box" role="dialog" type="modal">

<summary id="st" class="summary-title" role="heading">
Header CTA Button Background Color
</summary>

<div id="dc" class="details-content" style="animation: fadeIn 1s ease-in-out 0.8s;animation-fill-mode:both;">
<?php $this->header_cta_button_background_control  ( 'yourseobook_header_cta_button_background_color', __( '', 'yourseobook' ), __( '', 'yourseobook' ) ); ?>
<label for="hctabbc">CTA Button Background</label>

</div>

</details>


<details id="db" class="details-box" role="dialog" type="modal">

<summary id="st" class="summary-title" role="heading">
Header CTA Button Text Color
</summary>

<div id="dc" class="details-content" style="animation: fadeIn 1s ease-in-out 0.8s;animation-fill-mode:both;">
<?php $this->header_cta_button_text_color_control  ( 'yourseobook_header_cta_button_text_color', __( '', 'yourseobook' ), __( '', 'yourseobook' ) ); ?>
<label for="hctabtc">CTA Button Text Color</label>

</div>

</details>



<details id="db" class="details-box" role="dialog" type="modal">

<summary id="st" class="summary-title" role="heading">
Header CTA Button Border Settings
</summary>

<div id="dc" class="details-content" style="animation: fadeIn 1s ease-in-out 0.8s;animation-fill-mode:both;">
<div class="row">

  <div class="col">
<label style="font-size:12px;">Size(px)</label>
<?php $this->header_cta_button_border_size_control  ( 'yourseobook_header_cta_button_border_size', __( '', 'yourseobook' ), __( '', 'yourseobook' ) ); ?>
                    <span class="reset-cta-btn-border-size-button dashicons dashicons-update" role="button"></span>
                    <span id="hctabbs" class="cta-btn-border-size-value"></span>


</div>

  <div class="col">
<label for="bt" style="font-size:12px;">Type</label>
<?php $this->header_cta_button_border_type_control  ( 'yourseobook_header_cta_button_border_type', __( '', 'yourseobook' ), __( '', 'yourseobook' ) ); ?>
</div>

  <div class="col">
<label for="bc" style="font-size:12px;">Color</label>
<?php $this->header_cta_button_border_color_control  ( 'yourseobook_header_cta_button_border_color', __( '', 'yourseobook' ), __( '', 'yourseobook' ) ); ?>
</div>
</div>
</div>

</details>



<!-- header_cta_button_font_weight_control -->
<details id="db" class="details-box" role="dialog" type="modal">

<summary id="st" class="summary-title" role="heading">
Header CTA Button Font Weight
</summary>

<div id="dc" class="details-content" style="animation: fadeIn 1s ease-in-out 0.8s;animation-fill-mode:both;">
<?php $this->header_cta_button_font_weight_control  ( 'yourseobook_header_cta_button_font_weight', __( '', 'yourseobook' ), __( '', 'yourseobook' ) ); ?>
<label for="hctabtc">CTA Button Font Weight</label>
                    <span class="reset-cta-btn-font-weight-button dashicons dashicons-update" role="button"></span>
        <span id="hctabfw" class="cta-btn-font-weight-value"></span>
</div>

</details>




<!-- header_cta_button_font_weight_control -->
<details id="db" class="details-box" role="dialog" type="modal">

<summary id="st" class="summary-title" role="heading">
Header CTA Button Text Decoration
</summary>

<div id="dc" class="details-content" style="animation: fadeIn 1s ease-in-out 0.8s;animation-fill-mode:both;">
<?php $this->header_cta_button_text_decoration_control  ( 'yourseobook_header_cta_button_text_decoration', __( '', 'yourseobook' ), __( '', 'yourseobook' ) ); ?>
<label for="hctabtd">CTA Button Font Weight</label>
                    <span class="reset-cta-btn-text-decoration-button dashicons dashicons-update" role="button"></span>
        <span id="hctabtd" class="cta-btn-text-decoration-value"></span>
</div>

</details>



<!-- header_cta_button_font_weight_control -->
<details id="db" class="details-box" role="dialog" type="modal">

<summary id="st" class="summary-title" role="heading">
Header CTA Button Text Align
</summary>

<div id="dc" class="details-content" style="animation: fadeIn 1s ease-in-out 0.8s;animation-fill-mode:both;">
<?php $this->header_cta_button_text_align_control  ( 'yourseobook_header_cta_button_text_align', __( '', 'yourseobook' ), __( '', 'yourseobook' ) ); ?>
<label for="hctabta">CTA Button Text Align</label>
                    <span class="reset-cta-btn-text-align-button dashicons dashicons-update" role="button"></span>
        <span id="hctabta" class="cta-btn-text-align-value"></span>
</div>

</details>
</div>



<div id="Advanced" class="tabcontent">
  <h3>Advanced</h3>




</div>
</div>
<script>
jQuery(document).ready(function($) {

    $(document).on('click', '.reset-cta-btn-font-size-button', function(e) {
        e.preventDefault();
        // Reset the height control to its default value
        wp.customize('yourseobook_header_cta_button_font_size').set('16');
    });

    wp.customize('yourseobook_header_cta_button_font_size', function(value) {
        value.bind(function(newVal) {
            $('.cta-btn-font-size-value').text(newVal);
        });
    });

    $(document).on('click', '.reset-cta-btn-border-size-button', function(e) {
        e.preventDefault();
        // Reset the height control to its default value
        wp.customize('yourseobook_header_cta_button_border_size').set('0');
    });

    wp.customize('yourseobook_header_cta_button_border_size', function(value) {
        value.bind(function(newVal) {
            $('.cta-btn-border-size-value').text(newVal);
        });
    });


    $(document).on('click', '.reset-cta-btn-width-button', function(e) {
        e.preventDefault();
        // Reset the height control to its default value
        wp.customize('yourseobook_header_cta_button_width').set('130');
    });

    wp.customize('yourseobook_header_cta_button_width', function(value) {
        value.bind(function(newVal) {
            $('.cta-btn-width-value').text(newVal);
        });
    });


    $(document).on('click', '.reset-cta-btn-height-button', function(e) {
        e.preventDefault();
        // Reset the height control to its default value
        wp.customize('yourseobook_header_cta_button_height').set('40');
    });

    wp.customize('yourseobook_header_cta_button_height', function(value) {
        value.bind(function(newVal) {
            $('.cta-btn-height-value').text(newVal);
        });
    });


    $(document).on('click', '.reset-cta-btn-margin-top-button', function(e) {
        e.preventDefault();
        // Reset the height control to its default value
        wp.customize('yourseobook_header_cta_button_margin_top').set('0');
    });

    wp.customize('yourseobook_header_cta_button_margin_top', function(value) {
        value.bind(function(newVal) {
            $('.cta-btn-margin-top-value').text(newVal);
        });
    });


    $(document).on('click', '.reset-cta-btn-margin-button-right', function(e) {
        e.preventDefault();
        // Reset the height control to its default value
        wp.customize('yourseobook_header_cta_button_margin_right').set('0');
    });

    wp.customize('yourseobook_header_cta_button_margin_right', function(value) {
        value.bind(function(newVal) {
            $('.cta-btn-margin-right-value').text(newVal);
        });
    });


    $(document).on('click', '.reset-cta-btn-margin-bottom-button', function(e) {
        e.preventDefault();
        // Reset the height control to its default value
        wp.customize('yourseobook_header_cta_button_margin_bottom').set('0');
    });

    wp.customize('yourseobook_header_cta_button_margin_bottom', function(value) {
        value.bind(function(newVal) {
            $('.cta-btn-margin-bottom-value').text(newVal);
        });
    });


    $(document).on('click', '.reset-cta-btn-margin-button-left-button', function(e) {
        e.preventDefault();
        // Reset the height control to its default value
        wp.customize('yourseobook_header_cta_button_margin_left').set('0');
    });

    wp.customize('yourseobook_header_cta_button_margin_left', function(value) {
        value.bind(function(newVal) {
            $('.cta-btn-margin-left-value').text(newVal);
        });
    });



    $(document).on('click', '.reset-cta-btn-padding-top-button', function(e) {
        e.preventDefault();
        // Reset the height control to its default value
        wp.customize('yourseobook_header_cta_button_padding_top').set('0');
    });

    wp.customize('yourseobook_header_cta_button_padding_top', function(value) {
        value.bind(function(newVal) {
            $('.cta-btn-padding-top-value').text(newVal);
        });
    });



    $(document).on('click', '.reset-cta-btn-padding-right-button', function(e) {
        e.preventDefault();
        // Reset the height control to its default value
        wp.customize('yourseobook_header_cta_button_padding_right').set('0');
    });

    wp.customize('yourseobook_header_cta_button_padding_right', function(value) {
        value.bind(function(newVal) {
            $('.cta-btn-padding-right-value').text(newVal);
        });
    });

    $(document).on('click', '.reset-cta-btn-padding-bottom-button', function(e) {
        e.preventDefault();
        // Reset the height control to its default value
        wp.customize('yourseobook_header_cta_button_padding_bottom').set('0');
    });

    wp.customize('yourseobook_header_cta_button_padding_bottom', function(value) {
        value.bind(function(newVal) {
            $('.cta-btn-padding-bottom-value').text(newVal);
        });
    });








    $(document).on('click', '.reset-cta-btn-padding-left-button', function(e) {
        e.preventDefault();
        // Reset the height control to its default value
        wp.customize('yourseobook_header_cta_button_padding_left').set('0');
    });

    wp.customize('yourseobook_header_cta_button_padding_left', function(value) {
        value.bind(function(newVal) {
            $('.cta-btn-padding-left-value').text(newVal);
        });
    });



    $(document).on('click', '.reset-cta-btn-border-radius-button', function(e) {
        e.preventDefault();
        // Reset the height control to its default value
        wp.customize('yourseobook_header_cta_button_border_radius').set('0');
    });

    wp.customize('yourseobook_header_cta_button_border_radius', function(value) {
        value.bind(function(newVal) {
            $('.cta-btn-border-radius-value').text(newVal);
        });
    });

    $(document).on('click', '.reset-cta-btn-font-weight-button', function(e) {
        e.preventDefault();
        // Reset the height control to its default value
        wp.customize('yourseobook_header_cta_button_font_weight').set('300');
    });

    wp.customize('yourseobook_header_cta_button_font_weight', function(value) {
        value.bind(function(newVal) {
            $('.cta-btn-font-weight-value').text(newVal);
        });
    });

    $(document).on('click', '.reset-cta-btn-text-align-button', function(e) {
        e.preventDefault();
        // Reset the height control to its default value
        wp.customize('yourseobook_header_cta_button_text_align').set('none');
    });

    wp.customize('yourseobook_header_cta_button_text_align', function(value) {
        value.bind(function(newVal) {
            $('.cta-btn-text-align-value').text(newVal);
        });
    });


    $(document).on('click', '.reset-cta-btn-text-decoration-button', function(e) {
        e.preventDefault();
        // Reset the height control to its default value
        wp.customize('yourseobook_header_cta_button_text_decoration').set('none');
    });

    wp.customize('yourseobook_header_cta_button_text_decoration', function(value) {
        value.bind(function(newVal) {
            $('.cta-btn-text-decoration-value').text(newVal);
        });
    });


const ctaButtonFontSizeInput = document.getElementById('cta-btn-font-size');
const ctaButtonFontSizeValue = document.getElementById('hctabfs');

// Update the target element with the initial value
ctaButtonFontSizeValue.textContent = ctaButtonFontSizeInput.value + 'px';

// Listen for the input event on the range input
ctaButtonFontSizeInput.addEventListener('input', function() {
  // Update the target element with the current value
  ctaButtonFontSizeValue.textContent = ctaButtonFontSizeInput.value + 'px';
});

const ctaButtonBorderSizeInput = document.getElementById('cta-btn-border-size');
const ctaButtonBorderSizeValue = document.getElementById('hctabbs');

// Update the target element with the initial value
ctaButtonBorderSizeValue.textContent = ctaButtonBorderSizeInput.value + 'px';

// Listen for the input event on the range input
ctaButtonBorderSizeInput.addEventListener('input', function() {
  // Update the target element with the current value
  ctaButtonBorderSizeValue.textContent = ctaButtonBorderSizeInput.value + 'px';
});


const ctaButtonWidthInput = document.getElementById('cta-btn-width-size');
const ctaButtonWidthValue = document.getElementById('hctabw');

// Update the target element with the initial value
ctaButtonWidthValue.textContent = ctaButtonWidthInput.value + 'px';

// Listen for the input event on the range input
ctaButtonWidthInput.addEventListener('input', function() {
  // Update the target element with the current value
  ctaButtonWidthValue.textContent = ctaButtonWidthInput.value + 'px';
});

const ctaButtonHeightInput = document.getElementById('cta-btn-height-size');
const ctaButtonHeightValue = document.getElementById('hctabh');

// Update the target element with the initial value
ctaButtonHeightValue.textContent = ctaButtonHeightInput.value + 'px';

// Listen for the input event on the range input
ctaButtonHeightInput.addEventListener('input', function() {
  // Update the target element with the current value
  ctaButtonHeightValue.textContent = ctaButtonHeightInput.value + 'px';
});


const ctaButtonMarginTopInput = document.getElementById('cta-btn-margin-top-size');
const ctaButtonMarginTopValue = document.getElementById('hctabmt');

// Update the target element with the initial value
ctaButtonMarginTopValue.textContent = ctaButtonMarginTopInput.value + 'px';

// Listen for the input event on the range input
ctaButtonMarginTopInput.addEventListener('input', function() {
  // Update the target element with the current value
  ctaButtonMarginTopValue.textContent = ctaButtonMarginTopInput.value + 'px';
});


const ctaButtonMarginRightInput = document.getElementById('cta-btn-margin-right-size');
const ctaButtonMarginRightValue = document.getElementById('hctabmr');

// Update the target element with the initial value
ctaButtonMarginRightValue.textContent = ctaButtonMarginRightInput.value + 'px';

// Listen for the input event on the range input
ctaButtonMarginRightInput.addEventListener('input', function() {
  // Update the target element with the current value
  ctaButtonMarginRightValue.textContent = ctaButtonMarginRightInput.value + 'px';
});


const ctaButtonMarginBottomInput = document.getElementById('cta-btn-margin-bottom-size');
const ctaButtonMarginBottomValue = document.getElementById('hctabmb');

// Update the target element with the initial value
ctaButtonMarginBottomValue.textContent = ctaButtonMarginBottomInput.value + 'px';

// Listen for the input event on the range input
ctaButtonMarginBottomInput.addEventListener('input', function() {
  // Update the target element with the current value
  ctaButtonMarginBottomValue.textContent = ctaButtonMarginBottomInput.value + 'px';
});


const ctaButtonMarginLeftInput = document.getElementById('cta-btn-margin-left-size');
const ctaButtonMarginLeftValue = document.getElementById('hctabml');

// Update the target element with the initial value
ctaButtonMarginLeftValue.textContent = ctaButtonMarginLeftInput.value + 'px';

// Listen for the input event on the range input
ctaButtonMarginLeftInput.addEventListener('input', function() {
  // Update the target element with the current value
  ctaButtonMarginLeftValue.textContent = ctaButtonMarginLeftInput.value + 'px';
});


const ctaButtonPaddingTopInput = document.getElementById('cta-btn-padding-top-size');
const ctaButtonPaddingTopValue = document.getElementById('hctabpt');

// Update the target element with the initial value
ctaButtonPaddingTopValue.textContent = ctaButtonPaddingTopInput.value + 'px';

// Listen for the input event on the range input
ctaButtonPaddingTopInput.addEventListener('input', function() {
  // Update the target element with the current value
  ctaButtonPaddingTopValue.textContent = ctaButtonPaddingTopInput.value + 'px';
});


const ctaButtonPaddingRightInput = document.getElementById('cta-btn-padding-right-size');
const ctaButtonPaddingRightValue = document.getElementById('hctabpr');

// Update the target element with the initial value
ctaButtonPaddingRightValue.textContent = ctaButtonPaddingRightInput.value + 'px';

// Listen for the input event on the range input
ctaButtonPaddingRightInput.addEventListener('input', function() {
  // Update the target element with the current value
  ctaButtonPaddingRightValue.textContent = ctaButtonPaddingRightInput.value + 'px';
});


const ctaButtonPaddingBottomInput = document.getElementById('cta-btn-padding-bottom-size');
const ctaButtonPaddingBottomValue = document.getElementById('hctabpb');

// Update the target element with the initial value
ctaButtonPaddingBottomValue.textContent = ctaButtonPaddingBottomInput.value + 'px';

// Listen for the input event on the range input
ctaButtonPaddingBottomInput.addEventListener('input', function() {
  // Update the target element with the current value
  ctaButtonPaddingBottomValue.textContent = ctaButtonPaddingBottomInput.value + 'px';
});

const ctaButtonPaddingLeftInput = document.getElementById('cta-btn-padding-left-size');
const ctaButtonPaddingLeftValue = document.getElementById('hctabpl');

// Update the target element with the initial value
ctaButtonPaddingLeftValue.textContent = ctaButtonPaddingLeftInput.value + 'px';

// Listen for the input event on the range input
ctaButtonPaddingLeftInput.addEventListener('input', function() {
  // Update the target element with the current value
  ctaButtonPaddingLeftValue.textContent = ctaButtonPaddingLeftInput.value + 'px';
});

const ctaButtonBorderRadiusInput = document.getElementById('cta-btn-border-radius');
const ctaButtonBorderRadiusValue = document.getElementById('hctabbr');

// Update the target element with the initial value
ctaButtonBorderRadiusValue.textContent = ctaButtonBorderRadiusInput.value + 'px';

// Listen for the input event on the range input
ctaButtonBorderRadiusInput.addEventListener('input', function() {
  // Update the target element with the current value
  ctaButtonBorderRadiusValue.textContent = ctaButtonBorderRadiusInput.value + 'px';
});


const ctaButtonFontWeightInput = document.getElementById('cta-btn-font-weight');
const ctaButtonFontWeightValue = document.getElementById('hctabfw');

// Update the target element with the initial value
ctaButtonFontWeightValue.textContent = ctaButtonFontWeightInput.value + 'px';

// Listen for the input event on the range input
ctaButtonFontWeightInput.addEventListener('input', function() {
  // Update the target element with the current value
  ctaButtonFontWeightValue.textContent = ctaButtonFontWeightInput.value + 'px';
});

const ctaButtonTextDecorationInput = document.getElementById('cta-btn-text-decoration');
const ctaButtonTextDecorationValue = document.getElementById('hctabtd');

// Update the target element with the initial value
ctaButtonTextDecorationValue.textContent = ctaButtonTextDecorationInput.value;

// Listen for the input event on the range input
ctaButtonTextDecorationInput.addEventListener('select', function() {
  // Update the target element with the current value
  ctaButtonTextDecorationValue.textContent = ctaButtonTextDecorationInput.value;
});

const ctaButtonTextAlignInput = document.getElementById('cta-btn-text-align');
const ctaButtonTextAlignValue = document.getElementById('hctabta');

// Update the target element with the initial value
ctaButtonTextAlignValue.textContent = ctaButtonTextAlignInput.value;

// Listen for the input event on the range input
ctaButtonTextAlignInput.addEventListener('select', function() {
  // Update the target element with the current value
  ctaButtonTextAlignValue.textContent = ctaButtonTextAlignInput.value;
});

});
</script>


<script>
function openPage(event, pageName,elmnt,color) {
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
  document.getElementById(pageName).style.display = "block";
  elmnt.style.backgroundColor = color;
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
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
.head-cta-btn-tabs {

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

#Layout {background-color: #070c4f;}
#Style {background-color: #070920;}
#Advanced {background-color: #0e8500;}
</style>

<?php
}

    public function header_cta_button_font_size_control( $setting, $label, $description ) {
        $value = get_theme_mod( $setting );
        ?>
<input type="range" id="cta-btn-font-size" min="14" max="44" step="1" value="16" data-customize-setting-link="<?php echo esc_attr( $setting ); ?>" />

        <?php
    }


// Start Header CTA Button Width Settings

    public function header_cta_button_width_control( $setting, $label, $description ) {
        $value = get_theme_mod( $setting );
        ?>
<input type="range" id="cta-btn-width-size" min="130" max="180" step="1" value="130" data-customize-setting-link="<?php echo esc_attr( $setting ); ?>" />

        <?php
    }

// End Header CTA Button Width Settings


// Start Header CTA Button Height Settings

    public function header_cta_button_height_control( $setting, $label, $description ) {
        $value = get_theme_mod( $setting );
        ?>
<input type="range" id="cta-btn-height-size" min="40" max="80" step="1" value="40" data-customize-setting-link="<?php echo esc_attr( $setting ); ?>" />

        <?php
    }

// End Header CTA Button Height Settings


// Start Header CTA Button Margin Settings



    public function header_cta_button_margin_top_control( $setting, $label, $description ) {
        $value = get_theme_mod( $setting );
        ?>
<input type="range" id="cta-btn-margin-top-size" min="0" max="60" step="1" value="0" data-customize-setting-link="<?php echo esc_attr( $setting ); ?>" />


        <?php
    }

    public function header_cta_button_margin_right_control( $setting, $label, $description ) {
        $value = get_theme_mod( $setting );
        ?>
<input type="range" id="cta-btn-margin-right-size" min="0" max="60" step="1" value="0" data-customize-setting-link="<?php echo esc_attr( $setting ); ?>" />


        <?php
    }

    public function header_cta_button_margin_bottom_control( $setting, $label, $description ) {
        $value = get_theme_mod( $setting );
        ?>
<input type="range" id="cta-btn-margin-bottom-size" min="0" max="60" step="1" value="0" data-customize-setting-link="<?php echo esc_attr( $setting ); ?>" />

        <?php
    }
    public function header_cta_button_margin_left_control( $setting, $label, $description ) {
        $value = get_theme_mod( $setting );
        ?>

<input type="range" id="cta-btn-margin-left-size" min="0" max="60" step="1" value="0" data-customize-setting-link="<?php echo esc_attr( $setting ); ?>" />

        <?php
    }
// End Header CTA Button Height Settings


// Start Header CTA Button Padding Settings


    public function header_cta_button_padding_top_control( $setting, $label, $description ) {
        $value = get_theme_mod( $setting );
        ?>
<input type="range" id="cta-btn-padding-top-size" min="0" max="60" step="1" value="0" data-customize-setting-link="<?php echo esc_attr( $setting ); ?>" />

        <?php
    }



    public function header_cta_button_padding_right_control( $setting, $label, $description ) {
        $value = get_theme_mod( $setting );
        ?>
<input type="range" id="cta-btn-padding-right-size" min="0" max="60" step="1" value="0" data-customize-setting-link="<?php echo esc_attr( $setting ); ?>" />

        <?php
    }



    public function header_cta_button_padding_bottom_control( $setting, $label, $description ) {
        $value = get_theme_mod( $setting );
        ?>
<input type="range" id="cta-btn-padding-bottom-size" min="0" max="60" step="1" value="0" data-customize-setting-link="<?php echo esc_attr( $setting ); ?>" />

        <?php
    }



    public function header_cta_button_padding_left_control( $setting, $label, $description ) {
        $value = get_theme_mod( $setting );
        ?>
<input type="range" id="cta-btn-padding-left-size" min="0" max="60" step="1" value="0" data-customize-setting-link="<?php echo esc_attr( $setting ); ?>" />

        <?php
    }


// End Header CTA Button Padding Settings

// Start Header CTA Button Border Radius Settings

    public function header_cta_button_border_radius_control( $setting, $label, $description ) {
        $value = get_theme_mod( $setting );
        ?>
<input type="range" id="cta-btn-border-radius" min="0" max="60" step="1" value="0" data-customize-setting-link="<?php echo esc_attr( $setting ); ?>" />

        <?php
    }

// End Header CTA Button Border Radius Settings


// Start Header CTA Button Background Color

    public function header_cta_button_background_control( $setting, $label, $description ) {
        $value = get_theme_mod( $setting );
        ?>

        <label>
            <input name="hctabbc" id="hctabbc" type="color" data-customize-setting-link="<?php echo esc_attr( $setting ); ?>" value="<?php echo esc_attr( $value ); ?>">
        </label>
        <?php
    }

// End Header CTA Button Background Color


// Start Header CTA Button Text Color

    public function header_cta_button_text_color_control( $setting, $label, $description ) {
        $value = get_theme_mod( $setting );
        ?>

        <label>
            <input name="hctabtc" id="hctabtc" type="color" data-customize-setting-link="<?php echo esc_attr( $setting ); ?>" value="<?php echo esc_attr( $value ); ?>">

        <?php
    }

// End Header CTA Button Text Color




// Start Header CTA Button Border Settings

    public function header_cta_button_border_size_control( $setting, $label, $description ) {
        $value = get_theme_mod( $setting );
        ?>
<input type="range" id="cta-btn-border-size" min="0" max="20" step="1" value="0" data-customize-setting-link="<?php echo esc_attr( $setting ); ?>" />

        <?php
    }

// End Header CTA Button Border Settings




    public function header_cta_button_border_type_control( $setting, $label, $description ) {
        $value = get_theme_mod( $setting );
        ?>





<select name="button-border-type" type="choice"  id="button-border-type" data-customize-setting-link="<?php echo esc_attr( $setting ); ?>" value="<?php echo esc_attr( $value ); ?>">>
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

    public function header_cta_button_border_color_control( $setting, $label, $description ) {
        $value = get_theme_mod( $setting );
        ?>


            <input name="bc" id="bc" type="color" data-customize-setting-link="<?php echo esc_attr( $setting ); ?>" value="<?php echo esc_attr( $value ); ?>">

        <?php
    }


    public function header_cta_button_font_weight_control( $setting, $label, $description ) {
        $value = get_theme_mod( $setting );
        ?>
<input type="range" id="cta-btn-font-weight-size" min="100" max="900" step="100" value="300" data-customize-setting-link="<?php echo esc_attr( $setting ); ?>" />



   
        <?php
    }




  public function header_cta_button_text_decoration_control( $setting, $label, $description ) {
      $value = get_theme_mod( $setting );
      ?>


<select name="button-border-type" type="choice"  id="button-text-decoration-" data-customize-setting-link="<?php echo esc_attr( $setting ); ?>" value="<?php echo esc_attr( $value ); ?>">>
<option value="none">none</option>
<option value="underline">underline</option>
</select>

      <?php
  }
// Start Header CTA Button Border Settings
// header_cta_button_text_decoration_control



// Start Header CTA Button Text Align Settings

  public function header_cta_button_text_align_control( $setting, $label, $description ) {
      $value = get_theme_mod( $setting );
      ?>
<select name="button-text-align" type="choice"  id="button-text-align" data-customize-setting-link="<?php echo esc_attr( $setting ); ?>" value="<?php echo esc_attr( $value ); ?>">>
    <option value=""></option>
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
</select>

      <?php
  }


 public function header_cta_button_text_shadow_control( $setting, $label, $description ) {
     $value = get_theme_mod( $setting );
     ?>
<select id="cta-text-shadow-button-select">
  <option value="">Select Text Shadow</option>
  <option value="top">Text Shadow Top</option>
  <option value="right">Text Shadow Right</option>
  <option value="bottom">Text Shadow Bottom</option>
  <option value="left">Text Shadow Left</option>
</select>

<div id="cta-text-shadow-button-size-slider" style="display: none;">
  <label for="text-shadow-button">Border Size:</label>
  <input type="range" id="text-shadow-button" min="0" max="10" step="1" value="0">
</div>

<div id="cta-text-shadow-border-color-picker" style="display: none;">
  <label for="cta-text-shadow-button-border-color">Border Color:</label>
  <input type="color" id="cta-text-shadow-button-border-color" value="#000000">
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
  $(document).ready(function() {
    $('#cta-text-shadow-button-select').on('change', function() {
      var selectedBorder = $(this).val();
      
      // Reset the display of all conditional elements
      $('#cta-text-shadow-button-size-slider, #cta-text-shadow-border-color-picker').hide();
      
      // Show the corresponding elements based on the selected border type
      if (selectedBorder === 'top' || selectedBorder === 'right' || selectedBorder === 'bottom' || selectedBorder === 'left') {
        $('#cta-text-shadow-button-size-slider, #cta-text-shadow-border-color-picker').show();
      }
    });
  });
</script>

     <?php
 }
// End Header CTA Button Text Align Settings
}
}