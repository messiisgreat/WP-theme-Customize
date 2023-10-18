jQuery(document).ready(function($) {
    var hookedElement = $('#land-service');
    var cssAdded = false;

    $(window).scroll(function() {
        var scrollPos = $(window).scrollTop();
        var hookedPos = hookedElement.offset().top;

        if (scrollPos >= hookedPos && !cssAdded) {
            $('head').append('<link rel="stylesheet" type="text/css" href="' + templateDir + '/api/scroll/css/main-land-services.css">');
            cssAdded = true;
        } else if (scrollPos < hookedPos && cssAdded) {
            $('link[href="' + templateDir + '/api/scroll/css/main-land-services.css"]').remove();
            cssAdded = false;
        }
    });
});
