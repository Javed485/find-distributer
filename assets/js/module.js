import header from '../../layout/header.js';
import homeBanner from '../../layout/home-banner.js';




let headerDiv = document.querySelector('.header');
headerDiv.innerHTML = header();

let homeBannerDiv = document.querySelector('#homebanner');
homeBannerDiv.innerHTML = homeBanner();


