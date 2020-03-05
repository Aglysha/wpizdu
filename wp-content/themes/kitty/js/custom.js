$(document).ready(function() {
    $('button.bat').on('click', function() {
        let ident = $(this).attr('data-slide');
        $('div.dat').hide();
        $('div.dat[data-slide='+ident+']').css('display', 'flex');
    });
});