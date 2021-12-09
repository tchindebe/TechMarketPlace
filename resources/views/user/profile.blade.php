@extends('layouts.adminShop')

@section('contents')
        <div class="row wrapper border-bottom white-bg page-heading">
            <div class="col-lg-10">
                <h2>Profile</h2>
                <ol class="breadcrumb">
                    <li>
                        <a href="index.html">Dashboard</a>
                    </li>
                    <li class="active">
                        <strong>Profile</strong>
                    </li>
                </ol>
            </div>
            <div class="col-lg-2">

            </div>
        </div>
        <div class="wrapper wrapper-content">
            <div class="row animated fadeInRight">
                <div class="col-md-4">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Profile Detail</h5>
                        </div>
                        <div>
                            <div class="ibox-content no-padding border-left-right">
                                <img alt="image" class="img-responsive" src="{{asset('storage') . '/' . $profile->logo}}">
                            </div>
                            <div class="ibox-content profile-content">
                                <h4><strong>{{$profile->user->username}}</strong></h4>
                                <h5><strong>{{$profile->phone}}</strong></h5>
                                <h5><strong>{{$profile->slogan}}</strong></h5>
                                <p> Created at {{$profile->created_at->format('d M y')}}</p>
                                <h5><i class="fa fa-map-marker"></i> {{$profile->country}} | {{$profile->city}} | {{$profile->bp}}</h5>
                                <p>
                                    {{$profile->description}}
                                </p>
                                <div class="row m-t-lg">
                                    <div class="col-md-4">
                                        <span class="bar">5,3,9,6,5,9,7,3,5,2</span>
                                        <h5><strong>{{$profile->user->products->count()}}</strong> Product(s)</h5>
                                    </div>
                                    <div class="col-md-4">
                                        <span class="line">5,3,9,6,5,9,7,3,5,2</span>
                                        <h5><strong>{{$profile->user->ordereds->count()}}</strong> ordered(s) not made</h5>
                                    </div>
                                    <div class="col-md-4">
                                        <span class="bar">5,3,2,-1,-3,-2,2,3,5,2</span>
                                        <h5><strong>{{$profile->user->chats->count()}}</strong> received  Message(s)</h5>
                                    </div>
                                </div>
                                <div class="user-button">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <a href="#" class="btn btn-primary btn-sm btn-block animation_select" data-animation="rubberBand"><i class="fa fa-edit"></i> Edit profile</a>
                                        </div>
                                        <div class="col-md-6">
                                            <button type="button" class="btn btn-default btn-sm btn-block"><i class="fa fa-coffee"></i> My shop</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="ibox float-e-margins">
                        <div class="wrapper wrapper-content animated fadeIn">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="ibox float-e-margins">
                                        <div class="ibox-content text-center css-animation-box">
                                            @if(session('success'))
                                                <div class="alert alert-success">{{ session('success') }}</div>
                                            @endif
                                                @if(session('error'))
                                                    <div class="alert alert-danger">{{ session('success') }}</div>
                                                @endif
                                            <div class="row">
                                                <div class="col-sm-12 text-center">
                                                    <h4 class="m-b-lg">
                                                        Edit your profile.
                                                    </h4>
                                                    <div id="animation_box" class="animated">
                                                        <div>
                                                            <form role="form" class="p-5" method="post" action="{{route('user.profile.update', Auth::user()->id)}}" enctype="multipart/form-data">
                                                                @csrf
                                                                <div class="form-group"><input type="text" placeholder="Enter your city" name="city" class="form-control"></div>
                                                                <div class="form-group"><input type="text" placeholder="Enter your Country" name="country" class="form-control"></div>
                                                                <div class="form-group"><input type="text" name="bp" placeholder="Enter your bp" xml:base="bp" class="form-control"></div>
                                                                <div class="form-group"><input type="text" placeholder="Enter your slogan" name="slogan" class="form-control"></div>
                                                                <div class="form-group"><input type="number" placeholder="Enter your number phone" name="phone" class="form-control"></div>
                                                                <div class="form-group mb-3">
                                                                    <textarea class="form-control" name="description" placeholder="Your description"></textarea>
                                                                </div>
                                                                <div class="form-group"><input type="file" placeholder="Add your logo" name="logo" class="form-control"></div>
                                                                <div class="mt-4">
                                                                    <button class="btn btn-sm btn-primary mt-3 m-t-n-xs" type="submit"><strong>Edit my profil</strong></button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 animation-efect-links text-center mt-3">
                                                    <a href="#" class="btn btn-white animation_select" data-animation="hinge">hinge</a>
                                                    <a href="#" class="btn btn-white animation_select" data-animation="rollIn">rollIn</a>
                                                    <a href="#" class="btn btn-white animation_select" data-animation="rollOut">rollOut</a>
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
    </div>

        <script src="{{asset('assets/shop/js/jquery-2.1.1.js')}}"></script>
        <script src="{{asset('assets/shop/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('assets/shop/js/plugins/metisMenu/jquery.metisMenu.js')}}"></script>
        <script src="asset('assets/shop/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

        <!-- Peity -->
        <script src="{{asset('assets/shop/js/plugins/peity/jquery.peity.min.js')}}"></script>

        <!-- Custom and plugin javascript -->
        <script src="{{asset('assets/shop/js/inspinia.js')}}"></script>
        <script src="{{asset('assets/shop/js/plugins/pace/pace.min.js')}}"></script>

        <!-- Rickshaw -->
        <script src="{{asset('assets/shop/js/plugins/rickshaw/vendor/d3.v3.js')}}"></script>
        <script src="{{asset('assets/shop/js/plugins/rickshaw/rickshaw.min.js')}}"></script>


        <script>


            $(document).ready(function() {
                $('.animation_select').click( function(){
                    $('#animation_box').removeAttr('class').attr('class', '');
                    var animation = $(this).attr("data-animation");
                    $('#animation_box').addClass('animated');
                    $('#animation_box').addClass(animation);
                    return false;
                });

                var graph2 = new Rickshaw.Graph( {
                    element: document.querySelector("#rickshaw_multi"),
                    renderer: 'area',
                    stroke: true,
                    series: [ {
                        data: [ { x: 0, y: 2 }, { x: 1, y: 5 }, { x: 2, y: 8 }, { x: 3, y: 4 }, { x: 4, y: 8 } ],
                        color: '#1ab394',
                        stroke: '#17997f'
                    }, {
                        data: [ { x: 0, y: 13 }, { x: 1, y: 15 }, { x: 2, y: 17 }, { x: 3, y: 12 }, { x: 4, y: 10 } ],
                        color: '#eeeeee',
                        stroke: '#d7d7d7'
                    } ]
                } );
                graph2.renderer.unstack = true;
                graph2.render();
            });
        </script>
@endsection
