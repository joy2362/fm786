@extends('website.layout')

@section('content')
<div class="container">
</div>
<div class="container p-b-20 br-bottom">
    <div class="row two-col-layout">
        <div class="col-left bg-grey">
            <div class="row no-margin p-b-20 br-bottom p-t-20 bg-white">
            
    </style>
            @if(get_option('headline_status', 0))
            <div class="myWrapper demo3">
                
                    <ul>
                        @foreach(get_headlines() as $key => $headline)
                        <li>
                            <a href={{ url('post/' . $headline->slug) }}>
                               <img src="http://kksolutionbd.com/fm786/public/uploads/images/logo.png" style="width:50px;"> {{ $headline->title }}
                               
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </div>

            @endif
            </div>
            @if(get_option('featured_status', 0))
            @php
            $post_ids = json_decode(get_option('featured_posts'));
            @endphp
            @if($post_ids)
            <div class="row no-margin p-b-20 br-bottom p-t-20">
                @php
                $post = App\Post::where('id', $post_ids[0])->where('status', 1)->first();
                @endphp
                <div class="col-md-9 col-lg-9">
                    <div class="row no-margin lead-news bg-violet">
                        <a href="{{ url('post', $post->slug) }}">
                            <div class="col-md-5 p-10">
                                <div class="post-content">
                                    <div class="post-metas">
                                        <p class="category">
                                            @foreach($post->categories as $key => $categoryy)
                                            {{ $categoryy->category->name }}{{ $key != $post->categories->count() - 1 ? ',' : '' }}
                                            @endforeach
                                        </p>
                                    
                                    </div>
                                    <style>
                                      .p-t-51 {
    padding-top: 5px;
    border: 1px solid #ed1c24 !important;
    background: #ed1c24;
    padding: 10px;
    color: #fff;
    margin-top: 23px;
    margin-left: 0px ! important;
    background: #ed1c24;
    color: #fff;
     display: visible !important; 
    margin-right: 15px;
    padding: 5px 10px;
    text-decoration: none;
    -webkit-border-top-right-radius: 50px;
    -webkit-border-bottom-right-radius: 50px;
    -moz-border-radius-topright: 50px;
    -moz-border-radius-bottomright: 50px;
    border-top-right-radius: 50px;
    border-bottom-right-radius: 50px;
}
                                    .bg-black {
    background: #b1a5a5;
}
                                        .lead-news p.category {
    color: #000;
    font-weight: 300;
}
h3.post-title {
    margin: 10px 0;
    color: #000;
      font-size: 19px;
  
   
}
.slide2 h1 {
    font-size: 21px;
    margin-top: 68px;
    font-weight: 300;
    color: #fff;
}
.textp2 {
    overflow: hidden;
    text-overflow: ellipsis;
    display: -webkit-box;
    color: #fff;
    -webkit-line-clamp: 5 !important;
    -webkit-box-orient: vertical;
}
h2 {
    font-size: 25px;
}
h3 {
    font-size: 19px;
   
}
.h3 {
    font-size:19px !important;
}
.textp2 a {
    overflow: hidden;
    text-overflow: ellipsis;
    display: -webkit-box;
    color: #fff;
      -webkit-line-clamp: 5 !important;
    -webkit-box-orient: vertical;
}
nav.navbar.bootsnav ul.dropdown-menu.megamenu-content .content ul.menu-col li a:hover, .side .widget ul.link li a:hover, .side .widget ul.link li a:focus, .check-list li:before, ul.cart-list>li>h6>a, .attr-nav>ul>li>a:hover, .attr-nav>ul>li>a:focus, nav.navbar-sidebar ul.nav li.dropdown.on>a, nav.navbar-sidebar .dropdown .megamenu-content .col-menu.on .title, nav.navbar-sidebar ul.nav li.dropdown ul.dropdown-menu li a:hover, nav.navbar ul.nav li.dropdown.on>a, nav.navbar.navbar-inverse ul.nav li.dropdown.on>a, nav.navbar-sidebar ul.nav li.dropdown.on ul.dropdown-menu li.dropdown.on>a, nav.navbar .dropdown .megamenu-content .col-menu.on .title, nav.navbar ul.nav>li>a:hover, nav.navbar ul.nav>li.active>a:hover, nav.navbar ul.nav li.active>a, nav.navbar li.dropdown ul.dropdown-menu>li a:hover {
    color: #000000!important;
}
h1 {
   font-size: 30px;
    font-weight: 500;
    line-height: 30px;
}
#flexslider_422 h3 {
    padding-top: 5%;
    /* padding-top: 3%; */
    color: #fff;
    /* padding-bottom: 3%; */
}
@media (min-width:320px) and (max-width:568px)

{
.col-xs-6 {
    width: 100%;
    PADDING: 20PX;
}    
    .post-item {
     flex: 0 0 100%; 
}
    .demo3 ul {
       left: 68px; 
}
.header-right-menu>ul>li {
    list-style: none;
    display: inline-block;
    color: #fff;
    background: #eb0254 !important;
    font-size: 13px;
    font-weight: 300;
    padding: 2px;
    border-right: 1px solid #3a3b44;
    letter-spacing: .2px;
}
 .col-xs-6 {
    width: 100%;
    padding: 20px;
}   
.bg-black {
    background: #ffffff !important;
    padding: 22px;
}
.p-t-5 {
    padding-top: 30px;
}    
}


                                    </style>
                                    <div class="title-holder">
                                        <h1 class="post-title no-margin">{{ $post->title }}</h1>
                                    </div>
                                    <div class="post_desc p-t-10">
                                      <div class="textp2" style="font-size: 16px;">
                                            {!! $post->post_body !!}
                                           <br> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-7 no-padding">
                                <div class="img-holder">
                                    <img src="{{ asset('public/uploads/images/posts/' . $post->getImage('medium') ) }}" alt="{{ $post->title }}">
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                @php
                array_shift($post_ids)
                @endphp
                @if($post_ids)
                @php
                $post = App\Post::where('id', $post_ids[0])->where('status', 1)->first();
                @endphp
                <div class="col-md-3 col-lg-3 lead-news-2">
                    <div class=" no-margin">
                        <a class="post-item bg-grey" href="{{ url('post', $post->slug) }}">
                            <figure class="img-holder">
                                <img src="{{ asset('public/uploads/images/posts/' . $post->getImage('medium') ) }}" width="170px" height="173px" alt="{{ $post->title }}">
                            </figure>
                            <div class="post-content">
                                <div class="post-metas">
                                   
                                    <p class="category">
                                        @foreach($post->categories as $key => $category)
                                        {{ $category->category->name }}{{ $key != $post->categories->count() - 1 ? ',' : '' }}
                                        @endforeach
                                    </p>
                                
                                </div>
                                <div class="title-holder">
                                    <h3 class="post-title no-margin">{{ $post->title }}</h3>
                                      <br>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                @endif
            </div>
            @php
            array_shift($post_ids)
            @endphp
            @if($post_ids)
            <div class="row no-margin br-bottom p-b-20 p-t-20">
                @php
                $posts = App\Post::whereIn('id', $post_ids)->where('status', 1)->get();
                @endphp
                @foreach($posts as $post)
                <div class="col-xs-6 col-md-3 col-lg-3 p-b-20">
                    <a class="post-item bg-grey" href="{{ url('post', $post->slug) }}">
                        <figure class="img-holder">
                            <img src="{{ asset('public/uploads/images/posts/' . $post->getImage('medium') ) }}" width="186px" height="123px" alt="{{ $post->title }}">
                        </figure>
                        <div class="post-content">
                            <div class="post-metas">
                              
                                <p class="category">
                                    @foreach($post->categories as $key => $category)
                                    {{ $category->category->name }}{{ $key != $post->categories->count() - 1 ? ',' : '' }}
                                    @endforeach
                                </p>
                           
                            </div>
                            <div class="title-holder">
                                <h3 class="post-title no-margin">{{ $post->title }}</h3> 
                            </div>
                        </div>
                    </a>
                </div>
            
                @endforeach
            </div>
                    
               @endif
            @endif
            @endif          @if(get_option('advertisement_middle_status', 0))
    
                        {!! get_option('advertisement_middle_content') !!}
                   
  
    @endif
            
           

