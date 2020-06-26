$(document).ready(function () {
    $('.carousel').carousel({
        interval:false
    });
    /*owl instal*/
    $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 4
            }
        }
    });
    /*firstnav */
    $('[data-toggle="tooltip"]').tooltip();
    /*slider 1 */
    $(window).on("scroll", function () {
        var x = $(document).scrollTop();
        console.log(x);
        if (x > 100) {
            $(".navbar").css({
                'background-color': 'white',
                'transition': 'background-color 0.5s',
                'box-shadow': ' 0px 3px 3px rgb(241, 235, 235)'
            });

            $(".navbar").slideDown(800);
        }
        if (x < 100) {
            $(".navbar").css({
                'background-color': 'rgba(225,225,225,0)',
                'box-shadow': ' 0px 0px'
            });
        }
    });
    $(window).on("scroll", function () {
        var n = $(document).scrollTop();
        if (n > 800) {
            $('span.gotop').css('visibility', ' visible');
        } else {
            $('span.gotop').css('visibility', 'hidden');
        }
    });
    /*animation*/
    $(window).on("scroll", function () {
        var n = $(document).scrollTop();
        /*doc-title*/
        if (n > 700) {
            $(".doc-title-animat").addClass("fadeInUp");
        }
        /*doc-note*/
        if (n > 890) {
            $(".hello").addClass("fadeInUp");
        }
        /*doc-owl*/
        if (n > 1050) {
            $(".carousel-animate").addClass("fadeInUp");
        }
        /*medical-info-title */
        if (n > 1850) {
            $(".minfo .title1").addClass("fadeInUp");
        }
        /*medical-note*/
        if (n > 1966) {
            $(".minfo .note1").addClass("fadeInUp");
        }
        /*medical-cont*/
        if (n > 2180) {
            $(".minfo .allweeks").addClass("fadeInUp");
        }
        /*vidtitle*/
        if (n > 2524) {
            $(".videotitle").addClass("fadeInUp");
        }
        /*vidcont*/
        if (n > 2657) {
            $(".vidinfo").addClass("fadeInLeft");
            $(".vidself").addClass("fadeInRight");
        }
        /*frqquestion-title*/
        if (n > 3169) {
            $(".frequst .title1").addClass("fadeInUp");
        }
        /*frqquestion-cont*/
        if (n > 3288) {
            $(".frequst .mulcol").addClass("fadeInUp");
        }
        /*signuptitle*/
        if (n > 3910) {
            $(".signuptitle").addClass("fadeInUp");
        }
        /*signupcont*/
        if (n > 4060) {
            $(".formcontainer").addClass("fadeInUp");
        }
    });
    /*gotop arrow*/
    $("span.gotop").click(function () {
        $("html, body").animate({ scrollTop: 0 }, "slow");
        return false;
    });


    /*go to week*/
    



    /*videos page */
    $(".imganddisc1 a").click(function () {
        $("html, body").animate({ scrollTop: 662 }, "slow");
        $('.istyle').attr('src','https://www.youtube.com/embed/v3RjeM0EwyI');
        return false;
    });
    $(".imganddisc2 a").click(function () {
        $("html, body").animate({ scrollTop: 662 }, "slow");
        $('.istyle').attr('src','https://www.youtube.com/embed/-LT2eD8YPXM?list=PLBVK6-QShOldyO4Hausryh1LjAxGLheNB');
        return false;
    });
    $(".imganddisc3 a").click(function () {
        $("html, body").animate({ scrollTop: 662 }, "slow");
        $('.istyle').attr('src','https://www.youtube.com/embed/Gj1Jw6m8o40');
        return false;
    });
    $(".imganddisc4 a").click(function () {
        $("html, body").animate({ scrollTop: 662 }, "slow");
        $('.istyle').attr('src','https://www.youtube.com/embed/Cou4HjEExuw');
        return false;
    });
    $(".imganddisc5 a").click(function () {
        $("html, body").animate({ scrollTop: 662 }, "slow");
        $('.istyle').attr('src','https://www.youtube.com/embed/sOV7KDzaloE?list=PLBVK6-QShOldyO4Hausryh1LjAxGLheNB');
        return false;
    });
    $(".imganddisc6 a").click(function () {
        $("html, body").animate({ scrollTop: 662 }, "slow");
        $('.istyle').attr('src','https://www.youtube.com/embed/glJ1JPOMgXo');
        return false;
    });
    $(".imganddisc7 a").click(function () {
        $("html, body").animate({ scrollTop: 662 }, "slow");
        $('.istyle').attr('src','https://www.youtube.com/embed/1Ldx-O1csYw?list=PLBVK6-QShOldyO4Hausryh1LjAxGLheNB');
        return false;
    });
    $(".imganddisc8 a").click(function () {
        $("html, body").animate({ scrollTop: 662 }, "slow");
        $('.istyle').attr('src','https://www.youtube.com/embed/l0fbNbT6_x0?list=PLBVK6-QShOldyO4Hausryh1LjAxGLheNB');
        return false;
    });
    /*undisplayed video*/
    $('i.play').on('click', function () {
        $('section.videosec').slideDown(500);
        $('body').css("overflow", 'hidden');
    });
    $('.closevideo').on('click', function () {
        $("section.videosec").slideUp(500);
        $('body').css("overflow", 'visible');
    });

    /*admin pages*/
    

});
