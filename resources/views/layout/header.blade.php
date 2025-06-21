 <!-- pre loader area start -->
    <div class="loader-wrapper">
        <div class="loader"></div>
        <div class="loder-section left-section"></div>
        <div class="loder-section right-section"></div>
        <div class="loader-brand-icon"><img src="{{asset('template/assets/img/logo/preloder.png')}}" alt=""></div>
    </div>
    <!-- pre loader area end -->
    <!-- back to top start -->
    <div class="prgoress_indicator active-progress">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 270.456;"></path>
        </svg>
    </div>
    <!-- back to top end -->

    <!-- cursor to top start -->
	<div class="cursor"></div>
    <div class="cursor2"></div>
    <!-- cursor to top end -->

    <!-- Start Search Popup Section -->
    <div class="search-popup">
        <button class="close-search style-two"><span class="flaticon-multiply"><i class="far fa-times-circle"></i></span></button>
        <button class="close-search"><i class="fa-light fa-arrow-up"></i></button>
        <form method="post" action="#">
            <div class="form-group">
                <input type="search" name="search-field" value="" placeholder="Search Here" required="">
                <button type="submit"><i class="fal fa-search"></i></button>
            </div>
        </form>
    </div>
    <!-- Start Search Popup Section -->

    <!-- tp-offcanvus-area-start -->
    <div class="tpoffcanvas-area">
        <div class="tpoffcanvas">
            <div class="tpoffcanvas__close-btn">
                <button class="close-btn"><i class="fal fa-times"></i></button>
            </div>
            <div class="tpoffcanvas__logo">
                <a href="index.html">
                    <img src="{{asset('template/assets/img/logo/logo.png')}}" alt="">
                </a>
            </div>
            <div class="tpoffcanvas__title">
                <p>Tecza is the partner of choice for many of the world's leading enterprises.
                     We help businesses development.</p>
            </div>
            <div class="tp-main-menu-mobile d-xl-none"></div>
            <div class="tpoffcanvas__contact-info">
                <div class="tpoffcanvas__contact-title">
                    <h5>Contact us</h5>
                </div>
                <ul>
                    <li>
                        <i class="fa-solid fa-location-dot"></i>
                        <a href="https://www.google.com/maps/@23.8223586,90.3661283,15z" target="_blank">Manchester 21, Zurich, CH</a>
                    </li>
                    <li>
                        <i class="fas fa-envelope"></i>
                        <a href="mailto:teczainfo@mail.com"><span class="__cf_email__">teczainfo@mail.com</span></a>
                    </li>
                    <li>
                        <i class="fa-solid fa-phone-flip"></i>
                        <a href="tel:+48555223224">(+00) 678 345 98568</a>
                    </li>
                </ul>
            </div>
            <div class="tpoffcanvas__input">
                <div class="tpoffcanvas__input-title">
                    <h4>Get UPdate</h4>
                </div>
                <form action="#">
                    <div class="p-relative">
                        <input type="text" placeholder="Enter mail">
                        <button>
                            <i class="fas fa-paper-plane"></i>
                        </button>
                    </div>
                </form>
            </div>
            <div class="tpoffcanvas__social">
                <div class="social-icon">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="body-overlay"></div>
    <!-- tp-offcanvus-area-end -->

    <!-- header area start -->
    <header class="tp-header-height">
        <div class="tp-header-top-area tp-header-2-top-area d-none d-xl-block">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-8">
                        <div class="tp-header-2-top-address">
                            <span><img src="{{asset('template/assets/img/header/location.svg')}}" alt=""><a href="https://www.google.com/maps/@41.6758525,-86.2531698,18.17z"> The queens walk, TSV 3456</a></span>
                            <span><img src="{{asset('template/assets/img/header/message.svg')}}" alt=""> <a href="mailto:teczainfo@mail.com">teczaofficial@gmail.com</a></span>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="tp-header-top-right">
                            <span>Social Connect</span>
                            <div class="tp-header-top-social">
                                <a href="#"><i class="fa-brands fa-facebook"></i></a>
                                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                                <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                <a href="#"><i class="fa-brands fa-pinterest"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="header-sticky" class="tp-header-area tp-header-mobile-height p-relative">
            <div class="container">
                <div class="tp-header-2-wrapper p-relative">
                    <div class="row align-items-center">
                        <div class="col-xl-3 col-lg-4 col-md-4 col">
                           <div class="tp-header-logo">
                                <a href="{{ url('/') }}"><img src="{{asset('template/assets/img/logo/logo.png')}}" alt=""></a>
                           </div>
                        </div>
                        <div class="col-xl-5 d-none d-xl-block">
                            <div class="tp-header-main-menu tp-header-2-main-menu">
                                <nav class="tp-main-menu-content">
                                    <ul>
                                        <li class="has-dropdown p-static"><a href="{{ url('/') }}">Home</a></li>
                                        <li class="has-dropdown"><a href="#">Pages</a>
                                            <ul class="submenu tp-submenu">
                                                <li><a href="{{ route('aboutus') }}">About Us</a></li>
                                                <li><a href="{{ route('team') }}">Team</a></li>
                                                <li><a href="{{route('teamdetail')}}">Team Details</a></li>
                                                <li><a href="{{route('testimonials')}}">Testimonials</a></li>
                                                <li><a href="{{route('pricing')}}">Pricing</a></li>
                                                <li><a href="{{route('portfolio')}}">Portfolio</a></li>
                                                <li><a href="{{route('portfoliodetails')}}">Portfolio Details</a></li>
                                                <li><a href="{{route('faq')}}">Faq</a></li>
                                            </ul>
                                        </li>
                                        <li class="has-dropdown"><a href="#">Services</a>
                                            <ul class="submenu tp-submenu">
                                                <li><a href="{{route('service')}}">Our Service</a></li>
                                                <li><a href="{{route('service/details')}}">Service Details</a></li>
                                            </ul>
                                        </li>
												<li class="has-dropdown"><a href="{{route('blog')}}">Blog</a>
                                            <ul class="submenu tp-submenu">
                                                <li><a href="{{route('blog')}}">Blog</a></li>
                                                <li><a href="{{route('blog/sideber')}}">Blog Sidebar</a></li>
                                                <li><a href="{{route('blog/details')}}">Blog Details</a></li>
                                            </ul>
                                        </li>
                                        <li class="has-dropdown"><a href="{{route('contact')}}">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-8 col-md-8 col">
                            <div class="tp-header-right">
    
                                <!-- header search button -->
                                <div class="tp-header-search search-box-outer d-none d-md-block">
                                    <button><i class="flaticon-search"></i></button>
                                </div>
    
                                <!-- header Shop button -->
                                <div class="tp-header-shop d-none d-md-block p-relative">
                                    <button><i class="flaticon-shopping-bag"></i></button>
                                    <div class="minicart">
                                        <div class="cart-content-wrap d-flex align-items-center justify-content-between">
                                            <div class="cart-img-info d-flex align-items-center">
                                                <div class="cart-thumb">
                                                    <a href="{{asset('template/shop-details.html')}}"> <img src="{{asset('template/assets/img/shop/shop-1.jpg')}}" alt=""></a>
                                                </div>
                                                <div class="cart-content">
                                                    <h5 class="cart-title"><a href="{{asset('template/shop-details.html')}}">Mug with pencil</a></h5>
                                                    <span> $ 22.9 <del>$39.9</del></span>
                                                </div>
                                            </div>
                                            <div class="cart-del-icon">
                                                <span><i class="fa-light fa-trash-can"></i></span>
                                            </div>
                                        </div>
                                        <div class="cart-content-wrap d-flex justify-content-between align-items-center">
                                            <div class="cart-img-info  d-flex align-items-center">
                                                <div class="cart-thumb">
                                                    <a href="{{asset('template/shop-details.html')}}"> <img src="{{asset('template/assets/img/shop/shop-2.jpg')}}" alt=""></a>
                                                </div>
                                                <div class="cart-content">
                                                    <h5 class="cart-title"><a href="{{asset('template/shop-details.html')}}">Student bag</a></h5>
                                                    <span> $ 22.9 <del>$39.9 </del></span>
                                                </div>
                                            </div>
                                            <div class="cart-del-icon">
                                                <span><i class="fa-light fa-trash-can"></i></span>
                                            </div>
                                        </div>
                                        <div class="cart-total-price d-flex align-items-center justify-content-between">
                                            <span>Total:</span>
                                            <span>$100.0</span>
                                        </div>
                                        <div class="minicart-btn">
                                            <a class="cart-btn mb-10" href="{{asset('template/cart.html')}}"><span>Shopping Cart</span></a>
                                            <a class="cart-btn cart-btn-black" href="{{asset('template/checkout.html')}}"><span>Checkout</span></a>
                                        </div>
                                    </div>
                                </div>
    
                                <!-- header button -->
                                <div class="tp-header-button d-none d-lg-block">
                                    <a class="tp-header-btn" rel="noreferrer" href="{{asset('template/contact.html')}}" target="_blank"><span>Get a Quote</span></a>
                                </div>
    
                                <!-- header mobile button -->
                                <div class="tp-header-mobile-button">
                                    <button class="tp-header-mobile-btn tp-menu-bar d-xl-none"><i class="fa-solid fa-bars"></i></button>
                                </div>
    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header area end -->