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

Route::get('/', 'OrderController@index');


Route::get('/order',function(){
   return view('order');
});

Route::get('/order/{order}','OrderController@show');

Route::post('/order/{order}','OrderController@change');

Route::post('/order','OrderController@store');

