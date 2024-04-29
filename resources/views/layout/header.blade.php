<header id="header" class="header header-sticky header-sticky-smart disable-transition-all z-index-5">
    {{-- <div class="topbar bg-primary">
        <div class="container-wide container">
            <p class="mb-0 text-white text-center p-4 fs-15px fw-bold ls-1 text-uppercase">Free shipping on all U.S. orders $50+</p>
        </div>
    </div> --}}
    <div class="sticky-area">
        <div class="main-header nav navbar bg-body navbar-light navbar-expand-xl py-6 py-xl-0">
            <div class="container-xxl container">
                <div class="d-flex d-xl-none w-100">
                    <div class="w-72px d-flex d-xl-none">
                        <button class="navbar-toggler align-self-center  border-0 shadow-none px-0 canvas-toggle p-4" type="button" data-bs-toggle="offcanvas" data-bs-target="#offCanvasNavBar" aria-controls="offCanvasNavBar" aria-expanded="false" aria-label="Toggle Navigation">
                            <span class="fs-24 toggle-icon"></span>
                        </button>
                    </div>
                    <div class="d-flex mx-auto">
                        <a href="index.html" class="navbar-brand px-8 py-4 mx-auto">
                            <img class="light-mode-img" src="{{$dashboardUrl}}/assets/images/others/logo_light.png" width="90" height="100"
                                alt="Angira Handicrafts">
                            <img class="dark-mode-img" src="{{$dashboardUrl}}/assets/images/others/logo_dark.png" width="90"
                                height="100" alt="Angira Handicrafts"></a>
                    </div>
                    <div class="icons-actions d-flex justify-content-end w-xl-50 fs-28px text-body-emphasis w-72px">
                        <div class="px-xl-5 d-inline-block">
                            <a class="lh-1 color-inherit text-decoration-none" href="#" data-bs-toggle="offcanvas"
                                data-bs-target="#searchModal" aria-controls="searchModal" aria-expanded="false">
                                <svg class="icon icon-magnifying-glass-light">
                                    <use xlink:href="#icon-magnifying-glass-light"></use>
                                </svg>
                            </a>
                        </div>
                        <div class="color-modes position-relative ps-5">
                            <a class="bd-theme btn btn-link nav-link dropdown-toggle d-inline-flex align-items-center justify-content-center text-primary p-0 position-relative rounded-circle"
                                href="#" aria-expanded="true" data-bs-toggle="dropdown" data-bs-display="static"
                                aria-label="Toggle theme (light)">
                                <svg class="bi my-1 theme-icon-active">
                                    <use href="#sun-fill"></use>
                                </svg>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end fs-14px" data-bs-popper="static">
                                <li>
                                    <button type="button" class="dropdown-item d-flex align-items-center active"
                                        data-bs-theme-value="light" aria-pressed="true">
                                        <svg class="bi me-4 opacity-50 theme-icon">
                                            <use href="#sun-fill"></use>
                                        </svg>
                                        Light
                                        <svg class="bi ms-auto d-none">
                                            <use href="#check2"></use>
                                        </svg>
                                    </button>
                                </li>
                                <li>
                                    <button type="button" class="dropdown-item d-flex align-items-center"
                                        data-bs-theme-value="dark" aria-pressed="false">
                                        <svg class="bi me-4 opacity-50 theme-icon">
                                            <use href="#moon-stars-fill"></use>
                                        </svg>
                                        Dark
                                        <svg class="bi ms-auto d-none">
                                            <use href="#check2"></use>
                                        </svg>
                                    </button>
                                </li>
                                <li>
                                    <button type="button" class="dropdown-item d-flex align-items-center"
                                        data-bs-theme-value="auto" aria-pressed="false">
                                        <svg class="bi me-4 opacity-50 theme-icon">
                                            <use href="#circle-half"></use>
                                        </svg>
                                        Auto
                                        <svg class="bi ms-auto d-none">
                                            <use href="#check2"></use>
                                        </svg>
                                    </button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="d-none d-xl-flex flex-column flex-xl-row w-100">
                    <div class="w-auto w-xl-50 d-flex align-items-center">
                        <div class="icons-actions d-none d-xl-flex justify-content-start me-auto fs-28px text-body-emphasis">
                            {{-- <div class="pe-6">
                                <a class="lh-1 color-inherit text-decoration-none" href="#"
                                    data-bs-toggle="offcanvas" data-bs-target="#searchModal"
                                    aria-controls="searchModal" aria-expanded="false">
                                    <svg class="icon icon-magnifying-glass-light fs-5">
                                        <use xlink:href="#icon-magnifying-glass-light"></use>
                                    </svg>
                                    <span class="fs-15px">Search</span>
                                </a>
                            </div> --}}
                        </div>
                        <ul class="navbar-nav w-100 w-xl-auto">
                            <li class="nav-item transition-all-xl-1 py-xl-11 py-0 px-xxl-8 px-xl-6">
                                <a class="nav-link d-flex justify-content-between position-relative py-xl-0 px-xl-0 text-uppercase fw-semibold ls-1 fs-15px fs-xl-14px" href="{{$dashboardUrl}}" id="menu-item-home">Home</a>
                            </li>
                            <li class="nav-item transition-all-xl-1 py-xl-11 py-0 px-xxl-8 px-xl-6">
                                <a class="nav-link d-flex justify-content-between position-relative py-xl-0 px-xl-0 text-uppercase fw-semibold ls-1 fs-15px fs-xl-14px" href="{{$dashboardUrl}}/shop" id="menu-item-home">Shop</a>
                            </li>
                            <li class="nav-item transition-all-xl-1 py-xl-11 py-0 px-xxl-8 px-xl-6">
                                <a class="nav-link d-flex justify-content-between position-relative py-xl-0 px-xl-0 text-uppercase fw-semibold ls-1 fs-15px fs-xl-14px" href="{{$dashboardUrl}}/blog" id="menu-item-home">Blog</a>
                            </li>
                            {{-- <li class="nav-item transition-all-xl-1 py-xl-11 py-0 px-xxl-8 px-xl-6 dropdown dropdown-hover dropdown-fullwidth position-static">
                                <a class="nav-link d-flex justify-content-between position-relative py-xl-0 px-xl-0 text-uppercase fw-semibold ls-1 fs-15px fs-xl-14px dropdown-toggle" href="store.html" data-bs-toggle="dropdown" id="menu-item-shop" aria-haspopup="true" aria-expanded="false">Shop</a>
                                <div class="dropdown-menu mega-menu start-0 py-6  w-100"
                                    aria-labelledby="menu-item-shop">
                                    <div class="megamenu-shop container-wide py-8 px-12">
                                        <div class="row">
                                            <div class="col">
                                                <h6 class="fs-18px">Shop Pages</h6>
                                                <ul class="list-unstyled mb-0">
                                                    <li>
                                                        <a href="shop/shop-layout-v1.html"
                                                            class="border-hover text-decoration-none py-3 d-block"><span
                                                                class="border-hover-target">Shop Layout
                                                                <sup>v1</sup></span></a>
                                                    </li>
                                                    <li>
                                                        <a href="shop/shop-layout-v2.html"
                                                            class="border-hover text-decoration-none py-3 d-block"><span
                                                                class="border-hover-target">Shop Layout
                                                                <sup>v2</sup></span></a>
                                                    </li>
                                                    <li>
                                                        <a href="shop/shop-layout-v3.html"
                                                            class="border-hover text-decoration-none py-3 d-block"><span
                                                                class="border-hover-target">Shop Layout
                                                                <sup>v3</sup></span></a>
                                                    </li>
                                                    <li>
                                                        <a href="shop/shop-layout-v4.html"
                                                            class="border-hover text-decoration-none py-3 d-block"><span
                                                                class="border-hover-target">Shop Layout
                                                                <sup>v4</sup></span></a>
                                                    </li>
                                                    <li>
                                                        <a href="shop/shop-layout-v5.html"
                                                            class="border-hover text-decoration-none py-3 d-block"><span
                                                                class="border-hover-target">Shop Layout
                                                                <sup>v5</sup></span></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col">
                                                <h6 class="fs-18px">Product Pages</h6>
                                                <ul class="list-unstyled mb-0">
                                                    <li>
                                                        <a href="shop/product-details-v1.html"
                                                            class="border-hover text-decoration-none py-3 d-block"><span
                                                                class="border-hover-target">Product Detail
                                                                <sup>v1</sup></span></a>
                                                    </li>
                                                    <li>
                                                        <a href="shop/product-details-v2.html"
                                                            class="border-hover text-decoration-none py-3 d-block"><span
                                                                class="border-hover-target">Product Detail
                                                                <sup>v2</sup></span></a>
                                                    </li>
                                                    <li>
                                                        <a href="shop/product-details-v3.html"
                                                            class="border-hover text-decoration-none py-3 d-block"><span
                                                                class="border-hover-target">Product Detail
                                                                <sup>v3</sup></span></a>
                                                    </li>
                                                    <li>
                                                        <a href="shop/product-details-v4.html"
                                                            class="border-hover text-decoration-none py-3 d-block"><span
                                                                class="border-hover-target">Product Detail
                                                                <sup>v4</sup></span></a>
                                                    </li>
                                                    <li>
                                                        <a href="shop/product-details-v5.html"
                                                            class="border-hover text-decoration-none py-3 d-block"><span
                                                                class="border-hover-target">Product Detail
                                                                <sup>v5</sup></span></a>
                                                    </li>
                                                    <li>
                                                        <a href="shop/product-details-v6.html"
                                                            class="border-hover text-decoration-none py-3 d-block"><span
                                                                class="border-hover-target">Product Detail
                                                                <sup>v6</sup></span></a>
                                                    </li>
                                                    <li>
                                                        <a href="shop/product-details-v7.html"
                                                            class="border-hover text-decoration-none py-3 d-block"><span
                                                                class="border-hover-target">Product Detail
                                                                <sup>v7</sup></span></a>
                                                    </li>
                                                    <li>
                                                        <a href="shop/product-details-v8.html"
                                                            class="border-hover text-decoration-none py-3 d-block"><span
                                                                class="border-hover-target">Product Detail
                                                                <sup>v8</sup></span></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col">
                                                <h6 class="fs-18px">Product Types</h6>
                                                <ul class="list-unstyled mb-0">
                                                    <li>
                                                        <a href="shop/product-simple.html"
                                                            class="border-hover text-decoration-none py-3 d-block"><span
                                                                class="border-hover-target">Product
                                                                Simple</span></a>
                                                    </li>
                                                    <li>
                                                        <a href="shop/product-variable.html"
                                                            class="border-hover text-decoration-none py-3 d-block"><span
                                                                class="border-hover-target">Product
                                                                Variable</span></a>
                                                    </li>
                                                    <li>
                                                        <a href="shop/product-time-limit.html"
                                                            class="border-hover text-decoration-none py-3 d-block"><span
                                                                class="border-hover-target">Product Time
                                                                Limit</span></a>
                                                    </li>
                                                    <li>
                                                        <a href="shop/product-grouped.html"
                                                            class="border-hover text-decoration-none py-3 d-block"><span
                                                                class="border-hover-target">Product
                                                                Grouped</span></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col">
                                                <h6 class="fs-18px">Other Pages</h6>
                                                <ul class="list-unstyled mb-0">
                                                    <li>
                                                        <a href="shop/shopping-cart.html"
                                                            class="border-hover text-decoration-none py-3 d-block"><span
                                                                class="border-hover-target">Shopping Cart</span></a>
                                                    </li>
                                                    <li>
                                                        <a href="shop/compare.html"
                                                            class="border-hover text-decoration-none py-3 d-block"><span
                                                                class="border-hover-target">Compare</span></a>
                                                    </li>
                                                    <li>
                                                        <a href="shop/wishlist.html"
                                                            class="border-hover text-decoration-none py-3 d-block"><span
                                                                class="border-hover-target">Wishlist</span></a>
                                                    </li>
                                                    <li>
                                                        <a href="shop/checkout.html"
                                                            class="border-hover text-decoration-none py-3 d-block"><span
                                                                class="border-hover-target">Checkout</span></a>
                                                    </li>
                                                    <li>
                                                        <a href="user-registration.html"
                                                            class="border-hover text-decoration-none py-3 d-block"><span
                                                                class="border-hover-target">Register</span></a>
                                                    </li>
                                                    <li>
                                                        <a href="user-login.html"
                                                            class="border-hover text-decoration-none py-3 d-block"><span
                                                                class="border-hover-target">Login</span></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col d-xxl-block d-none megamenu-shop-banner"
                                                data-bs-theme="light">
                                                <div class="card border-0 mt-4">
                                                    <img src="assets/images/background/bg-mega-menu-shop.jpg"
                                                        alt="bg mega menu" class="card-img">
                                                    <div class="card-img-overlay d-flex flex-column mx-2 px-9 py-6">
                                                        <p
                                                            class="text-body-emphasis ls-1 fw-semibold mb-4 mt-6 text-uppercase">
                                                            new collection
                                                        </p>
                                                        <h3 class="fs-3">
                                                            Special <br>
                                                            Offer
                                                        </h3>
                                                        <div class="mt-auto">
                                                            <a href="#" class="btn btn-white">Shop Sale</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li> --}}
                        </ul>
                    </div>
                    <div class="d-none d-xl-flex align-items-center ">
                        <a href="{{$dashboardUrl}}" class="navbar-brand px-8 py-4 mx-auto">
                            <img class="light-mode-img" src="{{$dashboardUrl}}/assets/images/others/logo_light.png" width="90" height="100" alt="Angira Handicrafts">
                            <img class="dark-mode-img" src="{{$dashboardUrl}}/assets/images/others/logo_dark.png" width="90" height="100" alt="Angira Handicrafts">
                        </a>
                    </div>
                    <div class="w-auto w-xl-50 d-flex align-items-center">
                        <ul class="navbar-nav w-100 w-xl-auto">
                            <li class="nav-item transition-all-xl-1 py-xl-11 py-0 px-xxl-8 px-xl-6">
                                <a class="nav-link d-flex justify-content-between position-relative py-xl-0 px-xl-0 text-uppercase fw-semibold ls-1 fs-15px fs-xl-14px" href="{{$dashboardUrl}}/store" id="menu-item-store">Store</a>
                            </li>
                            <li class="nav-item transition-all-xl-1 py-xl-11 py-0 px-xxl-8 px-xl-6">
                                <a class="nav-link d-flex justify-content-between position-relative py-xl-0 px-xl-0 text-uppercase fw-semibold ls-1 fs-15px fs-xl-14px" href="{{$dashboardUrl}}/about-us" id="menu-item-aboutus">About Us</a>
                            </li>
                            <li class="nav-item transition-all-xl-1 py-xl-11 py-0 px-xxl-8 px-xl-6">
                                <a class="nav-link d-flex justify-content-between position-relative py-xl-0 px-xl-0 text-uppercase fw-semibold ls-1 fs-15px fs-xl-14px" href="{{$dashboardUrl}}/contact-us" id="menu-item-contactus">Contact Us</a>
                            </li>
                        </ul>
                        <div class="icons-actions d-none d-xl-flex justify-content-end ms-auto fs-28px text-body-emphasis">
                            {{-- <div class="px-5 d-none d-xl-inline-block">
                                <a class="lh-1 color-inherit text-decoration-none" href="#" data-bs-toggle="modal"
                                    data-bs-target="#signInModal">
                                    <svg class="icon icon-user-light">
                                        <use xlink:href="#icon-user-light"></use>
                                    </svg>
                                </a>
                            </div> --}}
                            {{-- <div class="px-5 d-none d-xl-inline-block">
                                <a class="position-relative lh-1 color-inherit text-decoration-none" href="shop/wishlist.html">
                                    <svg class="icon icon-star-light">
                                        <use xlink:href="#icon-star-light"></use>
                                    </svg>
                                    <span class="badge bg-dark text-white position-absolute top-0 start-100 translate-middle mt-4 rounded-circle fs-13px p-0 square" style="--square-size: 18px">3</span>
                                </a>
                            </div> --}}
                            {{-- <div class="px-5 d-none d-xl-inline-block">
                                <a class="position-relative lh-1 color-inherit text-decoration-none" href="#" data-bs-toggle="offcanvas" data-bs-target="#shoppingCart" aria-controls="shoppingCart" aria-expanded="false">
                                    <svg class="icon icon-star-light">
                                        <use xlink:href="#icon-shopping-bag-open-light"></use>
                                    </svg>
                                    <span class="badge bg-dark text-white position-absolute top-0 start-100 translate-middle mt-4 rounded-circle fs-13px p-0 square" style="--square-size: 18px">3</span>
                                </a>
                            </div> --}}
                            <div class="color-modes position-relative ps-5">
                                <a class="bd-theme btn btn-link nav-link dropdown-toggle d-inline-flex align-items-center justify-content-center text-primary p-0 position-relative rounded-circle"
                                    href="#" aria-expanded="true" data-bs-toggle="dropdown" data-bs-display="static"
                                    aria-label="Toggle theme (light)">
                                    <svg class="bi my-1 theme-icon-active">
                                        <use href="#sun-fill"></use>
                                    </svg>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end fs-14px" data-bs-popper="static">
                                    <li>
                                        <button type="button" class="dropdown-item d-flex align-items-center active"
                                            data-bs-theme-value="light" aria-pressed="true">
                                            <svg class="bi me-4 opacity-50 theme-icon">
                                                <use href="#sun-fill"></use>
                                            </svg>
                                            Light
                                            <svg class="bi ms-auto d-none">
                                                <use href="#check2"></use>
                                            </svg>
                                        </button>
                                    </li>
                                    <li>
                                        <button type="button" class="dropdown-item d-flex align-items-center"
                                            data-bs-theme-value="dark" aria-pressed="false">
                                            <svg class="bi me-4 opacity-50 theme-icon">
                                                <use href="#moon-stars-fill"></use>
                                            </svg>
                                            Dark
                                            <svg class="bi ms-auto d-none">
                                                <use href="#check2"></use>
                                            </svg>
                                        </button>
                                    </li>
                                    <li>
                                        <button type="button" class="dropdown-item d-flex align-items-center"
                                            data-bs-theme-value="auto" aria-pressed="false">
                                            <svg class="bi me-4 opacity-50 theme-icon">
                                                <use href="#circle-half"></use>
                                            </svg>
                                            Auto
                                            <svg class="bi ms-auto d-none">
                                                <use href="#check2"></use>
                                            </svg>
                                        </button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>