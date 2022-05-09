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

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="main-ws-sec">
                                <div class="posts-section">
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
                                                    @if(Auth::user()->user_type === 'Service')
                                                        <li><a href="#" title="">Edit Post</a></li>
                                                        <li><a href="#" title="">Delete post</a></li>
                                                    @endif
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
                                        <div class="job-status-bar">
{{--                                            <ul class="like-com">--}}
{{--                                                <li>--}}
{{--                                                    <a href="#" class="active"><i class="fas fa-heart"></i> Like</a>--}}
{{--                                                    <img src="{{asset('assets/service/images/liked-img.png')}}" alt="">--}}
{{--                                                    <span>25</span>--}}
{{--                                                </li>--}}
{{--                                                <li><a href="#" class="com"><i class="fas fa-comment-alt"></i> Comments 15</a></li>--}}
{{--                                            </ul>--}}
{{--                                            <a href="#"><i class="fas fa-eye"></i>Views 50</a>--}}
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="right-sidebar">
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

@endsection
