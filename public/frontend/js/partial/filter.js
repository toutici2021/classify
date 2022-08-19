$(function () {
    'use strict'

    $("#filter #category_id").on("change", function () {
        $("#filter #subcategory_id").empty().append('<option value="all">All Subcategory</option>');
        var base_url = $("#base_url").val();
        $.ajax({
            type: "GET",
            url: base_url + '/reference/subcategoey-for-category/' + $(this).val(),
            success: function (info) {
                jQuery.each(info, function (i, val) {
                    $("#filter #subcategory_id").append($('<option>', {
                        value: val.id,
                        text: val.category_name
                    }));
                });
            }
        });
    });

    $("#filter #country_id").on("change", function () {
        $("#filter #state_id").empty().append('<option value="all">Select State</option>');
        var base_url = $("#base_url").val();
        $.ajax({
            type: "GET",
            url: base_url + '/reference/state-for-country/' + $(this).val(),
            success: function (info) {
                jQuery.each(info, function (i, val) {
                    $("#filter #state_id").append($('<option>', {
                        value: val.id,
                        text: val.state_name
                    }));
                });
            }
        });
    });

    $("#filter #state_id").on("change", function () {
        $("#filter #city_id").empty().append('<option value="all">Select City</option>');
        var base_url = $("#base_url").val();
        $.ajax({
            type: "GET",
            url: base_url + '/reference/city-for-state/' + $(this).val(),
            success: function (info) {
                jQuery.each(info, function (i, val) {
                    $("#filter #city_id").append($('<option>', {
                        value: val.id,
                        text: val.city_name
                    }));
                });
            }
        });
    });
});
