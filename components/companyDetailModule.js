import header from '../layout/header.js';
import footer from '../layout/footer.js';
import companyForm from '../design-layout/company-form.js';
import {modalDistributer} from '../layout/modals.js';

let headerDiv = document.querySelector('.header');
headerDiv.innerHTML = header();

let footerDiv = document.querySelector('.footer');
footerDiv.innerHTML = footer();

let customWidthDiv = document.querySelector('.companyFormSection');
customWidthDiv.innerHTML = companyForm();

let distributerModalDiv = document.querySelector('.distributer_modal');
distributerModalDiv.innerHTML = modalDistributer();

