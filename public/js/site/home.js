let indexSlogan = 0;
function autoplay() {
    $('.carousel').carousel('next');
    setTimeout(autoplay, 4500);
}

function typeSlogan()
{
    var slogan = "Building your own paradise!";

    if(indexSlogan < slogan.length) {
        $('#slogan').append(slogan.charAt(indexSlogan));
        indexSlogan++;
        setTimeout(typeSlogan, 120);
    }
}

$('#backToTop').click(function(){
    $("html, body").animate({ scrollTop: 0 }, "slow");
});

$('#contactFloat').click(function(){
    $("html, body").animate({ scrollTop: $('#contact-form').position().top -200 }, "slow");
});

$(document).ready(function(){
    //Carousel
    $('.carousel.carousel-slider').carousel({
        fullWidth: true,
        indicators: false,
    }).css(
        "height", $(window).height() - 10
    );
    autoplay();

    //Sticky Menu
    $('.pushpin').pushpin({
        top: $('.pushpin').offset().top
    });

    //ScroolSpy
    $('.scrollspy').scrollSpy();

    //Type slogan on banner
    typeSlogan();

    //Parallax
    $('.parallax').parallax();
});