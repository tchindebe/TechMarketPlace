    @extends('layouts.base')

@section('content')
    <div id="content" class="site-content woocommerce-active single-product full-width extended" tabindex="-1">
        <div class="col-full">
            <div class="row">
                <nav class="woocommerce-breadcrumb">
                    <a href="home-v1.html">Home</a>
                    <span class="delimiter">
                        <i class="tm tm-breadcrumbs-arrow-right"></i>
                    </span><a href="{{route('user.shop.product.productCategory', $product->category->id)}}">{{$product->category->name}}</a>
                    <span class="delimiter">
                    <i class="tm tm-breadcrumbs-arrow-right"></i>
                </span>{{$product->name}}
                </nav>
                <!-- .woocommerce-breadcrumb -->
                <div id="primary" class="content-area">
                    <main id="main" class="site-main">
                        <div class="product">
                            <div class="single-product-wrapper">
                                <div class="product-images-wrapper thumb-count-4">
                                            <span class="onsale">-
                                                <span class="woocommerce-Price-amount amount">
                                                    {{$product->regular_price - $product->sale_price}}
                                                    <span class="woocommerce-Price-currencySymbol"> FCFA</span>
                                                </span>
                                            </span>
                                    <!-- .onsale -->
                                    <div id="techmarket-single-product-gallery" class="techmarket-single-product-gallery techmarket-single-product-gallery--with-images techmarket-single-product-gallery--columns-4 images" data-columns="4">
                                        <div class="techmarket-single-product-gallery-images" data-ride="tm-slick-carousel" data-wrap=".woocommerce-product-gallery__wrapper" data-slick="{&quot;infinite&quot;:false,&quot;slidesToShow&quot;:1,&quot;slidesToScroll&quot;:1,&quot;dots&quot;:false,&quot;arrows&quot;:false,&quot;asNavFor&quot;:&quot;#techmarket-single-product-gallery .techmarket-single-product-gallery-thumbnails__wrapper&quot;}">
                                            <div class="woocommerce-product-gallery woocommerce-product-gallery--with-images woocommerce-product-gallery--columns-4 images" data-columns="4">
                                                <a href="#" class="woocommerce-product-gallery__trigger">🔍</a>
                                                <figure class="woocommerce-product-gallery__wrapper ">
                                                    <div data-thumb="{{asset('storage') . '/' . $product->images}}" class="woocommerce-product-gallery__image">
                                                        <a href="{{asset('storage') . '/' . $product->images}}" tabindex="0">
                                                            <img width="600" height="600" src="{{asset('storage') . '/' . $product->images}}" class="attachment-shop_single size-shop_single wp-post-image" alt="">
                                                        </a>
                                                    </div>
                                                    <div data-thumb="{{asset('storage') . '/' . $product->image}}" class="woocommerce-product-gallery__image">
                                                        <a href="{{asset('storage') . '/' . $product->image}}" tabindex="-1">
                                                            <img width="600" height="600" src="{{asset('storage') . '/' . $product->image}}" class="attachment-shop_single size-shop_single" alt="">
                                                        </a>
                                                    </div>
                                                </figure>
                                            </div>
                                            <!-- .woocommerce-product-gallery -->
                                        </div>
                                        <!-- .techmarket-single-product-gallery-images -->
                                        <div class="techmarket-single-product-gallery-thumbnails" data-ride="tm-slick-carousel" data-wrap=".techmarket-single-product-gallery-thumbnails__wrapper" data-slick="{&quot;infinite&quot;:false,&quot;slidesToShow&quot;:4,&quot;slidesToScroll&quot;:1,&quot;dots&quot;:false,&quot;arrows&quot;:true,&quot;vertical&quot;:true,&quot;verticalSwiping&quot;:true,&quot;focusOnSelect&quot;:true,&quot;touchMove&quot;:true,&quot;prevArrow&quot;:&quot;&lt;a href=\&quot;#\&quot;&gt;&lt;i class=\&quot;tm tm-arrow-up\&quot;&gt;&lt;\/i&gt;&lt;\/a&gt;&quot;,&quot;nextArrow&quot;:&quot;&lt;a href=\&quot;#\&quot;&gt;&lt;i class=\&quot;tm tm-arrow-down\&quot;&gt;&lt;\/i&gt;&lt;\/a&gt;&quot;,&quot;asNavFor&quot;:&quot;#techmarket-single-product-gallery .woocommerce-product-gallery__wrapper&quot;,&quot;responsive&quot;:[{&quot;breakpoint&quot;:765,&quot;settings&quot;:{&quot;vertical&quot;:false,&quot;horizontal&quot;:true,&quot;verticalSwiping&quot;:false,&quot;slidesToShow&quot;:4}}]}">
                                            <figure class="techmarket-single-product-gallery-thumbnails__wrapper">
                                                <figure data-thumb="{{asset('storage') . '/' . $product->images}}" class="techmarket-wc-product-gallery__image">
                                                    <img width="180" height="180" src="{{asset('storage') . '/' . $product->images}}" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt="">
                                                </figure>
                                                <figure data-thumb="{{asset('storage') . '/' . $product->images}}" class="techmarket-wc-product-gallery__image">
                                                    <img width="180" height="180" src="{{asset('storage') . '/' . $product->image}}" class="attachment-shop_thumbnail size-shop_thumbnail" alt="">
                                                </figure>
                                            </figure>
                                            <!-- .techmarket-single-product-gallery-thumbnails__wrapper -->
                                        </div>
                                        <!-- .techmarket-single-product-gallery-thumbnails -->
                                    </div>
                                    <!-- .techmarket-single-product-gallery -->
                                </div>
                                <!-- .product-images-wrapper -->
                                <div class="summary entry-summary">
                                    <div class="single-product-header">
                                        <h1 class="product_title entry-title">{{$product->name}}</h1>
                                        <a class="add-to-wishlist" href="wishlist.html"> Add to Wishlist</a>
                                    </div>
                                    <!-- .single-product-header -->
                                    <div class="single-product-meta">
                                        <div class="cat-and-sku">
                                            <span class="posted_in categories">
                                                <a rel="tag" href="{{route('user.shop.product.productCategory', $product->category->id)}}">{{$product->category->name}}</a>
                                            </span>
                                            <span class="sku_wrapper">SKU:
                                                <span class="sku">{{$product->SKU}}</span>
                                            </span>
                                        </div>
                                        <div class="product-label">
                                            <div class="ribbon label green-label">
                                                <span>A+</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- .single-product-meta -->
                                    <div class="rating-and-sharing-wrapper">
                                        <div class="woocommerce-product-rating">
                                            <div class="star-rating">
                                                <span style="width:100%">Rated
                                                    <strong class="rating">5.00</strong> out of 5 based on
                                                <span class="rating">1</span> customer rating</span>
                                            </div>
                                            <a rel="nofollow" class="woocommerce-review-link" href="#reviews">(<span class="count">1</span> customer review)</a>
                                        </div>
                                    </div>
                                    <!-- .rating-and-sharing-wrapper -->
                                    <div class="woocommerce-product-details__short-description">
                                        <ul>
                                            <li>{{$product->short_description}}</li>
                                        </ul>
                                    </div>
                                    <!-- .woocommerce-product-details__short-description -->
                                </div>
                                <!-- .entry-summary -->
                                <div class="product-actions-wrapper">
                                    <div class="product-actions">
                                        <div class="availability">
                                            Availability:
                                            <p class="stock in-stock">
                                                @if($product->quantity >= 10)
                                                    <span class="text-green">{{$product->quantity}}</span>
                                                @else
                                                    <span class="text-red">{{$product->quantity}}</span>
                                                @endif
                                            </p>
                                        </div>
                                        <!-- .availability -->
                                        <div class="additional-info">
                                            <i class="tm tm-free-delivery"></i>Item with
                                            <strong>Free Delivery</strong>
                                        </div>
                                        <!-- .additional-info -->
                                        <p class="price">
                                            <span class="woocommerce-Price-amount amount">
                                                <span class="text-green">{{$product->sale_price}}</span>
                                                <span class="woocommerce-Price-currencySymbol"> FCFA</span>
                                            </span>
                                        </p>
                                        <!-- .price -->
                                        <form class="variations_form cart">
                                            <div class="single_variation_wrap">
                                                <div class="woocommerce-variation-add-to-cart variations_button woocommerce-variation-add-to-cart-disabled">
                                                    <div class="quantity">
                                                        <label for="quantity-input">Quantity</label>
                                                        <input id="quantity-input" type="number" name="quantity" value="1" title="Qty" class="input-text qty text" size="4">
                                                    </div>
                                                    <button class="single_add_to_cart_button button alt wc-variation-selection-needed" type="submit">Add to cart</button>
                                                    <input type="hidden" value="2471" name="add-to-cart">
                                                    <input type="hidden" value="2471" name="product_id">
                                                    <input type="hidden" value="0" class="variation_id" name="variation_id">
                                                </div>
                                            </div>
                                            <!-- .single_variation_wrap -->
                                        </form>
                                        <!-- .variations_form -->
                                        <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                                    </div>
                                    <!-- .product-actions -->
                                </div>
                                <!-- .product-actions-wrapper -->
                            </div>
                            <!-- .single-product-wrapper -->
                            <div class="techmarket-tabs techmarket-tabs-wrapper wc-tabs-wrapper">
                                <div id="tab-accessories" class="techmarket-tab">
                                    <div class="tab-content">
                                        <ul role="tablist" class="nav tm-tabs">
                                            <li class="reviews_tab">
                                                <a href="#tab-reviews">Reviews (1)</a>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="tm-related-products-carousel section-products-carousel" id="tm-related-products-carousel" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="{&quot;slidesToShow&quot;:7,&quot;slidesToScroll&quot;:7,&quot;dots&quot;:true,&quot;arrows&quot;:true,&quot;prevArrow&quot;:&quot;&lt;a href=\&quot;#\&quot;&gt;&lt;i class=\&quot;tm tm-arrow-left\&quot;&gt;&lt;\/i&gt;&lt;\/a&gt;&quot;,&quot;nextArrow&quot;:&quot;&lt;a href=\&quot;#\&quot;&gt;&lt;i class=\&quot;tm tm-arrow-right\&quot;&gt;&lt;\/i&gt;&lt;\/a&gt;&quot;,&quot;appendArrows&quot;:&quot;#tm-related-products-carousel .custom-slick-nav&quot;,&quot;responsive&quot;:[{&quot;breakpoint&quot;:767,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesToScroll&quot;:1}},{&quot;breakpoint&quot;:780,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesToScroll&quot;:3}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:4,&quot;slidesToScroll&quot;:4}},{&quot;breakpoint&quot;:1400,&quot;settings&quot;:{&quot;slidesToShow&quot;:5,&quot;slidesToScroll&quot;:5}}]}">
                                        <section class="related">
                                            <header class="section-header">
                                                <h2 class="section-title">Others products</h2>
                                                <nav class="custom-slick-nav"></nav>
                                            </header>
                                            <!-- .section-header -->
                                            <div class="products">
                                                @foreach($allProducts as $allProducts)
                                                    <div class="product">
                                                        <a href="{{route('user.shop.product.detailProduct', $allProducts->id)}}" class="woocommerce-LoopProduct-link">
                                                            <img src="{{asset('storage') . '/' . $allProducts->images}}" width="224" height="197" class="wp-post-image" alt="">
                                                            <span class="price">
                                                            <ins>
                                                                <span class="amount"> </span>
                                                            </ins>
                                                            <span class="amount"> {{$allProducts->sale_price}} FCFA</span>
                                                        </span>
                                                            <!-- /.price -->
                                                            <h2 class="woocommerce-loop-product__title">{{$allProducts->name}}</h2>
                                                        </a>
                                                        <div class="hover-area">
                                                            <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                            <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </section>
                                        <!-- .single-product-wrapper -->
                                    </div>
                                    <!-- .tab-content -->
                                </div>
                                <div id="tab-reviews" class="techmarket-tab">
                                    <div class="tab-content">
                                        <ul role="tablist" class="nav tm-tabs">
                                            <li class="reviews_tab active">
                                                <a href="#tab-reviews">Reviews (1)</a>
                                            </li>
                                        </ul>
                                        <!-- /.ec-tabs -->
                                        <div class="techmarket-advanced-reviews" id="reviews">
                                            <div class="advanced-review row">
                                                <div class="advanced-review-rating">
                                                    <h2 class="based-title">Review (1)</h2>
                                                    <div class="avg-rating">
                                                        <span class="avg-rating-number">5.0</span>
                                                        <div title="Rated 5.0 out of 5" class="star-rating">
                                                            <span style="width:100%"></span>
                                                        </div>
                                                    </div>
                                                    <!-- /.avg-rating -->
                                                    <div class="rating-histogram">
                                                        <div class="rating-bar">
                                                            <div title="Rated 5 out of 5" class="star-rating">
                                                                <span style="width:100%"></span>
                                                            </div>
                                                            <div class="rating-count">1</div>
                                                            <div class="rating-percentage-bar">
                                                                <span class="rating-percentage" style="width:100%"></span>
                                                            </div>
                                                        </div>
                                                        <div class="rating-bar">
                                                            <div title="Rated 4 out of 5" class="star-rating">
                                                                <span style="width:80%"></span>
                                                            </div>
                                                            <div class="rating-count zero">0</div>
                                                            <div class="rating-percentage-bar">
                                                                <span class="rating-percentage" style="width:0%"></span>
                                                            </div>
                                                        </div>
                                                        <div class="rating-bar">
                                                            <div title="Rated 3 out of 5" class="star-rating">
                                                                <span style="width:60%"></span>
                                                            </div>
                                                            <div class="rating-count zero">0</div>
                                                            <div class="rating-percentage-bar">
                                                                <span class="rating-percentage" style="width:0%"></span>
                                                            </div>
                                                        </div>
                                                        <div class="rating-bar">
                                                            <div title="Rated 2 out of 5" class="star-rating">
                                                                <span style="width:40%"></span>
                                                            </div>
                                                            <div class="rating-count zero">0</div>
                                                            <div class="rating-percentage-bar">
                                                                <span class="rating-percentage" style="width:0%"></span>
                                                            </div>
                                                        </div>
                                                        <div class="rating-bar">
                                                            <div title="Rated 1 out of 5" class="star-rating">
                                                                <span style="width:20%"></span>
                                                            </div>
                                                            <div class="rating-count zero">0</div>
                                                            <div class="rating-percentage-bar">
                                                                <span class="rating-percentage" style="width:0%"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- /.rating-histogram -->
                                                </div>
                                                <!-- /.advanced-review-rating -->
                                                <div class="advanced-review-comment">
                                                    <div id="review_form_wrapper">
                                                        <div id="review_form">
                                                            <div class="comment-respond" id="respond">
                                                                <h3 class="comment-reply-title" id="reply-title">Add a review</h3>
                                                                <form novalidate="" class="comment-form" id="commentform" method="post" action="#">
                                                                    <div class="comment-form-rating">
                                                                        <label>Your Rating</label>
                                                                        <p class="stars">
                                                                            <span><a href="#" class="star-1">1</a><a href="#" class="star-2">2</a><a href="#" class="star-3">3</a><a href="#" class="star-4">4</a><a href="#" class="star-5">5</a></span>
                                                                        </p>
                                                                    </div>
                                                                    <p class="comment-form-comment">
                                                                        <label for="comment">Your Review</label>
                                                                        <textarea aria-required="true" rows="8" cols="45" name="comment" id="comment"></textarea>
                                                                    </p>
                                                                    <p class="comment-form-author">
                                                                        <label for="author">Name
                                                                            <span class="required">*</span>
                                                                        </label>
                                                                        <input type="text" aria-required="true" size="30" value="" name="author" id="author">
                                                                    </p>
                                                                    <p class="comment-form-email">
                                                                        <label for="email">Email
                                                                            <span class="required">*</span>
                                                                        </label>
                                                                        <input type="text" aria-required="true" size="30" value="" name="email" id="email">
                                                                    </p>
                                                                    <p class="form-submit">
                                                                        <input type="submit" value="Add Review" class="submit" id="submit" name="submit">
                                                                        <input type="hidden" id="comment_post_ID" value="185" name="comment_post_ID">
                                                                        <input type="hidden" value="0" id="comment_parent" name="comment_parent">
                                                                    </p>
                                                                </form>
                                                                <!-- /.comment-form -->
                                                            </div>
                                                            <!-- /.comment-respond -->
                                                        </div>
                                                        <!-- /#review_form -->
                                                    </div>
                                                    <!-- /#review_form_wrapper -->
                                                </div>
                                                <!-- /.advanced-review-comment -->
                                            </div>
                                        </div>
                                        <!-- /.techmarket-advanced-reviews -->
                                    </div>
                                    <!-- .tab-content -->
                                </div>
                                <!-- .techmarket-tab -->
                            </div>
                        </div>
                        <!-- .product -->
                    </main>
                    <!-- #main -->
                </div>
                <!-- #primary -->
            </div>
            <!-- .row -->
        </div>
        <!-- .col-full -->
    </div>
@endsection
