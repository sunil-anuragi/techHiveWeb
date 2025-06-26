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
                            <h2 class="tp-breadcrumb-title">Service details</h2>
                            <p class="tp-breadcrumb-body"><span><a class="home" href="{{ url('/') }}">Home <span class="spacing">/</span> </a></span>Service details</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb area end -->

        <!-- service-detils area start -->
        <section class="tp-service-detils-area pt-120 pb-120">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="tp-service-details-wrapper-left">
                            <div class="tp-service-details-box mb-50 wow fadeInUp">
                                <h4 class="tp-service-details-box-title">our services</h4>
                                <ul>
                                    <li><a href="{{route('service/details')}}">Data Visualization <span><i class="flaticon-next"></i></span> </a></li>
                                    <li><a class="active" href="{{route('service/details')}}">Product Development <span><i class="flaticon-next"></i></span></a></li>
                                    <li><a href="{{route('service/details')}}">Security System <span><i class="flaticon-next"></i></span></a></li>
                                    <li><a href="{{route('service/details')}}">UI/UX Designing <span><i class="flaticon-next"></i></span> </a></li>
                                    <li><a href="{{route('service/details')}}">Digital Marketing <span><i class="flaticon-next"></i></span></a></li>
                                    <li><a href="{{route('service/details')}}">Data Analytics <span><i class="flaticon-next"></i></span></a></li>
                                </ul>
                            </div>
                            <div class="tp-service-details-contact-box mb-50 wow fadeInUp">
                                <div class="tp-service-details-contact text-center" data-background="{{asset('public/template/assets/img/service/service-details-price.jpg')}}">
                                    <h4 class="tp-service-details-contact-title">Contact with <br>
                                        us for any <br>
                                        advice</h4>
                                    <div class="tp-service-details-contact-btn">
                                        <a class="tp-btn" rel="noreferrer" href="{{route('contact')}}" target="_blank"><span>contact with us</span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="tp-service-details-box wow fadeInUp">
                                <div class="tp-service-details-call-item d-flex align-items-center">
                                    <div class="tp-service-details-call-icon p-relative z-index-11">
                                        <a href="tel:+997868765"><img src="{{asset('public/template/assets/img/service/service-details-calll-icon.svg')}}" alt=""></a>
                                    </div>
                                    <div class="tp-service-details-call-number ml-20">
                                        <span>You Can Call Anytime</span>
                                        <a href="tel:+917567329956">Free +91 7567329956</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-8 col-md-6">
                        <div class="tp-service-details-wrapper ml-35">
                            <h3 class="tp-service-details-title wow fadeInUp">Productivity is at the <br>
                                Heart Of Every Organization</h3>
                            <p>We embrace holistic development and support for employees with the aim of being a first-choice employer within our sectors. Through a    unique combination of engineering, construction
                                and <br> design disciplines and expertise.</p>
                            <div class="tp-service-details-thumb mb-35 wow fadeInUp">
                                <img src="{{asset('public/template/assets/img/service/service-details-img.jpg')}}" alt="">
                            </div>

                            <h4 class="tp-service-details-sub-title wow fadeInUp">data visualization</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas varius tortor nibh, sit amet tempor nibh finibus et. Aenean eu enim justo. Vestibulum aliquam hendrerit molestie. Mauris malesuada nisi sit amet augue accumsan tincidunt. Maecenas tincidunt, velit ac porttitor pulvinar, tortor eros facilisis libero, vitae commodo nunc quam et ligula</p>
                            <div class="row mb-10">
                                <div class="col-xl-5">
                                    <div class="tp-service-details-list-item wow fadeInUp">
                                        <h4 class="tp-service-details-list-title">Our Goals</h4>
                                        <ul>
                                            <li><i class="flaticon-check-mark"></i> <span>Aliquam accumsan et ante id</span></li>
                                            <li><i class="flaticon-check-mark"></i> <span>Lorem ipsum dolor sit dgdr</span></li>
                                            <li><i class="flaticon-check-mark"></i> <span>Maecenas varius tortor</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-xl-7">
                                    <div class="tp-service-details-list-item ml-10 wow fadeInUp">
                                        <h4 class="tp-service-details-list-title">The Challenges</h4>
                                        <p class="tp-service-details-list-paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas varius tortor nibh, sit amet tempor  finibus et. Aenean eu enim justo. Vestibulum</p>
                                    </div>
                                </div>
                            </div>
                            <div class="tp-faq-3-accordion tp-service-details-accordion accordion-flush wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1s" id="accordionFlushExample">
                                <div class="tp-faq-3-accordion-item accordion-item mb-10">
                                    <h2 class="accordion-header">
                                        <button class="tp-faq-3-accordion-title accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                            I'm a total beginner. Can I still follow along?
                                            <span class="tp-faq-3-accordion-btn"></span>
                                        </button>
                                    </h2>
                                    <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                        <div class="tp-faq-3-accordion-pera accordion-body">Your applicant may have limited help desk wexperience. In that case, look for applicants who are motivated to grow and have some transferable nibh finibus et. Aenean eu enim justo. Vestibulum aliquam hendrerit moles accumsan  </div>
                                    </div>
                                </div>
                                <div class="tp-faq-3-accordion-item accordion-item mb-10">
                                    <h2 class="accordion-header">
                                        <button class="tp-faq-3-accordion-title accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-controls="flush-collapseTwo">
                                            Which technical skills would you improve?
                                            <span class="tp-faq-3-accordion-btn"></span>
                                        </button>
                                    </h2>
                                    <div id="flush-collapseTwo" class="accordion-collapse collapse show" data-bs-parent="#accordionFlushExample">
                                        <div class="tp-faq-3-accordion-pera accordion-body">Your applicant may have limited help desk wexperience. In that case, look for applicants who are motivated to grow and have some transferable nibh finibus et. Aenean eu enim justo. Vestibulum aliquam hendrerit moles accumsan  </div>
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
                                        <div class="tp-faq-3-accordion-pera accordion-body">Your applicant may have limited help desk wexperience. In that case, look for applicants who are motivated to grow and have some transferable nibh finibus et. Aenean eu enim justo. Vestibulum aliquam hendrerit moles accumsan  </div>
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
                                        <div class="tp-faq-3-accordion-pera accordion-body">Your applicant may have limited help desk wexperience. In that case, look for applicants who are motivated to grow and have some transferable nibh finibus et. Aenean eu enim justo. Vestibulum aliquam hendrerit moles accumsan  </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- service-detils area start -->
    </main>
@endsection

@push('after-js')
@endpush