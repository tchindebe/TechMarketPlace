<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="../plugins/images/favicon.png">
    <title>My account - Easy</title>
    <!-- Bootstrap Core CSS -->
    <link href="{{asset('assets/clientAsset/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/clientAsset/plugins/bower_components/bootstrap-extension/css/bootstrap-extension.css')}}" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="{{asset('assets/clientAsset/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css')}}" rel="stylesheet">
    <!-- toast CSS -->
    <link href="{{asset('assets/clientAsset/plugins/bower_components/toast-master/css/jquery.toast.css')}}" rel="stylesheet">
    <!-- morris CSS -->
    <link href="{{asset('assets/clientAsset/plugins/bower_components/morrisjs/morris.css')}}" rel="stylesheet">
    <!-- animation CSS -->
    <link href="{{asset('assets/clientAsset/css/animate.css')}}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{asset('assets/clientAsset/css/style.css')}}" rel="stylesheet">
    <!-- color CSS -->
    <link href="{{asset('assets/clientAsset/css/colors/default.css')}}" id="theme" rel="stylesheet">

    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>

</head>

<body>

<div id="wrapper">
    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-static-top m-b-0">
        <div class="navbar-header"> <a class="navbar-toggle hidden-sm hidden-md hidden-lg " href="javascript:void(0)" data-toggle="collapse" data-target=".navbar-collapse"><i class="ti-menu"></i></a>
            <ul class="nav navbar-top-links navbar-left hidden-xs">
                <li><a href="javascript:void(0)" class="open-close hidden-xs waves-effect waves-light"><i class="icon-arrow-left-circle ti-menu"></i></a></li>
                <li>
                    <form role="search" class="app-search hidden-xs">
                        <input type="text" placeholder="Search..." class="form-control">
                        <a href=""><i class="fa fa-search"></i></a>
                    </form>
                </li>
            </ul>
            <ul class="nav navbar-top-links navbar-right pull-right">
                <li class="dropdown"> <a class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="#"><i class="icon-envelope"></i>
                        <div class="notify"><span class="heartbit"></span><span class="point"></span></div>
                    </a>
                    <ul class="dropdown-menu mailbox animated bounceInDown">
                        <li>
                            <div class="drop-title">You have 4 new messages</div>
                        </li>
                        <li>
                            <div class="message-center">
                                <a href="#">
                                    <div class="user-img"> <img src="{{asset('assets/clientAsset/plugins/images/users/pawandeep.jpg')}}" alt="user" class="img-circle"> <span class="profile-status online pull-right"></span> </div>
                                    <div class="mail-contnet">
                                        <h5>Pavan kumar</h5>
                                        <span class="mail-desc">Just see the my admin!</span> <span class="time">9:30 AM</span> </div>
                                </a>
                                <a href="#">
                                    <div class="user-img"> <img src="../plugins/images/users/sonu.jpg" alt="user" class="img-circle"> <span class="profile-status busy pull-right"></span> </div>
                                    <div class="mail-contnet">
                                        <h5>Sonu Nigam</h5>
                                        <span class="mail-desc">I've sung a song! See you at</span> <span class="time">9:10 AM</span> </div>
                                </a>
                                <a href="#">
                                    <div class="user-img"> <img src="../plugins/images/users/arijit.jpg" alt="user" class="img-circle"> <span class="profile-status away pull-right"></span> </div>
                                    <div class="mail-contnet">
                                        <h5>Arijit Sinh</h5>
                                        <span class="mail-desc">I am a singer!</span> <span class="time">9:08 AM</span> </div>
                                </a>
                                <a href="#">
                                    <div class="user-img"> <img src="../plugins/images/users/pawandeep.jpg" alt="user" class="img-circle"> <span class="profile-status offline pull-right"></span> </div>
                                    <div class="mail-contnet">
                                        <h5>Pavan kumar</h5>
                                        <span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span> </div>
                                </a>
                            </div>
                        </li>
                        <li>
                            <a class="text-center" href="javascript:void(0);"> <strong>See all notifications</strong> <i class="fa fa-angle-right"></i> </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-messages -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown"> <a class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="#"><i class="ti-shopping-cart"></i>
                        <div class="notify"><span class="heartbit"></span><span class="point"></span></div>
                    </a>
                    <ul class="dropdown-menu dropdown-cart dropdown-tasks animated slideInUp">
                        @foreach (Cart::getContent() as $item)
                            <li>
                                <div class="cart-img"><img src="{{asset('storage') . '/' . $item->model->image}}" /></div>
                                <div class="cart-content">
                                    <h5>{{ $item->name }}&nbsp;</h5><small>{{ $item->quantity }} * {{ $item->price }}</small> Fcfa</div>
                            </li>
                            <li class="divider"></li>
                        @endforeach
                        @if(Cart::getContent()->count())
                            <li>
                                <a class="text-center" href="{{route('livewire.checkout')}}"> <strong>Checkout</strong> <i class="fa fa-angle-right"></i> </a>
                            </li>
                        @endif

                    </ul>
                    <!-- /.dropdown-tasks -->
                </li>
                <li class="right-side-toggle"> <a class="waves-effect waves-light" href="javascript:void(0)"><i class="ti-settings"></i></a></li>
                <!-- /.dropdown -->
            </ul>
        </div>

    </nav>
    <!-- Left navbar-header -->
    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse slimscrollsidebar">
            <div class="user-profile">
                <div class="dropdown user-pro-body">
                    <div>
                        <div class="ibox-content no-padding border-left-right">
                            @if(Auth::User()->profile->logo != null)
                                <img src="{{asset('storage') . '/' . Auth::User()->profile->logo}}" alt="user-img" class="img-circle">
                            @endif
                            @if(Auth::User()->profile->logo == null)
                                <img src="{{asset('assets/clientAsset/plugins/images/users/profile.jpg')}}" alt="user-img" class="img-circle">
                            @endif
                        </div>
                    </div>
                    <a href="#" class="dropdown-toggle u-dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{Auth::User()->username}} <span class="caret"></span></a>
                    <ul class="dropdown-menu animated flipInY">
                        <li><a href="{{route('user.customers.profile', Auth::User()->id)}}"><i class="ti-user"></i> My Profile</a></li>
                        <li role="separator" class="divider"></li>
                        <li>
                            <a href="{{route('logout')}}"><i class="fa fa-power-off"></i> Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
            <ul class="nav" id="side-menu">
                <li class="sidebar-search hidden-sm hidden-md hidden-lg">
                    <!-- input-group -->
                    <div class="input-group custom-search-form">
                        <input type="text" class="form-control" placeholder="Search...">
                        <span class="input-group-btn">
            <button class="btn btn-default" type="button"> <i class="fa fa-search"></i> </button>
            </span> </div>
                    <!-- /input-group -->
                </li>
                <li>
                    <div class="hide-menu t-earning">
                        <div id="sparkline2dash" class="m-b-10"></div><small class="db">TOTAL EARNINGS - JUNE 2017</small>
                        <h3 class="m-t-0 m-b-0">$2,478.00</h3></div>
                </li>
                <li class="nav-small-cap m-t-10">--- Main Menu</li>

                <li>
                    <a href="{{route('user.dashboard')}}" class="waves-effect">
                        <i data-icon=")" class="fa fa-home"></i>
                        <span class="hide-menu">Dashboard
                        </span>
                    </a>

                </li>
                <li>
                    <a href="{{route('client.chat.customers.index', Auth::User()->id)}}" class="waves-effect">
                        <i data-icon=")" class="linea-icon linea-basic fa-fw"></i>
                        <span class="hide-menu">Chat-message
                        </span>
                    </a>

                </li>

                <li><a href="inbox.html" class="waves-effect"><i data-icon=")" class="icon-layers"></i> <span class="hide-menu">Orders <span class="fa arrow"></span></span></a>
                    <ul class="nav nav-second-level">
                        <li><a href="{{route('user.order.all')}}">All orders</a></li>
                        <li><a href="{{route('user.order.index')}}">orders paid</a></li>
                        <li><a href="{{route('user.order.unpaid')}}">orders in progress</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <!-- Left navbar-header end -->
    <!-- Page Content -->
    <div id="page-wrapper">
        <main>
            @yield('contents')
        </main>
        <!-- /.container-fluid -->
        <footer class="footer text-center"> 2017 &copy; Elite Admin brought to you by themedesigner.in </footer>
    </div>
    <!-- /#page-wrapper -->
