@extends('layouts.app')

@section('content')
<h4 class="card-title d-none">{{ _lang('Edit') }}</h4>
<div class="row">
    <div class="col-md-8">
        <div class="card">
            <div class="card-body">
                <form method="post" autocomplete="off" action="{{ route('categories.update', $category->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">

                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-control-label">{{ _lang('Name') }}</label>
                                <input type="text" name="name" class="form-control" value="{{ $category->name }}" placeholder="longText" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-control-label">{{ _lang('Slug') }}</label>
                                <input type="text" name="slug" class="form-control" value="{{ $category->slug }}" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-control-label">{{ _lang('Description') }}</label>
                                <textarea name="description" class="form-control" rows="4">{{ $category->description }}</textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-control-label">{{ _lang('Parent') }}</label>
                                <select name="parent_id" class="form-control select2">
                                    <option value="">{{ _lang('None') }}</option>
                                    {{ create_option('categories', 'id', 'name', $category->parent_id, ['status' => 1]) }}
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label">{{ _lang('Status') }}</label>
                                <select class="form-control select2" name="status" data-value="{{ $category->status }}" required>
                                    <option value="1">{{ _lang('Active') }}</option>
                                    <option value="0">{{ _lang('In-Active') }}</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <button type="reset" class="btn btn-danger btn-sm">{{ _lang('Reset') }}</button>
                                <button type="submit" class="btn btn-primary btn-sm">{{ _lang('Save') }}</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js-script')
<script>
    $('[name=name]').keyup(function() {
        var name = $(this).val();
        slug = name.toLowerCase().replace(/\s/g, '-')
        $('[name=slug]').val(slug);
    });
    $('select[name=parent_id] > option[value={{ $category->id }}]').remove()

</script>
@endsection

