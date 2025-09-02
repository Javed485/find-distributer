import header from '../layout/header.js';
import blog from '../layout/blog.js';
import footer from '../layout/footer.js';

let headerDiv = document.querySelector('.header');
headerDiv.innerHTML = header();

let blogsDiv = document.querySelector('.blogs');
blogsDiv.innerHTML = blog();

let footerDiv = document.querySelector('.footer');
footerDiv.innerHTML = footer();




