<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> MedSphere Pro | Smart Care Appointment System </title>
    <meta name="description"
        content="MedSphere Pro is a smart healthcare platform designed to simplify appointment booking, streamline patient management, and enhance care services. With secure digital records, personalized health reminders, and the ability for hospitals to register and gather patient reviews, MedSphere Pro ensures a seamless and efficient healthcare experience for everyone.">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- Favicon for the Webpage  --}}
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/frontalPagesAssets/img/favicon.ico') }}">

    <!-- CSS Starts here -->

    {{-- Bootstrap CSS CDN (Content Delivery Network) --}}
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"> --}}

    {{-- CDN for Responsive NavBar --}}
    <link rel="stylesheet" href="{{ asset('assets/frontalPagesAssets/css/slicknav.css') }} ">
    <link rel="stylesheet" href="{{ asset('assets/frontalPagesAssets/css/bootstrap.min.css') }} ">
    <link rel="stylesheet" href="{{ asset('assets/frontalPagesAssets/css/flaticon.css') }} ">
    <link rel="stylesheet" href="{{ asset('assets/frontalPagesAssets/css/gijgo.css') }} ">
    <link rel="stylesheet" href="{{ asset('assets/frontalPagesAssets/css/animate.min.css') }} ">
    <link rel="stylesheet" href="{{ asset('assets/frontalPagesAssets/css/animated-headline.css') }} ">
    <link rel="stylesheet" href="{{ asset('assets/frontalPagesAssets/css/magnific-popup.css') }} ">
    <link rel="stylesheet" href="{{ asset('assets/frontalPagesAssets/css/fontawesome-all.min.css') }} ">
    <link rel="stylesheet" href="{{ asset('assets/frontalPagesAssets/css/themify-icons.css') }} ">
    <link rel="stylesheet" href="{{ asset('assets/frontalPagesAssets/css/slick.css') }} ">
    <link rel="stylesheet" href="{{ asset('assets/frontalPagesAssets/css/nice-select.css') }} ">
    <link rel="stylesheet" href="{{ asset('assets/frontalPagesAssets/css/style.css') }} ">
</head>

<body>
    <!-- ? Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="{{ asset('assets/frontalPagesAssets/img/logo/loder.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
    <header>
        <!--? Header Start -->
        <div class="header-area">
            <div class="main-header header-sticky">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <!-- Logo -->
                        <div class="col-xl-2 col-lg-2 col-md-1">
                            <div class="logo">
                                <a href="{{ url('') }}"><img
                                        src="{{ asset('assets/frontalPagesAssets/img/logo/MedSphere_Pro_logo.png') }}" class=""
                                        alt=""></a>
                            </div>
                        </div>
                        <div class="col-xl-10 col-lg-10 col-md-10">
                            <div class="menu-main d-flex align-items-center justify-content-end">
                                <!-- Main-menu -->
                                <div class="main-menu f-right d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li class=" nav-item active"><a href="{{ route('index') }}">Home</a></li>
                                            <li><a href="{{ url('/about') }}">About</a></li>
                                            <li><a href="{{ url('/services') }}">Services</a></li>
                                            <li><a href="{{ url('/blog') }}">Blog</a>
                                                <ul class="submenu">
                                                    <li><a href="{{ url('./blog') }}">Blog</a></li>
                                                    <li><a href="{{ url('./blog-details') }}">Blog Details</a></li>
                                                    {{-- <li><a href="{{ url('./elements') }}">Element</a></li> --}}
                                                </ul>
                                            </li>
                                            <li><a href="{{ url('./contact') }}">Contact</a></li>
                                        </ul>
                                    </nav>
                                </div>
                                <div class="header-right-btn f-right d-none d-lg-block ml-15">
                                    <a href="{{ url('/User-Dashboard') }}" class="btn header-btn">Make an Appointment</a>
                                </div>
                            </div>
                        </div>
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>