<style>
    #cboxLoadedContent{
    width: 824px;
    overflow: auto;
    height: 473px;
    border: 12px solid #000;
    background: url(http://beta.fm786.com/public/uploads/images/posts/medium-1600028….jpg);
}
.division-tabs .tabs {
    position: relative;
    margin: 0rem;
    background: #dc3545;
    height: 14.75rem;
}
.division-tabs .tab-label {
    font-family: solaiman;
    position: relative;
    display: block;
    line-height: 2.75em;
    height: 2.6em;
    /* margin-bottom: 9px; */
    padding: 0 1.618em;
    background: #dc3545;
    border-left: .125rem solid #ffffff;
    border-top: 0rem solid #ffffff;
    border-bottom: 0rem solid #f6f6f6;
    color: #ffffff;
    cursor: pointer;
    top: 0;
    transition: all .25s;
}
label {
    display: inline-block;
    max-width: 100%;
    margin-bottom: 5px;
    font-weight: 300;
}
</style>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="http://www.jacklmoore.com/colorbox/jquery.colorbox.js"></script>
    
<div class="row no-margin br-bottom p-b-20 p-t-20 p-r-20 br-top">
<div class="col-xs-6">
<div class="bg-white p-t-20 p-r-10">
<div class="row no-margin">
<div class="col-sm-12 hidden-xs">
<div class="p-b-10"><br>
<a href="/corona-virus" class="">
<h3 class="topic-style"><i class="fa fa-bolt"></i>&nbsp; বাংলাদেশে করোনা </h3>
</a>
</div>

    @if(get_option('advertisement_corona_status', 0))
    
                        {!! get_option('advertisement_corona_content') !!}
                   
  
    @endif
    <h3 class="topic-style"><i class="fa fa-bolt"></i>&nbsp;   আমেরিকার  করোনা </h3>
</a>

    @if(get_option('advertisement_usacorona_status', 0))
    
                        {!! get_option('advertisement_usacorona_content') !!}
                   
  
    @endif
</div>
</div>
</div>
</div>
<style>
    .row {
     margin-right: -0px; 
    margin-left: -15px;
}
.br-bottom {
    border-bottom: 1px solid #e7e7e7 !important;
}
    h3.post-title {
    margin: 10px 0;
    color: #000;
    font-weight: 300;
   
    overflow: hidden;
    text-overflow: ellipsis;
    display: -webkit-box;
    padding-left: 0px !important;
    -webkit-line-clamp: 2 !important;
    -webkit-box-orient: vertical;
}
  
.bg-black .post-content .post-title:hover, .bg-black .post-item:hover .post-title, .bg-black .post-item:hover p {
    color: rgb(23 23 22 / 85%);
}
    </style>
<div class="col-xs-6 p-l-20">
<div class="row">@php
                $posts = App\Post::whereIn('id', $post_ids)->where('status', 1)->get();
                @endphp
                @foreach($posts as $post)
<div class="col-xs-6">
<div class="row mobile_list_simple  bg-white min-height ">
     
<div class="col-xs-12 p-t-10 p-b-10 br-bottom item"><br>
      @foreach($post->categories as $key => $category)
                                    {{ $category->category->name }}{{ $key != $post->categories->count() - 1 ? ',' : '' }}
                                    @endforeach

<div class="title-holder"><br>
    <a href="{{ url('post', $post->slug) }}">
<h3 class="post-title no-margin">{{ $post->title }}</h3>
</a><br>
</div>
<div class="category-meta">
    
<p class="category">{{ $category->name }}
</p>
</div>

</div>

</div> </div>  @endforeach
</div>
</div>
<div class="col-xs-12 p-r-0 p-t-10">

