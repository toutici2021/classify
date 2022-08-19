'use strict'
$('.delete-slider').on('click', function (e) {
    const selector = $(this);
    const data_id = $(this).data('id');
    const name = $(this).data('name');

    Swal.fire({
        title: 'Are you sure you want to delete the slider ' + name + ' ?',
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
                url: site_url+'/slider/delete/'+data_id,
                success: function (data) {
                    toastr["error"](data.message);
                    selector.closest('tr').fadeOut('slow');
                }
            });
        }
    })
});
