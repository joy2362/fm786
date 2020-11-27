<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ get_option('site_title') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="{{ get_icon() }}" />
    @yield('meta-tags')
    <meta http-equiv="refresh" content="900">
    <link rel="manifest" href="manifest.webmanifest">

    <link href="{{ asset('public/website') }}/assets/inews/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

    <link href="{{ asset('public/website') }}/assets/inews/css/animate.min.css" rel="stylesheet" type="text/css" />

    <link href="{{ asset('public/website') }}/assets/inews/bootsnav/css/bootsnav.css" rel="stylesheet" type="text/css" />

    <link href="{{ asset('public/website') }}/assets/inews/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />

    <link href="{{ asset('public/website') }}/assets/inews/themify-icons/themify-icons.css" rel="stylesheet" type="text/css" />

    <link href="{{ asset('public/website') }}/assets/inews/css/flaticon.css" rel="stylesheet" type="text/css" />
    

    <link href="{{ asset('public/website') }}/assets/inews/css/style.css" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" type="text/css" href="{{ asset('public/website') }}/assets/custom/css/dist/1589002489932.styles.css" />
    <link href="{{ asset('public/backend') }}/css/jquery.jConveyorTicker.min.css" rel="stylesheet">
    
    <script src="{{ asset('public/website') }}/assets/inews/js/jquery.min.js" ></script>
    
    <script>
        setTimeout(function(){ 
    $('.se-pre-con').fadeOut("slow");
}, 3000);
    </script>

</head>
<body class="home-page">
    <div id="fb-root"></div>

    <div class="sticky-footer-ad">
        <div class="sticky-main-wrapper" style="max-width:970px;">

            <div id='div-gpt-ad-1591014890823-0' style="text-align: center;">
            </div>
        </div>
    </div>

    <section class="full-width top_event_banner">
        <div class="container" style="padding:0;">
            <div class="banner-holder" style="text-align:center; padding:5px 0;">

            </div>
        </div>
    </section>
    <div class="se-pre-con"></div>

    <header>

        <div class="header-top">
            <div class="container">
                      
                         @if(get_option('advertisement_top_status', 0))
    
                        {!! get_option('advertisement_top_content') !!}
                   
  
    @endif
              <br>   <br>
                <div class="row">
                    <div class="col-sm-4">

                        <div class="header-social">
                            <ul>
                                <li><a href="{{ get_option('facebook_link') }}"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="{{ get_option('twitter_link') }}"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="{{ get_option('instagram_link') }}"><i class="fa fa-instagram"></i></a></li>
                                <li class="hidden-xs"><a href="{{ get_option('linkedin_link') }}"><i class="fa fa-linkedin"></i></a></li>
                                <li class="hidden-xs"><a href="{{ get_option('youtube_link') }}"><i class="fa fa-youtube-play"></i></a></li>
                                <li><a href="#"><i class="fa fa-apple" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-play" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>


                        <div class="top-left-menu">
                            <ul>

                            </ul>
                        </div>

                    </div>

                    <div class="col-sm-8 pull-right">
                        <div class="header-right-menu">
                            <ul>
                                @if(get_lang() == 'Bangla')
                                <li class="bg-black"><a style="color: white !important; font-size: 15px" href="{{ url('lang/English') }}">English</a></li>
                                @elseif(get_lang() == 'English')
                                <li class="bg-black"><a style="color: white !important; font-size: 15px" href="{{ url('lang/Bangla') }}">বাংলা</a></li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="header-mid hidden-xs">
            <div class="container">
                <div class="row" style="display:flex; justify-content: center">
                    <div class="logo">
                        <a href="{{ url('/') }}">
                            <img src="{{ get_logo() }}" class="img-responsive" alt="">
                        </a>
                        <p class="p-t-5">
                              <?php 
