@extends('layouts.app')

@section('content')
<div class="card-title" style="display: none;">{{ _lang('Website Settings') }}</div>
<div class="row">
    <div class="col-md-3">
        <div class="nav flex-column nav-pills" id="tab" role="tablist" aria-orientation="vertical">
            <a class="nav-link text-dark active" id="basic-tab" data-toggle="pill" href="#basic-settings" role="tab" aria-controls="basic-settings" aria-selected="true">
                <i class="mdi mdi-numeric-1-box-multiple-outline"></i>
                {{ _lang('Basic Settings') }}
            </a>
            <a class="nav-link text-dark" id="menu-tab" data-toggle="pill" href="#menu" role="tab" aria-controls="menu" aria-selected="true">
                <i class="mdi mdi-numeric-2-box-multiple-outline"></i>
                {{ _lang('Menu Section') }}
            </a>
            <a class="nav-link text-dark" id="headline-tab" data-toggle="pill" href="#headline" role="tab" aria-controls="headline" aria-selected="true">
                <i class="mdi mdi-numeric-2-box-multiple-outline"></i>
                {{ _lang('Headline Section') }}
            </a>
            <a class="nav-link text-dark" id="home-tab" data-toggle="pill" href="#home" role="tab" aria-controls="home" aria-selected="true">
                <i class="mdi mdi-numeric-2-box-multiple-outline"></i>
                {{ _lang('Home Page Section') }}
            </a>
            <a class="nav-link text-dark" id="advertisement-tab" data-toggle="pill" href="#advertisement" role="tab" aria-controls="advertisement" aria-selected="true">
                <i class="mdi mdi-numeric-2-box-multiple-outline"></i>
                {{ _lang('Advertisements Section') }}
            </a>
            <a class="nav-link text-dark" id="social-links-tab" data-toggle="pill" href="#social-links" role="tab" aria-controls="social-links" aria-selected="false">
                <i class="mdi mdi-numeric-3-box-multiple-outline"></i>
                {{ _lang('Social Links') }}
            </a>
        </div>
    </div>
    <div class="col-md-9">
        <div class="tab-content" id="tabContent">
            <div class="tab-pane fade show active" id="basic-settings" role="tabpanel" aria-labelledby="basic-settings-tab">
                <div class="card card-default">
                    <div class="card-body">
                        <div class="card-title">{{ _lang('Basic Settings') }}</div>
                        <form method="post" class="ajax-submit2 params-card" autocomplete="off" action="{{ route('theme_option') }}">
                            @csrf

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">{{ _lang('About US') }}</label>
                                    <textarea name="about" class="form-control">{{ get_option('about') }}</textarea>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">{{ _lang('Contact Email') }}</label>
                                    <input type="call-to-action" class="form-control" name="contact_email" value="{{ get_option('contact_email') }}" required>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">{{ _lang('Contact Phone') }}</label>
                                    <input type="text" class="form-control" name="contact_phone" value="{{ get_option('contact_phone') }}" required>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">{{ _lang('Address') }}</label>
                                    <textarea class="form-control summernote" name="address" rows="4">{{ get_option('address') }}</textarea>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">{{ _lang('Copyright Text') }}</label>
                                    <input type="text" class="form-control" name="copyright_text" value="{{ get_option('copyright_text') }}" required>
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
            <div class="tab-pane fade" id="menu" role="tabpanel" aria-labelledby="menu-tab">
                <div class="card card-default">
                    <div class="card-body">
                        <div class="card-title">{{ _lang('Menu Section') }}</div>
                        <form method="post" class="ajax-submit2 params-card" autocomplete="off" action="{{ route('theme_option') }}">
                            @csrf

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-control-label">{{ _lang('Category For Menu') }}</label>
                                    <select name="menu_categories[]" class="form-control select2" data-value="{{ get_option('menu_categories') }}" multiple required>
                                        {{ create_option('categories', 'id', 'name', null, ['status' => 1]) }}
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
        <div class="tab-pane fade" id="headline" role="tabpanel" aria-labelledby="headline-tab">
            <div class="card card-default">
                <div class="card-body">
                <div class="card-title">{{ _lang('Headline Section') }}
                        </div>
                        <form method="post" class="ajax-submit2 params-card" autocomplete="off" action="{{ route('theme_option') }}">
                            @csrf

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">{{ _lang('Status') }}</label>
                                    <select class="form-control select2" name="headline_status" data-value="{{ get_option('headline_status', 0) }}" required>
                                        <option value="0">{{ _lang('Disable') }}</option>
                                        <option value="1">{{ _lang('Enable') }}</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-control-label">{{ _lang('Category') }}</label>
                                    <select name="headline_category" class="form-control select2" required>
                                        <option value="">{{ _lang('Select One') }}</option>
                                        {{ create_option('categories', 'id', 'name', get_option('headline_category'), ['status' => 1]) }}
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">{{ _lang('Limit') }}</label>
                                    <input type="number" class="form-control" name="headline_limit" value="{{ get_option('headline_limit', 5) }}" required>
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
            <div class="tab-pane fade" id="home" role="tabpanel" aria-labelledby="home-tab">
                <div class="card card-default">
                    <div class="card-body">
                        <div class="card-title">{{ _lang('Home Page Section') }}</div>
                        <form method="post" class="ajax-submit2 params-card" action="{{ route('theme_option') }}" enctype="multipart/form-data">
                            @csrf

                            <div class="params-card mb-3">
                                <div class="col-md-12">
                                    <h4>{{ _lang('TRENDING NOW') }}</h4>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">{{ _lang('Status') }}</label>
                                        <select class="form-control select2" id="trending" name="trending_status" data-value="{{ get_option('trending_status', 0) }}" required>
                                            <option value="0">{{ _lang('Disable') }}</option>
                                            <option value="1">{{ _lang('Enable') }}</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">{{ _lang('Limit') }}</label>
                                        <input type="number" class="form-control trending" name="trending_limit" value="{{ get_option('trending_limit', 6) }}" required>
                                    </div>
                                </div>
                            </div>
                            <div class="params-card mb-3">
                                <div class="col-md-12">
                                    <h4>{{ _lang('FEATURED POSTS') }}</h4>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">{{ _lang('Status') }}</label>
                                        <select class="form-control select2" id="featured" name="featured_status" data-value="{{ get_option('featured_status', 0) }}" required>
                                            <option value="0">{{ _lang('Disable') }}</option>
                                            <option value="1">{{ _lang('Enable') }}</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-control-label">{{ _lang('Posts') }}</label>
                                        <select name="featured_posts[]" class="form-control select2 featured" data-value="{{ get_option('featured_posts') }}" data-maximum-selection-length="6" multiple required>
                                            {{ create_option('posts', 'id', 'title', null, ['status' => 1]) }}
                                        </select>
                                          
                                    </div>
                                </div>
                            </div>
                            <div class="params-card mb-3">
                                <div class="col-md-12">
                                    <h4>{{ _lang('MOST VIEWED VIDEOS') }}</h4>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">{{ _lang('Limit') }}</label>
                                        <input type="number" class="form-control most_viewed" name="most_viewed_limit" value="{{ get_option('most_viewed_limit', 15) }}" required>
                                    </div>
                                </div>
                            </div>
                            <div class="params-card mb-3">
                                <div class="col-md-12">
                                    <h4>{{ _lang('LATEST VIDEOS') }}</h4>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">{{ _lang('Limit') }}</label>
                                        <input type="number" class="form-control latest_posts" name="latest_posts_limit" value="{{ get_option('latest_posts_limit', 15) }}" required>
                                    </div>
                                </div>
                            </div>
                            <div class="params-card mb-3">
                                <div class="col-md-12">
                                    <h4>{{ _lang('LIVE VIDEOS') }}</h4>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">{{ _lang('Limit') }}</label>
                                        <input type="number" class="form-control most_viewed" name="live_videos_limit" value="{{ get_option('live_videos_limit', 15) }}" required>
                                    </div>
                                </div>
                            </div>
                            <div class="params-card mb-3">
                                <div class="col-md-12">
                                    <h4>{{ _lang('TAB VIEW') }}</h4>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">{{ _lang('Title') }}</label>
                                        <input type="text" class="form-control" name="tab_title" value="{{ get_option('tab_title', 'Title') }}" required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">{{ _lang('Categories For Tab') }}</label>
                                        <select name="tab_categories[]" class="form-control select2" data-value="{{ get_option('tab_categories') }}" multiple required>
                                            {{ create_option('categories', 'id', 'name', null, ['status' => 1]) }}
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="params-card mb-3">
                                <div class="col-md-12">
                                    <h4>{{ _lang('CATEGORIES POST 1') }}</h4>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">{{ _lang('Categories') }}</label>
                                        <select name="post_categories[]" class="form-control select2" data-value="{{ get_option('post_categories') }}" multiple required>
                                            {{ create_option('categories', 'id', 'name', null, ['status' => 1]) }}
                                        </select>
                                    </div>
                                </div>
                            </div>
                           <div class="params-card mb-3">
                                <div class="col-md-12">
                                    <h4>{{ _lang('CATEGORIES POST 2') }}</h4>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">{{ _lang('Categories') }}</label>
                                        <select name="post_categories2[]" class="form-control select2" data-value="{{ get_option('post_categories2') }}" multiple required>
                                            {{ create_option('categories', 'id', 'name', null, ['status' => 1]) }}
                                        </select>
                                    </div>
                                </div>
                            </div>
                           <div class="params-card mb-3">
                                <div class="col-md-12">
                                    <h4>{{ _lang('CATEGORIES POST 3') }}</h4>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">{{ _lang('Categories') }}</label>
                                        <select name="post_categories3[]" class="form-control select2" data-value="{{ get_option('post_categories3') }}" multiple required>
                                            {{ create_option('categories', 'id', 'name', null, ['status' => 1]) }}
                                        </select>
                                    </div>
                                </div>
                            </div>
                           <div class="params-card mb-3">
                                <div class="col-md-12">
                                    <h4>{{ _lang('CATEGORIES POST 4') }}</h4>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">{{ _lang('Categories') }}</label>
                                        <select name="post_categories4[]" class="form-control select2" data-value="{{ get_option('post_categories4') }}" multiple required>
                                            {{ create_option('categories', 'id', 'name', null, ['status' => 1]) }}
                                        </select>
                                    </div>
                                </div>
                            </div>
                          
                            <div class="params-card mb-3">
                                <div class="col-md-12">
                                    <h4>{{ _lang('SINGLE CATEGORY POST ONE') }}</h4>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">{{ _lang('Title') }}</label>
                                        <input type="text" class="form-control" name="single_category_post_one_title" value="{{ get_option('single_category_post_one_title', 'Title') }}">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">{{ _lang('Category') }}</label>
                                        <select name="single_category_post_one" class="form-control select2" data-value="{{ get_option('single_category_post_one') }}">
                                            <option value="">{{ _lang('Select One') }}</option>
                                            {{ create_option('categories', 'id', 'name', null, ['status' => 1]) }}
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="params-card mb-3">
                                <div class="col-md-12">
                                    <h4>{{ _lang('SINGLE CATEGORY POST TWO') }}</h4>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">{{ _lang('Title') }}</label>
                                        <input type="text" class="form-control" name="single_category_post_two_title" value="{{ get_option('single_category_post_two_title', 'Title') }}">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">{{ _lang('Category') }}</label>
                                        <select name="single_category_post_two" class="form-control select2" data-value="{{ get_option('single_category_post_two') }}">
                                            <option value="">{{ _lang('Select One') }}</option>
                                            {{ create_option('categories', 'id', 'name', null, ['status' => 1]) }}
                                        </select>
                                    </div>
                                </div>
                            </div>
                             <div class="params-card mb-3">
                                <div class="col-md-12">
                                    <h4>{{ _lang('SINGLE CATEGORY POST Tech') }}</h4>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">{{ _lang('Title') }}</label>
                                        <input type="text" class="form-control" name="single_category_post_tech_title" value="{{ get_option('single_category_post_tech_title', 'Title') }}">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">{{ _lang('Category') }}</label>
                                        <select name="single_category_post_tech" class="form-control select2" data-value="{{ get_option('single_category_post_tech') }}">
                                            <option value="">{{ _lang('Select One') }}</option>
                                            {{ create_option('categories', 'id', 'name', null, ['status' => 1]) }}
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="params-card mb-3">
                                <div class="col-md-12">
                                    <h4>{{ _lang('SINGLE CATEGORY POST Tech 2') }}</h4>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">{{ _lang('Title') }}</label>
                                        <input type="text" class="form-control" name="single_category_post_tech2_title" value="{{ get_option('single_category_post_tech2_title', 'Title') }}">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">{{ _lang('Category') }}</label>
                                        <select name="single_category_post_tech2" class="form-control select2" data-value="{{ get_option('single_category_post_tech2') }}">
                                            <option value="">{{ _lang('Select One') }}</option>
                                            {{ create_option('categories', 'id', 'name', null, ['status' => 1]) }}
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="params-card mb-3">
                                <div class="col-md-12">
                                    <h4>{{ _lang('SINGLE CATEGORY POST THREE') }}</h4>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">{{ _lang('Title') }}</label>
                                        <input type="text" class="form-control" name="single_category_post_three_title" value="{{ get_option('single_category_post_three_title', 'Title') }}">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">{{ _lang('Category') }}</label>
                                        <select name="single_category_post_three" class="form-control select2" data-value="{{ get_option('single_category_post_three') }}">
                                            <option value="">{{ _lang('Select One') }}</option>
                                            {{ create_option('categories', 'id', 'name', null, ['status' => 1]) }}
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="params-card mb-3">
                                <div class="col-md-12">
                                    <h4>{{ _lang('SINGLE CATEGORY POST FOUR') }}</h4>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">{{ _lang('Title') }}</label>
                                        <input type="text" class="form-control" name="single_category_post_four_title" value="{{ get_option('single_category_post_four_title', 'Title') }}">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">{{ _lang('Category') }}</label>
                                        <select name="single_category_post_four" class="form-control select2" data-value="{{ get_option('single_category_post_four') }}">
                                            <option value="">{{ _lang('Select One') }}</option>
                                            {{ create_option('categories', 'id', 'name', null, ['status' => 1]) }}
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="params-card mb-3">
                                <div class="col-md-12">
                                    <h4>{{ _lang('SINGLE CATEGORY POST FOUR1') }}</h4>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">{{ _lang('Title') }}</label>
                                        <input type="text" class="form-control" name="single_category_post_four1_title" value="{{ get_option('single_category_post_four1_title', 'Title') }}">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">{{ _lang('Category') }}</label>
                                        <select name="single_category_post_four1" class="form-control select2" data-value="{{ get_option('single_category_post_four1') }}">
                                            <option value="">{{ _lang('Select One') }}</option>
                                            {{ create_option('categories', 'id', 'name', null, ['status' => 1]) }}
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="params-card mb-3">
                                <div class="col-md-12">
                                    <h4>{{ _lang('SINGLE CATEGORY POST FIVE') }}</h4>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">{{ _lang('Title') }}</label>
                                        <input type="text" class="form-control" name="single_category_post_five_title" value="{{ get_option('single_category_post_five_title', 'Title') }}">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">{{ _lang('Category') }}</label>
                                        <select name="single_category_post_five" class="form-control select2" data-value="{{ get_option('single_category_post_five') }}">
                                            <option value="">{{ _lang('Select One') }}</option>
                                            {{ create_option('categories', 'id', 'name', null, ['status' => 1]) }}
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="params-card mb-3">
                                <div class="col-md-12">
                                    <h4>{{ _lang('SINGLE CATEGORY POST SIX') }}</h4>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">{{ _lang('Title') }}</label>
                                        <input type="text" class="form-control" name="single_category_post_six_title" value="{{ get_option('single_category_post_six_title', 'Title') }}">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">{{ _lang('Category') }}</label>
                                        <select name="single_category_post_six" class="form-control select2" data-value="{{ get_option('single_category_post_six') }}">
                                            <option value="">{{ _lang('Select One') }}</option>
                                            {{ create_option('categories', 'id', 'name', null, ['status' => 1]) }}
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="params-card mb-3">
                                <div class="col-md-12">
                                    <h4>{{ _lang('SINGLE CATEGORY POST CORONA SIDE NEWS') }}</h4>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">{{ _lang('Title') }}</label>
                                        <input type="text" class="form-control" name="single_category_post_corona-side_title" value="{{ get_option('single_category_post_corona-side_title', 'Title') }}">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">{{ _lang('Category') }}</label>
                                        <select name="single_category_post_corona-side" class="form-control select2" data-value="{{ get_option('single_category_post_corona-side') }}">
                                            <option value="">{{ _lang('Select One') }}</option>
                                            {{ create_option('categories', 'id', 'name', null, ['status' => 1]) }}
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="params-card mb-3">
                                <div class="col-md-12">
                                    <h4>{{ _lang('SINGLE CATEGORY POST RIGHT 0') }}</h4>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">{{ _lang('Title') }}</label>
                                        <input type="text" class="form-control" name="single_category_post_right0_title" value="{{ get_option('single_category_post_right0_title', 'Title') }}">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">{{ _lang('Category') }}</label>
                                        <select name="single_category_post_right0" class="form-control select2" data-value="{{ get_option('single_category_post_right0') }}">
                                            <option value="">{{ _lang('Select One') }}</option>
                                            {{ create_option('categories', 'id', 'name', null, ['status' => 1]) }}
                                        </select>
                                    </div>
                                </div>
                            </div>
                             <div class="params-card mb-3">
                                <div class="col-md-12">
                                    <h4>{{ _lang('SINGLE CATEGORY POST RIGHT BOX 00') }}</h4>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">{{ _lang('Title') }}</label>
                                        <input type="text" class="form-control" name="single_category_post_right00_title" value="{{ get_option('single_category_post_right00_title', 'Title') }}">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">{{ _lang('Category') }}</label>
                                        <select name="single_category_post_right00" class="form-control select2" data-value="{{ get_option('single_category_post_right00') }}">
                                            <option value="">{{ _lang('Select One') }}</option>
                                            {{ create_option('categories', 'id', 'name', null, ['status' => 1]) }}
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="params-card mb-3">
                                <div class="col-md-12">
                                    <h4>{{ _lang('SINGLE CATEGORY POST Right') }}</h4>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">{{ _lang('Title') }}</label>
                                        <input type="text" class="form-control" name="single_category_post_right1_title" value="{{ get_option('single_category_post_right1_title', 'Title') }}">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">{{ _lang('Category') }}</label>
                                        <select name="single_category_post_right1" class="form-control select2" data-value="{{ get_option('single_category_post_right1') }}">
                                            <option value="">{{ _lang('Select One') }}</option>
                                            {{ create_option('categories', 'id', 'name', null, ['status' => 1]) }}
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="params-card mb-3">
                                <div class="col-md-12">
                                    <h4>{{ _lang('SINGLE CATEGORY POST MIDDLE') }}</h4>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">{{ _lang('Title') }}</label>
                                        <input type="text" class="form-control" name="single_category_post_middle_title" value="{{ get_option('single_category_post_middle_title', 'Title') }}">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">{{ _lang('Category') }}</label>
                                        <select name="single_category_post_middle" class="form-control select2" data-value="{{ get_option('single_category_post_middle') }}">
                                            <option value="">{{ _lang('Select One') }}</option>
                                            {{ create_option('categories', 'id', 'name', null, ['status' => 1]) }}
                                        </select>
                                    </div>
                                </div>
                            </div>
                              <div class="params-card mb-3">
                                <div class="col-md-12">
                                    <h4>{{ _lang('SINGLE CATEGORY POST MIDDLE2') }}</h4>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">{{ _lang('Title') }}</label>
                                        <input type="text" class="form-control" name="single_category_post_middle2_title" value="{{ get_option('single_category_post_middle2_title', 'Title') }}">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">{{ _lang('Category') }}</label>
                                        <select name="single_category_post_middle2" class="form-control select2" data-value="{{ get_option('single_category_post_middle2') }}">
                                            <option value="">{{ _lang('Select One') }}</option>
                                            {{ create_option('categories', 'id', 'name', null, ['status' => 1]) }}
                                        </select>
                                    </div>
                                </div>
                            </div>
                              <div class="params-card mb-3">
                                <div class="col-md-12">
                                    <h4>{{ _lang('SINGLE CATEGORY POST MIDDLE3') }}</h4>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">{{ _lang('Title') }}</label>
                                        <input type="text" class="form-control" name="single_category_post_middle3_title" value="{{ get_option('single_category_post_middle3_title', 'Title') }}">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">{{ _lang('Category') }}</label>
                                        <select name="single_category_post_middle3" class="form-control select2" data-value="{{ get_option('single_category_post_middle3') }}">
                                            <option value="">{{ _lang('Select One') }}</option>
                                            {{ create_option('categories', 'id', 'name', null, ['status' => 1]) }}
                                        </select>
                                    </div>
                                </div>
                            </div>
                              <div class="params-card mb-3">
                                <div class="col-md-12">
                                    <h4>{{ _lang('SINGLE CATEGORY POST MIDDLE4') }}</h4>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">{{ _lang('Title') }}</label>
                                        <input type="text" class="form-control" name="single_category_post_middle4_title" value="{{ get_option('single_category_post_middle4_title', 'Title') }}">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">{{ _lang('Category') }}</label>
                                        <select name="single_category_post_middle4" class="form-control select2" data-value="{{ get_option('single_category_post_middle4') }}">
                                            <option value="">{{ _lang('Select One') }}</option>
                                            {{ create_option('categories', 'id', 'name', null, ['status' => 1]) }}
                                        </select>
                                    </div>
                                </div>
                            </div>
                              <div class="params-card mb-3">
                                <div class="col-md-12">
                                    <h4>{{ _lang('SINGLE CATEGORY POST MIDDLE5') }}</h4>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">{{ _lang('Title') }}</label>
                                        <input type="text" class="form-control" name="single_category_post_middle5_title" value="{{ get_option('single_category_post_middle5_title', 'Title') }}">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">{{ _lang('Category') }}</label>
                                        <select name="single_category_post_middle5" class="form-control select2" data-value="{{ get_option('single_category_post_middle5') }}">
                                            <option value="">{{ _lang('Select One') }}</option>
                                            {{ create_option('categories', 'id', 'name', null, ['status' => 1]) }}
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="params-card mb-3">
                                <div class="col-md-12">
                                    <h4>{{ _lang('SINGLE CATEGORY POST TABS SIDE') }}</h4>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">{{ _lang('Title') }}</label>
                                        <input type="text" class="form-control" name="single_category_post_side_title" value="{{ get_option('single_category_post_side_title', 'Title') }}">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">{{ _lang('Category') }}</label>
                                        <select name="single_category_post_side" class="form-control select2" data-value="{{ get_option('single_category_post_side') }}">
                                            <option value="">{{ _lang('Select One') }}</option>
                                            {{ create_option('categories', 'id', 'name', null, ['status' => 1]) }}
                                        </select>
                                    </div>
                                </div>
                            </div>


                             <div class="params-card mb-3">
                                <div class="col-md-12">
                                    <h4>{{ _lang('SINGLE CATEGORY POST PICTURE GALLERY') }}</h4>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">{{ _lang('Title') }}</label>
                                        <input type="text" class="form-control" name="single_category_post_picturgallery_title" value="{{ get_option('single_category_post_picturgallery_title', 'Title') }}">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">{{ _lang('Category') }}</label>
                                        <select name="single_category_post_picturgallery" class="form-control select2" data-value="{{ get_option('single_category_post_picturgallery') }}">
                                            <option value="">{{ _lang('Select One') }}</option>
                                            {{ create_option('categories', 'id', 'name', null, ['status' => 1]) }}
                                        </select>
                                    </div>
                                </div>
                            </div>
                             <div class="params-card mb-3">
                                <div class="col-md-12">
                                    <h4>{{ _lang('VIDEO LEFT SIDE BOX') }}</h4>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">{{ _lang('Title') }}</label>
                                        <input type="text" class="form-control" name="single_category_post_left_title" value="{{ get_option('single_category_post_left_title', 'Title') }}">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">{{ _lang('Category') }}</label>
                                        <select name="single_category_post_middle2" class="form-control select2" data-value="{{ get_option('single_category_post_left') }}">
                                            <option value="">{{ _lang('Select One') }}</option>
                                            {{ create_option('categories', 'id', 'name', null, ['status' => 1]) }}
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group text-right mb-0">
                                <button type="submit" class="btn btn-outline-success btn-sm">
                                    {{ _lang('Update') }}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="advertisement" role="tabpanel" aria-labelledby="advertisement-tab">
                <div class="card card-default">
                    <div class="card-body">
                        <div class="card-title">{{ _lang('Advertisements') }}</div>
                        <form method="post" class="ajax-submit2wwww params-card" action="{{ route('theme_option') }}" enctype="multipart/form-data">

                            @csrf
                            
                      <div class="params-card mb-3">
                          <div class="col-md-12">
                                    <h4>{{ _lang('Main Menu') }}</h4>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">{{ _lang('Status') }}</label>
                                        <select class="form-control select2" name="advertisement_menu_status" data-value="{{ get_option('advertisement_menu_status', 0) }}" required>
                                            <option value="0">{{ _lang('Disable') }}</option>
                                            <option value="1">{{ _lang('Enable') }}</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">{{ _lang('Content') }}</label>
                                        <textarea class="form-control summernote" name="advertisement_menu_content" rows="4">{{ get_option('advertisement_menu_content') }}</textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">{{ _lang('Link') }}</label>
                                        <input type="text" class="form-control" name="advertisement_menu_link" value="{{ get_option('advertisement_menu_link', '#') }}">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <h4>{{ _lang('Footer Menu') }}</h4>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">{{ _lang('Status') }}</label>
                                        <select class="form-control select2" name="advertisement_fottermenu_status" data-value="{{ get_option('advertisement_fottermenu_status', 0) }}" required>
                                            <option value="0">{{ _lang('Disable') }}</option>
                                            <option value="1">{{ _lang('Enable') }}</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">{{ _lang('Content') }}</label>
                                        <textarea class="form-control summernote" name="advertisement_fottermenu_content" rows="4">{{ get_option('advertisement_fottermenu_content') }}</textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">{{ _lang('Link') }}</label>
                                        <input type="text" class="form-control" name="advertisement_fottermenu_link" value="{{ get_option('advertisement_fottermenu_link', '#') }}">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <h4>{{ _lang('Advertisement Top') }}</h4>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">{{ _lang('Status') }}</label>
                                        <select class="form-control select2" name="advertisement_top_status" data-value="{{ get_option('advertisement_top_status', 0) }}" required>
                                            <option value="0">{{ _lang('Disable') }}</option>
                                            <option value="1">{{ _lang('Enable') }}</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">{{ _lang('Content') }}</label>
                                        <textarea class="form-control summernote" name="advertisement_top_content" rows="4">{{ get_option('advertisement_top_content') }}</textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">{{ _lang('Link') }}</label>
                                        <input type="text" class="form-control" name="advertisement_top_link" value="{{ get_option('advertisement_top_link', '#') }}">
                                    </div>
                                </div>
                        <div class="col-md-12">
                                    <h4>{{ _lang('Advertisement Post Left 1') }}</h4>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">{{ _lang('Status') }}</label>
                                        <select class="form-control select2" name="advertisement_left1_status" data-value="{{ get_option('advertisement_left1_status', 0) }}" required>
                                            <option value="0">{{ _lang('Disable') }}</option>
                                            <option value="1">{{ _lang('Enable') }}</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">{{ _lang('Content') }}</label>
                                        <textarea class="form-control summernote" name="advertisement_left1_content" rows="4">{{ get_option('advertisement_left1_content') }}</textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">{{ _lang('Link') }}</label>
                                        <input type="text" class="form-control" name="advertisement_left1_link" value="{{ get_option('advertisement_left1_link', '#') }}">
                                    </div>
                                </div>
                        <div class="col-md-12">
                                    <h4>{{ _lang('Advertisement Post Left 2') }}</h4>
                                </div>
                         <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">{{ _lang('Status') }}</label>
                                        <select class="form-control select2" name="advertisement_left2_status" data-value="{{ get_option('advertisement_left2_status', 0) }}" required>
                                            <option value="0">{{ _lang('Disable') }}</option>
                                            <option value="1">{{ _lang('Enable') }}</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">{{ _lang('Content') }}</label>
                                        <textarea class="form-control summernote" name="advertisement_left2_content" rows="4">{{ get_option('advertisement_left2_content') }}</textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">{{ _lang('Link') }}</label>
                                        <input type="text" class="form-control" name="advertisement_left2_link" value="{{ get_option('advertisement_left2_link', '#') }}">
                                    </div>
                                </div>
                        <div class="col-md-12">
                                    <h4>{{ _lang('Advertisement Post Left 3') }}</h4>
                                </div>
