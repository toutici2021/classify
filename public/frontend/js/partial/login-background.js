$.fn.attachBgDesign = function () {
    var thisHeight = $(this).height();
    $(this).css({
        'width': thisHeight + 'px',
    });
};

$('.login-background').attachBgDesign();
$(window).resize(function () {
    $('.login-background').attachBgDesign();
});
