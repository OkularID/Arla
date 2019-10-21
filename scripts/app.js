// ============Function===============
// Search Desktop
$(document).ready(function() {
  $('#btnsearch').click(function() {
    $(".sidesearch").removeClass("slideOut");
    $(".sidesearch").addClass("slideIn");
  })
  $('.closebtn').click(function(){
    $(".sidesearch").addClass("slideOut");
  })
})
// Search Mobile
$(document).ready(function() {
  $('.fa-search').click(function(){
    $(".msearch").addClass("slideIn");
    $(".msearch").removeClass("slideOut");
  })
  $('.mclosebtn').click(function(){
    $(".msearch").addClass("slideOut");
  })
})
// Navbar Mobile
$(document).ready(function() {
  $('.bars').click(function() {
    $(".bars").addClass("active");
    $(".fa-times").addClass("active");
    $(".sidenav").removeClass("slideOut");
    $(".sidenav").addClass("slideIn");
  })
})
$(document).ready(function() {
  $('.fa-times').click(function(){
    $(".bars").removeClass("active");
    $(".fa-times").removeClass("active");
    $(".sidenav").addClass("slideOut");
  })
})
// Product tab
$(function(tabs){
  /*Nav Tabs Active First*/
  $(".nav-tab:first").addClass("active");
  /*Content Active First*/
  $('.tabs').hide().first().show();
  $('.nav-tab').click(function(){
    $('.tabs').hide();
    $(".nav-tab").removeClass("active");
    $(this).addClass("active");
    var $targetTab = $('#tab-'+$(this).attr('target'));
    $targetTab.find('.sub-tab').hide().first().show();
    $targetTab.fadeIn(300);
  });
});
// Disclaimer popup
$(document).ready(function(){
            setTimeout(function(){
            if(!Cookies.get('modalShown')) {
            	$("#autodisplay").modal('show');
              Cookies.set('modalShown', true);
            } else {
            	
            }
        			
    },3000);
 });
