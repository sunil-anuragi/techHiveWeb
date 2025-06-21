
 @extends('layout.main')

@section('title') {{ 'Blog | '.env('APP_NAME') }} @endsection

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
                            <h2 class="tp-breadcrumb-title">our blog</h2>
                            <p class="tp-breadcrumb-body"><span><a class="home" href="{{ url('/') }}">Home <span class="spacing">/</span> </a></span> our blog</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb area end -->

        <!-- Blog area start -->
        <section class="tp-blog-2-area tp-blog-3-area pt-110 pb-90">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="tp-blog-2-wrapper wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1s">
                            <div class="tp-blog-2-thumb">
                                <a href="{{route('blog/details')}}"><img src="{{asset('public/template/assets/img/blog/blog1.jpg')}}" alt=""></a>
                            </div>
                            <div class="tp-blog-2-content">
                                <h5 class="tp-blog-3-sub-title">20 Feb 2023</h5>
                                <p class="tp-blog-3-brand-title"><span>Tecza</span> By David Cameroon</p>
                                <h4 class="tp-blog-title tp-blog-2-title"><a href="{{route('blog/details')}}">Crafting Digital Identity the it
                                    Art of Agency Website</a></h4>
                                <div class="tp-blog-2-content-bottom">
                                    <div class="tp-blog-2-button">
                                        <a class="tp-blog-2-btn" href="{{route('blog/details')}}"><i class="flaticon-right"></i> read more</a>
                                    </div>
                                    <div class="tp-blog-2-icon">
                                        <span><a href="{{route('blog/details')}}">Share <i class="flaticon-share"></i></a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="tp-blog-2-wrapper wow fadeInUp" data-wow-delay=".5s" data-wow-duration="1s">
                            <div class="tp-blog-2-thumb">
                                <a href="{{route('blog/details')}}"><img src="{{asset('public/template/assets/img/blog/blog2.jpg')}}" alt=""></a>
                            </div>
                            <div class="tp-blog-2-content">
                                <h5 class="tp-blog-3-sub-title">20 Feb 2023</h5>
                                <p class="tp-blog-3-brand-title"><span>Tecza</span> By David Cameroon</p>
                                <h4 class="tp-blog-title tp-blog-2-title"><a href="{{route('blog/details')}}">System is a term used to refer to
                                    an organized collection</a></h4>
                                <div class="tp-blog-2-content-bottom">
                                    <div class="tp-blog-2-button">
                                        <a class="tp-blog-2-btn" href="{{route('blog/details')}}"><i class="flaticon-right"></i> read more</a>
                                    </div>
                                    <div class="tp-blog-2-icon">
                                        <span><a href="{{route('blog/details')}}">Share <i class="flaticon-share"></i></a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="tp-blog-2-wrapper wow fadeInUp" data-wow-delay=".7s" data-wow-duration="1s">
                            <div class="tp-blog-2-thumb">
                                <a href="{{route('blog/details')}}"><img src="{{asset('public/template/assets/img/blog/blog3.jpg')}}" alt=""></a>
                            </div>
                            <div class="tp-blog-2-content">
                                <h5 class="tp-blog-3-sub-title">20 Feb 2023</h5>
                                <p class="tp-blog-3-brand-title"><span>Tecza</span> By David Cameroon</p>
                                <h4 class="tp-blog-title tp-blog-2-title"><a href="{{route('blog/details')}}">We’re Leading in IT Technology
                                    Market researcher</a></h4>
                                <div class="tp-blog-2-content-bottom">
                                    <div class="tp-blog-2-button">
                                        <a class="tp-blog-2-btn" href="{{route('blog/details')}}"><i class="flaticon-right"></i> read more</a>
                                    </div>
                                    <div class="tp-blog-2-icon">
                                        <span><a href="{{route('blog/details')}}">Share <i class="flaticon-share"></i></a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="tp-blog-2-wrapper wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1s">
                            <div class="tp-blog-2-thumb">
                                <a href="{{route('blog/details')}}"><img src="{{asset('public/template/assets/img/blog/blog4.jpg')}}" alt=""></a>
                            </div>
                            <div class="tp-blog-2-content">
                                <h5 class="tp-blog-3-sub-title">20 Feb 2023</h5>
                                <p class="tp-blog-3-brand-title"><span>Tecza</span> By David Cameroon</p>
                                <h4 class="tp-blog-title tp-blog-2-title"><a href="{{route('blog/details')}}">How to Manage Busines’s and the
                                    Online Reputation</a></h4>
                                <div class="tp-blog-2-content-bottom">
                                    <div class="tp-blog-2-button">
                                        <a class="tp-blog-2-btn" href="{{route('blog/details')}}"><i class="flaticon-right"></i> read more</a>
                                    </div>
                                    <div class="tp-blog-2-icon">
                                        <span><a href="{{route('blog/details')}}">Share <i class="flaticon-share"></i></a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="tp-blog-2-wrapper wow fadeInUp" data-wow-delay=".5s" data-wow-duration="1s">
                            <div class="tp-blog-2-thumb">
                                <a href="{{route('blog/details')}}"><img src="{{asset('public/template/assets/img/blog/blog5.jpg')}}" alt=""></a>
                            </div>
                            <div class="tp-blog-2-content">
                                <h5 class="tp-blog-3-sub-title">20 Feb 2023</h5>
                                <p class="tp-blog-3-brand-title"><span>Tecza</span> By David Cameroon</p>
                                <h4 class="tp-blog-title tp-blog-2-title"><a href="{{route('blog/details')}}">Top Crypto Exchange Time their
                                    Influencers in China</a></h4>
                                <div class="tp-blog-2-content-bottom">
                                    <div class="tp-blog-2-button">
                                        <a class="tp-blog-2-btn" href="{{route('blog/details')}}"><i class="flaticon-right"></i> read more</a>
                                    </div>
                                    <div class="tp-blog-2-icon">
                                        <span><a href="{{route('blog/details')}}">Share <i class="flaticon-share"></i></a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="tp-blog-2-wrapper wow fadeInUp" data-wow-delay=".7s" data-wow-duration="1s">
                            <div class="tp-blog-2-thumb">
                                <a href="{{route('blog/details')}}"><img src="{{asset('public/template/assets/img/blog/blog6.jpg')}}" alt=""></a>
                            </div>
                            <div class="tp-blog-2-content">
                                <h5 class="tp-blog-3-sub-title">20 Feb 2023</h5>
                                <p class="tp-blog-3-brand-title"><span>Tecza</span> By David Cameroon</p>
                                <h4 class="tp-blog-title tp-blog-2-title"><a href="{{route('blog/details')}}">Wise spending habits, 13 tips
                                    for maximizing your money</a></h4>
                                <div class="tp-blog-2-content-bottom">
                                    <div class="tp-blog-2-button">
                                        <a class="tp-blog-2-btn" href="{{route('blog/details')}}"><i class="flaticon-right"></i> read more</a>
                                    </div>
                                    <div class="tp-blog-2-icon">
                                        <span><a href="{{route('blog/details')}}">Share <i class="flaticon-share"></i></a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Blog area end --> 

    </main>
	@endsection

@push('after-js')
@endpush