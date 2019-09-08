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

// Display controllers to select url menu
$('input#menuUrl').on('click', function() {
    let controllerListDropdown = $(this).next();

    $.ajax({
        url: `${BASEURL}management/menu/get_all_controller/${$(this).val()}`,
        method: 'get',
        dataType: 'json',
        error: () => $(controllerListDropdown).html('<p class="text-center m-0">No controller or folder found.</p>'),
        success: data => {
            $(controllerListDropdown).html('');

            data.map(controller => {
                if( !controller.match(/(index.html|^\.)/) ) {
                    if( controller.match('.php') ) {
                        controller = controller.replace('.php', '');
                        $(controllerListDropdown).append(
                            `<a class="dropdown-item" href="#">${controller}</a>`
                        );
                    }
                    else {
                        $(controllerListDropdown).append(
                            `<a class="dropdown-item" href="#">${controller+'/'}</a>`
                        );
                    }
                }
            });

            $.each($(controllerListDropdown).children(), (i, btn) => {
                $(btn).on('click', function() {
                    let controller = $(this).text();
                    $(this).parent().prev().val(
                        `${$(this).parent().prev().val()}${controller}`.toLowerCase()
                    );
                });
            });
        }
    });
});