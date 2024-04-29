@extends('layout.master')

@section('title',"Angira-Handicrafts-About-Us")

@section('content')

<main id="content" class="wrapper layout-page">
    <section class="position-relative" id="about_introduction">
        <div class="lazy-bg bg-overlay position-absolute z-index-1 w-100 h-100   light-mode-img" data-bg-src="assets/images/background/bg-about-01.jpg">
        </div>
        <div class="lazy-bg bg-overlay dark-mode-img position-absolute z-index-1 w-100 h-100" data-bg-src="assets/images/banner/banner-white-42.jpg">
        </div>
        <div class="position-relative z-index-2 container py-18 py-lg-25">
            <p class="fw-semibold ls-15 text-uppercase text-body-emphasis mb-lg-7 mt-lg-16">Introducing</p>
            <h2 class="fs-56px mb-7">About Angira Handicrafts</h2>
        </div>
    </section>
    <section>
        <div class="container pt-lg-17 pb-lg-20 pb-15 pt-11 mb-lg-4">
            <div class="text-center pb-lg-17 pb-13 mb-3">
                <img data-src="./assets/images/shop/image-box-01.png" alt="logo" class="img-fluid lazy-image m-auto" width="150" height="158" src="#" />
                <h3 class="mw-xl-50 mw-lg-60 mx-lg-auto mb-8">We carve with compassion, kindness, and empathy
                </h3>
                <p class="mw-xl-60 mw-lg-75 mx-lg-auto mb-0">In our wooden crafts, each piece is infused with the essence of compassion, kindness, and empathy. Every carve, every detail, is a reflection of our dedication to creating not just objects, but connections that resonate with warmth and understanding.</p>
            </div>
            <div class="row mb-lg-18 mb-15 pb-3 align-items-center">
                <div class="col-lg-6 pe-lg-0">
                    <div class="card border-0 hover-zoom-in rounded-0">
                        <div class="image-box-4">
                            <img class="lazy-image img-fluid lazy-image w-100" src="#" data-src="./assets/images/banner/banner-11.jpg" width="960" height="640" alt="revamp">
                        </div>
                        <div class="d-none">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 px-lg-12 ps-xl-18 pe-xl-20 mt-12 mt-lg-0">
                    <!-- <h3 class="mb-8">Elevate Your Home, Delight Your Loved Ones with Wooden Craft Treasures</h3> -->
                    <h3 class="mb-8">Revamp Your Space, Gift Wooden Grace</h3>
                    <p class="mb-0">Transform your home with our wooden crafts while delighting loved ones with timeless gifts that exude elegance and charm.</p>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-6 ps-lg-0 order-lg-1">
                    <div class="card border-0 hover-zoom-in rounded-0">
                        <div class="image-box-4">
                            <img class="lazy-image img-fluid lazy-image w-100" src="#" data-src="./assets/images/banner/banner-12.jpg" width="960" height="640" alt="our-mission">
                        </div>
                        <div class="d-none">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mt-12 mt-lg-0 ps-xl-15 pe-xl-20 px-lg-12">
                    <h3 class="mb-8">Our mission</h3>
                    <!-- <p class="mb-0">At <strong>Angira Handicrafts</strong>, we aspire to merge tradition with innovation, crafting excellence in wooden artistry. Committed to quality and sustainability, we aim to showcase India's rich heritage globally, inviting you to join our journey of timeless craftsmanship.</p> -->
                    <p class="mb-0">At <strong>Angira Handicrafts</strong>, we aspire to redefine excellence in wooden craftsmanship by merging tradition with innovation. Our commitment to quality and authenticity drives us to showcase the rich heritage of Indian handicrafts globally, all while embracing sustainable practices and continuous improvement. Join us on our journey of timeless artistry</p>
                </div>
            </div>
        </div>
    </section>
    <section id="with_client_logo_4" class="bg-body-tertiary">
        <div class="container pt-lg-20 pb-lg-19 pt-15 pb-16">
            <div class="row mb-11 mb-lg-15">
                <div class="col-lg-9 offset-lg-1 col-xl-8 offset-xl-2">
                    <div class="slick-slider main" data-slick-options="{&quot;slidesToShow&quot;: 1,&quot;dots&quot;:false,&quot;arrows&quot;:false, &quot;asNavFor&quot;: &quot;#with_client_logo_4 .thumb&quot;}">
                        <div class="text-center">
                            <h4 class="mb-0">"Experience the Artistry: Explore Our Wooden Creations, Where Tradition Meets Innovation for Timeless Elegance in Every Piece."</h4>
                        </div>
                        <div class="text-center">
                            <h4 class="mb-0">"Great tags, Millie has got used to it, nothing like the old tin tags of
                                years gone by. Light weight and great colours available."</h4>
                        </div>
                        <div class="text-center">
                            <h4 class="mb-0">"Amazing product. The results are so transformative in texture and my
                                face feels plump and healthy. Highly recommend!"</h4>
                        </div>
                        <div class="text-center">
                            <h4 class="mb-0">"Millions of combinations, meaning you get a totally unique piece of
                                furniture exactly the way you want it."</h4>
                        </div>
                        <div class="text-center">
                            <h4 class="mb-0">"Great tags, Millie has got used to it, nothing like the old tin tags of
                                years gone by. Light weight and great colours available."</h4>
                        </div>
                        <div class="text-center">
                            <h4 class="mb-0">"Millions of combinations, meaning you get a totally unique piece of
                                furniture exactly the way you want it."</h4>
                        </div>
                        <div class="text-center">
                            <h4 class="mb-0">"Millions of combinations, meaning you get a totally unique piece of
                                furniture exactly the way you want it."</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slick-slider thumb" data-slick-options="{&quot;slidesToShow&quot;: 6,&quot;focusOnSelect&quot;: true,&quot;arrows&quot;: false, &quot;dots&quot;: false, &quot;asNavFor&quot;: &quot;#with_client_logo_4 .main&quot;, &quot;responsive&quot;:[{&quot;breakpoint&quot;:992,&quot;settings&quot;:{&quot;dots&quot;:true,&quot;slidesToShow&quot;:4}},{&quot;breakpoint&quot;:768,&quot;settings&quot;:{&quot;dots&quot;:true,&quot;slidesToShow&quot;:3}},{&quot;breakpoint&quot;:576,&quot;settings&quot;:{&quot;dots&quot;:true,&quot;slidesToShow&quot;:2}}] }">
                <div class="client-logo-item">
                    <img class="lazy-image w-auto mx-auto opacity-30 light-mode-img" src="#" data-src="./assets/images/others/cat-01.jpg" width="150" height="82" alt="trays">
                    <img class="lazy-image dark-mode-img w-auto mx-auto opacity-30" src="#" data-src="./assets/images/others/cat-01.jpg" width="150" height="82" alt="trays">
                </div>
                <div class="client-logo-item">
                    <img class="lazy-image w-auto mx-auto opacity-30 light-mode-img" src="#" data-src="./assets/images/others/cat-02.jpg" width="150" height="82" alt="grandgolden">
                    <img class="lazy-image dark-mode-img w-auto mx-auto opacity-30" src="#" data-src="./assets/images/others/cat-02.jpg" width="150" height="82" alt="grandgolden">
                </div>
                <div class="client-logo-item">
                    <img class="lazy-image w-auto mx-auto opacity-30 light-mode-img" src="#" data-src="./assets/images/others/cat-03.jpg" width="150" height="82" alt="parker">
                    <img class="lazy-image dark-mode-img w-auto mx-auto opacity-30" src="#" data-src="./assets/images/others/cat-03.jpg" width="150" height="82" alt="parker">
                </div>
                <div class="client-logo-item">
                    <img class="lazy-image w-auto mx-auto opacity-30 light-mode-img" src="#" data-src="./assets/images/others/cat-04.jpg" width="150" height="82" alt="thebeast">
                    <img class="lazy-image dark-mode-img w-auto mx-auto opacity-30" src="#" data-src="./assets/images/others/cat-04.jpg" width="150" height="82" alt="thebeast">
                </div>
                <div class="client-logo-item">
                    <img class="lazy-image w-auto mx-auto opacity-30 light-mode-img" src="#" data-src="./assets/images/others/cat-05.jpg" width="150" height="82" alt="hayden">
                    <img class="lazy-image dark-mode-img w-auto mx-auto opacity-30" src="#" data-src="./assets/images/others/cat-05.jpg" width="150" height="82" alt="hayden">
                </div>
                <div class="client-logo-item">
                    <img class="lazy-image w-auto mx-auto opacity-30 light-mode-img" src="#" data-src="./assets/images/others/cat-06.jpg" width="150" height="82" alt="goodmood">
                    <img class="lazy-image dark-mode-img w-auto mx-auto opacity-30" src="#" data-src="./assets/images/others/cat-06.jpg" width="150" height="82" alt="goodmood">
                </div>
                <div class="client-logo-item">
                    <img class="lazy-image w-auto mx-auto opacity-30 light-mode-img" src="#" data-src="./assets/images/others/cat-07.jpg" width="150" height="82" alt="goodness">
                    <img class="lazy-image dark-mode-img w-auto mx-auto opacity-30" src="#" data-src="./assets/images/others/cat-07.jpg" width="150" height="82" alt="goodness">
                </div>
            </div>
        </div>
    </section>
    <!-- <section class="pt-lg-18 pb-lg-16 pt-15 pb-md-13 pb-16">
        <div class="container">
            <div class="text-center mx-auto w-xl-40 w-lg-50 mb-12 mb-lg-15">
                <h3 class="fs-3">
                    We pride ourselves on have a team of highly skilled
                </h3>
            </div>
            <div class="slick-slider mx-xl-n11"
                data-slick-options="{&quot;slidesToShow&quot;: 3,&quot;dots&quot;:false,&quot;arrows&quot;:false,&quot;responsive&quot;:[{&quot;breakpoint&quot;: 768,&quot;settings&quot;: {&quot;slidesToShow&quot;: 2,&quot;arrows&quot;:false,&quot;dots&quot;:true}},{&quot;breakpoint&quot;: 576,&quot;settings&quot;: {&quot;slidesToShow&quot;: 1,&quot;arrows&quot;:false,&quot;dots&quot;:true}}]}">
                <div class="px-xl-11">
                    <div class="card border-0 hover-change-image ">
                        <div class="position-relative overflow-hidden">
                            <img class="card-img img-fluid lazy-image" src="#"
                                data-src="./assets/images/others/our-team-01.jpg" width="377" height="446"
                                alt="Madhu Sudan Sharma">
                            <div
                                class="card-img-overlay border-0 d-flex flex-column p-0 justify-content-end align-items-center">
                                <ul
                                    class="list-inline text-center bg-body-tertiary w-100 hover-image hover-bottom-to-top m-0 px-7 py-5">
                                    <li class="list-inline-item mx-6"><a href="#" class="fs-18px"
                                            tabindex="0"><i class="fab fa-twitter"></i></a></li>
                                    <li class="list-inline-item mx-6"><a href="#" class="fs-18px"
                                            tabindex="0"><i class="fab fa-facebook"></i></a></li>
                                    <li class="list-inline-item mx-6"><a href="#" class="fs-18px"
                                            tabindex="0"><i class="fab fa-instagram"></i></a></li>
                                    <li class="list-inline-item mx-6"><a href="#" class="fs-18px"
                                            tabindex="0"><i class="fab fa-youtube"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body px-0 py-7 text-start">
                            <h4 class>
                                <a href="#" class="text-decoration-none">Madhu Sudan Sharma</a>
                            </h4>
                            <p class="card-text">- Founder, Chief Creative</p>
                        </div>
                    </div>
                </div>
                <div class="px-xl-11">
                    <div class="card border-0 hover-change-image ">
                        <div class="position-relative overflow-hidden">
                            <img class="card-img img-fluid lazy-image" src="#"
                                data-src="./assets/images/others/our-team-02.jpg" width="377" height="446"
                                alt="Jennifer C.">
                            <div
                                class="card-img-overlay border-0 d-flex flex-column p-0 justify-content-end align-items-center">
                                <ul
                                    class="list-inline text-center bg-body-tertiary w-100 hover-image hover-bottom-to-top m-0 px-7 py-5">
                                    <li class="list-inline-item mx-6"><a href="#" class="fs-18px"
                                            tabindex="0"><i class="fab fa-twitter"></i></a></li>
                                    <li class="list-inline-item mx-6"><a href="#" class="fs-18px"
                                            tabindex="0"><i class="fab fa-facebook"></i></a></li>
                                    <li class="list-inline-item mx-6"><a href="#" class="fs-18px"
                                            tabindex="0"><i class="fab fa-instagram"></i></a></li>
                                    <li class="list-inline-item mx-6"><a href="#" class="fs-18px"
                                            tabindex="0"><i class="fab fa-youtube"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body px-0 py-7 text-start">
                            <h4 class>
                                <a href="#" class="text-decoration-none">Jennifer C.</a>
                            </h4>
                            <p class="card-text">- Founder, CEO</p>
                        </div>
                    </div>
                </div>
                <div class="px-xl-11">
                    <div class="card border-0 hover-change-image ">
                        <div class="position-relative overflow-hidden">
                            <img class="card-img img-fluid lazy-image" src="#"
                                data-src="./assets/images/others/our-team-03.jpg" width="377" height="446"
                                alt="Valeriia Nadopta">
                            <div
                                class="card-img-overlay border-0 d-flex flex-column p-0 justify-content-end align-items-center">
                                <ul
                                    class="list-inline text-center bg-body-tertiary w-100 hover-image hover-bottom-to-top m-0 px-7 py-5">
                                    <li class="list-inline-item mx-6"><a href="#" class="fs-18px"
                                            tabindex="0"><i class="fab fa-twitter"></i></a></li>
                                    <li class="list-inline-item mx-6"><a href="#" class="fs-18px"
                                            tabindex="0"><i class="fab fa-facebook"></i></a></li>
                                    <li class="list-inline-item mx-6"><a href="#" class="fs-18px"
                                            tabindex="0"><i class="fab fa-instagram"></i></a></li>
                                    <li class="list-inline-item mx-6"><a href="#" class="fs-18px"
                                            tabindex="0"><i class="fab fa-youtube"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body px-0 py-7 text-start">
                            <h4 class>
                                <a href="#" class="text-decoration-none">Valeriia Nadopta</a>
                            </h4>
                            <p class="card-text">- Founder, C0O</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <section class="pb-14 py-lg-18">
        <div class="container container-xxl">
            <div class="row">
                <div class="col-lg-6">
                    <!-- <div class="card border-0 hover-zoom-in">
                        <div class="image-box-4">
                            <img class="lazy-image img-fluid lazy-image" src="#" data-src="/assets/images/background/bg-about-02.jpg" width="960" height="640" alt="">
                        </div>
                        <div>
                        </div>
                    </div> -->
                    <div class="card border-0 hover-change-image ">
                        <div class="position-relative overflow-hidden image-box-4">
                            <img class="card-img img-fluid lazy-image" src="#"
                                data-src="./assets/images/others/founder.jpg" width="960" height="640"
                                alt="Madhu Sudan Sharma">
                                <!-- <img class="lazy-image img-fluid lazy-image" src="#" data-src="/assets/images/background/bg-about-02.jpg" width="960" height="640" alt=""> -->
                            <div
                                class="card-img-overlay border-0 d-flex flex-column p-0 justify-content-end align-items-center">
                                <ul
                                    class="list-inline text-center bg-body-tertiary w-100 hover-image hover-bottom-to-top m-0 px-7 py-5">
                                    <li class="list-inline-item mx-6"><a href="#" class="fs-18px"
                                            tabindex="0"><i class="fab fa-twitter"></i></a></li>
                                    <li class="list-inline-item mx-6"><a href="#" class="fs-18px"
                                            tabindex="0"><i class="fab fa-facebook"></i></a></li>
                                    <li class="list-inline-item mx-6"><a href="#" class="fs-18px"
                                            tabindex="0"><i class="fab fa-instagram"></i></a></li>
                                    <li class="list-inline-item mx-6"><a href="#" class="fs-18px"
                                            tabindex="0"><i class="fab fa-youtube"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body px-0 py-7 text-start">
                            <h4 class>
                                <a href="#" class="text-decoration-none">Madhu Sudan Sharma</a>
                            </h4>
                            <p class="card-text">- Founder</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 px-xxl-18 mt-12 mt-lg-0">
                    <h2 class="mb-8">About Founder</h2>
                    <p><span class="text-body-emphasis">Madhu Sudan Sharma</span>, the visionary founder of <span class="text-body-emphasis">Angira Handicrafts</span>, embodies a deep passion for preserving India's rich cultural heritage through wooden craftsmanship. With a background rooted in traditional artistry and a forward-thinking approach, he blends time-honored techniques with modern innovation. His dedication to quality and sustainability drives Angira's mission to showcase the true essence of Indian craftsmanship to the world.</p>
                    <!-- <p class="mb-xl-16">If I fell in love with a woman for an artistic reason, or from the point of view of my work, I think it would rob her of something. We live in an era of globalization and the era of the woman. Never in the history of the world have women <span class="text-body-emphasis">been more in control of their destiny.</span></p> -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="d-flex align-items-start">
                                <div class="d-none">
                                    <svg class="icon fs-2">
                                        <use xlink:href="#"></use>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="fs-5 mb-6">Message</h3>
                                    <div class="fs-6">
                                        <p class="mb-6 fs-15px">Send us a text & an ambassador will respond when available.</p>
                                        <p class="m-0 fs-6 fw-bold text-primary">1-814-251-9966</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="col-md-6 pt-9 pt-md-0">
                            <div class="d-flex align-items-start">
                                <div class="d-none">
                                    <svg class="icon fs-2">
                                        <use xlink:href="#"></use>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="fs-5 mb-6">Store Hours</h3>
                                    <div class="fs-6">
                                        <dl class="d-flex mb-0">
                                            <dt class="pe-3 fs-6 text-body-emphasis fw-500" style="width: 110px">Mon – Fri:</dt>
                                            <dd class="mb-0"> 08:30 – 20:00</dd>
                                        </dl>
                                        <dl class="d-flex mb-0">
                                            <dt class="pe-3 fs-6 text-body-emphasis fw-500" style="width: 110px">Sat & Sun:</dt>
                                            <dd class="mb-0"> 09:30 – 21:30</dd>
                                        </dl>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </section>


</main>

@endsection