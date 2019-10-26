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
//服务管理
Route::get('serve/create','Admin\ServeController@create');
Route::post('serve/create_do','Admin\ServeController@create_do');
Route::get('serve/index','Admin\ServeController@index');
//删除
Route::get('serve/del/{id}','Admin\ServeController@del');
//修改视图
Route::get('serve/edit/{id}','Admin\ServeController@edit');
//修改执行
Route::post('serve/update/{id}','Admin\ServeController@update');