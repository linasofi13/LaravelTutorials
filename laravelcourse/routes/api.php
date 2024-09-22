<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
Route::get('/products', 'App\Http\Controllers\Api\ProductApiController@index')->name('api.product.index');
Route::get('/products/{id}', 'App\Http\Controllers\Api\ProductApiController@show')->name('api.product.show');
Route::get('/v2/products', 'App\Http\Controllers\Api\ProductApiControllerV2@index')->name('api.v2.product.index');
Route::get('/v2/products/{id}', 'App\Http\Controllers\Api\ProductApiControllerV2@show')->name('api.v2.product.show');
Route::get('/v3/products', 'App\Http\Controllers\Api\ProductApiControllerV3@index')->name('api.v3.product.index');
Route::get('/v3/products/paginate', 'App\Http\Controllers\Api\ProductApiControllerV3@paginate')->name('api.v3.product.paginate');
Route::post('/v3/products/store', 'App\Http\Controllers\Api\ProductApiControllerV3@store')->name('api.v3.product.store');

