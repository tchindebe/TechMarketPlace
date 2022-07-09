@extends('layouts.services_app')

@section('contents')
    <div class="search-sec">
        <div class="container">
            <div class="search-box">
                <form>
                    <input type="text" name="search" placeholder="Search keywords">
                    <button type="submit">Search</button>
                </form>
            </div>
        </div>
    </div>
    <main>
        <div class="container">
            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif
            @if(session('error'))
                <div class="alert alert-danger">{{ session('error') }}</div>
            @endif
        </div>
        <div class="main-section">
            <div class="container">
                <div class="main-section-data">
                    <div class="row">

                        <div class="col-lg-7">
                            <div class="main-ws-sec">
                                <div class="posts-section">
                                    @auth
                                        @if(Auth::user()->user_type === 'Service')
                                        <div class="post-topbar">
                                            <div class="user-picy">
                                                <img src="{{asset('assets/service/images/resources/user-pic.png')}}" alt="">
                                            </div>
                                            <div class="post-st">
                                                <ul>
                                                    <li><a class="post_project" href="#" title="">Post a Project</a></li>
                                                    <li><a class="post-jb active" href="#" title="">Post a Job</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        @endif
                                    @endauth
                                    @foreach($allPost as $post)
                                        <div class="post-bar">
                                        <div class="post_topbar">
                                            <div class="usy-dt">
                                                <img src="{{asset('assets/service/images/resources/us-pic.png')}}" alt="">
                                                <div class="usy-name">
                                                    <h3>{{ $post->user }}</h3>
                                                </div>
                                            </div>
                                            <div class="ed-opts">
                                                <a href="#" title="" class="ed-opts-open"><i class="la la-ellipsis-v"></i></a>
                                                <ul class="ed-options">
                                                    @auth
                                                        @if(Auth::user()->user_type === 'Service')
                                                            <li><a href="#" title="">Edit Post</a></li>
                                                            <li><a href="#" title="">Delete post</a></li>
                                                        @endif
                                                    @endauth
                                                        <li><a href="#" title="">Share</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="epi-sec">
                                            <ul class="bk-links">
                                                <li><a href="#" title=""><i class="la la-bookmark"></i></a></li>
                                                <li><a href="#" title=""><i class="la la-envelope"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="job_descp">
                                            <h3>{{ $post->title }}</h3>
                                            <ul class="job-dt">
                                                @if($post->post_type == 'post_Job')
                                                    <li><a href="#" title="">{{ $post->job_type }}</a></li>
                                                @endif
                                                @if($post->post_type == 'post_Job')
                                                    <li><span>{{ $post->salary_price }} FCFA </span></li>
                                                @elseif($post->post_type == 'post_project')
                                                    <li><span>{{ $post->min_price }} - {{ $post->max_price }} FCFA / hr </span></li>
                                                @endif
                                            </ul>
                                            <p>{{ $post->description }}
                                            <ul class="skill-tags">
                                                <li><a href="#" title="">{{ $post->skills }}</a></li>
                                            </ul>
                                        </div>
                                        <div class="job-status-bar post-project">
                                            <ul class="like-com">
                                                <li>
                                                    <a href="#" class="active"><i class="fas fa-heart"></i> Like</a>
                                                    <img src="{{asset('assets/service/images/liked-img.png')}}" alt="">
                                                    <span>25</span>
                                                </li>
                                                <li><a href="#" class="com"><i class="fas fa-comment-alt"></i> Comments 15</a></li>
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
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="right-sidebar">
                                <div class="widget widget-jobs">
                                    <div class="sd-title">
                                        <h3>I am artist</h3>
                                        @if(Auth::user())
                                            @if(Auth::user()->user_type === 'Service')
                                                <a class="btn btn-primary mt-3" href="{{route('user.service.media.add')}}" title="">Add my clip video</a>
                                            @endif
                                        @endif
                                        <i class="la la-ellipsis-v"></i>
                                    </div>
                                    <div class="jobs-list">
                                        @foreach($mediaService  as $media)
                                            <div class="job-info">
                                                <div class="job-details">
                                                    <h3>{{$media->title}} <span style="color: #0b67cd;">({{$media->category}})</span></h3>
                                                </div>
                                                <video width="100%" height="200" class="border p-1 rounded-md mb-2" controls>
                                                    <source src="{{asset('storage') . '/' . $media->short_review}}" type="video/mp4">
                                                    Votre explorateur ne supporte pas la balise video.
                                                </video>
                                                <a href="{{route('payment.index', $media->id)}}" class="btn btn-success mt-2 font-bold">Watch the video {{$media->price}} XAF</a>
                                            </div>
                                        @endforeach

                                        <div>
                                            <a href="{{route('media.all')}}" class="btn btn-primary mt-3">More video ...</a>
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

@endsection
