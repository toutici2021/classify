$(function () {

    'use strict'

    $(".related-ad-owl.owl-carousel").owlCarousel({
        stagePadding: 5,
        loop: true,
        autoplayTimeout: 2000,
        margin: 16,
        responsiveClass: true,
        dots: false,
        nav: true,
        autoplay: true,
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 1
            },
            468: {
                items: 2
            },
            758: {
                items: 3
            },
            992: {
                items: 3
            }
        }
    });

    $(".secondary-img-list.owl-carousel").owlCarousel({
        loop: false,
        margin: 15,
        responsiveClass: true,
        dots: false,
        nav: true,
        autoplay: false,
        autoplayHoverPause: true,
        items: 6,
    });


    // ============= product primary image visualization visualization =================
    $('.secondary-img').on('click', function () {
        $('.secondary-img').not(this).removeClass('img-thumbnail');
        $(this).addClass('img-thumbnail');
        let imgSrc = $(this).find('img').attr('src');
        $('#primaryImg').find('img').attr('src', imgSrc);
    });

    $('#primaryImg').on('mousemove', function (e) {
        $(this).find('img').css({
            'margin-left': 50 + 'px',
            'margin-top': 50 + 'px',
            'transform-origin': ((e.pageX - $(this).offset().left) / $(this).width()) * 150 + '% ' + ((e.pageY - $(this).offset().top) / $(this).height()) * 150 + '%',
        });
    }).mouseleave(function () {
        $(this).find('img').css({
            'margin-left': 0,
            'margin-top': 0,
        });
    });


    /**
     * Report ads as abusive
     */

    $('button#report_ad').on('click', function () {
        const reason = $('[name="reason"]').val();
        const email = $('[name="reporter_email"]').val();
        const message = $('[name="reporter_message"]').val();
        const advertise_id = $('[name="advertise_id"]').val();
        var base_url = $("#base_url").val();
        const regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        let error = 0;
        if (reason.length < 1) {
            $('#reason_info').html('<p class="text-danger">Reason required</p>');
            error++;
        } else {
            $('#reason_info').html('');
        }
        if (email.length < 1) {
            $('#email_info').html('<p class="text-danger">Email required</p>');
            error++;
        } else {
            if (!regex.test(email)) {
                $('#email_info').html('<p class="text-danger">Valid email required</p>');
                error++;
            } else {
                $('#email_info').html('');
            }
        }
        if (message.length < 1) {
            $('#message_info').html('<p class="text-danger">Message required</p>');
            error++;
        } else {
            $('#message_info').html('');
        }

        if (error < 1) {
            $('#loadingOverlay').show();
            $.ajax({
                type: 'POST',
                url: base_url+'/member/ads/report-ads',
                data: {
                    reason: reason,
                    email: email,
                    message: message,
                    advertise_id: advertise_id,
                },
                success: function (data) {
                    if (data.status === 1) {
                        toastr["success"](data.message);
                    } else {
                        toastr["error"](data.message);
                    }
                    $('#reportAdModal').modal('hide');
                    $('#loadingOverlay').hide();
                }
            });
        }
    });


    $('#onClickShowPhone').on('click', function () {
        var phone =  $(this).data("phone");
        $(this).html('<i class="fa fa-phone"></i> '+phone);
    });

    $('#save_as_favorite').on('click', function () {
        const selector = $(this);
        const slug = selector.data('slug');
        var base_url = $("#base_url").val();
        $.ajax({
            type: 'GET',
            url: base_url+'/member/save-ad-as-favorite/'+slug,
            success: function (data) {
                if (data.status === 1) {
                    selector.html(data.message);
                    toastr["info"](data.message);
                    if (data.action === 'added') {
                        $("#save_as_favorite").addClass('btn-brand-secondary').removeClass('btn-outline-brand-secondary');
                    }

                    if (data.action === 'removed') {
                        $("#save_as_favorite").addClass('btn-outline-brand-secondary').removeClass('btn-brand-secondary');
                    }

                } else {
                    if (data.redirect_url) {
                        location.href = data.redirect_url;
                    }
                }
            }
        });
    });


    $("#loginForm").on('submit', function (e) {
        e.preventDefault(); // avoid to execute the actual submit of the form.

        const form = $(this);
        const url = form.attr('action');

        $.ajax({
            type: "POST",
            url: url,
            data: form.serialize(), // serializes the form's elements.
            success: function (info) {
                if (info == 0) {
                    $(".login-fail").html('<div class="alert alert-danger mb-3">Invalid Login</div>');
                } else {
                    location.reload();
                }
            }
        });


    });
});
