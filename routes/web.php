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

//后台路由
//用户资源路由
Route::resource('/admin/user','AdminUserController');

//问题分类资源路由 
Route::resource('/admin/cate','AdminCateController');

//问题标签资源路由 
Route::resource('/admin/tag','AdminTagController');

//提问问题管理资源路由
Route::resource('/problem','ProblemController');


