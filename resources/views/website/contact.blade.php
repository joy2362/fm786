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
                        <li class="breadcrumb-item"><a href="#">{{ _lang('Contact Us') }}</a></li>
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
                <div class="contact-content-area bg-white mb-30 p-30 box-shadow">

                    {{-- <div class="map-area mb-30">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22236.40558254599!2d-118.25292394686001!3d34.057682914027104!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2c75ddc27da13%3A0xe22fdf6f254608f4!2z4Kay4Ka4IOCmj-CmnuCnjeCmnOCnh-CmsuCnh-CmuCwg4KaV4KeN4Kav4Ka-4Kay4Ka_4Kar4KeL4Kaw4KeN4Kao4Ka_4Kav4Ka84Ka-LCDgpq7gpr7gprDgp43gppXgpr_gpqgg4Kav4KeB4KaV4KeN4Kak4Kaw4Ka-4Ka34KeN4Kaf4KeN4Kaw!5e0!3m2!1sbn!2sbd!4v1532328708137" allowfullscreen=""></iframe>
                    </div> --}}

                    <div class="section-heading">
                        <h5>{{ _lang('Contact Info') }}</h5>
                    </div>
                    <div class="contact-information mb-30">
                        <p>{{ get_option('about') }}</p>

                        <div class="single-contact-info d-flex align-items-center">
                            <div class="icon mr-15">
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                            </div>
                            <div class="text">
                                <p>{{ _lang('Address') }}:</p>
                                <h6>{{ get_option('contact_email') }}</h6>
                            </div>
                        </div>

                        <div class="single-contact-info d-flex align-items-center">
                            <div class="icon mr-15">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                            </div>
                            <div class="text">
                                <p>{{ _lang('Email') }}:</p>
                                <h6>{{ get_option('contact_phone') }}</h6>
                            </div>
                        </div>

                        <div class="single-contact-info d-flex align-items-center">
                            <div class="icon mr-15">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                            </div>
                            <div class="text">
                                <p>{{ _lang('Phone') }}:</p>
                                <h6>{{ get_option('address') }}</h6>
                            </div>
                        </div>
                    </div>

                    <div class="section-heading">
                        <h5>{{ _lang('GET IN TOUCH') }}</h5>
                    </div>

                    <div class="contact-form-area">
                        <form action="{{ url('contact') }}" method="post">
                            @if(Session::has('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    <span class="sr-only">{{ _lang('Close') }}</span>
                                </button>
                                {{ session('success') }}
                            </div>
                            @endif
                            @if(Session::has('error'))
                            <div class="alert alert-primary alert-danger fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    <span class="sr-only">{{ _lang('Close') }}</span>
                                </button>
                                {{ session('error') }}
                            </div>
                            @endif
                            @foreach($errors->all() as $error)
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    <span class="sr-only">{{ _lang('Close') }}</span>
                                </button>
                                {{ $error }}
                            </div>
                            @endforeach
                            
                            @csrf
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="name" name="name" placeholder="{{ _lang('Name') }}" value="{{ old('name') }}" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="phone" name="phone" placeholder="{{ _lang('Phone') }}" value="{{ old('phone') }}">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="email" name="email" placeholder="{{ _lang('E-mail') }}" value="{{ old('email') }}">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="subject" name="subject" placeholder="{{ _lang('Subject') }}" value="{{ old('subject') }}" required>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea name="message" class="form-control" id="message" cols="30" rows="10" placeholder="Message" required>{{ old('message') }}</textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn mag-btn mt-30" type="submit">{{ _lang('Send') }}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ##### Archive Post Area End ##### -->

@endsection

