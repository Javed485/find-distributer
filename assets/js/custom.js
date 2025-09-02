
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


// SELECT ONE OPTION WITH FORM BUTTON
document.addEventListener("DOMContentLoaded", () => {
  const right_dist_btn = document.getElementById("select-one");
  const right_fran_btn = document.getElementById("select-two");
  const right_dist_show = document.getElementById("distributedShow");
  const right_fran_show = document.getElementById("franchiseShow");
  
    right_fran_btn.addEventListener("click", () => {
      right_dist_show.style.display = "none";
      right_fran_show.style.display = "block";

      right_fran_btn.classList.add("dis-active");
      right_dist_btn.classList.remove("dis-active");
    });

    right_dist_btn.addEventListener("click", () => {
      right_dist_show.style.display = "block";
      right_fran_show.style.display = "none";

      right_dist_btn.classList.add("dis-active");
      right_fran_btn.classList.remove("dis-active");
    });
});


// SLIDER DISCOVER DISTRIBUTED OPPORTUNITIES
$(document).ready(function () {
  $('#distributer-opportunities').slick({
    infinite: true,
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


// SELECT ONE OPTION WITH FORM BUTTON IN ASQ QUESTION
document.addEventListener("DOMContentLoaded", () => {
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
});


// SLIDER SUCCESS STORIES
$(document).ready(function () {
  $('#succes_stories').slick({
    infinite: true,
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


// Modal Form Choose Distributer and Franchise
document.addEventListener("DOMContentLoaded", () => {
  let distModal = document.querySelector('#dist_modal');
  let franModal = document.querySelector('#fran_modal');
  let distModal_show = document.querySelector('#distribute_modal_Show');
  let franModal_show = document.querySelector('#franchised_modal_Show');

  distModal.addEventListener("click", function(e){
    e.preventDefault();
    distModal_show.style.display = 'block';
    franModal_show.style.display = 'none';

    distModal.classList.add('sendModal-active');
    franModal.classList.remove('sendModal-active');
  });

  franModal.addEventListener("click", function(e){
    e.preventDefault();
    distModal_show.style.display = 'none';
    franModal_show.style.display = 'block';

    franModal.classList.add('sendModal-active');
    distModal.classList.remove('sendModal-active');
  });
});


// CATELOGUE SOCIAL ICONS
function socialfunction() {
  document.getElementById("social--icon").classList.toggle("dropdown_icon");
}


// Company Listing Form
document.addEventListener("DOMContentLoaded", () => {
  let distCompany = document.querySelector('#company-dist-select');
  let franCompany = document.querySelector('#company-fran-select');
  let distCompany_show = document.querySelector('#company-dist');
  let franCompany_show = document.querySelector('#company-franch');

  distCompany.addEventListener("click", function(e){
    e.preventDefault();
    distCompany_show.style.display = 'block';
    franCompany_show.style.display = 'none';

    distCompany.classList.add('fran-active');
    franCompany.classList.remove('fran-active');
  });

  franCompany.addEventListener("click", function(e){
    e.preventDefault();
    distCompany_show.style.display = 'none';
    franCompany_show.style.display = 'block';

    franCompany.classList.add('fran-active');
    distCompany.classList.remove('fran-active');
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












