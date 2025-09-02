import header from '../layout/header.js';
import footer from '../layout/footer.js';

let headerDiv = document.querySelector('.header');
headerDiv.innerHTML = header();

let footerDiv = document.querySelector('.footer');
footerDiv.innerHTML = footer();


