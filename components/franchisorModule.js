import header from '../layout/header.js';
import banner from '../design-layout/banner.js';
import category from '../design-layout/categories.js';
import askQuestion from '../design-layout/ask-question.js';
import topTrendingCategory from '../design-layout/top-treanding-category.js';
import topProducts from '../design-layout/top-products.js';
import footer from '../layout/footer.js';

let headerDiv = document.querySelector('.header');
headerDiv.innerHTML = header();

let bannerDiv = document.querySelector('.banner');
bannerDiv.innerHTML = banner();

let categoryDiv = document.querySelector('.categories');
categoryDiv.innerHTML = category();

let ask_questionDiv = document.querySelector('.ask_question');
ask_questionDiv.innerHTML = askQuestion();

let topTrendingCategoryDiv = document.querySelector('.top_trending_category');
topTrendingCategoryDiv.innerHTML = topTrendingCategory();

let topProductDiv = document.querySelector('.top_products');
topProductDiv.innerHTML = topProducts();

let footerDiv = document.querySelector('.footer');
footerDiv.innerHTML = footer();



