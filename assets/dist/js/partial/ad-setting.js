$(function () {
    'use strict'
    $('input[type="checkbox"], input[type="radio"]').on('click', function () {
        const input_name = $(this).attr('name');
        let input_value = 0;
        if ($(this).prop('checked')) {
            input_value = $(this).val();
        }
        $.ajax({
            url: site_url+'/settings/save-settings',
            type: "POST",
            data: {[input_name]: input_value},
        });
    });


    $('input[name="ads_price_plan"]').on('click', function () {
        const price_plan = $(this).val();

        if (price_plan === 'all_ads_paid') {
            $('.set_pricing_wrap').slideDown('slow');
            $('#regular_ads_price_wrap').show();
        } else if (price_plan === 'regular_ads_free_premium_paid') {
            $('#regular_ads_price_wrap').hide();
            $('.set_pricing_wrap').slideDown('slow');
        } else {
            $('.set_pricing_wrap').slideUp();
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
