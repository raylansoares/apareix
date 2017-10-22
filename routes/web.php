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

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('users', 'Web\UserController');
Route::resource('profiles', 'Web\ProfileController');