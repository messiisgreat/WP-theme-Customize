<?php
/**
 *  Yourseobook Footer Main Custom Class Control
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



class Yourseobook_Main_Footer_Sections_Control extends WP_Customize_Control {
public $type = 'tabbed_menu';

public function render_content() { ?>



<button class="accordion">Main Footer Layout</button>
<div class="panel">

<button class="accordion"><span class="dashicons dashicons-info"></span> How to Setup Footer Colors</button>
<div class="subpanel">
  <p>The "Main Footer Background Color" setting allows you to customize the background color of the main footer section on your website. Choose a color that complements your site's design and enhances the overall appearance of the footer. By selecting the perfect background color, you can create a visually appealing and cohesive look for your website's footer.</p>
</div>

<button class="accordion"><span class="dashicons dashicons-color-picker"></span> Main Footer Color Styles</button>
<div class="panel">

<button class="accordion-sub"><span class="dashicons dashicons-admin-customizer"></span> Footer Background Color</button>
<div class="subpanel">
<div class="pan-cont">
<label for="footer-main-background-color">Footer</label>
<?php $this->footer_main_section_background_color_control  ( 'yourseobook_footer_background_color', __( '', 'yourseobook' ), __( '', 'yourseobook' ) ); ?>
  <span class="reset-footer-background-color dashicons dashicons-update" role="button"></span>
 <span id="footer-main-background-color" class="footer-background-color-value"></span>
</div>
</div>

<button class="accordion-sub"><span class="dashicons dashicons-admin-customizer"></span> Footer Text Color</button>
<div class="subpanel">
<div class="pan-cont">
<label for="footer-main-text-color">Text</label>
<?php $this->footer_main_section_text_color_control  ( 'yourseobook_main_footer_text_color', __( '', 'yourseobook' ), __( '', 'yourseobook' ) ); ?>
  <span class="reset-footer-main-text-color dashicons dashicons-update" role="button"></span>
 <span id="footer-main-text-color" class="footer-main-text-color-value"></span>
</div>
</div>

<button class="accordion-sub"><span class="dashicons dashicons-admin-customizer"></span> Footer Links Text Color</button>
<div class="subpanel">
<div class="pan-cont">
<label for="footer-main-links-color">Links</label>
<?php $this->footer_main_section_link_text_color_control  ( 'yourseobook_main_footer_links_text_color', __( '', 'yourseobook' ), __( '', 'yourseobook' ) ); ?>
  <span class="reset-footer-links-color dashicons dashicons-update" role="button"></span>
 <span id="footer-main-links-color" class="footer-links-color-value"></span>
</div>
</div>

<button class="accordion-sub"><span class="dashicons dashicons-admin-customizer"></span> Footer Widgets Title Text Color</button>
<div class="subpanel">
<div class="pan-cont">
<label for="footer-widgets-title-color">Titles</label>
<?php $this->footer_main_section_widgets_title_text_color_control  ( 'yourseobook_main_footer_widgets_title_font_text_color', __( '', 'yourseobook' ), __( '', 'yourseobook' ) ); ?>
  <span class="reset-footer-widgets-title-color dashicons dashicons-update" role="button"></span>
 <span id="footer-widgets-title-color" class="footer-widgets-title-color-value"></span>
</div>
</div>

</div>

</div>

<button class="accordion">Main Footer Styles</button>
<div class="panel">

<button class="accordion"><span class="dashicons dashicons-color-picker"></span> Main Display Styles</button>

<div class="panel">

<button class="accordion-sub"><span class="dashicons dashicons-admin-customizer"></span> Footer Margin Settings</button>
<div class="subpanel">
<div class="pan-cont">
<label for="footer-main-background-color">Margin</label>
<?php $this->footer_main_section_background_color_control  ( 'yourseobook_footer_background_color', __( '', 'yourseobook' ), __( '', 'yourseobook' ) ); ?>
  <span class="reset-footer-background-color dashicons dashicons-update" role="button"></span>
 <span id="footer-main-background-color" class="footer-background-color-value"></span>
</div>
</div>

<button class="accordion-sub"><span class="dashicons dashicons-admin-customizer"></span> Footer Padding Settings</button>
<div class="subpanel">
<div class="pan-cont-padding">
<label for="footer-padding">Padding</label>
<?php $this->footer_main_section_padding_top_control  ( 'yourseobook_main_footer_padding_top', __( '', 'yourseobook' ), __( '', 'yourseobook' ) ); ?>
<?php $this->footer_main_section_padding_right_control  ( 'yourseobook_main_footer_padding_right', __( '', 'yourseobook' ), __( '', 'yourseobook' ) ); ?>
<?php $this->footer_main_section_padding_bottom_control  ( 'yourseobook_main_footer_padding_bottom', __( '', 'yourseobook' ), __( '', 'yourseobook' ) ); ?>
<?php $this->footer_main_section_padding_left_control  ( 'yourseobook_main_footer_padding_left', __( '', 'yourseobook' ), __( '', 'yourseobook' ) ); ?>
     <span class="reset-footer-main-padding-top-button dashicons dashicons-update" role="button"></span>
     <span class="reset-footer-main-padding-right-button dashicons dashicons-update" role="button"></span>
     <span class="reset-footer-main-padding-bottom-button dashicons dashicons-update" role="button"></span>
     <span class="reset-footer-main-padding-left-button dashicons dashicons-update" role="button"></span>
        <span id="footer-main-pt" class="footer-main-padding-top-value"></span>
        <span id="footer-main-pr" class="footer-main-padding-right-value"></span>
        <span id="footer-main-pb" class="footer-main-padding-bottom-value"></span>
        <span id="footer-main-pl" class="footer-main-padding-left-value"></span>
</div>
</div>



</div>
</div>

</div>

<button class="accordion">Main Footer Advanced</button>
<div class="panel">
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
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
<script>
var accsub = document.getElementsByClassName("accordion-sub");
var a;

for (a = 0; a < accsub.length; a++) {
  accsub[a].addEventListener("click", function(event) {
    event.preventDefault(); // Prevent default behavior
    this.classList.toggle("active");
    var subpanel = this.nextElementSibling;
    if (subpanel.style.display === "flex" ) {
      subpanel.style.display = "none";
    } else {
      subpanel.style.display = "flex";
    }
  });
}

</script>
<script>

jQuery(document).ready(function($) {

    $(document).on('click', '.reset-footer-background-color', function(e) {
        e.preventDefault();
        // Reset the height control to its default value
        wp.customize('yourseobook_footer_background_color').set('#000000');
    });

    wp.customize('yourseobook_footer_background_color', function(value) {
        value.bind(function(newVal) {
            $('.footer-background-color-value').text(newVal);
        });
    });


    $(document).on('click', '.reset-footer-main-text-color', function(e) {
        e.preventDefault();
        // Reset the height control to its default value
        wp.customize('yourseobook_main_footer_text_color').set('#FFFFFF');
    });

    wp.customize('yourseobook_main_footer_text_color', function(value) {
        value.bind(function(newVal) {
            $('.footer-main-text-color-value').text(newVal);
        });
    });


    $(document).on('click', '.reset-footer-links-color', function(e) {
        e.preventDefault();
        // Reset the height control to its default value
        wp.customize('yourseobook_main_footer_links_text_color').set('#FFFFFF');
    });

    wp.customize('yourseobook_main_footer_links_text_color', function(value) {
        value.bind(function(newVal) {
            $('.footer-main-links-color-value').text(newVal);
        });
    });


    $(document).on('click', '.reset-footer-widgets-title-color', function(e) {
        e.preventDefault();
        // Reset the height control to its default value
        wp.customize('yourseobook_main_footer_widgets_title_font_text_color').set('#FFFFFF');
    });

    wp.customize('yourseobook_main_footer_widgets_title_font_text_color', function(value) {
        value.bind(function(newVal) {
            $('.footer-widgets-title-color-value').text(newVal);
        });
    });


    $(document).on('click', '.reset-footer-main-margin-top-button', function(e) {
        e.preventDefault();
        // Reset the height control to its default value
        wp.customize('yourseobook_main_footer_button_margin_top').set('0');
    });

    wp.customize('yourseobook_main_footer_button_margin_top', function(value) {
        value.bind(function(newVal) {
            $('.footer-main-margin-top-value').text(newVal);
        });
    });


    $(document).on('click', '.reset-footer-main-margin-button-right', function(e) {
        e.preventDefault();
        // Reset the height control to its default value
        wp.customize('yourseobook_main_footer_button_margin_right').set('0');
    });

    wp.customize('yourseobook_main_footer_button_margin_right', function(value) {
        value.bind(function(newVal) {
            $('.footer-main-margin-right-value').text(newVal);
        });
    });


    $(document).on('click', '.reset-footer-main-margin-bottom-button', function(e) {
        e.preventDefault();
        // Reset the height control to its default value
        wp.customize('yourseobook_main_footer_button_margin_bottom').set('0');
    });

    wp.customize('yourseobook_main_footer_button_margin_bottom', function(value) {
        value.bind(function(newVal) {
            $('.footer-main-margin-bottom-value').text(newVal);
        });
    });


    $(document).on('click', '.reset-footer-main-margin-button-left-button', function(e) {
        e.preventDefault();
        // Reset the height control to its default value
        wp.customize('yourseobook_main_footer_button_margin_left').set('0');
    });

    wp.customize('yourseobook_main_footer_button_margin_left', function(value) {
        value.bind(function(newVal) {
            $('.footer-main-margin-left-value').text(newVal);
        });
    });



    $(document).on('click', '.reset-footer-main-padding-top-button', function(e) {
        e.preventDefault();
        // Reset the height control to its default value
        wp.customize('yourseobook_main_footer_padding_top').set('0');
    });

    wp.customize('yourseobook_main_footer_padding_top', function(value) {
        value.bind(function(newVal) {
            $('.footer-main-padding-top-value').text(newVal);
        });
    });



    $(document).on('click', '.reset-footer-main-padding-right-button', function(e) {
        e.preventDefault();
        // Reset the height control to its default value
        wp.customize('yourseobook_main_footer_padding_right').set('0');
    });

    wp.customize('yourseobook_main_footer_padding_right', function(value) {
        value.bind(function(newVal) {
            $('.footer-main-padding-right-value').text(newVal);
        });
    });

    $(document).on('click', '.reset-footer-main-padding-bottom-button', function(e) {
        e.preventDefault();
        // Reset the height control to its default value
        wp.customize('yourseobook_main_footer_padding_bottom').set('0');
    });

    wp.customize('yourseobook_main_footer_padding_bottom', function(value) {
        value.bind(function(newVal) {
            $('.footer-main-padding-bottom-value').text(newVal);
        });
    });


    $(document).on('click', '.reset-footer-main-padding-left-button', function(e) {
        e.preventDefault();
        // Reset the height control to its default value
        wp.customize('yourseobook_main_footer_padding_left').set('0');
    });

    wp.customize('yourseobook_main_footer_padding_left', function(value) {
        value.bind(function(newVal) {
            $('.footer-main-padding-left-value').text(newVal);
        });
    });


const footerBackgroundColorInput = document.getElementById('footer-background-color-setings');
const footerBackgroundColorValue = document.getElementById('footer-main-background-color');

// Update the target element with the initial value
footerBackgroundColorValue.textContent = footerBackgroundColorInput.value;

// Listen for the input event on the range input
footerBackgroundColorInput.addEventListener('color', function() {
  // Update the target element with the current value
  footerBackgroundColorValue.textContent = footerBackgroundColorInput.value;
});

const footerTextColorInput = document.getElementById('footer-text-color-setings');
const footerTextColorValue = document.getElementById('footer-main-text-color');

// Update the target element with the initial value
footerTextColorValue.textContent = footerTextColorInput.value;

// Listen for the input event on the range input
footerTextColorInput.addEventListener('color', function() {
  // Update the target element with the current value
  footerTextColorValue.textContent = footerTextColorInput.value;
});

const footerLinksTextColorInput = document.getElementById('footer-main-links-color-setings');
const footerLinksTextColorValue = document.getElementById('footer-main-links-color');

// Update the target element with the initial value
footerLinksTextColorValue.textContent = footerLinksTextColorInput.value;

// Listen for the input event on the range input
footerLinksTextColorInput.addEventListener('color', function() {
  // Update the target element with the current value
  footerLinksTextColorValue.textContent = footerLinksTextColorInput.value;
});

const footerWidgetTitleTextColorInput = document.getElementById('footer-widgets-title-color-setings');
const footerWidgetTitleTextColorValue = document.getElementById('footer-widgets-title-color');

// Update the target element with the initial value
footerWidgetTitleTextColorValue.textContent = footerWidgetTitleTextColorInput.value;

// Listen for the input event on the range input
footerWidgetTitleTextColorInput.addEventListener('color', function() {
  // Update the target element with the current value
  footerWidgetTitleTextColorValue.textContent = footerWidgetTitleTextColorInput.value;
});


const mainFooterMarginTopInput = document.getElementById('footer-main-margin-top-size');
const mainFooterMarginTopValue = document.getElementById('footer-main-mt');

// Update the target element with the initial value
mainFooterMarginTopValue.textContent = mainFooterMarginTopInput.value + 'px';

// Listen for the input event on the range input
mainFooterMarginTopInput.addEventListener('input', function() {
  // Update the target element with the current value
  mainFooterMarginTopValue.textContent = mainFooterMarginTopInput.value + 'px';
});


const mainFooterMarginRightInput = document.getElementById('footer-main-margin-right-size');
const mainFooterMarginRightValue = document.getElementById('footer-main-mr');

// Update the target element with the initial value
mainFooterMarginRightValue.textContent = mainFooterMarginRightInput.value + 'px';

// Listen for the input event on the range input
mainFooterMarginRightInput.addEventListener('input', function() {
  // Update the target element with the current value
  mainFooterMarginRightValue.textContent = mainFooterMarginRightInput.value + 'px';
});


const mainFooterMarginBottomInput = document.getElementById('footer-main-margin-bottom-size');
const mainFooterMarginBottomValue = document.getElementById('footer-main-mb');

// Update the target element with the initial value
mainFooterMarginBottomValue.textContent = mainFooterMarginBottomInput.value + 'px';

// Listen for the input event on the range input
mainFooterMarginBottomInput.addEventListener('input', function() {
  // Update the target element with the current value
  mainFooterMarginBottomValue.textContent = mainFooterMarginBottomInput.value + 'px';
});


const mainFooterMarginLeftInput = document.getElementById('footer-main-margin-left-size');
const mainFooterMarginLeftValue = document.getElementById('footer-main-ml');

// Update the target element with the initial value
mainFooterMarginLeftValue.textContent = mainFooterMarginLeftInput.value + 'px';

// Listen for the input event on the range input
mainFooterMarginLeftInput.addEventListener('input', function() {
  // Update the target element with the current value
  mainFooterMarginLeftValue.textContent = mainFooterMarginLeftInput.value + 'px';
});


const mainFooterPaddingTopInput = document.getElementById('footer-main-padding-top-size');
const mainFooterPaddingTopValue = document.getElementById('footer-main-pt');

// Update the target element with the initial value
mainFooterPaddingTopValue.textContent = mainFooterPaddingTopInput.value + 'px';

// Listen for the input event on the range input
mainFooterPaddingTopInput.addEventListener('input', function() {
  // Update the target element with the current value
  mainFooterPaddingTopValue.textContent = mainFooterPaddingTopInput.value + 'px';
});


const mainFooterPaddingRightInput = document.getElementById('footer-main-padding-right-size');
const mainFooterPaddingRightValue = document.getElementById('footer-main-pr');

// Update the target element with the initial value
mainFooterPaddingRightValue.textContent = mainFooterPaddingRightInput.value + 'px';

// Listen for the input event on the range input
mainFooterPaddingRightInput.addEventListener('input', function() {
  // Update the target element with the current value
  mainFooterPaddingRightValue.textContent = mainFooterPaddingRightInput.value + 'px';
});


const mainFooterPaddingBottomInput = document.getElementById('footer-main-padding-bottom-size');
const mainFooterPaddingBottomValue = document.getElementById('footer-main-pb');

// Update the target element with the initial value
mainFooterPaddingBottomValue.textContent = mainFooterPaddingBottomInput.value + 'px';

// Listen for the input event on the range input
mainFooterPaddingBottomInput.addEventListener('input', function() {
  // Update the target element with the current value
  mainFooterPaddingBottomValue.textContent = mainFooterPaddingBottomInput.value + 'px';
});

const mainFooterPaddingLeftInput = document.getElementById('footer-main-padding-left-size');
const mainFooterPaddingLeftValue = document.getElementById('footer-main-pl');

// Update the target element with the initial value
mainFooterPaddingLeftValue.textContent = mainFooterPaddingLeftInput.value + 'px';

// Listen for the input event on the range input
mainFooterPaddingLeftInput.addEventListener('input', function() {
  // Update the target element with the current value
  mainFooterPaddingLeftValue.textContent = mainFooterPaddingLeftInput.value + 'px';
});



});

</script>
<style>
.pan-cont {
    display: grid;
    grid-template-columns: 30% 23% 13% 28.5%;
    grid-gap: 5px;
    width: 275px;
    max-width: 100%;
    min-width: 100%;
    background: #ccc;
    padding: 10px 5px 10px 5px;
}
.pan-cont-padding {
    display: grid;
    grid-template-columns: 30% 23% 13% 28.5%;
    grid-gap: 5px;
    width: 275px;
    max-width: 100%;
    min-width: 100%;
    background: #ccc;
    padding: 10px 5px 10px 5px;
}
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
.accordion-sub {
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
button.accordion-sub.active {
	background: #000;
	color: #fff;
	margin: 0px;
	transition: .4s ease-in-out;
	transform: inherit;
}
button.accordion-sub::after {
	content: '\02795';
	color: #fff !important;
	font-size: 14px;
	font-weight: 500;
	float: right;
	margin-left: 20px;
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

.subpanel {
	padding: 0px 0px 0px 0px;
	display: none;
	overflow: hidden;
	width: 100%;
	animation: fadeIn 1s ease-in-out 0.8s;
	animation-fill-mode: both;
	font-size: 10px;
	font-weight: 500;
	color: #000;
	justify-content: space-between;
	grid-template-columns: 1fr 1fr 1fr 1fr;
	margin: 0px 0px 0px 0px;
}
/*	display: flex;
	flex-direction: row;
	flex-wrap: nowrap;
	justify-content: space-around;
	align-items: center;
*/

