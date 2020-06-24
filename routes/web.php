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

Route::get('/info',function(){
				phpinfo();
});

//你好
Route::get('/test/hello','TestController@hello');
Route::get('/test/redis1','TestController@redis1');

Route::get('/test1','TestController@test1');

//商品
Route::get('/goods/detail','Goods\GoodsController@detail');  // 商品详情
//Route::get('/api/goods/info','Goods\GoodsController@goodsInfo');

//Route::get('/api/user/reg','User\UserController@reg');

Route::get('/user/reg','User\IndexController@reg'); // 前台注册
Route::post('/user/regDo','User\IndexController@regDo'); // 后台注册
Route::get('/user/login','User\IndexController@login'); // 前台登录
Route::post('/user/loginDo','User\IndexController@loginDo'); // 后台登录

Route::get('/user/center','User\IndexController@center'); // 用户

//API
Route::post('/api/user/reg','Api\UserController@reg'); // 注册
Route::post('/api/user/login','Api\UserController@login');  //登录
Route::get('/api/user/center','Api\UserController@center');      //个人中心
