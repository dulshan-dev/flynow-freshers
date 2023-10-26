@extends('front.layout.layout')
@section('content')
    <main>
        <!-- slider-area -->
        <section class="slider-area">
            <div class="slider-active">
                <div class="single-slider slider-bg" data-background="{{ asset('front/assets/img/slider/slider_bg01.jpg') }}">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-8 col-lg-10">
                                <div class="slider-content">
                                    <h2 class="title" data-animation="fadeInUp" data-delay=".2s">Welcome to Flynow.lk - The
                                        Premier B2B Flight Booking Portal.</h2>
                                    <p data-animation="fadeInUp" data-delay=".4s">At Flynow.lk, we are dedicated to
                                        revolutionizing the way businesses book flights.</p>
                                    <a href="/login" class="btn" data-animation="fadeInUp" data-delay=".6s">Login</a>
                                    <a href="/register" class="btn" data-animation="fadeInUp"
                                        data-delay=".6s">Register</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-slider slider-bg"
                    data-background="{{ asset('front/assets/img/slider/slider_bg02.jpg') }}">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-8 col-lg-10">
                                <div class="slider-content">
                                    <h2 class="title" data-animation="fadeInUp" data-delay=".2s">Flynow.lk: Empowering
                                        Businesses to Reach New Heights.</h2>
                                    <p data-animation="fadeInUp" data-delay=".4s">Flynow.lk is here to simplify the process
                                        and provide you with a one-stop solution for all your flight booking needs.</p>
                                    <a href="/login" class="btn" data-animation="fadeInUp" data-delay=".6s">Login</a>
                                    <a href="mailto:support@flynow.lk" class="btn" data-animation="fadeInUp"
                                        data-delay=".6s">Register</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-slider slider-bg"
                    data-background="{{ asset('front/assets/img/slider/slider_bg03.jpg') }}">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-8 col-lg-10">
                                <div class="slider-content">
                                    <h2 class="title" data-animation="fadeInUp" data-delay=".2s">Unlock Exclusive Benefits
                                        with Flynow.lk's B2B Platform.</h2>
                                    <p data-animation="fadeInUp" data-delay=".4s">As a valued partner, Flynow.lk offers
                                        exclusive benefits and features through our B2B platform.</p>
                                    <a href="/login" class="btn" data-animation="fadeInUp" data-delay=".6s">Login</a>
                                    <a href="mailto:support@flynow.lk" class="btn" data-animation="fadeInUp"
                                        data-delay=".6s">Register</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- slider-area-end -->
        <!-- booking-area -->
        {{--
   <div class="booking-area">
      <div class="container">
         <div class="row">
            <div class="col-lg-12">
               <div class="booking-tag">
                  <ul>
                     <li><a href="booking-list.html"><i class="flaticon-flight"></i>Flights</a></li>
                  </ul>
               </div>
               <div class="booking-wrap">
                  <ul class="nav nav-tabs" id="myTab" role="tablist">
                     <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="bOOKing-tab" data-bs-toggle="tab" data-bs-target="#bOOKing-tab-pane" type="button"
                           role="tab" aria-controls="bOOKing-tab-pane" aria-selected="true"><i class="flaticon-flight"></i>Air Booking</button>
                     </li>
                     <li class="nav-item" role="presentation">
                        <button class="nav-link" id="trips-tab" data-bs-toggle="tab" data-bs-target="#trips-tab-pane" type="button"
                           role="tab" aria-controls="trips-tab-pane" aria-selected="false"><i class="flaticon-file"></i> my trips</button>
                     </li>
                     <li class="nav-item" role="presentation">
                        <button class="nav-link" id="check-tab" data-bs-toggle="tab" data-bs-target="#check-tab-pane" type="button"
                           role="tab" aria-controls="check-tab-pane" aria-selected="false"><i class="flaticon-tick"></i> check-in</button>
                     </li>
                     <li class="nav-item" role="presentation">
                        <button class="nav-link" id="flight-tab" data-bs-toggle="tab" data-bs-target="#flight-tab-pane" type="button"
                           role="tab" aria-controls="flight-tab-pane" aria-selected="false"><i class="flaticon-clock"></i> Flight status</button>
                     </li>
                  </ul>
                  <div class="tab-content" id="myTabContent">
                     <div class="tab-pane fade show active" id="bOOKing-tab-pane" role="tabpanel" aria-labelledby="bOOKing-tab" tabindex="0">
                        <div class="row">
                           <div class="col-lg-12">
                              <div class="tab-content-wrap">
                                 <div class="content-top">
                                    <ul>
                                       <li>Flights</li>
                                       <li>flynow.lk Stopover</li>
                                    </ul>
                                 </div>
                                 <form action="#" class="booking-form">
                                    <ul>
                                       <li>
                                          <div class="form-grp">
                                             <input type="text" placeholder="From">
                                          </div>
                                       </li>
                                       <li>
                                          <div class="form-grp">
                                             <input type="text" placeholder="To">
                                             <button class="exchange-icon"><i class="flaticon-exchange-1"></i></button>
                                          </div>
                                       </li>
                                       <li>
                                          <div class="form-grp select">
                                             <label for="shortBy">Trip</label>
                                             <select id="shortBy" name="select" class="form-select" aria-label="Default select example">
                                                <option value="">Tour type</option>
                                                <option>One Way</option>
                                                <option>Return</option>
                                             </select>
                                          </div>
                                       </li>
                                       <li>
                                          <div class="form-grp date">
                                             <ul>
                                                <li>
                                                   <label for="shortBy">Depart</label>
                                                   <input type="text" class="date" placeholder="Select Date">
                                                </li>
                                                <li>
                                                   <label for="shortBy">Return</label>
                                                   <input type="text" class="date" placeholder="Select Date">
                                                </li>
                                             </ul>
                                          </div>
                                       </li>
                                       <li>
                                          <div class="form-grp economy">
                                             <label for="text">Passenger/ Class</label>
                                             <input type="text" id="text" placeholder="1 Passenger, Economy">
                                          </div>
                                       </li>
                                    </ul>
                                 </form>
                                 <div class="content-bottom">
                                    <a href="booking-details.html" class="promo-code">+ Add Promo code</a>
                                    <a href="booking-details.html" class="btn">Show Flights <i class="flaticon-flight-1"></i></a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="tab-pane fade" id="trips-tab-pane" role="tabpanel" aria-labelledby="trips-tab" tabindex="0">
                        <div class="row">
                           <div class="col-lg-12">
                              <div class="tab-content-wrap">
                                 <div class="content-top">
                                    <ul>
                                       <li>Flights</li>
                                       <li>flynow.lk Stopover</li>
                                    </ul>
                                 </div>
                                 <form action="#" class="booking-form">
                                    <ul>
                                       <li>
                                          <div class="form-grp">
                                             <input type="text" placeholder="From">
                                          </div>
                                       </li>
                                       <li>
                                          <div class="form-grp">
                                             <input type="text" placeholder="To">
                                             <button class="exchange-icon"><i class="flaticon-exchange-1"></i></button>
                                          </div>
                                       </li>
                                       <li>
                                          <div class="form-grp select">
                                             <label for="shortByTwo">Trip</label>
                                             <select id="shortByTwo" name="select" class="form-select" aria-label="Default select example">
                                                <option value="">Tour type</option>
                                                <option>One Way</option>
                                                <option>Return</option>
                                             </select>
                                          </div>
                                       </li>
                                       <li>
                                          <div class="form-grp date">
                                             <ul>
                                                <li>
                                                   <label for="shortBy">Depart</label>
                                                   <input type="text" class="date" placeholder="Select Date">
                                                </li>
                                                <li>
                                                   <label for="shortBy">Return</label>
                                                   <input type="text" class="date" placeholder="Select Date">
                                                </li>
                                             </ul>
                                          </div>
                                       </li>
                                       <li>
                                          <div class="form-grp economy">
                                             <label for="textTwo">Passenger/ Class</label>
                                             <input type="text" id="textTwo" placeholder="1 Passenger, Economy">
                                          </div>
                                       </li>
                                    </ul>
                                 </form>
                                 <div class="content-bottom">
                                    <a href="booking-details.html" class="promo-code">+ Add Promo code</a>
                                    <a href="booking-details.html" class="btn">Show Flights <i class="flaticon-flight-1"></i></a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="tab-pane fade" id="check-tab-pane" role="tabpanel" aria-labelledby="check-tab" tabindex="0">
                        <div class="row">
                           <div class="col-lg-12">
                              <div class="tab-content-wrap">
                                 <div class="content-top">
                                    <ul>
                                       <li>Flights</li>
                                       <li>flynow.lk Stopover</li>
                                    </ul>
                                 </div>
                                 <form action="#" class="booking-form">
                                    <ul>
                                       <li>
                                          <div class="form-grp">
                                             <input type="text" placeholder="From">
                                          </div>
                                       </li>
                                       <li>
                                          <div class="form-grp">
                                             <input type="text" placeholder="To">
                                             <button class="exchange-icon"><i class="flaticon-exchange-1"></i></button>
                                          </div>
                                       </li>
                                       <li>
                                          <div class="form-grp select">
                                             <label for="shortByThree">Trip</label>
                                             <select id="shortByThree" name="select" class="form-select" aria-label="Default select example">
                                                <option value="">Tour type</option>
                                                <option>One Way</option>
                                                <option>Return</option>
                                             </select>
                                          </div>
                                       </li>
                                       <li>
                                          <div class="form-grp date">
                                             <ul>
                                                <li>
                                                   <label for="shortBy">Depart</label>
                                                   <input type="text" class="date" placeholder="Select Date">
                                                </li>
                                                <li>
                                                   <label for="shortBy">Return</label>
                                                   <input type="text" class="date" placeholder="Select Date">
                                                </li>
                                             </ul>
                                          </div>
                                       </li>
                                       <li>
                                          <div class="form-grp economy">
                                             <label for="textThree">Passenger/ Class</label>
                                             <input type="text" id="textThree" placeholder="1 Passenger, Economy">
                                          </div>
                                       </li>
                                    </ul>
                                 </form>
                                 <div class="content-bottom">
                                    <a href="booking-details.html" class="promo-code">+ Add Promo code</a>
                                    <a href="booking-details.html" class="btn">Show Flights <i class="flaticon-flight-1"></i></a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="tab-pane fade" id="flight-tab-pane" role="tabpanel" aria-labelledby="flight-tab" tabindex="0">
                        <div class="row">
                           <div class="col-lg-12">
                              <div class="tab-content-wrap">
                                 <div class="content-top">
                                    <ul>
                                       <li>Flights</li>
                                       <li><span>Just from $12</span>flynow.lk Stopover</li>
                                    </ul>
                                 </div>
                                 <form action="#" class="booking-form">
                                    <ul>
                                       <li>
                                          <div class="form-grp">
                                             <input type="text" placeholder="From">
                                          </div>
                                       </li>
                                       <li>
                                          <div class="form-grp">
                                             <input type="text" placeholder="To">
                                             <button class="exchange-icon"><i class="flaticon-exchange-1"></i></button>
                                          </div>
                                       </li>
                                       <li>
                                          <div class="form-grp select">
                                             <label for="shortByFour">Trip</label>
                                             <select id="shortByFour" name="select" class="form-select" aria-label="Default select example">
                                                <option value="">Tour type</option>
                                                <option>One Way</option>
                                                <option>Return</option>
                                             </select>
                                          </div>
                                       </li>
                                       <li>
                                          <div class="form-grp date">
                                             <ul>
                                                <li>
                                                   <label for="shortBy">Depart</label>
                                                   <input type="text" class="date" placeholder="Select Date">
                                                </li>
                                                <li>
                                                   <label for="shortBy">Return</label>
                                                   <input type="text" class="date" placeholder="Select Date">
                                                </li>
                                             </ul>
                                          </div>
                                       </li>
                                       <li>
                                          <div class="form-grp economy">
                                             <label for="textFour">Passenger/ Class</label>
                                             <input type="text" id="textFour" placeholder="1 Passenger, Economy">
                                          </div>
                                       </li>
                                    </ul>
                                 </form>
                                 <div class="content-bottom">
                                    <a href="booking-details.html" class="promo-code">+ Add Promo code</a>
                                    <a href="booking-details.html" class="btn">Show Flights <i class="flaticon-flight-1"></i></a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   --}}
        <section id="why-us" class="why-us features-area">
            <div class="booking-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 d-flex align-items-stretch">
                            <div class="content">
                                <div>
                                    <h3 style="color:aliceblue">Why Choose Flynow.lk?</h3>
                                    <p style="color:aliceblue">flynow.lk empowers IATA and non-IATA travel agencies with a
                                        variety of abilities to offer the best ticketing options.​ No doubts, travel
                                        agencies worldwide are searching for a fast technology, cost effective content, and
                                        a continuous support to optimize their ticketing services and increase their
                                        company’s revenue. After preforming our surveys, and being evaluated by our
                                        customers, below are the key benefits Flynow.lk has been delivering to its valuable
                                        network.</p>
                                </div>
                                <div class="text-center">
                                    <a href="why-us" class="more-btn">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 d-flex align-items-stretch" style="margin-top: 50px">
                            <div class="icon-boxes d-flex flex-column justify-content-center">
                                <div class="row">
                                    <div class="col-xl-4 d-flex align-items-stretch">
                                        <div class="icon-box mt-4 mt-xl-0"
                                            style="box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);">
                                            <img class="icon" src="{{ asset('front/img/why/ticket-seo.svg') }}">
                                            <h4>Affordable airline tickets</h4>
                                            <p>Simply Flynow.lk offers you the ability to book airline tickets at prices
                                                that fit your budget. You can compare airfares with different airlines and
                                                get the best deals on Business Class or First Class as well.</p>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 d-flex align-items-stretch">
                                        <div class="icon-box mt-4 mt-xl-0"
                                            style="box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);">
                                            <img class="icon" src="{{ asset('front/img/why/search_seo_icon.svg') }}">
                                            <h4>Ease and speed of searching for flights</h4>
                                            <p>Flynow.lk gives you a quick and easy online flight booking experience and
                                                puts in your hands more than 700 airlines and more, to compare between a
                                                wide range of flights and choose the one that suits you best. All with just
                                                one touch of a button.</p>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 d-flex align-items-stretch">
                                        <div class="icon-box mt-4 mt-xl-0"
                                            style="box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);">
                                            <img class="icon" src="{{ asset('front/img/why/flight-seo-icon.svg') }}">
                                            <h4>Book flights to more than 15,000 destinations around the world</h4>
                                            <p>Book flights with Flynow.lk easily and at the most favorable prices to more
                                                than 15,000 destinations and get the cheapest flight with a wide range of
                                                airlines through Flynow.lk</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- flight-offer-area -->
        <section class="flight-offer-area">
            <div class="container">
                <div class="row align-items-center mb-35">
                    <div class="col-md-8">
                        <div class="section-title">
                            <span class="sub-title">Offer Deals</span>
                            <h2 class="title">Flight Offer Deals</h2>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="best-price text-end">
                            <a href="booking-list.html">Best Price Guarantee <i class="flaticon-check"></i></a>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-10">
                        <div class="flight-offer-item">
                            <div class="flight-offer-thumb">
                                <img src="{{ asset('front/assets/img/images/offer_img01.jpg') }}" alt="">
                            </div>
                            <div class="flight-offer-content">
                                <h2 class="title">Dhaka to Dubai</h2>
                                <span>09 Jun 2022 - 16 Jun 2022</span>
                                <p>Economy from</p>
                                <h4 class="price">$ 980</h4>
                            </div>
                            <div class="overlay-content">
                                <h2 class="title">Dhaka to Dubai</h2>
                                <span>09 Jun 2022 - 16 Jun 2022</span>
                                <p>Economy from</p>
                                <h4 class="price">$ 980</h4>
                                <div class="content-bottom">
                                    <a href="booking-details.html" class="btn">Discover</a>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-10">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="flight-offer-item offer-item-two">
                                    <div class="flight-offer-thumb">
                                        <img src="{{ asset('front/assets/img/images/offer_img02.jpg') }}" alt="">
                                    </div>
                                    <div class="flight-offer-content">
                                        <h2 class="title">New York to California</h2>
                                        <span>09 Jun 2022 - 16 Jun 2022</span>
                                        <p>Economy from</p>
                                        <h4 class="price">$ 290</h4>
                                    </div>
                                    <div class="overlay-content">
                                        <h2 class="title">New York to California</h2>
                                        <span>09 Jun 2022 - 16 Jun 2022</span>
                                        <p>Economy from</p>
                                        <h4 class="price">$ 290</h4>
                                        <div class="content-bottom">
                                            <a href="booking-details.html" class="btn">Discover</a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="flight-offer-item offer-item-two">
                                    <div class="flight-offer-thumb">
                                        <img src="{{ asset('front/assets/img/images/offer_img03.jpg') }}" alt="">
                                    </div>
                                    <div class="flight-offer-content">
                                        <h2 class="title">Malaga to Finland</h2>
                                        <span>09 Jun 2022 - 16 Jun 2022</span>
                                        <p>Economy from</p>
                                        <h4 class="price">$ 792</h4>
                                    </div>
                                    <div class="overlay-content">
                                        <h2 class="title">Malaga to Finland</h2>
                                        <span>09 Jun 2022 - 16 Jun 2022</span>
                                        <p>Economy from</p>
                                        <h4 class="price">$ 792</h4>
                                        <div class="content-bottom">
                                            <a href="booking-details.html" class="btn">Discover</a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="flight-offer-item offer-item-two">
                                    <div class="flight-offer-thumb">
                                        <img src="{{ asset('front/assets/img/images/offer_img04.jpg') }}" alt="">
                                    </div>
                                    <div class="flight-offer-content">
                                        <h2 class="title">Dubai to Maldives</h2>
                                        <span>09 Jun 2022 - 16 Jun 2022</span>
                                        <p>Economy from</p>
                                        <h4 class="price">$ 980</h4>
                                    </div>
                                    <div class="overlay-content">
                                        <h2 class="title">Dubai to Maldives</h2>
                                        <span>09 Jun 2022 - 16 Jun 2022</span>
                                        <p>Economy from</p>
                                        <h4 class="price">$ 980</h4>
                                        <div class="content-bottom">
                                            <a href="booking-details.html" class="btn">Discover</a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="flight-offer-item offer-item-two">
                                    <div class="flight-offer-thumb">
                                        <img src="{{ asset('front/assets/img/images/offer_img05.jpg') }}" alt="">
                                    </div>
                                    <div class="flight-offer-content">
                                        <h2 class="title">Dubai to New York</h2>
                                        <span>09 Jun 2022 - 16 Jun 2022</span>
                                        <p>Economy from</p>
                                        <h4 class="price">$ 350</h4>
                                    </div>
                                    <div class="overlay-content">
                                        <h2 class="title">Dubai to New York</h2>
                                        <span>09 Jun 2022 - 16 Jun 2022</span>
                                        <p>Economy from</p>
                                        <h4 class="price">$ 350</h4>
                                        <div class="content-bottom">
                                            <a href="booking-details.html" class="btn">Discover</a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- flight-offer-area-end -->
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
                            <p>Get rewarded for your travels – unlock instant savings of 10% or more with a free
                                <span>flynow.lk Flight</span> Account
                            </p>
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
                                <a href="mailto:support@flynow.lk">contact us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- destination-area-end -->
        <!-- fly-next-area -->
        {{--
   <section class="fly-next-area">
      <div class="container">
         <div class="row justify-content-center">
            <div class="col-lg-8">
               <div class="section-title text-center">
                  <span class="sub-title">Flynext Package</span>
                  <h2 class="title">Your Great Destination</h2>
               </div>
            </div>
         </div>
         <div class="row justify-content-center">
            <div class="col-lg-7">
               <div class="fly-next-nav">
                  <button class="active" data-filter="*">Flights <i class="flaticon-flight"></i></button>
               </div>
            </div>
         </div>
         <div class="row fly-next-active justify-content-center">
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 grid-item grid-sizer cat-two">
               <div class="fly-next-item">
                  <div class="fly-next-thumb">
                     <a href="booking-details.html"><img src="{{ asset('front/assets/img/images/fly_img01.jpg')}}" alt=""></a>
                  </div>
                  <div class="fly-next-content">
                     <span>09 Jun 2022 - 16 Jun 2022</span>
                     <h4 class="title">Dubai (DXB)</h4>
                     <a href="#" class="exchange-btn"><i class="flaticon-exchange-1"></i></a>
                     <h4 class="title">New York (USA)</h4>
                     <a href="booking-details.html" class="air-logo"><img src="{{ asset('front/assets/img/icon/fly_icon01.jpg')}}" alt=""></a>
                     <div class="content-bottom">
                        <p>Economy from</p>
                        <h4 class="price">$195</h4>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 grid-item grid-sizer cat-one cat-two">
               <div class="fly-next-item">
                  <div class="fly-next-thumb">
                     <a href="booking-details.html"><img src="{{ asset('front/assets/img/images/fly_img02.jpg')}}" alt=""></a>
                  </div>
                  <div class="fly-next-content">
                     <span>09 Jun 2022 - 16 Jun 2022</span>
                     <h4 class="title">Switzerland (SWL)</h4>
                     <a href="#" class="exchange-btn"><i class="flaticon-exchange-1"></i></a>
                     <h4 class="title">New York (USA)</h4>
                     <a href="booking-details.html" class="air-logo"><img src="{{ asset('front/assets/img/icon/fly_icon02.jpg')}}" alt=""></a>
                     <div class="content-bottom">
                        <p>Business Class</p>
                        <h4 class="price">$800</h4>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 grid-item grid-sizer cat-two">
               <div class="fly-next-item">
                  <div class="fly-next-thumb">
                     <a href="booking-details.html"><img src="{{ asset('front/assets/img/images/fly_img03.jpg')}}" alt=""></a>
                  </div>
                  <div class="fly-next-content">
                     <span>09 Jun 2022 - 16 Jun 2022</span>
                     <h4 class="title">Denmark (DEK)</h4>
                     <a href="#" class="exchange-btn"><i class="flaticon-exchange-1"></i></a>
                     <h4 class="title">New York (USA)</h4>
                     <a href="booking-details.html" class="air-logo"><img src="{{ asset('front/assets/img/icon/fly_icon03.jpg')}}" alt=""></a>
                     <div class="content-bottom">
                        <p>Economy from</p>
                        <h4 class="price">$ 350</h4>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 grid-item grid-sizer cat-one">
               <div class="fly-next-item">
                  <div class="fly-next-thumb">
                     <a href="booking-details.html"><img src="{{ asset('front/assets/img/images/fly_img04.jpg')}}" alt=""></a>
                  </div>
                  <div class="fly-next-content">
                     <span>09 Jun 2022 - 16 Jun 2022</span>
                     <h4 class="title">Jakarta (DXB)</h4>
                     <a href="#" class="exchange-btn"><i class="flaticon-exchange-1"></i></a>
                     <h4 class="title">New York (USA)</h4>
                     <a href="booking-details.html" class="air-logo"><img src="{{ asset('front/assets/img/icon/fly_icon01.jpg')}}" alt=""></a>
                     <div class="content-bottom">
                        <p>Business Class</p>
                        <h4 class="price">$ 220</h4>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 grid-item grid-sizer cat-two">
               <div class="fly-next-item">
                  <div class="fly-next-thumb">
                     <a href="booking-details.html"><img src="{{ asset('front/assets/img/images/fly_img05.jpg')}}" alt=""></a>
                  </div>
                  <div class="fly-next-content">
                     <span>09 Jun 2022 - 16 Jun 2022</span>
                     <h4 class="title">Dubai (DXB)</h4>
                     <a href="#" class="exchange-btn"><i class="flaticon-exchange-1"></i></a>
                     <h4 class="title">New York (USA)</h4>
                     <a href="booking-details.html" class="air-logo"><img src="{{ asset('front/assets/img/icon/fly_icon03.jpg')}}" alt=""></a>
                     <div class="content-bottom">
                        <p>Economy from</p>
                        <h4 class="price">$195</h4>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 grid-item grid-sizer cat-one">
               <div class="fly-next-item">
                  <div class="fly-next-thumb">
                     <a href="booking-details.html"><img src="{{ asset('front/assets/img/images/fly_img06.jpg')}}" alt=""></a>
                  </div>
                  <div class="fly-next-content">
                     <span>09 Jun 2022 - 16 Jun 2022</span>
                     <h4 class="title">Dubai (DXB)</h4>
                     <a href="#" class="exchange-btn"><i class="flaticon-exchange-1"></i></a>
                     <h4 class="title">New York (USA)</h4>
                     <a href="booking-details.html" class="air-logo"><img src="{{ asset('front/assets/img/icon/fly_icon02.jpg')}}" alt=""></a>
                     <div class="content-bottom">
                        <p>Business Class</p>
                        <h4 class="price">$175</h4>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 grid-item grid-sizer cat-two cat-one">
               <div class="fly-next-item">
                  <div class="fly-next-thumb">
                     <a href="booking-details.html"><img src="{{ asset('front/assets/img/images/fly_img07.jpg')}}" alt=""></a>
                  </div>
                  <div class="fly-next-content">
                     <span>09 Jun 2022 - 16 Jun 2022</span>
                     <h4 class="title">Switzerland (SWL)</h4>
                     <a href="#" class="exchange-btn"><i class="flaticon-exchange-1"></i></a>
                     <h4 class="title">New York (USA)</h4>
                     <a href="booking-details.html" class="air-logo"><img src="{{ asset('front/assets/img/icon/fly_icon01.jpg')}}" alt=""></a>
                     <div class="content-bottom">
                        <p>Economy from</p>
                        <h4 class="price">$195</h4>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 grid-item grid-sizer cat-two">
               <div class="fly-next-item">
                  <div class="fly-next-thumb">
                     <a href="booking-details.html"><img src="{{ asset('front/assets/img/images/fly_img08.jpg')}}" alt=""></a>
                  </div>
                  <div class="fly-next-content">
                     <span>09 Jun 2022 - 16 Jun 2022</span>
                     <h4 class="title">Turkish (SWL)</h4>
                     <a href="#" class="exchange-btn"><i class="flaticon-exchange-1"></i></a>
                     <h4 class="title">New York (USA)</h4>
                     <a href="booking-details.html" class="air-logo"><img src="{{ asset('front/assets/img/icon/fly_icon02.jpg')}}" alt=""></a>
                     <div class="content-bottom">
                        <p>Business Class</p>
                        <h4 class="price">$350</h4>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   --}}
        <!-- fly-next-area-end -->
        <!-- brand-area -->
        <div class="brand-area brand-bg">
            <div class="container">
                <div class="section-title">
                    <span class="sub-title">Airline</span>
                    <h2 class="title">Endless choices.</h2>
                </div>
                <div class="row brand-active">
                    <div class="col-12">
                        <div class="brand-item">
                            <img src="{{ asset('front/assets/img/brand/srilankan.png') }}" alt="">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="brand-item">
                            <img src="{{ asset('front/assets/img/brand/singapore.png') }}" alt="">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="brand-item">
                            <img src="{{ asset('front/assets/img/brand/emirates.png') }}" alt="">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="brand-item">
                            <img src="{{ asset('front/assets/img/brand/qatar.png') }}" alt="">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="brand-item">
                            <img src="{{ asset('front/assets/img/brand/ethihad.png') }}" alt="">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="brand-item">
                            <img src="{{ asset('front/assets/img/brand/gulfair.png') }}" alt="">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="brand-item">
                            <img src="{{ asset('front/assets/img/brand/airmauritius.png') }}" alt="">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="brand-item">
                            <img src="{{ asset('front/assets/img/brand/fitsair.png') }}" alt="">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="brand-item">
                            <img src="{{ asset('front/assets/img/brand/airchina.png') }}" alt="">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="brand-item">
                            <img src="{{ asset('front/assets/img/brand/malaysia.png') }}" alt="">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="brand-item">
                            <img src="{{ asset('front/assets/img/brand/british.png') }}" alt="">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="brand-item">
                            <img src="{{ asset('front/assets/img/brand/klm.png') }}" alt="">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="brand-item">
                            <img src="{{ asset('front/assets/img/brand/delta.png') }}" alt="">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="brand-item">
                            <img src="{{ asset('front/assets/img/brand/batikair.png') }}" alt="">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="brand-item">
                            <img src="{{ asset('front/assets/img/brand/cathypacific.png') }}" alt="">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="brand-item">
                            <img src="{{ asset('front/assets/img/brand/flydubai.png') }}" alt="">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="brand-item">
                            <img src="{{ asset('front/assets/img/brand/jazeera.png') }}" alt="">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="brand-item">
                            <img src="{{ asset('front/assets/img/brand/kenya.png') }}" alt="">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="brand-item">
                            <img src="{{ asset('front/assets/img/brand/omanair.png') }}" alt="">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="brand-item">
                            <img src="{{ asset('front/assets/img/brand/qantas.png') }}" alt="">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="brand-item">
                            <img src="{{ asset('front/assets/img/brand/salamair.png') }}" alt="">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="brand-item">
                            <img src="{{ asset('front/assets/img/brand/turkish.png') }}" alt="">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="brand-item">
                            <img src="{{ asset('front/assets/img/brand/vistara.png') }}" alt="">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="brand-item">
                            <img src="{{ asset('front/assets/img/brand/airarabia.png') }}" alt="">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="brand-item">
                            <img src="{{ asset('front/assets/img/brand/airasia.png') }}" alt="">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="brand-item">
                            <img src="{{ asset('front/assets/img/brand/indigo.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- brand-area-end -->
        <!-- service-area -->
        <section class="service-area">
            <div class="container">
                <div class="row align-items-end mb-50">
                    <div class="col-md-8">
                        <div class="section-title">
                            <span class="sub-title">Why Air flynow.lk</span>
                            <h2 class="title">Our Great Flight Options</h2>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="service-nav"></div>
                    </div>
                </div>
                <div class="row service-active">
                    <div class="col-lg-4">
                        <div class="service-item">
                            <div class="service-icon">
                                <img src="{{ asset('front/assets/img/icon/service_icon01.png') }}" alt="">
                            </div>
                            <div class="service-content">
                                <span>Service 01</span>
                                <h2 class="title">Extensive Airline Network</h2>
                                <div class="service-list">
                                    <ul>
                                        <li><i class="flaticon-check-mark"></i>Access to a vast network of airlines,
                                            including both domestic and international carriers, allowing your clients to
                                            choose from a wide range of flight options. </li>
                                        {{--
                           <li>Allowance now and save up <i class="flaticon-check-mark"></i></li>
                           <li>90% of baggage charges <i class="flaticon-check-mark"></i></li>
                           --}}
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="service-item">
                            <div class="service-icon">
                                <img src="{{ asset('front/assets/img/icon/service_icon02.png') }}" alt="">
                            </div>
                            <div class="service-content">
                                <span>Service 02</span>
                                <h2 class="title">Competitive Pricing</h2>
                                <div class="service-list">
                                    <ul>
                                        <li><i class="flaticon-check-mark"></i> Offer highly competitive airfares to your
                                            clients, ensuring that they receive the best value for their money.</li>
                                        {{--
                           <li>Select your preferred seat prior <i class="flaticon-check-mark"></i></li>
                           <li>Reserved for you. <i class="flaticon-check-mark"></i></li>
                           --}}
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="service-item">
                            <div class="service-icon">
                                <img src="{{ asset('front/assets/img/icon/service_icon03.png') }}" alt="">
                            </div>
                            <div class="service-content">
                                <span>Service 03</span>
                                <h2 class="title">Easy Booking Process:</h2>
                                <div class="service-list">
                                    <ul>
                                        <li><i class="flaticon-check-mark"></i> A user-friendly online booking system that
                                            enables quick and hassle-free reservations, saving time and effort for your
                                            clients.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="service-item">
                            <div class="service-icon">
                                <img src="{{ asset('front/assets/img/icon/service_icon01.png') }}" alt="">
                            </div>
                            <div class="service-content">
                                <span>Service 04</span>
                                <h2 class="title">Multiple Payment Options</h2>
                                <div class="service-list">
                                    <ul>
                                        <li><i class="flaticon-check-mark"></i>Provide flexible payment methods, including
                                            credit/debit cards, bank transfers, and online payment gateways, to accommodate
                                            different customer preferences.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="service-item">
                            <div class="service-icon">
                                <img src="{{ asset('front/assets/img/icon/service_icon02.png') }}" alt="">
                            </div>
                            <div class="service-content">
                                <span>Service 05</span>
                                <h2 class="title">24/7 Customer Support</h2>
                                <div class="service-list">
                                    <ul>
                                        <li><i class="flaticon-check-mark"></i>Offer round-the-clock customer support,
                                            ensuring that your clients receive assistance and resolution for any
                                            travel-related queries or issues.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="service-item">
                            <div class="service-icon">
                                <img src="{{ asset('front/assets/img/icon/service_icon03.png') }}" alt="">
                            </div>
                            <div class="service-content">
                                <span>Service 6</span>
                                <h2 class="title">Real-time Flight Updates</h2>
                                <div class="service-list">
                                    <ul>
                                        <li><i class="flaticon-check-mark"></i>Provide real-time information on flight
                                            schedules, delays, cancellations, and gate changes, ensuring that your clients
                                            stay informed and updated throughout their journey.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- service-area-end -->
        <!-- blog-area -->
        {{--
   <section class="blog-area blog-bg">
      <div class="container">
         <div class="row justify-content-center">
            <div class="col-lg-8">
               <div class="section-title text-center">
                  <span class="sub-title">our News Feeds</span>
                  <h2 class="title">Latest News Update</h2>
               </div>
            </div>
         </div>
         <div class="row justify-content-center">
            <div class="col-53">
               <div class="blog-item">
                  <div class="blog-thumb">
                     <a href="#"><img src="{{ asset('front/assets/img/blog/blog_img01.jpg')}}" alt=""></a>
                  </div>
                  <div class="blog-content">
                     <div class="blog-meta">
                        <ul>
                           <li><i class="fa-regular fa-user"></i> <a href="#">Emely Watson</a></li>
                           <li><i class="fa-solid fa-calendar-days"></i> February 19, 2022</li>
                        </ul>
                     </div>
                     <h2 class="title"><a href="#">Depending on your departure point and destination flights</a></h2>
                  </div>
               </div>
            </div>
            <div class="col-47">
               <div class="blog-item small-item">
                  <div class="blog-thumb">
                     <a href="#"><img src="{{ asset('front/assets/img/blog/blog_img02.jpg')}}" alt=""></a>
                  </div>
                  <div class="blog-content">
                     <div class="blog-meta">
                        <ul>
                           <li><i class="fa-regular fa-user"></i> <a href="#">Emely Watson</a></li>
                           <li><i class="fa-solid fa-calendar-days"></i> February 19, 2022</li>
                        </ul>
                     </div>
                     <h2 class="title"><a href="#">Happy International Country Flight Attendant Day</a></h2>
                  </div>
               </div>
               <div class="blog-item small-item">
                  <div class="blog-thumb">
                     <a href="blog-details.html"><img src="{{ asset('front/assets/img/blog/blog_img03.jpg')}}" alt=""></a>
                  </div>
                  <div class="blog-content">
                     <div class="blog-meta">
                        <ul>
                           <li><i class="fa-regular fa-user"></i> <a href="#">Emely Watson</a></li>
                           <li><i class="fa-solid fa-calendar-days"></i> February 19, 2022</li>
                        </ul>
                     </div>
                     <h2 class="title"><a href="#">The US is a Large Country and Climate Varies by Region</a></h2>
                  </div>
               </div>
               <div class="blog-item small-item">
                  <div class="blog-thumb">
                     <a href="blog-details.html"><img src="{{ asset('front/assets/img/blog/blog_img04.jpg')}}" alt=""></a>
                  </div>
                  <div class="blog-content">
                     <div class="blog-meta">
                        <ul>
                           <li><i class="fa-regular fa-user"></i> <a href="#">Emely Watson</a></li>
                           <li><i class="fa-solid fa-calendar-days"></i> February 19, 2022</li>
                        </ul>
                     </div>
                     <h2 class="title"><a href="#">But There are Dozen of Low-cost Airlines Including</a></h2>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   --}}
        <!-- blog-area-end -->
    </main>
@endsection
