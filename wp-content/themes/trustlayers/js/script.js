/* global Modernizr, site */
/**
 * Custom scripts to load when DOM is ready
 *
 * @param  jQuery $
 * @return void
 */
(function ($) {
    // Add initial active class to first menu item
    $('.home #menu-main-menu li:first-child').addClass('is-active');

    // Animate scroll when clicking menu items
    $('#menu-main-menu').on('click', 'a', function (e) {
        e.preventDefault();

        // Get element id from the link's href
        var $element = $('#' + this.href.split('#')[1]);

        // If the element doesn't exist follow link as normal
        if (!$element.length) {
            window.location.href = this.href;
            return;
        }

        // Mark clicked item as active
        $('#menu-main-menu li').removeClass('is-active');
        $(this).parent('li').addClass('is-active');

        // Else animate page to the top of the element
        $('html, body').animate({
            scrollTop: $element.offset().top - 84
        }, 800);
    });

    // Animate scrollable elements
    $('.js-scroll').on('click', function (e) {
        e.preventDefault();

        // Get element id from the link's href
        var $element = $($(this).attr('href'));

        // Mark about item as active
        $('#menu-main-menu li').removeClass('is-active');
        $('#menu-main-menu li:nth-child(2)').addClass('is-active');

        // Animate page to the top of the element
        $('html, body').animate({
            scrollTop: $element.offset().top - 84
        }, 800);
    });

    // Toggle mobile menu
    $('#menu-toggle').on('click', function () {
        $('.main-menu-container').slideToggle();
    });

    // Load placeholder polyfill if browser doesn't support it
    Modernizr.load({
        test: Modernizr.placeholder,
        nope: site.template_url + '/js/libs/jquery.placeholder.js'
    });

    // Load selectivizr if browser doesn't support lastchild selector
    Modernizr.load({
        test: Modernizr.lastchild,
        nope: site.template_url + '/js/libs/selectivizr.js'
    });
})(jQuery);