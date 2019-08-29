let winWidth = 0;
let spacing = 0;
let isMobile = false;

$(function() {
  //2차메뉴토글이벤트
  $('.dropdown').on('click', function() {
    let submenu = $(this).parent();
    submenu.toggleClass('current');
  });
  
  //모바일_메뉴활성
  $('.menuToggleBtn').on('click', function() {
    $('body').toggleClass('is-show-nav');
  });
  //모바일_메뉴비활성
  $('#menu-wrapper-back, #menuCloseBtn').on('click', function() {
    $('body').removeClass('is-show-nav');
  });
  
  let main = $(".main-carousel-bg");
  main.owlCarousel({
    items: 1,
    loop: true,
    animateIn: 'fadeIn',
    animateOut: 'fadeOut',
    autoplay: 1000
  });
  
  let carousel_2_1 = $(".carousel-2-1");
  carousel_2_1.owlCarousel({
    items: 1,
    loop: true,
    nav: true,
    navText: ['<i class="material-icons">chevron_left</i>','<i class="material-icons">chevron_right</i>'],
    responsive: {
      0: {
        dots: true,
        autoHeight:true
      },
      1024: {
        autoHeight:false
      }
    }
  });
  carousel_2_1.on('changed.owl.carousel', function(event) {
    //console.log(event.page.count + ' ----- ' + event.page.index);
    carouselPagination('.sections-2-1', event.page.index);
  });
  
  let carousel_2_2 = $(".carousel-2-2");
  carousel_2_2.owlCarousel({
    items: 1,
    loop: true,
    nav: true,
    navText: ['<i class="material-icons">chevron_left</i>','<i class="material-icons">chevron_right</i>'],
    responsive: {
      0: {
        dots: true,
        autoHeight:true
      },
      1024: {
        autoHeight:false
      }
    }
  });
  carousel_2_2.on('changed.owl.carousel', function(event) {
    carouselPagination('.sections-2-2', event.page.index);
  });
  
  let carousel_2_3 = $(".carousel-2-3");
  carousel_2_3.owlCarousel({
    items: 1,
    loop: true,
    nav: true,
    navText: ['<i class="material-icons">chevron_left</i>','<i class="material-icons">chevron_right</i>'],
    responsive: {
      0: {
        dots: true,
        autoHeight:true
      },
      1024: {
        autoHeight:false
      }
    }
  });
  carousel_2_3.on('changed.owl.carousel', function(event) {
    carouselPagination('.sections-2-3', event.page.index);
  });
  
  let carousel_2_4 = $(".carousel-2-4");
  carousel_2_4.owlCarousel({
    items: 1,
    loop: true,
    nav: true,
    navText: ['<i class="material-icons">chevron_left</i>','<i class="material-icons">chevron_right</i>'],
    responsive: {
      0: {
        dots: true,
        autoHeight:true
      },
      1024: {
        autoHeight:false
      }
    }
  });
  carousel_2_4.on('changed.owl.carousel', function(event) {
    carouselPagination('.sections-2-4', event.page.index, 1);
  });
  
  
  $('.carouselGoBtn').on('click', function() {
    let t = $(this).closest('.cont-list-wrap').attr('data-target');
    let p = parseInt($(this).closest('.cont-list').index()); // 0, 1, 2
    let d = parseInt($(this).parent().index()) + (3 * p);
    let target_n = false;
    console.log(d);
    target_n = parseInt($(this).attr('data-index'));
    if (target_n) {
      $('.' + t).trigger('to.owl.carousel', target_n-1);
    } else {
      $('.' + t).trigger('to.owl.carousel', d-1);
    }
  });
  
  $('.addrCopy').on('click', function() {
    let copy = $(this).attr('data-txt');
    prompt('아래 주소를 복사해서 사용하세요.', copy);
  });
  
  
  
  //Carousel Pagination
  function carouselPagination (classname, n, x) {
    let nth = 1;
    let child = (n % 3) + 2;
    if(child === 1) child = 4;
    
    $(classname + ' .cont-list-wrap .cont-list dd').removeClass('is_current');
    if (x !== undefined) {
      if (n < 2) {
        nth = 1;
      } else if (n >= 2 && n < 4) {
        nth = 2;
      } else {
        nth = 3;
      }
      if ( n === 2) {
        $(classname + ' .cont-list-wrap .cont-list:nth-child(2) dd:nth-child(2)').addClass('is_current');
      } else if ( n === 3) {
        $(classname + ' .cont-list-wrap .cont-list:nth-child(2) dd:nth-child(3)').addClass('is_current');
      } else if ( n === 4) {
        $(classname + ' .cont-list-wrap .cont-list:nth-child(3) dd:nth-child(2)').addClass('is_current');
      } else {
        $(classname + ' .cont-list-wrap .cont-list:nth-child(' + nth + ') dd:nth-child(' + child + ')').addClass('is_current');
      }
    } else {
      if (n < 3) {
        nth = 1;
      } else if (n >= 3 && n < 6) {
        nth = 2;
      } else {
        nth = 3;
      }
      $(classname + ' .cont-list-wrap .cont-list:nth-child(' + nth + ') dd:nth-child(' + child + ')').addClass('is_current');
    }
  }
  
  //모바일용_Navi
  $('.menu a').on('click', function(e) {
    if(isMobile) {
      let target = $(this).attr('href');
      target = target.substring(1);
      let moveTarget = Math.floor($('.mainview[vs-anchor=' + target + ']').offset().top) - 45;
      //console.log(moveTarget);
      $('body').removeClass('is-show-nav');
      $('body').animate({
        scrollTop: moveTarget
      }, 200);
    }
  });
  
});


function currentMenu (view) {
  let def = view.substring(1);
  //console.log('Current Menu : %c' + def, 'color:red;');
  $('#menu-wrapper .menu li, #menu-wrapper .menu li a').removeClass('current');
  $('#menu-wrapper .menu a').each(function(i) {
    let it = $(this).attr('href');
    if (it === def) {
      $(this).addClass('current');
      $(this).closest('li').addClass('current');
    }
  });
}

$(window).on('load', function() {
  winWidth = parseInt($(window).width());
  if (winWidth < 1024) {
    isMobile = true;
    spacing = 0;
    $('body').addClass('isMobile');
  } else {
    isMobile = false;
    spacing = 400;
    $('body').removeClass('isMobile');
    
    $('.mainbag').viewScroller({
      useScrollbar: isMobile,
      spaceMainBag: spacing,
      beforeChange: function(n) {
        currentMenu(n);
      },
      afterResize: function() {
        if (winWidth < 1024) {
          $.fn.viewScroller.setSpaceMainBag(0);
          $.fn.viewScroller.setUseScrollbar(true);
        } else {
          $.fn.viewScroller.setSpaceMainBag(400);
          $.fn.viewScroller.setUseScrollbar(false);
        }
      }
    });
  }
  
  
});

$(window).on('resize', function() {
  winWidth = parseInt($(window).width());
  //console.log(winWidth);
  if (winWidth < 1024) {
    isMobile = true;
    spacing = 0;
    $('body').addClass('isMobile');
  } else {
    isMobile = false;
    spacing = 400;
    $('body').removeClass('isMobile, is-show-nav');
  }
});
