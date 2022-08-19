$(function () {
    'use strict'


    $('.deleteReport').on('click', function () {
        let selector = $(this);
        let id = selector.data('id');
        Swal.fire({
            title: 'Are you sure you want to delete this report ?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.value) {
                $.ajax({
                    type: "GET",
                    url: site_url+'/ads/delete-ads-report/'+id,
                    success: function (data) {
                        if (data.success === 1) {
                            selector.closest('tr').hide('slow');
                            toastr["success"](data.message);
                        }
                    }
                });
            }
        })
    });
});
