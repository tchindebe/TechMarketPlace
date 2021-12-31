@extends('layouts.base')

@section('content')

    <dv id="page" class="hfeed site woocommerce-active left-sidebar">
        <div id="content" class="site-content" tabindex="-1">
            <div class="col-full">
                <div class="row">
                    <nav class="woocommerce-breadcrumb">
                        <a href="home-v1.html">Home</a>
                        <span class="delimiter">
                                <i class="tm tm-breadcrumbs-arrow-right"></i>
                            </span>{{$category->name}}
                    </nav>
                    <!-- .woocommerce-breadcrumb -->
                    <div id="primary" class="content-area">
                        <main id="main" class="site-main">
                            <section class="section-product-categories">
                                <header class="section-header">
                                    <h1 class="woocommerce-products-header__title page-title">{{$category->name}}</h1>
                                </header>
                                <div class="woocommerce columns-5">
                                    <div class="product-loop-categories">
                                        @foreach($product as $product)
                                            <div class="product-category product first">
                                                <a href="{{route('user.shop.product.detailProduct', $product->id)}}">
                                                    <img src="{{asset('storage') . '/' . $product->images}}" alt="Ultrabooks" width="224" height="197">
                                                    <h2 class="woocommerce-loop-category__title"> {{$product->name}}
                                                        <mark class="count">(5)</mark>
                                                    </h2>
                                                </a>
                                            </div>
                                        @endforeach

                                    </div>
                                    <!-- .product-loop-categories -->
                                </div>
                                <!-- .woocommerce -->
                            </section>
                            <!-- .section-product-categories -->
                            <section class="section-products-carousel" id="homev6-carousel-3">
                                <header class="section-header">
                                    <h2 class="section-title">Produce of the other categories
                                    </h2>
                                    <nav class="custom-slick-nav"></nav>
                                    <!-- .custom-slick-nav -->
                                </header>
                                <!-- .section-header -->
                                <div class="products-carousel 6-column-carousel" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="{&quot;infinite&quot;:false,&quot;slidesToShow&quot;:6,&quot;slidesToScroll&quot;:1,&quot;dots&quot;:true,&quot;arrows&quot;:true,&quot;prevArrow&quot;:&quot;&lt;a href=\&quot;#\&quot;&gt;&lt;i class=\&quot;tm tm-arrow-left\&quot;&gt;&lt;\/i&gt;&lt;\/a&gt;&quot;,&quot;nextArrow&quot;:&quot;&lt;a href=\&quot;#\&quot;&gt;&lt;i class=\&quot;tm tm-arrow-right\&quot;&gt;&lt;\/i&gt;&lt;\/a&gt;&quot;,&quot;appendArrows&quot;:&quot;#homev6-carousel-3 .custom-slick-nav&quot;,&quot;responsive&quot;:[{&quot;breakpoint&quot;:480,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesToScroll&quot;:1}},{&quot;breakpoint&quot;:750,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesToScroll&quot;:2}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesToScroll&quot;:3}},{&quot;breakpoint&quot;:1400,&quot;settings&quot;:{&quot;slidesToShow&quot;:4,&quot;slidesToScroll&quot;:4}}]}">
                                    <div class="container-fluid">
                                        <div class="woocommerce columns-6">
                                            <div class="products">
                                                @foreach($products as $products)
                                                    <div class="product">
                                                        <a href="{{route('user.shop.product.detailProduct', $products->id)}}" class="woocommerce-LoopProduct-link">
                                                            <img src="{{asset('storage') . '/' . $products->images}}" width="224" height="197" class="wp-post-image" alt="">
                                                            <span class="price">
                                                                <ins>
                                                                    <span class="amount"> </span>
                                                                </ins>
                                                                <span class="amount"> {{$products->sale_price}}</span>
                                                            </span>
                                                            <!-- /.price -->
                                                            <h2 class="woocommerce-loop-product__title">{{$products->name}}</h2>
                                                        </a>
                                                        <div class="hover-area">
                                                            <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                            <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                        <!-- .woocommerce-->
                                    </div>
                                    <!-- .container-fluid -->
                                </div>
                                <!-- .products-carousel -->
                            </section>
                        </main>
                        <!-- #main -->
                    </div>
                </div>
                <!-- .row -->
            </div>
            <!-- .col-full -->
        </div>
    </dv>


@endsection
