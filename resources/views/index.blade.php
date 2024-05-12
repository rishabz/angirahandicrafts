@extends('layout.master')

@section('title',"Angira-Handicrafts")

@section('content')
<main id="content" class="wrapper layout-page">
    <section>
        <div class="slick-slider hero hero-header-05 slick-slider-dots-inside"
            data-slick-options="{&#34;arrows&#34;:false,&#34;autoplay&#34;:true,&#34;cssEase&#34;:&#34;ease-in-out&#34;,&#34;dots&#34;:false,&#34;fade&#34;:true,&#34;infinite&#34;:true,&#34;slidesToShow&#34;:1,&#34;speed&#34;:600}">
            <div class="vh-100 d-flex align-items-center">
                <div class="z-index-2 container container-xxl py-21 pt-xl-10 pb-xl-11">
                    <div class="hero-content text-start">
                        {{-- <div data-animate="fadeInDown">
                            <p class="text-primary mb-8 fw-semibold fs-4">New Collection</p>
                            <h1 class="mb-11 text-body-emphasis hero-title-5">Get The Skin<br>You Want To Feel</h1>
                        </div>
                        <a href="#" data-animate="fadeInUp"
                            class="pb-2 bg-transparent fw-semibold text-decoration-none hero-link p-0 fs-6 text-body-emphasis">
                            Discover Now
                            <svg class="icon">
                                <use xlink:href="#icon-arrow-right"></use>
                            </svg>
                        </a> --}}
                    </div>
                </div> 
                <div class="lazy-bg bg-overlay position-absolute z-index-1 w-100 h-100   light-mode-img"
                    data-bg-src="{{$dashboardUrl}}/assets/images/uploads/angiraFrontSlider1.png">
                </div>
                <div class="lazy-bg bg-overlay dark-mode-img position-absolute z-index-1 w-100 h-100"
                    data-bg-src="{{$dashboardUrl}}/assets/images/uploads/angiraFrontSlider1.png">
                </div>
            </div>
            <div class="vh-100 d-flex align-items-center">
                <div class="z-index-2 container container-xxl py-21 pt-xl-10 pb-xl-11">
                    <div class="hero-content text-start">
                        {{-- <div data-animate="fadeInDown">
                            <p class="text-primary mb-8 fw-semibold fs-4">The pearl glow</p>
                            <h1 class="mb-11 text-body-emphasis hero-title-5">Let’s Introduce Skin<br>with The Shine
                            </h1>
                        </div>
                        <a href="#" data-animate="fadeInUp"
                            class="pb-2 bg-transparent fw-semibold text-decoration-none hero-link p-0 fs-6 text-body-emphasis">
                            Discover Now
                            <svg class="icon">
                                <use xlink:href="#icon-arrow-right"></use>
                            </svg>
                        </a> --}}
                    </div>
                </div>
                <div class="lazy-bg bg-overlay position-absolute z-index-1 w-100 h-100   light-mode-img"
                    data-bg-src="{{$dashboardUrl}}/assets/images/uploads/angiraFrontSlider2.png">
                </div>
                <div class="lazy-bg bg-overlay dark-mode-img position-absolute z-index-1 w-100 h-100"
                    data-bg-src="{{$dashboardUrl}}/assets/images/uploads/angiraFrontSlider2.png">
                </div>
            </div>
            <div class="vh-100 d-flex align-items-center"> 
                <div class="z-index-2 container container-xxl py-21 pt-xl-10 pb-xl-11">
                    <div class="hero-content text-start">
                        {{-- <div data-animate="fadeInDown">
                            <p class="text-primary mb-8 fw-semibold fs-4">Get the glow</p>
                            <h1 class="mb-11 text-body-emphasis hero-title-5">Love Your Skin<br>Naturally</h1>
                        </div>
                        <a href="#" data-animate="fadeInUp"
                            class="pb-2 bg-transparent fw-semibold text-decoration-none hero-link p-0 fs-6 text-body-emphasis">
                            Discover Now
                            <svg class="icon">
                                <use xlink:href="#icon-arrow-right"></use>
                            </svg>
                        </a> --}}
                    </div>
                </div>
                <div class="lazy-bg bg-overlay position-absolute z-index-1 w-100 h-100   light-mode-img"
                    data-bg-src="{{$dashboardUrl}}/assets/images/uploads/angiraFrontSlider3.png">
                </div>
                <div class="lazy-bg bg-overlay dark-mode-img position-absolute z-index-1 w-100 h-100"
                    data-bg-src="{{$dashboardUrl}}/assets/images/uploads/angiraFrontSlider3.png">
                </div>
            </div>
            <div class="vh-100 d-flex align-items-center">
                <div class="z-index-2 container container-xxl py-21 pt-xl-10 pb-xl-11">
                    <div class="hero-content text-start">
                        {{-- <div data-animate="fadeInDown">
                            <p class="text-primary mb-8 fw-semibold fs-4">Get the glow</p>
                            <h1 class="mb-11 text-body-emphasis hero-title-5">Love Your Skin<br>Naturally</h1>
                        </div>
                        <a href="#" data-animate="fadeInUp"
                            class="pb-2 bg-transparent fw-semibold text-decoration-none hero-link p-0 fs-6 text-body-emphasis">
                            Discover Now
                            <svg class="icon">
                                <use xlink:href="#icon-arrow-right"></use>
                            </svg>
                        </a> --}}
                    </div>
                </div>
                <div class="lazy-bg bg-overlay position-absolute z-index-1 w-100 h-100   light-mode-img"
                    data-bg-src="{{$dashboardUrl}}/assets/images/uploads/angiraFrontSlider4.jpg">
                </div>
                <div class="lazy-bg bg-overlay dark-mode-img position-absolute z-index-1 w-100 h-100"
                    data-bg-src="{{$dashboardUrl}}/assets/images/uploads/angiraFrontSlider4.jpg">
                </div>
            </div>
        </div>
    </section>
    <section class="container container-xxl py-14 py-lg-17">
        <div class="mb-13">
            <div class="text-center" data-animate="fadeInUp">
                <h2 class="mb-6">Woodcraft Catalogs</h2>
                <p class="fs-18px mb-0">Our products are designed for everyone.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6" data-animate="fadeInUp">
                <div class="card border-0 rounded-0 hover-zoom-in hover-shine">
                    <img class="lazy-image card-img object-fit-cover img-fluid light-mode-img" src="#"
                        data-src="{{$dashboardUrl}}/assets/images/uploads/product2.png" width="690" height="690" alt>
                    <img class="lazy-image dark-mode-img card-img object-fit-cover img-fluid" src="#"
                        data-src="{{$dashboardUrl}}/assets/images/uploads/product2.png" width="690" height="690" alt>
                    <div class="card-img-overlay d-inline-flex flex-column p-8 justify-content-end text-center">
                        <div><a href="#" class="btn btn-white px-12">Desk Organizer</a></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mt-9 pt-2 mt-lg-0 pt-lg-0">
                <div class="row">
                    <div class="col-md-6" data-animate="fadeInUp">
                        <div class="card border-0 rounded-0 hover-zoom-in hover-shine">
                            <img class="lazy-image card-img object-fit-cover img-fluid light-mode-img" src="#"
                                data-src="{{$dashboardUrl}}/assets/images/uploads/product1.jpg" width="330" height="330" alt>
                            <img class="lazy-image dark-mode-img card-img object-fit-cover img-fluid" src="#"
                                data-src="{{$dashboardUrl}}/assets/images/uploads/product1.jpg" width="330" height="330" alt>
                            <div
                                class="card-img-overlay d-inline-flex flex-column p-8 justify-content-end text-center">
                                <div><a href="#" class="btn btn-white px-12">Tray</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mt-9 pt-2 mt-md-0 pt-md-0" data-animate="fadeInUp">
                        <div class="card border-0 rounded-0 hover-zoom-in hover-shine">
                            <img class="lazy-image card-img object-fit-cover img-fluid light-mode-img" src="#"
                                data-src="{{$dashboardUrl}}/assets/images/uploads/product3.jpg" width="330" height="330" alt>
                            <img class="lazy-image dark-mode-img card-img object-fit-cover img-fluid" src="#"
                                data-src="{{$dashboardUrl}}/assets/images/uploads/product3.jpg" width="330" height="330" alt>
                            <div
                                class="card-img-overlay d-inline-flex flex-column p-8 justify-content-end text-center">
                                <div><a href="#" class="btn btn-white px-12">Table Clock</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 mt-9 pt-2" data-animate="fadeInUp">
                        <div class="card border-0 rounded-0 hover-zoom-in hover-shine">
                            <img class="lazy-image card-img object-fit-cover img-fluid light-mode-img" src="#"
                                data-src="{{$dashboardUrl}}/assets/images/uploads/MasalaBox.jpg" width="690" height="330" alt>
                            <img class="lazy-image dark-mode-img card-img object-fit-cover img-fluid" src="#"
                                data-src="{{$dashboardUrl}}/assets/images/uploads/MasalaBox.jpg" width="690" height="330" alt>
                            <div
                                class="card-img-overlay d-inline-flex flex-column p-8 justify-content-end text-center">
                                <div><a href="#" class="btn btn-white px-12">Masala Box</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="our_best_seller_3">
        <div class="container container-xxl mb-20">
            <div class="mb-13 text-center" data-animate="fadeInUp">
                <h2 class="mb-5">Best Selling Products</h2>
                <p class="fs-18px mb-0 fs-18px mb-0 mw-xl-35 mw-lg-50 mw-md-75 ms-auto me-auto px-xl-5">“Rustic boxes, lake maps, and functional wooden decor top the charts.”</p>
            </div>
            <div class="slick-slider"
                data-slick-options="{&#34;arrows&#34;:true,&#34;dots&#34;:false,&#34;responsive&#34;:[{&#34;breakpoint&#34;:1560,&#34;settings&#34;:{&#34;arrows&#34;:false,&#34;dots&#34;:true}},{&#34;breakpoint&#34;:1200,&#34;settings&#34;:{&#34;arrows&#34;:false,&#34;dots&#34;:true,&#34;slidesToShow&#34;:3}},{&#34;breakpoint&#34;:992,&#34;settings&#34;:{&#34;arrows&#34;:false,&#34;dots&#34;:true,&#34;slidesToShow&#34;:2}},{&#34;breakpoint&#34;:576,&#34;settings&#34;:{&#34;arrows&#34;:false,&#34;dots&#34;:true,&#34;slidesToShow&#34;:1}}],&#34;slidesToShow&#34;:4}">
                <div>
                    <div class="card card-product grid-1 bg-transparent border-0" data-animate="fadeInUp">
                        <figure class="card-img-top position-relative mb-7 overflow-hidden ">
                            <a href="shop/product-details-v1.html" class="hover-zoom-in d-block"
                                title="Shield Conditioner">
                                <img src="#" data-src="./assets/images/products/product-15-330x440.jpg"
                                    class="img-fluid lazy-image w-100" alt="Shield Conditioner" width="330"
                                    height="440">
                            </a>
                            <div class="position-absolute product-flash z-index-2 "><span
                                    class="badge badge-product-flash on-sale bg-primary">-25%</span></div>
                            <div class="position-absolute d-flex z-index-2 product-actions  horizontal"><a
                                    class="text-body-emphasis bg-body bg-dark-hover text-light-hover rounded-circle square product-action shadow-sm add_to_cart"
                                    href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                    data-bs-title="Add To Cart">
                                    <svg class="icon icon-shopping-bag-open-light">
                                        <use xlink:href="#icon-shopping-bag-open-light"></use>
                                    </svg>
                                </a><a
                                    class="text-body-emphasis bg-body bg-dark-hover text-light-hover rounded-circle square product-action shadow-sm quick-view"
                                    href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                    data-bs-title="Quick View">
                                    <span data-bs-toggle="modal" data-bs-target="#quickViewModal"
                                        class="d-flex align-items-center justify-content-center">
                                        <svg class="icon icon-eye-light">
                                            <use xlink:href="#icon-eye-light"></use>
                                        </svg>
                                    </span>
                                </a>
                                <a class="text-body-emphasis bg-body bg-dark-hover text-light-hover rounded-circle square product-action shadow-sm wishlist"
                                    href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                    data-bs-title="Add To Wishlist">
                                    <svg class="icon icon-star-light">
                                        <use xlink:href="#icon-star-light"></use>
                                    </svg>
                                </a>
                                <a class="text-body-emphasis bg-body bg-dark-hover text-light-hover rounded-circle square product-action shadow-sm compare"
                                    href="shop/compare.html" data-bs-toggle="tooltip" data-bs-placement="top"
                                    data-bs-title="Compare">
                                    <svg class="icon icon-arrows-left-right-light">
                                        <use xlink:href="#icon-arrows-left-right-light"></use>
                                    </svg>
                                </a>
                            </div>
                        </figure>
                        <div class="card-body text-center p-0">
                            <span
                                class="d-flex align-items-center price text-body-emphasis fw-bold justify-content-center mb-3 fs-6">
                                <del class=" text-body fw-500 me-4 fs-13px">$40.00</del>
                                <ins class="text-decoration-none">$30.00</ins></span>
                            <h4
                                class="product-title card-title text-primary-hover text-body-emphasis fs-15px fw-500 mb-3">
                                <a class="text-decoration-none text-reset"
                                    href="shop/product-details-v1.html">Shield Conditioner</a></h4>
                            <div class="d-flex align-items-center fs-12px justify-content-center">
                                <div class="rating">
                                    <div class="empty-stars">
                                        <span class="star">
                                            <svg class="icon star-o">
                                                <use xlink:href="#star-o"></use>
                                            </svg>
                                        </span>
                                        <span class="star">
                                            <svg class="icon star-o">
                                                <use xlink:href="#star-o"></use>
                                            </svg>
                                        </span>
                                        <span class="star">
                                            <svg class="icon star-o">
                                                <use xlink:href="#star-o"></use>
                                            </svg>
                                        </span>
                                        <span class="star">
                                            <svg class="icon star-o">
                                                <use xlink:href="#star-o"></use>
                                            </svg>
                                        </span>
                                        <span class="star">
                                            <svg class="icon star-o">
                                                <use xlink:href="#star-o"></use>
                                            </svg>
                                        </span>
                                    </div>
                                    <div class="filled-stars" style="width: 80%">
                                        <span class="star">
                                            <svg class="icon star text-primary">
                                                <use xlink:href="#star"></use>
                                            </svg>
                                        </span>
                                        <span class="star">
                                            <svg class="icon star text-primary">
                                                <use xlink:href="#star"></use>
                                            </svg>
                                        </span>
                                        <span class="star">
                                            <svg class="icon star text-primary">
                                                <use xlink:href="#star"></use>
                                            </svg>
                                        </span>
                                        <span class="star">
                                            <svg class="icon star text-primary">
                                                <use xlink:href="#star"></use>
                                            </svg>
                                        </span>
                                        <span class="star">
                                            <svg class="icon star text-primary">
                                                <use xlink:href="#star"></use>
                                            </svg>
                                        </span>
                                    </div>
                                </div><span class="reviews ms-4 pt-3 fs-14px">2947 reviews</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="card card-product grid-1 bg-transparent border-0" data-animate="fadeInUp">
                        <figure class="card-img-top position-relative mb-7 overflow-hidden ">
                            <a href="shop/product-details-v1.html" class="hover-zoom-in d-block"
                                title="Perfecting Facial Oil">
                                <img src="#" data-src="./assets/images/products/product-02-330x440.jpg"
                                    class="img-fluid lazy-image w-100" alt="Perfecting Facial Oil" width="330"
                                    height="440">
                            </a>
                            <div class="position-absolute d-flex z-index-2 product-actions  horizontal"><a
                                    class="text-body-emphasis bg-body bg-dark-hover text-light-hover rounded-circle square product-action shadow-sm add_to_cart"
                                    href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                    data-bs-title="Add To Cart">
                                    <svg class="icon icon-shopping-bag-open-light">
                                        <use xlink:href="#icon-shopping-bag-open-light"></use>
                                    </svg>
                                </a><a
                                    class="text-body-emphasis bg-body bg-dark-hover text-light-hover rounded-circle square product-action shadow-sm quick-view"
                                    href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                    data-bs-title="Quick View">
                                    <span data-bs-toggle="modal" data-bs-target="#quickViewModal"
                                        class="d-flex align-items-center justify-content-center">
                                        <svg class="icon icon-eye-light">
                                            <use xlink:href="#icon-eye-light"></use>
                                        </svg>
                                    </span>
                                </a>
                                <a class="text-body-emphasis bg-body bg-dark-hover text-light-hover rounded-circle square product-action shadow-sm wishlist"
                                    href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                    data-bs-title="Add To Wishlist">
                                    <svg class="icon icon-star-light">
                                        <use xlink:href="#icon-star-light"></use>
                                    </svg>
                                </a>
                                <a class="text-body-emphasis bg-body bg-dark-hover text-light-hover rounded-circle square product-action shadow-sm compare"
                                    href="shop/compare.html" data-bs-toggle="tooltip" data-bs-placement="top"
                                    data-bs-title="Compare">
                                    <svg class="icon icon-arrows-left-right-light">
                                        <use xlink:href="#icon-arrows-left-right-light"></use>
                                    </svg>
                                </a>
                            </div>
                        </figure>
                        <div class="card-body text-center p-0">
                            <span
                                class="d-flex align-items-center price text-body-emphasis fw-bold justify-content-center mb-3 fs-6">$20.00</span>
                            <h4
                                class="product-title card-title text-primary-hover text-body-emphasis fs-15px fw-500 mb-3">
                                <a class="text-decoration-none text-reset"
                                    href="shop/product-details-v1.html">Perfecting Facial Oil</a></h4>
                            <div class="d-flex align-items-center fs-12px justify-content-center">
                                <div class="rating">
                                    <div class="empty-stars">
                                        <span class="star">
                                            <svg class="icon star-o">
                                                <use xlink:href="#star-o"></use>
                                            </svg>
                                        </span>
                                        <span class="star">
                                            <svg class="icon star-o">
                                                <use xlink:href="#star-o"></use>
                                            </svg>
                                        </span>
                                        <span class="star">
                                            <svg class="icon star-o">
                                                <use xlink:href="#star-o"></use>
                                            </svg>
                                        </span>
                                        <span class="star">
                                            <svg class="icon star-o">
                                                <use xlink:href="#star-o"></use>
                                            </svg>
                                        </span>
                                        <span class="star">
                                            <svg class="icon star-o">
                                                <use xlink:href="#star-o"></use>
                                            </svg>
                                        </span>
                                    </div>
                                    <div class="filled-stars" style="width: 100%">
                                        <span class="star">
                                            <svg class="icon star text-primary">
                                                <use xlink:href="#star"></use>
                                            </svg>
                                        </span>
                                        <span class="star">
                                            <svg class="icon star text-primary">
                                                <use xlink:href="#star"></use>
                                            </svg>
                                        </span>
                                        <span class="star">
                                            <svg class="icon star text-primary">
                                                <use xlink:href="#star"></use>
                                            </svg>
                                        </span>
                                        <span class="star">
                                            <svg class="icon star text-primary">
                                                <use xlink:href="#star"></use>
                                            </svg>
                                        </span>
                                        <span class="star">
                                            <svg class="icon star text-primary">
                                                <use xlink:href="#star"></use>
                                            </svg>
                                        </span>
                                    </div>
                                </div><span class="reviews ms-4 pt-3 fs-14px">2947 reviews</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="card card-product grid-1 bg-transparent border-0" data-animate="fadeInUp">
                        <figure class="card-img-top position-relative mb-7 overflow-hidden ">
                            <a href="shop/product-details-v1.html" class="hover-zoom-in d-block"
                                title="Enriched Hand &amp; Body Wash">
                                <img src="#" data-src="./assets/images/products/product-05-330x440.jpg"
                                    class="img-fluid lazy-image w-100" alt="Enriched Hand &amp; Body Wash"
                                    width="330" height="440">
                            </a>
                            <div class="position-absolute product-flash z-index-2 "><span
                                    class="badge badge-product-flash on-new">New</span></div>
                            <div class="position-absolute d-flex z-index-2 product-actions  horizontal"><a
                                    class="text-body-emphasis bg-body bg-dark-hover text-light-hover rounded-circle square product-action shadow-sm add_to_cart"
                                    href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                    data-bs-title="Add To Cart">
                                    <svg class="icon icon-shopping-bag-open-light">
                                        <use xlink:href="#icon-shopping-bag-open-light"></use>
                                    </svg>
                                </a><a
                                    class="text-body-emphasis bg-body bg-dark-hover text-light-hover rounded-circle square product-action shadow-sm quick-view"
                                    href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                    data-bs-title="Quick View">
                                    <span data-bs-toggle="modal" data-bs-target="#quickViewModal"
                                        class="d-flex align-items-center justify-content-center">
                                        <svg class="icon icon-eye-light">
                                            <use xlink:href="#icon-eye-light"></use>
                                        </svg>
                                    </span>
                                </a>
                                <a class="text-body-emphasis bg-body bg-dark-hover text-light-hover rounded-circle square product-action shadow-sm wishlist"
                                    href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                    data-bs-title="Add To Wishlist">
                                    <svg class="icon icon-star-light">
                                        <use xlink:href="#icon-star-light"></use>
                                    </svg>
                                </a>
                                <a class="text-body-emphasis bg-body bg-dark-hover text-light-hover rounded-circle square product-action shadow-sm compare"
                                    href="shop/compare.html" data-bs-toggle="tooltip" data-bs-placement="top"
                                    data-bs-title="Compare">
                                    <svg class="icon icon-arrows-left-right-light">
                                        <use xlink:href="#icon-arrows-left-right-light"></use>
                                    </svg>
                                </a>
                            </div>
                        </figure>
                        <div class="card-body text-center p-0">
                            <span
                                class="d-flex align-items-center price text-body-emphasis fw-bold justify-content-center mb-3 fs-6">$29.00</span>
                            <h4
                                class="product-title card-title text-primary-hover text-body-emphasis fs-15px fw-500 mb-3">
                                <a class="text-decoration-none text-reset"
                                    href="shop/product-details-v1.html">Enriched Hand &amp; Body Wash</a></h4>
                            <div class="d-flex align-items-center fs-12px justify-content-center">
                                <div class="rating">
                                    <div class="empty-stars">
                                        <span class="star">
                                            <svg class="icon star-o">
                                                <use xlink:href="#star-o"></use>
                                            </svg>
                                        </span>
                                        <span class="star">
                                            <svg class="icon star-o">
                                                <use xlink:href="#star-o"></use>
                                            </svg>
                                        </span>
                                        <span class="star">
                                            <svg class="icon star-o">
                                                <use xlink:href="#star-o"></use>
                                            </svg>
                                        </span>
                                        <span class="star">
                                            <svg class="icon star-o">
                                                <use xlink:href="#star-o"></use>
                                            </svg>
                                        </span>
                                        <span class="star">
                                            <svg class="icon star-o">
                                                <use xlink:href="#star-o"></use>
                                            </svg>
                                        </span>
                                    </div>
                                    <div class="filled-stars" style="width: 100%">
                                        <span class="star">
                                            <svg class="icon star text-primary">
                                                <use xlink:href="#star"></use>
                                            </svg>
                                        </span>
                                        <span class="star">
                                            <svg class="icon star text-primary">
                                                <use xlink:href="#star"></use>
                                            </svg>
                                        </span>
                                        <span class="star">
                                            <svg class="icon star text-primary">
                                                <use xlink:href="#star"></use>
                                            </svg>
                                        </span>
                                        <span class="star">
                                            <svg class="icon star text-primary">
                                                <use xlink:href="#star"></use>
                                            </svg>
                                        </span>
                                        <span class="star">
                                            <svg class="icon star text-primary">
                                                <use xlink:href="#star"></use>
                                            </svg>
                                        </span>
                                    </div>
                                </div><span class="reviews ms-4 pt-3 fs-14px">2947 reviews</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="card card-product grid-1 bg-transparent border-0" data-animate="fadeInUp">
                        <figure class="card-img-top position-relative mb-7 overflow-hidden ">
                            <a href="shop/product-details-v1.html" class="hover-zoom-in d-block"
                                title="Shield Shampoo">
                                <img src="#" data-src="./assets/images/products/product-11-330x440.jpg"
                                    class="img-fluid lazy-image w-100" alt="Shield Shampoo" width="330"
                                    height="440">
                            </a>
                            <div class="position-absolute product-flash z-index-2 "><span
                                    class="badge badge-product-flash on-sale bg-primary">-24%</span></div>
                            <div class="position-absolute d-flex z-index-2 product-actions  horizontal"><a
                                    class="text-body-emphasis bg-body bg-dark-hover text-light-hover rounded-circle square product-action shadow-sm add_to_cart"
                                    href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                    data-bs-title="Add To Cart">
                                    <svg class="icon icon-shopping-bag-open-light">
                                        <use xlink:href="#icon-shopping-bag-open-light"></use>
                                    </svg>
                                </a><a
                                    class="text-body-emphasis bg-body bg-dark-hover text-light-hover rounded-circle square product-action shadow-sm quick-view"
                                    href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                    data-bs-title="Quick View">
                                    <span data-bs-toggle="modal" data-bs-target="#quickViewModal"
                                        class="d-flex align-items-center justify-content-center">
                                        <svg class="icon icon-eye-light">
                                            <use xlink:href="#icon-eye-light"></use>
                                        </svg>
                                    </span>
                                </a>
                                <a class="text-body-emphasis bg-body bg-dark-hover text-light-hover rounded-circle square product-action shadow-sm wishlist"
                                    href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                    data-bs-title="Add To Wishlist">
                                    <svg class="icon icon-star-light">
                                        <use xlink:href="#icon-star-light"></use>
                                    </svg>
                                </a>
                                <a class="text-body-emphasis bg-body bg-dark-hover text-light-hover rounded-circle square product-action shadow-sm compare"
                                    href="shop/compare.html" data-bs-toggle="tooltip" data-bs-placement="top"
                                    data-bs-title="Compare">
                                    <svg class="icon icon-arrows-left-right-light">
                                        <use xlink:href="#icon-arrows-left-right-light"></use>
                                    </svg>
                                </a>
                            </div>
                        </figure>
                        <div class="card-body text-center p-0">
                            <span
                                class="d-flex align-items-center price text-body-emphasis fw-bold justify-content-center mb-3 fs-6">
                                <del class=" text-body fw-500 me-4 fs-13px">$25.00</del>
                                <ins class="text-decoration-none">$19.00</ins></span>
                            <h4
                                class="product-title card-title text-primary-hover text-body-emphasis fs-15px fw-500 mb-3">
                                <a class="text-decoration-none text-reset"
                                    href="shop/product-details-v1.html">Shield Shampoo</a></h4>
                            <div class="d-flex align-items-center fs-12px justify-content-center">
                                <div class="rating">
                                    <div class="empty-stars">
                                        <span class="star">
                                            <svg class="icon star-o">
                                                <use xlink:href="#star-o"></use>
                                            </svg>
                                        </span>
                                        <span class="star">
                                            <svg class="icon star-o">
                                                <use xlink:href="#star-o"></use>
                                            </svg>
                                        </span>
                                        <span class="star">
                                            <svg class="icon star-o">
                                                <use xlink:href="#star-o"></use>
                                            </svg>
                                        </span>
                                        <span class="star">
                                            <svg class="icon star-o">
                                                <use xlink:href="#star-o"></use>
                                            </svg>
                                        </span>
                                        <span class="star">
                                            <svg class="icon star-o">
                                                <use xlink:href="#star-o"></use>
                                            </svg>
                                        </span>
                                    </div>
                                    <div class="filled-stars" style="width: 80%">
                                        <span class="star">
                                            <svg class="icon star text-primary">
                                                <use xlink:href="#star"></use>
                                            </svg>
                                        </span>
                                        <span class="star">
                                            <svg class="icon star text-primary">
                                                <use xlink:href="#star"></use>
                                            </svg>
                                        </span>
                                        <span class="star">
                                            <svg class="icon star text-primary">
                                                <use xlink:href="#star"></use>
                                            </svg>
                                        </span>
                                        <span class="star">
                                            <svg class="icon star text-primary">
                                                <use xlink:href="#star"></use>
                                            </svg>
                                        </span>
                                        <span class="star">
                                            <svg class="icon star text-primary">
                                                <use xlink:href="#star"></use>
                                            </svg>
                                        </span>
                                    </div>
                                </div><span class="reviews ms-4 pt-3 fs-14px">2947 reviews</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="card card-product grid-1 bg-transparent border-0" data-animate="fadeInUp">
                        <figure class="card-img-top position-relative mb-7 overflow-hidden ">
                            <a href="shop/product-details-v1.html" class="hover-zoom-in d-block"
                                title="Enriched Hand Wash">
                                <img src="#" data-src="./assets/images/products/product-16-330x440.jpg"
                                    class="img-fluid lazy-image w-100" alt="Enriched Hand Wash" width="330"
                                    height="440">
                            </a>
                            <div class="position-absolute product-flash z-index-2 "><span
                                    class="badge badge-product-flash on-sale bg-primary">-26%</span></div>
                            <div class="position-absolute d-flex z-index-2 product-actions  horizontal"><a
                                    class="text-body-emphasis bg-body bg-dark-hover text-light-hover rounded-circle square product-action shadow-sm add_to_cart"
                                    href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                    data-bs-title="Add To Cart">
                                    <svg class="icon icon-shopping-bag-open-light">
                                        <use xlink:href="#icon-shopping-bag-open-light"></use>
                                    </svg>
                                </a><a
                                    class="text-body-emphasis bg-body bg-dark-hover text-light-hover rounded-circle square product-action shadow-sm quick-view"
                                    href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                    data-bs-title="Quick View">
                                    <span data-bs-toggle="modal" data-bs-target="#quickViewModal"
                                        class="d-flex align-items-center justify-content-center">
                                        <svg class="icon icon-eye-light">
                                            <use xlink:href="#icon-eye-light"></use>
                                        </svg>
                                    </span>
                                </a>
                                <a class="text-body-emphasis bg-body bg-dark-hover text-light-hover rounded-circle square product-action shadow-sm wishlist"
                                    href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                    data-bs-title="Add To Wishlist">
                                    <svg class="icon icon-star-light">
                                        <use xlink:href="#icon-star-light"></use>
                                    </svg>
                                </a>
                                <a class="text-body-emphasis bg-body bg-dark-hover text-light-hover rounded-circle square product-action shadow-sm compare"
                                    href="shop/compare.html" data-bs-toggle="tooltip" data-bs-placement="top"
                                    data-bs-title="Compare">
                                    <svg class="icon icon-arrows-left-right-light">
                                        <use xlink:href="#icon-arrows-left-right-light"></use>
                                    </svg>
                                </a>
                            </div>
                        </figure>
                        <div class="card-body text-center p-0">
                            <span
                                class="d-flex align-items-center price text-body-emphasis fw-bold justify-content-center mb-3 fs-6">
                                <del class=" text-body fw-500 me-4 fs-13px">$39.00</del>
                                <ins class="text-decoration-none">$29.00</ins></span>
                            <h4
                                class="product-title card-title text-primary-hover text-body-emphasis fs-15px fw-500 mb-3">
                                <a class="text-decoration-none text-reset"
                                    href="shop/product-details-v1.html">Enriched Hand Wash</a></h4>
                            <div class="d-flex align-items-center fs-12px justify-content-center">
                                <div class="rating">
                                    <div class="empty-stars">
                                        <span class="star">
                                            <svg class="icon star-o">
                                                <use xlink:href="#star-o"></use>
                                            </svg>
                                        </span>
                                        <span class="star">
                                            <svg class="icon star-o">
                                                <use xlink:href="#star-o"></use>
                                            </svg>
                                        </span>
                                        <span class="star">
                                            <svg class="icon star-o">
                                                <use xlink:href="#star-o"></use>
                                            </svg>
                                        </span>
                                        <span class="star">
                                            <svg class="icon star-o">
                                                <use xlink:href="#star-o"></use>
                                            </svg>
                                        </span>
                                        <span class="star">
                                            <svg class="icon star-o">
                                                <use xlink:href="#star-o"></use>
                                            </svg>
                                        </span>
                                    </div>
                                    <div class="filled-stars" style="width: 80%">
                                        <span class="star">
                                            <svg class="icon star text-primary">
                                                <use xlink:href="#star"></use>
                                            </svg>
                                        </span>
                                        <span class="star">
                                            <svg class="icon star text-primary">
                                                <use xlink:href="#star"></use>
                                            </svg>
                                        </span>
                                        <span class="star">
                                            <svg class="icon star text-primary">
                                                <use xlink:href="#star"></use>
                                            </svg>
                                        </span>
                                        <span class="star">
                                            <svg class="icon star text-primary">
                                                <use xlink:href="#star"></use>
                                            </svg>
                                        </span>
                                        <span class="star">
                                            <svg class="icon star text-primary">
                                                <use xlink:href="#star"></use>
                                            </svg>
                                        </span>
                                    </div>
                                </div><span class="reviews ms-4 pt-3 fs-14px">2947 reviews</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-body-tertiary pt-12 pb-lg-13 pb-13">
        <div class="container container-xxl">
            <div class="row gx-30px gy-30px">
                <div class="col-xl-3 col-md-6" data-animate="fadeInUp">
                    <div class="icon-box icon-box-style-1 card border-0 text-center bg-transparent">
                        <div class="icon-box-icon card-img fs-70px text-primary">
                            <svg class="icon">
                                <use xlink:href="#icon-box-01"></use>
                            </svg>
                        </div>
                        <div class="icon-box-content card-body pt-4">
                            <h3 class="icon-box-title card-title fs-5 mb-4 pb-2">Free Shipping</h3>
                            <p class="icon-box-desc card-text fs-18px mb-0">Free Shipping for orders over $130</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6" data-animate="fadeInUp">
                    <div class="icon-box icon-box-style-1 card border-0 text-center bg-transparent">
                        <div class="icon-box-icon card-img fs-70px text-primary">
                            <svg class="icon">
                                <use xlink:href="#icon-box-02"></use>
                            </svg>
                        </div>
                        <div class="icon-box-content card-body pt-4">
                            <h3 class="icon-box-title card-title fs-5 mb-4 pb-2">Returns</h3>
                            <p class="icon-box-desc card-text fs-18px mb-0">Within 30 days for an exchange.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6" data-animate="fadeInUp">
                    <div class="icon-box icon-box-style-1 card border-0 text-center bg-transparent">
                        <div class="icon-box-icon card-img fs-70px text-primary">
                            <svg class="icon">
                                <use xlink:href="#icon-box-03"></use>
                            </svg>
                        </div>
                        <div class="icon-box-content card-body pt-4">
                            <h3 class="icon-box-title card-title fs-5 mb-4 pb-2">Online Support</h3>
                            <p class="icon-box-desc card-text fs-18px mb-0">24 hours a day, 7 days a week</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6" data-animate="fadeInUp">
                    <div class="icon-box icon-box-style-1 card border-0 text-center bg-transparent">
                        <div class="icon-box-icon card-img fs-70px text-primary">
                            <svg class="icon">
                                <use xlink:href="#icon-box-04"></use>
                            </svg>
                        </div>
                        <div class="icon-box-content card-body pt-4">
                            <h3 class="icon-box-title card-title fs-5 mb-4 pb-2">Flexible Payment</h3>
                            <p class="icon-box-desc card-text fs-18px mb-0">Pay with Multiple Credit Cards</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="container container-xxl pt-14 pt-lg-17 pb-15">
        <div class="mb-13 text-center" data-animate="fadeInUp">
            <h2 class="mb-5">New Arrivals</h2>
            <p class="fs-18px mb-0 fs-18px mb-0 mw-xl-35 mw-lg-50 mw-md-75 ms-auto me-auto px-xl-5">“Crafted elegance: our latest wooden wonders for your home.”</p>
        </div>
        <div class="slick-slider"
            data-slick-options="{&#34;arrows&#34;:true,&#34;dots&#34;:false,&#34;responsive&#34;:[{&#34;breakpoint&#34;:1560,&#34;settings&#34;:{&#34;arrows&#34;:false,&#34;dots&#34;:true,&#34;slidesToShow&#34;:5}},{&#34;breakpoint&#34;:1200,&#34;settings&#34;:{&#34;arrows&#34;:false,&#34;dots&#34;:true,&#34;slidesToShow&#34;:3}},{&#34;breakpoint&#34;:992,&#34;settings&#34;:{&#34;arrows&#34;:false,&#34;dots&#34;:true,&#34;slidesToShow&#34;:2}},{&#34;breakpoint&#34;:576,&#34;settings&#34;:{&#34;arrows&#34;:false,&#34;dots&#34;:true,&#34;slidesToShow&#34;:1}}],&#34;slidesToShow&#34;:5}">
            <div>
                <div class="card card-product grid-1 bg-transparent border-0" data-animate="fadeInUp">
                    <figure class="card-img-top position-relative mb-7 overflow-hidden ">
                        <a href="shop/product-details-v1.html" class="hover-zoom-in d-block" title="Shield Spray">
                            <img src="#" data-src="./assets/images/products/product-07-330x440.jpg"
                                class="img-fluid lazy-image w-100" alt="Shield Spray" width="330" height="440">
                        </a>
                        <div class="position-absolute d-flex z-index-2 product-actions  horizontal"><a
                                class="text-body-emphasis bg-body bg-dark-hover text-light-hover rounded-circle square product-action shadow-sm add_to_cart"
                                href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                data-bs-title="Add To Cart">
                                <svg class="icon icon-shopping-bag-open-light">
                                    <use xlink:href="#icon-shopping-bag-open-light"></use>
                                </svg>
                            </a><a
                                class="text-body-emphasis bg-body bg-dark-hover text-light-hover rounded-circle square product-action shadow-sm quick-view"
                                href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                data-bs-title="Quick View">
                                <span data-bs-toggle="modal" data-bs-target="#quickViewModal"
                                    class="d-flex align-items-center justify-content-center">
                                    <svg class="icon icon-eye-light">
                                        <use xlink:href="#icon-eye-light"></use>
                                    </svg>
                                </span>
                            </a>
                            <a class="text-body-emphasis bg-body bg-dark-hover text-light-hover rounded-circle square product-action shadow-sm wishlist"
                                href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                data-bs-title="Add To Wishlist">
                                <svg class="icon icon-star-light">
                                    <use xlink:href="#icon-star-light"></use>
                                </svg>
                            </a>
                            <a class="text-body-emphasis bg-body bg-dark-hover text-light-hover rounded-circle square product-action shadow-sm compare"
                                href="shop/compare.html" data-bs-toggle="tooltip" data-bs-placement="top"
                                data-bs-title="Compare">
                                <svg class="icon icon-arrows-left-right-light">
                                    <use xlink:href="#icon-arrows-left-right-light"></use>
                                </svg>
                            </a>
                        </div>
                    </figure>
                    <div class="card-body text-center p-0">
                        <span
                            class="d-flex align-items-center price text-body-emphasis fw-bold justify-content-center mb-3 fs-6">$29.00</span>
                        <h4
                            class="product-title card-title text-primary-hover text-body-emphasis fs-15px fw-500 mb-3">
                            <a class="text-decoration-none text-reset" href="shop/product-details-v1.html">Shield
                                Spray</a></h4>
                        <div class="d-flex align-items-center fs-12px justify-content-center">
                            <div class="rating">
                                <div class="empty-stars">
                                    <span class="star">
                                        <svg class="icon star-o">
                                            <use xlink:href="#star-o"></use>
                                        </svg>
                                    </span>
                                    <span class="star">
                                        <svg class="icon star-o">
                                            <use xlink:href="#star-o"></use>
                                        </svg>
                                    </span>
                                    <span class="star">
                                        <svg class="icon star-o">
                                            <use xlink:href="#star-o"></use>
                                        </svg>
                                    </span>
                                    <span class="star">
                                        <svg class="icon star-o">
                                            <use xlink:href="#star-o"></use>
                                        </svg>
                                    </span>
                                    <span class="star">
                                        <svg class="icon star-o">
                                            <use xlink:href="#star-o"></use>
                                        </svg>
                                    </span>
                                </div>
                                <div class="filled-stars" style="width: 100%">
                                    <span class="star">
                                        <svg class="icon star text-primary">
                                            <use xlink:href="#star"></use>
                                        </svg>
                                    </span>
                                    <span class="star">
                                        <svg class="icon star text-primary">
                                            <use xlink:href="#star"></use>
                                        </svg>
                                    </span>
                                    <span class="star">
                                        <svg class="icon star text-primary">
                                            <use xlink:href="#star"></use>
                                        </svg>
                                    </span>
                                    <span class="star">
                                        <svg class="icon star text-primary">
                                            <use xlink:href="#star"></use>
                                        </svg>
                                    </span>
                                    <span class="star">
                                        <svg class="icon star text-primary">
                                            <use xlink:href="#star"></use>
                                        </svg>
                                    </span>
                                </div>
                            </div><span class="reviews ms-4 pt-3 fs-14px">2947 reviews</span>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="card card-product grid-1 bg-transparent border-0" data-animate="fadeInUp">
                    <figure class="card-img-top position-relative mb-7 overflow-hidden ">
                        <a href="shop/product-details-v1.html" class="hover-zoom-in d-block"
                            title="Vital Eye Cream">
                            <img src="#" data-src="./assets/images/products/product-08-330x440.jpg"
                                class="img-fluid lazy-image w-100" alt="Vital Eye Cream" width="330" height="440">
                        </a>
                        <div class="position-absolute product-flash z-index-2 "><span
                                class="badge badge-product-flash on-sale bg-primary">-26%</span></div>
                        <div class="position-absolute d-flex z-index-2 product-actions  horizontal"><a
                                class="text-body-emphasis bg-body bg-dark-hover text-light-hover rounded-circle square product-action shadow-sm add_to_cart"
                                href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                data-bs-title="Add To Cart">
                                <svg class="icon icon-shopping-bag-open-light">
                                    <use xlink:href="#icon-shopping-bag-open-light"></use>
                                </svg>
                            </a><a
                                class="text-body-emphasis bg-body bg-dark-hover text-light-hover rounded-circle square product-action shadow-sm quick-view"
                                href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                data-bs-title="Quick View">
                                <span data-bs-toggle="modal" data-bs-target="#quickViewModal"
                                    class="d-flex align-items-center justify-content-center">
                                    <svg class="icon icon-eye-light">
                                        <use xlink:href="#icon-eye-light"></use>
                                    </svg>
                                </span>
                            </a>
                            <a class="text-body-emphasis bg-body bg-dark-hover text-light-hover rounded-circle square product-action shadow-sm wishlist"
                                href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                data-bs-title="Add To Wishlist">
                                <svg class="icon icon-star-light">
                                    <use xlink:href="#icon-star-light"></use>
                                </svg>
                            </a>
                            <a class="text-body-emphasis bg-body bg-dark-hover text-light-hover rounded-circle square product-action shadow-sm compare"
                                href="shop/compare.html" data-bs-toggle="tooltip" data-bs-placement="top"
                                data-bs-title="Compare">
                                <svg class="icon icon-arrows-left-right-light">
                                    <use xlink:href="#icon-arrows-left-right-light"></use>
                                </svg>
                            </a>
                        </div>
                    </figure>
                    <div class="card-body text-center p-0">
                        <span
                            class="d-flex align-items-center price text-body-emphasis fw-bold justify-content-center mb-3 fs-6">
                            <del class=" text-body fw-500 me-4 fs-13px">$39.00</del>
                            <ins class="text-decoration-none">$29.00</ins></span>
                        <h4
                            class="product-title card-title text-primary-hover text-body-emphasis fs-15px fw-500 mb-3">
                            <a class="text-decoration-none text-reset" href="shop/product-details-v1.html">Vital Eye
                                Cream</a></h4>
                        <div class="d-flex align-items-center fs-12px justify-content-center">
                            <div class="rating">
                                <div class="empty-stars">
                                    <span class="star">
                                        <svg class="icon star-o">
                                            <use xlink:href="#star-o"></use>
                                        </svg>
                                    </span>
                                    <span class="star">
                                        <svg class="icon star-o">
                                            <use xlink:href="#star-o"></use>
                                        </svg>
                                    </span>
                                    <span class="star">
                                        <svg class="icon star-o">
                                            <use xlink:href="#star-o"></use>
                                        </svg>
                                    </span>
                                    <span class="star">
                                        <svg class="icon star-o">
                                            <use xlink:href="#star-o"></use>
                                        </svg>
                                    </span>
                                    <span class="star">
                                        <svg class="icon star-o">
                                            <use xlink:href="#star-o"></use>
                                        </svg>
                                    </span>
                                </div>
                                <div class="filled-stars" style="width: 80%">
                                    <span class="star">
                                        <svg class="icon star text-primary">
                                            <use xlink:href="#star"></use>
                                        </svg>
                                    </span>
                                    <span class="star">
                                        <svg class="icon star text-primary">
                                            <use xlink:href="#star"></use>
                                        </svg>
                                    </span>
                                    <span class="star">
                                        <svg class="icon star text-primary">
                                            <use xlink:href="#star"></use>
                                        </svg>
                                    </span>
                                    <span class="star">
                                        <svg class="icon star text-primary">
                                            <use xlink:href="#star"></use>
                                        </svg>
                                    </span>
                                    <span class="star">
                                        <svg class="icon star text-primary">
                                            <use xlink:href="#star"></use>
                                        </svg>
                                    </span>
                                </div>
                            </div><span class="reviews ms-4 pt-3 fs-14px">2947 reviews</span>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="card card-product grid-1 bg-transparent border-0" data-animate="fadeInUp">
                    <figure class="card-img-top position-relative mb-7 overflow-hidden ">
                        <a href="shop/product-details-v1.html" class="hover-zoom-in d-block"
                            title="Supreme Moisture Mask">
                            <img src="#" data-src="./assets/images/products/product-09-330x440.jpg"
                                class="img-fluid lazy-image w-100" alt="Supreme Moisture Mask" width="330"
                                height="440">
                        </a>
                        <div class="position-absolute product-flash z-index-2 "><span
                                class="badge badge-product-flash on-sale bg-primary">-26%</span></div>
                        <div class="position-absolute d-flex z-index-2 product-actions  horizontal"><a
                                class="text-body-emphasis bg-body bg-dark-hover text-light-hover rounded-circle square product-action shadow-sm add_to_cart"
                                href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                data-bs-title="Add To Cart">
                                <svg class="icon icon-shopping-bag-open-light">
                                    <use xlink:href="#icon-shopping-bag-open-light"></use>
                                </svg>
                            </a><a
                                class="text-body-emphasis bg-body bg-dark-hover text-light-hover rounded-circle square product-action shadow-sm quick-view"
                                href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                data-bs-title="Quick View">
                                <span data-bs-toggle="modal" data-bs-target="#quickViewModal"
                                    class="d-flex align-items-center justify-content-center">
                                    <svg class="icon icon-eye-light">
                                        <use xlink:href="#icon-eye-light"></use>
                                    </svg>
                                </span>
                            </a>
                            <a class="text-body-emphasis bg-body bg-dark-hover text-light-hover rounded-circle square product-action shadow-sm wishlist"
                                href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                data-bs-title="Add To Wishlist">
                                <svg class="icon icon-star-light">
                                    <use xlink:href="#icon-star-light"></use>
                                </svg>
                            </a>
                            <a class="text-body-emphasis bg-body bg-dark-hover text-light-hover rounded-circle square product-action shadow-sm compare"
                                href="shop/compare.html" data-bs-toggle="tooltip" data-bs-placement="top"
                                data-bs-title="Compare">
                                <svg class="icon icon-arrows-left-right-light">
                                    <use xlink:href="#icon-arrows-left-right-light"></use>
                                </svg>
                            </a>
                        </div>
                    </figure>
                    <div class="card-body text-center p-0">
                        <span
                            class="d-flex align-items-center price text-body-emphasis fw-bold justify-content-center mb-3 fs-6">
                            <del class=" text-body fw-500 me-4 fs-13px">$39.00</del>
                            <ins class="text-decoration-none">$29.00</ins></span>
                        <h4
                            class="product-title card-title text-primary-hover text-body-emphasis fs-15px fw-500 mb-3">
                            <a class="text-decoration-none text-reset" href="shop/product-details-v1.html">Supreme
                                Moisture Mask</a></h4>
                        <div class="d-flex align-items-center fs-12px justify-content-center">
                            <div class="rating">
                                <div class="empty-stars">
                                    <span class="star">
                                        <svg class="icon star-o">
                                            <use xlink:href="#star-o"></use>
                                        </svg>
                                    </span>
                                    <span class="star">
                                        <svg class="icon star-o">
                                            <use xlink:href="#star-o"></use>
                                        </svg>
                                    </span>
                                    <span class="star">
                                        <svg class="icon star-o">
                                            <use xlink:href="#star-o"></use>
                                        </svg>
                                    </span>
                                    <span class="star">
                                        <svg class="icon star-o">
                                            <use xlink:href="#star-o"></use>
                                        </svg>
                                    </span>
                                    <span class="star">
                                        <svg class="icon star-o">
                                            <use xlink:href="#star-o"></use>
                                        </svg>
                                    </span>
                                </div>
                                <div class="filled-stars" style="width: 80%">
                                    <span class="star">
                                        <svg class="icon star text-primary">
                                            <use xlink:href="#star"></use>
                                        </svg>
                                    </span>
                                    <span class="star">
                                        <svg class="icon star text-primary">
                                            <use xlink:href="#star"></use>
                                        </svg>
                                    </span>
                                    <span class="star">
                                        <svg class="icon star text-primary">
                                            <use xlink:href="#star"></use>
                                        </svg>
                                    </span>
                                    <span class="star">
                                        <svg class="icon star text-primary">
                                            <use xlink:href="#star"></use>
                                        </svg>
                                    </span>
                                    <span class="star">
                                        <svg class="icon star text-primary">
                                            <use xlink:href="#star"></use>
                                        </svg>
                                    </span>
                                </div>
                            </div><span class="reviews ms-4 pt-3 fs-14px">2947 reviews</span>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="card card-product grid-1 bg-transparent border-0" data-animate="fadeInUp">
                    <figure class="card-img-top position-relative mb-7 overflow-hidden ">
                        <a href="shop/product-details-v1.html" class="hover-zoom-in d-block"
                            title="Supreme Polishing Treatment">
                            <img src="#" data-src="./assets/images/products/product-10-330x440.jpg"
                                class="img-fluid lazy-image w-100" alt="Supreme Polishing Treatment" width="330"
                                height="440">
                        </a>
                        <div class="position-absolute d-flex z-index-2 product-actions  horizontal"><a
                                class="text-body-emphasis bg-body bg-dark-hover text-light-hover rounded-circle square product-action shadow-sm add_to_cart"
                                href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                data-bs-title="Add To Cart">
                                <svg class="icon icon-shopping-bag-open-light">
                                    <use xlink:href="#icon-shopping-bag-open-light"></use>
                                </svg>
                            </a><a
                                class="text-body-emphasis bg-body bg-dark-hover text-light-hover rounded-circle square product-action shadow-sm quick-view"
                                href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                data-bs-title="Quick View">
                                <span data-bs-toggle="modal" data-bs-target="#quickViewModal"
                                    class="d-flex align-items-center justify-content-center">
                                    <svg class="icon icon-eye-light">
                                        <use xlink:href="#icon-eye-light"></use>
                                    </svg>
                                </span>
                            </a>
                            <a class="text-body-emphasis bg-body bg-dark-hover text-light-hover rounded-circle square product-action shadow-sm wishlist"
                                href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                data-bs-title="Add To Wishlist">
                                <svg class="icon icon-star-light">
                                    <use xlink:href="#icon-star-light"></use>
                                </svg>
                            </a>
                            <a class="text-body-emphasis bg-body bg-dark-hover text-light-hover rounded-circle square product-action shadow-sm compare"
                                href="shop/compare.html" data-bs-toggle="tooltip" data-bs-placement="top"
                                data-bs-title="Compare">
                                <svg class="icon icon-arrows-left-right-light">
                                    <use xlink:href="#icon-arrows-left-right-light"></use>
                                </svg>
                            </a>
                        </div>
                    </figure>
                    <div class="card-body text-center p-0">
                        <span
                            class="d-flex align-items-center price text-body-emphasis fw-bold justify-content-center mb-3 fs-6">$29.00</span>
                        <h4
                            class="product-title card-title text-primary-hover text-body-emphasis fs-15px fw-500 mb-3">
                            <a class="text-decoration-none text-reset" href="shop/product-details-v1.html">Supreme
                                Polishing Treatment</a></h4>
                        <div class="d-flex align-items-center fs-12px justify-content-center">
                            <div class="rating">
                                <div class="empty-stars">
                                    <span class="star">
                                        <svg class="icon star-o">
                                            <use xlink:href="#star-o"></use>
                                        </svg>
                                    </span>
                                    <span class="star">
                                        <svg class="icon star-o">
                                            <use xlink:href="#star-o"></use>
                                        </svg>
                                    </span>
                                    <span class="star">
                                        <svg class="icon star-o">
                                            <use xlink:href="#star-o"></use>
                                        </svg>
                                    </span>
                                    <span class="star">
                                        <svg class="icon star-o">
                                            <use xlink:href="#star-o"></use>
                                        </svg>
                                    </span>
                                    <span class="star">
                                        <svg class="icon star-o">
                                            <use xlink:href="#star-o"></use>
                                        </svg>
                                    </span>
                                </div>
                                <div class="filled-stars" style="width: 100%">
                                    <span class="star">
                                        <svg class="icon star text-primary">
                                            <use xlink:href="#star"></use>
                                        </svg>
                                    </span>
                                    <span class="star">
                                        <svg class="icon star text-primary">
                                            <use xlink:href="#star"></use>
                                        </svg>
                                    </span>
                                    <span class="star">
                                        <svg class="icon star text-primary">
                                            <use xlink:href="#star"></use>
                                        </svg>
                                    </span>
                                    <span class="star">
                                        <svg class="icon star text-primary">
                                            <use xlink:href="#star"></use>
                                        </svg>
                                    </span>
                                    <span class="star">
                                        <svg class="icon star text-primary">
                                            <use xlink:href="#star"></use>
                                        </svg>
                                    </span>
                                </div>
                            </div><span class="reviews ms-4 pt-3 fs-14px">2947 reviews</span>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="card card-product grid-1 bg-transparent border-0" data-animate="fadeInUp">
                    <figure class="card-img-top position-relative mb-7 overflow-hidden ">
                        <a href="shop/product-details-v1.html" class="hover-zoom-in d-block"
                            title="Scalp Moisturizing Cream">
                            <img src="#" data-src="./assets/images/products/product-11-330x440.jpg"
                                class="img-fluid lazy-image w-100" alt="Scalp Moisturizing Cream" width="330"
                                height="440">
                        </a>
                        <div class="position-absolute d-flex z-index-2 product-actions  horizontal"><a
                                class="text-body-emphasis bg-body bg-dark-hover text-light-hover rounded-circle square product-action shadow-sm add_to_cart"
                                href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                data-bs-title="Add To Cart">
                                <svg class="icon icon-shopping-bag-open-light">
                                    <use xlink:href="#icon-shopping-bag-open-light"></use>
                                </svg>
                            </a><a
                                class="text-body-emphasis bg-body bg-dark-hover text-light-hover rounded-circle square product-action shadow-sm quick-view"
                                href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                data-bs-title="Quick View">
                                <span data-bs-toggle="modal" data-bs-target="#quickViewModal"
                                    class="d-flex align-items-center justify-content-center">
                                    <svg class="icon icon-eye-light">
                                        <use xlink:href="#icon-eye-light"></use>
                                    </svg>
                                </span>
                            </a>
                            <a class="text-body-emphasis bg-body bg-dark-hover text-light-hover rounded-circle square product-action shadow-sm wishlist"
                                href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                data-bs-title="Add To Wishlist">
                                <svg class="icon icon-star-light">
                                    <use xlink:href="#icon-star-light"></use>
                                </svg>
                            </a>
                            <a class="text-body-emphasis bg-body bg-dark-hover text-light-hover rounded-circle square product-action shadow-sm compare"
                                href="shop/compare.html" data-bs-toggle="tooltip" data-bs-placement="top"
                                data-bs-title="Compare">
                                <svg class="icon icon-arrows-left-right-light">
                                    <use xlink:href="#icon-arrows-left-right-light"></use>
                                </svg>
                            </a>
                        </div>
                    </figure>
                    <div class="card-body text-center p-0">
                        <span
                            class="d-flex align-items-center price text-body-emphasis fw-bold justify-content-center mb-3 fs-6">$29.00</span>
                        <h4
                            class="product-title card-title text-primary-hover text-body-emphasis fs-15px fw-500 mb-3">
                            <a class="text-decoration-none text-reset" href="shop/product-details-v1.html">Scalp
                                Moisturizing Cream</a></h4>
                        <div class="d-flex align-items-center fs-12px justify-content-center">
                            <div class="rating">
                                <div class="empty-stars">
                                    <span class="star">
                                        <svg class="icon star-o">
                                            <use xlink:href="#star-o"></use>
                                        </svg>
                                    </span>
                                    <span class="star">
                                        <svg class="icon star-o">
                                            <use xlink:href="#star-o"></use>
                                        </svg>
                                    </span>
                                    <span class="star">
                                        <svg class="icon star-o">
                                            <use xlink:href="#star-o"></use>
                                        </svg>
                                    </span>
                                    <span class="star">
                                        <svg class="icon star-o">
                                            <use xlink:href="#star-o"></use>
                                        </svg>
                                    </span>
                                    <span class="star">
                                        <svg class="icon star-o">
                                            <use xlink:href="#star-o"></use>
                                        </svg>
                                    </span>
                                </div>
                                <div class="filled-stars" style="width: 100%">
                                    <span class="star">
                                        <svg class="icon star text-primary">
                                            <use xlink:href="#star"></use>
                                        </svg>
                                    </span>
                                    <span class="star">
                                        <svg class="icon star text-primary">
                                            <use xlink:href="#star"></use>
                                        </svg>
                                    </span>
                                    <span class="star">
                                        <svg class="icon star text-primary">
                                            <use xlink:href="#star"></use>
                                        </svg>
                                    </span>
                                    <span class="star">
                                        <svg class="icon star text-primary">
                                            <use xlink:href="#star"></use>
                                        </svg>
                                    </span>
                                    <span class="star">
                                        <svg class="icon star text-primary">
                                            <use xlink:href="#star"></use>
                                        </svg>
                                    </span>
                                </div>
                            </div><span class="reviews ms-4 pt-3 fs-14px">2947 reviews</span>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="card card-product grid-1 bg-transparent border-0" data-animate="fadeInUp">
                    <figure class="card-img-top position-relative mb-7 overflow-hidden ">
                        <a href="shop/product-details-v1.html" class="hover-zoom-in d-block"
                            title="Natural Coconut Cleansing Oil">
                            <img src="#" data-src="./assets/images/products/product-12-330x440.jpg"
                                class="img-fluid lazy-image w-100" alt="Natural Coconut Cleansing Oil" width="330"
                                height="440">
                        </a>
                        <div class="position-absolute product-flash z-index-2 "><span
                                class="badge badge-product-flash on-sale bg-primary">-26%</span></div>
                        <div class="position-absolute d-flex z-index-2 product-actions  horizontal"><a
                                class="text-body-emphasis bg-body bg-dark-hover text-light-hover rounded-circle square product-action shadow-sm add_to_cart"
                                href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                data-bs-title="Add To Cart">
                                <svg class="icon icon-shopping-bag-open-light">
                                    <use xlink:href="#icon-shopping-bag-open-light"></use>
                                </svg>
                            </a><a
                                class="text-body-emphasis bg-body bg-dark-hover text-light-hover rounded-circle square product-action shadow-sm quick-view"
                                href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                data-bs-title="Quick View">
                                <span data-bs-toggle="modal" data-bs-target="#quickViewModal"
                                    class="d-flex align-items-center justify-content-center">
                                    <svg class="icon icon-eye-light">
                                        <use xlink:href="#icon-eye-light"></use>
                                    </svg>
                                </span>
                            </a>
                            <a class="text-body-emphasis bg-body bg-dark-hover text-light-hover rounded-circle square product-action shadow-sm wishlist"
                                href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                data-bs-title="Add To Wishlist">
                                <svg class="icon icon-star-light">
                                    <use xlink:href="#icon-star-light"></use>
                                </svg>
                            </a>
                            <a class="text-body-emphasis bg-body bg-dark-hover text-light-hover rounded-circle square product-action shadow-sm compare"
                                href="shop/compare.html" data-bs-toggle="tooltip" data-bs-placement="top"
                                data-bs-title="Compare">
                                <svg class="icon icon-arrows-left-right-light">
                                    <use xlink:href="#icon-arrows-left-right-light"></use>
                                </svg>
                            </a>
                        </div>
                    </figure>
                    <div class="card-body text-center p-0">
                        <span
                            class="d-flex align-items-center price text-body-emphasis fw-bold justify-content-center mb-3 fs-6">
                            <del class=" text-body fw-500 me-4 fs-13px">$39.00</del>
                            <ins class="text-decoration-none">$29.00</ins></span>
                        <h4
                            class="product-title card-title text-primary-hover text-body-emphasis fs-15px fw-500 mb-3">
                            <a class="text-decoration-none text-reset" href="shop/product-details-v1.html">Natural
                                Coconut Cleansing Oil</a></h4>
                        <div class="d-flex align-items-center fs-12px justify-content-center">
                            <div class="rating">
                                <div class="empty-stars">
                                    <span class="star">
                                        <svg class="icon star-o">
                                            <use xlink:href="#star-o"></use>
                                        </svg>
                                    </span>
                                    <span class="star">
                                        <svg class="icon star-o">
                                            <use xlink:href="#star-o"></use>
                                        </svg>
                                    </span>
                                    <span class="star">
                                        <svg class="icon star-o">
                                            <use xlink:href="#star-o"></use>
                                        </svg>
                                    </span>
                                    <span class="star">
                                        <svg class="icon star-o">
                                            <use xlink:href="#star-o"></use>
                                        </svg>
                                    </span>
                                    <span class="star">
                                        <svg class="icon star-o">
                                            <use xlink:href="#star-o"></use>
                                        </svg>
                                    </span>
                                </div>
                                <div class="filled-stars" style="width: 80%">
                                    <span class="star">
                                        <svg class="icon star text-primary">
                                            <use xlink:href="#star"></use>
                                        </svg>
                                    </span>
                                    <span class="star">
                                        <svg class="icon star text-primary">
                                            <use xlink:href="#star"></use>
                                        </svg>
                                    </span>
                                    <span class="star">
                                        <svg class="icon star text-primary">
                                            <use xlink:href="#star"></use>
                                        </svg>
                                    </span>
                                    <span class="star">
                                        <svg class="icon star text-primary">
                                            <use xlink:href="#star"></use>
                                        </svg>
                                    </span>
                                    <span class="star">
                                        <svg class="icon star text-primary">
                                            <use xlink:href="#star"></use>
                                        </svg>
                                    </span>
                                </div>
                            </div><span class="reviews ms-4 pt-3 fs-14px">2947 reviews</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container container-xxl">
            <div class="row gy-30px">
                <div class="col-lg-6" data-animate="fadeInUp">
                    <div class="card border-0 rounded-0 banner-01 hover-zoom-in hover-shine">
                        <img class="lazy-image object-fit-cover card-img light-mode-img" src="#"
                            data-src="./assets/images/banner/banner-21.jpg" width="690" height="420"
                            alt="Mountain Pine Bath Oil">
                        <img class="lazy-image dark-mode-img object-fit-cover card-img" src="#"
                            data-src="./assets/images/banner/banner-white-21.jpg" width="690" height="420"
                            alt="Mountain Pine Bath Oil">
                        <div class="card-img-overlay d-inline-flex flex-column p-md-12 m-md-2 p-8">
                            <h6 class="card-subtitle ls-1 fs-15px mb-5 fw-semibold text-body-emphasis">NEW
                                COLLECTION</h6>
                            <h3 class="card-title lh-45px mw-75 pe-xl-25 pe-lg-0 pe-md-25 fs-3 pe-5">Mountain Pine
                                Bath Oil</h3>
                            <div class="mt-7"><a href="#" class="btn btn btn-white">Explore More</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6" data-animate="fadeInUp">
                    <div class="card border-0 rounded-0 banner-01 hover-zoom-in hover-shine">
                        <img class="lazy-image object-fit-cover card-img light-mode-img" src="#"
                            data-src="./assets/images/banner/banner-22.jpg" width="690" height="420"
                            alt="25% off Everything">
                        <img class="lazy-image dark-mode-img object-fit-cover card-img" src="#"
                            data-src="./assets/images/banner/banner-white-22.jpg" width="690" height="420"
                            alt="25% off Everything">
                        <div class="card-img-overlay d-inline-flex flex-column p-md-12 m-md-2 p-8">
                            <h3 class="card-title lh-45px fs-3 pe-15">25% off Everything</h3>
                            <p class="card-text fs-15px text-body-emphasis mw-md-60 pe-xl-20">Makeup with extended
                                range in colors for every human.</p>
                            <div class="mt-7"><a href="#" class="btn btn btn-white">Shop Sale</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section data-full-page="Stay Up to Date" data-full-page-dots="dark" class="pt-lg-17 pb-lg-17 pt-15 pb-15">
        <div class="container text-center">
            <div class="mx-auto mb-11 text-center" style="max-width:509px" data-animate="fadeInUp">
                <h3 class="mb-6">Stay Up to Date with All News and Exclusive Offers</h3>
            </div>
            <form class="mx-auto up-to-date-form form-border-transparent" style="max-width: 546px"
                data-animate="fadeInUp">
                <div class="text-center">
                    <div class=" input-group position-relative mb-11 form-border-transparent">
                        <input type="email" class="form-control rounded-left"
                            placeholder="Enter your email address">
                        <button type="submit"
                            class=" btn btn-dark btn-hover-bg-primary btn-hover-border-primary rounded ms-0">Subscribe</button>
                    </div>
                    <div class="form-check d-flex justify-content-center">
                        <input class="form-check-input me-4 rounded" type="checkbox" value id="flexCheckDefault">
                        <label class="form-check-label text-body fs-14px" for="flexCheckDefault">
                            I accept the <a href="#" class="text-decoration-none text border-bottom">terms &
                                conditions</a> and <a href="#" class="text-decoration-none border-bottom">the data
                                protection</a>
                        </label>
                    </div>
                </div>
            </form>
        </div>
    </section>
</main>
@endsection