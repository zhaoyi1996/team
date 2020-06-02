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
Route::get('/','Admin\IndexController@index');

// 综合查询
Route::prefix('inquiry')->group(function(){
    Route::get('/','Admin\InquiryController@index');
    
});
// 综合分析
Route::prefix('statistic')->group(function(){
    Route::get('/','Admin\StatisticController@statistic');
    
});