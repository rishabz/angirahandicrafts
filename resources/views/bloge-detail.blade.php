@extends('layout.master')

@section('title',"Angira-Handicrafts-About-Us")

@section('content')

<main id="content" class="wrapper layout-page">
    <section class="z-index-2 position-relative pb-2 mb-12">
        <div class="bg-body-secondary mb-3">
            <div class="container">
                <nav class="py-4 lh-30px" aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center py-1 mb-0">
                        <li class="breadcrumb-item"><a title="Home" href="{{$dashboardUrl}}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Blog Update</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>
    <section class="pt-10 pb-16 pb-lg-18 container">
        <div class="px-lg-25 px-0">
            <div class=" text-center mb-13">
                <a href="#"
                    class="btn btn-light btn-hover-bg-dark btn-hover-border-dark btn-hover-text-light shadow-none py-0 px-6 mb-6">
                    Life Style
                </a>
                <h2 class=" px-6 text-body-emphasis border-0 fw-500 mb-4 fs-3 ">
                    Are You Washing Your Face Properly?
                </h2>
                <ul
                    class="list-inline fs-15px fw-semibold letter-spacing-01 d-flex justify-content-center align-items-center">
                    <li><img data-src="../assets/images/blog/post-detail-header-img.png" alt="Grace"
                            class="lazy-image img-fluid" src="#"></li>
                    <li class="border-end px-6 text-body-emphasis border-0 text-body">
                        By
                        <a href="#">Admin</a>
                    </li>
                    <li class="list-inline-item px-6">Jan 19, 2021</li>
                    <li class="ms-5 list-style-disc">134 views</li>
                </ul>
            </div>
        </div>
        <div class>
            <div class="px-lg-25 px-0">
                <p class=" fs-18px text-body-emphasis mt-4 mb-6">We do good to the planet while delivering smiles to
                    your loved ones. We believe even the smallest choices we make can have a significant impact over
                    time. That’s why it’s our goal to make eco-friendly alternatives more accessible than ever.</p>
                <p class=" mb-6">Awkwardness gives me great comfort. I’ve never been cool, but I’ve felt cool. I’ve
                    been in the cool place, but I wasn’t really cool – I was trying to pass for hip or cool. It’s the
                    awkwardness that’s nice. We look our best in subdued colors, sophisticated cuts, and a general air
                    of sleek understatement. I like the body. I like to design everything to do with the body.</p>
            </div>
            <img data-src="../assets/images/blog/detail-content-2.jpg" width="1170" height="700" alt
                class="lazy-image mb-13 img-fluid mt-10" src="#">
            <div class="px-lg-25 px-0">
                <p class=" mb-6">If I fell in love with a woman for an artistic reason, or from the point of view of my
                    work, I think it would rob her of something. We live in an era of globalization and the era of the
                    woman. Never in the history of the world have women <span class="text-body-emphasis">been more in
                        control of their destiny.</span></p>
                <p class=" fs-18px text-body-emphasis mt-4 mb-6">Your imagination, our creation</p>
                <p class=" mb-6">Complexion-perfecting natural foundation enriched with antioxidant-packed superfruits,
                    vitamins, and other skin-nourishing nutrients. Creamy liquid formula sets with a pristine matte
                    finish for soft, velvety smooth skin. Made using clean, non-toxic ingredients, our products are
                    designed for everyone...}</p>
            </div>
            <h3 class="text-center my-12">Shop the story</h3>
            <div class="slick-slider"
                data-slick-options="{&#34;arrows&#34;:false,&#34;dots&#34;:false,&#34;responsive&#34;:[{&#34;breakpoint&#34;:992,&#34;settings&#34;:{&#34;arrows&#34;:true,&#34;slidesToShow&#34;:3}},{&#34;breakpoint&#34;:768,&#34;settings&#34;:{&#34;arrows&#34;:true,&#34;slidesToShow&#34;:2}},{&#34;breakpoint&#34;:576,&#34;settings&#34;:{&#34;arrows&#34;:true,&#34;slidesToShow&#34;:1}}],&#34;slidesToShow&#34;:4}">
                <div class="mb-6">
                    <div class="card card-product grid-2 bg-transparent border-0">
                        <figure class="card-img-top position-relative mb-7 overflow-hidden">
                            <a href="../shop/product-details-v1.html" class="hover-zoom-in d-block"
                                title="Coffee Bean Caffeine Eye Cream">
                                <img src="#" data-src="../assets/images/products/product-03-270x360.jpg"
                                    class="img-fluid lazy-image w-100" alt="Coffee Bean Caffeine Eye Cream"
                                    width="270" height="360">
                            </a>
                            <div class="position-absolute d-flex z-index-2 product-actions  vertical"><a
                                    class="text-body-emphasis bg-body bg-dark-hover text-light-hover rounded-circle square product-action shadow-sm quick-view sm"
                                    href="#" data-bs-toggle="tooltip" data-bs-placement="left"
                                    data-bs-title="Quick View">
                                    <span data-bs-toggle="modal" data-bs-target="#quickViewModal"
                                        class="d-flex align-items-center justify-content-center">
                                        <svg class="icon icon-eye-light">
                                            <use xlink:href="#icon-eye-light"></use>
                                        </svg>
                                    </span>
                                </a>
                                <a class="text-body-emphasis bg-body bg-dark-hover text-light-hover rounded-circle square product-action shadow-sm wishlist sm"
                                    href="#" data-bs-toggle="tooltip" data-bs-placement="left"
                                    data-bs-title="Add To Wishlist">
                                    <svg class="icon icon-star-light">
                                        <use xlink:href="#icon-star-light"></use>
                                    </svg>
                                </a>
                                <a class="text-body-emphasis bg-body bg-dark-hover text-light-hover rounded-circle square product-action shadow-sm compare sm"
                                    href="../shop/compare.html" data-bs-toggle="tooltip" data-bs-placement="left"
                                    data-bs-title="Compare">
                                    <svg class="icon icon-arrows-left-right-light">
                                        <use xlink:href="#icon-arrows-left-right-light"></use>
                                    </svg>
                                </a>
                            </div><a href="#"
                                class="btn btn-add-to-cart btn-dark btn-hover-bg-primary btn-hover-border-primary position-absolute z-index-2 text-nowrap btn-sm px-6 py-3 lh-2">Add
                                To Cart</a>
                        </figure>
                        <div class="card-body text-center p-0">
                            <span
                                class="d-flex align-items-center price text-body-emphasis fw-bold justify-content-center mb-3 fs-6">$29.00</span>
                            <h4
                                class="product-title card-title text-primary-hover text-body-emphasis fs-15px fw-500 mb-3">
                                <a class="text-decoration-none text-reset" href="../shop/product-details-v1.html">Coffee
                                    Bean Caffeine Eye Cream</a></h4>
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
                <div class="mb-6">
                    <div class="card card-product grid-2 bg-transparent border-0">
                        <figure class="card-img-top position-relative mb-7 overflow-hidden">
                            <a href="../shop/product-details-v1.html" class="hover-zoom-in d-block"
                                title="Coffee Bean Caffeine Eye Cream">
                                <img src="#" data-src="../assets/images/products/product-04-270x360.jpg"
                                    class="img-fluid lazy-image w-100" alt="Coffee Bean Caffeine Eye Cream"
                                    width="270" height="360">
                            </a>
                            <div class="position-absolute d-flex z-index-2 product-actions  vertical"><a
                                    class="text-body-emphasis bg-body bg-dark-hover text-light-hover rounded-circle square product-action shadow-sm quick-view sm"
                                    href="#" data-bs-toggle="tooltip" data-bs-placement="left"
                                    data-bs-title="Quick View">
                                    <span data-bs-toggle="modal" data-bs-target="#quickViewModal"
                                        class="d-flex align-items-center justify-content-center">
                                        <svg class="icon icon-eye-light">
                                            <use xlink:href="#icon-eye-light"></use>
                                        </svg>
                                    </span>
                                </a>
                                <a class="text-body-emphasis bg-body bg-dark-hover text-light-hover rounded-circle square product-action shadow-sm wishlist sm"
                                    href="#" data-bs-toggle="tooltip" data-bs-placement="left"
                                    data-bs-title="Add To Wishlist">
                                    <svg class="icon icon-star-light">
                                        <use xlink:href="#icon-star-light"></use>
                                    </svg>
                                </a>
                                <a class="text-body-emphasis bg-body bg-dark-hover text-light-hover rounded-circle square product-action shadow-sm compare sm"
                                    href="../shop/compare.html" data-bs-toggle="tooltip" data-bs-placement="left"
                                    data-bs-title="Compare">
                                    <svg class="icon icon-arrows-left-right-light">
                                        <use xlink:href="#icon-arrows-left-right-light"></use>
                                    </svg>
                                </a>
                            </div><a href="#"
                                class="btn btn-add-to-cart btn-dark btn-hover-bg-primary btn-hover-border-primary position-absolute z-index-2 text-nowrap btn-sm px-6 py-3 lh-2">Add
                                To Cart</a>
                        </figure>
                        <div class="card-body text-center p-0">
                            <span
                                class="d-flex align-items-center price text-body-emphasis fw-bold justify-content-center mb-3 fs-6">$29.00</span>
                            <h4
                                class="product-title card-title text-primary-hover text-body-emphasis fs-15px fw-500 mb-3">
                                <a class="text-decoration-none text-reset"
                                    href="../shop/product-details-v1.html">Coffee Bean Caffeine Eye Cream</a></h4>
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
                <div class="mb-6">
                    <div class="card card-product grid-2 bg-transparent border-0">
                        <figure class="card-img-top position-relative mb-7 overflow-hidden">
                            <a href="../shop/product-details-v1.html" class="hover-zoom-in d-block"
                                title="Facial cleanser">
                                <img src="#" data-src="../assets/images/products/product-07-270x360.jpg"
                                    class="img-fluid lazy-image w-100" alt="Facial cleanser" width="270"
                                    height="360">
                            </a>
                            <div class="position-absolute product-flash z-index-2 "><span
                                    class="badge badge-product-flash on-sale bg-primary">-26%</span><span
                                    class="badge badge-product-flash on-new">New</span></div>
                            <div class="position-absolute d-flex z-index-2 product-actions  vertical"><a
                                    class="text-body-emphasis bg-body bg-dark-hover text-light-hover rounded-circle square product-action shadow-sm quick-view sm"
                                    href="#" data-bs-toggle="tooltip" data-bs-placement="left"
                                    data-bs-title="Quick View">
                                    <span data-bs-toggle="modal" data-bs-target="#quickViewModal"
                                        class="d-flex align-items-center justify-content-center">
                                        <svg class="icon icon-eye-light">
                                            <use xlink:href="#icon-eye-light"></use>
                                        </svg>
                                    </span>
                                </a>
                                <a class="text-body-emphasis bg-body bg-dark-hover text-light-hover rounded-circle square product-action shadow-sm wishlist sm"
                                    href="#" data-bs-toggle="tooltip" data-bs-placement="left"
                                    data-bs-title="Add To Wishlist">
                                    <svg class="icon icon-star-light">
                                        <use xlink:href="#icon-star-light"></use>
                                    </svg>
                                </a>
                                <a class="text-body-emphasis bg-body bg-dark-hover text-light-hover rounded-circle square product-action shadow-sm compare sm"
                                    href="../shop/compare.html" data-bs-toggle="tooltip" data-bs-placement="left"
                                    data-bs-title="Compare">
                                    <svg class="icon icon-arrows-left-right-light">
                                        <use xlink:href="#icon-arrows-left-right-light"></use>
                                    </svg>
                                </a>
                            </div><a href="#"
                                class="btn btn-add-to-cart btn-dark btn-hover-bg-primary btn-hover-border-primary position-absolute z-index-2 text-nowrap btn-sm px-6 py-3 lh-2">Add
                                To Cart</a>
                        </figure>
                        <div class="card-body text-center p-0">
                            <span
                                class="d-flex align-items-center price text-body-emphasis fw-bold justify-content-center mb-3 fs-6">
                                <del class=" text-body fw-500 me-4 fs-13px">$39.00</del>
                                <ins class="text-decoration-none">$29.00</ins></span>
                            <h4
                                class="product-title card-title text-primary-hover text-body-emphasis fs-15px fw-500 mb-3">
                                <a class="text-decoration-none text-reset"
                                    href="../shop/product-details-v1.html">Facial cleanser</a></h4>
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
                <div class="mb-6">
                    <div class="card card-product grid-2 bg-transparent border-0">
                        <figure class="card-img-top position-relative mb-7 overflow-hidden">
                            <a href="../shop/product-details-v1.html" class="hover-zoom-in d-block"
                                title="Coffee Bean Caffeine Eye Cream">
                                <img src="#" data-src="../assets/images/products/product-06-270x360.jpg"
                                    class="img-fluid lazy-image w-100" alt="Coffee Bean Caffeine Eye Cream"
                                    width="270" height="360">
                            </a>
                            <div class="position-absolute d-flex z-index-2 product-actions  vertical"><a
                                    class="text-body-emphasis bg-body bg-dark-hover text-light-hover rounded-circle square product-action shadow-sm quick-view sm"
                                    href="#" data-bs-toggle="tooltip" data-bs-placement="left"
                                    data-bs-title="Quick View">
                                    <span data-bs-toggle="modal" data-bs-target="#quickViewModal"
                                        class="d-flex align-items-center justify-content-center">
                                        <svg class="icon icon-eye-light">
                                            <use xlink:href="#icon-eye-light"></use>
                                        </svg>
                                    </span>
                                </a>
                                <a class="text-body-emphasis bg-body bg-dark-hover text-light-hover rounded-circle square product-action shadow-sm wishlist sm"
                                    href="#" data-bs-toggle="tooltip" data-bs-placement="left"
                                    data-bs-title="Add To Wishlist">
                                    <svg class="icon icon-star-light">
                                        <use xlink:href="#icon-star-light"></use>
                                    </svg>
                                </a>
                                <a class="text-body-emphasis bg-body bg-dark-hover text-light-hover rounded-circle square product-action shadow-sm compare sm"
                                    href="../shop/compare.html" data-bs-toggle="tooltip" data-bs-placement="left"
                                    data-bs-title="Compare">
                                    <svg class="icon icon-arrows-left-right-light">
                                        <use xlink:href="#icon-arrows-left-right-light"></use>
                                    </svg>
                                </a>
                            </div><a href="#"
                                class="btn btn-add-to-cart btn-dark btn-hover-bg-primary btn-hover-border-primary position-absolute z-index-2 text-nowrap btn-sm px-6 py-3 lh-2">Add
                                To Cart</a>
                        </figure>
                        <div class="card-body text-center p-0">
                            <span
                                class="d-flex align-items-center price text-body-emphasis fw-bold justify-content-center mb-3 fs-6">$29.00</span>
                            <h4
                                class="product-title card-title text-primary-hover text-body-emphasis fs-15px fw-500 mb-3">
                                <a class="text-decoration-none text-reset"
                                    href="../shop/product-details-v1.html">Coffee Bean Caffeine Eye Cream</a></h4>
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
            </div>
            <div class="text-center px-lg-25 px-0">
                <a href="#"
                    class="btn btn-dark btn-hover-bg-primary btn-hover-border-primary btn-hover-text-light shadow-none mt-12">Shop
                    all products</a>
                <p class="mt-13 text-start">Awkwardness gives me great comfort. I’ve never been cool, but I’ve felt
                    cool. I’ve been in the cool place, but I wasn’t really cool – I was trying to pass for hip or cool.
                    It’s the awkwardness that’s nice. We look our best in subdued colors, sophisticated cuts, and a
                    general air of sleek understatement. I like the body. I like to design everything to do with the
                    body.</p>
                <div class="row mt-11 text-start">
                    <div class="col-md-6 col-12">
                        <img data-src="../assets/images/blog/quote2.png" width="42" height="31" alt
                            class="lazy-image img-fluid mt-8" src="#">
                        <h2 class="mt-11 me-md-13 me-lg-10 me-xl-13">Because You Need Time for Yourself.</h2>
                        <p class="fw-semibold text-uppercase mt-11 text-body-emphasis ls-1">maggie.e</p>
                    </div>
                    <div class="col-md-6 col-12">
                        <p class="pe-md-10">Complexio n-perfecting natural foundation enriched with antioxidant-packed
                            superfruits, vitamins, and other skin-nourishing nutrients. Creamy liquid formula sets with
                            a pristine matte finish for soft, velvety smooth skin. Made using clean, non-toxic
                            ingredients, our products are designed for everyone...</p>
                        <p class>Looking for love in all the wrong places? Start with something pure, something good for
                            you, and something that makes you feel pampered like a princess. We’re talking about clean
                            beauty gift sets, of course – and we’ve got a bouquet of beauties for yourself or someone
                            you love. Remember those grand travel plans we had for 2020? This body care duo makes you
                            feel like you’re lying in a spa tent on a warm sandy beach.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="px-lg-25 px-0">
            <div class="row no-gutters pt-11 justify-content-sm-between">
                <div class="col-sm-6 mb-4 mb-sm-0">
                    <ul class="list-inline fw-semibold">
                        <li class="list-inline-item me-3">
                            <a href class="text-body text-body-emphasis-hover text-decoration-none">#happy</a>
                        </li>
                        <li class="list-inline-item me-3">
                            <a href class="text-body text-body-emphasis-hover text-decoration-none">#lifestyle</a>
                        </li>
                        <li class="list-inline-item me-3">
                            <a href class="text-body text-body-emphasis-hover text-decoration-none">#gifts</a>
                        </li>
                        <li class="list-inline-item me-3">
                            <a href class="text-body text-body-emphasis-hover text-decoration-none">#watercolor</a>
                        </li>
                    </ul>
                </div>
                <div class="col-sm-6 d-flex justify-content-sm-end">
                    <label class="text-secondary fw-semibold me-7 mb-0">Share:</label>
                    <ul class="list-inline mb-0 lh-1">
                        <li class="list-inline-item me-7">
                            <a href class="fs-18px lh-14 fw-normal">
                                <i class="fa-brands fa-twitter"></i>
                            </a>
                        </li>
                        <li class="list-inline-item me-7">
                            <a href class="fs-18px lh-14 fw-normal">
                                <i class="fa-brands fa-facebook-f"></i>
                            </a>
                        </li>
                        <li class="list-inline-item me-7">
                            <a href class="fs-18px lh-14 fw-normal">
                                <i class="fa-brands fa-instagram"></i>
                            </a>
                        </li>
                        <li class="list-inline-item me-7">
                            <a href class="fs-18px lh-14 fw-normal">
                                <i class="fa-brands fa-youtube"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-12 mt-5 mb-7">
                    <div class="border-bottom"></div>
                </div>
                <div class="col-sm-6">
                    <div class="ml-8">
                        <p class="fs-13px ls-1 text-uppercase mb-5 fw-semibold px-8">
                            Videos
                        </p>
                        <a href="#" class="fs-15px fw-semibold position-relative px-8">
                            <i class="far fa-chevron-left mt-2 position-absolute start-0 top-0"></i>How to Plop Hair
                            for Bouncy, Beautiful Curls
                        </a>
                    </div>
                </div>
                <div class="col-sm-6 d-flex justify-content-sm-end">
                    <div class="mr-8 text-right">
                        <p class="fs-13px text-start text-sm-end ls-1 text-uppercase mb-5 fw-semibold px-8">
                            Life style
                        </p>
                        <a href="#" class="fs-15px text-start text-sm-end fw-semibold position-relative px-8">
                            <i class="far fa-chevron-right mt-2 position-absolute end-0 top-0"></i>Our Favorite
                            Multitasking Products
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="px-lg-25 px-0">
            <div class="pt-14 pb-13 pb-lg-15 pt-lg-18 mx-n5" id="post_related">
                <div class="container">
                    <div class="text-center">
                        <h2 class="mb-6 fs-3">Related Posts</h2>
                    </div>
                </div>
                <div class="container container-xxl mt-10 pt-3">
                    <div class="slick-slider"
                        data-slick-options="{&#34;arrows&#34;:false,&#34;dots&#34;:false,&#34;responsive&#34;:[{&#34;breakpoint&#34;:1200,&#34;settings&#34;:{&#34;slidesToShow&#34;:3}},{&#34;breakpoint&#34;:992,&#34;settings&#34;:{&#34;dots&#34;:true,&#34;slidesToShow&#34;:2}},{&#34;breakpoint&#34;:768,&#34;settings&#34;:{&#34;dots&#34;:true,&#34;slidesToShow&#34;:1}}],&#34;slidesToShow&#34;:3}">
                        <div>
                            <article class="card card-post-grid-3 bg-transparent border-0" data-animate="fadeInUp">
                                <figure class="card-img-top mb-8 position-relative"><a href="#"
                                        class="hover-shine hover-zoom-in d-block"
                                        title="Our Favorite Multitasking Products">
                                        <img data-src="../assets/images/blog/post-12-237x288.jpg"
                                            class="img-fluid lazy-image w-100"
                                            alt="Our Favorite Multitasking Products" width="237" height="288"
                                            src="#">
                                    </a></figure>
                                <div class="card-body p-0">
                                    <ul
                                        class="post-meta list-inline lh-1 d-flex flex-wrap fs-13px text-uppercase ls-1 fw-semibold m-0">
                                        <li class="list-inline-item"><a
                                                class="text-reset text-decoration-none text-primary-hover"
                                                href="#" title="Videos">Videos</a></li>
                                    </ul>
                                    <h4 class="card-title fs-6 lh-base mt-5 pt-2 mb-0">
                                        <a class="text-decoration-none" href="details-01.html"
                                            title="Our Favorite Multitasking Products">Our Favorite Multitasking
                                            Products</a>
                                    </h4>
                                </div>
                            </article>
                        </div>
                        <div>
                            <article class="card card-post-grid-3 bg-transparent border-0" data-animate="fadeInUp">
                                <figure class="card-img-top mb-8 position-relative"><a href="#"
                                        class="hover-shine hover-zoom-in d-block"
                                        title="How to Plop Hair for Bouncy, Beautiful Curls">
                                        <img data-src="../assets/images/blog/post-05-237x288.jpg"
                                            class="img-fluid lazy-image w-100"
                                            alt="How to Plop Hair for Bouncy, Beautiful Curls" width="237"
                                            height="288" src="#">
                                    </a></figure>
                                <div class="card-body p-0">
                                    <ul
                                        class="post-meta list-inline lh-1 d-flex flex-wrap fs-13px text-uppercase ls-1 fw-semibold m-0">
                                        <li class="list-inline-item"><a
                                                class="text-reset text-decoration-none text-primary-hover"
                                                href="#" title="Videos">Videos</a></li>
                                    </ul>
                                    <h4 class="card-title fs-6 lh-base mt-5 pt-2 mb-0">
                                        <a class="text-decoration-none" href="details-01.html"
                                            title="How to Plop Hair for Bouncy, Beautiful Curls">How to Plop Hair for
                                            Bouncy, Beautiful Curls</a>
                                    </h4>
                                </div>
                            </article>
                        </div>
                        <div>
                            <article class="card card-post-grid-3 bg-transparent border-0" data-animate="fadeInUp">
                                <figure class="card-img-top mb-8 position-relative"><a href="#"
                                        class="hover-shine hover-zoom-in d-block"
                                        title="Are You Washing Your Face Properly?">
                                        <img data-src="../assets/images/blog/post-03-237x288.jpg"
                                            class="img-fluid lazy-image w-100"
                                            alt="Are You Washing Your Face Properly?" width="237" height="288"
                                            src="#">
                                    </a></figure>
                                <div class="card-body p-0">
                                    <ul
                                        class="post-meta list-inline lh-1 d-flex flex-wrap fs-13px text-uppercase ls-1 fw-semibold m-0">
                                        <li class="list-inline-item"><a
                                                class="text-reset text-decoration-none text-primary-hover"
                                                href="#" title="Videos">Videos</a></li>
                                    </ul>
                                    <h4 class="card-title fs-6 lh-base mt-5 pt-2 mb-0">
                                        <a class="text-decoration-none" href="details-01.html"
                                            title="Are You Washing Your Face Properly?">Are You Washing Your Face
                                            Properly?</a>
                                    </h4>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 mt-5 mb-7">
                <div class="border-bottom"></div>
            </div>
            <div class="pt-lg-12 pt-10">
                <h2 class=" fw-semibold fs-3 text-center mb-10">5 Comments</h2>
                <div class="pb-9 mb-9 border-bottom">
                    <div class="d-flex">
                        <div class="avatar-cmt me-9 bg-image"
                            data-bg-src="../assets/images/blog/post-comment-list-avatar.png">
                        </div>
                        <div class="Cmt-content">
                            <h2 class=" fw-semibold text-uppercase fs-14px mb-3">elizabeth</h2>
                            <p class=" body-color fs-15px mb-6">This skin care gift set is made with potent vitamins,
                                stimulating caffeine, and natural acids. It’s designed to rejuvenate your complexion
                                without the use of harsh chemicals or bleaching agents.</p>
                            <div class="d-flex">
                                <p class="mb-0 text-muted fs-15px pe-4 border-end">02 Dec, 2020 at 2:29 PM</p>
                                <a href="#" title="reply"
                                    class="ps-4 fw-semibold text-body-emphasis">Reply</a>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex mt-10 ms-17 ps-7 border-start reply-comment">
                        <div class="avatar-cmt me-9 bg-image"
                            data-bg-src="../assets/images/blog/post-comment-avatar-02.png">
                        </div>
                        <div class="cmt-content">
                            <h2 class=" fw-semibold text-uppercase fs-14px mb-3">admin</h2>
                            <p class=" body-color fs-15px mb-6">Vitamin C promotes healthy collagen levels, while 3
                                types of caffeine awaken and rejuvenate the skin and eyes.</p>
                            <div class="d-flex">
                                <p class="mb-0 text-muted fs-15px pe-4 border-end">02 Dec, 2020 at 2:29 PM</p>
                                <a href="#" title="reply"
                                    class="ps-4 fw-semibold text-body-emphasis">Reply</a>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex mt-10 ms-17 ps-7 border-start reply-comment">
                        <div class="avatar-cmt me-9 bg-image"
                            data-bg-src="../assets/images/blog/post-comment-avatar-03.png">
                        </div>
                        <div class="cmt-content">
                            <h2 class=" fw-semibold text-uppercase fs-14px mb-3">Jennifer. c</h2>
                            <p class=" body-color fs-15px mb-6">Vitamin C promotes healthy collagen levels, while 3
                                types of caffeine awaken and rejuvenate the skin and eyes.</p>
                            <div class="d-flex">
                                <p class="mb-0 text-muted fs-15px pe-4 border-end">02 Dec, 2020 at 2:29 PM</p>
                                <a href="#" title="reply"
                                    class="ps-4 fw-semibold text-body-emphasis">Reply</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pb-9 mb-9 border-bottom">
                    <div class="d-flex">
                        <div class="avatar-cmt me-9 bg-image"
                            data-bg-src="../assets/images/blog/post-comment-avatar-04.png">
                        </div>
                        <div class="Cmt-content">
                            <h2 class=" fw-semibold text-uppercase fs-14px mb-3">Lucille D</h2>
                            <p class=" body-color fs-15px mb-6">We may not be doing the whole ‘get up and go’ thing
                                like we used to, especially if the only place we’re going is our couch. But to get up
                                and glow? </p>
                            <div class="d-flex">
                                <p class="mb-0 text-muted fs-15px pe-4 border-end">02 Dec, 2020 at 2:29 PM</p>
                                <a href="#" title="reply"
                                    class="ps-4 fw-semibold text-body-emphasis">Reply</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pb-9 mb-9 border-bottom">
                    <div class="d-flex">
                        <div class="avatar-cmt me-9 bg-image"
                            data-bg-src="../assets/images/blog/post-comment-avatar-05.png">
                        </div>
                        <div class="Cmt-content">
                            <h2 class=" fw-semibold text-uppercase fs-14px mb-3">Jennifer. c</h2>
                            <p class=" body-color fs-15px mb-6">This skin care gift set is made with potent vitamins,
                                stimulating caffeine, and natural acids. It’s designed to rejuvenate your complexion
                                without the use of harsh chemicals or bleaching agents. </p>
                            <div class="d-flex">
                                <p class="mb-0 text-muted fs-15px pe-4 border-end">02 Dec, 2020 at 2:29 PM</p>
                                <a href="#" title="reply"
                                    class="ps-4 fw-semibold text-body-emphasis">Reply</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pt-lg-12 pt-10">
                <h3 class="text-center mb-11">Leave a Comment</h3>
                <form class="row gy-30px">
                    <div class="col-sm-6">
                        <label for="input_comment_name" class="visually-hidden">Name</label>
                        <input type="text" class="form-control" id="input_comment_name" name="input_comment_name"
                            placeholder="Name" />
                    </div>
                    <div class="col-sm-6">
                        <label for="input_comment_email" class="visually-hidden">Email</label>
                        <input type="email" class="form-control" id="input_comment_email"
                            name="input_comment_email" placeholder="Email">
                    </div>
                    <div class="col-12">
                        <label for="input_comment_message" class="visually-hidden">Email</label>
                        <textarea class="form-control" name="input_comment_message" id="input_comment_message" placeholder="Message"
                            rows="6"></textarea>
                    </div>
                    <div class="col-12 mt-8">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="input_comment_remember">
                            <label class="form-check-label" for="input_comment_remember">Save my name, email in this
                                browse for the next time I comment</label>
                        </div>
                    </div>
                    <div class="col-12 text-center">
                        <button type="submit"
                            class="btn btn-dark btn-hover-bg-primary btn-hover-border-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</main>

@endsection