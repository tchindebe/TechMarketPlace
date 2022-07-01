@extends('layouts.base')

@section('content')

    <div class="homev3-slider-with-banners row">
        <div class="slider">
            <div class="home-v3-slider home-slider">
                <div class="slider-1">
                    <img src="https://media.istockphoto.com/photos/woman-holding-sale-shopping-bags-consumerism-shopping-lifestyle-picture-id1254508881?k=20&m=1254508881&s=612x612&w=0&h=d6KO9oMB3cMLGSFEu5GoGbYX0RpkHSEoUCARo7UagTI=" alt="">
                    <div class="caption">
                        <div class="title">{{$user->username}}
                            <br>{{$user->profile->phone}}</div>
                        <div class="sub-title">{{$user->profile->slogan}}</div>
                        <div class="button">{{$user->username}}
                            <i class="tm tm-long-arrow-right"></i>
                        </div>
                        <div class="bottom-caption">Free shipping on US Terority</div>
                    </div>
                </div>
                <div class="slider-1 slider-2">
                    <img src="https://static6.depositphotos.com/1008303/565/i/600/depositphotos_5653638-stock-photo-black-woman-shopping.jpg" alt="">
                    <div class="caption">
                        <div class="title">The new-tech gift you are wishing for
                            <br>is right here</div>
                        <div class="sub-title">Big screens in incredibly slim designs that in your hand.</div>
                        <div class="button">Browse now
                            <i class="tm tm-long-arrow-right"></i>
                        </div>
                        <div class="bottom-caption">Free shipping on US Terority</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.features list -->
    <section class="section-categories-carousel" id="categories-carousel-2">
        <header class="section-header">
            <h2 class="section-title">Featured categories</h2>
            <nav class="custom-slick-nav"></nav>
            <!-- .custom-slick-nav -->
        </header>
        <!-- .section-header -->
        <div class="product-categories product-categories-carousel" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="{&quot;infinite&quot;:false,&quot;slidesToShow&quot;:8,&quot;slidesToScroll&quot;:1,&quot;dots&quot;:false,&quot;arrows&quot;:true,&quot;prevArrow&quot;:&quot;&lt;a href=\&quot;#\&quot;&gt;&lt;i class=\&quot;tm tm-arrow-left\&quot;&gt;&lt;\/i&gt;&lt;\/a&gt;&quot;,&quot;nextArrow&quot;:&quot;&lt;a href=\&quot;#\&quot;&gt;&lt;i class=\&quot;tm tm-arrow-right\&quot;&gt;&lt;\/i&gt;&lt;\/a&gt;&quot;,&quot;appendArrows&quot;:&quot;#categories-carousel-2 .custom-slick-nav&quot;,&quot;responsive&quot;:[{&quot;breakpoint&quot;:480,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesToScroll&quot;:2}},{&quot;breakpoint&quot;:779,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesToScroll&quot;:2}},{&quot;breakpoint&quot;:780,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesToScroll&quot;:3}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:4,&quot;slidesToScroll&quot;:4}},{&quot;breakpoint&quot;:1400,&quot;settings&quot;:{&quot;slidesToShow&quot;:5,&quot;slidesToScroll&quot;:5}},{&quot;breakpoint&quot;:1700,&quot;settings&quot;:{&quot;slidesToShow&quot;:6,&quot;slidesToScroll&quot;:6}}]}">
            <div class="woocommerce columns-8">
                <div class="products">
                    @foreach($user->products as $product)
                        @if($product->SKU == 1 && $product->user->account_status == "Approved")
                            <div class="product-category product">
                                <a href="{{route('user.shop.product.detailProduct', $product->id)}}">
                                    <img width="300" height="300" alt="All in One PC" src="{{asset('storage') . '/' . $product->images}}">
                                    <h2 class="woocommerce-loop-category__title">{{$product->name}}</h2>
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

    <section class="rating-product section-products-carousel" id="section-products-carousel-5">
        <header class="section-header">
            <h2 class="section-title">Recommended For You</h2>
            <nav class="custom-slick-nav"></nav>
        </header>
        <!-- .section-header -->
        <div class="products-carousel" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="{&quot;infinite&quot;:false,&quot;slidesToShow&quot;:5,&quot;slidesToScroll&quot;:5,&quot;dots&quot;:true,&quot;arrows&quot;:true,&quot;prevArrow&quot;:&quot;&lt;a href=\&quot;#\&quot;&gt;&lt;i class=\&quot;tm tm-arrow-left\&quot;&gt;&lt;\/i&gt;&lt;\/a&gt;&quot;,&quot;nextArrow&quot;:&quot;&lt;a href=\&quot;#\&quot;&gt;&lt;i class=\&quot;tm tm-arrow-right\&quot;&gt;&lt;\/i&gt;&lt;\/a&gt;&quot;,&quot;appendArrows&quot;:&quot;#section-products-carousel-5 .custom-slick-nav&quot;,&quot;responsive&quot;:[{&quot;breakpoint&quot;:779,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesToScroll&quot;:2}},{&quot;breakpoint&quot;:780,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesToScroll&quot;:3}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:4,&quot;slidesToScroll&quot;:4}},{&quot;breakpoint&quot;:1400,&quot;settings&quot;:{&quot;slidesToShow&quot;:5,&quot;slidesToScroll&quot;:5}}]}">
            <div class="container-fluid">
                <div class="woocommerce columns-5">
                    <div class="products">
                        <!-- /.product-outer -->
                        @foreach($user->products as $product)
                            @if($product->SKU == 3)
                                <div class="product">
                                    <div class="yith-wcwl-add-to-wishlist">
                                        <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                    </div>
                                    <a href="{{route('user.shop.product.detailProduct', $product->id)}}" class="woocommerce-LoopProduct-link">
                                        <img src="{{asset('storage') . '/' . $product->images}}" width="224" height="197" class="wp-post-image" alt="">
                                        <span class="price">
                                            <ins>
                                                <span class="amount">{{$product->sale_price}}</span>
                                            </ins>
                                            <del>
                                                <span class="amount">{{$product->regular_price}}</span>
                                            </del>
                                            <span class="amount"> </span>
                                        </span>
                                        <!-- /.price -->
                                        <h2 class="woocommerce-loop-product__title">{{$product->name}}</h2>
                                    </a>
                                    <div class="techmarket-product-rating">
                                        <div class="star-rating" title="Rated 0 out of 5">
                                            <span style="width:0%"><strong class="rating">1</strong> out of 5</span>
                                        </div>
                                        <span class="review-count">(5)</span>
                                    </div>
                                    <div class="hover-area">
                                        <a class="button add_to_cart_button" href="#" rel="nofollow">Add to cart</a>
                                        <a class="add-to-compare-link" href="#">Add to compare</a>
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
    <section class="stretch-full-width section-products-carousel-with-bg 7-column-carousel-bg">
        <div class="col-full">
            <div class="row">
                <header class="section-header">
                    <h2 class="section-title">Make
                        <br> dreams
                        <br>
                        <span>your reality.</span>
                    </h2>
                    <img alt="" src="{{asset('assets/shop/assets/images/products/bg-2.png')}}">
                </header>
                <div class="products-carousel-with-bg">
                    <div class="products-carousel" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="{&quot;infinite&quot;:false,&quot;slidesToShow&quot;:7,&quot;slidesToScroll&quot;:7,&quot;dots&quot;:true,&quot;arrows&quot;:false,&quot;responsive&quot;:[{&quot;breakpoint&quot;:780,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesToScroll&quot;:2}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesToScroll&quot;:3}},{&quot;breakpoint&quot;:1201,&quot;settings&quot;:{&quot;slidesToShow&quot;:5,&quot;slidesToScroll&quot;:5}},{&quot;breakpoint&quot;:1400,&quot;settings&quot;:{&quot;slidesToShow&quot;:5,&quot;slidesToScroll&quot;:5}},{&quot;breakpoint&quot;:1700,&quot;settings&quot;:{&quot;slidesToShow&quot;:6,&quot;slidesToScroll&quot;:6}}]}">
                        <div class="container-fluid">
                            <div class="woocommerce columns-6">
                                <div class="products">
                                    @foreach($user->products as $product)
                                        @if($product->SKU == 2)
                                            <div class="product">
                                                <a href="{{route('user.shop.product.detailProduct', $product->id)}}" class="woocommerce-LoopProduct-link">
                                                    <img src="{{asset('storage') . '/' . $product->images}}" width="224" height="197" class="wp-post-image" alt="">
                                                    <span class="price">
                                                        <ins>
                                                            <span class="amount"> </span>
                                                        </ins>
                                                        <span class="amount"> {{$product->sale_price}}</span>
                                                    </span>
                                                    <!-- /.price -->
                                                    <h2 class="woocommerce-loop-product__title">{{$product->name}}</h2>
                                                </a>
                                                <div class="hover-area">
                                                    <a class="button add_to_cart_button" href="#" rel="nofollow">Add to cart</a>
                                                    <a class="add-to-compare-link" href="#">Add to compare</a>
                                                </div>
                                            </div>
                                            <!-- /.product-outer -->
                                        @endif
                                    @endforeach

                                </div>
                            </div>
                            <!-- .woocommerce-->
                        </div>
                        <!-- .container-fluid -->
                    </div>
                    <!-- .products-carousel -->
                </div>
                <!-- .products-carousel-with-bg -->
            </div>
            <!-- .row -->
        </div>
        <!-- .col-full -->
    </section>
    <!-- .section-products-carousel-with-bg -->
    <section class="section-hot-new-arrivals section-landscape-products-card-carousel-tabs section-products-carousel-tabs">
        <div class="section-products-carousel-tabs-wrap">
            <header class="section-header">
                <h2 class="section-title">Product in promotion</h2>
                <ul role="tablist" class="nav justify-content-end">
                    <div style="display:none;">{{ $i = 0 }}</div>
                    <div style="display:none;">{{ $k = 1 }}</div>
                    @foreach($user->category as $category)
                        <div style="display:none;">{{ $i = $category->id }}</div>
                        <li class="nav-item"><a class="nav-link mr-5 @if ($k ===1) active @endif" href="#top-201{{$category->id}}" data-toggle="tab">{{$category->name}}</a></li>
                        <div style="display:none;">{{ $k++ }}</div>
                    @endforeach
                </ul>
            </header>
            <!-- .section-header -->
            <div class="tab-content">
                @foreach($user->category as $category)
                    <div role="tabpanel" class="tab-pane @if ($k ===1) active @endif" id="top-201{{$category->id}}">
                        <div class="products-carousel 4-column-tabs" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="{&quot;infinite&quot;:false,&quot;slidesToShow&quot;:4,&quot;slidesToScroll&quot;:4,&quot;dots&quot;:true,&quot;arrows&quot;:false,&quot;responsive&quot;:[{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesToScroll&quot;:2}},{&quot;breakpoint&quot;:1700,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesToScroll&quot;:3}}]}">
                            <div class="container-fluid">
                                <div class="woocommerce columns-4">
                                    <div class="products">
                                        @foreach($category->products as $product)
                                            @if($product->SKU == 4)
                                                <div class="landscape-product-card product">
                                                    <div class="media">
                                                        <div class="yith-wcwl-add-to-wishlist">
                                                            <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                        </div>
                                                        <a class="woocommerce-LoopProduct-link" href="{{route('user.shop.product.detailProduct', $product->id)}}">
                                                            <img class="wp-post-image" src="{{asset('storage') . '/' . $product->image}}" alt="">
                                                        </a>
                                                        <div class="media-body">
                                                            <a class="woocommerce-LoopProduct-link " href="{{route('user.shop.product.detailProduct', $product->id)}}">
                                                                <span class="price">
                                                                    <ins>
                                                                        <span class="amount"> {{$product->regular_price}} FCFA</span>
                                                                    </ins>
                                                                    <del>
                                                                        <span class="amount">{{$product->sale_price}} FCFA</span>
                                                                    </del>
                                                                </span>
                                                                <!-- .price -->
                                                                <h2 class="woocommerce-loop-product__title">{{$product->name}}</h2>
                                                                <div class="ribbon green-label">
                                                                    <span>A+</span>
                                                                </div>
                                                                <div class="techmarket-product-rating">
                                                                    <div title="Rated 0 out of 5" class="star-rating">
                                                                        <span style="width:50%">
                                                                            <strong class="rating">0</strong> out of 5</span>
                                                                    </div>
                                                                    <span class="review-count">(0)</span>
                                                                </div>
                                                                <!-- .techmarket-product-rating -->
                                                            </a>
                                                            <div class="hover-area">
                                                                <a class="button add_to_cart_button" href="cart.html">Add to cart</a>
                                                                <a href="compare.html" class="add-to-compare-link">Add to compare</a>
                                                            </div>
                                                            <!-- .hover-area -->
                                                        </div>
                                                        <!-- .media-body -->
                                                    </div>
                                                    <!-- .media -->
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>
                                    <!-- .products -->
                                </div>
                                <!-- .woocommerce -->
                            </div>
                            <!-- .container-fluid -->
                        </div>
                        <!-- .products-carousel -->
                    </div>
                @endforeach

                <!-- .tab-pane -->
            </div>
            <!-- .tab-content -->
        </div>
        <!-- .section-products-carousel-tabs-wrap -->
    </section>
    <!-- .section-hot-new-arrivals -->

@endsection