<div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">{{ _lang('Status') }}</label>
                                        <select class="form-control select2" name="advertisement_left3_status" data-value="{{ get_option('advertisement_left3_status', 0) }}" required>
                                            <option value="0">{{ _lang('Disable') }}</option>
                                            <option value="1">{{ _lang('Enable') }}</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">{{ _lang('Content') }}</label>
                                        <textarea class="form-control summernote" name="advertisement_left3_content" rows="4">{{ get_option('advertisement_left3_content') }}</textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">{{ _lang('Link') }}</label>
                                        <input type="text" class="form-control" name="advertisement_left3_link" value="{{ get_option('advertisement_left3_link', '#') }}">
                                    </div>
                                </div>
                        <div class="col-md-12">
                                    <h4>{{ _lang('Advertisement Post Left 4') }}</h4>
                                </div>
                        
<div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">{{ _lang('Status') }}</label>
                                        <select class="form-control select2" name="advertisement_left4_status" data-value="{{ get_option('advertisement_left4_status', 0) }}" required>
                                            <option value="0">{{ _lang('Disable') }}</option>
                                            <option value="1">{{ _lang('Enable') }}</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">{{ _lang('Content') }}</label>
                                        <textarea class="form-control summernote" name="advertisement_left4_content" rows="4">{{ get_option('advertisement_left4_content') }}</textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">{{ _lang('Link') }}</label>
                                        <input type="text" class="form-control" name="advertisement_left4_link" value="{{ get_option('advertisement_left4_link', '#') }}">
                                    </div>
                                </div>
                         <div class="col-md-12">
                                    <h4>{{ _lang('Advertisement Post Right 1') }}</h4>
                                </div>
