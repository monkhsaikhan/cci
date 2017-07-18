$(window).on("scroll", function() {
    if($(window).scrollTop() > document.getElementById('idContainer').clientHeight/2.5) {
        $(".header").addClass("active");
    } else {
        $(".header").removeClass("active");
    }
});
jQuery(function($) {
    var doAnimations = function() {
        var offset = $(window).scrollTop() + $(window).height(),
            $animatables = $('.animatable');
        if ($animatables.length == 0) {
            $(window).off('scroll', doAnimations);
        }
        $animatables.each(function(i) {
            var $animatable = $(this);
            if (($animatable.offset().top + $animatable.height()-20) < offset) {
                $animatable.removeClass('animatable').addClass('animated');
            }
        });
    };
    $(window).on('scroll', doAnimations);
    $(window).trigger('scroll');
});