<header>
    <div class="header-top">
        <div class="container custom-container">
            <div class="row">
                <div class="col-xl-4">
                    <div class="header-top-left">
                        <a href="#"><i class="fa-solid fa-plane"></i> COVID-19 update & travel requirements</a>
                    </div>
                </div>
                <div class="col-xl-8">
                    <div class="header-top-right">
                        <ul>
                            <li><a href="contact.html">Corporate Club</a></li>
                            <li><a href="about.html"><i class="fa-solid fa-comments"></i>Feedback</a></li>
                            <li><a href="#"><i class="fa-solid fa-magnifying-glass"></i>Search</a></li>
                            <li><a href="#"><i class="fa-solid fa-dollar-sign"></i>Currency</a></li>
                            <li><a href="booking-list.html"><i class="fa-solid fa-earth-asia"></i>EN - INT</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="sticky-header" class="menu-area transparent-header">
        <div class="container custom-container">
            <div class="row">
                <div class="col-12">
                    <div class="mobile-nav-toggler"><i class="fas fa-bars"></i></div>
                    <div class="menu-wrap">
                        <nav class="menu-nav">
                            <div class="logo" style="margin-left: 50px"><a href="{{ url('home') }}"><img style="height: 40px" src="{{ asset('front/assets/img/logo/logo.png')}}" alt=""></a></div>
                            <div class="navbar-wrap main-menu d-none d-lg-flex">
                                <ul class="navigation">
                                    <li class="{{ request()->is('home') ? 'active' : '' }}"><a href="{{ url('home') }}">Home</a></li>
                                    <li class="{{ request()->is('about') ? 'active' : '' }}"><a href="{{ url('about') }}">About</a></li>
                                    {{-- <li><a href="track.html">Track Flight</a></li> --}}
                                    {{-- <li class="menu-item-has-children"><a href="#">Pages</a>
                                        <ul class="submenu">
                                            <li><a href="booking-list.html">Booking List</a></li>
                                            <li><a href="booking-details.html">Booking Details</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="mailto:support@flynow.lk">Contact Us</a></li> --}}
                                </ul>
                            </div>
                            <div class="header-action d-none d-md-block">
                                <ul>
                                    <li class="country"><a href="#">us <img src="{{ asset('front/assets/img/icon/united-states.png')}}" alt=""></a></li>


                                </ul>
                            </div>
                        </nav>
                    </div>
                    <!-- Mobile Menu  -->
                    <div class="mobile-menu">
                        <nav class="menu-box">
                            <div class="close-btn"><i class="fa-solid fa-xmark"></i></div>
                            <div class="nav-logo"><a href="index.html"><img src="{{ asset('front/assets/img/logo/logo_02.png')}}" alt="" title=""></a>
                            </div>
                            <div class="menu-outer">
                                <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                            </div>
                            <div class="social-links">
                                <ul class="clearfix">
                                    <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                    <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                                    <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                                    <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                                    <li><a href="#"><span class="fab fa-youtube"></span></a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                    <div class="menu-backdrop"></div>
                    <!-- End Mobile Menu -->
                </div>
            </div>
        </div>
    </div>
</header>
