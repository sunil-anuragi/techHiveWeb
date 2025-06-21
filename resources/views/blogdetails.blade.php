 @extends('layout.main')

@section('title') {{ 'Blog Details | '.env('APP_NAME') }} @endsection

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
                            <h2 class="tp-breadcrumb-title">blog details</h2>
                            <p class="tp-breadcrumb-body"><span><a class="home" href="{{ url('/') }}">Home <span class="spacing">/</span> </a></span>blog details</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb area end -->
         <!-- postbox area start -->
         <section class="tp-postbox-area pt-120 pb-120">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-8 col-xl-8 col-lg-8">
                        <div class="tp-postbox-wrapper">
                            <article class="tp-postbox-item wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1s">
                                <div class="tp-postbox-thumb p-relative">
                                    <img src="assets/img/blog/blog-sidebar-11.jpg" alt="">
                                </div>
                                <div class="tp-postbox-content">
                                    <h3 class="tp-postbox-title details">Easy & Most Powerful it solution company</h3>
                                    <h5 class="tp-postbox-sub-title">March 23, 2022 _ TRANSPORT _ BY Katty Olson _ 2 Comments</h5>
                                    <p class="tp-postbox-paragraph">With worldwide annual spend on digital advertising surpassing $325 billion, it’s no surprise that different approaches to online marketing are becoming available. One of these new approaches is performance marketing or digital performance marketing. Keep reading to learn all about performance marketing, from how it works to how it compares to digital marketing. Plus, get insight into the benefits and risks of performance marketing and how it can affect your company’s long-term success and profitability. Performance marketing is an approach to digital marketing or advertising where businesses only pay when a specific result occurs. This result could be a new lead, sale, or other outcome agreed upon by the advertiser and business. Performance marketing involves channels such as affiliate marketing, online advertising.</p>
                                </div>
                            </article>
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="tp-postbox-thumb wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1s">
                                        <img src="{{asset('public/template/assets/img/blog/postbox-thumb1.jpg')}}" alt="">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="tp-postbox-thumb wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1s">
                                        <img src="{{asset('public/template/assets/img/blog/postbox-thumb2.jpg')}}" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="tp-postbox-content wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1s">
                                <h3 class="tp-postbox-title details">Latest Articles Updated Daily</h3>
                                <p class="tp-postbox-paragraph details">With worldwide annual spend on digital advertising surpassing $325 billion, it’s no surprise that different approaches to online marketing are becoming available. One of these new approaches is performance marketing or digital performance marketing. Keep reading to learn all about performance marketing
                                    worldwide annual spend on digital advertising surpassing $325 billion, it’s no surprise</p>
                            </div>
                            <div class="tp-postbox-blog-code mb-80 text-center wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1s">
                                <div class="tp-postbox-blog-code-icon mb-20">
                                    <img src="{{asset('public/template/assets/img/blog/blog-code.svg')}}" alt="">
                                </div>
                                <div class="tp-postbox-blog-code-content">
                                    <h4 class="tp-postbox-blog-code-title">Diam luctus nostra dapibus varius et semper semper rutrum ad risus felis
                                        eros. Cursus libero viverra tempus netus diam vestibulum</h4>
                                    <p class="tp-postbox-blog-code-name">David Backhum</p>
                                </div>
                            </div>
                            <div class="row align-items-center tp-postbox-details-row mb-50">
                                <div class="col-xl-10 col-lg-10 col-md-10">
                                    <div class="tp-postbox-details-tag details d-flex wow fadeInUp">
                                        <span>Posted in:</span>
                                        <div class="tp-postbox-tagcloud-social">
                                            <a href="#">Development</a>
                                            <a href="#">Digital</a>
                                            <a href="#">Tech</a>
                                        </div> 
                                    </div>
                                </div>
                                <div class="col-xl-2 col-lg-2 col-md-2">
                                    <div class="tp-postbox-details-share d-flex justify-content-end wow fadeInUp">
                                        <a href="#"><span><i class="flaticon-share"></i></span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="tp-postbox-comment mb-50">
                                <h3 class="tp-postbox-comment-title wow fadeInUp">01 Comments</h3>
                                <div class="tp-postbox-comment-box border-mr p-relative">
                                    <div class="tp-postbox-comment-box-inner">
                                        <div class="tp-postbox-comment-avater wow fadeInUp">
                                            <img src="{{asset('public/template/assets/img/blog/blog-details-4.png')}}" alt="">
                                        </div>
                                        <div class="tp-postbox-comment-content wow fadeInUp">
                                            <div class="tp-postbox-comment-top">
                                                <div class="tp-postbox-comment-date">
                                                    <span>September 6, 2022 at 1:28 pm </span>
                                                </div>
                                                <div class="tp-postbox-comment-reply">
                                                    <a href="#"><i class="fa-light fa-reply"></i>REPLY</a>
                                                </div>
                                            </div>
                                            <div class="tp-postbox-comment-author d-flex align-items-center">
                                                <h4 class="tp-postbox-comment-name">Nitisha Batman</h4>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet consectetur adipi vestibulum lectus egestas cubilia nam sagittis, nulla posuere habitant</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tp-postbox-contact-reply wow fadeInUp">
                                <h3 class="tp-postbox-contact-title">Let’s Get in Touch</h3>
                                <p class="tp-postbox-contact-pagagraph">Your email address will not be published. Required fields are marked *</p>
                                <form id="tp-postbox-contact-form" action="https://html.storebuild.shop/tecza-prv/tecza/assets/mail.php" method="POST">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="tp-postbox-contact-input">
                                                <input name="name" type="text" placeholder="Your Name*">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="tp-postbox-contact-input">
                                                <input name="email" type="email" placeholder="Your E-mail*">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="tp-postbox-contact-input">
                                                <input name="name" type="text" placeholder="Website*">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="tp-postbox-contact-input">
                                                <textarea placeholder="Write Your Comment*"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="tp-postbox-contact-input-btn">
                                                <button class="tp-btn" type="submit"><span>Send your Meassage</span></button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-8">
                        <div class="sidebar__wrapper">
                            <div class="sidebar__widget sidebar__widget-theme-bg mb-35 wow fadeInUp">
                                <div class="sidebar__widget-content">
                                    <h3 class="sidebar__widget-title">Search</h3>
                                    <div class="sidebar__search">
                                        <form action="#">
                                            <div class="sidebar__search-input-2">
                                                <input type="text" placeholder="Keywords here....">
                                                <button type="submit"><i class="far fa-search"></i></button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="sidebar__widget mb-30">
                                <h3 class="sidebar__widget-title">Recent Post</h3>
                                <div class="sidebar__widget-content">
                                    <div class="sidebar__post">
                                        <div class="rc__post mb-10 d-flex align-items-center wow fadeInUp">
                                            <div class="rc__post-thumb mr-30">
                                                <a href="{{route('blog/details')}}"><img src="{{asset('public/template/assets/img/blog/details-sm-1-1.jpg')}}" alt=""></a>
                                            </div>
                                            <div class="rc__post-content">
                                                <h3 class="rc__post-title">
                                                    <a href="{{route('blog/details')}}">Keep Your Business Safe
                                                        Ensure High</a>
                                                </h3>
                                                <div class="rc__meta">
                                                    <span><i class="flaticon-clock"></i>
                                                        Jan 21, 2024</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="rc__post mb-10 d-flex align-items-center active wow fadeInUp">
                                            <div class="rc__post-thumb mr-30">
                                                <a href="{{route('blog/details')}}"><img src="{{asset('public/template/assets/img/blog/details-sm-1-2.jpg')}}" alt=""></a>
                                            </div>
                                            <div class="rc__post-content">
                                                <h3 class="rc__post-title">
                                                    <a href="{{route('blog/details')}}">We’ve Been a Strategy
                                                        Thought Leader for Nearly</a>
                                                </h3>
                                                <div class="rc__meta">
                                                    <span><i class="flaticon-clock"></i>
                                                        Jan 21, 2024</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="rc__post d-flex align-items-center wow fadeInUp">
                                            <div class="rc__post-thumb mr-30">
                                                <a href="{{route('blog/details')}}"><img src="{{asset('public/template/assets/img/blog/details-sm-1-3.jpg')}}" alt=""></a>
                                            </div>
                                            <div class="rc__post-content">
                                                <h3 class="rc__post-title">
                                                    <a href="{{route('blog/details')}}">This Week’s Top Stories
                                                        About It</a>
                                                </h3>
                                                <div class="rc__meta">
                                                    <span><i class="flaticon-clock"></i>
                                                        Jan 21, 2024</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tp-service-details-wrapper-left wow fadeInUp">
                                <div class="tp-service-details-box mb-30">
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
                            </div>
                            <div class="sidebar__widget sidebar__widget-last mb-30 wow fadeInUp">
                                <h3 class="sidebar__widget-title">Tag</h3>
                                <div class="sidebar__widget-content">
                                    <div class="tagcloud">
                                        <a href="#">IT Technology</a>
                                        <a href="#">Software</a>
                                        <a href="#">Design</a>
                                        <a href="#">Service</a>
                                        <a href="#">Development</a><br>
                                        <a href="#">Digital</a>
                                        <a href="#">Cyber</a>
                                    </div>
                                </div>
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