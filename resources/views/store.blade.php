@extends('layout.master')

@section('title',"Angira-Handicrafts-Store")

@section('content')

<main id="content" class="wrapper layout-page">
    <section class="mb-13 mb-lg-15 mb-xl-19">
        <div class="bg-body-secondary py-5 mb-13">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-site py-0 d-flex justify-content-center">
                    <li class="breadcrumb-item"><a class="text-decoration-none text-body" href="{{$dashboardUrl}}">Home</a>
                    </li>
                    <li class="breadcrumb-item active pl-0 d-flex align-items-center" aria-current="page">Find a Store
                    </li>
                </ol>
            </nav>
        </div>
        <div class="container container-xxl">
            <div class="text-center">
                <div class="text-center">
                    <h2 class="fs-36px mb-7">Find a Store</h2>
                    <p class="fs-18px mb-6 w-lg-60 w-xl-40 mx-md-13 mx-lg-auto">Discover a diverse range of products at our store, from everyday essentials to unique finds, catering to all your needs and preferences.</p>
                </div>
            </div>
            <div class="row mt-15 d-flex align-items-center">
                <div class="col-lg-7 col-xl-6 mb-12 mb-lg-0 ">
                    <div class="card border-0 hover-zoom-in">
                        <div class="image-box-4">
                            <img class="lazy-image img-fluid lazy-image rounded-0" src="#" data-src="./assets/images/others/store-01.jpg" width="960" height="640" alt>
                        </div>
                        <div class>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-xl-6 ps-lg-10 ps-xl-16">
                    <div class="row">
                        <h2 class="fs-3 mb-10 mb-md-11">Sitapura Store</h2>
                        <div class="col-md-6 mb-11">
                            <div class="d-flex align-items-start">
                                <div class="d-none">
                                    <svg class="icon fs-2">
                                        <use xlink:href="#"></use>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="fs-5 mb-6">Address</h3>
                                    <div class="fs-6">
                                        <p class="mb-2 pb-4 fs-6">H-322, Sitapura Industrial Area, <br> Sitapura, Jaipur, Rajasthan 302022</p>
                                    </div>
                                    <a href="https://www.google.com/maps/dir//Angira+Handicrafts,+H-322,+Sitapura+Industrial+Area,+Sitapura,+Jaipur,+Rajasthan+302022/@26.775051,75.839661,17z/data=!4m8!4m7!1m0!1m5!1m1!1s0x396dc98513684c1d:0x7d2c29b3b2303912!2m2!1d75.8396621!2d26.7750572?entry=ttu" class="text-decoration-none border-bottom border-currentColor fw-semibold fs-6" target="_blank">Get
                                        Direction</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-7">
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
                                            <dt class="pe-3 fs-6 text-body-emphasis fw-500" style="width: 110px">Mon –
                                                Sat:</dt>
                                            <dd class="mb-0"> 09:00 am – 06:00 pm</dd>
                                        </dl>
                                        <!-- <dl class="d-flex mb-0">
                                            <dt class="pe-3 fs-6 text-body-emphasis fw-500" style="width: 110px">Sun:</dt>
                                            <dd class="mb-0"> 09:30 – 21:30</dd>
                                        </dl> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-7">
                            <div class="d-flex align-items-start">
                                <div class="d-none">
                                    <svg class="icon fs-2">
                                        <use xlink:href="#"></use>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="fs-5 mb-6">Contact</h3>
                                    <div class="fs-6">
                                        <p class="mb-3 fs-6">Mobile:<a href="tel:+919799900266" class="text-body-emphasis">+91 97 9990 0266</a></p>
                                        <!-- <p class="mb-3 fs-6">Hotline:<span class="text-body-emphasis"> 1900 26886</span>
                                        </p> -->
                                        <p class="mb-0 fs-6">E-mail: angirahandicrafts@gmail.com</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex align-items-start">
                                <div class="d-none">
                                    <svg class="icon fs-2">
                                        <use xlink:href="#"></use>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="fs-5 mb-6">Social media</h3>
                                </div>
                            </div>
                            <div class="socical-icon social-icon-style-1 ">
                                <ul class="list-inline fs-18px mb-0">
                                    <!-- <li class="list-inline-item me-7"><a href="#"><i class="fab fa-twitter"></i></a></li> -->
                                    <li class="list-inline-item me-7"><a href="https://www.facebook.com/share/25sPTYToKnwmXAEc/?mibextid=qi2Omg" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                    <li class="list-inline-item me-7"><a href="https://www.instagram.com/angira_handicrafts?igsh=MXV0djJiYzV4a3kxdQ==" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                    <li class="list-inline-item"><a href="https://youtube.com/@woodenworkcraft4321?si=DagFCLtqGLIz6uib"><i class="fab fa-youtube" target="_blank"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="mb-lg-17">
        <div class="container container-xxl">
            <div class="row d-flex align-items-center">
                <div class="col-lg-5 order-2 order-lg-1 mb-15 mb-lg-0">
                    <div class="row">
                        <h2 class="fs-3 mb-10">Kapoorawala Store</h2>
                        <div class="col-md-6 mb-12 mb-13">
                            <div class="d-flex align-items-start">
                                <div class="d-none">
                                    <svg class="icon fs-2">
                                        <use xlink:href="#"></use>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="fs-5 mb-6">Address</h3>
                                    <div class="fs-6">
                                        <p class="mb-2 pb-4 fs-6">Khatipura Road – <br> Kapoorawala, 302029</p>
                                    </div>
                                    <a href="https://www.google.com/maps/place/26%C2%B046'05.5%22N+75%C2%B042'16.3%22E/@26.7681937,75.7019498,17z/data=!3m1!4b1!4m4!3m3!8m2!3d26.7681937!4d75.7045247?hl=en&entry=ttu" class="text-decoration-none border-bottom border-currentColor fw-semibold fs-6" target="_blank">Get
                                        Direction</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-12 mb-13">
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
                                            <dt class="pe-3 fs-6 text-body-emphasis fw-500" style="width: 110px">Mon –
                                                Sat:</dt>
                                            <dd class="mb-0"> 09:00 am – 06:00 pm</dd>
                                        </dl>
                                        <!-- <dl class="d-flex mb-0">
                                            <dt class="pe-3 fs-6 text-body-emphasis fw-500" style="width: 110px">Sun:</dt>
                                            <dd class="mb-0"> 09:30 – 21:30</dd>
                                        </dl> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-12 mb-md-0">
                            <div class="d-flex align-items-start">
                                <div class="d-none">
                                    <svg class="icon fs-2">
                                        <use xlink:href="#"></use>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="fs-5 mb-6">Contact</h3>
                                    <div class="fs-6">
                                        <p class="mb-3 fs-6">Mobile:<a href="tel:+919799900266" class="text-body-emphasis">+91 97 9990 0266</a></p>
                                        <!-- <p class="mb-3 fs-6">Hotline:<span class="text-body-emphasis"> 1900 26886</span>
                                        </p> -->
                                        <p class="mb-0 fs-6">E-mail: angirahandicrafts@gmail.com</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex align-items-start">
                                <div class="d-none">
                                    <svg class="icon fs-2">
                                        <use xlink:href="#"></use>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="fs-5 mb-6">Social media</h3>
                                </div>
                            </div>
                            <div class="socical-icon social-icon-style-1 ">
                                <ul class="list-inline fs-18px mb-0">
                                    <!-- <li class="list-inline-item me-7"><a href="#"><i class="fab fa-twitter"></i></a></li> -->
                                    <li class="list-inline-item me-7"><a href="https://www.facebook.com/share/25sPTYToKnwmXAEc/?mibextid=qi2Omg" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                    <li class="list-inline-item me-7"><a href="https://www.instagram.com/angira_handicrafts?igsh=MXV0djJiYzV4a3kxdQ==" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                    <li class="list-inline-item"><a href="https://youtube.com/@woodenworkcraft4321?si=DagFCLtqGLIz6uib"><i class="fab fa-youtube" target="_blank"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 order-1 order-lg-2 mb-12 mb-lg-0 d-flex">
                    <div class="card border-0 hover-zoom-in">
                        <div class="image-box-4">
                            <img class="lazy-image img-fluid lazy-image rounded-0" src="#" data-src="./assets/images/others/store-02.jpg" width="960" height="640" alt>
                        </div>
                        <div class>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

@endsection