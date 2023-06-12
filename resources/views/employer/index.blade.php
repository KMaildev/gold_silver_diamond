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
                            Application Form
                        </h2>
                        <p>
                            Fill your informations
                        </p>
                    </div>

                    <form autocomplete="off" method="POST" action="{{ route('employer.store') }}" id="create-form">
                        @csrf
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <div class="form-group">
                                    <label for="nameInput" class="form-label text-black">Company Name</label>
                                    <input autocomplete="off" type="text"
                                        class="form-control @error('company_name') is-invalid @enderror"
                                        placeholder="Company Name" name="company_name" value="{{ old('company_name') }}">
                                    @error('company_name')
                                        <div class="help-block with-errors text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-xl-6 col-md-6 col-sm-12 col-lg-6 mb-3">
                                <div class="form-group">
                                    <label for="nameInput" class="form-label text-black">Type of Company</label>
                                    <input autocomplete="off" type="text"
                                        class="form-control @error('company_type') is-invalid @enderror"
                                        placeholder="Type Of Company" name="company_type" value="{{ old('company_type') }}">
                                    @error('company_type')
                                        <div class="help-block with-errors text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-xl-6 col-md-6 col-sm-12 col-lg-6 mb-3">
                                <div class="form-group">
                                    <label for="nameInput" class="form-label text-black">Company Email Address</label>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror"
                                        placeholder="Company Email Address" name="email" value="{{ old('email') }}">
                                    @error('email')
                                        <div class="help-block with-errors text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-xl-6 col-md-6 col-sm-12 col-lg-6 mb-3">
                                <div class="form-group">
                                    <label for="nameInput" class="form-label text-black">Company Phone Number</label>
                                    <input autocomplete="off" type="text"
                                        class="form-control @error('phone') is-invalid @enderror"
                                        placeholder="Company Phone Number" name="phone" value="{{ old('phone') }}">
                                    @error('phone')
                                        <div class="help-block with-errors text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-xl-6 col-md-6 col-sm-12 col-lg-6 mb-3">
                                <div class="form-group">
                                    <label for="nameInput" class="form-label text-black">Company Website</label>
                                    <input autocomplete="off" type="text"
                                        class="form-control @error('website') is-invalid @enderror"
                                        placeholder="Company Website" name="website" value="{{ old('website') }}">
                                    @error('website')
                                        <div class="help-block with-errors text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-xl-12 col-md-12 col-sm-12 col-lg-12 mb-3">
                                <div class="form-group">
                                    <label for="nameInput" class="form-label text-black">Company Location</label>
                                    <input autocomplete="off" type="text"
                                        class="form-control @error('location') is-invalid @enderror"
                                        placeholder="Company Location" name="location" value="{{ old('location') }}">
                                    @error('location')
                                        <div class="help-block with-errors text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-xl-6 col-md-6 col-sm-12 col-lg-6 mb-3">
                                <div class="form-group">
                                    <label for="nameInput" class="form-label text-black">Job Category</label>
                                    <input autocomplete="off" type="text"
                                        class="form-control @error('job_category') is-invalid @enderror"
                                        placeholder="Job Category" name="job_category"
                                        value="{{ old('job_category') }}">
                                    @error('job_category')
                                        <div class="help-block with-errors text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-xl-6 col-md-6 col-sm-12 col-lg-6 mb-3">
                                <div class="form-group">
                                    <label for="nameInput" class="form-label text-black">Age Limit: 20-40</label>
                                    <input autocomplete="off" type="text"
                                        class="form-control @error('age_limit') is-invalid @enderror"
                                        placeholder="Age Limit: 20-40" name="age_limit" value="{{ old('age_limit') }}">
                                    @error('age_limit')
                                        <div class="help-block with-errors text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>


                            <div class="col-xl-12 col-md-12 col-lg-12 col-sm-12 mb-3">
                                <div class="form-group">
                                    <label for="nameInput" class="form-label text-black">Educational
                                        Requirement</label>
                                    <textarea class="form-control @error('educational_requirement') is-invalid @enderror" name="educational_requirement"
                                        placeholder="Educational Requirement">{{ old('educational_requirement') }}</textarea>
                                    @error('educational_requirement')
                                        <div class="help-block with-errors text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-xl-12 col-md-12 col-lg-12 col-sm-12 mb-3">
                                <div class="form-group">
                                    <label for="nameInput" class="form-label text-black">
                                        Working Experience Requirement
                                    </label>
                                    <textarea class="form-control @error('working_experience_requirement') is-invalid @enderror"
                                        name="working_experience_requirement" placeholder="Working Experience Requirement">{{ old('working_experience_requirement') }}</textarea>
                                    @error('working_experience_requirement')
                                        <div class="help-block with-errors text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-xl-12 col-md-12 col-lg-12 col-sm-12 mb-3">
                                <div class="form-group">
                                    <label for="nameInput" class="form-label text-black">Other Additional
                                        Requirement</label>
                                    <textarea class="form-control @error('other_additional_requirement') is-invalid @enderror"
                                        name="other_additional_requirement" placeholder="Other Additional Requirement">{{ old('other_additional_requirement') }}</textarea>
                                    @error('other_additional_requirement')
                                        <div class="help-block with-errors text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-xl-6 col-md-6 col-lg-6 col-sm-12 mb-3">
                                <div class="form-group">
                                    <label for="nameInput" class="form-label text-black">Estimate Salary Offer</label>
                                    <input autocomplete="off" type="text"
                                        class="form-control @error('estimate_salary_offer') is-invalid @enderror"
                                        placeholder="Estimate Salary Offer" name="estimate_salary_offer"
                                        value="{{ old('estimate_salary_offer') }}">
                                    @error('estimate_salary_offer')
                                        <div class="help-block with-errors text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>


                            <div class="col-xl-6 col-md-6 col-lg-6 col-sm-12 mb-3">
                                <div class="form-group">
                                    <label for="nameInput" class="form-label text-black">Other Allowance</label>
                                    <input autocomplete="off" type="text"
                                        class="form-control @error('other_allowance') is-invalid @enderror"
                                        placeholder="Other Allowance" name="other_allowance"
                                        value="{{ old('other_allowance') }}">
                                    @error('other_allowance')
                                        <div class="help-block with-errors text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>


                            <div class="col-xl-6 col-md-6 col-lg-6 col-sm-12 mb-3">
                                <div class="form-group">
                                    <label for="nameInput" class="form-label text-black">Gender: Male = 10, Female =
                                        5</label>
                                    <input autocomplete="off" type="text"
                                        class="form-control @error('gender') is-invalid @enderror"
                                        placeholder="Gender: Male = 10, Female = 5" name="gender"
                                        value="{{ old('gender') }}">
                                    @error('gender')
                                        <div class="help-block with-errors text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>


                            <div class="col-xl-6 col-md-6 col-lg-6 col-sm-12 mb-3">
                                <div class="form-group">
                                    <label for="nameInput" class="form-label text-black">Interview Type</label>
                                    <input autocomplete="off" type="text"
                                        class="form-control @error('interview_type') is-invalid @enderror"
                                        placeholder="Interview Type: Online" name="interview_type"
                                        value="{{ old('interview_type') }}">
                                    @error('interview_type')
                                        <div class="help-block with-errors text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
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
