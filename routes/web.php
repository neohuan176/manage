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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//管理员路由
Route::group(['middleware' => ['web','auth'],'prefix' => 'admin'], function () {
    Route::get('/clientManage','AdminController@clientManage')->name('admin.clientManage');//个人客户管理页面
    Route::get('/companyManage','AdminController@companyManage')->name('admin.companyManage');//公司客户管理页面
    Route::get('/companyRecordsManage','AdminController@companyRecordsManage')->name('admin.companyRecordsManage');//公司订单管理页面
    Route::get('/clientRecordsManage','AdminController@clientRecordsManage')->name('admin.clientRecordsManage');//个人订单管理页面
});