<div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">{{ _lang('Status') }}</label>
                                        <select class="form-control select2" name="advertisement_right1_status" data-value="{{ get_option('advertisement_right1_status', 0) }}" required>
                                            <option value="0">{{ _lang('Disable') }}</option>
                                            <option value="1">{{ _lang('Enable') }}</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">{{ _lang('Content') }}</label>
                                        <textarea class="form-control summernote" name="advertisement_right1_content" rows="4">{{ get_option('advertisement_right1_content') }}</textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">{{ _lang('Link') }}</label>
                                        <input type="text" class="form-control" name="advertisement_right1_link" value="{{ get_option('advertisement_right1_link', '#') }}">
                                    </div>
                                </div>
                         <div class="col-md-12">
                                    <h4>{{ _lang('Advertisement Post Right 2') }}</h4>
                                </div>
                        
<div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">{{ _lang('Status') }}</label>
                                        <select class="form-control select2" name="advertisement_right2_status" data-value="{{ get_option('advertisement_right2_status', 0) }}" required>
                                            <option value="0">{{ _lang('Disable') }}</option>
                                            <option value="1">{{ _lang('Enable') }}</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">{{ _lang('Content') }}</label>
                                        <textarea class="form-control summernote" name="advertisement_right2_content" rows="4">{{ get_option('advertisement_right2_content') }}</textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">{{ _lang('Link') }}</label>
                                        <input type="text" class="form-control" name="advertisement_right2_link" value="{{ get_option('advertisement_right2_link', '#') }}">
                                    </div>
                                </div>
 <div class="col-md-12">
                                    <h4>{{ _lang('Advertisement Post Right 3') }}</h4>
                                </div>
