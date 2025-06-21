<!-- footer area start -->
        <section class="tp-footer-area tp-footer-2-area pt-130 fix">
            <div class="tp-footer-bg-shape">
                <img class="tp-footer-bg-shape-1" src="{{asset('public/template/assets/img/footer/footer-shape1.png')}}" alt="">
                <img class="tp-footer-bg-shape-2" src="{{asset('public/template/assets/img/footer/footer-shape2.png')}}" alt="">
            </div>
            <div class="tp-footer-top pb-65">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 mb-50">
                            <div class="tp-footer-widget wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1s">
                                <div class="tp-footer-logo">
                                    <a href="{{ url('/') }}"><img src="{{asset('public/template/assets/img/footer/footer-logo.png')}}" alt=""></a>
                                </div>
                                <div class="tp-footer-text">
                                    <p>Righteous indignation and dislike men
                                        are so beguiled & demoralized off <br>
                                        the charms pleasure</p>
                                </div>
                                <div class="tp-footer-social">
                                    <a href="#"><i class="flaticon-facebook"></i></a>
                                    <a href="#"><i class="flaticon-instagram"></i></a>
                                    <a href="#"><i class="flaticon-social"></i></a>
                                    <a href="#"><i class="flaticon-pinterest"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 mb-50 ">
                            <div class="tp-footer-widget tp-footer-two-item ml-70 wow fadeInUp" data-wow-delay=".5s" data-wow-duration="1s">
                                <h4 class="tp-footer-title">NAVIGATION</h4>
                                <div class="tp-footer-list">
                                    <ul>
                                        <li><a href="{{ url('/')}}">Home</a></li>
                                        <li><a href="{{route('pricing')}}">Pricing Plan</a></li>
                                        <li><a href="{{ route('aboutus')}}">About US</a></li>
                                        <li><a href="{{route('service')}}">Our Services</a></li>
                                        <li><a href="{{route('portfolio')}}">Portfolio</a></li>
                                        <li><a href="{{route('contact')}}">Contact</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 mb-50">
                            <div class="tp-footer-widget tp-footer-three-item wow fadeInUp" data-wow-delay=".7s" data-wow-duration="1s">
                                <h4 class="tp-footer-title">NEED HELP?</h4>
                                <div class="tp-footer-list">
                                    <ul>
                                        <li><a href="{{ url('/') }}">Support</a></li>
                                        <li><a href="{{route('pricing')}}">Privacy Policy</a></li>
                                        <li><a href="{{ route('aboutus') }}">Terms of Use</a></li>
                                        <li><a href="{{route('service')}}">Clients</a></li>
                                        <li><a href="{{route('portfolio')}}">Help</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 mb-50">
                            <div class="tp-footer-widget tp-footer-four-item wow fadeInUp" data-wow-delay=".9s" data-wow-duration="1s">
                                <h4 class="tp-footer-title">Latest post</h4>
                                <div class="tp-footer-2-thumb-wrap">
                                    <div class="tp-footer-2-thumb-item d-flex mb-30">
                                        <a class="d-flex" href="{{route('blog/details')}}">
                                            <div class="tp-footer-2-thumb">
                                                <img src="{{asset('public/template/assets/img/footer/footer-post1.jpg')}}" alt="">
                                            </div>
                                            <div class="tp-footer-2-thumb-date">
                                                <span><i class="flaticon-clock"></i> 02 May, 2024</span>
                                                <p>Duis turpis neque laoreet sit
                                                    amet ipsum quis lacinia</p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="tp-footer-2-thumb-item d-flex">
                                        <a class="d-flex" href="{{route('blog/details')}}">
                                            <div class="tp-footer-2-thumb">
                                                <img src="{{asset('public/template/assets/img/footer/footer-post2.jpg')}}" alt="">
                                            </div>
                                            <div class="tp-footer-2-thumb-date">
                                                <span><i class="flaticon-clock"></i> 02 May, 2024</span>
                                                <p>Duis turpis neque laoreet sit
                                                    amet ipsum quis lacinia</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tp-footer-bottom">
                <div class="container">
                    <div class="row align-items-center tp-footer-bg  pt-30 pb-20">
                        <div class="col-xl-12">
                            <div class="tp-footer-copy-right text-center wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1s">
                                <p class="tp-footer-copy-paragraph">Full Copyright & Design By @<a href="{{ url('/') }}">Tech Hive Web</a> – 2025</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>