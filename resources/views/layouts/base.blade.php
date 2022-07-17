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
                    <div class="site-branding">
                        <a href="/" class="custom-logo-link" rel="home">
                            <img src="{{asset('assets/images/logo.svg')}}" alt="" class="responsive">
                        </a>
                    </div>
                    <div id="departments-menu" class="dropdown departments-menu">
                        <button class="btn dropdown-toggle btn-block" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="tm tm-departments-thin"></i>
                            <span>All Departments</span>
                        </button>
                        <ul id="menu-departments-menu" class="dropdown-menu yamm departments-menu-dropdown">
                            @foreach($categories as $categoriess)
                                <li class="level-0" value="{{$categoriess->id}}">{{$categoriess->slug}}</li>
                            @endforeach
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
                                <span id="top-cart-compare-count" class="value">0</span>
                            </a>
                        </li>
                    </ul>
                    <ul class="header-wishlist nav navbar-nav">
                        <li class="nav-item">
                            <a href="wishlist.html" class="nav-link">
                                <i class="tm tm-favorites"></i>
                                <span id="top-cart-wishlist-count" class="value">0</span>
                            </a>
                        </li>
                    </ul>
                    <ul id="site-header-cart" class="site-header-cart menu">
                        <li class="animate-dropdown dropdown ">
                            <a class="cart-contents" href="cart.html" data-toggle="dropdown" title="View your shopping cart">
                                <i class="tm tm-shopping-bag"></i>
                                <span class="count">{{ Cart::getContent()->count() }}</span>
                                <span class="amount row">
                                    <span class="price-label">Cart</span>
                                    {{ Cart::getTotal() }} XFA
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
                                                                    <span class="woocommerce-Price-currencySymbol">XAF</span>
                                                                </span>
                                                            </span>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                                <p class="woocommerce-mini-cart__total total">
                                                    <strong>Subtotal:</strong>
                                                    <span class="woocommerce-Price-amount amount">
                                                        {{ Cart::getTotal() }}
                                                        <span class="woocommerce-Price-currencySymbol">XAF</span>
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
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="header-wishlist nav navbar-nav">
                        @if (Route::has('login'))
                            @auth
                                @if (Auth::user()->user_type === 'Admin')
                                    <li class="menu-item menu-item-has-children animate-dropdown dropdown">
                                        <a title="My Account" data-toggle="dropdown" class="dropdown-toggle" href="#">
                                            {{Auth::user()->username}}
                                            <span class="caret"></span>
                                        </a>
                                        <ul role="menu" class="dropdown-menu px-2">
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
                                    <a title="ALL CATEGORIES" href="#">ALL CATEGORIES</a>
                                </li>
                                <li class="techmarket-flex-more-menu-item dropdown float-lg-right">
                                    <a title="..." href="#" data-toggle="dropdown" class="dropdown-toggle">...</a>
                                    <ul class="overflow-items dropdown-menu"></ul>k
                                </li>
                                <li class="menu-item animate-dropdown float-lg-right">
                                    <a title="TV &amp; AUDIO" href="{{route('about')}}">ABOUT</a>
                                </li>
                                <li class="menu-item animate-dropdown float-lg-right">
                                    <a title="GAMES  CONSOLES" href="{{route('contact')}}">CONTACT</a>
                                </li>
                                <li class="menu-item animate-dropdown float-lg-right">
                                    <a title="CAR ELECTRONIC &amp; GPS" href="{{route('store.all')}}">ALL STORES</a>
                                </li>
                                <li class="menu-item animate-dropdown float-lg-right">
                                    <a title="Services" href="{{ route('services-home') }}">SERVICES</a>
                                </li>
                                <li class="menu-item animate-dropdown float-lg-right">
                                    <a title="CAMERAS &amp; PHOTO" href="{{route('allProduct')}}">SHOP PRODUCTS</a>
                                </li>
                                <li class="menu-item animate-dropdown float-lg-right">
                                    <a title="COMPUTERS &amp; LAPTOPS" href="/">HOME</a>
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
                            <img src="{{asset('assets/images/logo.svg')}}" alt="" class="responsive">
                        </a>
                    </div>
                    <div class="handheld-header-links">
                        <ul class="columns-3">
{{--                            <li class="my-account">--}}
{{--                                <a href="{{ route('login') }}" class="has-icon">--}}
{{--                                    <i class="tm tm-login-register"></i>--}}
{{--                                </a>--}}
{{--                            </li>--}}
                                @if (Route::has('login'))
                                    @auth
                                        @if (Auth::user()->user_type === 'admin')
                                        <li class="my-account">
                                            <a href="{{route('admin.dashboard')}}" class="has-icon">
                                                <i class="tm tm-login-register"></i>
                                            </a>
                                        </li>
                                        @elseif(Auth::user()->user_type === 'Service')
                                            <li class="my-account">
                                                <a href="{{ route('service-profile') }}" class="has-icon">
                                                    <i class="tm tm-login-register"></i>
                                                </a>
                                            </li>
                                        @elseif(Auth::user()->user_type === 'Boutique')
                                            <li class="my-account">
                                                <a href="{{ route('user.dashboard') }}" class="has-icon">
                                                    <i class="tm tm-login-register"></i>
                                                </a>
                                            </li>

                                        @else
                                        <li class="my-account">
                                            <a href="{{ route('user.dashboard') }}" class="has-icon">
                                                <i class="tm tm-login-register"></i>
                                            </a>
                                        </li>
                                        @endif
                                    @else
                                    <li class="my-account">
                                        <a href="{{ route('login') }}" class="has-icon">
                                            <i class="tm tm-login-register"></i>
                                        </a>
                                    </li>
                                    @endauth
                                @endif
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
                                    <li class="menu-item animate-dropdown float-lg-right">
                                        <a title="COMPUTERS &amp; LAPTOPS" href="/">HOME</a>
                                    </li>
                                    <li class="menu-item animate-dropdown float-lg-right">
                                        <a title="CAMERAS &amp; PHOTO" href="{{route('allProduct')}}">SHOP PRODUCTS</a>
                                    </li>
                                    <li class="menu-item animate-dropdown float-lg-right">
                                        <a title="CAR ELECTRONIC &amp; GPS" href="{{route('store.all')}}">ALL STORES</a>
                                    </li>
                                    <li class="menu-item animate-dropdown float-lg-right">
                                        <a title="Services" href="{{ route('services-home') }}">SERVICES</a>
                                    </li>
                                    <li class="menu-item animate-dropdown float-lg-right">
                                        <a title="GAMES  CONSOLES" href="{{route('contact')}}">CONTACT</a>
                                    </li>
                                    <li class="menu-item animate-dropdown float-lg-right">
                                        <a title="TV &amp; AUDIO" href="{{route('about')}}">ABOUT</a>
                                    </li>
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
                            <span class="count">{{ Cart::getTotal() }}</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div id="content" class="site-content" tabindex="-1">
        <div class="col-full">
            <div class="row">
                @if( Route::current()->getName()  === 'about')
                    <nav class="woocommerce-breadcrumb">
                        <a href="/">Home</a>
                        <span class="delimiter">
                                <i class="tm tm-breadcrumbs-arrow-right"></i>
                            </span>
                        About Us
                    </nav>
                @endif

                @if( Route::current()->getName()  === 'contact')
                    <nav class="woocommerce-breadcrumb">
                        <a href="/">Home</a>
                        <span class="delimiter">
                            <i class="tm tm-breadcrumbs-arrow-right"></i>
                        </span>
                        Contact
                    </nav>
                @endif

                <div id="primary" class="content-area">
                    <main id="main" class="site-main">
                    @yield('content')
                    </main>
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
            <!-- .footer-widgets-block -->
            <div class="site-info">
                <div class="col-full">
                    <div class="copyright">Copyright &copy; 2022 <a href="/">Je boulot</a>. All rights reserved.</div>
                    <!-- .copyright -->
                    <div class="credit">Made by BBIT.</div>
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
<script src="{{ asset('js/app.js') }}"></script>

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
