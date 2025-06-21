@extends('layout.main')

@section('title') {{ 'Team | '.env('APP_NAME') }} @endsection

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
                            <h2 class="tp-breadcrumb-title">our team</h2>
                            <p class="tp-breadcrumb-body"><span><a class="home" href="index.html">Home <span class="spacing">/</span> </a></span>our team</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb area end -->




        <!-- team area start -->
        <section class="tp-team-3-area pt-120 pb-90">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="tp-team-3-wrapper mb-30 wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1s">
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
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="tp-team-3-wrapper mb-30 wow fadeInUp" data-wow-delay=".5s" data-wow-duration="1s">
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
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="tp-team-3-wrapper mb-30 wow fadeInUp" data-wow-delay=".7s" data-wow-duration="1s">
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
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="tp-team-3-wrapper mb-30 wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1s">
                            <div class="tp-team-3-thumb p-relative">
                                <a href="team-details.html"><img src="assets/img/team/team-3-img4.jpg" alt=""></a>
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
                                <p class="tp-team-3-paragarph">Manager</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="tp-team-3-wrapper mb-30 wow fadeInUp" data-wow-delay=".5s" data-wow-duration="1s">
                            <div class="tp-team-3-thumb p-relative">
                                <a href="team-details.html"><img src="assets/img/team/team-3-img5.jpg" alt=""></a>
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
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="tp-team-3-wrapper mb-30 wow fadeInUp" data-wow-delay=".7s" data-wow-duration="1s">
                            <div class="tp-team-3-thumb p-relative">
                                <a href="team-details.html"><img src="assets/img/team/team-3-img6.jpg" alt=""></a>
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
                                <p class="tp-team-3-paragarph">Developer</p>
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
                        <div class="tp-subscribe-content wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1s">
                            <h3 class="tp-subscribe-title tp-subscribe-5-title">Quickly Get Updates About Your <br>
                                Event and News!</h3>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3">
                        <div class="tp-subscribe-btn tp-subscribe-5-btn wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1s">
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