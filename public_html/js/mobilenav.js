$(document).ready(function () {
    $( "#menu-button" ).click(function() {     
        $('#nav-menu').slideToggle();
     });
});

$(window).scroll(function() {    
    // get the amount the window has scrolled
    var scroll = $(window).scrollTop();
    // add the 'active' class to the correct id based on the scroll amount
    if (scroll > 200) {
        $(".navigation").addClass("nav-background");
    } else {
        $(".navigation").removeClass("nav-background");
    }
});