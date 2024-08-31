<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


Route::get('/', 'App\Http\Controllers\HomeController@index')->name('home.index');
Route::get('/about', 'App\Http\Controllers\HomeController@about')->name('home.about');
Route::get('/contact', 'App\Http\Controllers\HomeController@contact')->name('home.contact');
Route::get('/products', 'App\Http\Controllers\ProductController@index')->name('product.index');
Route::get('/products/create', 'App\Http\Controllers\ProductController@create')->name('product.create');
Route::post('/products/save', 'App\Http\Controllers\ProductController@save')->name('product.save');
Route::get('/products/{id}', 'App\Http\Controllers\ProductController@show')->name('product.show');
Route::get('/form_validated', 'App\Http\Controllers\ProductController@validation')->name('product.validation');
Route::get('/cart', 'App\Http\Controllers\CartController@index')->name("cart.index");
Route::get('/cart/add/{id}', 'App\Http\Controllers\CartController@add')->name("cart.add");
Route::get('/cart/removeAll/', 'App\Http\Controllers\CartController@removeAll')->name("cart.removeAll");

Auth::routes();

Route::get('/image', 'App\Http\Controllers\ImageController@index')->name("image.index");
Route::post('/image/save', 'App\Http\Controllers\ImageController@save')->name("image.save");

Route::get('/image-not-di', 'App\Http\Controllers\ImageNotDIController@index')->name("imagenotdi.index");
Route::post('/image-not-di/save', 'App\Http\Controllers\ImageNotDIController@save')->name("imagenotdi.save");

