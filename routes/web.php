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


Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/logout',function () {
    return view('welcome');
})->name('logout');

#################  Profile  ##################
Route::get('/profile/{user}','ProfilesController@index')->name('profile.show');
Route::get('/profile/{user}/edit','ProfilesController@edit')->name('profile.edit');
Route::patch('/profile/{user}','ProfilesController@update')->name('profile.update');

#################  Posts  ##################
Route::get('/', 'PostsController@index')->name('home');
Route::get('/p/create','PostsController@create');
Route::delete('/p/{post}','PostsController@destroy')->name('post.destroy');
Route::get('/p/{post}','PostsController@show');
Route::post('/p','PostsController@store');

#################  axios  ##################
Route::post('/follow/{user}', 'FollowsController@store');
