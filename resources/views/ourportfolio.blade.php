
@extends('layout.main')

@section('title') {{ 'Portfolio | '.env('APP_NAME') }} @endsection

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
                            <h2 class="tp-breadcrumb-title">our portfolio</h2>
                            <p class="tp-breadcrumb-body"><span><a class="home" href="{{ url('/') }}">Home <span class="spacing">/</span> </a></span>our portfolio</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb area end -->





        <!-- project area start -->
        <section class="tp-project-5-area pt-110 pb-90">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="tp-project-5-wrapper p-relative fix mb-30 wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1s">
                            <div class="tp-project-5-img">
                                <img src="{{asset('public/template/assets/img/project/project-img1.jpg')}}" alt="">
                            </div>
                            <div class="tp-project-5-content-wrap d-flex">
                                <div class="tp-project-5-arrow-btn">
                                    <a class="tp-project-5-arrow-btn-right" href="{{route('portfoliodetails')}}"><i class="flaticon-next"></i></a>
                                </div>
                                <div class="tp-project-5-content">
                                    <span class="tp-project-5-content-subtitle">Building</span>
                                    <h4 class="tp-project-5-content-title"><a href="{{route('portfoliodetails')}}">Social media app</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="tp-project-5-wrapper p-relative fix mb-30 wow fadeInUp" data-wow-delay=".5s" data-wow-duration="1s">
                            <div class="tp-project-5-img">
                                <img src="{{asset('public/template/assets/img/project/project-img2.jpg')}}" alt="">
                            </div>
                            <div class="tp-project-5-content-wrap d-flex">
                                <div class="tp-project-5-arrow-btn">
                                    <a class="tp-project-5-arrow-btn-right" href="{{route('portfoliodetails')}}"><i class="flaticon-next"></i></a>
                                </div>
                                <div class="tp-project-5-content">
                                    <span class="tp-project-5-content-subtitle">Solution</span>
                                    <h4 class="tp-project-5-content-title"><a href="{{route('portfoliodetails')}}">information manage</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="tp-project-5-wrapper p-relative fix mb-30 wow fadeInUp" data-wow-delay=".7s" data-wow-duration="1s">
                            <div class="tp-project-5-img">
                                <img src="{{asset('public/template/assets/img/project/project-img3.jpg')}}" alt="">
                            </div>
                            <div class="tp-project-5-content-wrap d-flex">
                                <div class="tp-project-5-arrow-btn">
                                    <a class="tp-project-5-arrow-btn-right" href="{{route('portfoliodetails')}}"><i class="flaticon-next"></i></a>
                                </div>
                                <div class="tp-project-5-content">
                                    <span class="tp-project-5-content-subtitle">Building</span>
                                    <h4 class="tp-project-5-content-title"><a href="{{route('portfoliodetails')}}">Data Integration</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="tp-project-5-wrapper p-relative fix mb-30 wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1s">
                            <div class="tp-project-5-img">
                                <img src="{{asset('public/template/assets/img/project/project-img4.jpg')}}" alt="">
                            </div>
                            <div class="tp-project-5-content-wrap d-flex">
                                <div class="tp-project-5-arrow-btn">
                                    <a class="tp-project-5-arrow-btn-right" href="{{route('portfoliodetails')}}"><i class="flaticon-next"></i></a>
                                </div>
                                <div class="tp-project-5-content">
                                    <span class="tp-project-5-content-subtitle">Building</span>
                                    <h4 class="tp-project-5-content-title"><a href="{{route('portfoliodetails')}}">IT Management</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="tp-project-5-wrapper p-relative fix mb-30 wow fadeInUp" data-wow-delay=".5s" data-wow-duration="1s">
                            <div class="tp-project-5-img">
                                <img src="{{asset('public/template/assets/img/project/project-img5.jpg')}}" alt="">
                            </div>
                            <div class="tp-project-5-content-wrap d-flex">
                                <div class="tp-project-5-arrow-btn">
                                    <a class="tp-project-5-arrow-btn-right" href="{{route('portfoliodetails')}}"><i class="flaticon-next"></i></a>
                                </div>
                                <div class="tp-project-5-content">
                                    <span class="tp-project-5-content-subtitle">Building</span>
                                    <h4 class="tp-project-5-content-title"><a href="{{route('portfoliodetails')}}">Social media app</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="tp-project-5-wrapper p-relative fix mb-30 wow fadeInUp" data-wow-delay=".7s" data-wow-duration="1s">
                            <div class="tp-project-5-img">
                                <img src="{{asset('public/template/assets/img/project/project-img6.jpg')}}" alt="">
                            </div>
                            <div class="tp-project-5-content-wrap d-flex">
                                <div class="tp-project-5-arrow-btn">
                                    <a class="tp-project-5-arrow-btn-right" href="{{route('portfoliodetails')}}"><i class="flaticon-next"></i></a>
                                </div>
                                <div class="tp-project-5-content">
                                    <span class="tp-project-5-content-subtitle">Building</span>
                                    <h4 class="tp-project-5-content-title"><a href="{{route('portfoliodetails')}}">information manage</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <!-- project area end -->





        

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