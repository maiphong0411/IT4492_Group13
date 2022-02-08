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

Route::get('/', function () 
{
    return view('ListProPage');
});
Route::get('/CreateProduct',function()
{
    return view('FormPage');
});
Route::get('/SaveProduct',function()
{
    return view('SavePage');
});
Route::get('/ListReturnProduct',function()
{
    return view('ListReturnProPgae');
});
Route::get('/InfoPro',function()
{
    return view('InfoProduct');
});