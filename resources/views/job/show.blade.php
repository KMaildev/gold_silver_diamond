@extends('layouts.main')
@section('title', 'Job')
@section('content')
    <div class="page-content">
        <div class="section-full p-t120  p-b90 site-bg-white">
            <div class="container">
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
@endsection
