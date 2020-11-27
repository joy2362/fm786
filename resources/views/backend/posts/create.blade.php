@extends('layouts.app')

@section('content')
<p style="color:white;"> <marquee bgcolor="#ed1c24" width="100%"> <p><b>FM786.COM এ স্বাগতম আপনাকে | কিছু নিয়মাবলীঃ দয়া করে কখনও নিউজ কপি করে দিবেন না । কপি করে যদিও নিয়ে আসেন সেই ক্ষেত্রে Notepad ব্যবহার করবেন কারন আপনি যদি Direct Copy করে আনেন তাহলে নিউজ দেয়ার সাথে সাথে সব এলোমেলা হয়ে যাবে । কারন অন্য সাইটের Code আমাদের সাইটে দিলে সব চলে যাবে আমাদের সাইটের তাই দয়া করে এই কাজটি করবেন না । ধন্যবাদ..... </b></p> </marquee> </p>
<h4 class="card-title d-none">{{ _lang('Add New') }}</h4>
<div class="row">
    <form method="post" autocomplete="off" action="{{ route('posts.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">

                    <div class="row">

                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-control-label">{{ _lang('শিরোনাম লিখুন') }}</label>
                                <input type="text" name="title" class="form-control" value="{{ old('title') }}" required>
                            </div>
                        </div>
                       <div class="col-md-12">
                            <div class="form-group">
                              <label class="form-control-label">{{ _lang(' এলাইস লিখুন (Example: good-news)') }}</label>
                                <input type="text" name="slug" class="form-control" value="{{ old('slug') }}" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-control-label">{{ _lang('বিস্তারিত লিখুন') }}</label>
                                <textarea name="post_body" class="form-control summernote" rows="4" required>{{ old('post_body') }}</textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-control-label">{{ _lang('Categories') }}</label>
                                <select name="categories[]" class="form-control select2" multiple required>
                                    {{ create_option('categories', 'id', 'name', null, ['status' => 1]) }}
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-control-label">{{ _lang('Tags') }}</label>
                                <input type="text" name="tags" data-role="tagsinput" class="form-control" value="{{ old('tags') }}">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-control-label">{{ _lang('ভিডিও এর ধরন') }}</label>
                                <select name="video_type" class="form-control select2" id="video_type">
                                    <option value="">{{ _lang('None') }}</option>
                                    <option value="youtube">{{ _lang('Youtube') }}</option>
                                    <option value="vimeo">{{ _lang('Vimeo') }}</option>
                                    <option value="facebook">{{ _lang('Facebook') }}</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-control-label">{{ _lang('যদি এই খবর এর কোন ভিডিও থাকে তাহলে এখানে তার লিংক দিন') }} </label>
                                <input type="url" name="video_url" class="form-control" value="{{ old('video_url') }}" id="video_url">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-sm">{{ _lang('Save করুন') }}</button>
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
                                <input type="file" class="form-control dropify" name="featured_image" data-allowed-file-extensions="png jpg jpeg PNG JPG JPEG" required>
                                <small style="color: red;">( 800 x 450 {{ _lang('সব সময় ছবি Paint Tools দিয়ে Resize করে দিবেন') }} )</small>
                            </div>
                        </div>
                         
                        
                        <div class="col-md-12">
                            <div class="form-group">
                          <label class="form-control-label">{{ _lang('ছবির নিচের ক্যাপসন লিখুন') }}</label>
                                <textarea name="meta_description" class="form-control" rows="4">{{ old('meta_description') }}</textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                 <label class="form-control-label">{{ _lang('রিপোর্টার এর তথ্য লিখুন') }} </label>
                                <input type="text" name="meta_tags" data-role="tagsinput" class="form-control" value="{{ old('meta_tags') }}">
                            </div>
                        </div>
                      <!--
                       <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-control-label">{{ _lang('Left Advertisement 1') }}</label>
                                <textarea name="left1_body" class="form-control summernote" rows="4">{{ old('left1_body') }}</textarea>
                            </div>
                        </div>
                      <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-control-label">{{ _lang('Left Advertisement 2') }}</label>
                                <textarea name="left2_body" class="form-control summernote" rows="4">{{ old('left2_body') }}</textarea>
                            </div>
                        </div>
                  <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-control-label">{{ _lang('Right Advertisement 1') }}</label>
                                <textarea name="right1_body" class="form-control summernote" rows="4">{{ old('right1_body') }}</textarea>
                            </div>
                        </div>
                      <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-control-label">{{ _lang('Right Advertisement 2') }}</label>
                                <textarea name="right2_body" class="form-control summernote" rows="4">{{ old('right2_body') }}</textarea>
                            </div>
                        </div> -->
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
                                <select class="form-control select2" name="status" data-value="{{ old('status', 1) }}" required>
                                    <option value="1">{{ _lang('Publish') }}</option>
                                    <option value="2">{{ _lang('Draft') }}</option>
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
