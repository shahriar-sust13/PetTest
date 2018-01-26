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

Route::get('/', 'WelcomeController@welcomePage')->name('welcome');

Route::get('/auth', function () {
    return view('auth');
});

Route::get('/pet/{id}', 'petController@petProfile')->name('petProfile');

Route::get('/profile/{id}', 'HomeController@profile')->name('profile') ;

Route::get('/post', 'petPost@postForm')->name('postForm');
Route::post('/post', 'petPost@postAdd')->name('postAdd');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/home', 'HomeController@Rhome')->name('rHome');

Route::get('/blog/post', function(){
	return view('new-blog');
})->middleware('auth');

Route::post('/blog/post', 'BlogController@addArticle');

Route::get('/blog/view/{id}', "BlogController@showArticle");

Route::post('/blog/view/{id}', "BlogController@postComment");

Route::get('/blog/home', 'BlogController@renderBlog');

Route::get('/info-form', 'InfoController@profileInfoForm')->name('infoForm') ;
Route::post('/info-form', 'InfoController@profileInfoFormEdit')->name('infoEdit') ;

Route::get('/test', function(){
	return view('test');
});

Route::post('/uploadpic', 'InfoController@changePic');

Route::get('/logout', function(){
	\Auth::logout();
	return redirect('/');
});


