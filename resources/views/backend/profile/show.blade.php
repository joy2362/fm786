@extends('layouts.app')
@section('content')
<div class="row">
	<div class="col-md-6">
		<div class="card card-default" data-collapsed="0">
			<div class="card-body">
				<div class="card-heading">
					<div class="card-title" >
						{{ _lang('Details') }}
					</div>
				</div>
				<table class="table table-bordered">
					<tbody>
						<tr>
							<td colspan="2" class="text-center">
								<img src="{{ asset('public/uploads/images/' . $profile->profile) }}" class="img-lg img-thumbnail">
							</td>
						</tr>
						<tr>
							<td>{{ _lang('Name') }}</td>
							<td>{{ $profile->first_name . ' ' . $profile->last_name }}</td>
						</tr>
						<tr>
							<td>{{ _lang('Email') }}</td>
							<td>{{ $profile->email }}</td>
						</tr>
						<tr>
							<td>{{ _lang('Status') }}</td>
							<td>
								{!! $profile->status == 1 ? status(_lang('Active'), 'success') : status(_lang('In-Active'), 'danger') !!}
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
@endsection