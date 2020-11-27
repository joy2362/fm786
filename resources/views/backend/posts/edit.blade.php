@extends('layouts.app')

@section('content')
<h4 class="card-title d-none">{{ _lang('Edit') }}</h4>
<div class="row">
    <form method="post" autocomplete="off" action="{{ route('posts.update', $post->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">

                    <div class="row">

                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-control-label">{{ _lang('Title') }}</label>
                                <input type="text" name="title" class="form-control" value="{{ $post->title }}" required>
                            </div>
                        </div>
                       <div class="col-md-12">
                            <div class="form-group">
                               <label class="form-control-label">{{ _lang(' এলাইস লিখুন (Example: good-news)') }}</label>
                                <input type="text" name="slug" class="form-control" value="{{ $post->slug }}" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-control-label">{{ _lang('Post Body') }}</label>
                                <textarea name="post_body" class="form-control summernote" rows="4" required>{!! $post->post_body !!}</textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-control-label">{{ _lang('Categories') }}</label>
                                <select name="categories[]" class="form-control select2" data-value="{{ $post_categories }}" multiple required>
                                    {{ create_option('categories', 'id', 'name', null, ['status' => 1]) }}
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-control-label">{{ _lang('Tags') }}</label>
                                <input type="text" name="tags" data-role="tagsinput" class="form-control" value="{{ $post->tags }}">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-control-label">{{ _lang('Video Type') }}</label>
                                <select name="video_type" class="form-control select2" id="video_type" data-value="{{ $post->video_type, 'youtube' }}">
                                    <option value="">{{ _lang('None') }}</option>
                                    <option value="youtube">{{ _lang('Youtube') }}</option>
                                    <option value="vimeo">{{ _lang('Vimeo') }}</option>
                                    <option value="facebook">{{ _lang('Facebook') }}</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-control-label">{{ _lang('Video Url') }} </label>
                                <input type="url" name="video_url" class="form-control" value="{{ $post->video_url }}" id="video_url">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-sm">{{ _lang('Update') }}</button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label">{{ _lang('Featured Image') }}</label>
                                <input type="file" class="form-control dropify" name="featured_image" data-default-file="{{ asset('public/uploads/images/posts/' . $post->getImage('orginal') ) }}" data-allowed-file-extensions="png jpg jpeg PNG JPG JPEG">
                                <small style="color: red;">( 1200 X 720 {{ _lang('for better view') }} )</small>
                            </div>
                        </div>
                         <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label">{{ _lang('Reporter Image') }}</label>
                                <input type="file" class="form-control dropify" name="reporter_image" data-default-file="{{ asset('public/uploads/images/posts/reporter/' . $post->getImage('orginal') ) }}" data-allowed-file-extensions="png jpg jpeg PNG JPG JPEG">
                                <small style="color: red;">( 150 X 160 {{ _lang('for better view') }} )</small>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-control-label">{{ _lang('ছবির নিচের ক্যাপসন লিখুন') }}</label>
                                <textarea name="meta_description" class="form-control" rows="4">{{ $post->meta_description }}</textarea>
                            </div>
                        </div>
                        
                        <div class="col-md-12">
                            <div class="form-group">
                                  <label class="form-control-label">{{ _lang('রিপোর্টার এর তথ্য লিখুন') }} </label>
                                <input type="text" name="meta_tags" data-role="tagsinput" class="form-control" value="{{ $post->meta_tags }}">
                            </div>
                        </div>
                      <!--
                       <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-control-label">{{ _lang('Left Advertisement 1') }}</label>
                                <textarea name="left1_body" class="form-control summernote" rows="4">{!! $post->left1_body !!}</textarea>
                            </div>
                        </div>
                      <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-control-label">{{ _lang('Left Advertisement 2') }}</label>
                                <textarea name="left2_body" class="form-control summernote" rows="4">{!! $post->left2_body !!}</textarea>
                            </div>
                        </div>
                      <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-control-label">{{ _lang('Right Advertisement 2') }}</label>
                                <textarea name="right1_body" class="form-control summernote" rows="4">{!! $post->right1_body !!}</textarea>
                            </div>
                        </div>
                      <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-control-label">{{ _lang('Right Advertisement 2') }}</label>
                                <textarea name="right2_body" class="form-control summernote" rows="4">{!! $post->right2_body !!}</textarea>
                            </div>
                        </div>  -->
                       <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label">{{ _lang('Featured') }}</label>
                                <select class="form-control select2" name="left1_body" data-value="{{ old('status', 1) }}" required>
                                    <option value="1">{{ _lang('No') }}</option>
                                    <option value="2">{{ _lang('Yes') }}</option>
                                </select>
                            </div>
                        </div>
                      
                      
                        @usertype('admin')
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label">{{ _lang('Status') }}</label>
                                <select class="form-control select2" name="status" data-value="{{ $post->status, 1 }}" required>
                                    <option value="1">{{ _lang('Publish') }}</option>
                                    <option value="0">{{ _lang('Draft') }}</option>
                                </select>
                            </div>
                        </div>
                        @endusertype
                    </div>

                </div>
            </div>
        </div>
    </form>
</div>
@endsection

@section('js-script')
<script>
    $(document).on("change", "#video_type", function() {
        $("#video_url").parent().find('.required').remove();
        if($(this).val() != '') {
            $("#video_url").prop("required", true).parent().find('label').append(' <span class="required"> *</span>');
        } else {
            $("#video_url").prop("required", false);
        }
    });
</script>
@endsection
