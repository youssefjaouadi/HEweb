$('#btn-accept').click(function () {
$('#btn-refuse').hide();
$('#btn-accept').hide();
$('#btn-ready').show();
$('#cmd-state').removeClass('nonecheckedstate');
$('#cmd-state').text('Commande en cour');
$('#cmd-state').addClass('waitingstate')
});
$('#btn-ready').click(function () {
    $('#btn-ready').hide();
    $('#btn-wait').show();
    $('#cmd-state').removeClass('waitingstate');
    $('#cmd-state').text('En attend de validation');
    $('#cmd-state').addClass('waitingvalidationstate')

});
$('#btn-refuse').click(function () {
    var dialog = new mdc.dialog.MDCDialog(document.querySelector('#my-mdc-dialog'));
    dialog.show();
    dialog.listen('MDCDialog:accept', function() {
         alert('accepted');
       // $('#sucsess-box').css('display','block');
    })

})