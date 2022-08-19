$(function () {

    'use strict'

    /**
     * show or hide stripe and paypal settings wrap
     */
    $('#enable_facebook_login').on('click', function () {
        if ($(this).prop('checked')) {
            $('#facebook_login_api_wrap').slideDown();
        } else {
            $('#facebook_login_api_wrap').slideUp();
        }
    });
    $('#enable_google_login').on('click', function () {
        if ($(this).prop('checked')) {
            $('#google_login_api_wrap').slideDown();
        } else {
            $('#google_login_api_wrap').slideUp();
        }
    });


    $('#settings_save_btn').on('click', function (e) {
        e.preventDefault();
        const this_btn = $(this);
        this_btn.attr('disabled', 'disabled');

        const form_data = this_btn.closest('form').serialize();
        $.ajax({
            url: site_url+'/settings/save-settings',
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
