$(function () {

    'use strict'

    $(document).on('click', '.edit', function () {
        $.ajax({
            type: "GET",
            url: site_url + "/brands/edit/" + $(this).data("id"),
            success: function (data) {
                $("#editBrand .id").val(data.id);
                $("#editBrand .brand-name").val(data.brand_name);
                $("#editBrand").modal("show");
            }
        });
    });


    $('.brand-data-table').dataTable({
        serverSide: true,
        processing: true,
        responsive: true,
        lengthChange: false,
        ajax: site_url+"/brands/getBrandsData",
        columns: [
            {data: 'brand_name', name: 'brand_name'},
            {data: 'product_count', name: 'product_count'},
            {data: 'actions', name: 'actions'},
        ],
        pageLength: 15,
    });


    $(document).on("click", "a.delete-brand", function () {

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
                    url: site_url+'/brands/delete/'+id,
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
