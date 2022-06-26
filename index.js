$(function(){
    $('.header-said').click(function(){
        $('.header-nav').show();
        $('#mask').show();
    
    });

    $('#mask').click(function(){
        $('.header-nav').hide();
        $('#mask').hide();
    
    });

    
});