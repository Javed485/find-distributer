<?php include'layout/all-link.php'; ?>

<style>
    #signinNumber,
    #login_mobile{
        display: none;
    }
</style>

<!-- ------------------ START TERM & CONDITIONS ---------------  -->
    <section>
        <div class="join-free">
            <div class="container py-4">
                <div class="row d-flex align-items-md-center">
                    <div class="col-7 col-md-7 d-none d-md-block">
                        <div class="form-content">
                            <div class="dhWYNv">
                                <a class="pointercur" target="_self" href="/">
                                    <img alt="gd logo" width="274" height="42" class="mb-4" src="assets/images/find.png">
                                </a>
                                <div class="content-title mb-3">Start your<br> Journey with us.</div>
                                <div class="content-desc">Discover the world best manufacturers and distributors</div>
                                <div class="reviewRow" id="review-slider">
                                    <div class="form-testimonial">
                                        <p class="UwXhD t-text">I am extremely satisfied with the services provided by
                                            GetDistributors. Since I joined them, I have received a good number of
                                            inquiries. They have exceeded my expectations and provided exceptional
                                            service so far. I am pleased to be a part of their network. If you want to
                                            take your business to the next level, this tool is your best bet. It will
                                            help you scale your business and achieve new heights of success.</p>
                                        <div class="d-flex">
                                            <span class="alphabet-cont">G</span>
                                            <div>
                                                <p class="csVBQG"> Greensense Energy Systems Pvt. Ltd.</p>
                                                <p class="cttRju"> Mr Subhash Gangadhar Chandane</p>
                                            </div>
                                        </div>
                                        <span class="quotes-image">
                                            <img alt="gd-form" width="54" height="40"
                                                src="assets/images/icons/form-dbl-q.svg">
                                        </span>
                                    </div>

                                     <div class="form-testimonial">
                                        <p class="UwXhD t-text">I am extremely satisfied with the services provided by
                                            GetDistributors. Since I joined them, I have received a good number of
                                            inquiries. They have exceeded my expectations and provided exceptional
                                            service so far. I am pleased to be a part of their network. If you want to
                                            take your business to the next level, this tool is your best bet. It will
                                            help you scale your business and achieve new heights of success.</p>
                                        <div class="d-flex">
                                            <span class="alphabet-cont">G</span>
                                            <div>
                                                <p class="csVBQG"> Greensense Energy Systems Pvt. Ltd.</p>
                                                <p class="cttRju"> Mr Subhash Gangadhar Chandane</p>
                                            </div>
                                        </div>
                                        <span class="quotes-image">
                                            <img alt="gd-form" width="54" height="40"
                                                src="assets/images/icons/form-dbl-q.svg">
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 d-block d-md-none mobile-title-cont">
                        <a class="form-link main-link" target="_self" href="index.php">
                            <img alt="get distributers" width="274" height="50" src="assets/images/find.png">
                        </a>
                    </div>

                    <div class="col-12 col-md-5">
                        <div class="form-step">
                            <div class="form-heading mb-3">Sign In</div>
                            <p class="iOrJHF mb-3">Sign in to Get The Best Deals, Exclusive<br> Offers with
                                GetDistributors</p>
                        </div>
                        <form action="#" class="signIn-Form">
                            <div class="row form-input">
                                <div class="col-12 mt-3" id="signinNumber">
                                    <div class="form-group input-group-lg">
                                        <input type="text" class="form-control sign-width" name="mobile" placeholder="Mobile Number">
                                    </div>
                                </div>

                                <div class="col-12 mt-3" id="signinEmail">
                                    <div class="form-group input-group-lg">
                                        <input type="text" class="form-control sign-width" name="email" placeholder="Email">
                                    </div>
                                </div>

                                <div class="col-12 mt-2">
                                    <div class="d-flex">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" checked
                                                style="width: 20px; height: 20px; margin-top: 0;">
                                        </div>
                                        <div class="d-flex ml-3">
                                            <img alt="watsapp" width="20" height="20"
                                                src="assets/images/svg/watsapp-logo.svg">
                                            <p class="dXwXVd ml-2">Would you like to get updates over Whatsapp</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 login-btn signin-btn">
                                    <button font-weight="500" type="submit" class="sc-1612e08e-0 jVwSCF">Continue to
                                        Sign In
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" class="ml-3">
                                            <line x1="5" y1="12" x2="19" y2="12"></line>
                                            <polyline points="12 5 19 12 12 19"></polyline>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </form>
                        <div class="email-login">
                            <p class="cttRju" id="login_email">Login With Email</p>
                            <p class="cttRju" id="login_mobile">Login With Mobile</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include'layout/footer-link.php'; ?>
   
<script>
// LOGIN NUMBER AND EMAIL
    let email_input = document.getElementById('signinEmail');
    let number_input = document.getElementById('signinNumber');
    let email_btn = document.getElementById('login_email');
    let mobile_btn = document.getElementById('login_mobile');

        email_btn.addEventListener("click", function(){
            number_input.style.display = 'block';
            email_input.style.display = 'none';

            email_btn.style.display = 'none';
            mobile_btn.style.display = 'block';
        });

        mobile_btn.addEventListener("click", function(){
            number_input.style.display = 'none';
            email_input.style.display = 'block';

            email_btn.style.display = 'block';
            mobile_btn.style.display = 'none';
        });


// SLIDER FRANCHISES COMPANIES
    $(document).ready(function () {
        $('#review-slider').slick({
            infinite: true,
            autoplay: true,
            autoplaySpeed: 2000,
        });
    });

</script>

