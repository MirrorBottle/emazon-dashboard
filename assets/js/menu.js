// Menu Delete Confirmation
let button = $('#confirmDeleteMenu');
let code;

$('#idForDelete').on('click', () => {
    code = uniqid();
    $('#deleteMenuCode').text(code);
    $('#confirmCode').val('');
});

$('#confirmCode').on('keyup', function() {
    $(button).attr('disabled', this.value !== code);
});