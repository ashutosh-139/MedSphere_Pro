<footer>
    <div class="footer-wrappr section-bg3"
        data-background="{{ asset('assets/frontalPagesAssets/img/gallery/footer-bg.png') }}">
        <div class="footer-area footer-padding ">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-xl-8 col-lg-8 col-md-6 col-sm-12">
                        <div class="single-footer-caption mb-50">
                            <!-- logo -->
                            <div class="footer-logo mb-25">
                                <a href="{{ url('/#') }}"><img
                                        src="{{ asset('assets/frontalPagesAssets/img/logo/MedSphere_Pro_logo.png') }}"
                                        alt=""></a>
                            </div>
                            <d iv class="header-area">
                                <div class="main-header main-header2">
                                    <div class="menu-main d-flex align-items-center justify-content-start">
                                        <!-- Main-menu -->
                                        <div class="main-menu main-menu2">
                                            <nav>
                                                <ul>
                                                    <li><a href="{{ url('') }}">Home</a></li>
                                                    <li><a href="{{ url('/about') }}">About</a></li>
                                                    <li><a href="{{ url('/services') }}">Services</a></li>
                                                    <li><a href="{{ url('/blog') }}">Blog</a></li>
                                                    <li><a href="{{ url('/contact') }}">Contact</a></li>
                                                </ul>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                            </d>
                            <!-- social media -->
                            <div class="footer-social mt-50">
                                <a href="/#"><i class="fab fa-twitter"></i></a>
                                <a href="/#"><i class="fab fa-facebook-f"></i></a>
                                <a href="/#"><i class="fab fa-pinterest-p"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                        <div class="single-footer-caption">
                            <div class="footer-tittle mb-50">
                                <h4>Subscribe newsletter</h4>
                            </div>
                            <!-- Subscription Form -->
                            <div class="footer-form">
                                <div id="mc_embed_sinup">
                                    <form action="{{ route('newsletter') }}" method="post"
                                        class="subscribe_form relative mail_part">
                                        @csrf
                                        @if (session()->has('subscribed'))
                                            @if (session()->pull('subscribed') == true)
                                                <div class="alert alert-success h5 rounded">Your information stored
                                                    Successfuly! </div>
                                            @else
                                                <div class="alert alert-warning h5 rounded">Already Subscribed!
                                                    {{ session()->pull('subscribed') }}
                                                </div>
                                            @endif
                                        @endif
                                        <input type="email" name="subscription_Mail" id="newsletter-form-email"
                                            placeholder=" Email Address " class="placeholder hide-on-focus"
                                            onfocus="this.placeholder = ''"
                                            onblur="this.placeholder = 'Enter your email'">
                                        <div class="form-icon">
                                            <button type="submit" name="submit" id="newsletter-submit"
                                                class="email_icon newsletter-submit button-contactForm">
                                                Subscribe
                                            </button>
                                        </div>
                                        <div class="mt-10 info"></div>
                                    </form>
                                </div>
                            </div>
                            <div class="footer-tittle">
                                <div class="footer-pera">
                                    <p>Subscribe for health tips, updates, and exclusive offers delivered straight to
                                        Our inbox!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer-bottom area -->
        <div class="footer-bottom-area">
            <div class="container">
                <div class="footer-border">
                    <div class="row">
                        <div class="col-xl-10 ">
                            <div class="footer-copy-right">
                                <p>
                                    Copyright &copy;
                                    <script>
                                        document.write(new Date().getFullYear());
                                    </script> All rights reserved | Developed by <i class="fa fa-heart"
                                        aria-hidden="true"></i> by <a href="#">Ashutosh</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Scroll Up -->
<div id="back-top">
    <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
</div>

<!-- JS here -->

<script src="{{ asset('./assets/frontalPagesAssets/js/vendor/modernizr-3.5.0.min.js') }}"></script>
<!-- Jquery, Popper, Bootstrap -->
<script src="{{ asset('./assets/frontalPagesAssets/js/vendor/jquery-1.12.4.min.js') }}"></script>
<script src="{{ asset('./assets/frontalPagesAssets/js/popper.min.js') }}"></script>
<script src="{{ asset('./assets/frontalPagesAssets/js/bootstrap.min.js') }}"></script>

<!-- Jquery Mobile Menu -->
<script src="{{ asset('./assets/frontalPagesAssets/js/jquery.slicknav.min.js') }}"></script>

<!-- Jquery Slick , Owl-Carousel Plugins -->
<!-- <script src="./assets/frontalPagesAssets/js/owl.carousel.min.js"></script> -->
<script src="{{ asset('./assets/frontalPagesAssets/js/slick.min.js') }}"></script>
<!-- One Page, Animated-HeadLin -->
<script src="{{ asset('./assets/frontalPagesAssets/js/wow.min.js') }}"></script>
<script src="{{ asset('./assets/frontalPagesAssets/js/animated.headline.js') }}"></script>
<script src="{{ asset('./assets/frontalPagesAssets/js/jquery.magnific-popup.js') }}"></script>

<!-- Date Picker -->
<!-- <script src="./assets/frontalPagesAssets/js/gijgo.min.js"></script> -->

<!-- Nice-select, sticky -->
<script src="{{ asset('./assets/frontalPagesAssets/js/jquery.nice-select.min.js') }}"></script>
<script src="{{ asset('./assets/frontalPagesAssets/js/jquery.sticky.js') }}"></script>

<!-- counter , waypoint,Hover Direction -->
<script src="{{ asset('./assets/frontalPagesAssets/js/jquery.counterup.min.js') }}"></script>
<script src="{{ asset('./assets/frontalPagesAssets/js/waypoints.min.js') }}"></script>
<script src="{{ asset('./assets/frontalPagesAssets/js/jquery.countdown.min.js') }}"></script>
<script src="{{ asset('./assets/frontalPagesAssets/js/hover-direction-snake.min.js') }}"></script>

<!-- contact js -->
<script src="{{ asset('./assets/frontalPagesAssets/js/contact.js') }}"></script>
<script src="{{ asset('./assets/frontalPagesAssets/js/jquery.form.js') }}"></script>
<script src="{{ asset('./assets/frontalPagesAssets/js/jquery.validate.min.js') }}"></script>
<script src="{{ asset('./assets/frontalPagesAssets/js/mail-script.js') }}"></script>
<script src="{{ asset('./assets/frontalPagesAssets/js/jquery.ajaxchimp.min.js') }}"></script>

<!-- Jquery Plugins, main Jquery -->
<script src="{{ asset('./assets/frontalPagesAssets/js/plugins.js') }}"></script>
<script src="{{ asset('./assets/frontalPagesAssets/js/main.js') }}"></script>

</body>

</html>
