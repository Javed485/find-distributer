export default function header() {
    return (
        `<div class="container py-4">
                <div class="row d-flex align-items-center">
                    <div class="col-6 col-md-4 col-lg-2 order-md-1">
                        <a class="logo" target="_self" href="index.php">
                            <img alt="Logo" loading="lazy" width="274" height="42" src="assets/images/find.png" />
                        </a>
                    </div>
                    <div class="col-12 col-md-5 col-lg-6 order-md-2 order-3 mt-3 mt-md-0">
                        <div class="searchBar">
                            <div class="title-btn">
                                <div class="btn-drop" onclick="header_dropdown()">
                                    <button>Distributors
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="6" viewBox="0 0 24 24"
                                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" class="down-arrow">
                                            <polyline points="6 9 12 15 18 9"></polyline>
                                        </svg>
                                    </button>
                                </div>
                                <ul class="DRmHK drop-down-cont" id="myDropdown">
                                    <li><a href="distributer.php" class="text-decoration-none text-dark">
                                        <p class=" dd-text Body3R"> Distributors</p></a>
                                    </li>
                                    <li><a href="franchisor.php" class="text-decoration-none text-dark">
                                        <p class=" dd-text Body3R"> Franchise</p></a>
                                    </li>
                                </ul>
                            </div>
                            <form class="form">
                                <div class="lefticon">
                                    <span class="inpIconlft">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18px" height="18px"
                                            viewBox="0 0 24 24" fill="none" stroke="#404D57" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <circle cx="11" cy="11" r="8"></circle>
                                            <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                                        </svg>
                                    </span>
                                    <input type="text" placeholder="Search Product Keyword" class="placeholder" />
                                </div>
                                <div class="searchBtn">
                                    <button class="searchBtnCustom" type="submit">
                                        <p class="Body3R d-none d-md-block">Search</p>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" class="d-block d-md-none search-icon">
                                            <circle cx="11" cy="11" r="8"></circle>
                                            <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                                        </svg>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
    
                    <div class="col-6 col-md-3 col-lg-4 order-md-3 order-2">
                        <div class="d-flex align-items-center justify-content-end justify-content-md-between">
                            <a href="https://bulkvyapar.com/" class="visit-ti-link">Visit Bulkvyapar</a>
                            <div class="header-join">
                                <div class="loginBar d-md-flex  d-none">
                                    <a class="items" target="_self" href="signin.php">Sign In</a>
                                    <a class="items joinFree" target="_self" href="joinfree.php">Join Free</a>
                                </div>
                                <div class="d-flex justify-content-end d-md-none grid-img">
                                    <img alt="sign in/sign up" loading="lazy" width="20" height="20" decoding="async"
                                        data-nimg="1" style="color:transparent" src="images/icons/gp-header.svg" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>`
    );
};



