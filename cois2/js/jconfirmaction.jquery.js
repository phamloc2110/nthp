(function ($) {

    jQuery.fn.jConfirmAction = function (options) {


        var theOptions = jQuery.extend({
            question: "Are You Sure ?",
            yesAnswer: "Yes",
            cancelAnswer: "Cancel"
        }, options);

        return this.each(function () {

            $(this).bind('click', function (e) {
                e.preventDefault();
                thisHref = $(this).attr('href');

                if ($(this).next('.onaykutusu').length <= 0)
                    $(this).after('<div class="onaykutusu">' + theOptions.onaykutusu + '<br/> <span class="yes">' + theOptions.yesAnswer + '</span><span class="cancel">' + theOptions.cancelAnswer + '</span></div>');

                $(this).next('.onaykutusu').animate({ opacity: 1 }, 300);

                $('.yes').bind('click', function () {
                    $(this).parents('.listesatir').fadeOut(300, function () {
                        $(this).remove();
                        $.ajax({
                            type: 'GET',
                            url: thisHref
                        });
                    });
                });

                $('.cancel').bind('click', function () {
                    $(this).parents('.onaykutusu').fadeOut(300, function () {
                        $(this).remove();
                    });
                });

            });

        });
    }

})(jQuery);