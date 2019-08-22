// Menu Delete Confirmation
let deleteMenuButton = $('#confirmDeleteMenu');
let deleteMenuCode;

$('#idForDelete').on('click', () => {
    deleteMenuCode = uniqid();
    $('#deleteMenuCode').text(deleteMenuCode);
    $('#confirmCode').val('');
});

$('#confirmCode').on('keyup', function() {
    $(deleteMenuButton).attr('disabled', this.value !== deleteMenuCode);
});