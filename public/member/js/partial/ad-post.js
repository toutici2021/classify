$(function () {

    'use strict'
    $(document).on('change', '.price_input_group', function () {
        var payable_price = 0;
        var checkedValues = $('.price_input_group input:checked').map(function () {
            return $(this).data('price');
        }).get();

        for (var i = 0; i < checkedValues.length; i++) {
            payable_price += parseInt(checkedValues[i]); //don't forget to add the base
        }

        $('#payable_amount').text(payable_price);
        if (payable_price > 0) {
            $('#payment_info').show('slow');
        } else {
            $('#payment_info').hide('slow');
        }

    });

    var payable_price = 0;
    var checkedValues = $('.price_input_group input:checked').map(function () {
        return $(this).data('price');
    }).get();

    for (var i = 0; i < checkedValues.length; i++) {
        payable_price += parseInt(checkedValues[i]); //don't forget to add the base
    }

    $('#payable_amount').text(payable_price);
    if (payable_price > 0) {
        $('#payment_info').show('slow');
    } else {
        $('#payment_info').hide('slow');
    }


    if (window.File && window.FileList && window.FileReader) {
        $(".multiple-file-upload").on("change", function (e) {
            var uploadItemLength = $(this).parents('.uploaded-field').find('.upload-item').length;
            let thisAfterList = $(this).parents('.uploaded-field').find('.upload-file-list');

            let files = e.target.files,
                filesLength = files.length;
            var max_number_of_image = "{{ get_option('maximum_number_of_ad_image') }}";

            if (filesLength > max_number_of_image || uploadItemLength >= max_number_of_image) {
                Swal.fire({
                    icon: 'error',
                    title: 'Limit Exceeded',
                    text: 'You are allowed to upload maximum ' + max_number_of_image + '  images',
                });
            } else {
                for (let i = 0; i < filesLength; i++) {
                    let f = files[i]
                    let fileReader = new FileReader();
                    fileReader.onload = (function (e) {
                        let file = e.target;
                        $("<li class=\"upload-item mb-3 mr-3 border rounded\">" +
                            "<img class=\"uploaded-img\" src=\"" + e.target.result + "\" alt='File'/>" +
                            "<br/><button type='button' class=\"remove-uploaded\"><span class='text'>&times</span></button>" +
                            "</li>").appendTo(thisAfterList);
                        localStorage.setItem("#uploadFileList", $uploadFileList.html());
                        localStorage.setItem(".upload-item", $uploadFileList.html());


                        $(".remove-uploaded").on('click', function () {
                            $(this).parent(".upload-item").remove();
                        });

                    });
                    fileReader.readAsDataURL(f);
                }
            }

        });
    } else {
        alert("Your browser doesn't support to File API")
    }


    $('[name="category"]').on('change', function () {
        var base_url = $("#base_url").val();
        $.ajax({
            type: 'GET',
            url: base_url+'/member/ads/get-brand-by-category/'+$(this).val(),
            success: function (data) {
                generate_option_from_json(data, 'category_to_brand');
            }
        });
    });


    $('[name="country"]').on('change', function () {
        var base_url = $("#base_url").val();
        $.ajax({
            type: 'GET',
            url: base_url+'/member/ads/get-state-by-country/'+$(this).val(),
            success: function (data) {
                generate_option_from_json(data, 'country_to_state');
            }
        });
    });

    $('[name="state"]').on('change', function () {
        var base_url = $("#base_url").val();
        $.ajax({
            type: 'GET',
            url: base_url + '/member/ads/get-city-by-state/'+$(this).val(),
            success: function (data) {
                generate_option_from_json(data, 'state_to_city');
            }
        });
    });




    $(document).on('click', '.remove-uploaded', function () {
        $(this).parent(".upload-item").remove();
    });

    $('.select2').select2({
        theme: 'bootstrap4',
    });

    $('.note-statusbar').hide();

    function generate_option_from_json(jsonData, fromLoad) {
        let i;
        let option;
        if (fromLoad === 'category_to_brand') {
            option = '';
            if (jsonData.length > 0) {
                option += '<option value="0" selected> Select A Brand </option>';
                for (i in jsonData) {
                    option += '<option value="' + jsonData[i].id + '"> ' + jsonData[i].brand_name + ' </option>';
                }
                $('#brand_select').html(option);
                $('#brand_select').select2({
                    "theme": 'bootstrap4',
                    width: '100%',
                });
            } else {
                $('#brand_select').html('');
                $('#brand_select').select2({
                    "theme": 'bootstrap4',
                    width: '100%',
                });
            }

        } else if (fromLoad === 'country_to_state') {
            option = '';
            if (jsonData.length > 0) {
                option += '<option value="0" selected> Select State </option>';
                for (i in jsonData) {
                    option += '<option value="' + jsonData[i].id + '"> ' + jsonData[i].state_name + ' </option>';
                }
                $('#state_select').html(option);
                $('#state_select').select2({
                    "theme": 'bootstrap4',
                    width: '100%',
                });
            } else {
                $('#state_select').html('');
                $('#state_select').select2({
                    "theme": 'bootstrap4',
                    width: '100%',
                });
            }


        } else if (fromLoad === 'state_to_city') {
            option = '';
            if (jsonData.length > 0) {
                option += '<option value="0" selected> Select City </option>';
                for (i in jsonData) {
                    option += '<option value="' + jsonData[i].id + '"> ' + jsonData[i].city_name + ' </option>';
                }
                $('#city_select').html(option);
                $('#city_select').select2({
                    "theme": 'bootstrap4',
                    width: '100%',
                });
            } else {
                $('#city_select').html('');
                $('#city_select').select2({
                    "theme": 'bootstrap4',
                    width: '100%',
                });
            }
        }
    }

});


$(document).on('click', '.remove-uploaded', function () {
    var base_url = $("#base_url").val();

    // $.ajax({
    //     type: 'get',
    //     url: base_url + '/member/ads/remove-image/' + $(this).data('id'),
    //     success: function (data) {
    //         // console.log(data);
    //     }
    // });

    $("#removed_image_ids").append("<input type='hidden' name='media_id[]' value='" + $(this).data('id') + "'>");
    $(this).parent(".upload-item").remove();
});
