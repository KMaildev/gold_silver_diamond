@extends('layouts.main')
@section('title', 'Contact Us')
@section('content')
    <div class="page-content">
        <div class="wt-bnr-inr overlay-wraper bg-center"
            style="background-image:url({{ asset('assets/images/banner/1.jpg') }});">
            <div class="overlay-main site-bg-white opacity-01"></div>
            <div class="container">
                <div class="wt-bnr-inr-entry">
                    <div class="banner-title-outer">
                        <div class="banner-title-name">
                            <h2 class="wt-title">Contact Us</h2>
                        </div>
                    </div>

                    <div>
                        <ul class="wt-breadcrumb breadcrumb-style-2">
                            <li>
                                <a href="{{ route('home') }}">Home</a>
                            </li>
                            <li>Contact Us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- INNER PAGE BANNER END -->

        <!-- CONTACT FORM -->
        <div class="section-full twm-contact-one">
            <div class="section-content">
                <div class="container">

                    <!-- CONTACT FORM-->
                    <div class="contact-one-inner">
                        <div class="row">

                            <div class="col-lg-6 col-md-12">
                                <div class="contact-form-outer">

                                    <!-- TITLE START-->
                                    <div class="section-head left wt-small-separator-outer">
                                        <h2 class="wt-title">Send Us a Message</h2>
                                        <p>
                                            Company Bringing Foreigners to Work in the Country: Gold Silver Diamond Co.,Ltd
                                        </p>
                                    </div>
                                    <!-- TITLE END-->

                                    <form class="cons-contact-form" method="post" action="{{ route('contact.store') }}">
                                        @csrf
                                        <div class="row">

                                            <div class="col-lg-6 col-md-6">
                                                <div class="form-group mb-3">
                                                    <input name="name" type="text" required class="form-control"
                                                        placeholder="Name">
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-md-6">
                                                <div class="form-group mb-3">
                                                    <input name="email" type="text" class="form-control" required
                                                        placeholder="Email">
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-md-6">
                                                <div class="form-group mb-3">
                                                    <input name="phone" type="text" class="form-control" required
                                                        placeholder="Phone">
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-md-6">
                                                <div class="form-group mb-3">
                                                    <input name="subject" type="text" class="form-control" required
                                                        placeholder="Subject">
                                                </div>
                                            </div>

                                            <div class="col-lg-12">
                                                <div class="form-group mb-3">
                                                    <textarea name="message" class="form-control" rows="3" placeholder="Message"></textarea>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <button type="submit" class="site-button">Submit Now</button>
                                            </div>

                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-12">
                                <div class="contact-info-wrap">

                                    <div class="contact-info">
                                        <div class="contact-info-section">

                                            <div class="c-info-column">
                                                <div class="c-info-icon"><i class=" fas fa-map-marker-alt"></i></div>
                                                <h3 class="twm-title">In the bay area?</h3>
                                                <p>1363-1385 Sunset Blvd Los Angeles, CA 90026, USA</p>
                                            </div>

                                            <div class="c-info-column">
                                                <div class="c-info-icon custome-size"><i class="fas fa-mobile-alt"></i>
                                                </div>
                                                <h3 class="twm-title">Feel free to contact us</h3>
                                                <p><a href="tel:+216-761-8331">+2 900 234 4241</a></p>
                                                <p><a href="tel:+216-761-8331">+2 900 234 3219</a></p>
                                            </div>

                                            <div class="c-info-column">
                                                <div class="c-info-icon"><i class="fas fa-envelope"></i></div>
                                                <h3 class="twm-title">Support</h3>
                                                <p>infohelp@gmail.com</p>
                                                <p>support12@gmail.com</p>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>


                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3818.678255002399!2d96.12395997422419!3d16.84231028395489!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c1951525f0a0ab%3A0x9896bdc061a99205!2sKMail%20Software%20Development%20Co.%2CLtd!5e0!3m2!1sen!2smm!4v1686561344852!5m2!1sen!2smm"
                        width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

            </div>
        </div>
    </div>
    <!-- CONTENT END -->
@endsection
