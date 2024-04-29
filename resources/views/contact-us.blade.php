@extends('layout.master')

@section('title',"Angira-Handicrafts-Contact-Us")

@section('content')

<main id="content" class="wrapper layout-page">
    <section>
        <div class="bg-body-secondary py-5">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-site py-0 d-flex justify-content-center">
                    <li class="breadcrumb-item"><a class="text-decoration-none text-body" href="{{$dashboardUrl}}">Home</a>
                    </li>
                    <li class="breadcrumb-item active pl-0 d-flex align-items-center" aria-current="page">Contact Us</li>
                </ol>
            </nav>
        </div>
        <div class="container pt-13">
            <div class="text-center">
                <div class="text-center">
                    <h2 class="fs-36px mb-9">Keep In Touch with Us</h2>
                    <p class="fs-18px mb-14 w-lg-60 w-xl-50 mx-md-12 mx-lg-auto">Have a question or feedback? We're here to help! Reach out to us for inquiries, assistance, or just to say hello.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 mb-12 mb-md-0">
                    <div class="d-flex align-items-start">
                        <div class="pe-lg-9 pe-8 text-primary">
                            <svg class="icon fs-2">
                                <use xlink:href="#icon-box-07"></use>
                            </svg>
                        </div>
                        <div>
                            <h3 class="fs-5 mb-6">Address</h3>
                            <div class="fs-6">
                                <p class="mb-2 pb-4 fs-6">H-322, Sitapura Industrial Area, <br> Sitapura, Jaipur, Rajasthan 302022</p>
                            </div>
                            <!-- <a href="https://www.google.com/maps/dir//Angira+Handicrafts,+H-322,+Sitapura+Industrial+Area,+Sitapura,+Jaipur,+Rajasthan+302022/@26.775051,75.839661,17z/data=!4m8!4m7!1m0!1m5!1m1!1s0x396dc98513684c1d:0x7d2c29b3b2303912!2m2!1d75.8396621!2d26.7750572?entry=ttu" class="text-decoration-none border-bottom border-currentColor fw-semibold fs-6" target="_blank">Get
                                Direction</a> -->
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-12 mb-md-0">
                    <div class="d-flex align-items-start">
                        <div class="pe-lg-9 pe-8 text-primary">
                            <svg class="icon fs-2">
                                <use xlink:href="#icon-box-05"></use>
                            </svg>
                        </div>
                        <div>
                            <h3 class="fs-5 mb-6">Contact</h3>
                            <div class="fs-6">
                                <p class="mb-3 fs-6">Mobile:<a href="tel:+919799900266" class="text-body-emphasis">+91 97 9990 0266</a></p>
                                <!-- <p class="mb-3 fs-6">Hotline:<span class="text-body-emphasis"> 1900 26886</span></p> -->
                                <p class="mb-0 fs-6">E-mail: angirahandicrafts@gmail.com</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-12 mb-md-0">
                    <div class="d-flex align-items-start">
                        <div class="pe-lg-9 pe-8 text-primary">
                            <svg class="icon fs-2">
                                <use xlink:href="#icon-box-06"></use>
                            </svg>
                        </div>
                        <div>
                            <h3 class="fs-5 mb-6">Hour of operation</h3>
                            <div class="fs-6">
                                <dl class="d-flex mb-0">
                                    <dt class="pe-3 fs-6 text-body-emphasis fw-500" style="width: 110px">Mon – Sat:</dt>
                                    <dd class="mb-0"> 09:00 am – 06:00 pm</dd>
                                </dl>
                                <!-- <dl class="d-flex mb-0">
                                    <dt class="pe-3 fs-6 text-body-emphasis fw-500" style="width: 110px">Sat & Sun:</dt>
                                    <dd class="mb-0"> 09:30 – 21:30</dd>
                                </dl> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="pt-9 pt-md-16 pt-lg-18">
        <div class="container">
            <div id="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3562.0380892238677!2d75.83708607521!3d26.775055765993113!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396dc98513684c1d%3A0x7d2c29b3b2303912!2sAngira%20Handicrafts!5e0!3m2!1sen!2sin!4v1714294980901!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <!-- <div id="map" class="mapbox-gl map-point-animate map-box-has-effect " style="height:530px" data-mapbox-access-token="pk.eyJ1IjoiZzVvbmxpbmUiLCJhIjoiY2t1bWY4NzBiMWNycDMzbzZwMnI5ZThpaiJ9.ZifefVtp4anluFUbAMxAXg" data-mapbox-options="{&#34;center&#34;:[-106.53671888774004,35.12362056187368],&#34;setLngLat&#34;:[-106.53671888774004,35.12362056187368],&#34;style&#34;:&#34;mapbox://styles/mapbox/light-v10&#34;,&#34;zoom&#34;:5}" data-mapbox-marker="[{&#34;backgroundImage&#34;:&#34;/assets/images/others/marker.png&#34;,&#34;backgroundRepeat&#34;:&#34;no-repeat&#34;,&#34;className&#34;:&#34;marker&#34;,&#34;height&#34;:&#34;70px&#34;,&#34;position&#34;:[-102.53671888774004,38.12362056187368],&#34;width&#34;:&#34;70px&#34;},{&#34;backgroundImage&#34;:&#34;/assets/images/others/marker.png&#34;,&#34;backgroundRepeat&#34;:&#34;no-repeat&#34;,&#34;className&#34;:&#34;marker&#34;,&#34;height&#34;:&#34;70px&#34;,&#34;position&#34;:[-109.03671888774004,33.02362056187368],&#34;width&#34;:&#34;70px&#34;}]">
            </div> -->

        </div>
    </section>
    <section class="pt-15 pb-16 pt-lg-17 pb-lg-18 mx-auto" style="max-width: 750px">
        <div class="container text-center">
            <h2 class="mb-10 fs-3">Sent A Message</h2>
            <form class="contact-form" method="post" action="#">
                <div class="row mb-8 mb-md-10">
                    <div class="col-md-6 col-12 mb-8 mb-md-0">
                        <input type="text" class="form-control input-focus" placeholder="Name">
                    </div>
                    <div class="col-md-6 col-12">
                        <input type="email" class="form-control input-focus" placeholder="Email">
                    </div>
                </div>
                <textarea class="form-control mb-6 input-focus" placeholder="Messenger" rows="7"></textarea>
                <div class="form-check mb-9 text-start">
                    <input class="form-check-input rounded-0" type="checkbox" value id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        Save my name, email in this browse for the next time I comment
                    </label>
                </div>
                <button type="submit" class=" btn btn-dark btn-hover-bg-primary btn-hover-border-primary px-11">Submit</button>
            </form>
        </div>
    </section>
</main>

@endsection