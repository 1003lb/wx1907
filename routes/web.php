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
	//echo "今天也是摸鱼的一天";die;
    return view('welcome');
});

Route::any('xx',function(){
	phpinfo();
});

Route::any('ll',function(){
	echo "成功";
});

Route::get('hh', function () {
       echo "1906"."<br>";
       echo date("Y-m-d H:i:s");
});

Route::any('/index','TestController@index');
Route::any('/curlpost1','TestController@curlpost1');//curl测试 form-data

Route::any('/curlpost2','TestController@curlpost2');//curl测试form-urlencoded
Route::any('/curlpost3','TestController@curlpost3');//curl测试raw

