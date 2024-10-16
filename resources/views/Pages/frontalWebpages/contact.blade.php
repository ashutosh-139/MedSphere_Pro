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
                                        <h1 data-animation="fadeInUp" data-delay=".3s">contact</h1>
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
        <!--?  Contact Area start  -->
        <section class="contact-section">
            <div class="container">
                <div class="d-none d-sm-block mb-5 pb-4">
                    <div id="map" style="height: 480px; position: relative; overflow: hidden;">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3785.8884518199675!2d76.57770257423427!3d18.397927272910973!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcf8396336609e5%3A0xe06922ffa998a978!2sRajarshi%20Shahu%20College%2C%20Latur!5e0!3m2!1sen!2sin!4v1724546289454!5m2!1sen!2sin"
                            width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <script>
                        function initMap() {
                            var uluru = {
                                lat: -25.363,
                                lng: 131.044
                            };
                            var map = new google.maps.Map(document.getElementById('map'), {
                                center: {
                                    lat: -31.197,
                                    lng: 150.744
                                },
                                zoom: 9,
                                styles: grayStyles,
                                scrollwheel: false
                            });
                        }
                    </script>
                    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDpfS1oRGreGSBU5HHjMmQ3o5NLw7VdJ6I&amp;callback=initMap">
                    </script>

                </div>
                <div class="row">
                    <div class="col-12">
                        <h2 class="contact-title">Get in Touch</h2>
                    </div>
                    <div class="col-lg-8">
                        @if (session()->get('msg'))
                            <div class="alert alert-success h4">
                                {{ session()->pull('msg') }}
                            </div>
                        @endif  

                        <form class="form-contact contact_form" action="{{ route('contact.submit') }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9"
                                            onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" placeholder=" Enter Message" required></textarea>
                                        @error('message')
                                            Error in Message
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid" name="name" id="name" type="text"
                                            onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'"
                                            placeholder="Enter your name" required>
                                        @error('name')
                                            Error in Name
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid" name="email" id="email" type="email"
                                            onfocus="this.placeholder = ''"
                                            onblur="this.placeholder = 'Enter email address'" placeholder="Email" required>
                                        @error('email')
                                            Error in Email
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <input class="form-control" name="subject" id="subject" type="text"
                                            onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Subject'"
                                            placeholder="Enter Subject" required>
                                        @error('subject')
                                            Error in Subject
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <button type="submit" class="button button-contactForm boxed-btn rounded">Send</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-3 offset-lg-1">
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-home"></i></span>
                            <div class="media-body">
                                <h3>Latur, Maharashtra, India</h3>
                                <p>Rajrshi Shahu collage, Jay Nagar, Sawe Wadi, Latur, Maharashtra 413512</p>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                            <div class="media-body">
                                <h3>+1 253 565 2365</h3>
                                <p>Mon to Fri 9am to 6pm</p>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-email"></i></span>
                            <div class="media-body">
                                <h3>support@MedSpherePro.com</h3>
                                <p>Send us your query anytime!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact Area End -->
        <!--? About Law Start-->
        <section class="about-low-area mt-60">
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
                                <a href="{{ route('userDashboard') }}" class="border-btn">Make an Appointment</a>
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
