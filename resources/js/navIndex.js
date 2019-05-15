$(document).ready(function() {
        // Transition effect for navbar 
        $(window).scroll(function() {
            console.log($(this).scrollTop());
            $('#cadastre').css('background-size', (100+($(this).scrollTop()/15))+'%');
            $('#cadastre').css('opacity', (1-(($(this).scrollTop())/800)));

          // checks if window is scrolled more than 500px, adds/removes solid class
          if($(this).scrollTop() > 600) { 
              $('.navbar').addClass('solid');
          } else {
              $('.navbar').removeClass('solid');
          }
        });
});