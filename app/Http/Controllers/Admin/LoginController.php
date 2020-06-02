<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\LoginBlogPost;
use App\Admin;
class LoginController extends Controller
{
    // 登录展示
    public function login(){
        return view('admin.login.login');
    }
    // 确认登录
    public function loginDo(){
        $data=request()->except('_token');
        if(!$data['a_name']){
            return redirect('/login')->with('msg','用户名不能为空');
        }
        if(!$data['a_pwd']){
            return redirect('/login')->with('msg','密码不能为空');
        }
        $info=Admin::where('a_name',$data['a_name'])->first();
        if(!$info){
            return redirect('/login')->with('msg','用户名或密码错误');
        }
        if(decrypt($info->a_pwd)!=$data['a_pwd']){
            return redirect('/login');
        }
        session(['admin'=>$info]);
        return redirect('/inquiry')->with('msg','用户名或密码错误');
    }
    // 注册
    public function loginAdd(){
        return view('admin.login.loginAdd');
    }   
    // 确认注册
    public function loginAddDo(LoginBlogPost $request){
        $data=$request->except('_token');
        $data['a_pwd']=encrypt($data['a_pwd']);
        // dd($data);
        $res=Admin::insert($data);
        if($res){
            return redirect('/login');
        }
    }
}
