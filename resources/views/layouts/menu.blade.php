<header class="site-header header-style-3 no-fixed mobile-sider-drawer-menu">
    <div class="sticky-header main-bar-wraper  navbar-expand-lg">
        <div class="main-bar">

            <div class="container-fluid clearfix">
                <div class="logo-header" style="width: 200px! importent">
                    <div class="logo-header-inner logo-header-one">
                        <a href="{{ route('home') }}">
                            <img src="{{ asset('data/gsd.png') }}" alt="">
                        </a>
                    </div>
                </div>

                <!-- NAV Toggle Button -->
                <button id="mobile-side-drawer" data-target=".header-nav" data-toggle="collapse" type="button"
                    class="navbar-toggler collapsed">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar icon-bar-first"></span>
                    <span class="icon-bar icon-bar-two"></span>
                    <span class="icon-bar icon-bar-three"></span>
                </button>

                <!-- MAIN Vav -->
                <div class="nav-animation header-nav navbar-collapse collapse d-flex justify-content-center">
                    <ul class=" nav navbar-nav">

                        <li class="has-mega-menu">
                            <a href="{{ route('home') }}">
                                Home
                            </a>
                        </li>

                        <li class="has-child">
                            <a href="javascript:;">
                                About
                            </a>
                            <ul class="sub-menu">
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
                                    <a href="{{ route('why') }}" hidden>
                                        Why Choose Gold Silver Diamond Co.,Ltd
                                    </a>
                                </li>

                                <li>
                                    <a href="{{ route('team') }}">
                                        Professional Team
                                    </a>
                                </li>

                            </ul>
                        </li>

                        <li class="has-child">
                            <a href="javascript:;">
                                Manpower Services
                            </a>
                            <ul class="sub-menu">
                                @foreach ($countries as $country)
                                    <li>
                                        <a href="{{ route('job.show', $country->id) }}">
                                            {{ $country->country ?? '' }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>

                        <li class="has-child">
                            <a href="{{ route('activities.index') }}">
                                Activities
                            </a>
                        </li>

                        <li class="has-child">
                            <a href="javascript:;">
                                Submit Form
                            </a>
                            <ul class="sub-menu">
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
                        </li>

                        <li class="has-mega-menu">
                            <a href="{{ route('contact.index') }}">
                                Contact Us
                            </a>
                        </li>

                    </ul>
                </div>

                <div class="extra-nav header-2-nav">
                    <div class="extra-cell">
                        <div class="header-nav-btn-section">

                            <div class="twm-nav-btn-right">
                                <a href="{{ route('en') }}">
                                    <img src="{{ asset('data/united-states-of-america.png') }}" alt=""
                                        style="width: 38px; height: 38px;">
                                </a>
                            </div>

                            <div class="twm-nav-btn-right">
                                <a href="{{ route('jp') }}">
                                    <img src="{{ asset('data/japan.png') }}" alt=""
                                        style="width: 38px; height: 38px;">
                                </a>
                            </div>

                            <div class="twm-nav-btn-right">
                                <a href="{{ route('kr') }}">
                                    <img src="{{ asset('data/south-korea.png') }}" alt=""
                                        style="width: 38px; height: 38px;">
                                </a>
                            </div>

                            <div class="twm-nav-btn-right">
                                <a href="{{ route('th') }}">
                                    <img src="{{ asset('data/thailand.png') }}" alt=""
                                        style="width: 38px; height: 38px;">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- HEADER END -->
