@extends('layout.main')

@section('title') {{ 'Service | '.env('APP_NAME') }} @endsection

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
                            <h2 class="tp-breadcrumb-title">Our Service</h2>
                            <p class="tp-breadcrumb-body"><span><a class="home" href="{{ url('/') }}">Home <span class="spacing">/</span> </a></span>OUR service</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb area end -->       

        <!-- service area start -->
        <section class="tp-service-2-area pt-120 pb-90">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="tp-service-2-wrapper wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1s">
                            <div class="tp-service-2-thumb">
                                <a href="{{route('service/details')}}"><img src="{{asset('public/template/assets/img/service/service-2-img1.jpg')}}" alt=""></a>
                            </div>
                            <div class="tp-service-2-content">
                                <div class="tp-service-2-icon">
                                    <span><i class="flaticon-advertisig-agency"></i></span>
                                </div>
                                <h4 class="tp-service-2-title"><a href="{{route('service/details')}}">digital marketing</a></h4>
                                <p class="tp-service-2-paragraph">Outsourcing is just a tool my own
                                    achieve and business</p>
                            </div>
                            <div class="tp-service-2-button">
                                <a class="tp-service-2-btn" href="{{route('service/details')}}">READ MORE</a>
                                <a class="tp-service-2-arrow-btn" href="{{route('service/details')}}"><i class="flaticon-next"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="tp-service-2-wrapper wow fadeInUp" data-wow-delay=".5s" data-wow-duration="1s">
                            <div class="tp-service-2-thumb">
                                <a href="{{route('service/details')}}"><img src="{{asset('public/template/assets/img/service/service-2-img2.jpg')}}" alt=""></a>
                            </div>
                            <div class="tp-service-2-content">
                                <div class="tp-service-2-icon">
                                    <span><i class="flaticon-data-visualization-1"></i></span>
                                </div>
                                <h4 class="tp-service-2-title"><a href="{{route('service/details')}}">it management</a></h4>
                                <p class="tp-service-2-paragraph">Outsourcing is just a tool my own
                                    achieve and business</p>
                            </div>
                            <div class="tp-service-2-button">
                                <a class="tp-service-2-btn" href="{{route('service/details')}}">READ MORE</a>
                                <a class="tp-service-2-arrow-btn" href="{{route('service/details')}}"><i class="flaticon-next"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="tp-service-2-wrapper wow fadeInUp" data-wow-delay=".7s" data-wow-duration="1s">
                            <div class="tp-service-2-thumb">
                                <a href="{{route('service/details')}}"><img src="{{asset('public/template/assets/img/service/service-2-img3.jpg')}}" alt=""></a>
                            </div>
                            <div class="tp-service-2-content">
                                <div class="tp-service-2-icon">
                                    <span><i class="flaticon-graph"></i></span>
                                </div>
                                <h4 class="tp-service-2-title"><a href="{{route('service/details')}}">marketing strategy</a></h4>
                                <p class="tp-service-2-paragraph">Outsourcing is just a tool my own
                                    achieve and business</p>
                            </div>
                            <div class="tp-service-2-button">
                                <a class="tp-service-2-btn" href="{{route('service/details')}}">READ MORE</a>
                                <a class="tp-service-2-arrow-btn" href="{{route('service/details')}}"><i class="flaticon-next"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="tp-service-2-wrapper wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1s">
                            <div class="tp-service-2-thumb">
                                <a href="{{route('service/details')}}"><img src="{{asset('public/template/assets/img/service/service-2-img4.jpg')}}" alt=""></a>
                            </div>
                            <div class="tp-service-2-content">
                                <div class="tp-service-2-icon">
                                    <span><i class="flaticon-coding"></i></span>
                                </div>
                                <h4 class="tp-service-2-title"><a href="{{route('service/details')}}">app development</a></h4>
                                <p class="tp-service-2-paragraph">Outsourcing is just a tool my own
                                    achieve and business</p>
                            </div>
                            <div class="tp-service-2-button">
                                <a class="tp-service-2-btn" href="{{route('service/details')}}">READ MORE</a>
                                <a class="tp-service-2-arrow-btn" href="{{route('service/details')}}"><i class="flaticon-next"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="tp-service-2-wrapper wow fadeInUp" data-wow-delay=".5s" data-wow-duration="1s">
                            <div class="tp-service-2-thumb">
                                <a href="{{route('service/details')}}"><img src="{{asset('public/template/assets/img/service/service-2-img5.jpg')}}" alt=""></a>
                            </div>
                            <div class="tp-service-2-content">
                                <div class="tp-service-2-icon">
                                    <span><i class="flaticon-gear"></i></span>
                                </div>
                                <h4 class="tp-service-2-title"><a href="{{route('service/details')}}">security systmes</a></h4>
                                <p class="tp-service-2-paragraph">Outsourcing is just a tool my own
                                    achieve and business</p>
                            </div>
                            <div class="tp-service-2-button">
                                <a class="tp-service-2-btn" href="{{route('service/details')}}">READ MORE</a>
                                <a class="tp-service-2-arrow-btn" href="{{route('service/details')}}"><i class="flaticon-next"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="tp-service-2-wrapper wow fadeInUp" data-wow-delay=".7s" data-wow-duration="1s">
                            <div class="tp-service-2-thumb">
                                <a href="{{route('service/details')}}"><img src="{{asset('public/template/assets/img/service/service-2-img6.jpg')}}" alt=""></a>
                            </div>
                            <div class="tp-service-2-content">
                                <div class="tp-service-2-icon">
                                    <span><i class="flaticon-data-visualization"></i></span>
                                </div>
                                <h4 class="tp-service-2-title"><a href="{{route('service/details')}}">data visualization</a></h4>
                                <p class="tp-service-2-paragraph">Outsourcing is just a tool my own
                                    achieve and business</p>
                            </div>
                            <div class="tp-service-2-button">
                                <a class="tp-service-2-btn" href="{{route('service/details')}}">READ MORE</a>
                                <a class="tp-service-2-arrow-btn" href="{{route('service/details')}}"><i class="flaticon-next"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- service area end -->       

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
        <!-- subscribe area end -->
    </main>
@endsection

@push('after-js')
@endpush