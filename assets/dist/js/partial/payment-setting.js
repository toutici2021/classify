$(function () {

    'use strict'

    $('input[type="checkbox"], input[type="radio"]').on('click', function () {
        const input_name = $(this).attr('name');
        let input_value = 0;
        if ($(this).prop('checked')) {
            input_value = $(this).val();
        }
        $.ajax({
            url: site_url+'/settings/save-payment-settings',
            type: "POST",
            data: {[input_name]: input_value},
        });
    });

    /**
     * show or hide stripe and paypal settings wrap
     */
    $('#enable_paypal').on('click', function () {
        if ($(this).prop('checked')) {
            $('#paypal_settings_wrap').slideDown();
        } else {
            $('#paypal_settings_wrap').slideUp();
        }
    });
    $('#enable_stripe').on('click', function () {
        if ($(this).prop('checked')) {
            $('#stripe_settings_wrap').slideDown();
        } else {
            $('#stripe_settings_wrap').slideUp();
        }
    });


    /**
     * Send settings option value to server
     */
    $('#settings_save_btn').on('click', function (e) {
        e.preventDefault();

        const this_btn = $(this);
        this_btn.attr('disabled', 'disabled');

        const form_data = this_btn.closest('form').serialize();
        $.ajax({
            url: site_url+'/settings/save-payment-settings',
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
