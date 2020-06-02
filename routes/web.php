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
Route::middleware('login')->get('/','Admin\InquiryController@index');
Route::prefix('yewu')->group(function(){
    Route::get('create','admin\YewuController@create');
    Route::post('store','admin\YewuController@store');
    Route::get('/','admin\YewuController@index');
    Route::get('destroy/{id}','admin\YewuController@destroy');
    Route::get('edit/{id}','admin\YewuController@edit');
    Route::post('update/{id}','admin\YewuController@update');

});
// 综合分析
Route::prefix('statistic')->middleware('login')->group(function(){
    Route::get('/','Admin\StatisticController@statistic');
});
// 登录
Route::prefix('login')->group(function(){
    Route::get('/','Admin\LoginController@login');
    Route::get('loginAdd','Admin\LoginController@loginAdd');//注册
    Route::post('loginDo','Admin\LoginController@loginDo');
});