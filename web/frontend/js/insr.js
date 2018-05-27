var etap=1;
$('#ouv').clockpicker({ donetext: 'Confirmer'});
$('#ferm').clockpicker({ donetext: 'Confirmer'});
$('#nextb').click(function () {


        if (etap == 1) {
            if (verifetap1()) {
                $('#blockmap').hide();
                $('#blockinfo').fadeIn("fade");
                $('#backb').show();
                $('#nomr').val($('#nom').val());
                $('#adrr').val($('#adr').val());
                $('#nomstep2').val($('#nomr').val());
                $('#adrstep2').val($('#adrr').val());
                alert("nom=     " + $('#nomr').val() + '|adr      ' + $('#adrr').val() + '|num etap  '+etap+'|langr etap  '+$('#langr').val()+'|latr etap  '+$('#latr').val()+'| placeid  '+$('#idplacer').val());
                etap++;
                return true;
            }
            else {return false}
        }
        else if (etap == 2) {
                if (verifetap2()) {
                    $('#blockinfo').hide();
                    $('#blockconf').fadeIn("fade");
                    $('#nextb').hide();
                    $('#backb').show();
                    $('#confb').show();
                    $('#telr').val($('#tel').val());
                    $('#ouvr').val($('#ouv').val());
                    $('#fermr').val($('#ferm').val());
                    $('#typer').val($('#typeresto').val());
                    etap++;
                    alert("nom=     " + $('#nomr').val() + '|adr      ' + $('#adrr').val() + '|num etap  '+etap+'|ouv   '+$('#ouvr').val()+'|ferm   '+$('#fermr').val()+'|tel   '+$('#telr').val()+'|type   '+$('#typer').val()+'|typelength   '+$('#typer').val().length);
                    return true;
                }
          else {return false;}
        }


});

$('#backb').click(function () {
    if(etap==2)
    {  $('#blockinfo').hide();
        $('#blockmap').fadeIn("fade");
       // $('#backb').show();
        etap--;
    }
  else
      if(etap==3)
    {  $('#blockconf').hide();
        $('#blockinfo').fadeIn("fade");
        $('#nextb').show();
        $('#backb').show();
        $('#confb').hide();
        etap--;
    }
if (etap==1) { $('#backb').hide();}

});/*
$('#confb').click(function () {
    if(verifetap3())
    { alert(etap);}
    else return;



});*/
$('#nom').on('keypress click',function () {
     $(this).removeClass('ierror');
    $('#nom').attr("placeholder", "")
   // alert('test');

});
$('#tel').on('keypress click',function () {
     $(this).removeClass('ierror2');
    $('#nom').attr("placeholder", "")
   // alert('test');

});
$('#ouv').on('keypress click',function () {
     $(this).removeClass('ierror2');
    $('#nom').attr("placeholder", "")
   // alert('test');

});
$('#ferm').on('keypress click',function () {
     $(this).removeClass('ierror2');
    $('#nom').attr("placeholder", "")
   // alert('test');

});


function verifetap1()
{
    var test=false;
    if ($('#adr').val().length ===0 )
    {
        $('#adr').addClass('ierror'); $('#adr').attr("placeholder", "adresse invalid");alert('adr nuuuuuul');
        test= false;
    }
    if ($('#nom').val().length ===0 )
    {
        $('#nom').addClass('ierror'); $('#nom').attr("placeholder", "nom invalid");alert('nom nuuuuuul');
        test= false;
    }


        else {test = true;}

    return test;

}
function verifetap2()
{
    var test=false;
   /* if ($('#adrstep2').val().length ===0 )
    {
        $('#adrstep2').addClass('ierror'); $('#adrstep2').attr("placeholder", "adresse invalid");alert('adr nuuuuuul');
        test= false;
    }
    if ($('#nomstep2').val().length ===0 )
    {
        $('#nomstep2').addClass('ierror'); $('#nomstep2').attr("placeholder", "nom invalid");alert('nom nuuuuuul');
        test= false;
    }*/

   if ($('#tel').val().length !=9 )
    {
        $('#tel').addClass('ierror2'); $('#tel').attr("placeholder", "tel invalid");alert('tel nuuuuuul'+' tel length :  '+$('#tel').val().length);
        test= false;


    }

    else  if ($('#ouv').val().length ===0 )
    {
        $('#ouv').addClass('ierror2'); $('#ouv').attr("placeholder", "");alert('ouv nuuuuuul'+' ouv length :  '+$('#ouv').val().length);
        test= false;
    }
    else if ($('#ferm').val().length ===0  )
    {
        $('#ferm').addClass('ierror2'); $('#ferm').attr("placeholder", "");alert('ferm nuuuuuul'+' ferm length :  '+$('#ferm').val().length);
        test= false;
    }
   else if (!$('#typeresto').val()   )
    {
        $('.itype').addClass('itypeerror');alert('type nuuuuuul');
        test= false;
    }
    else {test=true;}

    return test;

}function verifetap3()
{
    var test=false;

   if ($('#email').val().length ===0 )
    {
        $('#email').addClass('ierror2'); $('#email').attr("placeholder", "email invalid");alert('email nuuuuuul'+' tel length :  '+$('#email').val().length);
        test= false;


    }

    else  if ($('#mdp').val().length ===0 )
    {
        $('#mdp').addClass('ierror2'); $('#mdp').attr("placeholder", "");alert('ouv nuuuuuul'+' ouv length :  '+$('#mdp').val().length);
        test= false;
    }
    else if ($('#mdp2').val() != $('#mdp').val()  )
    {
        $('#mdp2').addClass('ierror2'); $('#mdp2').attr("placeholder", "");alert('mdp not same nuuuuuul'+' ferm length :  '+$('#ferm').val().length);
        test= false;
    }
   else if ($('#rib').val().length ===0   )
    {
        $('#rib').addClass('ierror2'); $('#rib').attr("placeholder", "");alert('ferm nuuuuuul'+' ferm length :  '+$('#ferm').val().length);
        test= false;
    }
    else {test=true;}

    return test;

}
$('form').on('keyup keypress', function(e) {
    var keyCode = e.keyCode || e.which;
    if (keyCode === 13) {
        e.preventDefault();
        return false;
    }
});