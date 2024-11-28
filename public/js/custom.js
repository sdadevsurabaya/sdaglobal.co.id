$(document).ready(function () {

    // auto refresh page
    var windowWidth = $(window).width();
    $(window).resize(function () {
        if (windowWidth != $(window).width()) {
            location.reload();
            return;
        }
    });

    // -----------------------------navbar
    $('.navbar .cari-mobile').mouseenter(function () {
        $('.navbar .navbar-brand').hide();
    });
    $('.navbar .cari-mobile').mouseleave(function () {
        $('.navbar .navbar-brand').show();
    });

    $('.navbar .form-inline, .navbar .cari-mobile').mouseover(function () {
        $('.navbar .form-inline .form-control, .navbar .cari-mobile .form-control').select();
    });

    $(window).scroll(function () {
        if ($(window).scrollTop()) {
            $('.navbar').addClass('scroll');
            // $('.navbar').addClass('scroll shadow');
        } else {
            $('.navbar').removeClass('scroll');
            // $('.navbar').removeClass('scroll shadow');
        }
    });

    if ($('body').hasClass('header-dark')) {
        $('.navbar').removeClass('navbar-light');
        $('.navbar').addClass('navbar-dark');
        $('#nav-brands').mouseenter(function () {
            $('.navbar').addClass('navbar-light');
            $('.navbar').removeClass('navbar-dark');
        });
        $('#nav-official').mouseenter(function () {
            $('.navbar').addClass('navbar-light');
            $('.navbar').removeClass('navbar-dark');
        });
        $('.navbar').mouseleave(function () {
            $('.navbar').removeClass('navbar-light');
            $('.navbar').addClass('navbar-dark');
        });
        $(window).scroll(function () {
            if ($(window).scrollTop()) {
                $('.navbar').addClass('navbar-light');
                $('.navbar').removeClass('navbar-dark');

                $('#nav-brands').mouseenter(function () {
                    $('.navbar').addClass('navbar-light');
                    $('.navbar').removeClass('navbar-dark');
                });

                $('#nav-official').mouseenter(function () {
                    $('.navbar').addClass('navbar-light');
                    $('.navbar').removeClass('navbar-dark');
                });

                $('.navbar').mouseleave(function () {
                    $('.navbar').addClass('navbar-light');
                    $('.navbar').removeClass('navbar-dark');
                });
            } else {
                $('.navbar').removeClass('navbar-light');
                $('.navbar').addClass('navbar-dark');

                $('#nav-brands').mouseenter(function () {
                    $('.navbar').addClass('navbar-light');
                    $('.navbar').removeClass('navbar-dark');
                });

                $('#nav-official').mouseenter(function () {
                    $('.navbar').addClass('navbar-light');
                    $('.navbar').removeClass('navbar-dark');
                });

                $('.navbar').mouseleave(function () {
                    $('.navbar').removeClass('navbar-light');
                    $('.navbar').addClass('navbar-dark');
                });
            }
        });
    } else {
        $('.navbar').addClass('navbar-light');
        $('.navbar').removeClass('navbar-dark');
    }

    $('.navbar #myBrand .nav-link').mouseover(function (event) {
        event.preventDefault();
        $(this).tab('show');
    });

    $('.navbar #myBrandContent .nav-link').mouseover(function (event) {
        event.preventDefault();
        $(this).tab('show');
    });

    $('.navbar #myOfficial .nav-link').mouseover(function (event) {
        event.preventDefault();
        $(this).tab('show');
    });

    $('.navbar #myOfficialContent .nav-link').mouseover(function (event) {
        event.preventDefault();
        $(this).tab('show');
    });

    $('#nav-brands').mouseenter(function () {
        $('.navbar #brand').collapse('show');
    });
    $('.navbar').mouseleave(function () {
        $('.navbar #brand').collapse('hide');
        $('.navbar #official').collapse('hide');
    });

    $('#nav-official').mouseenter(function () {
        $('.navbar #official').collapse('show');
    });
    $('#nav-news').mouseenter(function () {
        $('.navbar #official').collapse('hide');
        $('.navbar #brand').collapse('hide');
    });
    $('#nav-about').mouseenter(function () {
        $('.navbar #official').collapse('hide');
        $('.navbar #brand').collapse('hide');
    });
    $('#nav-bisnis').mouseenter(function () {
        $('.navbar #official').collapse('hide');
        $('.navbar #brand').collapse('hide');
    });
    $('#nav-contact').mouseenter(function () {
        $('.navbar #official').collapse('hide');
        $('.navbar #brand').collapse('hide');
    });

    // if ($('#nav-official').mouseenter()) {
    // 	$('.navbar #official').collapse('show');
    // } else if ($('#official').mouseLeave()) {
    // 	$('#official').hide();
    // }


    $('#nav-brands').mouseenter(function () {
        $('.navbar #official').collapse('hide');
    });
    $('#nav-official').mouseenter(function () {
        $('.navbar #brand').collapse('hide');
    });

    // -----------------------------home page
    $('#home #home-banner .carousel-item').css({ 'height': ($(window).height()) });

    // -----------------------------modal popup
    $(".btn-popup").click(function () {
        setTimeout(function () {
            $('.modal-popup').modal('toggle');
        }, 2000);
    });


});
