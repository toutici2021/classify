$(function () {

    'use strict'
    $(".enquiry-reply").on("click", function (e) {
        e.preventDefault();
        $("#enquiry-reply-email-to").val(($(this).data('email')));
        $("#enquiry-reply-modal").show();
        $('.message_content').summernote({
            dialogsInBody: true,
            height: '350px'
        });
    });
});
