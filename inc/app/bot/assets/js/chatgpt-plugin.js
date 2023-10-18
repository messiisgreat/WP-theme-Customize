
(function() {
    tinymce.create('tinymce.plugins.chatgpt_plugin', {
        init: function(editor, url) {
            editor.addButton('chatgpt_button', {
                title: 'ChatGPT',
                icon: 'icon-class', // Replace with the CSS class for the icon you want to use
onclick: function() {
    openChatGPTModal();
}

            });
        },
        createControl: function(n, cm) {
            return null;
        },
    });
    tinymce.PluginManager.add('chatgpt_plugin', tinymce.plugins.chatgpt_plugin);
})();
