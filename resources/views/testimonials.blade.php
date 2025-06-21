@extends('layout.main')

@section('title') {{ 'Testimonial | '.env('APP_NAME') }} @endsection

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
                            <h2 class="tp-breadcrumb-title">Testimonials</h2>
                            <p class="tp-breadcrumb-body"><span><a class="home" href="{{ url('/') }}">Home <span class="spacing">/</span> </a></span>Testimonials</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb area end -->
		<!-- testimonial area start -->
        <section class="tp-testimonial-inner-area pt-120 pb-90">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="tp-testimonial-5-wrapper inner mb-30 wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1s">
                            <div class="tp-testimonial-5-thumb p-relative">
                                <img src="{{asset('public/template/assets/img/testimonial/testimonial-5-thumb1.png')}}" alt="">
                                <div class="tp-testimonial-5-icon">
                                    <span><img src="{{asset('public/template/assets/img/testimonial/testi-quote-icon.svg')}}" alt=""></span>
                                </div>
                            </div>
                            <div class="tp-testimonial-5-content">
                                <div class="tp-testimonial-5-review">
                                    <img src="{{asset('public/template/assets/img/testimonial/tp-testimonial-3-start.png')}}" alt="">
                                </div>
                                <p class="tp-testimonial-5-pagaraph">Bilge rat main shet bilge water nipper of my fluketo go on account heave down clap of thunder. Reef sails six pounders skysail code off conduct. payments</p>
                                <div class="tp-testimonial-5-details">
                                    <h4 class="tp-testimonial-5-name">Annete Black,</h4>
                                    <p class="tp-testimonial-5-catagory">Engineer</p>
                                </div>
                            </div>
                            <div class="tp-testimonial-5-shape">
                                <img src="{{asset('public/template/assets/img/testimonial/testimonial-shape.png')}}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="tp-testimonial-5-wrapper inner mb-30 wow fadeInUp" data-wow-delay=".5s" data-wow-duration="1s">
                            <div class="tp-testimonial-5-thumb p-relative">
                                <img src="{{asset('public/template/assets/img/testimonial/testimonial-5-thumb2.png')}}" alt="">
                                <div class="tp-testimonial-5-icon">
                                    <span><img src="{{asset('public/template/assets/img/testimonial/testi-quote-icon.svg')}}" alt=""></span>
                                </div>
                            </div>
                            <div class="tp-testimonial-5-content">
                                <div class="tp-testimonial-5-review">
                                    <img src="{{asset('public/template/assets/img/testimonial/tp-testimonial-3-start.png')}}" alt="">
                                </div>
                                <p class="tp-testimonial-5-pagaraph">Bilge rat main shet bilge water nipper of my fluketo go on account heave down clap of thunder. Reef sails six pounders skysail code off conduct. payments</p>
                                <div class="tp-testimonial-5-details">
                                    <h4 class="tp-testimonial-5-name">Subha sara,</h4>
                                    <p class="tp-testimonial-5-catagory">Designer</p>
                                </div>
                            </div>
                            <div class="tp-testimonial-5-shape">
                                <img src="{{asset('public/template/assets/img/testimonial/testimonial-shape.png')}}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="tp-testimonial-5-wrapper inner mb-30 wow fadeInUp" data-wow-delay=".7s" data-wow-duration="1s">
                            <div class="tp-testimonial-5-thumb p-relative">
                                <img src="{{asset('public/template/assets/img/testimonial/testimonial-5-thumb3.png')}}" alt="">
                                <div class="tp-testimonial-5-icon">
                                    <span><img src="{{asset('public/template/assets/img/testimonial/testi-quote-icon.svg')}}" alt=""></span>
                                </div>
                            </div>
                            <div class="tp-testimonial-5-content">
                                <div class="tp-testimonial-5-review">
                                    <img src="{{asset('public/template/assets/img/testimonial/tp-testimonial-3-start.png')}}" alt="">
                                </div>
                                <p class="tp-testimonial-5-pagaraph">Bilge rat main shet bilge water nipper of my fluketo go on account heave down clap of thunder. Reef sails six pounders skysail code off conduct. payments</p>
                                <div class="tp-testimonial-5-details">
                                    <h4 class="tp-testimonial-5-name">Anika,</h4>
                                    <p class="tp-testimonial-5-catagory">Developer</p>
                                </div>
                            </div>
                            <div class="tp-testimonial-5-shape">
                                <img src="{{asset('public/template/assets/img/testimonial/testimonial-shape.png')}}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6"> 
                        <div class="tp-testimonial-5-wrapper inner mb-30 wow fadeInUp" data-wow-delay=".9s" data-wow-duration="1s">
                            <div class="tp-testimonial-5-thumb p-relative">
                                <img src="{{asset('public/template/assets/img/testimonial/testimonial-5-thumb4.png')}}" alt="">
                                <div class="tp-testimonial-5-icon">
                                    <span><img src="{{asset('public/template/assets/img/testimonial/testi-quote-icon.svg')}}" alt=""></span>
                                </div>
                            </div>
                            <div class="tp-testimonial-5-content">
                                <div class="tp-testimonial-5-review">
                                    <img src="{{asset('public/template/assets/img/testimonial/tp-testimonial-3-start.png')}}" alt="">
                                </div>
                                <p class="tp-testimonial-5-pagaraph">Bilge rat main shet bilge water nipper of my fluketo go on account heave down clap of thunder. Reef sails six pounders skysail code off conduct. payments</p>
                                <div class="tp-testimonial-5-details">
                                    <h4 class="tp-testimonial-5-name">Jancy,</h4>
                                    <p class="tp-testimonial-5-catagory">Wp</p>
                                </div>
                            </div>
                            <div class="tp-testimonial-5-shape">
                                <img src="{{asset('public/template/assets/img/testimonial/testimonial-shape.png')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- testimonial area end -->
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
                        <div class="tp-subscribe-content wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1s">
                            <h3 class="tp-subscribe-title tp-subscribe-5-title">Quickly Get Updates About Your <br>
                                Event and News!</h3>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3">
                        <div class="tp-subscribe-btn tp-subscribe-5-btn wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1s">
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