</div>
</div>
            <div class="row no-margin br-bottom p-b-20 p-t-20 p-r-20 br-top">
                <div class="col-xs-6" style="width: 100%;">
                    <div class="bg-white p-t-20 p-r-10">
                         @if(get_option('advertisement_live-box-top_status', 0))
                           {!! get_option('advertisement_live-box-top_content') !!}
                             @endif
                    </div>
                     
                </div>
                
                <div class="col-xs-6 p-l-20">
                    <div class="row">
                      
                        <div class="col-xs-6">
                        
    <div class="advert" style="margin-bottom:5px; padding-top: 5px;">
        <div class="row ">
		
            <div class="col-xs-12 p-t-10">
                <a class="post-item" href="{{ get_option('advertisement_one_link', '#') }}">
                    <figure class="img-holder">
                     
                    </figure>
                </a>
            </div>
        </div>
    </div>
  
	
                        </div>
                      
                    </div>
                </div>
            </div>
           <style>
            .special-feature .contents {
    max-height: 442px;
     overflow-y: scroll; 
    overflow-x: hidden;
    margin-bottom: 7px;
}
            .topic-style {
    background-color: #dc3545;
    display: unset;
    color: #fff;
    border-right: 10px solid #d0d71f;
    padding: 10px;
}
.bg-black .post-content p {
    color: #f90000;
}
.category-meta h3, .category-meta p {
    color: #ed1c24 !important;
}
.special-feature h2 {
    color: #ffff;
    padding: 10px;
    border-right: 10px solid #d0d71f;
    text-align: center;
    font-size: 24px;
}
.bg-grey .post-content {
    min-height: 91px;
}
           </style> 
            <div class="p-b-10">
                                    <a href="#" class="">
                                        <h3 class="topic-style"><i class="fa fa-bolt"></i>&nbsp; লাইভ প্রোগাম </h3>
                                    </a>
                                </div>
                               
  @if(get_option('advertisement_live_status', 0))
    
                        {!! get_option('advertisement_live_content') !!}
                   
  
    @endif
	
            @php
            $posts = App\Post::whereNotNull('video_url')->where('status', 1)->orderBy('id', 'DESC')->limit(5)->get();
            @endphp
            @if($posts->count())
            <div class="row no-margin br-bottom p-b-20 p-t-20 p-r-20 br-top">
                @php
                $post = $posts[0];
                @endphp
                <div class="col-xs-6">
                    <div class="p-b-10">
                                    <a href="category/{{ $category->slug }} class="">
                                      <br>  <h3 class="topic-style"><i class="fa fa-bolt"></i>&nbsp; ভিডিও গ্যালারী  </h3>
                                    </a>
                                </div>
                               
                    <div class="bg-black p-t-20 p-l-20 p-r-20">
                        <div class="row  video ">
                            <div class="col-xs-12 p-t-10">
                                <a class="post-item" href="{{ $post->video_url }}">
                                    <figure class="img-holder">
                                        <img src="{{ asset('public/uploads/images/posts/' . $post->getImage('medium') ) }}" alt="{{ $post->title }}">
                                        <div class="link-icon"><i class="fa fa-play"></i></div>
                                    </figure>
                                    <div class="p-b-10">
                                        <div class="title-holder p-t-10">
                                            <h3 class="post-title no-margin p-b-10">{{ $post->title }}</h3>
                                          <div class="textp">
                                  {!! $post->post_body !!} 
                                </div>
          </div>
                                        <div class="category-meta">
                                            <p class="category">
                                                @foreach($post->categories as $key => $category)
                                                {{ $category->category->name }}{{ $key != $post->categories->count() - 1 ? ',' : '' }}
                                                @endforeach
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 p-r-0 p-l-10">
                    <div class="row p-0 video">
                        @foreach($posts as $key => $post)
                        @php
                        if($key == 0){
                        continue;
                        }
                        @endphp
                        <div class="col-xs-6">
                            <a class="post-item bg-black" href="{{ url('post', $post->slug) }}">
                                <figure class="img-holder">
                                    <img src="{{ asset('public/uploads/images/posts/' . $post->getImage('medium') ) }}" alt="{{ $post->title }}">
                                    <div class="link-icon"><i class="fa fa-play"></i></div>
                                </figure>
                                <div class="post-content">
                                    <div class="post-metas">
                                        <p class="category">
                                            @foreach($post->categories as $key => $category)
                                            {{ $category->category->name }}{{ $key != $post->categories->count() - 1 ? ',' : '' }}
                                            @endforeach
                                        </p>
                                    </div>
                                    <div class="title-holder">
                                        <h3 class="post-title no-margin"> {{ $post->title }} </h3>

                                       <br>  

                                    </div>
                                </div>
                            </a>
                        </div>
                      
                        @endforeach
                    </div>
                    {{-- <div class="row m-t-20 p-0 video">
                        <div class="col-md-6">
                            <a class="post-item bg-black" href="#">
                                <figure class="img-holder">
                                  
                    <div class="link-icon"><i class="fa fa-play"></i></div>
                    </figure>
                    <div class="post-content">
                        <div class="post-metas">
                            
                        </div>
                        <div class="title-holder">
                            
                        </div>
                    </div>
                    </a>
                </div>
                
                <div class="col-xs-6">
                    
                       
                </div>
            </div> --}}
        </div>
    </div>
    @endif
</div>


<div class="col-right">

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
                       <h3 class="no-margin no-padding">{{ _lang('সর্বশেষ খবর') }}</h3>
                    </a></li>
                <li role="presentation">
                    <a class="p-5" href="#popular" aria-controls="popular" role="tab" data-toggle="tab">
                     <h3 class="no-margin no-padding">{{ _lang('জনপ্রিয়') }}</h3>
                    </a></li>
            </ul>
            <div class="tab-content" style="overflow: scroll; height: 345px;overflow-x: hidden;">
                <div role="tabpanel" class="tab-pane fade in active" id="latest">
                    <div class="most-viewed" id="latest">
                        <div class="row mobile_list_simple ">
                            @php
                            $posts = App\Post::where('status', 1)->orderBy('id', 'DESC')->limit(15)->get();
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
                            ->where('status', 1)
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

    <!--  right top -->
 <!--right special news -->
<div class="special-feature p-t-20 p-b-20">
        <div class="section-title bg-danger no-margin p-0">
            <a href="#">
                <h2>{{ get_option('single_category_post_right1_title') }}</h2>
            </a>
        </div>
        <div class="contents p-l-10">
            <div class="row ">
                @if(get_option('single_category_post_right1'))
                @php
                $category = App\Category::find(get_option('single_category_post_right1'));
                @endphp
                @if($category->posts->count())
                @foreach($category->posts as $key => $rowpost)
                @php
                    $post = $rowpost->post;
                @endphp
                <div class="col-xs-12 p-t-10">
                    <a class="post-item" href="{{ url('post', $post->slug) }}">
                        <figure class="img-holder">
                            <img src="{{ asset('public/uploads/images/posts/' . $post->getImage('medium') ) }}" alt="{{ $post->title }}">
                            <div class="link-icon"><i class="fa fa-play"></i></div>
                        </figure>
                        <div class="p-b-10">
                            <div class="title-holder p-t-10">
                                <h3 class="post-title no-margin p-b-10">{{ $post->title }}</h3>
                            </div>
                            <div class="category-meta">
                                <p class="category">
                                    @foreach($post->categories as $key => $categoryy)
                                    {{ $categoryy->category->name }}{{ $key != $post->categories->count() - 1 ? ',' : '' }}
                                    @endforeach
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
                @endif
                @endif
            </div>
        </div>
    </div>

    <!-- right top end --?
    <!--right special news -->
