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

Route::get('/', 'ShowController@index');

Auth::routes();

Route::get('/dashboard','ProductController@index');
Route::get('/dashboard/listing','ProductController@show');
Route::get('/dashboard/create','ProductController@create');
Route::post('/dashboard/adding','ProductController@store');
Route::get('/dashboard/{id}/edit','ProductController@edit');
Route::patch('/dashboard/editing/{id}','ProductController@update');
Route::delete('/dashboard/destroy/{id}','ProductController@destroy');
Route::get('/dashboard/category', 'CategoryController@index');
Route::post('/dashboard/category_add', 'CategoryController@store');
Route::patch('/dashboard/category_editing/{id}', 'CategoryController@update');
Route::delete('/dashboard/category_destroy/{id}', 'CategoryController@destroy');
Route::get('/dashboard/bookings', 'BookingController@index');
Route::patch('/dashboard/approve/{id}','BookingController@update');
Route::delete('/dashboard/book_destroy/{id}','BookingController@destroy');
Route::get('/dashboard/reviews', 'ReviewController@index');
Route::post('/review','ReviewController@store');

Route::get('/meeting','ShowController@meeting');
Route::get('/meeting/detail/{id}','ShowController@meeting_detail');
Route::get('/workspace','ShowController@workspace');
Route::get('/workspace/detail/{id}','ShowController@workspace_detail');
Route::get('/virtualoffice','ShowController@virtualoffice');
Route::get('/virtualoffice/detail/{id}','ShowController@virtualoffice_detail');
Route::get('/search','ShowController@search');
Route::get('/room-register','ShowController@daftarkan');

Route::get('/cart','OrderController@cart_pertama');
Route::post('/cart/add','OrderController@cart_add');
Route::get('/cart/2','OrderController@cart_kedua');
Route::get('/cart/3','OrderController@cart_ketiga');
Route::patch('/cart/3/{user_id}','OrderController@update');
Route::delete('/cart/destroy/{id}','OrderController@destroy');