</div>


<script src="{{asset('assets/clientAsset/plugins/bower_components/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap Core JavaScript -->
<script src="{{asset('assets/clientAsset/bootstrap/dist/js/tether.min.js')}}"></script>
<script src="{{asset('assets/clientAsset/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/clientAsset/plugins/bower_components/bootstrap-extension/js/bootstrap-extension.min.js')}}"></script>
<!-- Menu Plugin JavaScript -->
<script src="{{asset('assets/clientAsset/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js')}}"></script>
<!--slimscroll JavaScript -->
<script src="{{asset('assets/clientAsset/js/jquery.slimscroll.js')}}"></script>
<!--Wave Effects -->
<script src="{{asset('assets/clientAsset/js/waves.js')}}"></script>
<!--Counter js -->
<script src="{{asset('assets/clientAsset/plugins/bower_components/waypoints/lib/jquery.waypoints.js')}}"></script>
<script src="{{asset('assets/clientAsset/plugins/bower_components/counterup/jquery.counterup.min.js')}}"></script>
<!--Morris JavaScript -->
<script src="{{asset('assets/clientAsset/plugins/bower_components/raphael/raphael-min.js')}}"></script>
<script src="{{asset('assets/clientAsset/plugins/bower_components/morrisjs/morris.js')}}"></script>
<!-- Custom Theme JavaScript -->
<script src="{{asset('assets/clientAsset/js/custom.min.js')}}"></script>
<script src="{{asset('assets/clientAsset/js/chat.js')}}"></script>
<!-- Sparkline chart JavaScript -->
<script src="{{asset('assets/clientAsset/plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js')}}"></script>
<script src="{{asset('assets/clientAsset/plugins/bower_components/jquery-sparkline/jquery.charts-sparkline.js')}}"></script>
<script src="{{asset('assets/clientAsset/js/dashboard1.js')}}"></script>
<!-- Sparkline chart JavaScript -->
<script src="{{asset('assets/clientAsset/plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js')}}"></script>
<script src="{{asset('assets/clientAsset/plugins/bower_components/jquery-sparkline/jquery.charts-sparkline.js')}}"></script>
<!--Style Switcher -->
<script src="{{asset('assets/clientAsset/plugins/bower_components/styleswitcher/jQuery.style.switcher.js')}}"></script>
</body>

</html>
