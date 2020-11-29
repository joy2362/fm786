@extends('website.layout')
@section('meta-tags')
<meta property="og:url" content="{{ Request::url() }}">
<meta property="og:type" content="website">
<meta property="og:title" content="{{ $post->title }}" />
<meta property="og:image" content="{{ asset('public/uploads/images/posts/' . $post->getImage('watermark') ) }}"/>


@endsection

@section('content')
<style>
    .three-col-layout {
    display: flex;
    border: 0px solid #ddd !important;
}
   nav.navbar.bootsnav ul.nav>li>a {
    font-size: 15px;
    border-right: 0px solid #fff;
}
    .entry-content p {
    font-size: 18px;
    text-align: justify;
}
.single-post-content h1 {
    font-size: 31px;
    line-height: 40px;
    /* padding-bottom: .5em; */
    font-weight: 900;
}
.three-col-layout {
    display: flex;
    border: 2px solid #ddd;
}
.edited-item {
    padding: 1em;
    position: -webkit-sticky;
    position: sticky;
    top: 3em;
    font-family: solaiman;
}
.m-b-20 {
    /* margin-bottom: 20px; */
}


}
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
.breadcrumb {
    background: #f3e5e5;
    font-size: 13px;
    border-bottom: 1px solid #e7e7e7;
    padding: 10px 6px;
    list-style: none;
    margin: 0;
}

  @media only screen and (max-width: 600px) and (min-width: 320px)

  {
    .p-t-51, .logo img{
      display:none;

    }
     p img {
    width: 100% !important;
}

    img {
    width: 100% !IMPORTANT;
}

    .breadcrumb {
    background: #f3e5e5;
    font-size: 13px;
    border-bottom: 1px solid #e7e7e7;
    padding: 18px 10px 7px 4px;
    list-style: none;
    margin: 0;
}
    .wrap-sticky {
    margin-bottom: 5em;
}

    .navbar-brand {
    float: left;
height: 10px;
    padding: 15px 15px;
    font-size: 18px;
      font-weight:900;
    line-height: 20px;
}
    .fa-navicon:before, .fa-reorder:before, .fa-bars:before {
    content: "\f0c9";
    font-size: 46px;
    color: #ff0000;
}

 nav.navbar .navbar-brand img.logo {
    width: 80%;
    margin-left: -6px;
    margin-top: -68px;
}
 nav.navbar.navbar-default {
    background-color: #fff!important;
    padding: .4em;
}
  }

    </style>
<div class="container">
</div>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="top-large-ad p-t-10 hidden-md-down">

                <div style="margin: 0 auto; width: 970px;">

                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <ul class="breadcrumb">
        <li class="breadcrumb-item"> <a href="{{ url('/') }}"> <i class="fa fa-home"></i>&nbsp; </a></li>
        <li class="breadcrumb-item"><a href="/">প্রথমপাতা</a> >> @foreach($post->categories as $key => $category)
                                {{ $category->category->name }}>{{ $key != $post->categories->count() - 1 ? ',' : '' }}
                                @endforeach > <a href="#">{{ $post->title }} @php $title = $post->title @endphp </a> </li>
    </ul>
</div>
<div class="container">
    <div class="row three-col-layout p-b-20 no-margin">
        <div class="col-left col-left hidden-xs hidden-sm p-t-20">
            <div class="post-metas">
                <div class="items bg-grey edited-item">

                    <div class="item">
                        <div class="post-metas">

                     <img src="{{ asset('public/uploads/images/posts/reporter/' . $post->getImage('small') ) }}" alt="">
                 <img src="{{ asset('public/uploads/images/reporter/' . $post->getImage2('small') ) }}" alt="" style="width:9%;"><b>{{ $post->meta_tags }}</b> <br>&nbsp;সংবাদ প্রকাশিত<br>
   &nbsp;<time datetime="{{ $post->created_at }}">{{ date('d M, Y', strtotime($post->created_at)) }} </time>

                        </div>
                    </div>
                    <div class="item">
                        <ul>
                            <li><i class="fa fa-eye" aria-hidden="true"></i> {{ $post->getViews->views  }}</li>
                        </ul>
                    </div>
                    <div class="item">
					<br> <b> লেখা বড় করে পড়ুন
