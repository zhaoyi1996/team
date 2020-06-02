<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    // 登录展示
    public function login(){
        return view('admin.login.login');
    }
    // 确认登录
    public function loginDo(){

    }
    // 注册
    public function loginAdd(){
        return view('admin.login.loginAdd');
    }   
}