<div class="special-feature p-t-20 p-b-20">
        <div class="section-title bg-danger no-margin p-0">
            <a href="#">
                <h2>{{ get_option('single_category_post_right0_title') }}</h2>
            </a>
        </div>
        <div class="contents p-l-10">
            <div class="row ">
                @if(get_option('single_category_post_right0'))
                @php
                $category = App\Category::find(get_option('single_category_post_right0'));
                @endphp
                @if($category->posts->count())
                @foreach($category->posts as $key => $rowpost)
                @php
                    $post = $rowpost->post;
                @endphp
                <div class="col-xs-12 p-t-10">
                    <a class="post-item" href="{{ url('post', $post->slug) }}">
                        <figure class="img-holder">
                            <img src="{{ asset('public/uploads/images/posts/' . $post->getImage('medium') ) }}" alt="{{ $post->title }}">
                            <div class="link-icon"><i class="fa fa-play"></i></div>
                        </figure>
                        <div class="p-b-10">
                            <div class="title-holder p-t-10">
                                <h3 class="post-title no-margin p-b-10">{{ $post->title }}</h3>
                            </div>
                            <div class="category-meta">
                                <p class="category">
                                    @foreach($post->categories as $key => $categoryy)
                                    {{ $categoryy->category->name }}{{ $key != $post->categories->count() - 1 ? ',' : '' }}
                                    @endforeach
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
                @endif
                @endif
            </div>
        </div>
    </div>

    <!-- right special news end  

    
    <div class="special-feature p-t-20 p-b-20">
        <div class="section-title bg-danger no-margin p-0">
            <a href="#">
                <h2>{{ get_option('single_category_post_middle_title') }}</h2>
            </a>
        </div>
        <div class="contents p-l-10">
            <div class="row ">
                @if(get_option('single_category_post_middle'))
                @php
                $category = App\Category::find(get_option('single_category_post_middle'));
                @endphp
                @if($category->posts->count())
                @foreach($category->posts as $key => $rowpost)
                @php
                    $post = $rowpost->post;
                @endphp
                <div class="col-xs-12 p-t-10">
                    <a class="post-item" href="{{ url('post', $post->slug) }}">
                        <figure class="img-holder">
                            <img src="{{ asset('public/uploads/images/posts/' . $post->getImage('medium') ) }}" alt="{{ $post->title }}">
                            <div class="link-icon"><i class="fa fa-play"></i></div>
                        </figure>
                        <div class="p-b-10">
                            <div class="title-holder p-t-10">
                                <h3 class="post-title no-margin p-b-10">{{ $post->title }}</h3>
                            </div>
                            <div class="category-meta">
                                <p class="category">
                                    @foreach($post->categories as $key => $categoryy)
                                    {{ $categoryy->category->name }}{{ $key != $post->categories->count() - 1 ? ',' : '' }}
                                    @endforeach
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
                @endif
                @endif
            </div>
        </div>
    </div>  
    <div class="special-feature p-t-20 p-b-20">
        <div class="section-title bg-danger no-margin p-0">
            <a href="#">
                <h2>{{ get_option('single_category_post_six_title') }}</h2>
            </a>
        </div>
        <div class="contents p-l-10">
            <div class="row ">
                @if(get_option('single_category_post_six'))
                @php
                $category = App\Category::find(get_option('single_category_post_six'));
                @endphp
                @if($category->posts->count())
                @foreach($category->posts as $key => $rowpost)
                @php
                    $post = $rowpost->post;
                @endphp
                <div class="col-xs-12 p-t-10">
                    <a class="post-item" href="{{ url('post', $post->slug) }}">
                        <figure class="img-holder">
                            <img src="{{ asset('public/uploads/images/posts/' . $post->getImage('medium') ) }}" alt="{{ $post->title }}">
                            <div class="link-icon"><i class="fa fa-play"></i></div>
                        </figure>
                        <div class="p-b-10">
                            <div class="title-holder p-t-10">
                                <h3 class="post-title no-margin p-b-10">{{ $post->title }}</h3>
                            </div>
                            <div class="category-meta">
                                <p class="category">
                                    @foreach($post->categories as $key => $categoryy)
                                    {{ $categoryy->category->name }}{{ $key != $post->categories->count() - 1 ? ',' : '' }}
                                    @endforeach
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
                @endif
                @endif
            </div>
        </div>
    </div>
-->
    

</div>

</div>
</div>

<div class="container">
    <div class="row p-t-20">
        <div class="ad-block col-sm-12" style="text-align: center !important;">
@if(get_option('advertisement_m2_status', 0))
 <div class="col-xs-12 p-t-10">
                                    <a class="post-item" href="{{ get_option('advertisement_m2_link', '#') }}">
                                        <figure class="img-holder">
                                            {!! get_option('advertisement_m2_content') !!}
                                        </figure>
                                    </a>
                                </div>  @endif
</div>


        </div>
    </div>
</div>

<div class="container p-b-20 p-t-20">
    <div class="row two-col-layout">
        <div class="col-left br-right">

            <div class="row no-margin">
                <div class="col-sm-12">
                    <div class="wrapper division-tabs">
                        <div class="tabs">
                            <div class="tab section-title">
                                <label for="" class="tab-label">{{ get_option('tab_title', 'Tab Title') }}</label>
                            </div>
                            @php
                            $tab_categories = json_decode(get_option('tab_categories'));
                            @endphp
                            @if($tab_categories)
                            @foreach($tab_categories as $key => $tab_category)
                            @php
                            $category = App\Category::find($tab_category);
                            $post_ids = App\PostCategory::where('category_id', $tab_category)->pluck('post_id')->toArray();
                            @endphp
                            @if($post_ids)
                            @php
                            $post = App\Post::where('id', $post_ids[0])->where('status', 1)->orderBy('id', 'DESC')->first();
                            @endphp

                            <div class="tab">
                                <input type="radio" name="css-tabs" id="tab-{{ $key }}" checked class="tab-switch">
                                <label for="tab-{{ $key }}" class="tab-label">{{ $category->name }}</label>
                                <div class="tab-content">
                                    <div class="row no-margin p-t-20 ">
                                        <div class="col-sm-12">
                                        </div>
                              <div class="col-md-6" style="height:266px;">
                                            <a class="post-item" href="{{ url('post', $post->slug) }}">
                                                <figure class="">
                                                    <img src="{{ asset('public/uploads/images/posts/' . $post->getImage('medium') ) }}" alt="{{ $post->title }}">
                                                </figure>
                                                <div class="post-content no-padding">
                                                    <h2 class="post-title">
                                                        {{ $post->title }}
                                                    </h2>
                                                    
                                                <p> <div class="textp">
                                  {!! $post->post_body !!} 
                                </div>
                                        </p>
                                                    <div class="category-meta">
                                                      
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="post-items">
                                                <div class="row">
                                                    @php
                                                    array_shift($post_ids)
                                                    @endphp
                                                    @if($post_ids)
                                                    @php
                                                    $posts = App\Post::whereIn('id', $post_ids)->where('status', 1)->orderBy('id', 'DESC')->limit(4)->get();
                                                    @endphp
                                                    @foreach($posts as $post)
                                                    <div class="col-md-6">
                                                        <a class="post-item" href="{{ url('post', $post->slug) }}">
                                                            <figure class="">
                                                                <img src="{{ asset('public/uploads/images/posts/' . $post->getImage('medium') ) }}" alt="{{ $post->title }}">
                                                            </figure>
                                                            <div class="post-content no-padding">
                                                                <h3 class="post-title">
                                                                    {{ $post->title }}
                                                                </h3>
                                                           
                                                              
                                                            </div>
                                                        </a>
                                                    </div>
                                                    @endforeach
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif
                            @endforeach
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-right" style="min-height: 415px;">
             <!--right special news -->
<div class="special-feature p-t-20 p-b-20">
        <div class="section-title bg-danger no-margin p-0">
            <a href="#">
                <h2>{{ get_option('single_category_post_middle_title') }}</h2>
            </a>
        </div>
        <div class="contents p-l-10">
            <div class="row ">
                @if(get_option('single_category_post_middle'))
                @php
                $category = App\Category::find(get_option('single_category_post_middle'));
                @endphp
                @if($category->posts->count())
                @foreach($category->posts as $key => $rowpost)
                @php
                    $post = $rowpost->post;
                @endphp
                <div class="col-xs-12 p-t-10">
                    <a class="post-item" href="{{ url('post', $post->slug) }}">
                        <figure class="img-holder">
                            <img src="{{ asset('public/uploads/images/posts/' . $post->getImage('medium') ) }}" alt="{{ $post->title }}">
                            <div class="link-icon"><i class="fa fa-play"></i></div>
                        </figure>
                        <div class="p-b-10">
                            <div class="title-holder p-t-10">
                                <h3 class="post-title no-margin p-b-10">{{ $post->title }}</h3>
                            </div>
                            <div class="category-meta">
                                <p class="category">
                                    @foreach($post->categories as $key => $categoryy)
                                    {{ $categoryy->category->name }}{{ $key != $post->categories->count() - 1 ? ',' : '' }}
                                    @endforeach
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
                @endif
                @endif
            </div>
        </div>
    </div>
          @if(get_option('single_category_post_middle'))
            @php
            $category = App\Category::find(get_option('single_category_post_middle'));
            @endphp
            @if($category->posts->count())
            @php
            $post = $category->posts[0]->post;
            @endphp
            <div class="mobile-sq-5">
                <h2 class="p-0"> 
                
                </h2>
                
                 
                
            </div>
            @endif
            @endif
           
        </div>
    </div>
