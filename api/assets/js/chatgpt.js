(function($) {
    $(document).ready(function() {
        $('#chatgpt-button').on('click', function() {
            $.ajax({
                url: chatgptSettings.ajaxUrl,
                method: 'POST',
                data: {
                    action: 'chatgpt_request',
                    security: chatgptSettings.security,
                    // Add any additional data needed for your ChatGPT request
                },
                success: function(response) {
                    // Process the response from ChatGPT
                    console.log(response);
                },
                error: function(xhr, status, error) {
                    // Handle the error
                    console.log(error);
                }
            });
        });
    });
})(jQuery);
