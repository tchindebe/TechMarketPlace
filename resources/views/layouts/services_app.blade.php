
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
                    <a href="index.html" title=""><img src="{{asset('assets/service/images/logo.png')}}" alt=""></a>
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
                        <li>
                            <a href="projects.html" title="">
                                <span><img src="{{asset('assets/service/images/icon3.png')}}" alt=""></span>
                                Projects
                            </a>
                        </li>
                        <li>
                            <a href="profiles.html" title="">
                                <span><img src="{{asset('assets/service/images/icon4.png')}}" alt=""></span>
                                Profiles
                            </a>
                            <ul>
                                <li><a href="user-profile.html" title="">User Profile</a></li>
                                <li><a href="my-profile-feed.html" title="">my-profile-feed</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="jobs.html" title="">
                                <span><img src="{{asset('assets/service/images/icon5.png')}}" alt=""></span>
                                Jobs
                            </a>
                        </li>
                        <li>
                            <a href="#" title="" class="not-box-openm">
                                <span><img src="{{asset('assets/service/images/icon6.png')}}" alt=""></span>
                                Messages
                            </a>
                            <div class="notification-box msg" id="message">
                                <div class="nt-title">
                                    <h4>Setting</h4>
                                    <a href="#" title="">Clear all</a>
                                </div>
                                <div class="nott-list">
                                    <div class="notfication-details">
                                        <div class="noty-user-img">
                                            <img src="{{asset('assets/service/images/resources/ny-img1.png')}}" alt="">
                                        </div>
                                        <div class="notification-info">
                                            <h3><a href="messages.html" title="">Jassica William</a> </h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.</p>
                                            <span>2 min ago</span>
                                        </div>
                                    </div>
                                    <div class="notfication-details">
                                        <div class="noty-user-img">
                                            <img src="{{asset('assets/service/images/resources/ny-img2.png')}}" alt="">
                                        </div>
                                        <div class="notification-info">
                                            <h3><a href="messages.html" title="">Jassica William</a></h3>
                                            <p>Lorem ipsum dolor sit amet.</p>
                                            <span>2 min ago</span>
                                        </div>
                                    </div>
                                    <div class="notfication-details">
                                        <div class="noty-user-img">
                                            <img src="{{asset('assets/service/images/resources/ny-img3.png')}}" alt="">
                                        </div>
                                        <div class="notification-info">
                                            <h3><a href="messages.html" title="">Jassica William</a></h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempo incididunt ut labore et dolore magna aliqua.</p>
                                            <span>2 min ago</span>
                                        </div>
                                    </div>
                                    <div class="view-all-nots">
                                        <a href="messages.html" title="">View All Messsages</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#" title="" class="not-box-open">
                                <span><img src="{{asset('assets/service/images/icon7.png')}}" alt=""></span>
                                Notification
                            </a>
                            <div class="notification-box noti" id="notification">
                                <div class="nt-title">
                                    <h4>Setting</h4>
                                    <a href="#" title="">Clear all</a>
                                </div>
                                <div class="nott-list">
                                    <div class="notfication-details">
                                        <div class="noty-user-img">
                                            <img src="{{asset('assets/service/images/resources/ny-img1.png')}}" alt="">
                                        </div>
                                        <div class="notification-info">
                                            <h3><a href="#" title="">Jassica William</a> Comment on your project.</h3>
                                            <span>2 min ago</span>
                                        </div>
                                    </div>
                                    <div class="notfication-details">
                                        <div class="noty-user-img">
                                            <img src="{{asset('assets/service/images/resources/ny-img2.png')}}" alt="">
                                        </div>
                                        <div class="notification-info">
                                            <h3><a href="#" title="">Jassica William</a> Comment on your project.</h3>
                                            <span>2 min ago</span>
                                        </div>
                                    </div>
                                    <div class="notfication-details">
                                        <div class="noty-user-img">
                                            <img src="{{asset('assets/service/images/resources/ny-img3.png')}}" alt="">
                                        </div>
                                        <div class="notification-info">
                                            <h3><a href="#" title="">Jassica William</a> Comment on your project.</h3>
                                            <span>2 min ago</span>
                                        </div>
                                    </div>
                                    <div class="notfication-details">
                                        <div class="noty-user-img">
                                            <img src="{{asset('assets/service/images/resources/ny-img2.png')}}" alt="">
                                        </div>
                                        <div class="notification-info">
                                            <h3><a href="#" title="">Jassica William</a> Comment on your project.</h3>
                                            <span>2 min ago</span>
                                        </div>
                                    </div>
                                    <div class="view-all-nots">
                                        <a href="#" title="">View All Notification</a>
                                    </div>
                                </div>
                            </div>
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
                            <li><a href="{{ route('service-profile') }}" title="">My profile</a></li>
                            <li><a href="{{ route('service-setting') }}" title="">Account Setting</a></li>
                        </ul>
                        <h3 class="tc"><a href="{{route('logout')}}" title="">Logout</a></h3>
                    </div>
                </div>
            </div>
        </div>
    </header>
    @yield('contents')
    @if(Auth::user()->user_type === 'Service')
    <div class="post-popup pst-pj">
        <div class="post-project">
            <h3>Post a project</h3>
            <div class="post-project-fields">
                <form>
                    <div class="row">
                        <div class="col-lg-12">
                            <input type="text" name="title" placeholder="Title">
                        </div>
                        <div class="col-lg-12">
                            <div class="inp-field">
                                <select>
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
                                    <input type="text" name="price1" placeholder="Price">
                                    <i class="la la-dollar"></i>
                                </div>
                                <span>To</span>
                                <div class="price-br">
                                    <input type="text" name="price1" placeholder="Price">
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
    @endif
    <div class="post-popup job_post">
        <div class="post-project">
            <h3>Post a job</h3>
            <div class="post-project-fields">
                <form>
                    <div class="row">
                        <div class="col-lg-12">
                            <input type="text" name="title" placeholder="Title">
                        </div>
                        <div class="col-lg-12">
                            <div class="inp-field">
                                <select>
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
                                <input type="text" name="price1" placeholder="Price">
                                <i class="la la-dollar"></i>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="inp-field">
                                <select>
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
