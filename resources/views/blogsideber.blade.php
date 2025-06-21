 @extends('layout.main')

@section('title') {{ 'Blog Sideber | '.env('APP_NAME') }} @endsection

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
                            <h2 class="tp-breadcrumb-title">blog SIDEBAR</h2>
                            <p class="tp-breadcrumb-body"><span><a class="home" href="{{ url('/') }}">Home <span class="spacing">/</span> </a></span>blog SIDEBAR</p>
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
                            <article class="tp-postbox-item mb-40 wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1s">
                                <div class="tp-postbox-thumb p-relative">
                                    <a href="{{route('blog/details')}}">
                                        <img src="{{asset('public/template/assets/img/blog/blog-sidebar-1.jpg')}}" alt="">
                                    </a>
                                </div>
                                <div class="tp-postbox-content">
                                    <div class="tp-postbox-meta mb-35">
                                        <span class="mr-35"><a href="#"><img src="{{asset('public/template/assets/img/blog/blog-siteber-celender.svg')}}" alt=""> April 21, 2023</a></span>
                                        <span><a href="#"><img src="{{asset('public/template/assets/img/blog/blog-siteber-user.svg')}}" alt=""> By Bulbul</a></span>
                                    </div>
                                    <h3 class="tp-postbox-title">
                                        <a href="{{route('blog/details')}}">What type of IT solution are you looking for <br>
                                            (e.g., software development, network)</a>
                                    </h3>
                                    <div class="tp-postbox-read">
                                        <a class="tp-btn" rel="noreferrer" href="{{route('blog/details')}}" target="_blank"><span>Read More</span></a>
                                    </div>
                                </div>
                            </article>
                            <article class="tp-postbox-item mb-40 wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1s">
                                <div class="tp-postbox-thumb p-relative">
                                    <a href="{{route('blog/details')}}">
                                        <img src="{{asset('public/template/assets/img/blog/blog-sidebar-2.jpg')}}" alt="">
                                    </a>
                                </div>
                                <div class="tp-postbox-content">
                                    <div class="tp-postbox-meta mb-35">
                                        <span class="mr-35"><a href="#"><img src="{{asset('public/template/assets/img/blog/blog-siteber-celender.svg')}}" alt=""> April 21, 2023</a></span>
                                        <span><a href="#"><img src="{{asset('public/template/assets/img/blog/blog-siteber-user.svg')}}" alt=""> By Bulbul</a></span>
                                    </div>
                                    <h3 class="tp-postbox-title">
                                        <a href="{{route('blog/details')}}">Developing a strategic plan and architecture <br>
                                            for the IT solution, including software</a>
                                    </h3>
                                    <div class="tp-postbox-read">
                                        <a class="tp-btn" rel="noreferrer" href="{{route('blog/details')}}" target="_blank"><span>Read More</span></a>
                                    </div>
                                </div>
                            </article>
                            <article class="tp-postbox-item mb-35 wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1s">
                                <div class="tp-postbox-thumb p-relative">
                                    <a href="{{route('blog/details')}}">
                                        <img src="{{asset('public/template/assets/img/blog/blog-sidebar-3.jpg')}}" alt="">
                                    </a>
                                    <div class="tp-postbox-thumb-video">
                                        <a class="popup-video" href="https://www.youtube.com/watch?v=go7QYaQR494"><i class="fa-regular fa-play"></i></a>
                                    </div>
                                </div>
                                <div class="tp-postbox-content">
                                    <div class="tp-postbox-meta mb-35">
                                        <span class="mr-35"><a href="#"><img src="{{asset('public/template/assets/img/blog/blog-siteber-celender.svg')}}" alt=""> April 21, 2023</a></span>
                                        <span><a href="#"><img src="{{asset('public/template/assets/img/blog/blog-siteber-user.svg')}}" alt=""> By Bulbul</a></span>
                                    </div>
                                    <h3 class="tp-postbox-title">
                                        <a href="{{route('blog/details')}}"> Implementing robust cybersecurity measures
                                            to protect data, systems</a>
                                    </h3>

                                    <div class="tp-postbox-read">
                                        <a class="tp-btn" rel="noreferrer" href="{{route('blog/details')}}" target="_blank"><span>Read More</span></a>
                                    </div>
                                </div>
                            </article>
                            <div class="tp-postbox-pagination wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1s">
                                <nav>
                                    <ul>
                                        <li>
                                            <a href="{{route('blog/sideber')}}"><i class="fa-solid fa-arrow-left-long"></i></a>
                                        </li>
                                        <li>
                                            <a href="{{route('blog/sideber')}}">1</a>
                                        </li>
                                        <li>
                                            <a class="active" href="{{route('blog/sideber')}}">2</a>
                                        </li>
                                        <li>
                                            <a href="{{route('blog/sideber')}}">3</a>
                                        </li>
                                        <li>
                                            <a href="{{route('blog/sideber')}}"><i class="fa-solid fa-arrow-right-long"></i></a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-7">
                        <div class="sidebar__wrapper">
                            <div class="sidebar__widget sidebar__widget-theme-bg mb-35 wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1s">
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
                                        <div class="rc__post mb-10 d-flex align-items-center wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1s">
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
                                        <div class="rc__post mb-10 d-flex align-items-center active wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1s">
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
                                        <div class="rc__post d-flex align-items-center wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1s">
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
                            <div class="tp-service-details-wrapper-left wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1s">
                                <div class="tp-service-details-box mb-30 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                                    <h4 class="tp-service-details-box-title">our services</h4>
                                    <ul>
                                        <li><a href="{{route('service/details')}}">Data Visualization <span><i class="flaticon-next"></i></span> </a></li>
                                        <li><a class="active" href="{{route('blog/details')}}">Product Development <span><i class="flaticon-next"></i></span></a></li>
                                        <li><a href="{{route('blog/details')}}">Security System <span><i class="flaticon-next"></i></span></a></li>
                                        <li><a href="{{route('blog/details')}}">UI/UX Designing <span><i class="flaticon-next"></i></span> </a></li>
                                        <li><a href="{{route('blog/details')}}">Digital Marketing <span><i class="flaticon-next"></i></span></a></li>
                                        <li><a href="{{route('blog/details')}}">Data Analytics <span><i class="flaticon-next"></i></span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="sidebar__widget sidebar__widget-last mb-30 wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1s">
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
        <!-- postbox area end -->
    </main>

@endsection

@push('after-js')
@endpush