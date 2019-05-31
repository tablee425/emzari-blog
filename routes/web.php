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

Route::get('/', 'PostController@getIndex')->name('index');

Route::get('/summernote','SummernoteController@getIndex');
Route::post('/summernote','SummernoteController@store')->name('summernotePersist');
Route::get('/summernote_display','SummernoteController@show')->name('summernoteDispay');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/author/post', 'HomeController@getPostForm')->name('post.getform');
Route::post('/author/post', 'HomeController@createPost')->name('post.createform');
Route::get('/author/post/detail/{id}', 'HomeController@getPost')->name('post.detail');
Route::get('/author/post/edit/{id}', 'HomeController@editPost')->name('post.edit');
Route::post('/author/post/edit/{id}', 'HomeController@updatePost')->name('post.update');
Route::get('/author/post/delete/{id}', 'HomeController@deletePost')->name('post.delete');
Route::get('/post/read/{post_id}', 'PostController@getFullPost')->name('post.read');

Route::get('article', 'ArticleController@index');
Route::post('article', 'ArticleController@store');

Route::post('/subscribed', 'PostController@sendSubscription')->name('post.send_subscription');
Route::get('/confirmed', 'PostController@confirmed')->name('subscription.confirmed');
Route::get('/subscribe/{token}', 'PostController@updateSubscription');
Route::get('/unsubscribe/{token}', 'PostController@updateUnsubscription');
Route::get('/unsubscribed', 'PostController@unsubscribed')->name('subscription.unsubscribed');

Route::get('/emailnotification', 'PostController@emailnotification');
