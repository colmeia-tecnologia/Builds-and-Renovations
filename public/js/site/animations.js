var whyDiv = $('#whyDiv').waypoint({
    handler: function() {
        $('.whyText').addClass('fliped');
        $('.whyTitle').addClass('fadeInLeft');
    },
    offset: '25%'
});


var contactDiv = $('#contact').waypoint({
    handler: function() {
        $('#contact-form').addClass('fadeInRight');
    },
    offset: '25%'
});

var portfolioDiv = $('#portfolio').waypoint({
    handler: function() {
        $('.portfolioContainer').each(function(i){
            var portfolio = $(this);
            setTimeout(function() {
                portfolio.addClass('fadeIn');
            }, 300*i);
        });
    },
    offset: '25%'
});