</div>
<!-- entertainment start  -->




<!--video photo enfd  -->
<!--photo gallery -->
<div class="container p-b-20 p-t-20 br-top">
    <div class="row two-col-layout">
        <div class="col-left br-right">

            <div class="container p-b-20 br-bottom p-t-20">
                <div class="row two-col-layout>
                    @if(get_option('single_category_post_tech'))
                    @php
                    $category = App\Category::find(get_option('single_category_post_tech'));
                    @endphp
                    @if($category->posts->count())
                    @php
                    $post = $category->posts[0]->post;
                    @endphp
                    <div class="col-left br-right p-l-20">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="section-title p-b-20">
                                    <a href="{{ url('category/' . $category->slug) }}">
                                        <div class="p-b-10">
                                    <a href="category/{{ $category->slug }}" class="">
                                        <h3 class="topic-style"><i class="fa fa-bolt"></i>&nbsp; {{ get_option('single_category_post_tech_title') }} </h3>
                                    </a>
                                </div>
                                        <h2></h2>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-7">
                                <div class="row">
                                    <div class="col-md-6 br-right">
                                        <a href="{{ url('post', $post->slug) }}">
                                            <figure class="img-holder">
                                                <img src="{{ asset('public/uploads/images/posts/' . $post->getImage('medium') ) }}" alt="{{ $post->title }}">
                                            </figure>
                                            <div class="post-content p-l-0">
                                                <h3>{{ $post->title }}</h3>
                                                
                                                 <div class="textp">
                                  {!! $post->post_body !!} 

                                  

                                </div>
                                                <div class="category-meta">
                                                    <p class="category">
                                                        {{ $category->name }}
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    @isset($category->posts[1])
                                    @php
                                    $post = $category->posts[1]->post;
                                    @endphp
                                    <div class="col-md-6 br-right">
                                        <a href="{{ url('post', $post->slug) }}">
                                            <figure class="img-holder">
                                                <img src="{{ asset('public/uploads/images/posts/' . $post->getImage('medium') ) }}"  alt="{{ $post->title }}">
                                            </figure>
                                            <div class="post-content p-l-0">
                                                <h3>{{ $post->title }}</h3>
                                                <p class="post-desc">
                                                    <div class="textp">
                                  {!! $post->post_body !!} 

                                
                                                       
                                                         
                                                    </div>
                                                </p>
                                                <div class="category-meta">
                                                    <p class="category">
                                                        {{ $category->name }}
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    @endisset
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-5">
                                <div class="top-news-3 p-l-20 p-r-20">
                                    @foreach($category->posts as $key2 => $rowpost)
                                    @php
                                    if($key2 == 0 || $key2 == 1){
                                    continue;
                                    }
                                    if($key2 > 4){
                                    break;
                                    }
                                    $post = $rowpost->post
                                    @endphp
                                    <div class="post-item br-bottom m-b-20">
                                        <a href="{{ url('post', $post->slug) }}">
                                            <div class="post-content">
                                                <div class="title-holder">
                                                    <h3 class="no-margin no-padding">{{ $post->title }}</h3>
                                                </div>
                                                <div class="category-meta p-t-20">
                                                    <p class="category">
                                                        @foreach($post->categories as $key => $category)
                                                        {{ $category->category->name }}{{ $key != $post->categories->count() - 1 ? ',' : '' }}
                                                        @endforeach
                                                    </p>
                                                </div>
                                            </div>
                                            <figure class="img-holder">
                                                <img src="{{ asset('public/uploads/images/posts/' . $post->getImage('medium') ) }}"  alt="{{ $post->title }}">
                                            </figure>
                                        </a>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                    @endif
                    
                    <div class="col-right p-t-20">
                        

                    </div>
                </div>
            </div>
        </div>
        <div class="col-right">
            <div class="add-block" style="text-align:center;">
                @if(get_option('advertisement_fourm_status', 0))
                        <div class="advert" style="margin-bottom:5px; padding-top: 5px;">
                            <div class="row ">
                                <div class="col-xs-12 p-t-10">
                                    <a class="post-item" href="{{ get_option('advertisement_fourm_link', '#') }}">
                                        <figure class="img-holder">
                                            {!! get_option('advertisement_fourm_content') !!}
                                        </figure>
                                    </a>
                                </div>
                            </div>
                        </div>
                        @endif
            </div>
        </div>
    </div>
</div>

<div class="container p-b-20 p-t-20 br-top">
    <div class="row two-col-layout">
        <div class="col-left br-right">

            <div class="container p-b-20 br-bottom p-t-20">
                <div class="row two-col-layout>
                    @if(get_option('single_category_post_tech2'))
                    @php
                    $category = App\Category::find(get_option('single_category_post_tech2'));
                    @endphp
                    @if($category->posts->count())
                    @php
                    $post = $category->posts[0]->post;
                    @endphp
                    <div class="col-left br-right p-l-20">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="section-title p-b-20"><br>
                                    <a href="{{ url('category/' . $category->slug) }}">
                                        <div class="p-b-10">
                                    <a href="category/{{ $category->slug }}" class="">
                                        <h3 class="topic-style"><i class="fa fa-bolt"></i>&nbsp; {{ get_option('single_category_post_tech2_title') }} </h3>
                                    </a>
                                </div>
                                        <h2></h2>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-7">
                                <div class="row">
                                    <div class="col-md-6 br-right">
                                        <a href="{{ url('post', $post->slug) }}">
                                            <figure class="img-holder">
                                                <img src="{{ asset('public/uploads/images/posts/' . $post->getImage('medium') ) }}" alt="{{ $post->title }}">
                                            </figure>
                                            <div class="post-content p-l-0">
                                                <h3>{{ $post->title }}</h3>
                                                
                                                 <div class="textp">
                                  {!! $post->post_body !!} 

                                  

                                </div>
                                                <div class="category-meta">
                                                    <p class="category">
                                                        {{ $category->name }}
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    @isset($category->posts[1])
                                    @php
                                    $post = $category->posts[1]->post;
                                    @endphp
                                    <div class="col-md-6 br-right">
                                        <a href="{{ url('post', $post->slug) }}">
                                            <figure class="img-holder">
                                                <img src="{{ asset('public/uploads/images/posts/' . $post->getImage('medium') ) }}"  alt="{{ $post->title }}">
                                            </figure>
                                            <div class="post-content p-l-0">
                                                <h3>{{ $post->title }}</h3>
                                                <p class="post-desc">
                                                    <div class="textp">
                                  {!! $post->post_body !!} 

                                
                                                       
                                                         
                                                    </div>
                                                </p>
                                                <div class="category-meta">
                                                    <p class="category">
                                                        {{ $category->name }}
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    @endisset
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-5">
                                <div class="top-news-3 p-l-20 p-r-20">
                                    @foreach($category->posts as $key2 => $rowpost)
                                    @php
                                    if($key2 == 0 || $key2 == 1){
                                    continue;
                                    }
                                    if($key2 > 4){
                                    break;
                                    }
                                    $post = $rowpost->post
                                    @endphp
                                    <div class="post-item br-bottom m-b-20">
                                        <a href="{{ url('post', $post->slug) }}">
                                            <div class="post-content">
                                                <div class="title-holder">
                                                    <h3 class="no-margin no-padding">{{ $post->title }}</h3>
                                                </div>
                                                <div class="category-meta p-t-20">
                                                    <p class="category">
                                                        @foreach($post->categories as $key => $category)
                                                        {{ $category->category->name }}{{ $key != $post->categories->count() - 1 ? ',' : '' }}
                                                        @endforeach
                                                    </p>
                                                </div>
                                            </div>
                                            <figure class="img-holder">
                                                <img src="{{ asset('public/uploads/images/posts/' . $post->getImage('medium') ) }}"  alt="{{ $post->title }}">
                                            </figure>
                                        </a>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                    @endif
                    
                    <div class="col-right p-t-20">
                        

                    </div>
                </div>
            </div>
        </div>
        <div class="col-right">
            <div class="add-block" style="text-align:center;">
                @if(get_option('advertisement_fourm_status', 0))
                        <div class="advert" style="margin-bottom:5px; padding-top: 5px;">
                            <div class="row ">
                                <div class="col-xs-12 p-t-10">
                                    <a class="post-item" href="{{ get_option('advertisement_fourm_link', '#') }}">
                                        <figure class="img-holder">
                                            {!! get_option('advertisement_fourm_content') !!}
                                        </figure>
                                    </a>
                                </div>
                            </div>
                        </div>
                        @endif
            </div>
        </div>
    </div>
