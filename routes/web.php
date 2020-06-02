<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

//业务员
Route::prefix('yewu')->group(function(){
    Route::get('create','admin\YewuController@create');
    Route::post('store','admin\YewuController@store');
    Route::get('/','admin\YewuController@index');
    Route::get('destroy/{id}','admin\YewuController@destroy');
    Route::get('edit/{id}','admin\YewuController@edit');
    Route::post('update/{id}','admin\YewuController@update');
});

//客户
Route::prefix('kehu')->group(function(){
    Route::get('create','admin\KehuController@create');
    Route::post('store','admin\KehuController@store');
    Route::get('/','admin\KehuController@index');
    Route::get('destroy/{id}','admin\KehuController@destroy');
    Route::get('edit/{id}','admin\KehuController@edit');
    Route::post('update/{id}','admin\KehuController@update');
});

// 综合分析
Route::prefix('statistic')->group(function(){
    Route::get('/','Admin\StatisticController@statistic');
});
// 综合查询
Route::prefix('inquiry')->middleware('login')->group(function(){
    Route::get('/','Admin\InquiryController@index');
});
// 登录
Route::prefix('login')->group(function(){
    Route::get('/','Admin\LoginController@login');
    Route::post('loginDo','Admin\LoginController@loginDo');
    Route::get('loginAdd','Admin\LoginController@loginAdd');//注册
    Route::post('loginAddDo','Admin\LoginController@loginAddDo');//注册
});