</b>
                        <ul>
                            <li class="incFont"><img src="/public/uploads/images/increase-font.jpg" alt="Font increase" title="Increase Font Size"></li>
                            <li class="decFont"><img src="/public/uploads/images/decrease-font.jpg" alt="Font Decrease" title="Decrease Font Size"></li>
                        </ul>
                    </div>
                      <div id="fb-root"></div>

<br> <b> শেয়ার করুন
</b>
                    <div class="item">
                      <!-- Go to www.addthis.com/dashboard to customize your tools --> <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-4e3b7be40aee0b81"></script>

                <!-- Go to www.addthis.com/dashboard to customize your tools -->
                <div class="addthis_inline_share_toolbox"></div>

                    </div>
                </div>
            </div>
          @if(get_option('advertisement_left1_status', 0))
                <div class="advert" style="margin-bottom:5px; padding-top: 5px;">
                    <div class="row ">
                        <div class="col-xs-12 p-t-10">
                            <a class="post-item" href="{{ get_option('advertisement_left1_link', '#') }}">
                                <figure class="img-holder">
                                    {!! get_option('advertisement_left1_content') !!}
                                </figure>
                            </a>
                        </div>
                    </div>
                </div>
                @endif

            {!! $post->left1_body !!}
          <br>@if(get_option('advertisement_left2_status', 0))
                <div class="advert" style="margin-bottom:5px; padding-top: 5px;">
                    <div class="row ">
                        <div class="col-xs-12 p-t-10">
                            <a class="post-item" href="{{ get_option('advertisement_left2_link', '#') }}">
                                <figure class="img-holder">
                                    {!! get_option('advertisement_left2_content') !!}
                                </figure>
                            </a>
                        </div>
                    </div>
                </div>
                @endif


           {!! $post->left2_body !!}
          <br>
          @if(get_option('advertisement_left3_status', 0))
                <div class="advert" style="margin-bottom:5px; padding-top: 5px;">
                    <div class="row ">
                        <div class="col-xs-12 p-t-10">
                            <a class="post-item" href="{{ get_option('advertisement_left3_link', '#') }}">
                                <figure class="img-holder">
                                    {!! get_option('advertisement_left3_content') !!}
                                </figure>
                            </a>
                        </div>
                    </div>
                </div>
                @endif
          @if(get_option('advertisement_left4_status', 0))
                <div class="advert" style="margin-bottom:5px; padding-top: 5px;">
                    <div class="row ">
                        <div class="col-xs-12 p-t-10">
                            <a class="post-item" href="{{ get_option('advertisement_left4_link', '#') }}">
                                <figure class="img-holder">
                                    {!! get_option('advertisement_left4_content') !!}
                                </figure>
                            </a>
                        </div>
                    </div>
                </div>
                @endif

        </div>
        <div class="col-middle p-10">
            <div class="single-post-content">

                <div class="m-top-meta">
                    <div class="col-sm-7 p-l-0">
                        <div class="item">
                            <time datetime="{{ $post->created_at }}">{{ date('d M, Y | h:i A', strtotime($post->created_at)) }} </time>
                        </div>
                        <div class="item">
                            <div class="post-metas">
                                <p class="category">
                                    @foreach($post->categories as $key => $category)
                                    {{ $category->category->name }}{{ $key != $post->categories->count() - 1 ? ',' : '' }}
                                    @endforeach
                                </p>
                            </div>
                        </div>
                        <div class="item">
                            <ul>
                                <li><i class="fa fa-eye" aria-hidden="true"></i> {{ $post->getViews->views  }}</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-5 no-padding">
                        <div class="item addthis-share">
                            <div class="addthis_inline_share_toolbox"></div>
                        </div>
                    </div>
                </div>
                <div class="title-holder m-b-20">

 @if(get_option('advertisement_posttop_status', 0))
 <div class="col-xs-12 p-t-10">
                                    <a class="post-item" href="{{ get_option('advertisement_posttop_link', '#') }}">
                                        <figure class="img-holder">
                                            {!! get_option('advertisement_posttop_content') !!}
                                        </figure>
                                    </a>
                                </div>  @endif
                </div>
                <div class="title-holder m-b-20">
                    <h1 class="title m-b-20">{{ $post->title }}     </h1>

                </div>
                <figure class="img-holder">

                    <img src="{{ asset('public/uploads/images/posts/' . $post->getImage('large') ) }}" alt="{{ $post->title }}">

                    <p class="img-caption img-layer-thumb m-b-0">{{ $post->meta_description }}</p>
                </figure>

                <div class="m-bottom-meta">
                    <div class="item">
                        <ul>
                            <li class="incFont"><i class="fa fa-plus" alt="Font increase" title="Increase Font Size"></i></li>
                            <li class="decFont"><i class="fa fa-minus" alt="Font Decrease" title="Decrease Font Size"></i></li>
                        </ul>
                    </div>
                    <div class="item">
                        <div class="fb-save-btn">
                            <div class="fb-save" data-uri="#" data-size="large"></div>
                        </div>
                    </div>


                    <div class="item">
                        <div class="fb-share-button" data-href="#" data-layout="button_count" data-size="large"></div>
                    </div>
                </div>
                <div class="entry-content">
                    {!! $post->post_body !!}
                        @if($post->video_type == 'youtube')
                        <iframe width="100%" height="380px" src="https://www.youtube.com/embed/{{ get_video_id($post->video_url) }}">
                        </iframe>
                        @elseif($post->video_type == 'vimeo')
                        <iframe width="100%" height="380px" src="//player.vimeo.com/video/{{ get_video_id($post->video_url) }}?title=0&byline=0&portrait=0&badge=0" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        @elseif($post->video_type == 'facebook')
          <iframe
  src="https://www.facebook.com/plugins/video.php?href={{ ($post->video_url) }}" width="100%"
   height="450px"
  style="border:none;overflow:hidden"
  scrolling="no" frameborder="0" allowTransparency="true" allowFullScreen="true"
