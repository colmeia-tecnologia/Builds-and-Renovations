jQuery(function($)
{
    /*$(".cnpj").mask("99.999.999/9999-99");
    $(".cep").mask("99.999-999");
    $(".cpf").mask("999.999.999-99");
    $(".tempo").mask("99:99:99");
    $('.dinheiro').priceFormat({
        prefix: 'R$ ',
        centsSeparator: ',',
        thousandsSeparator: '.',
    });*/
   
    $(".telephone").mask("(999) 999-9999");
    $(".telephone").blur(function(){
        if($(this).val() == '')
            $('#label-telephone').removeClass('active');
    });
    /*$(".telephone").focusout(function(){
        var phone, element;
        element = $(this);
        element.unmask();
        phone = element.val().replace(/\D/g, '');
        if(phone.length > 10) {
            element.mask("(99) 99999-999?9");
        } else {
            element.mask("(99) 9999-9999?9");
        }
    }).trigger('focusout');*/

    //$('.botao').prop("disabled", false);
});