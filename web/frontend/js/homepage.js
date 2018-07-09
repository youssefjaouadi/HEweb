$("#nav-search").click(function() {
    $('html, body').animate({
        scrollTop: $("#resto-search-block").offset().top
    }, 2000);
});


$('#search-loc').click(function () {
    var height=$('#resto-search-block').height()+$('#load').height()-$('.main_title').height();
    $('.btns-location').hide();
    $('#resto-search-block').height(height);
    $(window).resize();
    $('#load').show();
    alert('height +load'+ $('#resto-search-block').height());
    setTimeout(function () {
        $("#load").hide();
        height=$('#resto-search-block').height()+$('#resto-block').height()-$('#load').height()-$('.main_title').height();
        $('#resto-search-block').height(height);
        $(window).resize();
        alert('height +resto lis' +$('#resto-search-block').height());
        $('#resto-block').show();
    },3000);

});
$('#search-adr').click(function () {
    var dialog = new mdc.dialog.MDCDialog(document.querySelector('#map-dialog'));
    dialog.show();
    dialog.listen('MDCDialog:accept', function() {
        // console.log('accepted');
       // $('#sucsess-box').css('display','block');
    })
});

$('#radius-val').slider();