></iframe>
                        @endif
                </div>
                  @if(get_option('advertisement_postbottom_status', 0))
 <div class="col-xs-12 p-t-10">
                                    <a class="post-item" href="{{ get_option('advertisement_postbottom_link', '#') }}">
                                        <figure class="img-holder">
                                            {!! get_option('advertisement_postbottom_content') !!}
                                        </figure>
                                    </a>
                                </div>  @endif
                <div class="post-tags-alt u-margin-t-20" style="display:block">
                    <div class="tags-wrap">
                        <i class="fa fa-tags" style="font-size:1.3em"></i>
                        @foreach(explode(', ', $post->tags) as $key => $tag)
                        <a class="cat-world" href="#">{{ $tag }}</a><br>
                        @endforeach
                    </div>
                </div>
            </div>



            <div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v8.0&appId=1016311991716755&autoLogAppEvents=1" nonce="p87kihQW"></script>
<h4 style="background: #780d0d;padding: 15px;color: #fff;margin:-1px -1px 0;">আপনার মতামত লিখুন :
</h4>
<div class="fb-comments" data-href="http://beta.fm786.com/{{$post->title}}" data-numposts="5" data-width=""></div>
        </div>
        <div class="col-right no-padding">
            <div class="sidebar">
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
               {!! $post->right1_body !!}

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
               @if(get_option('advertisement_right1_status', 0))
                <div class="advert" style="margin-bottom:5px; padding-top: 5px;">
                    <div class="row ">
                        <div class="col-xs-12 p-t-10">
                            <a class="post-item" href="{{ get_option('advertisement_right1_link', '#') }}">
                                <figure class="img-holder">
                                    {!! get_option('advertisement_right1_content') !!}
                                </figure>
                            </a>
                        </div>
                    </div>
                </div>
                @endif
                <div class="social-connect">
                    {!! $post->right2_body !!}
                    <ul class="social--redius social--color">
										<center> <h3 class="no-margin no-padding">{{ _lang('আমাদের Social Network এ যুক্ত হোন') }}</h3>
                        <li><a data-fb="fb_link" class="social__facebook" title="Facebook" href="{{ get_option('facebook_link') }}"><i class="fa fa-facebook"></i></a></li>
                        <li><a data-twitter="twitter_link" class="social__twitter" title="Twitter" href="{{ get_option('twitter_link') }}"><i class="fa fa-twitter"></i></a></li>
                        <li><a data-youtube="youtube_link" class="social__youtube" title="Youtube" href="{{ get_option('youtube_link') }}"><i class="fa fa-youtube"></i></a></li>
                        <li><a data-linkedin="linkedin_link" class="social__linkedin" title="Linkedin" href="{{ get_option('linkedin_link') }}"><i class="fa fa-linkedin"></i></a></li>
                        <li><a data-insta="insta_link" class="social__instagram" title="Instagram" href="{{ get_option('instagram_link') }}"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                </div>



                <div class="advert" style="margin-bottom:5px; padding-top: 5px;">
                    <div class="row ">
                        <div class="col-xs-12 p-t-10">

                        </div>
                    </div>
                </div>


                <div class="ac" style="padding-top: 1em;">
                  @if(get_option('advertisement_right2_status', 0))
                <div class="advert" style="margin-bottom:5px; padding-top: 5px;">
                    <div class="row ">
                        <div class="col-xs-12 p-t-10">
                            <a class="post-item" href="{{ get_option('advertisement_right2_link', '#') }}">
                                <figure class="img-holder">
                                    {!! get_option('advertisement_right2_content') !!}
                                </figure>
                            </a>
                        </div>
                    </div>
                </div>
                @endif


                      @if(get_option('advertisement_right3_status', 0))
                <div class="advert" style="margin-bottom:5px; padding-top: 5px;">
                    <div class="row ">
                        <div class="col-xs-12 p-t-10">
                            <a class="post-item" href="{{ get_option('advertisement_right3_link', '#') }}">
                                <figure class="img-holder">
                                    {!! get_option('advertisement_right3_content') !!}
                                </figure>
                            </a>
                        </div>
                    </div>
                </div>
                @endif
                {!! $post->right2_body !!}<br>
                     @if(get_option('advertisement_right4_status', 0))
                <div class="advert" style="margin-bottom:5px; padding-top: 5px;">
                    <div class="row ">
                        <div class="col-xs-12 p-t-10">
                            <a class="post-item" href="{{ get_option('advertisement_right4_link', '#') }}">
                                <figure class="img-holder">
                                    {!! get_option('advertisement_right4_content') !!}
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

