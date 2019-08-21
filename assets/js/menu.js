let button = $('#confirmDeleteMenuButton');
let code;

$('#deleteMenuButton').on('click', () => {
    code = uniqid();
    $('#confirmDeleteMenuCode').text(code);
    $('#confirmDeleteMenuInput').val('');
});

$('#confirmDeleteMenuInput').on('keyup', function() {
    $(button).attr('disabled', this.value !== code);
});