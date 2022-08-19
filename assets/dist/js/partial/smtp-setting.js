$(function () {

    'use strict'

    $('#settings_save_btn').on('click', function (e) {
        e.preventDefault();
        const this_btn = $(this);
        this_btn.attr('disabled', 'disabled');

        const form_data = this_btn.closest('form').serialize();
        $.ajax({
            url: site_url+'/settings/saveMailEnvironment',
            type: "POST",
            data: form_data,
            success: function (data) {
                if (data.success === 1) {
                    this_btn.removeAttr('disabled');
                    toastr["success"](data.message);
                }
            }
        });
    });
});