@endsection
@section('js-script')
<script>

    $('title').text('{{ $title }} | ' + $('title').text());

    /////
    $(document).ready(function() {
        var originalFontSize = $('.entry-content p').css('font-size');
        $(".incFont").click(function() {
            var currentFontSize = $('.entry-content p').css('font-size');
            var currentFontSizeNum = parseFloat(currentFontSize, 10);
            var newFontSize = currentFontSizeNum * 1.2;
            if (newFontSize <= 32)
                $('.entry-content p').css('font-size', newFontSize);
            return false;
        });
        $(".decFont").click(function() {
            var currentFontSize = $('.entry-content p').css('font-size');
            var currentFontSizeNum = parseFloat(currentFontSize, 10);
            var newFontSize = currentFontSizeNum * 0.8;
            if (newFontSize >= 14)
                $('.entry-content p').css('font-size', newFontSize);
            return false;
        });
    });

    $(document).ready(function() {
        //share url

        var share_url = window.location.href;

        $(document).on('click', '.shares', function() {
            var status = false;
            if ($(this).data('social') == 'facebook') {
                var status = true;
                var url = 'http://www.facebook.com/sharer.php?u=' + share_url;
            } else if ($(this).data('social') == 'twitter') {
                var status = true;
                var url = 'http://twitter.com/share?text=' + $(this).data('text') + '&' + 'url=' + share_url;
            }
            if (status == true) {
                window.open(url, 'sharer', 'toolbar=0,status=0,width=648,height=395');
                return true;
            }
        })
    });

</script>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v8.0" nonce="fLftAiNj"></script>
@endsection

