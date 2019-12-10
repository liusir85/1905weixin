<?php

namespace App\Http\Controllers\Weixin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WxController extends Controller{
    public function wechat()
    {
        $token = '2259b56f5898cd6192c50aa';       //开发提前设置好的 token
        $signature = $_GET["signature"];
        $timestamp = $_GET["timestamp"];
        $nonce = $_GET["nonce"];
        $echostr = $_GET["echostr"];

        $tmpArr = array($token, $timestamp, $nonce);
        sort($tmpArr, SORT_STRING);
        $tmpStr = implode( $tmpArr );
        $tmpStr = sha1( $tmpStr );

        if( $tmpStr == $signature ){        //验证通过
            echo $echostr;
        }else{
            die("not ok");
        }
    }

    //接收微信推送事件
    public function receiv(){

        $log_file="wx.log";
        //将接收的数据记录到日志文件
        $data=json_encode($_POST);
        file_put_contents($log_file,$data,FILE_APPEND);
    }


     //获取用户的基本信息
    public function getUserInfo(){
        $url="https://api.weixin.qq.com/cgi-bin/user/info?access_token=ACCESS_TOKEN&openid=OPENID&lang=zh_CN";
    }
}


