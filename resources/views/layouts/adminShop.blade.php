
@if(Auth::user()->user_type == "Boutique")
    <!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>EASY SHOP</title>

        <link href="{{asset('assets/shop/css/bootstrap.min.css')}}" rel="stylesheet">

        <link href="{{asset('assets/shop/css/plugins/dataTables/dataTables.bootstrap.css')}}" rel="stylesheet">
        <link href="{{asset('assets/shop/css/plugins/dataTables/dataTables.responsive.css')}}" rel="stylesheet">
        <link href="{{asset('assets/shop/css/plugins/dataTables/dataTables.tableTools.min.css')}}" rel="stylesheet">

        <link href="{{asset('assets/shop/font-awesome/css/font-awesome.css')}}" rel="stylesheet">

        <!-- Morris -->
        <link href="{{asset('assets/shop/css/plugins/morris/morris-0.4.3.min.css')}}" rel="stylesheet">

        <link href="{{asset('assets/shop/css/animate.css')}}" rel="stylesheet">
        <link href="{{asset('assets/shop/css/style.css')}}" rel="stylesheet">

    </head>
    <body>

    <div id="wrapper">
        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="side-menu">
                    <li class="nav-header">
                        <div class="dropdown profile-element"> <span>
                            <img alt="image" class="img-circle" style="height: 60px; width: 60px;" src="{{asset('storage' . '/' . Auth::user()->profile->logo ?? 'assets/shop/img/profile_small.jpg')}}" />
                             </span>
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">{{Auth::user()->username}}</strong>
                             </span> <span class="text-muted text-xs block">Art Director <b class="caret"></b></span> </span> </a>
                            <ul class="dropdown-menu animated fadeInRight m-t-xs">
                                <li><a href="{{route('user.profile', Auth::user()->id)}}">Profile</a></li>
                                <li><a href="contacts.html">Contacts</a></li>
                                <li><a href="mailbox.html">Mailbox</a></li>
                                <li class="divider"></li>
                                <li><a href="{{route('logout')}}">Logout</a></li>
                            </ul>
                        </div>
                        <div class="logo-element">
                            IN+
                        </div>
                    </li>
                    <li class="active">
                        <a href="{{route('user.dashboard')}}"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboard</span></a>
                    </li>
                    <li class="active">
                        <a href="{{route('user.shop', Auth::user()->username)}}"><i class="fa fa-th-large"></i> <span class="nav-label">My shop</span></a>
                    </li>
                    <li>
                        <a href="{{route('user.Category.index')}}"><i class="fa fa-diamond"></i> <span class="nav-label">Category</span> <span class="label label-primary pull-right">NEW</span></a>
                    </li>
                    <li>
                        <a href="{{route('user.product.index')}}"><i class="fa fa-flask"></i> <span class="nav-label">Product</span> </a>
                    </li>
                    <li>
                        <a href="{{route('user.order.index')}}"><i class="fa fa-bar-chart-o"></i> <span class="nav-label">Orders</span></a>
                    </li>
                    <li>
                        <a href="mailbox.html"><i class="fa fa-envelope"></i> <span class="nav-label">Mailbox </span><span class="label label-warning pull-right">16/24</span></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-edit"></i> <span class="nav-label">Forms</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="form_basic.html">Basic form</a></li>
                            <li><a href="form_advanced.html">Advanced Plugins</a></li>
                            <li><a href="form_wizard.html">Wizard</a></li>
                            <li><a href="form_file_upload.html">File Upload</a></li>
                            <li><a href="form_editors.html">Text Editor</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-desktop"></i> <span class="nav-label">App Views</span>  <span class="pull-right label label-primary">SPECIAL</span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="contacts.html">Contacts</a></li>
                            <li><a href="profile.html">Profile</a></li>
                            <li><a href="projects.html">Projects</a></li>
                            <li><a href="project_detail.html">Project detail</a></li>
                            <li><a href="file_manager.html">File manager</a></li>
                            <li><a href="calendar.html">Calendar</a></li>
                            <li><a href="faq.html">FAQ</a></li>
                            <li><a href="timeline.html">Timeline</a></li>
                            <li><a href="pin_board.html">Pin board</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-files-o"></i> <span class="nav-label">Other Pages</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="search_results.html">Search results</a></li>
                            <li><a href="lockscreen.html">Lockscreen</a></li>
                            <li><a href="invoice.html">Invoice</a></li>
                            <li><a href="login.html">Login</a></li>
                            <li><a href="login_two_columns.html">Login v.2</a></li>
                            <li><a href="register.html">Register</a></li>
                            <li><a href="404.html">404 Page</a></li>
                            <li><a href="500.html">500 Page</a></li>
                            <li><a href="empty_page.html">Empty page</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-globe"></i> <span class="nav-label">Miscellaneous</span><span class="label label-info pull-right">NEW</span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="toastr_notifications.html">Notification</a></li>
                            <li><a href="nestable_list.html">Nestable list</a></li>
                            <li><a href="timeline_2.html">Timeline v.2</a></li>
                            <li><a href="forum_main.html">Forum view</a></li>
                            <li><a href="google_maps.html">Google maps</a></li>
                            <li><a href="code_editor.html">Code editor</a></li>
                            <li><a href="modal_window.html">Modal window</a></li>
                            <li><a href="validation.html">Validation</a></li>
                            <li><a href="tree_view.html">Tree view</a></li>
                            <li><a href="chat_view.html">Chat view</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-flask"></i> <span class="nav-label">UI Elements</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="typography.html">Typography</a></li>
                            <li><a href="icons.html">Icons</a></li>
                            <li><a href="draggable_panels.html">Draggable Panels</a></li>
                            <li><a href="buttons.html">Buttons</a></li>
                            <li><a href="video.html">Video</a></li>
                            <li><a href="tabs_panels.html">Tabs & Panels</a></li>
                            <li><a href="notifications.html">Notifications & Tooltips</a></li>
                            <li><a href="badges_labels.html">Badges, Labels, Progress</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="grid_options.html"><i class="fa fa-laptop"></i> <span class="nav-label">Grid options</span></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-table"></i> <span class="nav-label">Tables</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="table_basic.html">Static Tables</a></li>
                            <li><a href="table_data_tables.html">Data Tables</a></li>
                            <li><a href="jq_grid.html">jqGrid</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-picture-o"></i> <span class="nav-label">Gallery</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="basic_gallery.html">Lightbox Gallery</a></li>
                            <li><a href="carousel.html">Bootstrap Carusela</a></li>

                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-sitemap"></i> <span class="nav-label">Menu Levels </span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="#">Third Level <span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li>
                                        <a href="#">Third Level Item</a>
                                    </li>
                                    <li>
                                        <a href="#">Third Level Item</a>
                                    </li>
                                    <li>
                                        <a href="#">Third Level Item</a>
                                    </li>

                                </ul>
                            </li>
                            <li><a href="#">Second Level Item</a></li>
                            <li>
                                <a href="#">Second Level Item</a></li>
                            <li>
                                <a href="#">Second Level Item</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="css_animation.html"><i class="fa fa-magic"></i> <span class="nav-label">CSS Animations </span><span class="label label-info pull-right">62</span></a>
                    </li>
                    <li class="landing_link">
                        <a target="_blank" href="Landing_page/index.html"><i class="fa fa-star"></i> <span class="nav-label">Landing Page</span> <span class="label label-warning pull-right">NEW</span></a>
                    </li>
                    <li class="special_link">
                        <a href="package.html"><i class="fa fa-database"></i> <span class="nav-label">Package</span></a>
                    </li>
                </ul>

            </div>
        </nav>

        <div id="page-wrapper" class="gray-bg">
            <div class="row border-bottom">
                <nav class="navbar navbar-static-top white-bg" role="navigation" style="margin-bottom: 0">
                    <div class="navbar-header">
                        <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
                        <form role="search" class="navbar-form-custom" method="post" action="search_results.html">
                            <div class="form-group">
                                <input type="text" placeholder="Search for something..." class="form-control" name="top-search" id="top-search">
                            </div>
                        </form>
                    </div>
                    <ul class="nav navbar-top-links navbar-right">
                        <li>
                            <span class="m-r-sm text-muted welcome-message">Welcome to EASY this is your dashboard.</span>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                                <i class="fa fa-envelope"></i>  <span class="label label-warning">16</span>
                            </a>
                            <ul class="dropdown-menu dropdown-messages">
                                <li>
                                    <div class="dropdown-messages-box">
                                        <a href="profile.html" class="pull-left">
                                            <img alt="image" class="img-circle" src="img/a7.jpg">
                                        </a>
                                        <div>
                                            <small class="pull-right">46h ago</small>
                                            <strong>Mike Loreipsum</strong> started following <strong>Monica Smith</strong>. <br>
                                            <small class="text-muted">3 days ago at 7:58 pm - 10.06.2014</small>
                                        </div>
                                    </div>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <div class="dropdown-messages-box">
                                        <a href="profile.html" class="pull-left">
                                            <img alt="image" class="img-circle" src="img/a4.jpg">
                                        </a>
                                        <div>
                                            <small class="pull-right text-navy">5h ago</small>
                                            <strong>Chris Johnatan Overtunk</strong> started following <strong>Monica Smith</strong>. <br>
                                            <small class="text-muted">Yesterday 1:21 pm - 11.06.2014</small>
                                        </div>
                                    </div>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <div class="dropdown-messages-box">
                                        <a href="profile.html" class="pull-left">
                                            <img alt="image" class="img-circle" src="img/profile.jpg">
                                        </a>
                                        <div>
                                            <small class="pull-right">23h ago</small>
                                            <strong>Monica Smith</strong> love <strong>Kim Smith</strong>. <br>
                                            <small class="text-muted">2 days ago at 2:30 am - 11.06.2014</small>
                                        </div>
                                    </div>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <div class="text-center link-block">
                                        <a href="mailbox.html">
                                            <i class="fa fa-envelope"></i> <strong>Read All Messages</strong>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                                <i class="fa fa-bell"></i>  <span class="label label-primary">8</span>
                            </a>
                            <ul class="dropdown-menu dropdown-alerts">
                                <li>
                                    <a href="mailbox.html">
                                        <div>
                                            <i class="fa fa-envelope fa-fw"></i> You have 16 messages
                                            <span class="pull-right text-muted small">4 minutes ago</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href="profile.html">
                                        <div>
                                            <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                            <span class="pull-right text-muted small">12 minutes ago</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href="grid_options.html">
                                        <div>
                                            <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                            <span class="pull-right text-muted small">4 minutes ago</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <div class="text-center link-block">
                                        <a href="notifications.html">
                                            <strong>See All Alerts</strong>
                                            <i class="fa fa-angle-right"></i>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <i class="fa fa-sign-out"></i> Log out
                            </a>
                            <form id="logout-form" action="{{route('logout')}}" method="post">
                                @csrf
                            </form>
                        </li>
                    </ul>

                </nav>
            </div>

            <main>
                @yield('contents')
            </main>

            <div class="footer">
                <div class="pull-right">
                    10GB of <strong>250GB</strong> Free.
                </div>
                <div>
                    <strong>Copyright</strong> Example Company &copy; 2014-2015
                </div>
            </div>
        </div>


        <script src="{{asset('assets/shop/js/jquery-2.1.1.js')}}"></script>
        <script src="{{asset('assets/shop/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('assets/shop/js/plugins/metisMenu/jquery.metisMenu.js')}}"></script>
        <script src="{{asset('assets/shop/js/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>

        <!-- Flot -->
        <script src="{{asset('assets/shop/js/plugins/flot/jquery.flot.js')}}"></script>
        <script src="{{asset('assets/shop/js/plugins/flot/jquery.flot.tooltip.min.js')}}"></script>
        <script src="{{asset('assets/shop/js/plugins/flot/jquery.flot.spline.js')}}"></script>
        <script src="{{asset('assets/shop/js/plugins/flot/jquery.flot.resize.js')}}"></script>
        <script src="{{asset('assets/shop/js/plugins/flot/jquery.flot.pie.js')}}"></script>
        <script src="{{asset('assets/shop/js/plugins/flot/jquery.flot.symbol.js')}}"></script>
        <script src="{{asset('assets/shop/js/plugins/flot/curvedLines.js')}}"></script>

        <!-- Peity -->
        <script src="{{asset('assets/shop/js/plugins/peity/jquery.peity.min.js')}}"></script>
        <script src="{{asset('assets/shop/js/demo/peity-demo.js')}}"></script>

        <!-- Custom and plugin javascript -->
        <script src="{{asset('assets/shop/js/inspinia.js')}}"></script>
        <script src="{{asset('assets/shop/js/plugins/pace/pace.min.js')}}"></script>

        <!-- jQuery UI -->
        <script src="{{asset('assets/shop/js/plugins/jquery-ui/jquery-ui.min.js')}}"></script>

        <!-- Jvectormap -->
        <script src="{{asset('assets/shop/js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
        <script src="{{asset('assets/shop/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>

        <!-- Sparkline -->
        <script src="{{asset('assets/shop/js/plugins/sparkline/jquery.sparkline.min.js')}}"></script>

        <!-- Sparkline demo data  -->
        <script src="{{asset('assets/shop/js/demo/sparkline-demo.js')}}"></script>

        <!-- ChartJS-->
        <script src="{{asset('assets/shop/js/plugins/chartJs/Chart.min.js')}}"></script>

        <script>
            $(document).ready(function() {


                var d1 = [[1262304000000, 6], [1264982400000, 3057], [1267401600000, 20434], [1270080000000, 31982], [1272672000000, 26602], [1275350400000, 27826], [1277942400000, 24302], [1280620800000, 24237], [1283299200000, 21004], [1285891200000, 12144], [1288569600000, 10577], [1291161600000, 10295]];
                var d2 = [[1262304000000, 5], [1264982400000, 200], [1267401600000, 1605], [1270080000000, 6129], [1272672000000, 11643], [1275350400000, 19055], [1277942400000, 30062], [1280620800000, 39197], [1283299200000, 37000], [1285891200000, 27000], [1288569600000, 21000], [1291161600000, 17000]];

                var data1 = [
                    { label: "Data 1", data: d1, color: '#17a084'},
                    { label: "Data 2", data: d2, color: '#127e68' }
                ];
                $.plot($("#flot-chart1"), data1, {
                    xaxis: {
                        tickDecimals: 0
                    },
                    series: {
                        lines: {
                            show: true,
                            fill: true,
                            fillColor: {
                                colors: [{
                                    opacity: 1
                                }, {
                                    opacity: 1
                                }]
                            },
                        },
                        points: {
                            width: 0.1,
                            show: false
                        },
                    },
                    grid: {
                        show: false,
                        borderWidth: 0
                    },
                    legend: {
                        show: false,
                    }
                });

                var lineData = {
                    labels: ["January", "February", "March", "April", "May", "June", "July"],
                    datasets: [
                        {
                            label: "Example dataset",
                            fillColor: "rgba(220,220,220,0.5)",
                            strokeColor: "rgba(220,220,220,1)",
                            pointColor: "rgba(220,220,220,1)",
                            pointStrokeColor: "#fff",
                            pointHighlightFill: "#fff",
                            pointHighlightStroke: "rgba(220,220,220,1)",
                            data: [65, 59, 40, 51, 36, 25, 40]
                        },
                        {
                            label: "Example dataset",
                            fillColor: "rgba(26,179,148,0.5)",
                            strokeColor: "rgba(26,179,148,0.7)",
                            pointColor: "rgba(26,179,148,1)",
                            pointStrokeColor: "#fff",
                            pointHighlightFill: "#fff",
                            pointHighlightStroke: "rgba(26,179,148,1)",
                            data: [48, 48, 60, 39, 56, 37, 30]
                        }
                    ]
                };

                var lineOptions = {
                    scaleShowGridLines: true,
                    scaleGridLineColor: "rgba(0,0,0,.05)",
                    scaleGridLineWidth: 1,
                    bezierCurve: true,
                    bezierCurveTension: 0.4,
                    pointDot: true,
                    pointDotRadius: 4,
                    pointDotStrokeWidth: 1,
                    pointHitDetectionRadius: 20,
                    datasetStroke: true,
                    datasetStrokeWidth: 2,
                    datasetFill: true,
                    responsive: true,
                };


                var ctx = document.getElementById("lineChart").getContext("2d");
                var myNewChart = new Chart(ctx).Line(lineData, lineOptions);

            });
        </script>
    </body>
    </html>
@endif
@if(Auth::user()->user_type == "Service")
    <!DOCTYPE html>
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
                        <div class="user-info">
                            <img src="{{asset('assets/service/images/resources/user.png')}}" alt="">
{{--                            <a href="#" title="">{{ auth()->user()->username }}</a>--}}
                            <i class="la la-sort-down"></i>
                        </div>
                        <div class="user-account-settingss" id="users">
                            <h3>{{ auth()->user()->username }}</h3>
                            <ul class="us-links">
                                <li><a href="{{ route('service-profile') }}" title="">My profile</a></li>
                                <li><a href="{{ route('service-setting') }}" title="">Account Setting</a></li>
                            </ul>
                            <h3 class="tc"><a href="{{route('logout')}}" title="">Logout</a></h3>
                            <form id="logout-form" action="{{route('logout')}}" method="post">
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
@endif
@if(Auth::user()->user_type == "Client")
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
@endif
