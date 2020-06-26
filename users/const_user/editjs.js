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


    /*gotop arrow*/
    $("span.gotop").click(function () {
        $("html, body").animate({ scrollTop: 0 }, "slow");
        return false;
    });

    /*go to week*/
    $("li.li1").click(function () {
        $("html, body").animate({ scrollTop: 230 }, "slow");
        return false;
    });
    $("li.li2").click(function () {
        $("html, body").animate({ scrollTop: 1030 }, "slow");
        return false;
    });
    $("li.li3").click(function () {
        $("html, body").animate({ scrollTop: 1830 }, "slow");
        return false;
    });
    $("li.li4").click(function () {
        $("html, body").animate({ scrollTop: 2630 }, "slow");
        return false;
    });
    /*videos page */
    $(".imganddisc1 a").click(function () {
        $("html, body").animate({ scrollTop:50}, "slow");
        $('.istyle').attr('src','https://www.youtube.com/embed/v3RjeM0EwyI');
        return false;
    });
    $(".imganddisc2 a").click(function () {
        $("html, body").animate({ scrollTop:50}, "slow");
        $('.istyle').attr('src','https://www.youtube.com/embed/-LT2eD8YPXM?list=PLBVK6-QShOldyO4Hausryh1LjAxGLheNB');
        return false;
    });
    $(".imganddisc3 a").click(function () {
        $("html, body").animate({ scrollTop:50}, "slow");
        $('.istyle').attr('src','https://www.youtube.com/embed/Gj1Jw6m8o40');
        return false;
    });
    $(".imganddisc4 a").click(function () {
        $("html, body").animate({ scrollTop:50}, "slow");
        $('.istyle').attr('src','https://www.youtube.com/embed/Cou4HjEExuw');
        return false;
    });
    $(".imganddisc5 a").click(function () {
        $("html, body").animate({ scrollTop:50}, "slow");
        $('.istyle').attr('src','https://www.youtube.com/embed/sOV7KDzaloE?list=PLBVK6-QShOldyO4Hausryh1LjAxGLheNB');
        return false;
    });
    $(".imganddisc6 a").click(function () {
        $("html, body").animate({ scrollTop:50}, "slow");
        $('.istyle').attr('src','https://www.youtube.com/embed/glJ1JPOMgXo');
        return false;
    });
    $(".imganddisc7 a").click(function () {
        $("html, body").animate({ scrollTop:50}, "slow");
        $('.istyle').attr('src','https://www.youtube.com/embed/1Ldx-O1csYw?list=PLBVK6-QShOldyO4Hausryh1LjAxGLheNB');
        return false;
    });
    $(".imganddisc8 a").click(function () {
        $("html, body").animate({ scrollTop: 0 }, "slow");
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

    /*month video page*/


    $allstar.eq(0).mouseenter(function(){
      $allstar.css('color','lightgray');
      $allstar.eq(0).css('color','turquoise');
    });
    $allstar.eq(1).mouseenter(function(){
      $allstar.css('color','lightgray');
      $allstar.eq(0).css('color','turquoise');
      $allstar.eq(1).css('color','turquoise');
    });
    $allstar.eq(2).mouseenter(function(){
      $allstar.css('color','lightgray');
      $allstar.eq(0).css('color','turquoise');
      $allstar.eq(1).css('color','turquoise');
      $allstar.eq(2).css('color','turquoise');
    });
    $allstar.eq(3).mouseenter(function(){
      $allstar.css('color','lightgray');
      $allstar.eq(0).css('color','turquoise');
      $allstar.eq(1).css('color','turquoise');
      $allstar.eq(2).css('color','turquoise');
      $allstar.eq(3).css('color','turquoise');
    });
    $allstar.eq(4).mouseenter(function(){
      $allstar.css('color','lightgray');
      $allstar.eq(0).css('color','turquoise');
      $allstar.eq(1).css('color','turquoise');
      $allstar.eq(2).css('color','turquoise');
      $allstar.eq(3).css('color','turquoise');
      $allstar.eq(4).css('color','turquoise');
    });





});