.pan-cont label {
        border: 1px solid #3c018a;
        width: 100%;
        text-align: center;
        line-height: 1.75rem;
        font-size: 14px;
        font-weight: 500;
        background: #f0f0f1;
        border-radius: 4px;
        color: #3c018a;
        padding: 0px 0px 0px 0px;
        margin: 0px 0px 0px 0px;
        max-height: 32px;
}
.pan-cont-padding label {
        border: 1px solid #3c018a;
        width: 100%;
        text-align: center;
        line-height: 1.75rem;
        font-size: 14px;
        font-weight: 500;
        background: #f0f0f1;
        border-radius: 4px;
        color: #3c018a;
        padding: 0px 0px 0px 0px;
        margin: 0px 0px 0px 0px;
        max-height: 32px;
}
.pan-cont input#footer-background-color-setings {
        background: #f0f0f1;
        height: 31px;
        width: 100%;
        padding: 0px 0px 0px 0px;
        color: #3c018a;
        border-radius: 4px;
        outline: none;
        box-shadow: none !important;
}
.pan-cont-padding input#footer-background-color-setings {
        background: #f0f0f1;
        height: 31px;
        width: 100%;
        padding: 0px 0px 0px 0px;
        color: #3c018a;
        border-radius: 4px;
        outline: none;
        box-shadow: none !important;
}
.reset-footer-background-color.dashicons.dashicons-update, .reset-footer-main-text-color.dashicons.dashicons-update, .reset-footer-links-color.dashicons.dashicons-update, .reset-footer-widgets-title-color.dashicons.dashicons-update {
        padding: 10px;
        /*! height: 100%; */
        line-height: .6rem;
}
.reset-footer-background-color.dashicons.dashicons-update, .reset-footer-main-text-color.dashicons.dashicons-update, .reset-footer-links-color.dashicons.dashicons-update, .reset-footer-widgets-title-color.dashicons.dashicons-update {
        margin: 0px auto;
        line-height: 1.8rem;
        padding: 0;
        min-width: 100%;
        width: 100%;
        background: #f0f0f1;
        border-radius: 4px;
        min-height: 31px;
        font-size: 25px;
        color: #3c018a;
        border: 1px solid #0c0fc4;
}
span#footer-main-background-color, span#footer-main-text-color, span#footer-main-links-color, span#footer-widgets-title-color {
        background: #f0f0f1;
        color: #3c018a;
        width: auto;
        text-align: center;
        font-size: 13px;
        border-radius: 4px;
        min-height: 31px;
        border: 1px solid #000;
        line-height: 1.75rem;
        font-weight: 600;
}
</style>
<?php }



    public function footer_main_section_background_color_control ( $setting, $label, $description ) {
        $value = get_theme_mod( $setting );
        ?>

<input type="color" id="footer-background-color-setings"  data-customize-setting-link="<?php echo esc_attr( $setting ); ?>" />

        <?php
    }


    public function footer_main_section_text_color_control ( $setting, $label, $description ) {
        $value = get_theme_mod( $setting );
        ?>

<input type="color" id="footer-text-color-setings"  data-customize-setting-link="<?php echo esc_attr( $setting ); ?>" />

        <?php
    }


    public function footer_main_section_link_text_color_control ( $setting, $label, $description ) {
        $value = get_theme_mod( $setting );
        ?>

<input type="color" id="footer-main-links-color-setings"  data-customize-setting-link="<?php echo esc_attr( $setting ); ?>" />

        <?php
    }


    public function footer_main_section_widgets_title_text_color_control ( $setting, $label, $description ) {
        $value = get_theme_mod( $setting );
        ?>

<input type="color" id="footer-widgets-title-color-setings"  data-customize-setting-link="<?php echo esc_attr( $setting ); ?>" />

        <?php
    }

