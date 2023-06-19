@extends('layouts.main')
@section('content')
    <div class="section-full py-5">
        <div class="container">
            <div class="section-content">
                <div class="row d-flex justify-content-center">

                    <div class="col-lg-3 col-md-3">
                        <div class="video-section-first" style="background-image: url({{ asset('data/1.jpeg') }});">
                            <a href="https://www.youtube.com/watch?v=aIQvj-l5W2s" class="mfp-video play-now-video">
                                <i class="icon feather-play"></i>
                                <span class="ripple"></span>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3">
                        <div class="video-section-first" style="background-image: url({{ asset('data/kr.webp') }});">
                            <a href="https://www.youtube.com/watch?v=eVFMDMpY36o" class="mfp-video play-now-video">
                                <i class="icon feather-play"></i>
                                <span class="ripple"></span>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3">
                        <div class="video-section-first" style="background-image: url({{ asset('data/japan.jpg') }});">
                            <a href="https://www.youtube.com/watch?v=g7V9V7UPUI8" class="mfp-video play-now-video">
                                <i class="icon feather-play"></i>
                                <span class="ripple"></span>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3">
                        <div class="video-section-first" style="background-image: url({{ asset('data/th.jpg') }});">
                            <a href="https://www.youtube.com/watch?v=vNQR3ixE8AE" class="mfp-video play-now-video">
                                <i class="icon feather-play"></i>
                                <span class="ripple"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section-full p-t120 p-b90 site-bg-gray twm-how-t-get-wrap7">
        <div class="container">
            <div class="twm-how-t-get-section">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-12">
                        <div class="twm-how-t-get-section-left">
                            <div class="section-head left wt-small-separator-outer">
                                <div class="wt-small-separator site-text-primary">
                                    <div>
                                        License No.123/2018
                                    </div>
                                </div>
                                <h2 class="wt-title">
                                    Gold Silver Diamond Co.,Ltd
                                </h2>
                                <p style="text-align: justify">
                                    Gold Silver Diamond Co.,Ltd Company Limited is an recruitment agency which holds the
                                    recruitment license issued in Myanmar. Our company works in consonance with the
                                    employers to find out the right candidates for their companies. As we have MOEAF
                                    Certification, the clients never doubt upon our authentication and rely upon our
                                    services. We maintain a sense of professionalism and transparency with our clients and
                                    let them know everything about the status of the recruitment process. At Skills
                                    Provision we aim to get the right people into the right jobs. By utilising modern
                                    technology we are able to plug global manpower shortages.
                                </p>
                            </div>
                            <div class="twm-how-t-get-bottom">
                                <a href="tel:09 773 226 274" class="site-button">
                                    09 773 226 274
                                </a>
                                <div class="twm-left-icon-bx">
                                    <div class="twm-left-icon-media site-bg-primary">
                                        <i class="flaticon-bell site-text-white"></i>
                                    </div>
                                    <div class="twm-left-icon-content">
                                        <h4 class="icon-title">
                                            Send Mail
                                        </h4>
                                        <p>
                                            <a href="mailto:goldsilverdiamond2018@gmail.com">
                                                goldsilverdiamond2018@gmail.com
                                            </a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-xl-6 col-lg-6 col-md-12">
                        <div class="twm-how-t-get-section-right">
                            <div class="twm-media">
                                <img src="{{ asset('data/md.jpg') }}" alt="#">
                            </div>

                            <div class="twm-left-img-bx bounce">
                                <div class="twm-left-img-media">
                                    <img src="{{ asset('data/1.jpg') }}" alt="#" style="width: 200px;">
                                </div>
                                <div class="twm-left-img-content">
                                    <h4 class="icon-title">
                                        Gold Silver Diamond
                                    </h4>
                                    <p>
                                        License No.123/2018
                                    </p>
                                </div>
                            </div>

                            <div class="twm-profile-card bounce2">
                                <div class="twm-profile-pic">
                                    <img src="{{ asset('data/3.jpg') }}" alt="#">
                                </div>
                                <div class="twm-profile-info">
                                    <h4 class="twm-profile-name">
                                        Gold Silver Diamond
                                    </h4>
                                    <div class="twm-profile-position">
                                        Overseas Employment Agency
                                    </div>
                                    <a class="site-button-link underline" href="{{ route('contact.index') }}">
                                        Contact
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section-full">
        <div class="container">
            <div class="section-content">
                <div class="row d-flex justify-content-center">

                    <div class="col-md-12 col-lg-12 col-sm-12">
                        <center>
                            <h3>
                                LIST OF WORKERS SENT ABROAD BY
                                GOLD SILVER DIAMOND CO.,LTD
                                UNDER THE MOU SYSTEM
                            </h3>
                        </center>
                        <br>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <table class="table table-hover table-bordered">
                            <thead>
                                <tr class="text-center" style="background-color: #FFBF00;">
                                    <th scope="col" colspan="2">
                                        LIST WORKERS SENT TO JORDAN
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="text-center">
                                    <td scope="row" style="background: #FFCF40;">
                                        2018
                                    </td>
                                    <td>
                                        421 workers
                                    </td>
                                </tr>

                                <tr class="text-center">
                                    <td scope="row" style="background: #FFCF40;">
                                        2021
                                    </td>
                                    <td>
                                        235 workers
                                    </td>
                                </tr>

                                <tr class="text-center">
                                    <td scope="row" style="background: #FFCF40;">
                                        2022
                                    </td>
                                    <td>
                                        415 workers
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <table class="table table-hover table-bordered">
                            <thead>
                                <tr class="text-center" style="background-color: #B5B7BB;">
                                    <th scope="col" colspan="2">
                                        LIST WORKERS SENT MALAYSIA
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="text-center">
                                    <td scope="row" style="background: #CCCCCC;">
                                        2018
                                    </td>
                                    <td>
                                        55 workers
                                    </td>
                                </tr>

                                <tr class="text-center">
                                    <td scope="row" style="background: #CCCCCC;">
                                        2019
                                    </td>
                                    <td>
                                        50 workers
                                    </td>
                                </tr>

                                <tr class="text-center">
                                    <td scope="row" style="background: #CCCCCC;">
                                        2020
                                    </td>
                                    <td>
                                        45 workers
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <table class="table table-hover table-bordered">
                            <thead>
                                <tr class="text-center" style="background-color: #D8DCE2;">
                                    <th scope="col" colspan="2">
                                        LIST WORKERS SENT THAILAND
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="text-center">
                                    <td scope="row" style="background: #C3CEE1;">
                                        2022
                                    </td>
                                    <td>
                                        250+ 100 workers
                                    </td>
                                </tr>

                                <tr class="text-center">
                                    <td scope="row" style="background: #C3CEE1;">
                                        2019
                                    </td>
                                    <td>
                                        50 workers
                                    </td>
                                </tr>

                                <tr class="text-center">
                                    <td scope="row" style="background: #C3CEE1;">
                                        2020
                                    </td>
                                    <td>
                                        45 workers
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="twm-j-ofr-wrap">
            <div class="twm-j-ofr-content" style="background-image: url({{ asset('assets/images/home-7/ofr-bg.jpg') }});">
                <div class="row">
                    <div class="col-lg-7 col-md-12">

                        <div class="twm-j-ofr-map-content">
                            <!-- TITLE START-->
                            <div class="section-head left wt-small-separator-outer">
                                <h2 class="wt-title">We also have <span class="site-text-primary">job offers</span> in
                                    other countries</h2>
                            </div>
                            <!-- TITLE END-->

                            <div class="twm-j-ofr-map-list">
                                <ul>
                                    <li>
                                        <div class="flag-list">
                                            <span>
                                                <img src="{{ asset('data/flag/jordan.png') }}" alt="#">
                                            </span>
                                            <h4 class="flat-name">
                                                JORDAN
                                            </h4>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="flag-list">
                                            <span>
                                                <img src="{{ asset('data/flag/malaysia.png') }}" alt="#">
                                            </span>
                                            <h4 class="flat-name">
                                                MALAYSIA
                                            </h4>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="flag-list">
                                            <span>
                                                <img src="{{ asset('data/flag/thailand_flag.png') }}" alt="#">
                                            </span>
                                            <h4 class="flat-name">
                                                THAILAND
                                            </h4>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="flag-list">
                                            <span>
                                                <img src="{{ asset('data/flag/japan.png') }}" alt="#">
                                            </span>
                                            <h4 class="flat-name">
                                                JAPAN
                                            </h4>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="flag-list">
                                            <span>
                                                <img src="{{ asset('data/flag/south-korea.png') }}" alt="#">
                                            </span>
                                            <h4 class="flat-name">
                                                KOREA
                                            </h4>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                            <div class="twm-read-more">
                                <a href="{{ route('contact.index') }}" class="site-button">
                                    More Detail
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-12">
                        <div class="twm-j-ofr-map">
                            <div class="twm-media">
                                <img src="{{ asset('assets/images/home-7/map-img.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="page-content py-5">
        <div class="section-full site-bg-white">
            <div class="container">

                <div class="wt-separator-two-part">
                    <div class="row wt-separator-two-part-row">
                        <div class="col-xl-6 col-lg-6 col-md-12 wt-separator-two-part-left">
                            <div class="section-head left wt-small-separator-outer">
                                <div class="wt-small-separator site-text-primary">
                                    <div>Jobs at a glance</div>
                                </div>
                                <h2 class="wt-title">
                                    Apply Now
                                </h2>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-12 wt-separator-two-part-right text-right">
                            <a href="job-list.html" class=" site-button">View All Jobs</a>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="row">
                            @foreach ($jobs as $job)
                                <div class="col-lg-4 col-md-12 m-b30">
                                    <div class="twm-jobs-grid-style1">
                                        <div class="twm-media">
                                            <img src="{{ $job->photo }}" alt="#">
                                        </div>
                                        <div class="twm-jobs-category green">
                                            <span class="twm-bg-green">
                                                Job available
                                            </span>
                                        </div>
                                        <div class="twm-mid-content">
                                            <a href="#" class="twm-job-title">
                                                <h4>
                                                    {{ $job->title ?? '' }}
                                                </h4>
                                            </a>
                                            <p class="twm-job-address">
                                                {{ $job->country->country ?? '' }}
                                            </p>
                                        </div>

                                        <div class="twm-right-content">
                                            <a href="{{ route('contact.index') }}"
                                                class="twm-jobs-browse site-text-primary">
                                                Contact Us
                                            </a>

                                            <a href="{{ route('cv.index') }}" class="twm-jobs-browse site-text-primary">
                                                Submit CV
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section-full">
        <div class="container">
            <div class="section-content">
                <div class="row d-flex justify-content-center">

                    <div class="col-lg-12 col-md-12">
                        <center>
                            <div class="column mcb-column mcb-item-04q251sx2 one column_column">
                                <div class="column_attr clearfix align_center animate fadeInUp" data-anim-type="fadeInUp"
                                    style="background-image:url('http://www.thefirstgoodmangroup.com/wp-content/uploads/2017/04/home_elearning_sep.png');background-repeat:no-repeat;background-position:center bottom;">
                                    <strong>
                                        <h3 style="color:#00CE55;">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">
                                                    Our Sending candidate &
                                                </font>
                                            </font>
                                            <span style="color:#f7931E;">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">
                                                        Recruitment Activities
                                                    </font>
                                                </font>
                                            </span>
                                        </h3>
                                    </strong>
                                </div>
                            </div>
                        </center>


                        <div class="cabdidate-de-info">
                            <div class="twm-two-part-section">
                                <div class="row">

                                    @foreach ($activities as $activity)
                                        <div class="col-lg-12 col-md-12">
                                            <h4 class="twm-s-title">
                                                {{ $activity->title ?? '' }}
                                            </h4>
                                            <div class="tw-sidebar-gallery">
                                                <ul>
                                                    @php
                                                        $images = explode(',', $activity->images);
                                                    @endphp
                                                    @foreach ($images as $image)
                                                        <li>
                                                            <div class="tw-service-gallery-thumb">
                                                                <a class="elem" href="{{ $image }}"
                                                                    title="Title 1" data-lcl-author=""
                                                                    data-lcl-thumb="{{ $image }}">
                                                                    <img src="{{ $image }}" alt=""
                                                                        style="width: 100%; height: 250px; background-size: center; object-fit: cover;">
                                                                    <i class="fa fa-file-image"></i>
                                                                </a>
                                                            </div>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
