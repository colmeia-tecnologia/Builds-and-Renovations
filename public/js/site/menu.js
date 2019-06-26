$('#menuResponsive').hide();

$('#menuIcon').click(function(){
    $('#menuResponsive').toggle('slow');
});

$('#menuResponsive li').click(function(){
    $('#menuResponsive').hide();
});