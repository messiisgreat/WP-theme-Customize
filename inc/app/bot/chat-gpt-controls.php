<?php



add_action('admin_footer', 'chatGPT_modal');

function chatGPT_modal() {
    ?>
    <div id="openChatGPTModal" style="display: none;">
        <div id="chatGPTContent"></div>
    </div>
    <?php
}

add_action('admin_enqueue_scripts', 'chatGPT_enqueue_scripts');

function chatGPT_enqueue_scripts($hook) {
    if ($hook === 'post-new.php' || $hook === 'post.php') {
        wp_enqueue_script('chat-gpt-js', get_template_directory_uri() . '/api/assets/js/chat-gpt.js', array('jquery'), '1.0', true);
        wp_localize_script('chatGPTScript', 'chatGPTData', array(
            'apiKey' => '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',
            'model' => 'text-davinci-003',
            'stop' => "\n",
            'prompt' => "I am a highly intelligent question answering bot. If you ask me a question that is rooted in truth, I will give you the answer. If you ask me a question that is nonsense, trickery, or has no clear answer, I will respond with \"Unknown\".\n\nQ: What is human life expectancy in the United States?\nA: Human life expectancy in the United States is 78 years.\n\nQ: Who was president of the United States in 1955?\nA: Dwight D. Eisenhower was president of the United States in 1955.\n\nQ: Which party did he belong to?\nA: He belonged to the Republican Party.\n\nQ: What is the square root of banana?\nA: Unknown\n\nQ: How does a telescope work?\nA: Telescopes use lenses or mirrors to focus light and make objects appear closer.\n\nQ: Where were the 1992 Olympics held?\nA: The 1992 Olympics were held in Barcelona, Spain.\n\nQ: How many squigs are in a bonk?\nA: Unknown\n\nQ: Where is the Valley of Kings?\nA:"
        ));
    }
}




add_action('wp_ajax_chat_gpt_request', 'chatGPT_request');
add_action('wp_ajax_nopriv_chat_gpt_request', 'chatGPT_request');

function chatGPT_request() {
    $api_key = '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';
    $model = 'text-davinci-003';
    $stop = "\n";
    $prompt = "I am a highly intelligent question answering bot. If you ask me a question that is rooted in truth, I will give you the answer. If you ask me a question that is nonsense, trickery, or has no clear answer, I will respond with \"Unknown\".\n\nQ: What is human life expectancy in the United States?\nA: Human life expectancy in the United States is 78 years.\n\nQ: Who was president of the United States in 1955?\nA: Dwight D. Eisenhower was president of the United States in 1955.\n\nQ: Which party did he belong to?\nA: He belonged to the Republican Party.\n\nQ: What is the square root of banana?\nA: Unknown\n\nQ: How does a telescope work?\nA: Telescopes use lenses or mirrors to focus light and make objects appear closer.\n\nQ: Where were the 1992 Olympics held?\nA: The 1992 Olympics were held in Barcelona, Spain.\n\nQ: How many squigs are in a bonk?\nA: Unknown\n\nQ: Where is the Valley of Kings?\nA:";

    $url = 'https://api.openai.com/v1/engines/' . $model . '/completions';

    $headers = array(
        'Content-Type: application/json',
        'Authorization: Bearer ' . $api_key,
    );

    $data = array(
        'prompt' => $prompt,
        'temperature' => 0,
        'max_tokens' => 100,
        'top_p' => 1,
        'frequency_penalty' => 0.0,
        'presence_penalty' => 0.0,
        'stop' => array($stop),
    );

    $args = array(
        'body' => json_encode($data),
        'headers' => $headers,
    );

    $response = wp_remote_post($url, $args);

    if (!is_wp_error($response) && $response['response']['code'] === 200) {
        $body = json_decode($response['body'], true);
        $choices = $body['choices'];
        $chat = '';
        foreach ($choices as $choice) {
            $text = $choice['text'];
            $chat .= $text;
        }
        echo '<div class="chat-gpt-response">' . $chat . '</div>';
    } else {
        echo '<p>Error: Unable to retrieve ChatGPT response.</p>';
    }

    wp_die();
}



// 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
add_shortcode("quote", "quote");
function quote( $atts, $content = null ) {
    return '<div class="right text">"'.$content.'"</div>';
}

add_action('init', 'add_button');
function add_button() {


   if ( current_user_can('edit_posts') &&  current_user_can('edit_pages') )
   {
     add_filter('mce_external_plugins', 'add_plugin');
     add_filter('mce_buttons_3', 'register_button');
   }
}
function register_button($buttons) {
   array_push($buttons, "quote","wpse-rules");
   return $buttons;
}
// /public_html/wp-content/themes/yourseobook/inc/assets/js/customcodes.js
function add_plugin($plugin_array) {
   $plugin_array['quote'] = get_bloginfo('template_url').'/inc/assets/js/customcodes.js';
   return $plugin_array;
}