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

Route::get('/admin/wblogin','LoginController@login');//獲取accessToken

Route::any('/wblogin/callback','LoginController@callback');//回調路由

//前台首页路由
Route::get('/','HomeController@index');

//前台商城主页路由
Route::get('/home/shangcheng','HomeSpController@index');

//确认收货前台路由
Route::get('/home/qrsh','HomeProblemController@qrsh');

//前台网站开关
Route::group(['middleware'=>'wzkg'],function(){

//修改密码
Route::post('/xgmmaaw','HomeProblemController@xgmm');

//修改头像
Route::post('/touxiang/{id}','HomeProblemController@touxiang');

//前台路由组
Route::group(['middleware'=>'home'],function(){

	//前台问题回答
	Route::post('/home/reply','HomeController@createreply');

	//问题标签修改与保存
	Route::post('/home/tagproblem/create','HomeController@tagstore');

	//问题标签路由
	Route::get('/home/problemtag/center/{id}','HomeProblemController@createtag');
	//前台网站配置组
	Route::group(['middleware'=>'spwzsz'],function(){

	

	//前台商品展示路由
	Route::get('/home/shangpin/{id}','HomeSpController@shangpin');
	//商品详情路由
	Route::get('/home/spxx/{id}','HomeSpController@xiangqing');

	});

	Route::post('/home/problem/xuansang','HomeController@xuansang');

	//所有标签获取
	Route::post('/home/taghuoqu','HomeController@tags');

	//当前标签获取
	Route::post('/home/tagdangqian','HomeController@dangqian');

	//前台订单路由
	Route::get('/home/dingdanguanli','HomeController@dingdanguanli');

	//前台删除问题路由
	Route::get('/home/problemli/{pid}','HomeController@delete');

	//前台分类列表
	Route::get('/home/cate','HomeController@fenlei');

	//反馈后台资源
	Route::resource('/fankui','FeedBackController');

	//前台提问问题
	Route::get('/home/problem/create','HomeProblemController@create');

	//前台保存问题
	Route::post('/home/problem/store','HomeProblemController@store');

	//前台回答回复
	Route::get('/home/append/create/{id}','HomeProblemController@createreply');
	
	//采纳路由
	Route::get('/home/server','HomeProblemController@caina');
	//点赞路由
	Route::get('/home/dianzan','HomeProblemController@dianzan');
	//点踩路由
	Route::get('/home/chai','HomeProblemController@chai');
	
	//前往用户个人中心
	Route::get('/home/center','HomeProblemController@center');

	//前台问题展示
	Route::get('/home/problem/{id}','HomeProblemController@wtzs');

	//前台提问问题
	Route::resource('/problem','ProblemController');
});

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

//问题追加资源路由
Route::resource('/append','AppendController');
});

//网站开关路由
Route::get('home/wzkg',function(){
	return view('/home/wzkg');
});

//退出登录
Route::get('/admin/logout','AdminController@logout');

//登录页面
Route::get('/admin/login', 'AdminController@login');

//登陆操作
Route::post('/admin/login', 'AdminController@dologin');


//后台路由组
Route::group(['middleware'=>'admin'],function(){

//问题反馈展示普通路由
Route::get('/admin/fankui','AdminController@fankuiindex');

//问题反馈删除普通路由
Route::post('/admin/fankui/{id}','AdminController@fankuishanchu');

//回答问题资源路由
Route::resource('/reply','ReplyController');
//后台路由
Route::get('/admin','AdminController@index');

//提问问题管理资源路由
Route::resource('/problem','ProblemController');

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

//商品分类支援路由
Route::resource('/admin/spcate','AdminSpcateController');

//商品列表资源路由
Route::resource('/admin/shangpin','AdminShangpinController');

//商品网站设置表支援路由
Route::resource('/admin/spwzsz','AdminSpwzszController');

//商城收货地址信息后台管理路由
Route::resource('/admin/shangcheng/shdz','AdminShangchengController');

//后台商城兑换记录路由
Route::resource('/admin/dhjl','AdminDuihuanController');

});

//商城前台路由

/**
 * 需要判断是否登录的路由
 */

//商城收货地址信息路由
Route::get('/home/shangcheng/shdz','HomeShangchengController@index');
//添加地址
Route::get('/home/shangcheng/shdx','HomeShangchengController@store');
//显示地址
Route::get('/home/shangcheng/more','HomeShangchengController@more');
//修改地址路由
Route::get('/home/shangcheng/edit/{id}','HomeShangchengController@edit');
Route::get('/home/shangcheng/update/{id}','HomeShangchengController@update');
//删除
Route::get('/home/shangcheng/delete/{id}','HomeShangchengController@delete');



//前台商城兑换记录路由
Route::get('/home/dhjl/create','HomeDhjlController@index');


//确认收货前台路由
Route::get('/home/qrsh','HomeProblemController@qrsh');

Route::get('home/wzkg',function(){
	return view('/home/wzkg');
});

//找回密码路由
Route::get('/home/zhmm','HomeZhmmController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//新密码
Route::post('/home/xmm','HomeZhmmController@store');

Route::post('/home/mm','HomeZhmmController@update');

//验证旧密码
Route::post('/jiumima','HomeZhmmController@jiumima');



