@extends('layout.main')

@section('title') {{ 'Home | '.env('APP_NAME') }} @endsection

@push('after-css')
@endpush
@section('content')   
    <main>
        <!-- slider area start -->
        <section class="tp-slider-area fix">
            <div class="tp-slider-wrapper p-relative">
                <div class="swiper-container tp-slider-active">
                    <div class="swiper-wrapper">

                        <!-- slide item 1 -->
                        <div class="swiper-slide">
                            <div class="tp-slider-height tp-slider-2-height">
                                <div class="tp-slider-bg tp-slider-2-overlay p-relative" data-background="{{asset('template/assets/img/slider/slider-2-bg-1.jpg')}}"></div>
                                <div class="container">
                                    <div class="row align-items-center">
                                        <div class="col-xl-3 col-lg-3 col-md-3">
                                            <div class="tp-slider-2-left p-relative z-index-11">
                                                <div class="tp-slider-2-content-shape p-relative">
                                                    <img src="{{asset('template/assets/img/slider/shape/home-two/slider-2-shape-1.png')}}" alt="">
                                                    <div class="tp-slider-2-content-icon">
                                                        <a class="popup-video" href="https://www.youtube.com/watch?v=PO_fBTkoznc"><i class="fa-regular fa-arrow-up-right"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-8 col-md-9 col-sm-8">
                                            <div class="tp-slider-2-content">
                                                <div class="tp-slider-title-box">
                                                    <h1 class="tp-slider-title tp-slider-2-title">discover what
                                                        your expert can <br>
                                                        do for your <img class="tp-slider-2-heding-shape" src="{{asset('template/assets/img/slider/shape/home-two/slider-2-content-shape.png')}}" alt="">
                                                        </h1>
                                                </div>
                                                <div class="tp-slider-btn-box d-inline-flex mt-40">
                                                    <a class="tp-btn" rel="noreferrer" href="{{asset('template/contact.html')}}" target="_blank"><span>Discover More</span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tp-slider-2-shape">
                                    <img class="tp-slider-2-bg-shape" src="{{asset('template/assets/img/slider/shape/home-two/slider-2-bg-shape.png')}}" alt="">
                                </div>
                            </div>
                        </div>

                        <!-- slide item 2 -->
                        <div class="swiper-slide">
                            <div class="tp-slider-height tp-slider-2-height">
                                <div class="tp-slider-bg tp-slider-2-overlay p-relative" data-background="{{asset('template/assets/img/slider/slider-2-bg-2.jpg')}}"></div>
                                <div class="container">
                                    <div class="row align-items-center">
                                        <div class="col-xl-3 col-lg-3 col-md-3">
                                            <div class="tp-slider-2-left p-relative z-index-11">
                                                <div class="tp-slider-2-content-shape p-relative">
                                                    <img src="{{asset('template/assets/img/slider/shape/home-two/slider-2-shape-1.png')}}" alt="">
                                                    <div class="tp-slider-2-content-icon">
                                                        <a class="popup-video" href="https://www.youtube.com/watch?v=PO_fBTkoznc"><i class="fa-regular fa-arrow-up-right"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-8 col-md-9 col-sm-8">
                                            <div class="tp-slider-2-content">
                                                <div class="tp-slider-title-box">
                                                    <h1 class="tp-slider-title tp-slider-2-title">Unveiling a Their Potentials  for<br> Your Needs<img class="tp-slider-2-heding-shape" src="{{asset('template/assets/img/slider/shape/home-two/slider-2-content-shape.png')}}" alt="">
                                                        </h1>
                                                </div>
                                                <div class="tp-slider-btn-box d-inline-flex mt-40">
                                                    <a class="tp-btn" rel="noreferrer" href="{{asset('template/contact.html')}}" target="_blank"><span>Discover More</span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tp-slider-2-shape">
                                    <img class="tp-slider-2-bg-shape" src="{{asset('template/assets/img/slider/shape/home-two/slider-2-bg-shape.png')}}" alt="">
                                </div>
                            </div>
                        </div>

                        <!-- slide item 3 -->
                        <div class="swiper-slide">
                            <div class="tp-slider-height tp-slider-2-height">
                                <div class="tp-slider-bg tp-slider-2-overlay p-relative" data-background="{{asset('template/assets/img/slider/slider-2-bg-3.jpg')}}"></div>
                                <div class="container">
                                    <div class="row align-items-center">
                                        <div class="col-xl-3 col-lg-3 col-md-3">
                                            <div class="tp-slider-2-left p-relative z-index-11">
                                                <div class="tp-slider-2-content-shape p-relative">
                                                    <img src="{{asset('template/assets/img/slider/shape/home-two/slider-2-shape-1.png')}}" alt="">
                                                    <div class="tp-slider-2-content-icon">
                                                        <a class="popup-video" href="https://www.youtube.com/watch?v=PO_fBTkoznc"><i class="fa-regular fa-arrow-up-right"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-8 col-md-9 col-sm-8">
                                            <div class="tp-slider-2-content">
                                                <div class="tp-slider-title-box">
                                                    <h1 class="tp-slider-title tp-slider-2-title">Exploring your Their Abilities <br> for Benefit <img class="tp-slider-2-heding-shape" src="{{asset('template/assets/img/slider/shape/home-two/slider-2-content-shape.png')}}" alt="">
                                                        </h1>
                                                </div>
                                                <div class="tp-slider-btn-box d-inline-flex mt-40">
                                                    <a class="tp-btn" rel="noreferrer" href="{{asset('template/contact.html')}}" target="_blank"><span>Discover More</span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tp-slider-2-shape">
                                    <img class="tp-slider-2-bg-shape" src="{{asset('template/assets/img/slider/shape/home-two/slider-2-bg-shape.png')}}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tp-slider-dots dots-color">
                    <span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 1"></span>
                    <span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 2"></span>
                    <span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button" aria-label="Go to slide 3"></span>
                </div>
            </div>
        </section>
        <!-- slider area end -->
        <!-- about area start -->
        <section class="tp-about-2-area pt-120 pb-120">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-8">
                        <div class="tp-about-2-left-wrapper wow fadeInLeft" data-wow-delay=".3s" data-wow-duration="1s">
                            <div class="tp-about-2-thumb p-relative">
                                <img class="tp-about-2-main-thumb" src="{{asset('template/assets/img/about/about-2-thum.jpg')}}" alt="">
                                <img class="tp-about-2-img2" src="{{asset('template/assets/img/about/about-2-thum2.jpg')}}" alt="">
                                <div class="tp-about-2-thumb-shape">
                                    <div class="tp-about-2-thumb-content-shape">
                                        <div class="tp-about-2-thumb-content-shape-img">
                                            <img src="{{asset('template/assets/img/about/about-2-shape1.jpg')}}" alt="">
                                        </div>
                                        <div class="tp-about-2-thumb-content">
                                            <h4 class="tp-counter tp-about-2-thumb-title"><span class="purecounter" data-purecounter-duration="2" data-purecounter-end="4">4</span>.2 K</h4>
                                            <!-- <h4 class="tp-about-2-thumb-title">4.2 K</h4> -->
                                            <p class="tp-about-2-thumb-paragraph">Satisfied Clients</p>
                                        </div>
                                    </div>
                                    <img class="tp-about-2-thumb-shape2" src="{{asset('template/assets/img/about/about-2-shape2.png')}}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-9">
                        <div class="tp-about-2-wrapper mt-15 wow fadeInRight" data-wow-delay=".3s" data-wow-duration="1s">
                            <div class="tp-section-title-wrapper mb-35">
                                <span class="tp-section-subtitle">KNOW ABOUT OUR TECZA</span>
                                <h3 class="tp-section-title">Always Try to Deliver More
                                    Than You Expected</h3>
                                <p class="tp-section-paragraph">Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin lorem is simply free text quis bibendum. There are many variations
                                    <br> of passages of available
                                    </p>
                            </div>
                            <div class="tp-about-2-feature-box">
                                <div class="tp-about-2-feature-item d-flex">
                                    <div class="tp-about-2-feature-icon">
                                        <img src="{{asset('template/assets/img/about/about-2-feature-icon1.svg')}}" alt="">
                                    </div>
                                    <div class="tp-about-2-feature-content">
                                        <h4>Best Business <br>
                                            Solution </h4>
                                    </div>
                                </div>
                                <div class="tp-about-2-feature-item d-flex ml-80">
                                    <div class="tp-about-2-feature-icon">
                                        <img src="{{asset('template/assets/img/about/about-2-feature-icon2.svg')}}" alt="">
                                    </div>
                                    <div class="tp-about-2-feature-content">
                                        <h4>Marketing <br>
                                            Management</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="tp-about-2-progres-skill mb-30">
                                <div class="tp-about-2-skill fix pb-20">
                                    <label class="tp-about-2-label">Development</label>
                                    <div class="progress tp-about-2-progress">
                                        <div class="progress-bar tp-about-2-progress-bar wow slideInLeft" data-wow-duration="1s" data-wow-delay=".8s" role="progressbar" aria-label="Example with label" style="width: 75%; visibility: visible; animation-duration: 1s; animation-delay: 0.8s; animation-name: slideInLeft;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"><span class="progresscounter">75%</span></div>
                                    </div>
                                </div>
                                <div class="tp-about-2-skill fix pb-20">
                                    <label class="tp-about-2-label">Web  Design</label>
                                    <div class="progress tp-about-2-progress">
                                        <div class="progress-bar tp-about-2-progress-bar wow slideInLeft" data-wow-duration="1s" data-wow-delay=".8s" role="progressbar" aria-label="Example with label" style="width: 85%; visibility: visible; animation-duration: 1s; animation-delay: 0.8s; animation-name: slideInLeft;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"><span class="progresscounter">85%</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="tp-about-2-button">
                                <div class="tp-about-2-btn">
                                    <a class="tp-btn" rel="noreferrer" href="{{asset('template/about.html')}}" target="_blank"><span>Discover More</span></a>
                                </div>
                                <div class="tp-about-2-bottom-item d-flex">
                                    <div class="tp-about-2-bottom-icon">
                                        <img src="{{asset('template/assets/img/about/about-camp-icon.svg')}}" alt="">
                                    </div>
                                    <div class="tp-about-2-bottom-content">
                                        <h2 class="tp-counter tp-about-2-bottom-title"><span class="purecounter" data-purecounter-duration="2" data-purecounter-end="25">25</span></h2>
                                        <p class="tp-about-2-bottom-paragraph">Years of Experience</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about area end -->
        <!-- service area start -->
        <section class="tp-service-2-area tp-service-2-overlay pt-95 pb-90" data-background="{{asset('template/assets/img/service/service-2-bg.png')}}">
            <div class="tp-service-2-bg-overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="tp-service-2-top-wrapper mt-15">
                        <div class="tp-section-title-wrapper mb-55 text-center wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1s">
                            <span class="tp-section-subtitle">CHECK OUR TECZA SERVICES</span>
                            <h3 class="tp-section-title">WE ALWAYS TRY TO GIVE <br>
                                HIGH QUALITY SERVICES OUR CLIENTS</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="tp-service-2-wrapper wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1s">
                            <div class="tp-service-2-thumb">
                                <a href="{{asset('template/service-details.html')}}"><img src="{{asset('template/assets/img/service/service-2-img1.jpg')}}" alt=""></a>
                            </div>
                            <div class="tp-service-2-content">
                                <div class="tp-service-2-icon">
                                    <span><i class="flaticon-advertisig-agency"></i></span>
                                </div>
                                <h4 class="tp-service-2-title"><a href="{{asset('template/service-details.html')}}">digital marketing</a></h4>
                                <p class="tp-service-2-paragraph">Outsourcing is just a tool my own
                                    achieve and business</p>
                            </div>
                            <div class="tp-service-2-button">
                                <a class="tp-service-2-btn" href="{{asset('template/service-details.html')}}">READ MORE</a>
                                <a class="tp-service-2-arrow-btn" href="{{asset('template/service-details.html')}}"><i class="flaticon-next"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="tp-service-2-wrapper wow fadeInUp" data-wow-delay=".5s" data-wow-duration="1s">
                            <div class="tp-service-2-thumb">
                                <a href="{{asset('template/service-details.html')}}"><img src="{{asset('template/assets/img/service/service-2-img2.jpg')}}" alt=""></a>
                            </div>
                            <div class="tp-service-2-content">
                                <div class="tp-service-2-icon">
                                    <span><i class="flaticon-data-visualization-1"></i></span>
                                </div>
                                <h4 class="tp-service-2-title"><a href="{{asset('template/service-details.html')}}">it management</a></h4>
                                <p class="tp-service-2-paragraph">Outsourcing is just a tool my own
                                    achieve and business</p>
                            </div>
                            <div class="tp-service-2-button">
                                <a class="tp-service-2-btn" href="{{asset('template/service-details.html')}}">READ MORE</a>
                                <a class="tp-service-2-arrow-btn" href="{{asset('template/service-details.html')}}"><i class="flaticon-next"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="tp-service-2-wrapper wow fadeInUp" data-wow-delay=".7s" data-wow-duration="1s">
                            <div class="tp-service-2-thumb">
                                <a href="service-details.html"><img src="{{asset('template/assets/img/service/service-2-img3.jpg')}}" alt=""></a>
                            </div>
                            <div class="tp-service-2-content">
                                <div class="tp-service-2-icon">
                                    <span><i class="flaticon-graph"></i></span>
                                </div>
                                <h4 class="tp-service-2-title"><a href="{{asset('template/service-details.html')}}">marketing strategy</a></h4>
                                <p class="tp-service-2-paragraph">Outsourcing is just a tool my own
                                    achieve and business</p>
                            </div>
                            <div class="tp-service-2-button">
                                <a class="tp-service-2-btn" href="{{asset('template/service-details.html')}}">READ MORE</a>
                                <a class="tp-service-2-arrow-btn" href="{{asset('template/service-details.html')}}"><i class="flaticon-next"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- service area end -->
        <!-- tochnology area start -->
        <section class="tp-technology-2-area pt-95 pb-90">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-7 col-lg-7">
                        <div class="tp-technology-2-wrapper mt-15 wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1s">
                            <div class="tp-section-title-wrapper mb-55">
                                <span class="tp-section-subtitle">CHECK OUR technology index</span>
                                <h3 class="tp-section-title">IMPROVE AND INOVATE TECH <br>
                                    TREND WITH US</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-5">
                        <div class="tp-technology-2-top-paragraph mt-70 ml-55 wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1s">
                            <p>Your applicant may have limited help desk wexperience. In that case, look for applicants who are</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                        <div class="tp-technology-2-item text-center wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1s">
                            <div class="tp-technology-2-icon">
                                <span><i class="flaticon-android"></i></span>
                            </div>
                            <h4 class="tp-technology-2-title">android</h4>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                        <div class="tp-technology-2-item text-center wow fadeInUp" data-wow-delay=".5s" data-wow-duration="1s">
                            <div class="tp-technology-2-icon">
                                <span><i class="flaticon-apple"></i></span>
                            </div>
                            <h4 class="tp-technology-2-title">IOS</h4>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                        <div class="tp-technology-2-item text-center wow fadeInUp" data-wow-delay=".7s" data-wow-duration="1s">
                            <div class="tp-technology-2-icon">
                                <span><i class="flaticon-iot"></i></span>
                            </div>
                            <h4 class="tp-technology-2-title">IOT</h4>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                        <div class="tp-technology-2-item text-center wow fadeInUp" data-wow-delay=".9s" data-wow-duration="1s">
                            <div class="tp-technology-2-icon">
                                <span><i class="flaticon-tv"></i></span>
                            </div>
                            <h4 class="tp-technology-2-title">Televison</h4>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                        <div class="tp-technology-2-item text-center wow fadeInLeft" data-wow-delay="1s" data-wow-duration="1s">
                            <div class="tp-technology-2-icon">
                                <span><i class="flaticon-internet"></i></span>
                            </div>
                            <h4 class="tp-technology-2-title">WEBSITE</h4>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                        <div class="tp-technology-2-item text-center wow fadeInLeft" data-wow-delay="1.2s" data-wow-duration="1s">
                            <div class="tp-technology-2-icon">
                                <span><i class="flaticon-smart-watch"></i></span>
                            </div>
                            <h4 class="tp-technology-2-title">WEARABLE</h4>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-8">
                        <div class="tp-technology-2-content-box p-relative wow fadeInRight" data-wow-delay=".3s" data-wow-duration="1s">
                            <h6 class="tp-technology-2-content-box-subtitle">WE READY TO HELP</h6>
                            <h4 class="tp-technology-2-content-box-title">need Any types of it solution</h4>
                            <div class="tp-technology-2-button">
                                <a class="tp-btn" rel="noreferrer" href="contact.html" target="_blank"><span>Contact Us</span></a>
                            </div>
                            <div class="tp-technology-2-content-box-shape">
                                <img src="{{asset('template/assets/img/technology/technology-box-shape.png')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- tocnology area end -->
        <!-- project area start -->
        <section class="tp-project-2-area pt-110 pb-120">
            <div class="container-fluid tp-project-2-container">
                <div class="row">
                    <div class="tp-project-2-top-wrapper">
                        <div class="tp-section-title-wrapper mb-30 text-center wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1s">
                            <span class="tp-section-subtitle">CHECK OUR TECZA SERVICES</span>
                            <h3 class="tp-section-title">check our recent projects <br> 
                                we have done</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="tp-project-2-slider mt-20 p-relative">
                            <div class="tp-project-2-active swiper-container">
                                <div class="swiper-wrapper">
                                    <div class="tp-project-2-item swiper-slide wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1s">
                                        <div class="tp-project-2-slide-wrapper">
                                            <div class="tp-project-2-thumb p-relative fix">
                                                <img src="{{asset('template/assets/img/project/project-img1.jpg')}}" alt="">
                                                <div class="tp-project-2-down-content">
                                                        <div class="tp-project-2-down-icon">
                                                            <a href="{{asset('template/portfolio-details.html')}}"><span><i class="flaticon-next"></i></span></a>
                                                        </div>
                                                        <h6>Solution</h6>
                                                        <h4 class="tp-project-2-down-title"><a href="{{asset('template/portfolio-details.html')}}">Data visualization</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tp-project-2-item swiper-slide wow fadeInUp" data-wow-delay=".5s" data-wow-duration="1s">
                                        <div class="tp-project-2-slide-wrapper">
                                            <div class="tp-project-2-thumb p-relative fix">
                                            <img src="{{asset('template/assets/img/project/project-img2.jpg')}}" alt="">
                                            <div class="tp-project-2-down-content">
                                                    <div class="tp-project-2-down-icon">
                                                        <a href="{{asset('template/portfolio-details.html')}}"><span><i class="flaticon-next"></i></span></a>
                                                    </div>
                                                    <h6>Solution</h6>
                                                    <h4 class="tp-project-2-down-title"><a href="{{asset('template/portfolio-details.html')}}">information manage</a></h4>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tp-project-2-item swiper-slide wow fadeInUp" data-wow-delay=".7s" data-wow-duration="1s">
                                        <div class="tp-project-2-slide-wrapper">
                                            <div class="tp-project-2-thumb p-relative fix">
                                            <img src="{{asset('template/assets/img/project/project-img3.jpg')}}" alt="">
                                            <div class="tp-project-2-down-content">
                                                    <div class="tp-project-2-down-icon">
                                                        <a href="{{asset('template/portfolio-details.html')}}"><span><i class="flaticon-next"></i></span></a>
                                                    </div>
                                                    <h6>Solution</h6>
                                                    <h4 class="tp-project-2-down-title"><a href="{{asset('template/portfolio-details.html')}}">Data visualization</a></h4>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tp-project-2-item swiper-slide wow fadeInUp" data-wow-delay=".9s" data-wow-duration="1s">
                                        <div class="tp-project-2-slide-wrapper">
                                            <div class="tp-project-2-thumb p-relative fix">
                                            <img src="{{asset('template/assets/img/project/project-img4.jpg')}}" alt="">
                                            <div class="tp-project-2-down-content">
                                                    <div class="tp-project-2-down-icon">
                                                        <a href="{{asset('template/portfolio-details.html')}}"><span><i class="flaticon-next"></i></span></a>
                                                    </div>
                                                    <h6>Solution</h6>
                                                    <h4 class="tp-project-2-down-title"><a href="{{asset('template/portfolio-details.html')}}">Data visualization</a></h4>
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
        </section>
        <!-- project area end -->
        <!-- Counter area start -->
        <section class="tp-counter-2-area pt-125 pb-85" data-background="{{asset('template/assets/img/counter/counter-bg.png')}}">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                        <div class="tp-counter-2-wrapper text-center mb-30 wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1s">
                            <div class="tp-counter-2-icon">
                                <img src="{{asset('template/assets/img/counter/counter-icon1.svg')}}" alt="">
                            </div>
                            <div class="tp-counter-2-number-item d-flex justify-content-center">
                                <h2 class="tp-counter tp-counter-2-count"><span class="purecounter" data-purecounter-duration="5" data-purecounter-end="320">320</span></h2>
                            </div>
                            <div class="tp-counter-2-text text-center">
                                <p class="tp-counter-2-text-paragraph">Smart Solution</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                        <div class="tp-counter-2-wrapper text-center mb-30 wow fadeInUp" data-wow-delay=".5s" data-wow-duration="1s">
                            <div class="tp-counter-2-icon">
                                <img src="{{asset('template/assets/img/counter/counter-icon2.svg')}}" alt="">
                            </div>
                            <div class="tp-counter-2-number-item d-flex justify-content-center">
                                <h2 class="tp-counter tp-counter-2-count"><span class="purecounter" data-purecounter-duration="2" data-purecounter-end="290">290</span></h2>
                            </div>
                            <div class="tp-counter-2-text text-center">
                                <p class="tp-counter-2-text-paragraph">IT Speacilist</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                        <div class="tp-counter-2-wrapper text-center mb-30 wow fadeInUp" data-wow-delay=".7s" data-wow-duration="1s">
                            <div class="tp-counter-2-icon">
                                <img src="{{asset('template/assets/img/counter/counter-icon3.svg')}}" alt="">
                            </div>
                            <div class="tp-counter-2-number-item d-flex justify-content-center">
                                <h2 class="tp-counter tp-counter-2-count"><span class="purecounter" data-purecounter-duration="7" data-purecounter-end="4565">4565</span></h2>
                            </div>
                            <div class="tp-counter-2-text text-center">
                                <p class="tp-counter-2-text-paragraph">Project Completed</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                        <div class="tp-counter-2-wrapper text-center mb-30 wow fadeInUp" data-wow-delay=".9s" data-wow-duration="1s">
                            <div class="tp-counter-2-icon">
                                <img src="{{asset('template/assets/img/counter/counter-icon4.svg')}}" alt="">
                            </div>
                            <div class="tp-counter-2-number-item d-flex justify-content-center">
                                <h2 class="tp-counter tp-counter-2-count"><span class="purecounter" data-purecounter-duration="9" data-purecounter-end="8546">8546</span></h2>
                            </div>
                            <div class="tp-counter-2-text text-center">
                                <p class="tp-counter-2-text-paragraph">Satisfied Clients</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Counter area end -->
        <!-- Faq area satrt -->
        <section class="tp-faq-3-area pt-120 pb-120" data-background="{{asset('template/assets/img/faq/faq-2-bg.png')}}">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-8 col-md-10">
                        <div class="tp-faq-3-wrapper">
                            <div class="tp-section-title-wrapper mb-50 wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1s">
                                <span class="tp-section-subtitle">FREQUENTLY ASKED QUESTION</span>
                                <h3 class="tp-section-title">What Our Clients Ask about
                                    our tecza company</h3>
                            </div>
                            <div class="tp-faq-3-accordion accordion-flush wow fadeInLeft" id="accordionFlushExample">
                                <div class="tp-faq-3-accordion-item accordion-item mb-10">
                                    <h2 class="accordion-header">
                                        <button class="tp-faq-3-accordion-title accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                            I'm a total beginner. Can I still follow along?
                                            <span class="tp-faq-3-accordion-btn"></span>
                                        </button>
                                    </h2>
                                    <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                        <div class="tp-faq-3-accordion-pera accordion-body">Your applicant may have limited help desk wexperience. In that case, look for applicants who are motivated to grow and have some transferable </div>
                                    </div>
                                </div>
                                <div class="tp-faq-3-accordion-item accordion-item mb-10">
                                    <h2 class="accordion-header">
                                        <button class="tp-faq-3-accordion-title accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                            Which technical skills would you improve?
                                            <span class="tp-faq-3-accordion-btn"></span>
                                        </button>
                                    </h2>
                                    <div id="flush-collapseTwo" class="accordion-collapse collapse show" data-bs-parent="#accordionFlushExample">
                                        <div class="tp-faq-3-accordion-pera accordion-body">Your applicant may have limited help desk wexperience. In that case, look for applicants who are motivated to grow and have some transferable </div>
                                    </div>
                                </div>
                                <div class="tp-faq-3-accordion-item accordion-item mb-10">
                                    <h2 class="accordion-header">
                                        <button class="tp-faq-3-accordion-title accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                            What do Logical Drives do?
                                            <span class="tp-faq-3-accordion-btn"></span>
                                        </button>
                                    </h2>
                                    <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                        <div class="tp-faq-3-accordion-pera accordion-body">Your applicant may have limited help desk wexperience. In that case, look for applicants who are motivated to grow and have some transferable </div>
                                    </div>
                                </div>
                                <div class="tp-faq-3-accordion-item accordion-item ">
                                    <h2 class="accordion-header">
                                        <button class="tp-faq-3-accordion-title accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                                            What about our safety measures ?
                                            <span class="tp-faq-3-accordion-btn"></span> 
                                        </button>
                                    </h2>
                                    <div id="flush-collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                        <div class="tp-faq-3-accordion-pera accordion-body">Your applicant may have limited help desk wexperience. In that case, look for applicants who are motivated to grow and have some transferable </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-7 col-md-10">
                        <div class="tp-faq-3-right-wrapper mt-10 wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1s">
                            <div class="tp-faq-3-right-thumb mb-65">
                                <img src="{{asset('template/assets/img/faq/faq-2-img.jpg')}}" alt="">
                            </div>
                            <div class="tp-about-list-item tp-faq-3-right-list-item mb-45">
                                <ul>
                                    <li><i class="flaticon-social-media"></i> There are many variations of passages of available</li>
                                    <li><i class="flaticon-social-media"></i> Most easy premium web design process</li>
                                </ul>
                            </div>
                            <div class="tp-faq-3-bottom-item">
                                <div class="tp-faq-3-bottom-icon-box">
                                    <div class="tp-faq-3-bottom-icon">
                                        <span><i class="flaticon-rocket"></i></span>
                                    </div>
                                    <div class="tp-faq-3-bottom-title">
                                        <h4>Marketing <br>
                                            Management</h4>
                                    </div>
                                </div>
                                <div class="tp-faq-3-bottom-call-btn">
                                    <div class="tp-faq-3-bottom-call-icon">
                                        <a href="tel:+9978687653695"><i class="fa-light fa-phone"></i></a>
                                    </div>
                                    <div class="tp-faq-3-bottom-call-number">
                                        <span>Call Us Free</span>
                                        <a href="tel:+9978687653695">+999 325 6589</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Faq area end -->
        <!-- Testimonial area start -->
        <section class="tp-testimonial-2-area pt-120 pb-120">
            <div class="container">
                <div class="row">
                    <div class="tp-testimonial-2-top-wrapper wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1s">
                        <div class="tp-section-title-wrapper mb-50 text-center">
                            <span class="tp-section-subtitle">CLIENTS FEEDBACK</span>
                            <h3 class="tp-section-title">What Our Client Say About <br>
                                Our tecza agency</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="tp-testimonial-2-slider">
                            <div class="tp-testimonial-2-active swiper-container">
                                <div class="swiper-wrapper">
                                    <div class="tp-testimonial-2-item swiper-slide wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1s">
                                        <div class="tp-testimonial-2-box">
                                            <div class="tp-testimonial-2-member-top mb-20">
                                                <div class="tp-testimonial-2-member d-flex">
                                                    <div class="tp-testimonial-2-img">
                                                        <img src="{{asset('template/assets/img/testimonial/testi1.jpg')}}" alt="">
                                                    </div>
                                                    <div class="tp-testimonial-2-img-content">
                                                        <h4>Annete Black</h4>
                                                        <p>Engineer</p>
                                                        <div class="tp-testimonial-2-review">
                                                            <img src="{{asset('template/assets/img/testimonial/testi-start.png')}}" alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tp-testimonial-2-member-icon">
                                                    <span><i class="flaticon-quote"></i></span>
                                                </div>
                                            </div>
                                            <div class="tp-testimonial-2-content">
                                                <p>Payment solutions enable businesses to accept pay Payment stions enable businesses to accept payments from ctly customers ctly securely. stions enable bu payments
                                                   <br> customers ctly securely.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tp-testimonial-2-item swiper-slide wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1s">
                                        <div class="tp-testimonial-2-box">
                                            <div class="tp-testimonial-2-member-top mb-20">
                                                <div class="tp-testimonial-2-member d-flex">
                                                    <div class="tp-testimonial-2-img">
                                                        <img src="{{asset('template/assets/img/testimonial/testi2.jpg')}}" alt="">
                                                    </div>
                                                    <div class="tp-testimonial-2-img-content">
                                                        <h4>JIMMIE JACKSON</h4>
                                                        <p>Engineer</p>
                                                        <div class="tp-testimonial-2-review">
                                                            <img src="{{asset('template/assets/img/testimonial/testi-start.png')}}" alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tp-testimonial-2-member-icon">
                                                    <span><i class="flaticon-quote"></i></span>
                                                </div>
                                            </div>
                                            <div class="tp-testimonial-2-content">
                                                <p>Payment solutions enable businesses to accept pay Payment stions enable businesses to accept payments from ctly customers ctly securely. stions enable bu payments
                                                   <br> customers ctly securely.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tp-service-solution tp-testimonial-2-solution  text-center mt-65">
                    <a class="tp-service-solution-btn tp-testimonial-2-btn" href="{{asset('template/service-details.html')}}">HURRAY !</a>
                    <span class="tp-service-solution-text  tp-testimonial-2-solution-text">Let's make something great work together. <a href="{{asset('template/service-details.html')}}">View all Reviews</a></span>
                </div>
            </div>
        </section>
        <!-- Testimonial area end -->
        <!-- Choose-us area start -->
        <section class="tp-choose-us-2-area pt-120 pb-120 p-relative z-index-1 gray-bg">
            <div class="tp-choose-us-2-bg-shape">
                <img src="{{asset('template/assets/img/choose-us/choose-us-man-shape.png')}}" alt="">
            </div>
            <div class="tp-choose-us-2-thumb wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1s">
                <img src="{{asset('template/assets/img/choose-us/choose-us-2-img.jpg')}}" alt="">
                <div class="tp-choose-us-2-thumb-content">
                    <span>The best source for <br>
                        IT solution and serices</span>
                    <div class="tp-choose-us-2-thumb-shape">
                        <img src="{{asset('template/assets/img/choose-us/choose-us-2-shape.png')}}" alt="">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row gx-0">
                    <div class="col-xl-6"></div>
                    <div class="col-xl-6 col-lg-8">
                        <div class="tp-choose-us-2-wrapper wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1s">
                            <div class="tp-section-title-wrapper mb-50">
                                <span class="tp-section-subtitle">About TECZA Company</span>
                                <h3 class="tp-section-title">why people want to choose
                                    our tecza company</h3>
                                <p class="tp-section-paragraph">Tecza is the partner of choice for many of the world's leading the enterprises <br>
                                     ME and technology challengers. We businesses and the most technology <br>
                                    elevate their value through custom software in your city area
                                    </p>
                            </div>
                            <div class="row gx-20">
                                <div class="col-lg-6 col-md-6">
                                    <div class="tp-choose-us-2-feature-item d-flex align-items-center">
                                        <div class="tp-choose-us-2-feature-icon">
                                            <span><i class="fa-regular fa-check"></i></span>
                                        </div>
                                        <div class="tp-choose-us-2-feature-content">
                                            <h4 class="tp-choose-us-2-feature-title">END TO END
                                                DEVELOPMENT</h4>
                                        </div>
                                        <div class="tp-choose-us-2-feature-shape">
                                            <img src="{{asset('template/assets/img/choose-us/choose-us-feature-shape.png')}}" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="tp-choose-us-2-feature-item d-flex align-items-center">
                                        <div class="tp-choose-us-2-feature-icon">
                                            <span><i class="fa-regular fa-check"></i></span>
                                        </div>
                                        <div class="tp-choose-us-2-feature-content">
                                            <h4 class="tp-choose-us-2-feature-title">SOFTWARE &
                                                IT OUTSOURCE</h4>
                                        </div>
                                        <div class="tp-choose-us-2-feature-shape">
                                            <img src="{{asset('template/assets/img/choose-us/choose-us-feature-shape.png')}}" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="tp-choose-us-2-feature-item d-flex align-items-center">
                                        <div class="tp-choose-us-2-feature-icon">
                                            <span><i class="fa-regular fa-check"></i></span>
                                        </div>
                                        <div class="tp-choose-us-2-feature-content">
                                            <h4 class="tp-choose-us-2-feature-title">TECHNOLOGY & IT
                                                INFORMATION MANAGE</h4>
                                        </div>
                                        <div class="tp-choose-us-2-feature-shape">
                                            <img src="{{asset('template/assets/img/choose-us/choose-us-feature-shape.png')}}" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="tp-choose-us-2-feature-item d-flex align-items-center">
                                        <div class="tp-choose-us-2-feature-icon">
                                            <span><i class="fa-regular fa-check"></i></span>
                                        </div>
                                        <div class="tp-choose-us-2-feature-content">
                                            <h4 class="tp-choose-us-2-feature-title">INTERNAL NETWORK
                                                BUSINESS SYSTEMS</h4>
                                        </div>
                                        <div class="tp-choose-us-2-feature-shape">
                                            <img src="{{asset('template/assets/img/choose-us/choose-us-feature-shape.png')}}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tp-service-solution tp-choose-us-2-solution  text-center mt-80">
                    <a class="tp-service-solution-btn tp-choose-us-2-btn" href="about.html">Trust</a>
                    <span class="tp-service-solution-text  tp-choose-us-2-solution-text">Join the <a href="about.html">8000+ Companies</a> Trusting Tecza Agency</span>
                </div>
            </div>
        </section>
        <!-- Choose-us area end -->
        <!-- Brand area start -->
        <section class="tp-brand-2-area pb-120">
            <div class="container">
                <div class="row row-cols-xl-5">
                    <div class="col col-lg-4 col-md-4 col-sm-6 col-12">
                        <div class="tp-brand-2-wrapper fix p-relative mb-30 text-center wow fadeInUp" data-wow-delay=".2s" data-wow-duration="1s">
                            <div class="tp-brand-2-icon">
                                <span><i class="flaticon-worldwide"></i></span>
                            </div>
                            <div class="tp-brand-2-content">
                                <h3 class="tp-brand-2-title">Global <br>
                                    Networking</h3>
                            </div>
                            <div class="tp-brand-2-shape">
                                <img src="{{asset('template/assets/img/feature/feature-shape.png')}}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col col-lg-4 col-md-4 col-sm-6 col-12">
                        <div class="tp-brand-2-wrapper fix p-relative mb-30 text-center wow fadeInUp" data-wow-delay=".4s" data-wow-duration="1s">
                            <div class="tp-brand-2-icon">
                                <span><i class="flaticon-ux-design"></i></span>
                            </div>
                            <div class="tp-brand-2-content">
                                <h3 class="tp-brand-2-title">Ui/Ux <br>
                                    Designing</h3>
                            </div>
                            <div class="tp-brand-2-shape">
                                <img src="{{asset('template/assets/img/feature/feature-shape.png')}}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col col-lg-4 col-md-4 col-sm-6 col-12">
                        <div class="tp-brand-2-wrapper fix p-relative mb-30 text-center wow fadeInUp" data-wow-delay=".6s" data-wow-duration="1s">
                            <div class="tp-brand-2-icon">
                                <span><i class="flaticon-talk"></i></span>
                            </div>
                            <div class="tp-brand-2-content">
                                <h3 class="tp-brand-2-title">Business <br>
                                    Consultation</h3>
                            </div>
                            <div class="tp-brand-2-shape">
                                <img src="{{asset('template/assets/img/feature/feature-shape.png')}}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col col-lg-4 col-md-4 col-sm-6 col-12">
                        <div class="tp-brand-2-wrapper active fix p-relative mb-30 text-center wow fadeInUp" data-wow-delay=".8s" data-wow-duration="1s">
                            <div class="tp-brand-2-icon">
                                <span><i class="flaticon-coding"></i></span>
                            </div>
                            <div class="tp-brand-2-content">
                                <h3 class="tp-brand-2-title">Website <br>
                                    Development</h3>
                            </div>
                            <div class="tp-brand-2-shape">
                                <img src="{{asset('template/assets/img/feature/feature-shape.png')}}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col col-lg-4 col-md-4 col-sm-6 col-12">
                        <div class="tp-brand-2-wrapper fix p-relative mb-30 text-center wow fadeInUp" data-wow-delay="1s" data-wow-duration="1s">
                            <div class="tp-brand-2-icon">
                                <span><i class="flaticon-management"></i></span>
                            </div>
                            <div class="tp-brand-2-content">
                                <h3 class="tp-brand-2-title">Support <br>
                                    Management</h3>
                            </div>
                            <div class="tp-brand-2-shape">
                                <img src="{{asset('template/assets/img/feature/feature-shape.png')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row gx-0">
                    <div class="tp-brand-2-bottom-content text-center pt-85 mb-60">
                        <h3 class="tp-brand-2-bottom-title">who trust us</h3>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-xxl-12">
                        <div class="tp-brand-2-slider">
                            <div class="tp-brand-2-active swiper-container">
                                <div class="swiper-wrapper">
                                    <div class="tp-brand-2-item swiper-slide wow fadeInUp" data-wow-delay=".2s" data-wow-duration="1s">
                                        <div class="tp-brand-2-img-thum">
                                            <img src="{{asset('template/assets/img/brand/brand1.png')}}" alt="">
                                        </div>
                                    </div>
                                    <div class="tp-brand-2-item swiper-slide wow fadeInUp" data-wow-delay=".5s" data-wow-duration="1s">
                                        <div class="tp-brand-2-img-thum">
                                            <img src="{{asset('template/assets/img/brand/brand2.png')}}" alt="">
                                        </div>
                                    </div>
                                    <div class="tp-brand-2-item swiper-slide wow fadeInUp" data-wow-delay=".7s" data-wow-duration="1s">
                                        <div class="tp-brand-2-img-thum">
                                            <img src="{{asset('template/assets/img/brand/brand3.png')}}" alt="">
                                        </div>
                                    </div>
                                    <div class="tp-brand-2-item swiper-slide wow fadeInUp" data-wow-delay=".9s" data-wow-duration="1s">
                                        <div class="tp-brand-2-img-thum">
                                            <img src="{{asset('template/assets/img/brand/brand4.png')}}" alt="">
                                        </div>
                                    </div>
                                    <div class="tp-brand-2-item swiper-slide wow fadeInUp" data-wow-delay="1s" data-wow-duration="1s">
                                        <div class="tp-brand-2-img-thum">
                                            <img src="{{asset('template/assets/img/brand/brand5.png')}}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Brand area end -->
        <!-- Management area start -->
        <section class="tp-management-2-area pt-120">
            <div class="tp-management-2-top">
                <div class="container">
                    <div class="row">
                        <div class="tp-management-2-wrapper p-relative z-index-11 mb-100">
                            <div class="tab-content" id="pills-tabContent">
    
                                <div class="tab-pane fade active show" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                    <div class="tp-management-2-box">
                                        <div class="row">
                                            <div class="col-xl-6 col-lg-6">
                                                <div class="tp-management-2-thumb wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1s">
                                                    <img src="{{asset('template/assets/img/management/management-2-img1.jpg')}}" alt="">
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6">
                                                <div class="tp-service-two-right-wrapper tp-management-2-item-wrapper wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1s">
                                                    <div class="tp-section-title-wrapper mb-45">
                                                        <span class="tp-section-subtitle secondary">technology management</span>
                                                        <h3 class="tp-section-title white">we excute our ideas from the
                                                            start to finishing</h3>
                                                        <p class="tp-section-paragraph gray">Tecza is the partner of choice for many of the world's leading enterprises <br>
                                                            SME and technology challengers. We help businesses elevate express
                                                            </p>
                                                    </div>
                                                    <div class="tp-service-two-center-box d-flex">
                                                        <div class="tp-service-two-center-item d-flex mb-15">
                                                            <div class="tp-service-two-center-icon">
                                                                <span><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="22px" height="24px">
                                                                       <image x="0px" y="0px" width="22px" height="24px" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAABYAAAAYCAMAAADJYP15AAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAANlBMVEUp8LUp8LUp8LUp8LUp8LUp8LUp8LUp8LUp8LUp8LUp8LUp8LUp8LUp8LUp8LUp8LUp8LX///+wIbJBAAAAEHRSTlMAEEBg78+fIK+/MIDfUHCP/3+FvQAAAAFiS0dEEeK1PboAAAAHdElNRQfoBBAPODCpQAl6AAAAiUlEQVQoz3WS0RKDIAwEISIRUNn//9raVixSkydmBy6XHM618iLe/dUUIEwDlBlihFk6qAuk7FxOsGgTLbBu3/O2QvGnaNh/L/fwaaFQbw58BXVCGU0VZMCiTziSHnAk5Bsub9sn7XA9SKO9yDF4ozft6+7QUtT2fWFjeGNV1mKtGMzQzIjHD/EC7nsITTGyoKgAAAAASUVORK5CYII="></image>
                                                                   </svg></span>
                                                            </div>
                                                            <div class="tp-service-two-center-content">
                                                                <h4 class="tp-service-two-center-title">Cloud based</h4>
                                                                <p class="tp-service-two-center-paragraph">Loreum ipsum dolor sit amet
                                                                    not is consecturer notted</p>
                                                            </div>
                                                        </div>
                                                        <div class="tp-service-two-center-item d-flex mb-15 ml-50">
                                                            <div class="tp-service-two-center-icon">
                                                                <span><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="22px" height="24px">
                                                                       <image x="0px" y="0px" width="22px" height="24px" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAABYAAAAYCAMAAADJYP15AAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAANlBMVEUp8LUp8LUp8LUp8LUp8LUp8LUp8LUp8LUp8LUp8LUp8LUp8LUp8LUp8LUp8LUp8LUp8LX///+wIbJBAAAAEHRSTlMAEEBg78+fIK+/MIDfUHCP/3+FvQAAAAFiS0dEEeK1PboAAAAHdElNRQfoBBAPODCpQAl6AAAAiUlEQVQoz3WS0RKDIAwEISIRUNn//9raVixSkydmBy6XHM618iLe/dUUIEwDlBlihFk6qAuk7FxOsGgTLbBu3/O2QvGnaNh/L/fwaaFQbw58BXVCGU0VZMCiTziSHnAk5Bsub9sn7XA9SKO9yDF4ozft6+7QUtT2fWFjeGNV1mKtGMzQzIjHD/EC7nsITTGyoKgAAAAASUVORK5CYII="></image>
                                                                   </svg></span>
                                                            </div>
                                                            <div class="tp-service-two-center-content">
                                                                <h4 class="tp-service-two-center-title">Full backup</h4>
                                                                <p class="tp-service-two-center-paragraph">Loreum ipsum dolor sit amet
                                                                    not is consecturer notted</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tp-cta-2-btn mt-20">
                                                        <a class="tp-btn" href="{{asset('template/contact.html')}}"><span>get in touch with us</span></a>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
    
                                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                    <div class="tp-management-2-box">
                                        <div class="row">
                                            <div class="col-xl-6 col-lg-6">
                                                <div class="tp-management-2-thumb">
                                                    <img src="{{asset('template/assets/img/management/management-2-img2.jpg')}}" alt="">
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6">
                                                <div class="tp-service-two-right-wrapper tp-management-2-item-wrapper">
                                                    <div class="tp-section-title-wrapper mb-45">
                                                        <span class="tp-section-subtitle secondary">technology management</span>
                                                        <h3 class="tp-section-title white">Our Ideas with Precision
                                                            from  Our tecza agency</h3>
                                                        <p class="tp-section-paragraph gray">Tecza is the partner of choice for many of the world's leading enterprises <br>
                                                            SME and technology challengers. We help businesses elevate express
                                                            </p>
                                                    </div>
                                                    <div class="tp-service-two-center-box d-flex">
                                                        <div class="tp-service-two-center-item d-flex mb-15">
                                                            <div class="tp-service-two-center-icon">
                                                                <span><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="22px" height="24px">
                                                                       <image x="0px" y="0px" width="22px" height="24px" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAABYAAAAYCAMAAADJYP15AAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAANlBMVEUp8LUp8LUp8LUp8LUp8LUp8LUp8LUp8LUp8LUp8LUp8LUp8LUp8LUp8LUp8LUp8LUp8LX///+wIbJBAAAAEHRSTlMAEEBg78+fIK+/MIDfUHCP/3+FvQAAAAFiS0dEEeK1PboAAAAHdElNRQfoBBAPODCpQAl6AAAAiUlEQVQoz3WS0RKDIAwEISIRUNn//9raVixSkydmBy6XHM618iLe/dUUIEwDlBlihFk6qAuk7FxOsGgTLbBu3/O2QvGnaNh/L/fwaaFQbw58BXVCGU0VZMCiTziSHnAk5Bsub9sn7XA9SKO9yDF4ozft6+7QUtT2fWFjeGNV1mKtGMzQzIjHD/EC7nsITTGyoKgAAAAASUVORK5CYII="></image>
                                                                   </svg></span>
                                                            </div>
                                                            <div class="tp-service-two-center-content">
                                                                <h4 class="tp-service-two-center-title">Cloud based</h4>
                                                                <p class="tp-service-two-center-paragraph">Loreum ipsum dolor sit amet
                                                                    not is consecturer notted</p>
                                                            </div>
                                                        </div>
                                                        <div class="tp-service-two-center-item d-flex mb-15 ml-50">
                                                            <div class="tp-service-two-center-icon">
                                                                <span><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="22px" height="24px">
                                                                       <image x="0px" y="0px" width="22px" height="24px" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAABYAAAAYCAMAAADJYP15AAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAANlBMVEUp8LUp8LUp8LUp8LUp8LUp8LUp8LUp8LUp8LUp8LUp8LUp8LUp8LUp8LUp8LUp8LUp8LX///+wIbJBAAAAEHRSTlMAEEBg78+fIK+/MIDfUHCP/3+FvQAAAAFiS0dEEeK1PboAAAAHdElNRQfoBBAPODCpQAl6AAAAiUlEQVQoz3WS0RKDIAwEISIRUNn//9raVixSkydmBy6XHM618iLe/dUUIEwDlBlihFk6qAuk7FxOsGgTLbBu3/O2QvGnaNh/L/fwaaFQbw58BXVCGU0VZMCiTziSHnAk5Bsub9sn7XA9SKO9yDF4ozft6+7QUtT2fWFjeGNV1mKtGMzQzIjHD/EC7nsITTGyoKgAAAAASUVORK5CYII="></image>
                                                                   </svg></span>
                                                            </div>
                                                            <div class="tp-service-two-center-content">
                                                                <h4 class="tp-service-two-center-title">Full backup</h4>
                                                                <p class="tp-service-two-center-paragraph">Loreum ipsum dolor sit amet
                                                                    not is consecturer notted</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tp-cta-2-btn mt-20">
                                                        <a class="tp-btn" href="contact.html"><span>get in touch with us</span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
    
                                <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                                    <div class="tp-management-2-box">
                                        <div class="row">
                                            <div class="col-xl-6 col-lg-6">
                                                <div class="tp-management-2-thumb">
                                                    <img src="{{asset('template/assets/img/management/management-2-img3.jpg')}}" alt="">
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6">
                                                <div class="tp-service-two-right-wrapper tp-management-2-item-wrapper">
                                                    <div class="tp-section-title-wrapper mb-45">
                                                        <span class="tp-section-subtitle secondary">technology management</span>
                                                        <h3 class="tp-section-title white">Bringing Ideas To Fruition From Your Busnness</h3>
                                                        <p class="tp-section-paragraph gray">Tecza is the partner of choice for many of the world's leading enterprises <br>
                                                            SME and technology challengers. We help businesses elevate express
                                                            </p>
                                                    </div>
                                                    <div class="tp-service-two-center-box d-flex">
                                                        <div class="tp-service-two-center-item d-flex mb-15">
                                                            <div class="tp-service-two-center-icon">
                                                                <span><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="22px" height="24px">
                                                                       <image x="0px" y="0px" width="22px" height="24px" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAABYAAAAYCAMAAADJYP15AAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAANlBMVEUp8LUp8LUp8LUp8LUp8LUp8LUp8LUp8LUp8LUp8LUp8LUp8LUp8LUp8LUp8LUp8LUp8LX///+wIbJBAAAAEHRSTlMAEEBg78+fIK+/MIDfUHCP/3+FvQAAAAFiS0dEEeK1PboAAAAHdElNRQfoBBAPODCpQAl6AAAAiUlEQVQoz3WS0RKDIAwEISIRUNn//9raVixSkydmBy6XHM618iLe/dUUIEwDlBlihFk6qAuk7FxOsGgTLbBu3/O2QvGnaNh/L/fwaaFQbw58BXVCGU0VZMCiTziSHnAk5Bsub9sn7XA9SKO9yDF4ozft6+7QUtT2fWFjeGNV1mKtGMzQzIjHD/EC7nsITTGyoKgAAAAASUVORK5CYII="></image>
                                                                   </svg></span>
                                                            </div>
                                                            <div class="tp-service-two-center-content">
                                                                <h4 class="tp-service-two-center-title">Cloud based</h4>
                                                                <p class="tp-service-two-center-paragraph">Loreum ipsum dolor sit amet
                                                                    not is consecturer notted</p>
                                                            </div>
                                                        </div>
                                                        <div class="tp-service-two-center-item d-flex mb-15 ml-50">
                                                            <div class="tp-service-two-center-icon">
                                                                <span><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="22px" height="24px">
                                                                       <image x="0px" y="0px" width="22px" height="24px" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAABYAAAAYCAMAAADJYP15AAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAANlBMVEUp8LUp8LUp8LUp8LUp8LUp8LUp8LUp8LUp8LUp8LUp8LUp8LUp8LUp8LUp8LUp8LUp8LX///+wIbJBAAAAEHRSTlMAEEBg78+fIK+/MIDfUHCP/3+FvQAAAAFiS0dEEeK1PboAAAAHdElNRQfoBBAPODCpQAl6AAAAiUlEQVQoz3WS0RKDIAwEISIRUNn//9raVixSkydmBy6XHM618iLe/dUUIEwDlBlihFk6qAuk7FxOsGgTLbBu3/O2QvGnaNh/L/fwaaFQbw58BXVCGU0VZMCiTziSHnAk5Bsub9sn7XA9SKO9yDF4ozft6+7QUtT2fWFjeGNV1mKtGMzQzIjHD/EC7nsITTGyoKgAAAAASUVORK5CYII="></image>
                                                                   </svg></span>
                                                            </div>
                                                            <div class="tp-service-two-center-content">
                                                                <h4 class="tp-service-two-center-title">Full backup</h4>
                                                                <p class="tp-service-two-center-paragraph">Loreum ipsum dolor sit amet
                                                                    not is consecturer notted</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tp-cta-2-btn mt-20">
                                                        <a class="tp-btn" href="{{asset('template/contact.html')}}"><span>get in touch with us</span></a>
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
            <div class="tp-management-2-bottom">
                <div class="container">
                    <div class="row ">
                        <div class="col-xl-12">  
                            <ul class="nav nav-pills tp-management-2-nav-pills d-flex justify-content-center" id="pills-tab" role="tablist">
                                <li class="nav-item tp-management-2-tab-li" role="presentation">
                                    <button class="nav-link tp-management-2-tab-btn active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">GAMING</button>
                                </li>
                                <li class="nav-item tp-management-2-tab-li" role="presentation">
                                    <button class="nav-link tp-management-2-tab-btn tab-btn-2" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">ENTERTAINMENT</button>
                                </li>
                                <li class="nav-item tp-management-2-tab-li" role="presentation">
                                    <button class="nav-link tp-management-2-tab-btn tab-btn-3" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">TECH SOLUTION</button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Management area end -->
        <!-- Blog area start -->
        <section class="tp-blog-2-area pt-110 pb-90">
            <div class="container">
                <div class="row">
                    <div class="tp-blog-section-title mb-45 wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1s">
                        <div class="tp-section-title-wrapper text-center">
                            <span class="tp-section-subtitle">Our blog</span>
                            <h3 class="tp-section-title">READ our latest blog post</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="tp-blog-2-wrapper wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1s">
                            <div class="tp-blog-2-top-member">
                                <div class="tp-blog-2-top-user">
                                    <div class="tp-blog-2-top-user-img">
                                        <img src="{{asset('template/assets/img/blog/blog-2-user.png')}}" alt="">
                                    </div>
                                    <div class="tp-blog-2-top-user-name">
                                        <span>By</span>
                                        <p> David Suza</p>
                                    </div>
                                </div>
                                <div class="tp-blog-2-top-icon">
                                    <span><i class="flaticon-love"></i> 24</span>
                                </div>
                            </div>
                            <div class="tp-blog-2-thumb">
                                <a href="blog-details.html"><img src="{{asset('template/assets/img/blog/blog1.jpg')}}" alt=""></a>
                            </div>
                            <div class="tp-blog-2-content">
                                <h4 class="tp-blog-title tp-blog-2-title"><a href="{{asset('template/blog-details.html')}}">Crafting Digital Identity the it
                                    Art of Agency Website</a></h4>
                                <div class="tp-blog-2-content-bottom">
                                    <div class="tp-blog-2-button">
                                        <a class="tp-blog-2-btn" href="{{asset('template/blog-details.html')}}"><i class="flaticon-right"></i> read more</a>
                                    </div>
                                    <div class="tp-blog-2-icon">
                                        <span><a href="#">Share <i class="flaticon-share"></i></a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="tp-blog-2-wrapper wow fadeInUp" data-wow-delay=".5s" data-wow-duration="1s">
                            <div class="tp-blog-2-top-member">
                                <div class="tp-blog-2-top-user">
                                    <div class="tp-blog-2-top-user-img">
                                        <img src="{{asset('template/assets/img/blog/blog-2-user.png')}}" alt="">
                                    </div>
                                    <div class="tp-blog-2-top-user-name">
                                        <span>By</span>
                                        <p> David Suza</p>
                                    </div>
                                </div>
                                <div class="tp-blog-2-top-icon">
                                    <span><i class="flaticon-love"></i> 24</span>
                                </div>
                            </div>
                            <div class="tp-blog-2-thumb">
                                <a href="{{asset('template/blog-details.html')}}"><img src="{{asset('template/assets/img/blog/blog2.jpg')}}" alt=""></a>
                            </div>
                            <div class="tp-blog-2-content">
                                <h4 class="tp-blog-title tp-blog-2-title"><a href="{{asset('template/blog-details.html')}}">System is a term used to refer to
                                    an organized collection</a></h4>
                                <div class="tp-blog-2-content-bottom">
                                    <div class="tp-blog-2-button">
                                        <a class="tp-blog-2-btn" href="{{asset('template/blog-details.html')}}"><i class="flaticon-right"></i> read more</a>
                                    </div>
                                    <div class="tp-blog-2-icon">
                                        <span><a href="#">Share <i class="flaticon-share"></i></a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="tp-blog-2-wrapper wow fadeInUp" data-wow-delay=".7s" data-wow-duration="1s">
                            <div class="tp-blog-2-top-member">
                                <div class="tp-blog-2-top-user">
                                    <div class="tp-blog-2-top-user-img">
                                        <img src="{{asset('template/assets/img/blog/blog-2-user.png')}}" alt="">
                                    </div>
                                    <div class="tp-blog-2-top-user-name">
                                        <span>By</span>
                                        <p> David Suza</p>
                                    </div>
                                </div>
                                <div class="tp-blog-2-top-icon">
                                    <span><i class="flaticon-love"></i> 24</span>
                                </div>
                            </div>
                            <div class="tp-blog-2-thumb">
                                <a href="{{asset('template/blog-details.html')}}"><img src="{{asset('template/assets/img/blog/blog3.jpg')}}" alt=""></a>
                            </div>
                            <div class="tp-blog-2-content">
                                <h4 class="tp-blog-title tp-blog-2-title"><a href="{{asset('template/blog-details.html')}}">We're Leading in IT Technology
                                    Market researcher</a></h4>
                                <div class="tp-blog-2-content-bottom">
                                    <div class="tp-blog-2-button">
                                        <a class="tp-blog-2-btn" href="{{asset('template/blog-details.html')}}"><i class="flaticon-right"></i> read more</a>
                                    </div>
                                    <div class="tp-blog-2-icon">
                                        <span><a href="#">Share <i class="flaticon-share"></i></a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Blog area end -->
    </main>
        
@endsection

@push('after-js')
@endpush