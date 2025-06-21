@extends('layout.main')

@section('title') {{ 'About Us | '.env('APP_NAME') }} @endsection

@push('after-css')
@endpush
@section('content')
    <main>
        <!-- breadcrumb area start -->
        <section class="tp-breadcrumb-area p-relative z-index-1" data-background="assets/img/breadcrumb/breadcrumb-bg.jpg">
            <div class="tp-breadcrumb-bg-shape">
                <img class="tp-breadcrumb-bg-shape-1" src="assets/img/breadcrumb/breadcrumb-shape1.png" alt="">
                <img class="tp-breadcrumb-bg-shape-2" src="assets/img/breadcrumb/breadcrumb-shape2.png" alt="">
            </div>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-5">
                        <div class="tp-breadcrumb-content">
                            <h2 class="tp-breadcrumb-title">ABOUT US</h2>
                            <p class="tp-breadcrumb-body"><span><a class="home" href="index.html">Home <span class="spacing">/</span> </a></span>ABOUT US</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb area end -->
        <!-- about area start -->
        <section class="tp-about-3-area pt-120 pb-110">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-8">
                        <div class="tp-about-3-left-wrapper wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1s">
                            <div class="tp-about-3-left-thumb p-relative">
                                <img class="main-img" src="assets/img/about/about-3-img.jpg" alt="">
                                <img class="tp-about-3-left-thumb-shape" src="assets/img/about/about-3-img-shape1.jpg" alt="">
                                <img class="tp-about-3-left-thumb-shape-2" src="assets/img/about/about-3-img-shape2.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-9">
                        <div class="tp-about-3-right-wrapper wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1s">
                            <div class="tp-section-title-wrapper mb-35">
                                <span class="tp-section-subtitle">Hey !  We are tecza</span>
                                <h3 class="tp-section-title">We Always Try to Give
                                    Smart Solution</h3>
                                <p class="tp-section-paragraph">Suspendisse volutpat mi sit amet mauris egesta pellentesque. Phasellus vitae magna posuere, feugiat nunc vitae, placera <br>
                                    magna. Fusce non rhoncus lectus.
                                    </p>
                            </div>
                            <div class="tp-about-3-feature-item d-flex mb-35">
                                <div class="tp-about-3-feature-icon">
                                    <img src="assets/img/about/about-3-feature.svg" alt="">
                                </div>
                                <div class="tp-about-3-feature-content">
                                    <h4>Awesome Solution</h4>
                                    <p>Fusce luctus ante eget urna elemen molestie tortor congue. In hac habitasse plate</p>
                                </div>
                            </div>
                            <div class="tp-about-3-feature-list mb-35">
                                <ul>
                                    <li><img src="assets/img/about/about-3-list-icon.svg" alt=""> Donec auctor magna nec orci hend</li>
                                    <li><img src="assets/img/about/about-3-list-icon.svg" alt=""> Loreum ipsum dorl sit amt trest due vast</li>
                                </ul>
                            </div>
                            <div class="tp-about-3-btn-box">
                                <div class="tp-about-3-btn">
                                    <a class="tp-btn" rel="noreferrer" href="about.html" target="_blank"><span>Discovere More</span></a>
                                </div>
                                <div class="tp-about-3-years">
                                    <h4 class="tp-counter"><span class="purecounter" data-purecounter-duration="2" data-purecounter-end="25">25</span></h4>
                                    <p>Years of <br>
                                        Experience</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about area end -->



        <!-- feature area start -->
        <section class="tp-feature-4-area pt-120 pb-90 gray-bg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="tp-feature-4-wrapper text-center wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1s">
                            <div class="tp-feature-4-icon">
                                <span><i class="flaticon-solution"></i></span>
                            </div>
                            <div class="tp-feature-4-content">
                                <h4 class="tp-feature-4-title"><a href="service-details.html"> Business SOLUTION</a></h4>
                                <p class="tp-feature-4-paragraph">Tecza is the partner of choice for world’s</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="tp-feature-4-wrapper text-center wow fadeInUp" data-wow-delay=".5s" data-wow-duration="1s">
                            <div class="tp-feature-4-icon">
                                <span><i class="flaticon-seo"></i></span>
                            </div>
                            <div class="tp-feature-4-content">
                                <h4 class="tp-feature-4-title"><a href="service-details.html">Growth Business Planing</a></h4>
                                <p class="tp-feature-4-paragraph">Tecza is the partner of choice for world’s</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="tp-feature-4-wrapper text-center wow fadeInUp" data-wow-delay=".7s" data-wow-duration="1s">
                            <div class="tp-feature-4-icon">
                                <span><i class="flaticon-gear"></i></span>
                            </div>
                            <div class="tp-feature-4-content">
                                <h4 class="tp-feature-4-title"><a href="service-details.html">SEARCH ENGINE OPTIMIZE</a></h4>
                                <p class="tp-feature-4-paragraph">Tecza is the partner of choice for world’s</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- feature area end -->


        <!-- technology area start -->
        <section class="tp-technology-4-area pt-110 pb-90 p-relative z-index-1">
            <div class="tp-technology-4-shape">
                <img class="tp-technology-4-shape-1" src="assets/img/technology/tecnology-4-shape1.png" alt="">
                <img class="tp-technology-4-shape-2" src="assets/img/technology/tecnology-4-shape2.png" alt="">
            </div>
            <div class="container">
                <div class="row">
                    <div class="tp-section-title-wrapper mb-45 text-center wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1s">
                        <span class="tp-section-subtitle secondary">CHECK OUR technology index</span>
                        <h3 class="tp-section-title white">IMPROVE AND INOVATE TECH <br>
                            TREND WITH US</h3>
                    </div>
                </div>
                <div class="row tp-technology-4-row row-cols-xl-6 gx-20 row-cols-lg-3 row-cols-md-2 row-cols-sm-2 row-cols-1 justify-content-center">
                    <div class="col">
                        <div class="tp-technology-4-item mb-30 text-center p-relative fix z-index-1 transition-3 wow fadeInUp" data-wow-delay=".4s" data-wow-duration="1s">
                            <div class="tp-technology-4-icon">
                                <span><i class="flaticon-android"></i></span>
                            </div>
                            <div class="tp-technology-4-heading">
                                <h4>Android</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="tp-technology-4-item mb-30 text-center p-relative fix z-index-1 transition-3 wow fadeInUp" data-wow-delay=".5s" data-wow-duration="1s">
                            <div class="tp-technology-4-icon">
                                <span><i class="flaticon-apple"></i></span>
                            </div>
                            <div class="tp-technology-4-heading">
                                <h4>IOS</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="tp-technology-4-item mb-30 text-center p-relative fix z-index-1 transition-3 wow fadeInUp" data-wow-delay=".6s" data-wow-duration="1s">
                            <div class="tp-technology-4-icon">
                                <span><i class="flaticon-iot"></i></span>
                            </div>
                            <div class="tp-technology-4-heading">
                                <h4>IOT</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="tp-technology-4-item mb-30 text-center p-relative fix z-index-1 transition-3 wow fadeInUp" data-wow-delay=".7s" data-wow-duration="1s">
                            <div class="tp-technology-4-icon">
                                <span><i class="flaticon-tv"></i></span>
                            </div>
                            <div class="tp-technology-4-heading">
                                <h4>Televison</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="tp-technology-4-item mb-30 text-center p-relative fix z-index-1 transition-3 wow fadeInUp" data-wow-delay=".8s" data-wow-duration="1s">
                            <div class="tp-technology-4-icon">
                                <span><i class="flaticon-internet"></i></span>
                            </div>
                            <div class="tp-technology-4-heading">
                                <h4>Website</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="tp-technology-4-item mb-30 text-center p-relative fix z-index-1 transition-3 wow fadeInUp" data-wow-delay=".9s" data-wow-duration="1s">
                            <div class="tp-technology-4-icon">
                                <span><i class="flaticon-smart-watch"></i></span>
                            </div>
                            <div class="tp-technology-4-heading">
                                <h4>Wearable</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- technology area end -->


        <!-- choose-us area start -->
        <section class="tp-choose-us-5-area pt-120 pb-100">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5">
                        <div class="tp-choose-us-5-left-wrapper wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1s">
                            <div class="tp-choose-us-5-thumb p-relative">
                                <img src="assets/img/choose-us/choose-us-5-img.jpg" alt="">
                                <div class="tp-about-4-play-icon tp-choose-us-5-play-icon">
                                    <a class="tp-about-4-popup-video tp-choose-us-5-popup-video popup-video" href="https://www.youtube.com/watch?v=PO_fBTkoznc"><i class="fa-solid fa-play"></i></a>
                                </div>
                                <div class="tp-choose-us-5-thumb-shape">
                                    <img src="assets/img/choose-us/choose-us-5-grow.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-9">
                        <div class="tp-choose-us-2-wrapper tp-choose-us-5-wrapper ml-70 mr-30 wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1s">
                            <div class="tp-section-title-wrapper mb-50">
                                <span class="tp-section-subtitle">About TECZA Company</span>
                                <h3 class="tp-section-title">why people want to choose
                                    our tecza company</h3>
                                <p class="tp-section-paragraph">Tecza is the partner of choice for many of the world’s leading the enterprises ME and technology challengers. We businesses and the most technology
                                    elevate their value through custom software in your city area
                                    </p>
                            </div>
                            <div class="row gx-20">
                                <div class="col-lg-6 col-md-6">
                                    <div class="tp-choose-us-2-feature-item tp-choose-us-5-feature-item d-flex align-items-center">
                                        <div class="tp-choose-us-2-feature-icon">
                                            <span><i class="fa-regular fa-check"></i></span>
                                        </div>
                                        <div class="tp-choose-us-2-feature-content">
                                            <h4 class="tp-choose-us-2-feature-title tp-choose-us-5-feature-title">END TO END
                                                DEVELOPMENT</h4>
                                        </div>
                                        <div class="tp-choose-us-2-feature-shape">
                                            <img src="assets/img/choose-us/choose-us-feature-shape.png" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="tp-choose-us-2-feature-item tp-choose-us-5-feature-item d-flex align-items-center">
                                        <div class="tp-choose-us-2-feature-icon">
                                            <span><i class="fa-regular fa-check"></i></span>
                                        </div>
                                        <div class="tp-choose-us-2-feature-content">
                                            <h4 class="tp-choose-us-2-feature-title tp-choose-us-5-feature-title">SOFTWARE
                                                IT OUTSOURCE</h4>
                                        </div>
                                        <div class="tp-choose-us-2-feature-shape">
                                            <img src="assets/img/choose-us/choose-us-feature-shape.png" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="tp-choose-us-2-feature-item tp-choose-us-5-feature-item d-flex align-items-center">
                                        <div class="tp-choose-us-2-feature-icon">
                                            <span><i class="fa-regular fa-check"></i></span>
                                        </div>
                                        <div class="tp-choose-us-2-feature-content">
                                            <h4 class="tp-choose-us-2-feature-title tp-choose-us-5-feature-title">TECHNOLOGY  IT
                                                INFORMATION MANAGE</h4>
                                        </div>
                                        <div class="tp-choose-us-2-feature-shape">
                                            <img src="assets/img/choose-us/choose-us-feature-shape.png" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="tp-choose-us-2-feature-item tp-choose-us-5-feature-item d-flex align-items-center">
                                        <div class="tp-choose-us-2-feature-icon">
                                            <span><i class="fa-regular fa-check"></i></span>
                                        </div>
                                        <div class="tp-choose-us-2-feature-content">
                                            <h4 class="tp-choose-us-2-feature-title tp-choose-us-5-feature-title">INTERNAL NETWORK
                                                BUSINESS SYSTEMS</h4>
                                        </div>
                                        <div class="tp-choose-us-2-feature-shape">
                                            <img src="assets/img/choose-us/choose-us-feature-shape.png" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- choose-us area end -->


        <!-- call-to-action area start -->
        <section class="tp-cta-area p-relative pt-125 pb-150" data-background="assets/img/cta/cta-bg.jpg">
            <div class="tp-cta-bg-overlay"></div>
            <div class="tp-cta-bg-shape">
                <img class="tp-cta-bg-shape-1" src="assets/img/cta/cta-bg-shape1.png" alt="">
                <img class="tp-cta-bg-shape-2" src="assets/img/cta/cta-bg-shape2.png" alt="">
            </div>
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-xl-8">
                        <div class="tp-cta-content text-center wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1s">
                            <h2 class="tp-cta-section-title">Together We can Bring More
                                Creativity the World</h2>
                            <div class="tp-cta-btn">
                                <a class="tp-btn" rel="noreferrer" href="contact.html" target="_blank"><span>let’s get started</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- call-to-action area end -->


        <!-- team area start -->
        <section class="tp-team-3-area pt-110 pb-120">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-6 col-lg-8 col-md-9">
                        <div class="tp-section-title-wrapper pb-45 wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1s">
                            <span class="tp-section-subtitle">COMPANY BENIFITS</span>
                            <h3 class="tp-section-title">Meet With Our Expert <br>
                                Team Member Behind tecza</h3>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-4 col-md-3">
                        <div class="tp-team-3-arrow-box d-flex justify-content-end mt-20 wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1s">
                            <button class="slider-prev" tabindex="0" aria-label="Previous slide">
                                <i class="fa-sharp fa-regular fa-arrow-left"></i>
                            </button>
                            <button class="slider-next" tabindex="0" aria-label="Next slide">
                                <i class="fa-sharp fa-regular fa-arrow-right"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="tp-team-3-slider p-relative">
                            <div class="tp-team-3-active swiper-container">
                                <div class="swiper-wrapper">

                                    <!-- slider item 1 -->
                                    <div class="tp-team-3-wrapper swiper-slide wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1s">
                                        <div class="tp-team-3-thumb p-relative">
                                            <a href="team-details.html"><img src="assets/img/team/team-3-img1.jpg" alt=""></a>
                                            <div class="tp-team-3-social">
                                                <div class="tp-team-3-btn">
                                                    <button><i class="flaticon-share"></i></button>
                                                    <button class="tp-team-3-btn-2"><i class="flaticon-mail"></i></button>
                                                </div>
                                                <div class="tp-team-3-icon">
                                                    <a href="#"><i class="flaticon-pinterest"></i></a>
                                                    <a href="#"><i class="flaticon-instagram"></i></a>
                                                    <a href="#"><i class="flaticon-social"></i></a>
                                                    <a href="#"><i class="flaticon-facebook"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tp-team-3-content">
                                            <h4 class="tp-team-3-title"><a href="team-details.html">Charli Puthingah</a></h4>
                                            <p class="tp-team-3-paragarph">Designer</p>
                                        </div>
                                    </div>

                                    <!-- slider item 2 -->
                                    <div class="tp-team-3-wrapper swiper-slide wow fadeInUp" data-wow-delay=".5s" data-wow-duration="1s">
                                        <div class="tp-team-3-thumb p-relative">
                                            <a href="team-details.html"><img src="assets/img/team/team-3-img2.jpg" alt=""></a>
                                            <div class="tp-team-3-social">
                                                <div class="tp-team-3-btn">
                                                    <button><i class="flaticon-share"></i></button>
                                                    <button class="tp-team-3-btn-2"><i class="flaticon-mail"></i></button>
                                                </div>
                                                <div class="tp-team-3-icon">
                                                    <a href="#"><i class="flaticon-pinterest"></i></a>
                                                    <a href="#"><i class="flaticon-instagram"></i></a>
                                                    <a href="#"><i class="flaticon-social"></i></a>
                                                    <a href="#"><i class="flaticon-facebook"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tp-team-3-content">
                                            <h4 class="tp-team-3-title"><a href="team-details.html">Nilima vadai</a></h4>
                                            <p class="tp-team-3-paragarph">Developer</p>
                                        </div>
                                    </div>
                                    
                                    <!-- slider item 3 -->
                                    <div class="tp-team-3-wrapper swiper-slide wow fadeInUp" data-wow-delay=".7s" data-wow-duration="1s">
                                        <div class="tp-team-3-thumb p-relative">
                                            <a href="team-details.html"><img src="assets/img/team/team-3-img3.jpg" alt=""></a>
                                            <div class="tp-team-3-social">
                                                <div class="tp-team-3-btn">
                                                    <button><i class="flaticon-share"></i></button>
                                                    <button class="tp-team-3-btn-2"><i class="flaticon-mail"></i></button>
                                                </div>
                                                <div class="tp-team-3-icon">
                                                    <a href="#"><i class="flaticon-pinterest"></i></a>
                                                    <a href="#"><i class="flaticon-instagram"></i></a>
                                                    <a href="#"><i class="flaticon-social"></i></a>
                                                    <a href="#"><i class="flaticon-facebook"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tp-team-3-content">
                                            <h4 class="tp-team-3-title"><a href="team-details.html">Kevin jonshon</a></h4>
                                            <p class="tp-team-3-paragarph">Manager</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- team area end -->


        <!-- subscribe area start -->
        <section class="tp-subscribe-5-bottom-area primary-bg pt-60 pb-45 p-relative z-index-1">
            <div class="tp-subscribe-5-bottom-bg-shape">
                <img class="tp-subscribe-5-bottom-bg-shape-1" src="assets/img/subscribe/subscribe-5-bg-shape.png" alt="">
                <img class="tp-subscribe-5-bottom-bg-shape-2" src="assets/img/subscribe/subscribe-3-bottom-shape3.png" alt="">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-2 col-lg-2">
                        <div class="tp-subscribe-5-bottom-icon wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1s">
                            <span><i class="flaticon-solution"></i></span>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-7">
                        <div class="tp-subscribe-content wow fadeInUp" data-wow-delay=".5s" data-wow-duration="1s">
                            <h3 class="tp-subscribe-title tp-subscribe-5-title">Quickly Get Updates About Your <br>
                                Event and News!</h3>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3">
                        <div class="tp-subscribe-btn tp-subscribe-5-btn wow fadeInUp" data-wow-delay=".7s" data-wow-duration="1s">
                            <div class="tp-cta-btn mt-20">
                                <a class="tp-btn" rel="noreferrer" href="contact.html" target="_blank"><span>GET YOUR SOLUTION</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

@push('after-js')
@endpush