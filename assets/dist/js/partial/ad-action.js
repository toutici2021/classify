$(function () {

    'use strict';

    $('.data-table').dataTable();
    $(".data-table").on('click', '.delete-ad', function (e) {
        const selector = $(this);
        const data_id = $(this).data('id');
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
                    url: site_url+'/ads/delete/'+data_id,
                    success: function (data) {
                        toastr["error"](data.message);
                        selector.closest('tr').fadeOut('slow');
                    }
                });
            }
        })
    });


    $(".data-table").on('click', '.approveAds', function (e) {
        const selector = $(this);
        const slug = selector.data('slug');
        const value = selector.data('value');

        Swal.fire({
            title: 'Are you sure you want to approve this ad ?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, approve it !'
        }).then((result) => {
            if (result.value) {
                $('.loader-border').addClass('is-active');
                $.ajax({
                    type: "GET",
                    url: site_url+'/ads/status-change/'+slug+'/'+value,
                    success: function (data) {
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


    $(".data-table").on('click', '.blockAds', function (e) {
        const selector = $(this);
        const slug = selector.data('slug');
        const value = selector.data('value');
        Swal.fire({
            title: 'Are you sure you want to block this ad ?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, block it !'
        }).then((result) => {
            if (result.value) {
                $('.loader-border').addClass('is-active');
                $.ajax({
                    type: "GET",
                    url: site_url+'/ads/status-change/'+slug+'/'+value,
                    success: function (data) {
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
