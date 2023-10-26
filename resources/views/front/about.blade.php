@extends('front.layout.layout')
@section('content')

<main>

    <!-- breadcrumb-area -->
    <section class="breadcrumb-area breadcrumb-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="breadcrumb-content text-center">
                        <h2 class="title">About Us</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('home') }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">About Us</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb-area-end -->

    <!-- about-area -->
    <section class="about-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 order-0 order-lg-2">
                    <div class="about-img">
                        <img src="{{ asset('front/assets/img/images/about_img01.jpg')}}" alt="img">
                        <img src="{{ asset('front/assets/img/images/about_img02.jpg')}}" alt="img" class="img-two">
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="about-content">
                        <div class="section-title">
                            <span class="sub-title">who we are</span>
                            <h2 class="title">The Travel Port Private Limited</h2>
                        </div>
                        <p>We are The Travel Port one of the most popular and fast growing travel agent in SriLanka, We are specialized in ticketing service Inbound and Outbound , tour packages, pilgrimages and many more. By maintaining our company vision and mission, we are fully committed to provide our passengers with professional, efficient, effective and friendly service.</p>
                        {{-- <ul>
                            <li><i class="flaticon-tick-1"></i>Pre-Book Your Baggage Donating</li>
                            <li><i class="flaticon-tick-1"></i>Accusamus Iusto Odio Dignissimos Ducimus</li>
                            <li><i class="flaticon-tick-1"></i>Dislike Men Who are so Beguiled</li>
                        </ul> --}}
                        <a href="contact.html" class="btn">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about-area-end -->

    <!-- destination-area -->
    <section class="destination-area destination-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="section-title">
                        <span class="sub-title">Offer Deals</span>
                        <h2 class="title">Your Great Destination</h2>
                    </div>
                    <div class="destination-content">
                        {{-- <p>Get rewarded for your travels – unlock instant savings of 10% or more with a free <span>flynow.lk</span> account</p> --}}
                        <ul>
                            <li>
                                <div class="counter-item">
                                    <div class="counter-content">
                                        <h2 class="count"><span class="odometer" data-count="5830"></span>+</h2>
                                        <p>Happy Customers</p>
                                    </div>
                                    <div class="counter-icon">
                                        <i class="flaticon-group"></i>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="counter-item">
                                    <div class="counter-content">
                                        <h2 class="count"><span class="odometer" data-count="100"></span>%</h2>
                                        <p>Client Setisfied</p>
                                    </div>
                                    <div class="counter-icon">
                                        <i class="flaticon-globe"></i>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <div class="content-bottom">
                            <p>Discover the latest offers & news and start planning</p>
                            <a href="contact.html">contact us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- destination-area-end -->

    <!-- service-area -->
    <section class="service-area service-style-two">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="section-title text-center mb-40">
                        <span class="sub-title">Why flynow.lk</span>
                        <h2 class="title"></h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="service-item">
                        <div class="service-icon">
                            <img src="{{ asset('front/assets/img/icon/service_icon01.png')}}" alt="">
                        </div>
                        <div class="service-content">

                            <h2 class="title">Our Vision</h2>
                            <div class="service-list">
                                <p>Our vision is to be one of the most reliable number one world class travel agency and tour operator in the region by providing a higher standard of quality service to our valuable clients.           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;                                                      </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="service-item">
                        <div class="service-icon">
                            <img src="{{ asset('front/assets/img/icon/service_icon02.png')}}" alt="">
                        </div>
                        <div class="service-content">

                            <h2 class="title">Our Mission</h2>
                            <div class="service-list">
                                <p>
                                    To provide an unforgettable travel experience with a personal touch fulfilling our clients travel needs through overseas and Island wide in the segments of corporate leisure while developing support and strength with effective and efficient solutions.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- service-area-end -->


    <!-- faq-area -->
    <section class="faq-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-10">
                    <div class="faq-content">
                        <div class="section-title">
                            <span class="sub-title">asked questions</span>
                            <h2 class="title">Flight Asked Questions</h2>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elitIn imperdiet interdum imperdiet ipsum.</p>
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                        aria-expanded="true" aria-controls="collapseOne">
                                        Pre-Book Your Baggage Donating a Small <span class="dot"></span>
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>Lorem ipsum dolor sit amet, consectetur adiping elitIn imperdiet interdum imperdiet ipsum generators on the Internet tend to repeat predefined chunks as necessary</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Search and Save on Cheap Car Rentals <span class="dot"></span>
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>Lorem ipsum dolor sit amet, consectetur adiping elitIn imperdiet interdum imperdiet ipsum generators on the Internet tend to repeat predefined chunks as necessary</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Leave it to us when it comes to finding you <span class="dot"></span>
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>Lorem ipsum dolor sit amet, consectetur adiping elitIn imperdiet interdum imperdiet ipsum generators on the Internet tend to repeat predefined chunks as necessary</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-10">
                    <div class="faq-img">
                        <img src="{{ asset('front/assets/img/images/faq_img.jpg')}}" alt="img">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- faq-area-end -->

</main>

@endsection
