
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
    <html>
    <head>
        <meta charset="UTF-8">
        <title>WorkWise Html Template</title>
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
                                <a href="index.html" title="">
                                    <span><img src="{{asset('assets/service/images/icon1.png')}}" alt=""></span>
                                    Home
                                </a>
                            </li>
                            <li>
                                <a href="companies.html" title="">
                                    <span><img src="{{asset('assets/service/images/icon2.png')}}" alt=""></span>
                                    Companies
                                </a>
                                <ul>
                                    <li><a href="companies.html" title="">Companies</a></li>
                                    <li><a href="company-profile.html" title="">Company Profile</a></li>
                                </ul>
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
                    <div class="menu-btn">
                        <a href="#" title=""><i class="fa fa-bars"></i></a>
                    </div>
                    <div class="user-account">
                        <div class="user-info">
                            <img src="{{asset('assets/service/images/resources/user.png')}}" alt="">
                            <a href="#" title="">John</a>
                            <i class="la la-sort-down"></i>
                        </div>
                        <div class="user-account-settingss" id="users">
                            <h3>Online Status</h3>
                            <ul class="on-off-status">
                                <li>
                                    <div class="fgt-sec">
                                        <input type="radio" name="cc" id="c5">
                                        <label for="c5">
                                            <span></span>
                                        </label>
                                        <small>Online</small>
                                    </div>
                                </li>
                                <li>
                                    <div class="fgt-sec">
                                        <input type="radio" name="cc" id="c6">
                                        <label for="c6">
                                            <span></span>
                                        </label>
                                        <small>Offline</small>
                                    </div>
                                </li>
                            </ul>
                            <h3>Custom Status</h3>
                            <div class="search_form">
                                <form>
                                    <input type="text" name="search">
                                    <button type="submit">Ok</button>
                                </form>
                            </div>
                            <h3>Setting</h3>
                            <ul class="us-links">
                                <li><a href="profile-account-setting.html" title="">Account Setting</a></li>
                                <li><a href="#" title="">Privacy</a></li>
                                <li><a href="#" title="">Faqs</a></li>
                                <li><a href="#" title="">Terms & Conditions</a></li>
                            </ul>
                            <h3 class="tc"><a href="sign-in.html" title="">Logout</a></h3>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <main>
            <div class="main-section">
                <div class="container">
                    <div class="main-section-data">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="filter-secs">
                                    <div class="filter-heading">
                                        <h3>Filters</h3>
                                        <a href="#" title="">Clear all filters</a>
                                    </div>
                                    <div class="paddy">
                                        <div class="filter-dd">
                                            <div class="filter-ttl">
                                                <h3>Skills</h3>
                                                <a href="#" title="">Clear</a>
                                            </div>
                                            <form>
                                                <input type="text" name="search-skills" placeholder="Search skills">
                                            </form>
                                        </div>
                                        <div class="filter-dd">
                                            <div class="filter-ttl">
                                                <h3>Availabilty</h3>
                                                <a href="#" title="">Clear</a>
                                            </div>
                                            <ul class="avail-checks">
                                                <li>
                                                    <input type="radio" name="cc" id="c1">
                                                    <label for="c1">
                                                        <span></span>
                                                    </label>
                                                    <small>Hourly</small>
                                                </li>
                                                <li>
                                                    <input type="radio" name="cc" id="c2">
                                                    <label for="c2">
                                                        <span></span>
                                                    </label>
                                                    <small>Part Time</small>
                                                </li>
                                                <li>
                                                    <input type="radio" name="cc" id="c3">
                                                    <label for="c3">
                                                        <span></span>
                                                    </label>
                                                    <small>Full Time</small>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="filter-dd">
                                            <div class="filter-ttl">
                                                <h3>Job Type</h3>
                                                <a href="#" title="">Clear</a>
                                            </div>
                                            <form class="job-tp">
                                                <select>
                                                    <option>Select a job type</option>
                                                    <option>Select a job type</option>
                                                    <option>Select a job type</option>
                                                    <option>Select a job type</option>
                                                </select>
                                                <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                            </form>
                                        </div>
                                        <div class="filter-dd">
                                            <div class="filter-ttl">
                                                <h3>Pay Rate / Hr ($)</h3>
                                                <a href="#" title="">Clear</a>
                                            </div>
                                            <div class="rg-slider">
                                                <input class="rn-slider slider-input" type="hidden" value="5,50" style="display: none;"><div class="slider-container theme-green" style="width: 300px;">			<div class="back-bar">                <div class="selected-bar" style="width: 93px; left: 10.5px;"></div>                <div class="pointer low" style="left: 4px;"></div><div class="pointer-label low" style="left: 0px;">5</div>                <div class="pointer high" style="left: 97px;"></div><div class="pointer-label high" style="left: 78px;">50</div>                <div class="clickable-dummy"></div>            </div>            <div class="scale"></div>		</div>
                                            </div>
                                            <div class="rg-limit">
                                                <h4>1</h4>
                                                <h4>100+</h4>
                                            </div>
                                        </div>
                                        <div class="filter-dd">
                                            <div class="filter-ttl">
                                                <h3>Experience Level</h3>
                                                <a href="#" title="">Clear</a>
                                            </div>
                                            <form class="job-tp">
                                                <select>
                                                    <option>Select a experience level</option>
                                                    <option>3 years</option>
                                                    <option>4 years</option>
                                                    <option>5 years</option>
                                                </select>
                                                <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                            </form>
                                        </div>
                                        <div class="filter-dd">
                                            <div class="filter-ttl">
                                                <h3>Countries</h3>
                                                <a href="#" title="">Clear</a>
                                            </div>
                                            <form class="job-tp">
                                                <select>
                                                    <option>Select a country</option>
                                                    <option>United Kingdom</option>
                                                    <option>United States</option>
                                                    <option>Russia</option>
                                                </select>
                                                <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="main-ws-sec">
                                    <div class="posts-section">
                                        <div class="post-bar">
                                            <div class="post_topbar">
                                                <div class="usy-dt">
                                                    <img src="{{asset('assets/service/images/resources/us-pic.png')}}" alt="">
                                                    <div class="usy-name">
                                                        <h3>John Doe</h3>
                                                        <span><img src="{{asset('assets/service/images/clock.png')}}" alt="">3 min ago</span>
                                                    </div>
                                                </div>
                                                <div class="ed-opts">
                                                    <a href="#" title="" class="ed-opts-open"><i class="la la-ellipsis-v"></i></a>
                                                    <ul class="ed-options">
                                                        <li><a href="#" title="">Edit Post</a></li>
                                                        <li><a href="#" title="">Unsaved</a></li>
                                                        <li><a href="#" title="">Unbid</a></li>
                                                        <li><a href="#" title="">Close</a></li>
                                                        <li><a href="#" title="">Hide</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="epi-sec">
                                                <ul class="descp">
                                                    <li><img src="{{asset('assets/service/images/icon8.png')}}" alt=""><span>Epic Coder</span></li>
                                                    <li><img src="{{asset('assets/service/images/icon9.png')}}" alt=""><span>India</span></li>
                                                </ul>
                                                <ul class="bk-links">
                                                    <li><a href="#" title=""><i class="la la-bookmark"></i></a></li>
                                                    <li><a href="#" title=""><i class="la la-envelope"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="job_descp">
                                                <h3>Senior Wordpress Developer</h3>
                                                <ul class="job-dt">
                                                    <li><a href="#" title="">Full Time</a></li>
                                                    <li><span>$30 / hr</span></li>
                                                </ul>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam luctus hendrerit metus, ut ullamcorper quam finibus at. Etiam id magna sit amet... <a href="#" title="">view more</a></p>
                                                <ul class="skill-tags">
                                                    <li><a href="#" title="">HTML</a></li>
                                                    <li><a href="#" title="">PHP</a></li>
                                                    <li><a href="#" title="">CSS</a></li>
                                                    <li><a href="#" title="">Javascript</a></li>
                                                    <li><a href="#" title="">Wordpress</a></li>
                                                </ul>
                                            </div>
                                            <div class="job-status-bar">
                                                <ul class="like-com">
                                                    <li>
                                                        <a href="#" class="active"><i class="fas fa-heart"></i> Like</a>
                                                        <img src="{{asset('assets/service/images/liked-img.png')}}" alt="">
                                                        <span>25</span>
                                                    </li>
                                                    <li><a href="#" class="com"><i class="fas fa-comment-alt"></i> Comments 15</a></li>
                                                </ul>
                                                <a href="#"><i class="fas fa-eye"></i>Views 50</a>
                                            </div>
                                        </div>
                                        <div class="post-bar">
                                            <div class="post_topbar">
                                                <div class="usy-dt">
                                                    <img src="{{asset('assets/service/images/resources/us-pic.png')}}" alt="">
                                                    <div class="usy-name">
                                                        <h3>John Doe</h3>
                                                        <span><img src="{{asset('assets/service/images/clock.png')}}" alt="">3 min ago</span>
                                                    </div>
                                                </div>
                                                <div class="ed-opts">
                                                    <a href="#" title="" class="ed-opts-open"><i class="la la-ellipsis-v"></i></a>
                                                    <ul class="ed-options">
                                                        <li><a href="#" title="">Edit Post</a></li>
                                                        <li><a href="#" title="">Unsaved</a></li>
                                                        <li><a href="#" title="">Unbid</a></li>
                                                        <li><a href="#" title="">Close</a></li>
                                                        <li><a href="#" title="">Hide</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="epi-sec">
                                                <ul class="descp">
                                                    <li><img src="{{asset('assets/service/images/icon8.png')}}" alt=""><span>Epic Coder</span></li>
                                                    <li><img src="{{asset('assets/service/images/icon9.png')}}" alt=""><span>India</span></li>
                                                </ul>
                                                <ul class="bk-links">
                                                    <li><a href="#" title=""><i class="la la-bookmark"></i></a></li>
                                                    <li><a href="#" title=""><i class="la la-envelope"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="job_descp">
                                                <h3>Senior Wordpress Developer</h3>
                                                <ul class="job-dt">
                                                    <li><a href="#" title="">Full Time</a></li>
                                                    <li><span>$30 / hr</span></li>
                                                </ul>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam luctus hendrerit metus, ut ullamcorper quam finibus at. Etiam id magna sit amet... <a href="#" title="">view more</a></p>
                                                <ul class="skill-tags">
                                                    <li><a href="#" title="">HTML</a></li>
                                                    <li><a href="#" title="">PHP</a></li>
                                                    <li><a href="#" title="">CSS</a></li>
                                                    <li><a href="#" title="">Javascript</a></li>
                                                    <li><a href="#" title="">Wordpress</a></li>
                                                </ul>
                                            </div>
                                            <div class="job-status-bar">
                                                <ul class="like-com">
                                                    <li>
                                                        <a href="#" class="active"><i class="fas fa-heart"></i> Like</a>
                                                        <img src="{{asset('assets/service/images/liked-img.png')}}" alt="">
                                                        <span>25</span>
                                                    </li>
                                                    <li><a href="#" class="com"><i class="fas fa-comment-alt"></i> Comments 15</a></li>
                                                </ul>
                                                <a href="#"><i class="fas fa-eye"></i>Views 50</a>
                                            </div>
                                        </div>
                                        <div class="post-bar">
                                            <div class="post_topbar">
                                                <div class="usy-dt">
                                                    <img src="{{asset('assets/service/images/resources/us-pic.png')}}" alt="">
                                                    <div class="usy-name">
                                                        <h3>John Doe</h3>
                                                        <span><img src="{{asset('assets/service/images/clock.png')}}" alt="">3 min ago</span>
                                                    </div>
                                                </div>
                                                <div class="ed-opts">
                                                    <a href="#" title="" class="ed-opts-open"><i class="la la-ellipsis-v"></i></a>
                                                    <ul class="ed-options">
                                                        <li><a href="#" title="">Edit Post</a></li>
                                                        <li><a href="#" title="">Unsaved</a></li>
                                                        <li><a href="#" title="">Unbid</a></li>
                                                        <li><a href="#" title="">Close</a></li>
                                                        <li><a href="#" title="">Hide</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="epi-sec">
                                                <ul class="descp">
                                                    <li><img src="{{asset('assets/service/images/icon8.png')}}" alt=""><span>Epic Coder</span></li>
                                                    <li><img src="{{asset('assets/service/images/icon9.png')}}" alt=""><span>India</span></li>
                                                </ul>
                                                <ul class="bk-links">
                                                    <li><a href="#" title=""><i class="la la-bookmark"></i></a></li>
                                                    <li><a href="#" title=""><i class="la la-envelope"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="job_descp">
                                                <h3>Senior Wordpress Developer</h3>
                                                <ul class="job-dt">
                                                    <li><a href="#" title="">Full Time</a></li>
                                                    <li><span>$30 / hr</span></li>
                                                </ul>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam luctus hendrerit metus, ut ullamcorper quam finibus at. Etiam id magna sit amet... <a href="#" title="">view more</a></p>
                                                <ul class="skill-tags">
                                                    <li><a href="#" title="">HTML</a></li>
                                                    <li><a href="#" title="">PHP</a></li>
                                                    <li><a href="#" title="">CSS</a></li>
                                                    <li><a href="#" title="">Javascript</a></li>
                                                    <li><a href="#" title="">Wordpress</a></li>
                                                </ul>
                                            </div>
                                            <div class="job-status-bar">
                                                <ul class="like-com">
                                                    <li>
                                                        <a href="#" class="active"><i class="fas fa-heart"></i> Like</a>
                                                        <img src="images/liked-img.png" alt="">
                                                        <span>25</span>
                                                    </li>
                                                    <li><a href="#" class="com"><i class="fas fa-comment-alt"></i> Comments 15</a></li>
                                                </ul>
                                                <a href="#"><i class="fas fa-eye"></i>Views 50</a>
                                            </div>
                                        </div>
                                        <div class="posty">
                                            <div class="post-bar no-margin">
                                                <div class="post_topbar">
                                                    <div class="usy-dt">
                                                        <img src="images/resources/us-pc2.png" alt="">
                                                        <div class="usy-name">
                                                            <h3>John Doe</h3>
                                                            <span><img src="images/clock.png" alt="">3 min ago</span>
                                                        </div>
                                                    </div>
                                                    <div class="ed-opts">
                                                        <a href="#" title="" class="ed-opts-open"><i class="la la-ellipsis-v"></i></a>
                                                        <ul class="ed-options">
                                                            <li><a href="#" title="">Edit Post</a></li>
                                                            <li><a href="#" title="">Unsaved</a></li>
                                                            <li><a href="#" title="">Unbid</a></li>
                                                            <li><a href="#" title="">Close</a></li>
                                                            <li><a href="#" title="">Hide</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="epi-sec">
                                                    <ul class="descp">
                                                        <li><img src="images/icon8.png" alt=""><span>Epic Coder</span></li>
                                                        <li><img src="images/icon9.png" alt=""><span>India</span></li>
                                                    </ul>
                                                    <ul class="bk-links">
                                                        <li><a href="#" title=""><i class="la la-bookmark"></i></a></li>
                                                        <li><a href="#" title=""><i class="la la-envelope"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="job_descp">
                                                    <h3>Senior Wordpress Developer</h3>
                                                    <ul class="job-dt">
                                                        <li><a href="#" title="">Full Time</a></li>
                                                        <li><span>$30 / hr</span></li>
                                                    </ul>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam luctus hendrerit metus, ut ullamcorper quam finibus at. Etiam id magna sit amet... <a href="#" title="">view more</a></p>
                                                    <ul class="skill-tags">
                                                        <li><a href="#" title="">HTML</a></li>
                                                        <li><a href="#" title="">PHP</a></li>
                                                        <li><a href="#" title="">CSS</a></li>
                                                        <li><a href="#" title="">Javascript</a></li>
                                                        <li><a href="#" title="">Wordpress</a></li>
                                                    </ul>
                                                </div>
                                                <div class="job-status-bar">
                                                    <ul class="like-com">
                                                        <li>
                                                            <a href="#" class="active"><i class="fas fa-heart"></i> Like</a>
                                                            <img src="images/liked-img.png" alt="">
                                                            <span>25</span>
                                                        </li>
                                                        <li><a href="#" class="com"><i class="fas fa-comment-alt"></i> Comments 15</a></li>
                                                    </ul>
                                                    <a href="#"><i class="fas fa-eye"></i>Views 50</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="process-comm">
                                            <div class="spinner">
                                                <div class="bounce1"></div>
                                                <div class="bounce2"></div>
                                                <div class="bounce3"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="right-sidebar">
                                    <div class="widget widget-about">
                                        <img src="images/wd-logo.png" alt="">
                                        <h3>Track Time on Workwise</h3>
                                        <span>Pay only for the Hours worked</span>
                                        <div class="sign_link">
                                            <h3><a href="sign-in.html" title="">Sign up</a></h3>
                                            <a href="#" title="">Learn More</a>
                                        </div>
                                    </div>
                                    <div class="widget widget-jobs">
                                        <div class="sd-title">
                                            <h3>Top Jobs</h3>
                                            <i class="la la-ellipsis-v"></i>
                                        </div>
                                        <div class="jobs-list">
                                            <div class="job-info">
                                                <div class="job-details">
                                                    <h3>Senior Product Designer</h3>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit..</p>
                                                </div>
                                                <div class="hr-rate">
                                                    <span>$25/hr</span>
                                                </div>
                                            </div>
                                            <div class="job-info">
                                                <div class="job-details">
                                                    <h3>Senior UI / UX Designer</h3>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit..</p>
                                                </div>
                                                <div class="hr-rate">
                                                    <span>$25/hr</span>
                                                </div>
                                            </div>
                                            <div class="job-info">
                                                <div class="job-details">
                                                    <h3>Junior Seo Designer</h3>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit..</p>
                                                </div>
                                                <div class="hr-rate">
                                                    <span>$25/hr</span>
                                                </div>
                                            </div>
                                            <div class="job-info">
                                                <div class="job-details">
                                                    <h3>Senior PHP Designer</h3>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit..</p>
                                                </div>
                                                <div class="hr-rate">
                                                    <span>$25/hr</span>
                                                </div>
                                            </div>
                                            <div class="job-info">
                                                <div class="job-details">
                                                    <h3>Senior Developer Designer</h3>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit..</p>
                                                </div>
                                                <div class="hr-rate">
                                                    <span>$25/hr</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="widget widget-jobs">
                                        <div class="sd-title">
                                            <h3>Most Viewed This Week</h3>
                                            <i class="la la-ellipsis-v"></i>
                                        </div>
                                        <div class="jobs-list">
                                            <div class="job-info">
                                                <div class="job-details">
                                                    <h3>Senior Product Designer</h3>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit..</p>
                                                </div>
                                                <div class="hr-rate">
                                                    <span>$25/hr</span>
                                                </div>
                                            </div>
                                            <div class="job-info">
                                                <div class="job-details">
                                                    <h3>Senior UI / UX Designer</h3>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit..</p>
                                                </div>
                                                <div class="hr-rate">
                                                    <span>$25/hr</span>
                                                </div>
                                            </div>
                                            <div class="job-info">
                                                <div class="job-details">
                                                    <h3>Junior Seo Designer</h3>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit..</p>
                                                </div>
                                                <div class="hr-rate">
                                                    <span>$25/hr</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
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
        <div class="chatbox-list">
            <div class="chatbox">
                <div class="chat-mg">
                    <a href="#" title=""><img src="images/resources/usr-img1.png" alt=""></a>
                    <span>2</span>
                </div>
                <div class="conversation-box">
                    <div class="con-title mg-3">
                        <div class="chat-user-info">
                            <img src="images/resources/us-img1.png" alt="">
                            <h3>John Doe <span class="status-info"></span></h3>
                        </div>
                        <div class="st-icons">
                            <a href="#" title=""><i class="la la-cog"></i></a>
                            <a href="#" title="" class="close-chat"><i class="la la-minus-square"></i></a>
                            <a href="#" title="" class="close-chat"><i class="la la-close"></i></a>
                        </div>
                    </div>
                    <div class="chat-hist mCustomScrollbar" data-mcs-theme="dark">
                        <div class="chat-msg">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec rutrum congue leo eget malesuada. Vivamus suscipit tortor eget felis porttitor.</p>
                            <span>Sat, Aug 23, 1:10 PM</span>
                        </div>
                        <div class="date-nd">
                            <span>Sunday, August 24</span>
                        </div>
                        <div class="chat-msg st2">
                            <p>Cras ultricies ligula.</p>
                            <span>5 minutes ago</span>
                        </div>
                        <div class="chat-msg">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec rutrum congue leo eget malesuada. Vivamus suscipit tortor eget felis porttitor.</p>
                            <span>Sat, Aug 23, 1:10 PM</span>
                        </div>
                    </div>
                    <div class="typing-msg">
                        <form>
                            <textarea placeholder="Type a message here"></textarea>
                            <button type="submit"><i class="fa fa-send"></i></button>
                        </form>
                        <ul class="ft-options">
                            <li><a href="#" title=""><i class="la la-smile-o"></i></a></li>
                            <li><a href="#" title=""><i class="la la-camera"></i></a></li>
                            <li><a href="#" title=""><i class="fa fa-paperclip"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="chatbox">
                <div class="chat-mg">
                    <a href="#" title=""><img src="images/resources/usr-img2.png" alt=""></a>
                </div>
                <div class="conversation-box">
                    <div class="con-title mg-3">
                        <div class="chat-user-info">
                            <img src="images/resources/us-img1.png" alt="">
                            <h3>John Doe <span class="status-info"></span></h3>
                        </div>
                        <div class="st-icons">
                            <a href="#" title=""><i class="la la-cog"></i></a>
                            <a href="#" title="" class="close-chat"><i class="la la-minus-square"></i></a>
                            <a href="#" title="" class="close-chat"><i class="la la-close"></i></a>
                        </div>
                    </div>
                    <div class="chat-hist mCustomScrollbar" data-mcs-theme="dark">
                        <div class="chat-msg">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec rutrum congue leo eget malesuada. Vivamus suscipit tortor eget felis porttitor.</p>
                            <span>Sat, Aug 23, 1:10 PM</span>
                        </div>
                        <div class="date-nd">
                            <span>Sunday, August 24</span>
                        </div>
                        <div class="chat-msg st2">
                            <p>Cras ultricies ligula.</p>
                            <span>5 minutes ago</span>
                        </div>
                        <div class="chat-msg">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec rutrum congue leo eget malesuada. Vivamus suscipit tortor eget felis porttitor.</p>
                            <span>Sat, Aug 23, 1:10 PM</span>
                        </div>
                    </div>
                    <div class="typing-msg">
                        <form>
                            <textarea placeholder="Type a message here"></textarea>
                            <button type="submit"><i class="fa fa-send"></i></button>
                        </form>
                        <ul class="ft-options">
                            <li><a href="#" title=""><i class="la la-smile-o"></i></a></li>
                            <li><a href="#" title=""><i class="la la-camera"></i></a></li>
                            <li><a href="#" title=""><i class="fa fa-paperclip"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="chatbox">
                <div class="chat-mg bx">
                    <a href="#" title=""><img src="images/chat.png" alt=""></a>
                    <span>2</span>
                </div>
                <div class="conversation-box">
                    <div class="con-title">
                        <h3>Messages</h3>
                        <a href="#" title="" class="close-chat"><i class="la la-minus-square"></i></a>
                    </div>
                    <div class="chat-list">
                        <div class="conv-list active">
                            <div class="usrr-pic">
                                <img src="images/resources/usy1.png" alt="">
                                <span class="active-status activee"></span>
                            </div>
                            <div class="usy-info">
                                <h3>John Doe</h3>
                                <span>Lorem ipsum dolor <img src="images/smley.png" alt=""></span>
                            </div>
                            <div class="ct-time">
                                <span>1:55 PM</span>
                            </div>
                            <span class="msg-numbers">2</span>
                        </div>
                        <div class="conv-list">
                            <div class="usrr-pic">
                                <img src="images/resources/usy2.png" alt="">
                            </div>
                            <div class="usy-info">
                                <h3>John Doe</h3>
                                <span>Lorem ipsum dolor <img src="images/smley.png" alt=""></span>
                            </div>
                            <div class="ct-time">
                                <span>11:39 PM</span>
                            </div>
                        </div>
                        <div class="conv-list">
                            <div class="usrr-pic">
                                <img src="images/resources/usy3.png" alt="">
                            </div>
                            <div class="usy-info">
                                <h3>John Doe</h3>
                                <span>Lorem ipsum dolor <img src="images/smley.png" alt=""></span>
                            </div>
                            <div class="ct-time">
                                <span>0.28 AM</span>
                            </div>
                        </div>
                    </div>
                </div>
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
    <!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>EASY SHOP</title>

        <link href="{{asset('assets/shop/css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{asset('assets/shop/font-awesome/css/font-awesome.css')}}" rel="stylesheet">

        <!-- Morris -->
        <link href="{{asset('assets/shop/css/plugins/morris/morris-0.4.3.min.css')}}" rel="stylesheet">

        <link href="{{asset('assets/shop/css/animate.css')}}" rel="stylesheet">
        <link href="{{asset('assets/shop/css/style.css')}}" rel="stylesheet">

    </head>
    <body>
    <div class="container alert alert-info mt-5">
        <p>C'est la dashboard Client</p>
    </div>
    </html>
@endif
