<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/userlist', 'UserController@index')->name('userlist')->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/subreddits', 'SubredditsController@index')->name('subreddits')->middleware('auth');
Route::get('/subreddits/create', 'SubredditsController@create')->middleware('auth');;
Route::get('/subreddits/{slug}', 'SubredditsController@show')->middleware('auth');;
Route::get('/subreddits/post/{slug}', 'PostController@show')->middleware('auth');;
Route::post('/subreddits', 'SubredditsController@store')->middleware('auth');;
Route::post('/posts', 'SubredditsController@storePost')->middleware('auth');;

