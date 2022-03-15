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
                            @foreach($users as $users)
                                    <li>
                                        <a href="{{route('client.chat.customers.create', $users->id)}}">
                                            @if($users->profile->logo)
                                                <img src="{{asset('storage') . '/' . $users->profile->logo}}" alt="user-img" class="img-circle">
                                            @endif
                                            @if($users->profile->logo == null)
                                                <img src="{{asset('assets/clientAsset/plugins/images/users/profile.jpg')}}" alt="user-img" class="img-circle">
                                            @endif
                                            <span>{{$users->username}}
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
                        </div>
                    </div>
                    <div class="chat-box">
                        <div class="chat-box chat-list slimscroll p-t-30">
                            <h3 class="text-center">select a user to write </h3>
                        </div>
                        <div class="row send-chat-box">
                            <div class="col-sm-12">
                                <textarea class="form-control" placeholder="Type your message"></textarea>
                                <div class="custom-send"><a href="javacript:void(0)" class="cst-icon" data-toggle="tooltip" title="Insert Emojis"><i class="ti-face-smile"></i></a> <a href="javacript:void(0)" class="cst-icon" data-toggle="tooltip" title="File Attachment"><i class="fa fa-paperclip"></i></a>
                                    <button class="btn btn-danger btn-rounded" type="button">disabled button</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- .chat-right-panel -->
            </div>
@endsection
