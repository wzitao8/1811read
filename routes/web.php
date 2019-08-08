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
//首页
Route::get('/index', 'Index\IndexController@index');
/**
 * 后台首页
 */
Route::get('/admin', 'Admin\AdminController@admin');

Route::get('/useradd', 'Admin\AdminController@add');

Route::get('/admin/bookadd', 'Admin\AdminController@bookadd');

Route::post('/admin/fileadd', 'Admin\AdminController@fileadd');

