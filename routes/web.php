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

use App\Http\Middleware\HelloMiddleware;
use App\Http\Controllers\HelloController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('list', 'HelloController@list');
Route::get('foreach_loop', 'HelloController@foreach_loop');
Route::get('master', 'ViewController@master');
Route::get('comp', 'ViewController@comp');
Route::get('index', 'HelloController@index');
Route::get('route/param/{id}', 'RouteController@param')
    ->where(['id' => '[0-9]{2,3}']);
Route::get('route/search/{keywd?}', 'RouteController@search')
    ->where('keywd', '.*');
// 共通のパスを頭につけたルート指定
Route::prefix('members')->group(function () {
    Route::get('info', 'RouteController@info');
    Route::get('article', 'RouteController@article');
});
// ネームスペースコントローラー
// Route::namespace('Main')->group(function(){
//     Route::get('route/ns', 'RouteController@ns');
// });
// アクションの省略
Route::view('/route', 'route.view', ['name' => 'Laravel']);

// リダイレクト
Route::redirect('/hoge', '/', 301);

// リソースルート
Route::resource('articles', 'ArticleController');

//フォールバック
// Route::fallback(function () {
//     return view('route.error');
// });

Route::get('ctrl/plain', 'CtrlController@plain');

Route::get('ctrl/header', 'CtrlController@header');
Route::get('ctrl/outJson', 'CtrlController@outJson');
Route::get('ctrl/outFile', 'CtrlController@outFile');
Route::get('ctrl/outCsv', 'CtrlController@outCsv');
Route::get('ctrl/outImage', 'CtrlController@outImage');
Route::get('ctrl/redirectBasic', 'CtrlController@redirectBasic');
Route::get('ctrl/index', 'CtrlController@index');

// 入力フォームの内容をPOSTで受け取って表示
Route::get('ctrl/result', 'CtrlController@form');
Route::post('ctrl/result', 'CtrlController@result');

Route::get('hello', 'HelloController@index')->middleware('auth');
Route::post('hello', 'HelloController@post');

Route::get('hello/add', 'HelloController@add');
Route::post('hello/add', 'HelloController@create');

Route::get('hello/edit', 'HelloController@edit');
Route::post('hello/edit', 'HelloController@update');

Route::get('hello/del', 'HelloController@del');
Route::post('hello/del', 'HelloController@remove');

Route::get('hello/show', 'HelloController@show');

Route::get('person', 'PersonController@index');

Route::get('person/find', 'PersonController@find');
Route::post('person/find', 'PersonController@search');

Route::get('person/add', 'PersonController@add');
Route::post('person/add', 'PersonController@create');

Route::get('person/edit', 'PersonController@edit');
Route::post('person/edit', 'PersonController@update');

Route::get('person/del', 'PersonController@delete');
Route::post('person/del', 'PersonController@remove');

Route::get('board', 'BoardController@index');
Route::get('board/add', 'BoardController@add');
Route::post('board/add', 'BoardController@create');

Route::resource('rest','RestappController');
Route::resource('restindex','RestappController');

Route::get('hello/rest', 'HelloController@rest');

Route::get('hello/session','HelloController@ses_get');
Route::post('hello/session','HelloController@ses_put');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('hello/auth', 'HelloController@getAuth');
Route::post('hello/auth', 'HelloController@postAuth');
