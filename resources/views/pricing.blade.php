@extends('layout.main')

@section('title') {{ 'Pricing | '.env('APP_NAME') }} @endsection

@push('after-css')
@endpush
@section('content')
<main>

        <!-- breadcrumb area start -->
        <section class="tp-breadcrumb-area p-relative z-index-1" data-background="{{asset('public/template/assets/img/breadcrumb/breadcrumb-bg.jpg')}}">
            <div class="tp-breadcrumb-bg-shape">
                <img class="tp-breadcrumb-bg-shape-1" src="{{asset('public/template/assets/img/breadcrumb/breadcrumb-shape1.png')}}" alt="">
                <img class="tp-breadcrumb-bg-shape-2" src="{{asset('public/template/assets/img/breadcrumb/breadcrumb-shape2.png')}}" alt="">
            </div>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-5">
                        <div class="tp-breadcrumb-content">
                            <h2 class="tp-breadcrumb-title">pricing plan</h2>
                            <p class="tp-breadcrumb-body"><span><a class="home" href="{{ url('/') }}">Home <span class="spacing">/</span> </a></span>pricing plan</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb area end -->
        <!-- pricing area start -->
        <section class="tp-pricing-area pt-110 pb-90 gray-bg">
            <div class="container">
                <div class="row">
                    <div class="tp-pricing-section-title mb-45 wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1s">
                        <div class="tp-section-title-wrapper text-center">
                            <span class="tp-section-subtitle">CHECK OUR PRICING PLAN</span>
                            <h3 class="tp-section-title">OUR SUITABLE PRICING PLAN FOR <br>
                                OUR CUSTOMERS</h3>
                        </div>
                    </div>
                </div>
                <div class="row align-items-end">
                    <div class="col-xl-4 col-lg-6 col-md-6 col-md-6">
                        <div class="tp-pricing-wrapper mb-30 wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1s">
                            <div class="tp-pricing-content">
                                <div class="tp-pricing-sub-title text-center">
                                    <h5>Starter</h5>
                                </div>
                                <div class="tp-pricing-main-title text-center">
                                     <h3 class="tp-pricing-min-title">BASIC</h3>
                                </div>
                                <div class="tp-pricing-list">
                                    <ul>
                                        <li><i class="flaticon-social-media"></i> Discover and analysis</li>
                                        <li><i class="flaticon-social-media"></i> Security managment</li>
                                        <li><i class="flaticon-social-media"></i> 24/7 Systems monitoring</li>
                                        <li><i class="flaticon-social-media"></i> Remote support</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="tp-pricing-bottom-content">
                                <div class="tp-pricing-bottom-title">
                                    <h2 class="tp-pricing-btm-title">$49 <span>/Monthly</span></h2>
                                </div>
                                <div class="tp-pricing-button text-center">
                                    <a class="tp-pricing-btn" href="{{route('contact')}}">choose this plan</a>
                                </div>
                            </div>
                        </div>    
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="tp-pricing-wrapper mb-30 wow fadeInUp" data-wow-delay=".5s" data-wow-duration="1s">
                            <div class="tp-pricing-top-title text-center">
                                <span>Most Popular</span>
                            </div>
                            <div class="tp-pricing-content">
                                <div class="tp-pricing-sub-title text-center">
                                    <h5>Professional</h5>
                                </div>
                                <div class="tp-pricing-main-title text-center">
                                    <h3 class="tp-pricing-min-title">BUSINESS</h3>
                                </div>
                                <div class="tp-pricing-list">
                                    <ul>
                                        <li><i class="flaticon-social-media"></i> Discover and analysis</li>
                                        <li><i class="flaticon-social-media"></i> Security managment</li>
                                        <li><i class="flaticon-social-media"></i> 24/7 Systems monitoring</li>
                                        <li><i class="flaticon-social-media"></i> Remote support</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="tp-pricing-bottom-content">
                                <div class="tp-pricing-bottom-title">
                                    <h2 class="tp-pricing-btm-title">$69 <span>/Monthly</span></h2>
                                </div>
                                <div class="tp-pricing-button text-center">
                                    <a class="tp-pricing-btn" href="{{route('contact')}}">choose this plan</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="tp-pricing-wrapper mb-30 wow fadeInUp" data-wow-delay=".7s" data-wow-duration="1s">
                            <div class="tp-pricing-content">
                                <div class="tp-pricing-sub-title text-center">
                                    <h5>Enterprise</h5>
                                </div>
                                <div class="tp-pricing-main-title text-center">
                                    <h3 class="tp-pricing-min-title">PREMIUM</h3>
                                </div>
                                <div class="tp-pricing-list">
                                    <ul>
                                        <li><i class="flaticon-social-media"></i> Discover and analysis</li>
                                        <li><i class="flaticon-social-media"></i> Security managment</li>
                                        <li><i class="flaticon-social-media"></i> 24/7 Systems monitoring</li>
                                        <li><i class="flaticon-social-media"></i> Remote support</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="tp-pricing-bottom-content">
                                <div class="tp-pricing-bottom-title">
                                    <h2 class="tp-pricing-btm-title">$99 <span>/Monthly</span></h2>
                                </div>
                                <div class="tp-pricing-button text-center">
                                    <a class="tp-pricing-btn" href="{{route('contact')}}">choose this plan</a>
                                </div>
                            </div>
                        </div>    
                    </div>
                </div>
            </div>
        </section>
        <!-- pricing area end -->
        <!-- contact area start -->
        <section class="tp-contact-area pt-115 pb-90 p-relative">
            <div class="tp-contact-bg-overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-10 col-md-10 wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1s">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="tp-contact-left-wrapper p-relative">
                                    <div class="tp-contact-left-shape mb-10">
                                        <img class="tp-contact-left-shape-1" src="{{asset('public/template/assets/img/contact/contact-shape1.png')}}" alt="">
                                        <img class="tp-contact-left-shape-2" src="{{asset('public/template/assets/img/contact/contact-shape2.png')}}" alt="">
                                    </div>
                                    <div class="tp-contact-video-btn mb-50 ml-20">
                                        <div class="tp-contact-video-icon">
                                            <a class="video-vemo-icon popup-video" data-vbtype="youtube" data-autoplay="true" href="https://www.youtube.com/watch?v=PO_fBTkoznc"><i class="flaticon-play-button"></i></a>
                                        </div>
                                    </div>
                                    <div class="tp-contact-left-thumb">
                                        <img src="{{asset('public/template/assets/img/contact/contact-img-left.jpg')}}" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="tp-contact-right-wrapper p-relative">
                                    <div class="tp-contact-right-thumb">
                                        <img src="{{asset('public/template/assets/img/contact/contact-img-right.jpg')}}" alt="">
                                    </div>
                                    <div class="tp-contact-call-item d-flex align-items-center">
                                        <div class="tp-contact-call-icon">
                                            <a href="tel:+9993256589"><i class="fa-light fa-phone"></i></a>
                                        </div>
                                        <div class="tp-contact-call-number">
                                            <span>Call Us Free</span>
                                            <a href="tel:+9993256589">+999 325 6589</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-8 col-md-10">
                        <div class="tp-contact-box ml-110 wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1s">
                            <h6 class="tp-contact-sub-title">WE READY TO HELP</h6>
                            <h4 class="tp-contact-title">Have Any Question?</h4>
                            <div class="tp-contact-form">
                                <input type="text" placeholder="Your Name">
                                <input type="email" placeholder="Email Address">
                                <input type="text" placeholder="Phone Number">
                                <textarea placeholder="Write Your Message"></textarea>
                                <div class="tp-contact-submit">
                                    <button class="tp-btn tp-contact-btn" type="submit"><span>SEND YOUR MEASSAGE</span></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact area end -->
        <!-- subscribe area start -->
        <section class="tp-subscribe-5-bottom-area primary-bg pt-60 pb-45 p-relative z-index-1">
            <div class="tp-subscribe-5-bottom-bg-shape">
                <img class="tp-subscribe-5-bottom-bg-shape-1" src="{{asset('public/template/assets/img/subscribe/subscribe-5-bg-shape.png')}}" alt="">
                <img class="tp-subscribe-5-bottom-bg-shape-2" src="{{asset('public/template/assets/img/subscribe/subscribe-3-bottom-shape3.png')}}" alt="">
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
                                <a class="tp-btn" rel="noreferrer" href="{{route('contact')}}" target="_blank"><span>GET YOUR SOLUTION</span></a>
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