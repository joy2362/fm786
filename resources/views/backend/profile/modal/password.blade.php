<form action="{{ route('password.update') }}" class="ajax-submit" method="post" autocomplete="off">
	@csrf
	<div class="col-md-12">
		<div class="form-group">
			<label class="control-label">{{ _lang('Old Password') }}</label>
			<input type="password" class="form-control" name="oldpassword" required>
		</div>
	</div>
	<div class="col-md-12">
		<div class="form-group">
			<label class="control-label">{{ _lang('New Password') }}</label>
			<input type="password" class="form-control" name="password" required>
		</div>
	</div>
	<div class="col-md-12">
		<div class="form-group">
			<label class="control-label">{{ _lang('Confirm Password') }}</label>
			<input type="password" id="password-confirm" class="form-control" name="password_confirmation" required>
		</div>
	</div>
	<div class="col-md-6 offset-md-3">
		<div class="form-group text-right">
			<button type="submit" class="btn btn-outline-success btn-block btn-sm">{{ _lang('Update') }}</button>
		</div>
	</div>
</form>