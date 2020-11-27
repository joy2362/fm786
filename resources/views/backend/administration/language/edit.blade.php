@extends('layouts.app')

@section('content')
<div class="row">
	<div class="col-md-12">
		<div class="card card-default">
			<div class="card-body">
				<div class="card-heading">
					<div class="card-title" >
						{{ _lang('Edit Translation') }}
					</div>
				</div>
				<form action="{{ route('languages.update', $id) }}" class="validate" autocomplete="off" method="post">
					@csrf
					@method('PUT')
					@foreach($language as $key=>$lang)
					<div class="col-md-6">
						<div class="form-group">
							<label class="control-label">{{ ucwords($key) }}</label>						
							<input type="text" class="form-control" name="language[{{ str_replace(' ','_',$key) }}]" value="{{ $lang }}" required>
						</div>
					</div>
					@endforeach
					<div class="form-group text-right">
						<div class="col-md-12">
							<button type="submit" class="btn btn-outline-success btn-sm">{{ _lang('Save Translation') }}</button>
						</div>
					</div>
				</form>	
			</div>
		</div>
	</div>
</div>
@endsection
