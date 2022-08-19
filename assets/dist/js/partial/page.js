$(function () {

    'use strict'

    $('.brand-data-table').dataTable({
        serverSide: true,
        processing: true,
        responsive: true,
        lengthChange: false,
        ajax: site_url+"/pages/getPages",
        columns: [
            {data: 'title', name: 'title'},
            {data: 'created_at', name: 'created_at'},
            {data: 'actions', name: 'actions'},
        ],
        pageLength: 15,
    });


    $(document).on("click", "a.delete-page", function () {

        const selector = $(this);
        const id = $(this).data('id');
        const name = $(this).data('name');

        Swal.fire({
            title: 'Are you sure you want to delete the brand ' + name + ' ?',
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
                    url: site_url+'/pages/delete/'+id,
                    success: function (data) {
                        if (data.success === 1) {
                            selector.closest('tr').fadeOut('fast');
                            Swal.fire({
                                title: 'Deleted',
                                html: '<p> Brand <span style="color:red">' + name + '</span> has been deleted',
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
