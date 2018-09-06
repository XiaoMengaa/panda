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


//前台提问问题
Route::get('/home/problem/create','HomeProblemController@create');

//前台问题列表
Route::get('/home/problemlist','HomeProblemController@index');

//前台问题展示
Route::get('/home/problem/{id}','HomeProblemController@wtzs');

//前台回答回复
Route::get('/home/append/create/{id}','HomeProblemController@createreply');

//退出登录
Route::get('/admin/logout','AdminController@logout');

//登录页面
Route::get('/admin/login', 'AdminController@login');

//登陆操作
Route::post('/admin/login', 'AdminController@dologin');

//后台路由组
Route::group(['middleware'=>'admin'],function(){

//后台路由
Route::get('/admin','AdminController@index');

//用户资源路由
Route::resource('/admin/user','AdminUserController');

//问题分类资源路由 
Route::resource('/admin/cate','AdminCateController');

//问题标签资源路由 
Route::resource('/admin/tag','AdminTagController');

//提问问题管理资源路由
Route::resource('/problem','ProblemController');

//回答问题资源路由
Route::resource('/reply','ReplyController');

//问题追加资源路由
Route::resource('/append','AppendController');

});
