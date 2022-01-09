<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group(['namespace' => 'Api', 'prefix' => 'v1'], function () {
    Route::group(['as' => 'api.v1.'], function () {
        Route::group(['prefix' => 'products',],
            function () {
                Route::get('/', 'ProductController@index');
                Route::post('/store-product', 'ProductController@store');
                Route::put('/{id}', 'ProductController@update');
        });
        Route::group(['prefix' => 'return_products',],
            function () {
                Route::get('/', 'ReturnProduct\IndexController@index');
                Route::post('/store-returnproduct', 'ReturnProduct\StoreController@store');
                Route::put('/{id}', 'ReturnProduct\UpdateController@update');
                Route::delete('/{id}', 'ReturnProduct\DestroyController@destroy');
        });
        Route::group(['prefix' => 'export_products',],
            function () {
                Route::get('/', 'ExportProductController@index');
                Route::post('/store-exportproduct', 'ExportProductController@store');
                Route::put('/{id}', 'ExportProductController@update');
        });
    });
});

?>