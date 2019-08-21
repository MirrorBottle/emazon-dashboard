let button = $('#confirmDeleteMenu');
let code;

$('#deleteMenu').on('click', () => {
    code = uniqid();
    $('#codeDeleteMenu').text(code);
    $('#confirmCode').val('');
});

$('#confirmCode').on('keyup', function() {
    $(button).attr('disabled', this.value !== code);
});