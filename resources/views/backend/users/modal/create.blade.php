<form method="post" class="ajax-submit" autocomplete="off" action="{{ route('users.store') }}"
    enctype="multipart/form-data">
    @csrf

    <div class="col-md-6">
        <div class="form-group">
            <label class="form-control-label">{{ _lang('First Name') }}</label>
            <input type="text" name="first_name" class="form-control" value="{{ old('first_name') }}" required>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label class="form-control-label">{{ _lang('Last Name') }}</label>
            <input type="text" name="last_name" class="form-control" value="{{ old('last_name') }}" required>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label class="form-control-label">{{ _lang('Email') }}</label>
            <input type="email" name="email" class="form-control" value="{{ old('email') }}" required>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label class="control-label">{{ _lang('User Type') }}</label>
            <select class="form-control select2" name="user_type" required>
                <option value="admin">{{ _lang('Admin') }}</option>
                <option value="editor">{{ _lang('Editor') }}</option>
            </select>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label class="form-control-label">{{ _lang('Password') }}</label>
            <input type="password" name="password" class="form-control" value="{{ old('password') }}" required>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label class="control-label">{{ _lang('Confirm Password') }}</label>
            <input type="password" class="form-control" name="password_confirmation" required>
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <label class="control-label">{{ _lang('Profile') }}</label>
            <input type="file" class="form-control dropify" name="profile"
                data-allowed-file-extensions="png jpg jpeg PNG JPG JPEG">
        </div>
    </div>

    <div class="col-md-6 offset-md-3">
        <div class="form-group">
            <button type="submit" class="btn btn-outline-success btn-block btn-sm">{{ _lang('Save') }}</button>
        </div>
    </div>
</form>
