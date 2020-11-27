@extends('layouts.app')

@section('content')

<div class="row">
	<div class="col-md-12 mb-2 text-right">
		<h4 class="card-title d-none">{{ _lang('Post List') }}</h4>
		<a class="btn btn-warning btn-sm" href="{{ url('posts/pending') }}" data-title="{{ _lang('Pending') }}">
			<i class="mdi mdi-clock mr-1"></i>
			{{ _lang('Pending') }} 
			@php
			    $count = counter('posts', ['status' => 0]);
			    if($count){
			        echo "($count)";
			    }
			@endphp
		</a>
		<a class="btn btn-primary btn-sm" href="{{ route('posts.create') }}" data-title="{{ _lang('Add New') }}">
			<i class="mdi mdi-plus mr-1"></i>
			{{ _lang('Add New') }}
		</a>
	</div>
	<div class="col-md-12">
		<div class="card">
			<div class="card-body">
				<table class="table table-bordered" id="data-table">
					<thead>
						<tr>
							<th>{{ _lang('Post ID') }}</th>
        					<th>{{ _lang('Featured Image') }}</th>
        					<th>{{ _lang('Title') }}</th>
                          
        					<th>{{ _lang('Author') }}</th>
        					<th>{{ _lang('Date') }}</th>
        					<th>{{ _lang('Views') }}</th>
        					<th>{{ _lang('Status') }}</th>

							<th class="text-center">{{ _lang('Action') }}</th>
						</tr>
					</thead>
				</table>
			</div>
		</div>
	</div>
</div>

@endsection

@section('js-script')
<script type="text/javascript">
	$('#data-table').DataTable({
		processing: true,
		serverSide: true,
		ajax: _url + "/posts",
		"columns" : [
			{ data : "id", name : "id", className : "id" },
        	{ data : "featured_image", name : "featured_image", className : "featured_image" },
        	{ data : "title", name : "title", className : "title" },
         { data : "first_name", name : "first_name", className : "first_name" },
        	
        	{ data : "created_at", name : "created_at", className : "created_at" },
        	{ data : "views", name : "views", className : "views" },
        	{ data : "status", name : "status", className : "status" },
			{ data : "action", name : "action", orderable : false, searchable : false, className : "text-center" }
			
		],
		responsive: true,
		"bStateSave": true,
		"bAutoWidth":false,	
		"ordering": false
	});
</script>
@endsection