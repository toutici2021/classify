$(function () {

    'use strict'

    $('.delete-ad').on('click', function (e) {
        const selector = $(this);
        var base_url = $("#base_url").val();

        Swal.fire({
            title: 'Are you sure you want to delete this ad ?',
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
                    url: base_url+'/member/ads/delete/'+$(this).data('id'),
                    success: function (data) {
                        toastr["error"](data.message);
                        selector.closest('tr').fadeOut('slow');
                    }
                });
            }
        })
    });
});
