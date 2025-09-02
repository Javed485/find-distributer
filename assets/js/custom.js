
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


// Header Dropdown - start
function header_dropdown() {
  document.getElementById("myDropdown").classList.toggle("dropdown_show");
}

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
let dist_form = document.getElementById('dist_form');
let fran_form = document.getElementById('fran_form');
let dist_form_show = document.getElementById('distribute_form_Show');
let fran_form_show = document.getElementById('franchised_form_Show');

  dist_form.addEventListener("click", function(){
  dist_form_show.style.display = 'block';
  fran_form_show.style.display = 'none';

  dist_form.classList.add('fran-active');
  fran_form.classList.remove('fran-active');
  });

  fran_form.addEventListener("click", function(){
  dist_form_show.style.display = 'none';
  fran_form_show.style.display = 'block';

  fran_form.classList.add('fran-active');
  dist_form.classList.remove('fran-active');
  });


// Modal Form Choose Distributer and Franchise
let dist_modal = document.getElementById('dist_modal');
let fran_modal = document.getElementById('fran_modal');
let dist_modal_show = document.getElementById('distribute_modal_Show');
let fran_modal_show = document.getElementById('franchised_modal_Show');

dist_modal.addEventListener("click", function(){
  dist_modal_show.style.display = 'block';
  fran_modal_show.style.display = 'none';

  dist_modal.classList.add('fran-active');
  fran_modal.classList.remove('fran-active');
});

fran_modal.addEventListener("click", function(){
  dist_modal_show.style.display = 'none';
  fran_modal_show.style.display = 'block';

  fran_modal.classList.add('fran-active');
  dist_modal.classList.remove('fran-active');
});

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


// Catelogue Navbar Active and Deactive
let header = document.getElementById("cate-nav");
let btns = header.getElementsByClassName("tab-title");
  for (let i = 0; i < btns.length; i++) {
    btns[i].addEventListener("click", function() {
      let current = document.getElementsByClassName("tab-active");
      current[0].className = current[0].className.replace(" tab-active", "");
      this.className += " tab-active";
    });
  };


// CATELOGUE SOCIAL ICONS
function socialfunction() {
  document.getElementById("social--icon").classList.toggle("dropdown_icon");
}


// // CATELOGUE PRODUCT SLIDER
// $(document).ready(function () {
//   $('#catelogueProduct').slick({
//     infinite: false,
//     slidesToShow: 5,
//     slidesToScroll: 1,
//     autoplay: true,
//     autoplaySpeed: 2000,
//     responsive: [
//     {
//       breakpoint: 1200,
//       settings: {
//         slidesToShow: 4,
//         slidesToScroll: 1
//       }
//     },
//     {
//       breakpoint: 992,
//       settings: {
//         slidesToShow: 3,
//         slidesToScroll: 1
//       }
//     },
//     {
//       breakpoint: 767,
//       settings: {
//         slidesToShow: 2,
//         slidesToScroll: 1
//       }
//     },
//     {
//       breakpoint: 567,
//       settings: {
//         slidesToShow: 1,
//         slidesToScroll: 1
//       }
//     }
//     ]
//   });
// });


// SELECT ONE OPTION WITH CATEGORY FORM BUTTON
//     let dist_cate = document.getElementById('dist_cate');
//     let fran_cate = document.getElementById('fran_cate');
//     let dist_form_cate = document.getElementById('distribute_form_cate');
//     let fran_form_cate = document.getElementById('franchised_form_cate');

//     dist_cate.addEventListener("click", function () {
//         dist_form_cate.style.display = 'block';
//         fran_form_cate.style.display = 'none';

//         dist_cate.classList.add('fran-active');
//         fran_cate.classList.remove('fran-active');
//     });

//     fran_cate.addEventListener("click", function () {
//         dist_form_cate.style.display = 'none';
//         fran_form_cate.style.display = 'block';

//         fran_cate.classList.add('fran-active');
//         dist_cate.classList.remove('fran-active');
//     });


// SLIDER FRANCHISES COMPANIES JOINFREE
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