</div>


<!--photo gallery end -->



<!--photo gallery end -->

</div>
<div class="container br-bottom p-b-20" style="text-align: center">
 @if(get_option('advertisement_four_status', 0))
 <div class="col-xs-12 p-t-10">
                                    <a class="post-item" href="{{ get_option('advertisement_four_link', '#') }}">
                                        <figure class="img-holder">
                                            {!! get_option('advertisement_four_content') !!}
                                        </figure>
                                    </a>
                                </div>  @endif
</div>
@if(get_option('single_category_post_three'))
@php
$category = App\Category::find(get_option('single_category_post_three'));
@endphp
@if($category->posts->count())
@php
$post_ids = $category->posts->pluck('post_id')->toArray();
$posts = App\Post::whereIn('id', $post_ids)->whereNull('video_url')->limit(5)->orderBy('id', 'desc')->get();
@endphp
@if($posts->count())
<div class="container p-b-20 br-bottom p-t-20">
    <div class="row">

        <div class="row no-margin p-b-20 p-t-20 ">
            <div class="col-sm-12">
                <div class="section-title">
                    <h2> {{ get_option('single_category_post_three_title') }} </h2>
                </div>
            </div>
            <div class="col-xs-12 col-md-5">

                <div class="row">
                    @php
                    $post = $posts[0];
                    @endphp
                    <div class="col-xs-12">
                        <div class="post-item br-bottom">
                            <a href="{{ url('post', $post->slug) }}">
                                <figure>
                                    <img src="{{ asset('public/uploads/images/posts/' . $post->getImage('medium') ) }}" height="242" width="345" alt="{{ $post->title }}" class="img-responsive">
                                </figure>
                                <div class="post-info">
                                    <h2 class="post-title">{{ $post->title }}</h2>
                                    <div class="textp">
                                  {!! $post->post_body !!} 

                                </div>  </a>
                                    <div class="category-meta">
                                        <a href="category/{{ $category->slug }}">

                                        <p>
                                            @foreach($post->categories as $key => $category)
                                            {{ $category->category->name }}{{ $key != $post->categories->count() - 1 ? ',' : '' }}
                                            @endforeach
                                        </p></a>
                                    </div>
                                </div>
                          
                        </div>
                    </div>
                    <div class="row p-r-20 p-l-20 br-bottom">
                        @foreach($posts as $key => $post)
                        @php
                        if($key == 0){
                        continue;
                        }
                        if($key > 3){
                        break;
                        }
                        @endphp
                        <div class="col-xs-12 col-sm-6 p-t-20 br-right">
                            <div class="row ">
                                <div class="col-xs-12 p-t-10">
                                    <a class="post-item" href="{{ url('post', $post->slug) }}">
                                        <figure class="img-holder">
                                            <img src="{{ asset('public/uploads/images/posts/' . $post->getImage('medium') ) }}" alt="{{ $post->title }}">
                                            <div class="link-icon"><i class="fa fa-play"></i></div>
                                        </figure>
                                        <div class="p-b-10">
                                            <div class="title-holder p-t-10">
                                                <h3 class="post-title no-margin p-b-10">{{ $post->title }}</h3>
                                            </div></a>
                                            <div class="category-meta">
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
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            @php
            $posts = App\Post::whereIn('id', $post_ids)->whereNotNull('video_url')->limit(5)->orderBy('id', 'desc')->get();
            @endphp
            @if($posts->count())
            @php
            $post = $posts[0];
            @endphp
            <div class="col-sm-7 col-xs-12 bg-black">
                <div class="row p-l-20 p-r-20">
                    <h2 class="pull-right p-b-10">
                        {{ get_option('single_category_post_three_title') }} {{ _lang('Multimedia') }} </h2>

                    @if($post->video_url != null)
                    @if($post->video_type != 'youtube')
                    <iframe width="100%" height="380px" src="//www.youtube.com/embed/{{ get_video_id($post->video_url) }}" frameborder="0" allowfullscreen></iframe>
                    @elseif($post->video_type != 'vimeo')
                    <iframe width="100%" height="380px" src="//player.vimeo.com/video/{{ get_video_id($post->video_url) }}?title=0&byline=0&portrait=0&badge=0" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                    @endif
                    @endif
                </div>
                <div class="row p-t-10">
                    <div class="row no-margin p-b-20 br-bottom album-photo-slider" id="binodon-slider">
                        <div class="col-xs-7">
                            <div class="section-title">
                                <h3 style="color: #fff">
                                    {{ date('d M, Y | h:i A', strtotime($post->created_at)) }}
                                </h3>
                            </div>
                        </div>
                        <div class="col-xs-2 pull-right slider-nav p-b-10 p-t-20">
                            <img class="left" src="{{ asset('public/website') }}/assets/icons/slider/left-arrow.png" alt="Nav next">
                            <img class="right" src="{{ asset('public/website') }}/assets/icons/slider/right-arrow.png" alt="Nav next">
                        
                        <div class="slider">
                            <div>
                                @foreach($posts as $key => $post)
                                @php
                                if($key == 3){
                                continue;
                                }
                                @endphp
                                <div class="col-sm-6">
                                    <a class="post-item">
                                        <figure class="">
                                            <img src="{{ asset('public/uploads/images/posts/' . $post->getImage('medium') ) }}" alt="{{ $post->title }}">
                                            <div class="link-icon"><i class="fa fa-photo"></i></div>
                                        </figure>
                                        <div class="caption">
                                            <h4>
                                                {{ $post->title }}
                                            </h4>
                                        </div>
                                    </a>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endif
        </div>
    </div>
