@extends('Layouts.webpageLayouts.main')

@section('section')
    <main>
        <!--? Slider Area Start-->
        <div class="slider-area slider-area2">
            <div class="slider-active dot-style">
                <!-- Slider Single -->
                <div class="single-slider  d-flex align-items-center slider-height2">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-xl-7 col-lg-8 col-md-10 ">
                                <div class="hero-wrapper">
                                    <div class="hero__caption">
                                        <h1 data-animation="fadeInUp" data-delay=".3s">Services</h1>
                                        <p data-animation="fadeInUp" data-delay=".6s">Empowering Wellness with <br> Smart,
                                            Simple Care</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Slider Area End -->
        <section class="wantToWork-area">
            <div class="container">
                <div class="wants-wrapper w-padding2">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-xl-7 col-lg-9 col-md-8">
                            <div class="wantToWork-caption wantToWork-caption2">
                                <h2>Happy mind <br>healthy life</h2>
                                <p>Almost before we knew it, we<br> had left the ground</p>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-4">
                            <a href="{{ url('/services/#') }}" class="btn f-right sm-left">Take a Service</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--? Services Area Start -->
        <div class="service-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-cat text-center mb-50">
                            <div class="cat-icon">
                                <img src="{{ asset('assets/frontalPagesAssets/img/icon/services1.svg') }}" alt="">
                            </div>
                            <div class="cat-cap">
                                <h5><a href="{{ url('/services/#') }}">Physical Activity</a></h5>
                                <p>Praesent porttitor, nulla vitae posuere iaculis, arcu nisl dignissim dolor, a pretium mi
                                    sem ut ipsum.</p>
                                <a href="{{ url('/services/#') }}" class="plus-btn"><i class="ti-plus"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-cat text-center mb-50">
                            <div class="cat-icon">
                                <img src="{{ asset('assets/frontalPagesAssets/img/icon/services2.svg') }}" alt="">
                            </div>
                            <div class="cat-cap">
                                <h5><a href="{{ url('/services/#') }}">Physical Activity</a></h5>
                                <p>Praesent porttitor, nulla vitae posuere iaculis, arcu nisl dignissim dolor, a pretium mi
                                    sem ut ipsum.</p>
                                <a href="{{ url('/services/#') }}" class="plus-btn"><i class="ti-plus"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-cat text-center mb-50">
                            <div class="cat-icon">
                                <img src="{{ asset('assets/frontalPagesAssets/img/icon/services3.svg') }}" alt="">
                            </div>
                            <div class="cat-cap">
                                <h5><a href="{{ url('/services/#') }}">Physical Activity</a></h5>
                                <p>Praesent porttitor, nulla vitae posuere iaculis, arcu nisl dignissim dolor, a pretium mi
                                    sem ut ipsum.</p>
                                <a href="{{ url('/services/#') }}" class="plus-btn"><i class="ti-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Services Area End -->
        <!--? video_start -->
        <div class="container pt-40">
            <div class="video-area section-bg2 d-flex align-items-center"
                data-background="assets/frontalPagesAssets/img/gallery/video-bg.png">
                <div class="video-wrap position-relative">
                    <div class="video-icon">
                        <a class="popup-video btn-icon" href="https://www.youtube.com/watch?v=up68UAfH0d0"><i
                                class="fas fa-play"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- video_end -->
        <!--? Testimonial Area Start -->
        <section class="testimonial-area testimonial-padding fix pb-bottom">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class=" col-lg-9">
                        <div class="about-caption">
                            <!-- Testimonial Start -->
                            <div class="h1-testimonial-active dot-style">
                                <!-- Single Testimonial -->
                                <div class="single-testimonial position-relative">
                                    <div class="testimonial-caption">
                                        <img src="{{ asset('assets/frontalPagesAssets/img/icon/quotes-sign.png') }}"
                                            alt="" class="quotes-sign">
                                        <p>"The automated process starts as soon as your clothe go into the machine. This
                                            site outcome is gleaming clothe. Placeholder text commonly used. In publishing
                                            and graphic.</p>
                                    </div>
                                    <!-- founder -->
                                    <div class="testimonial-founder d-flex align-items-center">
                                        <div class="founder-img">
                                            <img src="{{ asset('assets/frontalPagesAssets/img/icon/testimonial.png') }}"
                                                alt="">
                                        </div>
                                        <div class="founder-text">
                                            <span>Robart Brown</span>
                                            <p>Creative designer at Colorlib</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Testimonial -->
                                <div class="single-testimonial position-relative">
                                    <div class="testimonial-caption">
                                        <img src="{{ asset('assets/frontalPagesAssets/img/icon/quotes-sign.png') }}"
                                            alt="" class="quotes-sign">
                                        <p>"The automated process starts as soon as your clothe go into the machine. This
                                            site outcome is gleaming clothe. Placeholder text commonly used. In publishing
                                            and graphic.</p>
                                    </div>
                                    <!-- founder -->
                                    <div class="testimonial-founder d-flex align-items-center">
                                        <div class="founder-img">
                                            <img src="{{ asset('assets/frontalPagesAssets/img/icon/testimonial.png') }}"
                                                alt="">
                                        </div>
                                        <div class="founder-text">
                                            <span>Robart Brown</span>
                                            <p>Creative designer at Colorlib</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Testimonial End -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--? Testimonial Area End -->

        <!--? About Law Start-->
        <section class="about-low-area mt-80">
            <div class="container">
                <div class="about-cap-wrapper">
                    <div class="row">
                        <div class="col-xl-5  col-lg-6 col-md-10 offset-xl-1">
                            <div class="about-caption mb-50">
                                <!-- Section Tittle -->
                                <div class="section-tittle mb-35">
                                    <h2>100% satisfaction guaranteed.</h2>
                                </div>
                                <p>Almost before we knew it, we had left the ground</p>
                                <a href="{{ url('take-appointment') }}" class="border-btn">Make an Appointment</a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <!-- about-img -->
                            <div class="about-img">
                                <div class="about-font-img">
                                    <img src="{{ asset('assets/frontalPagesAssets/img/gallery/about2.png') }}"
                                        alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Law End-->
    </main>
@endsection
