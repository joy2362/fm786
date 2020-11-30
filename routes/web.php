<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

Route::group(['middleware' => ['install']], function () {
    Route::get('/', 'WebsiteController@index');
    Route::get('/post/{slug}', 'WebsiteController@single_post');
    Route::get('/category/{slug}', 'WebsiteController@categoryPosts');

    Route::any('contact', 'WebsiteController@contact');
    Route::any('aboutus', 'WebsiteController@aboutus');
    Route::any('privacyandpolicy', 'WebsiteController@privacy');
     Route::any('termsandconditions', 'WebsiteController@terms');
      Route::get('archives', 'WebsiteController@archive');
    Route::get('lang/{lang}', 'WebsiteController@set_lang');

    Auth::routes(['register' => false]);
    Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout')->name('logout');

    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');


//Clear route cache:
 Route::get('/route-cache', function() {
     $exitCode = Artisan::call('route:cache');
     return 'Routes cache cleared';
 });

 //Clear config cache:
 Route::get('/config-cache', function() {
     $exitCode = Artisan::call('config:cache');
     return 'Config cache cleared';
 });

// Clear application cache:
 Route::get('/clear-cache', function() {
     $exitCode = Artisan::call('cache:clear');
     return 'Application cache cleared';
 });

 // Clear view cache:
 Route::get('/view-clear', function() {
     $exitCode = Artisan::call('view:clear');
     return 'View cache cleared';
 });
 Route::any('theme_option', 'SettingsController@theme_option')->name('theme_option');
    //auth
    Route::group(['middleware' => ['auth']], function () {

        //Profile Controller
        Route::get('profile/show', 'ProfileController@show')->name('profile.show');
        Route::get('profile/edit', 'ProfileController@edit')->name('profile.edit');
        Route::post('profile/update', 'ProfileController@update')->name('profile.update');
        Route::get('password/change', 'ProfileController@password_change')->name('password.change');
        Route::post('password/update', 'ProfileController@update_password')->name('password.update');

        //only admin
        Route::group(['middleware' => ['permission:admin']], function () {

            //Settings Controller
            Route::any('general_settings', 'SettingsController@general')->name('general_settings');

            //Backup Controller
            Route::any('database_backup', 'BackupController@index')->name('database_backup');
            //Language Controller
            Route::resource('languages', 'LanguageController');
            //User Controller
            Route::resource('users', 'UserController');
            //PostCategory Controller
            Route::resource('categories', 'CategoryController');
            //Post Controller
            Route::resource('posts', 'PostController')->only(['destroy'])->except('show');
            Route::get('posts/pending', 'PostController@pending');
            Route::get('posts/status/{status}/{post_id}', 'PostController@status');

        });

        //only editor
        Route::group(['middleware' => ['permission:admin,editor']], function () {

            //Post Controller
            Route::resource('posts', 'PostController')->only(['index', 'create', 'store', 'edit', 'update']);

        });

    });
});

//Install Controller
Route::get('/installation', 'Install\InstallController@index');
Route::get('install/database', 'Install\InstallController@database');
Route::post('install/process_install', 'Install\InstallController@process_install');
Route::get('install/create_user', 'Install\InstallController@create_user');
Route::post('install/store_user', 'Install\InstallController@store_user');
Route::get('install/system_settings', 'Install\InstallController@system_settings');
Route::post('install/finish', 'Install\InstallController@final_touch');

//search post
Route::any('search/post', 'SearchController@search');
//auto complete
//Route::post('autocomplete/fetch', 'SearchController@getAutocompleteData')->name('autocomplete.fetch');
Route::get('autocomplete/fetch/{text}', 'SearchController@getAutocompleteData')->name('autocomplete.fetch');
Route::post('archives', 'SearchController@archive')->name('archive');
