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

//修改密码
Route::post('/xgmmaaw','HomeProblemController@xgmm');

//修改头像
Route::post('/touxiang/{id}','HomeProblemController@touxiang');

//前台路由组
Route::group(['middleware'=>'home'],function(){
	//提问问题管理资源路由
	Route::resource('/problem','ProblemController');

	//前台提问问题
	Route::get('/home/problem/create','HomeProblemController@create');

	//前台回答回复
	Route::get('/home/append/create/{id}','HomeProblemController@createreply');

	//回答问题资源路由
	Route::resource('/reply','ReplyController');
	
	//反馈后台资源
	Route::resource('/fankui','FeedBackController');

});


//前往用户个人中心
Route::get('/home/center','HomeProblemController@center');

//用户个人中心编辑
Route::post('/home/{id}/update','HomeProblemController@update');

//前台用户登录路由
Route::get('/home/login','HomeProblemController@login');

//前台用户登录操作
Route::post('/home/dologin','HomeProblemController@dologin');

//前台用户退出登录路由
Route::get('/home/logout','HomeProblemController@logout');

//前台用户注册路由
Route::get('/home/register','HomeController@register');

//前台用户注册保存路由
Route::post('/home/create','HomeController@create');

//前台问题列表
Route::get('/home/problemlist','HomeProblemController@index');

//前台问题展示
Route::get('/home/problem/{id}','HomeProblemController@wtzs');

//问题追加资源路由
Route::resource('/append','AppendController');







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

// 友情链接资源路由
Route::resource('/admin/link','AdminLinkController');

// 网站配置资源路由
Route::resource('/admin/wzpz','AdminWzpzController');

// 广告管理资源
Route::resource('/admin/gggl','AdminGgglController');

//用户资源路由
Route::resource('/admin/user','AdminUserController');

//问题分类资源路由 
Route::resource('/admin/cate','AdminCateController');

//问题标签资源路由 
Route::resource('/admin/tag','AdminTagController');


//问题追加资源路由
Route::resource('/append','AppendController');

//采纳路由
Route::get('/home/server','HomeProblemController@caina');

});


