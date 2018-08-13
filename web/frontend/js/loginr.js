$('#loginb').click(function () {

    if ($('#email').val().length ===0 )
    {
        $('#email').addClass('ierror'); $('#email').attr("placeholder", "email invalid");alert('adr nuuuuuul');
        return false;
    }
    if ($('#mdp').val().length ===0 )
    {
        $('#mdp').addClass('ierror'); $('#mdp').attr("placeholder", "mot de passe invalid");alert('nom nuuuuuul');
        return false;
    }


    else {return true;}

});
$('#email').on('keypress click',function () {
    $(this).removeClass('ierror');
    $(this).attr("placeholder", "")
    // alert('test');

});
$('#mdp').on('keypress click',function () {
    $(this).removeClass('ierror');
    $(this).attr("placeholder", "")
    // alert('test');

});
$('#emailrec').on('keypress click',function () {
    $(this).removeClass('ierror ierror3');
    $(this).attr("placeholder", "")
    // alert('test');

});
$('#recupb').click(function () {
    if ($('#emailrec').val().length===0)
    {        $('#emailrec').addClass('ierror ierror3'); $('#emailrec').attr("placeholder", "email invalid");

        return false}
    else {
        $('.lostmdpmsg').show();
        $('.lostmdpmsg span').text($('#emailrec').val());
        return true;
    }
});