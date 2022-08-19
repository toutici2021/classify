"use strict";

$(function () {
    $('[data-toggle="tooltip"]').tooltip();
})

$.extend($.fn.dataTable.defaults, {
    language: {
        "processing": "Loading. Please wait..."
    },

});


$('.data-table').DataTable({
    "paging": true,
    "lengthChange": false,
    "searching": true,
    "ordering": true,
    "info": true,
    "autoWidth": true,
    "responsive": true,
    "pageLength": 15,
});


$('.select2').select2({
    "theme": 'bootstrap4',
    width: '100%',
});
