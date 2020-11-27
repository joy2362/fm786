@extends('website.layout')
@section('content')

<div class="container">
    <ul class="breadcrumb">
        <li class="breadcrumb-item"> <a href="{{ url('/') }}"> <i class="fa fa-home"></i>&nbsp; </a></li>
        <li class="breadcrumb-item"><a href="/">প্রথমপাতা</a> >> {{ $category->name }} >></a> </li>
    </ul>
</div>
<div class="container">

</div>
<section>
    <style>
        figure img {
    width: 93%;
}

        h4 {
            font-size: 16px;
            font-weight: 600;
            line-height: 24px;
        }
      h3.post-title {
      color: #000;
    font-weight: 300;
   
}
      .textp{
      color: #000;
    font-weight: 300;
    
      }
       nav.navbar.bootsnav ul.nav>li>a {
    font-size: 15px;
    border-right: 0px solid #fff;
}              
    </style>
    <div class="container">
        <style>
            @media (min-width: 992px)
            {
                .has-sidebar>div:first-child {
                    width: calc(100%);
                }
            }
        </style>
        <div class="row has-sidebar">
            <div class="col-md-9">
                <div class="row two-col-layout">
                    <div class="col-left br-right">

                        @if($posts->count())
                        @php
                        $post = $posts[0];
                        @endphp
                        <div class="row  no-margin p-t-20 ">
                            <div class="col-md-6">
                                <a class="post-item" href="{{ url('post', $post->slug) }}">
                                    <figure class="">
                                        <img src="{{ asset('public/uploads/images/posts/' . $post->getImage('medium') ) }}" alt="{{ $post->title }}">
                                    </figure>
                                    <div class="post-content no-padding">
                                        <h2 class="post-title">
                                           {!! $post->title !!} 
                                        </h2>

                                        <div class="textp">
                                          {!! Str::limit($post->post_body, 150) !!}

                                      </div>
                                  </a>
                                  <div class="category-meta">
                                    <a href="category/{{ $category->slug }}">
                                        <p class="category">
                                            @foreach($post->categories as $key => $categoryy)
                                            {{ $categoryy->category->name }}{{ $key != $post->categories->count() - 5 ? ',' : '' }}
                                            @endforeach
                                        </p></a>
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="post-items">
                                    <div class="row">
                                        @foreach($posts as $key => $post)
                                        @php
                                        if($key == 0){
                                            continue;
                                        }
                                        if($key > 4){
                                            break;
                                        }
                                        @endphp
                                        <div class="col-xs-6">
                                            <a class="post-item" href="{{ url('post', $post->slug) }}">
                                                <figure class="">
                                                    <img src="{{ asset('public/uploads/images/posts/' . $post->getImage('medium') ) }}" width="130px" height="100px"alt="{{ $post->title }}">
                                                </figure>
                                                <div class="post-content no-padding">
                                                    <h3 class="post-title" style="">
                                                    {{ $post->title }}
                                                </h3> </a>
                                                <div class="category-meta""><br>
                                                    <a href="category/{{ $category->slug }}">
                                                        <p class="category">
                                                            @foreach($post->categories as $key => $category)
                                                            {{ $category->category->name }}{{ $key != $post->categories->count() - 1 ? ',' : '' }}
                                                            @endforeach
                                                        </p>
                                                    </a>
                                                </div>
                                            </div>

                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif
                        <div class="row p-t-20 ">

                            <br><h2></h2>
                            <div class="section-title">
                               <div class="p-b-10">
                                <a href="/category/{{ $category->slug }}">
                                    <h3 class="topic-style"><i class="fa fa-bolt"></i>&nbsp; {{ $category->name }} এর আরও খবর </>
                                    </h3>
                                </a>
                            </div>

                        </div>
                        @if(!$posts->isEmpty())
                        <div class="post-items p-b-20 p-t-20 br-bottom">
                            <div class="row">

                                @foreach($posts as $key => $post)
                                @if ($key >= 5)
                                    <div class="post-item col-md-3 br-left" style="
                                height: 200px;
                                ">
                                <a href="{{ url('post', $post->slug) }}">
                                    <figure>
                                        <img src="{{ asset('public/uploads/images/posts/' . $post->getImage('medium') ) }}" width="130px" height="130px" alt="{{ $post->title }}">
                                        @if($post->video_type)
                                        <div class="link-icon"><i class="fa fa-play"></i></div>
                                        @endif
                                    </figure>
                                    <h4 class="post-title">{{ $post->title }}</h4>
                                </a><br>
                            </div>
                                @endif
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

