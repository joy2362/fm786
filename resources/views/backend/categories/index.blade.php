@extends('layouts.app')

@section('content')

<div class="row">
	<div class="col-md-12 mb-2 text-right">
		<h4 class="card-title d-none">{{ _lang('Post Categories List') }}</h4>
		<a class="btn btn-primary btn-sm ajax-modal" href="{{ route('categories.create') }}" data-title="{{ _lang('Add New') }}">
			<i class="fas fa-plus mr-1"></i>
			{{ _lang('Add New') }}
		</a>
	</div>
	<div class="col-md-12">
		<div class="card">
			<div class="card-body">
				<table class="table table-bordered" id="data-table">
					<thead>
						<tr>
							
        					<th>{{ _lang('Id') }}</th>
        					<th>{{ _lang('Name') }}</th>
        					<th>{{ _lang('Slug') }}</th>
        					<th>{{ _lang('Parent Id') }}</th>
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
		ajax: _url + "/categories",
		"columns" : [
			
        	{ data : "id", name : "id", className : "id" },
        	{ data : "name", name : "name", className : "name" },
        	{ data : "slug", name : "slug", className : "slug" },
        	{ data : "parent_id", name : "parent_id", className : "parent_id" },
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