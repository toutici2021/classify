$("#email_subscription").submit(function (e) {
    e.preventDefault();
    let form = $(this);
    let url = form.attr('action');
    const subscriber_email = document.getElementById("subscriber_email").value;
    $("#subscribe").attr('disabled', 'disabled').text('Loading...');

    $.ajax({
        type: "POST",
        url: url,
        data: {email: subscriber_email},
        success: function (data) {
            if (data.status === 0) {
                $("#subscribe").removeAttr('disabled').text('Subscribe');
                $("#invalid_email").css('display', 'block').text(data.message).delay(4000).fadeOut();
                document.getElementById("subscriber_email").value = '';
            } else {
                $("#subscribe").removeAttr('disabled').text('Subscribe');
                $("#subscription_success").css('display', 'block').text(data.message).delay(4000).fadeOut();
                document.getElementById("subscriber_email").value = '';
            }
        }
    });
});
