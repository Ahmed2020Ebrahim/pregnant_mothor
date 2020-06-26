$(document).ready(function(){
  $('.userimggallery span').on('click',function(){
    $('.usersidenav').css({
      'margin-left':'-270px',
      'transition':'margin-left 1s'
    });
    $('.user_page_body').css({
      'margin-left':'25px',
      'transition':'margin-left 1s'
    });
    $('.display_sidenav').css({
      'display':'block'
    });
  });
  $('.display_sidenav').on('click',function(){
    $('.usersidenav').css({
      'margin-left':'25px',
      'transition':'margin-left 1s'
    });
    $('.user_page_body').css({
      'margin-left':'310px',
      'transition':'margin-left 1s'
    });
    $('.display_sidenav').css({
      'display':'none'
    });
  });

/*toggle of alter nav bar*/
  $('.ddropbtn').on('click',function(){
    $('.ddropdown-content').slideDown();
    $('.ddropbtnup').css('display','block');
    $('.ddropbtn').css('display','none');
  });
  $('.ddropbtnup').on('click',function(){
    $('.ddropdown-content').slideUp();
    $('.ddropbtn').css('display','block');
    $('.ddropbtnup').css('display','none');
  });


});
