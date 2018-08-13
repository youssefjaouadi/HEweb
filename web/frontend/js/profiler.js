$(function () {
    $('[data-toggle="tooltip"]').tooltip();
    $('#newlongr').val($('#longr').data('long-resto'));
    $('#newlatr').val($('#latr').data('lat-resto'));
});
$('#infonavbtn').blur(function () {
   $(this).addClass('blured-menu-btn');
});
$('#confnavbtn').blur(function () {
   $(this).addClass('blured-menu-btn');
});
$('#locnavbtn').blur(function () {
   $(this).addClass('blured-menu-btn');
});
$('#ouvr').clockpicker({ donetext: 'Confirmer'});
$('#fermr').clockpicker({ donetext: 'Confirmer'});
$('#telr').on('keypress click',function () {
    $(this).removeClass('ierror');
    $(this).attr("placeholder", "")
    // alert('test');

});
$('#nom').on('keypress click',function () {
    $(this).removeClass('ierror');
    $('#nom').attr("placeholder", "")
    // alert('test');

});
function verifinfo()
{
    var test=false;


    if ($('#telr').val().length !=9 )
    {
        $('#telr').addClass('ierror'); $('#telr').attr("placeholder", "tel invalid");alert('tel nuuuuuul'+' tel length :  '+$('#telr').val().length);
        test= false;


    }

 /*   else  if ($('#ouvr').val().length ===0 )
    {
        $('#ouvr').addClass('ierror'); $('#ouvr').attr("placeholder", "");alert('ouv nuuuuuul'+' ouv length :  '+$('#ouvr').val().length);
        test= false;
    }
    else if ($('#fermr').val().length ===0  )
    {
        $('#fermr').addClass('ierror'); $('#fermr').attr("placeholder", "");alert('ferm nuuuuuul'+' ferm length :  '+$('#fermr').val().length);
        test= false;
    }
*/
    else {test=true;}

    return test;

}



    function modifgenerale($m) {



    if (verifinfo()) {
        var data = new FormData();
        data.append('ouvr',''+$("#ouvr").val());
        data.append('fermr',''+$("#fermr").val());
        data.append('telr',''+$("#telr").val());

        $.ajax({
            url: '' + $m,
            type: "POST",
            data: data,
            processData: false,
            contentType: false,
            cache: false,
            success: function (data) {

                $.each(data, function (k, el) {
                    alert("" + el.toString());
                });
                $('#sucsess-modif').show();

                return true;
            }
        });

    }
    else {
        return false
    }

}

function modifconf($m) {



    var data = new FormData();
    data.append('mdp',''+$("#newmdpr").val());
    data.append('rib',''+$("#ribr").val());

    $.ajax({
        url: '' + $m,
        type: "POST",
        data: data,
        processData: false,
        contentType: false,
        cache: false,
        success: function (data) {

            $.each(data, function (k, el) {
                alert("" + el.toString());
            });
            $('#sucsess-modif').show();

            return true;
        }
    });




}



$('#infonavbtn').click(function () {
    $('#confnavbtn').removeClass('blured-menu-btn');
    $('#locnavbtn').removeClass('blured-menu-btn');
    $('#sucsess-modif').hide();
    $('#confb').hide();
    $('#locb').hide();
    $('#infob').show();
});
$('#confnavbtn').click(function () {
    $('#infonavbtn').removeClass('blured-menu-btn');
    $('#locnavbtn').removeClass('blured-menu-btn');
    $('#sucsess-modif').hide();
    $('#infob').hide();
    $('#locb').hide();
    $('#confb').show();
});
$('#locnavbtn').click(function () {
    $('#confnavbtn').removeClass('blured-menu-btn');
    $('#infonavbtn').removeClass('blured-menu-btn');
    $('#sucsess-modif').hide();
    $('#infob').hide();
    $('#confb').hide();
    $('#locb').show();
});
function veriflocation()
{
    var test=false;

    if ($('#adr').val().length ===0 )
    {
        $('#adr').addClass('ierror'); $('#adr').attr("placeholder", "adresse invalid");alert('adr nuuuuuul');
        test= false;
    }
    if ($('#nom').val().length ===0 )
    {
        $('#nom').addClass('ierror'); $('#nom').attr("placeholder", "nom du restaurant invalid");alert('nom nuuuuuul');
        test= false;
    }


    else {test = true;}

    return test;

}
$('#modiflocr').click(function () {

    if (veriflocation()) {
        var dialog = new mdc.dialog.MDCDialog(document.querySelector('#my-mdc-dialog'));
        dialog.show();
        dialog.listen('MDCDialog:accept', function() {
            // console.log('accepted');
            $('#sucsess-box').css('display','block');
            $('#sucsess-modif').show();
            alert("nom resto  "+$('#nom').val()+"|   adr resop  "+$('#adr').val()+"|   lat resop  "+$('#newlatr').val()+"|  long resop  "+$('#newlongr').val());
            return true;
        });

    }
    else {return false}
});
$('#close-alert').click(function () {
    $('#sucsess-modif').hide();

});