// Start Header CTA Button Margin Settings



    public function footer_main_section_margin_top_control( $setting, $label, $description ) {
        $value = get_theme_mod( $setting );
        ?>
<input type="range" id="footer-main-margin-top-size" min="0" max="60" step="1" value="0" data-customize-setting-link="<?php echo esc_attr( $setting ); ?>" />


        <?php
    }

    public function footer_main_section_margin_right_control( $setting, $label, $description ) {
        $value = get_theme_mod( $setting );
        ?>
<input type="range" id="footer-main-margin-right-size" min="0" max="60" step="1" value="0" data-customize-setting-link="<?php echo esc_attr( $setting ); ?>" />


        <?php
    }

    public function footer_main_section_margin_bottom_control( $setting, $label, $description ) {
        $value = get_theme_mod( $setting );
        ?>
<input type="range" id="footer-main-margin-bottom-size" min="0" max="60" step="1" value="0" data-customize-setting-link="<?php echo esc_attr( $setting ); ?>" />

        <?php
    }
    public function footer_main_section_margin_left_control( $setting, $label, $description ) {
        $value = get_theme_mod( $setting );
        ?>

<input type="range" id="footer-main-margin-left-size" min="0" max="60" step="1" value="0" data-customize-setting-link="<?php echo esc_attr( $setting ); ?>" />

        <?php
    }
