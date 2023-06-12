@extends('layouts.main')
@section('title', 'About of Our Company')
@section('content')

    <div class="section-full p-t120 p-b120 twm-explore-area bg-cover "
        style="background-image: url({{ asset('assets/images/background/bg-1.jpg') }});">
        <div class="container">

            <div class="section-content">
                <div class="row">

                    <div class="col-lg-4 col-md-12">
                        <div class="twm-explore-media-wrap">
                            <div class="twm-media">
                                <img src="{{ asset('data/md.jpg') }}" alt="" style="border-radius: 2%;">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-8 col-md-12">
                        <div class="twm-explore-content-outer">
                            <div class="twm-explore-content">

                                <div class="twm-l-line-1"></div>
                                <div class="twm-l-line-2"></div>

                                <div class="twm-r-circle-1"></div>
                                <div class="twm-r-circle-2"></div>

                                <div class="twm-title-small">
                                    Gold Silver Diamond Co.,Ltd
                                </div>
                                <div class="twm-title-large">
                                    <h2>
                                        President's Message
                                    </h2>
                                    <p style="text-align: justify; font-size: 18px;">
                                        Gold Silver Diamond Co.,Ltd is a leading recruiting agency and overseas employment
                                        promoter in Myanmar. We focus on working with overseas employers to identify,
                                        recruit and place suitable candidates. We run a highly professional organization
                                        that maintains a network of well qualified candidates across Myanmar. My team and I
                                        look forward to continuing to deliver positive results for our customers and
                                        satisfying them.
                                    </p>

                                    <p>
                                        *****
                                        <br>
                                        Managing Director
                                    </p>
                                </div>
                                <div class="twm-upload-file">
                                    <a href="{{ route('contact.index') }}" class="site-button">
                                        Contact Us
                                        <i class="feather-upload"></i>
                                    </a>
                                </div>


                            </div>
                            <div class="twm-bold-circle-right"></div>
                            <div class="twm-bold-circle-left"></div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>


    <div class="section-full py-5 site-bg-gray">
        <div class="container">
            <div class="section-content">
                <div class="twm-blog-post-1-outer-wrap">
                    <div class="owl-carousel twm-la-home-blog owl-btn-bottom-center">
                        <div class="item">
                            <div class="blog-post twm-blog-post-1-outer">
                                <div class="wt-post-media">
                                    <img src="{{ asset('data/1.jpg') }}" alt="">
                                </div>
                                <div class="wt-post-info">
                                    <div class="wt-post-meta ">
                                        <ul>
                                            <li class="post-date">Jun 12, 2023</li>
                                            <li class="post-author">By
                                                <a href="#">
                                                    Gold Silver Diamond
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="wt-post-title ">
                                        <h4 class="post-title">
                                            <a href="#">
                                                Our Team
                                            </a>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <!--Block two-->
                            <div class="blog-post twm-blog-post-1-outer">
                                <div class="wt-post-media">
                                    <img src="{{ asset('data/3.jpg') }}" alt="">
                                </div>
                                <div class="wt-post-info">
                                    <div class="wt-post-meta ">
                                        <ul>
                                            <li class="post-date">Jun 12, 2023</li>
                                            <li class="post-author">By
                                                <a href="#">
                                                    Gold Silver Diamond
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="wt-post-title ">
                                        <h4 class="post-title">
                                            <a href="#">
                                                Group Activities
                                            </a>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <!--Block three-->
                            <div class="blog-post twm-blog-post-1-outer">
                                <div class="wt-post-media">
                                    <img src="{{ asset('data/4.jpg') }}" alt="">
                                </div>
                                <div class="wt-post-info">
                                    <div class="wt-post-meta ">
                                        <ul>
                                            <li class="post-date">Jun 12, 2023</li>
                                            <li class="post-author">By
                                                <a href="#">
                                                    Gold Silver Diamond
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="wt-post-title ">
                                        <h4 class="post-title">
                                            Professional Team
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
