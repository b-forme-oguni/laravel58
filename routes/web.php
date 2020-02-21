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
});


Route::get('list', 'HelloController@list');
Route::get('foreach_loop', 'HelloController@foreach_loop');
Route::get('master', 'ViewController@master');
Route::get('comp', 'ViewController@comp');
Route::get('index', 'HelloController@index');
Route::get('route/param/{id}', 'RouteController@param')
->where(['id'=>'[0-9]{2,3}']);
Route::get('route/search/{keywd?}','RouteController@search')
->where('keywd','.*');
