// Menu Delete Confirmation
let deleteRoleButton = $('#confirmDeleteRole');
let deleteRoleCode;

$('#idForDelete').on('click', () => {
    deleteRoleCode = uniqid();
    $('#codeDeleteRole').text(deleteRoleCode);
    $('#confirmCode').val('');
});

$('#confirmCode').on('keyup', function() {
    $(deleteRoleButton).attr('disabled', this.value !== deleteRoleCode);
});