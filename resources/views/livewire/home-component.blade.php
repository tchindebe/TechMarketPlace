@extends('layouts.base')

@section('content')
<div id="content" class="site-content" tabindex="-1">
    <div class="col-full">
        <div class="row">
            <div id="primary" class="content-area">
                <main id="main" class="site-main">
                    <div class="homev12-slider-with-banners row">
                        <div class="slider-block column-1">
                            <div class="home-v12-slider">
                                <div class="home-v12-slider home-slider">
                                    <div class="slider-1" style="background-image: url(assets/images/slider/home-v12-background.jpg')}});">
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
                        <!-- .slider-block -->
                        <div class="banners-block column-2">
                            <div class="banner text-in-left">
                                <a href="shop.html">
                                    <div style="background-size: cover; background-position: center center; background-image: url( assets/images/banner/12-1.jpg')}} ); height: 210px;" class="banner-bg">
                                        <div class="caption">
                                            <div class="banner-info">
                                                <h3 class="title">
                                                    <strong>Top 100 Deals</strong>
                                                    <br> for Womens
                                                    <br> Fashion</h3>
                                            </div>
                                            <span class="price">
                                                <span class="start_price">Starting at</span>
                                                <br>$69.99</span>
                                        </div>
                                        <!-- .caption -->
                                    </div>
                                </a>
                            </div>
                            <!-- .banner -->
                            <div class="banner text-in-left">
                                <a href="shop.html">
                                    <div style="background-size: cover; background-position: center center; background-image: url( assets/images/banner/12-2.jpg')}} ); height: 210px;" class="banner-bg">
                                        <div class="caption">
                                            <div class="banner-info">
                                                <h3 class="title">Billboard
                                                    <br> Music Albums
                                                    <br>
                                                    <strong>Carnival</strong> time </h3>
                                                <h4 class="subtitle">Buy 3 Get 10% off</h4>
                                            </div>
                                        </div>
                                        <!-- .caption -->
                                    </div>
                                </a>
                            </div>
                            <!-- .banner -->
                            <div class="banner text-in-left">
                                <a href="shop.html">
                                    <div style="background-size: cover; background-position: center center; background-image: url( assets/images/banner/12-3.jpg')}} ); height: 210px;" class="banner-bg">
                                        <div class="caption">
                                            <div class="banner-info">
                                                <h3 class="title">
                                                    <strong>20% Off Tech</strong>
                                                    <br> at Smartphones,
                                                    <br> Power banks,
                                                    <br>Accesories &amp;
                                                    <br> More</h3>
                                            </div>
                                        </div>
                                        <!-- .caption -->
                                    </div>
                                </a>
                            </div>
                            <!-- .banner -->
                            <div class="banner text-in-left">
                                <a href="shop.html">
                                    <div style="background-size: cover; background-position: center center; background-image: url( assets/images/banner/12-4.jpg')}} ); height: 210px;" class="banner-bg">
                                        <div class="caption">
                                            <div class="banner-info">
                                                <h4 class="pretitle">Kids Day</h4>
                                                <h3 class="title">Limited Free
                                                    <br>
                                                    <strong> 2-Day Shipping</strong>
                                                    <br> on Kids products</h3>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!-- .banner -->
                        </div>
                        <!-- .banners-block -->
                    </div>
                    <section class="section-products-carousel" id="homev12-carousel-1">
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
                                        @foreach($products as $product)
                                            <div class="product">
                                                <a href="#" class="woocommerce-LoopProduct-link">
                                                    <img src="{{ $product->image }}" width="224" height="197" class="wp-post-image" alt="">
                                                    <span class="price">
                                                    <ins>
                                                        <span class="amount"> </span>
                                                    </ins>
                                                    <span class="amount">
                                                    @if($product->quantity)
                                                            <p><strong>{{ $product->sale_price }} FCFA TTC</strong></p>
                                                        @else
                                                            <p class="red-text"><strong>Produit en rupture de stock</strong></p>
                                                        @endif
                                                    </span>
                                                </span>
                                                    <!-- /.price -->
                                                    <h2 class="woocommerce-loop-product__title">
                                                        {{ $product->name }}
                                                    </h2>
                                                </a>
                                                <div class="hover-area">
                                                    <form action="{{ route('cart.store') }}" method="post">
                                                        @csrf
                                                        <input type="hidden" name="quantity" value="1">
                                                        <button class="text-white add_to_cart_button rounded-lg" type="submit">Add to cart</button>
                                                        <input type="hidden" value="{{ $product->id }}" name="add-to-cart">
                                                        <input type="hidden" value="{{ $product->id }}" name="product_id">
                                                    </form>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <!-- .container-fluid -->
                        </div>
                        <!-- .products-carousel -->
                    </section>
                </main>
            </div>
        </div>
    </div>
</div>
@endsection
