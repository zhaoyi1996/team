<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Admin;
class SystemController extends Controller
{
    // 系统管理展示
    public function system(){
        $admin=session('admin');
        if($admin->a_level!=3){
            dump('权限不够');
            return redirect('/login');
        }
        $data=Admin::get();
        // dd($data);
        return view('admin.system.system',['admin'=>$admin,'data'=>$data]);
    }
    // 删除
    public function systemDel($id){

    }
}
