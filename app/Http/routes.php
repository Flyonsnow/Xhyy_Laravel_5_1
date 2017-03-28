<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

if (env('APP_ENV', 'development') == 'development') {
    $route = ['get', 'post'];
    //欢迎页面
    Route::match($route, '/', function () {
        return view('welcome');
    });
    //测试路由
    Route::match($route, '/test', 'TestController@test');

} else {
    $route = ['post'];
}
//js预请求处理
Route::options('/*', function () {})->middleware(['cross_domain']);

//生产路由
Route::match($route, '/test', 'TestController@test');