// End Header CTA Button Height Settings


// Start Header CTA Button Padding Settings


    public function footer_main_section_padding_top_control( $setting, $label, $description ) {
        $value = get_theme_mod( $setting );
        ?>
<input type="number" id="footer-main-padding-top-size" min="0" max="60" step="1" value="0" data-customize-setting-link="<?php echo esc_attr( $setting ); ?>" />

        <?php
    }



    public function footer_main_section_padding_right_control( $setting, $label, $description ) {
        $value = get_theme_mod( $setting );
        ?>
<input type="number" id="footer-main-padding-right-size" min="0" max="60" step="1" value="0" data-customize-setting-link="<?php echo esc_attr( $setting ); ?>" />

        <?php
    }



    public function footer_main_section_padding_bottom_control( $setting, $label, $description ) {
        $value = get_theme_mod( $setting );
        ?>
<input type="number" id="footer-main-padding-bottom-size" min="0" max="60" step="1" value="0" data-customize-setting-link="<?php echo esc_attr( $setting ); ?>" />

        <?php
    }



    public function footer_main_section_padding_left_control( $setting, $label, $description ) {
        $value = get_theme_mod( $setting );
        ?>
<input type="number" id="footer-main-padding-left-size" min="0" max="60" step="1" value="0" data-customize-setting-link="<?php echo esc_attr( $setting ); ?>" />

        <?php
    }


// End Header CTA Button Padding Settings


}
}