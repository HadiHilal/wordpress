
$(document).ready(function () {

    // Fakes the loading setting a timeout
    setTimeout(function() {
        $('body').addClass('loaded');
    }, 800);

    $(window).scroll(function () {
        var sc = $(this).scrollTop();

        if (sc > 600){
            $('.arr i').fadeIn();
        }
        else {$('.arr i').fadeOut();}

        var e = $(this).scrollTop();
        if (e > 1400) {
          $('.my-footer').addClass('zoom-in');
        }
    });

    // Scroll to Top
    $('.arr').click(function(){
        $('body,html').animate({
            scrollTop : 0
        },900);
    });

    var y = $(this).scrollTop();
  if (y > 400) {
    $('.main-post').addClass('fade-right');
  } else {
    $('.main-post').removeClass('fade-right');
  }

});
