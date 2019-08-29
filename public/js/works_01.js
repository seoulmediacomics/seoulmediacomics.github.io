$(document).ready(function() {
  deviceChecker();
  
  let mobileWallpaper = $("#mobile_section_05 .wallpaperBox");
  mobileWallpaper.owlCarousel({
    center: true,
    items: 1.4,
    loop: false,
    margin:20
  });
  
  let pcWallpaper = $("#pc_section_05 .wallpaperBox");
  pcWallpaper.owlCarousel({
    center: true,
    items: 1.6,
    loop: false,
    margin:50
  });
  
  $('#menu li button').on('click', function() {
    let menu = $(this).attr('data-menu');
    let device = '#mobile';
    if($('body').hasClass('isDesktop')) {
      device = '#pc';
    }
    if(menu == 'main') {
      device = $(device + '_section_01').offset();
      $('html, body').animate({scrollTop : device.top}, 400);
    } else if(menu == 'video') {
      device = $(device + '_section_02').offset();
      $('html, body').animate({scrollTop : device.top}, 400);
    } else if(menu == 'introduce') {
      device = $(device + '_section_03').offset();
      $('html, body').animate({scrollTop : device.top}, 400);
    } else if(menu == 'character') {
      device = $(device + '_section_04').offset();
      $('html, body').animate({scrollTop : device.top}, 400);
    } else if(menu == 'wallpaper') {
      device = $(device + '_section_05').offset();
      $('html, body').animate({scrollTop : device.top}, 400);
    }
  });
  
  //캐릭터(Mobile)
  $('#mobile_section_04 .characterBox > li .charShow').on('click', function() {
    $('#mobile_section_04 .characterBox > li').removeClass('isShow');
    $(this).parent().addClass('isShow');
    let scrollMove = $(this).parent().offset();
    $('html, body').animate({scrollTop : scrollMove.top}, 0);
  });
  
  //캐릭터(PC)
  $('#pc_section_04 .characterBox .charList .charListShow .charShow').on('click', function() {
    let show = $(this).parent().index() + 1;
    $('#pc_section_04').attr('data-show', show);
  });
});

$(window).on('load', function() {
  let winWidth = $(window).width();
  let winHeight = $(window).height();
  //alert('너비 : ' + winWidth + ' \n높이 : ' + winHeight);
  
  $('body').attr('data-load', 'complete');
  setTimeout(function() {
    $('.wrapper section:nth-child(1)').addClass('is_On');
  }, 500);
  
  $(window).on('scroll', function() {
    menuPos();
  });
});

$(window).on('resize', function() {
  deviceChecker();
  menuPos();
});



function deviceChecker() {
  const win_width = $(window).width();
  if( win_width < 1200) {
    $('body').removeClass('isDesktop').addClass('isMobile');
  } else {
    $('body').removeClass('isMobile').addClass('isDesktop');
  }
}

function menuPos() {
  let scrollPos = $(document).scrollTop();
  let device = '#mobile';
  if($('body').hasClass('isDesktop')) {
    device = '#pc';
  }
  let menu01 = $(device + '_section_01').offset();
  let menu02 = $(device + '_section_02').offset();
  let menu03 = $(device + '_section_03').offset();
  let menu04 = $(device + '_section_04').offset();
  let menu05 = $(device + '_section_05').offset();
  let startPos = Math.floor($(window).height() / 2);
  
  if(scrollPos >= menu01.top && scrollPos < (menu02.top - startPos) ) { //MAIN
    $('#menu li').removeClass('is_current');
    $('#menu li button[data-menu="main"]').parent().addClass('is_current');
    $('.wrapper section').removeClass('is_On');
    $('.wrapper section:nth-child(1)').addClass('is_On');
    
  } else if(scrollPos >= (menu02.top - startPos) && scrollPos < (menu03.top - startPos)) { //구입처
    $('#menu li').removeClass('is_current');
    $('#menu li button[data-menu="video"]').parent().addClass('is_current');
    $('.wrapper section').removeClass('is_On');
    $('.wrapper section:nth-child(2)').addClass('is_On');
    
  } else if(scrollPos >= (menu03.top - startPos) && scrollPos < (menu04.top - startPos)) { //작품소개
    $('#menu li').removeClass('is_current');
    $('#menu li button[data-menu="introduce"]').parent().addClass('is_current');
    $('.wrapper section').removeClass('is_On');
    $('.wrapper section:nth-child(3)').addClass('is_On');
    
  } else if(scrollPos >= (menu04.top - startPos) && scrollPos < (menu05.top - startPos)) { //캐릭터
    $('#menu li').removeClass('is_current');
    $('#menu li button[data-menu="character"]').parent().addClass('is_current');
    $('.wrapper section').removeClass('is_On');
    $('.wrapper section:nth-child(4)').addClass('is_On');
    
  } else if(scrollPos >= (menu05.top - startPos)) { //월페이퍼
    $('#menu li').removeClass('is_current');
    $('#menu li button[data-menu="wallpaper"]').parent().addClass('is_current');
    $('.wrapper section').removeClass('is_On');
    $('.wrapper section:nth-child(5)').addClass('is_On');
  }
}