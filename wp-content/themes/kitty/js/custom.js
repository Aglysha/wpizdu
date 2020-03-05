$(document).ready(function() {
    $('.nav').find('li').addClass('nav-item dropdown');


    $('button.bat').on('click', function() {
        let ident = $(this).attr('data-slide');
        $('div.dat').hide();
        $('div.dat[data-slide='+ident+']').css('display', 'flex');
    });


});