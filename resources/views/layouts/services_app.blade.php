
<html  lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <title>Easy Services</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <link rel="stylesheet" type="text/css" href="{{asset('assets/service/css/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/service/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/service/css/line-awesome.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/service/css/line-awesome-font-awesome.min.css')}}">
    <link href="{{asset('assets/service/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/service/css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/service/css/jquery.mCustomScrollbar.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/service/lib/slick/slick.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/service/lib/slick/slick-theme.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/service/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/service/css/responsive.css')}}">
</head>
<body>
<div class="wrapper">
    <header>
        <div class="container">
            <div class="header-data">
                <div class="logo">
                    <a href="/" title=""><img src="{{asset('assets/images/logo.png')}}" alt=""></a>
                </div>
                <div class="search-bar">
                    <form>
                        <input type="text" name="search" placeholder="Search...">
                        <button type="submit"><i class="la la-search"></i></button>
                    </form>
                </div>
                <nav>
                    <ul>
                        <li>
                            <a href="{{ route('services-home') }}" title="">
                                <span><img src="{{asset('assets/service/images/icon1.png')}}" alt=""></span>
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="/" title="">
                                <span><img src="{{asset('assets/service/images/icon2.png')}}" alt=""></span>
                                MarketPlace
                            </a>
                        </li>
                    </ul>
                </nav>
                <div class="user-account">

                    @if(auth()->user())
                        <div class="user-info">
                            <img src="{{asset('assets/service/images/resources/user.png')}}" alt="">
                            <i class="la la-sort-down"></i>
                        </div>
                    @else
                        <a href="/login_or_register" style="color: #fff; font-size: 14px; float: left; margin-top: 8px; width: 100%; padding: 5px 4px;">Sign In or Register</a>
                    @endif

                    <div class="user-account-settingss" id="users">
                        @if(auth()->user())
                            <h3>{{ auth()->user()->username }}</h3>
                        @else
                            <h3><a href="/login_or_register">Sign In or Register</a></h3>
                        @endif
                        <ul class="us-links">
                            @auth()
                                @if( auth()->user()->user_type === 'Service' )
                                    <li><a href="{{ route('service-profile') }}" title="">My profile</a></li>
                                    <li><a href="{{ route('service-setting') }}" title="">Account Setting</a></li>
                                @endif
                            @else
                                <li><a href="{{route('user.dashboard')}}" title="">My account</a></li>
                            @endauth
                        </ul>
                        <h3 class="tc"><a href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" title="">Logout</a></h3>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </header>
    @yield('contents')

    <div class="post-popup pst-pj">
        <div class="post-project">
            <h3>Post a project</h3>
            <div class="post-project-fields">
                <form action="{{ route('service.post.storeProject') }}" method="post" >
                    @csrf
                    <div class="row">
                        <input type="hidden" name="post_type" value="post_project">
                        <div class="col-lg-12">
                            <input type="text" name="title" placeholder="Title"/>
                        </div>
                        <div class="col-lg-12">
                            <div class="inp-field">
                                <select name="category">
                                    <option>Category</option>
                                    <option>Category 1</option>
                                    <option>Category 2</option>
                                    <option>Category 3</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <input type="text" name="skills" placeholder="Skills">
                        </div>
                        <div class="col-lg-12">
                            <div class="price-sec">
                                <div class="price-br">
                                    <input type="text" name="min_price" placeholder="Price">
                                    <i class="la la-dollar"></i>
                                </div>
                                <span>To</span>
                                <div class="price-br">
                                    <input type="text" name="max_price" placeholder="Price">
                                    <i class="la la-dollar"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <textarea name="description" placeholder="Description"></textarea>
                        </div>
                        <div class="col-lg-12">
                            <ul>
                                <li><button class="active" type="submit" value="post">Post</button></li>
                                <li><a href="#" title="">Cancel</a></li>
                            </ul>
                        </div>
                    </div>
                </form>
            </div>
            <a href="#" title=""><i class="la la-times-circle-o"></i></a>
        </div>
    </div>

    <div class="post-popup job_post">
        <div class="post-project">
            <h3>Post a job</h3>
            <div class="post-project-fields">
                <form action="{{ route('service.post.storeJob') }}" method="post" >
                    @csrf
                    <input type="hidden" name="post_type" value="post_Job">
                    <div class="row">
                        <div class="col-lg-12">
                            <input type="text" name="title" placeholder="Title">
                        </div>
                        <div class="col-lg-12">
                            <div class="inp-field">
                                <select name="category">
                                    <option>Category</option>
                                    <option>Category 1</option>
                                    <option>Category 2</option>
                                    <option>Category 3</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <input type="text" name="skills" placeholder="Skills">
                        </div>
                        <div class="col-lg-6">
                            <div class="price-br">
                                <input type="text" name="salary_price" placeholder="Price">
                                <i class="la la-dollar"></i>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="inp-field">
                                <select name="job_type">
                                    <option>Full Time</option>
                                    <option>Half time</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <textarea name="description" placeholder="Description"></textarea>
                        </div>
                        <div class="col-lg-12">
                            <ul>
                                <li><button class="active" type="submit" value="post">Post</button></li>
                                <li><a href="#" title="">Cancel</a></li>
                            </ul>
                        </div>
                    </div>
                </form>
            </div>
            <a href="#" title=""><i class="la la-times-circle-o"></i></a>
        </div>
    </div>
</div>
<script type="text/javascript" src="{{asset('assets/service/js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/service/js/popper.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/service/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/service/js/jquery.mCustomScrollbar.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/service/lib/slick/slick.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/service/js/scrollbar.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/service/js/script.js')}}"></script>
</body>
</html>
