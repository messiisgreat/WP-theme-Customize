(function($) {
    $(document).ready(function() {
        // Make an AJAX request to the WordPress backend when the ChatGPT button is clicked
        $(document).on('click', '#chat_gpt_button', function(e) {
            e.preventDefault();
            $.ajax({
                type: 'POST',
                url: ajaxurl,
                data: {
                    action: 'chat_gpt_request',
                },
                success: function(response) {
                    // Insert the ChatGPT response into the editor
                    if (tinymce.activeEditor) {
                        tinymce.activeEditor.execCommand('mceInsertContent', false, response);
                    }
                },
                error: function(xhr, status, error) {
                    console.log(error);
                }
            });
        });
    });
})(jQuery);
