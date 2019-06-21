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
