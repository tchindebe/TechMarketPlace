@extends('layouts.adminShop')

@section('contents')
   <script src="https://use.typekit.net/hoy3lrg.js"></script>
    <script>try{Typekit.load({ async: true });}catch(e){}</script>
    <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css'><link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.2/css/font-awesome.min.css'>
    <link rel="stylesheet" href="{{asset('css/messenger.css')}}">


    <div id="frame">
        <div id="sidepanel">
            <div id="profile">
                <div class="wrap">
                    @if(Auth::user()->profile->logo)
                        <img src="{{asset('storage') . '/' . Auth::user()->profile->logo}}" alt="user-img">
                    @endif
                    @if(Auth::user()->profile->logo == null)
                        <img src="{{asset('assets/clientAsset/plugins/images/users/shop.png')}}" alt="user-img">
                    @endif
                    <p>{{Auth::user()->username}}</p>
                    <i class="fa fa-chevron-down expand-button" aria-hidden="true"></i>
                    <div id="status-options">
                        <ul>
                            <li id="status-online" class="active"><span class="status-circle"></span> <p>Online</p></li>
                            <li id="status-away"><span class="status-circle"></span> <p>Away</p></li>
                            <li id="status-busy"><span class="status-circle"></span> <p>Busy</p></li>
                            <li id="status-offline"><span class="status-circle"></span> <p>Offline</p></li>
                        </ul>
                    </div>
                    <div id="expanded">
                        <label for="twitter"><i class="fa fa-facebook fa-fw" aria-hidden="true"></i></label>
                        <input name="twitter" type="text" value="mikeross" />
                        <label for="twitter"><i class="fa fa-twitter fa-fw" aria-hidden="true"></i></label>
                        <input name="twitter" type="text" value="ross81" />
                        <label for="twitter"><i class="fa fa-instagram fa-fw" aria-hidden="true"></i></label>
                        <input name="twitter" type="text" value="mike.ross" />
                    </div>
                </div>
            </div>
            <div id="search">
                <label for=""><i class="fa fa-search" aria-hidden="true"></i></label>
                <input type="text" placeholder="Search contacts..." />
            </div>
            <div id="contacts">
                <ul>
                    @foreach($users as $users)
                        <li class="contact">
                            <div class="wrap">
                                <a href="{{route('shop.messenger.chat', $users->username)}}" style="color: white!important;">
                                    @if(Cache::has('user-is-online-' . $users->id))
                                        <span class="contact-status online"></span>
                                    @else
                                        <span class="contact-status-offline"></span>
                                    @endif
                                    @if($users->profile->logo)
                                        <img src="{{asset('storage') . '/' . $users->profile->logo}}" width="40" height="40" alt="user-img">
                                    @endif
                                    @if($users->profile->logo == null)
                                        @if($users->user_type == "Client")
                                            <img src="{{asset('assets/clientAsset/plugins/images/users/profile.jpg')}}" alt="user-img">
                                        @elseif($users->user_type != "Client")
                                            <img src="{{asset('assets/clientAsset/plugins/images/users/shop.png')}}" alt="user-img">
                                        @endif
                                    @endif
                                    <div class="meta">
                                        <p class="name">{{$users->username}}</p>
                                        <p class="preview">{{$users->user_type}}</p>
                                    </div>
                                </a>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div id="bottom-bar">
                <button id="addcontact"><i class="fa fa-user-plus fa-fw" aria-hidden="true"></i> <span>Add contact</span></button>
                <button id="settings"><i class="fa fa-cog fa-fw" aria-hidden="true"></i> <span>Settings</span></button>
            </div>
        </div>
        <div class="content">
            <div class="text-center justify-content-center " style="margin-top: 10px!important; font-size: 18px; ">
                <p>
                    Select a user to start a conversation
                </p>
            </div>
        </div>
    </div>


    <script src='//production-assets.codepen.io/assets/common/stopExecutionOnTimeout-b2a7b3fe212eaa732349046d8416e00a9dec26eb7fd347590fbced3ab38af52e.js'></script><script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
    <script >$(".messages").animate({ scrollTop: $(document).height() }, "fast");

    $("#profile-img").click(function() {
        $("#status-options").toggleClass("active");
    });

    $(".expand-button").click(function() {
        $("#profile").toggleClass("expanded");
        $("#contacts").toggleClass("expanded");
    });

    $("#status-options ul li").click(function() {
        $("#profile-img").removeClass();
        $("#status-online").removeClass("active");
        $("#status-away").removeClass("active");
        $("#status-busy").removeClass("active");
        $("#status-offline").removeClass("active");
        $(this).addClass("active");

        if($("#status-online").hasClass("active")) {
            $("#profile-img").addClass("online");
        } else if ($("#status-away").hasClass("active")) {
            $("#profile-img").addClass("away");
        } else if ($("#status-busy").hasClass("active")) {
            $("#profile-img").addClass("busy");
        } else if ($("#status-offline").hasClass("active")) {
            $("#profile-img").addClass("offline");
        } else {
            $("#profile-img").removeClass();
        };

        $("#status-options").removeClass("active");
    });

    function newMessage() {
        message = $(".message-input input").val();
        if($.trim(message) == '') {
            return false;
        }
        $('<li class="sent"><img src="http://emilcarlsson.se/assets/mikeross.png" alt="" /><p>' + message + '</p></li>').appendTo($('.messages ul'));
        $('.message-input input').val(null);
        $('.contact.active .preview').html('<span>You: </span>' + message);
        $(".messages").animate({ scrollTop: $(document).height() }, "fast");
    };

    $('.submit').click(function() {
        newMessage();
    });

    $(window).on('keydown', function(e) {
        if (e.which == 13) {
            newMessage();
            return false;
        }
    });
    //# sourceURL=pen.js
</script>

@endsection
