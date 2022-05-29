jQuery(document).ready(function ($) {
    $('.contact-form').on('ajaxError', function (event, message) {
        $('.flash').removeClass('active');
        $('.flash.error').addClass('active');
    });
    $('.contact-form').on('ajaxSuccess', function (event, message) {
        $('.flash').removeClass('active');
        $('.flash.success').addClass('active');
    });
});
