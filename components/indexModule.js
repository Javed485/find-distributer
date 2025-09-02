import header from '../layout/header.js';
import homeBanner from '../layout/home-banner.js';
import distributerOpportunites from '../design-layout/distributer-opportunites.js';
import topTrendingCategory from '../design-layout/top-treanding-category.js';
import askQuestion from '../design-layout/ask-question.js';
import footer from '../layout/footer.js';

let headerDiv = document.querySelector('.header');
headerDiv.innerHTML = header();

let homeBannerDiv = document.querySelector('.homebanner');
homeBannerDiv.innerHTML = homeBanner();

let distributerOpportunitesDiv = document.querySelector('.distributer_opportunites');
distributerOpportunitesDiv.innerHTML = distributerOpportunites();

let topTrendingCategoryDiv = document.querySelector('.top_trending_category');
topTrendingCategoryDiv.innerHTML = topTrendingCategory();

let ask_questionDiv = document.querySelector('.ask_question');
ask_questionDiv.innerHTML = askQuestion(); 

let footerDiv = document.querySelector('.footer');
footerDiv.innerHTML = footer();



