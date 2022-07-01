@extends('layouts.base')

@section('content')
    <div id="page" class="hfeed site woocommerce-active page-template-template-homepage-v12">
        <div id="content" class="site-content" tabindex="-1">
            <div class="col-full">
                <div class="row">
                    <div id="primary" class="content-area">
                        <main id="main" class="site-main">
                            <div class="slider-block column-1">
                                <div class="home-v12-slider">
                                    <div class="home-v12-slider home-slider">
                                        <div class="slider-1" style="background-image: url({{asset('assets/images/1-1.jpg')}});">
                                            <div class="caption">
                                                <div class="pre-title">warehouse</div>
                                                <div class="title">clear-out</div>
                                                <div class="sub-title">of fitness home equipment</div>
                                                <div class="offer-price">up to 70% sale!</div>
                                                <div class="button">Get Yours now
                                                    <i class="tm tm-long-arrow-right"></i>
                                                </div>
                                                <div class="bottom-caption">Free shipping on US Terority</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <section class="section-products-carousel" id="homev12-carousel-1" class="mt-5">
                                <header class="section-header">
                                    <h2 class="section-title">Hot New Arrivals You might Like</h2>
                                    <nav class="custom-slick-nav"></nav>
                                    <!-- .custom-slick-nav -->
                                </header>
                                <!-- .section-header -->
                                <div class="products-carousel" id="new-arrival-carousel" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="{&quot;infinite&quot;:false,&quot;slidesToShow&quot;:8,&quot;slidesToScroll&quot;:8,&quot;dots&quot;:true,&quot;arrows&quot;:true,&quot;prevArrow&quot;:&quot;&lt;a href=\&quot;#\&quot;&gt;&lt;i class=\&quot;tm tm-arrow-left\&quot;&gt;&lt;\/i&gt;&lt;\/a&gt;&quot;,&quot;nextArrow&quot;:&quot;&lt;a href=\&quot;#\&quot;&gt;&lt;i class=\&quot;tm tm-arrow-right\&quot;&gt;&lt;\/i&gt;&lt;\/a&gt;&quot;,&quot;appendArrows&quot;:&quot;#homev12-carousel-1 .custom-slick-nav&quot;,&quot;responsive&quot;:[{&quot;breakpoint&quot;:650,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesToScroll&quot;:1}},{&quot;breakpoint&quot;:780,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesToScroll&quot;:3}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:4,&quot;slidesToScroll&quot;:4}},{&quot;breakpoint&quot;:1400,&quot;settings&quot;:{&quot;slidesToShow&quot;:6,&quot;slidesToScroll&quot;:6}}]}">
                                    <div class="container-fluid">
                                        <div class="woocommerce columns-8">
                                            <div class="products">
                                                @foreach($products as $products)
                                                    @if($products->user->account_status == "Approved")
                                                    <div class="product">
                                                            <div class="yith-wcwl-add-to-wishlist">
                                                                <a href="{{route('user.shop.product.detailProduct', $products->id)}}" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                            </div>
                                                            <a href="{{route('user.shop.product.detailProduct', $products->id)}}" class="woocommerce-LoopProduct-link">
                                                                <span class="onsale">
                                                                    <span class="woocommerce-Price-amount amount">
                                                                        <span class="woocommerce-Price-currencySymbol">- </span>{{ (int)(($products->regular_price - $products->sale_price)*100/$products->regular_price) }}% </span>
                                                                </span>
                                                                <img src="{{asset('storage') . '/' . $products->images}}" width="224" height="197" class="wp-post-image" alt="">
                                                                <span class="price">
                                                                    <ins>
                                                                        <span class="amount"> {{$products->sale_price}} FCFA</span>
                                                                    </ins>
                                                                    <del>
                                                                        <span class="amount">{{$products->regular_price}} </span>
                                                                    </del>
                                                                    <span class="amount"> </span>
                                                                </span>
                                                                <!-- /.price -->
                                                                <h2 class="woocommerce-loop-product__title">{{$products->slug}}</h2>
                                                            </a>
                                                            <div class="hover-area">
                                                                <a class="button add_to_cart_button" href="{{route('user.shop.product.detailProduct', $products->id)}}" rel="nofollow">Add to cart</a>
                                                            </div>
                                                        </div>
                                                    @endif
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                    <!-- .container-fluid -->
                                </div>
                                <!-- .products-carousel -->
                            </section>
                            <section class="section-top-categories section-categories-carousel-v1 section-categories-carousel" id="categories-carousel-2">
                                <header class="section-header">
                                    <h2 class="section-title">Top promo
                                    <nav class="custom-slick-nav"></nav>
                                    <!-- .custom-slick-nav -->
                                </header>
                                <!-- .section-header -->
                                <div class="product-categories product-categories-carousel" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="{&quot;infinite&quot;:false,&quot;slidesToShow&quot;:7,&quot;slidesToScroll&quot;:1,&quot;dots&quot;:false,&quot;arrows&quot;:true,&quot;prevArrow&quot;:&quot;&lt;a href=\&quot;#\&quot;&gt;&lt;i class=\&quot;tm tm-arrow-left\&quot;&gt;&lt;\/i&gt;&lt;\/a&gt;&quot;,&quot;nextArrow&quot;:&quot;&lt;a href=\&quot;#\&quot;&gt;&lt;i class=\&quot;tm tm-arrow-right\&quot;&gt;&lt;\/i&gt;&lt;\/a&gt;&quot;,&quot;appendArrows&quot;:&quot;#categories-carousel-2 .custom-slick-nav&quot;,&quot;responsive&quot;:[{&quot;breakpoint&quot;:480,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesToScroll&quot;:1}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesToScroll&quot;:2}},{&quot;breakpoint&quot;:1700,&quot;settings&quot;:{&quot;slidesToShow&quot;:5,&quot;slidesToScroll&quot;:5}}]}">
                                    <div class="woocommerce columns-7">
                                        <div class="products">
                                            @foreach($promo as $promo)
                                                @if($promo->user->account_status == "Approved")
                                                    <div class="product-category product">
                                                    <a href="{{route('user.shop.product.detailProduct', $promo->id)}}">
                                                        <img width="300" height="300" alt="All in One PC" src="{{asset('storage') . '/' . $promo->images}}">
                                                        <h2 class="woocommerce-loop-category__title">{{$promo->sale_price}} FCFA</h2>
                                                    </a>
                                                </div>
                                                @endif
                                            @endforeach
                                        </div>
                                        <!-- .products-->
                                    </div>
                                    <!-- .woocommerce -->
                                </div>
                            </section>
                            <!-- .section-top-categories -->
                            <div class="banners banners-v2">
                                <div class="row">
                                    <div class="banner small-banner text-in-left">
                                        <a href="shop.html">
                                            <div style="background-size: cover; background-position: center center; background-image: url( assets/images/banner/cart.jpg ); height: 259px;" class="banner-bg">
                                                <div class="caption">
                                                    <span class="banner-action button">Shop Now</span>
                                                </div>
                                                <!-- .caption-->
                                            </div>
                                        </a>
                                    </div>
                                    <!-- .banner-->
                                    <div class="banner large-banner large-banner-v1 text-in-left">
                                        <a href="shop.html">
                                            <div style="background-size: cover; background-position: center center; background-image: url( assets/images/banner/facebook.jpg ); height: 259px;" class="banner-bg">

                                            </div>
                                        </a>
                                    </div>
                                    <!-- .banner-->
                                    <div class="banner small-banner text-in-left">
                                        <a href="shop.html">
                                            <div style="background-size: cover; background-position: center center; background-image: url( assets/images/banner/smart.jpg ); height: 259px;" class="banner-bg">

                                            </div>
                                        </a>
                                    </div>
                                    <!-- .banner-->
                                </div>
                                <!-- .row-->
                            </div>
                            <!-- .banners-->
                            <section class="section-products-carousel" id="section-products-carousel-8">
                                <header class="section-header">
                                    <h2 class="section-title">I find my account here</h2>
                                    <nav class="custom-slick-nav"></nav>
                                </header>
                                <!-- .section-header -->
                                <div class="products-carousel 8-column-carousel" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="{&quot;infinite&quot;:false,&quot;slidesToShow&quot;:8,&quot;slidesToScroll&quot;:8,&quot;dots&quot;:true,&quot;arrows&quot;:true,&quot;prevArrow&quot;:&quot;&lt;a href=\&quot;#\&quot;&gt;&lt;i class=\&quot;tm tm-arrow-left\&quot;&gt;&lt;\/i&gt;&lt;\/a&gt;&quot;,&quot;nextArrow&quot;:&quot;&lt;a href=\&quot;#\&quot;&gt;&lt;i class=\&quot;tm tm-arrow-right\&quot;&gt;&lt;\/i&gt;&lt;\/a&gt;&quot;,&quot;appendArrows&quot;:&quot;#section-products-carousel-8 .custom-slick-nav&quot;,&quot;responsive&quot;:[{&quot;breakpoint&quot;:779,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesToScroll&quot;:2}},{&quot;breakpoint&quot;:780,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesToScroll&quot;:3}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:4,&quot;slidesToScroll&quot;:4}},{&quot;breakpoint&quot;:1700,&quot;settings&quot;:{&quot;slidesToShow&quot;:6,&quot;slidesToScroll&quot;:6}}]}">
                                    <div class="container-fluid">
                                        <div class="woocommerce columns-8">
                                            <div class="products">
                                                @foreach($lowProduct as $lowProduct)
                                                    @if($lowProduct->user->account_status == "Approved")
                                                        <div class="product">
                                                    <div class="yith-wcwl-add-to-wishlist">
                                                        <a href="{{route('user.shop.product.detailProduct', $lowProduct->id)}}" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                    </div>
                                                    <a href="{{route('user.shop.product.detailProduct', $lowProduct->id)}}" class="woocommerce-LoopProduct-link">
                                                            <span class="onsale">
                                                                <span class="woocommerce-Price-amount amount">
                                                                    <span class="woocommerce-Price-currencySymbol">-</span> {{ (int)(($lowProduct->regular_price - $lowProduct->sale_price)*100/$lowProduct->regular_price) }}%</span>
                                                            </span>
                                                        <img src="{{asset('storage') . '/' . $lowProduct->images}}" width="224" height="197" class="wp-post-image" alt="">
                                                        <span class="price">
                                                                <ins>
                                                                    <span class="amount"> {{ $lowProduct->sale_price}} Fcfa</span>
                                                                </ins>
                                                                <del>
                                                                    <span class="amount">{{ $lowProduct->regular_price}} Fcfa</span>
                                                                </del>
                                                                <span class="amount"> </span>
                                                            </span>
                                                        <!-- /.price -->
                                                        <h2 class="woocommerce-loop-product__title">{{ $lowProduct->slug}}</h2>
                                                    </a>
                                                    <div class="hover-area">
                                                        <a class="button add_to_cart_button" href="{{route('user.shop.product.detailProduct', $lowProduct->id)}}" rel="nofollow">Add to cart</a>
                                                    </div>
                                                </div>
                                                    @endif
                                                @endforeach
                                            </div>
                                        </div>
                                        <!-- .woocommerce -->
                                    </div>
                                    <!-- .row -->
                                </div>
                                <!-- .products-carousel -->
                            </section>
                            <!-- .section-products-carousel -->
                            <section class="section-products-carousel" id="section-products-carousel-8">
                                <header class="section-header">
                                    <h2 class="section-title">Diverse products</h2>
                                    <nav class="custom-slick-nav"></nav>
                                </header>
                                <!-- .section-header -->
                                <div class="products-carousel 8-column-carousel" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="{&quot;infinite&quot;:false,&quot;slidesToShow&quot;:8,&quot;slidesToScroll&quot;:8,&quot;dots&quot;:true,&quot;arrows&quot;:true,&quot;prevArrow&quot;:&quot;&lt;a href=\&quot;#\&quot;&gt;&lt;i class=\&quot;tm tm-arrow-left\&quot;&gt;&lt;\/i&gt;&lt;\/a&gt;&quot;,&quot;nextArrow&quot;:&quot;&lt;a href=\&quot;#\&quot;&gt;&lt;i class=\&quot;tm tm-arrow-right\&quot;&gt;&lt;\/i&gt;&lt;\/a&gt;&quot;,&quot;appendArrows&quot;:&quot;#section-products-carousel-8 .custom-slick-nav&quot;,&quot;responsive&quot;:[{&quot;breakpoint&quot;:779,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesToScroll&quot;:2}},{&quot;breakpoint&quot;:780,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesToScroll&quot;:3}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:4,&quot;slidesToScroll&quot;:4}},{&quot;breakpoint&quot;:1700,&quot;settings&quot;:{&quot;slidesToShow&quot;:6,&quot;slidesToScroll&quot;:6}}]}">
                                    <div class="container-fluid">
                                        <div class="woocommerce columns-8">
                                            <div class="products">
                                                @foreach($others as $others)
                                                    @if($others->user->account_status == "Approved")
                                                        <div class="product">
                                                            <div class="yith-wcwl-add-to-wishlist">
                                                                <a href="{{route('user.shop.product.detailProduct', $others->id)}}" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                            </div>
                                                            <a href="{{route('user.shop.product.detailProduct', $others->id)}}" class="woocommerce-LoopProduct-link">
                                                            <span class="onsale">
                                                                <span class="woocommerce-Price-amount amount">
                                                                    <span class="woocommerce-Price-currencySymbol">-</span> {{ (int)(($others->regular_price - $others->sale_price)*100/$others->regular_price) }}%</span>
                                                            </span>
                                                                <img src="{{asset('storage') . '/' . $others->images}}" width="224" height="197" class="wp-post-image" alt="">
                                                                <span class="price">
                                                                <ins>
                                                                    <span class="amount"> {{ $others->sale_price}} Fcfa</span>
                                                                </ins>
                                                                <del>
                                                                    <span class="amount">{{ $others->regular_price}} Fcfa</span>
                                                                </del>
                                                                <span class="amount"> </span>
                                                            </span>
                                                                <!-- /.price -->
                                                                <h2 class="woocommerce-loop-product__title">{{ $others->slug}}</h2>
                                                            </a>
                                                            <div class="hover-area">
                                                                <a class="button add_to_cart_button" href="{{route('user.shop.product.detailProduct', $others->id)}}" rel="nofollow">Add to cart</a>
                                                            </div>
                                                        </div>
                                                    @endif
                                                @endforeach
                                            </div>
                                        </div>
                                        <!-- .woocommerce -->
                                    </div>
                                    <!-- .row -->
                                </div>
                                <!-- .products-carousel -->
                            </section>
                            <div class="banner full-width-banner text-in-left banners-v2">
                                <a href="shop.html">
                                    <div style="background-size: cover; background-position: center center; background-image: url( assets/images/banner/shop.jpg ); height: 236px;" class="banner-bg">
                                        <div class="caption">
                                            <div class="banner-info">
                                                <h3 class="title">
                                                    <strong>Seamless entertainment</strong>
                                                    <br> from start to end</h3>
                                                <h4 class="subtitle">Discover a world of content</h4>
                                            </div>
                                            <!-- .banner-info -->
                                            <a href="{{route('register')}}" class="banner-action button">Create your shop now
                                                    <i class="feature-icon d-flex ml-4 tm tm-long-arrow-right"></i>
                                                </a>
                                        </div>
                                        <!-- .caption -->
                                    </div>
                                    <!-- .banner-bg -->
                                </a>
                            </div>
                            <!-- .banner -->
                            <section class="section-landscape-products-carousel recently-viewed" id="recently-viewed">
                                <header class="section-header">
                                    <h2 class="section-title">List of all shop</h2>
                                    <nav class="custom-slick-nav"></nav>
                                </header>
                                <div class="products-carousel" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="{&quot;slidesToShow&quot;:5,&quot;slidesToScroll&quot;:2,&quot;dots&quot;:true,&quot;arrows&quot;:true,&quot;prevArrow&quot;:&quot;&lt;a href=\&quot;#\&quot;&gt;&lt;i class=\&quot;tm tm-arrow-left\&quot;&gt;&lt;\/i&gt;&lt;\/a&gt;&quot;,&quot;nextArrow&quot;:&quot;&lt;a href=\&quot;#\&quot;&gt;&lt;i class=\&quot;tm tm-arrow-right\&quot;&gt;&lt;\/i&gt;&lt;\/a&gt;&quot;,&quot;appendArrows&quot;:&quot;#recently-viewed .custom-slick-nav&quot;,&quot;responsive&quot;:[{&quot;breakpoint&quot;:992,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesToScroll&quot;:2}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesToScroll&quot;:3}},{&quot;breakpoint&quot;:1400,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesToScroll&quot;:3}},{&quot;breakpoint&quot;:1700,&quot;settings&quot;:{&quot;slidesToShow&quot;:4,&quot;slidesToScroll&quot;:4}}]}">
                                    <div class="container-fluid">
                                        <div class="woocommerce columns-5">
                                            <div class="products">
                                                @foreach($users as $users)
                                                    <div class="landscape-product product">
                                                            <a class="woocommerce-LoopProduct-link" href="{{route('user.shop', $users->username)}}">
                                                                <div class="media">
                                                                    @if($users->profile->logo)
                                                                        <img class="wp-post-image" src="{{asset('storage') . '/' . $users->profile->logo}}" alt="Female">
                                                                    @endif
                                                                    @if($users->profile->logo == null)
                                                                        <img class="wp-post-image" src="{{asset('assets/clientAsset/plugins/images/users/shop.png')}}" alt="user-img" class="img-circle">
                                                                    @endif
                                                                    <div class="media-body">
                                                                    <span class="price">
                                                                        <ins>
                                                                            <span class="amount"> </span>
                                                                        </ins>
                                                                        <span class="amount">{{$users->username}}</span>
                                                                    </span>
                                                                        <!-- .price -->
                                                                        <h2 class="woocommerce-loop-product__title">{{$users->profile->slogan}}</h2>
                                                                        <div class="techmarket-product-rating">
                                                                            <div title="Rated 0 out of 5" class="star-rating">
                                                                            <span style="width:60%">
                                                                                <strong class="rating">0</strong> out of 5</span>
                                                                            </div>
                                                                            <span class="review-count">(60)</span>
                                                                        </div>
                                                                        <!-- .techmarket-product-rating -->
                                                                    </div>
                                                                    <!-- .media-body -->
                                                                </div>
                                                                <!-- .media -->
                                                            </a>
                                                            <!-- .woocommerce-LoopProduct-link -->
                                                        </div>
                                                @endforeach
                                            </div>
                                        </div>
                                        <!-- .woocommerce -->
                                    </div>
                                    <!-- .container-fluid -->
                                </div>
                                <!-- .products-carousel -->
                            </section>

                        </main>
                        <!-- #main -->
                    </div>
                    <!-- #primary -->
                </div>
                <!-- .row -->
            </div>
            <!-- .col-full -->
        </div>

    </div>

@endsection
