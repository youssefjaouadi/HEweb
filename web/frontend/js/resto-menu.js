$('#display-plat').click(function () {
  /*  $('#mitems').show();
    alert('display');*/
    $('#display-plat').hide();
    $('#hide-plat').show();
    $( "#mitems" ).slideDown( "slow" );

});
$('#hide-plat').click(function () {
    $('#hide-plat').hide();
    $('#display-plat').show();
    $( "#mitems" ).slideUp( "slow" );
    //alert('hide');

});
$('#new-display-plat').click(function () {
    $('#new-display-plat').hide();
    $('#new-hide-plat').show();
    $('#new-mitems').show();
    alert('display');

});
$('#new-hide-plat').click(function () {
    $('#new-hide-plat').hide();
    $('#new-display-plat').show();
    $('#new-mitems').hide();
    alert('hide');

});
$('#btn-new-menu').click(function () {

$('#new-menu').slideDown(1000);
});
$('#del-menu').click(function () {
   /* const MDCDialog = mdc.dialog.MDCDialog;
    const MDCDialogFoundation = mdc.dialog.MDCDialogFoundation;
    const util = mdc.dialog.util;
    var dialog = new mdc.dialog.MDCDialog(document.querySelector('#my-mdc-dialog'));



    document.querySelector('#my-mdc-dialog').addEventListener('click', function (evt) {
        dialog.show();

    });*/
    var dialog = new mdc.dialog.MDCDialog(document.querySelector('#my-mdc-dialog'));
    dialog.show();
    dialog.listen('MDCDialog:accept', function() {
       // console.log('accepted');
        $('#sucsess-box').css('display','block');
    })
});
$('#close-alert').click(function () {
$('#sucsess-box').hide();

});