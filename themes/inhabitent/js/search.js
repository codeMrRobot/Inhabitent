(function ($){


  $('.search-toggle').on('click', function() {
    $('.search-field').animate( { width: "200px" }, 500 ).focus();
  });

  $('.search-field').on('blur', function() {
      $('.search-field').animate( { width: "0px", border:"none" }, 500 );
  });

  $('.search-field').animate( { width: 0,border: 'none', }, 0 );
    
  

})(jQuery);