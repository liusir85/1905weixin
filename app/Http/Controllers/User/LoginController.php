<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Model\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
class LoginController extends Controller
{
    public function addUser(){
        $pass='123';
        $email='893518673@qq.com';
        //随机数--函数
        $user_name=str::random(8);
        //使用密码函数
        $password=password_hash($pass,PASSWORD_BCRYPT);

        $data=[
            'user_name'=>$user_name,
            'password'=>$password,
            'email'=>$email,
        ];

        $uid=UserModel::insertGetId($data);
        var_dump($uid);
    }
}