</div>
@endif
@endif
@endif


<div class="container p-b-20 br-bottom p-t-20">
    <div class="row two-col-layout">
        <div class="col-left br-right">

            @if(get_option('single_category_post_four'))
            @php
            $category = App\Category::find(get_option('single_category_post_four'));
            @endphp
            @if($category->posts->count())
            @php
            $post = $category->posts[0]->post;
            @endphp
            <div class="row  no-margin p-t-20 ">
                <div class="col-sm-12">
                    <div class="section-title">
                        <div class="p-b-10"><br>
                                    <a href="category/{{ $category->slug }}" class="">
                                        <h3 class="topic-style"><i class="fa fa-bolt"></i>&nbsp;  {{ get_option('single_category_post_four_title') }} </h3>
                                    </a>
                                </div>
                        <h2> </h2>
                    </div>
                </div>
                <div class="col-md-6">
                    <a class="post-item" href="{{ url('post', $post->slug) }}">
                        <figure class="">
                            <img src="{{ asset('public/uploads/images/posts/' . $post->getImage('medium') ) }}" alt="{{ $post->title }}">
                        </figure>
                        <div class="post-content no-padding">
                            <h2 class="post-title">
                                {{ $post->title }}
                            </h2>
                           
                                <div class="textp">
                                  {!! $post->post_body !!} 

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
                            @foreach($category->posts as $key => $rowpost)
                            @php
                            if($key == 0){
                            continue;
                            }
                            if($key > 4){
                            break;
                            }
                            $post = $rowpost->post
                            @endphp
                            <div class="col-xs-6">
                                <a class="post-item" href="{{ url('post', $post->slug) }}">
                                    <figure class="">
                                        <img src="{{ asset('public/uploads/images/posts/' . $post->getImage('medium') ) }}" width="130px" height="100px"alt="{{ $post->title }}">
                                    </figure>
                                    <div class="post-content no-padding">
                                        <h3 class="post-title" style="overflow: hidden;text-overflow: ellipsis;display: -webkit-box;
    -webkit-line-clamp: 1;-webkit-box-orient: vertical;">
                                            {{ $post->title }}
                                        </h3> </a>
                                        <div class="category-meta"><br>
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
            @endif
            <div class="row p-t-20">


            </div>
        </div>
        <div class="col-right" style="min-height: auto;">
             <!--right special news -->
<div class="special-feature p-t-20 p-b-20">
        <div class="section-title bg-danger no-margin p-0">
            <a href="#">
                <h2>{{ get_option('single_category_post_right00_title') }}</h2>
            </a>
        </div>
        <div class="contents p-l-10">
            <div class="row ">
                @if(get_option('single_category_post_right00'))
                @php
                $category = App\Category::find(get_option('single_category_post_right00'));
                @endphp
                @if($category->posts->count())
                @foreach($category->posts as $key => $rowpost)
                @php
                    $post = $rowpost->post;
                @endphp
                <div class="col-xs-12 p-t-10">
                    <a class="post-item" href="{{ url('post', $post->slug) }}">
                        <figure class="img-holder">
                            <img src="{{ asset('public/uploads/images/posts/' . $post->getImage('medium') ) }}" alt="{{ $post->title }}">
                            <div class="link-icon"><i class="fa fa-play"></i></div>
                        </figure>
                        <div class="p-b-10">
                            <div class="title-holder p-t-10">
                                <h3 class="post-title no-margin p-b-10">{{ $post->title }}</h3>
                            </div>
                            <div class="category-meta">
                                <p class="category">
                                    @foreach($post->categories as $key => $categoryy)
                                    {{ $categoryy->category->name }}{{ $key != $post->categories->count() - 1 ? ',' : '' }}
                                    @endforeach
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
                @endif
                @endif
            </div>
        </div>
    </div>

        </div>
    </div>
</div>
<div class="container br-bottom p-b-20" style="text-align: center !important; ">
 @if(get_option('advertisement_big1_status', 0))
 <div class="col-xs-12 p-t-10">
                                    <a class="post-item" href="{{ get_option('advertisement_big1_link', '#') }}">
                                        <figure class="img-holder">
                                            {!! get_option('advertisement_big1_content') !!}
                                        </figure>
                                    </a>
                                </div>  @endif
</div>






<style>
    .ghotona-probaho .post-items .post-item {
    border-left: 1px solid #e7e7e7;
    background: #fff;
    padding: 12px;
}
.p-b-20 {
    padding-bottom: 10px!important;
   
}
    .category-meta h3, .category-meta p {
    color: #000000;
}
.br-rights {
    border-right: 1px solid #e7e7e7;
    height: auto;
}
h1, h2, h3, h4, h5, li, a, p {
    font-family: solaiman;
    text-align: left !important;
}
 p {
    font-size: 16px;
    text-align: initial;
}  
h3.post-title {
    margin: 10px 0;
    color: #000;
    font-weight: 300;
    text-align: left !important;
    overflow: hidden;
    text-overflow: ellipsis;
    display: -webkit-box;
   
    -webkit-box-orient: vertical;
}



</style>
<div class="container br-bottom p-b-20" style="text-align: center">
 @if(get_option('advertisement_big7_status', 0))
 <div class="col-xs-12 p-t-10">
                                    <a class="post-item" href="{{ get_option('advertisement_big7_link', '#') }}">
                                        <figure class="img-holder">
                                            {!! get_option('advertisement_big7_content') !!}
                                        </figure>
                                    </a>
                                </div>  @endif
  <style>
                .grid-item .title {
       overflow: hidden;
    text-overflow: ellipsis;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
}
            </style>

<div class="container p-t-20 p-b-20 br-bottom">
    <div class="row">
        @php
        $post_categories = json_decode(get_option('post_categories'));
        @endphp
        @if($post_categories)
        @foreach($post_categories as $key => $post_category)
        @php
        $category = App\Category::find($post_category);
        $post_ids = App\PostCategory::where('category_id', $post_category)->orderBy('id', 'DESC')->pluck('post_id')->toArray();
        @endphp
        @if($post_ids)
        @php
        $post = App\Post::where('id', $post_ids[0])->orderBy('id', 'DESC')->first();
        @endphp
        <div class="col-xs-12 col-sm-3 br-right p-r-20">
            <div class="section-title">
                <div class="p-b-10">
                    <br>
                                    <a href="category/{{ $category->slug }}" class="">
                                        <h3 class="topic-style"><i class="fa fa-bolt"></i>&nbsp; {{ $category->name }}</h3>
                                    </a>
                                </div>
                <a href="#">
                    <h4></h4>
                </a>
            </div>
            <div class="post-item-list br-bottom fixed-title-space">
                <div class="row ">
                    <div class="col-xs-12 p-t-10">
                        <a class="post-item" href="{{ url('post', $post->slug) }}">
                            <figure class="img-holder">
                                <img src="{{ asset('public/uploads/images/posts/' . $post->getImage('medium') ) }}" width="110px" height="130px" alt="{{ $post->title }}">
                                <div class="link-icon"><i class="fa fa-play"></i></div>
                            </figure>
                            <div class="p-b-10">
                                <div class="title-holder p-t-10">
                                    <h3 class="post-title no-margin p-b-10">{{ $post->title }}</h3>
                         <div class="textp">
                                  {!! $post->post_body !!} 
                                </div>
                                      <div class="category-meta"><br>
    <a href="category/{{ $category->slug }}">
