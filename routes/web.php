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
Route::middleware('login')->get('/','admin\LoginController@login');
//业务员
Route::prefix('yewu')->middleware('login')->group(function(){
    Route::get('create','admin\YewuController@create');
    Route::post('store','admin\YewuController@store');
    Route::get('/','admin\YewuController@index');
    Route::get('destroy/{id}','admin\YewuController@destroy');
    Route::get('edit/{id}','admin\YewuController@edit');
    Route::post('update/{id}','admin\YewuController@update');
});

//客户
Route::prefix('kehu')->middleware('login')->group(function(){
    Route::get('create','admin\KehuController@create');
    Route::post('store','admin\KehuController@store');
    Route::get('/','admin\KehuController@index');
    Route::get('destroy/{id}','admin\KehuController@destroy');
    Route::get('edit/{id}','admin\KehuController@edit');
    Route::post('update/{id}','admin\KehuController@update');
});

//客户拜访

Route::prefix('meeting')->group(function(){
    Route::get('create','admin\MeetingController@create');
    Route::post('addyewu','admin\MeetingController@addyewu');
    Route::post('addkehu','admin\MeetingController@addkehu');
    Route::post('store','admin\MeetingController@store');
    Route::get('/','admin\MeetingController@index');
    Route::get('destroy/{id}','admin\MeetingController@destroy');
    Route::get('edit/{id}','admin\MeetingController@edit');
    Route::post('update/{id}','admin\MeetingController@update');
});

// 综合分析
Route::prefix('statistic')->middleware('login')->group(function(){
    Route::get('/','admin\StatisticController@statistic');
});
// 综合查询
Route::prefix('inquiry')->middleware('login')->group(function(){
    Route::get('/','admin\InquiryController@index');
});
// 系统管理
Route::prefix('system')->middleware('login')->group(function(){
    Route::get('/','admin\SystemController@system');//管理员展示
    Route::get('systemDel/{id}','admin\SystemController@systemDel');//管理员删除
});
// 登录
Route::prefix('login')->group(function(){
    Route::get('/','admin\LoginController@login');
    Route::post('loginDo','admin\LoginController@loginDo');
    Route::get('loginAdd','admin\LoginController@loginAdd');//注册
    Route::post('loginAddDo','admin\LoginController@loginAddDo');//注册
    Route::get('/loginNull','admin\LoginController@loginNull');//退出登录
});