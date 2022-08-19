$(function () {
    'use strict'
    $(document).on('click', '.edit', function () {
        $.ajax({
            type: "GET",
            url: site_url + "/locations/edit-state/" + $(this).data("id"),
            success: function (data) {
                $("#editState .id").val(data.id);
                $("#editState .country-id").val(data.country_id).trigger('change');
                $("#editState .state-name").val(data.state_name);
                $("#editState").modal("show");
            }
        });
    });

    $('.state-data-table').dataTable({
        serverSide: true,
        processing: true,
        responsive: true,
        lengthChange: false,
        ajax: site_url+"/locations/getStateData",
        columns: [
            {data: 'state_name', name: 'states.state_name'},
            {data: 'country_name', name: 'country.country_name'},
            {data: 'actions', name: 'actions'},
        ],
        pageLength: 15,
    });


    $(document).on("click", "a.delete-state", function () {

        const selector = $(this);
        const id = $(this).data('id');
        const name = $(this).data('name');

        Swal.fire({
            title: 'Are you sure you want to delete the state ' + name + ' ?',
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
                    url: site_url+'/locations/states/delete/'+id,
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
