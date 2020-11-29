@extends('website.layout')
@section('content')

    <div class="container">
        <ul class="breadcrumb">
            <li class="breadcrumb-item"> <a href="{{ url('/') }}"> <i class="fa fa-home"></i>&nbsp; </a></li>
            <li class="breadcrumb-item"><a href="/">প্রথমপাতা</a> >> </a> </li>
        </ul>
    </div>
    <div class="container">
    </div>
    <section>
        <div class="container">
            <div class="row has-sidebar">
                <div class="col-md-9">

                    <div class="row p-t-20 ">
                        <div class="section-title">
                            <h2>{{ $category->name }}</h2>
                        </div>
                        @if(!$posts->isEmpty())
                            <div class="post-items p-b-20 p-t-20 br-bottom">
                                <div class="row">

                                    @foreach($posts as $post)
                                        <div class="post-item col-md-3 br-left">
                                            <a href="{{ url('post', $post->slug) }}">
                                                <figure>
                                                    <img src="{{ asset('public/uploads/images/posts/' . $post->getImage('medium') ) }}" alt="{{ $post->title }}">
                                                    @if($post->video_type)
                                                        <div class="link-icon"><i class="fa fa-play"></i></div>
                                                    @endif
                                                </figure>
                                                <h4 class="post-title" style="line-height: normal">{{ $post->title }}</h4>
                                            </a>
                                            <p class="category">{{ $category->name }}</p>
                                        </div>
                                    @endforeach
                                </div>
                            </div>

                        @else
                            {{ _lang('No Post Found!') }}
                        @endif

                    </div>

                    @if(!$posts->isEmpty())
                        <div class="pagination_links">
                            <!-- Pagination -->
                            {{ $posts->links() }}
                        </div>
                    @endif
                </div>
                <div class="col-md-3 sidebar">
                    @if(get_option('advertisement_one_status', 0))
                        <div class="advert" style="margin-bottom:5px; padding-top: 5px;">
                            <div class="row ">
                                <div class="col-xs-12 p-t-10">
                                    <a class="post-item" href="{{ get_option('advertisement_one_link', '#') }}">
                                        <figure class="img-holder">
                                            {!! get_option('advertisement_one_content') !!}
                                        </figure>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endif
                    <div class="tabs-container p-t-10" style="height: 410px;">
                        <div class="tabs-wrapper">
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active">
                                    <a class="p-5" href="#latest" aria-controls="latest" role="tab" data-toggle="tab">
                                        <h3 class="no-margin no-padding">{{ _lang('Latest Post') }}</h3>
                                    </a></li>
                                <li role="presentation">
                                    <a class="p-5" href="#popular" aria-controls="popular" role="tab" data-toggle="tab">
                                        <h3 class="no-margin no-padding">{{ _lang('Most Popular') }}</h3>
                                    </a></li>
                            </ul>
                            <div class="tab-content" style="overflow: scroll; height: 345px;overflow-x: hidden;">
                                <div role="tabpanel" class="tab-pane fade in active" id="latest">
                                    <div class="most-viewed" id="latest">
                                        <div class="row mobile_list_simple ">
                                            @php
                                                $posts = App\Post::orderBy('id', 'DESC')->limit(15)->get();
                                            @endphp
                                            @foreach($posts as $post)
                                                <div class="col-xs-12 p-t-10 p-b-10 br-bottom item">
                                                    <a href="{{ url('post', $post->slug) }}">
                                                        <div class="title-holder">
                                                            <h3 class="post-title no-margin">{{ $post->title }}</h3>
                                                        </div>
                                                        <div class="category-meta">
                                                            <p class="category">
                                                                @foreach($post->categories as $key => $category)
                                                                    {{ $category->category->name }}{{ $key != $post->categories->count() - 1 ? ',' : '' }}
                                                                @endforeach
                                                            </p>
                                                        </div>
                                                    </a>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="popular">
                                    <div class="most-viewed" id="most-today">
                                        <div class="row mobile_list_simple ">
                                            @php
                                                $most_view_posts = App\Post::select("posts.*", "post_views.views")
                                                ->join('post_views', 'posts.id', 'post_views.post_id')
                                                ->orderBy('views', 'DESC')
                                                ->limit(15)
                                                ->get();
                                            @endphp
                                            @foreach($most_view_posts as $post)
                                                <div class="col-xs-12 p-t-10 p-b-10 br-bottom item">
                                                    <a href="{{ url('post', $post->slug) }}">
                                                        <div class="title-holder">
                                                            <h3 class="post-title no-margin">{{ $post->title }}</h3>
                                                        </div>
                                                        <div class="category-meta">
                                                            <p class="category">
                                                                @foreach($post->categories as $key => $category)
                                                                    {{ $category->category->name }}{{ $key != $post->categories->count() - 1 ? ',' : '' }}
                                                                @endforeach
                                                            </p>
                                                        </div>
                                                    </a>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="social-connect">
                        <ul class="social--redius social--color">
                            <li><a data-fb="fb_link" class="social__facebook" title="Facebook" href="{{ get_option('facebook_link') }}"><i class="fa fa-facebook"></i></a></li>
                            <li><a data-twitter="twitter_link" class="social__twitter" title="Twitter" href="{{ get_option('twitter_link') }}"><i class="fa fa-twitter"></i></a></li>
                            <li><a data-youtube="youtube_link" class="social__youtube" title="Youtube" href="{{ get_option('youtube_link') }}"><i class="fa fa-youtube"></i></a></li>
                            <li><a data-linkedin="linkedin_link" class="social__linkedin" title="Linkedin" href="{{ get_option('linkedin_link') }}"><i class="fa fa-linkedin"></i></a></li>
                            <li><a data-insta="insta_link" class="social__instagram" title="Instagram" href="{{ get_option('instagram_link') }}"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                    @if(get_option('advertisement_two_status', 0))
                        <div class="advert" style="margin-bottom:5px; padding-top: 5px;">
                            <div class="row ">
                                <div class="col-xs-12 p-t-10">
                                    <a class="post-item" href="{{ get_option('advertisement_two_link', '#') }}">
                                        <figure class="img-holder">
                                            {!! get_option('advertisement_two_content') !!}
                                        </figure>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endif

                    <div class="ac" style="padding-top: 1em;">
                        <div class="archive_holder">
                            <div class="archive_title">
                                <h3><a href="#">{{ _lang('Calendar') }}</a></h3>
                            </div>
                            <div class="arch_calendar_wrapper">
                                <div id="archive_calendar" class="calendarWraper" style="width: 295px;">
                                    <div class="calendarTop">
                                        <div class="datePicker">
                                            <select class="select monthSelector">
                                                <option value="1">জানুয়ারি</option>
                                                <option value="2">ফেব্রুয়ারি</option>
                                                <option value="3">মার্চ</option>
                                                <option value="4">এপ্রিল</option>
                                                <option value="5">মে</option>
                                                <option value="6">জুন</option>
                                                <option value="7">জুলাই</option>
                                                <option value="8">আগস্ট</option>
                                            </select>
                                            <select class="select yearSelector">
                                                <option value="2018">২০১৮</option>
                                                <option value="2019">২০১৯</option>
                                                <option value="2020">২০২০</option>
                                            </select>
                                        </div>
                                    </div>
                                    <dl class="dayZone">
                                        <dt style="width: 42px; height: 42px; line-height: 39px;">শনি</dt>
                                        <dt style="width: 42px; height: 42px; line-height: 39px;">রোব</dt>
                                        <dt style="width: 42px; height: 42px; line-height: 39px;">সোম</dt>
                                        <dt style="width: 42px; height: 42px; line-height: 39px;">মঙ্গল</dt>
                                        <dt style="width: 42px; height: 42px; line-height: 39px;">বুধ</dt>
                                        <dt style="width: 42px; height: 42px; line-height: 39px;">বৃহ</dt>
                                        <dt style="width: 42px; height: 42px; line-height: 39px;">শুক্র</dt>
                                        <dd class="dn" style="width: 42px; height: 42px; line-height: 39px;"></dd>
                                    </dl>
                                    <dl class="dateZone dayHolder">
                                        <dd style="width: 42px; height: 42px; line-height: 39px;"><a href="file:///archive/2020-08-01" class="" style="width: 39px; height: 39px; line-height: 39px;">০১</a></dd>
                                        <dd style="width: 42px; height: 42px; line-height: 39px;"><a href="file:///archive/2020-08-02" class="" style="width: 39px; height: 39px; line-height: 39px;">০২</a></dd>
                                        <dd style="width: 42px; height: 42px; line-height: 39px;"><a href="file:///archive/2020-08-03" class="" style="width: 39px; height: 39px; line-height: 39px;">০৩</a></dd>
                                        <dd style="width: 42px; height: 42px; line-height: 39px;"><a href="file:///archive/2020-08-04" class="" style="width: 39px; height: 39px; line-height: 39px;">০৪</a></dd>
                                        <dd style="width: 42px; height: 42px; line-height: 39px;"><a href="file:///archive/2020-08-05" class="" style="width: 39px; height: 39px; line-height: 39px;">০৫</a></dd>
                                        <dd style="width: 42px; height: 42px; line-height: 39px;"><a href="file:///archive/2020-08-06" class="" style="width: 39px; height: 39px; line-height: 39px;">০৬</a></dd>
                                        <dd style="width: 42px; height: 42px; line-height: 39px;"><a href="file:///archive/2020-08-07" class="" style="width: 39px; height: 39px; line-height: 39px;">০৭</a></dd>
                                        <dd style="width: 42px; height: 42px; line-height: 39px;"><a href="file:///archive/2020-08-08" class="" style="width: 39px; height: 39px; line-height: 39px;">০৮</a></dd>
                                        <dd style="width: 42px; height: 42px; line-height: 39px;"><a href="file:///archive/2020-08-09" class="" style="width: 39px; height: 39px; line-height: 39px;">০৯</a></dd>
                                        <dd style="width: 42px; height: 42px; line-height: 39px;"><a href="file:///archive/2020-08-10" class="" style="width: 39px; height: 39px; line-height: 39px;">১০</a></dd>
                                        <dd style="width: 42px; height: 42px; line-height: 39px;"><a href="file:///archive/2020-08-11" class="" style="width: 39px; height: 39px; line-height: 39px;">১১</a></dd>
                                        <dd style="width: 42px; height: 42px; line-height: 39px;"><a href="file:///archive/2020-08-12" class="" style="width: 39px; height: 39px; line-height: 39px;">১২</a></dd>
                                        <dd style="width: 42px; height: 42px; line-height: 39px;"><a href="file:///archive/2020-08-13" class="" style="width: 39px; height: 39px; line-height: 39px;">১৩</a></dd>
                                        <dd style="width: 42px; height: 42px; line-height: 39px;"><a href="file:///archive/2020-08-14" class="" style="width: 39px; height: 39px; line-height: 39px;">১৪</a></dd>
                                        <dd style="width: 42px; height: 42px; line-height: 39px;"><a href="file:///archive/2020-08-15" class="" style="width: 39px; height: 39px; line-height: 39px;">১৫</a></dd>
                                        <dd style="width: 42px; height: 42px; line-height: 39px;"><a href="file:///archive/2020-08-16" class="" style="width: 39px; height: 39px; line-height: 39px;">১৬</a></dd>
                                        <dd style="width: 42px; height: 42px; line-height: 39px;"><a href="file:///archive/2020-08-17" class="" style="width: 39px; height: 39px; line-height: 39px;">১৭</a></dd>
                                        <dd style="width: 42px; height: 42px; line-height: 39px;"><a href="file:///archive/2020-08-18" class="" style="width: 39px; height: 39px; line-height: 39px;">১৮</a></dd>
                                        <dd style="width: 42px; height: 42px; line-height: 39px;"><a href="file:///archive/2020-08-19" class="" style="width: 39px; height: 39px; line-height: 39px;">১৯</a></dd>
                                        <dd style="width: 42px; height: 42px; line-height: 39px;"><a href="file:///archive/2020-08-20" class="" style="width: 39px; height: 39px; line-height: 39px;">২০</a></dd>
                                        <dd style="width: 42px; height: 42px; line-height: 39px;"><a href="file:///archive/2020-08-21" class="" style="width: 39px; height: 39px; line-height: 39px;">২১</a></dd>
                                        <dd style="width: 42px; height: 42px; line-height: 39px;"><a href="file:///archive/2020-08-22" class="" style="width: 39px; height: 39px; line-height: 39px;">২২</a></dd>
                                        <dd style="width: 42px; height: 42px; line-height: 39px;"><a href="file:///archive/2020-08-23" class="" style="width: 39px; height: 39px; line-height: 39px;">২৩</a></dd>
                                        <dd style="width: 42px; height: 42px; line-height: 39px;"><a href="file:///archive/2020-08-24" class="active" style="width: 39px; height: 39px; line-height: 39px;">২৪</a></dd>
                                        <dd style="width: 42px; height: 42px; line-height: 39px;"><a href="javascript:" class="disabled" style="width: 39px; height: 39px; line-height: 39px;">২৫</a></dd>
                                        <dd style="width: 42px; height: 42px; line-height: 39px;"><a href="javascript:" class="disabled" style="width: 39px; height: 39px; line-height: 39px;">২৬</a></dd>
                                        <dd style="width: 42px; height: 42px; line-height: 39px;"><a href="javascript:" class="disabled" style="width: 39px; height: 39px; line-height: 39px;">২৭</a></dd>
                                        <dd style="width: 42px; height: 42px; line-height: 39px;"><a href="javascript:" class="disabled" style="width: 39px; height: 39px; line-height: 39px;">২৮</a></dd>
                                        <dd style="width: 42px; height: 42px; line-height: 39px;"><a href="javascript:" class="disabled" style="width: 39px; height: 39px; line-height: 39px;">২৯</a></dd>
                                        <dd style="width: 42px; height: 42px; line-height: 39px;"><a href="javascript:" class="disabled" style="width: 39px; height: 39px; line-height: 39px;">৩০</a></dd>
                                        <dd style="width: 42px; height: 42px; line-height: 39px;"><a href="javascript:" class="disabled" style="width: 39px; height: 39px; line-height: 39px;">৩১</a></dd>
                                    </dl>
                                </div>
                            </div>
                        </div>
                    </div>
                    @if(get_option('advertisement_three_status', 0))
                        <div class="advert" style="margin-bottom:20px; padding-top: 5px;">
                            <div class="row ">
                                <div class="col-xs-12 p-t-10">
                                    <a class="post-item" href="{{ get_option('advertisement_three_link', '#') }}">
                                        <figure class="img-holder">
                                            {!! get_option('advertisement_three_content') !!}
                                        </figure>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>
@endsection

