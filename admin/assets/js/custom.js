
// back to top - start
// --------------------------------------------------
$(window).scroll(function() {
  if ($(this).scrollTop() > 200) {
    $('.backtotop:hidden').stop(true, true).fadeIn();
  } else {
    $('.backtotop').stop(true, true).fadeOut();
  }
});
$(function() {
  $(".scroll").on('click', function() {
    $("html,body").animate({
      scrollTop: $("#thetop").offset().top
    }, "slow");
    return false
  })
});  


// preloader - start
// --------------------------------------------------
// $(window).on('load', function(){
//   $('#preloader').fadeOut('slow',function(){$(this).remove();});
// });


// Show Popup Modal on Page Load
// $(document).ready(function () {
//   $('#loadpage-Modal').modal('show');
// });








// SELECT ONE OPTION WITH BUTTON
let dist_btn = document.getElementById('select-one');
let fran_btn = document.getElementById('select-two');
let distshow = document.getElementById('distributedShow');
let franshow = document.getElementById('franchiseShow');

  dist_btn.addEventListener("click", function(){
    distshow.style.display = 'block';
    franshow.style.display = 'none';

    dist_btn.classList.add('dis-active');
    fran_btn.classList.remove('dis-active');
  });

  fran_btn.addEventListener("click", function() {
    distshow.style.display = 'none';
    franshow.style.display = 'block';

    fran_btn.classList.add('dis-active');
    dist_btn.classList.remove('dis-active');
  });


// SLIDER DISCOVER DISTRIBUTED OPPORTUNITIES
$(document).ready(function () {
  $('#distributer-opportunities').slick({
    infinite: false,
    slidesToShow: 3,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
        }
      },
      {
        breakpoint: 567,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1
        }
      }
    ]
  });
});


// SELECT ONE OPTION WITH FORM BUTTON
// let dist_btn = document.getElementById('select-one');
// let fran_btn = document.getElementById('select-two');
// let distshow = document.getElementById('distributedShow');
// let franshow = document.getElementById('franchiseShow');

  // dist_btn.addEventListener("click", function(){
  //   distshow.style.display = 'block';
  //   franshow.style.display = 'none';

  //   dist_btn.classList.add('dis-active');
  //   fran_btn.classList.remove('dis-active');
  // });

  // fran_btn.addEventListener("click", function() {
  //   distshow.style.display = 'none';
  //   franshow.style.display = 'block';

  //   fran_btn.classList.add('dis-active');
  //   dist_btn.classList.remove('dis-active');
  // });


// SLIDER SUCCESS STORIES
$(document).ready(function () {
  $('#succes_stories').slick({
    infinite: false,
    slidesToShow: 3,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
    responsive: [
      {
        breakpoint: 992,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
        }
      },
      {
        breakpoint: 567,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1
        }
      }
    ]
  });
});


// SLIDER FRANCHISES COMPANIES
  $(document).ready(function () {
    $('#review-slider').slick({
      infinite: true,
      autoplay: true,
      autoplaySpeed: 2000,
    });
  });



// SLIDER FRANCHISES COMPANIES
$(document).ready(function () {
  $('#franchise-companies').slick({
    infinite: false,
    slidesToShow: 4,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
    responsive: [
      {
        breakpoint: 992,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
        }
      },
      {
        breakpoint: 567,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1
        }
      }
    ]
  });
});


// CATELOGUE SOCIAL ICONS
function socialfunction() {
  document.getElementById("social--icon").classList.toggle("dropdown_icon");
}


// CATELOGUE PRODUCT SLIDER
  $(document).ready(function () {
    $('#catelogueProduct').slick({
      infinite: false,
      slidesToShow: 5,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 2000,
      responsive: [
      {
        breakpoint: 1200,
        settings: {
          slidesToShow: 4,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 992,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 767,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 567,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
    ]
  });
});






