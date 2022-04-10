<!DOCTYPE html>
<html lang="en-US" itemscope="itemscope" itemtype="http://schema.org/WebPage">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <title>Easy Market</title>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.min.css')}}" media="all" />
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/font-awesome.min.css')}}" media="all" />
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap-grid.min.css')}}" media="all" />
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap-reboot.min.css')}}" media="all" />
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/font-techmarket.css')}}" media="all" />
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/slick.css')}}" media="all" />
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/techmarket-font-awesome.css')}}" media="all" />
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/slick-style.css')}}" media="all" />
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/animate.min.css')}}" media="all" />
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}" media="all" />
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/colors/blue.css')}}" media="all" />

    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,900" rel="stylesheet">
    <link rel="shortcut icon" href="assets/images/fav-icon.png">
</head>
<body class="woocommerce-active page-template-template-homepage-v12">
<div id="page" class="hfeed site">
    <header id="masthead" class="site-header header-v10" style="background-image: none; ">
        <div class="col-full desktop-only">
            <div class="techmarket-sticky-wrap">
                <div class="row">
                    <div class="site-branding" style="text-align: center;">
                        <a href="/" class="custom-logo-link" rel="home">
                            <img src="{{asset('assets/images/logo.png')}}" style="height: 100px; width: 100px;" st alt="" class="responsive">
                        </a>
                    </div>
                    <div id="departments-menu" class="dropdown departments-menu">
                        <button class="btn dropdown-toggle btn-block" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="tm tm-departments-thin"></i>
                            <span>All Departments</span>
                        </button>
                        <ul id="menu-departments-menu" class="dropdown-menu yamm departments-menu-dropdown">

                        </ul>
                    </div>
                    <form class="navbar-search" method="get" action="home-v1.html">
                        <label class="sr-only screen-reader-text" for="search">Search for:</label>
                        <div class="input-group">
                            <input type="text" id="search" class="form-control search-field product-search-field" dir="ltr" value="" name="s" placeholder="Search for products" />
                            <div class="input-group-addon search-categories popover-header">
                                <select name='product_cat' id='product_cat' class='postform resizeselect'>
                                    <option value='0' selected='selected'>All Categories</option>
                                    @foreach($categories as $categories)
                                        <option class="level-0" value="{{$categories->id}}">{{$categories->slug}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="input-group-btn input-group-append">
                                <input type="hidden" id="search-param" name="post_type" value="product" />
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-search"></i>
                                    <span class="search-btn">Search</span>
                                </button>
                            </div>
                        </div>
                    </form>
                    <ul class="header-compare nav navbar-nav">
                        <li class="nav-item">
                            <a href="compare.html" class="nav-link">
                                <i class="tm tm-compare"></i>
                                <span id="top-cart-compare-count" class="value">3</span>
                            </a>
                        </li>
                    </ul>
                    <ul class="header-wishlist nav navbar-nav">
                        <li class="nav-item">
                            <a href="wishlist.html" class="nav-link">
                                <i class="tm tm-favorites"></i>
                                <span id="top-cart-wishlist-count" class="value">3</span>
                            </a>
                        </li>
                    </ul>
                    <ul id="site-header-cart" class="site-header-cart menu">
                        <li class="animate-dropdown dropdown ">
                            <a class="cart-contents" href="cart.html" data-toggle="dropdown" title="View your shopping cart">
                                <i class="tm tm-shopping-bag"></i>
                                <span class="count">{{ Cart::getContent()->count() }}</span>
                                <span class="amount">
                                    <span class="price-label">Your Cart</span>
                                    {{ Cart::getTotal() }} FCFA
                                </span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-mini-cart">
                                <li>
                                    <div class="widget woocommerce widget_shopping_cart">
                                        <div class="widget_shopping_cart_content">
                                            @if(Cart::getContent()->count())
                                                <ul class="woocommerce-mini-cart cart_list product_list_widget ">
                                                    @foreach (Cart::getContent() as $item)
                                                        <li class="woocommerce-mini-cart-item mini_cart_item">
                                                            <a href="{{ route('cart.remove', $item->id) }}" class="remove">×</a>
                                                            <a href="{{ route('user.shop.product.detailProduct', $item->id) }}">
                                                                <img src="{{asset('storage') . '/' . $item->model->image}}" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt="">
                                                                {{ $item->name }}&nbsp;
                                                            </a>
                                                            <span class="quantity">
                                                                {{ $item->quantity }} ×
                                                                <span class="woocommerce-Price-amount amount">
                                                                    {{ $item->price }}
                                                                    <span class="woocommerce-Price-currencySymbol">FCFA</span>
                                                                </span>
                                                            </span>
                                                        </li>
                                                    @endforeach
                                                </ul>

                                                <!-- .cart_list -->
                                                <p class="woocommerce-mini-cart__total total">
                                                    <strong>Subtotal:</strong>
                                                    <span class="woocommerce-Price-amount amount">
                                                        {{ Cart::getTotal() }}
                                                        <span class="woocommerce-Price-currencySymbol">FCFA</span>
                                                    </span>
                                                </p>
                                                <p class="woocommerce-mini-cart__buttons buttons">

                                                    <a href="{{ route('cart.index') }}" class="button wc-forward">View cart</a>
                                                    <a href="{{route('livewire.checkout')}}" class="button checkout wc-forward">Checkout</a>
                                                </p>
                                            @else
                                                <p class="text-center p-2">Your shopping cart is empty.</p>
                                                <p class="woocommerce-mini-cart__buttons buttons">
                                                    <a href="{{ route('cart.index') }}" class="button wc-forward">View cart</a>
                                                </p>
                                            @endif
                                        </div>
                                        <!-- .widget_shopping_cart_content -->
                                    </div>

                                    <!-- .widget_shopping_cart -->
                                </li>
                            </ul>
                            <!-- .dropdown-menu-mini-cart -->
                        </li>
                    </ul>
                    <ul class="header-wishlist nav navbar-nav">
                        @if (Route::has('login'))
                            @auth
                                @if (Auth::user()->user_type === 'admin')
                                    <li class="menu-item menu-item-has-children animate-dropdown dropdown">
                                        <a title="My Account" data-toggle="dropdown" class="dropdown-toggle" href="#">
                                            {{Auth::user()->username}}
                                            <span class="caret"></span>
                                        </a>
                                        <ul role="menu" class="dropdown-menu">
                                            <li class="menu-item animate-dropdown">
                                                <a title="Dashboard" href="{{route('admin.dashboard')}}">Dashboard</a>
                                            </li>
                                            <li class="menu-item animate-dropdown">
                                                <a href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">logout</a>
                                            </li>
                                            <form id="logout-form" action="{{route('logout')}}" method="post">
                                                @csrf
                                            </form>
                                        </ul>
                                    </li>
                                @elseif(Auth::user()->user_type === 'Service')
                                    <li class="menu-item menu-item-has-children animate-dropdown dropdown">
                                        <a title="My account" href="#" data-toggle="dropdown" class="dropdown-toggle" aria-expanded="true">
                                            {{Auth::user()->username}}
                                            <span class="caret"></span>
                                        </a>
                                        <ul class="overflow-items dropdown-menu " x-placement="bottom-start" style="position: absolute; transform: translate3d(8px, 20px, 0px); top: 0px; left: 0px; will-change: transform;">
                                            <li class="menu-item" style="padding: 10px;">
                                                <a title="Dashboard" href="{{route('service-profile')}}">My account</a>
                                            </li>
                                            <li class="menu-item" style="padding: 10px;">
                                                <a href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">logout</a>
                                            </li>
                                            <form id="logout-form" action="{{route('logout')}}" method="post">
                                                @csrf
                                            </form>
                                        </ul>
                                    </li>
                                @elseif(Auth::user()->user_type === 'Boutique')
                                    <li class="menu-item menu-item-has-children animate-dropdown dropdown">
                                        <a title="My account" href="#" data-toggle="dropdown" class="dropdown-toggle" aria-expanded="true">
                                            {{Auth::user()->username}}
                                            <span class="caret"></span>
                                        </a>
                                        <ul class="overflow-items dropdown-menu " x-placement="bottom-start" style="position: absolute; transform: translate3d(8px, 20px, 0px); top: 0px; left: 0px; will-change: transform;">
                                            <li class="menu-item" style="padding: 10px;">
                                                <a title="Dashboard" href="{{route('user.dashboard')}}">My account</a>
                                            </li>
                                            <li class="menu-item" style="padding: 10px;">
                                                <a href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">logout</a>
                                            </li>
                                            <form id="logout-form" action="{{route('logout')}}" method="post">
                                                @csrf
                                            </form>
                                        </ul>
                                    </li>
                                @else
                                    <li class="menu-item menu-item-has-children animate-dropdown dropdown">
                                        <a title="My account" href="#" data-toggle="dropdown" class="dropdown-toggle" aria-expanded="true">
                                            {{Auth::user()->username}}
                                            <span class="caret"></span>
                                        </a>
                                        <ul class="overflow-items dropdown-menu " x-placement="bottom-start" style="position: absolute; transform: translate3d(8px, 20px, 0px); top: 0px; left: 0px; will-change: transform;">
                                            <li class="menu-item" style="padding: 10px;">
                                                <a title="Dashboard" href="{{route('user.dashboard')}}">My account</a>
                                            </li>
                                            <li class="menu-item" style="padding: 10px;">
                                                <a href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">logout</a>
                                            </li>
                                            <form id="logout-form" action="{{route('logout')}}" method="post">
                                                @csrf
                                            </form>
                                        </ul>
                                    </li>
                                @endif
                            @else
                                <li class="menu-item menu-item-has-children">
                                    <a class="banner-action button" title="My Account" href="/login_or_register">
                                        Sign in or Register
                                    </a>
                                </li>
                            @endauth
                        @endif
                    </ul>
                </div>
            </div>
            <div class="stretched-row">
                <div class="col-full">
                    <div class="row">
                        <nav id="navbar-primary" class="navbar-primary" aria-label="Navbar Primary" data-nav="flex-menu">
                            <ul id="menu-navbar-primary" class="nav yamm">
                                <li class="menu-item animate-dropdown">
                                    <a title="ALL CATEGORIES" href="product-category.html">ALL CATEGORIES</a>
                                </li>
                                <li class="menu-item animate-dropdown">
                                    <a title="COMPUTERS &amp; LAPTOPS" href="product-category.html">COMPUTERS &#038; LAPTOPS</a>
                                </li>
                                <li class="menu-item animate-dropdown">
                                    <a title="CAMERAS &amp; PHOTO" href="#">CAMERAS &#038; PHOTO</a>
                                </li>
                                <li class="menu-item animate-dropdown">
                                    <a title="PHONES &amp; TABLETS" href="#">PHONES &#038; TABLETS</a>
                                </li>
                                <li class="menu-item animate-dropdown">
                                    <a title="GAMES  CONSOLES" href="#">GAMES  CONSOLES</a>
                                </li>
                                <li class="menu-item animate-dropdown">
                                    <a title="TV &amp; AUDIO" href="product-category.html">TV &#038; AUDIO</a>
                                </li>
                                <li class="menu-item animate-dropdown">
                                    <a title="CAR ELECTRONIC &amp; GPS" href="product-category.html">CAR ELECTRONIC &#038; GPS</a>
                                </li>
                                <li class="menu-item animate-dropdown">
                                    <a title="Services" href="{{ route('services-home') }}">SERVICES</a>
                                </li>
                                <li class="techmarket-flex-more-menu-item dropdown">
                                    <a title="..." href="#" data-toggle="dropdown" class="dropdown-toggle">...</a>
                                    <ul class="overflow-items dropdown-menu"></ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-full handheld-only">
            <div class="handheld-header">
                <div class="row">
                    <div class="site-branding">
                        <a href="/" class="custom-logo-link" rel="home">
                            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 166.74 28.4">
                                <defs>
                                    <style>
                                        .cls-1 {
                                            fill: #333e48
                                        }

                                        .cls-2 {
                                            fill: #fed40c
                                        }

                                        .cls-3 {
                                            fill: #2a2a2a
                                        }
                                    </style>
                                </defs>
                                <title>multi-logo</title>
                                <polygon class="cls-1" points="162.37 1.02 162.37 11.11 161.37 11.11 161.37 1.02 161.37 0.95 161.37 0.17 166.74 0.17 166.74 1.02 162.37 1.02"></polygon>
                                <rect class="cls-1" x="156.93" y="0.17" width="3.47" height="0.84"></rect>
                                <rect class="cls-1" x="150.39" y="4.92" width="3.51" height="0.84"></rect>
                                <polygon class="cls-1" points="149.03 11.11 148.14 11.11 148.14 0.17 149 0.17 149.1 0.17 155.63 0.17 155.63 0.98 149.1 0.98 149.1 10.3 155.73 10.3 155.73 11.11 149.1 11.11 149.03 11.11"></polygon>
                                <polygon class="cls-1" points="140.28 6.72 140.99 6.06 146.46 11.09 145.08 11.09 140.28 6.72"></polygon>
                                <polygon class="cls-1" points="138.36 11.09 137.39 11.09 137.39 0.16 138.36 0.16 138.36 5.88 144.34 0.44 145.65 0.44 138.36 7.16 138.36 11.09"></polygon>
                                <path class="cls-1" d="M136.72,12.06h-1.25s-0.49-.39-0.71-0.59l-1.35-1.25c-0.25-.23-0.68-0.66-0.68-0.66V8.84A3.56,3.56,0,0,0,136.27,6,3.36,3.36,0,0,0,133,2h-3.92V12.06h-1V1.12h5c2.34,0.28,4,1.72,4.12,4a4.26,4.26,0,0,1-3.38,4.34C134.81,10.3,136.72,12.06,136.72,12.06Z" transform="translate(-1.59 -0.95)"></path>
                                <polygon class="cls-1" points="122.78 2.2 117.83 7.99 121.52 7.99 121.52 8.8 117.14 8.8 115.16 11.11 114.03 11.11 123.39 0.11 123.78 0.11 123.78 11.11 122.78 11.11 122.78 2.2"></polygon>
                                <polygon class="cls-1" points="111.71 2.15 107.72 6.26 107.72 6.3 107.71 6.28 107.69 6.3 107.69 6.26 103.71 2.15 103.71 11.11 102.74 11.11 102.74 0.11 103.06 0.11 107.71 4.91 112.36 0.11 112.68 0.11 112.68 11.11 111.71 11.11 111.71 2.15"></polygon>
                                <ellipse class="cls-2" cx="107.04" cy="23.92" rx="4.06" ry="4.08"></ellipse>
                                <path class="cls-3" d="M1.87,28.67A0.92,0.92,0,0,1,1.59,28v-26a1,1,0,0,1,.26-0.72A0.91,0.91,0,0,1,2.55.95H5.79A1.34,1.34,0,0,1,7,1.71L14.71,16,22.43,1.71a1.34,1.34,0,0,1,1.2-.76h3.2a1,1,0,0,1,1,1V28a0.91,0.91,0,0,1-.28.7,1,1,0,0,1-.72.26H23.39a1,1,0,0,1-1-1V10.79L16.87,21.35a1.41,1.41,0,0,1-1.32.88H13.87a1.55,1.55,0,0,1-1.36-.88L6.95,10.79V28a1,1,0,0,1-.26.68,0.91,0.91,0,0,1-.7.28H2.55A0.93,0.93,0,0,1,1.87,28.67Z" transform="translate(-1.59 -0.95)"></path>
                                <path class="cls-3" d="M33.83,26.59q-3-2.76-3-8.36V1.95a1,1,0,0,1,.26-0.72,0.91,0.91,0,0,1,.7-0.28h3.68a1,1,0,0,1,1,1V18.23A6.73,6.73,0,0,0,38,23a5.55,5.55,0,0,0,4.26,1.6A5.55,5.55,0,0,0,46.49,23,6.73,6.73,0,0,0,48,18.23V1.95a1,1,0,0,1,1-1h3.68a0.91,0.91,0,0,1,.7.28,1,1,0,0,1,.26.72V18.23q0,5.6-3,8.36t-8.38,2.76Q36.83,29.35,33.83,26.59Z" transform="translate(-1.59 -0.95)"></path>
                                <path class="cls-3" d="M56.91,28.67A0.92,0.92,0,0,1,56.63,28V1.91a0.91,0.91,0,0,1,.28-0.7A1,1,0,0,1,57.59.95h3.76a1,1,0,0,1,.7.26,1,1,0,0,1,.26.7V24.15H75a1,1,0,0,1,.72.28,0.93,0.93,0,0,1,.28.68V28a0.93,0.93,0,0,1-.28.68,1,1,0,0,1-.72.28H57.59A0.93,0.93,0,0,1,56.91,28.67Z" transform="translate(-1.59 -0.95)"></path>
                                <path class="cls-3" d="M78.79,28.67A0.92,0.92,0,0,1,78.51,28v-22h-7.4a0.92,0.92,0,0,1-.68-0.28,1,1,0,0,1-.28-0.72v-3a1,1,0,0,1,.26-0.72,0.91,0.91,0,0,1,.7-0.28H91.55a1,1,0,0,1,1,1v3a1,1,0,0,1-1,1H84.19V28a1,1,0,0,1-.26.68,0.91,0.91,0,0,1-.7.28H79.47A0.92,0.92,0,0,1,78.79,28.67Z" transform="translate(-1.59 -0.95)"></path>
                                <path class="cls-3" d="M93.87,28.67A0.92,0.92,0,0,1,93.59,28V1.91a0.91,0.91,0,0,1,.28-0.7A1,1,0,0,1,94.55.95h3.84a1,1,0,0,1,.7.26,1,1,0,0,1,.26.7V28a1,1,0,0,1-.26.68,0.91,0.91,0,0,1-.7.28H94.55A0.93,0.93,0,0,1,93.87,28.67Z" transform="translate(-1.59 -0.95)"></path>
                            </svg>
                        </a>
                    </div>
                    <div class="handheld-header-links">
                        <ul class="columns-3">
                            <li class="my-account">
                                <a href="{{ route('register') }}" class="has-icon">
                                    <i class="tm tm-login-register"></i>
                                </a>
                            </li>
                            <li class="wishlist">
                                <a href="#" class="has-icon">
                                    <i class="tm tm-favorites"></i>
                                    <span class="count">3</span>
                                </a>
                            </li>
                            <li class="compare">
                                <a href="#" class="has-icon">
                                    <i class="tm tm-compare"></i>
                                    <span class="count">3</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="techmarket-sticky-wrap">
                    <div class="row">
                        <nav id="handheld-navigation" class="handheld-navigation" aria-label="Handheld Navigation">
                            <button class="btn navbar-toggler" type="button">
                                <i class="tm tm-departments-thin"></i>
                                <span>Menu</span>
                            </button>
                            <div class="handheld-navigation-menu">
                                <span class="tmhm-close">Close</span>
                                <ul id="menu-departments-menu-1" class="nav">
                                    @foreach($allCategories as $allCategories)
                                        <li class="highlight menu-item animate-dropdown">
                                            <a title="{{$allCategories->slug}}" href="shop.html">{{$allCategories->slug}}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                            <!-- .handheld-navigation-menu -->
                        </nav>
                        <!-- .handheld-navigation -->
                        <div class="site-search">
                            <div class="widget woocommerce widget_product_search">
                                <form role="search" method="get" class="woocommerce-product-search" action="/">
                                    <label class="screen-reader-text" for="woocommerce-product-search-field-0">Search for:</label>
                                    <input type="search" id="woocommerce-product-search-field-0" class="search-field" placeholder="Search products&hellip;" value="" name="s" />
                                    <input type="submit" value="Search" />
                                    <input type="hidden" name="post_type" value="product" />
                                </form>
                            </div>
                            <!-- .widget -->
                        </div>
                        <!-- .site-search -->
                        <a class="handheld-header-cart-link has-icon" href="{{route('cart.index')}}" title="View your shopping cart">
                            <i class="tm tm-shopping-bag"></i>
                            <span class="count">2</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div id="content" class="site-content" tabindex="-1">
        <div class="col-full">
            <div class="row">
                <div id="primary" class="content-area">
                    <main id="main" class="site-main">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
    <footer class="site-footer footer-v1">
        <div class="col-full">
            <div class="before-footer-wrap">
                <div class="col-full">
                    <div class="footer-newsletter">
                        <div class="media">
                            <i class="footer-newsletter-icon tm tm-newsletter"></i>
                            <div class="media-body">
                                <div class="clearfix">
                                    <div class="newsletter-header">
                                        <h5 class="newsletter-title">Sign up to Newsletter</h5>
                                        <span class="newsletter-marketing-text"> receive
                                            <strong> coupon for first shopping</strong>
                                        </span>
                                    </div>
                                    <div class="newsletter-body">
                                        <form class="newsletter-form">
                                            <input type="text" placeholder="Enter your email address">
                                            <button class="button" type="button">Sign up</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="footer-social-icons">
                        <ul class="social-icons nav">
                            <li class="nav-item">
                                <a class="sm-icon-label-link nav-link" href="#">
                                    <i class="fa fa-facebook"></i> Facebook</a>
                            </li>
                            <li class="nav-item">
                                <a class="sm-icon-label-link nav-link" href="#">
                                    <i class="fa fa-twitter"></i> Twitter</a>
                            </li>
                            <li class="nav-item">
                                <a class="sm-icon-label-link nav-link" href="#">
                                    <i class="fa fa-google-plus"></i> Google+</a>
                            </li>
                            <li class="nav-item">
                                <a class="sm-icon-label-link nav-link" href="#">
                                    <i class="fa fa-vimeo-square"></i> Vimeo</a>
                            </li>
                            <li class="nav-item">
                                <a class="sm-icon-label-link nav-link" href="#">
                                    <i class="fa fa-rss"></i> RSS</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-widgets-block">
                <div class="row">
                    <div class="footer-contact">
                        <div class="footer-logo">
                            <a href="home-v1.html" class="custom-logo-link" rel="home">
                                <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 166.74 28.4">
                                    <defs>
                                        <style>
                                            .cls-1 {
                                                fill: #333e48
                                            }

                                            .cls-2 {
                                                fill: #fed40c
                                            }

                                            .cls-3 {
                                                fill: #2a2a2a
                                            }
                                        </style>
                                    </defs>
                                    <title>multi-logo</title>
                                    <polygon class="cls-1" points="162.37 1.02 162.37 11.11 161.37 11.11 161.37 1.02 161.37 0.95 161.37 0.17 166.74 0.17 166.74 1.02 162.37 1.02"></polygon>
                                    <rect class="cls-1" x="156.93" y="0.17" width="3.47" height="0.84"></rect>
                                    <rect class="cls-1" x="150.39" y="4.92" width="3.51" height="0.84"></rect>
                                    <polygon class="cls-1" points="149.03 11.11 148.14 11.11 148.14 0.17 149 0.17 149.1 0.17 155.63 0.17 155.63 0.98 149.1 0.98 149.1 10.3 155.73 10.3 155.73 11.11 149.1 11.11 149.03 11.11"></polygon>
                                    <polygon class="cls-1" points="140.28 6.72 140.99 6.06 146.46 11.09 145.08 11.09 140.28 6.72"></polygon>
                                    <polygon class="cls-1" points="138.36 11.09 137.39 11.09 137.39 0.16 138.36 0.16 138.36 5.88 144.34 0.44 145.65 0.44 138.36 7.16 138.36 11.09"></polygon>
                                    <path class="cls-1" d="M136.72,12.06h-1.25s-0.49-.39-0.71-0.59l-1.35-1.25c-0.25-.23-0.68-0.66-0.68-0.66V8.84A3.56,3.56,0,0,0,136.27,6,3.36,3.36,0,0,0,133,2h-3.92V12.06h-1V1.12h5c2.34,0.28,4,1.72,4.12,4a4.26,4.26,0,0,1-3.38,4.34C134.81,10.3,136.72,12.06,136.72,12.06Z" transform="translate(-1.59 -0.95)"></path>
                                    <polygon class="cls-1" points="122.78 2.2 117.83 7.99 121.52 7.99 121.52 8.8 117.14 8.8 115.16 11.11 114.03 11.11 123.39 0.11 123.78 0.11 123.78 11.11 122.78 11.11 122.78 2.2"></polygon>
                                    <polygon class="cls-1" points="111.71 2.15 107.72 6.26 107.72 6.3 107.71 6.28 107.69 6.3 107.69 6.26 103.71 2.15 103.71 11.11 102.74 11.11 102.74 0.11 103.06 0.11 107.71 4.91 112.36 0.11 112.68 0.11 112.68 11.11 111.71 11.11 111.71 2.15"></polygon>
                                    <ellipse class="cls-2" cx="107.04" cy="23.92" rx="4.06" ry="4.08"></ellipse>
                                    <path class="cls-3" d="M1.87,28.67A0.92,0.92,0,0,1,1.59,28v-26a1,1,0,0,1,.26-0.72A0.91,0.91,0,0,1,2.55.95H5.79A1.34,1.34,0,0,1,7,1.71L14.71,16,22.43,1.71a1.34,1.34,0,0,1,1.2-.76h3.2a1,1,0,0,1,1,1V28a0.91,0.91,0,0,1-.28.7,1,1,0,0,1-.72.26H23.39a1,1,0,0,1-1-1V10.79L16.87,21.35a1.41,1.41,0,0,1-1.32.88H13.87a1.55,1.55,0,0,1-1.36-.88L6.95,10.79V28a1,1,0,0,1-.26.68,0.91,0.91,0,0,1-.7.28H2.55A0.93,0.93,0,0,1,1.87,28.67Z" transform="translate(-1.59 -0.95)"></path>
                                    <path class="cls-3" d="M33.83,26.59q-3-2.76-3-8.36V1.95a1,1,0,0,1,.26-0.72,0.91,0.91,0,0,1,.7-0.28h3.68a1,1,0,0,1,1,1V18.23A6.73,6.73,0,0,0,38,23a5.55,5.55,0,0,0,4.26,1.6A5.55,5.55,0,0,0,46.49,23,6.73,6.73,0,0,0,48,18.23V1.95a1,1,0,0,1,1-1h3.68a0.91,0.91,0,0,1,.7.28,1,1,0,0,1,.26.72V18.23q0,5.6-3,8.36t-8.38,2.76Q36.83,29.35,33.83,26.59Z" transform="translate(-1.59 -0.95)"></path>
                                    <path class="cls-3" d="M56.91,28.67A0.92,0.92,0,0,1,56.63,28V1.91a0.91,0.91,0,0,1,.28-0.7A1,1,0,0,1,57.59.95h3.76a1,1,0,0,1,.7.26,1,1,0,0,1,.26.7V24.15H75a1,1,0,0,1,.72.28,0.93,0.93,0,0,1,.28.68V28a0.93,0.93,0,0,1-.28.68,1,1,0,0,1-.72.28H57.59A0.93,0.93,0,0,1,56.91,28.67Z" transform="translate(-1.59 -0.95)"></path>
                                    <path class="cls-3" d="M78.79,28.67A0.92,0.92,0,0,1,78.51,28v-22h-7.4a0.92,0.92,0,0,1-.68-0.28,1,1,0,0,1-.28-0.72v-3a1,1,0,0,1,.26-0.72,0.91,0.91,0,0,1,.7-0.28H91.55a1,1,0,0,1,1,1v3a1,1,0,0,1-1,1H84.19V28a1,1,0,0,1-.26.68,0.91,0.91,0,0,1-.7.28H79.47A0.92,0.92,0,0,1,78.79,28.67Z" transform="translate(-1.59 -0.95)"></path>
                                    <path class="cls-3" d="M93.87,28.67A0.92,0.92,0,0,1,93.59,28V1.91a0.91,0.91,0,0,1,.28-0.7A1,1,0,0,1,94.55.95h3.84a1,1,0,0,1,.7.26,1,1,0,0,1,.26.7V28a1,1,0,0,1-.26.68,0.91,0.91,0,0,1-.7.28H94.55A0.93,0.93,0,0,1,93.87,28.67Z" transform="translate(-1.59 -0.95)"></path>
                                </svg>
                            </a>
                        </div>
                        <!-- .footer-logo -->
                        <div class="contact-payment-wrap">
                            <div class="footer-contact-info">
                                <div class="media">
                                    <span class="media-left icon media-middle">
                                        <i class="tm tm-call-us-footer"></i>
                                    </span>
                                    <div class="media-body">
                                        <span class="call-us-title">Got Questions ? Call us 24/7!</span>
                                        <span class="call-us-text">(800) 8001-8588, (0600) 874 548</span>
                                        <address class="footer-contact-address">17 Princess Road, London, Greater London NW1 8JR, UK</address>
                                        <a href="#" class="footer-address-map-link">
                                            <i class="tm tm-map-marker"></i>Find us on map</a>
                                    </div>
                                    <!-- .media-body -->
                                </div>
                                <!-- .media -->
                            </div>
                            <!-- .footer-contact-info -->
                            <div class="footer-payment-info">
                                <div class="media">
                                    <span class="media-left icon media-middle">
                                        <i class="tm tm-safe-payments"></i>
                                    </span>
                                    <div class="media-body">
                                        <h5 class="footer-payment-info-title">We are using safe payments</h5>
                                        <div class="footer-payment-icons">
                                            <ul class="list-payment-icons nav">
                                                <li class="nav-item">
                                                    <img class="payment-icon-image" src="{{asset('assets/images/credit-cards/mastercard.svg')}}" alt="mastercard" />
                                                </li>
                                                <li class="nav-item">
                                                    <img class="payment-icon-image" src="{{asset('assets/images/credit-cards/visa.svg')}}" alt="visa" />
                                                </li>
                                                <li class="nav-item">
                                                    <img class="payment-icon-image" src="{{asset('assets/images/credit-cards/paypal.svg')}}" alt="paypal" />
                                                </li>
                                                <li class="nav-item">
                                                    <img class="payment-icon-image" src="{{asset('assets/images/credit-cards/maestro.svg')}}" alt="maestro" />
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- .footer-payment-icons -->
                                        <div class="footer-secure-by-info">
                                            <h6 class="footer-secured-by-title">Secured by:</h6>
                                            <ul class="footer-secured-by-icons">
                                                <li class="nav-item">
                                                    <img class="secure-icons-image" src="{{asset('assets/images/secured-by/norton.svg')}}" alt="norton" />
                                                </li>
                                                <li class="nav-item">
                                                    <img class="secure-icons-image" src="{{asset('assets/images/secured-by/mcafee.svg')}}" alt="mcafee" />
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- .footer-secure-by-info -->
                                    </div>
                                    <!-- .media-body -->
                                </div>
                                <!-- .media -->
                            </div>
                            <!-- .footer-payment-info -->
                        </div>
                        <!-- .contact-payment-wrap -->
                    </div>
                    <!-- .footer-contact -->
                    <div class="footer-widgets">
                        <div class="columns">
                            <aside class="widget clearfix">
                                <div class="body">
                                    <h4 class="widget-title">Find it Fast</h4>
                                    <div class="menu-footer-menu-1-container">
                                        <ul id="menu-footer-menu-1" class="menu">
                                            <li class="menu-item">
                                                <a href="shop.html">Computers &#038; Laptops</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="shop.html">Cameras &#038; Photography</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="shop.html">Smart Phones &#038; Tablets</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="shop.html">Video Games &#038; Consoles</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="shop.html">TV</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="shop.html">Car Electronic &#038; GPS</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- .menu-footer-menu-1-container -->
                                </div>
                                <!-- .body -->
                            </aside>
                            <!-- .widget -->
                        </div>
                        <!-- .columns -->
                        <div class="columns">
                            <aside class="widget clearfix">
                                <div class="body">
                                    <h4 class="widget-title">&nbsp;</h4>
                                    <div class="menu-footer-menu-2-container">
                                        <ul id="menu-footer-menu-2" class="menu">
                                            <li class="menu-item">
                                                <a href="shop.html">Printers &#038; Ink</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="shop.html">Audio &amp; Music</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="shop.html">Home Theaters</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="shop.html">PC Components</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="shop.html">Ultrabooks</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="shop.html">Smartwatches</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- .menu-footer-menu-2-container -->
                                </div>
                                <!-- .body -->
                            </aside>
                            <!-- .widget -->
                        </div>
                        <!-- .columns -->
                        <div class="columns">
                            <aside class="widget clearfix">
                                <div class="body">
                                    <h4 class="widget-title">Customer Care</h4>
                                    <div class="menu-footer-menu-3-container">
                                        <ul id="menu-footer-menu-3" class="menu">
                                            <li class="menu-item">
                                                <a href="login-and-register.html">My Account</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="track-your-order.html">Track Order</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="shop.html">Shop</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="wishlist.html">Wishlist</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="about.html">About Us</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="terms-and-conditions.html">Returns/Exchange</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="faq.html">FAQs</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- .menu-footer-menu-3-container -->
                                </div>
                                <!-- .body -->
                            </aside>
                            <!-- .widget -->
                        </div>
                        <!-- .columns -->
                    </div>
                    <!-- .footer-widgets -->
                </div>
                <!-- .row -->
            </div>
            <!-- .footer-widgets-block -->
            <div class="site-info">
                <div class="col-full">
                    <div class="copyright">Copyright &copy; 2017 <a href="home-v1.html">Techmarket</a> Theme. All rights reserved.</div>
                    <!-- .copyright -->
                    <div class="credit">Made with
                        <i class="fa fa-heart"></i> by bcube.</div>
                    <!-- .credit -->
                </div>
                <!-- .col-full -->
            </div>
            <!-- .site-info -->
        </div>
        <!-- .col-full -->
    </footer>
    <!-- .site-footer -->
</div>

@yield('javascript')
<script type="text/javascript" src="{{asset('assets/js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/tether.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/jquery-migrate.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/hidemaxlistitem.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/jquery-ui.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/jquery.easing.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/scrollup.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/jquery.waypoints.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/waypoints-sticky.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/pace.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/slick.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/scripts.js')}}"></script>
</body>
</html>
