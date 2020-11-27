@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                <header class="card-heading">
                    <h2 class="card-title">
                        {{ _lang('Edit') }}
                    </h2>
                </header>
                <form method="post" autocomplete="off" action="{{ route('admins.update', $admin->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-control-label">{{ _lang('First Name') }}</label>
                            <input type="text" name="first_name" class="form-control" value="{{ $user->first_name }}" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-control-label">{{ _lang('Last Name') }}</label>
                            <input type="text" name="last_name" class="form-control" value="{{ $user->last_name }}" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-control-label">{{ _lang('Email') }}</label>
                            <input type="email" name="email" class="form-control" value="{{ $user->email }}" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">{{ _lang('User Type') }}</label>
                            <select class="form-control select2" name="user_type" data-value="{{ $user->user_type }}" required>
                                <option value="admin">{{ _lang('Admin') }}</option>
                                <option value="editor">{{ _lang('Editor') }}</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="control-label">{{ _lang('Status') }}</label>
                            <select class="form-control select2" name="status" data-value="{{ $user->status }}" required>
                                <option value="1">{{ _lang('Active') }}</option>
                                <option value="0">{{ _lang('In-Active') }}</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="form-control-label">{{ _lang('Profile') }}</label>
                            <input type="file" class="form-control dropify" name="profile" data-allowed-file-extensions="png jpg jpeg PNG JPG JPEG" data-default-file="{{ asset('public/uploads/images/'. $user->profile) }}">
                        </div>
                    </div>

                    <div class="col-md-12 text-right">
                        <div class="form-group">
                            <button type="submit" class="btn btn-outline-success btn-sm">{{ _lang('Update') }}</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