<div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">{{ _lang('Status') }}</label>
                                        <select class="form-control select2" name="advertisement_right3_status" data-value="{{ get_option('advertisement_right3_status', 0) }}" required>
                                            <option value="0">{{ _lang('Disable') }}</option>
                                            <option value="1">{{ _lang('Enable') }}</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">{{ _lang('Content') }}</label>
                                        <textarea class="form-control summernote" name="advertisement_right3_content" rows="4">{{ get_option('advertisement_right3_content') }}</textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">{{ _lang('Link') }}</label>
                                        <input type="text" class="form-control" name="advertisement_right3_link" value="{{ get_option('advertisement_right3_link', '#') }}">
                                    </div>
                                </div>
 <div class="col-md-12">
                                    <h4>{{ _lang('Advertisement Post Right 4') }}</h4>
                                </div>
<div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">{{ _lang('Status') }}</label>
                                        <select class="form-control select2" name="advertisement_right4_status" data-value="{{ get_option('advertisement_right4_status', 0) }}" required>
                                            <option value="0">{{ _lang('Disable') }}</option>
                                            <option value="1">{{ _lang('Enable') }}</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">{{ _lang('Content') }}</label>
                                        <textarea class="form-control summernote" name="advertisement_right4_content" rows="4">{{ get_option('advertisement_right4_content') }}</textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">{{ _lang('Link') }}</label>
                                        <input type="text" class="form-control" name="advertisement_right4_link" value="{{ get_option('advertisement_right4_link', '#') }}">
                                    </div>
                                </div>

                                 <div class="params-card mb-3">
                                <div class="col-md-12">
                                    <h4>{{ _lang('Advertisement Live Box Top') }}</h4>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">{{ _lang('Status') }}</label>
                                        <select class="form-control select2" name="advertisement_live-box-top_status" data-value="{{ get_option('advertisement_live-box-top_status', 0) }}" required>
                                            <option value="0">{{ _lang('Disable') }}</option>
                                            <option value="1">{{ _lang('Enable') }}</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">{{ _lang('Content') }}</label>
                                        <textarea class="form-control summernote" name="advertisement_live-box-top_content" rows="4">{{ get_option('advertisement_live-box-top_content') }}</textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">{{ _lang('Link') }}</label>
                                        <input type="text" class="form-control" name="advertisement_live-box-top_link" value="{{ get_option('advertisement_live-box-top_link', '#') }}">
                                    </div>
                                </div>
                            </div>
                                  <div class="col-md-12">
                                    <h4>{{ _lang('Live Program') }}</h4>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">{{ _lang('Status') }}</label>
                                        <select class="form-control select2" name="advertisement_live_status" data-value="{{ get_option('advertisement_live_status', 0) }}" required>
                                            <option value="0">{{ _lang('Disable') }}</option>
                                            <option value="1">{{ _lang('Enable') }}</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">{{ _lang('Content') }}</label>
                                        <textarea class="form-control summernote" name="advertisement_live_content" rows="4">{{ get_option('advertisement_live_content') }}</textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">{{ _lang('Link') }}</label>
                                        <input type="text" class="form-control" name="advertisement_live_link" value="{{ get_option('advertisement_live_link', '#') }}">
                                    </div>
                                </div>
                            </div>       
                             <div class="params-card mb-3">
                                <div class="col-md-12">
                                    <h4>{{ _lang('Advertisement 1') }}</h4>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">{{ _lang('Status') }}</label>
                                        <select class="form-control select2" name="advertisement_middle_status" data-value="{{ get_option('advertisement_middle_status', 0) }}" required>
                                            <option value="0">{{ _lang('Disable') }}</option>
                                            <option value="1">{{ _lang('Enable') }}</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">{{ _lang('Content') }}</label>
                                        <textarea class="form-control summernote" name="advertisement_middle_content" rows="4">{{ get_option('advertisement_middle_content') }}</textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">{{ _lang('Link') }}</label>
                                        <input type="text" class="form-control" name="advertisement_middle_link" value="{{ get_option('advertisement_middle_link', '#') }}">
                                    </div>
                                </div>
                            </div>       
                            
                            <div class="params-card mb-3">
                                <div class="col-md-12">
                                    <h4>{{ _lang('Advertisement One') }}</h4>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">{{ _lang('Status') }}</label>
                                        <select class="form-control select2" name="advertisement_one_status" data-value="{{ get_option('advertisement_one_status', 0) }}" required>
                                            <option value="0">{{ _lang('Disable') }}</option>
                                            <option value="1">{{ _lang('Enable') }}</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">{{ _lang('Content') }}</label>
                                        <textarea class="form-control summernote" name="advertisement_one_content" rows="4">{{ get_option('advertisement_one_content') }}</textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">{{ _lang('Link') }}</label>
                                        <input type="text" class="form-control" name="advertisement_one_link" value="{{ get_option('advertisement_one_link', '#') }}">
                                    </div>
                                </div>
                            </div>
                            
                     
                            <div class="params-card mb-3">
                                <div class="col-md-12">
                                    <h4>{{ _lang('Advertisement Two') }}</h4>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">{{ _lang('Status') }}</label>
                                        <select class="form-control select2" name="advertisement_two_status" data-value="{{ get_option('advertisement_two_status', 0) }}" required>
                                            <option value="0">{{ _lang('Disable') }}</option>
                                            <option value="1">{{ _lang('Enable') }}</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">{{ _lang('Content') }}</label>
                                        <textarea class="form-control summernote" name="advertisement_two_content" rows="4">{{ get_option('advertisement_two_content') }}</textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">{{ _lang('Link') }}</label>
                                        <input type="text" class="form-control" name="advertisement_two_link" value="{{ get_option('advertisement_two_link', '#') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="params-card mb-3">
                                <div class="col-md-12">
                                    <h4>{{ _lang('Advertisement Three') }}</h4>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">{{ _lang('Status') }}</label>
                                        <select class="form-control select2" name="advertisement_three_status" data-value="{{ get_option('advertisement_three_status', 0) }}" required>
                                            <option value="0">{{ _lang('Disable') }}</option>
                                            <option value="1">{{ _lang('Enable') }}</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">{{ _lang('Content') }}</label>
                                        <textarea class="form-control summernote" name="advertisement_three_content" rows="4">{{ get_option('advertisement_three_content') }}</textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">{{ _lang('Link') }}</label>
                                        <input type="text" class="form-control" name="advertisement_three_link" value="{{ get_option('advertisement_three_link', '#') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="params-card mb-3">
                                <div class="col-md-12">
                                    <h4>{{ _lang('Advertisement Four') }}</h4>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">{{ _lang('Status') }}</label>
                                        <select class="form-control select2" name="advertisement_four_status" data-value="{{ get_option('advertisement_four_status', 0) }}" required>
                                            <option value="0">{{ _lang('Disable') }}</option>
                                            <option value="1">{{ _lang('Enable') }}</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">{{ _lang('Content') }}</label>
                                        <textarea class="form-control summernote" name="advertisement_four_content" rows="4">{{ get_option('advertisement_four_content') }}</textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">{{ _lang('Link') }}</label>
                                        <input type="text" class="form-control" name="advertisement_four_link" value="{{ get_option('advertisement_four_link', '#') }}">
                                    </div>
                                </div>
                            </div>
 <div class="params-card mb-3">
   <div class="col-md-12">
                                    <h4>{{ _lang('Advertisement MM') }}</h4>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">{{ _lang('Status') }}</label>
                                        <select class="form-control select2" name="advertisement_fourmm_status" data-value="{{ get_option('advertisement_fourmm_status', 0) }}" required>
                                            <option value="0">{{ _lang('Disable') }}</option>
                                            <option value="1">{{ _lang('Enable') }}</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">{{ _lang('Content') }}</label>
                                        <textarea class="form-control summernote" name="advertisement_fourmm_content" rows="4">{{ get_option('advertisement_fourmm_content') }}</textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <h4>{{ _lang('Advertisement Four Middle') }}</h4>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">{{ _lang('Status') }}</label>
                                        <select class="form-control select2" name="advertisement_fourm_status" data-value="{{ get_option('advertisement_fourm_status', 0) }}" required>
                                            <option value="0">{{ _lang('Disable') }}</option>
                                            <option value="1">{{ _lang('Enable') }}</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">{{ _lang('Content') }}</label>
                                        <textarea class="form-control summernote" name="advertisement_fourm_content" rows="4">{{ get_option('advertisement_fourm_content') }}</textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">{{ _lang('Link') }}</label>
                                        <input type="text" class="form-control" name="advertisement_fourm_link" value="{{ get_option('advertisement_fourm_link', '#') }}">
                                    </div>
                                </div>
                            </div>
    <div class="params-card mb-3">
                                <div class="col-md-12">
                                    <h4>{{ _lang('Advertisement video box') }}</h4>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">{{ _lang('Status') }}</label>
                                        <select class="form-control select2" name="advertisement_video_status" data-value="{{ get_option('advertisement_video_status', 0) }}" required>
                                            <option value="0">{{ _lang('Disable') }}</option>
                                            <option value="1">{{ _lang('Enable') }}</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">{{ _lang('Content') }}</label>
                                        <textarea class="form-control summernote" name="advertisement_video_content" rows="4">{{ get_option('advertisement_video_content') }}</textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">{{ _lang('Link') }}</label>
                                        <input type="text" class="form-control" name="advertisement_four_link" value="{{ get_option('advertisement_video_link', '#') }}">
                                    </div>
                                </div>
                            </div>

     <div class="params-card mb-3">
                                <div class="col-md-12">
                                    <h4>{{ _lang('Corona Update') }}</h4>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">{{ _lang('Status') }}</label>
                                        <select class="form-control select2" name="advertisement_corona_status" data-value="{{ get_option('advertisement_corona_status', 0) }}" required>
                                            <option value="0">{{ _lang('Disable') }}</option>
                                            <option value="1">{{ _lang('Enable') }}</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">{{ _lang('Content') }}</label>
                                        <textarea class="form-control summernote" name="advertisement_corona_content" rows="4">{{ get_option('advertisement_corona_content') }}</textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">{{ _lang('Link') }}</label>
                                        <input type="text" class="form-control" name="advertisement_corona_link" value="{{ get_option('advertisement_corona_link', '#') }}">
                                    </div>
                                </div>
                            </div>

     <div class="params-card mb-3">
                                <div class="col-md-12">
                                    <h4>{{ _lang('USA Corona Update') }}</h4>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">{{ _lang('Status') }}</label>
                                        <select class="form-control select2" name="advertisement_usacorona_status" data-value="{{ get_option('advertisement_usacorona_status', 0) }}" required>
                                            <option value="0">{{ _lang('Disable') }}</option>
                                            <option value="1">{{ _lang('Enable') }}</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">{{ _lang('Content') }}</label>
                                        <textarea class="form-control summernote" name="advertisement_usacorona_content" rows="4">{{ get_option('advertisement_usacorona_content') }}</textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">{{ _lang('Link') }}</label>
                                        <input type="text" class="form-control" name="advertisement_usacorona_link" value="{{ get_option('advertisement_usacorona_link', '#') }}">
                                    </div>
                                </div>
                            </div>

    
     <div class="params-card mb-3">
                                <div class="col-md-12">
                                    <h4>{{ _lang('Footer 1') }}</h4>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">{{ _lang('Status') }}</label>
                                        <select class="form-control select2" name="advertisement_footer1_status" data-value="{{ get_option('advertisement_footer1_status', 0) }}" required>
                                            <option value="0">{{ _lang('Disable') }}</option>
                                            <option value="1">{{ _lang('Enable') }}</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">{{ _lang('Content') }}</label>
                                        <textarea class="form-control summernote" name="advertisement_footer1_content" rows="4">{{ get_option('advertisement_footer1_content') }}</textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">{{ _lang('Link') }}</label>
                                        <input type="text" class="form-control" name="advertisement_footer1_link" value="{{ get_option('advertisement_footer1_link', '#') }}">
                                    </div>
                                </div>
                            </div>       
                             
    
    <div class="params-card mb-3">
                                <div class="col-md-12">
                                    <h4>{{ _lang('Footer 2') }}</h4>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">{{ _lang('Status') }}</label>
                                        <select class="form-control select2" name="advertisement_footer2_status" data-value="{{ get_option('advertisement_footer2_status', 0) }}" required>
                                            <option value="0">{{ _lang('Disable') }}</option>
                                            <option value="1">{{ _lang('Enable') }}</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">{{ _lang('Content') }}</label>
                                        <textarea class="form-control summernote" name="advertisement_footer2_content" rows="4">{{ get_option('advertisement_footer2_content') }}</textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">{{ _lang('Link') }}</label>
                                        <input type="text" class="form-control" name="advertisement_footer2_link" value="{{ get_option('advertisement_footer2_link', '#') }}">
                                    </div>
                                </div>
                            </div>   
                             <div class="params-card mb-3">
                                <div class="col-md-12">
                                    <h4>{{ _lang('Advertisement Bix Size 1') }}</h4>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">{{ _lang('Status') }}</label>
                                        <select class="form-control select2" name="advertisement_big1_status" data-value="{{ get_option('advertisement_big1_status', 0) }}" required>
                                            <option value="0">{{ _lang('Disable') }}</option>
                                            <option value="1">{{ _lang('Enable') }}</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">{{ _lang('Content') }}</label>
                                        <textarea class="form-control summernote" name="advertisement_big1_content" rows="4">{{ get_option('advertisement_big1_content') }}</textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">{{ _lang('Link') }}</label>
                                        <input type="text" class="form-control" name="advertisement_big1_link" value="{{ get_option('advertisement_big1_link', '#') }}">
                                    </div>
                                </div>
                            </div>
                             <div class="params-card mb-3">
                                <div class="col-md-12">
                                    <h4>{{ _lang('Advertisement Bix Size 2') }}</h4>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">{{ _lang('Status') }}</label>
                                        <select class="form-control select2" name="advertisement_big2_status" data-value="{{ get_option('advertisement_big2_status', 0) }}" required>
                                            <option value="0">{{ _lang('Disable') }}</option>
                                            <option value="1">{{ _lang('Enable') }}</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">{{ _lang('Content') }}</label>
                                        <textarea class="form-control summernote" name="advertisement_big2_content" rows="4">{{ get_option('advertisement_big2_content') }}</textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">{{ _lang('Link') }}</label>
                                        <input type="text" class="form-control" name="advertisement_big2_link" value="{{ get_option('advertisement_big2_link', '#') }}">
                                    </div>
                                </div>
                            </div>
                             <div class="params-card mb-3">
                                <div class="col-md-12">
                                    <h4>{{ _lang('Advertisement Bix Size 3') }}</h4>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">{{ _lang('Status') }}</label>
                                        <select class="form-control select2" name="advertisement_big3_status" data-value="{{ get_option('advertisement_big3_status', 0) }}" required>
                                            <option value="0">{{ _lang('Disable') }}</option>
                                            <option value="1">{{ _lang('Enable') }}</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">{{ _lang('Content') }}</label>
                                        <textarea class="form-control summernote" name="advertisement_big3_content" rows="4">{{ get_option('advertisement_big3_content') }}</textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">{{ _lang('Link') }}</label>
                                        <input type="text" class="form-control" name="advertisement_big3_link" value="{{ get_option('advertisement_big3_link', '#') }}">
                                    </div>
                                </div>
                            </div>
                             <div class="params-card mb-3">
                                <div class="col-md-12">
                                    <h4>{{ _lang('Advertisement Bix Size 4') }}</h4>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">{{ _lang('Status') }}</label>
                                        <select class="form-control select2" name="advertisement_big4_status" data-value="{{ get_option('advertisement_big4_status', 0) }}" required>
                                            <option value="0">{{ _lang('Disable') }}</option>
                                            <option value="1">{{ _lang('Enable') }}</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">{{ _lang('Content') }}</label>
                                        <textarea class="form-control summernote" name="advertisement_big4_content" rows="4">{{ get_option('advertisement_big4_content') }}</textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">{{ _lang('Link') }}</label>
                                        <input type="text" class="form-control" name="advertisement_big4_link" value="{{ get_option('advertisement_big4_link', '#') }}">
                                    </div>
                                </div>
                            </div>
                             <div class="params-card mb-3">
                                <div class="col-md-12">
                                    <h4>{{ _lang('Advertisement Bix Size 5') }}</h4>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">{{ _lang('Status') }}</label>
                                        <select class="form-control select2" name="advertisement_big5_status" data-value="{{ get_option('advertisement_big5_status', 0) }}" required>
                                            <option value="0">{{ _lang('Disable') }}</option>
                                            <option value="1">{{ _lang('Enable') }}</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">{{ _lang('Content') }}</label>
                                        <textarea class="form-control summernote" name="advertisement_big5_content" rows="4">{{ get_option('advertisement_big5_content') }}</textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">{{ _lang('Link') }}</label>
                                        <input type="text" class="form-control" name="advertisement_big5_link" value="{{ get_option('advertisement_big5_link', '#') }}">
                                    </div>
                                </div>
                            </div>
 <div class="params-card mb-3">
                                <div class="col-md-12">
                                    <h4>{{ _lang('Advertisement Bix Size 6') }}</h4>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">{{ _lang('Status') }}</label>
                                        <select class="form-control select2" name="advertisement_m2_status" data-value="{{ get_option('advertisement_m2_status', 0) }}" required>
                                            <option value="0">{{ _lang('Disable') }}</option>
                                            <option value="1">{{ _lang('Enable') }}</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">{{ _lang('Content') }}</label>
                                        <textarea class="form-control summernote" name="advertisement_m2_content" rows="4">{{ get_option('advertisement_m2_content') }}</textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">{{ _lang('Link') }}</label>
                                        <input type="text" class="form-control" name="advertisement_m2_link" value="{{ get_option('advertisement_m2_link', '#') }}">
                                    </div>
                                </div>
                            </div>
