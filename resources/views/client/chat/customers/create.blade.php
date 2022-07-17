@extends('layouts.adminShop')

@section('contents')
    <div id="page-wrapper fix-sidebar fix-header">
        <div class="container-fluid">
            <div class="row bg-title">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h4 class="page-title">Chat Page</h4>
                </div>
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                    <a href="https://themeforest.net/item/elite-admin-responsive-dashboard-web-app-kit-/16750820" target="_blank" class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Buy Now</a>
                    <ol class="breadcrumb">
                        <li><a href="#">Dashboard</a></li>
                        <li class="active">Chat Page</li>
                    </ol>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- row -->
            <!-- .chat-row -->
            <div class="chat-main-box">
                <!-- .chat-left-panel -->
                <div class="chat-left-aside">
                    <div class="open-panel"><i class="ti-angle-right"></i></div>
                    <div class="chat-left-inner">
                        <div class="form-material">
                            <input class="form-control p-20" type="text" placeholder="Search Contact">
                        </div>
                        <ul class="chatonline style-none ">
                                @if($users->user_type != 'Client')
                                    <li @if($users->id == $userById->id) style="background-color: #e4e7e8" @endif>
                                        <a href="{{route('client.chat.customers.create', $users->id)}}">
                                            @if($users->profile->logo)
                                                <img src="{{asset('storage') . '/' . $users->profile->logo}}" alt="user-img" width="40" height="40"  class="img-circle">
                                            @endif
                                            @if($users->profile->logo == null)
                                                <img src="{{asset('assets/clientAsset/plugins/images/users/shop.png')}}" alt="user-img" class="img-circle">
                                            @endif
                                            <span>
                                                <span>{{$users->username}}</span>
                                                @if(Cache::has('user-is-online-' . $users->id))
                                                    <span style="font-size: 10px;" class="text-success">Online</span>
                                                @else
                                                    <span class="text-danger" style="font-size: 10px;">Offline</span>
                                                @endif
                                            </span>
                                        </a>
                                    </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <!-- .chat-left-panel -->
                <!-- .chat-right-panel -->
                <div class="chat-right-aside">
                    <div class="chat-main-header">
                        <div class="p-20 b-b">
                            <h3 class="box-title">Chat Message</h3>
                            <h4 class="box-title bold">
                                {{$userById->username}}
                                @if(Cache::has('user-is-online-' . $userById->id))
                                    <span class="text-success" style="font-size: 11px;">is online. Last seen: {{ \Carbon\Carbon::parse($userById->last_seen)->diffForHumans() }}</span>
                                @else
                                    <span class="text-danger" style="font-size: 11px;">is offline. Last seen: {{ \Carbon\Carbon::parse($userById->last_seen)->diffForHumans() }}</span>
                                @endif
                            </h4>
                        </div>
                    </div>
                    <div class="chat-box">
                        <ul class="chat-list slimscroll p-t-30">
                            @foreach($messages as $messages)
                                @if($messages->user_id == Auth::User()->id)
                                    <li class="odd">
                                        <div class="chat-image">
                                            @if(Auth::User()->profile->logo)
                                                <img src="{{asset('storage') . '/' . Auth::User()->profile->logo}}" alt="Female">
                                            @endif
                                            @if(Auth::User()->profile->logo == null)
                                                <img src="{{asset('assets/clientAsset/plugins/images/users/shop.png')}}" alt="user-img" class="img-circle">
                                            @endif
                                        </div>
                                        <div class="chat-body">
                                            <div class="chat-text">
                                                <h4>You</h4>
                                                <p> {{$messages->message}}</p>
                                                <b>{{$messages->created_at->format('Y-M-D-H:i:s')}} </b> </div>
                                        </div>
                                    </li>
                                @else
                                    <li>
                                        <div class="chat-image">
                                            @if($userById->profile->logo)
                                                <img src="{{asset('storage') . '/' . $userById->profile->logo}}" height="25" alt="Female">
                                            @endif
                                            @if($userById->profile->logo == null)
                                                <img src="{{asset('assets/clientAsset/plugins/images/users/shop.png')}}" alt="user-img" class="img-circle">
                                            @endif

                                            @if($users->profile->logo == null)
                                                @if($users->user_type == "Client")
                                                    <img src="{{asset('assets/clientAsset/plugins/images/users/profile.jpg')}}" alt="user-img">
                                                @elseif($users->user_type != "Client")
                                                    <img src="{{asset('assets/clientAsset/plugins/images/users/shop.png')}}" alt="user-img">
                                                @endif
                                            @endif
                                        </div>
                                        <div class="chat-body">
                                            <div class="chat-text">
                                                <h4>Him</h4>
                                                <p>{{$messages->message}} </p>
                                                <b>{{$messages->created_at->format('Y-M-D-H:i:s')}}</b> </div>
                                        </div>
                                    </li>
                                @endif
                            @endforeach
                        </ul>
                        <div class="row send-chat-box">
                            <div class="col-sm-12">
                                <form action="{{route('client.chat.customers.store', $userById->id)}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    @error('message')
                                    <span class="invalid-feedback" style="color: red;" role="alert">
                                            <strong class="ml-4">plase put your message</strong>
                                        </span>
                                    @enderror
                                    <textarea class="form-control @error('message') is-invalid @enderror" name="message" placeholder="Type your message"></textarea>
                                    <div class="custom-send">
                                        <a href="javacript:void(0)" class="cst-icon" data-toggle="tooltip" title="Insert Emojis"><i class="ti-face-smile"></i></a>
                                        <a href="javacript:void(0)" class="cst-icon" data-toggle="tooltip" title="File Attachment"><i class="fa fa-paperclip"></i></a>
                                        <button class="btn btn-danger btn-rounded" type="submit">Send</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- .chat-right-panel -->
            </div>
@endsection
