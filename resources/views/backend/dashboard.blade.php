@extends('layouts.app')

@section('content')
<p style="color:white;"> <marquee bgcolor="#ed1c24" width="100%"> <p><b>FM786.COM এর সাথে থাকার জন্য ধন্যবাদ..... </b></p> </marquee> </p>
<div class="row">
	<div class="col-md-4 stretch-card grid-margin">
		<div class="card bg-gradient-danger card-img-holder text-white">
			<div class="card-body">
				<img src="{{ asset('public/uploads/images/circle.svg') }}" class="card-img-absolute" alt="circle-image">
				<h4 class="font-weight-normal mb-3">
					{{ _lang('মোট নিউজ দিয়েছেন') }}
					<i class="mdi mdi-chart-line mdi-24px float-right"></i>
				</h4>
				<h2>
				    
				    {{ counter('posts', ['status' => 1]) }}
                   
                  
                  
				</h2>
			</div>
		</div>
	</div>
	<div class="col-md-4 stretch-card grid-margin">
		<div class="card bg-gradient-info card-img-holder text-white">
			<div class="card-body">
				<img src="{{ asset('public/uploads/images/circle.svg') }}" class="card-img-absolute" alt="circle-image">
				<h4 class="font-weight-normal mb-3">
					{{ _lang('মোট ভিডিও দিয়েছেন') }}
					<i class="mdi mdi-bookmark-outline mdi-24px float-right"></i>
				</h4>
				<h2>
				    @php
				        $posts = App\Post::where('status', 1)->whereNotNull('video_url')->count();
				    @endphp
				    {{ $posts }}
                  
				</h2>
			</div>
		</div>
	</div>
	<div class="col-md-4 stretch-card grid-margin">
		<div class="card bg-gradient-success card-img-holder text-white">
			<div class="card-body">
				<img src="{{ asset('public/uploads/images/circle.svg') }}" class="card-img-absolute" alt="circle-image">
				<h4 class="font-weight-normal mb-3">
					{{ _lang('আমাদের সদস্যগন') }}
					<i class="mdi mdi-diamond mdi-24px float-right"></i>
				</h4>
				<h2>
					{{ counter('users', ['status' => 1]) }}
				</h2>
			</div>
		</div>
	</div>
  <div class="col-md-4 stretch-card grid-margin">
		<div class="card bg-gradient-danger card-img-holder text-white">
			<div class="card-body">
				<img src="{{ asset('public/uploads/images/circle.svg') }}" class="card-img-absolute" alt="circle-image">
				<h4 class="font-weight-normal mb-3">
					{{ _lang('Babu Jons নিউজ দিয়েছেন') }}
					<i class="mdi mdi-chart-line mdi-24px float-right"></i>
				</h4>
				<h2>
				    
				   
                   {{ counter('posts', ['created_by' => 8]) }}
                  
                   
                  
                  
				</h2>
			</div>
		</div>
	</div>
	<div class="col-md-4 stretch-card grid-margin">
		<div class="card bg-gradient-info card-img-holder text-white">
			<div class="card-body">
				<img src="{{ asset('public/uploads/images/circle.svg') }}" class="card-img-absolute" alt="circle-image">
				<h4 class="font-weight-normal mb-3">
						{{ _lang('Obaidur নিউজ দিয়েছেন') }}
					<i class="mdi mdi-bookmark-outline mdi-24px float-right"></i>
				</h4>
				<h2>
				     {{ counter('posts', ['created_by' => 11]) }}
                  
				</h2>
			</div>
		</div>
	</div>
	<div class="col-md-4 stretch-card grid-margin">
		<div class="card bg-gradient-success card-img-holder text-white">
			<div class="card-body">
				<img src="{{ asset('public/uploads/images/circle.svg') }}" class="card-img-absolute" alt="circle-image">
				<h4 class="font-weight-normal mb-3">
				{{ _lang('Muhammad Shahidullah নিউজ দিয়েছেন') }}
					<i class="mdi mdi-diamond mdi-24px float-right"></i>
				</h4>
				<h2>
					{{ counter('users', ['status' => 13]) }}
				</h2>
			</div>
		</div>
	</div>
  <div class="col-md-4 stretch-card grid-margin">
		<div class="card bg-gradient-success card-img-holder text-white">
			<div class="card-body">
				<img src="{{ asset('public/uploads/images/circle.svg') }}" class="card-img-absolute" alt="circle-image">
				<h4 class="font-weight-normal mb-3">
					{{ _lang('Sayed Rahman নিউজ দিয়েছেন') }}
					<i class="mdi mdi-diamond mdi-24px float-right"></i>
				</h4>
				<h2>
					{{ counter('posts', ['created_by' => 9]) }}+{{ counter('posts', ['created_by' => 14]) }}
				</h2>
			</div>
		</div>
	</div>
  <div class="col-md-4 stretch-card grid-margin">
		<div class="card bg-gradient-danger card-img-holder text-white">
			<div class="card-body">
				<img src="{{ asset('public/uploads/images/circle.svg') }}" class="card-img-absolute" alt="circle-image">
				<h4 class="font-weight-normal mb-3">
					{{ _lang('Rokib Muhammad নিউজ দিয়েছেন') }}
					<i class="mdi mdi-chart-line mdi-24px float-right"></i>
				</h4>
				<h2>
				    
				   
                   {{ counter('posts', ['created_by' => 15]) }}
                  
                   
                  
                  
				</h2>
			</div>
		</div>
	</div>
	<div class="col-md-4 stretch-card grid-margin">
		<div class="card bg-gradient-danger card-img-holder text-white">
			<div class="card-body">
				<img src="{{ asset('public/uploads/images/circle.svg') }}" class="card-img-absolute" alt="circle-image">
				<h4 class="font-weight-normal mb-3">
					{{ _lang('Michael​ Oli নিউজ দিয়েছেন') }}
					<i class="mdi mdi-chart-line mdi-24px float-right"></i>
				</h4>
				<h2>
				    
				   
                   {{ counter('posts', ['created_by' => 1]) }}
                  
                   
                  
                  
				</h2>
			</div>
		</div>
	</div>
</div>

@endsection