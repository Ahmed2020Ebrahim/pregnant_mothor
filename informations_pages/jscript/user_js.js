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
});
