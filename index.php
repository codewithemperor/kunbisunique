﻿<html>
    <head>
        <?php include './includes/header.php'?>
    </head>
    <body class="">
       
        <!-- Start Navbar  -->
        <nav class="navbar navbar-expand-lg navbar-light py-0 pt-2" >
            <div class="container-fluid px-lg-4">
              <a class="navbar-brand p-2" href="index.php">
                <img src="img/kunbis_logo.webp" alt="">
              </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
    
              <div class="collapse navbar-collapse px-lg-4 justify-content-between" id="navbarsExample05">
                <ul class="navbar-nav flex-grow-1 justify-content-lg-center m-3 my-lg-0 ms-lg-0">

                    <li class="nav-item pe-lg-2">
                        <a class="nav-link" href="/travel/index.html">Travel & Tours</a>
                    </li>

                    <li class="nav-item pe-lg-2">
                        <a class="nav-link" href="/realestate/index.html">Estate Management</a>
                    </li>

                    <li class="nav-item pe-lg-2">
                        <a class="nav-link" href="/automobile/index.html">Automobile</a>
                    </li>


                    <li class="nav-item dropdown pe-lg-2">
                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Our Services</a>
                        <ul class="dropdown-menu p-lg-3">
                            <li><a class="dropdown-item p-3" href="/travel/flight-itinerary.html">Flight Reservation</a></li>
                            <li><a class="dropdown-item p-3" href="/travel/hotel-reservation.html">Hotel Reservation</a></li>
                            <li><a class="dropdown-item p-3" href="#">E-Visa/ETA</a></li>
                            <li><a class="dropdown-item p-3" href="/travel/study-in-canada.html">Study in Canada</a></li>
                            <li><a class="dropdown-item p-3" href="#">Buy Land</a></li>
                            <li><a class="dropdown-item p-3" href="#">Buy Properties</a></li>
                            <li><a class="dropdown-item p-3" href="#">Vacation/Tour</a></li>
                            <li><a class="dropdown-item p-3" href="#">Buy Car</a></li>
                        </ul>
                    </li>
                   
                    <li class="nav-item pe-lg-2">
                        <a class="nav-link" href="about.html">About us</a>
                    </li>
                    <li class="nav-item pe-lg-2">
                        <a class="nav-link" href="contact.html">Contact us</a>
                    </li>
                </ul>

                <div class="flex-shrink-0">
                    <a href="#" class="btn btn-accent p-2 px-3 mb-5 mb-lg-0 ms-3 ms-lg-0">Get Instant Visa</a>
                </div>
            </div>
        </nav>
        <!-- End Navbar -->

        <!-- Start Banner -->
        <section class="banner py-5 position-relative">
            <div class="shape-1 ms-lg-5 position-absolute top-50 start-0 translate-middle-y" data-aos="fade-right">
                <img src="img/svg/shape_1.png" alt="img" data-aos="zoom-in">
            </div>
            <div class="shape-2 me-lg-5 position-absolute top-50 end-0 translate-middle-y" data-aos="fade-left">
                <img src="img/svg/shape_5.png" alt="img" data-aos="zoom-in">
            </div>
            <div class="container position-absolute top-50 start-50 translate-middle">
                <div class="d-flex justify-content-center align-items-center gap-2">
                    <img src="img/svg/shape_1.png" class="d-md-none" alt="img" data-aos="zoom-in" style="height: 70px; width: auto;">
                    <img src="img/svg/shape_5.png" class="d-md-none" alt="img" data-aos="zoom-in" style="height: 70px; width: auto;">
                </div>
                <div class="row align-items-center justify-content-center">
                    <div class="text-center col-md-9 col-lg-8">
                        <div class="d-flex justify-content-center align-items-center typed-text-container">
                            <h1 class="banner-header display-1 my-3 px-1">The best place to get your <span id="typed-text"></span></h1>
                        </div>
                        <p class="mb-3 px-3">Discover top-quality services across Travel & Tours, Estate Management, and Automobile solutions. We provide everything you need in one place, ensuring convenience and satisfaction.</p>
                        <a href="#" class="btn btn-accent px-5 py-3" data-aos="flip-up">Get Started</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Banner -->


        <!-- Start Division Section -->
        <section class="division py-5" id="division">
            <div class="row">
                <div class="col text-center mb-5">
                    <h2 class="title mb-2" data-aos="fade-down">Our Division</h2>
                    <p class="col-md-9 mx-auto" data-aos="fade-down" data-aos-delay="200">At Kunbis Unique Ventures, our company is divided into three main sectors to serve your diverse needs: Travel and Tours, Estate Management, and Automobile. With over 15 years of industry expertise, we ensure quality and satisfaction across each division, providing you with the best services tailored to your goals.</p>
                </div>
            </div>

            <div class="row px-4 px-md-5">
                <!-- Card 1 -->
                <a href="#" class="col-md-4 division_card" data-aos="zoom-in" data-aos-delay="0">
                    <div class="division-item" style="background: url(img/banner/new-destination.webp); background-size: cover;">
                        <div class="division-item__text">
                            <h3 data-aos="fade-right" data-aos-delay="200">Travel & Tours</h3>
                            <p data-aos="fade-left" data-aos-delay="300">Experience affordable travel packages, luxury vacations, and seamless bookings.</p>
                        </div>
                    </div>
                </a>

                <!-- Card 2 -->
                <a href="#" class="col-md-4 division_card" data-aos="zoom-in" data-aos-delay="200">
                    <div class="division-item" style="background: url(img/banner/house.webp); background-size: cover;">
                        <div class="division-item__text">
                            <h3 data-aos="fade-right" data-aos-delay="400">Estate Management</h3>
                            <p data-aos="fade-left" data-aos-delay="500">Find prime properties, professional management, and housing solutions tailored for you.</p>
                        </div>
                    </div>
                </a>

                <!-- Card 3 -->
                <a href="#" class="col-md-4 division_card" data-aos="zoom-in" data-aos-delay="400">
                    <div class="division-item" style="background: url(img/banner/car-bg.webp); background-size: cover;">
                        <div class="division-item__text" >
                            <h3 data-aos="fade-right" data-aos-delay="600">Automobile</h3>
                            <p data-aos="fade-left" data-aos-delay="700">Get quality car sales, rentals, and trusted auto servicing all in one place.</p>
                        </div>
                    </div>
                </a>
            </div>
        </section>
        <!-- End Division Section -->

        <!-- Our services -->
        <section class="services">
            <div class="col-12 text-center mb-5 px-3 ">
                <h2 class="title mb-3" data-aos="fade-down" data-aos-delay="100">Our Services</h2>
                <p class="col-md-9 mx-auto" data-aos="fade-down" data-aos-delay="200">At Kunbis Unique Ventures, we offer a diverse range of services tailored to meet the needs of our clients. With over 15 years of experience in the industry, our expertise spans across various sectors, ensuring you receive the best service possible.</p>
            </div>
            
            <div class="swiper mySwiper" data-aos="zoom-in" data-aos-delay="300">
                
                <div class="swiper-wrapper" style="height: auto;">
                    <div class="swiper-slide">
                        <div class="card">
                            <div class="card-img">
                                <img src="img/services/visa.jpg" class="card-img-top" alt="Kunbis Unique Venture">
                            </div>
                            <div class="card-body p-4 row align-items-center">
                              <h5 class="card-title">VISA APPLICATIONS</h5>
                              <p class="card-text my-2">We help with your visa applications for a smooth travel experience.</p>
                              <a href="#" class="btn btn-accent py-2">View More</a>
                            </div>
                          </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="card">
                            <div class="card-img">
                                <img src="img/services/flight.jpg" class="card-img-top" alt="Kunbis Unique Venture">
                            </div>
                            <div class="card-body p-4 row align-items-center">
                              <h5 class="card-title">FLIGHT RESERVATION</h5>
                              <p class="card-text my-2">Book your flights effortlessly with our flight reservation services.</p>
                              <a href="/travel/flight-itinerary.html" class="btn btn-accent py-2">View More</a>
                            </div>
                          </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="card">
                            <div class="card-img">
                                <img src="img/services/hotel.jpg" class="card-img-top" alt="Kunbis Unique Venture">
                            </div>
                            <div class="card-body p-4 row align-items-center">
                              <h5 class="card-title">HOTEL RESERVATION</h5>
                              <p class="card-text my-2">We help you find the best hotel deals and make reservations.</p>
                              <a href="/travel/hotel-reservation.html" class="btn btn-accent py-2">View More</a>
                            </div>
                          </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="card">
                            <div class="card-img">
                                <img src="img/services/realestate.jpg" class="card-img-top" alt="Kunbis Unique Venture">
                            </div>
                            <div class="card-body p-4 row align-items-center">
                              <h5 class="card-title">REAL ESTATE MANAGEMENT</h5>
                              <p class="card-text my-2">Comprehensive management services for your real estate needs.</p>
                              <a href="#" class="btn btn-accent py-2">View More</a>
                            </div>
                          </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="card">
                            <div class="card-img">
                                <img src="img/services/tour.jpg" class="card-img-top" alt="Kunbis Unique Venture">
                            </div>
                            <div class="card-body p-4 row align-items-center">
                              <h5 class="card-title">TOUR PACKAGE</h5>
                              <p class="card-text my-2">Explore new places with our customized tour packages.</p>
                              <a href="#" class="btn btn-accent py-2">View More</a>
                            </div>
                          </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="card">
                            <div class="card-img">
                                <img src="img/services/insurance.jpg" class="card-img-top" alt="Kunbis Unique Venture">
                            </div>
                            <div class="card-body p-4 row align-items-center">
                              <h5 class="card-title">TRAVEL INSURANCE</h5>
                              <p class="card-text my-2">Protect your travels with our travel insurance packages.</p>
                              <a href="/travel/travel-insurance.html" class="btn btn-accent py-2">View More</a>
                            </div>
                          </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="card">
                            <div class="card-img">
                                <img src="img/services/land.jpg" class="card-img-top" alt="Kunbis Unique Venture">
                            </div>
                            <div class="card-body p-4 row align-items-center">
                              <h5 class="card-title">LAND SALES</h5>
                              <p class="card-text my-2">We facilitate land sales and ensure a smooth transaction.</p>
                              <a href="#" class="btn btn-accent py-2">View More</a>
                            </div>
                          </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="card">
                            <div class="card-img">
                                <img src="img/services/passport.jpg" class="card-img-top" alt="Kunbis Unique Venture">
                            </div>
                            <div class="card-body p-4 row align-items-center">
                              <h5 class="card-title">PASSPORT APPLICATION</h5>
                              <p class="card-text my-2">Get assistance with your passport applications to travel hassle-free.</p>
                              <a href="#" class="btn btn-accent py-2">View More</a>
                            </div>
                          </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="card">
                            <div class="card-img">
                                <img src="img/services/funds.jpg" class="card-img-top" alt="Kunbis Unique Venture">
                            </div>
                            <div class="card-body p-4 row align-items-center">
                              <h5 class="card-title">PROOF OF FUNDS</h5>
                              <p class="card-text my-2">We assist in providing proof of funds for your travel and residency needs.</p>
                              <a href="#" class="btn btn-accent py-2">View More</a>
                            </div>
                          </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="card">
                            <div class="card-img">
                                <img src="img/services/documents.jpg" class="card-img-top" alt="Kunbis Unique Venture">
                            </div>
                            <div class="card-body p-4 row align-items-center">
                              <h5 class="card-title">SUPPORTING DOCUMENT</h5>
                              <p class="card-text my-2">We provide assistance in obtaining necessary supporting documents.</p>
                              <a href="#" class="btn btn-accent py-2">View More</a>
                            </div>
                          </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="card">
                            <div class="card-img">
                                <img src="img/services/local-used-car.jpg" class="card-img-top" alt="Kunbis Unique Venture">
                            </div>
                            <div class="card-body p-4 row align-items-center">
                              <h5 class="card-title">LOCAL USED CAR SALES</h5>
                              <p class="card-text my-2">Find affordable local used cars in great condition to suit your budget.</p>
                              <a href="#" class="btn btn-accent py-2">View More</a>
                            </div>
                          </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="card">
                            <div class="card-img">
                                <img src="img/services/imported-used-car.jpg" class="card-img-top" alt="Kunbis Unique Venture">
                            </div>
                            <div class="card-body p-4 row align-items-center">
                              <h5 class="card-title">IMPORTED USED CAR SALES</h5>
                              <p class="card-text my-2">Get the best deals on imported used cars with top-notch quality and performance.</p>
                              <a href="#" class="btn btn-accent py-2">View More</a>
                            </div>
                          </div>
                    </div>


                </div>
                
            </div>

           

        </section>
        <!-- End our services -->


        <!-- WHY Kunbis Unique Venture -->
        <section class="why">
            <div class="container px-3 px-md-0">
                <div class="col-12 text-center">
                    <h2 class="title mb-5" data-aos="fade-down" data-aos-delay="100">Why choose Kunbis Unique Venture?</h2>
                </div>

                <div class="row mt-4 mt-md-5 row-cols row-cols-md-2 row-cols-lg-3 row-gap-4">
                    <!-- Card 1 -->
                    <div class="col-sm" data-aos="fade-up" data-aos-delay="200">
                        <div class="card h-100">
                            <div class="card-body p-4">
                                <i class="fa fa-plane" data-aos="zoom-in" data-aos-delay="300"></i>
                                <p class="card-title mb-2" data-aos="fade-up" data-aos-delay="400">Expert Travel Packages</p>
                                <p data-aos="fade-up" data-aos-delay="500">Enjoy customized travel packages with seamless bookings, luxury accommodations, and exclusive tours that cater to your needs.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="col-sm" data-aos="fade-up" data-aos-delay="300">
                        <div class="card h-100">
                            <div class="card-body p-4">
                                <i class="fa fa-home" data-aos="zoom-in" data-aos-delay="400"></i>
                                <p class="card-title mb-2" data-aos="fade-up" data-aos-delay="500">Real Estate Services</p>
                                <p data-aos="fade-up" data-aos-delay="600">Discover prime properties and professional estate management with tailored solutions for buying, renting, or investment opportunities.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Card 3 -->
                    <div class="col-sm" data-aos="fade-up" data-aos-delay="400">
                        <div class="card h-100">
                            <div class="card-body p-4">
                                <i class="fa fa-car" data-aos="zoom-in" data-aos-delay="500"></i>
                                <p class="card-title mb-2" data-aos="fade-up" data-aos-delay="600">Reliable Automobile Solutions</p>
                                <p data-aos="fade-up" data-aos-delay="700">Access quality car sales, rentals, and maintenance services to ensure your vehicle needs are met with trust and expertise.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Card 4 -->
                    <div class="col-sm" data-aos="fade-up" data-aos-delay="500">
                        <div class="card h-100">
                            <div class="card-body p-4">
                                <i class="fa fa-globe" data-aos="zoom-in" data-aos-delay="600"></i>
                                <p class="card-title mb-2" data-aos="fade-up" data-aos-delay="700">Global Reach</p>
                                <p data-aos="fade-up" data-aos-delay="800">With a presence in multiple regions, we offer services that cater to both local and international clients across all our sectors.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Card 5 -->
                    <div class="col-sm" data-aos="fade-up" data-aos-delay="600">
                        <div class="card h-100">
                            <div class="card-body p-4">
                                <i class="fa fa-star" data-aos="zoom-in" data-aos-delay="700"></i>
                                <p class="card-title mb-2" data-aos="fade-up" data-aos-delay="800">Customer-Centric Approach</p>
                                <p data-aos="fade-up" data-aos-delay="900">We prioritize customer satisfaction with personalized support, tailored solutions, and a commitment to meeting your needs.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Card 6 -->
                    <div class="col-sm" data-aos="fade-up" data-aos-delay="700">
                        <div class="card h-100">
                            <div class="card-body p-4">
                                <i class="fa fa-calendar-check" data-aos="zoom-in" data-aos-delay="800"></i>
                                <p class="card-title mb-2" data-aos="fade-up" data-aos-delay="900">Tailored Guidance</p>
                                <p data-aos="fade-up" data-aos-delay="1000">Receive expert advice and support from our dedicated team to help you make informed decisions in travel, real estate, and automobile services.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- WHY Kunbis Unique Venture ends -->

        <!-- Start About us -->
        <section class="company section" id="about">
            <div class="container">
                <div class="row align-items-center">

                    <!-- Section Title -->
                    <div class="col-12 text-center">
                        <h2 class="title mb-5" data-aos="fade-down" data-aos-delay="100">Our History</h2>
                    </div>

                    <!-- Content Section -->
                    <div class="col-lg-6 px-3">
                        <div class="content" data-aos="fade-right" data-aos-delay="200">

                            <p class="mb-3" data-aos="fade-up" data-aos-delay="400">
                                With over 15 years of experience, Kunbis Unique Ventures has been delivering outstanding
                                services in Travel and Tours, Estate Management, and Automobile. Our dedication goes beyond just meeting industry standards; we aim to elevate your business and lifestyle through tailored solutions.
                            </p>

                            <ul class="list-unstyled ms-2">
                                <li data-aos="fade-up" data-aos-delay="500">Registered with the Nigerian government and committed to quality service.</li>
                                <li data-aos="fade-up" data-aos-delay="600">A long-standing reputation built over 15+ years in business.</li>
                                <li data-aos="fade-up" data-aos-delay="700">Professional expertise across our subdivisions: Travel & Tours, Estate Management, and Automobile.</li>
                                <li data-aos="fade-up" data-aos-delay="800">We offer free initial consultation and personalized support to meet your unique needs.</li>
                                <li data-aos="fade-up" data-aos-delay="900">Our services are trusted by some of the most successful businesses and clients.</li>
                                <li data-aos="fade-up" data-aos-delay="1000">A dedicated team of professionals committed to driving growth and delivering results.</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Image Section -->
                    <div class="col-lg-6">
                        <div class="img d-flex position-relative">
                            <div class="imgone" data-aos="fade-down" data-aos-delay="600">
                                <div class="simpleParallax" style="overflow: hidden;">
                                    <img class="thumparallax-down" src="img/about-two-img-3.jpg" alt="">
                                </div>
                            </div>
                            <div class="imgtwo" data-aos="fade-up" data-aos-delay="800">
                                <div class="simpleParallax" style="overflow: hidden;">
                                    <img class="thumparallax" src="img/about-two-img-1.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End About us -->
        
        
        <!-- Start FAQ -->
        <section class="faq">
            <div class="container" data-aos="fade-up">
                <div class="row align-items-center">

                    <div class="col-12 text-center">
                        <h2 class="title mb-5" data-aos="fade-up" data-aos-delay="100">Frequently Asked Questions</h2>
                    </div>

                    <div class="col-lg-6">
                        <div class="img-box3">
                            <div class="img1 global-img col-lg-6" data-aos="zoom-in" data-aos-delay="200">
                                <img src="img/about_3_3.jpg" alt="About" />
                            </div>
                            <div class="img2 global-img col-lg-7" data-aos="zoom-in" data-aos-delay="300">
                                <img src="img/about_3_3.jpg" alt="About" />
                            </div>
                            <div class="img3 global-img col-lg-5" data-aos="zoom-in" data-aos-delay="400">
                                <img src="img/about_3_3.jpg" alt="About" />
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="row row-cols-1 gap-3 my-4">
                            <div class="col">
                                <div class="accordion" id="faqAccordion">
                            
                                    <div class="accordion-item mb-3" data-aos="fade-left" data-aos-delay="100">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed p-4" type="button" data-bs-toggle="collapse" data-bs-target="#faq-one" aria-expanded="false" aria-controls="faq-one" data-aos="fade-right">
                                                Do you offer student visa assistance?
                                            </button>
                                        </h2>
                                        <div id="faq-one" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                            <div class="accordion-body" data-aos="fade-up" data-aos-delay="150">
                                                Yes, we assist students in obtaining visas for their chosen study destinations. Our services include helping with the application process, preparing necessary documents, and providing guidance on visa interviews.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item mb-3" data-aos="fade-left" data-aos-delay="200">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed p-4" type="button" data-bs-toggle="collapse" data-bs-target="#faq-two" aria-expanded="false" aria-controls="faq-two" data-aos="fade-right">
                                                Do you have tour packages?
                                            </button>
                                        </h2>
                                        <div id="faq-two" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                            <div class="accordion-body" data-aos="fade-up" data-aos-delay="250">
                                                Yes, we offer a variety of tour packages tailored to different interests and budgets. Whether you're looking for adventure, cultural experiences, or relaxation, we have something for everyone.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item mb-3" data-aos="fade-left" data-aos-delay="300">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed p-4" type="button" data-bs-toggle="collapse" data-bs-target="#faq-three" aria-expanded="false" aria-controls="faq-three" data-aos="fade-right">
                                                Do you sell land and properties?
                                            </button>
                                        </h2>
                                        <div id="faq-three" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                            <div class="accordion-body" data-aos="fade-up" data-aos-delay="350">
                                                Yes, we offer services for buying and selling land and properties. Our team can help you find the perfect location and guide you through the purchasing process to ensure a smooth transaction.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item mb-3" data-aos="fade-left" data-aos-delay="400">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed p-4" type="button" data-bs-toggle="collapse" data-bs-target="#faq-four" aria-expanded="false" aria-controls="faq-four" data-aos="fade-right">
                                                Can you help with travel insurance?
                                            </button>
                                        </h2>
                                        <div id="faq-four" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                            <div class="accordion-body" data-aos="fade-up" data-aos-delay="450">
                                                Yes, we can assist you in selecting and purchasing travel insurance. We provide options for coverage that includes medical expenses, trip cancellations, and lost luggage, ensuring you travel with peace of mind.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item mb-3" data-aos="fade-left" data-aos-delay="500">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed p-4" type="button" data-bs-toggle="collapse" data-bs-target="#faq-five" aria-expanded="false" aria-controls="faq-five" data-aos="fade-right">
                                                Do you arrange flights and accommodation?
                                            </button>
                                        </h2>
                                        <div id="faq-five" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                            <div class="accordion-body" data-aos="fade-up" data-aos-delay="550">
                                                Yes, we offer complete travel arrangements, including flight bookings and accommodation reservations. Whether you need budget-friendly options or luxury stays, we can find the best deals for you.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item mb-3" data-aos="fade-left" data-aos-delay="600">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed p-4" type="button" data-bs-toggle="collapse" data-bs-target="#faq-six" aria-expanded="false" aria-controls="faq-six" data-aos="fade-right">
                                                How can I pay for your services?
                                            </button>
                                        </h2>
                                        <div id="faq-six" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                            <div class="accordion-body" data-aos="fade-up" data-aos-delay="650">
                                                We accept various payment methods, including bank transfers, credit/debit cards, and online payment platforms. For international clients, we can facilitate secure cross-border payment options.
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Ends FAQ -->

        <!-- Start Our Staff -->        
        <?php include './includes/team.php'?>
        <!-- End Our Staff -->

        
        <!-- Start Contact us -->
        <section class="contact overflow-hidden" data-aos="fade-up">
            <div class="container">
                <div class="row gy-4 justify-content-between align-items-center">
                    <div class="col-lg-5">
                        <div class="p-lg-0">
                            <div class="title-area pe-xl-5">
                                <span class="sub-title text-white" data-aos="fade-down">Get in touch</span>
                                <h2 class="sec-title text-white display-4 my-2" data-aos="fade-up">Say hello to us</h2>
                                <p class="contact-text text-white" data-aos="fade-up" data-aos-delay="100">We’d love to hear from you. Our friendly team is always here to chat.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="contact-form-area p-4 py-5" data-aos="fade-left">
                            <form action="">
                                <div class="row">
                                    <div class="text-start mb-3">
                                        <label for="fullName" class="form-label fw-bold" data-aos="fade-right">Full Name</label>
                                        <div class="position-relative">
                                            <input type="text" class="form-control ps-3" name="fullName" id="fullName" placeholder="Enter your full name" data-aos="fade-up" data-aos-delay="200">
                                            <img src="img/svg/user.svg" alt="" class="me-3 position-absolute top-50 end-0 translate-middle-y" data-aos="zoom-in" data-aos-delay="300">
                                        </div>
                                    </div>

                                    <div class="text-start mb-3">
                                        <label for="email" class="form-label fw-bold" data-aos="fade-right">Email address</label>
                                        <div class="position-relative">
                                            <input type="email" class="form-control ps-3" name="email" id="email" placeholder="Enter Email Address" data-aos="fade-up" data-aos-delay="200">
                                            <img src="img/svg/mail.svg" alt="" class="me-3 position-absolute top-50 end-0 translate-middle-y" data-aos="zoom-in" data-aos-delay="300">
                                        </div>
                                    </div>

                                    <div class="text-start mb-3">
                                        <label for="subject" class="form-label fw-bold" data-aos="fade-right">Your Subject</label>
                                        <div class="position-relative">
                                            <input type="text" class="form-control ps-3" name="subject" id="subject" placeholder="Enter a subject" data-aos="fade-up" data-aos-delay="200">
                                            <img src="img/svg/chat.svg" alt="" class="me-3 position-absolute top-50 end-0 translate-middle-y" data-aos="zoom-in" data-aos-delay="300">
                                        </div>
                                    </div>

                                    <div class="text-start mb-3">
                                        <label for="message" class="form-label fw-bold" data-aos="fade-right">Your Message</label>
                                        <div class="position-relative">
                                            <textarea name="message" id="message" rows="5" placeholder="Your Message" class="form-control" data-aos="fade-up" data-aos-delay="200"></textarea>
                                            <img src="img/svg/chat.svg" alt="" class="me-3 mt-3 position-absolute top-0 end-0" data-aos="zoom-in" data-aos-delay="300">
                                        </div>
                                    </div>

                                    <div class="form-btn mt-3" data-aos="fade-up" data-aos-delay="400">
                                        <button type="submit" class="btn btn-accent px-5 p-3">
                                            Send Message 
                                            <div class="d-inline-block">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M21.0477 3.05293C18.8697 0.707361 2.48648 6.4532 2.50001 8.551C2.51535 10.9299 8.89809 11.6617 10.6672 12.1581C11.7311 12.4565 12.016 12.7625 12.2613 13.8781C13.3723 18.9305 13.9301 21.4435 15.2014 21.4996C17.2278 21.5892 23.1733 5.342 21.0477 3.05293Z" stroke="white" stroke-width="1.5"/>
                                                    <path d="M11.5 12.5L15 9" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                            </div>
                                        </button>
                                    </div>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Contact us -->

        <!-- Start Newsletter Section -->
        <?php include './includes/newsletter.php'?>
        <!-- End Newsletter Section -->

        <!-- Start Footer Section -->
        <?php include './includes/footer.php'?>
        <!-- End Footer Section -->
       

        

        <!-- Include Typed.js script -->
        <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>

       
 
         
         
         <!-- Custom JS -->
         <script src="js/main.js"></script>
         <script>
            var typed = new Typed("#typed-text", {
              strings: [
                "affordable travel packages.",
                "luxury vacation deals.",
                "tailored tour experiences.",
                "prime property listings.",
                "quality car sales.",
                "trusted automobile solutions."
              ],
              typeSpeed: 50,
              backSpeed: 30,
              loop: true
            });
        </script>
          
    </body>
</html>