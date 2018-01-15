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

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/auth', function () {
    return view('auth');
});

Route::get('/pet', function () {
    return view('pet');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/post', 'petPost@postForm')->name('postForm');
Route::post('/post', 'petPost@postAdd')->name('postAdd');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/blog/post', function(){
	return view('new-blog');
});

Route::get('/blog/view', function(){
	return view('article');
});

Route::get('/info-form', 'HomeController@profileInfoForm')->name('infoForm') ;
Route::post('/info-form', 'HomeController@profileInfoFormEdit')->name('infoEdit') ;
