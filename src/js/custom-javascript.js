(function ($) {
    jQuery(document).ready(function () {
        // Sticky header
        jQuery(window).scroll(function () {
            if ($(this).scrollTop() > 0) {
                $('#menu_area').addClass("sticky");
            } else {
                $('#menu_area').removeClass("sticky");
            }
        });

        // fancybox video
        $(".about-video .various").fancybox({
            maxWidth: 800,
            maxHeight: 600,
            fitToView: false,
            width: '90%',
            height: '90%',
            autoSize: false,
            closeClick: false,
            openEffect: 'none',
            closeEffect: 'none'
        });

        /*$(".content__accordion").accordion({
            heightStyle: "content",
            autoHeight: false,
            clearStyle: true,
            active: 0,
            collapsible: true,
            header: '> div.faq-wrap >h3'
        });*/

        $(".content__accordion .faq-wrap:first-of-type > h3").addClass('active');
        $(".content__accordion .faq-wrap:first-of-type > .faq-content").css('display', 'block');
        $(".content__accordion .faq-wrap > h3").on("click", function (e) {
            if ($(this).hasClass("active")) {
                $(this).removeClass("active");
                $(this)
                    .siblings(".content__accordion .faq-wrap .faq-content")
                    .slideUp(200);
            } else {
                $(".content__accordion .faq-wrap > h3").removeClass("active");
                $(this).addClass("active");
                $(".content__accordion .faq-wrap .faq-content").slideUp(200);
                $(this)
                    .siblings(".content__accordion .faq-wrap .faq-content")
                    .slideDown(200);
            }
            e.preventDefault();
        });

        // desktop multilevel menu
        $('.dropdown-menu a.dropdown-toggle').on('click', function (e) {
            if (!$(this).next().hasClass('show')) {
                $(this).parents('.dropdown-menu').first().find('.show').removeClass("show");
            }
            var $subMenu = $(this).next(".dropdown-menu");
            $subMenu.toggleClass('show');
            $(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function (e) {
                $('.dropdown-submenu .show').removeClass("show");
            });
            return false;
        })

        // mobile multilevel menu
        $("#menu").slidingMenu();

        $('#cookie-notice').addClass('slide-up');

        $('#close-notice, #accept-cookie').click(function (e) {
            e.preventDefault();
            $("#cookie-notice").removeClass("slide-up");
            $("#cookie-notice").addClass("slide-down");
        });

        jQuery("#top__mobile .menu-btn").click(function () {
            jQuery(".menu-overlay").addClass("active-overlay");
            jQuery('.main-menu-sidebar').addClass("menu-active");
        });

        jQuery('.main-menu-sidebar .close-menu-btn, .menu-overlay').click(function () {
            jQuery('.main-menu-sidebar').removeClass("menu-active");
            jQuery(".menu-overlay").removeClass("active-overlay");
        });

        $(function () {

            var date1 = new Date('05/05/2021');
            var date2 = new Date('05/20/2021');

            var date3 = new Date('06/05/2021');
            var date4 = new Date('06/20/2021');

            var date5 = new Date('07/05/2021');
            var date6 = new Date('07/20/2021');

            $(".date-picker-input").datepicker({
                minDate: '0',
                showOtherMonths: true,
                selectOtherMonths: true,


                beforeShowDay: function (date) {
                    var highlight = date >= date1 && date <= date2
                    var highlight2 = date >= date3 && date <= date4
                    var highlight3 = date >= date5 && date <= date6
                    if (highlight || highlight2 || highlight3) {
                        return [true, "event", 'Tooltip text'];
                    } else {
                        return [true, '', ''];
                    }
                }

            });

        });

        $('.date-picker-input').on('click', function (e) {
            e.preventDefault();
            $(this).attr("autocomplete", "off");
        });

        $(".date-picker-input").attr("autocomplete", "off");

        // modal script
        setTimeout(function () {
            jQuery('.modal-overlay').addClass('show');
        }, 1000);
        $('.toggle-modal').click(function (e) {
            var myEm = $(this).attr('data-my-element');
            var modal = $('.modal-overlay[data-my-element = ' + myEm + '], .modal[data-my-element = ' + myEm + ']');
            e.preventDefault();
            modal.addClass('active');
            $('html').addClass('fixed');
        });
        $('.close-modal').click(function () {
            var modal = $('.modal-overlay, .modal');
            $('html').removeClass('fixed');
            modal.removeClass('active');
        });

        // Fancybox
        $('#gallery-page [data-fancybox="gallery"]').fancybox();

        $('#blog-page .blog-photo [data-fancybox="gallery"]').fancybox();

        //$('#top-cta .features-list .feature-box h3').matchHeight();


        $(document).on('click', '.moving-tips .moving-item h4 a', function (event) {
            event.preventDefault();
            $('html, body').animate({
                scrollTop: $($.attr(this, 'href')).offset().top - 150
            }, 500);
        });
        $("#toggle-tl").click(function () {
            $("#top-license p").slideToggle();
        });
        jQuery(window).scroll(function () {
            if (jQuery(this).scrollTop() > 150) {
                jQuery('#go-to-top').addClass('on');
            } else {
                jQuery('#go-to-top').removeClass('on');
            }
        });
        jQuery('#go-to-top').click(function () {
            jQuery('body,html').animate({
                scrollTop: 0
            }, 800);
        });

        $(function () {
            $('.quote-cta--single a.btn-cta').click(function () {
                if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
                    var target = $(this.hash);
                    target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                    if (target.length) {
                        $('html, body').animate({
                            scrollTop: target.offset().top - 100
                        }, 1000);
                        return false;
                    }
                }
            });
        });

        $('.full-content a').attr("target", "_blank");

        $('#city-reviews-slider').slick({
            dots: true,
            infinite: true,
            speed: 500,
            adaptiveHeight: true,
            arrows: true,
        });
        $(document).on('click', '#city-services .city-services-list .csl-item a', function (event) {
            event.preventDefault();
            $('html, body').animate({
                scrollTop: $($.attr(this, 'href')).offset().top - 125
            }, 500);
        });
        jQuery(window).scroll(function () {
            if (jQuery(this).scrollTop() > 150) {
                jQuery('#go-to-top').addClass('on');
            } else {
                jQuery('#go-to-top').removeClass('on');
            }
        });
        jQuery('#go-to-top').click(function () {
            jQuery('body,html').animate({
                scrollTop: 0
            }, 800);
        });
        $('.quote-form select').selectpicker();
    });
})(jQuery);