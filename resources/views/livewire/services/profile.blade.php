@extends('layouts.services_app')

@section('contents')
    <section class="profile-account-setting">
        <div class="container">
            <div class="account-tabs-setting">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="acc-leftbar">
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active" id="nav-status-tab" data-toggle="tab" href="#nav-status" role="tab" aria-controls="nav-status" aria-selected="false"><i class="fa fa-line-chart"></i>Status</a>
                                <a class="nav-item nav-link" id="nav-password-tab" data-toggle="tab" href="#nav-password" role="tab" aria-controls="nav-password" aria-selected="false"><i class="fa fa-lock"></i>Change Password</a>
                                <a class="nav-item nav-link" id="nav-notification-tab" data-toggle="tab" href="#nav-notification" role="tab" aria-controls="nav-notification" aria-selected="false"><i class="fa fa-flash"></i>Notifications</a>
                                <a class="nav-item nav-link" id="nav-privcy-tab" data-toggle="tab" href="#privcy" role="tab" aria-controls="privacy" aria-selected="false"><i class="fa fa-group"></i>Requests</a>
                                <a class="nav-item nav-link" id="nav-privacy-tab" data-toggle="tab" href="#privacy" role="tab" aria-controls="privacy" aria-selected="false"><i class="fa fa-paw"></i>Privacy</a>
                                <a class="nav-item nav-link" id="nav-deactivate-tab" data-toggle="tab" href="#nav-deactivate" role="tab" aria-controls="nav-deactivate" aria-selected="false"><i class="fa fa-random"></i>Deactivate Account</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-status" role="tabpanel" aria-labelledby="nav-status-tab">
                                <div class="acc-setting">
                                    <h3>Profile Status</h3>
                                    <div class="profile-bx-details">
                                        <div class="row">
                                            <div class="col-lg-3 col-md-6 col-sm-12">
                                                <div class="profile-bx-info">
                                                    <div class="pro-bx">
                                                        <img src="images/pro-icon1.png" alt="">
                                                        <div class="bx-info">
                                                            <h3>$5,145</h3>
                                                            <h5>Total Income</h5>
                                                        </div>
                                                    </div>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing.</p>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-6 col-sm-12">
                                                <div class="profile-bx-info">
                                                    <div class="pro-bx">
                                                        <img src="images/pro-icon2.png" alt="">
                                                        <div class="bx-info">
                                                            <h3>$4,745</h3>
                                                            <h5>Widthraw</h5>
                                                        </div>
                                                    </div>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing.</p>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-6 col-sm-12">
                                                <div class="profile-bx-info">
                                                    <div class="pro-bx">
                                                        <img src="images/pro-icon3.png" alt="">
                                                        <div class="bx-info">
                                                            <h3>$1,145</h3>
                                                            <h5>Sent</h5>
                                                        </div>
                                                    </div>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing.</p>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-6 col-sm-12">
                                                <div class="profile-bx-info">
                                                    <div class="pro-bx">
                                                        <img src="images/pro-icon4.png" alt="">
                                                        <div class="bx-info">
                                                            <h3>130</h3>
                                                            <h5>Total Projects</h5>
                                                        </div>
                                                    </div>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pro-work-status">

                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-password" role="tabpanel" aria-labelledby="nav-password-tab">
                                <div class="acc-setting">
                                    <h3>Account Setting</h3>
                                    <form>
                                        <div class="cp-field">
                                            <h5>Old Password</h5>
                                            <div class="cpp-fiel">
                                                <input type="text" name="old-password" placeholder="Old Password">
                                                <i class="fa fa-lock"></i>
                                            </div>
                                        </div>
                                        <div class="cp-field">
                                            <h5>New Password</h5>
                                            <div class="cpp-fiel">
                                                <input type="text" name="new-password" placeholder="New Password">
                                                <i class="fa fa-lock"></i>
                                            </div>
                                        </div>
                                        <div class="cp-field">
                                            <h5>Repeat Password</h5>
                                            <div class="cpp-fiel">
                                                <input type="text" name="repeat-password" placeholder="Repeat Password">
                                                <i class="fa fa-lock"></i>
                                            </div>
                                        </div>
                                        <div class="cp-field">
                                            <h5><a href="#" title="">Forgot Password?</a></h5>
                                        </div>
                                        <div class="save-stngs pd2">
                                            <ul>
                                                <li><button type="submit">Save Setting</button></li>
                                                <li><button type="submit">Restore Setting</button></li>
                                            </ul>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-notification" role="tabpanel" aria-labelledby="nav-notification-tab">
                                <div class="acc-setting">
                                    <h3>Notifications</h3>
                                    <div class="notifications-list">
                                        <div class="notfication-details">
                                            <div class="noty-user-img">
                                                <img src="images/resources/ny-img1.png" alt="">
                                            </div>
                                            <div class="notification-info">
                                                <h3><a href="#" title="">Jassica William</a> Comment on your project.</h3>
                                                <span>2 min ago</span>
                                            </div>
                                        </div>
                                        <div class="notfication-details">
                                            <div class="noty-user-img">
                                                <img src="images/resources/ny-img2.png" alt="">
                                            </div>
                                            <div class="notification-info">
                                                <h3><a href="#" title="">Poonam Verma</a> Bid on your Latest project.</h3>
                                                <span>2 min ago</span>
                                            </div>
                                        </div>
                                        <div class="notfication-details">
                                            <div class="noty-user-img">
                                                <img src="images/resources/ny-img3.png" alt="">
                                            </div>
                                            <div class="notification-info">
                                                <h3><a href="#" title="">Tonney Dhman</a> Comment on your project.</h3>
                                                <span>2 min ago</span>
                                            </div>
                                        </div>
                                        <div class="notfication-details">
                                            <div class="noty-user-img">
                                                <img src="images/resources/ny-img1.png" alt="">
                                            </div>
                                            <div class="notification-info">
                                                <h3><a href="#" title="">Jassica William</a> Comment on your project.</h3>
                                                <span>2 min ago</span>
                                            </div>
                                        </div>
                                        <div class="notfication-details">
                                            <div class="noty-user-img">
                                                <img src="images/resources/ny-img1.png" alt="">
                                            </div>
                                            <div class="notification-info">
                                                <h3><a href="#" title="">Jassica William</a> Comment on your project.</h3>
                                                <span>2 min ago</span>
                                            </div>
                                        </div>
                                        <div class="notfication-details">
                                            <div class="noty-user-img">
                                                <img src="images/resources/ny-img2.png" alt="">
                                            </div>
                                            <div class="notification-info">
                                                <h3><a href="#" title="">Poonam Verma </a> Bid on your Latest project.</h3>
                                                <span>2 min ago</span>
                                            </div>
                                        </div>
                                        <div class="notfication-details">
                                            <div class="noty-user-img">
                                                <img src="images/resources/ny-img3.png" alt="">
                                            </div>
                                            <div class="notification-info">
                                                <h3><a href="#" title="">Tonney Dhman</a> Comment on your project</h3>
                                                <span>2 min ago</span>
                                            </div>
                                        </div>
                                        <div class="notfication-details">
                                            <div class="noty-user-img">
                                                <img src="images/resources/ny-img1.png" alt="">
                                            </div>
                                            <div class="notification-info">
                                                <h3><a href="#" title="">Jassica William</a> Comment on your project.</h3>
                                                <span>2 min ago</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="privcy" role="tabpanel" aria-labelledby="nav-privcy-tab">
                                <div class="acc-setting">
                                    <h3>Requests</h3>
                                    <div class="requests-list">
                                        <div class="request-details">
                                            <div class="noty-user-img">
                                                <img src="images/resources/r-img1.png" alt="">
                                            </div>
                                            <div class="request-info">
                                                <h3>Jessica William</h3>
                                                <span>Graphic Designer</span>
                                            </div>
                                            <div class="accept-feat">
                                                <ul>
                                                    <li><button type="submit" class="accept-req">Accept</button></li>
                                                    <li><button type="submit" class="close-req"><i class="la la-close"></i></button></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="request-details">
                                            <div class="noty-user-img">
                                                <img src="images/resources/r-img2.png" alt="">
                                            </div>
                                            <div class="request-info">
                                                <h3>John Doe</h3>
                                                <span>PHP Developer</span>
                                            </div>
                                            <div class="accept-feat">
                                                <ul>
                                                    <li><button type="submit" class="accept-req">Accept</button></li>
                                                    <li><button type="submit" class="close-req"><i class="la la-close"></i></button></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="request-details">
                                            <div class="noty-user-img">
                                                <img src="images/resources/r-img3.png" alt="">
                                            </div>
                                            <div class="request-info">
                                                <h3>Poonam</h3>
                                                <span>Wordpress Developer</span>
                                            </div>
                                            <div class="accept-feat">
                                                <ul>
                                                    <li><button type="submit" class="accept-req">Accept</button></li>
                                                    <li><button type="submit" class="close-req"><i class="la la-close"></i></button></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="request-details">
                                            <div class="noty-user-img">
                                                <img src="images/resources/r-img4.png" alt="">
                                            </div>
                                            <div class="request-info">
                                                <h3>Bill Gates</h3>
                                                <span>C &amp; C++ Developer</span>
                                            </div>
                                            <div class="accept-feat">
                                                <ul>
                                                    <li><button type="submit" class="accept-req">Accept</button></li>
                                                    <li><button type="submit" class="close-req"><i class="la la-close"></i></button></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="request-details">
                                            <div class="noty-user-img">
                                                <img src="images/resources/r-img5.png" alt="">
                                            </div>
                                            <div class="request-info">
                                                <h3>Jessica William</h3>
                                                <span>Graphic Designer</span>
                                            </div>
                                            <div class="accept-feat">
                                                <ul>
                                                    <li><button type="submit" class="accept-req">Accept</button></li>
                                                    <li><button type="submit" class="close-req"><i class="la la-close"></i></button></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="request-details">
                                            <div class="noty-user-img">
                                                <img src="images/resources/r-img6.png" alt="">
                                            </div>
                                            <div class="request-info">
                                                <h3>John Doe</h3>
                                                <span>PHP Developer</span>
                                            </div>
                                            <div class="accept-feat">
                                                <ul>
                                                    <li><button type="submit" class="accept-req">Accept</button></li>
                                                    <li><button type="submit" class="close-req"><i class="la la-close"></i></button></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="privciy" role="tabpanel" aria-labelledby="nav-privcy-tab">
                                <div class="acc-setting">
                                    <h3>Requests</h3>
                                    <div class="requests-list">
                                        <div class="request-details">
                                            <div class="noty-user-img">
                                                <img src="images/resources/r-img1.png" alt="">
                                            </div>
                                            <div class="request-info">
                                                <h3>Jessica William</h3>
                                                <span>Graphic Designer</span>
                                            </div>
                                            <div class="accept-feat">
                                                <ul>
                                                    <li><button type="submit" class="accept-req">Accept</button></li>
                                                    <li><button type="submit" class="close-req"><i class="la la-close"></i></button></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="request-details">
                                            <div class="noty-user-img">
                                                <img src="images/resources/r-img2.png" alt="">
                                            </div>
                                            <div class="request-info">
                                                <h3>John Doe</h3>
                                                <span>PHP Developer</span>
                                            </div>
                                            <div class="accept-feat">
                                                <ul>
                                                    <li><button type="submit" class="accept-req">Accept</button></li>
                                                    <li><button type="submit" class="close-req"><i class="la la-close"></i></button></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="request-details">
                                            <div class="noty-user-img">
                                                <img src="images/resources/r-img3.png" alt="">
                                            </div>
                                            <div class="request-info">
                                                <h3>Poonam</h3>
                                                <span>Wordpress Developer</span>
                                            </div>
                                            <div class="accept-feat">
                                                <ul>
                                                    <li><button type="submit" class="accept-req">Accept</button></li>
                                                    <li><button type="submit" class="close-req"><i class="la la-close"></i></button></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="request-details">
                                            <div class="noty-user-img">
                                                <img src="images/resources/r-img4.png" alt="">
                                            </div>
                                            <div class="request-info">
                                                <h3>Bill Gates</h3>
                                                <span>C &amp; C++ Developer</span>
                                            </div>
                                            <div class="accept-feat">
                                                <ul>
                                                    <li><button type="submit" class="accept-req">Accept</button></li>
                                                    <li><button type="submit" class="close-req"><i class="la la-close"></i></button></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="request-details">
                                            <div class="noty-user-img">
                                                <img src="images/resources/r-img5.png" alt="">
                                            </div>
                                            <div class="request-info">
                                                <h3>Jessica William</h3>
                                                <span>Graphic Designer</span>
                                            </div>
                                            <div class="accept-feat">
                                                <ul>
                                                    <li><button type="submit" class="accept-req">Accept</button></li>
                                                    <li><button type="submit" class="close-req"><i class="la la-close"></i></button></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="request-details">
                                            <div class="noty-user-img">
                                                <img src="images/resources/r-img6.png" alt="">
                                            </div>
                                            <div class="request-info">
                                                <h3>John Doe</h3>
                                                <span>PHP Developer</span>
                                            </div>
                                            <div class="accept-feat">
                                                <ul>
                                                    <li><button type="submit" class="accept-req">Accept</button></li>
                                                    <li><button type="submit" class="close-req"><i class="la la-close"></i></button></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="privacy" role="tabpanel" aria-labelledby="nav-privacy-tab">
                                <div class="privac">
                                    <div class="row">
                                        <div class="col-12">
                                            <h3>Privacy</h3>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="dropdown privacydropd">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Who can see your email address</a>
                                                <div class="dropdown-menu">
                                                    <p>Choose who can see your email address on your profile</p>
                                                    <div class="row">
                                                        <div class="col-md-9 col-sm-12">
                                                            <form class="radio-form">
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                                    <label class="custom-control-label" for="customCheck1">Everyone</label>
                                                                </div>
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="custom-control-input" id="customCheck2">
                                                                    <label class="custom-control-label" for="customCheck2">Friends</label>
                                                                </div>
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="custom-control-input" id="customCheck3">
                                                                    <label class="custom-control-label" for="customCheck3">Only Me</label>
                                                                </div>
                                                            </form>
                                                        </div>
                                                        <div class="col-md-3 col-sm-12">
                                                            <p style="float: right;">Everyone</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="dropdown privacydropd">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Who can see your Friends</a>
                                                <div class="dropdown-menu">
                                                    <p>Choose who can see your list of connections</p>
                                                    <div class="row">
                                                        <div class="col-md-9 col-sm-12">
                                                            <form class="radio-form">
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="custom-control-input" id="customCheck4">
                                                                    <label class="custom-control-label" for="customCheck4">Everyone</label>
                                                                </div>
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="custom-control-input" id="customCheck5">
                                                                    <label class="custom-control-label" for="customCheck5">Friends</label>
                                                                </div>
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="custom-control-input" id="customCheck6">
                                                                    <label class="custom-control-label" for="customCheck6">Only Me</label>
                                                                </div>
                                                            </form>
                                                        </div>
                                                        <div class="col-md-3 col-sm-12">
                                                            <p style="float: right;">Everyone</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="dropdown privacydropd">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Manage who can discover your profile from your email address</a>
                                                <div class="dropdown-menu">
                                                    <p>Choose who can discover your profile if they are not connected to you but have your email address</p>
                                                    <div class="row">
                                                        <div class="col-md-9 col-sm-12">
                                                            <form class="radio-form">
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="custom-control-input" id="customCheck7">
                                                                    <label class="custom-control-label" for="customCheck7">Everyone</label>
                                                                </div>
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="custom-control-input" id="customCheck8">
                                                                    <label class="custom-control-label" for="customCheck8">Friends</label>
                                                                </div>
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="custom-control-input" id="customCheck9">
                                                                    <label class="custom-control-label" for="customCheck9">Only Me</label>
                                                                </div>
                                                            </form>
                                                        </div>
                                                        <div class="col-md-3 col-sm-12">
                                                            <p style="float: right;">Everyone</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="dropdown privacydropd">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Search history</a>
                                                <div class="dropdown-menu">
                                                    <p>Clear all previous searches performed on LinkedIn</p>
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <form class="radio-form">
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="custom-control-input" id="customCheck10">
                                                                    <label class="custom-control-label" for="customCheck10">Clear All History</label>
                                                                </div>
                                                            </form>
                                                            <div class="privabtns">
                                                                <a href="#">Clear All History</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="dropdown privacydropd">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Sharing your profile when you click apply</a>
                                                <div class="dropdown-menu">
                                                    <p>Chose if you want to share your full profile with the job poster when you're taken off linkedin after clicking apply </p>
                                                    <div class="row">
                                                        <div class="col-md-9 col-sm-12">
                                                            <form class="radio-form">
                                                                <div class="custom-control custom-radio">
                                                                    <input type="radio" id="customRadio5" name="customRadio" class="custom-control-input">
                                                                    <label class="custom-control-label" for="customRadio5">Yes</label>
                                                                </div>
                                                                <div class="custom-control custom-radio">
                                                                    <input type="radio" id="customRadio6" name="customRadio" class="custom-control-input">
                                                                    <label class="custom-control-label" for="customRadio6">Yes</label>
                                                                </div>
                                                            </form>
                                                        </div>
                                                        <div class="col-md-3 col-sm-12">
                                                            <p style="float: right;">Yes</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="privabtns">
                                                <a href="#">Save</a>
                                                <a href="#">Cancel</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-deactivate" role="tabpanel" aria-labelledby="nav-deactivate-tab">
                                <div class="acc-setting">
                                    <h3>Deactivate Account</h3>
                                    <form>
                                        <div class="cp-field">
                                            <h5>Email</h5>
                                            <div class="cpp-fiel">
                                                <input type="text" name="email" placeholder="Email">
                                                <i class="fa fa-envelope"></i>
                                            </div>
                                        </div>
                                        <div class="cp-field">
                                            <h5>Password</h5>
                                            <div class="cpp-fiel">
                                                <input type="password" name="password" placeholder="Password">
                                                <i class="fa fa-lock"></i>
                                            </div>
                                        </div>
                                        <div class="cp-field">
                                            <h5>Please Explain Further</h5>
                                            <textarea></textarea>
                                        </div>
                                        <div class="cp-field">
                                            <div class="fgt-sec">
                                                <input type="checkbox" name="cc" id="c4">
                                                <label for="c4">
                                                    <span></span>
                                                </label>
                                                <small>Email option out</small>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus pretium nulla quis erat dapibus, varius hendrerit neque suscipit. Integer in ex euismod, posuere lectus id,</p>
                                        </div>
                                        <div class="save-stngs pd3">
                                            <ul>
                                                <li><button type="submit">Save Setting</button></li>
                                                <li><button type="submit">Restore Setting</button></li>
                                            </ul>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