<p>{{ $category->name }}</p></a>
</div> 
                                </div>
                                
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 p-t-20">
                <div class="news-grid-2">
                    <div class="row">
                        @php
                        array_shift($post_ids)
                        @endphp
                        @if($post_ids)
                        @php
                        $posts = App\Post::whereIn('id', $post_ids)->orderBy('id', 'DESC')->limit(2)->get();
                        @endphp
                        @foreach($posts as $post)
                        <div class="col-xs-6 col-sm-6 col-md-6 col-padding">
                            <div class="grid-item">
                                <div class="grid-item-img">
                                    <a href="{{ url('post', $post->slug) }}">
                                        <img src="{{ asset('public/uploads/images/posts/' . $post->getImage('medium') ) }}" alt="{{ $post->title }}"width="80px" height="70px">
                                    </a>
                                </div>
                                <h5><a href="{{ url('post', $post->slug) }}" class="title">{{ $post->title }}</a></h5>
                            </div>
                        </div>
                        @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
        @endif
        @endforeach
        @endif
    </div>
</div>
</div>
<div class="container br-bottom p-b-20" style="text-align: center">
 @if(get_option('advertisement_big9_status', 0))
 <div class="col-xs-12 p-t-10">
                                    <a class="post-item" href="{{ get_option('advertisement_big9_link', '#') }}">
                                        <figure class="img-holder">
                                            {!! get_option('advertisement_big9_content') !!}
                                        </figure>
                                    </a>
                                </div>  @endif
</div>



@if(get_option('trending_status', 0))
<div class="container-fluid  p-b-20 p-t-20">
    <div class="row bg-grey">
        <div class="container">
            <div class="row ghotona-probaho p-t-20">
                <div class="section-title">
                    <div class="p-b-10"><br>
                                    <a href="http://beta.fm786.com/category/%E0%A6%85%E0%A6%A8%E0%A7%8D%E0%A6%AF%E0%A6%BE%E0%A6%A8%E0%A7%8D%E0%A6%AF-%E0%A6%96%E0%A6%AC%E0%A6%B0" class="">
                                        <h3 class="topic-style"><i class="fa fa-bolt"></i>&nbsp; {{ _lang('অন্যান্য সংবাদ') }} </h3>
                                    </a>
                                </div>
               
                </div>
                <div class="post-items p-b-20 p-t-20 br-bottom">
                    @php
                    $trending_posts = App\Post::select("posts.*", "post_views.views")
                                                ->join('post_views', 'posts.id', 'post_views.post_id')
                                                ->orderBy('post_views.updated_at', 'DESC')
                                                ->limit(get_option('trending_limit', 5))
                                                ->get();
                    @endphp
                    @foreach($trending_posts as $post)
                    <div class="post-item col-sm-3">
                        <a href="{{ url('post', $post->slug) }}">
                            <figure>
                                <img src="{{ asset('public/uploads/images/posts/' . $post->getImage('medium') ) }}" width="130px" height="95px" alt="{{ $post->title }}">
                            </figure>
                            <h3 class="post-title">{{ $post->title}}</h3>
                            <p> </a>
                                <style>

                                	.br-rights {
    border-right: 1px solid #e7e7e7 !important;
    height: 275px;
    border-bottom: 1px solid #e7e7e7 !important;
    border-left: 1px solid #e7e7e7 !important;
}

h3.post-title {
    margin: 10px 0;
    color: #000;
    padding-left: 0px !important;
   
    
}
 .social-connect ul li a {
    width: 35px;
    height: 35px;
    line-height: 35px;
    margin-bottom: 7px;
    text-align: center;
    padding-left: 7px;
    color: #fff;
    font-size: 1.9em;
}  
.br-bottom {
    border-left: 1px solid #e7e7e7;
    border-bottom: 1px solid #e7e7e7;
}

                                 .textp {
   overflow: hidden;
   text-overflow: ellipsis;
   display: -webkit-box;
   -webkit-line-clamp: 2; /* number of lines to show */
   -webkit-box-orient: vertical;
}
.br-bottom {
    border-bottom: 0px solid #e7e7e7;
}
.header-right-menu>ul>li>a {
    color: #fff!important;
}
.post-item-list a:not(:last-child) {
    border-bottom: 0px solid #e7e7e7 !important;
    display: block;
    text-align: left;
}
.br-bottom {
    border-left: 0px solid #e7e7e7 !important;
    border-bottom: 1px solid #e7e7e7;
}
.section-title {
    padding-bottom: 0em;
}
.post-item-list .title-holder {
    padding: 0px 0;
}
             
               nav.navbar.bootsnav ul.dropdown-menu.megamenu-content .content ul.menu-col li a:hover, .side .widget ul.link li a:hover, .side .widget ul.link li a:focus, .check-list li:before, ul.cart-list>li>h6>a, .attr-nav>ul>li>a:hover, .attr-nav>ul>li>a:focus, nav.navbar-sidebar ul.nav li.dropdown.on>a, nav.navbar-sidebar .dropdown .megamenu-content .col-menu.on .title, nav.navbar-sidebar ul.nav li.dropdown ul.dropdown-menu li a:hover, nav.navbar ul.nav li.dropdown.on>a, nav.navbar.navbar-inverse ul.nav li.dropdown.on>a, nav.navbar-sidebar ul.nav li.dropdown.on ul.dropdown-menu li.dropdown.on>a, nav.navbar .dropdown .megamenu-content .col-menu.on .title, nav.navbar ul.nav>li>a:hover, nav.navbar ul.nav>li.active>a:hover, nav.navbar ul.nav li.active>a, nav.navbar li.dropdown ul.dropdown-menu>li a:hover {
                color:#000000;
    
}                 </style>
                                 <div class="textp">
                                  {!! $post->post_body !!} 
                                </div>
                                <a href="{{ url('post', $post->slug) }}">
                            </p>                 </a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<div class="container br-bottom p-b-20" style="text-align: center">
 @if(get_option('advertisement_big5_status', 0))
 <div class="col-xs-12 p-t-10">
                                    <a class="post-item" href="{{ get_option('advertisement_big5_link', '#') }}">
                                        <figure class="img-holder">
                                            {!! get_option('advertisement_big5_content') !!}
                                        </figure>
                                    </a>
                                </div>  @endif
</div>

@endif

@endsection

@section('js-script')
<script>
        $(document).ready(function(){
            $('.myWrapper').easyTicker({
                visible: 1,
                interval: 4000,
                height: 42
            });
        });
    </script>
@endsection
