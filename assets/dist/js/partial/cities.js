$(function () {

    'use strict'

    $(".country-id").on("change", function () {
        $("#modal-city .state-id").empty();
        $.ajax({
            type: "GET",
            url: site_url + "/locations/get-state-for-city/" + $(this).val(),
            success: function (data) {
                $.each(data, function (i, val) {
                    $("#modal-city .state-id").append($('<option>', {
                        value: val.id,
                        text: val.state_name
                    }));
                });
            }
        });
    });

    $(".get-states").on("change", function () {
        $("#editCity .state-id").empty();
        $.ajax({
            type: "GET",
            url: site_url + "/locations/get-state-for-city/" + $(this).val(),
            success: function (data) {
                $.each(data, function (i, val) {
                    $("#editCity .state-id").append($('<option>', {
                        value: val.id,
                        text: val.state_name
                    }));
                });
            }
        });
    });


    $(document).on('click', '.edit', function () {
        $.ajax({
            type: "GET",
            url: site_url + "/locations/edit-city/" + $(this).data("id"),
            success: function (data) {
                $("#editCity .id").val(data['city'].id);
                $("#editCity .country-id").val(data['country_id']).trigger('change');
                $("#editCity .city-name").val(data['city'].city_name);

                $.each(data['states'], function (i, val) {
                    if (val.id == data['city'].state_id) {
                        $("#editCity .state-id").append($('<option>', {
                            value: val.id,
                            text: val.state_name,
                            selected: true
                        }));
                    } else {
                        $("#editCity .state-id").append($('<option>', {
                            value: val.id,
                            text: val.state_name
                        }));
                    }

                });

                $("#editCity").modal("show");
            }
        });
    });

    $('.city-data-table').dataTable({
        serverSide: true,
        processing: true,
        responsive: true,
        lengthChange: true,
        ajax: site_url+"/locations/getCityData",
        columns: [
            {data: 'city_name', name: 'city_name'},
            {data: 'state_name', name: 'state_name'},
            {data: 'country_name', name: 'country_name'},
            {data: 'actions', name: 'actions'},
        ],
        pageLength: 20,
    });


    $(document).on("click", "a.delete-city", function () {

        const selector = $(this);
        const id = $(this).data('id');
        const name = $(this).data('name');

        Swal.fire({
            title: 'Are you sure you want to delete the city ' + name + ' ?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.value) {
                $.ajax({
                    type: 'GET',
                    url: site_url+'/locations/city/delete/'+id,
                    success: function (data) {
                        if (data.success === 1) {
                            selector.closest('tr').fadeOut('fast');
                            Swal.fire({
                                title: 'Deleted',
                                html: '<p> State <span style="color:red">' + name + '</span> has been deleted',
                                timer: 2000,
                                icon: 'success'
                            })
                        }
                    }
                })
            }
        })
    });
});
