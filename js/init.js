 (function($){
 $('input.autocomplete').autocomplete({
    data: {
      "Apple": null,
      "Microsoft": null,
      "Google": 'http://placehold.it/250x250'
    }
  });
}

(function($){
  $(function(){

    $('.button-collapse').sideNav();

  }); // end of document ready
})(jQuery); // end of jQuery name space


    $(document).ready(function(){
      $('.carousel').carousel();
    });

    $('.carousel.carousel-slider').carousel({full_width: true});

      $(document).ready(function() {
    $('select').material_select();
  });
            
 
    $(document).ready(function(){
      $('.parallax').parallax();
    });
        
        (function($){
  $(function(){

    $('.button-collapse').sideNav();

  }); // end of document ready
})(jQuery); // end of jQuery name space

$(document).ready(function(){
      $('.slider').slider({full_width: true});
    });

function searchToggle(obj, evt){
            var container = $(obj).closest('.search-wrapper');

            if(!container.hasClass('active')){
                  container.addClass('active');
                  evt.preventDefault();
            }
            else if(container.hasClass('active') && $(obj).closest('.input-holder').length == 0){
                  container.removeClass('active');
                  // clear input
                  container.find('.search-input').val('');
                  // clear and hide result container when we press close
                  container.find('.result-container').fadeOut(100, function(){$(this).empty();});
            }
        }

        function submitFn(obj, evt){
            value = $(obj).find('.search-input').val().trim();

            _html = "Yup yup! Your search text sounds like this: ";
            if(!value.length){
                _html = "Yup yup! Add some text friend :D";
            }
            else{
                _html += "<b>" + value + "</b>";
            }

            $(obj).find('.result-container').html('<span>' + _html + '</span>');
            $(obj).find('.result-container').fadeIn(100);

            evt.preventDefault();
        }

// For Demo purposes only (show hover effect on mobile devices)
[].slice.call( document.querySelectorAll('.content a') ).forEach( function(el) {
  el.onclick = function() { return false; }
} );
    
     $(".button-collapse").sideNav();
     $('.collapsible').collapsible();

