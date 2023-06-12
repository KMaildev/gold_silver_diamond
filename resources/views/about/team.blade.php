@extends('layouts.main')
@section('title', 'Our Vision, Mission & Values')
@section('content')
    <div class="section-full p-t120 p-b90 site-bg-white twm-candidate-h-page7-wrap pos-relative ">
        <div class="container">
            <!-- TITLE START-->
            <div class="section-head center wt-small-separator-outer">
                <div class="wt-small-separator site-text-primary">
                    <div>Our Team</div>
                </div>
                <h2 class="wt-title">
                    Meet Professional Team
                </h2>
            </div>
            <!-- TITLE END-->
        </div>

        <div class="container-fluid">
            <div class="section-content">
                <div class="twm-candidate-h-page7">
                    <div class="row  m-b30">
                        @foreach ($teams as $team)
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                <div class="twm-candidates-grid-h-page7 m-b30">
                                    <div class="twm-top-section-content">
                                        <div class="twm-media">
                                            <div class="twm-media-pic">
                                                <img src="{{ $team->photo }}" alt="#">
                                            </div>
                                        </div>
                                        <div class="twm-mid-content">
                                            <div class="twm-candidates-tag">
                                                <span>
                                                    Valued Member
                                                </span>
                                            </div>
                                            <a href="#" class="twm-job-title">
                                                <h4>
                                                    {{ $team->name ?? '' }}
                                                </h4>
                                            </a>
                                            <p>
                                                {{ $team->position ?? '' }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
