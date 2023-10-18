<?php
function yourseobook_ads_added_above_last_p($text) {
    if( is_single() ) :
        $ads_text = '
<div style="width:100%;height:90px;text-align:center;line-height:90px;border:1px solid #000;">CTA - Call Now Here</div>';
        if($pos1 = strrpos($text, '<p>')){
            $text1 = substr($text, 0, $pos1);
            $text2 = substr($text, $pos1);
            $text = $text1 . $ads_text . $text2;
        }
    endif;
    return $text;
    }
add_filter('the_content', 'yourseobook_ads_added_above_last_p');