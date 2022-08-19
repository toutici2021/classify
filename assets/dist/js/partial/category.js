$(function () {

    'use strict'

    $(".edit").on("click", function () {
        $("#editCategory .brand-id option").prop('selected', false);
        $.ajax({
            type: "GET",
            url: site_url + "/category/edit/" + $(this).data("id"),
            success: function (data) {
                $("#editCategory .id").val(data.id);
                $("#editCategory .parent-category").val(data.category_id).trigger('change');
                $("#editCategory .category-name").val(data.category_name);

                jQuery.each(data.brands, function (index, item) {
                    $(".brand-id-" + item.id).prop('selected', true);
                })
                $("#editCategory .brand-id").trigger('change');

                $("#editCategory .fa-icon").val(data.fa_icon).trigger('change');
                $("#editCategory .description").val(data.description);
                if (data.media_name) {
                    $("#editCategory .image-preview").html('<img src="' + site_url + '/' + data.media_name + '" height="150">');
                }
                $("#editCategory").modal("show");
            }
        });
    });


    $('.select2-icon').selectpicker({
        iconBase: 'fa',
    });

    $('.data-table').DataTable({
        "paging": true,
        "lengthChange": true,
        "searching": true,
        "ordering": true,
        "info": true,
        "autoWidth": true,
        "responsive": true,
    });


    $('.delete-category').on('click', function (e) {
        const selector = $(this);
        const data_id = $(this).data('id');
        const name = $(this).data('name');

        Swal.fire({
            title: 'Are you sure you want to delete the category ' + name + ' ?',
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
                    url: site_url+'/category/delete/'+data_id,
                    success: function (data) {
                        toastr["error"](data.message);
                        selector.closest('div').fadeOut('slow');
                    }
                });
            }
        })
    });

});
