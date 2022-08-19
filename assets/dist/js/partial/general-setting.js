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


    $('input[name="date_format"]').click(function () {
        $('#date_format_custom').val($(this).val());
    });
    $('input[name="time_format"]').click(function () {
        $('#time_format_custom').val($(this).val());
    });

    $('#settings_save_btn').click(function (e) {
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
