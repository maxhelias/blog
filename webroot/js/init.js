/**
 * Created by Maxime on 13/12/2016.
 */
(function ($) {
    $(function () {

        /**
         * Initialise sidebar
         */
        $('.button-collapse').sideNav();

        /**
         * Position of the footer
         */
        function footerPosition(){
            if($(window).height()-$('header').height()-$('main').height()-$('footer').height() > 0){
                $('main').height($(window).height()-$('header').height()-$('footer').height()-10);
            }
            else{
                $('main').height('');
            }
        }
        footerPosition();

        /**
         * On va adapter notre layout au resize de la fenetre
         */
        $(window).on('resize', function (e) {
            footerPosition();
        })
    });
})(jQuery);