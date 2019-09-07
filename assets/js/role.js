// Menu Delete Confirmation
let deleteRoleButton = $('#confirmDeleteRole');
let deleteRoleCode;

$.each($('button#idForDelete'), (i, btn) => {
    $(btn).on('click', () => {
        deleteRoleCode = uniqid();
        $('#codeDeleteRole').text(deleteRoleCode);
        $('#confirmCode').val('');
    });
});

$('#confirmCode').on('keyup', function() {
    $(deleteRoleButton).attr('disabled', this.value !== deleteRoleCode);
});

// Edit Role
$.each($('button#idForEdit'), (i, btn) => {
    $(btn).on('click', function() {
        let id = $(this).data('id');
        $.ajax({
            url: `${BASEURL}management/role/get_role_info`,
            method: 'post',
            data: {id: id},
            dataType: 'json',
            success: ({id, name}) => {
                $('#roleIdEdit').val(id);
                $('#roleNameEdit').val(name);
            }
        });
    });
});

// Delete Role
$.each($('button#idForDelete'), (i, btn) => {
    $(btn).on('click', function() {
        let id = $(this).data('id');
        $('#deleteRoleForm').attr('action', `${BASEURL}/management/role/delete/${id}`);
    });
});