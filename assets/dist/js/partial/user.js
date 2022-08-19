$(function () {

    'use strict'

    $('.blockUser').on('click', function (e) {
        e.preventDefault();
        const this_btn = $(this);
        const user_id = this_btn.data('id');
        $.ajax({
            type: "GET",
            url: site_url+'/administrators/block-unblock/'+user_id+"/block",
            success: function (data) {
                if (data.success === 1) {
                    this_btn.hide();
                    this_btn.closest('tr').find('.unBlockUser').show();
                    toastr["error"](data.message);
                }
            }
        });
    });
    $('.unBlockUser').on('click', function (e) {
        e.preventDefault();
        const this_btn = $(this);
        const user_id = this_btn.data('id');
        $.ajax({
            type: "GET",
            url: site_url+'/administrators/block-unblock/'+user_id+"/unblock",
            success: function (data) {
                if (data.success === 1) {
                    this_btn.hide();
                    this_btn.closest('tr').find('.blockUser').show();
                    toastr["success"](data.message);
                }
            }
        });
    });


    $('.delete-user').on('click', function (e) {
        e.preventDefault();
        const selector = $(this);
        const user_id = selector.data('id');
        Swal.fire({
            title: 'Are you sure you want to delete this user ?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, do it !'
        }).then((result) => {
            if (result.value) {
                $('.loader-border').addClass('is-active');
                $.ajax({
                    type: "GET",
                    url: site_url+'/users/delete/'+user_id,
                    success: function (data) {

                       // console.log(data);

                        if (data.success === 1) {
                            $('.loader-border').removeClass('is-active');
                            selector.closest('tr').hide('slow');
                            toastr["success"](data.message);
                        } else {
                            selector.closest('tr').hide('slow');
                            toastr["error"](data.message);
                        }
                    }
                });
            }
        })

    });

});
