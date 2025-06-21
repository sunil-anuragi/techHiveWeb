 @extends('layout.main')

@section('title') {{ 'Faq | '.env('APP_NAME') }} @endsection

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
                            <h2 class="tp-breadcrumb-title">OUR FAQ’S</h2>
                            <p class="tp-breadcrumb-body"><span><a class="home" href="{{ url('/') }}">Home <span class="spacing">/</span> </a></span>OUR FAQ’S</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb area end -->




        <!-- faq area start -->
        <section class="tp-faq-inner-area pt-120 pb-90 p-relative z-index-1">
            <div class="coustom-container-faq-inner m-auto">
                <div class="row">
                    <div class="tp-section-title-wrapper mb-50 text-center wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1s">
                        <span class="tp-section-subtitle">FREQUENTLY ASKED QUESTION</span>
                        <h3 class="tp-section-title">What Our Clients Ask about <br>
                            our tecza company</h3>
                    </div>
                </div>
                <div class="row gx-0">
                    <div class="col-xl-6">
                        <div class="tp-faq-inner-thumb wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1s">
                            <img src="{{asset('public/template/assets/img/faq/faq-inner-thumb.jpg')}}" alt="">
                        </div>
                    </div>
                    <div class="col-xl-1">
                        <div class="tp-faq-inner-height"></div>
                    </div>
                    <div class="col-xl-5">
                        <div class="tp-faq-inner-wrapper wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1s">
                            <div class="tp-faq-3-wrapper">
                                <div class="tp-faq-3-accordion tp-faq-inner-accordion accordion-flush wow fadeInLeft" id="accordionFlushExample" style="visibility: visible; animation-name: fadeInLeft;">
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
                    </div>
                </div>
                <div class="row mb-120">
                    <div class="col-xl-7"></div>
                    <div class="col-xl-5">
                        <div class="tp-faq-inner-btn">
                            <a class="tp-faq-inner-btn" href="#">load more question</a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-6">
                        <div class="tp-faq-inner-social mb-30 wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1s">
                            <div class="tp-faq-inner-social-icon">
                                <a href="#"><span><i class="fa-brands fa-facebook-f"></i></span></a>
                            </div>
                            <div class="tp-faq-inner-social-content">
                                <p class="tp-faq-inner-social-para">Follow us on Facebook for small bonus update</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="tp-faq-inner-social mb-30 wow fadeInUp" data-wow-delay=".5s" data-wow-duration="1s">
                            <div class="tp-faq-inner-social-icon">
                                <a href="#"><span class="instagram"><i class="flaticon-instagram"></i></span></a>
                            </div>
                            <div class="tp-faq-inner-social-content">
                                <p class="tp-faq-inner-social-para">Follow us on Instagram for small business inspiration</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="tp-faq-inner-social mb-30 wow fadeInUp" data-wow-delay=".7s" data-wow-duration="1s">
                            <div class="tp-faq-inner-social-icon">
                                <a href="#"><span class="pinterest"><i class="flaticon-pinterest"></i></span></a>
                            </div>
                            <div class="tp-faq-inner-social-content">
                                <p class="tp-faq-inner-social-para">Get our Newsletter for small business tips & news</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="tp-faq-inner-social mb-30 wow fadeInUp" data-wow-delay=".9s" data-wow-duration="1s">
                            <div class="tp-faq-inner-social-icon">
                                <a href="#"><span class="twitter"><i class="flaticon-social"></i></span></a>
                            </div>
                            <div class="tp-faq-inner-social-content">
                                <p class="tp-faq-inner-social-para">Follow us on Instagram for small business inspiration</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- faq area end -->

        
        

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