let indexSlogan = 0;
function autoplay() {
    $('.carousel').carousel('next');
    setTimeout(autoplay, 4500);
}

function typeSlogan()
{
    var slogan = "Build your own paradise!";

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

$('.loadModal').click(function(event){
    var url = $(this).data('url');

    $.get(url, function(data) {
        $("#modal-content").html(data);
    });
});

$(document).ready(function(){
    //Carousel
    $('#carouselHome').carousel({
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

    //Modal
    $('.modal').modal();
});