$currentDate = date("d F Y, h:i:s A");
$engDATE = array('1','2','3','4','5','6','7','8','9','0','January','February','March','April',
'May','June','July','August','September','October','November','December','Saturday','Sunday',
'Monday','Tuesday','Wednesday','Thursday','Friday');
$bangDATE = array('১','২','৩','৪','৫','৬','৭','৮','৯','০','জানুয়ারী','ফেব্রুয়ারী','মার্চ','এপ্রিল','মে',
'জুন','জুলাই','আগস্ট','সেপ্টেম্বর','অক্টোবর','নভেম্বর','ডিসেম্বর','শনিবার','রবিবার','সোমবার','মঙ্গলবার','
বুধবার','বৃহস্পতিবার','শুক্রবার' 
);
$convertedDATE = str_replace($engDATE, $bangDATE, $currentDate);
echo "$convertedDATE";
?>
                           
                            
                        </p>
                    </div>
                </div>
            </div>
        </div>


        <nav class="navbar navbar-default navbar-sticky navbar-mobile bootsnav">

            <div class="top-search">
                <div class="container">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-search"></i></span>
                        <input type="text" class="form-control" placeholder="Search">
                        <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
                    </div>
                </div>
            </div>

            <div class="container no-padding">

                <div class="attr-nav">
                    <ul>
                        <li class="search"><a href="https://www.google.com/"><i class="fa fa-search"></i></a></li>
                    </ul>
                </div>
<style>
    @media (min-width:320px) and max-width:515px)

{
 .p-t-5 {
    padding-top: 10px;
}   
}
</style>
<nav class="navbar navbar-default navbar-sticky navbar-mobile bootsnav">

<div class="top-search">
<div class="container">
<div class="input-group">
<span class="input-group-addon"><i class="fa fa-search"></i></span>
<input type="text" class="form-control" placeholder="Search">
<span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
</div>
</div>
</div>

<div class="container no-padding">

<div class="attr-nav">
<ul>
<li class="search"><a href="/google/search"><i class="fa fa-search"></i></a></li>
</ul>
</div>


<div class="navbar-header">
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
<i class="fa fa-bars"></i>
</button>
<div class="m-logo hidden-sm hidden-md hidden-lg">

বৃহস্পতিবার, ১০ সেপ্টেম্বর ২০২০, ২৬ ভাদ্র ১৪২৭ 
</p>
</div>
</div>


<div class="collapse navbar-collapse" id="navbar-menu">
<ul class="nav navbar-nav navbar-left" data-in="" data-out="">
<li class=""><a href="/">প্রথমপাতা</a></li>

 @php
                        $menu_categories = json_decode(get_option('menu_categories'))
                        @endphp
                        @if($menu_categories)
                        @foreach(App\Category::whereIn('id', $menu_categories)->limit(20)->get() as $menu)
                      
<li class="dropdown megamenu-fw">
<a href="{{ url('category', $menu->slug) }}" class="dropdown-toggle" data-toggle="dropdown">{{ $menu->name }}</a>
<div class="dropdown-menu megamenu-content megamenu-others animated" role="menu"><ul>
     @php
                        $menu_categories2 = json_decode(get_option('menu_categories'))
                        @endphp
                        @if($menu_categories2)
                        @foreach(App\Category::whereIn('parent_id', $menu_categories2)->limit(20)->get();)
                        <li><a href="{{ url('category', $menu->slug) }}">{{ $menu->name }}</a></li>
                        @endforeach
                        @endif


</ul>
<div class="col-menu-mega col-md-3">

</div>

</div>
</li> @endforeach
                        @endif
</ul>
</div>
</div>
</nav>
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-bars"></i>
                    </button>
                    <div class="m-logo hidden-sm hidden-md hidden-lg">
                        <a class="navbar-brand" href="#">
                            <img src="{{ get_logo() }}" class="logo" alt="24x7 online multimedia news"></a>
                        <p class="p-t-5 m-b-0"><br>
                         <?php 
