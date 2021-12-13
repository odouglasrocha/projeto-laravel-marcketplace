@extends('frontend.main_master')
@section('content')
@section('title')
Home Ecommerce Online Marketplace
@endsection

<main class="main">
            <section class="intro-section mt-4">
                <div class="swiper-container swiper-theme animation-slider" data-swiper-options="{
                    'slidesPerView': 1,
                    'autoplay': {
                        'delay': 8000,
                        'disableOnInteraction': false
                    }
                      }">
                    <div class="swiper-wrapper row gutter-no cols-1">
                    @foreach($sliders as $slider)
                        <div class="swiper-slide banner banner-fixed content-center intro-slide intro-slide1"
                            style="background-image: url({{ asset($slider->slider_img) }});background-color: #EDEEF0;">
                            <div class="container">
                                <div class="banner-content d-inline-block y-50">
                                    <div class="slide-animate" data-animation-options="{
                                        'name': 'zoomIn', 'duration': '1s'
                                    }">
                                        <h5 class="banner-subtitle text-uppercase font-weight-bold">{{ $slider->title }}
                                        </h5>
                                        <h3 class="banner-title text-capitalize ls-25">
                                            <span class="text-primary">{{ $slider->description }}</span><br>
                                            {{ $slider->description2 }}
                                        </h3>
                                        <a href="demo9-shop.html"
                                            class="btn btn-dark btn-outline btn-rounded btn-icon-right">
                                            Shop Now<i class="w-icon-long-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                                @foreach($slider2s as $slider2)
                                <figure class="slide-image skrollable slide-animate floating-item"
                                    data-options="{'relativeInput':true,'clipRelativeInput':true,'invertX':true,'invertY':true,'scalarY':0}"
                                    data-child-depth="0.4">
                                    
                                    <img src="{{ asset($slider2->slider_img) }}" alt="Banner"
                                        data-bottom-top="transform: translatex(-10vh);"
                                        data-top-bottom="transform: translateX(10vh);" width="472" height="510">
                                        
                                </figure>
                                @endforeach <!--endforeach Slider2-->
                            </div>
                        </div>
                        @endforeach <!--endforeach Slider-->
                        <!-- End of Intro Slide 1 -->

                        @foreach($slider_intro1s as $slider_intro1)
                        <div class="swiper-slide banner banner-fixed intro-slide intro-slide2"
                            style="background-image: url({{ asset($slider_intro1->slider_img) }}); background-color: #EDEEF0;">
                            <div class="container">
                                <div class="banner-content d-inline-block y-50">
                                    <div class="slide-animate" data-animation-options="{
                                        'name': 'fadeInDownShorter', 'duration': '1s'
                                    }">
                                        <h5 class="banner-subtitle text-primary text-uppercase font-weight-bold mb-2">
                                        {{ $slider_intro1->title }}</h5>
                                        <h3 class="banner-title text-capitalize ls-25">{{ $slider_intro1->description }}</h3>
                                        <hr class="banner-divider bg-dark">
                                        <p class="text-dark">{{ $slider_intro1->description2 }} <strong>{{ $slider_intro1->description3 }}</strong>
                                        </p>
                                        <a href="demo9-shop.html"
                                            class="btn btn-dark btn-outline btn-rounded btn-icon-right">
                                            Shop Now<i class="w-icon-long-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                                @endforeach
                                @foreach($slider_intro_image1s as $slider_introimage1)
                                <figure class="slide-image skrollable slide-animate floating-item"
                                    data-options="{'relativeInput':true,'clipRelativeInput':true,'invertX':true,'invertY':true}"
                                    data-child-depth="0.2">
                                    <img src="{{ asset($slider_introimage1->slider_img) }}" alt="Banner"
                                        data-bottom-top="transform: translatex(-10vh);"
                                        data-top-bottom="transform: translateX(10vh);" width="578" height="364">
                                </figure>
                                @endforeach
                            </div>
                        </div>
                        <!-- End of Intro Slide 2 -->

                        @foreach($slider_intro2s as $slider_intro2)
                        <div class="swiper-slide banner banner-fixed intro-slide intro-slide3 content-center"
                            style="background-image: url({{ asset($slider_intro2->slider_img) }}); background-color: #D4D6D5;">
                            <div class="container">
                                <div class="banner-content y-50">
                                    <div class="content-left mr-auto slide-animate mb-4 mb-lg-0" data-animation-options="{
                                        'name': 'fadeInUpShorter', 'duration': '1s'
                                    }">
                                        <h5 class="banner-subtitle text-white br-xs">{{ $slider_intro2->title }}
                                        </h5>
                                        <h3 class="banner-title text-uppercase font-weight-normal mb-0 ls-25">
                                        {{ $slider_intro2->description }}<strong class="ml-2">{{ $slider_intro2->description2 }}</strong>
                                        </h3>
                                        <p class="text-dark font-weight-normal text-uppercase mb-0 ls-25">
                                        {{ $slider_intro2->description3 }} <strong class="text-uppercase text-secondary font-weight-bolder">
                                            {{ $slider_intro2->description4 }}</strong>
                                        </p>
                                    </div>
                                    <div class="content-right slide-animate" data-animation-options="{
                                        'name': 'fadeInUpShorter', 'duration': '1s'
                                    }">
                                        <h4 class="text-white text-uppercase ls-25">
                                        {{ $slider_intro2->description5 }}
                                        </h4>
                                        <a href="demo9-shop.html" class="btn btn-dark btn-rounded btn-icon-right">
                                            Shop Now<i class="w-icon-long-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                               
                                @foreach($slider_intro_image2s as $slider_introimage2)
                                <figure class="slide-image skrollable slide-animate">
                                    <img src="{{ asset($slider_introimage2->slider_img) }}" alt="Banner"
                                        data-bottom-top="transform: translatex(-10vh);"
                                        data-top-bottom="transform: translateX(10vh);" width="488" height="510">
                                </figure>
                                @endforeach
                            </div>                          
                        </div>
                        @endforeach
                        <!-- End of Intro Slide 3 -->

                    </div>
                    <div class="custom-dots swiper-img-dots appear-animate"
                    >
                    @foreach($slider_dots as $sliderdot)
                        <a href="#" class="active">
                            <img src="{{ asset($sliderdot->slider_img) }}" alt="Dot" width="70" height="70" />
                        </a>
                    @endforeach <!--endforeach Slider dot-->
                    @foreach($slider_intro_image1_dots as $slider_introimage1dot)
                        <a href="#">
                            <img src="{{ asset($slider_introimage1dot->slider_img) }}" alt="Dot" width="70" height="70" />
                        </a>
                    @endforeach <!--endforeach Slider dot-->
                    @foreach($slider_intro_image2_dots as $slider_introimage2dot)
                        <a href="#">
                            <img src="{{ asset($slider_introimage2dot->slider_img) }}" alt="Dot" width="70" height="70" />
                        </a>
                        @endforeach <!--endforeach Slider dot-->
                    
                    </div>
                </div>
            </section>
            <!-- End of Intro-section -->

            
            <div class="container">
                <div class="swiper-container swiper-theme icon-box-wrapper appear-animate br-sm mb-10 appear-animate"
                    data-swiper-options="{
                    'loop': true,
                    'slidesPerView': 1,
                    'autoplay': {
                        'delay': 4000,
                        'disableOnInteraction': false
                    },
                    'breakpoints': {
                        '576': {
                            'slidesPerView': 2
                        },
                        '768': {
                            'slidesPerView': 3
                        },
                        '992': {
                            'slidesPerView': 3
                        },
                        '1200': {
                            'slidesPerView': 4
                        }
                    }
                }">
                    <div class="swiper-wrapper row cols-md-4 cols-sm-3 cols-1">
                        <div class="swiper-slide icon-box icon-box-side text-dark">
                            <span class="icon-box-icon icon-shipping">
                                <i class="w-icon-truck"></i>
                            </span>
                            <div class="icon-box-content">
                                <h4 class="icon-box-title">Free Shipping & Returns</h4>
                                <p class="text-default">For all orders over $99</p>
                            </div>
                        </div>
                        <div class="swiper-slide icon-box icon-box-side text-dark">
                            <span class="icon-box-icon icon-payment">
                                <i class="w-icon-bag"></i>
                            </span>
                            <div class="icon-box-content">
                                <h4 class="icon-box-title">Secure Payment</h4>
                                <p class="text-default">We ensure secure payment</p>
                            </div>
                        </div>
                        <div class="swiper-slide icon-box icon-box-side text-dark icon-box-money">
                            <span class="icon-box-icon icon-money">
                                <i class="w-icon-money"></i>
                            </span>
                            <div class="icon-box-content">
                                <h4 class="icon-box-title">Money Back Guarantee</h4>
                                <p class="text-default">Any back within 30 days</p>
                            </div>
                        </div>
                        <div class="swiper-slide icon-box icon-box-side text-dark icon-box-chat">
                            <span class="icon-box-icon icon-chat">
                                <i class="w-icon-chat"></i>
                            </span>
                            <div class="icon-box-content">
                                <h4 class="icon-box-title">Customer Support</h4>
                                <p class="text-default">Call or email us 24/7</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of Iocn Box Wrapper -->

                <div class="row grid grid-float pt-2 banner-grid mb-9 appear-animate">
                    <div class="grid-item col-lg-6 height-x2">
                        <div class="banner banner-fixed banner-lg br-sm">
                            <figure>
                                <img src="{{ asset('frontend/assets/images/demos/demo9/banner/1-1.jpg') }}" alt="Banner" width="670"
                                    height="450" style="background-color: #E3E7EA;" />
                            </figure>
                            <div class="banner-content y-50">
                                <h5 class="banner-subtitle text-capitalize font-weight-normal mb-0 ls-25">
                                    Flash Sale <strong class="text-secondary text-uppercase">50% Off</strong>
                                </h5>
                                <h3 class="banner-title text-capitalize">Kitchen Collection</h3>
                                <p>Only until the end of this Week</p>
                                <a href="demo9-shop.html" class="btn btn-dark btn-outline btn-rounded btn-icon-right">
                                    Shop Now<i class="w-icon-long-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="grid-item col-lg-6 height-x1">
                        <div class="banner banner-fixed banner-md br-sm">
                            <figure>
                                <img src="{{ asset('frontend/assets/images/demos/demo9/banner/1-2.jpg') }}" alt="Banner" width="670"
                                    height="450" style="background-color: #2D2E32;" />
                            </figure>
                            <div class="banner-content">
                                <h3 class="banner-title text-white ls-25">
                                    Accessories<br><span class="font-weight-normal ls-normal">Collection</span>
                                </h3>
                                <a href="demo9-shop.html" class="btn btn-white btn-link btn-underline btn-icon-right">
                                    Shop Now<i class="w-icon-long-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="grid-item col-sm-6 col-lg-3 height-x1">
                        <div class="banner banner-fixed banner-sm br-sm">
                            <figure>
                                <img src="{{ asset('frontend/assets/images/demos/demo9/banner/1-3.jpg') }}" alt="Banner" width="330"
                                    height="215" style="background-color: #181818;" />
                            </figure>
                            <div class="banner-content x-50 y-50 w-100 text-center">
                                <h3 class="banner-title font-secondary font-weight-normal mb-0 ls-25">Sale</h3>
                                <div class="banner-price-info font-weight-normal text-white mb-3">
                                    Up to <strong class="text-uppercase">20% Off</strong>
                                </div>
                                <a href="demo9-shop.html" class="btn btn-white btn-link btn-underline">Shop
                                    Collection</a>
                            </div>
                        </div>
                    </div>
                    <div class="grid-item col-sm-6 col-lg-3 height-x1">
                        <div class="banner banner-fixed banner-sm br-sm">
                            <figure>
                                <img src="{{ asset('frontend/assets/images/demos/demo9/banner/1-4.jpg') }}" alt="Banner" width="330"
                                    height="215" style="background-color: #A3A8A6;" />
                            </figure>
                            <div class="banner-content">
                                <h5 class="banner-subtitle text-uppercase font-weight-bold">20% Off</h5>
                                <h3 class="banner-title text-capitalize ls-25">Kids Store</h3>
                                <a href="demdo9-shop.html" class="btn btn-dark btn-link btn-underline btn-icon-right">
                                    Shop Now<i class="w-icon-long-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of Banner Grid -->

                <h2 class="title title-underline mb-4 appear-animate">Top Weekly Vendors</h2>
                <div class="swiper-container swiper-theme mb-10 pb-2 appear-animate" data-swiper-options="{
                    'spaceBetween': 20,
                    'slidesPerView': 1,
                    'breakpoints': {
                        '576': {
                            'slidesPerView': 2
                        },
                        '768': {
                            'slidesPerView': 3
                        },
                        '1200': {
                            'slidesPerView': 4
                        }
                    }
                }">
                    <div class="swiper-wrapper row cols-lg-4 cols-md-3 cols-sm-2 cols-1">
                        <div class="swiper-slide vendor-widget mb-0">
                            <div class="vendor-widget-2">
                                <div class="vendor-details">
                                    <figure class="vendor-logo">
                                        <a href="vendor-dokan-store.html">
                                            <img src="{{ asset('frontend/assets/images/demos/demo9/vendor-logo/1.jpg') }}" alt="Vendor Logo"
                                                width="70" height="70" />
                                        </a>
                                    </figure>
                                    <div class="vendor-personal">
                                        <h4 class="vendor-name">
                                            <a href="vendor-dokan-store.html">Vendor 1</a>
                                        </h4>
                                        <span class="vendor-product-count">(27 Products)</span>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 100%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="vendor-products row cols-3 gutter-sm">
                                    <div class="vendor-product">
                                        <figure class="product-media">
                                            <a href="product-default.html">
                                                <img src="{{ asset('frontend/assets/images/demos/demo9/product/4-1.jpg') }}"
                                                    alt="Vendor Product" width="100" height="113" />
                                            </a>
                                        </figure>
                                    </div>
                                    <div class="vendor-product">
                                        <figure class="product-media">
                                            <a href="product-default.html">
                                                <img src="{{ asset('frontend/assets/images/demos/demo9/product/4-2.jpg') }}"
                                                    alt="Vendor Product" width="100" height="113" />
                                            </a>
                                        </figure>
                                    </div>
                                    <div class="vendor-product">
                                        <figure class="product-media">
                                            <a href="product-default.html">
                                                <img src="{{ asset('frontend/assets/images/demos/demo9/product/4-3.jpg') }}"
                                                    alt="Vendor Product" width="100" height="113" />
                                            </a>
                                        </figure>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End of Vendor widget 2 -->
                        <div class="swiper-slide vendor-widget mb-0">
                            <div class="vendor-widget-2">
                                <div class="vendor-details">
                                    <figure class="vendor-logo">
                                        <a href="vendor-dokan-store.html">
                                            <img src="{{ asset('frontend/assets/images/demos/demo9/vendor-logo/2.jpg') }}" alt="Vendor Logo"
                                                width="70" height="70" />
                                        </a>
                                    </figure>
                                    <div class="vendor-personal">
                                        <h4 class="vendor-name">
                                            <a href="vendor-dokan-store.html">Vendor 2</a>
                                        </h4>
                                        <span class="vendor-product-count">(20 Products)</span>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 100%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="vendor-products row cols-3 gutter-sm">
                                    <div class="vendor-product">
                                        <figure class="product-media">
                                            <a href="product-default.html">
                                                <img src="{{ asset('frontend/assets/images/demos/demo9/product/4-4.jpg') }}"
                                                    alt="Vendor Product" width="100" height="113" />
                                            </a>
                                        </figure>
                                    </div>
                                    <div class="vendor-product">
                                        <figure class="product-media">
                                            <a href="product-default.html">
                                                <img src="{{ asset('frontend/assets/images/demos/demo9/product/4-5.jpg') }}"
                                                    alt="Vendor Product" width="100" height="113" />
                                            </a>
                                        </figure>
                                    </div>
                                    <div class="vendor-product">
                                        <figure class="product-media">
                                            <a href="product-default.html">
                                                <img src="{{ asset('frontend/assets/images/demos/demo9/product/4-6.jpg') }}"
                                                    alt="Vendor Product" width="100" height="113" />
                                            </a>
                                        </figure>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End of Vendor widget 2 -->
                        <div class="swiper-slide vendor-widget mb-0">
                            <div class="vendor-widget-2">
                                <div class="vendor-details">
                                    <figure class="vendor-logo">
                                        <a href="vendor-dokan-store.html">
                                            <img src="{{ asset('frontend/assets/images/demos/demo9/vendor-logo/3.jpg') }}" alt="Vendor Logo"
                                                width="70" height="70" />
                                        </a>
                                    </figure>
                                    <div class="vendor-personal">
                                        <h4 class="vendor-name">
                                            <a href="vendor-dokan-store.html">Vendor 3</a>
                                        </h4>
                                        <span class="vendor-product-count">(30 Products)</span>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 100%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="vendor-products row cols-3 gutter-sm">
                                    <div class="vendor-product">
                                        <figure class="product-media">
                                            <a href="product-default.html">
                                                <img src="{{ asset('frontend/assets/images/demos/demo9/product/4-7.jpg') }}"
                                                    alt="Vendor Product" width="100" height="113" />
                                            </a>
                                        </figure>
                                    </div>
                                    <div class="vendor-product">
                                        <figure class="product-media">
                                            <a href="product-default.html">
                                                <img src="{{ asset('frontend/assets/images/demos/demo9/product/4-8.jpg') }}"
                                                    alt="Vendor Product" width="100" height="113" />
                                            </a>
                                        </figure>
                                    </div>
                                    <div class="vendor-product">
                                        <figure class="product-media">
                                            <a href="product-default.html">
                                                <img src="{{ asset('frontend/assets/images/demos/demo9/product/4-9.jpg') }}"
                                                    alt="Vendor Product" width="100" height="113" />
                                            </a>
                                        </figure>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End of Vendor widget 2 -->
                        <div class="swiper-slide vendor-widget mb-0">
                            <div class="vendor-widget-2">
                                <div class="vendor-details">
                                    <figure class="vendor-logo">
                                        <a href="vendor-dokan-store.html">
                                            <img src="{{ asset('frontend/assets/images/demos/demo9/vendor-logo/4.jpg') }}" alt="Vendor Logo"
                                                width="70" height="70" />
                                        </a>
                                    </figure>
                                    <div class="vendor-personal">
                                        <h4 class="vendor-name">
                                            <a href="vendor-dokan-store.html">Vendor 4</a>
                                        </h4>
                                        <span class="vendor-product-count">(17 Products)</span>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 100%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="vendor-products row cols-3 gutter-sm">
                                    <div class="vendor-product">
                                        <figure class="product-media">
                                            <a href="product-default.html">
                                                <img src="{{ asset('frontend/assets/images/demos/demo9/product/4-10.jpg') }}"
                                                    alt="Vendor Product" width="100" height="113" />
                                            </a>
                                        </figure>
                                    </div>
                                    <div class="vendor-product">
                                        <figure class="product-media">
                                            <a href="product-default.html">
                                                <img src="{{ asset('frontend/assets/images/demos/demo9/product/4-11.jpg') }}"
                                                    alt="Vendor Product" width="100" height="113" />
                                            </a>
                                        </figure>
                                    </div>
                                    <div class="vendor-product">
                                        <figure class="product-media">
                                            <a href="product-default.html">
                                                <img src="{{ asset('frontend/assets/images/demos/demo9/product/4-12.jpg') }}"
                                                    alt="Vendor Product" width="100" height="113" />
                                            </a>
                                        </figure>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End of Vendor widget 2 -->
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
                <!-- End of Swiper Container -->

                <div class="row appear-animate">
                    <div class="col-lg-4 col-md-5 mb-6">
                        <div class="product-lg br-sm">
                            <h2 class="title title-underline mb-4">Deals Of The Week</h2>
                            <div class="swiper">
                                <div class="swiper-container swiper-theme nav-top swiper-nav-md " data-swiper-options="{
                                    'spaceBetween': 20
                                }">
                                    <div class="swiper-wrapper row cols-1">
                                        <div class="swiper-slide product text-center">
                                            <figure class="product-media">
                                                <a href="product-default.html">
                                                    <img src="{{ asset('frontend/assets/images/demos/demo9/product/5-1-1.jpg') }}" alt="Product"
                                                        width="800" height="900" />
                                                    <img src="{{ asset('frontend/assets/images/demos/demo9/product/5-1-2.jpg') }}" alt="Product"
                                                        width="800" height="900" />
                                                </a>
                                                <div class="product-action-vertical">
                                                    <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                        title="Add to cart"></a>
                                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                        title="Wishlist"></a>
                                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                        title="Compare"></a>
                                                    <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                        title="Quick View"></a>
                                                </div>
                                            </figure>
                                            <div class="product-details">
                                                <h3 class="product-name">
                                                    <a href="product-default.html">Mobile Electronic Recorder</a>
                                                </h3>
                                                <div class="product-price">
                                                    <ins class="new-price">$95.72</ins><del
                                                        class="old-price">$97.15</del>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End of Product -->
                                        <div class="swiper-slide product text-center">
                                            <figure class="product-media">
                                                <a href="product-default.html">
                                                    <img src="{{ asset('frontend/assets/images/demos/demo9/product/5-2-1.jpg') }}" alt="Product"
                                                        width="800" height="900" />
                                                    <img src="{{ asset('frontend/assets/images/demos/demo9/product/5-2-2.jpg') }}" alt="Product"
                                                        width="800" height="900" />
                                                </a>
                                                <div class="product-action-vertical">
                                                    <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                        title="Add to cart"></a>
                                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                        title="Wishlist"></a>
                                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                        title="Compare"></a>
                                                    <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                        title="Quick View"></a>
                                                </div>
                                            </figure>
                                            <div class="product-details">
                                                <h3 class="product-name">
                                                    <a href="product-default.html">USB Charger</a>
                                                </h3>
                                                <div class="product-price">
                                                    <ins class="new-price">$129.62</ins><del
                                                        class="old-price">$133.36</del>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End of Product -->
                                    </div>
                                    <button class="swiper-button-next"></button>
                                    <button class="swiper-button-prev"></button>
                                </div>
                            </div>

                            <!-- End of Swiper Container -->
                            <div class="swiper-slide product-countdown-container">
                                <div class="countdown-lable mr-3 mb-2">
                                    <h4 class="font-weight-bold ls-10">Hurry up!</h4>
                                    <label class="text-dark">Offer end in:</label>
                                </div>
                                <div class="swiper-slide product-countdown countdown-compact mb-2"
                                    data-until="2021, 9, 9" data-format="DHMS" data-compact="false"
                                    data-labels-short="Days, Hours, Mins, Secs">
                                    00:00:00:00
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End of Col -->
                    <div class="col-lg-8 col-md-7 mb-6">
                        <div class="tab tab-nav-underline tab-nav-center">
                            <ul class="nav nav-tabs justify-content-center" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" href="#tab-1">Featured</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#tab-2">On Sale</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#tab-3">Top Rated</a>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane active" id="tab-1">
                                <div class="swiper-container swiper-theme" data-swiper-options="{
                                    'spaceBetween': 20,
                                    'slidesPerView': 2,
                                    'breakpoints': {
                                        '576': {
                                            'slidesPerView': 3
                                        },
                                        '992': {
                                            'slidesPerView': 4
                                        }
                                    }
                                }">
                                    <div class="swiper-wrapper row cols-lg-4 cols-sm-3 cols-2">
                                        <div class="swiper-slide product-col">
                                            <div class="product text-center">
                                                <figure class="product-media">
                                                    <a href="product-default.html">
                                                        <img src="{{ asset('frontend/assets/images/demos/demo9/product/5-3.jpg') }}"
                                                            alt="Product" width="800" height="900" />
                                                    </a>
                                                    <div class="product-action-vertical">
                                                        <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                            title="Add to cart"></a>
                                                        <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                            title="Wishlist"></a>
                                                        <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                            title="Compare"></a>
                                                        <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                            title="Quick View"></a>
                                                    </div>
                                                </figure>
                                                <div class="product-details">
                                                    <h3 class="product-name">
                                                        <a href="product-default.html">Gold Watch</a>
                                                    </h3>
                                                    <div class="product-price">
                                                        <ins class="new-price">$41.36</ins><del
                                                            class="old-price">$48.82</del>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End of Product -->
                                            <div class="product text-center">
                                                <figure class="product-media">
                                                    <a href="product-default.html">
                                                        <img src="{{ asset('frontend/assets/images/demos/demo9/product/5-7.jpg') }}"
                                                            alt="Product" width="800" height="900" />
                                                    </a>
                                                    <div class="product-action-vertical">
                                                        <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                            title="Add to cart"></a>
                                                        <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                            title="Wishlist"></a>
                                                        <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                            title="Compare"></a>
                                                        <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                            title="Quick View"></a>
                                                    </div>
                                                </figure>
                                                <div class="product-details">
                                                    <h3 class="product-name">
                                                        <a href="product-default.html">Comfortable Backpack</a>
                                                    </h3>
                                                    <div class="product-price">
                                                        <ins class="new-price">$138.05</ins>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End of Product -->
                                        </div>
                                        <div class="swiper-slide product-col">
                                            <div class="product text-center">
                                                <figure class="product-media">
                                                    <a href="product-default.html">
                                                        <img src="{{ asset('frontend/assets/images/demos/demo9/product/5-4.jpg') }}"
                                                            alt="Product" width="800" height="900" />
                                                    </a>
                                                    <div class="product-action-vertical">
                                                        <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                            title="Add to cart"></a>
                                                        <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                            title="Wishlist"></a>
                                                        <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                            title="Compare"></a>
                                                        <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                            title="Quick View"></a>
                                                    </div>
                                                </figure>
                                                <div class="product-details">
                                                    <h3 class="product-name">
                                                        <a href="product-default.html">Brown Leather Shoes</a>
                                                    </h3>
                                                    <div class="product-price">
                                                        <ins class="new-price">$70.28</ins><del
                                                            class="old-price">$75.32</del>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End of Product -->
                                            <div class="product text-center">
                                                <figure class="product-media">
                                                    <a href="product-default.html">
                                                        <img src="{{ asset('frontend/assets/images/demos/demo9/product/5-8.jpg') }}"
                                                            alt="Product" width="800" height="900" />
                                                    </a>
                                                    <div class="product-action-vertical">
                                                        <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                            title="Add to cart"></a>
                                                        <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                            title="Wishlist"></a>
                                                        <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                            title="Compare"></a>
                                                        <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                            title="Quick View"></a>
                                                    </div>
                                                </figure>
                                                <div class="product-details">
                                                    <h3 class="product-name">
                                                        <a href="product-default.html">Comfortable Armchair</a>
                                                    </h3>
                                                    <div class="product-price">
                                                        <ins class="new-price">$290.05</ins><del
                                                            class="old-price">$302.74</del>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End of Product -->
                                        </div>
                                        <div class="swiper-slide product-col">
                                            <div class="product text-center">
                                                <figure class="product-media">
                                                    <a href="product-default.html">
                                                        <img src="{{ asset('frontend/assets/images/demos/demo9/product/5-5.jpg') }}"
                                                            alt="Product" width="800" height="900" />
                                                    </a>
                                                    <div class="product-action-vertical">
                                                        <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                            title="Add to cart"></a>
                                                        <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                            title="Wishlist"></a>
                                                        <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                            title="Compare"></a>
                                                        <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                            title="Quick View"></a>
                                                    </div>
                                                </figure>
                                                <div class="product-details">
                                                    <h3 class="product-name">
                                                        <a href="product-default.html">Men's Suede Belt</a>
                                                    </h3>
                                                    <div class="product-price">
                                                        <ins class="new-price">$37.19</ins><del
                                                            class="old-price">$40.57</del>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End of Product -->
                                            <div class="product text-center">
                                                <figure class="product-media">
                                                    <a href="product-default.html">
                                                        <img src="{{ asset('frontend/assets/images/demos/demo9/product/5-9.jpg') }}"
                                                            alt="Product" width="800" height="900" />
                                                    </a>
                                                    <div class="product-action-vertical">
                                                        <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                            title="Add to cart"></a>
                                                        <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                            title="Wishlist"></a>
                                                        <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                            title="Compare"></a>
                                                        <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                            title="Quick View"></a>
                                                    </div>
                                                </figure>
                                                <div class="product-details">
                                                    <h3 class="product-name">
                                                        <a href="product-default.html">Prtable Torch</a>
                                                    </h3>
                                                    <div class="product-price">
                                                        <ins class="new-price">$10.73</ins>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End of Product -->
                                        </div>
                                        <div class="swiper-slide product-col">
                                            <div class="product text-center">
                                                <figure class="product-media">
                                                    <a href="product-default.html">
                                                        <img src="{{ asset('frontend/assets/images/demos/demo9/product/5-6.jpg') }}"
                                                            alt="Product" width="800" height="900" />
                                                    </a>
                                                    <div class="product-action-vertical">
                                                        <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                            title="Add to cart"></a>
                                                        <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                            title="Wishlist"></a>
                                                        <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                            title="Compare"></a>
                                                        <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                            title="Quick View"></a>
                                                    </div>
                                                </figure>
                                                <div class="product-details">
                                                    <h3 class="product-name">
                                                        <a href="product-default.html">Wooden Chair</a>
                                                    </h3>
                                                    <div class="product-price">
                                                        <ins class="new-price">$40.21</ins>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End of Product -->
                                            <div class="product text-center">
                                                <figure class="product-media">
                                                    <a href="product-default.html">
                                                        <img src="{{ asset('frontend/assets/images/demos/demo9/product/5-10.jpg') }}"
                                                            alt="Product" width="800" height="900" />
                                                    </a>
                                                    <div class="product-action-vertical">
                                                        <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                            title="Add to cart"></a>
                                                        <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                            title="Wishlist"></a>
                                                        <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                            title="Compare"></a>
                                                        <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                            title="Quick View"></a>
                                                    </div>
                                                </figure>
                                                <div class="product-details">
                                                    <h3 class="product-name">
                                                        <a href="product-default.html">Top Men's Hiking Hat</a>
                                                    </h3>
                                                    <div class="product-price">
                                                        <ins class="new-price">$20.84</ins><del
                                                            class="old-price">$25.92</del>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End of Product -->
                                        </div>
                                    </div>
                                    <div class="swiper-pagination"></div>
                                </div>
                            </div>
                            <!-- End of Tab Pane -->
                            <div class="tab-pane" id="tab-2">
                                <div class="swiper-container swiper-theme" data-swiper-options="{
                                    'spaceBetween': 20,
                                    'slidesPerView': 2,
                                    'breakpoints': {
                                        '576': {
                                            'slidesPerView': 3
                                        },
                                        '992': {
                                            'slidesPerView': 4
                                        }
                                    }
                                }">
                                    <div class="swiper-wrapper row cols-xl-4 cols-lg-3 cols-md-2">
                                        <div class="swiper-slide product-col">
                                            <div class="product text-center">
                                                <figure class="product-media">
                                                    <a href="product-default.html">
                                                        <img src="{{ asset('frontend/assets/images/demos/demo9/product/5-9.jpg') }}"
                                                            alt="Product" width="800" height="900" />
                                                    </a>
                                                    <div class="product-action-vertical">
                                                        <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                            title="Add to cart"></a>
                                                        <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                            title="Wishlist"></a>
                                                        <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                            title="Compare"></a>
                                                        <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                            title="Quick View"></a>
                                                    </div>
                                                </figure>
                                                <div class="product-details">
                                                    <h3 class="product-name">
                                                        <a href="product-default.html">Prtable Torch</a>
                                                    </h3>
                                                    <div class="product-price">
                                                        <ins class="new-price">$10.73</ins>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End of Product -->
                                            <div class="product text-center">
                                                <figure class="product-media">
                                                    <a href="product-default.html">
                                                        <img src="{{ asset('frontend/assets/images/demos/demo9/product/5-7.jpg') }}"
                                                            alt="Product" width="800" height="900" />
                                                    </a>
                                                    <div class="product-action-vertical">
                                                        <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                            title="Add to cart"></a>
                                                        <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                            title="Wishlist"></a>
                                                        <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                            title="Compare"></a>
                                                        <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                            title="Quick View"></a>
                                                    </div>
                                                </figure>
                                                <div class="product-details">
                                                    <h3 class="product-name">
                                                        <a href="product-default.html">Comfortable Backpack</a>
                                                    </h3>
                                                    <div class="product-price">
                                                        <ins class="new-price">$138.05</ins>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End of Product -->
                                        </div>
                                        <div class="swiper-slide product-col">
                                            <div class="product text-center">
                                                <figure class="product-media">
                                                    <a href="product-default.html">
                                                        <img src="{{ asset('frontend/assets/images/demos/demo9/product/5-4.jpg') }}"
                                                            alt="Product" width="800" height="900" />
                                                    </a>
                                                    <div class="product-action-vertical">
                                                        <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                            title="Add to cart"></a>
                                                        <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                            title="Wishlist"></a>
                                                        <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                            title="Compare"></a>
                                                        <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                            title="Quick View"></a>
                                                    </div>
                                                </figure>
                                                <div class="product-details">
                                                    <h3 class="product-name">
                                                        <a href="product-default.html">Brown Leather Shoes</a>
                                                    </h3>
                                                    <div class="product-price">
                                                        <ins class="new-price">$70.28</ins><del
                                                            class="old-price">$75.32</del>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End of Product -->
                                            <div class="product text-center">
                                                <figure class="product-media">
                                                    <a href="product-default.html">
                                                        <img src="{{ asset('frontend/assets/images/demos/demo9/product/5-5.jpg') }}"
                                                            alt="Product" width="800" height="900" />
                                                    </a>
                                                    <div class="product-action-vertical">
                                                        <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                            title="Add to cart"></a>
                                                        <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                            title="Wishlist"></a>
                                                        <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                            title="Compare"></a>
                                                        <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                            title="Quick View"></a>
                                                    </div>
                                                </figure>
                                                <div class="product-details">
                                                    <h3 class="product-name">
                                                        <a href="product-default.html">Men's Suede Belt</a>
                                                    </h3>
                                                    <div class="product-price">
                                                        <ins class="new-price">$37.19</ins><del
                                                            class="old-price">$40.57</del>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End of Product -->
                                        </div>
                                        <div class="swiper-slide product-col">
                                            <div class="product text-center">
                                                <figure class="product-media">
                                                    <a href="product-default.html">
                                                        <img src="{{ asset('frontend/assets/images/demos/demo9/product/5-10.jpg') }}"
                                                            alt="Product" width="800" height="900" />
                                                    </a>
                                                    <div class="product-action-vertical">
                                                        <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                            title="Add to cart"></a>
                                                        <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                            title="Wishlist"></a>
                                                        <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                            title="Compare"></a>
                                                        <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                            title="Quick View"></a>
                                                    </div>
                                                </figure>
                                                <div class="product-details">
                                                    <h3 class="product-name">
                                                        <a href="product-default.html">Top Men's Hiking Hat</a>
                                                    </h3>
                                                    <div class="product-price">
                                                        <ins class="new-price">$20.84</ins><del
                                                            class="old-price">$25.92</del>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End of Product -->
                                            <div class="product text-center">
                                                <figure class="product-media">
                                                    <a href="product-default.html">
                                                        <img src="{{ asset('frontend/assets/images/demos/demo9/product/5-8.jpg') }}"
                                                            alt="Product" width="800" height="900" />
                                                    </a>
                                                    <div class="product-action-vertical">
                                                        <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                            title="Add to cart"></a>
                                                        <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                            title="Wishlist"></a>
                                                        <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                            title="Compare"></a>
                                                        <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                            title="Quick View"></a>
                                                    </div>
                                                </figure>
                                                <div class="product-details">
                                                    <h3 class="product-name">
                                                        <a href="product-default.html">Comfortable Armchair</a>
                                                    </h3>
                                                    <div class="product-price">
                                                        <ins class="new-price">$290.05</ins><del
                                                            class="old-price">$302.74</del>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End of Product -->
                                        </div>
                                        <div class="swiper-slide product-col">
                                            <div class="product text-center">
                                                <figure class="product-media">
                                                    <a href="product-default.html">
                                                        <img src="{{ asset('frontend/assets/images/demos/demo9/product/5-6.jpg') }}"
                                                            alt="Product" width="800" height="900" />
                                                    </a>
                                                    <div class="product-action-vertical">
                                                        <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                            title="Add to cart"></a>
                                                        <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                            title="Wishlist"></a>
                                                        <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                            title="Compare"></a>
                                                        <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                            title="Quick View"></a>
                                                    </div>
                                                </figure>
                                                <div class="product-details">
                                                    <h3 class="product-name">
                                                        <a href="product-default.html">Wooden Chair</a>
                                                    </h3>
                                                    <div class="product-price">
                                                        <ins class="new-price">$40.21</ins>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End of Product -->
                                            <div class="product text-center">
                                                <figure class="product-media">
                                                    <a href="product-default.html">
                                                        <img src="{{ asset('frontend/assets/images/demos/demo9/product/5-3.jpg') }}"
                                                            alt="Product" width="800" height="900" />
                                                    </a>
                                                    <div class="product-action-vertical">
                                                        <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                            title="Add to cart"></a>
                                                        <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                            title="Wishlist"></a>
                                                        <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                            title="Compare"></a>
                                                        <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                            title="Quick View"></a>
                                                    </div>
                                                </figure>
                                                <div class="product-details">
                                                    <h3 class="product-name">
                                                        <a href="product-default.html">Gold Watch</a>
                                                    </h3>
                                                    <div class="product-price">
                                                        <ins class="new-price">$41.36</ins><del
                                                            class="old-price">$48.82</del>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End of Product -->
                                        </div>
                                    </div>
                                    <div class="swiper-pagination"></div>
                                </div>
                            </div>
                            <!-- End of Tab Pane -->
                            <div class="tab-pane" id="tab-3">
                                <div class="swiper-container swiper-theme row cols-xl-4 cols-lg-3 cols-md-2"
                                    data-swiper-options="{
                                    'spaceBetween': 20,
                                    'slidesPerView': 2,
                                    'breakpoints': {
                                        '576': {
                                            'slidesPerView': 3
                                        },
                                        '992': {
                                            'slidesPerView': 4
                                        }
                                    }
                                }">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide product-col">
                                            <div class="product text-center">
                                                <figure class="product-media">
                                                    <a href="product-default.html">
                                                        <img src="{{ asset('frontend/assets/images/demos/demo9/product/5-8.jpg') }}"
                                                            alt="Product" width="800" height="900" />
                                                    </a>
                                                    <div class="product-action-vertical">
                                                        <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                            title="Add to cart"></a>
                                                        <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                            title="Wishlist"></a>
                                                        <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                            title="Compare"></a>
                                                        <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                            title="Quick View"></a>
                                                    </div>
                                                </figure>
                                                <div class="product-details">
                                                    <h3 class="product-name">
                                                        <a href="product-default.html">Comfortable Armchair</a>
                                                    </h3>
                                                    <div class="product-price">
                                                        <ins class="new-price">$290.05</ins><del
                                                            class="old-price">$302.74</del>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End of Product -->
                                            <div class="product text-center">
                                                <figure class="product-media">
                                                    <a href="product-default.html">
                                                        <img src="{{ asset('frontend/assets/images/demos/demo9/product/5-7.jpg') }}"
                                                            alt="Product" width="800" height="900" />
                                                    </a>
                                                    <div class="product-action-vertical">
                                                        <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                            title="Add to cart"></a>
                                                        <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                            title="Wishlist"></a>
                                                        <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                            title="Compare"></a>
                                                        <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                            title="Quick View"></a>
                                                    </div>
                                                </figure>
                                                <div class="product-details">
                                                    <h3 class="product-name">
                                                        <a href="product-default.html">Comfortable Backpack</a>
                                                    </h3>
                                                    <div class="product-price">
                                                        <ins class="new-price">$138.05</ins>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End of Product -->
                                        </div>
                                        <div class="swiper-slide product-col">
                                            <div class="product text-center">
                                                <figure class="product-media">
                                                    <a href="product-default.html">
                                                        <img src="{{ asset('frontend/assets/images/demos/demo9/product/5-9.jpg') }}"
                                                            alt="Product" width="800" height="900" />
                                                    </a>
                                                    <div class="product-action-vertical">
                                                        <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                            title="Add to cart"></a>
                                                        <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                            title="Wishlist"></a>
                                                        <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                            title="Compare"></a>
                                                        <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                            title="Quick View"></a>
                                                    </div>
                                                </figure>
                                                <div class="product-details">
                                                    <h3 class="product-name">
                                                        <a href="product-default.html">Prtable Torch</a>
                                                    </h3>
                                                    <div class="product-price">
                                                        <ins class="new-price">$10.73</ins>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End of Product -->
                                            <div class="product text-center">
                                                <figure class="product-media">
                                                    <a href="product-default.html">
                                                        <img src="{{ asset('frontend/assets/images/demos/demo9/product/5-3.jpg') }}"
                                                            alt="Product" width="800" height="900" />
                                                    </a>
                                                    <div class="product-action-vertical">
                                                        <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                            title="Add to cart"></a>
                                                        <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                            title="Wishlist"></a>
                                                        <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                            title="Compare"></a>
                                                        <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                            title="Quick View"></a>
                                                    </div>
                                                </figure>
                                                <div class="product-details">
                                                    <h3 class="product-name">
                                                        <a href="product-default.html">Gold Watch</a>
                                                    </h3>
                                                    <div class="product-price">
                                                        <ins class="new-price">$41.36</ins><del
                                                            class="old-price">$48.82</del>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End of Product -->
                                        </div>
                                        <div class="swiper-slide product-col">
                                            <div class="product text-center">
                                                <figure class="product-media">
                                                    <a href="product-default.html">
                                                        <img src="{{ asset('frontend/assets/images/demos/demo9/product/5-5.jpg') }}"
                                                            alt="Product" width="800" height="900" />
                                                    </a>
                                                    <div class="product-action-vertical">
                                                        <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                            title="Add to cart"></a>
                                                        <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                            title="Wishlist"></a>
                                                        <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                            title="Compare"></a>
                                                        <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                            title="Quick View"></a>
                                                    </div>
                                                </figure>
                                                <div class="product-details">
                                                    <h3 class="product-name">
                                                        <a href="product-default.html">Men's Suede Belt</a>
                                                    </h3>
                                                    <div class="product-price">
                                                        <ins class="new-price">$37.19</ins><del
                                                            class="old-price">$40.57</del>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End of Product -->
                                            <div class="product text-center">
                                                <figure class="product-media">
                                                    <a href="product-default.html">
                                                        <img src="{{ asset('frontend/assets/images/demos/demo9/product/5-6.jpg') }}"
                                                            alt="Product" width="800" height="900" />
                                                    </a>
                                                    <div class="product-action-vertical">
                                                        <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                            title="Add to cart"></a>
                                                        <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                            title="Wishlist"></a>
                                                        <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                            title="Compare"></a>
                                                        <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                            title="Quick View"></a>
                                                    </div>
                                                </figure>
                                                <div class="product-details">
                                                    <h3 class="product-name">
                                                        <a href="product-default.html">Wooden Chair</a>
                                                    </h3>
                                                    <div class="product-price">
                                                        <ins class="new-price">$40.21</ins>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End of Product -->
                                        </div>
                                        <div class="swiper-slide product-col">
                                            <div class="product text-center">
                                                <figure class="product-media">
                                                    <a href="product-default.html">
                                                        <img src="{{ asset('frontend/assets/images/demos/demo9/product/5-10.jpg') }}"
                                                            alt="Product" width="800" height="900" />
                                                    </a>
                                                    <div class="product-action-vertical">
                                                        <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                            title="Add to cart"></a>
                                                        <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                            title="Wishlist"></a>
                                                        <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                            title="Compare"></a>
                                                        <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                            title="Quick View"></a>
                                                    </div>
                                                </figure>
                                                <div class="product-details">
                                                    <h3 class="product-name">
                                                        <a href="product-default.html">Top Men's Hiking Hat</a>
                                                    </h3>
                                                    <div class="product-price">
                                                        <ins class="new-price">$20.84</ins><del
                                                            class="old-price">$25.92</del>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End of Product -->
                                            <div class="product text-center">
                                                <figure class="product-media">
                                                    <a href="product-default.html">
                                                        <img src="{{ asset('frontend/assets/images/demos/demo9/product/5-4.jpg') }}"
                                                            alt="Product" width="800" height="900" />
                                                    </a>
                                                    <div class="product-action-vertical">
                                                        <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                            title="Add to cart"></a>
                                                        <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                            title="Wishlist"></a>
                                                        <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                            title="Compare"></a>
                                                        <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                            title="Quick View"></a>
                                                    </div>
                                                </figure>
                                                <div class="product-details">
                                                    <h3 class="product-name">
                                                        <a href="product-default.html">Brown Leather Shoes</a>
                                                    </h3>
                                                    <div class="product-price">
                                                        <ins class="new-price">$70.28</ins><del
                                                            class="old-price">$75.32</del>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End of Product -->
                                        </div>
                                    </div>
                                    <div class="swiper-pagination"></div>
                                </div>
                            </div>
                            <!-- End of Tab Pane -->
                        </div>
                    </div>
                    <!-- End of Col -->
                </div>
                <!-- End of Row -->

                <div class="sale-banner banner br-sm appear-animate">
                    <div class="banner-content">
                        <h4
                            class="content-left banner-subtitle text-uppercase mb-8 mb-md-0 mr-0 mr-md-4 text-secondary ls-25">
                            <span class="text-dark font-weight-bold lh-1 ls-normal">Up
                                <br>To</span>20% Sale!</h4>
                        <div class="content-right">
                            <h3 class="banner-title text-uppercase font-weight-normal mb-4 mb-md-0 ls-25 text-white">
                                <span>Pay Only For
                                    <strong class="mr-10 pr-lg-10">Your Lovling Electronics</strong>
                                    Pay Only For
                                    <strong class="mr-10 pr-lg-10">Your Lovling Electronics</strong>
                                    Pay Only For
                                    <strong class="mr-10 pr-lg-10">Your Lovling Electronics</strong>
                                </span>
                            </h3>
                            <a href="demo9-shop.html" class="btn btn-white btn-rounded">Shop Now
                                <i class="w-icon-long-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- End of Sale Banner -->

                <div class="filter-with-title title-underline mb-4 pb-2 appear-animate">
                    <h2 class="title">Home &amp; Furnitures</h2>
                    <ul class="nav-filters" data-target="#products-1">
                        <li><a href="#" class="nav-filter active" data-filter="*">All</a></li>
                        <li><a href="#" class="nav-filter" data-filter=".1-1">Garden Supplies</a></li>
                        <li><a href="#" class="nav-filter" data-filter=".1-2">Kitchen</a></li>
                        <li><a href="#" class="nav-filter" data-filter=".1-3">Bathroom</a></li>
                        <li><a href="#" class="nav-filter" data-filter=".1-4">Decor</a></li>
                        <li><a href="#" class="nav-filter" data-filter=".1-5">Furniture</a></li>
                        <li><a href="#" class="nav-filter" data-filter=".1-6">Accessories</a></li>
                    </ul>
                </div>
                <!-- End of Filter With Title -->
                <div class="row grid cols-xl-5 cols-md-4 cols-sm-3 cols-2 appear-animate" id="products-1">
                    <div class="grid-item 1-2 1-4 1-6">
                        <div class="product text-center">
                            <figure class="product-media">
                                <a href="product-default.html">
                                    <img src="{{ asset('frontend/assets/images/demos/demo9/product/6-1.jpg') }}" alt="Product" width="600"
                                        height="675" />
                                </a>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-cart w-icon-cart" title="Add to cart"></a>
                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart" title="Wishlist"></a>
                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare" title="Compare"></a>
                                    <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                        title="Quick View"></a>
                                </div>
                            </figure>
                            <div class="product-details">
                                <h3 class="product-name">
                                    <a href="product-default.html">Lattice Soft Pillow</a>
                                </h3>
                                <div class="product-price">
                                    <ins class="new-price">$73.40</ins>
                                </div>
                            </div>
                        </div>
                        <!-- End of Product -->
                    </div>
                    <!-- End of Grid Item -->
                    <div class="grid-item 1-3 1-4 1-5">
                        <div class="product text-center">
                            <figure class="product-media">
                                <a href="product-default.html">
                                    <img src="{{ asset('frontend/assets/images/demos/demo9/product/6-2.jpg') }}" alt="Product" width="600"
                                        height="675" />
                                </a>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-cart w-icon-cart" title="Add to cart"></a>
                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart" title="Wishlist"></a>
                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare" title="Compare"></a>
                                    <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                        title="Quick View"></a>
                                </div>
                            </figure>
                            <div class="product-details">
                                <h3 class="product-name">
                                    <a href="product-default.html">Comfortable Armchair</a>
                                </h3>
                                <div class="product-price">
                                    <ins class="new-price">$290.05</ins><del class="old-price">$302.74</del>
                                </div>
                            </div>
                        </div>
                        <!-- End of Product -->
                    </div>
                    <!-- End of Grid Item -->
                    <div class="grid-item 1-1 1-3 1-5 1-6">
                        <div class="product text-center">
                            <figure class="product-media">
                                <a href="product-default.html">
                                    <img src="{{ asset('frontend/assets/images/demos/demo9/product/6-3.jpg') }}" alt="Product" width="600"
                                        height="675" />
                                </a>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-cart w-icon-cart" title="Add to cart"></a>
                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart" title="Wishlist"></a>
                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare" title="Compare"></a>
                                    <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                        title="Quick View"></a>
                                </div>
                            </figure>
                            <div class="product-details">
                                <h3 class="product-name">
                                    <a href="product-default.html">Lantern</a>
                                </h3>
                                <div class="product-price">
                                    <ins class="new-price">$108.54</ins>
                                </div>
                            </div>
                        </div>
                        <!-- End of Product -->
                    </div>
                    <!-- End of Grid Item -->
                    <div class="grid-item 1-1 1-2 1-4 1-6">
                        <div class="product text-center">
                            <figure class="product-media">
                                <a href="product-default.html">
                                    <img src="{{ asset('frontend/assets/images/demos/demo9/product/6-4.jpg') }}" alt="Product" width="600"
                                        height="675" />
                                </a>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-cart w-icon-cart" title="Add to cart"></a>
                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart" title="Wishlist"></a>
                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare" title="Compare"></a>
                                    <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                        title="Quick View"></a>
                                </div>
                            </figure>
                            <div class="product-details">
                                <h3 class="product-name">
                                    <a href="product-default.html">Morden Table</a>
                                </h3>
                                <div class="product-price">
                                    <ins class="new-price">$231.47</ins><del class="old-price">$259.17</del>
                                </div>
                            </div>
                        </div>
                        <!-- End of Product -->
                    </div>
                    <!-- End of Grid Item -->
                    <div class="grid-item 1-1 1-3 1-5">
                        <div class="product text-center">
                            <figure class="product-media">
                                <a href="product-default.html">
                                    <img src="{{ asset('frontend/assets/images/demos/demo9/product/6-5.jpg') }}" alt="Product" width="600"
                                        height="675" />
                                </a>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-cart w-icon-cart" title="Add to cart"></a>
                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart" title="Wishlist"></a>
                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare" title="Compare"></a>
                                    <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                        title="Quick View"></a>
                                </div>
                            </figure>
                            <div class="product-details">
                                <h3 class="product-name">
                                    <a href="product-default.html">Plastic Candle Box</a>
                                </h3>
                                <div class="product-price">
                                    <ins class="new-price">$46.16</ins><del class="old-price">$51.29</del>
                                </div>
                            </div>
                        </div>
                        <!-- End of Product -->
                    </div>
                    <!-- End of Grid Item -->
                    <div class="grid-space col-xl-5col col-1"></div>
                </div>
                <!-- End of Grid -->

                <div class="row cols-md-2 mb-6 appear-animate">
                    <div class="banner banner-fixed category-banner mb-4">
                        <figure class="br-sm">
                            <img src="{{ asset('frontend/assets/images/demos/demo9/banner/2-1.jpg') }}" alt="Category Banner" width="640"
                                height="200" style="background-color: #32373B;" />
                        </figure>
                        <div class="banner-content y-50">
                            <h5 class="banner-subtitle text-uppercase text-secondary font-weight-bold">New Arrivals</h5>
                            <h3 class="banner-title text-white text-capitalize font-weight-normal mb-5 ls-25">
                                <strong>Flash Wireless</strong><br>Earphones
                            </h3>
                            <a href="demo9-shop.html" class="btn btn-white btn-link btn-underline btn-icon-right">
                                Shop Now<i class="w-icon-long-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <!-- End of Banner -->
                    <div class="banner banner-fixed category-banner mb-4">
                        <figure class="br-sm">
                            <img src="{{ asset('frontend/assets/images/demos/demo9/banner/2-2.jpg') }}" alt="Category Banner" width="640"
                                height="200" style="background-color: #ECECEE;" />
                        </figure>
                        <div class="banner-content y-50">
                            <h5 class="banner-subtitle text-capitalize font-weight-normal ls-25">
                                Flash Sale <span class="text-secondary text-uppercase">50% Off</span>
                            </h5>
                            <h3 class="banner-title text-capitalize font-weight-normal mb-5 ls-25">
                                <strong>Fashion Figure</strong><br>Skate Sale
                            </h3>
                            <a href="demo9-shop.html" class="btn btn-dark btn-link btn-underline btn-icon-right">
                                Shop Now<i class="w-icon-long-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <!-- End of Banner -->
                </div>
                <!-- End of Row -->

                <div class="filter-with-title title-underline mb-4 appear-animate">
                    <h2 class="title">Consumer Electronic</h2>
                    <ul class="nav-filters" data-target="#products-2">
                        <li><a href="#" class="nav-filter active" data-filter="*">All</a></li>
                        <li><a href="#" class="nav-filter" data-filter=".1-1">TV &amp; Video</a></li>
                        <li><a href="#" class="nav-filter" data-filter=".1-2">Cameras</a></li>
                        <li><a href="#" class="nav-filter" data-filter=".1-3">Audio</a></li>
                        <li><a href="#" class="nav-filter" data-filter=".1-4">Accessories</a></li>
                        <li><a href="#" class="nav-filter" data-filter=".1-5">Computers</a></li>
                        <li><a href="#" class="nav-filter" data-filter=".1-6">Smartphone</a></li>
                    </ul>
                </div>
                <!-- End of Filter With Title -->
                <div class="row grid cols-xl-5 cols-md-4 cols-sm-3 cols-2 appear-animate" id="products-2">
                    <div class="grid-item 1-2 1-4 1-6">
                        <div class="product text-center">
                            <figure class="product-media">
                                <a href="product-default.html">
                                    <img src="{{ asset('frontend/assets/images/demos/demo9/product/7-1.jpg') }}" alt="Product" width="600"
                                        height="675" />
                                </a>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-cart w-icon-cart" title="Add to cart"></a>
                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart" title="Wishlist"></a>
                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare" title="Compare"></a>
                                    <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                        title="Quick View"></a>
                                </div>
                            </figure>
                            <div class="product-details">
                                <h3 class="product-name">
                                    <a href="product-default.html">Wireless Mouse</a>
                                </h3>
                                <div class="product-price">
                                    <ins class="new-price">$15.73</ins>
                                </div>
                            </div>
                        </div>
                        <!-- End of Product -->
                    </div>
                    <!-- End of Grid Item -->
                    <div class="grid-item 1-3 1-4 1-5">
                        <div class="product text-center">
                            <figure class="product-media">
                                <a href="product-default.html">
                                    <img src="{{ asset('frontend/assets/images/demos/demo9/product/7-2.jpg') }}" alt="Product" width="600"
                                        height="675" />
                                </a>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-cart w-icon-cart" title="Add to cart"></a>
                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart" title="Wishlist"></a>
                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare" title="Compare"></a>
                                    <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                        title="Quick View"></a>
                                </div>
                            </figure>
                            <div class="product-details">
                                <h3 class="product-name">
                                    <a href="product-default.html">Wonderful Sound Music Player</a>
                                </h3>
                                <div class="product-price">
                                    <ins class="new-price">$50.29 - $58.28</ins>
                                </div>
                            </div>
                        </div>
                        <!-- End of Product -->
                    </div>
                    <!-- End of Grid Item -->
                    <div class="grid-item 1-1 1-3 1-5 1-6">
                        <div class="product text-center">
                            <figure class="product-media">
                                <a href="product-default.html">
                                    <img src="{{ asset('frontend/assets/images/demos/demo9/product/7-3.jpg') }}" alt="Product" width="600"
                                        height="675" />
                                </a>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-cart w-icon-cart" title="Add to cart"></a>
                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart" title="Wishlist"></a>
                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare" title="Compare"></a>
                                    <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                        title="Quick View"></a>
                                </div>
                            </figure>
                            <div class="product-details">
                                <h3 class="product-name">
                                    <a href="product-default.html">Fashion Table Sound Marker</a>
                                </h3>
                                <div class="product-price">
                                    <ins class="new-price">$72.80</ins>
                                </div>
                            </div>
                        </div>
                        <!-- End of Product -->
                    </div>
                    <!-- End of Grid Item -->
                    <div class="grid-item 1-1 1-2 1-4 1-6">
                        <div class="product text-center">
                            <figure class="product-media">
                                <a href="product-default.html">
                                    <img src="{{ asset('frontend/assets/images/demos/demo9/product/7-4.jpg') }}" alt="Product" width="600"
                                        height="675" />
                                </a>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-cart w-icon-cart" title="Add to cart"></a>
                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart" title="Wishlist"></a>
                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare" title="Compare"></a>
                                    <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                        title="Quick View"></a>
                                </div>
                            </figure>
                            <div class="product-details">
                                <h3 class="product-name">
                                    <a href="product-default.html">Charge &amp; Alarm Machine</a>
                                </h3>
                                <div class="product-price">
                                    <ins class="new-price">$84.25</ins><del class="old-price">$98.20</del>
                                </div>
                            </div>
                        </div>
                        <!-- End of Product -->
                    </div>
                    <!-- End of Grid Item -->
                    <div class="grid-item 1-1 1-3 1-5">
                        <div class="product text-center">
                            <figure class="product-media">
                                <a href="product-default.html">
                                    <img src="{{ asset('frontend/assets/images/demos/demo9/product/7-5.jpg') }}" alt="Product" width="600"
                                        height="675" />
                                </a>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-cart w-icon-cart" title="Add to cart"></a>
                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart" title="Wishlist"></a>
                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare" title="Compare"></a>
                                    <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                        title="Quick View"></a>
                                </div>
                            </figure>
                            <div class="product-details">
                                <h3 class="product-name">
                                    <a href="product-default.html">Red Cap Sound Marker</a>
                                </h3>
                                <div class="product-price">
                                    <ins class="new-price">$89.50</ins>
                                </div>
                            </div>
                        </div>
                        <!-- End of Product -->
                    </div>
                    <!-- End of Grid Item -->
                    <div class="grid-space col-xl-5col col-1"></div>
                </div>
                <!-- End of Grid -->

                <div class="banner link-banner-newsletter br-sm appear-animate" style="background-image: url({{ asset('frontend/assets/images/demos/demo9/banner/3.jpg') }});
                    background-color: #27393D;">
                    <div class="content-left mr-auto">
                        <h3 class="banner-title text-white text-capitalize font-weight-bold ls-25">Download Wolmart App
                            Now!</h3>
                        <p class="text-white">Shopping fastly and easily more with our app. Get a link to download
                            the app on your phone.</p>
                        <form action="#" method="get" class="input-wrapper input-wrapper-inline input-wrapper-rounded">
                            <input class="form-control mb-4" type="email" placeholder="Enter Your Email..." name="email"
                                id="email_4">
                            <button class="btn btn-primary btn-rounded mb-4" type="submit">Send Link
                            </button>
                        </form>
                    </div>
                    <!-- End of Content Left -->
                    <div class="content-right">
                        <a href="#">
                            <img src="{{ asset('frontend/assets/images/demos/demo9/banner/button-1.jpg') }}" alt="Button" width="141"
                                height="41" style="background-color: #121315" />
                        </a>
                        <a href="#">
                            <img src="{{ asset('frontend/assets/images/demos/demo9/banner/button-2.jpg') }}" alt="Button" width="141"
                                height="41" style="background-color: #121315" />
                        </a>
                    </div>
                    <!-- End of Content Right -->
                </div>
                <!-- End of Link Banner Newsletter -->

                <div class="title-link-wrapper appear-animate">
                    <h2 class="title">Top Rated Products</h2>
                    <a href="shop-boxed-banner.html" class="font-weight-bold ls-25">More Products<i
                            class="w-icon-long-arrow-right"></i></a>
                </div>
                <!-- End of Title Link Wrapper -->
                <div class="row cols-lg-4 cols-md-3 cols-xs-2 cols-1 appear-animate">
                    <div class="product-wrap mb-0">
                        <div class="product product-widget">
                            <figure class="product-media">
                                <a href="product-default.html">
                                    <img src="{{ asset('frontend/assets/images/demos/demo9/product/7-5.jpg') }}" alt="Product" width="600"
                                        height="675">
                                </a>
                            </figure>
                            <div class="product-details">
                                <h4 class="product-name">
                                    <a href="product-default.html">Red Cap Sound Marker</a>
                                </h4>
                                <div class="product-price">$89.50</div>
                            </div>
                        </div>
                    </div>
                    <!-- End of Product Wrap -->
                    <div class="product-wrap mb-0">
                        <div class="product product-widget">
                            <figure class="product-media">
                                <a href="product-default.html">
                                    <img src="{{ asset('frontend/assets/images/demos/demo9/product/8-1.jpg') }}" alt="Product" width="600"
                                        height="675">
                                </a>
                            </figure>
                            <div class="product-details">
                                <h4 class="product-name">
                                    <a href="product-default.html">Mini Wireless Earphone</a>
                                </h4>
                                <div class="product-price">$120.57</div>
                            </div>
                        </div>
                    </div>
                    <!-- End of Product Wrap -->
                    <div class="product-wrap mb-0">
                        <div class="product product-widget">
                            <figure class="product-media">
                                <a href="product-default.html">
                                    <img src="{{ asset('frontend/assets/images/demos/demo9/product/5-10.jpg') }}" alt="Product" width="600"
                                        height="675">
                                </a>
                            </figure>
                            <div class="product-details">
                                <h4 class="product-name">
                                    <a href="product-default.html">Top Men's Hiking Hat</a>
                                </h4>
                                <div class="product-price">
                                    <ins class="new-price">$20.84</ins><del class="old-price">$25.92</del>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End of Product Wrap -->
                    <div class="product-wrap mb-0">
                        <div class="product product-widget">
                            <figure class="product-media">
                                <a href="product-default.html">
                                    <img src="{{ asset('frontend/assets/images/demos/demo9/product/4-5.jpg') }}" alt="Product" width="600"
                                        height="675">
                                </a>
                            </figure>
                            <div class="product-details">
                                <h4 class="product-name">
                                    <a href="product-default.html">Mobile Electronic Recorder</a>
                                </h4>
                                <div class="product-price">
                                    <ins class="new-price">$95.72</ins><del class="old-price">$97.15</del>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End of Product Wrap -->
                    <div class="product-wrap mb-0">
                        <div class="product product-widget">
                            <figure class="product-media">
                                <a href="product-default.html">
                                    <img src="{{ asset('frontend/assets/images/demos/demo9/product/7-1.jpg') }}" alt="Product" width="600"
                                        height="675">
                                </a>
                            </figure>
                            <div class="product-details">
                                <h4 class="product-name">
                                    <a href="product-default.html">Wireless Mouse</a>
                                </h4>
                                <div class="product-price">$15.73</div>
                            </div>
                        </div>
                    </div>
                    <!-- End of Product Wrap -->
                    <div class="product-wrap mb-0">
                        <div class="product product-widget">
                            <figure class="product-media">
                                <a href="product-default.html">
                                    <img src="{{ asset('frontend/assets/images/demos/demo9/product/8-2.jpg') }}" alt="Product" width="600"
                                        height="675">
                                </a>
                            </figure>
                            <div class="product-details">
                                <h4 class="product-name">
                                    <a href="product-default.html">Handy Camera</a>
                                </h4>
                                <div class="product-price">$360.19</div>
                            </div>
                        </div>
                    </div>
                    <!-- End of Product Wrap -->
                    <div class="product-wrap mb-0">
                        <div class="product product-widget">
                            <figure class="product-media">
                                <a href="product-default.html">
                                    <img src="{{ asset('frontend/assets/images/demos/demo9/product/8-3.jpg') }}" alt="Product" width="600"
                                        height="675">
                                </a>
                            </figure>
                            <div class="product-details">
                                <h4 class="product-name">
                                    <a href="product-default.html">Wonderful Sound Music Player</a>
                                </h4>
                                <div class="product-price">$50.29 - $58.28</div>
                            </div>
                        </div>
                    </div>
                    <!-- End of Product Wrap -->
                    <div class="product-wrap mb-0">
                        <div class="product product-widget">
                            <figure class="product-media">
                                <a href="product-default.html">
                                    <img src="{{ asset('frontend/assets/images/demos/demo9/product/7-4.jpg') }}" alt="Product" width="600"
                                        height="675">
                                </a>
                            </figure>
                            <div class="product-details">
                                <h4 class="product-name">
                                    <a href="product-default.html">Charge &amp; Alarm Music</a>
                                </h4>
                                <div class="product-price">
                                    <ins class="new-price">$84.25</ins><del class="old-price">$98.20</del>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End of Product Wrap -->
                </div>
                <!-- End of Product Widget -->

                 <!-- Start Brands Wrapper -->
                @include('frontend.body.brands')
                <!-- End of Brands Wrapper -->

                <div class="title-link-wrapper title-post pb-1 mb-4 appear-animate">
                    <h2 class="title ls-normal mb-1">From Our Blog</h2>
                    <a href="blog-listing.html" class="font-weight-bold font-size-normal ls-25 mb-0">View All
                        Articles</a>
                </div>
                <div class="swiper-container swiper-theme post-wrapper pb-2 pb-lg-0 mb-10 mb-lg-6 appear-animate"
                    data-swiper-options="{
                    'slidesPerView': 1,
                    'spaceBetween': 20,
                    'breakpoints': {
                        '576': {
                            'slidesPerView': 2
                        },
                        '768': {
                            'slidesPerView': 3
                        },
                        '992': {
                            'slidesPerView': 4,
                            'dots': false
                        }
                    }
                }">
                    <div class="swiper-wrapper row cols-lg-4 cols-md-3 cols-sm-2 cols-1">

                        <div class="swiper-slide post text-center overlay-zoom">
                            <figure class="post-media br-sm">
                                <a href="post-single.html">
                                    <img src="{{ asset('frontend/assets/images/demos/demo9/blog/1.jpg') }}" alt="Post" width="620" height="420"
                                        style="background-color: #B9BAB4;" />
                                </a>
                            </figure>
                            <div class="post-details">
                                <div class="post-meta">
                                    by <a href="#" class="post-author">John Doe</a>
                                    - <a href="#" class="post-date mr-0">03.05.2021</a>
                                </div>
                                <h4 class="post-title"><a href="post-single.html">We want to be different, and Fashion
                                        gives
                                        me that outlet to do</a></h4>
                                <a href="post-single.html" class="btn btn-link btn-dark btn-underline">Read More<i
                                        class="w-icon-long-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="swiper-slide post text-center overlay-zoom">
                            <figure class="post-media br-sm">
                                <a href="post-single.html">
                                    <img src="{{ asset('frontend/assets/images/demos/demo9/blog/2.jpg') }}" alt="Post" width="620" height="420"
                                        style="background-color: #F2F3F7;" />
                                </a>
                            </figure>
                            <div class="post-details">
                                <div class="post-meta">
                                    by <a href="#" class="post-author">John Doe</a>
                                    - <a href="#" class="post-date mr-0">03.05.2021</a>
                                </div>
                                <h4 class="post-title"><a href="post-single.html">Explore Fashion For Women In</a></h4>
                                <a href="post-single.html" class="btn btn-link btn-dark btn-underline">Read More<i
                                        class="w-icon-long-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="swiper-slide post text-center overlay-zoom">
                            <figure class="post-media br-sm">
                                <a href="post-single.html">
                                    <img src="{{ asset('frontend/assets/images/demos/demo9/blog/3.jpg') }}" alt="Post" width="620" height="420"
                                        style="background-color: #D7DDDF;" />
                                </a>
                            </figure>
                            <div class="post-details">
                                <div class="post-meta">
                                    by <a href="#" class="post-author">John Doe</a>
                                    - <a href="#" class="post-date mr-0">03.05.2021</a>
                                </div>
                                <h4 class="post-title"><a href="post-single.html">Fashion tells about who you are from
                                        external point of view</a></h4>
                                <a href="post-single.html" class="btn btn-link btn-dark btn-underline">Read More<i
                                        class="w-icon-long-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="swiper-slide post text-center overlay-zoom">
                            <figure class="post-media br-sm">
                                <a href="post-single.html">
                                    <img src="{{ asset('frontend/assets/images/demos/demo9/blog/4.jpg') }}" alt="Post" width="620" height="420"
                                        style="background-color: #E4E8EB;" />
                                </a>
                            </figure>
                            <div class="post-details">
                                <div class="post-meta">
                                    by <a href="#" class="post-author">John Doe</a>
                                    - <a href="#" class="post-date mr-0">03.05.2021</a>
                                </div>
                                <h4 class="post-title"><a href="post-single.html">Just found the ultimate denim
                                        dresses</a>
                                </h4>
                                <a href="post-single.html" class="btn btn-link btn-dark btn-underline">Read More<i
                                        class="w-icon-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
            <!-- End of Container -->


        </main>

  @endsection