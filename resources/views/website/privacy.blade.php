@extends('website.layout')
@section('content')
<!-- ##### Breadcrumb Area Start ##### -->
<div class="mag-breadcrumb py-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/') }}"><i class="fa fa-home" aria-hidden="true"></i> {{ _lang('Home') }}</a></li>
                        <li class="breadcrumb-item"><a href="#">{{ _lang('Privacy & Policy') }}</a></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- ##### Breadcrumb Area End ##### -->

<!-- ##### Archive Post Area Start ##### -->
<div class="archive-post-area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-xl-12">
                <div class="container br-bottom p-b-20" style="text-align: left">
 @if(get_option('advertisement_privacy_status', 0))
 <div class="col-xs-12 p-t-10">
                                    <a class="post-item" href="{{ get_option('advertisement_privacy_link', '#') }}">
                                        <figure class="img-holder">
                                            {!! get_option('advertisement_privacy_content') !!}
                                        </figure>
                                    </a>
                                </div>  @endif
</div>
            </div>
        </div>
    </div>
</div>
<!-- ##### Archive Post Area End ##### -->

@endsection

