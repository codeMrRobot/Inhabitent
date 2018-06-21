jQuery(document).ready(function($) {

    // expand search bar in navigation
    $('.main-navigation').find('.search-form').hide();

    $('.search-button').on('click', function() {
        $('.main-navigation').find('.search-form').animate({'width': 'toggle'});
        $('.main-navigation').find('.search-field').focus();
    });

    $('.main-navigation').find('.search-form').on('focusout', function () {
        if(!$(this).find('.search-field').val()) {
            $('.main-navigation').find('.search-form').animate({'width': 'toggle'});
        } 
    });

});