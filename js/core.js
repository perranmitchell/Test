// ************************ //
// Browser Detection
// ************************ //
$(document).ready(function () {
jQuery.each(jQuery.browser, function (i, d) {
 (d === true) ? jQuery('body').addClass(i) : jQuery('body').addClass('v'+d.replace(/\./g,'-'));
});
});

//
// ************************ //
// Initiate Fast Click for Optimal Mobile Browsing
// ************************ //
$(document).ready(function () {
    FastClick.attach(document.body);
});

// ************************ //
// All scripts
// ************************ //
$(document).ready(function () {

// slider
      $(".slider").owlCarousel({
    itemsDesktop : [2000,3],
    itemsDesktopSmall : [990,2],
    itemsMobile : [450,1],
    navigation : true,
    slideSpeed : 600,
    mouseDrag: true,
            pagination : true,
    navigationText : ["&#xf053;","&#xf054;"]
  });
    
    
    $('.fa-bars').click(function(){
        $('nav ul, .fa-bars, body, .logoA').toggleClass('active');
    });
    
    $('nav ul li a, .logoA, .scrolly').click(function(e){
      e.preventDefault();
      var $this = $($(this).attr('href'));
      $('html,body').animate({
        'scrollTop': $this.offset().top - 60+'px'
      }, "easeInOutCirc");
    });
    
});


