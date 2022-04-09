@extends('layouts.adminShop')

@section('contents')
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
                                {{--                                    <div class="filter-dd">--}}
                                {{--                                        <div class="filter-ttl">--}}
                                {{--                                            <h3>Pay Rate / Hr ($)</h3>--}}
                                {{--                                            <a href="#" title="">Clear</a>--}}
                                {{--                                        </div>--}}
                                {{--                                        <div class="rg-slider">--}}
                                {{--                                            <input class="rn-slider slider-input" type="hidden" value="5,50" style="display: none;"><div class="slider-container theme-green" style="width: 300px;">			<div class="back-bar">                <div class="selected-bar" style="width: 93px; left: 10.5px;"></div>                <div class="pointer low" style="left: 4px;"></div><div class="pointer-label low" style="left: 0px;">5</div>                <div class="pointer high" style="left: 97px;"></div><div class="pointer-label high" style="left: 78px;">50</div>                <div class="clickable-dummy"></div>            </div>            <div class="scale"></div>		</div>--}}
                                {{--                                        </div>--}}
                                {{--                                        <div class="rg-limit">--}}
                                {{--                                            <h4>1</h4>--}}
                                {{--                                            <h4>100+</h4>--}}
                                {{--                                        </div>--}}
                                {{--                                    </div>--}}
                                {{--                                    <div class="filter-dd">--}}
                                {{--                                        <div class="filter-ttl">--}}
                                {{--                                            <h3>Experience Level</h3>--}}
                                {{--                                            <a href="#" title="">Clear</a>--}}
                                {{--                                        </div>--}}
                                {{--                                        <form class="job-tp">--}}
                                {{--                                            <select>--}}
                                {{--                                                <option>Select a experience level</option>--}}
                                {{--                                                <option>3 years</option>--}}
                                {{--                                                <option>4 years</option>--}}
                                {{--                                                <option>5 years</option>--}}
                                {{--                                            </select>--}}
                                {{--                                            <i class="fa fa-ellipsis-v" aria-hidden="true"></i>--}}
                                {{--                                        </form>--}}
                                {{--                                    </div>--}}
                                {{--                                    <div class="filter-dd">--}}
                                {{--                                        <div class="filter-ttl">--}}
                                {{--                                            <h3>Countries</h3>--}}
                                {{--                                            <a href="#" title="">Clear</a>--}}
                                {{--                                        </div>--}}
                                {{--                                        <form class="job-tp">--}}
                                {{--                                            <select>--}}
                                {{--                                                <option>Select a country</option>--}}
                                {{--                                                <option>United Kingdom</option>--}}
                                {{--                                                <option>United States</option>--}}
                                {{--                                                <option>Russia</option>--}}
                                {{--                                            </select>--}}
                                {{--                                            <i class="fa fa-ellipsis-v" aria-hidden="true"></i>--}}
                                {{--                                        </form>--}}
                                {{--                                    </div>--}}
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="main-ws-sec">
                            <div class="posts-section">
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
@endsection
