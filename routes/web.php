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

Route::get('/', 'Web\LandingPageController@index')->name('SPA');
Route::get('/terms', 'Web\LandingPageController@terms')->name('home.terms');

Auth::routes();

Route::group(['middleware' => ['auth']], function () {
    Route::get('/home', 'HomeController@index')->name('home');

    Route::resource('users', 'Web\UserController');
    Route::get('users/{id}/historic', 'Web\UserController@historic')->name('users.historic');
    Route::get('users/status/{ids}', 'Web\UserController@status')->name('users.status');

    Route::resource('profiles', 'Web\ProfileController');

    Route::get('/instagram', 'Web\InstagramController@index')->name('instagram.index');
    Route::get('/instagram/callback', 'Web\InstagramController@callback')->name('instagram.callback');
    Route::get('/instagram/connect', 'Web\InstagramController@connect')->name('instagram.connect');
});