// ============Carousel===============
$(document).ready(function() {
  $('.owl-carousel-headerproduct').addClass('owl-carousel owl-theme').owlCarousel({
    margin: 0,
    responsiveClass: true,
    autoplay: true,
    loop: true,
    dots: false,
    nav: false,
    responsive:{
      0: {
        items: 1,
        dots: false,
        nav: false
      },
      600: {
        items: 1,
        dots: false,
        nav: false
      },
      1000: {
        items: 1,
        dots: false,
        nav: false
      }
    }
  })
  $('.owl-carousel-product').addClass('owl-carousel owl-theme').owlCarousel({
    margin: 0,
    responsiveClass: true,
    autoplay: true,
    loop: true,
    dots: true,
    nav: false,
    responsive:{
      0: {
        items: 1,
        dots: true,
        nav: false
      },
      600: {
        items: 1,
        dots: true,
        nav: false
      },
      1000: {
        items: 1,
        dots: true,
        nav: false
      }
    }
  })
  $('.owl-carousel-promo').addClass('owl-carousel owl-theme').owlCarousel({
    margin: 0,
    responsiveClass: true,
    responsive:{
      0: {
        items: 1,
        autoplay: true,
        loop: true,
        dots: true,
        nav: false
      },
      600: {
        items: 1,
        autoplay: true,
        loop: true,
        dots: true,
        nav: false
      },
      1000: {
        items: 3,
        autoplay: false,
        loop: false,
        dots: false,
        nav: false
      }
    }
  })
  $('.owl-carousel-news').addClass('owl-carousel owl-theme').owlCarousel({
    margin: 0,
    responsiveClass: true,
    dots: false,
    nav: true,
    responsive: {
      0: {
        items: 1,
        dots: false,
        nav: true
      },
      600: {
        items: 2,
        dots: false,
        nav: true
      },
      1000: {
        items: 1,
        dots: false,
        nav: true
      }
    },
    navText: ['<svg width="20px" height="20px" viewBox="0 0 11 20"><path style="fill:none;stroke-width: 2px;stroke: #1c1c1c;" d="M9.554,1.001l-8.607,8.607l8.607,8.606"/></svg>','<svg width="20px" height="20px" viewBox="0 0 11 20" version="1.1"><path style="fill:none;stroke-width: 2px;stroke: #1c1c1c;" d="M1.054,18.214l8.606,-8.606l-8.606,-8.607"/></svg>'],
  }).on('changed.owl.carousel', syncPosition);
})
// PRODUCT PAGE, SYNCHRONIZE IMAGE 1
$(document).ready(function() {
  var sync1 = $("#sync1");
  var sync2 = $("#sync2");
  var slidesPerPage = 5; //globaly define number of elements per page
  var syncedSecondary = true;
  sync1.owlCarousel({
    items : 1,
    slideSpeed : 2000,
    nav: true,
    dots: false,
    loop: true,
    // touchDrag  : false,
    // mouseDrag  : true,
    responsiveRefreshRate : 200,
    navText: ['<svg width="100%" height="100%" viewBox="0 0 11 20"><path style="fill:none;stroke-width: 3px;stroke: #d6c3a7;" d="M9.554,1.001l-8.607,8.607l8.607,8.606"/></svg>','<svg width="100%" height="100%" viewBox="0 0 11 20" version="1.1"><path style="fill:none;stroke-width: 3px;stroke: #d6c3a7;" d="M1.054,18.214l8.606,-8.606l-8.606,-8.607"/></svg>'],
  }).on('changed.owl.carousel', syncPosition);
  sync2
    .on('initialized.owl.carousel', function () {
      sync2.find(".owl-item").eq(0).addClass("current");
    })
    .owlCarousel({
    items : slidesPerPage,
    dots: false,
    nav: false,
    smartSpeed: 200,
    slideSpeed : 500,
    slideBy: slidesPerPage, //alternatively you can slide by 1, this way the active slide will stick to the first item in the second carousel
    responsiveRefreshRate : 100
  }).on('changed.owl.carousel', syncPosition2);
  function syncPosition(el) {
    var count = el.item.count-1;
    var current = Math.round(el.item.index - (el.item.count/2) - .5);    
    if(current < 0) {
      current = count;
    }
    if(current > count) {
      current = 0;
    }
    sync2
      .find(".owl-item")
      .removeClass("current")
      .eq(current)
      .addClass("current");
    var onscreen = sync2.find('.owl-item.active').length - 1;
    var start = sync2.find('.owl-item.active').first().index();
    var end = sync2.find('.owl-item.active').last().index();
    if (current > end) {
      sync2.data('owl.carousel').to(current, 100, true);
    }
    if (current < start) {
      sync2.data('owl.carousel').to(current - onscreen, 100, true);
    }
  }
  function syncPosition2(el) {
    if(syncedSecondary) {
      var number = el.item.index;
      sync1.data('owl.carousel').to(number, 100, true);
    }
  }
  sync2.on("click", ".owl-item", function(e){
    e.preventDefault();
    var number = $(this).index();
    sync1.data('owl.carousel').to(number, 300, true);
  });
});
// PRODUCT PAGE, SYNCHRONIZE IMAGE 2
$(document).ready(function() {
  var sync3 = $("#sync3");
  var sync4 = $("#sync4");
  var slidesPerPage = 5; //globaly define number of elements per page
  var syncedSecondary = true;
  sync3.owlCarousel({
    items : 1,
    slideSpeed : 2000,
    nav: true,
    // autoplay: true,
    dots: false,
    loop: true,
    touchDrag  : false,
    mouseDrag  : true,
    responsiveRefreshRate : 200,
    navText: ['<svg width="100%" height="100%" viewBox="0 0 11 20"><path style="fill:none;stroke-width: 3px;stroke: #d6c3a7;" d="M9.554,1.001l-8.607,8.607l8.607,8.606"/></svg>','<svg width="100%" height="100%" viewBox="0 0 11 20" version="1.1"><path style="fill:none;stroke-width: 3px;stroke: #d6c3a7;" d="M1.054,18.214l8.606,-8.606l-8.606,-8.607"/></svg>'],
  }).on('changed.owl.carousel', syncPosition);
  sync4
    .on('initialized.owl.carousel', function () {
      sync4.find(".owl-item").eq(0).addClass("current");
    })
    .owlCarousel({
    items : slidesPerPage,
    dots: false,
    nav: false,
    smartSpeed: 200,
    slideSpeed : 500,
    slideBy: slidesPerPage, //alternatively you can slide by 1, this way the active slide will stick to the first item in the second carousel
    responsiveRefreshRate : 100
  }).on('changed.owl.carousel', syncPosition2);
  function syncPosition(el) {
    //if you set loop to false, you have to restore this next line
    //var current = el.item.index;
    //if you disable loop you have to comment this block
    var count = el.item.count-1;
    var current = Math.round(el.item.index - (el.item.count/2) - .5);
    
    if(current < 0) {
      current = count;
    }
    if(current > count) {
      current = 0;
    }
    //end block
    sync4
      .find(".owl-item")
      .removeClass("current")
      .eq(current)
      .addClass("current");
    var onscreen = sync4.find('.owl-item.active').length - 1;
    var start = sync4.find('.owl-item.active').first().index();
    var end = sync4.find('.owl-item.active').last().index();
    if (current > end) {
      sync4.data('owl.carousel').to(current, 100, true);
    }
    if (current < start) {
      sync4.data('owl.carousel').to(current - onscreen, 100, true);
    }
  }
  function syncPosition2(el) {
    if(syncedSecondary) {
      var number = el.item.index;
      sync3.data('owl.carousel').to(number, 100, true);
    }
  }
  sync4.on("click", ".owl-item", function(e){
    e.preventDefault();
    var number = $(this).index();
    sync3.data('owl.carousel').to(number, 300, true);
  });
});
// ============Animation===============
$(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
$(window).scroll(function() {
    $(".slideanimX").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slideX");
        }
    });
  });
//============================================COMINGSOON============================================
//Video
$(document).ready(function() {
  var v = document.getElementById('bgvid');
  var playButton = document.getElementById("play-pause");
  playButton.addEventListener(
      'play', 
      function() { 
          v.play();
          playButton.style.backgroundImage = "url('images/mulai-pertama.png')";
      }, 
      false);
  playButton.onclick = function() {
      if (v.paused) {
          v.play();
          playButton.style.backgroundImage = "url('images/jeda-putih.png')";
      } else {
          v.pause();
          playButton.style.backgroundImage = "url('images/mulai-pertama.png')";
      }
      return false;
  };
})
$(".radio-switch").css("display","none");
// Form
$('.cly-btn').click(function() {
 $(".cly-2").removeClass("slideOut");
 $(".cly-2").addClass("slideIn");
 $(".radio-switch").css("display","block");
 $(".boxcly-2").css("display","unset");
 $(".boxcly-3").css("display","none");
 }
)
$('.cly2-btn').click(function() {
 $(".boxcly-2").css("display","none");
 $(".boxcly-3").css("display","block");
 }
)
$('.clyclosebtn').click(function(){
  $(".cly-2").addClass("slideOut");
  $(".boxcly-2").css("display","none");
}
)
//============================================END COMINGSOON============================================