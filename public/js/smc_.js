$(function() {
  
  let carousel_2_1 = $(".carousel-2-1");
  carousel_2_1.owlCarousel({
    items: 1,
    loop: true,
    nav: true,
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
    carouselPagination('#business_1', event.page.index);
  });
  
  
  let carousel_2_2 = $(".carousel-2-2");
  carousel_2_2.owlCarousel({
    items: 1,
    loop: true,
    nav: true,
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
    carouselPagination('#business_2', event.page.index);
  });
  
  let carousel_2_3 = $(".carousel-2-3");
  carousel_2_3.owlCarousel({
    items: 1,
    loop: true,
    nav: true,
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
    carouselPagination('#business_3', event.page.index);
  });
  
  let carousel_2_4 = $(".carousel-2-4");
  carousel_2_4.owlCarousel({
    items: 1,
    loop: true,
    nav: true,
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
    carouselPagination('#business_4', event.page.index, 1);
  });
  
  
  
  
  
  $('.carouselGoBtn').on('click', function() {
    let t = $(this).closest('.cont-list-wrap').attr('data-target');
    let p = parseInt($(this).closest('.cont-list').index()); // 0, 1, 2
    let d = parseInt($(this).parent().index()) + (3 * p);
    let target_n = false;
    
    target_n = parseInt($(this).attr('data-index'));
    if (target_n) {
      $('.' + t).trigger('to.owl.carousel', target_n-1);
    } else {
      $('.' + t).trigger('to.owl.carousel', d-1);
    }
  });
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