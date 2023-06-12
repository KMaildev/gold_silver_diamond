@extends('layouts.main')
@section('title', 'Contact Us')
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

                    <div class="col-lg-12 col-md-12 py-5">
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
                                                                <a class="elem" href="{{ $image }}" title="Title 1"
                                                                    data-lcl-author="" data-lcl-thumb="{{ $image }}">
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
