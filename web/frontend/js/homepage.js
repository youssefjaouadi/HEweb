
$("#nav-search").click(function() {
    $('html, body').animate({
        scrollTop: $("#resto-search-block").offset().top
    }, 2000);
});
$('#radius-val').slider({});


/*$('#search-loc').click(function () {

    var test = false; var x="nothing";
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition( function suc (position) {



                $('#user-lat').val(position.coords.latitude);
                $('#user-long').val(position.coords.longitude);

                var height = $('#resto-search-block').height() + $('#load').height() - $('.main_title').height();
                $('.btns-location').hide();
                $('#resto-search-block').height(height);
                $(window).resize();
                $('#load').show();
                // alert('height +load' + $('#resto-search-block').height());
                setTimeout(function () {
                    $("#load").hide();
                    height = $('#resto-search-block').height() + $('#resto-block').height() - $('#load').height() - $('.main_title').height();
                    $('#resto-search-block').height(height);
                    $(window).resize();
                    alert('height +resto lis' + $('#resto-search-block').height());
                    $('#resto-block').show();
                }, 3000);
                test = true;
                x = "yes";

            }, function err (error) {
                alert('erreur' + error.code);
                test = false;
                x = "no";

            });

        }

  if ($('#user-lat').val().length===0 && $('#user-long').val().length===0 )
     {test=false;}
     else {test=true}
   if (test==false) {
         alert('lat lng null'+test+x);
        return false
    }
    else {

    var height = $('#resto-search-block').height() + $('#load').height() - $('.main_title').height();
    $('.btns-location').hide();
    $('#resto-search-block').height(height);
    $(window).resize();
    $('#load').show();
   // alert('height +load' + $('#resto-search-block').height());
    setTimeout(function () {
        $("#load").hide();
        height = $('#resto-search-block').height() + $('#resto-block').height() - $('#load').height() - $('.main_title').height();
        $('#resto-search-block').height(height);
        $(window).resize();
        alert('height +resto lis' + $('#resto-search-block').height());
        $('#resto-block').show();
    }, 3000);
    return true
}
});*/
/*
$('#search-adr').click(function () {
    var dialog = new mdc.dialog.MDCDialog(document.querySelector('#map-dialog'));
    dialog.show();
    dialog.listen('MDCDialog:accept', function() {
        // console.log('accepted');
       // $('#sucsess-box').css('display','block');
    })
});*/




