<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
   public function index(){
   echo "1";
   }

  public function curlpost1(){
	  //echo __METHOD__;
	  $user_info=[
		  'user_name'=>'zhangsan',
		  'password'=>'123456',
	  ];

	  $url='http://api.1906.com/test/post1';
//  dd($url);
          $ch=curl_init($url);
   //设置参数选项
   	  curl_setopt($ch,CURLOPT_HEADER,0);
   		curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
  		curl_setopt($ch,CURLOPT_POST,1);
           curl_setopt($ch,CURLOPT_POSTFIELDS,$user_info);
   	//执行curl会话
   $response=curl_exec($ch);
   //curl_exec($ch);
   var_dump($response);
   //捕获错误
  $errno=curl_errno($ch);
   //$error=curl_error($ch);
   	if($errno > 0){
		echo "错误码：".$errno;
		//echo "错误信息：".$error;die;
		die;
	}
   //关闭会话
   	curl_close($ch);
  }
  public function curlpost3(){
  $user_info=[
      'user_name'=>'zhangsan',
      'password'=>'123456',
    ];
  $json=json_encode($user_info);
    $url='http://api.1906.com/test/post3';
//  dd($url);
          $ch=curl_init($url);
   //设置参数选项
      curl_setopt($ch,CURLOPT_HEADER,0);
      curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
      curl_setopt($ch,CURLOPT_POST,1);
      curl_setopt($ch,CURLOPT_POSTFIELDS,$json);
  
    //执行curl会话
   $response=curl_exec($ch);
   //curl_exec($ch);
   var_dump($response);
   //捕获错误
  $errno=curl_errno($ch);
   //$error=curl_error($ch);
    if($errno > 0){
    echo "错误码：".$errno;
    //echo "错误信息：".$error;die;
    die;
  }
   //关闭会话
    curl_close($ch);
  }
}
