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
//    return view('welcome');
//    $file_name="abc.mp3";
//    $info=pathinfo($file_name);
//
//    echo $file_name . '的文件扩展名1: ' . pathinfo($file_name)['extension'];die;
//    echo '<pre>';print_r($info);echo '</pre>';die;

    return view('welcome');
});
Route::get('/bbb','Test\TestController@test');
Route::get('/user/login','User\LoginController@addUser');
Route::get('/info','User\LoginController@info');
Route::get('/user/redis1','User\LoginController@redis1');
Route::get('/dev/redis/del','VoteController@delKey');

//微信开发
Route::get('/wx/test','Weixin\WxController@test');
Route::get('/wx','Weixin\WxController@wechat');
Route::post('/wx','Weixin\WxController@receiv'); //接收微信的推送事件
Route::get('/wx/media','Weixin\WxController@getMedia');//获取临时素材
Route::get('/wx/flush/access_token','Weixin\WxController@flushAccessToken');        //刷新access_token
Route::get('/wx/menu','Weixin\WxController@createMenu');    //创建菜单



//微信公众号
Route::get('/vote','VoteController@index');    //微信投票



