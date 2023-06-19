@extends('layouts.main')
@section('content')
    <div class="section-full p-t120 p-b90 site-bg-white twm-how-it-work-area">
        <div class="container">
            <!-- TITLE START-->
            <div class="section-head center wt-small-separator-outer">
                <div class="wt-small-separator site-text-primary">
                    <div>Working Process</div>
                </div>
                <h2 class="wt-title">How It Works</h2>
            </div>

            <!-- TITLE END-->
            <div class="twm-how-it-work-section">
                <div class="row">
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="twm-w-process-steps">
                            <span class="twm-large-number">01</span>
                            <div class="twm-w-pro-top bg-clr-sky">
                                <div class="twm-media">
                                    <span><img src="{{ asset('assets/images/work-process/icon1.png') }}"
                                            alt="icon1"></span>
                                </div>
                                <h4 class="twm-title">Register<br>Your Account</h4>
                            </div>
                            <p>You need to create an account to find the best and preferred job.</p>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="twm-w-process-steps">
                            <span class="twm-large-number">02</span>
                            <div class="twm-w-pro-top bg-clr-pink">
                                <div class="twm-media">
                                    <span><img src="{{ asset('assets/images/work-process/icon2.png') }}"
                                            alt="icon1"></span>
                                </div>
                                <h4 class="twm-title">Apply <br>
                                    For Dream Job</h4>
                            </div>
                            <p>You need to create an account to find the best and preferred job.</p>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="twm-w-process-steps">
                            <span class="twm-large-number">03</span>
                            <div class="twm-w-pro-top bg-clr-green">
                                <div class="twm-media">
                                    <span><img src="{{ asset('assets/images/work-process/icon3.png') }}"
                                            alt="icon1"></span>
                                </div>
                                <h4 class="twm-title">Submit <br>Your Resume</h4>
                            </div>
                            <p>You need to create an account to find the best and preferred job.</p>
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-xl-12 col-lg-12 col-sm-12 py-5">
                <div class="contact-form">
                    <div class="title">
                        <h2>
                            APPLY YOUR CV
                        </h2>
                        <p>
                            Fill your informations and upload your CV.
                        </p>
                    </div>
                    <form autocomplete="off" method="POST" action="{{ route('cv.store') }}" enctype="multipart/form-data"
                        id="create-form" novalidate="novalidate">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label>Name*</label>
                                    <input type="text" name="name" class="form-control " value="">
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label>Phone</label>
                                    <input type="text" name="phone" class="form-control " value="">
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Additional Note</label>
                                    <textarea class="form-control" rows="5" name="additional_note"></textarea>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="choose-img">
                                    <label for="img">Select your CV to upload</label>
                                    <br>
                                    <input type="file" name="attachment_file" accept=".doc, .docx, .pdf"
                                        class="form-control-file" required>
                                </div>
                            </div>

                            <div class="col-md-12 py-4">
                                <button type="submit" class="site-button">Submit Now</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
