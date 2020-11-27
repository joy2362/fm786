@extends('layouts.app')

@section('content')
<div class="card-title" style="display: none;">{{ _lang('Settings') }}</div>
<div class="row">
    <div class="col-md-3">
        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
            <a class="nav-link text-dark active" id="v-pills-general-tab" data-toggle="pill" href="#v-pills-general"
                role="tab" aria-controls="v-pills-general" aria-selected="true">
                <i class="mdi mdi-settings"></i>
                {{ _lang('General Settings') }}
            </a>
            <a class="nav-link text-dark" id="v-pills-email-tab" data-toggle="pill" href="#v-pills-email" role="tab"
                aria-controls="v-pills-email" aria-selected="false">
                <i class="mdi mdi-email"></i>
                {{ _lang('Email Settings') }}
            </a>
            <a class="nav-link text-dark" id="v-pills-logo-tab" data-toggle="pill" href="#v-pills-logo" role="tab"
                aria-controls="v-pills-logo" aria-selected="false">
                <i class="mdi mdi-message-image"></i>
                {{ _lang('Logo & Icon') }}
            </a>
        </div>
    </div>
    <div class="col-md-9">
        <div class="tab-content" id="v-pills-tabContent">
            <div class="tab-pane fade show active" id="v-pills-general" role="tabpanel"
                aria-labelledby="v-pills-general-tab">
                <div class="card card-default">
                    <div class="card-body">
                        <div class="card-title">{{ _lang('General Settings') }}</div>
                        <form method="post" class="ajax-submit2 params-card" autocomplete="off"
                            action="{{ route('general_settings') }}">
                            @csrf
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">{{ _lang('Company Name') }}</label>
                                    <input type="text" class="form-control" name="company_name"
                                        value="{{ get_option('company_name') }}" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">{{ _lang('Site Title') }}</label>
                                    <input type="text" class="form-control" name="site_title"
                                        value="{{ get_option('site_title') }}" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">{{ _lang('Timezone') }}</label>
                                    <select class="form-control select2" name="timezone" required>
                                        <option value="">{{ _lang('Select One') }}</option>
                                        {{ create_timezone_option(get_option('timezone')) }}
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">{{ _lang('Language') }}</label>
                                    <select class="form-control select2" name="language" required>
                                        {!! load_language( get_option('language') ) !!}
                                    </select>
                                </div>
                            </div>
                            <div class="form-group text-right">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-outline-success btn-sm">
                                        {{ _lang('Update') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="v-pills-email" role="tabpanel" aria-labelledby="v-pills-email-tab">
                <div class="card card-default">
                    <div class="card-body">
                        <div class="card-title">{{ _lang('Email Settings') }}</div>
                        <form method="post" class="ajax-submit2 params-card" action="{{ route('general_settings') }}">
                            @csrf
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">{{ _lang('Mail Type') }}</label>
                                    <select class="form-control select2" name="mail_type" id="mail_type" required>
                                        <option value="mail" {{ get_option('mail_type')=="mail" ? "selected" : "" }}>
                                            {{ _lang('PHP Mail') }}</option>
                                        <option value="smtp" {{ get_option('mail_type')=="smtp" ? "selected" : "" }}>
                                            {{ _lang('SMTP') }}</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">{{ _lang('From Email') }}</label>
                                    <input type="text" class="form-control" name="from_email"
                                        value="{{ get_option('from_email') }}" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">{{ _lang('From Name') }}</label>
                                    <input type="text" class="form-control" name="from_name"
                                        value="{{ get_option('from_name') }}" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">{{ _lang('SMTP Host') }}</label>
                                    <input type="text" class="form-control smtp" name="smtp_host"
                                        value="{{ get_option('smtp_host') }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">{{ _lang('SMTP Port') }}</label>
                                    <input type="text" class="form-control smtp" name="smtp_port"
                                        value="{{ get_option('smtp_port') }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">{{ _lang('SMTP Username') }}</label>
                                    <input type="text" class="form-control smtp" autocomplete="off" name="smtp_username"
                                        value="{{ get_option('smtp_username') }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">{{ _lang('SMTP Password') }}</label>
                                    <input type="password" class="form-control smtp" autocomplete="off"
                                        name="smtp_password" value="{{ get_option('smtp_password') }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">{{ _lang('SMTP Encryption') }}</label><select
                                        class="form-control smtp" name="smtp_encryption">
                                        <option value="ssl"
                                            {{ get_option('smtp_encryption')=="ssl" ? "selected" : "" }}>
                                            {{ _lang('SSL') }}</option>
                                        <option value="tls"
                                            {{ get_option('smtp_encryption')=="tls" ? "selected" : "" }}>
                                            {{ _lang('TLS') }}</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group text-right">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-outline-success btn-sm">
                                        {{ _lang('Update') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="v-pills-logo" role="tabpanel" aria-labelledby="v-pills-logo-tab">
                <div class="card card-default">
                    <div class="card-body">
                        <div class="card-title">{{ _lang('Logo & Icon') }}</div>
                        <form method="post" class="ajax-submit2 params-card" action="{{ route('general_settings') }}"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">{{ _lang('Logo') }}</label>
                                    <input type="file" class="form-control dropify" name="logo"
                                        data-allowed-file-extensions="png jpg jpeg PNG JPG JPEG"
                                        data-default-file="{{ get_logo() }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">{{ _lang('Site Icon') }}</label>
                                    <input type="file" class="form-control dropify" name="icon"
                                        data-allowed-file-extensions="png PNG" data-default-file="{{ get_icon() }}">
                                </div>
                            </div>
                            <div class="form-group text-right">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-outline-success btn-sm">
                                        {{ _lang('Update') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js-script')
<script type="text/javascript">
    if ($("#mail_type").val() != "smtp") {
        $(".smtp").prop("disabled", true);
        $(".smtp").prop("required", false);
    }
    $(document).on("change", "#mail_type", function () {
        if ($(this).val() != "smtp") {
            $(".smtp").prop("disabled", true);
            $(".smtp").prop("required", false);
        } else {
            $(".smtp").prop("disabled", false);
            $(".smtp").prop("required", true);
        }
    });
</script>
@stop
