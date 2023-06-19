<!DOCTYPE html>
<html lang="en">

<head>
    <!-- META -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="Gold Silver Diamond Co.,Ltd" />
    <meta name="author" content="Gold Silver Diamond Co.,Ltd" />
    <meta name="robots" content="Gold Silver Diamond Co.,Ltd" />
    <meta name="description" content="Gold Silver Diamond Co.,Ltd" />

    <!-- FAVICONS ICON -->
    <link rel="icon" href="{{ asset('data/gsd.png') }}" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('data/gsd.png') }}" />

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
                <a target="_blank" href="https://www.facebook.com/Gold-Silver-Diamond-CoLtd-318034715415480"
                    id="all-demo-open" class="all-demos-view">
                    <i class="fab fa-facebook-f"></i>
                    Facebook
                </a>
                <a href="#" class="buy-now-btn">
                    <i class="fab fa-youtube"></i>
                    Youtube
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
                        <div class="col-md-10">
                            <div class="ftr-nw-title">
                                If you have any queries about recruitments, vacancies, or anything else, our team is
                                ready to response all your queries.
                            </div>
                        </div>
                        <div class="col-md-2">
                            <form>
                                <div class="ftr-nw-form">
                                    <a href="{{ route('contact.index') }}" class="ftr-nw-subcribe-btn">
                                        Contact Us
                                    </a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- NEWS LETTER SECTION END -->
                <!-- FOOTER BLOCKES START -->
                <div class="footer-top">
                    <div class="row">

                        <div class="col-lg-4 col-md-12">
                            <div class="widget widget_about">
                                <h3 class="widget-title">
                                    Head Office
                                </h3>
                                <p>
                                    Alternatively, you may contact us by filling up the contact form. Our team will
                                    response you shortly.
                                </p>

                                <ul class="ftr-list">
                                    <li>
                                        <p>
                                            <span>Address :</span>
                                            No.(478), Kyan Sit Thar Street, Ward No.(20), Shwe Paukkan, North Okkalapa
                                            Township,
                                            Yangon, Myanmar.
                                        </p>
                                    </li>
                                    <li>
                                        <p>
                                            <span>Email :</span>
                                            shweminthamee2013@gmail.com
                                        </p>
                                    </li>
                                    <li>
                                        <p>
                                            <span>Call :</span>
                                            09-8617090,
                                            09 428617090,
                                            09 784847474,
                                            09-776453854
                                        </p>
                                    </li>
                                </ul>

                            </div>

                        </div>

                        <div class="col-lg-8 col-md-12">
                            <div class="row">

                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="widget widget_services ftr-list-center">
                                        <h3 class="widget-title">
                                            Quick Links
                                        </h3>
                                        <ul>
                                            <li>
                                                <a href="{{ route('about.index') }}">
                                                    About of Company
                                                </a>
                                            </li>

                                            <li>
                                                <a href="{{ route('ceo_message') }}">
                                                    President's Message
                                                </a>
                                            </li>

                                            <li>
                                                <a href="{{ route('statement') }}">
                                                    Vision, Mission & Values
                                                </a>
                                            </li>

                                            <li>
                                                <a href="{{ route('team') }}">
                                                    Professional Team
                                                </a>
                                            </li>

                                            <li>
                                                <a href="{{ route('activities.index') }}">
                                                    Our Activities
                                                </a>
                                            </li>

                                            <li>
                                                <a href="{{ route('cv.index') }}">
                                                    Submit CV
                                                </a>
                                            </li>

                                            <li>
                                                <a href="{{ route('employer.index') }}">
                                                    Employer Form
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="widget widget_services ftr-list-center">
                                        <h3 class="widget-title">
                                            Sending Country
                                        </h3>
                                        <ul>
                                            @foreach ($countries as $country)
                                                <li>
                                                    <a href="{{ route('job.show', $country->id) }}">
                                                        {{ $country->country ?? '' }}
                                                    </a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="widget widget_services ftr-list-center">
                                        <h3 class="widget-title">
                                            Facebook
                                        </h3>
                                        <div id="fb-root"></div>
                                        <script async defer crossorigin="anonymous"
                                            src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v14.0&appId=210045094312905&autoLogAppEvents=1"
                                            nonce="PosYNXjc"></script>

                                        <div class="fb-page"
                                            data-href="https://www.facebook.com/Gold-Silver-Diamond-CoLtd-318034715415480"
                                            data-tabs="timeline" data-width="" data-height="200"
                                            data-small-header="false" data-adapt-container-width="true"
                                            data-hide-cover="false" data-show-facepile="true">
                                            <blockquote
                                                cite="https://www.facebook.com/Gold-Silver-Diamond-CoLtd-318034715415480"
                                                class="fb-xfbml-parse-ignore"><a
                                                    href="https://www.facebook.com/Gold-Silver-Diamond-CoLtd-318034715415480">Facebook</a>
                                            </blockquote>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="footer-bottom">
                    <div class="footer-bottom-info">
                        <div class="footer-copy-right">
                            <span class="copyrights-text">
                                Copyright © 2023 Gold Silver Diamond Co.,Ltd. All Rights Reserved
                            </span>
                        </div>
                        <ul class="social-icons">
                            <li>
                                <a href="https://www.facebook.com/Gold-Silver-Diamond-CoLtd-318034715415480"
                                    target="_blank" class="fab fa-facebook-f"></a>
                            </li>
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
</body>

</html>
