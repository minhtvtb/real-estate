$(document).ready(function () {
    'use strict';

    AOS.init({
        easing: 'ease-in-out-sine'
    });

    var window_width = $(window).width(),
        window_height = window.innerHeight,
        header_height = $('.default-header').height(),
        header_height_static = $('.site-header.static').outerHeight(),
        fitscreen = window_height - header_height;

    var headerLeft = $('.top-head-left');
    var headerRight = $('.top-head-right');

    if (window_width < 500 && window_width > 420) {
        headerLeft.addClass('col-4').removeClass('col-6');
        headerRight.addClass('col-7').removeClass('col-6');
    } else if(window_width < 420 && window_width > 324) {
        headerLeft.addClass('col-3').removeClass('col-6');
        headerRight.addClass('col-7').removeClass('col-6');
    } else if (window_width < 325) {
        headerLeft.find('.menu-right').remove();
        headerRight.addClass('col-8').removeClass('col-6');
    }

    $('.fullscreen').css('height', window_height);
    $('.fitscreen').css('height', fitscreen);

    if (document.getElementById('default-select')) {
        $('select').niceSelect();
    }

    $('.img-pop-up').magnificPopup({
        type: 'image',
        gallery: {
            enabled: true,
        },
    });

    $('.single-gallery').magnificPopup({
        type: 'image',
        gallery: {
            enabled: true,
        },
    });

    $('.recent-project').magnificPopup({
        type: 'image',
        gallery: {
            enabled: true,
        },
    });

    $('.play-btn').magnificPopup({
        type: 'iframe',
        mainClass: 'mfp-fade',
        removalDelay: 160,
        preloader: false,
        fixedContentPos: false,
    });

    // Initiate superfish on nav menu
    $('.nav-menu').superfish({
        animation: {
            opacity: 'show',
        },
        speed: 400,
    });

    // Mobile Navigation
    if ($('#nav-menu-container').length) {
        var $mobile_nav = $('#nav-menu-container').clone().prop({
            id: 'mobile-nav',
        });
        $mobile_nav.find('> ul').attr({
            'class': '',
            'id': '',
        });
        $('body').append($mobile_nav);
        $('body').prepend(
            '<button type="button" id="mobile-nav-toggle"><i class="lnr lnr-menu"></i></button>');
        $('body').append('<div id="mobile-body-overly"></div>');
        $('#mobile-nav').find('.menu-has-children').prepend('<i class="lnr lnr-chevron-down"></i>');

        $(document).on('click', '.menu-has-children i', function (e) {
            $(this).next().toggleClass('menu-item-active');
            $(this).nextAll('ul').eq(0).slideToggle();
            $(this).toggleClass('lnr-chevron-up lnr-chevron-down');
        });

        $(document).on('click', '#mobile-nav-toggle', function (e) {
            $('body').toggleClass('mobile-nav-active');
            $('#mobile-nav-toggle i').toggleClass('lnr-cross lnr-menu');
            $('#mobile-body-overly').toggle();
        });

        $(document).click(function (e) {
            var container = $('#mobile-nav, #mobile-nav-toggle');
            if (!container.is(e.target) && container.has(e.target).length === 0) {
                if ($('body').hasClass('mobile-nav-active')) {
                    $('body').removeClass('mobile-nav-active');
                    $('#mobile-nav-toggle i').toggleClass('lnr-cross lnr-menu');
                    $('#mobile-body-overly').fadeOut();
                }
            }
        });
    }
    else if ($('#mobile-nav, #mobile-nav-toggle').length) {
        $('#mobile-nav, #mobile-nav-toggle').hide();
    }

    // Smooth scroll for the menu and links with .scrollto classes
    $('.nav-menu a, #mobile-nav a, .scrollto').on('click', function () {
        if (location.pathname.replace(/^\//, '') ==
            this.pathname.replace(/^\//, '') && location.hostname ==
            this.hostname) {
            var target = $(this.hash);
            if (target.length) {
                var top_space = 0;

                if ($('#header').length) {
                    top_space = $('#header').outerHeight();

                    if (!$('#header').hasClass('header-fixed')) {
                        top_space = top_space;
                    }
                }

                $('html, body').animate({
                    scrollTop: target.offset().top - top_space,
                }, 1500, 'easeInOutExpo');

                if ($(this).parents('.nav-menu').length) {
                    $('.nav-menu .menu-active').removeClass('menu-active');
                    $(this).closest('li').addClass('menu-active');
                }

                if ($('body').hasClass('mobile-nav-active')) {
                    $('body').removeClass('mobile-nav-active');
                    $('#mobile-nav-toggle i').toggleClass('lnr-times lnr-bars');
                    $('#mobile-body-overly').fadeOut();
                }
                return false;
            }
        }
    });

    $(document).ready(function () {
        $('html, body').hide();
        if (window.location.hash) {
            setTimeout(function () {
                $('html, body').scrollTop(0).show();
                $('html, body').animate({
                    scrollTop: $(window.location.hash).offset().top - 100,
                }, 1000);
            }, 0);
        }
        else {
            $('html, body').show();

        }
    });

    // Header scroll class
    var logoImage = $('#logo').find('img');
    var headerTop = $('div.header-top');
    var header = $('#header');
    var logoPc = $('div.banner-gradient1');
    var logoImg = $('.logo-image');

    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            header.addClass('header-scrolled');
            logoImage.show();
            logoImage.height(60);
            logoPc.hide();
            logoImg.hide();
        }
        else {
            logoImage.hide();
            header.removeClass('header-scrolled');
        }
        if (window_width > 500) {
            if ($(this).scrollTop() > window_height) {
                header.find('hr').hide();
                headerTop.hide();
            }
            else {
                header.find('hr').show();
                headerTop.show();
            }
            if ($(this).scrollTop() < 100){
                logoPc.show();
                logoImg.show();
            }
        }
    });

    $('.active-about-carusel').owlCarousel({
        items: 1,
        loop: true,
        margin: 30,
        dots: true,
    });

    $('.active-exibition-carusel').owlCarousel({
        items: 3,
        margin: 30,
        autoplay: true,
        loop: true,
        dots: true,
        responsive: {
            0: {
                items: 1,
            },
            480: {
                items: 1,
            },
            768: {
                items: 2,
            },
            900: {
                items: 3,
            },

        },
    });
    //slick
    $('.customer-logo').slick({
        slidesToShow: 8,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        dots: false,
        prevArrow: false,
        nextArrow: false,
        responsive: [
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 300,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            },
        ]
    });

    //  Gallery
    var parameters = {
        gridContainer: '#grid-container',
        gridItems: '.grid-item',
        gutter: 15,
        enableImagesLoaded: true,
    };
    var grid = new justifiedGrid(parameters);
    $('body').imagesLoaded(function () {
        grid.initGrid();
    });

    $(document).ready(function () {
        $('#mc_embed_signup').find('form').ajaxChimp();
    });
});
