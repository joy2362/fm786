<form action="{{ route('languages.store') }}" class="ajax-submit" autocomplete="off" method="post">
	@csrf
	<div class="col-md-12">
		<div class="form-group">
			<label class="control-label">{{ _lang('Language Name') }}</label>
			<input type="text" class="form-control" name="language_name" value="{{ old('language_name') }}" required>
		</div>
	</div>
	<div class="col-md-6 offset-md-3">
		<div class="form-group">
			<button type="submit" class="btn btn-outline-success btn-block btn-sm">{{ _lang('Create') }}</button>
		</div>
	</div>
</form>	