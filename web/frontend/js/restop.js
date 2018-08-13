$('#menu-btn').click(function () {
    $('#info-btn').removeClass('btn-bar-blured');
    $('#menu-btn').addClass('btn-bar-blured');
    $('#ib').hide();
    $('#mb').show();
});
$('#info-btn').click(function () {
    $('#menu-btn').removeClass('btn-bar-blured');
    $('#info-btn').addClass('btn-bar-blured');

    $('#mb').hide();
    $('#ib').show();
});