$currentDate = date("d F Y, h:i:s A");
$engDATE = array('1','2','3','4','5','6','7','8','9','0','January','February','March','April',
'May','June','July','August','September','October','November','December','Saturday','Sunday',
'Monday','Tuesday','Wednesday','Thursday','Friday');
$bangDATE = array('১','২','৩','৪','৫','৬','৭','৮','৯','০','জানুয়ারী','ফেব্রুয়ারী','মার্চ','এপ্রিল','মে',
'জুন','জুলাই','আগস্ট','সেপ্টেম্বর','অক্টোবর','নভেম্বর','ডিসেম্বর','শনিবার','রবিবার','সোমবার','মঙ্গলবার','
বুধবার','বৃহস্পতিবার','শুক্রবার' 
);
$convertedDATE = str_replace($engDATE, $bangDATE, $currentDate);
echo "$convertedDATE";
?>
                           
                            
                        </p>
                    </div>
                </div>
            
            </div>
        </nav>

    </header>


    <main class="page_main_wrapper">

        @yield('content')
    </main>


    <footer>
        <div class="container">
            <div class="row">

                <div class="col-sm-4 footer-box">
                    <div class="about-inner">
                        <img src="{{ get_logo() }}" class="img-responsive" alt="barta24 logo" />
                        <p> {{ get_option('about') }} </p>
                        <ul>
                            <li>
                                <p> {{ get_option('address') }} </p>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-sm-4 footer-box">
                    <div class="about-inner">
                          @if(get_option('advertisement_footer1_status', 0))
    
                        {!! get_option('advertisement_footer1_content') !!}
                   
  
    @endif
                       
                    </div>
                </div>
                <div class="col-sm-4 footer-box">
                    <div class="app-download-inner">
                          @if(get_option('advertisement_footer2_status', 0))
    
                        {!! get_option('advertisement_footer2_content') !!}
                   
  
    @endif 
                                <h2>{{ _lang('Contact Us') }}</h2>
                                <p>
                                    <span> <a href="tel:{{ get_option('contact_phone') }}">{{ get_option('contact_phone') }}</a> </span>
                                </p>
                           
                                <p>
                                    <span> <a href="mailto:{{ get_option('contact_email') }}">{{ get_option('contact_email') }}</a> </span>
                                </p>
                       
 <div class="social-connect">
                            <ul class="social--redius social--color">
                                <li><a data-fb="fb_link" class="social__facebook" title="Facebook" href="{{ get_option('facebook_link') }}"><i class="fa fa-facebook"></i></a></li>
                                <li><a data-twitter="twitter_link" class="social__twitter" title="Twitter" href="{{ get_option('twitter_link') }}"><i class="fa fa-twitter"></i></a></li>
                                <li><a data-youtube="youtube_link" class="social__youtube" title="Youtube" href="{{ get_option('youtube_link') }}"><i class="fa fa-youtube"></i></a></li>
                                <li><a data-linkedin="linkedin_link" class="social__linkedin" title="Linkedin" href="{{ get_option('linkedin_link') }}"><i class="fa fa-linkedin"></i></a></li>
                                <li><a data-insta="insta_link" class="social__instagram" title="Instagram" href="{{ get_option('instagram_link') }}"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <div class="sub-footer">
        <div class="container">
            <div class="row">
                <style>
.alert {
  padding: 20px;
  background-color: #f44336;
  color: white;
}
.app-download-inner {
    text-align: left;
}
.closebtn {
  margin-left: 15px;
  color: white;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
}

.closebtn:hover {
  color: black;
}
</style>
<div class="alert">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
  <strong>Danger!</strong> Indicates a dangerous or potentially negative action.
</div>
                <div class="col-xs-12 col-sm-5 col-md-5">
                    <div class="copy">{{ get_option('copyright_text') }}</div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('public/website') }}/assets/inews/js/jquery.min.js" ></script>

    <script src="{{ asset('public/website') }}/assets/inews/js/jquery-ui.min.js"></script>

    <script src="{{ asset('public/website') }}/assets/inews/js/bootstrap.min.js"></script>

    <script src="{{ asset('public/website') }}/assets/inews/bootsnav/js/bootsnav.js"></script>

    <script src="{{ asset('public/website') }}/assets/inews/js/theia-sticky-sidebar.js"></script>

    <script src="{{ asset('public/website') }}/assets/inews/js/RYPP.js"></script>

    <script src="{{ asset('public/website') }}/assets/inews/owl-carousel/owl.carousel.min.js"></script>

    <script src="{{ asset('public/website') }}/assets/js/archive_calendar.js"></script>
    <script src="{{ asset('public/website') }}/assets/cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
    <script src="{{ asset('public/website') }}/assets/js/lodash.js"></script>

    <script src="{{ asset('public/website') }}/assets/inews/js/custom.js"></script>
    <script src="{{ asset('public/website') }}/assets/inews/js/jquery.easy-ticker.js"></script>
    <style type="text/css">
        .bx-controls {
            display: none;
        }

    </style>
    <script>
        $(document).ready(function() {
            function initSlide(id) {
                var slider = $('#' + id + ' .slider').bxSlider({
                    dots: false
                });

                $('#' + id + ' .slider-nav .left').click(function() {
                    slider.goToPrevSlide();
                });
                $('#' + id + ' .slider-nav .right').click(function() {
                    slider.goToNextSlide();
                });
            }

            initSlide('default-slider');
            initSlide('binodon-slider');
        });
        
    </script>
    @yield('js-script')
</body>
</html>

