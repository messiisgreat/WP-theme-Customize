jQuery(document).ready(function($) {
    var hookedElement = document.getElementById('hooked');
    var cssAdded = false;

    var intersectionOptions = {
        root: null,
        rootMargin: '0px',
        threshold: 1
    };

    var intersectionCallback = function(entries, observer) {
        entries.forEach(function(entry) {
            if (entry.intersectionRatio > 0 && !cssAdded) {
                $('head').append('<link rel="stylesheet" type="text/css" href="' + themeData.templateDir + '/css/scroll-style.css">');
                cssAdded = true;
            } else if (entry.intersectionRatio === 0 && cssAdded) {
                $('link[href="' + themeData.templateDir + '/css/scroll-style.css"]').remove();
                cssAdded = false;
            }
        });
    };

    var observer = new IntersectionObserver(intersectionCallback, intersectionOptions);
    observer.observe(hookedElement);
});
