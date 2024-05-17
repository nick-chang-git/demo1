jQuery(document).ready(function($) {
    $('.secondary-menu .toggle-btn').click(function() {
        $('body').addClass('menu-active');
        $(this).siblings('div').animate({
            width: 'toggle',
        });
    });
});