<div class="params-card mb-3">
                                <div class="col-md-12">
                                    <h4>{{ _lang('Advertisement Bix Size 7') }}</h4>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">{{ _lang('Status') }}</label>
                                        <select class="form-control select2" name="advertisement_big7_status" data-value="{{ get_option('advertisement_big7_status', 0) }}" required>
                                            <option value="0">{{ _lang('Disable') }}</option>
                                            <option value="1">{{ _lang('Enable') }}</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">{{ _lang('Content') }}</label>
                                        <textarea class="form-control summernote" name="advertisement_big7_content" rows="4">{{ get_option('advertisement_big7_content') }}</textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">{{ _lang('Link') }}</label>
                                        <input type="text" class="form-control" name="advertisement_big7_link" value="{{ get_option('advertisement_big7_link', '#') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="params-card mb-3">
                                <div class="col-md-12">
                                    <h4>{{ _lang('Advertisement Bix Size 8') }}</h4>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">{{ _lang('Status') }}</label>
                                        <select class="form-control select2" name="advertisement_big8_status" data-value="{{ get_option('advertisement_big8_status', 0) }}" required>
                                            <option value="0">{{ _lang('Disable') }}</option>
                                            <option value="1">{{ _lang('Enable') }}</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">{{ _lang('Content') }}</label>
                                        <textarea class="form-control summernote" name="advertisement_big8_content" rows="4">{{ get_option('advertisement_big8_content') }}</textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">{{ _lang('Link') }}</label>
                                        <input type="text" class="form-control" name="advertisement_big8_link" value="{{ get_option('advertisement_big8_link', '#') }}">
                                    </div>
                                </div>
                            </div>
                             <div class="params-card mb-3">
                                <div class="col-md-12">
                                    <h4>{{ _lang('Advertisement Bix Size 9') }}</h4>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">{{ _lang('Status') }}</label>
                                        <select class="form-control select2" name="advertisement_big9_status" data-value="{{ get_option('advertisement_big9_status', 0) }}" required>
                                            <option value="0">{{ _lang('Disable') }}</option>
                                            <option value="1">{{ _lang('Enable') }}</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">{{ _lang('Content') }}</label>
                                        <textarea class="form-control summernote" name="advertisement_big9_content" rows="4">{{ get_option('advertisement_big9_content') }}</textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">{{ _lang('Link') }}</label>
                                        <input type="text" class="form-control" name="advertisement_big9_link" value="{{ get_option('advertisement_big9_link', '#') }}">
                                    </div>
                                </div>
                            </div>
                             <div class="params-card mb-3">
                                <div class="col-md-12">
                                    <h4>{{ _lang('Advertisement Post Page Top') }}</h4>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">{{ _lang('Status') }}</label>
                                        <select class="form-control select2" name="advertisement_posttop_status" data-value="{{ get_option('advertisement_posttop_status', 0) }}" required>
                                            <option value="0">{{ _lang('Disable') }}</option>
                                            <option value="1">{{ _lang('Enable') }}</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">{{ _lang('Content') }}</label>
                                        <textarea class="form-control summernote" name="advertisement_posttop_content" rows="4">{{ get_option('advertisement_posttop_content') }}</textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">{{ _lang('Link') }}</label>
                                        <input type="text" class="form-control" name="advertisement_posttop_link" value="{{ get_option('advertisement_posttop_link', '#') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="params-card mb-3">
                                <div class="col-md-12">
                                    <h4>{{ _lang('Advertisement Post Page Bottom') }}</h4>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">{{ _lang('Status') }}</label>
                                        <select class="form-control select2" name="advertisement_postbottom_status" data-value="{{ get_option('advertisement_postbottom_status', 0) }}" required>
                                            <option value="0">{{ _lang('Disable') }}</option>
                                            <option value="1">{{ _lang('Enable') }}</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">{{ _lang('Content') }}</label>
                                        <textarea class="form-control summernote" name="advertisement_postbottom_content" rows="4">{{ get_option('advertisement_postbottom_content') }}</textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">{{ _lang('Link') }}</label>
                                        <input type="text" class="form-control" name="advertisement_postbottom_link" value="{{ get_option('advertisement_postbottom_link', '#') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="params-card mb-3">
                                <div class="col-md-12">
                                    <h4>{{ _lang('Advertisement Category Page Top') }}</h4>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">{{ _lang('Status') }}</label>
                                        <select class="form-control select2" name="advertisement_categorytop_status" data-value="{{ get_option('advertisement_categorytop_status', 0) }}" required>
                                            <option value="0">{{ _lang('Disable') }}</option>
                                            <option value="1">{{ _lang('Enable') }}</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">{{ _lang('Content') }}</label>
                                        <textarea class="form-control summernote" name="advertisement_categorytop_content" rows="4">{{ get_option('advertisement_categorytop_content') }}</textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">{{ _lang('Link') }}</label>
                                        <input type="text" class="form-control" name="advertisement_categorytop_link" value="{{ get_option('advertisement_categorytop_link', '#') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="params-card mb-3">
                                <div class="col-md-12">
                                    <h4>{{ _lang('Advertisement Category Page Bottom') }}</h4>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">{{ _lang('Status') }}</label>
                                        <select class="form-control select2" name="advertisement_categorybottom_status" data-value="{{ get_option('advertisement_categorybottom_status', 0) }}" required>
                                            <option value="0">{{ _lang('Disable') }}</option>
                                            <option value="1">{{ _lang('Enable') }}</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">{{ _lang('Content') }}</label>
                                        <textarea class="form-control summernote" name="advertisement_categorybottom_content" rows="4">{{ get_option('advertisement_categorybottom_content') }}</textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">{{ _lang('Link') }}</label>
                                        <input type="text" class="form-control" name="advertisement_categorybottom_link" value="{{ get_option('advertisement_categorybottom_link', '#') }}">
                                    </div>
                                </div>
                            </div>
                         
                            <div class="params-card mb-3">
                                <div class="col-md-12">
                                    <h4>{{ _lang('About  Page Content') }}</h4>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">{{ _lang('Status') }}</label>
                                        <select class="form-control select2" name="advertisement_aboutus_status" data-value="{{ get_option('advertisement_aboutus_status', 0) }}" required>
                                            <option value="0">{{ _lang('Disable') }}</option>
                                            <option value="1">{{ _lang('Enable') }}</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">{{ _lang('Content') }}</label>
                                        <textarea class="form-control summernote" name="advertisement_aboutus_content" rows="4">{{ get_option('advertisement_aboutus_content') }}</textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">{{ _lang('Link') }}</label>
                                        <input type="text" class="form-control" name="advertisement_posttop_link" value="{{ get_option('advertisement_posttop_link', '#') }}">
                                    </div>
                                </div>
                            </div>
                              <div class="params-card mb-3">
                                <div class="col-md-12">
                                    <h4>{{ _lang('Privacy & Policy  Page Content') }}</h4>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">{{ _lang('Status') }}</label>
                                        <select class="form-control select2" name="advertisement_privacy_status" data-value="{{ get_option('advertisement_privacy_status', 0) }}" required>
                                            <option value="0">{{ _lang('Disable') }}</option>
                                            <option value="1">{{ _lang('Enable') }}</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">{{ _lang('Content') }}</label>
                                        <textarea class="form-control summernote" name="advertisement_privacy_content" rows="4">{{ get_option('advertisement_privacy_content') }}</textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">{{ _lang('Link') }}</label>
                                        <input type="text" class="form-control" name="advertisement_privacy_link" value="{{ get_option('advertisement_privacy_link', '#') }}">
                                    </div>
                                </div>
                            </div>
                              <div class="params-card mb-3">
                                <div class="col-md-12">
                                    <h4>{{ _lang('Terms & Conditions  Page Content') }}</h4>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">{{ _lang('Status') }}</label>
                                        <select class="form-control select2" name="advertisement_terms_status" data-value="{{ get_option('advertisement_terms_status', 0) }}" required>
                                            <option value="0">{{ _lang('Disable') }}</option>
                                            <option value="1">{{ _lang('Enable') }}</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">{{ _lang('Content') }}</label>
                                        <textarea class="form-control summernote" name="advertisement_terms_content" rows="4">{{ get_option('advertisement_terms_content')}}</textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">{{ _lang('Link') }}</label>
                                        <input type="text" class="form-control" name="advertisement_trms_link" value="{{ get_option('advertisement_terms_link', '#') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group text-right mb-0">
                                <button type="submit" class="btn btn-outline-success btn-sm">
                                    {{ _lang('Update') }}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="social-links" role="tabpanel" aria-labelledby="social-links-tab">
                <div class="card card-default">
                    <div class="card-body">
                        <div class="card-title">{{ _lang('Social Links') }}</div>
                        <form method="post" class="ajax-submit2 params-card" action="{{ route('theme_option') }}">

                            @csrf
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">{{ _lang('Facebook Link') }}</label>
                                    <input type="text" class="form-control" name="facebook_link" value="{{ get_option('facebook_link') }}">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">{{ _lang('Twitter Link') }}</label>
                                    <input type="text" class="form-control" name="twitter_link" value="{{ get_option('twitter_link') }}">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">{{ _lang('Instagram Link') }}</label>
                                    <input type="text" class="form-control" name="instagram_link" value="{{ get_option('instagram_link') }}">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">{{ _lang('Linkedin Link') }}</label>
                                    <input type="text" class="form-control" name="linkedin_link" value="{{ get_option('linkedin_link') }}">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">{{ _lang('Pinterest Link') }}</label>
                                    <input type="text" class="form-control" name="pinterest_link" value="{{ get_option('pinterest_link') }}">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">{{ _lang('Youtube Link') }}</label>
                                    <input type="text" class="form-control" name="youtube_link" value="{{ get_option('youtube_link') }}">
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
    $('#add-more').on('click', function() {
        var form = $('.repeat').clone().removeClass('repeat');
        form.find('input').val('');
        form.find('[type=file]').dropify();
        $("#add-more").parent().before(form);
    });

    $(document).on('click', '.remove', function() {
        var group = $(this).parent();
        var field = group.find('input[type=hidden]');
        var id = field.val();

        if (typeof id != 'undefined' && id != '') {
            group.find('input[type=text], input[type=file], textarea').remove();
            field.attr('name', 'remove_' + field.attr('name'));
            group.hide();
        } else {
            group.remove();
        }
    });

    if ($("#trending").val() != 1) {
        $(".trending").prop("disabled", true);
        $(".trending").prop("required", false);
    }
    $(document).on("change", "#trending", function() {
        if ($(this).val() != 1) {
            $(".trending").prop("disabled", true);
            $(".trending").prop("required", false);
        } else {
            $(".trending").prop("disabled", false);
            $(".trending").prop("required", true);
        }
    });
    if ($("#featured").val() != 1) {
        $(".featured").prop("disabled", true);
        $(".featured").prop("required", false);
    }
    $(document).on("change", "#featured", function() {
        if ($(this).val() != 1) {
            $(".featured").prop("disabled", true);
            $(".featured").prop("required", false);
        } else {
            $(".featured").prop("disabled", false);
            $(".featured").prop("required", true);
        }
    });

</script>
@stop

