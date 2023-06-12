<!DOCTYPE html>
<html lang="en">

<head>
    <!-- META -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta name="robots" content="" />
    <meta name="description" content="" />

    <!-- FAVICONS ICON -->
    <link rel="icon" href="{{ asset('assets/images/favicon.ico') }}" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/favicon.png') }}" />

    <!-- PAGE TITLE HERE -->
    <title>Gold Silver Diamond Co.,Ltd - @yield('title')</title>

    <!-- MOBILE SPECIFIC -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/feather.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/magnific-popup.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/lc_lightbox.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap-select.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/dataTables.bootstrap5.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/select.bootstrap5.min.css') }}">
    <!-- DASHBOARD select bootstrap  STYLE SHEET  -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/dropzone.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/scrollbar.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/datepicker.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/flaticon.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/swiper-bundle.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">


    <!-- THEME COLOR CHANGE STYLE SHEET -->
    <link rel="stylesheet" class="skin" type="text/css" href="{{ asset('assets/css/skins-type/skin-6.css') }}">
    <!-- SIDE SWITCHER STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/switcher.css') }}">
</head>

<body data-anm=".anm">
    <div class="page-wraper">
        <!--template buy button-->
        <div class="buy-btn-wrap">
            <div class="buy-btn-list">
                <a href="javascript:;" id="all-demo-open" class="all-demos-view">All Demo</a>
                <a href="https://themeforest.net/item/job-board-html-template/38681133" class="buy-now-btn">
                    <i class="fas fa-cart-plus"></i>Buy NoW
                </a>
            </div>
        </div>

        @include('layouts.menu')

        <!-- CONTENT START -->
        <div class="page-content">

            @if (URL::current() == route('home'))
                @include('layouts.slider')
            @endif

            @yield('content')
        </div>
        <!-- CONTENT END -->

        <!-- FOOTER START -->
        <footer class="footer-light">
            <div class="container">

                <!-- NEWS LETTER SECTION START -->
                <div class="ftr-nw-content">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="ftr-nw-title">
                                Join our email subscription now to get updates
                                on new jobs and notifications.
                            </div>
                        </div>
                        <div class="col-md-7">
                            <form>
                                <div class="ftr-nw-form">
                                    <input name="news-letter" class="form-control" placeholder="Enter Your Email"
                                        type="text">
                                    <button class="ftr-nw-subcribe-btn">Subscribe Now</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- NEWS LETTER SECTION END -->
                <!-- FOOTER BLOCKES START -->
                <div class="footer-top">
                    <div class="row">

                        <div class="col-lg-3 col-md-12">

                            <div class="widget widget_about">
                                <div class="logo-footer clearfix">
                                    <a href="index.html"><img src="{{ asset('assets/images/logo-light-2.png') }}"
                                            alt=""></a>
                                </div>
                                <p>Many desktop publishing packages and web page editors now.</p>
                                <ul class="ftr-list">
                                    <li>
                                        <p><span>Address :</span>65 Sunset CA 90026, USA </p>
                                    </li>
                                    <li>
                                        <p><span>Email :</span>example@max.com</p>
                                    </li>
                                    <li>
                                        <p><span>Call :</span>555-555-1234</p>
                                    </li>
                                </ul>
                            </div>

                        </div>

                        <div class="col-lg-9 col-md-12">
                            <div class="row">

                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <div class="widget widget_services ftr-list-center">
                                        <h3 class="widget-title">For Candidate</h3>
                                        <ul>
                                            <li><a href="dashboard.html">User Dashboard</a></li>
                                            <li><a href="dash-resume-alert.html">Alert resume</a></li>
                                            <li><a href="candidate-grid.html">Candidates</a></li>
                                            <li><a href="blog-list.html">Blog List</a></li>
                                            <li><a href="blog-single.html">Blog single</a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <div class="widget widget_services ftr-list-center">
                                        <h3 class="widget-title">For Employers</h3>
                                        <ul>
                                            <li><a href="dash-post-job.html">Post Jobs</a></li>
                                            <li><a href="blog-grid.html">Blog Grid</a></li>
                                            <li><a href="contact.html">Contact</a></li>
                                            <li><a href="job-list.html">Jobs Listing</a></li>
                                            <li><a href="job-detail.html">Jobs details</a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <div class="widget widget_services ftr-list-center">
                                        <h3 class="widget-title">Helpful Resources</h3>
                                        <ul>
                                            <li><a href="faq.html">FAQs</a></li>
                                            <li><a href="employer-detail.html">Employer detail</a></li>
                                            <li><a href="dash-my-profile.html">Profile</a></li>
                                            <li><a href="error-404.html">404 Page</a></li>
                                            <li><a href="pricing.html">Pricing</a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <div class="widget widget_services ftr-list-center">
                                        <h3 class="widget-title">Quick Links</h3>
                                        <ul>
                                            <li><a href="index.html">Home</a></li>
                                            <li><a href="about-1.html">About us</a></li>
                                            <li><a href="dash-bookmark.html">Bookmark</a></li>
                                            <li><a href="job-grid.html">Jobs</a></li>
                                            <li><a href="employer-list.html">Employer</a></li>
                                        </ul>
                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>
                </div>
                <!-- FOOTER COPYRIGHT -->
                <div class="footer-bottom">

                    <div class="footer-bottom-info">

                        <div class="footer-copy-right">
                            <span class="copyrights-text">Copyright © 2023 by thewebmax All Rights Reserved.</span>
                        </div>
                        <ul class="social-icons">
                            <li><a href="javascript:void(0);" class="fab fa-facebook-f"></a></li>
                            <li><a href="javascript:void(0);" class="fab fa-twitter"></a></li>
                            <li><a href="javascript:void(0);" class="fab fa-instagram"></a></li>
                            <li><a href="javascript:void(0);" class="fab fa-youtube"></a></li>
                        </ul>

                    </div>

                </div>

            </div>

        </footer>
        <!-- FOOTER END -->

        <!-- BUTTON TOP START -->
        <button class="scroltop">
            <span class="fa fa-angle-up  relative" id="btn-vibrate"></span>
        </button>

    </div>

    <!-- JAVASCRIPT  FILES ========================================= -->
    <script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script><!-- JQUERY.MIN JS -->
    <script src="{{ asset('assets/js/popper.min.js') }}"></script><!-- POPPER.MIN JS -->
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script><!-- BOOTSTRAP.MIN JS -->
    <script src="{{ asset('assets/js/magnific-popup.min.js') }}"></script><!-- MAGNIFIC-POPUP JS -->
    <script src="{{ asset('assets/js/waypoints.min.js') }}"></script><!-- WAYPOINTS JS -->
    <script src="{{ asset('assets/js/counterup.min.js') }}"></script><!-- COUNTERUP JS -->
    <script src="{{ asset('assets/js/waypoints-sticky.min.js') }}"></script><!-- STICKY HEADER -->
    <script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script><!-- MASONRY  -->
    <script src="{{ asset('assets/js/imagesloaded.pkgd.min.js') }}"></script><!-- MASONRY  -->
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script><!-- OWL  SLIDER  -->
    <script src="{{ asset('assets/js/theia-sticky-sidebar.js') }}"></script><!-- STICKY SIDEBAR  -->
    <script src="{{ asset('assets/js/lc_lightbox.lite.js') }}"></script><!-- IMAGE POPUP -->
    <script src="{{ asset('assets/js/bootstrap-select.min.js') }}"></script><!-- Form js -->
    <script src="{{ asset('assets/js/dropzone.js') }}"></script><!-- IMAGE UPLOAD  -->
    <script src="{{ asset('assets/js/jquery.scrollbar.js') }}"></script><!-- scroller -->
    <script src="{{ asset('assets/js/bootstrap-datepicker.js') }}"></script><!-- scroller -->
    <script src="{{ asset('assets/js/jquery.dataTables.min.js') }}"></script><!-- Datatable -->
    <script src="{{ asset('assets/js/dataTables.bootstrap5.min.js') }}"></script><!-- Datatable -->
    <script src="{{ asset('assets/js/chart.js') }}"></script><!-- Chart -->
    <script src="{{ asset('assets/js/anm.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap-slider.min.js') }}"></script><!-- Price range slider -->
    <script src="{{ asset('assets/js/swiper-bundle.min.js') }}"></script><!-- Swiper JS -->
    <script src="{{ asset('assets/js/custom.js') }}"></script><!-- CUSTOM FUCTIONS  -->
    <script src="{{ asset('assets/js/switcher.js') }}"></script><!-- SHORTCODE FUCTIONS  -->


    <!-- STYLE SWITCHER  ======= -->
    <div class="styleswitcher">

        <div class="switcher-btn-bx">
            <a class="switch-btn">
                <span class="fa fa-cog fa-spin"></span>
            </a>
        </div>

        <div class="styleswitcher-inner">

            <h6 class="switcher-title">Color Skin</h6>
            <ul class="color-skins">
                <li><a class="theme-skin skin-1" href="index-4a39b.html?theme=css/skin/skin-1"></a></li>
                <li><a class="theme-skin skin-2" href="index-461e7.html?theme=css/skin/skin-2"></a></li>
                <li><a class="theme-skin skin-3" href="index-4cce5.html?theme=css/skin/skin-3"></a></li>
                <li><a class="theme-skin skin-4" href="index-413f7.html?theme=css/skin/skin-4"></a></li>
                <li><a class="theme-skin skin-5" href="index-419a6.html?theme=css/skin/skin-5"></a></li>
                <li><a class="theme-skin skin-6" href="index-4fe5c.html?theme=css/skin/skin-6"></a></li>
                <li><a class="theme-skin skin-7" href="index-4ab47.html?theme=css/skin/skin-7"></a></li>
                <li><a class="theme-skin skin-8" href="index-45f8d.html?theme=css/skin/skin-8"></a></li>

            </ul>

        </div>
    </div>
    <!-- STYLE SWITCHER END ==== -->
</body>

</html>
