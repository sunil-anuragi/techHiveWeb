@extends('layout.main')

@section('title') {{ 'Team Dtails | '.env('APP_NAME') }} @endsection

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
                            <h2 class="tp-breadcrumb-title">team DETAILS</h2>
                            <p class="tp-breadcrumb-body"><span><a class="home" href="{{ url('/') }}">Home <span class="spacing">/</span> </a></span>team DETAILS</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb area end -->





        <!-- team-details area start -->
        <section class="tp-team-details-area pt-120 pb-120">
            <div class="tp-team-details-top"></div>
            <div class="tp-team-details-bottom">
                <div class="container">
                    <div class="row tp-team-details-bg pt-50 pb-20 mb-160" data-background="{{asset('public/template/assets/img/team/team-details-bg.jpg')}}">
                        <div class="col-lg-10">
                            <div class="tp-team-details-information p-relative mb-40 wow fadeInUp">
                                <div class="row">
                                    <div class="col-xl-8 col-lg-8 col-md-8">
                                        <div class="tp-team-details-thumb">
                                            <img src="{{asset('public/template/assets/img/team/team-details-img.jpg')}}" alt="">
                                        </div>
                                        <div class="tp-team-details-text-shape">
                                            <h2 class="tp-team-details-text-shape-title">tecza</h2>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-4">
                                        <div class="tp-team-details-wrapper p-relative">
                                            <h3 class="tp-team-details-title">Subha sara nishi</h3>
                                            <span class="tp-team-details-subtitle">Backend Developer</span>

                                            <h5 class="tp-team-details-info"><span>Department:</span> <a href="#"> Web Design</a></h5>
                                            <h5 class="tp-team-details-info"><span>Experience:</span> <a href="#">15 Years</a></h5>
                                            <h5 class="tp-team-details-info"><span>Email:</span> <a href="mailto:teczahelp@gmil.com">teczahelp@gmil.com</a></h5>
                                            <h5 class="tp-team-details-info"><span>Phone:</span> <a href="tel:1900938495743" target="_blank"> +1-900-938-4957-43</a></h5>

                                            <div class="tp-team-details-social">
                                                <a class="one" href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                                <a class="two" href="#"><i class="fa-brands fa-twitter"></i></a>
                                                <a class="three" href="#"><i class="fa-brands fa-instagram"></i></a>
                                                <a class="four" href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="tp-team-details-wrap wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1s">
                            <h3 class="tp-team-details-info-title wow fadeInUp">subha sara’s Biography</h3>
                            <p class="mb-30">A vast majority of the app marketers mainly concentrate on the post-launch app marketing techniques and measures while completely missing on the pre-launch campaign. This prevents the app to create buzz and hype just around the time when the app is launched. As and when you launch the app, already a considerable number of people should expectantly look forward to your app and this requires long-drawn marketing</p>
                            <p class="mb-45">To create pre-launch buzz and hype about the app a mobile app development company has an array of marketing options like social media campaign, search engine ads, video ads, email campaigns, etc. Apart from online options, you can also reach out to the wider audience with traditional marketing </p>
                        </div>
                    </div>
                    <div class="row">
                            <div class="col-xl-6">
                                <div class="tp-team-details-center-progess mr-70 wow fadeInLeft" data-wow-delay=".3s" data-wow-duration="1s">
                                    <div class="tp-about-2-progres-skill mb-30">
                                        <div class="tp-about-2-skill fix pb-20">
                                            <label class="tp-about-2-label tp-team-details-center-label">Web Development</label>
                                            <div class="progress tp-about-2-progress">
                                                <div class="progress-bar tp-about-2-progress-bar wow slideInLeft" data-wow-duration="1s" data-wow-delay=".8s" role="progressbar" aria-label="Example with label" style="width: 90%; visibility: visible; animation-duration: 1s; animation-delay: 0.8s; animation-name: slideInLeft;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"><span class="progresscounter">90%</span></div>
                                            </div>
                                        </div>
                                        <div class="tp-about-2-skill fix pb-20">
                                            <label class="tp-about-2-label tp-team-details-center-label">Business Solution</label>
                                            <div class="progress tp-about-2-progress">
                                                <div class="progress-bar tp-about-2-progress-bar wow slideInLeft" data-wow-duration="1s" data-wow-delay=".8s" role="progressbar" aria-label="Example with label" style="width: 50%; visibility: visible; animation-duration: 1s; animation-delay: 0.8s; animation-name: slideInLeft;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"><span class="progresscounter">50%</span></div>
                                            </div>
                                        </div>
                                        <div class="tp-about-2-skill fix pb-20">
                                            <label class="tp-about-2-label tp-team-details-center-label">Digital Marketing</label>
                                            <div class="progress tp-about-2-progress">
                                                <div class="progress-bar tp-about-2-progress-bar wow slideInLeft" data-wow-duration="1s" data-wow-delay=".8s" role="progressbar" aria-label="Example with label" style="width: 80%; visibility: visible; animation-duration: 1s; animation-delay: 0.8s; animation-name: slideInLeft;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"><span class="progresscounter">80%</span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="row wow fadeInRight" data-wow-delay=".3s" data-wow-duration="1s">
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                        <div class="tp-team-details-center-sml-item mb-25">
                                            <h4 class="tp-team-details-center-sml-title">Azent Company</h4>
                                            <p class="tp-team-details-center-sml-para">Web Designer, Figma</p>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                        <div class="tp-team-details-center-sml-item mb-25">
                                            <h4 class="tp-team-details-center-sml-title">Amazon Company</h4>
                                            <p class="tp-team-details-center-sml-para">Web Designer, Figma</p>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                        <div class="tp-team-details-center-sml-item mb-25">
                                            <h4 class="tp-team-details-center-sml-title">Moove Ux</h4>
                                            <p class="tp-team-details-center-sml-para">Web Designer, Figma</p>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                        <div class="tp-team-details-center-sml-item mb-25">
                                            <h4 class="tp-team-details-center-sml-title">tecza solution agency</h4>
                                            <p class="tp-team-details-center-sml-para">Web Designer, Figma</p>
                                        </div>
                                    </div>

                                </div>
                            </div>

                    </div>
                    <div class="row justify-content-center">
                        <div class="tp-team-details-bottom-wrap mb-40 wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1s">
                            <h3 class="tp-team-details-info-title wow fadeInUp">Best Skills</h3>
                            <p>A vast majority of the app marketers mainly concentrate on the post-launch app marketing techniques and measures while completely missing on the pre-launch campaign. This prevents the app to create buzz and hype just around the time when the app is launched. As and when you launch the app, already a considerable number of people should expectantly look forward to your app and this requires long-drawn marketing</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="tp-team-details-contact-form wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1s">
                            <form id="contact-form" action="https://html.storebuild.shop/tecza-prv/tecza/{{asset('public/template/assets/mail.php" method="POST" class="tp-team-details-contact-wrapper">
                                <div class="tp-team-details-box tp-contact-inner-page-box">
                                    <h3 class="tp-team-details-contact-title">Let’s Get in Touch</h3>
                                    <p class="tp-team-details-contact-paragraph">Your email address will not be published. Required fields are marked *</p>
                                    <div class="tp-team-details-form">
                                        <div class="row gx-20">
                                            <div class="col-xl-6 col-lg-6">
                                                <input name="name" type="text" placeholder="your name*">
                                            </div>
                                            <div class="col-xl-6 col-lg-6">
                                                <input name="email" type="email" placeholder="your email*">
                                            </div>
                                            <div class="col-xl-12">
                                                <input name="text" type="text" placeholder="website*">
                                            </div>
                                            <div class="col-xl-12">
                                                <textarea name="message" placeholder="Write Your Message*"></textarea>
                                            </div>
                                        </div>
                                        <div class="tp-contact-submit">
                                            <button class="tp-btn-secondary" type="submit"><span>Send Your Message</span></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
       </main>
@endsection

@push('after-js')
@endpush