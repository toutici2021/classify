// =============== Custom Select ===================
$('.custom-select').each(function(){
    var $this = $(this), numberOfOptions = $(this).children('option').length;

    $this.addClass('select-hidden');
    $this.wrap('<div class="select"></div>');
    $this.after('<div class="select-styled"></div>');

    var $styledSelect = $this.next('div.select-styled');
    $styledSelect.text($this.children('option').eq(0).text());

    var $list = $('<ul />', {
        'class': 'select-options'
    }).insertAfter($styledSelect);

    for (var i = 0; i < numberOfOptions; i++) {
        $('<li />', {
            text: $this.children('option').eq(i).text(),
            rel: $this.children('option').eq(i).val()
        }).appendTo($list);
    }

    var $listItems = $list.children('li');

    $styledSelect.click(function(e) {
        e.stopPropagation();
        $('div.select-styled.active').not(this).each(function(){
            $(this).removeClass('active').next('ul.select-options').hide();
        });
        $(this).toggleClass('active').next('ul.select-options').toggle();
    });

    $listItems.click(function(e) {
        e.stopPropagation();
        $styledSelect.text($(this).text()).removeClass('active');
        $this.val($(this).attr('rel'));
        $list.hide();
        //console.log($this.val());
    });

    $(document).click(function() {
        $styledSelect.removeClass('active');
        $list.hide();
    });

});


// ============= on click sliding dropdown  ================
$('.single-toggler').on('click', function () {
    $(this).parents('.toggle-box').find('.togglable').stop().slideToggle(200);
    $(this).parents('.toggle-box').delay(200).queue(function() {
        $(this).stop().toggleClass("show").dequeue();
    });
});


// ================ Panel Wrapping / Panel wrapping control ================
var windowwidth = $(window).width();
// if (windowwidth >= 992)
// {
//     var getHeight = $('.user-navigation').outerHeight();
//     $('.panel-aside').css({'height': 'calc(100vh - ' + getHeight + 'px)'});
//     $('.panel-body').css({'height': 'calc(100vh - ' + getHeight + 'px)'});
// }


if ($('.panel-aside').length < 1)
{
    $('.aside-toggler').hide();
}

$('.aside-toggler').on('click', function (e) {
    e.preventDefault();
    if ($('.close-aside').length < 1)
    {
        $('.panel-aside').append('<a href="#" class="close-aside"><i class="fa fa-close"></i></a>');
    }
    if ($('.aside-backdrop').length < 1)
    {
        $('body').append('<div class="aside-backdrop"></div>');
    }
    $('body').addClass('overflow-hidden');
    $('.panel-aside').addClass('show');
});

$(document).on('click', '.close-aside, .aside-backdrop', function (e) {
    e.preventDefault();
    $('body').removeClass('overflow-hidden');
    $('.panel-aside').removeClass('show');
    $('.aside-backdrop').remove();
    $('.close-aside').remove();
});



// =============== array-data call data target separate comma in array =====================
// ======= Number Input Field ========
// forceNumeric() plug-in implementation
$.fn.forceNumeric = function () {
    return this.each(function () {
        $(this).keydown(function (e) {
            let key = e.which || e.keyCode;

            if (!e.shiftKey && !e.altKey && !e.ctrlKey &&
                // numbers
                key >= 48 && key <= 57 ||
                // Numeric keypad
                key >= 96 && key <= 105 ||
                // comma, period and minus, . on keypad
                key == 190 || key == 188 || key == 109 || key == 110 ||
                // Backspace and Tab and Enter
                key == 8 || key == 9 || key == 13 ||
                // Home and End
                key == 35 || key == 36 ||
                // left and right arrows
                key == 37 || key == 39 ||
                // Del and Ins
                key == 46 || key == 45)
                return true;

            return false;
        });
    });
};
$(".input-number").forceNumeric();


// ========= banner-content-height =================

var hmBannerContentHeight = 0;
$('#homeBannerCarousel .carousel-item').each(function() {
    if(hmBannerContentHeight < $(this).find('.carousel-content-item').outerHeight()){
        hmBannerContentHeight = $(this).find('.carousel-content-item').outerHeight();
    };
});

$('.home-banner .banner-overlay-content').css({
    'margin-top': hmBannerContentHeight /2  + 'px'
});

$(window).resize(function () {
    var hmBannerContentHeight = 0;
    $('#homeBannerCarousel .carousel-item').each(function() {
        if(hmBannerContentHeight < $(this).find('.carousel-content-item').outerHeight()){
            hmBannerContentHeight = $(this).find('.carousel-content-item').outerHeight();
        };
    });

    $('.home-banner .banner-overlay-content').css({
        'margin-top': hmBannerContentHeight /2  + 'px'
    });
});
