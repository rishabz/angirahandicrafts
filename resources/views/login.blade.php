<?php
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
?>
<!doctype html>
<html lang="en" data-bs-theme="light">

<!-- Mirrored from templates.g5plus.net/glowing-bootstrap-5/home-05.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 13 Apr 2024 06:47:54 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Angira-Handicrafts-Login</title>
    <link rel="icon" href="{{URL::asset('assets/images/others/favicon.ico')}}">
    <link rel="icon" href="{{URL::asset('assets/images/others/favicon12.png')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/vendors/lightgallery/css/lightgallery-bundle.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/vendors/fontawesome/css/all.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/vendors/animate/animate.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/vendors/slick/slick.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/vendors/mapbox-gl/mapbox-gl.min.css')}}">
    <link rel="stylesheet" href="cdn.jsdelivr.net/npm/bootstrap-icons%401.9.1/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Urbanist:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{URL::asset('assets/css/theme.css')}}">
</head>

<body>
    <main id="content" class="wrapper layout-page">
        <section class="pb-lg-20 pb-16">
            <div class="bg-body-secondary py-5">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-site py-0 d-flex justify-content-center">
                        <li class="breadcrumb-item"><a class="text-decoration-none text-body" href="{{$dashboardUrl}}">Home</a>
                        </li>
                        <li class="breadcrumb-item active pl-0 d-flex align-items-center" aria-current="page">Login
                        </li>
                    </ol>
                </nav>
            </div>
            <div class="container">
                <div class=" text-center pt-13 mb-12 mb-lg-15">
                    <div class="text-center">
                        <h2 class="fs-36px mb-11 mb-lg-14">My Account</h2>
                    </div>
                </div>
                <div class="row no-gutters">
                    <div class="col-lg-10 mx-auto">
                        <div class="row no-gutters">
                            <div class="col-lg-3 mb-15 mb-lg-0 pe-xl-2"></div>
                            <div class="col-lg-6 mb-15 mb-lg-0 pe-xl-2">
                                <h3 class="fs-4 mb-10">Log In</h3>
                                <form method="POST" action="{{ route('login_submit') }}">
                                    @csrf
                                    <div class="form-group mb-6">
                                        <label for="email" class="visually-hidden">Email address</label>
                                        <input type="email" class="form-control" name="email" id="email" placeholder="Email Address">
                                        <div class="text-danger">{{ Session::get('email') }}</div>
                                    </div>
                                    <div class="form-group mb-6">
                                        <label for="user_login_password" class="visually-hidden">Password</label>
                                        <input type="password" class="form-control" name="password" id="password" placeholder="Password" name="password">
                                        <div class="text-danger">{{ Session::get('password') }}</div>
                                    </div> 
                                    {{-- <a href="#" class="d-inline-block fs-15 lh-12 mb-7">Forgot your password?</a> --}}
                                    <button type="submit" class="btn btn-primary w-100 mb-7">Submit</button>
                                    {{-- <div class="form-check mb-7 d-flex">
                                        <input type="checkbox" class="form-check-input rounded-0" id="customCheck1" name="remember">
                                        <label class="form-check-label fs-15 ps-4 text-body-emphasis" for="customCheck1">Keep me signed in.</label>
                                    </div> --}}
                                    {{-- <div class="row no-gutters mx-n5">
                                        <div class="col-sm-6 mb-4 mb-sm-0 px-5">
                                            <a href="#" class="btn btn-outline-primary w-100 px-2 fw-500"><span class="d-inline-block me-4"><i class="fab fa-facebook-f"></i></span>Continue with Facebook</a>
                                        </div>
                                        <div class="col-sm-6 mb-4 mb-sm-0 px-5">
                                            <a href="#" class="btn btn-outline-primary w-100 px-2 fw-500">
                                                <span class="d-inline-block me-4">
                                                    <i class="fab fa-google"></i>
                                                </span>Continue with Google</a>
                                        </div>
                                    </div> --}}
                                </form>
                            </div>
                            {{-- <div class="col-lg-6 ps-lg-6 ps-xl-12">
                                <h3 class="fs-4 mb-8">New Customer</h3>
                                <p class="mb-8">By creating an account with our store, you will be able to move through the
                                    checkout process
                                    faster, store multiple shipping addresses, view and track your orders in your account
                                    and
                                    more.</p>
                                <a href="https://templates.g5plus.net/user-registration.html"
                                    class="btn btn-primary">Register</a>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{ Session::forget('email') }}
        {{ Session::forget('password') }}
    </main>
    <script src="cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="{{URL::asset('assets/vendors/bootstrap/js/bootstrap.bundle.js')}}"></script>
    <script src="{{URL::asset('assets/vendors/clipboard/clipboard.min.js')}}"></script>
    <script src="{{URL::asset('assets/vendors/vanilla-lazyload/lazyload.min.js')}}"></script>
    <script src="{{URL::asset('assets/vendors/waypoints/jquery.waypoints.min.js')}}"></script>
    <script src="{{URL::asset('assets/vendors/lightgallery/lightgallery.min.js')}}"></script>
    <script src="{{URL::asset('assets/vendors/lightgallery/plugins/zoom/lg-zoom.min.js')}}"></script>
    <script src="{{URL::asset('assets/vendors/lightgallery/plugins/thumbnail/lg-thumbnail.min.js')}}"></script>
    <script src="{{URL::asset('assets/vendors/lightgallery/plugins/video/lg-video.min.js')}}"></script>
    <script src="{{URL::asset('assets/vendors/lightgallery/plugins/vimeoThumbnail/lg-vimeo-thumbnail.min.js')}}"></script>
    <script src="{{URL::asset('assets/vendors/isotope/isotope.pkgd.min.js')}}"></script>
    <script src="{{URL::asset('assets/vendors/slick/slick.min.js')}}"></script>
    <script src="{{URL::asset('assets/vendors/gsap/gsap.min.js')}}"></script>
    <script src="{{URL::asset('assets/vendors/gsap/ScrollToPlugin.min.js')}}"></script>
    <script src="{{URL::asset('assets/vendors/gsap/ScrollTrigger.min.js')}}"></script>
    <script src="{{URL::asset('assets/vendors/mapbox-gl/mapbox-gl.js')}}"></script>
    <script src="{{URL::asset('assets/js/theme.min.js')}}"></script>
    <script>
        document.getElementById('email').addEventListener('keyup', function(e){
            e.preventDefault();
            this.nextElementSibling.innerHTML='';
        });

        document.getElementById('password').addEventListener('keyup', function(e){
            e.preventDefault();
            this.nextElementSibling.innerHTML='';
        });
    </script>
</body>